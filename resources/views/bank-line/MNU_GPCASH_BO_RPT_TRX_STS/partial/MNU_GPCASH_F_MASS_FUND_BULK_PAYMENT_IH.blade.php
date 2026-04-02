
<!-- <section class="content">
    <div class="panel panel-default">
        <div class="panel-body box-body"> -->
            <input type="hidden" id="referenceNo" value=""/>
                <!-- <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Record Detail</h3><br>
                </div> -->
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Transaction Service</label>
                                <div class="col-md-6">
                                    <label id="trxService">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Transaction Type</label>
                                <div class="col-md-6">
                                    <label id="trxType">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Source Account</label>
                                <div class="col-md-6">
                                    <label id="sourceAccount">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="box-header">
                    <h3 class="box-title">File Detail</h3><br>
                </div> -->
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Uploaded Date Time</label>
                                <div class="col-md-6">
                                    <label id="uploadDate">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">File Format</label>
                                <div class="col-md-6">
                                    <label id="fileFormat">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">File Upload</label>
                                <div class="col-md-6">
                                    <label id="fileUpload">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">File Description</label>
                                <div class="col-md-6">
                                    <label id="fileDescp" style="text-transform: none">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Total Record</label>
                                <div class="col-md-6">
                                    <label id="totalRecord">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Total Amount</label>
                                <div class="col-md-6">
                                    <label id="totalAmount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row chargeDetail" style="display: none;">

                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Total Debit Amount</label>
                                <div class="col-md-6">
                                    <label id="totalDebitAmount">-</label>
                                </div>
                            </div>
                        </div>
                        <hr style="height:1px;border:none;color:#333;background-color:#d2d6de;"/>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Payment Schedule</label>
                                <div class="col-md-6">
                                    <label id="paymentSchedule">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group instDate">
                                <label class="col-md-5 col-form-label text-end">Payment Date</label>
                                <div class="col-md-6">
                                    <label id="paymentDate">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row sessionTime">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">At</label>
                                <div class="col-md-6">
                                    <label id="sessionTime">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid overseasBankType">

                    </div>
                </div>
                <!-- <div class="box-header">
                    <h3 class="box-title">Record Detail</h3><br>
                </div> -->
                <div class="box-body listDetail" >
                    <table id="uploadListDetail" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                        <thead>
                            <tr>
                                <th align="center"><strong>No</strong></th>
                                <th align="center"><strong>Credit Account Number</strong></th>
                                <th align="center"><strong>Credit Account Name</strong></th>
                                <th align="center"><strong>Transfer Amount</strong></th>
                                <th align="center"><strong>Service</strong></th>
                                <!-- <th align="center"><strong>Final Payment</strong></th>
                                <th align="center"><strong>Sender Ref No</strong></th> -->
                                <th align="center"><strong>Beneficiary Ref No</strong></th>
                                <th align="center"><strong>Beneficiary Notif</strong></th>
                                <th align="center"><strong>Beneficiary Notif Email</strong></th>
                                <th align="center"><strong>Description</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <!-- </div>
        </div>
    </div> -->

<!-- </section> -->

