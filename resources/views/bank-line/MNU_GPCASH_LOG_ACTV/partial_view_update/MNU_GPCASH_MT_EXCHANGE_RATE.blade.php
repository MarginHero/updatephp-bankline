<div class="box-header">
    <h3 class="box-title">Rate Detail</h3><br>
</div>

<div class="row">
    <div class="col-lg-6" style="padding-right: 0px">
        <div class="box-body" style="border-right: 4px solid #d2d6de">
            <h2 style="text-align: center">New Value</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="mb-3 row form-group">
                        <label class="col-md-2 col-form-label text-end">Currency</label>
                        <div class="col-md-6">
                            <label id="currency">-</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 row form-group">
                        <label class="col-md-2 col-form-label text-end">Transaction Buy Rate</label>
                        <div class="col-md-6">
                            <label id="trxBuyRate" class="rate">-</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 row form-group">
                        <label class="col-md-2 col-form-label text-end">Transaction Sell Rate</label>
                        <div class="col-md-6">
                            <label id="trxSellRate" class="rate">-</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6" style="padding-left: 0px">
        <div class="box-body">
            <h2 style="text-align: center">New Value</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="mb-3 row form-group">
                        <label class="col-md-2 col-form-label text-end">Currency</label>
                        <div class="col-md-6">
                            <label id="old_currency">-</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 row form-group">
                        <label class="col-md-2 col-form-label text-end">Transaction Buy Rate</label>
                        <div class="col-md-6">
                            <label id="old_trxBuyRate" class="rate">-</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 row form-group">
                        <label class="col-md-2 col-form-label text-end">Transaction Sell Rate</label>
                        <div class="col-md-6">
                            <label id="old_trxSellRate" class="rate">-</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var oTable;

	$(document).ready(function () {
		getDetail('MNU_GPCASH_LOG_ACTV');
    });

    function getDetail(id){
        var pendingTaskId_id= $('#pendingTaskId').val();
        var url_action= 'detailPendingTask';
         var value ={
            pendingTaskId:pendingTaskId_id,
            currentPage: "1",
            pageSize: "20",
            orderBy: {"code": "ASC"}
        };
        var action = 'DETAIL';
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : id,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {

                var result = JSON.parse(data);
                if (result.status=="200") {
                    var detail = result.details;
                    $('#currency').text(detail.currencyView);
                    $('#old_currency').text(detail.currencyView);
                    $('#trxBuyRate').text(detail.trxBuyRateFormatted);
                    $('#trxSellRate').text(detail.trxSellRateFormatted);
                    $('#bankSellRate').text(detail.bankSellRate !="" ? detail.bankSellRate : "-");
                    $('#bankBuyRate').text(detail.bankBuyRate !="" ? detail.bankBuyRate : "-");
                    $('#tellerSellRate').text(detail.tellerSellRate !="" ? detail.tellerSellRate : "-");
                    $('#tellerBuyRate').text(detail.tellerBuyRate !="" ? detail.tellerBuyRate : "-");

                    var detail = result.oldValue.details;
                    $('#old_trxBuyRate').text(detail.trxBuyRateFormatted);
                    $('#old_trxSellRate').text(detail.trxSellRateFormatted);

                } else {
                    flash('warning', result.message);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            },
            complete: function(data) {

            }
        });
    }

</script>
