@include('_partials.header_content',['breadcrumb'=>['Suspect Remittance 2012','detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="pendingTaskId" value=""/>
            <input type="hidden" id="refNo" value=""/>
            <input type="hidden" id="service" value=""/>
            <input type="hidden" id="menuCode" value=""/>
            <input type="hidden" id="createdByUserCode" value=""/>
            <input type="hidden" id="isReject" value=""/>
            <div class="box">

                <div class="box-header">
                    <h3 class="box-title">Suspect Remittance Detail</h3><br>
                </div>
                <form class="form-horizontal">
                    <div class="box-body" id="trxDetail">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Transaction Reference Number</label>
                                    <div class="col-md-6">
                                        <label id="referenceNo">-</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Corporate ID</label>
                                    <div class="col-md-6">
                                        <label id="corporateId">-</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Corporate Name</label>
                                    <div class="col-md-6">
                                        <label id="corporateName">-</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">User Maker ID</label>
                                    <div class="col-md-6">
                                        <label id="userMakerId">-</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Menu</label>
                                    <div class="col-md-6">
                                        <label id="menu">-</label>
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
                    <div class="box-body" id="reason_box" style="display: none;">
                       <div class="mb-3 row">
                        <div class="row">
                            <div class="col-md-2 text-right">
                                <label class="col-form-label text-end" id="reasonLbl"><strong>Decline Reason&ast;</strong></label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="reason_text_entry" name="reason_text_entry" class="form-control" autocomplete="off" value="" data-error="This field is required." required>
                                <label id="reason_view_entry" style="display: none;"></label>
                                <div class="help-block with-errors" style="color: red;"></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="box-footer">
                        <div class="state_view">
                            <div class="float-left">
                                 <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                                <button type="button" id="save_screen_done" name="save_screen_done" class="btn btn-default" style="display: none" onclick="savePdf();" hidden>@lang('form.save_pdf')</button>
                            </div>
                            <div class="float-right">
                                <button type="button" id="accept" name="accept" class="btn btn-primary">@lang('form.accept')</button>
                                <button type="button" id="decline" name="decline" class="btn btn-danger">@lang('form.decline')</button>
                                <button type="button" id="confirm" name="confirm" class="btn btn-primary">@lang('form.confirm')</button>
                                <button type="button" id="done" name="done" class="btn btn-primary" style="display: none">@lang('form.done')</button>
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
    var noRef = '';

    $(document).ready(function () {
        $('#confirm').hide();

        $('#accept').on('click', function () {
            $(this).prop('disabled',true);
            $('#reason_box').hide();
            $('#confirm').show();
            $('#accept').hide();
            $('#decline').hide();
            $('#save_screen').hide();

        });
        $('#decline').on('click', function () {
            $('#reason_box').show();
            $(this).prop('disabled',true);
            $('#confirm').show();
            $('#accept').hide();
            $('#decline').hide();
            $('#save_screen').hide();
        });

        $('#confirm').on('click', function () {
            var action = '';
            var content ='';
            var title ='';
            if($('#reason_box').css('display') == 'none'){
               action='ACCEPT'
                content='{{trans('form.confirm_accept')}}';
                title='{{trans('form.accept')}}';
            }else{
                action='DECLINE';
                content='{{trans('form.confirm_decline')}}';
                title='{{trans('form.decline')}}';
                if (!$('#reason_text_entry').val()) {
                    $('#reason_text_entry')[0].setCustomValidity($('#reason_text_entry').data('error'));
                    $('#reason_text_entry')[0].reportValidity();
                    return;
                } else {
                    $('#reason_text_entry')[0].setCustomValidity('');
                }
            }

            $.confirm({
                title: title,
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
                            submitData(action);
                        }
                    },

                }
            });

        });
        function submitData(action){

            var url_action = "submit";
            request['actionForm'] = action;
            request['actionFormReason'] =  $('#reason_text_entry').val();
            if( action == 'ACCEPT' ){
                request['actionFormReason'] = '';
$('#reason_box').hide();
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
                        //$('#reason_box').hide();
                        $('#reason_text_entry').hide();
                        $('#reason_view_entry').html($('#reason_text_entry').val());
                        $('#reason_view_entry').show();
                        $('#save_screen_done').show();
                        $('#done').show();
                        $('#confirm').hide();
                        $('#back').hide();
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
            if ($('#confirm').is(':visible')) {
                $('#confirm').hide();
                $('#reason_box').hide();
                $('#reason_text_entry').val('');
                $('#accept').show();
                $('#accept').prop('disabled', false);
                $('#decline').prop('disabled', false);
                $('#decline').show();
                $('#save_screen').show();
            } else {
                app.setView($('#service').val(),'landing');
            }

        });
        $('#done').on('click', function () {
            app.setView($('#service').val(),'landing');
        });

    });

    function getDetail(){


        noRef= $('#refNo').val();

        var url_action= 'search';
        var value ={
            referenceNo: noRef,
            currentPage: "1",
            pageSize: "20",
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
                var resultArray = JSON.parse(data);
                var result= resultArray.result[0];
                var menuCodeDetail = '';
                if (resultArray.status=="200") {
                    $('#referenceNo').text(result.referenceNo);
                    $('#corporateId').text(result.corporateId);
                    $('#corporateName').text(result.corporateName);
                    $('#userMakerId').text(result.userMakerId);
                    $('#menu').text(result.menu);
                    $('.table-hidden').show();

                    if(result.menu == 'Payroll'){
                        menuCodeDetail = 'MNU_GPCASH_F_MASS_FUND_PAYROLL';
                    }else if(result.menu == 'Bulk Payment Remittance'){
                        menuCodeDetail = 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT';
                    }else{
                        menuCodeDetail = result.detail.menuCode;
                    }
                    $.ajax({
                        url: 'getViewWithURL',
                        method: 'post',
                        data: {
                            viewURL : service + '.partial.' +  menuCodeDetail
                        },
                        success: function (datas) {
                            $('#detailActivity').html(datas);
                            viewDetai(result)

                        }, error: function (xhr, ajaxOptions, thrownError) {
                        }
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



    function currencyFormat (num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

    function savePdf(fileFormat){

        var url_action = 'downloadDetail';
        var action = 'DOWNLOAD';
        var menu = service;
        var value = {
            referenceNo : "",
            senderRefNo : "",
            benRefNo : "",
            rate : "",
            currentPage: 1,
        };
        value.referenceNo = $('#refNo').val();

        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : request,
                menu : $('#service').val(),
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
                            service:$('#service').val(),
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
</script>
