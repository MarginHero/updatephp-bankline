<div class="box">
    <div class="box-header">
        <h3 class="box-title">Bank Calendar Detail</h3><br>
    </div>

    <div class="row">
        <div class="col-lg-6" style="padding-right: 0px">
            <div class="box-body" style="border-right: 4px solid #d2d6de">
                <h2 style="text-align: center">New Value</h2>
                <div class="container-fluid">

                    <div class="box-body form_edit">
                        <div class="row">
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
        <div class="col-lg-6" style="padding-left: 0px">
            <div class="box-body" >
                <h2 style="text-align: center">Old Value</h2>
                <div class="container-fluid">
                    <div class="box-body form_edit">
                        <div class="row">
                            <table id="old_list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
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
    </div>




</div>

<script>
    var oTable;
    var old_oTable;
    var currencyOption;
    var noRef = 'OT'+$('#referenceNo').val();
    $(document).ready(function () {

        getDetail('MNU_GPCASH_PENDING_TASK');
    });

    function getDetail(id) {
        var referenceNo = $('#referenceNo').val();
        var url_action = 'detailPendingTask';
        var value = {
            referenceNo: referenceNo,
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


                    var detail = result.oldValue.details;
                    if(detail.action=='CREATE') {
                        var dscp = detail.dscp;
                        var holidayDateFrom = moment(detail.holidayDateFrom, 'DD-MM-YYYY').format("dddd, DD-MMMM-YYYY");
                        var holidayDateTo = moment(detail.holidayDateTo, 'DD-MM-YYYY').format("dddd, DD-MMMM-YYYY");
                        var type = detail.type;
                        var currency = detail.currencyCode;


                        $('#old_type_view').text(type);
                        if (type == 'CURRENCY') {
                            $('#old_type_view').text(type + ' HOLIDAY ' + ' - ' + currency);
                        }
                        $('#old_dscp_view').text(dscp);
                        $('#old_holidayDateFrom_view').text(holidayDateFrom);
                        $('#old_holidayDateTo_view').text(holidayDateTo);


                    }else {
                        $('.form_add').hide();
                        old_oTable = $('#old_list').DataTable({
                            "paging": false,
                            "ordering": false,
                            "info": false,
                            "destroy": true,

                            "searching": false,
                            "autoWidth": false,
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
                        $.each(detail.oldHolidayList, function (idx, obj) {

                            old_oTable.row.add([
                                moment(obj.start	, 'DD/MM/YYYY').format("dddd, DD-MMMM-YYYY"),
                                obj.title,
                                (obj.type != 'CURRENCY' ? obj.type : (obj.type + '  -  ' + obj.currencyCode)),
                                ''

                            ]).draw(true);
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
            complete: function (data) {

            }
        })
    }
</script>

