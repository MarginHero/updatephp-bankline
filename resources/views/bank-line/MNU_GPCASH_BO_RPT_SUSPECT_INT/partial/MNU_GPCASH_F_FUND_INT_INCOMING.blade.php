
<!-- <section class="content" id="displayInt">
    <div class="panel panel-default">
        <div class="panel-body box-body"> -->
            <input type="hidden" id="referenceNo" value=""/>
            <!-- <div class="box">
                <div class="box-header">
					<h3 class="box-title">Source Account</h3><br>
				</div> -->

                <div class="box-header">
                    <h3 class="box-title">Source Account</h3><br>
                </div>
				<div class="box-body">
					<div class="container-fluid">
                        <div class="row">
							<div class="mb-3 row form-group">
								<label class="col-md-5 col-form-label text-end">Beneficiary Name</label>
								<div class="col-md-6">
									<label id="benAccountName"></label>
								</div>
							</div>
						</div>
                        <div class="row" >
							<div class="mb-3 row form-group">
								<label class="col-md-5 col-form-label text-end">Account Number</label>
								<div class="col-md-6">
									<label id="accountNumber"></label>
								</div>
							</div>
						</div>
                    </div>
                </div>
                <!-- <div class="box-header">
                    <h3 class="box-title">Beneficiary Account</h3><br>
                </div> -->

                <div class="box-header">
                    <h3 class="box-title">Transfer Detail</h3><br>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Date</label>
                                <div class="col-md-6">
                                    <label id="date"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Ordering Customer Name</label>
                                <div class="col-md-6">
                                    <label id="orderCustomerName"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="address1"></label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Amount</label>
                                <div class="col-md-6">
                                    <label id="transactionAmount"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Currency</label>
                                <div class="col-md-6">
                                    <label id="transactionCurrency"></label>
                                </div>
                            </div>
                        </div>
						<div class="row">
							<div class="mb-3 row form-group">
								<label class="col-md-5 col-form-label text-end">Remittance Information</label>
								<div class="col-md-6">
									<label id="remittanceInfo"></label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="mb-3 row form-group">
								<label class="col-md-5 col-form-label text-end">Name of Goods</label>
								<div class="col-md-6">
									<label id="nameOfGoods"></label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="mb-3 row form-group">
								<label class="col-md-5 col-form-label text-end">Country of Origin</label>
								<div class="col-md-6">
									<label id="countryOfOrigin"></label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="mb-3 row form-group">
								<label class="col-md-5 col-form-label text-end">Country of Destination</label>
								<div class="col-md-6">
									<label id="countryOfLoading"></label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="mb-3 row form-group">
								<label class="col-md-5 col-form-label text-end">Country of Loading</label>
								<div class="col-md-6">
									<label id="countryOfShipment"></label>
								</div>
							</div>
						</div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6">
                                <label class="col-form-label text-end" id="isRelatedYes"  style="text-align:left !important;display: none;" >
                                    Related to transaction with sanctioned countries
                                </label>
                                <label class="col-form-label text-end" id="isRelatedNo"  style="text-align:left !important;display: none;" >

                                        Not related to transaction with sanctioned countries
                                </label>
                            </div>
                        </div>
					</div>
                        <hr style="height:1px;border:none;color:#333;background-color:#d2d6de;"/>
                        <div class="row">
                            <div class="mb-3 row form-group">
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
    var chargeList;
    var service = '{{ $service }}';
    var createdByUserCode = '{{ $createdByUserCode }}';
    $(document).ready(function () {

    });

    function getDetailData(data){
        var detail = data.detail;
        var confirm_data = detail.confirm_data;
        chargeList = detail.chargeList;
        $('#benAccountName').text(detail.benAccountName);
        $('#accountNumber').text(detail.benId);
        $('#orderCustomerName').text(detail.senderAccountNo);
        $('#address1').text(detail.senderName);
        $('#address2').text(detail.address1);
        $('#address3').text(detail.address2);
        $('#address4').text(detail.address3);
        $('#transactionAmount').text(currencyFormat(detail.transactionAmount))
        $('#transactionCurrency').text(detail.transactionCurrency)
        $('#remittanceInfo').text(detail.remittanceInfo)
        $('#nameOfGoods').text(detail.nameOfGoods)
        $('#countryOfOrigin').text(detail.confirm_data.countryOfOrigin)
        $('#countryOfLoading').text(detail.confirm_data.portOfLoading)
        $('#countryOfShipment').text(detail.confirm_data.portOfShipment)
        if(detail.isRelatedCountry == 'N'){
            $('#isRelatedNo').show();
        } else {
            $('#isRelatedYes').show();
        }
        $('#date').text(detail.date);
        setInstructionMode(detail, confirm_data);
    }

    function setInstructionMode(detail, confirm_data){
        var instructionMode = detail.instructionMode;

        tags = '<div class="mb-3 row form-group">'
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
        }
        tags += '</div>';

        $('.instructionModeClass').html(tags);

    }

    function setChargesDetail(chargeList){

        tags = '<div class="mb-3 row form-group">'
        for (var i = 0; i < chargeList.length; i++) {
            if (chargeList[i].value != '0' && chargeList[i].value !='0.00' && chargeList[i].value != '0.0000000' && chargeList[i].value != '.00') {
                tags += '<label class="col-md-2 col-form-label text-end">'+chargeList[i].serviceChargeName+'</label><div class="col-md-6"><label>'+chargeList[i].currencyCode+' '+chargeList[i].value+'</label></div>';
            }
        }
        tags += '</div>';

        $('.chargeClass').html(tags);

    }

    function currencyFormat(num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }


</script>
