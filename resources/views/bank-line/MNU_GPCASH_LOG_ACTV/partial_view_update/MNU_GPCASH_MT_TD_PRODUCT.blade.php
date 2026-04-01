<div class="box-header">
    <h3 class="box-title">Time Deposit Product Detail</h3><br>
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
                            <label id="productCode">-</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label text-end">Name</label>
                        <div class="col-md-6">
                            <label id="productName">-</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label text-end">Description</label>
                        <div class="col-md-6">
                            <label id="description">-</label>
                        </div>
                    </div>
                </div>
                <div class="box-header termEdit" hidden>
                    <h3 class="box-title">Term Listing</h3><br>
                </div>

                <div class="box-body termEdit" hidden>
                    <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                           style="border-collapse:collapse;">
                        <thead>
                        <tr>
                            <th align="left"><strong>Term</strong></th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6" style="padding-left: 0px">
        <div class="box-body" >
            <h2 style="text-align: center">Old Value</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label text-end">Code</label>
                        <div class="col-md-6">
                            <label id="old_productCode">-</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label text-end">Name</label>
                        <div class="col-md-6">
                            <label id="old_productName">-</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label text-end">Description</label>
                        <div class="col-md-6">
                            <label id="old_description">-</label>
                        </div>
                    </div>
                </div>
                <div class="box-header old_termEdit" hidden>
                    <h3 class="box-title">Term Listing</h3><br>
                </div>

                <div class="box-body old_termEdit" hidden>
                    <table id="old_list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                           style="border-collapse:collapse;">
                        <thead>
                        <tr>
                            <th align="left"><strong>Term</strong></th>
                        </tr>
                        </thead>
                    </table>
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
        $('.old_termEdit').hide();
        $('.termEdit').hide();
        oTable = $('#list').DataTable({
            //"paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [

                {
                    targets: 0,
                    sortable: false,
                    width: "100%"
                }
            ],
        });
        old_oTable = $('#old_list').DataTable({
            //"paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [

                {
                    targets: 0,
                    sortable: false,
                    width: "100%"
                }
            ],
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
                    var termList = detail.termList;
                    $('#productCode').text(detail.code);
                    $('#productName').text(detail.name);
                    $('#description').text(detail.description);

                    if (termList!=null&&termList.length>0) {
                        $.each(termList, function (idx, obj){
                            var termName = "Overnight";
                            if(obj.termType == 'D'){
                                termName = obj.termParam + " days";
                            }else if (obj.termType == 'W'){
                                termName = obj.termParam + " weeks";
                            }else if (obj.termType == 'M' ){
                                termName = ""+ obj.termParam + " months";
                            }
                            oTable.row.add([
                                termName
                            ]).draw(true);
                        });

                        $('.termEdit').show();
                    }
                    var termlistNew=termList;

                    var detail= {}

                    if (termlistNew!=null&&termlistNew.length>0){
                        detail = result.oldValue.details.product;
                    }else{
                        detail = result.oldValue.details;
                    }
                    var termList = detail.termList;
                    $('#old_productCode').text(detail.code);
                    $('#old_productName').text(detail.name);
                    $('#old_description').text(detail.dscp);

                    if (termlistNew!=null&&termlistNew.length>0) {
                        $.each(termList, function (idx, obj){
                            var termName = "Overnight";
                            if(obj.typeCode	 == 'D'){
                                termName = obj.termParam + " days";
                            }else if (obj.typeCode	 == 'W'){
                                termName = obj.termParam + " weeks";
                            }else if (obj.typeCode	 == 'M' ){
                                termName = ""+ obj.termParam + " months";
                            }
                            old_oTable.row.add([
                                termName
                            ]).draw(true);
                        });

                        $('.old_termEdit').show();
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
