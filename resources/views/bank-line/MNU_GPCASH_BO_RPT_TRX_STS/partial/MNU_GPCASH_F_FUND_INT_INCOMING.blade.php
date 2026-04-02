
<!-- <section class="content" id="displayInt">
    <div class="panel panel-default">
        <div class="panel-body box-body"> -->
            <input type="hidden" id="referenceNo" value=""/>
            <!-- <div class="box">
                <div class="box-header">
					<h3 class="box-title">Source Account</h3><br>
				</div> -->
				<div class="box-body">
					<div class="container-fluid">
                        <div class="row">
							<div class="mb-3 row form-group form-group">
								<label class="col-md-5 col-form-label text-end">Beneficiary Name</label>
								<div class="col-md-6">
									<label id="benName"></label>
								</div>
							</div>
						</div>
                        <div class="row">
							<div class="mb-3 row form-group form-group">
								<label class="col-md-5 col-form-label text-end">Account Number</label>
								<div class="col-md-6">
									<label id="benAccountNo"></label>
								</div>
							</div>
						</div>
                    </div>
                </div>
                <!-- <div class="box-header">
                    <h3 class="box-title">Transfer Detail</h3><br>
                </div> -->
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group form-group">
                                <label class="col-md-5 col-form-label text-end">Date</label>
                                <div class="col-md-6">
                                    <label id="date"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group form-group">
                                <label class="col-md-5 col-form-label text-end">Ordering Customer Name</label>
                                <div class="col-md-6">
                                    <label id="senderAccountNo"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
							<div class="mb-3 row form-group form-group">
								<label class="col-md-5 col-form-label text-end"></label>
								<div class="col-md-6">
									<label id="senderName"></label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="mb-3 row form-group form-group">
								<label class="col-md-5 col-form-label text-end">Amount</label>
								<div class="col-md-6">
									<label id="trxAmount"></label>
								</div>
							</div>
						</div>
                        <div class="row">
                            <div class="mb-3 row form-group form-group">
								<label class="col-md-5 col-form-label text-end">Currency</label>
								<div class="col-md-6">
									<label id="trxCurrency"></label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="mb-3 row form-group form-group">
                                <label class="col-md-5 col-form-label text-end">Remittance Information</label>
                                <div class="col-md-6">
                                    <label id="remittanceInfo" style="overflow-wrap:break-word;word-break: break-word"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group form-group">
                                <label class="col-md-5 col-form-label text-end">Name of Goods</label>
                                <div class="col-md-6">
                                    <label id="nameOfGoods"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group form-group">
                                <label class="col-md-5 col-form-label text-end">Country of Origin</label>
                                <div class="col-md-6">
                                    <label id="countryOfOrigin"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group form-group">
                                <label class="col-md-5 col-form-label text-end">Country of Destination</label>
                                <div class="col-md-6">
                                    <label id="portOfLoading"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group form-group">
                                <label class="col-md-5 col-form-label text-end">Country of Loading</label>
                                <div class="col-md-6">
                                    <label id="portOfShipment"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="row_isRelated">
                            <div class="mb-3 row form-group form-group">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label class="col-form-label text-end" id="isRelatedYes" style="text-align:left !important;display: none;" >
                                        Related to transaction with sanctioned countries
                                    </label>
                                    <label class="col-form-label text-end" id="isRelatedNo" style="text-align:left !important;display: none;" >
                                        Not related to transaction with sanctioned countries
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr style="height:1px;border:none;color:#333;background-color:#d2d6de;"/>
                        <div class="row">
                            <div class="mb-3 row form-group form-group">
                                <label class="col-md-5 col-form-label text-end">Payment Schedule</label>
                                <div class="col-md-6">
                                    <label id="paymentSchedule">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row instructionModeClass"></div>

                    </div>
                </div>
            <!-- </div>
        </div>
    </div> -->
<!-- </section> -->

<script>
    var oTable;
    //var chargeList;
    var service = '{{ $service }}';
var createdByUserCode = '{{ $createdByUserCode }}';
    $(document).ready(function () {

    });

    function getDetailData(refNo,userId){
        var value = {
            referenceNo : refNo,
            loginUserCode:userId
        };
        var url_action = 'detailPendingTask';
        var action = 'DETAIL';
        var menu = service;
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
                    var detail = result.details;
                    var confirm_data = detail.confirm_data;
                    //chargeList = detail.chargeList;

                    $('#benName').text(detail.benName);
                    $('#benAccountNo').text(detail.benId);
                    
                    $('#date').text(detail.date);
                    $('#senderAccountNo').text(detail.senderAccountNo);
                    $('#senderName').text(detail.senderName);
                    $('#trxAmount').text(currencyFormat(detail.amount));
                    $('#trxCurrency').text(detail.transactionCurrency);
                    $('#remittanceInfo').text(detail.remittanceInfo);
                    $('#nameOfGoods').text(detail.nameOfGoods);
                    $('#countryOfOrigin').text(confirm_data.countryOfOrigin);
                    $('#portOfLoading').text(confirm_data.portOfLoading);
                    $('#portOfShipment').text(confirm_data.portOfShipment);

					if(detail.isRelatedCountry == 'N'){
						$('#isRelatedNo').show();
					} else {
						$('#isRelatedYes').show();
					}
					$('#row_isRelated').show();

                    setInstructionMode(detail, confirm_data);

                } else {
                    flash('warning', result.message);
                }


            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            },
            complete: function(data) {
                $('.table-hidden').show();

            }
        });
    }

    function currencyFormat(num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

    function setInstructionMode(detail, confirm_data){
        var instructionMode = detail.instructionMode;

        tags = '<div class="mb-3 row form-group form-group">'
        if (instructionMode !=null && instructionMode == 'I') {
            tags += '<label class="col-md-5 col-form-label text-end">Payment Date</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+confirm_data.payment_date+'</label>';
            tags += '</div>';
            if(detail.sessionTime != '00:00'){
                tags += '<label class="col-md-5 col-form-label text-end">at</label>';
                tags += '<div class="col-md-6">';
                tags += '<label>'+detail.sessionTime+'</label>';
                tags += '</div>';
            }

                $('#paymentSchedule').text("Immediate");
        } else if (instructionMode !=null && instructionMode == 'F') {
            tags += '<label class="col-md-5 col-form-label text-end">Payment Date</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+confirm_data.payment_date+'</label>';
            tags += '</div>';
            if(detail.sessionTime != '00:00'){
                tags += '<label class="col-md-5 col-form-label text-end">at</label>';
                tags += '<div class="col-md-6">';
                tags += '<label>'+detail.sessionTime+'</label>';
                tags += '</div>';
            }
             $('#paymentSchedule').text("Future Date");
        } else if (instructionMode !=null && instructionMode == 'R') {
            tags += '<label class="col-md-5 col-form-label text-end">For</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+confirm_data.payment_for+'</label>';
            tags += '</div>';
            tags += '<label class="col-md-5 col-form-label text-end">Every</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+confirm_data.payment_every+'</label>';
            tags += '</div>';
            if(detail.sessionTime != '00:00'){
                tags += '<label class="col-md-5 col-form-label text-end">At</label>';
                tags += '<div class="col-md-6">';
                tags += '<label>'+detail.sessionTime+'</label>';
                tags += '</div>';
            }
            tags += '<label class="col-md-5 col-form-label text-end">End Date</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+confirm_data.payment_date_end+'</label>';
            tags += '</div>';

            $('#paymentSchedule').text("Recurring");
        }
        tags += '</div>';

        $('.instructionModeClass').html(tags);

    }


</script>
