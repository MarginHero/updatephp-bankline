@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'Search']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Suspect Remittance  Filter</h3>
                </div>
                <form class="form-horizontal">

                <div class="box-body">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="mb-3 row">
                                <div class="col-md-3" >
                                    <input type="radio" id="corporate-rb" name="searchby-rb" value="1" checked>
                                    <label class="col-form-label text-end"  >Corporate ID</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="corporateId" name="corporateId" class="form-control state_corporate" autocomplete="off" value="" maxlength="100">
                                </div>
                            </div>
                        </div>
                        <div class="row state_corporate">
                            <div class="mb-3 row">
                                <div class="col-md-3" >
                                    <label class="col-form-label text-end" >Corporate Name</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="name" name="name" class="form-control" autocomplete="off" value="" maxlength="100">
                                </div>
                            </div>
                        </div>
                        <div class="row row-date">
                            <div class="mb-3 row">
                                <div class="col-md-3" >
                                    <label  >Date Range</label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                <input type="text" id="dateFrom" name="dateFrom"
                                                       class="form-control datepicker detail numeric"
                                                       autocomplete="off" value="">
                                            </div>
                                        </div>
                                        <div class="col-auto mx-2">
                                            <label class="col-form-label"><strong>to</strong></label>
                                        </div>
                                        <div class="col-auto">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                <input type="text" id="dateTo" name="dateTo"
                                                       class="form-control datepicker numeric" autocomplete="off"
                                                       value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <div class="col-md-3" >
                                    <input type="radio" id="createddt-rb" name="searchby-rb" value="0">
                                    <label class="col-form-label text-end"  >Transaction Reference No</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="refNo" name="refNo" class="form-control state_refno" autocomplete="off" value="" maxlength="16">
                                </div>
                            </div>
                        </div>
                       </div>
                </div>

                <div class="box-footer">
                    <button type="button" id="search" name="search" class="btn  btn-primary float-left">@lang('form.search')</button>


                </div>

                </form>
                    <div class="box-header list-title">
                        <h3 class="box-title">Outstanding Listing</h3>
                    </div>
                    <div class="box-body list-title">
                        <div class="container-fluid">
                           <div class="row">
                                <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                       style="border-collapse:collapse;">
                                    <thead>
                                    <tr>
                                        <th align="center"><strong>Transaction Reference No.</strong></th>
                                        <th align="center"><strong>Submitted Date</strong></th>
                                        <th align="center"><strong>Corporate ID</strong></th>
                                        <th align="center"><strong>Corporate Name</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
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
    </div>

</section>

<script>


    $(document).ready(function () {
        var id = '{{ $service }}';

        var url_action = 'search';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = '';
        $('.state_refno').hide();
        $('#list').hide();
        $('.list-title').hide();
        $('#dateFrom').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#dateTo').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));
        console.log(window.searchParam,'windowsearh')

        if(window.searchParam){
            if(window.searchParam.searchBy == '0'){
                $("#createddt-rb").attr('checked', 'checked');
                $('#refNo').val(window.searchParam.refNo);
                $('.state_refno').show();
                $('.state_corporate').hide();
                $('.row-date').hide();
            }else{
                $('#corporateId').val(window.searchParam.corporateId);
                $('#name').val(window.searchParam.name);
                $('.state_refno').hide();
                $('.state_corporate').show();
                $('.row-date').show();
            }
        }
        $('#add').on('click', function () {
            app.setView(id,'add');
            $('#type').val('add');
            getData('','');
        });

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true,
        });

        $('#search').on('click', function () {
            onSearch();
        });


        $('#list tbody').on('click', 'a', function (e) {
            if(e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
            var refNo  = $(this).attr('data-refNo');

            preloaderVisible(true);
            if (refNo !== undefined) {
                if (id !== undefined) {
                    console.log(id,'iddddd')
                    var res = app.setView(id,'detail');
                    if(res=='done'){

                        $('#refNo').val(refNo);
                        console.log(refNo,'rrr')
                        $('#service').val(id);
                        getDetail();
                    }
                }
            }
        });
        $('div.dt-buttons').css('float','right');
        $('a.dt-button').addClass('btn btn-primary');
        $('input[type=text]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',.-'
        });
    });


    $('input[name="searchby-rb"]').on('change', function(e) {
        $("#vue-warning").hide();
        if(this.value=='0'){
            $('.state_refno').show();
            $('.state_corporate').hide();
            $('.row-date').hide();
        }else{
            $('.state_refno').hide();
            $('.state_corporate').show();
            $('.row-date').show();
        }
    });

    function onSearch() {
        $("#vue-warning").hide();
        var url_action = 'search';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = '';

        $(this).prop("disabled",true);
        var searchBy = $('input[name="searchby-rb"]:checked').val();
        window.searchParam = {
            corporateId:$('#corporateId').val(),
            name:$('#name').val(),
            refNo:$('#refNo').val(),
            searchBy:searchBy,
        }
        var value = {};
        if(searchBy=='0'){
            var refNo = $('#refNo').val();
            if( refNo ==''){
                flash('warning', 'Reference Number is mandatory');
                return;
            }
            value = {
                "referenceNo": '%' + refNo + '%',
            }

        }else{
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
            var corporateId = $('#corporateId').val();
            var name = $('#name').val();
            value = {
                "corporateId": corporateId,
                "coporateName": '%' + name + '%'
            }
            value.dateFrom = $('#dateFrom').val();
            value.dateTo = $('#dateTo').val();
        }
        $('#list').show();
        $('.list-title').show();
        $('#list').DataTable({
            "destroy": true,
            "initComplete": function(settings, json) {
                $('#search').prop("disabled",false);
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
                    data: "referenceNo",
                    render: function ( data, type, full, meta ) {
                        return '<a href="javascript:void(0)" data-refNo="'+full.referenceNo+'">'+full.referenceNo+'</a>';
                    },
                    orderable: true
                },
                {
                    targets: 1,
                    data: "createdDate",
                    orderable: true
                },
                {
                    targets: 2,
                    data: "corporate.id",
                    orderable: true,
                    render: function ( data, type, full, meta ) {
                        return full.corporateId;
                    },
                },
                {
                    targets: 3,
                    data: "corporate.name",
                    orderable: true,
                    render: function ( data, type, full, meta ) {
                        return full.corporateName;
                    },
                },
            ],
            "ajax": {
                url: "fetchDataTable",
                type:'POST',
                data: function ( d ) {
                    d.value = value;
                    d.menu = '{{ $service }}';
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
                    $('#search').prop("disabled",false);
                }
            }
        });
    }
</script>
