

<div class="box-header">
    <h3 class="box-title">Limit Updates</h3><br>
</div>

<div class="box-body">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-3 row form-group">
                <label class="col-md-3 col-form-label text-end">Limit Updates</label>
                <div class="col-md-6">
                    <label id="updateType">-</label>
                </div>
            </div>
        </div>
        <div class="row specialLimit">
            <div class="mb-3 row form-group">
                <label class="col-md-3 col-form-label text-end">Corporate with Special Limit</label>
                <div class="col-md-6">
                    <label id="isUpdate">-</label>
                </div>
            </div>
        </div>
        <div class="row specificLimit">
            <div class="mb-3 row form-group">
                <label class="col-md-3 col-form-label text-end">Limit Setup Code</label>
                <div class="col-md-6">
                    <label id="feeCode">-</label>
                </div>
            </div>
        </div>
        <div class="row specificLimit">
            <div class="mb-3 row form-group">
                <label class="col-md-3 col-form-label text-end">Limit Setup Name</label>
                <div class="col-md-6">
                    <label id="feeName">-</label>
                </div>
            </div>
        </div>
</div>

<div class="box-header">
    <h3 class="box-title table-hidden">Limit Setup Detail</h3>
</div>
<div class="box-body">
    <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
           style="border-collapse:collapse;">
        <thead>
        <tr>
            <th align="center" rowspan="2"><strong>Service</strong></th>
            <th align="center" rowspan="2"><strong>Currency matrix</strong></th>
            <th align="center" rowspan="2"><strong>Max. No. Of Transaction / Day</strong></th>
            <th align="center" colspan="2"><strong>Maximum Transaction Amount / Day</strong></th>
        </tr>
        <tr>
            <th align="center"><strong>Currency</strong></th>
            <th align="center"><strong>Value</strong></th>
        </tr>
        </thead>
    </table>
</div>
</div>
<script>
    var oTable;

    $(document).ready(function () {

        oTable = $('#list').DataTable({
            "paging": false,
            "ordering": false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth": false,
            "ScrollX": '100%',
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: false,
                    width: "25%"
                },
                {
                    targets: 1,
                    sortable: false,
                    width: "20%"
                },
                {
                    targets: 2,
                    sortable: false,
                    width: "20%",
                    className:"dt-center"
                },
                {
                    targets: 3,
                    sortable: false,
                    width: "10%",
                    className:"dt-center"
                },
                {
                    targets: 4,
                    sortable: false,
                    width: "20%",
                    className:"dt-body-right"
                }

            ]
        });

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
                    $('#updateType').text(detail.updateType);

                    if (detail.isUpdateAll == 'Y') {
                        $('#isUpdate').text(detail.isUpdate);

                        $('.specificLimit').hide();
                    } else {

                        $('#feeCode').text(detail.feeCode);
                        $('#feeName').text(detail.feeName);
                        $('.specialLimit').hide();
                    }

                    oTable.clear();
                    $.each(detail.dataTable, function (idx, obj){
                        oTable.row.add([
                            obj.serviceName,
                            obj.curMatrixName,
                            obj.maxTrxPerDay,
                            obj.currency,
                            obj.maxTrxAmt
                        ]).draw(false);
                    });

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
    function currencyFormat (num) {
        return parseFloat(num).toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }
</script>
