@include('_partials.header_content',['breadcrumb'=>['Import LC','Search']])

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
    .ig-dateTo.has-danger .input-group,
    .ig-dateFrom1.has-error .input-group,
    .ig-dateFrom1.has-danger .input-group,
    .ig-dateTo1.has-error .input-group,
    .ig-dateTo1.has-danger .input-group {
        border: 2px solid #dd4b39 !important;
        border-radius: 4px;
    }

    .e-dateFrom span,
    .e-dateTo span,
    .e-dateFrom1 span,
    .e-dateTo1 span {
        color: #dd4b39 !important;
        font-weight: bold;
    }
</style>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                    <div id="exTab" class="">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="validation-tab" data-bs-toggle="tab" data-bs-target="#tab_validation" type="button" role="tab" aria-controls="tab_validation" aria-selected="true">LC Validation</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="status-tab" data-bs-toggle="tab" data-bs-target="#tab_status" type="button" role="tab" aria-controls="tab_status" aria-selected="false">Update Status LC</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab_validation" role="tabpanel" aria-labelledby="validation-tab">
                                <div class="box-body">
                                    <div class="container-fluid">
                                        <form id="form-area" class="form-horizontal form-area">
                                            <div class="row state_createddt">
                                                <div class="mb-3 row">
                                                    <div class="col-md-3">
                                                        <input type="radio" id="checkbox_date" name="searchBy-rb" value="0" checked>
                                                        <label for="checkbox_date"><strong>Application Date Range</strong></label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="row g-2 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="input-group ig-dateFrom">
                                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" id="dateFrom" name="dateFrom" class="form-control datepicker detail numeric" autocomplete="off" data-error="This field is mandatory." required>
                                                                </div>
                                                                <div class="help-block with-errors e-dateFrom"></div>
                                                            </div>
                                                            <div class="col-auto mx-2">
                                                                <label class="col-form-label"><strong>to</strong></label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="input-group ig-dateTo">
                                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" id="dateTo" name="dateTo" class="form-control datepicker numeric" autocomplete="off" data-error="This field is mandatory." required>
                                                                </div>
                                                                <div class="help-block with-errors e-dateTo"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 row">
                                                    <div class="col-md-3">
                                                        <label for="createddt-rb">Corporate ID</label>
                                                    </div>
                                                    <div class="col-md-7 state_createddt">
                                                        <select class="form-control" id="corporate_code">
                                                            <option></option>
                                                        </select>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row state_createddt">
                                                <div class="mb-3 row">
                                                    <div class="col-md-3">
                                                        <label >Amount Range</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <select class="form-control" id="currencyCode">
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" id="amountFrom" name="amountFrom" class="form-control numeric" autocomplete="off" value="" maxlength="18">
                                                    </div>
                                                    <label class="col-md-1 text-center col-form-label text-end"><strong> - </strong></label>
                                                    <div class="col-md-2">
                                                        <input type="text" id="amountTo" name="amountTo" class="form-control numeric" autocomplete="off" value="" maxlength="18">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 row">
                                                    <div class="col-md-3">
                                                        <input type="radio" id="refno-rb" name="searchBy-rb" value="1">
                                                        <label for="refno-rb"><strong>Transaction Reference No</strong></label>
                                                    </div>
                                                    <div class="col-md-7 state_refno">
                                                        <input type="text" id="trxRefNo" name="trxRefNo" class="form-control" autocomplete="off" value="" maxlength="40" data-error="Transaction reference number is mandatory.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab_status" role="tabpanel" aria-labelledby="status-tab">
                                <div class="box-body">
                                    <div class="container-fluid">
                                        <form id="form-area1" class="form-horizontal form-area">
                                            <div class="row state_createddt">
                                                <div class="mb-3 row">
                                                    <div class="col-md-3">
                                                        <input type="radio" id="checkbox_date1" name="searchBy-rb1" value="0" checked>
                                                        <label for="checkbox_date1"><strong>Application Date Range</strong></label>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="row g-2 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="input-group ig-dateFrom1">
                                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" id="dateFrom1" name="dateFrom1" class="form-control datepicker detail numeric" autocomplete="off" data-error="This field is mandatory." required>
                                                                </div>
                                                                <div class="help-block with-errors e-dateFrom1"></div>
                                                            </div>
                                                            <div class="col-auto mx-2">
                                                                <label class="col-form-label"><strong>to</strong></label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="input-group ig-dateTo1">
                                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" id="dateTo1" name="dateTo1" class="form-control datepicker numeric" autocomplete="off" data-error="This field is mandatory." required>
                                                                </div>
                                                                <div class="help-block with-errors e-dateTo1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 row">
                                                    <div class="col-md-3">
                                                        <label  for="createddt-rb">Corporate ID</label>
                                                    </div>
                                                    <div class="col-md-7 state_createddt">
                                                        <select class="form-control" id="corporate_code1">
                                                            <option></option>
                                                        </select>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row state_createddt">
                                                <div class="mb-3 row">
                                                    <div class="col-md-3">
                                                        <label >Amount Range</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <select class="form-control" id="currencyCode1">
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input type="text" id="amountFrom1" name="amountFrom1" class="form-control numeric" autocomplete="off" value="" maxlength="18">
                                                    </div>
                                                    <label class="col-md-1 text-center col-form-label text-end"><strong> - </strong></label>
                                                    <div class="col-md-2">
                                                        <input type="text" id="amountTo1" name="amountTo1" class="form-control numeric" autocomplete="off" value="" maxlength="18">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 row">
                                                    <div class="col-md-3">
                                                        <input type="radio" id="refno-rb1" name="searchBy-rb1" value="1">
                                                        <label for="refno-rb1"><strong>Transaction Reference No</strong></label>
                                                    </div>
                                                    <div class="col-md-7 state_refno">
                                                        <input type="text" id="trxRefNo1" name="trxRefNo1" class="form-control" autocomplete="off" value="" maxlength="40" data-error="Transaction reference number is mandatory.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
                    <div class="box-header list-title">
                        <h3 class="box-title">Import LC Listing</h3>
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
                                <th align="center"><strong>Beneficiary</strong></th>
                                <th align="center"><strong>Application Date</strong></th>
                                <th align="center"><strong>Amount</strong></th>
                                <th align="center"><strong>Number of Returned</strong></th>
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

    var url_action
    var action = 'SEARCH';
    var result_key = 'result';
    var custom_order = {"id": "ASC"};

    var activeTabId
    var radioValidation
    var radioUpdate

    $(document).ready(function () {

        if ($('#tab_validation').hasClass('active') || $('#tab_validation').hasClass('show')) {
            activeTabId = '#tab_validation';
        } else if ($('#tab_status').hasClass('active') || $('#tab_status').hasClass('show')) {
            activeTabId = '#tab_status';
        } else {
            // Default to validation tab
            activeTabId = '#tab_validation';
        }


        $('#validation-tab, #status-tab').on('click', function (e) {
            var target = $(this).attr('data-bs-target');
            activeTabId = target;
            $('#list').hide();
            $('.list-title').hide();
        });

        $('#list').hide();
        $('.list-title').hide();
        $('.e-dateFrom').html('').hide();
        $('.e-dateTo').html('').hide();
        $('.e-dateFrom1').html('').hide();
        $('.e-dateTo1').html('').hide();

        getCurrency();
        getCorporateDroplist();

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true
        });

        $('#dateFrom').on("change", function () {
            $('.ig-dateFrom').removeClass('has-error has-danger')
            $('.e-dateFrom').html('').hide();
        });

        $('#dateTo').on("change", function () {
            $('.ig-dateTo').removeClass('has-error has-danger')
            $('.e-dateTo').html('').hide();
        });

        $('#dateFrom1').on("change", function () {
            $('.ig-dateFrom1').removeClass('has-error has-danger')
            $('.e-dateFrom1').html('').hide();
        });

        $('#dateTo1').on("change", function () {
            $('.ig-dateTo1').removeClass('has-error has-danger')
            $('.e-dateTo1').html('').hide();
        });

        $('#dateFrom').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#dateTo').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));

        $('#dateFrom1').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#dateTo1').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));
        $('#trxRefNo').on('input', function() {
            if($(this).val().trim() !== '') {
                $(this).removeClass('error');
                $(this).parent().find('.help-block.with-errors').html('').hide();
            }
        });

        $('#trxRefNo1').on('input', function() {
            if($(this).val().trim() !== '') {
                $(this).removeClass('error');
                $(this).parent().find('.help-block.with-errors').html('').hide();
            }
        });

        $('input[name="searchBy-rb"]').on('change', function() {

            if (this.value == '1') {
                // Transaction Reference No selected
                $('#trxRefNo').prop('required', true);
                $('#dateFrom').prop('required', false);
                $('#dateTo').prop('required', false);

                $('.ig-dateFrom').removeClass('has-error has-danger');
                $('.e-dateFrom').html('').hide();
                $('.ig-dateTo').removeClass('has-error has-danger');
                $('.e-dateTo').html('').hide();
                $('#dateFrom').removeClass('error');
                $('#dateTo').removeClass('error');

            } else {
                // Application Date Range selected
                $('#trxRefNo').prop('required', false);
                $('#dateFrom').prop('required', true);
                $('#dateTo').prop('required', true);

                $('#trxRefNo').removeClass('error');
                $('#trxRefNo').siblings('.help-block.with-errors').html('');
            }
            $('#form-area').validator('reset');
        });

        $('input[name="searchBy-rb1"]').on('change', function() {

            if (this.value == '1') {
                // Transaction Reference No selected
                $('#trxRefNo1').prop('required', true);
                $('#dateFrom1').prop('required', false);
                $('#dateTo1').prop('required', false);

                // Clear date field errors
                $('.ig-dateFrom1').removeClass('has-error has-danger');
                $('.e-dateFrom1').html('').hide();
                $('.ig-dateTo1').removeClass('has-error has-danger');
                $('.e-dateTo1').html('').hide();
                $('#dateFrom1').removeClass('error');
                $('#dateTo1').removeClass('error');

            } else {
                // Application Date Range selected
                $('#trxRefNo1').prop('required', false);
                $('#dateFrom1').prop('required', true);
                $('#dateTo1').prop('required', true);

                // Clear reference no error
                $('#trxRefNo1').removeClass('error');
                $('#trxRefNo1').parent().find('.help-block.with-errors').html('').hide();
            }
            $('#form-area1').validator('reset');
        });

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

        $('#amountFrom1').on('input', function () {
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

        $('#amountTo1').on('input', function () {
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

            $('#trxRefNo').removeClass('error');
            $('#trxRefNo').parent().find('.help-block.with-errors').html('').hide();
            $('#trxRefNo1').removeClass('error');
            $('#trxRefNo1').parent().find('.help-block.with-errors').html('').hide();
            $('.ig-dateFrom').removeClass('has-error has-danger');
            $('.e-dateFrom').html('').hide();
            $('.ig-dateTo').removeClass('has-error has-danger');
            $('.e-dateTo').html('').hide();
            $('.ig-dateFrom1').removeClass('has-error has-danger');
            $('.e-dateFrom1').html('').hide();
            $('.ig-dateTo1').removeClass('has-error has-danger');
            $('.e-dateTo1').html('').hide();

            searchFunction();
        });

        $('#list tbody').on('click', 'a', function (e) {
            if(e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
            var dateFrom
            var dateTo
            var issuanceID = $(this).attr('data-issuanceID');
            var corpId = $('#corporate_code').val();
            var currencyCode = $('#currencyCode').val();
            if (activeTabId === '#tab_validation') {
                dateFrom = $('#dateFrom').val();
                dateTo = $('#dateTo').val();
            } else {
                dateFrom = $('#dateFrom1').val();
                dateTo = $('#dateTo1').val();
            }
            var amountFrom = $('#amountFrom').val();
            var amountTo = $('#amountTo').val();

            if (issuanceID !== undefined) {
                var res = app.setView(id,'detail');
                if(res=='done'){
                    if (activeTabId === '#tab_validation') {
                        $('#radioSelect').val(radioValidation);
                    } else {
                        $('#radioSelect').val(radioUpdate);
                    }
                    $('#issuanceID').val(issuanceID);
                    $('#corpId').val(corpId);
                    $('#currencyCode').val(currencyCode);
                    $('#amountFrom').val(amountFrom);
                    $('#amountTo').val(amountTo);
                    $('#dateFrom').val(dateFrom);
                    $('#dateTo').val(dateTo);
                    $('#tabActive').val(activeTabId);
                    getDetail();
                }
            }
        });
        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',._ '
        });

        $('.numeric-input').numeric({
            allowMinus: false,
            allowThouSep : false,
            allowDecSep : false,
        });

        if (window.searchParam) {
            activeTabId=window.searchParam.activeTabId;
            if (window.searchParam.activeTabId == '#tab_validation') {
                var tabValidationTrigger = document.querySelector('#validation-tab');
                if (tabValidationTrigger) {
                    var tabValidation = new bootstrap.Tab(tabValidationTrigger);
                    tabValidation.show();
                }

                if (window.searchParam.radioValidation) {
                    $("#refno-rb").attr('checked', 'checked');

                    $('#trxRefNo').val(window.searchParam.trxRefNo).change();
                } else {
                    $("#checkbox_date").attr('checked', 'checked');

                    $('#corporate_code').val(window.searchParam.corpId).change();
                    $('#currencyCode').val(window.searchParam.currencyCode).change();
                    $('#amountFrom').val(window.searchParam.amountFrom).change();
                    $('#amountTo').val(window.searchParam.amountTo).change();
                    $('#dateFrom').val(window.searchParam.dateFrom).change();
                    $('#dateTo').val(window.searchParam.dateTo).change();
                }
            } else {
                var statusTabTrigger = document.querySelector('#status-tab');
                if (statusTabTrigger) {
                    var statusTab = new bootstrap.Tab(statusTabTrigger);
                    statusTab.show();
                }

                if (window.searchParam.radioUpdate) {
                    $("#refno-rb1").attr('checked', 'checked');

                    $('#trxRefNo1').val(window.searchParam.trxRefNo).change();
                } else {
                    $("#checkbox_date1").attr('checked', 'checked');

                    $('#corporate_code1').val(window.searchParam.corpId).change();
                    $('#currencyCode1').val(window.searchParam.currencyCode).change();
                    $('#amountFrom1').val(window.searchParam.amountFrom).change();
                    $('#amountTo1').val(window.searchParam.amountTo).change();
                    $('#dateFrom1').val(window.searchParam.dateFrom).change();
                    $('#dateTo1').val(window.searchParam.dateTo).change();
                }
            }
            searchFunction();
        }
    });

    function searchFunction() {
        $('#trxRefNo').removeClass('error');
        $('#trxRefNo').parent().find('.help-block.with-errors').html('').hide();
        $('#trxRefNo1').removeClass('error');
        $('#trxRefNo1').parent().find('.help-block.with-errors').html('').hide();
        $('.ig-dateFrom').removeClass('has-error has-danger');
        $('.e-dateFrom').html('').hide();
        $('.ig-dateTo').removeClass('has-error has-danger');
        $('.e-dateTo').html('').hide();
        $('.ig-dateFrom1').removeClass('has-error has-danger');
        $('.e-dateFrom1').html('').hide();
        $('.ig-dateTo1').removeClass('has-error has-danger');
        $('.e-dateTo1').html('').hide();

        var value

        if (activeTabId === '#tab_validation') {
            var radioValue = $('input[name="searchBy-rb"]:checked').val();
            radioValidation = (radioValue == '1');

            window.searchParam = {
                activeTabId: '#tab_validation',
                radioValidation: ($('input[name="searchBy-rb"]:checked').val() == '1' ? true : false),
                issuanceId: "",
                corpId: $('#corporate_code').val(),
                trxRefNo: $('#trxRefNo').val(),
                currencyCode: $('#currencyCode').val(),
                amountFrom: $('#amountFrom').val(),
                amountTo: $('#amountTo').val(),
                dateFrom: $('#dateFrom').val(),
                dateTo: $('#dateTo').val(),
            }

            value = {
                issuanceId: "",
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

            radioValidation = window.searchParam.radioValidation

            if (radioValidation) {
                $('#trxRefNo').prop('required', true);
                $('#dateFrom').prop('required', false);
                $('#dateTo').prop('required', false);

                $('.ig-dateFrom').removeClass('has-error has-danger')
                $('.e-dateFrom').html('').hide();
                $('.ig-dateTo').removeClass('has-error has-danger')
                $('.e-dateTo').html('').hide();

                var trimmedRefNo = (value.trxRefNo || '').trim();
                if (trimmedRefNo === '') {
                    $('#trxRefNo').addClass('error');
                    $('#trxRefNo').parent().find('.help-block.with-errors').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">Transaction reference number is mandatory.</span>').show();
                    return false;
                }
                value.corpId = ''
                value.currencyCode = ''
                value.amountFrom = ''
                value.amountTo = ''
                value.dateFrom = ''
                value.dateTo = ''
            } else {
                $('#trxRefNo').prop('required', false);
                $('#dateFrom').prop('required', true);
                $('#dateTo').prop('required', true);

                if(value.dateFrom === '' || value.dateFrom === null) {
                    $('.ig-dateFrom').addClass('has-error has-danger')
                    $('.e-dateFrom').show();
                    $('.e-dateFrom').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">From Date is mandatory.</span>');
                }

                if(value.dateTo === '' || value.dateTo === null) {
                    $('.ig-dateTo').addClass('has-error has-danger')
                    $('.e-dateTo').show();
                    $('.e-dateTo').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">To Date is mandatory.</span>');
                }

                if(value.dateFrom === '' || value.dateFrom === null || value.dateTo === '' || value.dateTo === null) {
                    return false;
                }
                value.trxRefNo = ''
            }



            if (!radioValidation) {
                const dateFrom = moment($('#dateFrom').val(), "DD/MM/YYYY");
                const dateTo = moment($('#dateTo').val(), "DD/MM/YYYY");

                if (dateTo.isBefore(dateFrom)) {
                    flash('warning', 'To date which is smaller than the From date!');
                    return false;
                }
            }

            url_action = 'searchValidationLC'
        } else {
            var radioValue1 = $('input[name="searchBy-rb1"]:checked').val();
            radioUpdate = (radioValue1 == '1');

            window.searchParam = {
                activeTabId: '#tab_status',
                radioUpdate: ($('input[name="searchBy-rb1"]:checked').val() == '1' ? true : false),
                issuanceId: "",
                corpId: $('#corporate_code1').val(),
                trxRefNo: $('#trxRefNo1').val(),
                currencyCode: $('#currencyCode1').val(),
                amountFrom: $('#amountFrom1').val(),
                amountTo: $('#amountTo1').val(),
                dateFrom: $('#dateFrom1').val(),
                dateTo: $('#dateTo1').val(),
            }

            value = {
                issuanceId: "",
                corpId: $('#corporate_code1').val(),
                trxRefNo: $('#trxRefNo1').val(),
                currencyCode: $('#currencyCode1').val(),
                amountFrom: $('#amountFrom1').val(),
                amountTo: $('#amountTo1').val(),
                dateFrom: $('#dateFrom1').val(),
                dateTo: $('#dateTo1').val(),
                currentPage: "1",
                pageSize: "20"
            };

            radioUpdate = window.searchParam.radioUpdate

            if (radioUpdate) {
                $('#trxRefNo1').prop('required', true);
                $('#dateFrom1').prop('required', false);
                $('#dateTo1').prop('required', false);

                $('.ig-dateFrom1').removeClass('has-error has-danger')
                $('.e-dateFrom1').html('').hide();
                $('.ig-dateTo1').removeClass('has-error has-danger')
                $('.e-dateTo1').html('').hide();

                var trimmedRefNo1 = (value.trxRefNo || '').trim();
                if (trimmedRefNo1 === '') {
                    $('#trxRefNo1').addClass('error');
                    $('#trxRefNo1').parent().find('.help-block.with-errors').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">Transaction reference number is mandatory.</span>').show();
                    return false;
                }

                value.corpId = ''
                value.currencyCode = ''
                value.amountFrom = ''
                value.amountTo = ''
                value.dateFrom = ''
                value.dateTo = ''
            } else {
                $('#trxRefNo1').prop('required', false);
                $('#dateFrom1').prop('required', true);
                $('#dateTo1').prop('required', true);

                if(value.dateFrom === '' || value.dateFrom === null) {
                    $('.ig-dateFrom1').addClass('has-error has-danger')
                    $('.e-dateFrom1').show();
                    $('.e-dateFrom1').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">From Date is mandatory.</span>');
                }

                if(value.dateTo === '' || value.dateTo === null) {
                    $('.ig-dateTo1').addClass('has-error has-danger')
                    $('.e-dateTo1').show();
                    $('.e-dateTo1').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">To Date is mandatory.</span>');
                }

                if(value.dateFrom === '' || value.dateFrom === null || value.dateTo === '' || value.dateTo === null) {
                    return false;
                }

                value.trxRefNo = ''
            }

            // Skip bootstrap validator check - use our custom validation only
            // $('#form-area1').validator('validate');
            // if($('#form-area1').validator('validate').has('.has-error').length!=0){
            //     return;
            // }

            if (!radioUpdate) {
                const dateFrom1 = moment($('#dateFrom1').val(), "DD/MM/YYYY");
                const dateTo1 = moment($('#dateTo1').val(), "DD/MM/YYYY");

                if (dateTo1.isBefore(dateFrom1)) {
                    flash('warning', 'To date which is smaller than the From date!');
                    return false;
                }
            }

            url_action = 'searchUpdateStatusLC'
        }

        $(this).prop("disabled",true);
        $('#list').show();
        $('.list-title').show();

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
                    data: "beneficiaryName",
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 5,
                    data: {
                        applicationDate: "applicationDate"
                    },
                    render: function ( data, type, full, meta ) {
                        return moment(data.applicationDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")
                    },
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 6,
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
                    targets: 7,
                    data: "noOfReturn",
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
        var menu = 'MNU_GPCASH_BANK_TF_IMPORT';

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

                    unitOption = '<option value="" selected="selected">All Company</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="'+ obj.corporateId +'"data-name = "'+obj.corporateName+'">'+ obj.corporateId + ' - ' + obj.corporateName +'</option>';
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

    function currencyFormat (num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

</script>
