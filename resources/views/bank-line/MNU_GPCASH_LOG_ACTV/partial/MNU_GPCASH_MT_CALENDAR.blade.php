<div class="box">
    <div class="box-header">
        <h3 class="box-title">BANK CALENDAR</h3><br>
    </div>

    <div class="box-body form_add">
        <div class="container-fluid">
            <div class="row">
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label text-end"><strong>From Date</strong></label>
                    <div class="col-md-3">
                        <label id="holidayDateFrom_view" ></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label text-end"><strong>To Date</strong></label>
                    <div class="col-md-3">
                        <label id="holidayDateTo_view" ></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label text-end"><strong>Description</strong></label>
                    <div class="col-md-6">
                        <label id="dscp_view"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 row">
                    <label class="col-md-2 col-form-label text-end"><strong>Type</strong></label>
                    <div class="col-md-6">
                        <label id="type_view"></label>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="box-body form_edit">
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end"></label>
                <div class="col-md-9">
                    <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                           style="border-collapse:collapse;">
                        <thead>
                        <tr>
                            <th align="left"><strong>Date</strong></th>
                            <th align="left"><strong>Description</strong></th>
                            <th align="left"><strong>Type</strong></th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>

<script>
    var oTable;
    var currencyOption;
    var noRef = 'OT'+$('#referenceNo').val();
    $(document).ready(function () {

        getDetail('MNU_GPCASH_LOG_ACTV');
    });

    function getDetail(id) {
        var pendingTaskId_id = $('#pendingTaskId').val();
        var url_action = 'detailPendingTask';
        var value = {
            pendingTaskId: pendingTaskId_id,
            currentPage: "1",
            pageSize: "20",
            orderBy: {"code": "ASC"}
        };
        var action = 'DETAIL';
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value: value,
                menu: id,
                url_action: url_action,
                action: action,
                _token: '{{ csrf_token() }}'
            },
            success: function (data) {

                var result = JSON.parse(data);
                //console.log(result);
                if (result.status=="200") {
                    var detail = result.details;
                    if(detail.action=='CREATE') {
                        var dscp = detail.dscp;
                        var holidayDateFrom = moment(detail.holidayDateFrom, 'DD-MM-YYYY').format("dddd, DD-MMMM-YYYY");
                        var holidayDateTo = moment(detail.holidayDateTo, 'DD-MM-YYYY').format("dddd, DD-MMMM-YYYY");
                        var type = detail.type;
                        var currency = detail.currencyCode;


                        $('#type_view').text(type);
                        if (type == 'CURRENCY') {
                            $('#type_view').text(type + ' HOLIDAY ' + ' - ' + currency);
                        }
                        $('#dscp_view').text(dscp);
                        $('#holidayDateFrom_view').text(holidayDateFrom);
                        $('#holidayDateTo_view').text(holidayDateTo);
                        $('.form_edit').hide();
                        $('.form_add').show();

                    }else {
                        $('.form_add').hide();
                        oTable = $('#list').DataTable({
                            "paging" : false,
                            "ordering" : false,
                            "info": false,
                            "destroy": true,

                            "searching": false,
                            "autoWidth":false,
                            "columnDefs": [

                                {
                                    targets: 0,
                                    sortable: false,
                                    width: "200px"
                                },
                                {
                                    targets: 1,
                                    sortable: false,
                                    width: "350px"
                                },
                                {
                                    targets: 2,
                                    sortable: false,
                                    width: "100px"
                                }

                            ]
                        });
                        $.each(detail.holidayList, function (idx, obj){

                            oTable.row.add([
                                moment(detail.holidayDate, 'DD/MM/YYYY').format("dddd, DD-MMMM-YYYY"),
                                obj.dscp,
                                (obj.type != 'CURRENCY' ? obj.type : (obj.type + '  -  ' + obj.currencyCode)),
                                ''

                            ]).draw(true);
                        });

                    }
                    //$('#code_1').text(detail.code);
                    //$('#name').text(detail.name);
                    //$('#dscp').text(detail.dscp);

                } else {
                    flash('warning', result.message);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            },
            complete: function (data) {

            }
        })
    }
</script>

