@include('_partials.header_content',['breadcrumb'=>['Trade Transaction Report','Search']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                <div class="box-header">
                    <h3 class="box-title">Trade Transaction Report</h3>
                </div>
                <form id="form-area" class="form-horizontal form-area">
                    <div class="box-body">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label">
                                    <input type="radio" id="corporate-rb" name="searchBy-rb" value="0" checked>
                                    Corporate
                                </label>
                                <div class="col-md-7 row-corporate">
                                    <select class="form-control" id="corporate" data-error="Please Select Corporate" required>
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row row-date">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label " >Activity Date Range</label>
                                <div class="col-md-7">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                <input type="text" id="dateFrom" name="dateFrom" class="form-control datepicker detail numeric" autocomplete="off" value="" style="width: 150px;">
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
                        </div>
                        <div class="row row-trx-type">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label " >Transaction Type</label>
                                <div class="col-md-7">
                                    <select class="form-control" id="trxType">
                                        <option value=""></option>
                                        <option value="ISSUANCE">Issuance LC</option>
                                        <option value="AMENDMENT">Amendment LC</option>
                                        <option value="RETURNED">Return LC</option>
                                        <option value="RETURNED_AMENDMENT">Return Amendment LC</option>
                                        <option value="CANCEL">Cancellation LC</option>
                                        <option value="PRESENTATION_DOC">Presentation Docs</option>
                                        <option value="PRESENTATION_DOC_CORECTION">Presentation Docs Correction</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row row-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label " >Status</label>
                                <div class="col-md-7">
                                    <select class="form-control" id="status">
                                        <option></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row row-amount">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label " >Amount Range</label>
                                <div class="col-md-7">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto">
                                            <select class="form-control" id="currencyCode" style="width: 110px;">
                                                <option></option>
                                            </select>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="amountFrom" name="amountFrom" class="form-control numeric rate" autocomplete="off" value="" maxlength="40" keypress="numberOnly($event)" style="width: 200px;">
                                        </div>
                                        <div class="col-auto mx-2">
                                            <label class="col-form-label"><strong>to</strong></label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="amountTo" name="amountTo" class="form-control numeric rate" autocomplete="off" value="" maxlength="40" keypress="numberOnly($event)" style="width: 200px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label ">
                                    <input type="radio" id="refNo-rb" name="searchBy-rb" value="1">
                                    Transaction Reference No
                                </label>
                                <div class="col-md-7 row-refNo">
                                    <input type="text" id="refNo" name="refNo" class="form-control" autocomplete="off" value="" maxlength="40" style="display: none">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label ">
                                    <input type="radio" id="bankRefNo-rb" name="searchBy-rb" value="2">
                                    Bank Reference No
                                </label>
                                <div class="col-md-7 row-bankRefNo">
                                    <input type="text" id="bankRefNo" name="bankRefNo" class="form-control" autocomplete="off" value="" maxlength="40" style="display: none">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="float-left">
                            <button type="button" id="search" name="search" class="btn btn-primary">@lang('form.search')</button>
                        </div>
                    </div>
                </form>
            <div class="box-header list-title">
                <h3 class="box-title">Transaction Listing</h3>
            </div>
            <div class="box-body list-title">

                <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                    <thead>
                        <tr>
                            <th align="center"><strong>Activity Date</strong></th>
                            <th align="center"><strong>Transaction Type</strong></th>
                            <th align="center"><strong>Corporate</strong></th>
                            <th align="center"><strong>Transaction Ref No</strong></th>
                            <th align="center"><strong>Bank Reference No</strong></th>
                            <th align="center"><strong>Importer/Buyer</strong></th>
                            <th align="center"><strong>Eksporter/Seller</strong></th>
                            <th align="center"><strong>Master Amount</strong></th>
                            <th align="center"><strong>Transaction Amount</strong></th>
                            <th align="center"><strong>Expiry Date</strong></th>
                            <th align="center"><strong>Shipment Date</strong></th>
                            <th align="center"><strong>Credit Available By</strong></th>
                            <th align="center"><strong>List Status</strong></th>
                            <th align="center"><strong>Amendment Number</strong></th>
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
                            <td align="left"></td>
                            <td align="left"></td>
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
            <div class="box-footer list-title">
                <div class="float-right">
                    <button type="button" id="download" name="download" class="btn btn-primary" onClick="downloadListing();">@lang('form.download')</button>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

<script>
    var id = '{{ $service }}';
    var currentPageTable;
    var currentPageSize;
    var oTable;

    $(document).ready(function() {

        $('#list').hide();
        $('.list-title').hide();

         $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true
        });

        $('.rate').autoNumeric('init',{
            emptyInputBehavior: 'focus',
            digitGroupSeparator        : ',',
            decimalCharacter           : '.',
            decimalCharacterAlternative: '.',
            minimumValue:'0.00',maximumValue:'999999999999999.99'
        });


        $('#dateFrom').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#dateTo').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));

        getCorporate();

        $('#search').on('click', function() {
            currentPageTable= 0;
            currentPageSize = 10;

            searchFunction();
        });

         $('#list tbody').on('click', 'a', function (e) {
            if(e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
            var refNo = $(this).attr('data-code');
            var trxTypeCode = $(this).attr('data-trxTypeCode');
            if (refNo !== undefined) {
                if(trxTypeCode == 'PRESENTATION_DOC' || trxTypeCode == 'PRESENTATION_DOC_CORECTION'){
                    var res = app.setView(id,'detailpresdoc');
                    if(res=='done'){
                        $('#refNo').val(refNo);
                        getDetail();
                    }
                }else{
                    var res = app.setView(id,'detail');
                    if(res=='done'){
                        $('#refNo').val(refNo);
                        getDetail();
                    }
                }
            }
        });

        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',.-'
        });

        // $('.numeric').keypress(function(e){
        //     var regex = new RegExp("^[0-9.]+$");
        //     var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        //     if (regex.test(str)) {
        //         return true;
        //     }

        //     e.preventDefault();
        //     return false;
        // });


        // $('.numeric').autoNumeric('init',{
        //                 emptyInputBehavior: 'zero',
        //                 digitGroupSeparator        : ',',
        //                 decimalCharacter           : '.',
        //                 decimalCharacterAlternative: '.',
        //                 allowDecimalPadding : false,
        //                 minimumValue:'0.00',maximumValue:'999999999999999.99'
        // });

        $('.rate').autoNumeric('init',{
            emptyInputBehavior: 'focus',
            digitGroupSeparator        : ',',
            decimalCharacter           : '.',
            decimalCharacterAlternative: '.',
            minimumValue:'0.00',maximumValue:'999999999999999.99'
        });

        $('input[name="searchBy-rb"]').on('change', function(e){
            if (this.value=='1') {
                $('.row-corporate').hide();
                $('.row-refNo').show();
                $('.row-bankRefNo').hide();
                $('.row-date').hide();
                $('.row-trx-type').hide();
                $('.row-status').hide();
                $('.row-amount').hide();
                $('#bankRefNo').hide();
                $('#typeRefNo').show();
                $('#refNo').show();
                $('#form-area').validator('reset');
            }else if (this.value == '2'){
                $('.row-corporate').hide();
                $('.row-refNo').hide();
                $('.row-bankRefNo').show();
                $('.row-date').hide();
                $('.row-trx-type').hide();
                $('.row-status').hide();
                $('.row-amount').hide();
                $('#refNo').hide();
                $('#typeRefNo').show();
                $('#bankRefNo').show();
                $('#form-area').validator('reset');
            }else {
                $('.row-corporate').show();
                $('.row-refNo').hide();
                $('.row-bankRefNo').hide();
                $('.row-date').show();
                $('.row-trx-type').show();
                $('.row-status').show();
                $('.row-amount').show();
                $('#typeRefNo').hide();
                $('#refNo').hide();
                $('#bankRefNo').hide();
            }
        });

        if(window.searchParam){
            if(window.searchParam.loginCorporateId){
                $("#corporate-rb").attr('checked', 'checked');
                $('#corporate').val(window.searchParam.loginCorporateId);

                $('.row-corporate').show();
                $('.row-refNo').hide();
                $('.row-bankRefNo').hide();
                $('.row-date').show();
                $('.row-trx-type').show();
                $('.row-status').show();
                $('.row-amount').show();
                $('#typeRefNo').hide();
                $('#refNo').hide();
                $('#bankRefNo').hide();

            } else if(window.searchParam.referenceNo){
                $("#refNo-rb").attr('checked', 'checked');
                $('#refNo').val(window.searchParam.referenceNo);

                $('.row-corporate').hide();
                $('.row-refNo').show();
                $('.row-bankRefNo').hide();
                $('.row-date').hide();
                $('.row-trx-type').hide();
                $('.row-status').hide();
                $('.row-amount').hide();
                $('#bankRefNo').hide();
                $('#typeRefNo').show();
                $('#refNo').show();
                $('#form-area').validator('reset');

            } else if(window.searchParam.bankRefNo){
                $("#bankRefNo-rb").attr('checked', 'checked');
                $('#bankRefNo').val(window.searchParam.bankRefNo);

                $('.row-corporate').hide();
                $('.row-refNo').hide();
                $('.row-bankRefNo').show();
                $('.row-date').hide();
                $('.row-trx-type').hide();
                $('.row-status').hide();
                $('.row-amount').hide();
                $('#refNo').hide();
                $('#typeRefNo').show();
                $('#bankRefNo').show();
                $('#form-area').validator('reset');
            }
            searchFunction();
        }

    });

    function searchFunction() {
        var url_action = 'search';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = '';

        var searchBy = $('input[name="searchBy-rb"]:checked').val();

        var value = {
            currentPage: "1",
            pageSize: "10",
            orderBy: {
                "activityDate": "ASC"
            }
        };

        window.searchParam = {
            searchBy : $('input[name="searchBy-rb"]:checked').val(),
            referenceNo : $('#refNo').val(),
            bankRefNo : $('#bankRefNo').val(),
            trxCurrency : $('#currencyCode').val(),
            trxAmountFrom : $('#amountFrom').autoNumeric('get'),
            trxAmountTo : $('#amountTo').autoNumeric('get'),

            loginCorporateId : $('#corporate').val(),
            activityDateFrom : $('#dateFrom').val(),
            activityDateTo : $('#dateTo').val(),
            trxType : $('#trxType').val(),
            status : $('#status').val(),
        }


        searchBy = window.searchParam.searchBy

        if (searchBy == '1') {
            if ($('#refNo').val() == "") {
                flash('warning', 'Transaction Reference Number is mandatory');
                return;
            }
            value.referenceNo = $('#refNo').val();
        } else if (searchBy == '2'){

            if ($('#bankRefNo').val() == "") {
                flash('warning', 'Bank Reference Number is mandatory');
                return;
            }
            value.bankRefNo = $('#bankRefNo').val();
        }else {
            value.trxCurrency = $('#currencyCode').val();
            value.trxAmountFrom = $('#amountFrom').autoNumeric('get');
            value.trxAmountTo = $('#amountTo').autoNumeric('get');


            value.loginCorporateId = $('#corporate').val();
            value.activityDateFrom = $('#dateFrom').val();
            value.activityDateTo = $('#dateTo').val();
            value.trxType = $('#trxType').val();
            value.status = $('#status').val();
        }

        $('#form-area').validator('validate');
        console.log($('#form-area').validator('validate'));
        if($('#form-area').validator('validate').has('.has-error').length!=0){
            return;
        }

        $(this).prop("disabled",true);
        $('#list').show();
        $('.list-title').show();

        oTable = $('#list').DataTable({
            "destroy": true,
            "initComplete": function(settings, json) {
                $('#search').prop("disabled", false);
                if(json.recordsTotal==0){
                    $('#download').hide();
                }else{
                    $('#download').show();
                }
            },
            "select": false,
            "searching": false,
            "lengthMenu": [
                [10, 25, 50],
                [10, 25, 50]
            ],
            "pageLength":currentPageSize,
            "displayStart":currentPageTable * currentPageSize,
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "scrollX": true,
            "columnDefs": [{
                    targets: 0,
                    data: "activityDate",
                    orderable: false
                },
                {
                    targets: 1,
                    data: "trxType",
                    orderable: false
                },
                {
                    targets: 2,
                    data: "corporateName",
                    orderable: false
                },
                {
                    targets: 3,
                    data: {
                        trxRefNo: "trxRefNo",
                        trxType: "trxType"
                    },
                    render: function ( data, type, full, meta ) {
                        return '<a href="javascript:void(0)" data-code="'+data.trxRefNo+'" data-trxTypeCode="'+data.trxTypeCode+'">'+data.trxRefNo+'</a>';
                    },
                    orderable: false
                },
                {
                    targets: 4,
                    data: "bankRefNo",
                    orderable: false
                },
                {
                    targets: 5,
                    data: "importerOrBuyer",
                    orderable: false
                },
                {
                    targets: 6,
                    data: "exporterOrSeller",
                    orderable: false
                },
                {
                    targets: 7,
                    data: {
                        masterAmount: "masterAmount",
                    },
                    render: function ( data, type, full, meta ) {
                        return formatCurrency(data.masterAmount)
                    },
                    orderable: false
                },
                {
                    targets: 8,
                    data: {
                        trxAmount  : "trxAmount"
                    },
                    render: function ( data, type, full, meta ) {
                        return formatCurrency(data.trxAmount)
                    },
                    orderable: false
                },
                {
                    targets: 9,
                    data: "expiryDt",
                    orderable: false
                },
                {
                    targets: 10,
                    data: "shipmentDt",
                    orderable: false
                },
                {
                    targets: 11,
                    data: "creditAvailableName",
                    orderable: false
                },
                {
                    targets: 12,
                    data: "status",
                    orderable: false
                },
                {
                    targets: 13,
                    data: "noa",
                    orderable: false
                }
            ],
            "ajax": {
                url: "fetchDataTable",
                type: 'POST',
                data: function(d) {
                    d.value = value;
                    d.menu = id;
                    d.url_action = url_action;
                    d.action = action;
                    d.result_key = result_key;
                    d.custom_order = custom_order;
                    d._token = '{{ csrf_token() }}';
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    var msg = '{{trans(' form.conn_error ')}}';
                    flash('warning', msg);
                    $('#list').hide();
                    $('.list-title').hide();
                    $('#search').prop("disabled", false);
                },
                complete:function(data){
                    currentPageTable = oTable.page.info().page;
                    currentPageSize = oTable.page.len();
                }
            }
        });
    }

    function getCorporate() {
        var value = {
            code: "",
        };
        var url_action = 'searchCorporate';
        var action = 'SEARCH';
        var menu = '{{ $service }}';
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            async: false,
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
                    unitOption = '<option value="">Select Corporate</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.corporateId + '">' + obj.corporateId + ' - ' + obj.corporateName + '</option>';
                    });
                    $('#corporate').html(unitOption);
                    $('#corporate').select2();

                    getStatus();
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

    function getCurrency() {
        var menu = '{{ $service }}';
        var value = {
            code: "",
            name: "",
            modelCode: "COM_MT_CURRENCY"
        };
        var url_action = 'searchCurrency';
        var action = 'SEARCH';

        $.ajax({
            url: 'getAPIData',
            method: 'post',
            async: false,
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
                    unitOption = '<option value="">Select Currency</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.code + '">'+ obj.code + ' - ' + obj.name + '</option>';
                    });
                    $('#currencyCode').html(unitOption);
                    $('#currencyCode').select2({width: '110px'});

                    if(window.searchParam) {
                        $('#refNo').val(window.searchParam.referenceNo).change();
                        $('#bankRefNo').val(window.searchParam.bankRefNo).change();
                        $('#currencyCode').val(window.searchParam.trxCurrency).change();
                        $('#amountFrom').val(window.searchParam.trxAmountFrom).change();
                        $('#amountTo').val(window.searchParam.trxAmountTo).change();
                        $('#corporate').val(window.searchParam.loginCorporateId).change();
                        $('#dateFrom').val(window.searchParam.activityDateFrom).change();
                        $('#dateTo').val(window.searchParam.activityDateTo).change();
                        $('#trxType').val(window.searchParam.trxType).change();
                        $('#status').val(window.searchParam.status).change();
                    }

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
        var url_action = 'getTransactionStatus';
        var action = 'SEARCH';
        var menu = '{{ $service }}';
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            async: false,
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
                    unitOption = '<option value="">All Status</option>';
                    $.each(result.trxStatus, function (idx, obj) {
                        unitOption += '<option value="' + obj.key + '">' + obj.value + '</option>';
                    });
                    $('#status').html(unitOption);
                    $('#status').select2();

                    getCurrency();
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

    function downloadListing() {
        var menu = '{{ $service }}';
        var value = {
            currentPage: "1",
            pageSize: "10",
            orderBy: {
            "activityDate": "ASC"
            }
        };
        // var searchByRefNo = $('input[name="searchBy-rb"]:checked').val();
        // if (searchByRefNo == '0') {
        //     if($('#typeRefNo').val() == '0'){
        //         value.trxRefNo = $('#refNo').val();
        //     }else{
        //         value.bankRefNo = $('#refNo').val();
        //     }
        // } else {
        //     $('.row-corporate').validator('validate');
        //     if ($('#corporate').val() == "") {
        //         validate = false;
        //         return;
        //     }
        //     value.corporateId = $('#corporate').val();
        //     value.activityDateFrom = $('#dateFrom').val();
        //     value.activityDateTo = $('#dateTo').val();
        //     value.trxType = $('#trxType').val();
        //     value.status = $('#status').val();
        // }

        var searchBy = $('input[name="searchBy-rb"]:checked').val();
        console.log('searchby: ',searchBy);

        if (searchBy == '1') {
            if ($('#refNo').val() == "") {
                flash('warning', 'Transaction Reference Number is mandatory');
                return;
            }
                value.referenceNo = $('#refNo').val();
        } else if (searchBy == '2'){
            if ($('#bankRefNo').val() == "") {
                flash('warning', 'Bank Reference Number is mandatory');
                return;
            }
            value.bankRefNo = $('#bankRefNo').val();
        }else {
            // $('.row-corporate').validator('validate');
            // if ($('#corporate').val() == "") {
            //     validate = false;
            //     return;
            // }

            value.trxCurrency = $('#currencyCode').val();
            value.trxAmountFrom = $('#amountFrom').autoNumeric('get');
            value.trxAmountTo = $('#amountTo').autoNumeric('get');

            value.corporateId = $('#corporate').val();
            value.activityDateFrom = $('#dateFrom').val();
            value.activityDateTo = $('#dateTo').val();
            value.trxType = $('#trxType').val();
            value.status = $('#status').val();
        }

        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : menu,
                url_action : 'downloadListing',
                action : 'DOWNLOAD',
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {

                console.log('data: ', JSON.stringify(data));
                $.ajax({
                    url: 'downloadFile',
                    method: 'POST',
                    cache: false,
                    data:{
                        url_action : 'download',
                        // value:'EXECUTE',
                        service:menu,
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
    function currencyFormat (num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }
    function formatCurrency(value) {
        const [currency, rawAmount] = value.split(" ");

        const sign = rawAmount.startsWith("+") || rawAmount.startsWith("-") ? rawAmount[0] : "";
        const numericAmount = parseFloat(rawAmount);


        const formattedAmount = numericAmount
            .toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });


        return `${currency} ${sign}${formattedAmount}`;
    }
</script>
