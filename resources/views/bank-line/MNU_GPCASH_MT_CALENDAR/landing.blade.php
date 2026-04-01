@include('_partials.header_content',['breadcrumb'=>['Calendar Engine','Bank Calendar']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                <div class="box-header">
                    <h3 class="box-title">Bank Calendar</h3>
                </div>
                <form class="form-horizontal">

                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row mb-3">
                            <div class="col-auto me-2">
                                <select id="monthDropdown" class="form-select" style="width: auto; min-width: 150px;"></select>
                            </div>
                            <div class="col-auto">
                                <select id="yearDropdown" class="form-select" style="width: auto; min-width: 120px;"></select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>

                </form>
           </div>
        </div>
    </div>

</section>

<script>
    $(document).ready(function () {
        var id = '{{ $service }}';
        var events_calendar = [];

        function initDropdowns() {
            var monthDropdown = $('#monthDropdown');
            var yearDropdown = $('#yearDropdown');
            var currentYear = new Date().getFullYear();

            // Isi dropdown bulan (Januari - Desember)
            var monthNames = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];
            for (var i = 0; i < 12; i++) {
                monthDropdown.append($('<option>', {
                    value: i,
                    text: monthNames[i]
                }));
            }

            // Isi dropdown tahun (5 tahun ke belakang & 5 tahun ke depan)
            for (var i = currentYear - 5; i <= currentYear + 5; i++) {
                yearDropdown.append($('<option>', {
                    value: i,
                    text: i
                }));
            }

            // Atur nilai default ke bulan dan tahun saat ini
            monthDropdown.val(new Date().getMonth());
            yearDropdown.val(currentYear);
        }

        // Panggil fungsi inisialisasi dropdown
        initDropdowns();

        /* Initialize fullCalendar*/
        $('#calendar').fullCalendar({
            themeSystem:'bootstrap3',
            lazyFetching:false,
            navLinks: false,
            header:{
                left:   'prev today next',
                center: 'title',
                right:  'btn_addHoliday'
            },
            customButtons: {
                btn_addHoliday: {
                    text: 'Add Holiday',
                    click: function() {
                        var res = app.setView(id,'add');
                        if(res=='done'){
                            $('#type').val('add');
                            setForm('','');
                        }
                    }
                }
            },
            displayEventTime: false,
            eventLimit: true, // for all non-agenda views
            views: {
                month: {
                    eventLimit: 3 // adjust to 6 only for agendaWeek/agendaDay
                }
            },
            events: function(start, end, timezone, callback) {
                var date = new Date($('#calendar').fullCalendar('getDate'));
                var month_int = date.getMonth()+1;
                var year_int = date.getFullYear();
                var current_month = zeroPad(month_int,2);
                var current_year = year_int;
                var loginId = '<?php echo Session::get('userId') ?>';
                var value = {
                    month: month_int,
                    year: year_int,
                    loginId: loginId,
                    currentPage: "1",
                    pageSize: "20",
                    orderBy: {"holidayDate": "ASC"}
                };
                var url_action = 'search';
                var action = 'SEARCH';
                var result_key='result';

                jQuery.ajax({
                    url: 'getAPIData',
                    method: 'post',
                    cache:false,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        value : value,
                        menu : id,
                        url_action : url_action,
                        action : action,
                        result_key : result_key,

                        _token : '{{ csrf_token() }}'
                    },
                    success: function(data) {
                        events_calendar = [];
                        if(!!data.result){

                            $.map( data.result, function( r ) {

                                var event_backColor = '#FFCFDB';
                                var event_textColor = '#FF0000';
                                if(r.type=='EVENT'){
                                    event_backColor = '#DAE3F3';
                                    event_textColor ='#0070C0';
                                } else if(r.type=='CURRENCY'){
                                    event_backColor = '#F3EADA';
                                    event_textColor = '#FCA000';
                                }
                                if(!!r.holidayDate) {
                                    events_calendar.push({
                                        title: r.holidayDscp,
                                        start: moment(r.holidayDate, 'DD/MM/YYYY').utc(7).format("YYYY-MM-DDTHH:mm:ss.SSS[Z]"),
                                        type: r.type,
                                        ccy: r.currencyCode,
                                        backgroundColor:event_backColor,
                                        textColor:event_textColor

                                    });
                                }
                            });
                        }
                        callback(events_calendar);
                        //Add custom hyperlink day
                        $('.fc-day-number').each(function(){
                            var day_number = $(this);
                            var data_date = day_number.parent().data('date');
                            $.each(events_calendar, function (key,val) {
                                var event_date = moment(val.start).format('YYYY-MM-DD');
                                if(data_date===event_date){
                                    day_number.css("text-decoration","underline");
                                    day_number.hover(function() {
                                        $(this).css('cursor','pointer');
                                    });
                                }
                            });


                        });


                }
            });
            },
            viewRender: function(view, element) {
                // Update dropdowns when calendar view changes (via prev/next/today buttons)
                $('#monthDropdown').val(view.intervalStart.month());
                $('#yearDropdown').val(view.intervalStart.year());

                // Replace prev/next button text with Font Awesome icons
                setTimeout(function() {
                    $('.fc-prev-button').html('<i class="fa fa-chevron-left"></i>');
                    $('.fc-next-button').html('<i class="fa fa-chevron-right"></i>');
                }, 50);
            },
            dayClick: function(date, jsEvent, view) {

                var events = $('#calendar').fullCalendar('clientEvents');
                var today_date = moment(date.toDate()).utc(0).format("YYYY-MM-DDTHH:mm:ss.SSS[Z]");
                var today_event = [];
                for (var i = 0; i < events.length; i++) {
                    if (moment(date).isSame(moment(events[i].start))) {
                        //console.log(events_calendar);
                        if(!!events_calendar){

                            $.map( events_calendar, function( r ) {

                                var holidayDate = r.start;

                                if(holidayDate===today_date) {
                                    today_event.push({
                                        title: r.title,
                                        start: moment(holidayDate).format('DD/MM/YYYY'),
                                        type: (r.type != 'CURRENCY' ? r.type : (r.type + '  -  ' + r.ccy))
                                    });
                                }
                            });
                        }
                        //console.log(today_date);
                        var res = app.setView(id,'detail');
                        if(res=='done'){
                            getMatrix(moment(today_date).format('DD/MM/YYYY'),today_event);
                        }
                        break;
                    }
                    else if (i == events.length - 1) {
                        break;
                    }
                }
            }

        });

        $('#monthDropdown, #yearDropdown').on('change', function () {
            var selectedMonth = parseInt($('#monthDropdown').val());
            var selectedYear = parseInt($('#yearDropdown').val());

            // Set kalender ke bulan & tahun yang dipilih
            $('#calendar').fullCalendar('gotoDate', moment().year(selectedYear).month(selectedMonth));
        });


        /*fullCalendar Styling*/
        $("<style type='text/css'> " +
            ".fc-day-header{ background-color: #1f71b9 !important; } " +
            ".fc-day-header{ color: #ffffff !important; } " +
            ".fc-day{ background-color: #ffffff !important; } " +
            ".fc-day.fc-today{ background-color: rgb(221,235,247) !important; } " +
            ".alert-info{ background-color: rgb(221,235,247) !important; } " +
            ".fc-day-header.fc-sun{ background-color: #ff7e79 !important; } " +
            ".fc-day-header.fc-sat{ background-color: #ff7e79 !important; } " +
            ".fc-prev-button{ background-color: #ffffff !important; border-color: #1f71b9 !important; color: #1f71b9 !important; } " +
            ".fc-next-button{ background-color: #ffffff !important; border-color: #1f71b9 !important; color: #1f71b9 !important; } " +
            ".fc-today-button{ background-color: #ffffff !important; border-color: #1f71b9 !important; color: #1f71b9 !important; } " +
            ".fc-prev-button:hover, .fc-next-button:hover, .fc-today-button:hover{ background-color: #1f71b9 !important; color: #ffffff !important; } " +
            ".fc-icon { display: inline-block; height: 1em; line-height: 1; font-size: 1em; } " +
            ".fc-icon-left-single-arrow:after { font-family: 'Font Awesome 5 Free'; content: '\\f053'; font-weight: 900; } " +
            ".fc-icon-right-single-arrow:after { font-family: 'Font Awesome 5 Free'; content: '\\f054'; font-weight: 900; } " +
            ".fc-button .fc-icon { position: relative; top: 0; margin: 0 .2em; vertical-align: middle; } " +

            "</style>").appendTo("head");

        $(".fc-btn_addHoliday-button").addClass('btn-info').removeClass('btn-default'); // Button 'Add Holiday' Styling

        // Replace prev/next button text with Font Awesome icons
        setTimeout(function() {
            $('.fc-prev-button').html('<i class="fa fa-chevron-left"></i>');
            $('.fc-next-button').html('<i class="fa fa-chevron-right"></i>');
        }, 100);

        $('#search').on('click', function () {

            $(this).prop("disabled",true);
            $('#list').show();
            $('.list-title').show();
            var value = {
                code: $('#code').val(),
                name: $('#name').val(),
                currentPage: "1",
                pageSize: "20",
                orderBy: {"code": "ASC"}
            };

        });

    });

    function zeroPad(num, places) {
        var zero = places - num.toString().length + 1;
        return Array(+(zero > 0 && zero)).join("0") + num;
    }



</script>
