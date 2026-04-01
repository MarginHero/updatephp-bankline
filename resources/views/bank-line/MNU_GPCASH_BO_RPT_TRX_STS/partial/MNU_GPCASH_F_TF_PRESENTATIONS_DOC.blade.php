
<!-- <section class="content">
    <div class="panel panel-default">
        <div class="panel-body box-body"> -->
            <input type="hidden" id="referenceNo" value=""/>
            <input type="hidden" id="fileName1" value=""/>
            <input type="hidden" id="fileId1" value=""/>
            <input type="hidden" id="fileName2" value=""/>
            <input type="hidden" id="fileId2" value=""/>
            <input type="hidden" id="fileName3" value=""/>
            <input type="hidden" id="fileId3" value=""/>
            <input type="hidden" id="fileName4" value=""/>
            <input type="hidden" id="fileId4" value=""/>
            <input type="hidden" id="fileName5" value=""/>
            <input type="hidden" id="fileId5" value=""/>
            <!-- <div class="box">
                <div class="box-header">
					<h3 class="box-title">Presentation Docs Detail</h3><br>
				</div> -->
				<div class="box-body">
					<div class="container-fluid">
                        <div class="row">
							<div class="mb-3 row">
								<label class="col-md-5 col-form-label text-end">L/C Bank Reference No</label>
								<div class="col-md-6">
									<label id="bankRefNo"></label>
								</div>
							</div>
						</div>
                        <div class="row">
							<div class="mb-3 row">
								<label class="col-md-5 col-form-label text-end">L/C Issue Date</label>
								<div class="col-md-6">
									<label id="issueDate"></label>
								</div>
							</div>
						</div>
                        <div class="row">
							<div class="mb-3 row">
								<label class="col-md-5 col-form-label text-end">Invoice No.</label>
								<div class="col-md-6">
									<label id="invoiceNo"></label>
								</div>
							</div>
						</div>
                        <div class="row">
							<div class="mb-3 row">
								<label class="col-md-5 col-form-label text-end">Amount</label>
								<div class="col-md-6">
									<label id="amount"></label>
								</div>
							</div>
						</div>
                        <div class="row">
							<div class="mb-3 row">
								<label class="col-md-5 col-form-label text-end">Description</label>
								<div class="col-md-6">
									<label id="templateDesc" style="text-transform: none"></label>
								</div>
							</div>
						</div>
                    </div>
                </div>
                <!-- <div class="box-header">
                    <h3 class="box-title">Attachment Detail</h3><br>
                </div> -->
                <div class="box-body">
                    <!-- <div class="container-fluid"> -->
                        <div class="row fileUploadClass"></div>
					<!-- </div> -->
				</div>
            <!-- </div>
        </div>
    </div> -->
<!-- </section> -->

<script>
    var oTable;
    var chargeList;
    var service = '{{ $service }}';
    var createdByUserCode = '{{ $createdByUserCode }}';
    $(document).ready(function () {

    });

    function getDetailData(refNo,userId){
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

                    $('#bankRefNo').text(detail.bankRefNo);
                    var parseAmount = currencyFormat(detail.trxAmount)
                    $('#amount').text(`${detail.transactionCurrency} ${parseAmount}`);
                    $('#issueDate').text(detail.issueDate);
                    $('#invoiceNo').text(detail.invoiceNo);
                    $('#templateDesc').text(detail.templateDesc);

                    $('#fileName1').val(detail.fileName1);
                    $('#fileName2').val(detail.fileName2);
                    $('#fileName3').val(detail.fileName3);
                    $('#fileName4').val(detail.fileName4);
                    $('#fileName5').val(detail.fileName5);

                    $('#fileId1').val(detail.fileId1);
                    $('#fileId2').val(detail.fileId2);
                    $('#fileId3').val(detail.fileId3);
                    $('#fileId4').val(detail.fileId4);
                    $('#fileId5').val(detail.fileId5);

                    setFileUpload(detail);

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

            }
        });
    }

    function downloadFile(fileName, fileId) {
        // let fileName = $('#fileName'+num).val();
        // let fileId = $('#fileId'+num).val();
        const urlGet = "downloadFile?fileName="+fileName+"&fileId="+fileId;

        $.ajax({
            url: 'downloadTrade',
            method: 'POST',
            cache: false,
            data:{
                url_action : urlGet,
                service:'MNU_GPCASH_BANK_TF_PRESENTATIONS_DOC',
                fileName:fileName,
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
                   console.log('aaa: ', matches);
                   if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                   console.log('aaa1: ', filename);
               }
               var file = filename.split('.pdf');


               var type = xhr.getResponseHeader('Content-Type');
               var blob = new Blob([response], { type: type });
               saveAs(blob, file[0]+'.pdf');


            }

        });

    }

    function setFileUpload(detail){
        var fileNames = [];
        var fileIds = [];
        if(detail.fileName1!=null && detail.fileName1!= undefined && detail.fileName1!=''){
            fileNames.push(detail.fileName1);
            fileIds.push(detail.fileId1);
        }
        if(detail.fileName2!=null && detail.fileName2!= undefined && detail.fileName2!=''){
            fileNames.push(detail.fileName2);
            fileIds.push(detail.fileId2);
        }
        if(detail.fileName3!=null && detail.fileName3!= undefined && detail.fileName3!=''){
            fileNames.push(detail.fileName3);
            fileIds.push(detail.fileId3);
        }
        if(detail.fileName4!=null && detail.fileName4!= undefined && detail.fileName4!=''){
            fileNames.push(detail.fileName4);
            fileIds.push(detail.fileId4);
        }
        if(detail.fileName5!=null && detail.fileName5!= undefined && detail.fileName5!=''){
            fileNames.push(detail.fileName5);
            fileIds.push(detail.fileId5);
        }
        tags = `<div class="row">
                    <div class="mb-3 row">
                        <label class="col-md-5 col-form-label text-end">File Upload Account</label>
                        <div class="col-md-6">
                            <a onClick="downloadFile('${fileNames[0]}', '${fileIds[0]}');">${fileNames[0]}</a>
                        </div>
                    </div>
                </div>`;

        for(let i = 1; i < fileNames.length; i++){
            tags = tags + `<div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <a onClick="downloadFile('${fileNames[i]}', '${fileIds[i]}');">${fileNames[i]}</a>
                                    </div>
                                </div>
                           </div>`;
        }
        $('.fileUploadClass').html(tags);
    }
</script>
