				<div class="box-header detail" style="display:none">
                    <span id="detail" class="detail" style="color:darkred;"><small><i>Detail</i></small></span>
                </div>

                <div class="box-header">
                    <h3 class="box-title"><label id="modelName"></label> Detail</h3><br>
                </div>
                <div class="row">
                    <div class="col-lg-6" style="padding-right: 0px">
                        <div class="box-body" style="border-right: 4px solid #d2d6de">
                            <h2 style="text-align: center">New Value</h2>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Code</label>
                                        <div class="col-md-6">
                                            <label id="code_1">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Name</label>
                                        <div class="col-md-6">
                                            <label id="name">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Description</label>
                                        <div class="col-md-6">
                                            <label id="dscp">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row stateParent">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end" id="parentLabel"></label>
                                        <div class="col-md-6">
                                            <label id="parentName">-</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" style="padding-left: 0px">

                        <div class="box-body">
                            <h2  style="text-align: center" >Old Value</h2>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Code</label>
                                        <div class="col-md-6">
                                            <label id="old_code_1">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Name</label>
                                        <div class="col-md-6">
                                            <label id="old_name">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Description</label>
                                        <div class="col-md-6">
                                            <label id="old_dscp">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row oldStateParent">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end" id="parentLabel"></label>
                                        <div class="col-md-6">
                                            <label id="old_parentName">-</label>
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
                    $('#code_1').text(detail.code);
                    $('#name').text(detail.name);
                    $('#dscp').text(detail.dscp);
					$('#modelName').text(detail.modelName);
					if(detail.parentLabel){
						$('#parentLabel').text(detail.parentLabel);
						$('#parentName').text(detail.parentName);
						$('.stateParent').show();
					}else{
						$('.stateParent').hide();
					}

                     var detail = result.oldValue.details;
                     $('#old_code_1').text(detail.code);
                     $('#old_name').text(detail.name);
                     $('#old_dscp').text(detail.dscp);
                     $('#old_modelName').text(detail.modelName);
                     if(detail.parentLabel){
                         $('#old_parentLabel').text(detail.parentLabel);
                         $('#old_parentName').text(detail.parentName);
                         $('.oldStateParent').show();
                     }else{
                         $('.oldStateParent').hide();
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

            }
        });
    }

</script>
