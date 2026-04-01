
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
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Transaction Service</label>
                                <div class="col-md-6">
                                    <label id="trxService">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Transaction Type</label>
                                <div class="col-md-6">
                                    <label id="trxType">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
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
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Uploaded Date Time</label>
                                <div class="col-md-6">
                                    <label id="uploadDate">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">File Format</label>
                                <div class="col-md-6">
                                    <label id="fileFormat">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">File Upload</label>
                                <div class="col-md-6">
                                    <label id="fileUpload">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">File Description</label>
                                <div class="col-md-6">
                                    <label id="fileDescp" style="text-transform: none">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Total Record</label>
                                <div class="col-md-6">
                                    <label id="totalRecord">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Total Amount</label>
                                <div class="col-md-6">
                                    <label id="totalAmount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row chargeDetail">

                        </div>                        
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Total Debit Amount</label>
                                <div class="col-md-6">
                                    <label id="totalDebitAmount">-</label>
                                </div>
                            </div>
                        </div>
                        <hr style="height:1px;border:none;color:#333;background-color:#d2d6de;"/>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Payment Schedule</label>
                                <div class="col-md-6">
                                    <label id="paymentSchedule">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row instDate">
                                <label class="col-md-5 col-form-label text-end">Payment Date</label>
                                <div class="col-md-6">
                                    <label id="paymentDate">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row sessionTime">
                            <div class="mb-3 row">
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
                    <table id="uploadListDetail" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse; display: block; overflow-x: auto; border-bottom: 0px">
                        <thead>
                            <tr>
                                <th align="center"><strong>No</strong></th>
                                <th align="center"><strong>BI FAST Beneficiary Type</strong></th>
                                <th align="center"><strong>Credit Account Number</strong></th>
                                <th align="center"><strong>Proxy Type</strong></th>
                                <th align="center"><strong>Proxy Address</strong></th>
                                <th align="center"><strong>Credit Account Name</strong></th>
                                <th align="center"><strong>Transfer Amount</strong></th>
                                <th align="center"><strong>Service</strong></th>
                                <th align="center"><strong>Beneficiary Bank Code</strong></th>
                                <th align="center"><strong>Beneficiary Bank Name</strong></th>
                                <th align="center"><strong>Beneficiary Ref No</strong></th>
                                <th align="center"><strong>Beneficiary Notif</strong></th>
                                <th align="center"><strong>Beneficiary Notif Email</strong></th>
                                <th align="center"><strong>Remark 1</strong></th>
                                <th align="center"><strong>Remark 2</strong></th>
                                <th align="center"><strong>Charge Instruction</strong></th>
                                <th align="center"><strong>Transaction Purpose</strong></th>
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
            "scrollX": true,
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
                    width: "4.31%"
                },
                {
                    targets: 2,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 3,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 4,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 5,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 6,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 7,
                    sortable: false,
                    // className: 'dt-center',
                    width: "4.31%"
                },
                {
                    targets: 8,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 9,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 10,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 11,
                    sortable: false,
                    width: "4.31%"
                },
               {
                    targets: 12,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 13,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 14,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 15,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 16,
                    sortable: false,
                    width: "4.31%"
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

                    $('#totalFee').text(confirm_data.totalChargeCurrency+" "+currencyFormat(confirm_data.totalCharge));
                    $('#totalDebitAmount').text(confirm_data.totalChargeCurrency+" "+currencyFormat(confirm_data.totalDebitedAmount));

                    // $('#paymentDate').text((confirm_data.instructionDate).split(' ')[0]);
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

        tags = '<div class="mb-3 row">'
        for (var i = 0; i < chargeList.length; i++) {
            if (chargeList[i].value !== '0' && chargeList[i].value !== '0.00' && chargeList[i].value !== '0.0000000' && chargeList[i].value !== '0.0') {
              tags += '<label class="col-md-5 col-form-label text-end">'+chargeList[i].serviceChargeName+'</label><div class="col-md-6"><label>'+chargeList[i].currencyCode+' '+currencyFormat(chargeList[i].value)+'</label></div>';
            }

	if(chargeList[i].total != '0.0000000'){
                tags += '<div class="mb-3 row">';
                tags += '<label class="col-md-5 col-form-label text-end">Total Our Fee</label>';
                tags += '<div class="col-md-6">';
                tags += '<label>'+chargeList[i].currencyCode+' '+currencyFormat(chargeList[i].value)+' x '+chargeList[i].totalRecord+' record = '+ chargeList[i].currencyCode+' '+ currencyFormat(chargeList[i].total)+'</label>';
                tags += '</div></div>';
            }
            if(chargeList[i].totalBen != '0.0000000'){
                tags += '<div class="mb-3 row">';
                tags += '<label class="col-md-5 col-form-label text-end">Total Ben Fee</label>';
                tags += '<div class="col-md-6">';
                tags += '<label>'+chargeList[i].currencyCode+' '+currencyFormat(chargeList[i].value)+' x '+chargeList[i].totalRecordBen+' record = '+ chargeList[i].currencyCode+' '+ currencyFormat(chargeList[i].totalBen)+'</label>';
                tags += '</div></div>';
            }

        }

            $('.chargeDetail').html(tags);
    }

    function prepareUploadDetail(listDetail){

        uploadListDetail.clear();
        /*$.each(listDetail.details, function (idx, obj) {
                uploadListDetail.row.add([
                                idx+1,
                                obj.benType + " " + (obj.benType == '' ? '' : (obj.benType == '1' ? '- Account Number' : '- Proxy')),
                                obj.benAccountNo,
                                obj.proxyType + " " + (obj.proxyType == '' ? '' : (obj.proxyType == '1' ? '- Email Address' : '- Mobile No')),
                                obj.proxyAddress,
                                obj.benAccountName,
                                currencyFormat(obj.trxAmount),
                                obj.service,
                                obj.benBankCode,
                                obj.benBankName,
                                obj.benRefNo,
                                obj.benNotificationFlag,
                                obj.benNotificationValue,
                                obj.description,
                                obj.chargeInstruction,
                                obj.trxPurposeDisplay
                ]).draw(true);
        });*/
        var valueParam = {
            pendingUploadId: listDetail.pendingUploadId,
            loginCorporateId: listDetail.loginCorporateId,
            executedMenuCode: 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_BIFAST',
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
                    data:"benTypeBiFastDisplay",
                    orderable: false
                },
                {
                    targets: 2,
                    data: "benAccountNo",
                    orderable: false
                },
                {
                    targets: 3,
                    data: "proxyTypeDisplay",
                    orderable: false
                },
                {
                    targets: 4,
                    data: "proxyAddress",
                    orderable: false
                },
                {
                    targets: 5,
                    data: "benAccountName",
                    orderable: false
                },
                {
                    targets: 6,
                    data: "trxAmount",
                    orderable: false,
                    render: function ( data, type, full, meta ) {
                        return currencyFormat(data);
                    },
                },
                {
                    targets: 7,
                    data: "service",
                    orderable: false
                },
                {
                    targets: 8,
                    data: "benBankCode",
                    orderable: false
                },
                {
                    targets: 9,
                    data: "benBankName",
                    orderable: false
                },
                {
                    targets: 10,
                    data: "benRefNo",
                    orderable: false
                },
                {
                    targets: 11,
                    data: "benNotificationFlag",
                    orderable: false
                },
                {
                    targets: 12,
                    data: "benNotificationValue",
                    orderable: false
                },
                {
                    targets: 13,
                    data: "remark1",
                    orderable: false
                },
                {
                    targets: 14,
                    data: "remark2",
                    orderable: false
                },
                {
                    targets: 15,
                    data: "chargeInstruction",
                    orderable: false
                },
                {
                    targets: 16,
                    data: "trxPurposeDisplay",
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
