@include('_partials.header_content',['breadcrumb'=>['Transaction Status Listing','detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="pendingTaskId" value=""/>
            <input type="hidden" id="refNo" value=""/>
            <input type="hidden" id="menuCode" value=""/>
            <input type="hidden" id="createdByUserCode" value=""/>
            <input type="hidden" id="isReject" value=""/>
            <div class="box">

            <div class="box-header">
                <h3 class="box-title">Transaction Detail</h3><br>
            </div>
            <form class="form-horizontal">
                <div class="box-body" id="trxDetail">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Menu</label>
                                <div class="col-md-6">
                                    <label id="menuName">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Transaction Status</label>
                                <div class="col-md-6">
                                    <label id="trxStatus">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Transaction Reference Number</label>
                                <div class="col-md-6">
                                    <label id="trxRefNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row reject" style="display:none">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Reject Reason</label>
                                <div class="col-md-6">
                                    <label id="rejectReason">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="actvDetail" style="display:none">
                    <!-- <div class="box-header">
                        <h3 class="box-title">Transaction Activity Detail</h3><br>
                    </div> -->
                    <form class="form-horizontal formDetailInclude">
                        <div class="box-body" id="detailActivity">

                        </div>
                    </form>
                </div>

                <div class="box-header">
                    <h3 class="box-title">Transaction Activity</h3><br>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="table-hidden">
                            <div class="mb-3 row">
                                <table id="activityList" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                       style="border-collapse:collapse;">
                                    <thead>
                                    <tr>
                                        <th align="center" ><strong>Activity Date</strong></th>
                                        <th align="center" ><strong>Activity</strong></th>
                                        <th align="center" ><strong>Activity By</strong></th>
                                        <th align="center" ><strong>Approval Count</strong></th>
                                        <th align="center" ><strong>Amount</strong></th>
                                        <th align="center" ><strong>Transaction Status</strong></th>
                                        <!-- <th align="center" ><strong></strong></th> -->
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="actvDetail" style="display:none">
                    <div class="box-header">
                        <h3 class="box-title">Transaction Activity Detail</h3><br>
                    </div>
                    <form class="form-horizontal formDetailInclude">
                        <div class="box-body" id="detailExecuted">

                        </div>
                    </form>
                </div>
                <div class="box-footer">
                    <div class="state_view">
                        <div class="float-left">
                            <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                        </div>
                        <!-- <div class="float-right">
                            <button type="button" id="save_screen" name="save_screen" class="btn btn-default" onclick="savePdf();">@lang('form.save_pdf')</button>
                        </div> -->
                        <div class="float-right">
                            <button type="button" id="save_screen" name="save_screen" class="btn btn-default" onclick="doDownload();">@lang('form.save_pdf')</button>
                        </div>
                    </div>
                </div>
            </form>

            </div>
        </div>
    </div>

</section>

<script>
    var activityList;
    var dataResult;
    var activity;
    var service = '{{ $service }}';
    var noRef;
    $(document).ready(function () {


        activityList = $('#activityList').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "columnDefs": [
               {
                    sortable: false,
                    width: "15.83%",
                    targets: 0,
               },
               {
                    targets: 1,
                    sortable: false,
                    width: "15.83%"
                },
                {
                    targets: 2,
                    sortable: false,
                    width: "15.83%"
                },
                {
                    targets: 3,
                    sortable: false,
                    className: 'dt-center',
                    width: "15.83%"
                },
                {
                    targets: 4,
                    sortable: false,
                    width: "15.83%"
                },
                {
                    targets: 5,
                    sortable: false,

                    width: "15.83%"
                }

            ]
        });

        $('.back').on('click', function () {
           var res = app.setView(service,'landing');
        });

    });

    function getDetail(){

        var isReject = $('#isReject').val();

        if (isReject == 'true') {
            $('.reject').show();
        }

        var pendingTaskId= $('#pendingTaskId').val();
        var url_action= 'detailTransactionStatus';
        var value ={
            pendingTaskId: pendingTaskId,
        };
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{
                value:value,
                menu:service,
                action:'DETAIL',
                url_action:url_action
            },
            success: function (data) {

                var result = JSON.parse(data);
                if (result.status=="200") {
                    $.each(result.activities, function (idx, obj) {
                            dataResult = obj
                            if (obj.menuCode == "MNU_GPCASH_F_FUND_INT") {
                                $('#save_screen').prop('disabled',true);
                            }
                            var ammount = '';

                            if (obj.menuCode == "MNU_GPCASH_F_TF_AMENDMENT") {
                                amount = Number(obj.amount) == '-1' ? '' : (obj.amountCcyCd +' '+ obj.amendmentAmount + ' ' + currencyFormat(obj.amount));
                            }else{
                                amount = Number(obj.amount) == '-1' ? '' : (obj.amountCcyCd +' '+currencyFormat(obj.amount));
                            }

                            activityList.row.add([
                                obj.activityDate,
                                obj.activity,
                                obj.userId +' - '+ obj.userName,
                                obj.approvalLvCount != '' ? (obj.approvalLvCount +' of '+obj.approvalLvRequired) : '-',
                                amount,
                                (obj.isExecute == 'Y' ? '<a href="javascript:void(0)" data-executedId="'+obj.executedId+'">'+obj.status+'</a>' : (obj.status))
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
                $('.table-hidden').show();

                var menuCode = $('#menuCode').val();
                var createdByUserCode = $('#createdByUserCode').val();

                $.ajax({
                        url: 'getTrxStatusDetailView',
                        method: 'post',
                        data:{
                            value:menuCode,
                            service:service,
                            createdByUserCode:createdByUserCode,
                        },
                        success: function (data) {
                            $('#detailActivity').html(data);
                            viewDetai()
                        }

                });

            }
        });
    }

    function viewDetai(){
        activity = 'detail'
        $('.actvDetail').show();
        $('#detailActivity').show();
        console.log($('#refNo').val(), $('#createdByUserCode').val());

        getDetailData($('#refNo').val(), $('#createdByUserCode').val());
        $('#save_screen').prop('disabled',false);
    }

    function viewDetaiExecuted(id) {

        activity = 'activity'
        var menuCode = $('#menuCode').val();
        // console.log("masuk viewDetaiExecuted", id + " " + menuCode);

        $('.actvDetail').show();
        $('#detailExecuted').show();

        $.ajax({
                url: 'getTrxStatusDetailView',
                method: 'post',
                data:{
                    value:'EXECUTE',
                    service:service,
                    menuCodeExecution:menuCode,
                },
                success: function (data) {
                    $('#detailExecuted').html(data);
                    getDetailExecuted(id, menuCode);
                }

        });
        $('#save_screen').prop('disabled',false);

    }

    $('#activityList tbody').on('click', 'a', function (e) {
        if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
        const executedId = $(this).attr('data-executedId');
        viewDetaiExecuted(executedId)
    })

    function savePdf() {
        if (dataResult.menuCode == "MNU_GPCASH_F_FUND_INT") {
            if (activity == 'detail') {
                var combinedBankAddress = $('#bankAddress1').text() + ' ' + $('#bankAddress2').text() + ' ' + $('#bankAddress3').text();
                $('#bankAddress1').text(combinedBankAddress);
                $('#bankAddress2').hide();
                $('#bankAddress3').hide();

                var combinedAccountAdd = $('#accountAddress1').text() + ' ' + $('#accountAddress2').text() + ' ' + $('#accountAddress3').text();
                $('#accountAddress1').text(combinedAccountAdd);
                $('#accountAddress2').hide();

                var combinedDscp = $('#dscp1').text() + ' ' + $('#dscp2').text() + ' ' + $('#dscp3').text();
                $('#dscp1').text(combinedDscp);
                $('#dscp2').hide();
                $('#dscp3').hide();

                var printContentsTrx = $('#trxDetail').html();
                var printContents = $('#displayInt').html();

                var printWindow = window.open('', '_blank');
                printWindow.document.write('<html><head><title>Remittance</title>');
                printWindow.document.write('<style>');
                printWindow.document.write('@media print {');
                printWindow.document.write('@page { size: A4; margin: 1cm; }'); // Set paper size to A4 and margin to 1cm
                printWindow.document.write('*[style] { margin-left: 0 !important; padding-left: 0 !important; }');

                printWindow.document.write('.row { display: flex; flex-direction: column; }');
                printWindow.document.write('.form-group { display: flex; justify-content: flex-start; align-items: start; }');
                printWindow.document.write('.col-form-label { width: 275px; background: transparent; font-weight: bold; }');
                printWindow.document.write('.col-form-label::after { content: ":"; margin-right: 5px; }');
                printWindow.document.write('.col-md-6 { display: inline-flex; align-items: flex-start; width: 350px; background: transparent; }'); // Flexbox with align-items: flex-start
                printWindow.document.write('br { display: none; }');
                printWindow.document.write('#print { display: none; }');
                printWindow.document.write('.btn-default { display: none; }');
                printWindow.document.write('.close { display: none; }');
                printWindow.document.write('</style></head><body>');

                printWindow.document.write('<div id="trxDetail">' + printContentsTrx + '</div>');
                printWindow.document.write(printContents);

                printWindow.document.write('</body></html>');

                printWindow.document.close();
                printWindow.print();
                printWindow.onafterprint = function () {
                    printWindow.close();
                };

            } else {
                save_pdf()
            }
        } else {
            save_pdf()
        }
    }


    function currencyFormat (num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

    function doDownload () {
            /*if(['MNU_GPCASH_F_FUND_INHOUSE',
                'MNU_GPCASH_F_FUND_DOMESTIC_RTGS',
                'MNU_GPCASH_F_FUND_DOMESTIC_SKN',
                'MNU_GPCASH_F_FUND_DOMESTIC_BIFAST',
                'MNU_GPCASH_F_FUND_INT',
                'MNU_GPCASH_F_TD_PLACEMENT',
              ].includes(dataResult.menuCode)) {*/
            var pendingTaskId= $('#pendingTaskId').val();
            var serviceCode = $('#serviceCode').val();

            var value = {
                menuService : dataResult.menuCode,
                receiptId   : pendingTaskId,
                transactionServiceCode : serviceCode, //for BeneficiaryList
            };
            var url_action = 'downloadTransactionStatus';
            var action = 'DOWNLOAD';
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


                            let fileName = result.fileName;
                            const urlGet = "downloadPDF?fileName="+fileName+"&fileId=1";

                            $.ajax({
                                url: 'downloadFile',
                                method: 'POST',
                                cache: false,
                                data:{
                                    url_action : urlGet,
                                    service:menu,
				    fileName:fileName
                                },
                                xhrFields: {
                                    withCredentials: true,
                                    responseType:'arraybuffer'
                                },
                               success: function (response, status, xhr) {
                                   var filename = "";
                                   var disposition = xhr.getResponseHeader('Content-Disposition');
                                   if (disposition && disposition.indexOf('attachment') !== -1) {
                                       var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                                       var matches = filenameRegex.exec(disposition);
                                       if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                                   }

                                   var type = xhr.getResponseHeader('Content-Type');
                                   var blob = new Blob([response], { type: type });
                                   saveAs(blob, fileName);
                                }
                            });

                    } else {
                        flash('warning', result.message);
                    }


                }, error: function (xhr, ajaxOptions, thrownError) {
                    var msg = '{{trans('form.conn_error')}}';
                    flash('warning', msg);
                    console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
                }, complete: function (data) {

                }
            });

        /*} else {
            save_pdf()
        }*/


    }


</script>
