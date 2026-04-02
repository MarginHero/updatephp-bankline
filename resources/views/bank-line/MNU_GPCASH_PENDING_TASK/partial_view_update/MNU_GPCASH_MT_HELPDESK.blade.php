<div class="box-header">
    <h3 class="box-title">Upload Information Detail</h3><br>
</div>

<div class="row">
    <div class="col-lg-6" style="padding-right: 0px">

        <div class="box-body" style="border-right: 4px solid #d2d6de">
            <h2 style="text-align: center">New Value</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="row form-group">
                        <label class="col-md-2 col-form-label text-end">Type</label>
                        <div class="col-md-6">
                            <label id="infoType">-</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row form-group">
                        <label class="col-md-2 col-form-label text-end">Title</label>
                        <div class="col-md-6">
                            <label id="title">-</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row form-group">
                        <label class="col-md-2 col-form-label text-end">File Upload</label>
                        <div class="col-md-6">
                            <!-- <label id="fileUpload">-</label> -->
                            <label>
                                <a onClick="downloadFile('FILE');" id="fileUpload" style="color:#337ab7;text-decoration:underline; cursor:pointer;">-</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row promoDesc_div">
                    <div class="row form-group">
                        <label class="col-md-2 col-form-label text-end" >Promo Detail Description</label>
                        <div class="col-md-6">
                            <!-- <label id="promoDesc">-</label> -->
                            <label>
                                <a onClick="downloadFile('DSCP');" id="promoDesc" style="color:#337ab7;text-decoration:underline; cursor:pointer;">-</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row desc_div">
                    <div class="row form-group">
                        <label class="col-md-2 col-form-label text-end">Description</label>
                        <div class="col-md-6">
                            <label id="dscp">-</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6" style="padding-left: 0px">

        <div class="box-body">
            <h2 style="text-align: center">Old Value</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="row form-group">
                        <label class="col-md-2 col-form-label text-end">Type</label>
                        <div class="col-md-6">
                            <label id="old_infoType">-</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row form-group">
                        <label class="col-md-2 col-form-label text-end">Title</label>
                        <div class="col-md-6">
                            <label id="old_title">-</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row form-group">
                        <label class="col-md-2 col-form-label text-end">File Upload</label>
                        <div class="col-md-6">
                            <!-- <label id="fileUpload">-</label> -->
                            <label>
                                <a onClick="downloadFile('FILE');" id="old_fileUpload" style="color:#337ab7;text-decoration:underline; cursor:pointer;">-</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row old_promoDesc_div">
                    <div class="row form-group">
                        <label class="col-md-2 col-form-label text-end">Promo Detail Description</label>
                        <div class="col-md-6">
                            <!-- <label id="promoDesc">-</label> -->
                            <label>
                                <a onClick="downloadFile('DSCP');" id="old_promoDesc" style="color:#337ab7;text-decoration:underline; cursor:pointer;">-</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row old_desc_div">
                    <div class="row form-group">
                        <label class="col-md-2 col-form-label text-end">Description</label>
                        <div class="col-md-6">
                            <label id="old_dscp">-</label>
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
    var infoTypeOption;
    var noRef = 'OT'+$('#referenceNo').val();
    var fileUploadId, promoDescId;

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
                if (result.status=="200") {
                    var detail = result.details;
                    var type = detail.infoType;
                    $('.promoDesc_div').hide();
                    $('.desc_div').show();
                    if (type == 'INFO') {
                        $('#infoType').text('Information');
                    } else if (type == 'NEWS') {
                        $('#infoType').text('News');
                    } else if (type == 'PROMO') {
                        $('#infoType').text('Promo');
                        $('.promoDesc_div').show();
                        $('.desc_div').hide();
                    }
                    $('#title').text(detail.title);
                    $('#fileUpload').text(detail.fileName);
                    $('#dscp').text(detail.description);
                    $('#promoDesc').text(detail.promoDscpFileName);
                    fileUploadId = detail.fileId;
                    promoDescId = detail.promoDscpFileId;


                    var detail = result.oldValue.details;
                    var type = detail.infoType;
                    $('.old_promoDesc_div').hide();
                      $('.old_desc_div').show();
                    if (type == 'INFO') {
                        $('#old_infoType').text('Information');
                    } else if (type == 'NEWS') {
                        $('#old_infoType').text('News');
                    } else if (type == 'PROMO') {
                        $('#old_infoType').text('Promo');
                        $('.old_promoDesc_div').show();
                        $('.old_desc_div').hide();
                    }
                    $('#old_title').text(detail.title);
                    $('#old_fileUpload').text(detail.fileName);
                    $('#old_dscp').text(detail.description);
                    $('#old_promoDesc').text(detail.promoDscpFileName);
                    fileUploadId = detail.fileId;
                    promoDescId = detail.promoDscpFileId;
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

