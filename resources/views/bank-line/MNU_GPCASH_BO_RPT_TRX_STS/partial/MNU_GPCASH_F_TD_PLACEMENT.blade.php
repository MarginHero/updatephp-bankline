
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
                    </div>
                </div>
                <!-- <div class="box-header">
                    <h3 class="box-title">Time Deposit Detail</h3><br>
                </div> -->
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Deposit Number</label>
                                <div class="col-md-6">
                                    <label id="tdNumber">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Time Deposit Product</label>
                                <div class="col-md-6">
                                    <label id="tdProduct">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Placement Date</label>
                                <div class="col-md-6">
                                    <label id="placementDate">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Period</label>
                                <div class="col-md-6">
                                    <label id="period">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Interest Rate</label>
                                <div class="col-md-6">
                                    <label id="interestRate">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="specialRate" style="display:none">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Special Interest Rate</label>
                                <div class="col-md-6">
                                    <label id="refNoSpecialRate">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Principal Amount</label>
                                <div class="col-md-6">
                                    <label id="principalAmount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Maturity Instruction</label>
                                <div class="col-md-6">
                                    <label id="maturityInst">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Account No. For Principal</label>
                                <div class="col-md-6">
                                    <label id="principalAccount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Account No. For Interest</label>
                                <div class="col-md-6">
                                    <label id="interestAccount">-</label>
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

                    $('#sourceAccount').text(confirm_data.source_account);
                    $('#tdNumber').text(detail.timeDepositNumber);
                    $('#tdProduct').text(confirm_data.product);
                    $('#placementDate').text(confirm_data.placementDate);
                    if (detail.selectedPeriod == 'fixed') {
                        $('#period').text('Fixed For ' + confirm_data.term);
                    } else {
                        $('#period').text('Mature On ' + confirm_data.matureOn);
                    }
                    $('#interestRate').text(confirm_data.interestRate);

                    if (detail.isSpecialInterest == 'Y') {
                        $('#refNoSpecialRate').text(detail.refNoSpecialRate);
                        $('#specialRate').show();
                    }

                    $('#principalAmount').text(detail.principalCurrency+' '+confirm_data.principalAmount);
                    $('#maturityInst').text(confirm_data.maturityInstruction);
                    $('#principalAccount').text(confirm_data.accountPrincipal);
                    $('#interestAccount').text(confirm_data.accountInterest);

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

</script>
