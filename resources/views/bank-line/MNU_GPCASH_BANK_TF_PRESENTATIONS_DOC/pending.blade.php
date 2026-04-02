﻿@include('_partials.header_content',['breadcrumb'=>['Ongoing task','Presentation Docs Detail']])
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="referenceNo" value=""/>
            <input type="hidden" id="taskId" value=""/>
            <form class="form-horizontal">
                <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Ongoing Task Detail</h3><br>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Menu</label>
                                <div class="col-md-6">
                                    <label id="menu_text">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Activity</label>
                                <div class="col-md-6">
                                    <label id="activity_text">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Reference Number</label>
                                <div class="col-md-6">
                                    <label id="noref_text">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Activity Date Time</label>
                                <div class="col-md-6">
                                    <label id="datetime_text">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-header">
                    <h3 class="box-title">Presentation Docs Detail</h3><br>
                </div>

                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Transaction Reference No.</label>
                                <div class="col-md-6">
                                    <label id="referenceNo_exam">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Corporate ID</label>
                                <div class="col-md-6">
                                    <label id="corpId_exam">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Corporate name</label>
                                <div class="col-md-6">
                                    <label id="corpName_exam">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Maker ID</label>
                                <div class="col-md-6">
                                    <label id="makerId_exam">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Corp Release Date</label>
                                <div class="col-md-6">
                                    <label id="releaseDate_exam">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Amount</label>
                                <div class="col-md-6">
                                    <label id="amount_exam">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Number of Correction</label>
                                <div class="col-md-6">
                                    <label id="noOfCorrection_exam">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title">Transaction Detail</h3><br>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">
                                    <a onClick="unlockAction(this);" style="color:#337ab7; text-decoration:underline; cursor:pointer;">View Detail Transaction</a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title">ATTACHMENT DETAIL</h3>
                </div>
                <div class="box-body">
                    <div class="row" style="padding-top: 20px">
                        <div class="row fileUploadClass"></div>
                    </div>
                    <!-- <div class="container-fluid">
                        <div class="row" style="padding-top: 20px">
                            <div class="mb-3 row form-group fileName1">
                                <label class="col-md-2 col-form-label text-end">File Upload</label>
                                <div class="col-md-6">
				                <label>
                            	    <a onClick="downloadFile('file_upload1');" id="file_upload1_exam">-</a>
                        	    </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group fileName2">
                                <label class="col-md-2 col-form-label text-end"></label>
                                <div class="col-md-6">
					                <label>
                                	    <a onClick="downloadFile('file_upload2');" id="file_upload2_exam">-</a>
                            	    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group fileName3">
                                <label class="col-md-2 col-form-label text-end"></label>
                                <div class="col-md-6">
					                <label>
                                	    <a onClick="downloadFile('file_upload3');" id="file_upload3_exam">-</a>
                            	    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group fileName4">
                                <label class="col-md-2 col-form-label text-end"></label>
                                <div class="col-md-6">
					                <label>
                                	    <a onClick="downloadFile('file_upload4');" id="file_upload4_exam">-</a>
                            	    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group fileName5">
                                <label class="col-md-2 col-form-label text-end"></label>
                                <div class="col-md-6">
					                <label>
                                	    <a onClick="downloadFile('file_upload5');" id="file_upload5_exam">-</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="box-header">
                    <h3 class="box-title">Bank Response</h3><br>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Action Status</label>
                                <div class="col-md-6">
                                    <label id="actionStatus">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Bank Reference No</label>
                                <div class="col-md-6">
                                    <label id="bankRefNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Comment</label>
                                <div class="col-md-6">
                                    <label id="comment">-</label>
                                </div>
                            </div>
                        </div>
                        @include('form.reason')
                    </div>
                </div>

                    <div class="box-footer">
                        <div class="state_view" data-html2canvas-ignore="true">
                            <div class="float-left">
                                <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                            </div>
                            <div class="float-right">
                                <button type="button" id="save_screen" name="save_screen" class="btn btn-default" style="display:none" onclick="save_pdf();">@lang('form.save_pdf')</button>
                                <button type="button" id="reject" name="reject" class="btn btn-danger">@lang('form.reject')</button>
                                <button type="button" id="approve" name="approve" class="btn btn-primary">@lang('form.approve')</button>
                            </div>
                        </div>
                        <div class="state_reason" style="display: none;">
                            <div class="float-right">
                                <button type="button" id="rejectSubmit" name="btn_submit_reject" class="btn btn-primary">@lang('form.submit')</button>
                            </div>
                            <div class="float-left">
                                <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>
