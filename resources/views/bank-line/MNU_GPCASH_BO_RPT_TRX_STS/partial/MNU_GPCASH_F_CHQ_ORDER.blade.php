
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Source Account</label>
                                <div class="col-md-6">
                                    <label id="sourceAcct">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="box-header">
                    <h3 class="box-title">Cheque Detail</h3><br>
                </div> -->
                <div class="box-body">
                    <div class="container-fluid ">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Cheque Type</label>
                                <div class="col-md-6">
                                    <label id="chequeType">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Number of Books</label>
                                <div class="col-md-6">
                                    <label id="pagesNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row chargeDetail">

                        </div>
                        <!-- <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Total Fee</label>
                                <div class="col-md-6">
                                    <label id="feeTotal">-</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Total Debit Amount</label>
                                <div class="col-md-6">
                                    <label id="totalDebitAmount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Branch</label>
                                <div class="col-md-6">
                                    <label id="pickBranch">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="branchAddress">-</label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Pickup Schedule</label>
                                <div class="col-md-6">
                                    <label id="pickSchedule">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">At</label>
                                <div class="col-md-6">
                                    <label id="pickTime">-</label>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            <!-- </div>
        </div>
    </div> -->

<!-- </section> -->

<script>
    // var subAcctList;
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
                    var confirm = detail.confirm_data;

                    $('#sourceAcct').text(confirm.source_account);
                    $('#pagesNo').text(detail.noOfPages);

                    if (detail.chequeType === 'cheque') {
                        $('#chequeType').text('Cheque');
                    } else {
                        $('#chequeType').text('Bilyet Giro');
                    }

                    setChargesDetail(detail.chargeList);

                    $('#feeTotal').text(confirm.totalChargeCurrency +" "+ confirm.totalCharge + " X " +detail.noOfPages);
                    $('#totalDebitAmount').text(detail.transactionCurrency +' '+ confirm.totalDebitedAmount);
                    $('#pickBranch').text(detail.branchCode + " - " + detail.branch_name);
                    $('#branchAddress').text(detail.branch_address);
                    $('#pickSchedule').text(confirm.payment_date);
                    $('#pickTime').text(detail.sessionTime);


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

    function setChargesDetail(chargeList){

        tags = '<div class="mb-3 row form-group">'
        for (var i = 0; i < chargeList.length; i++) {

            if (chargeList[i].value != '0' && chargeList[i].value !='0.00' &&
                chargeList[i].value != '0.0000000' && chargeList[i].value != '.00' && chargeList[i].serviceChargeName != 'Stamp Duty') {
                tags += '<label class="col-md-5 col-form-label text-end">'+chargeList[i].serviceChargeName+'</label><div class="col-md-6"><label>'+chargeList[i].currencyCode+' '+chargeList[i].value+'</label></div>';
            }
        }
        tags += '</div>';

        $('.chargeDetail').html(tags);

    }


</script>
