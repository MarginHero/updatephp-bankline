﻿
<!-- <section class="content" id="displayInt">
    <div class="panel panel-default">
        <div class="panel-body box-body"> -->
            <input type="hidden" id="referenceNo" value=""/>
            <!-- <div class="box">
                <div class="box-header">
					<h3 class="box-title">Source Account</h3><br>
				</div> -->

                <div class="box-header">
                    <h3 class="box-title">Beneficiary Account</h3><br>
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
                                    <label id="debitAccountNo"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="debitAccountName"></label>
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
									<div id="remittanceInfo" style="word-wrap: break-word; white-space: pre-wrap; max-width: 100%;"></div>
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
        $('#benAccountName').text(data.benAccountName);
        $('#accountNumber').text(data.benAccountNo);
        $('#debitAccountNo').text(data.debiturAccountNo);
        $('#debitAccountName').text(data.debiturAccountName);
        $('#transactionAmount').text(currencyFormat(data.transactionAmount))
        $('#transactionCurrency').text(data.transactionCurrency)

        var remittanceInfo = data.remitterInfo || '';
        if (remittanceInfo.length > 120) {
            var formattedInfo = formatRemittanceInfo(remittanceInfo, 120);
            $('#remittanceInfo').html(formattedInfo);
        } else {
            $('#remittanceInfo').text(remittanceInfo);
        }

        $('#nameOfGoods').text(data.nameOfGoods)
        $('#countryOfOrigin').text(data.countryOfOriginName)
        $('#countryOfLoading').text(data.countryOfLoadingName)
        $('#countryOfShipment').text(data.countryOfShipmentName)        
        if(data.isRelatedCountry == 'N'){
            $('#isRelatedNo').show();
        } else if(data.isRelatedCountry == 'Y'){
            $('#isRelatedYes').show();
        }
        $('#date').text(data.date);
        setInstructionMode(data);
    }

    function formatRemittanceInfo(text, maxLength) {
        if (!text) return '';

        var result = '';
        var currentLine = '';
        var words = text.split(' ');

        for (var i = 0; i < words.length; i++) {
            var word = words[i];

            if ((currentLine + ' ' + word).trim().length > maxLength) {
                if (currentLine.length > 0) {
                    result += currentLine.trim() + '<br>';
                    currentLine = word;
                } else {
                    result += word.substring(0, maxLength) + '<br>';
                    currentLine = word.substring(maxLength);
                }
            } else {
                currentLine += (currentLine.length > 0 ? ' ' : '') + word;
            }
        }

        if (currentLine.length > 0) {
            result += currentLine.trim();
        }

        return result;
    }


    function currencyFormat(num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }


    function setInstructionMode(detail){
        var instructionMode = detail.instructionMode;

        tags = '<div class="mb-3 row form-group">'
        if (instructionMode !=null && instructionMode == 'I') {
            tags += '<label class="col-md-5 col-form-label text-end">Payment Date</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+detail.payment_date+'</label>';
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
            tags += '<label>'+detail.payment_date+'</label>';
            tags += '</div>';
            if(detail.sessionTime != '00:00'){
                tags += '<label class="col-md-5 col-form-label text-end">at</label>';
                tags += '<div class="col-md-6">';
                tags += '<label>'+detail.sessionTime+'</label>';
                tags += '</div>';
            }
             $('#paymentSchedule').text("Future Date");
        }else{
            tags += '<label class="col-md-5 col-form-label text-end">Payment Date</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+''+'</label>';
            tags += '</div>';
             $('#paymentSchedule').text("Immediate");
        } 
        tags += '</div>';

        $('.instructionModeClass').html(tags);

    }

</script>
