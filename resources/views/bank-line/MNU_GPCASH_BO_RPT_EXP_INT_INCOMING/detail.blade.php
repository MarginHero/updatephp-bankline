@include('_partials.header_content',['breadcrumb'=>['Expired Incoming Remittance','detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">

                <div class="box-header">
                    <h3 class="box-title">Expired Incoming Remittance Detail</h3><br>
                </div>
                <form class="form-horizontal">
                    <div class="box-body" id="trxDetail">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end">Transaction Reference Number</label>
                                    <div class="col-md-6">
                                        <label id="referenceNo">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end">Boss Reference Number</label>
                                    <div class="col-md-6">
                                        <label id="bossReferenceNo">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end">Corporate ID</label>
                                    <div class="col-md-6">
                                        <label id="corporateId">-</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end">Corporate Name</label>
                                    <div class="col-md-6">
                                        <label id="corporateName">-</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end">User Maker ID</label>
                                    <div class="col-md-6">
                                        <label id="userMakerId">-</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end">Transaction Status</label>
                                    <div class="col-md-6">
                                        <label id="trxStatus">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end">Status</label>
                                    <div class="col-md-6">
                                        <label id="status">-</label>
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
                    <div class="box-body" id="reason_box" hidden>
                        <div class="mb-3 row form-group">
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label class="col-form-label text-end" id="reasonLbl"><strong>Reject Reason&ast;</strong></label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" id="reason_text" name="reason_text" class="form-control" autocomplete="off" value="" data-error="This field is required." required>
                                    <label id="reason_view" >-</label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="state_view">
                            <div class="float-left">
                                <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                            </div>
                            <div class="float-right">
                                <button type="button" id="save_screen" name="save_screen" class="btn btn-default" onclick="savePdf();">@lang('form.save_pdf')</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</section>

<script>

    var service = '{{ $service }}';
    var request = {};
    var noRef = {};
var bossRefNo = {};

    $(document).ready(function () {


        $('#accept').on('click', function () {
            $(this).prop('disabled',true);
            $('#reason_box').hide();
            var content ='';
            content='{{trans('form.confirm_accept')}}';

            $.confirm({
                title: '{{trans('form.accept')}}',
                content: content,
                buttons: {

                    cancel: {
                        text: '{{trans('form.cancel')}}',
                        btnClass: 'btn-default',
                        action: function(){
                            $('#accept').prop('disabled',false);
                        }
                    },
                    confirm: {
                        text: '{{trans('form.confirm')}}',
                        btnClass: 'btn-primary',
                        action: function(){
                            submitData('ACCEPT');
                        }
                    },

                }
            });

        });
        $('#decline').on('click', function () {
            if($('#reason_box').css('display') == 'none'){
                $('#reason_box').show();
            } else {
                $(this).prop('disabled',true);
                var content ='';
                content='{{trans('form.confirm_decline')}}';

                $.confirm({
                    title: '{{trans('form.accept')}}',
                    content: content,
                    buttons: {

                        cancel: {
                            text: '{{trans('form.cancel')}}',
                            btnClass: 'btn-default',
                            action: function(){
                                $('#decline').prop('disabled',false);
                            }
                        },
                        confirm: {
                            text: '{{trans('form.confirm')}}',
                            btnClass: 'btn-primary',
                            action: function(){
                                submitData('DECLINE');
                            }
                        },

                    }
                });
            }


        });
        function submitData(action){

            var url_action = "submit";
            request['actionForm'] = action;
            request['actionFormReason'] =  $('#reason_text').val();
            if( action == 'ACCEPT' ){
                request['actionFormReason'] = '';
            }
            $.ajax({
                url: 'add',
                method: 'post',
                data: {"_token": "{{ csrf_token() }}", url_action: url_action, menu: $('#service').val(), value: request},
                success: function (data) {
                    $('#submit_view').prop('disabled',false);
                    var result = JSON.parse(data);
                    if (result.status=="200") {
                        noRef=result.referenceNo;
                        flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                        $('#accept').hide();
                        $('#decline').hide();
                        $('#reason_box').hide();
                    } else {
                        $('#accept').prop('disabled',false);
                        $('#decline').prop('disabled',false);
                        flash('warning', result.message);
                    }

                }, error: function (xhr, ajaxOptions, thrownError) {
                    $('#submit_view').prop('disabled',false);
                    flash('warning', 'Form Submit Failed');
                    console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
                }
            });
        }
        $('.back').on('click', function () {
            app.setView('{{$service}}','landing');
        });

    });

    function getDetail(noRef,bossRefNo){

        var  value = {
            currentPage: "1",
            pageSize: "20",
        };

        if(noRef !='null'){
            value.referenceNo = noRef;
        }else{
            value.bossRefNo = bossRefNo;
        }


        var url_action = 'search';
        var action = 'DETAIL';
        var menu = '{{ $service }}';
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : menu,
                url_action : url_action,
                action : action,
                _token : '<?php echo e(csrf_token()); ?>'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    var detail = result.result[0];
                    noRef=detail.referenceNo;
                    if(detail.referenceNo){
                        $('#referenceNo').text(detail.referenceNo);
                    }
                    $('#bossReferenceNo').text(detail.bossRefNo);
                    $('#corporateId').text(detail.corporateId);
                    $('#corporateName').text(detail.corporateName);
                    $('#userMakerId').text(detail.userMakerId);
                    $('#trxStatus').text(detail.status);
                    $('#status').text(detail.status);
                    $.ajax({
                        url: 'getViewWithURL',
                        method: 'post',
                        data: {
                            viewURL : service + '.partial.' +  'MNU_GPCASH_F_FUND_INT_INCOMING'
                        },
                        success: function (datas) {
                            $('#detailActivity').html(datas);
                            viewDetai(detail)
                        }, error: function (xhr, ajaxOptions, thrownError) {
                        }
                    });

                } else {
                    flash('warning', data.message);
                }


            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '<?php echo e(trans('form.conn_error')); ?>';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            },
            complete: function (data) {

            }
        });

    }

    function viewDetai(detail){

        $('.actvDetail').show();
        $('#detailActivity').show();
        request=detail;
        getDetailData(detail);
        $('#save_screen').prop('disabled',false);
    }




    function savePdf(fileFormat){

        var url_action = 'downloadDetail';
        var action = 'DOWNLOAD';
        var menu = 'MNU_GPCASH_SUSPECT_INT_2011';
        var value = {
            referenceNo : "",
            senderRefNo : "",
            benRefNo : "",
            rate : "",
            currentPage: 1,
        };
        value.referenceNo = $('#refNo').val();
        request.parentMenu='{{ $service }}';
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : request,
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
    }


    function currencyFormat (num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }


</script>
