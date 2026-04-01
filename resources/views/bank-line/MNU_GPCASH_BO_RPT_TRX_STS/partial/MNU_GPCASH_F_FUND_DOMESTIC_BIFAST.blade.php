
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
                                    <label id="isFinalPayment">-</label>
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
                                <label class="col-md-5 col-form-label text-end">Beneficiary Account Type</label>
                                <div class="col-md-6">
                                    <label id="destinationAccountType">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row proxyAddr">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Proxy Type</label>
                                <div class="col-md-6">
                                    <label id="proxyType">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row proxyAddr">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Proxy Address</label>
                                <div class="col-md-6">
                                    <label id="proxyAddr">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Beneficiary Account Number</label>
                                <div class="col-md-6">
                                    <label id="destinationAccountNumber">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Beneficiary Account Name</label>
                                <div class="col-md-6">
                                    <label id="destinationAccountName">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Beneficiary Bank</label>
                                <div class="col-md-6">
                                    <label id="destinationBank">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">BI Fast Code</label>
                                <div class="col-md-6">
                                    <label id="biFastCode">-</label>
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
                        <div class="row saveBenFlag">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Alias Name</label>
                                <div class="col-md-6">
                                    <label id="aliasBen">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Order Party Reference Number</label>
                                <div class="col-md-6">
                                    <label id="benRefNo">-</label>
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
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Amount</label>
                                <div class="col-md-6">
                                    <label id="amount">-</label>
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
                        <!-- <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Total Fee</label>
                                <div class="col-md-6">
                                    <label id="feeTotal">-</label>
                                </div>
                            </div>
                        </div> -->
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
                                    <label id="remark1" style="text-transform: none">-</label>
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
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Transaction Purpose</label>
                                <div class="col-md-6">
                                    <label id="transactionPurpose">-</label>
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
            loginUserCode: userId,
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

                    $('#sourceAccount').text(confirm_data.source_account);
                    $('#senderRefNo').text(confirm_data.senderRefNo);
                    $('#isFinalPayment').text(confirm_data.isFinalPayment);
                    $('#destinationAccountNumber').text(confirm_data.destinationAccountNumber);
                    $('#benAccountNoDisplay').text(confirm_data.benAccountNoDisplay);
                    $('#destinationAccountName').text(confirm_data.destinationAccountName);
                    $('#biFastCode').text(confirm_data.biFastCode);
                    $('#isSaveBenFlag').text(confirm_data.isSaveBenFlag);
                    $('#aliasName').text(confirm_data.aliasName);


                    $('#trfService').text(confirm_data.transService);
                    $('#amount').text(detail.transactionCurrency +' '+confirm_data.transactionAmount);
                    $('#feeTotal').text(confirm_data.totalChargeCurrency+' '+confirm_data.totalCharge);
                    $('#totalDebitAmount').text(detail.transactionCurrency +' '+confirm_data.totalDebitedAmount);
                    $('#remark1').text(detail.remark1);
                    $('#remark2').text(detail.remark2);
                    $('#transactionPurpose').text(confirm_data.transactionPurpose);
                    $('#paymentSchedule').text(confirm_data.payment_schedule);
                    $('#notify').html(confirm_data.notify);
                    if (detail.isNotify == 'Y') {
                        $('#email').text(detail.notifyBenValue);
                        $('.notifyEmail').show();
                    }
                    $('#destAccount').text(confirm_data.destinationAccount);
                    $('#destinationBank').text(confirm_data.destinationBank);
                    $('#sknCode').text(confirm_data.sknCode);
                    $('#rtgsCode').text(confirm_data.rtgsCode);
                    $('#destAcctNumber').text(confirm_data.destinationAccountNumber);
                    $('#address1').text(confirm_data.address1);
                    $('#address2').text(confirm_data.address2);
                    $('#address3').text(confirm_data.address3);
                    $('#beneType').text(confirm_data.beneficairyType);
                    $('#benRefNo').text(detail.benRefNo);

                    $('#isResident').text(confirm_data.isResident);
                    if (detail.isBenResident == 'N') {
                        $('#isResident').text(confirm_data.isResident + ',  ' + confirm_data.residentCountry);
                    }

                    $('#isCitizen').text(confirm_data.isCitizent);
                    if (detail.isBenCitizen == 'N') {
                        $('#isResident').text(confirm_data.isCitizent + ',  ' + confirm_data.citizenCountry);
                    }

                    if (detail.isSaveBenFlag == 'Y') {
                        $('#isSaveFlag').text(confirm_data.isSaveBenFlag);
                        $('#aliasBen').text(confirm_data.aliasName);
                    } else {
                        $('.saveBenFlag').hide();
                    }

                    $('#destinationAccountType').text(confirm_data.destinationAccountType);


                    if(confirm_data.proxyAddress != null && confirm_data.proxyAddress != ''){
                        $('.proxyAddr').show();
                        $('#proxyType').text(confirm_data.proxyType);
                        $('#proxyAddr').text(confirm_data.proxyAddress);
                    }else{
                        $('.proxyAddr').hide();
                    }

    //============================ Domestic Online ================================
                    var serviceCode = detail.transactionServiceCode;

                    if (confirm_data.chargeTo) {
                        $('#chargeTo').text(confirm_data.chargeTo);
                        $('.chargeTo_class').show();
                    }

                    if (serviceCode == 'GPT_FTR_DOM_ONLINE') {
                        $('.status_class').hide();
                        $('.citizen_class').hide();
                        $('.beneType_class').hide();
                    }


                    setChargesDetail(chargeList);
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

    function setInstructionMode(detail, confirm_data){

        var instructionMode = detail.instructionMode;

        tags = '<div class="mb-3 row">'
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
            if(chargeList[i].value != 0){
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
