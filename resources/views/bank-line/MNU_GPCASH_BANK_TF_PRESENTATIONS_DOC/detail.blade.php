@include('_partials.header_content',['breadcrumb'=>['Presentation Docs Search','detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="presentationDocsId" value=""/>
            <input type="hidden" id="tabActive" value=""/>
            <div class="box">
                <div class="tab-examination">
                    <form class="form-horizontal">
                        <div class="box-header">
                            <h3 class="box-title">General</h3><br>
                        </div>
                        <div class="box-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Transaction Reference No.</label>
                                        <div class="col-md-6">
                                            <label id="referenceNo_exam">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Corporate ID</label>
                                        <div class="col-md-6">
                                            <label id="corpId_exam">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Corporate name</label>
                                        <div class="col-md-6">
                                            <label id="corpName_exam">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Maker ID</label>
                                        <div class="col-md-6">
                                            <label id="makerId_exam">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Corp Release Date</label>
                                        <div class="col-md-6">
                                            <label id="releaseDate_exam">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Amount</label>
                                        <div class="col-md-6">
                                            <label id="amount_exam">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
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
                                    <div class="mb-3 row">
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
                                <div class="fileUploadClass"></div>
                            </div>
                            <!-- <div class="container-fluid">
                                <div class="row" style="padding-top: 20px">
                                    <div class="mb-3 row fileName1">
                                        <label class="col-md-2 col-form-label text-end">File Upload</label>
                                        <div class="col-md-6">
                                            <div id="view_file_upload1">
                                                <label>
                                                    <a onClick="downloadFile('file_upload1');" id="file_upload1_exam">-</a>
                                                </label>
                                            </div>
                                            <div id="view_file_upload2">
                                                <label>
                                                    <a onClick="downloadFile('file_upload2');" id="file_upload2_exam">-</a>
                                                </label>
                                            </div>
                                            <div id="view_file_upload3">
                                                <label>
                                                    <a onClick="downloadFile('file_upload3');" id="file_upload3_exam">-</a>
                                                </label>
                                            </div>
                                            <div id="view_file_upload4">
                                                <label>
                                                    <a onClick="downloadFile('file_upload4');" id="file_upload4_exam">-</a>
                                                </label>
                                            </div>
                                            <div id="view_file_upload5">
                                                <label>
                                                    <a onClick="downloadFile('file_upload5');" id="file_upload5_exam">-</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>-->
                                    <!-- <div class="mb-3 row fileName2">
                                        <label class="col-md-2 col-form-label text-end"></label>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                    <div class="mb-3 row fileName3">
                                        <label class="col-md-2 col-form-label text-end"></label>
                                        <div class="col-md-6">
					                        <label>
                                        	    <a onClick="downloadFile('file_upload3');" id="file_upload3_exam">-</a>
                                    	    </label>
                                        </div>
                                    </div>
                                    <div class="mb-3 row fileName4">
                                        <label class="col-md-2 col-form-label text-end"></label>
                                        <div class="col-md-6">
					                        <label>
                                        	    <a onClick="downloadFile('file_upload4');" id="file_upload4_exam">-</a>
                                    	    </label>
                                        </div>
                                    </div>
                                    <div class="mb-3 row fileName5">
                                        <label class="col-md-2 col-form-label text-end"></label>
                                        <div class="col-md-6">
					                        <label>
                                        	    <a onClick="downloadFile('file_upload5');" id="file_upload5_exam">-</a>
                                    	    </label>
                                        </div>
                                    </div> -->
                                <!-- </div>
                            </div>-->
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">Bank Response</h3><br>
                        </div>
                        <form id="form-area" class="form-horizontal">
                            <div class="box-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end"><b>Action Status</b></label>
                                            <div class="col-md-6 state_edit">
                                                <select class="form-control" id="actionStatus" onchange="isDisable()" data-error="please select action status" required >
                                                    <option value=""> select action status</option>
                                                    <option value="CONFIRM"> Final Document Checking</option>
                                                    <option value="RETURNED"> Return</option>
                                                    </select>
                                            </div>
                                            <div class="col-md-6 state_view">
                                                <label id="actionStatus_view">-</label>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end"><b>Bank Reference No*</b></label>
                                            <div class="col-md-6 state_edit">
                                                <input type="text" id="bankRefNo_exam" name="bankRefNo_exam" class="form-control" maxlength="40" disabled>
                                            </div>
                                            <div class="col-md-6 state_view">
                                                <label id="bankRefNo_view">-</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end">Comment</label>
                                            <!-- <div class="col-md-6 state_edit">
                                                <textarea id="validationComment" class="form-control" rows="3" maxlength="200" style="margin-top: 10px;height:100px !important;" required></textarea>
                                            </div> -->
                                            <div class="col-md-6 state_edit">
                                                <textarea id="validationComment" class="form-control" maxlength="200" style="min-height: 120px;" required></textarea>
                                            </div>
                                            <div class="col-md-6 state_view" style="word-wrap:break-word;width:50%;">
                                                <label id="validationComment_view">-</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="box-footer">
                            <div class="float-left">
                                <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                                <button type="button" id="save_screen" name="save_screen" class="btn btn-default" style="display:none" onclick="save_pdf();">@lang('form.save_pdf')</button>
                            </div>
                            <div class="float-right">
                                <!-- <button type="button" id="delete" name="delete" class="btn btn-danger">@lang('form.delete')</button> -->
                                <button type="button" id="confirm" name="confirm" class="btn btn-primary">@lang('form.confirm')</button>
                                <button type="button" id="submit_view" name="submit_view" class="btn btn-primary">@lang('form.submit')</button>
                                <button type="button" id="next_user" name="next_user" class="btn btn-info" style="display:none">@lang('form.next_user')</button>
                                <button type="button" id="done" name="done" class="btn btn-primary done" style="display:none">@lang('form.done')</button>
                            </div>
                        </div>
                        @include('_partials.next_user')
                    </form>
                </div>
                <div class="tab-status">
                    <form class="form-horizontal">
                        <div class="box-header">
                            <h3 class="box-title">Presentation Docs Detail</h3><br>
                        </div>
                        <div class="box-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Corporate ID</label>
                                        <div class="col-md-6">
                                            <label id="corpId_status">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Corporate name</label>
                                        <div class="col-md-6">
                                            <label id="corpName_status">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Transaction Reference No.</label>
                                        <div class="col-md-6">
                                            <label id="referenceNo_status">-</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">General</h3><br>
                        </div>
                        <div class="box-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">L/C Bank Reference No.</label>
                                        <div class="col-md-6">
                                            <label id="bankRefNo_status">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">L/C Issue Date</label>
                                        <div class="col-md-6">
                                            <label id="issuedDate_status">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Invoice No. </label>
                                        <div class="col-md-6">
                                            <label id="releaseDate_status">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Amount</label>
                                        <div class="col-md-6">
                                            <label id="amount_status">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Description</label>
                                        <div class="col-md-6">
                                            <label id="description_status">-</label>
                                        </div>
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
                                    <div class="mb-3 row fileName1">
                                        <label class="col-md-2 col-form-label text-end">File Upload</label>
                                        <div class="col-md-6">
					                    <label>
                                        	<a onClick="downloadFile('file_upload1');" id="file_upload1_status">-</a>
                                    	</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 row fileName2">
                                        <label class="col-md-2 col-form-label text-end"></label>
                                        <div class="col-md-6">
					                    <label>
                                        	<a onClick="downloadFile('file_upload2');" id="file_upload2_status">-</a>
                                    	</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 row fileName3">
                                        <label class="col-md-2 col-form-label text-end"></label>
                                        <div class="col-md-6">
					                    <label>
                                        	<a onClick="downloadFile('file_upload3');" id="file_upload3_status">-</a>
                                    	</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 row fileName4">
                                        <label class="col-md-2 col-form-label text-end"></label>
                                        <div class="col-md-6">
					                    <label>
                                        	<a onClick="downloadFile('file_upload4');" id="file_upload4_status">-</a>
                                    	</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 row fileName5">
                                        <label class="col-md-2 col-form-label text-end"></label>
                                        <div class="col-md-6">
					                    <label>
                                        	<a onClick="downloadFile('file_upload5');" id="file_upload5_status">-</a>
                                    	</label>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="row fileUploadClass"></div> -->
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">Status Information</h3><br>
                        </div>
                        <form id="form-area" class="form-horizontal">
                            <div class="box-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label text-end"><b>Status</b></label>
                                            <div class="col-md-6 state_edit_status">
                                                <select class="form-control" id="status" data-error="" required>
                                                    <option value=""> select action status</option>
                                                    <!-- <option value="DOCS_SENT_TO_ISSUING_BANK">Docs Sent to Issuing Bank</option> -->
                                                    <!-- <option value="ACCEPTED_BY_ISSUING_BANK">Accept By Issuing Bank</option> -->
                                                    <option value="RETURNED"> Return</option>
                                                    <option value="PAID">Paid</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label id="status_view">-</label>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="box-footer">
                            <div class="float-left">
                                <button type="button" id="back_status" name="back" class="btn btn-default back">@lang('form.back')</button>
                                <button type="button" id="save_screen_status" name="save_screen" class="btn btn-default" style="display:none" onclick="save_pdf();">@lang('form.save_pdf')</button>
                            </div>
                            <div class="float-right">
                                <button type="button" id="update_status" name="update_status" class="btn btn-danger" style="display:none">@lang('form.update_status')</button>
                                <button type="button" id="submit_view_status" name="submit_view_status" class="btn btn-primary">@lang('form.submit')</button>
                                <button type="button" id="next_user_status" name="next_user_status" class="btn btn-info" style="display:none">@lang('form.next_user')</button>
                                <button type="button" id="done_status" name="done_status" class="btn btn-primary done" style="display:none">@lang('form.done')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Transaction Status</label>
                                <div class="col-md-6">
                                    <label id="status_detail">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Transaction Reference No.</label>
                                <div class="col-md-6">
                                    <label id="referenceNo">-</label>
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
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">L/C Bank Reference No.</label>
                                <div class="col-md-6">
                                    <label id="bankRefNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">L/C Issue Date</label>
                                <div class="col-md-6">
                                    <label id="issuedDate">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Invoice No.</label>
                                <div class="col-md-6">
                                    <label id="invoiceNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Amount</label>
                                <div class="col-md-6">
                                    <label id="amount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Description</label>
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
    var id = '{{ $service }}';
    var noRef;
    var type;
    var selectedValue
    var fileImage1, fileImage2, fileImage3, fileImage4, fileImage5
    $(document).ready(function () {
        $('.state_delete').hide();
        $('.tab-examination').hide();
        $('.tab-status').hide();
        $('.state_view').hide();
        $('#submit_view').hide();
	    $('#submit_view_status').hide();
	    $('.state_edit_status').hide();

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true
        });

        var formCounter = 1;
        var maxForms = 5;

        $('#upload_file2').hide();
        $('#upload_file3').hide();
        $('#upload_file4').hide();
        $('#upload_file5').hide();


        $('#confirm').on('click', function () {
            var tabActive= $('#tabActive').val();
            $('#form-area').validator('validate');
            if ($('#form-area').validator('validate').has('.has-error').length!=0){
                return;
            }

            if ($('#actionStatus').val() == "") {
                var content ='{{trans('form.alert_empty',['label'=>'Action status'])}}';
                $.alert({
                    title: '{{trans('form.warning')}}',
                    content: content
                });
                return;
            }
            setTimeout(function(){
                stateView();
            });
        });

	    $('#update_status').on('click', function () {
            var tabActive= $('#tabActive').val();
            $('#form-area').validator('validate');

            stateUpdateStatus();

        });

        $('#submit_view').on('click', function () {
            var action = 'CREATE'
            var url_action = 'submit'
            var tabActive= $('#tabActive').val();

            var value = {
                presentationDocsId:  $('#presentationDocsId').val(),
                actionStatus: $('#actionStatus').val(),
		        bankRefNo: $('#bankRefNo_exam').val(),
                validationComment: $('#validationComment').val(),
            }

            $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {"_token": "{{ csrf_token() }}",
            action:action,
            url_action:url_action,
            menu: id,
            value: value},
            success: function (data) {
                $('#confirm').prop('disabled',false);
                var result = JSON.parse(data);
                if (result.status=="200") {
                    type = 'finally';
                    $('#submit_view').hide();
                    $('#done').show();
                    flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                } else {
                    flash('warning',result.message);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                //$('#confirm').prop('disabled',false);
                flash('warning', 'Form Submit Failed');
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }
            });
        })

	$('#submit_view_status').on('click', function () {
            var action = 'CREATE'
            var url_action = 'submit'
            var tabActive= $('#tabActive').val();

		if ($('#status').val() == "") {
                var content ='{{trans('form.alert_empty',['label'=>'Action status'])}}';
                $.alert({
                    title: '{{trans('form.warning')}}',
                    content: content
                });
                return;
            }

            var value = {
                presentationDocsId:  $('#presentationDocsId').val(),
                actionStatus: $('#status').val(),
		        bankRefNo: $('#bankRefNo_exam').val(),
                validationComment: $('#validationComment').val(),
            }

            $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {"_token": "{{ csrf_token() }}",
            action:action,
            url_action:url_action,
            menu: id,
            value: value},
            success: function (data) {
                $('#confirm').prop('disabled',false);
                var result = JSON.parse(data);
                if (result.status=="200") {
                    type = 'finally';
                    $('#submit_view_status').hide();
                    $('#done_status').show();
                    $('.state_edit_status').hide();
                    $('#status_view').show();

                    if($('#status').val()=='DOCS_SENT_TO_ISSUING_BANK'){
                        $('#status_view').text('Docs Sent to Issuing Bank');
                    }else if($('#status').val()=='ACCEPTED_BY_ISSUING_BANK'){
                        $('#status_view').text('Accept By Issuing Bank');
                    }else if($('#status').val()=='REJECTED_BY_ISSUING_BANK'){
                        $('#status_view').text('Reject By Issuing Bank');
                    }else if($('#status').val()=='PAID'){
                        $('#status_view').text('Paid');
                    }
                    flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                } else {
                    flash('warning',result.message);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                flash('warning', 'Form Submit Failed');
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }
        });
        })

        $('#back_delete').on('click', function () {
            $('.state_delete').hide();
            $('.state_view').show();
        });

        $('.back').on('click', function () {
            if (type == 'validation') {
                var res = app.setView(id,'landing');
            } else if (type = 'finally') {
                var res = app.setView(id,'landing');
            } else {
                $('.state_edit').show();
                $('#confirm').show();
                $('.state_view').hide();
                $('#submit_view').hide();
                type = 'validation'
            }
        });

        $('.done').on('click', function () {
           var res = app.setView(id,'landing');
        });

	$('.done_status').on('click', function () {
           var res = app.setView(id,'landing');
        });

        $('#edit').on('click', function () {
            var code = $('#code_1').text();
            var res = app.setView(id,'add');
            if(res=='done'){
                $('#type').val('edit');
                $('#breadcrumb-action').html('edit');
                $('#code_edit').val(code);
                getBranchEdit(code);
            }

        });

	$('#validationComment').alphanum({
            allowSpace: true,
            allow : ',._-'
        });

    });

    function isDisable(){
	if($('#actionStatus').val()=="CONFIRM"){
		$('#bankRefNo_exam').prop('disabled',false);
}else{
	$('#bankRefNo_exam').prop('disabled',true);
}



    }
    function getDetail(){
        var tabActive= $('#tabActive').val();
        var url_action

        if (tabActive === '#tab_examination') {
            $('.tab-examination').show();
            url_action = 'searchExamination';
        } else {
            $('.tab-status').show();
            url_action= 'searchStatus';
        }

        var presentationDocsId= $('#presentationDocsId').val();
        var value ={
            presentationDocsId: presentationDocsId,
            currentPage: "1",
            pageSize: "20",
            orderBy: {"id": "ASC"}
        };

        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{
                value: value,
                menu: id,
                action: 'DETAIL',
                url_action: url_action,
            },
            success: function (data) {

                var result = JSON.parse(data);
                if (result.status == "200") {
                    type = 'validation';
                    var index = result.result.map(function(o) { return o.presentationDocsId; }).indexOf(presentationDocsId.toString());
                    var detail = result.result[index];
                    let releaseDate = moment(detail.releaseDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")

                    $('#referenceNo').text(detail.referenceNo);
                    $('#referenceNo_exam').text(detail.referenceNo);
                    $('#referenceNo_status').text(detail.referenceNo);

                    $('#corpId_exam').text(detail.corpId);
                    $('#corpName_exam').text(detail.corpName);
                    $('#makerId_exam').text(detail.makerId);
                    $('#releaseDate_exam').text(releaseDate);
                    $('#corpId_status').text(detail.corpId);
                    $('#corpName_status').text(detail.corpName);
                    $('#releaseDate_status').text(releaseDate);
                    var parseAmount = currencyFormat(detail.transactionAmount)
                    $('#amount_status').text(`${detail.transactionCurrency} ${parseAmount}`);
                    $('#amount_exam').text(`${detail.transactionCurrency} ${parseAmount}`);
                    $('#amount').text(`${detail.transactionCurrency} ${parseAmount}`);
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
                    console.log(detail.presDocStatusCode);
                    console.log(detail.presDocStatusCode == '1');

                    $('#file_upload1').text(detail.fileName1);
                    $('#file_upload1_exam').text(detail.fileName1);
                    if (detail.fileName1 == "" || detail.fileName1 == null) { $('#view_file_upload1').hide();}

                    $('#file_upload1_status').text(detail.fileName1);
                    fileImage1 = 'data:application/octet-stream;base64,' + detail.fileBytes1
                    $('#file_upload2').text(detail.fileName2);
                    $('#file_upload2_exam').text(detail.fileName2);

                    if (detail.fileName2 == "" || detail.fileName2 == null) {$('#view_file_upload2').hide();}

                    $('#file_upload2_status').text(detail.fileName2);
                    fileImage2 = 'data:application/octet-stream;base64,' + detail.fileBytes2
                    $('#file_upload3').text(detail.fileName3);

                    $('#file_upload3_exam').text(detail.fileName3);
                    if (detail.fileName3 == "" || detail.fileName3 == null) {$('#view_file_upload3').hide();}

                    $('#file_upload3_status').text(detail.fileName3);
                    fileImage3 = 'data:application/octet-stream;base64,' + detail.fileBytes3
                    $('#file_upload4').text(detail.fileName4);

                    $('#file_upload4_exam').text(detail.fileName4);
                    if (detail.fileName4 === '' || detail.fileName4 == null) {$('#view_file_upload4').hide();}

                    $('#file_upload4_status').text(detail.fileName4);
                    fileImage4 = 'data:application/octet-stream;base64,' + detail.fileBytes4
                    $('#file_upload5').text(detail.fileName5);

                    $('#file_upload5_exam').text(detail.fileName5);
                    if (detail.fileName5 === '' || detail.fileName5 == null) {$('#view_file_upload5').hide();}

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

    function stateView(){
        $('.state_edit').hide();
        $('.state_view').show();
        var tabActive= $('#tabActive').val();
        type = 'edit';
	var actionStatus = 'Returned';
	if($('#actionStatus').val()=='CONFIRM'){
		actionStatus = 'Final Document Checking'
	}
        var validationComment = ($('#validationComment').val() == '' ? '-' : $('#validationComment').val());
	var bankRefNo = ($('#bankRefNo_exam').val() == '' ? '-' : $('#bankRefNo_exam').val());

        $('#actionStatus_view').text(actionStatus);
	$('#bankRefNo_view').text(bankRefNo);
        $('#validationComment_view').text(validationComment);

        $('#submit_view').show();
        $('#confirm').hide();
    }

function stateUpdateStatus(){
        $('.state_edit_status').show();
        $('#submit_view_status').show();
	$('#update_status').hide();
	$('#status_view').hide();
    }

    function unlockAction(e){
        $('#transactionModal').modal('show');
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

    function currencyFormat(num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
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
                        <label class="col-md-2 col-form-label text-end"  >File Upload Account</label>
                        <div class="col-md-6">
                        <label style="color:#337ab7;cursor:pointer;">
                            <a onClick="downloadFile('${fileNames[0]}', '${fileIds[0]}');">${fileNames[0]}</a>
                        </label>
                        </div>
                    </div>
                </div>`;

        tagsDetail = `<div class="row">
                        <div class="mb-3 row ">
                                <label class="col-md-4 col-form-label text-end">File Upload Account</label>
                            <div class="col-md-6">
                            <label style="color:#337ab7;cursor:pointer;">
                                <a onClick="downloadFile('${fileNames[0]}', '${fileIds[0]}');">${fileNames[0]}</a>
                            </label>
                            </div>
                        </div>
                    </div>`;

        for(let i = 1; i < fileNames.length; i++){
            tags = tags + `<div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                    <label style="color:#337ab7;cursor:pointer;">
                                        <a onClick="downloadFile('${fileNames[i]}', '${fileIds[i]}');">${fileNames[i]}</a>
                                    </label>
                                    </div>
                                </div>
                           </div>`;
            tagsDetail = tagsDetail + `<div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label"></label>
                                                <div class="col-md-6">
                                                <label style="color:#337ab7;cursor:pointer;">
                                                    <a onClick="downloadFile('${fileNames[i]}', '${fileIds[i]}');">${fileNames[i]}</a>
                                                </label>
                                                </div>
                                            </div>
                                       </div>`;
        }

        $('.fileUploadClass').html(tags);
        $('.fileUploadDetailClass').html(tagsDetail);
    }
</script>
