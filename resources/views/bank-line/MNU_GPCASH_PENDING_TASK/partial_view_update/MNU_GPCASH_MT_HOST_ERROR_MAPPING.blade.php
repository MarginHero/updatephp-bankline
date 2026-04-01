				<div class="box-header detail" style="display:none">
                    <span id="detail" class="detail" style="color:darkred;"><small><i>Detail</i></small></span>
                </div>
                <div class="row">
                    <div class="col-lg-6" style="padding-right: 0px">
                        <div class="box-body" style="border-right: 4px solid #d2d6de">
                            <h2 style="text-align: center">New Value</h2>
                            <div class="box-header">
                                <h3 class="box-title">Language Mapping Detail</h3><br>
                            </div>

                            <div class="box-body">
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
                                            <label class="col-md-2 col-form-label text-end">English Language</label>
                                            <div class="col-md-6">
                                                <label id="name">-</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Local Language</label>
                                            <div class="col-md-6">
                                                <label id="nameId">-</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Type</label>
                                            <div class="col-md-6">
                                                <label id="type">-</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Rollback</label>
                                            <div class="col-md-6">
                                                <label id="isRollback">-</label>
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
                            <div class="box-header">
                                <h3 class="box-title"></h3><br>
                            </div>

                            <div class="box-body">
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
                                            <label class="col-md-2 col-form-label text-end">English Language</label>
                                            <div class="col-md-6">
                                                <label id="old_name">-</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Local Language</label>
                                            <div class="col-md-6">
                                                <label id="old_nameId">-</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Type</label>
                                            <div class="col-md-6">
                                                <label id="old_type">-</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Rollback</label>
                                            <div class="col-md-6">
                                                <label id="old_isRollback">-</label>
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

    $(document).ready(function () {
		getDetail('MNU_GPCASH_PENDING_TASK');
    });

    function getDetail(id){
        var referenceNo= $('#referenceNo').val();
        var url_action= 'detailPendingTask';
         var value ={
             referenceNo:referenceNo,
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
                    $('#nameId').text(detail.nameId);
					$('#type').text(detail.errorFlag == "Y" ? "Error Message" : "Success Message");
					$('#isRollback').text(detail.rollbackFlag == "Y" ? "Yes" : "No");

                     var detail = result.oldValue.details;
                     $('#old_code_1').text(detail.code);
                     $('#old_name').text(detail.name);
                     $('#old_nameId').text(detail.nameId);
                     $('#old_type').text(detail.errorFlag == "Y" ? "Error Message" : "Success Message");
                     $('#old_isRollback').text(detail.rollbackFlag == "Y" ? "Yes" : "No");

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
