
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
                                <label class="col-md-5 col-form-label text-end">Tranaction Type</label>
                                <div class="col-md-6">
                                    <label id="trxType">Summary</label>
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
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Remitter Information</label>
                                <div class="col-md-6">
                                    <label id="sourceAccount"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Remitter Name</label>
                                <div class="col-md-6">
                                    <label id="remitterName">-</label>
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
                        <div class="row underlying">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Underlying Document</label>
                                <div class="col-md-6">
                                    <label id="underlyingDoc">-</label>
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
                        <!-- <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Total Fee</label>
                                <div class="col-md-6">
                                    <label id="totalFee">-</label>
                                </div>
                            </div>
                        </div> -->
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
                    <h3 class="box-title">Transaction List</h3><br>
                </div> -->
                <div class="box-body listDetail" >
                    <table id="uploadListDetail" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse; display: block; overflow-x: auto; border-bottom: 0px">
                        <thead>
                            <tr>
                                <th align="center"><strong>No</strong></th>
                                <th align="center"><strong>BI FAST Beneficiary Type</strong></th>
                                <th align="center"><strong>Credit Account Number</strong></th>
                                <th align="center"><strong>Proxy type</strong></th>
                                <th align="center"><strong>Proxy Address</strong></th>
                                <th align="center"><strong>Credit Account Name</strong></th>
                                <th align="center"><strong>Transfer Amount</strong></th>
                                <th align="center"><strong>Service</strong></th>
                                <th align="center"><strong>Beneficiary Department</strong></th>
                                <th align="center"><strong>Beneficiary Sub Department</strong></th>
                                <th align="center"><strong>Beneficiary Street Name</strong></th>
                                <th align="center"><strong>Beneficiary Building Number</strong></th>
                                <th align="center"><strong>Beneficiary Building Name</strong></th>
                                <th align="center"><strong>Beneficiary Floor</strong></th>
                                <th align="center"><strong>Beneficiary Post Box</strong></th>
                                <th align="center"><strong>Beneficiary Post Code</strong></th>
                                <th align="center"><strong>Beneficiary Room</strong></th>
                                <th align="center"><strong>Beneficiary Town Name</strong></th>
                                <th align="center"><strong>Beneficiary Town Location Name</strong></th>
                                <th align="center"><strong>Beneficiary District Name</strong></th>
                                <th align="center"><strong>Beneficiary Country Sub Division</strong></th>
                                <th align="center"><strong>Beneficiary Country</strong></th>
                                <th align="center"><strong>Beneficiary Bank Country</strong></th>
                                <th align="center"><strong>Beneficiary Bank Name</strong></th>
                                <th align="center"><strong>Beneficiary Bank Code</strong></th>
                                <th align="center"><strong>Beneficiary Bank Town Name</strong></th>
                                <th align="center"><strong>Beneficary Bank City Code</strong></th>
                                <th align="center"><strong>Beneficary Bank City Name</strong></th>
                                <th align="center"><strong>Beneficiary Address 1</strong></th>
                                <th align="center"><strong>Beneficiary Address 2</strong></th>
                                <th align="center"><strong>Beneficiary Address 3</strong></th>
                                <th align="center"><strong>City</strong></th>
                                <th align="center"><strong>Beneficiary City Code</strong></th>
                                <th align="center"><strong>Beneficiary City Name</strong></th>
                                <th align="center"><strong>Beneficiary Type</strong></th>
                                <th align="center"><strong>Beneficiary Resident</strong></th>
                                <th align="center"><strong>Beneficiary Resident Country Code</strong></th>
                                <th align="center"><strong>Beneficiary Citizen</strong></th>
                                <th align="center"><strong>Beneficiary Citizen Country Code</strong></th>
                                <th align="center"><strong>Beneficiary Ref No</strong></th>
                                <th align="center"><strong>Beneficiary Notif</strong></th>
                                <th align="center"><strong>Beneficiary Notif Email</strong></th>
                                <th align="center"><strong>Remark 1</strong></th>
                                <th align="center"><strong>Remark 2</strong></th>
                                <th align="center"><strong>Remark 3</strong></th>
                                <th align="center"><strong>Charge Instruction</strong></th>
                                <th align="center"><strong>Transaction Purpose</strong></th>
                                <th align="center"><strong>Sender Category</strong></th>
                                <th align="center"><strong>Beneficiary Category</strong></th>
                                <th align="center"><strong>Transactor Relationship</strong></th>

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
    var oTable;
    var uploadListDetail;
    var service = '{{ $service }}';
    var createdByUserCode = '{{ $createdByUserCode }}';
    var trxServiceCode;
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
                    width: "4.31%",
                    // visible: false
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
                },
                {
                    targets: 17,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 18,
                    sortable: false,
                    // className: 'dt-center',
                    width: "4.31%"
                },
                {
                    targets: 19,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 20,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 21,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 22,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 23,
                    sortable: false,
                    width: "4.31%"
                },
                {
                    targets: 24,
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

                    $('#trxService').text(detail.transactionServiceName);
                    $('#sourceAccount').text(confirm_data.sourceAccountNo + " / " + confirm_data.sourceAccountName + "(" + confirm_data.sourceAccountCurrencyCode + ")");
                    $('#uploadDate').text(confirm_data.uploadDateTime);
                    $('#remitterName').text(confirm_data.remitterName);
                    $('#fileFormat').text(confirm_data.fileFormat);
                    $('#fileUpload').text(confirm_data.fileName);
                    $('#fileDescp').text(confirm_data.fileDescription);
                    if(confirm_data.underlyingDoc != ''){
                        $('#underlyingDoc').text(confirm_data.underlyingDoc + " - " + confirm_data.underlyingDocName);
                        $('.underlying').show();
                    }else{
                        $('.underlying').hide();
                    }

                    $('#totalRecord').text(confirm_data.totalRecord);
                    $('#totalAmount').text(confirm_data.transactionCurrency + " " + currencyFormat(confirm_data.transactionAmount));

                    setChargesDetail(chargeList, confirm_data);

                    $('#totalFee').text(confirm_data.totalChargeCurrency+" "+currencyFormat(confirm_data.totalCharge));
                    $('#totalDebitAmount').text(confirm_data.transactionCurrency+" "+currencyFormat(confirm_data.totalDebitedAmount));
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
                        trxServiceCode = detail.transactionServiceCode;
                        prepareUploadDetail(detail, detail.details);

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

    function prepareUploadDetail(detailId, listDetail){

        uploadListDetail.clear();
        /*$.each(listDetail, function (idx, obj) {
                uploadListDetail.row.add([
                                idx+1,
                                obj.benAccountNo,
                                obj.benAccountName,
                                obj.trxAmount,
                                '',
                                obj.description,
                                obj.benRefNo
                ]).draw(true);
        });*/
        var valueParam = {
            pendingUploadId: detailId.pendingUploadId,
            loginCorporateId: detailId.loginCorporateId,
            executedMenuCode: 'MNU_GPCASH_F_MASS_FUND_PAYROLL',
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
                    data: "benTypeBiFastDisplay",
                    orderable: false,
                    visible: checkVisible("benTypeBiFast")
                },
                {
                    targets: 2,
                    data:"benAccountNo",
                    orderable: false
                },
                {
                    targets: 3,
                    data: "proxyTypeDisplay",
                    orderable: false,
                    visible: checkVisible("proxyType")
                },
                {
                    targets: 4,
                    data: "proxyAddress",
                    orderable: false,
                    visible: checkVisible("proxyAddress")
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
                    data: "department",
                    orderable: false,
                    visible: checkVisible("department")
                },
                {
                    targets: 9,
                    data: "subDepartment",
                    orderable: false,
                    visible: checkVisible("subDepartment")
                },
                {
                    targets: 10,
                    data: "streetName",
                    orderable: false,
                    visible: checkVisible("streetName")
                },
                {
                    targets: 11,
                    data: "buildingNumber",
                    orderable: false,
                    visible: checkVisible("buildingNumber")
                },
                {
                    targets: 12,
                    data: "buildingName",
                    orderable: false,
                    visible: checkVisible("buildingName")
                },
                {
                    targets: 13,
                    data: "floor",
                    orderable: false,
                    visible: checkVisible("floor")
                },
                {
                    targets: 14,
                    data: "postBox",
                    orderable: false,
                    visible: checkVisible("postBox")
                },
                {
                    targets: 15,
                    data: "postCode",
                    orderable: false,
                    visible: checkVisible("postCode")
                },
                {
                    targets: 16,
                    data: "room",
                    orderable: false,
                    visible: checkVisible("room")
                },
                {
                    targets: 17,
                    data: "townName",
                    orderable: false,
                    visible: checkVisible("townName")
                },
                {
                    targets: 18,
                    data: "townLocationName",
                    orderable: false,
                    visible: checkVisible("townLocationName")
                },
                {
                    targets: 19,
                    data: "districtName",
                    orderable: false,
                    visible: checkVisible("districtName")
                },
                {
                    targets: 20,
                    data: "countrySubDivision",
                    orderable: false,
                    visible: checkVisible("countrySubDivision")
                },
                {
                    targets: 21,
                    data: "benCountryDisplay",
                    orderable: false,
                    visible: checkVisible("benCountry")
                },
                {
                    targets: 22,
                    data: "benBankCountryDisplay",
                    orderable: false,
                    visible: checkVisible("benBankCountry")
                },
                {
                    targets: 23,
                    data: "benBankName",
                    orderable: false,
                    visible: checkVisible("benBankName")
                },
                {
                    targets: 24,
                    data: "benBankCode",
                    orderable: false,
                    visible: checkVisible("benBankCode")
                },
                {
                    targets: 25,
                    data: "benBankTownName",
                    orderable: false,
                    visible: checkVisible("benBankTownName")
                },

                {
                    targets: 26,
                    data: "benBankCityCode",
                    orderable: false,
                    visible: checkVisible("benBankCityCode")
                },
                {
                    targets: 27,
                    data: "benBankCityName",
                    orderable: false,
                    visible: checkVisible("benBankCityName")
                },
                {
                    targets: 28,
                    data: "benAddress1",
                    orderable: false,
                    visible: checkVisible("benAddress1")
                },
                {
                    targets: 29,
                    data: "benAddress2",
                    orderable: false,
                    visible: checkVisible("benAddress2")
                },
                {
                    targets: 30,
                    data: "benAddress3",
                    orderable: false,
                    visible: checkVisible("benAddress3")
                },
                {
                    targets: 31,
                    data: "benAddress3",
                    orderable: false,
                    visible: checkVisible("city")
                },

                {
                    targets: 32,
                    data: "benCityCode",
                    orderable: false,
                    visible: checkVisible("benCityCode")
                },
                {
                    targets: 33,
                    data: "benCityName",
                    orderable: false,
                    visible: checkVisible("benCityName")
                },
                {
                    targets: 34,
                    data: "beneTypeDomesticDisplay",
                    orderable: false,
                    visible: checkVisible("beneTypeDomestic")
                },
                {
                    targets: 35,
                    data: "isBenResident",
                    orderable: false,
                    visible: checkVisible("isBenResident")
                },
                {
                    targets: 36,
                    data: "benResidentCountryDisplay",
                    orderable: false,
                    visible: checkVisible("benResidentCountry")
                },
                {
                    targets: 37,
                    data: "isBenCitizen",
                    orderable: false,
                    visible: checkVisible("isBenCitizen")
                },
                {
                    targets: 38,
                    data: "benCitizenCountryDisplay",
                    orderable: false,
                    visible: checkVisible("benCitizenCountry")
                },
                {
                    targets: 39,
                    data: "benRefNo",
                    orderable: false
                },
                {
                    targets: 40,
                    data: "benNotificationFlag",
                    orderable: false
                },
                {
                    targets: 41,
                    data: "benNotificationValue",
                    orderable: false
                },
                {
                    targets: 42,
                    data: "remark1",
                    orderable: false
                },
                {
                    targets: 43,
                    data: "remark2",
                    orderable: false
                },
                {
                    targets: 44,
                    data: "remark3",
                    orderable: false,
                    visible: checkVisible("remark3")
                },
                {
                    targets: 45,
                    data: "chargeInstruction",
                    orderable: false,
                    visible: checkVisible("chargeInstruction")
                },
                {
                    targets: 46,
                    data: "trxPurposeDisplay",
                    orderable: false,
                    visible: checkVisible("trxPurpose")
                },
                {
                    targets: 47,
                    data: "senderCategoryDisplay",
                    orderable: false,
                    visible: checkVisible("senderCategory")
                },
                {
                    targets: 48,
                    data: "benCategoryDisplay",
                    orderable: false,
                    visible: checkVisible("benCategory")
                },
                {
                    targets: 49,
                    data: "trxRelationDisplay",
                    orderable: false,
                    visible: checkVisible("trxRelation")
                },
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

    function checkVisible(dataId) {

        if (dataId == 'benTypeBiFast') {
            if (trxServiceCode == 'GPT_MFT_PROLL_DOM_ONLINE') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'proxyType') {
            if (trxServiceCode == 'GPT_MFT_PROLL_DOM_ONLINE') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'proxyAddress') {
            if (trxServiceCode == 'GPT_MFT_PROLL_DOM_ONLINE') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'benBankCode') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'benBankName') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'benBankCityCode') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH' && trxServiceCode != 'GPT_MFT_PROLL_DOM_ONLINE' && trxServiceCode != 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'benBankCityName') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH' && trxServiceCode != 'GPT_MFT_PROLL_DOM_ONLINE' && trxServiceCode != 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'benAddress1') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH' && trxServiceCode != 'GPT_MFT_PROLL_DOM_ONLINE'  && trxServiceCode != 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'benAddress2') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH' && trxServiceCode != 'GPT_MFT_PROLL_DOM_ONLINE'  && trxServiceCode != 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'benAddress3') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH' && trxServiceCode != 'GPT_MFT_PROLL_DOM_ONLINE' && trxServiceCode != 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'city') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return false;
            } else {
                return false;
            }
        } else if (dataId == 'benBankCountry') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'trxRelation') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'benCityCode') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH' && trxServiceCode != 'GPT_MFT_PROLL_DOM_ONLINE' && trxServiceCode != 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'benCityName') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH' && trxServiceCode != 'GPT_MFT_PROLL_DOM_ONLINE' && trxServiceCode != 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'beneTypeDomestic') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH' && trxServiceCode != 'GPT_MFT_PROLL_DOM_ONLINE' && trxServiceCode != 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'isBenResident') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH' && trxServiceCode != 'GPT_MFT_PROLL_DOM_ONLINE' && trxServiceCode != 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'benResidentCountry') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH' && trxServiceCode != 'GPT_MFT_PROLL_DOM_ONLINE' && trxServiceCode != 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'isBenCitizen') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH' && trxServiceCode != 'GPT_MFT_PROLL_DOM_ONLINE' && trxServiceCode != 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'benCitizenCountry') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH' && trxServiceCode != 'GPT_MFT_PROLL_DOM_ONLINE' && trxServiceCode != 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'remark3') {
            if (trxServiceCode == 'GPT_MFT_PROLL_IH' || trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'chargeInstruction') {
            if (trxServiceCode != 'GPT_MFT_PROLL_IH') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'trxPurpose') {
            if (trxServiceCode == 'GPT_MFT_PROLL_DOM_ONLINE' || trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'senderCategory') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'benCategory') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        } else if (dataId == 'benCountry') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }
        else if (dataId == 'department') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }
        else if (dataId == 'subDepartment') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }
        else if (dataId == 'streetName') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }
        else if (dataId == 'buildingNumber') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }
        else if (dataId == 'buildingName') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }
        else if (dataId == 'floor') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }
        else if (dataId == 'postBox') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }
        else if (dataId == 'postCode') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }
        else if (dataId == 'room') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }
        else if (dataId == 'townName') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }
        else if (dataId == 'townLocationName') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }
        else if (dataId == 'districtName') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }
        else if (dataId == 'countrySubDivision') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }
        else if (dataId == 'benBankTownName') {
            if (trxServiceCode == 'GPT_MFT_PROLL_INT') {
                return true;
            } else {
                return false;
            }
        }

    }


</script>
