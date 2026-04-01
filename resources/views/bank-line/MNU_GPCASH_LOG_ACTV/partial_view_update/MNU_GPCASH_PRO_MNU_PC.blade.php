				<div class="box-header detail" style="display:none">
                    <span id="detail" class="detail" style="color:darkred;"><small><i>Detail</i></small></span>
                </div>
                <div class="box-header">
                    <h3 class="box-title">Menu Setup Detail</h3><br>
                </div>
                <div class="row">
                    <div class="col-lg-6" style="padding-right: 0px">
                        <div class="box-body" style="border-right: 4px solid #d2d6de">
                            <h2 style="text-align: center">New Value</h2>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Menu Setup Code</label>
                                        <div class="col-md-6">
                                            <label id="code_1">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Menu Setup Name</label>
                                        <div class="col-md-6">
                                            <label id="name">-</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title table-hidden">Menu Setup Listing</h3>
                        </div>
                        <div class="box-body">
                            <div class="container-fluid">

                                <div class="mb-3 row">
                                    <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                           style="border-collapse:collapse;">
                                        <thead>

                                        <tr>
                                            <th align="center"><strong>Menu Group</strong></th>
                                            <th align="center"><strong>Menu</strong></th>
                                        </tr>

                                        </thead>
                                        <tbody><tr>
                                            <td align="left"></td>
                                            <td align="left"></td>

                                        </tr>
                                        </tbody>
                                    </table>
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
                                        <label class="col-md-2 col-form-label text-end">Menu Setup Code</label>
                                        <div class="col-md-6">
                                            <label id="old_code_1">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Menu Setup Name</label>
                                        <div class="col-md-6">
                                            <label id="old_name">-</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title table-hidden">Menu Setup Listing</h3>
                        </div>
                        <div class="box-body">
                            <div class="container-fluid">

                                <div class="mb-3 row">
                                    <table id="old_list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                           style="border-collapse:collapse;">
                                        <thead>

                                        <tr>
                                            <th align="center"><strong>Menu Group</strong></th>
                                            <th align="center"><strong>Menu</strong></th>
                                        </tr>

                                        </thead>
                                        <tbody><tr>
                                            <td align="left"></td>
                                            <td align="left"></td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<script>
    var oTable;
    var old_oTable;

    $(document).ready(function () {

       oTable = $('#list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "select": false,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: false,
                    width: "50%"
                },
                {
                    targets: 1,
                    sortable: false,
                    width: "50%"
                }

            ]
        });
       old_oTable = $('#old_list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "select": false,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: false,
                    width: "50%"
                },
                {
                    targets: 1,
                    sortable: false,
                    width: "50%"
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
                    var detail = result.details.menuList;
                    $('#code_1').text(result.details.code);
                    $('#name').text(result.details.name);
                    oTable.clear();
                    if(detail){
                        $.each(detail, function (idx, obj){
                            var parent_name = '';
                            if(obj.parentMenuName){
                                parent_name=obj.parentMenuName;
                            }
                            oTable.row.add([
                                '<span id="parent_menu_name" class="parent_menu_name">'+parent_name+'</span>',
                                '<span id="menu_name" class="menu_name">'+obj.menuName+'</span>'
                            ]).draw(false);

                        });

                        $("#list").find("tbody tr:visible").each(function (idx) {
                            var current_value = $(this).children().eq(0).find('span').text();
                            var next_value = $(this).next().children().eq(0).find('span').text();
                            if (next_value==current_value) {
                                $(this).next().children().eq(0).find('span').hide();
                            }
                        });
                    }

                     var detail = result.oldValue.details.menuList;
                     $('#old_code_1').text(result.oldValue.details.code);
                     $('#old_name').text(result.oldValue.details.name);
                     old_oTable.clear();
                     if(detail){
                         $.each(detail, function (idx, obj){
			     if(obj.menuName && obj.menuName != 'Accounts'){
                             var parent_name = '';
                             if(obj.parentMenuName){
                                 parent_name=obj.parentMenuName;
                             }
                             //if(obj.parentMenuName != ''){
                                 old_oTable.row.add([
                                     '<span id="old_parent_menu_name" class="parent_menu_name">'+parent_name+'</span>',
                                     '<span id="old_menu_name" class="menu_name">'+obj.menuName+'</span>'
                                 ]).draw(false);
                             //}
                             }


                         });
                         $("#old_list").find("tbody tr:visible").each(function (idx) {
                             var current_value = $(this).children().eq(0).find('span').text();
                             var next_value = $(this).next().children().eq(0).find('span').text();
                             if (next_value==current_value) {
                                 $(this).next().children().eq(0).find('span').hide();
                             }
                         });
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
