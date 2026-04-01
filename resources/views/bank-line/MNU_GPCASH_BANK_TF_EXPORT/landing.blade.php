﻿@include('_partials.header_content',['breadcrumb'=>['Export LC','Search']])

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
</style>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
			<input type="hidden" id="index" value="1"/>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Export LC Search</h3>
                </div>
				<form id="form-area" class="form-horizontal form-area">
					<div class="box-body">
						<div class="container-fluid">
							<div class="row state_createddt">
								<div class="mb-3 row">
									<div class="col-md-3">
                                        <input type="radio" id="createddt-rb" name="searchBy-rb" value="0" checked>
										<label ><strong>Issued Date Range</strong></label>
									</div>
									<div class="col-md-7">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-md-5">
                                                <div class="input-group ig-dateFrom">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="dateFrom" name="dateFrom" class="form-control datepicker detail numeric" autocomplete="off" data-error="This field is mandatory." style="width: 150px;" required>
                                                </div>
                                                <div class="help-block with-errors e-dateFrom"></div>
                                            </div>
                                            <div class="col-md-2 text-center">
                                                <label class="col-form-label"><strong>to</strong></label>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="input-group ig-dateTo">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="dateTo" name="dateTo" class="form-control datepicker numeric" autocomplete="off" data-error="This field is mandatory." style="width: 150px;" required>
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
										<label  for="createddt-rb">Corporate ID</label>
									</div>
									<div class="col-md-7 state_createddt">
										<select class="form-control" id="corpId">
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
                                        <select class="form-control" id="currency">
                                                    <option></option>
                                                </select>
                                            </div>
                                    <div class="col-md-2">
                                        <input type="text" id="amountFrom" name="amountFrom" class="form-control numeric-input" autocomplete="off" value="" maxlength="40">
                                            </div>
                                    <div class="col-md-1 text-center col-form-label text-end">
                                                <label class="col-form-label"><strong>to</strong></label>
                                            </div>
                                    <div class="col-md-2">
                                        <input type="text" id="amountTo" name="amountTo" class="form-control numeric-input" autocomplete="off" value="" maxlength="40" >
                                    </div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row">
									<div class="col-md-3">
										<input type="radio" id="refno-rb" name="searchBy-rb" value="1">
										<label for="refno-rb" ><strong>Bank Reference Number</strong></label>
									</div>
									<div class="col-md-7 state_refno">
										<input type="text" id="bankRefNo" name="bankRefNo" class="form-control" autocomplete="off" value="" maxlength="40" data-error="Reference number is mandatory.">
                                        <div class="help-block with-errors"></div>
                                    </div>

								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
                        <div class="float-left">
							<button type="button" id="search" name="search" class="btn btn-primary">Search</button>
						</div>
						<div class="float-right">
							<button type="button" id="add" name="add" class="btn btn-primary">Add</button>
						</div>
					</div>
				</form>
			</div>

			<div class="box-header list-title">
				<h3 class="box-title">Export LC Listing</h3>
			</div>

			<div class="box-body list-title">
				<div class="container-fluid">
					<div class="row">
						<table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
							<thead>
								<tr>
									<th align="center"><strong>Company ID</strong></th>
									<th align="center"><strong>Company Name</strong></th>
									<th align="center"><strong>Transaction Reference No</strong></th>
									<th align="center"><strong>Bank Reference No</strong></th>
									<th align="center"><strong>Issued Date</strong></th>
									<th align="center"><strong>Amount</strong></th>
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
    var currentPageTable;
    var currentPageSize;
    var oTable;

    $(document).ready(function () {
        var activeTabId

        activeTabId = '#main';

        $('#list').hide();
        $('.list-title').hide();
        $('.e-dateFrom').hide();
        $('.e-dateTo').hide();

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true
        });

        $('#dateFrom').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#dateTo').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));


        $('#bankRefNo').on('input', function() {
            if($(this).val().trim() !== '') {
                $(this).removeClass('error');
                $(this).parent().find('.help-block.with-errors').html('').hide();
            }
        });

        getCorporateDroplist();

        $('input[name="searchBy-rb"]').on('change', function() {

            if (this.value == '1') {
                $('#bankRefNo').prop('required', true);
                $('#dateFrom').prop('required', false);
                $('#dateTo').prop('required', false);

                $('.ig-dateFrom').removeClass('has-error has-danger');
                $('.e-dateFrom').hide();
                $('.ig-dateTo').removeClass('has-error has-danger');
                $('.e-dateTo').hide();
                $('#dateFrom').removeClass('error');
                $('#dateTo').removeClass('error');

            } else {
                $('#bankRefNo').prop('required', false);
                $('#dateFrom').prop('required', true);
                $('#dateTo').prop('required', true);

                $('#bankRefNo').removeClass('error');
                $('#bankRefNo').parent().find('.help-block.with-errors').html('').hide();
            }
            $('#form-area').validator('reset');
        });

        $('#search').on('click', function () {
            currentPageTable= 0;
            currentPageSize = 10;

            searchData();
        });

        $('#dateFrom').on("change", function () {
            $('.ig-dateFrom').removeClass('has-error has-danger')
            $('.e-dateFrom').hide();
        });

        $('#dateTo').on("change", function () {
            $('.ig-dateTo').removeClass('has-error has-danger')
            $('.e-dateTo').hide();
        });

        $('#add').on('click', function () {
            var res = app.setView(service,'add');
            if(res=='done'){
                $('#type').val('add');
            }
        });

        $('#list tbody').on('click', 'a', function (e) {
            if(e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
            var dateFrom = $('#dateFrom').val();
            var dateTo = $('#dateTo').val();
            var corpId = $('#corporate_code').val();
            var currencyCode = $('#currencyCode').val();
            var amountFrom = $('#amountFrom').val();
            var amountTo = $('#amountTo').val();
            var bankRefNo = $('#bankRefNo').val();
            var referenceNo = $(this).attr('data-referenceNo');

            var res = app.setView(service,'detail');
            if(res=='done'){
                $('#referenceNo').val(referenceNo);
                $('#dateFrom').val(dateFrom);
                $('#dateTo').val(dateTo);
                $('#corpId').val(corpId);
                $('#currencyCode').val(currencyCode);
                $('#amountFrom').val(amountFrom);
                $('#amountTo').val(amountTo);
                $('#bankRefNo').val(bankRefNo);
                getDetail();
            }
        });
        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',.-'
        });

        $('.numeric-input').numeric({
            allowMinus: false,
            allowThouSep : false,
            allowDecSep : false,
        });

        if(window.searchParam){
            if(window.searchParam.bankRefNo){
                $("#refno-rb").attr('checked', 'checked');
                $('#bankRefNo').val(window.searchParam.bankRefNo);

                $('#form-area').validator('reset');
            } else {
                $("#createddt-rb").attr('checked', 'checked');
            }
            searchData();
        }
    });

    function searchData() {

        $('#bankRefNo').removeClass('error');
        $('#bankRefNo').parent().find('.help-block.with-errors').html('').hide();
        $('.ig-dateFrom').removeClass('has-error has-danger');
        $('.e-dateFrom').hide().html('');
        $('.ig-dateTo').removeClass('has-error has-danger');
        $('.e-dateTo').hide().html('');

        $(this).prop("disabled",true);
        $('#list').hide();
        $('.list-title').hide();
        var url_action = 'search';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = {"id": "ASC"};

        var radioValue = $('input[name="searchBy-rb"]:checked').val();
        var searchByRefNo = (radioValue == '1');

        window.searchParam = {
            searchByRefNo: (radioValue == '1'),
            dateFrom: $('#dateFrom').val(),
            dateTo: $('#dateTo').val(),
            corpId: $('#corpId option:selected').val(),
            currencyCode: $('#currency option:selected').val(),
            amountFrom: $('#amountFrom').val(),
            amountTo: $('#amountTo').val(),
            bankRefNo: $('#bankRefNo').val(),
        }

        var value = {
            dateFrom: $('#dateFrom').val(),
            dateTo: $('#dateTo').val(),
            corpId: $('#corpId option:selected').val(),
            currencyCode: $('#currency option:selected').val(),
            amountFrom: $('#amountFrom').val(),
            amountTo: $('#amountTo').val(),
            bankRefNo: $('#bankRefNo').val(),
            currentPage: "1",
            pageSize: "20"
        };

        searchByRefNo = window.searchParam.searchByRefNo

        if (searchByRefNo) {
            $('#bankRefNo').prop('required', true);
            $('#dateFrom').prop('required', false);
            $('#dateTo').prop('required', false);

            $('.ig-dateFrom').removeClass('has-error has-danger')
            $('.e-dateFrom').hide();
            $('.ig-dateTo').removeClass('has-error has-danger')
            $('.e-dateTo').hide();

            var trimmedBankRefNo = (value.bankRefNo || '').trim();
            if (trimmedBankRefNo === '') {
                $('#bankRefNo').addClass('error');
                $('#bankRefNo').parent().find('.help-block.with-errors').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">Bank reference number is mandatory.</span>').show();
                return false;
            }

            value.dateFrom = '';
            value.dateTo = '';
            value.corpId = '';
            value.currencyCode = '';
            value.amountFrom = '';
            value.amountTo = '';
        } else {
            $('#bankRefNo').prop('required', false);
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
            value.bankRefNo = '';
        }

        // Skip bootstrap validator check - use our custom validation only
        // $('#form-area').validator('validate');
        // if($('#form-area').validator('validate').has('.has-error').length!=0){
        //     return false;
        // }

        if (!searchByRefNo) {
            const dateFrom = moment($('#dateFrom').val(), "DD/MM/YYYY");
            const dateTo = moment($('#dateTo').val(), "DD/MM/YYYY");

            if (dateTo.isBefore(dateFrom)) {
                return false;
            }
        }

        $('#list').show();
        $('.list-title').show();

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
                    data: {
                        referenceNo: "referenceNo",
                    },
                    render: function ( data, type, full, meta ) {
                        return '<a href="javascript:void(0)" data-referenceNo="'+data.referenceNo+'">'+data.referenceNo+'</a>';
                    },
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 3,
                    data: "bankReferenceNo",
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 4,
                    data: {
                        issueDate: "issueDate"
                    },
                    render: function ( data, type, full, meta ) {
                        return moment(data.issueDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")
                    },
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 5,
                    data: {
                        amount: "amount",
                        currency: "currency"
                    },
                    render: function ( data, type, full, meta ) {
                        return data.currency + ' ' + data.amount
                    },
                    orderable: false,
                    className: 'dt-center',
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
                    $('#search').prop("disabled",false);
                },
                complete:function(data){
                    currentPageTable = oTable.page.info().page;
                    currentPageSize = oTable.page.len();
                }
            }
        });
    }

    function getCurrencyDropList() {

        var url_action = 'searchCurrencyForDroplist';
        var action = 'SEARCH';
        var menu = '{{ $service }}';
        var currencyOption;
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            async: false,
            type: 'json',
            data: {
                menu : menu,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    // currencyOption = '<select id="currency" class="form-control state_edit" required>';
                    currencyOption += '<option value="" selected="selected">ALL</option>';
                    $.each(result.result, function (idx, obj) {
                        currencyOption += '<option value="' + obj.code + '" data-name="'+obj.name+'">' + obj.name + '</option>';
                    });
                    // currencyOption += '</select>';
                    // currencyOption += '<div class="help-block with-errors"></div>';

                    $('#currency').html(currencyOption);
                    $('#currency').select2({width: '100%'});

                    if(window.searchParam) {
                        $('#corpId').val(window.searchParam.corpId).change();
                        $('#currency').val(window.searchParam.currencyCode).change();
                        $('#dateFrom').val(window.searchParam.dateFrom).change();
                        $('#dateTo').val(window.searchParam.dateTo).change();
                        $('#amountFrom').val(window.searchParam.amountFrom).change();
                        $('#amountTo').val(window.searchParam.amountTo).change();
                        $('#bankRefNo').val(window.searchParam.bankRefNo).change();
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
                        unitOption += '<option value="'+ obj.corporateId +'"data-name = "'+obj.corporateName+'">'+obj.corporateId + " - " + obj.corporateName + '</option>';
                    });

					$('#corpId').html(unitOption);
                    $('#corpId').select2({width: '100%'});

                    getCurrencyDropList();
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

    function checkDate(){

        var count = 0;
        var date1 = $("#dateFrom").data('datepicker').getFormattedDate('yyyy/mm/dd');
        var date2 = $("#dateto").data('datepicker').getFormattedDate('yyyy/mm/dd');

		// console.log("checkDate1 ", new Date() - new Date($("#dateFrom").data('datepicker').getFormattedDate('yyyy/mm/dd')));
		// console.log("checkDate2 ", new Date() - new Date(date2));

        return count;

    }

    function setField(fieldName, value) {
        return $('#'+fieldName).text(value);
    }

</script>
