﻿@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'Search']])

<style>
    .form-control.error {
        border-color: #dd4b39 !important;
        box-shadow: 0 0 0 0.2rem rgba(221, 75, 57, 0.25) !important;
    }

    .help-block.with-errors {
        color: #dd4b39 !important;
        font-size: 12px;
        margin-top: 5px;
        display: block !important;
        font-weight: bold;
    }

    .help-block.with-errors span {
        color: #dd4b39 !important;
    }

    .has-error .form-control,
    .has-danger .form-control {
        border-color: #dd4b39 !important;
        box-shadow: 0 0 0 0.2rem rgba(221, 75, 57, 0.25) !important;
    }

    .ig-dateFrom.has-error .input-group,
    .ig-dateFrom.has-danger .input-group,
    .ig-dateTo.has-error .input-group,
    .ig-dateTo.has-danger .input-group {
        border: 2px solid #dd4b39 !important;
        border-radius: 4px;
    }

    .e-dateFrom span,
    .e-dateTo span {
        color: #dd4b39 !important;
        font-weight: bold;
    }

    .btn-group {
        position: relative;
        display: inline-block;
        vertical-align: middle;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 120px;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 4px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    }

    .dropdown-menu.show {
        display: block !important;
    }

    .dropdown-menu > li > a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: 400;
        line-height: 1.42857143;
        color: #333;
        white-space: nowrap;
        cursor: pointer;
        text-decoration: none;
    }

    .dropdown-menu > li > a:hover,
    .dropdown-menu > li > a:focus {
        color: #262626;
        text-decoration: none;
        background-color: #f5f5f5;
    }
