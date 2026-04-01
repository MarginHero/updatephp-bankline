@include('_partials.header_content',['breadcrumb'=>['Import Bills','Search']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
			<input type="hidden" id="index" value="1"/>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Import Bills Search</h3>
                </div>
				<form id="form-area" class="form-horizontal form-area">
					<div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row">
									<div class="col-md-3">
										<input type="radio" id="refno-rb" name="searchBy-rb" value="0" checked>
										<label for="refno-rb" style="margin-left: 7px;">Bill Reference Number</label>
									</div>
									<div class="col-md-7 state_billRefno">
										<input type="text" id="billRefNo" name="billRefNo" class="form-control" autocomplete="off" value="" maxlength="40" data-error="Bill reference number is mandatory.">
                                        <div class="help-block with-errors"></div>
                                    </div>

								</div>
							</div>
							<div class="row">
								<div class="mb-3 row">
									<div class="col-md-3">
										<input type="radio" id="bankRefno-rb" name="searchBy-rb" value="1">
										<label for="bankRefno-rb" style="margin-left: 7px;">Bank Reference Number</label>
									</div>
									<div class="col-md-7 state_bankRefno" style="display: none">
										<input type="text" id="bankRefNo" name="bankRefNo" class="form-control" autocomplete="off" value="" maxlength="40" data-error="Bank reference number is mandatory.">
                                        <div class="help-block with-errors"></div>
                                    </div>

								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row">
									<div class="col-md-3">
										<input type="radio" id="corp-rb" name="searchBy-rb" value="2">
										<label for="corp-rb" style="margin-left: 7px;">Corporate ID</label>
									</div>
                                    <div class="col-md-7 state_corpId" style="display: none">
										<select class="form-control" id="corpId">
											<option></option>
										</select>
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
					</div>
				</form>
                <div class="box-header list-title">
                    <h3 class="box-title">Import Bills Listing</h3>
                </div>

                <div class="box-body list-title">
                    <div class="container-fluid">
                        <div class="row">
                            <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;overflow-x:auto">
                                <thead>
                                    <tr>
                                        <th align="center"><strong>Company ID</strong></th>
                                        <th align="center"><strong>Company Name</strong></th>
                                        <th align="center"><strong>LC Master Reference No</strong></th>
                                        <th align="center"><strong>Bill Reference No</strong></th>
                                        <th align="center"><strong>Bank Presentation Reference No</strong></th>
                                        <th align="center"><strong>Bank Reference No</strong></th>
                                        <th align="center"><strong>LC Amount</strong></th>
                                        <th align="center"><strong>Bill Amount</strong></th>
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

	var service = '{{ $service }}';
    var currentPageTable;
    var currentPageSize;
    var oTable;

    $(document).ready(function () {

        $('#list').hide();
        $('.list-title').hide();

        getCorporateDroplist();

        $('#list tbody').on('click', 'a', function (e) {
            if(e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
            
            var bankRefNo = $('#bankRefNo').val();
            var referenceNo = $(this).attr('data-bankRefNo');
            var billRefNo = $('#billRefNo').val();
            var idBill = $(this).attr('data-idBill');

            // console.log("=======================", idBill);

            var res = app.setView(service,'detail');
            if(res=='done'){
                // $('#referenceNo').val(referenceNo);
                // $('#corpId').val(corpId);
                // $('#bankRefNo').val(bankRefNo);
                // $('#billRefNo').val(billRefNo);
                getDetail(idBill);
            }
        });

        $('#search').on('click', function () {
            currentPageTable= 0;
            currentPageSize = 10;
            
            searchData();
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

        $('input[name="searchBy-rb"]').on('change', function(e){

            if (this.value=='0') {
                $('.state_billRefno').show();
                $('.state_bankRefno').hide();
                $('.state_corpId').hide();
                $('#form-area').validator('reset');
            } else if (this.value == '1'){
                $('.state_billRefno').hide();
                $('.state_bankRefno').show();
                $('.state_corpId').hide();
                $('#form-area').validator('reset');
            } else {
                $('.state_billRefno').hide();
                $('.state_bankRefno').hide();
                $('.state_corpId').show();
                $('#form-area').validator('reset');
            }
        });

        if(window.searchParam){
            if(window.searchParam.billRefNo){
                $("#refno-rb").attr('checked', 'checked');
                $('#billRefNo').val(window.searchParam.billRefNo);

                $('.state_billRefno').show();
                $('.state_bankRefno').hide();
                $('.state_corpId').hide();
                $('#form-area').validator('reset');

            } else if (window.searchParam.bankRefNo) {
                $("#bankRefno-rb").attr('checked', 'checked');
                $('#bankRefNo').val(window.searchParam.bankRefNo);

                $('.state_billRefno').hide();
                $('.state_bankRefno').show();
                $('.state_corpId').hide();
                $('#form-area').validator('reset');

            } else if (window.searchParam.corpId) {
                $("#corp-rb").attr('checked', 'checked');
                $('#corpId option:selected').val(window.searchParam.corpId);

                $('.state_billRefno').hide();
                $('.state_bankRefno').hide();
                $('.state_corpId').show();
                $('#form-area').validator('reset');
            }
            searchData();
        }
    });

    function searchData() {
        $(this).prop("disabled",true);
        $('#list').show();
        $('.list-title').show();
        var url_action = 'search';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = {"id": "ASC"};
        var searchBy = $('input[name="searchBy-rb"]:checked').val();

        window.searchParam = {
            searchBy: $('input[name="searchBy-rb"]:checked').val(),
            billRefNo: $('#billRefNo').val(),
            bankRefNo: $('#bankRefNo').val(),
            corpId: $('#corpId option:selected').val(),
        }

        var value = {
            currentPage: "1",
            pageSize: "20"
        };

        searchBy = window.searchParam.searchBy

        if (searchBy == '0') {
            value.billRefNo = $('#billRefNo').val();
        }else if(searchBy == '1'){
             value.bankRefNo = $('#bankRefNo').val();
        }else if(searchBy == '2'){
            value.corpId = $('#corpId option:selected').val();
        }

        $('#form-area').validator('validate');
        if($('#form-area').validator('validate').has('.has-error').length!=0){
            return;
        }
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
                        lcMasterRefNo: "lcMasterRefNo",
                        bankRefNo:"bankRefNo",
                        id:"id",
                    },
                    render: function ( data, type, full, meta ) {
                        return '<a href="javascript:void(0)" data-bankRefNo="'+data.bankRefNo+'" data-idBill="'+data.id+'">'+data.lcMasterRefNo+'</a>';
                    },
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 3,
                    data: "billRefNo",
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 4,
                    data: "bankPresentationRefNo",
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 5,
                    data: "bankRefNo",
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 6,
                    data: {
                        amount: "amount",
                        currency: "currency"
                    },
                    render: function ( data, type, full, meta ) {
                        return data.currency + ' ' + currencyFormat(data.amount)
                    },
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 7,
                    data: {
                        amount: "billAmount",
                        currency: "billCurrency"
                    },
                    render: function ( data, type, full, meta ) {
                        return data.billCurrency + ' ' + currencyFormat(data.billAmount)
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
                        unitOption += '<option value="'+ obj.corporateId +'"data-name = "'+obj.corporateName+'">'+obj.corporateId+ ' - ' + obj.name + '</option>';
                    });

					$('#corpId').html(unitOption);
                    $('#corpId').select2({width: '100%'});

                    if(window.searchParam) {
                        $('#billRefNo').val(window.searchParam.billRefNo).change();
                        $('#bankRefNo').val(window.searchParam.bankRefNo).change();
                        $('#corpId').val(window.searchParam.corpId).change();
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


    function setField(fieldName, value) {
        return $('#'+fieldName).text(value);
    }

    function currencyFormat (num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string 
    }

</script>
