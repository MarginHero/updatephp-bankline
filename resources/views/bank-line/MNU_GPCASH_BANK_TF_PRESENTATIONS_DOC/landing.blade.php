@include('_partials.header_content',['breadcrumb'=>['Presentation Docs','Search']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                    <div id="exTab" class="">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="examination-tab" data-bs-toggle="tab" data-bs-target="#tab_examination" type="button" role="tab" aria-controls="tab_examination" aria-selected="true">Presentation Docs Examination</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="status-tab" data-bs-toggle="tab" data-bs-target="#tab_status" type="button" role="tab" aria-controls="tab_status" aria-selected="false">Presentation Docs Status</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab_examination" role="tabpanel" aria-labelledby="examination-tab">
                                <div class="container-fluid box-body">
                                    <div class="row">
                                        <form id="form-area" class="form-horizontal form-area">
                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label text-end">Corporate</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" id="corporate_code" data-error="please select corporate" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label text-end">Transaction Reference No</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="trxRefNo" name="trxRefNo" class="form-control " autocomplete="off" value="" maxlength="40">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label text-end">Amount Range</label>
                                                <div class="col-md-7">
                                                    <div class="row g-2 align-items-center">
                                                        <div class="col-auto">
                                                            <select class="form-control" id="currencyCode" data-error="please select currency" style="width: 110px;">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                        <div class="col-auto">
                                                            <input type="text" id="amountFrom" name="amountFrom" class="form-control numeric numeric-input" autocomplete="off" value="" maxlength="18" style="width: 200px;">
                                                        </div>
                                                        <div class="col-auto mx-2">
                                                            <label class="col-form-label"><strong>to</strong></label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <input type="text" id="amountTo" name="amountTo" class="form-control numeric numeric-input" autocomplete="off" value="" maxlength="18" style="width: 200px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label text-end">Corp Release Date Range</label>
                                                <div class="col-md-7">
                                                    <div class="row g-2 align-items-center">
                                                        <div class="col-auto">
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                <input type="text" id="dateFrom" name="dateFrom" class="form-control datepicker numeric" autocomplete="off" value="" style="width: 150px;">
                                                            </div>
                                                        </div>
                                                        <div class="col-auto mx-2">
                                                            <label class="col-form-label"><strong>to</strong></label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                <input type="text" id="dateTo" name="dateTo" class="form-control datepicker numeric" autocomplete="off" value="" style="width: 150px;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="float-left">
                                        <button type="button" id="search" name="search" class="btn btn-primary">@lang('form.search')</button>
                                    </div>
                                </div>
                                <div class="box-header list-title">
                                    <h3 class="box-title">Presentation Docs Listing</h3>
                                </div>
                                <div class="box-body list-title">
                                    <table id="list1" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                            style="border-collapse:collapse;">
                                        <thead>
                                        <tr>
                                            <th align="center"><strong>Company ID</strong></th>
                                            <th align="center"><strong>Company Name</strong></th>
                                            <th align="center"><strong>Maker ID</strong></th>
                                            <th align="center"><strong>Transaction Reference No.</strong></th>
                                            <th align="center"><strong>Corporate Release Date Range</strong></th>
                                            <th align="center"><strong>Amount</strong></th>
                                            <th align="center"><strong>Number of Correction</strong></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td align="left"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab_status" role="tabpanel" aria-labelledby="status-tab">
                                <div class="container-fluid box-body">
                                    <div class="row">
                                        <form id="form-area" class="form-horizontal form-area">
                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label text-end">Corporate</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" id="corporate_code1" data-error="please select corporate" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label text-end">Transaction Reference No</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="trxRefNo1" name="trxRefNo1" class="form-control" autocomplete="off" value="" maxlength="40">
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-md-3 col-form-label text-end">Status</label>
                                                <div class="col-md-6">
                                                    <select class="form-control" id="status">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="float-left">
                                        <button type="button" id="search2" name="search2" class="btn btn-primary">@lang('form.search')</button>
                                    </div>
                                </div>
                                <div class="box-header list-title">
                                    <h3 class="box-title">Presentation Docs Listing</h3>
                                </div>
                                <div class="box-body list-title">
                                    <table id="list2" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                            style="border-collapse:collapse;">
                                        <thead>
                                        <tr>
                                            <th align="center"><strong>Company ID</strong></th>
                                            <th align="center"><strong>Company Name</strong></th>
                                            <th align="center"><strong>Maker ID</strong></th>
                                            <th align="center"><strong>Transaction Reference No.</strong></th>
                                            <th align="center"><strong>Corporate Release Date Range</strong></th>
                                            <th align="center"><strong>Amount</strong></th>
                                            <th align="center"><strong>Status</strong></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td align="left"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                            <td align="center"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
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

        var url_action
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = {"id": "ASC"};
        var activeTabId

        activeTabId = $('#exTab .nav-tabs button.active').attr('data-bs-target');
        $('#exTab button[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
            var activeTabHref = $(e.target).attr('data-bs-target');
            if (activeTabHref !== activeTabId) {
                $('#list').hide();
                $('.list-title').hide();
            }
            activeTabId = activeTabHref
        });

        $('#list').hide();
        $('.list-title').hide();

        getCurrency();
        getCorporateDroplist();
        getStatus();

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true
        });

        $('#dateFrom').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#dateTo').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));

        // $('#dateFrom1').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        // $('#dateTo1').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));

        $('#search').on('click', function () {
            $(this).prop("disabled",true);
            $('#list').show();
            $('.list-title').show();
            var value
            if (activeTabId === '#tab_examination') {
                url_action = 'searchExamination'
                if($('#amountFrom').val() == ''){
                    $('#amountFrom').val(0)
                }
                if($('#amountTo').val() == ''){
                    $('#amountTo').val(0)
                }
                value = {
                    presentationDocsId: "",
                    corpId: $('#corporate_code').val(),
                    trxRefNo: $('#trxRefNo').val(),
                    currencyCode: $('#currencyCode').val(),
                    amountFrom: $('#amountFrom').val(),
                    amountTo: $('#amountTo').val(),
                    dateFrom: $('#dateFrom').val(),
                    dateTo: $('#dateTo').val(),
                    status: 'PENDING_BANK_VALIDATE',
                    currentPage: "1",
                    pageSize: "20"
                };
                $('#list1').DataTable({
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
                            data: "corpId",
                            orderable: false,
                            className: 'dt-left',
                        },
                        {
                            targets: 1,
                            data: "corpName",
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 2,
                            data: "makerId",
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 3,
                            data: {
                                referenceNo: "referenceNo",
                            },
                            render: function ( data, type, full, meta ) {
                                return '<a href="javascript:void(0)" data-presentationDocsId="'+data.presentationDocsId+'">'+data.referenceNo+'</a>';
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 4,
                            data: {
                                releaseDate: "releaseDate"
                            },
                            render: function ( data, type, full, meta ) {
                                return moment(data.releaseDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 5,
                            data: {
                                transactionAmount: "transactionAmount",
                                transactionCurrency: "transactionCurrency"
                            },
                            render: function ( data, type, full, meta ) {
                                return data.transactionCurrency + ' ' + currencyFormat(data.transactionAmount)
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 6,
                            data: "noOfCorrection",
                            orderable: false,
                            className: 'dt-center',
                        },
                    ],
                    "ajax": {
                        url: "fetchDataTable",
                        type:'POST',
                        data: function ( d ) {
                            d.value = value;
                            d.menu = id;
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
            } else {
                url_action = 'searchStatus'
                value = {
                    presentationDocsId: "",
                    corpId: $('#corporate_code1').val(),
                    trxRefNo: $('#trxRefNo1').val(),
                    // status: 'PENDING_BANK_ACCEPT',
                    statusList: [$('#status').val(),],
                    currentPage: "1",
                    pageSize: "20"
                };

                $('#list2').DataTable({
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
                            data: "corpId",
                            orderable: false,
                            className: 'dt-left',
                        },
                        {
                            targets: 1,
                            data: "corpName",
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 2,
                            data: "makerId",
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 3,
                            data: {
                                referenceNo: "referenceNo",
                            },
                            render: function ( data, type, full, meta ) {
                                return '<a href="javascript:void(0)" data-presentationDocsId="'+data.presentationDocsId+'">'+data.referenceNo+'</a>';
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 4,
                            data: {
                                releaseDate: "releaseDate"
                            },
                            render: function ( data, type, full, meta ) {
                                return moment(data.releaseDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 5,
                            data: {
                                transactionAmount: "transactionAmount",
                                transactionCurrency: "transactionCurrency"
                            },
                            render: function ( data, type, full, meta ) {
                                return data.transactionCurrency + ' ' + currencyFormat(data.transactionAmount)
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 6,
                            data: "presDocStatusName",
                            orderable: false,
                            className: 'dt-center',
                        },
                    ],
                    "ajax": {
                        url: "fetchDataTable",
                        type:'POST',
                        data: function ( d ) {
                            d.value = value;
                            d.menu = id;
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
        });

        $('#search2').on('click', function () {
            $(this).prop("disabled",true);
            $('#list').show();
            $('.list-title').show();
            var value
            if (activeTabId === '#tab_examination') {
                url_action = 'searchExamination'
                value = {
                    presentationDocsId: "",
                    corpId: $('#corporate_code').val(),
                    trxRefNo: $('#trxRefNo').val(),
                    currencyCode: $('#currencyCode').val(),
                    amountFrom: $('#amountFrom').val(),
                    amountTo: $('#amountTo').val(),
                    dateFrom: $('#dateFrom').val(),
                    dateTo: $('#dateTo').val(),
                    currentPage: "1",
                    pageSize: "20"
                };
                $('#list1').DataTable({
                    "destroy": true,
                    "initComplete": function(settings, json) {
                        $('#search2').prop("disabled",false);

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
                            data: "corpId",
                            orderable: false,
                            className: 'dt-left',
                        },
                        {
                            targets: 1,
                            data: "corpName",
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 2,
                            data: "makerId",
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 3,
                            data: {
                                referenceNo: "referenceNo",
                            },
                            render: function ( data, type, full, meta ) {
                                return '<a href="javascript:void(0)" data-presentationDocsId="'+data.presentationDocsId+'">'+data.referenceNo+'</a>';
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 4,
                            data: {
                                releaseDate: "releaseDate"
                            },
                            render: function ( data, type, full, meta ) {
                                return moment(data.releaseDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 5,
                            data: {
                                transactionAmount: "transactionAmount",
                                transactionCurrency: "transactionCurrency"
                            },
                            render: function ( data, type, full, meta ) {
                                return data.transactionCurrency + ' ' + currencyFormat(data.transactionAmount)
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 6,
                            data: "noOfCorrection",
                            orderable: false,
                            className: 'dt-center',
                        },
                    ],
                    "ajax": {
                        url: "fetchDataTable",
                        type:'POST',
                        data: function ( d ) {
                            d.value = value;
                            d.menu = id;
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
                            $('#search2').prop("disabled",false);
                        }
                    }
                });
            } else {
                url_action = 'searchStatus'
                value = {
                    presentationDocsId: "",
                    corpId: $('#corporate_code1').val(),
                    trxRefNo: $('#trxRefNo1').val(),
                    status: $('#status').val(),
                    currentPage: "1",
                    pageSize: "20"
                };

                $('#list2').DataTable({
                    "destroy": true,
                    "initComplete": function(settings, json) {
                        $('#search2').prop("disabled",false);

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
                            data: "corpId",
                            orderable: false,
                            className: 'dt-left',
                        },
                        {
                            targets: 1,
                            data: "corpName",
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 2,
                            data: "makerId",
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 3,
                            data: {
                                referenceNo: "referenceNo",
                            },
                            render: function ( data, type, full, meta ) {
                                return '<a href="javascript:void(0)" data-presentationDocsId="'+data.presentationDocsId+'">'+data.referenceNo+'</a>';
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 4,
                            data: {
                                releaseDate: "releaseDate"
                            },
                            render: function ( data, type, full, meta ) {
                                return moment(data.releaseDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 5,
                            data: {
                                transactionAmount: "transactionAmount",
                                transactionCurrency: "transactionCurrency"
                            },
                            render: function ( data, type, full, meta ) {
                                return data.transactionCurrency + ' ' + currencyFormat(data.transactionAmount)
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 6,
                            data: "presDocStatusName",
                            orderable: false,
                            className: 'dt-center',
                        },
                    ],
                    "ajax": {
                        url: "fetchDataTable",
                        type:'POST',
                        data: function ( d ) {
                            d.value = value;
                            d.menu = id;
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
                            $('#search2').prop("disabled",false);
                        }
                    }
                });
            }
        });

        $('#list1 tbody').on('click', 'a', function (e) {
            if(e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
            var dateFrom
            var dateTo
            var presentationDocsId = $(this).attr('data-presentationDocsId');

            if (presentationDocsId !== undefined) {
                var res = app.setView(id,'detail');
                if(res=='done'){
                    $('#presentationDocsId').val(presentationDocsId);
                    $('#tabActive').val(activeTabId);
                    getDetail();
                }
            }
        });
        $('#list2 tbody').on('click', 'a', function (e) {
            if(e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
            var dateFrom
            var dateTo
            var presentationDocsId = $(this).attr('data-presentationDocsId');

            if (presentationDocsId !== undefined) {
                var res = app.setView(id,'detail');
                if(res=='done'){
                    $('#presentationDocsId').val(presentationDocsId);
                    $('#tabActive').val(activeTabId);
                    getDetail();
                }
            }
        });
        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',._-'
        });

        $('.numeric-input').numeric({
            allowMinus: false,
            allowThouSep : false,
            allowDecSep : false,
        });
    });

    function getCurrency() {
        var value = {
            code: "",
            name: "",
            modelCode: "COM_MT_CURRENCY"
        };
        var url_action = 'searchCurrencyForDroplist';
        var action = 'SEARCH';
        var menu = 'MNU_GPCASH_BANK_TF_PRESENTATIONS_DOC';

        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : menu,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    unitOption = '<option value="">All</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.code + '">'+ obj.code + ' - ' + obj.name + '</option>';
                    });
                    $('#currencyCode').html(unitOption);
                    $('#currencyCode').select2({width: '110px'});

                    $('#currencyCode1').html(unitOption);
                    $('#currencyCode1').select2({width: '110px'});

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

    function getCorporateDroplist() {
		var menu = '{{ $service }}';
        var value = {
        };
        var url_action = 'searchCorporateForDroplist';
        var action = 'SEARCH';
        var menu = menu;
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : menu,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {

                    unitOption = '<option value="" selected="selected">select corporate</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="'+ obj.corporateId +'"data-name = "'+obj.corporateName+'">'+obj.corporateId + " - " + obj.corporateName + '</option>';
                    });

					$('#corporate_code').html(unitOption);
                    $('#corporate_code').select2({width: '100%'});
                    $('#corporate_code1').html(unitOption);
                    $('#corporate_code1').select2({width: '100%'});
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

    function getStatus() {
        var value = {
            corporateId: ""
        };
        var url_action = 'getStatus';
        var action = 'SEARCH';
        var menu = '{{ $service }}';
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : menu,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result) {
                    console.log(result.docStatus);
                    unitOption = '<option value="">All Status</option>';
                    $.each(result.docStatus, function (idx, obj) {
                        unitOption += '<option value="' + obj.key + '">' + obj.value + '</option>';
                    });
                    $('#status').html(unitOption);
 		    $('#status').select2({width: '100%'});
                } else {
                    flash('warning', result.message);
                }
            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {}
        });
    }

    function currencyFormat (num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

</script>