<script>
    var detailList;
    var uploadListDetail;
    var service = '{{ $service }}';
    var createdByUserCode = '{{ $createdByUserCode }}';
    $(document).ready(function () {

        $('.sessionTime').hide();

        uploadListDetail = $('#uploadListDetail').DataTable({

            "ordering" : false,
            "info": false,
            "destroy": true,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "searching": false,
            "autoWidth":false,
            "columnDefs": [
               {
                    sortable: false,
                    width: "5%",
                    targets: 0,
                    className: 'dt-center',
               },
               {
                    targets: 1,
                    sortable: false,
                    width: "11.87%"
                },
                {
                    targets: 2,
                    sortable: false,
                    width: "11.87%"
                },
                {
                    targets: 3,
                    sortable: false,
                    width: "11.87%"
                },
                {
                    targets: 4,
                    sortable: false,
                    width: "11.87%"
                },
                {
                    targets: 5,
                    sortable: false,
                    width: "11.87%"
                },
                {
                    targets: 6,
                    sortable: false,
                    width: "11.87%"
                },
                {
                    targets: 7,
                    sortable: false,
                    className: 'dt-center',
                    width: "11.87%"
                },
                {
                    targets: 8,
                    sortable: false,
                    width: "11.87%"
                }

            ]

        });

    });

    function getDetailData(refNo, userId){
        var value = {
            referenceNo : refNo,
            loginUserCode:userId
        };
        var url_action = 'detailPendingTask';
        var action = 'DETAIL';
        var menu = service;
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : menu,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    var detail = result.details;
                    var confirm_data = detail.confirm_data;
                    var chargeList = detail.chargeList;

                    $('#trxService').text(confirm_data.transactionServiceName);
                    $('#trxType').text(detail.isSummary == 'Y' ? 'Summary' : 'Detail');
                    $('#sourceAccount').text(confirm_data.sourceAccountNo + " / " + confirm_data.sourceAccountName + " ( " + confirm_data.sourceAccountCurrencyCode +" )");
                    $('#uploadDate').text(confirm_data.uploadDateTime);
                    $('#fileFormat').text(confirm_data.fileFormat);
                    $('#fileUpload').text(confirm_data.fileName);
                    $('#fileDescp').text(confirm_data.fileDescription);
                    $('#totalRecord').text(confirm_data.totalRecord);
                    $('#totalAmount').text(confirm_data.transactionCurrency + " " + currencyFormat(confirm_data.transactionAmount));

                    setChargesDetail(chargeList, confirm_data);

                    $('#totalFee').text(confirm_data.totalChargeCurrency+" "+confirm_data.totalCharge);
                    $('#totalDebitAmount').text(confirm_data.transactionCurrency+" "+currencyFormat(confirm_data.totalDebitedAmount));

                    $('#paymentDate').text(moment(detail.instructionDate, 'DD/MM/YYYY HH:mm:ss').format('DD-MMMM-YYYY'));
                    if (detail.instructionMode == 'I') {
                        if (detail.instructionMode == 'I' && confirm_data.sessionTime != '00:00') {
                            $('#paymentSchedule').text("Today with Session Time");
                        } else {
                            $('#paymentSchedule').text("Immediate");
                        }
                    } else if (detail.instructionMode == 'F') {
                        $('#paymentSchedule').text('Future Date');
                    }
                    if (confirm_data.sessionTime !== '00:00') {
                        $('#sessionTime').text(confirm_data.sessionTime);
                        $('.sessionTime').show();
                    }

                    if (detail.pendingUploadId) {

                         prepareUploadDetail(detail);

                        //searchDetailList(detail.pendingUploadId);

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

    function setChargesDetail(chargeList, confirm_data){

        // if (chargeList[0]) {

            tags = '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-5 col-form-label text-end">'+chargeList[0].serviceChargeName+'</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+chargeList[0].currencyCode+' '+chargeList[0].value+' / record '+'</label>';
            tags += '</div></div>';

            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-5 col-form-label text-end"></label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+chargeList[0].currencyCode+' '+chargeList[0].value+' x '+confirm_data.totalRecord+' record = '+ confirm_data.totalChargeCurrency+' '+ confirm_data.totalCharge+'</label>';
            tags += '</div></div>';

            $('.chargeDetail').html(tags);
        /*} else {

            console.log("====== else");

            tags = '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-5 col-form-label text-end">'+Payroll Fee+'</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>'+' - '+'</label>';
            tags += '</div></div>';

            $('.chargeDetail').html(tags);
        }*/
    }

    function prepareUploadDetail(listDetail){
        uploadListDetail.clear();
        /*$.each(listDetail.details, function (idx, obj) {
                uploadListDetail.row.add([
                                idx+1,
                                obj.benAccountNo,
                                obj.benAccountName,
                                currencyFormat(obj.trxAmount),
                                obj.service,
                                //obj.finalizeFlag,
                                //obj.senderRefNo,
                                obj.benRefNo,
                                obj.benNotificationFlag,
                                obj.benNotificationValue,
                                obj.description
                ]).draw(true);
        });*/

        var valueParam = {
            pendingUploadId: listDetail.pendingUploadId,
            loginCorporateId: listDetail.loginCorporateId,
            executedMenuCode: 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_IH',
            bankView: 'Y',
        }

        uploadListDetail = $('#uploadListDetail').DataTable({
            "destroy": true,
            "initComplete": function(settings, json) {
            },
            "select": false,
            "searching": false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "processing": true,
            "serverSide": true,
            "autoWidth": true,
            "ScrollX": true,
            "columnDefs": [
                {
                    targets: 0,
                    data: null,
                    render: function ( data, type, full, meta ) {
                        var pageInfo = $('#uploadListDetail').DataTable().page.info();
                        var row = (pageInfo.length * (pageInfo.page)) + (meta.row +1);
                        return row;
                    },
                    orderable: false,
                    className: 'dt-center',
                },
                {
                    targets: 1,
                    data:"benAccountNo",
                    orderable: false
                },
                {
                    targets: 2,
                    data: "benAccountName",
                    orderable: false
                },
                {
                    targets: 3,
                    data: "trxAmount",
                    orderable: false,
                    render: function ( data, type, full, meta ) {
                        return currencyFormat(data);
                    },
                },
                {
                    targets: 4,
                    data: "service",
                    orderable: false
                },
                {
                    targets: 5,
                    data: "benRefNo",
                    orderable: false
                },
                {
                    targets: 6,
                    data: "benNotificationFlag",
                    orderable: false
                },
                {
                    targets: 7,
                    data: "benNotificationValue",
                    orderable: false
                },
                {
                    targets: 8,
                    data: "description",
                    orderable: false
                }
            ],
            "drawCallback": function () {
                index=1;
            },
            "ajax": {
                url: "fetchDataTable",
                type:'POST',
                data: function ( d ) {
                    d.value = valueParam;
                    d.menu = service;
                    d.url_action = 'searchPendingUploadDetail';
                    d.action = 'DETAIL';
                    d.result_key = 'details';
                    d.custom_order = {'idx': 'ASC'};
                    d._token = '{{ csrf_token() }}';
                },
                error:function (jqXHR, textStatus, errorThrown) {

                    var msg = '{{trans('form.conn_error')}}';
                    flash('warning', msg);
                }
            }
        });

    }

    function currencyFormat(num) {
        if(num != '' && num.trim() != '-'){
            return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
        }
        return num;
    }

</script>
