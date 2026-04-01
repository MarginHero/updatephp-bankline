
<div class="box-header">
    <h3 class="box-title">Transaction Detail</h3><br>
</div>

<div class="box-body">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Menu</label>
                <div class="col-md-6">
                    <label id="menuName">-</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Transaction Reference Number</label>
                <div class="col-md-6">
                    <label id="trxRefNo">-</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Transaction Update Type</label>
                <div class="col-md-6">
                    <label id="status">-</label>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var oTable;
    var old_oTable;

    $(document).ready(function () {
        getDetail('MNU_GPCASH_PENDING_TASK');
    });

    function getDetail(id){
        var referenceNo = $('#referenceNo').val();
        var value = {
            referenceNo : referenceNo
        };
        var url_action = 'detailPendingTask';
        var action = 'DETAIL';
        var menu = 'MNU_GPCASH_PENDING_TASK';
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
                    $('#menuName').text(result.details.trxMenuName);
                    $('#trxStatus').text(result.details.trxStatus);
                    $('#trxRefNo').text(result.details.trxRefNo);
                    $('#status').text(result.details.updateType);

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
