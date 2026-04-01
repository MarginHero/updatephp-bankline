
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
                        <!-- <div class="row">
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
                        </div> -->
                    </div>
                </div>
                <!-- <div class="box-header">
                    <h3 class="box-title">Payment Detail</h3><br>
                </div> -->
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row nameListDetail">
                        </div>
                        <div class="row othersInfoDetail">
                        </div>
                        <div class="row chargeClass">
                        </div>
                        <div class="row feeAmount" style="display:none">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Total Fee</label>
                                <div class="col-md-6">
                                    <label id="feeTotal">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row feeAmount" style="display:none">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Total Debit Amount</label>
                                <div class="col-md-6">
                                    <label id="totalDebitAmount">-</label>
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
            <!-- </div> -->
        <!-- </div> -->
    <!-- </div> -->
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

                    $('#sourceAccount').text(confirm_data.source_account);
                    $('#senderRefNo').text(confirm_data.senderRefNo);
                    $('#finalPayment').text(confirm_data.isFinalPayment);

                    // $('#instCategory').text(confirm_data.institutionCategoryName);
                    // $('#institution').text(confirm_data.institutionName);

                    setDetailNameList(detail.nameList, confirm_data);
                    setDetailOthersInfo(detail.othersInfo, detail.transactionCurrency, detail.terbilangAmount_EN);
                    setChargesDetail(chargeList);

                    $('#feeTotal').text(confirm_data.totalChargeCurrency+' '+confirm_data.totalCharge);
                    $('#totalDebitAmount').text(detail.transactionCurrency +' '+confirm_data.totalDebitedAmount);

                    if (detail.totalCharge !== '0' && detail.totalCharge !== '0.00' && detail.totalCharge !== '0.0000000' && detail.totalCharge !== '0.0') {
                        $('.feeAmount').show();
                    }

                    setInstructionMode(detail, confirm_data);

                    if (detail.isNotify == 'Y') {
                        $('#email').text(detail.notifyBenValue);
                        $('.notifyEmail').show();

                        $('#notify').text('Notify');
                    } else {
                        $('#notify').text("Don't Notify");
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
            $('#paymentSchedule').text('Future Date');
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

            $('#paymentSchedule').text('Recurring');
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

    function setDetailNameList(nameList, confirm_data){

        tags = '<div class="mb-3 row">'

        $.each(nameList, function (idx, obj) {
            var type = obj.type;
            if (obj.typeParameterDataMap === 'billId') {
                tags += '<label class="col-md-5 col-form-label text-end">ID Billing</label>';
            } else {
            tags += '<label class="col-md-5 col-form-label text-end">'+obj.name+'</label>';
            }
            tags += '<div class="col-md-6">';
            if (type != 'DROPLIST') {
                tags += '<label>'+confirm_data["value"+(idx +1)]+'</label>';
            } else {
                tags += '<label>'+confirm_data["droplistName"+(idx +1)]+'</label>';
            }
            tags += '</div>';
        });

        tags += '</div>';

        $('.nameListDetail').html(tags);
    }

    function setDetailOthersInfo(infoList, ccy, terbilangEN){

        tags = '<div class="mb-3 row">'

        $.each(infoList, function (idx, obj) {
            if (obj.visible === 'Y' && obj.key !== 'billId') {
                tags += '<label class="col-md-5 col-form-label text-end">'+obj.label_en+'</label>';
                tags += '<div class="col-md-6">';
                if (obj.value !== '') {
                   if (obj.type == 'money') {
                       tags += '<label>'+ccy+' '+currencyFormat(obj.value)+'</label>';
                   } else {
                        if (obj.key == 'terbilang') {
                            tags += '<label>'+terbilangEN+'</label>';
                        } else {
                            tags += '<label>'+obj.value+'</label>';
                        }
                    }
                } else {
                    tags += '<label> - </label>';
                }

                tags += '</div>';
            }
        });

        tags += '</div>';

        $('.othersInfoDetail').html(tags);
    }

    function currencyFormat(num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }


</script>
