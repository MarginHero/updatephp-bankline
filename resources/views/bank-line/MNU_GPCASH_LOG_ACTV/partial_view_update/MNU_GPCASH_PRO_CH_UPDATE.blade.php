<div class="box-header">
    <h3 class="box-title">Fee Updates</h3>
</div>
<form class="form-horizontal" id="form-area">

    <div class="box-body">
        <div class="container-fluid">
            <div class="row">
                <div class="mb-3 row">
                    <label class="col-md-5 col-form-label text-end">Fee Updates</label>
                    <div class="col-md-4">
                        <label class="col-form-label text-end" id="updateType"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 row specialFeeRow">
                    <label class="col-md-5 col-form-label text-end">Corporate with Special Fee</label>
                    <div class="col-md-4 form-inline">
                        <label class="col-form-label text-end" id="isUpdate"></label>
                    </div>
                </div>
                <div class="row specificFee">
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label text-end">Fee Setup Code</label>
                        <div class="col-md-6">
                            <label id="feeCode">-</label>
                        </div>
                    </div>
                </div>
                <div class="row specificFee">
                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label text-end">Fee Setup Name</label>
                        <div class="col-md-6">
                            <label id="feeName">-</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 row feeSetupCode">
                    <label class="col-md-5 col-form-label text-end">Fee Setup Code</label>
                    <div class="col-md-4 form-inline">
                        <label class="col-form-label text-end" id="feeCode"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 row feeSetupName">
                    <label class="col-md-5 col-form-label text-end">Fee Setup Name</label>
                    <div class="col-md-4 form-inline">
                        <label class="col-form-label text-end" id="feeName"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="box-header list-title">
    <h3 class="box-title">Fee Setup Detail</h3>
</div>

<div class="box-body list-title">
    <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
           style="border-collapse:collapse;">
        <thead>
        <tr>
            <th align="center"><strong>Service</strong></th>
            <th align="center"><strong>Fee Type</strong></th>
            <th align="center"><strong>Currency</strong></th>
            <th align="center"><strong>Fee Amount</strong></th>
        </tr>
        </thead>
    </table>
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
                    width: "10%"
                },
                {
                    targets: 3,
                    sortable: false,
                    width: "20%",
                    className:'dt-body-right'
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

                        $('.specificFee').hide();
                    } else {

                        $('#feeCode').text(detail.feeCode);
                        $('#feeName').text(detail.feeName);
                        $('.specialFee').hide();
                    }

                    oTable.clear();
                    $.each(detail.dataTable, function (idx, obj){
                        oTable.row.add([
                            obj.serviceName,
                            obj.feeType,
                            obj.currency,
                            obj.feeAmount
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
