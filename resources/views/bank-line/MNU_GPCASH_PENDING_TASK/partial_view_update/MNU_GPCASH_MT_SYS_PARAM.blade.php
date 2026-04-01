				<div class="box-header">
                    <h3 class="box-title">Parameter Listing</h3><br>
                </div>
                <div class="row">
                    <div class="col-lg-6" style="padding-right: 0px">
                        <div class="box-body" style="border-right: 4px solid #d2d6de">
                            <h2 style="text-align: center">New Value</h2>
                            <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                   style="border-collapse:collapse;">
                                <thead>
                                <tr>
                                    <th align="center"><strong>Parameter</strong></th>
                                    <th align="center"><strong>Value</strong></th>
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
                    <div class="col-lg-6" style="padding-left: 0px">
                        <div class="box-body">
                            <h2  style="text-align: center" >Old Value</h2>
                            <table id="old_list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                   style="border-collapse:collapse;">
                                <thead>
                                <tr>
                                    <th align="center"><strong>Parameter</strong></th>
                                    <th align="center"><strong>Value</strong></th>
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
                    var detail = result.details.sysParamList;
                    oTable.clear();
                    $.each(detail, function (idx, obj){
                        oTable.row.add([
                            obj.name,
                            obj.value
                        ]).draw(false);

                    });

                     var detail = result.oldValue.details.sysParamList;
                     old_oTable.clear();
                     $.each(detail, function (idx, obj){
                         old_oTable.row.add([
                             obj.name,
                             obj.value
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

</script>