<div id="transactionModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Transaction Presentation Docs</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Presentation Docs</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label">Transaction Status</label>
                                <div class="col-md-6">
                                    <label id="status_detail">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label">Transaction Reference No.</label>
                                <div class="col-md-6">
                                    <label id="referenceNo_modal">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Presentation Docs Detail</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label">L/C Bank Reference No.</label>
                                <div class="col-md-6">
                                    <label id="bankRefNo_modal">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label">L/C Issue Date</label>
                                <div class="col-md-6">
                                    <label id="issuedDate">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label">Invoice No.</label>
                                <div class="col-md-6">
                                    <label id="invoiceNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label">Amount</label>
                                <div class="col-md-6">
                                    <label id="amount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label">Description</label>
                                <div class="col-md-6">
                                    <label id="description">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Attachment Detail</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row fileUploadDetailClass"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">@lang('form.close')</button>
            </div>
        </div>
    </div>
</div>

<script>
    var oTable;
    var currencyOption;
    var noRef = 'OT'+$('#referenceNo').val();
    $(document).ready(function () {
        $('#validation').hide();
        $('#updateStatus').hide();

        $('#approve').on('click', function () {
            $('#approve').prop('disabled',true);
            $.confirm({
                title: '{{trans('form.confirm')}}',
                content: '{{trans('form.confirm_approve')}}',
                buttons: {

                    cancel: {
                        text: '{{trans('form.cancel')}}',
                        btnClass: 'btn-default',
                        action: function(){
                            $('#approve').prop('disabled',false);
                        }
                    },
                    confirm: {
                        text: '{{trans('form.confirm')}}',
                        btnClass: 'btn-primary',
                        action: function(){
                            submitTask('approve');
                        }
                    },

                }
            });
        });

        $('#rejectSubmit').on('click', function () {
            $('#rejectSubmit').prop('disabled',true);
            $.confirm({
                title: '{{trans('form.confirm')}}',
                content: '{{trans('form.confirm_reject')}}',
                buttons: {

                    cancel: {
                        text: '{{trans('form.cancel')}}',
                        btnClass: 'btn-default',
                        action: function(){
                            $('#rejectSubmit').prop('disabled',false);
                        }
                    },
                    confirm: {
                        text: '{{trans('form.confirm')}}',
                        btnClass: 'btn-primary',
                        action: function(){
                            submitTask('reject');
                        }
                    },

                }
            });
        });

        $('.back').on('click', function () {
            res = app.setView('MNU_GPCASH_PENDING_TASK','landing');
        });

    });

    function getData(){
        var referenceNo = $('#referenceNo').val();
        var value = {
            referenceNo : referenceNo
        };
        var url_action = 'detailPendingTask';
        var action = 'DETAIL';
        var menu = 'MNU_GPCASH_PENDING_TASK';
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
                    console.log(result);
                    var detail = result.details;
                    $('#validation').show();
                    if(detail.actionStatus=='CONFIRM'){
                        $('#actionStatus').text('Final Document Checking');
                    }else if(detail.actionStatus=='RETURNED'){
                        $('#actionStatus').text('Returned');
                    }else if(detail.actionStatus=='DOCS_SENT_TO_ISSUING_BANK'){
                        $('#actionStatus').text('Docs Send To Issuing Bank');
                    }else if(detail.actionStatus=='REJECTED_BY_ISSUING_BANK'){
                        $('#actionStatus').text('Reject By Issuing Bank');
                    }else if(detail.actionStatus=='PAID'){
                        $('#actionStatus').text('Paid');
                    }
                    $('#bankRefNo').text(detail.bankRefNo);
                    $('#bankRefNo_modal').text(detail.bankRefNo);
                    $('#comment').text(detail.validationComment);


                    $('#referenceNo').text(detail.referenceNo);
		            $('#referenceNo_exam').text(detail.referenceNo);
		            $('#referenceNo_status').text(detail.referenceNo);
                    $('#referenceNo_modal').text(detail.referenceNo);

                    let releaseDate = moment(detail.releaseDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")

                    $('#corpId_exam').text(detail.corpId);
                    $('#corpName_exam').text(detail.corpName);
                    $('#makerId_exam').text(detail.makerId);
                    $('#releaseDate_exam').text(releaseDate);
                    $('#corpId_status').text(detail.corpId);
                    $('#corpName_status').text(detail.corpName);
                    $('#releaseDate_status').text(releaseDate);
                    var parseAmount = currencyFormat(detail.transactionAmount)
                    $('#amount_exam').text(parseAmount);
                    $('#amount_status').text(parseAmount);
                    $('#amount').text(parseAmount);
                    $('#noOfCorrection_exam').text(detail.noOfCorrection);


                    $('#trxStatus').text(detail.trxStatus);
	                $('#status_detail').text(detail.status);
 		            $('#status_view').text(detail.status);
                    $('#bankRefNo_status').text(detail.bankRefNo);
                    $('#bankRefNo_status').val(detail.bankRefNo);
                    $('#bankRefNo').text(detail.bankRefNo);
                    $('#bankRefNo').val(detail.bankRefNo);
                    $('#bankRefNo_exam').text(detail.bankRefNo);
                    $('#bankRefNo_exam').val(detail.bankRefNo);
                    $('#bankRefNo_view').text(detail.bankRefNo);


                    $('#issuedDate').text(detail.issueDate);
                    $('#issuedDate_status').text(detail.issueDate);
                    $('#invoiceNo').text(detail.invoiceNo);
                    $('#description').text(detail.description);
                    $('#description_status').text(detail.description);

                    if(detail.presDocStatusCode == 'ACCEPTED_BY_ISSUING_BANK'){
                         $('#update_status').show();
                    }

                    $('#file_upload1').text(detail.fileName1);
		            $('#file_upload1_exam').text(detail.fileName1);
		            $('#file_upload1_status').text(detail.fileName1);
                    fileImage1 = 'data:application/octet-stream;base64,' + detail.fileBytes1
                    $('#file_upload2').text(detail.fileName2);
		            $('#file_upload2_exam').text(detail.fileName2);
		            $('#file_upload2_status').text(detail.fileName2);
                    fileImage2 = 'data:application/octet-stream;base64,' + detail.fileBytes2
                    $('#file_upload3').text(detail.fileName3);
		            $('#file_upload3_exam').text(detail.fileName3);
		            $('#file_upload3_status').text(detail.fileName3);
                    fileImage3 = 'data:application/octet-stream;base64,' + detail.fileBytes3
                    $('#file_upload4').text(detail.fileName4);
		            $('#file_upload4_exam').text(detail.fileName4);
		            $('#file_upload4_status').text(detail.fileName4);
                    fileImage4 = 'data:application/octet-stream;base64,' + detail.fileBytes4
                    $('#file_upload5').text(detail.fileName5);
		            $('#file_upload5_exam').text(detail.fileName5);
		            $('#file_upload5_status').text(detail.fileName5);
                    fileImage5 = 'data:application/octet-stream;base64,' + detail.fileBytes5

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

    function unlockAction(e){
        $('#transactionModal').modal('show');
    }


    function submitTask(type){
        var id = 'MNU_GPCASH_PENDING_TASK';
        var value = {
            "referenceNo": $('#referenceNo').val(),
            "reason": $("#reason_text").val(),
            "taskId": $('#taskId').val()
        };

        var formReason = $(".state_reason").find('.mb-3.row');
        formReason.removeClass('has-error');
        formReason.find('.with-errors').html('');
        $('#rejectSubmit').prop('disabled',false);

        var action;
        var url_action;
        if(type=='approve'){
            action = 'APPROVE';
            url_action = 'approve';
        }else if(type=='reject'){
            action = 'REJECT';
            url_action = 'reject';
            if (value.reason == '') {
                formReason.addClass('has-error');
                formReason.find('.with-errors').html('{{ trans('form.mandatory') }}');
                return;
            } else{
                $("#reasonLbl").html("Reject Reason")
                $("#reason_view").html(value.reason);
            }
        }else{
            return;
        }

        $.ajax({
            url: 'detail',
            method: 'post',
            data: {"_token": "{{ csrf_token() }}", menu: id, value: value,url_action:url_action,action:action},
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    flash('success', result.message+'<br>'+result.dateTimeInfo);
                    $(window).scrollTop(0);
                    $('#approve').hide();
                    $('#reject').hide();
                    $('#save_screen').show();
                    $('#back').html('{{trans('form.done')}}');
                    $('#approve').prop('disabled',false);
                    $('#reject').prop('disabled',false);
                    $('#rejectSubmit').prop('disabled',false);
                    $('#rejectSubmit').hide();
                    $("#reason_text").hide();
                    $("#reason_view").show();
                    $(".state_reason").hide();
                    $('.state_view').show();
                }else{
                    flash('warning',result.message+'<br>'+result.dateTimeInfo);
                    $('#approve').prop('disabled',false);
                    $('#reject').prop('disabled',false);
                    $('#rejectSubmit').prop('disabled',false);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                $(window).scrollTop(0);
                $('#approve').prop('disabled',false);
                $('#reject').prop('disabled',false);
                $('#rejectSubmit').prop('disabled',false);
                $('#save_screen').hide();
                flash('warning','{{trans('form.pending_error')}}');
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }
        });
    }

    function currencyFormat(num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

    // function downloadFile(e) {
    //     var imageUrl, fileName
    //     if (e == 'file_upload1') {
    //         imageUrl = fileImage1;
    //         console.log(fileImage1);
    //         fileName = $('#file_upload1').text()
    //     } else if (e == 'file_upload2') {
    //         imageUrl = fileImage2;
    //         fileName = $('#file_upload2').text()
    //     } else if (e == 'file_upload3') {
    //         imageUrl = fileImage3;
    //         fileName = $('#file_upload3').text()
    //     } else if (e == 'file_upload4') {
    //         imageUrl = fileImage4;
    //         fileName = $('#file_upload4').text()
    //     } else if (e == 'file_upload5') {
    //         imageUrl = fileImage5;
    //         fileName = $('#file_upload5').text()
    //     }

    //     var xhr = new XMLHttpRequest();
    //         xhr.responseType = 'blob';
    //         xhr.onload = function() {
    //             var blob = xhr.response;
    //             var url = window.URL.createObjectURL(blob);

    //             var a = $("<a>")
    //                 .attr("href", url)
    //                 .attr("download", fileName)
    //                 .appendTo("body");

    //             a[0].click();

    //             window.URL.revokeObjectURL(url);
    //             a.remove();
    //         };
    //         xhr.open('GET', imageUrl);
    //         xhr.send();
    // }

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
                    <div class="mb-3 row form-group">
                        <label class="col-md-2 col-form-label text-end">File Upload Account</label>
                        <div class="col-md-6">
                        <label style="color:#337ab7;cursor:pointer;">
                            <a class="label-link" onClick="downloadFile('${fileNames[0]}', '${fileIds[0]}');">${fileNames[0]}</a>
                        </label>
                        </div>
                    </div>
                </div>`;

        tagsDetail = `<div class="row">
                        <div class="mb-3 row form-group ">
                                <label class="col-md-4 col-form-label">File Upload Account</label>
                            <div class="col-md-6">
                            <label style="color:#337ab7;cursor:pointer;">
                                <a class="label-link" onClick="downloadFile('${fileNames[0]}', '${fileIds[0]}');">${fileNames[0]}</a>
                            </label>
                            </div>
                        </div>
                    </div>`;

        for(let i = 1; i < fileNames.length; i++){
            tags = tags + `<div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                    <label style="color:#337ab7;cursor:pointer;">
                                        <a class="label-link" onClick="downloadFile('${fileNames[i]}', '${fileIds[i]}');">${fileNames[i]}</a>
                                    </label>
                                    </div>
                                </div>
                           </div>`;
            tagsDetail = tagsDetail + `<div class="row">
                                            <div class="mb-3 row form-group">
                                                <label class="col-md-4 col-form-label"></label>
                                                <div class="col-md-6">
                                                <label style="color:#337ab7;cursor:pointer;">
                                                    <a class="label-link" onClick="downloadFile('${fileNames[i]}', '${fileIds[i]}');" >${fileNames[i]}</a>
                                                </label>
                                                </div>
                                            </div>
                                       </div>`;
        }

        $('.fileUploadClass').html(tags);
        $('.fileUploadDetailClass').html(tagsDetail);
    }

</script>
@include('form.script')
