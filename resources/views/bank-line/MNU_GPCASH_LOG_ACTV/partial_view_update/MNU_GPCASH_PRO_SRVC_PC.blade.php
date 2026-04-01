				<div class="box-header">
                    <h3 class="box-title">Service Setup Detail</h3><br>
                </div>
                <div class="row">
                    <div class="col-lg-6" style="padding-right: 0px">
                        <div class="box-body" style="border-right: 4px solid #d2d6de">
                            <h2 style="text-align: center">New Value</h2>
                            <div class="box-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Service Setup Code</label>
                                            <div class="col-md-6">
                                                <label id="code_1">-</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Service Setup Name</label>
                                            <div class="col-md-6">
                                                <label id="name">-</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Fee Setup</label>
                                            <div class="col-md-6">
                                                <label id="fee_setup">-</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Limit Setup</label>
                                            <div class="col-md-6">
                                                <label id="limit_setup">-</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Menu Setup</label>
                                            <div class="col-md-6">
                                                <label id="menu_setup">-</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" style="padding-left: 0px">
                        <div class="box-body">
                            <h2  style="text-align: center" >Old Value</h2>
                            <div class="box-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Service Setup Code</label>
                                            <div class="col-md-6">
                                                <label id="old_code_1">-</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Service Setup Name</label>
                                            <div class="col-md-6">
                                                <label id="old_name">-</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Fee Setup</label>
                                            <div class="col-md-6">
                                                <label id="old_fee_setup">-</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Limit Setup</label>
                                            <div class="col-md-6">
                                                <label id="old_limit_setup">-</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Menu Setup</label>
                                            <div class="col-md-6">
                                                <label id="old_menu_setup">-</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<script>
    var oTable;
    var old_oTable;

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
                    $('#code_1').text(detail.code);
                    $('#name').text(detail.name);
                    $('#fee_setup').text(detail.chargePackageName);
                    $('#limit_setup').text(detail.limitPackageName);
                    $('#menu_setup').text(detail.menuPackageName);


                     var detail = result.oldValue.details;
                     $('#old_code_1').text(detail.code);
                     $('#old_name').text(detail.name);
                     $('#old_fee_setup').text(detail.chargePackageName);
                     $('#old_limit_setup').text(detail.limitPackageName);
                     $('#old_menu_setup').text(detail.menuPackageName);
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
