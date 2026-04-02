@include('_partials.header_content',['breadcrumb'=>['Amendment LC','Search']])

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
                                            <div class="row">
                                                <div class="mb-3 row form-group">
                                                    <div class="col-md-3">
                                                        <input type="radio" id="checkbox_date" name="searchBy-rb" value="0" checked>
                                                        <label for="checkbox_date"><strong>Corp Release Date Range</strong></label>
                                                    </div>
                                                    <div class="col-md-7 row-corporate">
                                                        <div class="row g-2 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="input-group ig-dateFrom">
                                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" id="releaseDateFrom" name="releaseDateFrom" class="form-control datepicker detail numeric" autocomplete="off" data-error="This field is mandatory.">
                                                                </div>
                                                                <div class="help-block with-errors e-dateFrom"></div>
                                                            </div>
                                                            <div class="col-auto mx-2">
                                                                <label class="col-form-label"><strong>to</strong></label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="input-group ig-dateTo">
                                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" id="releaseDateTo" name="releaseDateTo" class="form-control datepicker numeric" autocomplete="off" data-error="This field is mandatory.">
                                                                </div>
                                                                <div class="help-block with-errors e-dateTo"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row-corporate">
                                                <div class="mb-3 row form-group">
                                                    <div class="col-md-3">
                                                        <label  for="createddt-rb">Corporate ID</label>
                                                    </div>
                                                    <div class="col-md-7 state_createddt">
                                                        <select class="form-control" id="corporate_code">
                                                            <option></option>
                                                        </select>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row-amount">
                                                <div class="mb-3 row form-group">
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
                                                <div class="mb-3 row form-group e-trxRefNo">
                                                    <div class="col-md-3">
                                                        <input type="radio" id="checkbox_tranref" name="searchBy-rb" value="1">
                                                        <label for="checkbox_tranref"><strong>Transaction Reference No</strong></label>
                                                    </div>
                                                    <div class="col-md-7 row-refNo">
                                                        <input type="text" id="trxRefNo" name="trxRefNo" class="form-control" autocomplete="off" value="" maxlength="40" style="display: none">
                                                        <div class="help-block with-errors g-trxRefNo"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 row form-group">
                                                    <div class="col-md-3">
                                                        <input type="radio" id="checkbox_bankref" name="searchBy-rb" value="2">
                                                        <label for="checkbox_bankref"><strong>Bank Reference No</strong></label>
                                                    </div>
                                                    <div class="col-md-7 row-bankRefNo">
                                                        <input type="text" id="bankRefNo" name="bankRefNo" class="form-control" autocomplete="off" value="" maxlength="40" data-error="Bank reference number is mandatory."  style="display: none">
                                                        <div class="help-block with-errors g-bankRefNo"></div>
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
                                            <div class="row">
                                                <div class="mb-3 row form-group">
                                                    <div class="col-md-3">
                                                        <input type="radio" id="checkbox_date1" name="searchBy-rb1" value="0" checked>
                                                        <label for="checkbox_date1"><strong>Corp Release Date Range</strong></label>
                                                    </div>
                                                    <div class="col-md-7 row-corporate1">
                                                        <div class="row g-2 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="input-group ig-dateFrom1">
                                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" id="releaseDateFrom1" name="releaseDateFrom1" class="form-control datepicker detail numeric" autocomplete="off" data-error="This field is mandatory.">
                                                                </div>
                                                                <div class="help-block with-errors e-dateFrom1"></div>
                                                            </div>
                                                            <div class="col-auto mx-2">
                                                                <label class="col-form-label"><strong>to</strong></label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="input-group ig-dateTo1">
                                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                    <input type="text" id="releaseDateTo1" name="releaseDateTo1" class="form-control datepicker numeric" autocomplete="off" data-error="This field is mandatory.">
                                                                </div>
                                                                <div class="help-block with-errors e-dateTo1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row-corporate1">
                                                <div class="mb-3 row form-group">
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
                                            <div class="row row-amount1">
                                                <div class="mb-3 row form-group">
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
                                                <div class="mb-3 row form-group e-trxRefNo1">
                                                    <div class="col-md-3">
                                                        <input type="radio" id="checkbox_tranref1" name="searchBy-rb1" value="1">
                                                        <label for="checkbox_tranref1"><strong>Transaction Reference No</strong></label>
                                                    </div>
                                                    <div class="col-md-7 row-refNo1">
                                                        <input type="text" id="trxRefNo1" name="trxRefNo1" class="form-control" autocomplete="off" value="" maxlength="40" data-error="Transaction reference number is mandatory." style="display: none">
                                                        <div class="help-block with-errors g-trxRefNo1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 row form-group">
                                                    <div class="col-md-3">
                                                        <input type="radio" id="checkbox_bankref1" name="searchBy-rb1" value="2">
                                                        <label for="checkbox_bankref1"><strong>Bank Reference No</strong></label>
                                                    </div>
                                                    <div class="col-md-7 row-bankRefNo1">
                                                        <input type="text" id="bankRefNo1" name="bankRefNo1" class="form-control" autocomplete="off" value="" maxlength="40" data-error="Bank reference number is mandatory." style="display: none">
                                                        <div class="help-block with-errors g-bankRefNo1"></div>
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
                        <h3 class="box-title">Amendment LC Listing</h3>
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

        console.log('Initialized activeTabId:', activeTabId);

        // Update activeTabId when tab changes
        $('#validation-tab, #status-tab').on('click', function (e) {
            var target = $(this).attr('data-bs-target');
            activeTabId = target;
            console.log('Tab changed to:', activeTabId);
            $('#list').hide();
            $('.list-title').hide();
        });

        $('#list').hide();
        $('.list-title').hide();
        $('.e-dateFrom').hide();
        $('.e-dateTo').hide();
        $('.e-dateFrom1').hide();
        $('.e-dateTo1').hide();

        $('.g-trxRefNo').hide();
        $('.g-trxRefNo1').hide();
        $('.g-bankRefNo').hide();
        $('.g-bankRefNo1').hide();

        getCurrency();
        getCorporateDroplist();

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true
        });

        $('#releaseDateFrom').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#releaseDateTo').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));
        $('#releaseDateFrom1').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#releaseDateTo1').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));

        $('#releaseDateFrom').on("change", function () {
            $('.ig-dateFrom').removeClass('has-error has-danger');
            $('.e-dateFrom').html('').hide();
        });

        $('#releaseDateTo').on("change", function () {
            $('.ig-dateTo').removeClass('has-error has-danger');
            $('.e-dateTo').html('').hide();
        });

        $('#releaseDateFrom1').on("change", function () {
            $('.ig-dateFrom1').removeClass('has-error has-danger');
            $('.e-dateFrom1').html('').hide();
        });

        $('#releaseDateTo1').on("change", function () {
            $('.ig-dateTo1').removeClass('has-error has-danger');
            $('.e-dateTo1').html('').hide();
        });

        $('#trxRefNo').on("change", function () {
            if($(this).val().trim() !== '') {
                $(this).removeClass('error');
                $('.e-trxRefNo').removeClass('has-error has-danger');
                $('.g-trxRefNo').html('').hide();
            }
        });

        $('#trxRefNo').on('input', function() {
            if($(this).val().trim() !== '') {
                $(this).removeClass('error');
                $('.e-trxRefNo').removeClass('has-error has-danger');
                $('.g-trxRefNo').html('').hide();
            }
        });

        $('#trxRefNo1').on("change", function () {
            if($(this).val().trim() !== '') {
                $(this).removeClass('error');
                $('.e-trxRefNo1').removeClass('has-error has-danger');
                $('.g-trxRefNo1').html('').hide();
            }
        });

        $('#trxRefNo1').on('input', function() {
            if($(this).val().trim() !== '') {
                $(this).removeClass('error');
                $('.e-trxRefNo1').removeClass('has-error has-danger');
                $('.g-trxRefNo1').html('').hide();
            }
        });

        $('#bankRefNo').on('input', function() {
            if($(this).val().trim() !== '') {
                $(this).removeClass('error');
                $('.g-bankRefNo').html('').hide();
            }
        });

        $('#bankRefNo1').on('input', function() {
            if($(this).val().trim() !== '') {
                $(this).removeClass('error');
                $('.g-bankRefNo1').html('').hide();
            }
        });

        $('input[name="searchBy-rb"]').on('change', function() {
            if (this.value == '0') {
                // Date Range selected
                $('#releaseDateFrom').prop('required', true);
                $('#releaseDateTo').prop('required', true);
                $('#trxRefNo').prop('required', false);
                $('#bankRefNo').prop('required', false);

                // Show/hide fields
                $('.row-corporate').show();
                $('.row-refNo').hide();
                $('.row-bankRefNo').hide();
                $('.row-amount').show();
                $('#typeRefNo').hide();
                $('#trxRefNo').hide();
                $('#bankRefNo').hide();

                // Clear reference number errors
                $('#bankRefNo').removeClass('error');
                $('.g-bankRefNo').html('').hide();
                $('#trxRefNo').removeClass('error');
                $('.e-trxRefNo').removeClass('has-error has-danger');
                $('.g-trxRefNo').html('').hide();
            } else if (this.value == '1') {
                // Transaction Reference No selected
                $('#trxRefNo').prop('required', true);
                $('#bankRefNo').prop('required', false);
                $('#releaseDateFrom').prop('required', false);
                $('#releaseDateTo').prop('required', false);

                // Show/hide fields
                $('.row-corporate').hide();
                $('.row-refNo').show();
                $('.row-bankRefNo').hide();
                $('.row-amount').hide();
                $('#bankRefNo').hide();
                $('#typeRefNo').show();
                $('#trxRefNo').show();

                // Clear date field errors
                $('.ig-dateFrom').removeClass('has-error has-danger');
                $('.e-dateFrom').html('').hide();
                $('.ig-dateTo').removeClass('has-error has-danger');
                $('.e-dateTo').html('').hide();
                $('#releaseDateFrom').removeClass('error');
                $('#releaseDateTo').removeClass('error');

                // Clear bank ref no error
                $('#bankRefNo').removeClass('error');
                $('.g-bankRefNo').html('').hide();
            } else if (this.value == '2') {
                // Bank Reference No selected
                $('#bankRefNo').prop('required', true);
                $('#trxRefNo').prop('required', false);
                $('#releaseDateFrom').prop('required', false);
                $('#releaseDateTo').prop('required', false);

                // Show/hide fields
                $('.row-corporate').hide();
                $('.row-refNo').hide();
                $('.row-bankRefNo').show();
                $('.row-amount').hide();
                $('#trxRefNo').hide();
                $('#typeRefNo').show();
                $('#bankRefNo').show();

                // Clear date field errors
                $('.ig-dateFrom').removeClass('has-error has-danger');
                $('.e-dateFrom').html('').hide();
                $('.ig-dateTo').removeClass('has-error has-danger');
                $('.e-dateTo').html('').hide();
                $('#releaseDateFrom').removeClass('error');
                $('#releaseDateTo').removeClass('error');

                // Clear trx ref no error
                $('#trxRefNo').removeClass('error');
                $('.e-trxRefNo').removeClass('has-error has-danger');
                $('.g-trxRefNo').html('').hide();
            }
            $('#form-area').validator('reset');
        });

        $('input[name="searchBy-rb1"]').on('change', function() {
            if (this.value == '0') {
                // Date Range selected
                $('#releaseDateFrom1').prop('required', true);
                $('#releaseDateTo1').prop('required', true);
                $('#trxRefNo1').prop('required', false);
                $('#bankRefNo1').prop('required', false);

                // Show/hide fields
                $('.row-corporate1').show();
                $('.row-refNo1').hide();
                $('.row-bankRefNo1').hide();
                $('.row-amount1').show();
                $('#typeRefNo1').hide();
                $('#trxRefNo1').hide();
                $('#bankRefNo1').hide();

                // Clear reference number errors
                $('#bankRefNo1').removeClass('error');
                $('.g-bankRefNo1').html('').hide();
                $('#trxRefNo1').removeClass('error');
                $('.e-trxRefNo1').removeClass('has-error has-danger');
                $('.g-trxRefNo1').html('').hide();
            } else if (this.value == '1') {
                // Transaction Reference No selected
                $('#trxRefNo1').prop('required', true);
                $('#bankRefNo1').prop('required', false);
                $('#releaseDateFrom1').prop('required', false);
                $('#releaseDateTo1').prop('required', false);

                // Show/hide fields
                $('.row-corporate1').hide();
                $('.row-refNo1').show();
                $('.row-bankRefNo1').hide();
                $('.row-amount1').hide();
                $('#bankRefNo1').hide();
                $('#typeRefNo1').show();
                $('#trxRefNo1').show();

                // Clear date field errors
                $('.ig-dateFrom1').removeClass('has-error has-danger');
                $('.e-dateFrom1').html('').hide();
                $('.ig-dateTo1').removeClass('has-error has-danger');
                $('.e-dateTo1').html('').hide();
                $('#releaseDateFrom1').removeClass('error');
                $('#releaseDateTo1').removeClass('error');

                // Clear bank ref no error
                $('#bankRefNo1').removeClass('error');
                $('.g-bankRefNo1').html('').hide();
            } else if (this.value == '2') {
                // Bank Reference No selected
                $('#bankRefNo1').prop('required', true);
                $('#trxRefNo1').prop('required', false);
                $('#releaseDateFrom1').prop('required', false);
                $('#releaseDateTo1').prop('required', false);

                // Show/hide fields
                $('.row-corporate1').hide();
                $('.row-refNo1').hide();
                $('.row-bankRefNo1').show();
                $('.row-amount1').hide();
                $('#trxRefNo1').hide();
                $('#typeRefNo1').show();
                $('#bankRefNo1').show();

                // Clear date field errors
                $('.ig-dateFrom1').removeClass('has-error has-danger');
                $('.e-dateFrom1').html('').hide();
                $('.ig-dateTo1').removeClass('has-error has-danger');
                $('.e-dateTo1').html('').hide();
                $('#releaseDateFrom1').removeClass('error');
                $('#releaseDateTo1').removeClass('error');

                // Clear trx ref no error
                $('#trxRefNo1').removeClass('error');
                $('.e-trxRefNo1').removeClass('has-error has-danger');
                $('.g-trxRefNo1').html('').hide();
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

            // Clear all errors first
            $('#trxRefNo').removeClass('error');
            $('.e-trxRefNo').removeClass('has-error has-danger');
            $('.g-trxRefNo').html('').hide();
            $('#trxRefNo1').removeClass('error');
            $('.e-trxRefNo1').removeClass('has-error has-danger');
            $('.g-trxRefNo1').html('').hide();
            $('#bankRefNo').removeClass('error');
            $('.g-bankRefNo').html('').hide();
            $('#bankRefNo1').removeClass('error');
            $('.g-bankRefNo1').html('').hide();
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
            var releaseDateFrom
            var releaseDateTo
            var issuanceID = $(this).attr('data-issuanceID');
            var corpId = $('#corporate_code').val();
            var currencyCode = $('#currencyCode').val();

            if (activeTabId === '#tab_validation') {
                releaseDateFrom = $('#releaseDateFrom').val();
                releaseDateTo = $('#releaseDateTo').val();
            } else {
                releaseDateFrom = $('#releaseDateFrom1').val();
                releaseDateTo = $('#releaseDateTo1').val();
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
                    $('#releaseDateFrom').val(releaseDateFrom);
                    $('#releaseDateTo').val(releaseDateTo);
                    $('#tabActive').val(activeTabId);
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


        if (window.searchParam) {
            activeTabId=window.searchParam.activeTabId;
            if (window.searchParam.activeTabId == '#tab_validation') {
                var tabValidationTrigger = document.querySelector('#tab_validation');
                if (tabValidationTrigger) {
                    var tabValidation = new bootstrap.Tab(tabValidationTrigger);
                    tabValidation.show();
                }

                if (window.searchParam.radioValidation == '0') {
                    $("#checkbox_date").attr('checked', 'checked');

                    $('#corporate_code').val(window.searchParam.corpId).change();
                    $('#currencyCode').val(window.searchParam.currencyCode).change();
                    $('#amountFrom').val(window.searchParam.amountFrom).change();
                    $('#amountTo').val(window.searchParam.amountTo).change();
                    $('#releaseDateFrom').val(window.searchParam.releaseDateFrom).change();
                    $('#releaseDateTo').val(window.searchParam.releaseDateTo).change();

                    $('.row-corporate').show();
                    $('.row-refNo').hide();
                    $('.row-bankRefNo').hide();

                    $('.row-amount').show();
                    $('#typeRefNo').hide();
                    $('#trxRefNo').hide();
                    $('#bankRefNo').hide();
                } else if (window.searchParam.radioValidation == '1') {
                    $("#checkbox_tranref").attr('checked', 'checked');

                    $('#trxRefNo').val(window.searchParam.trxRefNo).change();

                    $('.row-corporate').hide();
                    $('.row-refNo').show();
                    $('.row-bankRefNo').hide();

                    $('.row-amount').hide();
                    $('#bankRefNo').hide();
                    $('#typeRefNo').show();
                    $('#trxRefNo').show();
                    $('#form-area').validator('reset');
                } else if (window.searchParam.radioValidation == '2') {
                    $("#checkbox_bankref").attr('checked', 'checked');

                    $('#bankRefNo').val(window.searchParam.bankRefNo).change();

                    $('.row-corporate').hide();
                    $('.row-refNo').hide();
                    $('.row-bankRefNo').show();

                    $('.row-amount').hide();
                    $('#trxRefNo').hide();
                    $('#typeRefNo').show();
                    $('#bankRefNo').show();
                    $('#form-area').validator('reset');
                }
            } else {
                var statusTabTrigger = document.querySelector('#status-tab');
                if (statusTabTrigger) {
                    var statusTab = new bootstrap.Tab(statusTabTrigger);
                    statusTab.show();
                }

                if (window.searchParam.radioUpdate == '0') {
                    $("#checkbox_date1").attr('checked', 'checked');

                    $('#corporate_code1').val(window.searchParam.corpId).change();
                    $('#currencyCode1').val(window.searchParam.currencyCode).change();
                    $('#amountFrom1').val(window.searchParam.amountFrom).change();
                    $('#amountTo1').val(window.searchParam.amountTo).change();
                    $('#releaseDateFrom1').val(window.searchParam.releaseDateFrom).change();
                    $('#releaseDateTo1').val(window.searchParam.releaseDateTo).change();

                    $('.row-corporate1').show();
                    $('.row-refNo1').hide();
                    $('.row-bankRefNo1').hide();
                    $('.row-amount1').show();
                    $('#typeRefNo1').hide();
                    $('#trxRefNo1').hide();
                    $('#bankRefNo1').hide();

                } else if (window.searchParam.radioValidation == '1') {
                    $("#checkbox_tranref1").attr('checked', 'checked');

                    $('#trxRefNo1').val(window.searchParam.trxRefNo).change();

                    $('.row-corporate1').hide();
                    $('.row-refNo1').show();
                    $('.row-bankRefNo1').hide();
                    $('.row-amount1').hide();
                    $('#bankRefNo1').hide();
                    $('#typeRefNo1').show();
                    $('#trxRefNo1').show();
                    $('#form-area').validator('reset');

                } else if (window.searchParam.radioValidation == '2') {
                    $("#checkbox_bankref1").attr('checked', 'checked');

                    $('#bankRefNo1').val(window.searchParam.bankRefNo).change();

                    $('.row-corporate1').hide();
                    $('.row-refNo1').hide();
                    $('.row-bankRefNo1').show();
                    $('.row-amount1').hide();
                    $('#trxRefNo1').hide();
                    $('#typeRefNo1').show();
                    $('#bankRefNo1').show();
                    $('#form-area').validator('reset');
                }
            }
            searchFunction();
        }
    });

    function searchFunction() {
        $('#trxRefNo').removeClass('error');
        $('.e-trxRefNo').removeClass('has-error has-danger');
        $('.g-trxRefNo').html('').hide();
        $('#trxRefNo1').removeClass('error');
        $('.e-trxRefNo1').removeClass('has-error has-danger');
        $('.g-trxRefNo1').html('').hide();
        $('#bankRefNo').removeClass('error');
        $('.g-bankRefNo').html('').hide();
        $('#bankRefNo1').removeClass('error');
        $('.g-bankRefNo1').html('').hide();
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
            radioValidation = $('input[name="searchBy-rb"]:checked').val()

            window.searchParam = {
                activeTabId: '#tab_validation',
                radioValidation: $('input[name="searchBy-rb"]:checked').val(),
                issuanceId: "",
                corpId: $('#corporate_code').val(),
                trxRefNo: $('#trxRefNo').val(),
                bankRefNo: $('#bankRefNo').val(),
                currencyCode: $('#currencyCode').val(),
                amountFrom: $('#amountFrom').val(),
                amountTo: $('#amountTo').val(),
                releaseDateFrom: $('#releaseDateFrom').val(),
                releaseDateTo: $('#releaseDateTo').val(),
            }

            value = {
                issuanceId: "",
                corpId: $('#corporate_code').val(),
                trxRefNo: $('#trxRefNo').val(),
                bankRefNo: $('#bankRefNo').val(),
                currencyCode: $('#currencyCode').val(),
                amountFrom: $('#amountFrom').val(),
                amountTo: $('#amountTo').val(),
                releaseDateFrom: $('#releaseDateFrom').val(),
                releaseDateTo: $('#releaseDateTo').val(),
                currentPage: "1",
                pageSize: "20"
            };

            radioValidation = window.searchParam.radioValidation

            if (radioValidation === '0') {
                $('#bankRefNo').prop('required', false);
                $('#trxRefNo').prop('required', false);
                $('#releaseDateFrom').prop('required', true);
                $('#releaseDateTo').prop('required', true);

                $('#bankRefNo').removeClass('error');
                $('.g-bankRefNo').hide();
                $('#trxRefNo').removeClass('error');
                $('.e-trxRefNo').removeClass('has-error has-danger');
                $('.g-trxRefNo').hide();

                $('.ig-dateFrom').removeClass('has-error has-danger');
                $('.e-dateFrom').hide();
                $('.ig-dateTo').removeClass('has-error has-danger');
                $('.e-dateTo').hide();

                var dateFromValue = (value.releaseDateFrom || '').trim();
                var dateToValue = (value.releaseDateTo || '').trim();

                console.log('dateFromValue:', dateFromValue);
                console.log('dateToValue:', dateToValue);

                var hasError = false;

                if(dateFromValue === '') {
                    console.log('From Date is empty - showing error');
                    $('.ig-dateFrom').addClass('has-error has-danger');
                    $('.e-dateFrom').show();
                    $('.e-dateFrom').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">From Date is mandatory.</span>');
                    hasError = true;
                }

                if(dateToValue === '') {
                    console.log('To Date is empty - showing error');
                    $('.ig-dateTo').addClass('has-error has-danger');
                    $('.e-dateTo').show();
                    $('.e-dateTo').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">To Date is mandatory.</span>');
                    hasError = true;
                }

                if(hasError) {
                    return false;
                }

                // Date comparison validation
                const releaseDateFrom = moment($('#releaseDateFrom').val(), "DD/MM/YYYY");
                const releaseDateTo = moment($('#releaseDateTo').val(), "DD/MM/YYYY");

                if (releaseDateTo.isBefore(releaseDateFrom)) {
                    flash('warning', 'To date which is smaller than the From date!');
                    return false;
                }

                // empty value
                value.trxRefNo = '';
                value.bankRefNo = '';
            } else if (radioValidation === '1') {
                // Transaction Reference No selected
                var trimmedTrxRefNo = $('#trxRefNo').val().trim();

                $('#trxRefNo').prop('required', true);
                $('#bankRefNo').prop('required', false);
                $('#releaseDateFrom').prop('required', false);
                $('#releaseDateTo').prop('required', false);

                // Clear date errors
                $('.ig-dateFrom').removeClass('has-error has-danger');
                $('.e-dateFrom').hide();
                $('.ig-dateTo').removeClass('has-error has-danger');
                $('.e-dateTo').hide();
                $('#releaseDateFrom').removeClass('error');
                $('#releaseDateTo').removeClass('error');

                // Clear bank ref error
                $('#bankRefNo').removeClass('error');
                $('.g-bankRefNo').hide();

                if (trimmedTrxRefNo === '') {
                    $('#trxRefNo').addClass('error');
                    $('.e-trxRefNo').addClass('has-error has-danger');
                    $('.g-trxRefNo').show();
                    $('.g-trxRefNo').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">Transaction reference number is mandatory.</span>');
                    return false;
                }

                // empty value
                value.bankRefNo = '';
                value.releaseDateFrom = '';
                value.releaseDateTo = '';
                value.amountFrom = '';
                value.amountTo = '';
                value.currencyCode = '';
                value.corpId = '';
            } else if (radioValidation === '2') {
                var trimmedBankRefNo = $('#bankRefNo').val().trim();

                $('#bankRefNo').prop('required', true);
                $('#trxRefNo').prop('required', false);
                $('#releaseDateFrom').prop('required', false);
                $('#releaseDateTo').prop('required', false);

                $('.ig-dateFrom').removeClass('has-error has-danger');
                $('.e-dateFrom').hide();
                $('.ig-dateTo').removeClass('has-error has-danger');
                $('.e-dateTo').hide();
                $('#releaseDateFrom').removeClass('error');
                $('#releaseDateTo').removeClass('error');

                $('#trxRefNo').removeClass('error');
                $('.e-trxRefNo').removeClass('has-error has-danger');
                $('.g-trxRefNo').hide();

                if (trimmedBankRefNo === '') {
                    $('#bankRefNo').addClass('error');
                    $('.g-bankRefNo').show();
                    $('.g-bankRefNo').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">Bank reference number is mandatory.</span>');
                    return false;
                }

                value.trxRefNo = '';
                value.releaseDateFrom = '';
                value.releaseDateTo = '';
                value.amountFrom = '';
                value.amountTo = '';
                value.currencyCode = '';
                value.corpId = '';
            }


            url_action = 'searchValidationLC'
        } else {
            radioUpdate = $('input[name="searchBy-rb1"]:checked').val()

            window.searchParam = {
                activeTabId: '#tab_status',
                radioUpdate: $('input[name="searchBy-rb1"]:checked').val(),
                issuanceId: "",
                corpId: $('#corporate_code1').val(),
                trxRefNo: $('#trxRefNo1').val(),
                bankRefNo: $('#bankRefNo1').val(),
                currencyCode: $('#currencyCode1').val(),
                amountFrom: $('#amountFrom1').val(),
                amountTo: $('#amountTo1').val(),
                releaseDateFrom: $('#releaseDateFrom1').val(),
                releaseDateTo: $('#releaseDateTo1').val(),
            }

            value = {
                issuanceId: "",
                corpId: $('#corporate_code1').val(),
                trxRefNo: $('#trxRefNo1').val(),
                bankRefNo: $('#bankRefNo1').val(),
                currencyCode: $('#currencyCode1').val(),
                amountFrom: $('#amountFrom1').val(),
                amountTo: $('#amountTo1').val(),
                releaseDateFrom: $('#releaseDateFrom1').val(),
                releaseDateTo: $('#releaseDateTo1').val(),
                currentPage: "1",
                pageSize: "20"
            };

            radioUpdate = window.searchParam.radioUpdate

            if (radioUpdate === '0') {
                $('#bankRefNo1').prop('required', false);
                $('#trxRefNo1').prop('required', false);
                $('#releaseDateFrom1').prop('required', true);
                $('#releaseDateTo1').prop('required', true);

                $('#bankRefNo1').removeClass('error');
                $('.g-bankRefNo1').hide();
                $('#trxRefNo1').removeClass('error');
                $('.e-trxRefNo1').removeClass('has-error has-danger');
                $('.g-trxRefNo1').hide();

                $('.ig-dateFrom1').removeClass('has-error has-danger');
                $('.e-dateFrom1').hide();
                $('.ig-dateTo1').removeClass('has-error has-danger');
                $('.e-dateTo1').hide();

                var dateFromValue1 = (value.releaseDateFrom || '').trim();
                var dateToValue1 = (value.releaseDateTo || '').trim();

                var hasError1 = false;

                if(dateFromValue1 === '') {
                    $('.ig-dateFrom1').addClass('has-error has-danger');
                    $('.e-dateFrom1').show();
                    $('.e-dateFrom1').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">From Date is mandatory.</span>');
                    hasError1 = true;
                }

                if(dateToValue1 === '') {
                    $('.ig-dateTo1').addClass('has-error has-danger');
                    $('.e-dateTo1').show();
                    $('.e-dateTo1').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">To Date is mandatory.</span>');
                    hasError1 = true;
                }

                if(hasError1) {
                    return false;
                }

                const releaseDateFrom1 = moment($('#releaseDateFrom1').val(), "DD/MM/YYYY");
                const releaseDateTo1 = moment($('#releaseDateTo1').val(), "DD/MM/YYYY");

                if (releaseDateTo1.isBefore(releaseDateFrom1)) {
                    flash('warning', 'To date which is smaller than the From date!');
                    return false;
                }

                value.trxRefNo = '';
                value.bankRefNo = '';
            } else if (radioUpdate === '1') {
                var trimmedTrxRefNo1 = $('#trxRefNo1').val().trim();

                $('#trxRefNo1').prop('required', true);
                $('#bankRefNo1').prop('required', false);
                $('#releaseDateFrom1').prop('required', false);
                $('#releaseDateTo1').prop('required', false);

                $('.ig-dateFrom1').removeClass('has-error has-danger');
                $('.e-dateFrom1').hide();
                $('.ig-dateTo1').removeClass('has-error has-danger');
                $('.e-dateTo1').hide();
                $('#releaseDateFrom1').removeClass('error');
                $('#releaseDateTo1').removeClass('error');

                $('#bankRefNo1').removeClass('error');
                $('.g-bankRefNo1').hide();

                if (trimmedTrxRefNo1 === '') {
                    $('#trxRefNo1').addClass('error');
                    $('.e-trxRefNo1').addClass('has-error has-danger');
                    $('.g-trxRefNo1').show();
                    $('.g-trxRefNo1').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">Transaction reference number is mandatory.</span>');
                    flash('warning', 'Transaction reference number is mandatory.');
                    return false;
                }

                value.bankRefNo = '';
                value.releaseDateFrom = '';
                value.releaseDateTo = '';
                value.amountFrom = '';
                value.amountTo = '';
                value.currencyCode = '';
                value.corpId = '';
            } else if (radioUpdate === '2') {
                var trimmedBankRefNo1 = $('#bankRefNo1').val().trim();

                $('#bankRefNo1').prop('required', true);
                $('#trxRefNo1').prop('required', false);
                $('#releaseDateFrom1').prop('required', false);
                $('#releaseDateTo1').prop('required', false);

                $('.ig-dateFrom1').removeClass('has-error has-danger');
                $('.e-dateFrom1').hide();
                $('.ig-dateTo1').removeClass('has-error has-danger');
                $('.e-dateTo1').hide();
                $('#releaseDateFrom1').removeClass('error');
                $('#releaseDateTo1').removeClass('error');

                $('#trxRefNo1').removeClass('error');
                $('.e-trxRefNo1').removeClass('has-error has-danger');
                $('.g-trxRefNo1').hide();

                if (trimmedBankRefNo1 === '') {
                    $('#bankRefNo1').addClass('error');
                    $('.g-bankRefNo1').show();
                    $('.g-bankRefNo1').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">Bank reference number is mandatory.</span>');
                    flash('warning', 'Bank reference number is mandatory.');
                    return false;
                }

                value.trxRefNo = '';
                value.releaseDateFrom = '';
                value.releaseDateTo = '';
                value.amountFrom = '';
                value.amountTo = '';
                value.currencyCode = '';
                value.corpId = '';
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
                {
                    targets: 8,
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

                    unitOption = '<option value="" selected="selected">select corporate</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="'+ obj.corporateId +'"data-name = "'+obj.corporateName+'">'+ obj.corporateId + ' - ' + obj.corporateName + '</option>';
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