</style>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                <div class="box-header">
                    <h3 class="box-title">Report Filter</h3>
                </div>
                <form class="form-horizontal" id="form-area">

                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end"><strong>Transaction Date</strong></label>
                                    <div class="col-md-6">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-auto">
                                                <div class="input-group ig-dateFrom">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="dateFrom" name="dateFrom" class="form-control datepicker detail numeric" autocomplete="off" value="" data-error="This field is mandatory.">
                                                </div>
                                                <div class="help-block with-errors e-dateFrom"></div>
                                            </div>
                                            <div class="col-auto mx-2">
                                                <label class="col-form-label"><strong>to</strong></label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="input-group ig-dateTo">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="dateTo" name="dateTo" class="form-control datepicker numeric" autocomplete="off" value="" data-error="This field is mandatory.">
                                                </div>
                                                <div class="help-block with-errors e-dateTo"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div>
                            <div class="float-left">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Request Download <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" id="downloadFormat">
                                    </ul>
                                </div>
                            </div>
                            <div class="float-right">
                                <button type="button" id="search" name="search" class="btn btn-primary">Refresh</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="box-header list-title">
                <h3 class="box-title">Pending Download</h3>
            </div>

            <div class="box-body list-title">
                <div class="container-fluid">
                    <div class="row">
                        <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                               style="border-collapse:collapse;">
                            <thead>
                            <tr>
                                <th align="center"><strong>No</strong></th>
                                <th align="center"><strong>Request Date Time</strong></th>
                                <th align="center"><strong>File Type</strong></th>
                                <th align="center"><strong>File Name</strong></th>
                                <th align="center"><strong>File Status</strong></th>
                                <th align="center"><strong></strong></th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    var service = '{{ $service }}';

    $(document).ready(function () {

        var url_action = '';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = {"referenceNo": "DESC"};
        var data_code = '';

        getFormatDroplist();
        searchReport();

        $('.e-dateFrom').html('').hide();
        $('.e-dateTo').html('').hide();

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose: true,
            todayHighlight: true,
            orientation: "bottom auto",
            container: 'body'
        }).on('show', function(e) {
            var $input = $(this);
            var $picker = $('body > .datepicker-dropdown');
            var offset = $input.closest('.input-group').offset();
            var height = $input.closest('.input-group').outerHeight();
            $picker.css({
                top: (offset.top + height + window.scrollY) + 'px',
                left: offset.left + 'px'
            });
            $picker.removeClass('datepicker-orient-top').addClass('datepicker-orient-bottom');
        });

        $('.datepicker').on('click', function(e) {
            e.stopPropagation();
        });

        $(document).on('click', '.datepicker-dropdown', function(e) {
            e.stopPropagation();
        });

        $('#dateFrom').on("change", function () {
            $('.ig-dateFrom').removeClass('has-error has-danger');
            $('.e-dateFrom').html('').hide();
        });

        $('#dateTo').on("change", function () {
            $('.ig-dateTo').removeClass('has-error has-danger');
            $('.e-dateTo').html('').hide();
        });

        $('#dateFrom').val(moment(new Date()).subtract(3, 'month').format("DD/MM/YYYY"));
        $('#dateTo').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));

        setTimeout(function(){
            window.$('.dropdown-toggle').dropdown();
        },200)

        $(document).off('click', '#downloadFormat a').on('click', '#downloadFormat a', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var format = $(this).data('format');
            $('.dropdown-menu').hide();
            requestDownload(format);
        });

        $(document).off('click', '.dropdown-toggle').on('click', '.dropdown-toggle', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var $menu = $(this).next('.dropdown-menu');

            if ($menu.is(':visible')) {
                $menu.hide();
            } else {
                $('.dropdown-menu').hide();
                $menu.show();
            }
            return false;
        });

        $(document).on('click', function(e) {
            var $target = $(e.target);
            if (!$target.closest('.btn-group').length &&
                !$target.hasClass('datepicker') &&
                !$target.closest('.datepicker').length &&
                !$target.hasClass('datepicker-dropdown') &&
                !$target.closest('.datepicker-dropdown').length) {
                $('.dropdown-menu').hide();
            }
        });

        $('#search').on('click', function () {
            searchReport();
        });
    });

    function searchReport() {
        $("#vue-success").find(".close").trigger("click");

        setTimeout(function(){

            var validate = true;


            var value = {};
            var url_action = 'search';
            var action = 'SEARCH';
            var result_key = 'result';
            var custom_order = '';

            value = {
                orderBy: {"createdDate": "ASC"},
                currentPage: "1",
                pageSize: "20"
            };

            if(validate){
                $('#list').show();
                $('.list-title').show();
                var index = 1;
                $('#list').DataTable({
                    "destroy": true,
                    "initComplete": function(settings, json) {

                    },
                    "drawCallback": function () {
                        index=1;
                    },
                    "select": false,
                    "searching": false,
                    "lengthMenu": [[10, 25, 50], [10, 25, 50]],
                    "processing": true,
                    "serverSide": true,
                    "autoWidth": false,
                    "ScrollX": '100%',
                    "columnDefs": [
                        {
                            targets: 0,
                            data: "createdDate",
                            render: function ( data, type, full, meta ) {
                                var table = $('#list').DataTable(); //note that you probably already have this call
                                var info = table.page.info();
                                return info.start + (index++);
                            },
                            orderable: false
                        },
                        {
                            targets: 1,
                            data: "createdDate",
                            orderable: false
                        },
                        {
                            targets: 2,
                            data: "fileType",
                            orderable: false
                        },
                        {
                            targets: 3,
                            data: "fileName",
                            orderable: false
                        },
                        {
                            targets: 4,
                            data: "statusDescription",
                            orderable: false
                        },
                        {
                            targets: 5,
                            data: {isReadyForDownload:"isReadyForDownload", id: "id"},
                            width: "15%",
                            render: function ( data, type, full, meta ) {
                                var disabled = 'disabled';
                                if(data.isReadyForDownload == 'Y'){
                                    disabled = '';
                                }
                                return '<button data-id="'+data.id+'" class="btn btn-primary" style="width:125px;" align="center" onClick="downloadReport(\''+data.id+'\');"' +disabled+'>Download</button>';
                            },
                            orderable: false
                        }
                    ],
                    "ajax": {
                        url: "fetchDataTable",
                        type:'POST',
                        data: function ( d ) {
                            d.value = value;
                            d.menu = service;
                            d.url_action = url_action;
                            d.action = action;
                            d.result_key = result_key;
                            d.custom_order = custom_order;
                            d._token = '{{ csrf_token() }}';
                        },
                        error:function (jqXHR, textStatus, errorThrown) {

                            var msg = '{{trans('form.conn_error')}}';
                            flash('warning', msg);
                            $('#list').hide();
                            $('.list-title').hide();
                        }
                    }
                });
            }
        });
    }

    function getFormatDroplist() {

        var url_action = 'fileFormat';
        var action = 'SEARCH';
        var menu = service;
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : '',
                menu : menu,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                console.log('getFormatDroplist response:', result);
                if (result.status=="200") {
                    formats = '';
                    $.each(result.fileFormats, function (idx, obj) {
                        formats += '<li><a href="#" data-format="' + obj.name + '">' + obj.name + '</a></li>';
                    });
                    $('#downloadFormat').html(formats);
                } else {
                    flash('warning', result.message);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });

    }

    function requestDownload(fileFormat){
        // Clear previous errors
        $('#dateFrom, #dateTo').removeClass('error');
        $('.e-dateFrom').html('').hide();
        $('.e-dateTo').html('').hide();
        $('.ig-dateFrom').removeClass('has-error has-danger');
        $('.ig-dateTo').removeClass('has-error has-danger');

        var value = {
            fromDate : "",
            toDate : "",
            fileFormat: fileFormat,
        };

        var dateFrom=$('#dateFrom').val();
        var dateTo=$('#dateTo').val();
        if(moment(dateFrom, "DD/MM/YYYY").isAfter(moment(dateTo, "DD/MM/YYYY"))){
            flash('warning', 'From Date cannot be greater than To Date');
            return;
        }
        if(moment(dateTo, "DD/MM/YYYY").isAfter(moment(new Date(), "DD/MM/YYYY").add(1,'days'))){
            flash('warning', 'To date cannot be greater than today');
            return;
        }

        var validate = true;

        if ($('#dateFrom').val() == '') {
            $('#dateFrom').addClass('error');
            $('.ig-dateFrom').addClass('has-error has-danger');
            $('.e-dateFrom').html('<span style="color: red;">Please select From Date</span>').show();
            return;
        }
        if ($('#dateTo').val() == '') {
            $('#dateTo').addClass('error');
            $('.ig-dateTo').addClass('has-error has-danger');
            $('.e-dateTo').html('<span style="color: red;">Please select To Date</span>').show();
            return;
        }
        if(checkDate()>0){
            var content ='{{trans('form.alert_date_compare_report')}}';
            $.alert({
                title: '{{trans('form.warning')}}',
                content: content
            });
            return;
        }
        if(!is3MonthValid()){
            var content ='{{trans('form.alert_date_3_month_report')}}';
            $.alert({
                title: '{{trans('form.warning')}}',
                content: content
            });
            return;
        }
        value.fromDate = $('#dateFrom').val();
        value.toDate = $('#dateTo').val();


        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : service,
                url_action : 'submit',
                action : 'REQUEST_DOWNLOAD',
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    noRef=result.referenceNo;
                    flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                    searchReport();
                } else {
                    flash('warning', result.message);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                flash('warning', 'Form Submit Failed');
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }
        });
    }
    function checkDate(){

        var count = 0;
        var date1 = $("#dateFrom").data('datepicker').getFormattedDate('yyyy/mm/dd');
        var date2 = $("#dateTo").data('datepicker').getFormattedDate('yyyy/mm/dd');
        if(date1 == '')
            date1 = moment(new Date()).subtract(3, 'month').format("YYYY/MM/DD");

        if(date2 == '')
            date2 = moment(new Date(),"DD/MM/YYYY hh:mm").format("YYYY/MM/DD")

        if(date2!=''){
            var x = new Date(date1);
            var y = new Date(date2);
            if(x>y){
                count = 1;
            }
        }


        return count;

    }
    function is3MonthValid(){
        var date1 = $("#dateFrom").data('datepicker').getFormattedDate('yyyy-mm-dd 23:59:59');
        if(date1 == '')
            date1 = moment(new Date()).subtract(3, 'month').format("YYYY-MM-DD 23:59:59");
        return moment().diff(date1, "months")<=2;

    }
    function downloadReport(downloadId) {


        var value = {
            downloadId : downloadId,
        };


        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : service,
                url_action : 'downloadReport',
                action : 'DOWNLOAD',
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {

                $.ajax({
                    url: 'downloadFile',
                    method: 'POST',
                    cache: false,
                    data:{
                        url_action : 'download',
                        // value:'EXECUTE',
                        service:service,
                    },
                    xhrFields: {
                        withCredentials: true,
                        responseType:'arraybuffer'
                    },
                    success: function (response, status, xhr) {
                        var filename = "";
                        var disposition = xhr.getResponseHeader('Content-Disposition');
                        if (disposition && disposition.indexOf('attachment') !== -1) {
                            var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                            var matches = filenameRegex.exec(disposition);
                            if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                        }

                        var type = xhr.getResponseHeader('Content-Type');
                        var blob = new Blob([response], { type: type });
                        saveAs(blob, filename);


                    }

                });

            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });

    }

</script>
