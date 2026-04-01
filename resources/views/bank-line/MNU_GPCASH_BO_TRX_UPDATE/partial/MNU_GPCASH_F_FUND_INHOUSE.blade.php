
<section class="content">
    <div class="panel panel-default">
        <div class="panel-body box-body">
            <input type="hidden" id="referenceNo" value=""/>
                <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Source Account</h3><br>
                </div>
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
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Sender Reference Number</label>
                                <div class="col-md-6">
                                    <label id="senderRefNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Final Payment</label>
                                <div class="col-md-6">
                                    <label id="finalPayment">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title">Destination Account</h3><br>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Destination Account</label>
                                <div class="col-md-6">
                                    <label id="destAccount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Destination Account Number</label>
                                <div class="col-md-6">
                                    <label id="destBank">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row saveBenFlag">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Save to Beneficiary List</label>
                                <div class="col-md-6">
                                    <label id="isSaveFlag">-</label>
                                </div>
                            </div>
                        </div>
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
                                <label class="col-md-5 col-form-label text-end">Beneficiary Reference Number</label>
                                <div class="col-md-6">
                                    <label id="beneRefNo">-</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title">Transfer Detail</h3><br>
                </div>
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
                        <div class="row chargeClass">
                            <!-- <div class="mb-3 row" v-for="item in chargeList">
                                <label class="col-md-5 col-form-label text-end">{{item.serviceChargeName}}</label>
                                <div class="col-md-6">
                                    <label>{{ item.currencyCode }} {{ item.value }}</label>
                                </div>
                            </div> -->
                        </div>
                        <div class="row">
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
                                    <label id="remark">-</label>
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
            </div>
        </div>
    </div>

</section>

<script>
    var oTable;
    var chargeList;
    var service = '{{ $service }}';
    $(document).ready(function () {

    });

    function getDetailData(refNo){
        var value = {
            referenceNo : refNo
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
                    $('#destBank').text(confirm_data.destinationAccountNumber + ' / '+confirm_data.destinationAccountName +' ('+ confirm_data.destinationAccountCurrency+')');

                    if (detail.isSaveBenFlag == 'Y') {
                        $('#isSaveFlag').text(confirm_data.isSaveBenFlag);
                        $('#aliasBen').text(confirm_data.aliasName);
                    } else {
                        $('.saveBenFlag').hide();
                    }

                    $('#amount').text(detail.transactionCurrency +' '+confirm_data.transactionAmount);
                    $('#feeTotal').text(confirm_data.totalChargeCurrency+' '+confirm_data.totalCharge);
                    $('#totalDebitAmount').text(detail.transactionCurrency +' '+confirm_data.totalDebitedAmount);
                    $('#remark').text(detail.remark1);
                    $('#paymentSchedule').text(confirm_data.payment_schedule);

                    $('#notify').html(confirm_data.notify);
                    if (detail.isNotify == 'Y') {
                        $('#email').text(detail.notifyBenValue);
                        $('.notifyEmail').show();
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
        } else if (instructionMode !=null && instructionMode == 'F') {
            tags += '<label class="col-md-5 col-form-label text-end">Payment Date</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+confirm_data.payment_date+'</label>';
            tags += '</div>';
            tags += '<label class="col-md-5 col-form-label text-end">at</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+detail.sessionTime+'</label>';
            tags += '</div>';
        } else if (instructionMode !=null && instructionMode == 'R') {
            tags += '<label class="col-md-5 col-form-label text-end">For</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+confirm_data.payment_for+'</label>';
            tags += '</div>';
            tags += '<label class="col-md-5 col-form-label text-end">Every</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+confirm_data.payment_every+'</label>';
            tags += '</div>';
            tags += '<label class="col-md-5 col-form-label text-end">At</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+detail.sessionTime+'</label>';
            tags += '</div>';
            tags += '<label class="col-md-5 col-form-label text-end">End Date</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+confirm_data.payment_date_end+'</label>';
            tags += '</div>';
        }
        tags += '</div>';

        $('.instructionModeClass').html(tags);

    }

    function setChargesDetail(chargeList){

        tags = '<div class="mb-3 row">'
        for (var i = 0; i < chargeList.length; i++) {
            tags += '<label class="col-md-5 col-form-label text-end">'+chargeList[i].serviceChargeName+'</label><div class="col-md-6"><label>'+chargeList[i].currencyCode+' '+chargeList[i].value+'</label></div>';
        }
        tags += '</div>';

        $('.chargeClass').html(tags);

    }


</script>
