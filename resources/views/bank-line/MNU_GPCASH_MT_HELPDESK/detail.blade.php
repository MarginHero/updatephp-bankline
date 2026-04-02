@include('_partials.header_content',['breadcrumb'=>['Upload Detail','detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="uploadId" value=""/>
            <input type="hidden" id="infoType" value=""/>
            <input type="hidden" id="deleteId" value=""/>
            <div class="box">


                <div class="box-header">
                    <h3 class="box-title">Upload Detail</h3><br>
                </div>
                <form class="form-horizontal">
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">Type</label>
                                <div class="col-md-6">
                                    <label id="typeInfo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">Title</label>
                                <div class="col-md-6">
                                    <label id="title">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">File Upload</label>
                                <div class="col-md-6">
                                    <!-- <label id="fileUpload">-</label> -->
                                    <label>
                                        <a onClick="downloadFile('FILE');" id="fileUpload">-</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row promoDesc_div">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">Promo Detail Description</label>
                                <div class="col-md-6">
                                    <!-- <label id="promoDesc">-</label> -->
                                    <label>
                                        <a onClick="downloadFile('DSCP');" id="promoDesc">-</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row desc_div">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">Description</label>
                                <div class="col-md-6">
                                    <label id="dscp">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">Uploaded Date</label>
                                <div class="col-md-6">
                                    <label id="uploadDate">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">Uploaded By</label>
                                <div class="col-md-6">
                                    <label id="uploadBy">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">

                                <div class="state_view">
                                    <div class="float-left">
                                        <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                                        <button type="button" id="save_screen" name="save_screen" class="btn btn-default" style="display:none" onclick="save_pdf();">@lang('form.save_pdf')</button>
                                    </div>
                                    <div class="float-right">
                                        <button type="button" id="delete" name="delete" class="btn btn-danger">@lang('form.delete')</button>
                                        <button type="button" id="edit" name="edit" class="btn btn-primary">@lang('form.edit')</button>
                                        <button type="button" id="next_user" name="next_user" class="btn btn-info" style="display:none">@lang('form.next_user')</button>
                                        <button type="button" id="done" name="done" class="btn btn-primary done" style="display:none">@lang('form.done')</button>

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
    var oTable;
    var id = '{{ $service }}';
    var noRef;
    var fileUploadId, promoDescId;

    $(document).ready(function () {
        $('.state_delete').hide();


        $('#delete').on('click', function () {
$("#vue-warning").hide();
            $(this).prop('disabled',true);
            $.confirm({
                title: '{{trans('form.delete')}}',
                content: '{{trans('form.confirm_delete')}}',
                buttons: {

                    cancel: {
                        text: '{{trans('form.cancel')}}',
                        btnClass: 'btn-default',
                        action: function(){
                            $('#delete').prop('disabled',false);
                        }
                    },
                    confirm: {
                        text: '{{trans('form.confirm')}}',
                        btnClass: 'btn-primary',
                        action: function(){
                            submit_delete();
                        }
                    },

                }
            });
        });

        function submit_delete () {

            var value = {
                "fileId": $('#deleteId').val(),
                "id": $('#uploadId').val(),
                "infoType": $('#infoType').val(),
                "title": $("#title").text(),
                "fileName": $("#fileUpload").text(),
                "description": $("#dscp").text(),
                "promoDscpFileName": $("#promoDesc").text(),
                "createdDate": $("#uploadDate").text(),
            };
            $.ajax({
                url: 'delete',
                method: 'post',
                data: {"_token": "{{ csrf_token() }}", menu: id, value: value,url_action:'submitDelete'},
                success: function (data) {
                    $('#delete').prop('disabled',false);
                    var result = JSON.parse(data);
                    if (result.status=="200") {
                        noRef = result.referenceNo;
                        flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                        $('#submit_view').hide();
                        $('#save_screen').show();
                        $('#next_user').show();
                        $('#done').show();
                        $('#back').hide();
                        $('#delete').hide();
                        $('#edit').hide();
                        $('#back').html('{{trans('form.done')}}');
                    } else {
                        $('#delete').prop('disabled',false);
                        flash('warning', result.message);
                    }

                }, error: function (xhr, ajaxOptions, thrownError) {
                    $('#delete').prop('disabled',false);
                    flash('warning', 'Form Submit Failed');
                   console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
                }
            });
        }



        $('#back_delete').on('click', function () {
            $("#vue-warning").hide();
            $('.state_delete').hide();
            $('.state_view').show();
        });

        $('.back').on('click', function () {
           var res = app.setView(id,'landing');
        });

        $('.done').on('click', function () {
           var res = app.setView(id,'landing');
        });

        $('#edit').on('click', function () {
            var code = $('#uploadId').val();
            var res = app.setView(id,'add');
            if(res=='done'){
                $('#type').val('edit');
                $('#breadcrumb-action').html('edit');
                $('#code_edit').val(code);
                getInfoEdit(code);
            }

        });

    });

    function getMatrix(){
        var uploadId = $('#uploadId').val();
        var url_action = 'search';
        var value ={
            id:uploadId,
            name:'',
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
                    var index = result.result.map(function(o) { return o.id; }).indexOf(uploadId.toString());
                    var detail = result.result[index];

                    $('#infoType').val(detail.infoType);
                    $('.promoDesc_div').hide();
                    $('.desc_div').show();

                    if (detail.infoType == 'INFO') {
                        $('#typeInfo').text('Information');
                    } else if (detail.infoType == 'NEWS') {
                        $('#typeInfo').text('News');
                    } else if (detail.infoType == 'PROMO') {
                        $('#typeInfo').text('Promo');
                        $('.promoDesc_div').show();
                        $('.desc_div').hide();
                    }

                    $('#title').text(detail.title);
                    $('#fileUpload').text(detail.fileName);
                    $('#dscp').text(detail.description);
                    $('#uploadBy').text(detail.createdBy);
                    $('#uploadDate').text(detail.createdDate);
                    $('#deleteId').val(detail.uploadId);

                    $('#promoDesc').text(detail.promoDscpFileName);
                    fileUploadId = detail.uploadId;
                    promoDescId = detail.promoDscpFileId;

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

    function downloadFile(type) {
        var fileName;
        var fileId;

        if (type === 'FILE') {
            fileName = $('#fileUpload').text();
            fileId = fileUploadId;
        } else {
            fileName = $('#promoDesc').text();
            fileId = promoDescId;
        }
        
        const urlGet = "download?fileName="+fileName+"&fileId="+fileId;

        $.ajax({
            url: 'downloadFile',
            method: 'POST',
            cache: false,
            data:{
                url_action : urlGet,
                service:'MNU_GPCASH_MT_HELPDESK',
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
                   if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
               }

               var type = xhr.getResponseHeader('Content-Type');
               var blob = new Blob([response], { type: type });
               saveAs(blob, filename);

            }

        });

    }


</script>
