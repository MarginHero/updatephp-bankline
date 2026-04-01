@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),$type]])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
           <div class="box-header">
                     <h3 class="box-title">Information Detail</h3>
                </div>
                <form id="form-area" class="form-horizontal form-area">
                <input type="hidden" id="code_edit" value=""/>
                <input type="hidden" id="type" value=""/>
                <input type="hidden" id="state" value=""/>
                <input type="hidden" id="uploadDateTime" value=""/>
                <input type="hidden" id="uploadId" value=""/>
                <input type="hidden" id="uploadFileName" value=""/>
                <input type="hidden" id="dscpFileId" value=""/>
                <input type="hidden" id="dscpFileName" value=""/>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-end"><strong>Type&ast;</strong></label>
                            <div class="col-md-4">
                                <div class="type_setup state_edit">
                                    <select id="typeList" class="form-control helpdesk-required" onchange="showInfoFile()">
                                        <option value="INFO">Information</option>
                                        <option value="NEWS">News</option>
                                        <option value="PROMO">Promo</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <label id="type_setup_view" class="state_view"></label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-end"><strong>Title&ast;</strong></label>
                            <div class="col-md-4">
                                <input type="text" id="titleUpload" name="titleUpload" maxlength="100" class="form-control state_edit helpdesk-required" autocomplete="off" value="" data-error="This title is required." required>
                                <div class="help-block with-errors"></div>
                                <label id="titleUpload_view" class="state_view"></label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-end"><strong>Upload File&ast;</strong></label>
                            <div class="col-md-4">
                                <form method="POST" enctype="multipart/form-data" id="fileUploadForm" >
                                    <input name="file" type="file" id="upload_file" class="helpdesk-required" accept=".csv,.txt,.jpg,.png,.pdf,.xls,.gif" data-error="Upload file is required." required style="display:none;"/>
                                    <div style="display:flex; align-items:center; gap:8px;" id="upload_file_wrapper" class="state_edit">
                                        <button type="button" class="btn btn-default" style="border:1px solid #aaa;" onclick="document.getElementById('upload_file').click()">Choose File</button>
                                        <span id="upload_file_name" style="color:#555; font-size:13px;">No file chosen</span>
                                    </div>
                                </form>
                                <div class="help-block with-errors"></div>
                                <label id="fileUploadEdit_view"></label>
                                <label id="fileUpload_view" class="state_view"></label>
                                <i id="editfile" class="fa fa-window-close" style="color:#FF0000"></i>
                            </div>
                        </div>
                        <div class="form-group row state_edit">
                            <label class="col-md-4 col-form-label text-end"></label>
                            <div class="col-md-8">
                                <span class="notes" style="font-style: italic;">accept max 10MB of type: *.csv, *.txt. *.pdf, *.xls, *.jpg, *.png with max Image resolution: 600x300</span>
                            </div>
                        </div>

                        <div class="form-group row promoDscp_div">
                            <label class="col-md-4 col-form-label text-end"><strong>Upload Description Document&ast;</strong></label>
                            <div class="col-md-4">
                                <form method="POST" enctype="multipart/form-data" id="promoDscpForm" >
                                    <input name="file" type="file" id="upload_dscp" class="helpdesk-required" accept=".pdf" data-error="Upload file is required." required style="display:none;"/>
                                    <div style="display:flex; align-items:center; gap:8px;" id="upload_dscp_wrapper" class="state_edit">
                                        <button type="button" class="btn btn-default" style="border:1px solid #aaa;" onclick="document.getElementById('upload_dscp').click()">Choose File</button>
                                        <span id="upload_dscp_name" style="color:#555; font-size:13px;">No file chosen</span>
                                    </div>
                                </form>
                                <div class="help-block with-errors"></div>
                                <label id="promoDscpEdit_view"></label>
                                <label id="promoDscp_view" class="state_view"></label>
                                <i id="editDscp" class="fa fa-window-close" style="color:#FF0000"></i>
                            </div>
                        </div>
                        <div class="form-group row promoDscp_div state_edit">
                            <label class="col-md-4 col-form-label text-end"></label>
                            <div class="col-md-8">
                                <span class="notesDscp" style="font-style: italic;">accept max 10MB of *.pdf file</span>
                            </div>
                        </div>

                        <div class="form-group row description_div">
                            <label class="col-md-4 col-form-label text-end"><strong>Description&ast;</strong></label>
                            <div class="col-md-4">
                                <input type="text" id="dscp" name="dscp" maxlength="100" class="form-control state_edit helpdesk-required" autocomplete="off" value="" data-error="This description is required." required>
                                <div class="help-block with-errors"></div>
                                <label id="dscp_view" class="state_view"></label>
                            </div>
                        </div>

                    </div>
                </div>
                    <div class="box-footer">
                        <div class="col-md-12 state_edit text-center">
                            <button type="button" id="back" name="back" class="btn btn-default back float-left">@lang('form.cancel')</button>
                            <button type="button" id="confirm" name="confirm" class="btn btn-primary float-right ">@lang('form.confirm')</button>
                        </div>
                        <div class="col-md-12 state_view text-center" data-html2canvas-ignore="true">
                            <div class="float-left">
                                <button type="button" id="back_view" name="back_view" class="btn btn-default">@lang('form.cancel')</button>
                                <button type="button" id="save_screen" name="save_screen" class="btn btn-default" style="display:none" onclick="save_pdf();">@lang('form.save_pdf')</button>
                            </div>
                            <div class="float-right" style="display:inline;">
                                <button type="button" id="next_user" name="next_user" class="btn btn-info">@lang('form.next_user')</button>
                                <button type="button" id="done" name="done" class="btn btn-primary" style="display:none">@lang('form.done')</button>
                                <button type="button" id="submit_view" name="submit_view" class="btn btn-primary">@lang('form.submit')</button>
                            </div>
                        </div>
                    </div>
                    @include('_partials.next_user')
                </form>
            </div>
        </div>
    </div>

