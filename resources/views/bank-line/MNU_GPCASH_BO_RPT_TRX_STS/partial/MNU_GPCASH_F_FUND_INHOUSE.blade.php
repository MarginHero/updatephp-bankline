
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
                                <label class="col-md-5 col-form-label text-end">Beneficiary Account Type</label>
                                <div class="col-md-6">
                                    <label id="destAccount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Beneficiary Account Number</label>
                                <div class="col-md-6">
                                    <label id="destBankNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Beneficiary Account Name</label>
                                <div class="col-md-6">
                                    <label id="destBankName">-</label>
                                </div>
                            </div>
                        </div>
{{--                        <div class="row saveBenFlag">--}}
{{--                            <div class="mb-3 row">--}}
{{--                                <label class="col-md-5 col-form-label text-end">Save to Beneficiary List</label>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <label id="isSaveFlag">-</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="row">
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
                        <div class="row" id="exchangeRateDescBlok" hidden>
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Exchange Rate</label>
                                <div class="col-md-3">
                                    <label style="padding-right: 12px" id="exchangeRateDesc"></label>
                                    <label  id="exchangeRate" hidden></label>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="dealRateNoBlock" hidden>
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Deal Rate No</label>
                                <div class="col-md-6">
                                    <label id="dealRateNo"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Amount</label>
                                <div class="col-md-3">
                                    <label id="amount">-</label>
                                </div>

                            </div>
                        </div>
                        <div class="row equivalentAm">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Equivalent Amount</label>
                                <div class="col-md-6">
                                    <label id="equivalentAmount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row chargeClass">

                        </div>
                        <div class="row" hidden>
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Total Fee</label>
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
                                    <label id="remark2" style="text-transform: none"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="remark3" style="text-transform: none"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row purpose">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Transaction Purpose LHBU </label>
                                <div class="col-md-6">
                                    <label id="purpose">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row docType">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Document Type </label>
                                <div class="col-md-6">
                                    <label id="docType">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row underDoc" >
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Underlying Document</label>
                                <div class="col-md-6">
                                    <label id="underlyingDoc">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row fileUpload" style="display:none">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadUnderlyngDoc();" id="fileName">-</a>
                                    </label>
                                    <input type="hidden" id="fileId" value=""/>
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

    function downloadUnderlyngDoc() {

           var fileName = $('#fileName').text();
           var fileId = $('#fileId').val();

            const urlGet = "downloadUnderlyingDoc?fileName="+fileName+"&fileId="+fileId;

            $.ajax({
                url: 'downloadTrade',
                method: 'POST',
                cache: false,
                data:{
                    url_action : urlGet,
                    service:'MNU_GPCASH_BO_RPT_TRX_STS',
                    fileName:fileName,
                },
                xhrFields: {
                    withCredentials: true,
                    responseType:'arraybuffer'
                },
               success: function (response, status, xhr) {
                   var filename = "";
                   var disposition = xhr.getResponseHeader('Content-Disposition');
                   if (disposition && disposition.indexOf('attachment') !== -1) {
                       var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                       var matches = filenameRegex.exec(disposition);
                       if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                   }

                   var type = xhr.getResponseHeader('Content-Type');
                   var blob = new Blob([response], { type: type });
                   saveAs(blob, filename);
                }
            });
    }

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

                    $('#sourceAccount').text(confirm_data.source_account);
                    $('#senderRefNo').text(confirm_data.senderRefNo);
                    $('#finalPayment').text(confirm_data.isFinalPayment);
                    $('#destAccount').text(confirm_data.destinationAccount);
                    if(confirm_data.destinationAccount == 'Other Account'){
                        $('#destAccount').text('Third Party Account');
                    }
                    $('#destBankNo').text(confirm_data.destinationAccountNumber );
                    $('#destBankName').text(confirm_data.destinationAccountName +' ('+ confirm_data.destinationAccountCurrency+')');

                    // if (detail.isSaveBenFlag == 'Y') {
                        $('#isSaveFlag').text(confirm_data.isSaveBenFlag);
                        $('#aliasBen').text(confirm_data.aliasName);
                    // } else {
                    //     $('.saveBenFlag').hide();
                    // }

                    $('#benRefNo').text(detail.benRefNo);

                    $('#amount').text(detail.transactionCurrency +' '+confirm_data.transactionAmount);
                    $('#feeTotal').text(confirm_data.totalChargeCurrency+' '+confirm_data.totalCharge);
                    $('#totalDebitAmount').text(detail.source_acct_ccy +' '+confirm_data.totalDebitedAmount);
                    $('#exchangeRate').text(detail.exchangeRate == 'CR'? confirm_data.counterRate : (confirm_data.specialRate? confirm_data.specialRate : confirm_data.counterRate));
                    $('#exchangeRateDesc').text(detail.exchangeRate == 'CR'? "Counter Rate" : "Special Rate");
                    if(detail.source_acct_ccy!=detail.benAccountCurrency	){
                        $('#exchangeRate').show()
                        $('#exchangeRateDescBlok').show()
                    }
                    if(detail.exchangeRate == 'SR'){
                        $('#dealRateNo').text(detail.treasuryCode);
                        $('#dealRateNoBlock').show()
                    }
                    if(detail.transactionCurrency == detail.source_acct_ccy){
                        $('.equivalentAm').hide();
                        $('.docType').hide();
                        $('.purpose').hide();

                    }

                    if(detail.source_acct_ccy == 'IDR' && detail.benAccountCurrency != 'IDR' ){
                        $('.underDoc').show();
                        $('#underlyingDoc').text(confirm_data.underlyingDoc);
                    }else{
                        $('.underDoc').hide();
                    }

                    if(detail.underlyingDoc != null){

                        if(detail.underlyingDoc == '1'){
                            $('.fileUpload').show();
                            $('#fileName').text(detail.underlyingFileName);
                            $('#fileId').text(detail.underlyingFileId);
                        }
                    }

                    $('#equivalentAmount').text(detail.source_acct_ccy +' '+currencyFormat(detail.transactionAmountEquivalent));
                    $('#remark').text(detail.remark1);
                    $('#remark2').text(detail.remark2);
                    $('#remark3').text(detail.remark3);


                    $('#paymentSchedule').text(confirm_data.payment_schedule);

                    $('#notify').html(confirm_data.notify);
                    if (detail.isNotify == 'Y') {
                        $('#email').text(detail.notifyBenValue);
                        $('.notifyEmail').show();
                    }

                    if(confirm_data.docType!=null && confirm_data.docType!=''){
                        $('#docType').text(confirm_data.docType);
                    }else{
                        $('.docType').hide();
                    }

                    if(confirm_data.transactionPurpose!=null && confirm_data.transactionPurpose!=''){
                        $('#purpose').text(confirm_data.transactionPurpose);
                    }else{
                        $('.purpose').hide();
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

            if (instructionMode == 'I' && detail.sessionTime != '00:00') {
                $('#paymentSchedule').text("Today with Session Time");
            } else {
                $('#paymentSchedule').text("Immediate");
            }

            if(detail.sessionTime != '00:00'){
                tags += '<label class="col-md-5 col-form-label text-end">At</label>';
                tags += '<div class="col-md-6">';
                tags += '<label>'+detail.sessionTime+'</label>';
                tags += '</div>';
            }

        } else if (instructionMode !=null && instructionMode == 'F') {
            tags += '<label class="col-md-5 col-form-label text-end">Payment Date</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+confirm_data.payment_date+'</label>';
            tags += '</div>';
            tags += '<label class="col-md-5 col-form-label text-end">at</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+detail.sessionTime+'</label>';
            tags += '</div>';

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
            // tags += '<label class="col-md-5 col-form-label text-end">At</label>';
            // tags += '<div class="col-md-6">';
            // tags += '<label>'+detail.sessionTime+'</label>';
            // tags += '</div>';
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
            if(chargeList[i].serviceChargeName!='Transfer Fee'){
                tags += '<label class="col-md-5 col-form-label text-end">'+chargeList[i].serviceChargeName+'</label><div class="col-md-6"><label>'+chargeList[i].currencyCode+' '+chargeList[i].value+'</label></div>';
            }
        }
        tags += '</div>';

        $('.chargeClass').html(tags);

    }

    function currencyFormat(num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

    function toCamelCase(str){
      return str.replace(/\b\w/g, l => l.toUpperCase());
    }

</script>
