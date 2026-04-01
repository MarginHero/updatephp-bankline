
<!-- <section class="content">
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
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Source Account</label>
                                <div class="col-md-6">
                                    <label id="sourceAccount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="display: none;">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Sender Reference Number</label>
                                <div class="col-md-6">
                                    <label id="senderRefNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="display: none;">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Final Payment</label>
                                <div class="col-md-6">
                                    <label id="finalPayment">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="box-header">
                    <h3 class="box-title">Beneficiary Account</h3><br>
                </div> -->
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Beneficiary Account</label>
                                <div class="col-md-6">
                                    <label id="destAccount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Beneficiary Bank</label>
                                <div class="col-md-6">
                                    <label id="destBank">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Beneficiary Bank City</label>
                                <div class="col-md-6">
                                    <label id="destBankCity">-</label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">SKN Code</label>
                                <div class="col-md-6">
                                    <label id="sknCode">-</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">RTGS Code</label>
                                <div class="col-md-6">
                                    <label id="rtgsCode">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Beneficiary Account Number</label>
                                <div class="col-md-6">
                                    <label id="destAcctNumber">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Beneficiary Account Name</label>
                                <div class="col-md-6">
                                    <label id="destAcctName">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Address</label>
                                <div class="col-md-6">
                                    <label id="address1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="address2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="address3">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row status_class">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">City</label>
                                <div class="col-md-6">
                                    <label id="destCity">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row status_class">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Residentship</label>
                                <div class="col-md-6">
                                    <label id="isResident">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row citizen_class">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Citizentship</label>
                                <div class="col-md-6">
                                    <label id="isCitizen">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row beneType_class">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Beneficiary type</label>
                                <div class="col-md-6">
                                    <label id="beneType">-</label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row saveBenFlag">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Save to Beneficiary List</label>
                                <div class="col-md-6">
                                    <label id="isSaveFlag">-</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="row saveBenFlag" style="display:none">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Unique Name</label>
                                <div class="col-md-6">
                                    <label id="aliasBen">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Order Party Reference Number</label>
                                <div class="col-md-6">
                                    <label id="beneRefNo">-</label>
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
                        <div class="row" id="rateDiv" style="display:none">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Exchange Rate</label>
                                <div class="col-md-3">
                                    <label id="exchangeRate">-</label>
                                </div>
                                <div class="col-md-3">
                                    <label id="counterRateAmount"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="dealRateDiv" style="display:none">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Deal Rate No</label>
                                <div class="col-md-3">
                                    <label id="dealRateNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Amount</label>
                                <div class="col-md-6">
                                    <label id="amount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row equivalentDiv" style="display:none">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Equivalen Amount</label>
                                <div class="col-md-6">
                                    <label id="equivalentAmount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row chargeTo_class" style="display:none">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Charge Instruction</label>
                                <div class="col-md-6">
                                    <label id="chargeTo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row chargeClass">
                        </div>
                        <div class="row equivalentFeeDiv" style="display:none">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Equivalent Fee</label>
                                <div class="col-md-6">
                                    <label id="feeTotal">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Total Debit Amount</label>
                                <div class="col-md-6">
                                    <label id="totalDebitAmount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Description</label>
                                <div class="col-md-6">
                                    <label id="remark" style="text-transform: none">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="remark2" style="text-transform: none">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row equivalentDiv" style="display:none">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Transaction Purpose</label>
                                <div class="col-md-6">
                                    <label id="transactionPurpose">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row equivalentDiv" style="display:none">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Document Type</label>
                                <div class="col-md-6">
                                    <label id="documentType">-</label>
                                </div>
                            </div>
                        </div>
                        <hr style="height:1px;border:none;color:#333;background-color:#d2d6de;"/>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Payment Schedule</label>
                                <div class="col-md-6">
                                    <label id="paymentSchedule">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row instructionModeClass">

                        </div>
                        <hr style="height:1px;border:none;color:#333;background-color:#d2d6de;"/>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Notify the Beneficiary</label>
                                <div class="col-md-6">
                                    <label id="notify">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row notifyEmail" style="display:none">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Beneficiary Email Address</label>
                                <div class="col-md-6">
                                    <label id="email">-</label>
                                </div>
                            </div>
                        </div>
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

    function getDetailData(refNo, userId){
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
                    chargeList = detail.chargeList;

                    //Source Accopunt SECTION
                    $('#sourceAccount').text(confirm_data.source_account);
                    $('#senderRefNo').text(confirm_data.senderRefNo);
                    $('#finalPayment').text(confirm_data.isFinalPayment);

                    //Beneficiary Account SECTION
                    if (detail.isBeneficiaryFlag == 'Y') {
                        $('#destAccount').text('Predefined Beneficiary');
                        $('#destAcctNumber').text(confirm_data.destinationAccountNumber);
                        $('#destAcctName').text(confirm_data.destinationAccountName);
                    } else {
                        $('#destAccount').text('New Entry');
                        $('#destAcctNumber').text(detail.benId);
                        $('#destAcctName').text(detail.benAccountName);
                    }
                    $('#destBank').text(confirm_data.destinationBank);
                    $('#destBankCity').text(confirm_data.destinationBankCity);
                    // $('#sknCode').text(confirm_data.sknCode);
                    $('#rtgsCode').text(confirm_data.rtgsCode);
                    $('#address1').text(confirm_data.address1);
                    $('#address2').text(confirm_data.address2);
                    $('#address3').text(confirm_data.address3);
                    $('#destCity').text(confirm_data.destinationCity);
                    $('#isResident').text(confirm_data.isResident);
                    if (detail.isBenResident == 'N') {
                        $('#isResident').text(confirm_data.isResident + ',  ' + confirm_data.residentCountry);
                    }

                    if (detail.isBenCitizen == 'N') {
                        $('#isCitizen').text(confirm_data.isCitizent+ ',  ' + confirm_data.citizenCountry);
                    }
                    if (detail.isBenCitizen == 'Y') {
                        $('#isCitizen').text(confirm_data.isCitizent);
                    }
                    $('#beneType').text(confirm_data.beneficiaryType);
                    if (confirm_data.aliasName !== '') {
                        $('#aliasBen').text(confirm_data.aliasName);
                        $('.saveBenFlag').show();
                    }
                    $('#beneRefNo').text(detail.orderPartyRefNo);

                    //Transfer Detail SECTION
                    if (detail.source_acct_ccy !== 'IDR') {
                        $('#rateDiv').show();
                        $('#exchangeRate').text(confirm_data.exchangeRate);
                        if (detail.exchangeRate == 'CR') {
                            $('#counterRateAmount').text(confirm_data.counterRate);
                        } else if (detail.exchangeRate == 'SR') {
                            $('#dealRateDiv').show();
                            $('#dealRateNo').text(detail.treasuryCode);
                            $('#counterRateAmount').text(confirm_data.specialRate);
                        }

                        $('.equivalentDiv').show();
                        $('#equivalentAmount').text(detail.source_acct_ccy+' '+currencyFormat(detail.transactionAmountEquivalent));

                        if (detail.totalCharge !== '0' && detail.totalCharge !== '0.00' && detail.totalCharge !== '0.0000000') {
                            $('.equivalentFeeDiv').show();
                            $('#feeTotal').text(detail.source_acct_ccy+' '+confirm_data.totalChargeEquivalent);
                        }

                    }
                    $('#amount').text(detail.transactionCurrency +' '+confirm_data.transactionAmount);
                    if (detail.chargeTo !== '') {
                        $('#chargeTo').text(confirm_data.chargeTo);
                        $('.chargeTo_class').show();
                    }
                     setChargesDetail(chargeList);
                    $('#totalDebitAmount').text(detail.source_acct_ccy +' '+confirm_data.totalDebitedAmount);
                    $('#remark').text(detail.remark1);
                    $('#remark2').text(detail.remark2);
                    $('#transactionPurpose').text(confirm_data.transactionPurpose);
                    $('#documentType').text(confirm_data.documentType);
                    $('#paymentSchedule').text(confirm_data.payment_schedule);
                    setInstructionMode(detail, confirm_data);
                    $('#notify').html(confirm_data.notify);
                    if (detail.isNotify == 'Y') {
                        $('#email').text(detail.notifyBenValue);
                        $('.notifyEmail').show();
                    }

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

    function setInstructionMode(detail, confirm_data){

        var instructionMode = detail.instructionMode;

        tags = '<div class="mb-3 row">'
        if (instructionMode !=null && instructionMode == 'I') {
            tags += '<label class="col-md-5 col-form-label text-end">Payment Date</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+confirm_data.payment_date+'</label>';
            tags += '</div>';
            if (detail.isImmediateSessionTime !== 'N') {
                tags += '<label class="col-md-5 col-form-label text-end">at</label>';
                tags += '<div class="col-md-6">';
                tags += '<label>'+detail.sessionTime+'</label>';
                tags += '</div>';
            }

            if (instructionMode == 'I' && detail.sessionTime != '00:00') {
                $('#paymentSchedule').text("Today with Session Time");
            } else {
                $('#paymentSchedule').text("Immediate");
            }
        } else if (instructionMode !=null && instructionMode == 'F') {
            tags += '<label class="col-md-5 col-form-label text-end">Payment Date</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+confirm_data.payment_date+'</label>';
            tags += '</div>';
            if (detail.isImmediateSessionTime !== 'N') {
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
            if (detail.isImmediateSessionTime !== 'N') {
                tags += '<label class="col-md-5 col-form-label text-end">At</label>';
                tags += '<div class="col-md-6">';
                tags += '<label>'+detail.sessionTime+'</label>';
                tags += '</div>';
            }
            tags += '<label class="col-md-5 col-form-label text-end">End Date</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+confirm_data.payment_date_end+'</label>';
            tags += '</div>';

            tags += '<label class="col-md-5 col-form-label text-end">Recurring Type</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+confirm_data.non_working_view+'</label>';
            tags += '</div>';

            $('#paymentSchedule').text("Recurring");
        }
        tags += '</div>';

        $('.instructionModeClass').html(tags);

    }

    function setChargesDetail(chargeList){

        tags = '<div class="mb-3 row">'
        for (var i = 0; i < chargeList.length; i++) {
            if (chargeList[i].value !== '0' && chargeList[i].value !== '0.00' && chargeList[i].value !== '0.0000000' && chargeList[i].value !== '0.0') {
                tags += '<label class="col-md-5 col-form-label text-end">'+chargeList[i].serviceChargeName+'</label><div class="col-md-6"><label>'+chargeList[i].currencyCode+' '+currencyFormat(chargeList[i].value)+'</label></div>';
            }
        }
        tags += '</div>';

        $('.chargeClass').html(tags);

    }

    function currencyFormat(num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }


</script>