</section>

<script>

    var isEditPromo = false;
    var isEditDscp = false;
    var submit_data;
    var id = '{{ $service }}';
    var noRef;
    $(document).ready(function () {

        $(document).validator().on('#form-area','submit', function (e) {
            if (e.isDefaultPrevented()) {
                // handle the invalid form...
            } else {
                // everything looks good!

            }
        });

        $('#upload_dscp').attr('required', false);

        // Update custom file input display when file is selected
        $('#upload_file').on('change', function() {
            var fileName = this.files.length > 0 ? this.files[0].name : 'No file chosen';
            $('#upload_file_name').text(fileName);
        });

        $('#upload_dscp').on('change', function() {
            var fileName = this.files.length > 0 ? this.files[0].name : 'No file chosen';
            $('#upload_dscp_name').text(fileName);
        });

        stateEdit('edit');

        // Add blur/change validation for helpdesk-required fields
        $('.helpdesk-required').on('blur change', function() {
            var $this = $(this);
            var $formGroup = $this.closest('.row');
            var $helpBlock = $formGroup.find('.help-block');

            if($this.val() === '' || $this.val() === null) {
                $formGroup.addClass('has-error');
                $this.css('border-color', '#a94442');
                $helpBlock.html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
            } else {
                $formGroup.removeClass('has-error');
                $this.css('border-color', '');
                $helpBlock.html('').hide();
            }
        });

        $('#submit_view').on('click', function () {
            $(this).prop('disabled',true);
            $("#vue-warning").hide();
            var content ='';
            if ($('#type').val() == 'add'){
                content='{{trans('form.confirm_add')}}';
            }else{
                content='{{trans('form.confirm_edit')}}';
            }

            $.confirm({
                title: '{{trans('form.submit')}}',
                content: content,
                buttons: {

                    cancel: {
                        text: '{{trans('form.cancel')}}',
                        btnClass: 'btn-default',
                        action: function(){
                            $('#submit_view').prop('disabled',false);
                        }
                    },
                    confirm: {
                        text: '{{trans('form.confirm')}}',
                        btnClass: 'btn-primary',
                        action: function(){
                            submitData();
                        }
                    },

                }
            });

        });

        function submitData(){

            var fileName = $('#uploadFileName').val();
            // console.log("===================", fileName);
            var date = $('#uploadDateTime').val();
            // console.log("===================", date);
            var value = {
                "fileId": $('#uploadId').val(),
                "editId": $('#code_edit').val(),
                "fileName": fileName,
                "fileFormat": fileName.split('.').pop(),
                "infoType": $('#typeList').val(),
                "uploadedDate": $('#uploadDateTime').val(),
                "title": $('#titleUpload').val(),
                "description": $('#dscp').val(),
                "promoDscpFileId": $('#dscpFileId').val(),
                "promoDscpFileName": $('#dscpFileName').val(),
            };

            var url_action = "";
            if ($('#type').val() == 'add'){
                url_action = "add";
            } else {
                url_action = "edit";
                value.isEditUpload = isEditPromo == true ? "Y" : "N";
                value.isEditDscp = isEditDscp == true ? "Y" : "N";
            }

             $.ajax({
                    url: url_action,
                    method: 'post',
                    data: {"_token": "{{ csrf_token() }}", menu: id, value: value},
                    success: function (data) {
                        $('#submit_view').prop('disabled',false);
                        var result = JSON.parse(data);
                        if (result.status=="200") {
                            noRef=result.referenceNo;
                            flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                            $('#submit_view').hide();
                            stateSuccess();
                        } else {
                            $('#submit_view').prop('disabled',false);
                            flash('warning', result.message);
                        }

                    }, error: function (xhr, ajaxOptions, thrownError) {
                        $('#submit_view').prop('disabled',false);
                        flash('warning', 'Form Submit Failed');
                        console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
                    }
                });
            }


        $('#confirm').on('click', function () {
            $("#vue-warning").hide();
            $('#form-area').validator('validate');

            var hasEmptyField = false;
            $('.helpdesk-required').each(function() {
                var $this = $(this);
                var $formGroup = $this.closest('.row');
                var $helpBlock = $formGroup.find('.help-block');

                // Skip validation for hidden fields
                if($this.is(':visible')) {
                    if($this.val() === '' || $this.val() === null) {
                        hasEmptyField = true;
                        $formGroup.addClass('has-error');
                        $this.css('border-color', '#a94442');
                        $helpBlock.html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
                    } else {
                        $formGroup.removeClass('has-error');
                        $this.css('border-color', '');
                        $helpBlock.html('').hide();
                    }
                }
            });

            if(hasEmptyField){
                return;
            }

            setTimeout(function(){
                if($('#form-area').validator('validate').has('.has-error').length==0){
                    $('#submit_type').val('submit');

                    this.uploadFileDscp();

                    if ($('#type').val() === 'add' || ($('#type').val() === 'edit' && isEditPromo)){


                        var extension = $('#upload_file').val().split('.').pop();

                        if ($('#typeList').val() == 'PROMO') {
                            if(extension.toLowerCase()!='png' && extension.toLowerCase()!='jpg'  && extension.toLowerCase()!='gif'){
                                flash('warning', "Upload File: Invalid File Format");
                                return;
                            }

                        } else {
                            if(extension.toLowerCase()!='csv' &&
                                extension.toLowerCase()!='txt' &&
                                extension.toLowerCase()!='pdf' &&
                                extension.toLowerCase()!='xls' &&
                                extension.toLowerCase()!='png' &&
                                extension.toLowerCase()!='jpg'){
                                flash('warning', "Invalid File Format");
                                return;
                            }
                        }

                        this.uploadFile();
                    } else {
                        stateView();
                    }
                }
            });
        });

        /*$('#submit_add').on('click', function () {
            $('#submit_type').val('submit_add');
            stateView();
        });*/

        $('#back_view').on('click', function () {
            $("#vue-warning").hide();
            $(this).prop('disabled',true);

            if($('#state').val() == 'success'){
                var action = '';
                if($('#submit_type').val()=='submit'){
                    action = 'landing';
                }else{
                    action = 'add';
                }
                app.setView(id,action)
                return;
            } else {
                $('#back_view').prop('disabled',false);

            	if ($('#type').val() == 'add'){
            	    stateEdit('');
            	} else {
                    stateEdit('back_edit');
                }
            }
        });


        /*$('.back').on('click', function () {
            app.setView(id,'landing')

        });*/
        $('.back').on('click', function () {
            $("#vue-warning").hide();
            $(this).prop('disabled',true);
            if ($('#type').val() == 'add') {
                app.setView(id,'landing')
            } else {
                var code = $('#code_edit').val();
                var res = app.setView(id,'detail');
                isEditPromo = false;
                isEditDscp = false;
                if(res=='done'){
                    $('#uploadId').val(code);
                    getMatrix();
                }
            }
        });

        $('#done').on('click', function () {
            $("#vue-warning").hide();
            $(this).prop('disabled',true);
            app.setView(id,'landing');
        });

        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ''
        });

        $('#editfile').on('click', function () {
            // $("#vue-warning").hide();
            $(this).prop('disabled',true);

            $('#fileUploadEdit_view').hide();
            $('#editfile').hide();
            $('#upload_file').attr('required', true);
            $('#upload_file_wrapper').show();
            $('.help-block').show();
            isEditPromo = true;
        });

        $('#editDscp').on('click', function () {
            $("#vue-warning").hide();
            $(this).prop('disabled',true);

            $('#promoDscpEdit_view').hide();
            $('#editDscp').hide();
            $('#upload_dscp').attr('required', true);
            $('#upload_dscp_wrapper').show();
            $('.help-block').show();
            isEditDscp = true;
        });

    });


    function uploadFile(){
        var form = $('#upload_file')[0].files[0];
        var data = new FormData();
        data.append("file", form);
        // console.log("=============== ", data);

        var sizeInKb = form.size / 1024;
        var sizeInMb = sizeInKb / 1024;
        if(sizeInMb > 10) {
            flash('warning', 'File size is more than 10MB ('+sizeInMb+' MB)');
            return;
        }

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: 'uploadFile',
            data: data,
            processData: false, //prevent jQuery from automatically transforming the data into a query string
            contentType: false,
            cache: false,
            timeout: 600000,
            async:false,
            xhrFields: {
                withCredentials: true
            },
            headers: { 'x-xsrf-token': '{{ csrf_token() }}' },
            success: function (data) {
            var result = JSON.parse(data);

            if (result.status=="200") {
                $('#fileUpload_view').text(result.fileName);
                $('#uploadFileName').val(result.fileName);
                $('#uploadId').val(result.fileId);
                // console.log("==========uploadDateTime", result.uploadDateTime);
                $('#uploadDateTime').val(result.uploadDateTime);

            } else {
                console.log("ERROR : ", result);
                $('#submit_view').prop('disabled',false);
                flash('warning', result.message);
                return;
            }
                // self.submit_bucket_data.fileName = data.fileName;
                // self.submit_bucket_data.fileId = data.fileId;
                // return true;
                stateView();
            },
            error: function (e) {
                console.log("ERROR : ", e);
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                // self.alert.type="error";
                // self.alert.msg=e.responseJSON.message;
                // return false;
                return;
            }
        });
    }

    function uploadFileDscp(){

        if ($('#type').val() === 'add' || ($('#type').val() === 'edit' && isEditDscp)){
            var extension = $('#upload_dscp').val().split('.').pop();
            if ($('#typeList').val() == 'PROMO') {
                if(extension.toLowerCase()!='pdf'){
                    flash('warning', "Description Document: Invalid File Format");
                    return;
                }

                var form = $('#upload_dscp')[0].files[0];
                var data = new FormData();
                data.append("file", form);
                var sizeInKb = form.size / 1024;
                var sizeInMb = sizeInKb / 1024;
                if(sizeInMb > 10) {
                    flash('warning', 'File size is more than 10MB ('+sizeInMb+' MB)');
                    return;
                }

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: 'uploadFile',
                    data: data,
                    processData: false, //prevent jQuery from automatically transforming the data into a query string
                    contentType: false,
                    cache: false,
                    timeout: 600000,
                    async:false,
                    xhrFields: {
                        withCredentials: true
                    },
                    headers: { 'x-xsrf-token': '{{ csrf_token() }}' },
                    success: function (data) {
                    var result = JSON.parse(data);

                    if (result.status=="200") {
                        $('#promoDscp_view').text(result.fileName);
                        $('#dscpFileName').val(result.fileName);
                        $('#dscpFileId').val(result.fileId);

                    } else {
                        console.log("ERROR : ", result);
                        $('#submit_view').prop('disabled',false);
                        flash('warning', result.message);
                        return;
                    }
                        stateView();
                    },
                    error: function (e) {
                        console.log("ERROR : ", e);
                        var msg = '{{trans('form.conn_error')}}';
                        flash('warning', msg);
                        return;
                    }
                });

            }

        }

    }

    function formatBytes(bytes, decimals = 2) {
        if (!+bytes) return '0 Bytes'

        const k = 1024
        const dm = decimals < 0 ? 0 : decimals
        const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB']

        const i = Math.floor(Math.log(bytes) / Math.log(k))

        return `${parseFloat((bytes / Math.pow(k, i)).toFixed(dm))} ${sizes[i]}`
    }

    function getInfoEdit(code_id){

        var url_action= 'search';
        var value ={
            id:code_id,
            currentPage: "1",
            pageSize: "50",
            orderBy: {"id": "ASC"}
        };
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{value:value,menu:id,action:'DETAIL',url_action:url_action},
            success: function (data) {

                var result = JSON.parse(data);

                if (result.status=="200") {
                    var index = result.result.map(function(o) { return o.id; }).indexOf(code_id.toString());
                    var detail = result.result[index];
                    var fileNameEdit = detail.fileName;

                    $('#state').val('edit');

                    $('#typeList').val(detail.infoType).trigger('change');
                    $('#typeList').prop('disabled',true)
                    $('#fileUploadEdit_view').text(fileNameEdit);
                    $('#fileUploadEdit_view').show();
                    $('#editfile').show();
                    $('#fileUpload_view').text(fileNameEdit);
                    $('#upload_file').attr('required', false);
                    $('#upload_file_wrapper').hide();
                    // $('.help-block').hide();
                    $('#dscp').val(detail.description);
                    $('#titleUpload').val(detail.title);

                    $('#uploadId').val(detail.uploadId);
                    $('#uploadFileName').val(fileNameEdit);
                    $('#uploadDateTime').val(detail.uploadDate);

                    $('#promoDscpEdit_view').text(detail.promoDscpFileName);
                    $('#promoDscpEdit_view').show();
                    $('#editDscp').show();
                    $('#promoDscp_view').text(detail.promoDscpFileName);
                    $('#upload_dscp').attr('required', false);
                    $('#upload_dscp_wrapper').hide();
                    $('#dscpFileId').val(detail.promoDscpFileId);
                    $('#dscpFileName').val(detail.promoDscpFileName);

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


        function stateEdit(state) {
            $('#state').val('edit');
            $('.state_view').hide();
            $('.state_edit').show();
            $('label.state_view').text('-');
            $('#save_screen').hide();
            $('.help-block').show();
            $('#done').hide();
            $('#next_user').hide();
            $('#fileUploadEdit_view').hide();
            $('#promoDscpEdit_view').hide();
            $('#editfile').hide();
            $('#editDscp').hide();
            $('#upload_file_wrapper').show();
            $('#upload_dscp_wrapper').show();

            if ($('#typeList').val()=='PROMO') {
                $('.promoDscp_div').show();
                $('.description_div').hide();
            } else {
                $('.promoDscp_div').hide();
                $('.description_div').show();
            }

            if(state == 'back_edit') {
                if (isEditPromo == false) {
                    $('#fileUploadEdit_view').show();
                    $('#editfile').show();
                    $('#upload_file').attr('required', false);
                    $('#upload_file_wrapper').hide();
                }

                if (isEditDscp == false) {
                    $('#promoDscpEdit_view').show();
                    $('#editDscp').show();
                    $('#upload_dscp').attr('required', false);
                    $('#upload_dscp_wrapper').hide();
                }
            }
        }

        function stateView() {
            $('#state').val('view');

            var uploadType = ($('#typeList option:selected').text() == '' ? '-' : $('#typeList option:selected').text());
            var fileUpload = ($('#upload_file').val() == '' ? '-' : $('#upload_file').val());
            var title = ($('#titleUpload').val() == '' ? '-' : $('#titleUpload').val());
            var dscp = ($('#dscp').val() == '' ? '-' : $('#dscp').val());


            $('.state_edit').hide();
            $('.state_view').show();
            $('#type_setup_view').text(uploadType);
            // $('#fileUpload_view').text(fileUpload);
            $('#titleUpload_view').text(title);
            $('#dscp_view').text(dscp);
            $('#save_screen').hide();
            $('.help-block').hide();
            $('#done').hide();
            $('#next_user').hide();
            $('#fileUploadEdit_view').hide();
            $('#promoDscpEdit_view').hide();
            $('#editfile').hide();
            $('#editDscp').hide();
            $('#upload_file_wrapper').hide();
            $('#upload_dscp_wrapper').hide();

        }

        function stateSuccess() {
            $('#state').val('success');
            // $('#name').val('');
            $('input.state_edit').val('');
            $('#back_view').hide();
            $('#save_screen').show();
            $('#done').show();
            $('#next_user').show();
        }

        function showInfoFile(){

            if ($('#typeList').val()=='PROMO') {
                $('.notes').html('accept max 10MB of type: *.jpg, *.png, *.gif with max Image resolution: 600x400');
                $('.description_div').hide();
                $('.promoDscp_div').show();
                $('#dscp').attr('required', false);
                $('#dscp').removeClass('helpdesk-required');
                $('#upload_dscp').attr('required', true);
                $('#upload_dscp').addClass('helpdesk-required');

                // Clear validation on dscp
                var $dscpFormGroup = $('#dscp').closest('.row');
                $dscpFormGroup.removeClass('has-error');
                $('#dscp').css('border-color', '');
                $dscpFormGroup.find('.help-block').html('').hide();
            } else {
               $('.notes').html('accept max 10MB of type: *.csv, *.txt. *.pdf, *.xls, *.jpg, *.png with max Image resolution: 600x300');
               $('.description_div').show();
               $('.promoDscp_div').hide();
               $('#upload_dscp').attr('required', false);
               $('#upload_dscp').removeClass('helpdesk-required');
               $('#dscp').attr('required', true);
               $('#dscp').addClass('helpdesk-required');
               $('#dscpFileId').val('');
               $('#dscpFileName').val('');
               $('#promoDscp_view').text('');
               $('#upload_dscp').val(null);

               // Clear validation on upload_dscp
               var $uploadDscpFormGroup = $('#upload_dscp').closest('.row');
               $uploadDscpFormGroup.removeClass('has-error');
               $('#upload_dscp').css('border-color', '');
               $uploadDscpFormGroup.find('.help-block').html('').hide();
            }
        }


</script>
