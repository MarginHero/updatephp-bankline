@include('_partials.header_content',['breadcrumb'=>['Cancellation LC','Search']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                <div class="box-header">
                    <h3 class="box-title">Cancellation LC SEARCH</h3>
                </div>
                <form class="form-horizontal" id="form-area">

                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
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
                                    <input type="text" id="trxRefNo" name="trxRefNo" class="form-control" autocomplete="off" value="" maxlength="40">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Bank Reference No</label>
                                <div class="col-md-6">
                                    <input type="text" id="bankRefNo" name="bankRefNo" class="form-control" autocomplete="off" value="" maxlength="40">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Amount Range</label>
                                <div class="col-md-6">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-md-3" style="padding-left: calc(var(--bs-gutter-x) * .5);">
                                            <select class="form-control" id="currencyCode" data-error="please select currency" style="width: 110px;">
                                                <option></option>
                                            </select>
                                        </div>
                                        <div class="col-md-3" >
                                            <input type="text" id="amountFrom" name="amountFrom" class="form-control numeric" autocomplete="off" value="" maxlength="18" >
                                        </div>
                                        <div class="col-md-3" style="text-align: center">
                                            <label class="col-form-label"><strong>to</strong></label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="amountTo" name="amountTo" class="form-control numeric" autocomplete="off" value="" maxlength="18" >
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
                                                <input type="text" id="releaseDateFrom" name="releaseDateFrom" class="form-control datepicker numeric" autocomplete="off" value="" style="width: 150px;">
                                            </div>
                                        </div>
                                        <div class="col-auto mx-2">
                                            <label class="col-form-label"><strong>to</strong></label>
                                        </div>
                                        <div class="col-auto">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                <input type="text" id="releaseDateTo" name="releaseDateTo" class="form-control datepicker numeric" autocomplete="off" value="" style="width: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                        <h3 class="box-title">Cancellation LC Listing</h3>
                    </div>
                    <div class="box-body list-title">
                        <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                style="border-collapse:collapse;">
                            <thead>
                            <tr>
                                <th align="center"><strong>Company ID</strong></th>
                                <th align="center"><strong>Company Name</strong></th>
                                <th align="center"><strong>Maker ID</strong></th>
                                <th align="center"><strong>Transaction Reference No.</strong></th>
                                <th align="center"><strong>Bank Reference No.</strong></th>
                                <th align="center"><strong>Beneficiary</strong></th>
                                <th align="center"><strong>Corp Release Date</strong></th>
                                <th align="center"><strong>Amount</strong></th>
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
                                <td align="center"></td>
                            </tr>
                            </tbody>
                        </table>
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

    $(document).ready(function () {

        $('#list').hide();
        $('.list-title').hide();

        getCurrency();

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true
        });

        $('#releaseDateFrom').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#releaseDateTo').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));

        $('#amountFrom').on('input', function () {
            const regex = /^\d{0,15}(\.\d{0,2})?$/;
            const input = $(this);
            const value = input.val();

            if (!regex.test(value)) {
                const cleanValue = value.replace(/[^\d.]/g, '');
                const parts = cleanValue.split('.');
                if (parts.length > 2) {
                    parts[1] = parts.slice(1).join('');
                }
                const truncatedValue = parts[0].slice(0, 15) + (parts[1] ? '.' + parts[1].slice(0, 2) : '');
                input.val(truncatedValue);
                input.addClass('invalid');
            } else {
                input.removeClass('invalid');
            }
        });

        $('#amountTo').on('input', function () {
            const regex = /^\d{0,15}(\.\d{0,2})?$/;
            const input = $(this);
            const value = input.val();

            if (!regex.test(value)) {
                const cleanValue = value.replace(/[^\d.]/g, '');
                const parts = cleanValue.split('.');
                if (parts.length > 2) {
                    parts[1] = parts.slice(1).join('');
                }
                const truncatedValue = parts[0].slice(0, 15) + (parts[1] ? '.' + parts[1].slice(0, 2) : '');
                input.val(truncatedValue);
                input.addClass('invalid');
            } else {
                input.removeClass('invalid');
            }
        });

        $('#search').on('click', function () {
            currentPageTable= 0;
            currentPageSize = 10;

            searchFunction();
        });

        $('#list tbody').on('click', 'a', function (e) {
            if(e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
            var releaseDateFrom
            var releaseDateTo
            var issuanceID = $(this).attr('data-issuanceID');
            var corpId = $('#corporate_code').val();
            var trxRefNo = $('#trxRefNo').val();
            var bankRefNo = $('#bankRefNo').val();
            var currencyCode = $('#currencyCode').val();
            releaseDateFrom = $('#releaseDateFrom').val();
            releaseDateTo = $('#releaseDateTo').val();
            var amountFrom = $('#amountFrom').val();
            var amountTo = $('#amountTo').val();

            if (issuanceID !== undefined) {
                var res = app.setView(id,'detail');
                if(res=='done'){
                    $('#issuanceID').val(issuanceID);
                    $('#corpId').val(corpId);
                    $('#trxRefNo').val(trxRefNo);
                    $('#bankRefNo').val(bankRefNo);
                    $('#currencyCode').val(currencyCode);
                    $('#amountFrom').val(amountFrom);
                    $('#amountTo').val(amountTo);
                    $('#releaseDateFrom').val(releaseDateFrom);
                    $('#releaseDateTo').val(releaseDateTo);
                    getDetail();
                }
            }
        });
        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',.- '
        });

        $('.numeric-input').numeric({
            allowMinus: false,
            allowThouSep : false,
            allowDecSep : false,
        });
    });

    function searchFunction() {

        var url_action
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = {"id": "ASC"};

        const releaseDateFrom = moment($('#releaseDateFrom').val(), "DD/MM/YYYY");
        const releaseDateTo = moment($('#releaseDateTo').val(), "DD/MM/YYYY");

        if (releaseDateTo.isBefore(releaseDateFrom)) {
            alert('From date cannot be more than to date')
            return;
        }

        $(this).prop("disabled",true);
        $('#list').show();
        $('.list-title').show();

        var value
        url_action = 'searchCancellationLC'

        window.searchParam = {
            corpId: $('#corporate_code').val(),
            referenceNo: $('#trxRefNo').val(),
            currencyCode: $('#currencyCode').val(),
            amountFrom: $('#amountFrom').val(),
            amountTo: $('#amountTo').val(),
            releaseDateFrom: $('#releaseDateFrom').val(),
            releaseDateTo: $('#releaseDateTo').val(),
            bankRefNo: $('#bankRefNo').val(),
        }

        value = {
            issuanceId: "",
            corpId: $('#corporate_code').val(),
            referenceNo: $('#trxRefNo').val(),
            currencyCode: $('#currencyCode').val(),
            amountFrom: $('#amountFrom').val(),
            amountTo: $('#amountTo').val(),
            releaseDateFrom: $('#releaseDateFrom').val(),
            releaseDateTo: $('#releaseDateTo').val(),
            bankRefNo: $('#bankRefNo').val(),
            currentPage: "1",
            pageSize: "20"
        };
        // console.log(value);
        oTable = $('#list').DataTable({
            "destroy": true,
            "initComplete": function(settings, json) {
                $('#search').prop("disabled",false);

            },
            "select": false,
            "searching": false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "pageLength":currentPageSize,
            "displayStart":currentPageTable * currentPageSize,
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
                        return '<a href="javascript:void(0)" data-issuanceID="'+data.issuanceId+'">'+data.referenceNo+'</a>';
                    },
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 4,
                    data: "bankRefNo",
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 5,
                    data: "beneficiaryName",
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 6,
                    data: {
                        releasedDate: "releasedDate"
                    },
                    render: function ( data, type, full, meta ) {
                        return moment(data.releasedDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")
                    },
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 7,
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
                },
                complete:function(data){
                    currentPageTable = oTable.page.info().page;
                    currentPageSize = oTable.page.len();
                }
            }
        });
    }

    function getCurrency() {
        var value = {
            code: "",
            name: "",
            modelCode: "COM_MT_CURRENCY"
        };
        var url_action = 'searchCurrencyForDroplist';
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
                if (result.status=="200") {
                    unitOption = '<option value="">All</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.code + '">'+ obj.code + ' - ' + obj.name + '</option>';
                    });
                    $('#currencyCode').html(unitOption);
                    $('#currencyCode').select2({width: '110px'});

                    $('#currencyCode1').html(unitOption);
                    $('#currencyCode1').select2({width: '110px'});

                    getCorporateDroplist();
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
                        unitOption += '<option value="'+ obj.corporateId +'"data-name = "'+obj.corporateName+'">'+ obj.corporateName + '</option>';
                    });

					$('#corporate_code').html(unitOption);
                    $('#corporate_code').select2({width: '100%'});
                    $('#corporate_code1').html(unitOption);
                    $('#corporate_code1').select2({width: '100%'});

                    if(window.searchParam) {
                        $('#corporate_code').val(window.searchParam.corpId).change();
                        $('#trxRefNo').val(window.searchParam.referenceNo).change();
                        $('#currencyCode').val(window.searchParam.currencyCode).change();
                        $('#amountFrom').val(window.searchParam.amountFrom).change();
                        $('#amountTo').val(window.searchParam.amountTo).change();
                        $('#releaseDateFrom').val(window.searchParam.releaseDateFrom).change();
                        $('#releaseDateTo').val(window.searchParam.releaseDateTo).change();
                        $('#bankRefNo').val(window.searchParam.bankRefNo).change();

                        $('#search').trigger('click');
                        searchFunction();
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

    function currencyFormat (num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

</script>
