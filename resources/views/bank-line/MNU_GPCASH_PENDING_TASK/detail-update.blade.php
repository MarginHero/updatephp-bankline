@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'Detail']])

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="referenceNo" value=""/>
            <input type="hidden" id="taskId" value=""/>
            <form class="form-horizontal">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Pending Task Detail</h3><br>
                    </div>
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Menu</label>
                                    <div class="col-md-6">
                                        <label id="menu_text">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Activity</label>
                                    <div class="col-md-6">
                                        <label id="activity_text">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Reference Number</label>
                                    <div class="col-md-6">
                                        <label id="noref_text">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Activity Date Time</label>
                                    <div class="col-md-6">
                                        <label id="datetime_text">-</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="detailDiv"></div>
                    @include('form.reason')
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

<script>
    var noRef = 'OT'+$('#refNo').val();
    var id = '{{ $service }}';
    $(document).ready(function () {
$(".state_reason").hide();

        $('.back').on('click', function () {
            res = app.setView(id,'landing');
        });
    });
    function getMenuDetailViewUpdate(menuCode,referenceNo,taskId){
        $('#referenceNo').val(referenceNo);
        $('#taskId').val(taskId);
        $("#reason_text").hide();
        $("#reasonLbl").hide();
        $.ajax({
            url: 'getViewWithURL',
            method: 'post',
            data: {
                viewURL : id + '.partial_view_update.' +  menuCode
            },
            success: function (data) {

                $('#detailDiv').html(data);

            }, error: function (xhr, ajaxOptions, thrownError) {
            }
        });
    }
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
    $('#reject').on('click', function () {
        $("#reason_text").show();
        $("#reasonLbl").show();
        $(".state_reason").show();
        $("#reason_view").hide();
        $(".state_view").hide();
    });
    $('#rejectSubmit').on('click', function () {
        $('#rejectSubmit').prop('disabled',true);
        $("#reason_text").hide();
        $("#reasonLbl").show();
        $("#reason_view").show();
        $.confirm({
            title: '{{trans('form.confirm')}}',
            content: '{{trans('form.confirm_reject')}}',
            buttons: {

                cancel: {
                    text: '{{trans('form.cancel')}}',
                    btnClass: 'btn-default',
                    action: function(){
                        $("#reason_text").show();

                        $("#reason_view").hide();
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
                $("#reason_text").show();

                $("#reason_view").hide();
                $('#rejectSubmit').prop('disabled',false);
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
                    flash('success', result.message + '<br>' + result.dateTimeInfo);
                    $(window).scrollTop(0);
                    $('#approve').hide();
                    $('#reject').hide();
                    $('#save_screen').show();
                    $('#back').html('{{trans('form.done')}}');
                    $('#approve').prop('disabled', false);
                    $('#reject').prop('disabled', false);
                    $('#rejectSubmit').prop('disabled',false);
                    $('#rejectSubmit').hide();
                    $("#reason_text").hide();
                    $("#reason_view").show();
                    $(".state_view").show();
                    //$(".state_reason").hide();
                    //$(".state_reason").hide();

                }else{
                    flash('warning',result.message+'<br>'+result.dateTimeInfo);
                    $('#approve').prop('disabled',false);
                    $('#reject').prop('disabled',false);
                    $("#reason_text").show();

                    $("#reason_view").hide();
                    $('#rejectSubmit').prop('disabled',false);
                }
            }, error: function (xhr, ajaxOptions, thrownError) {
                $(window).scrollTop(0);
                $('#approve').prop('disabled',false);
                $('#reject').prop('disabled',false);
                $('#save_screen').hide();
                flash('warning','{{trans('form.pending_error')}}');
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }
        });
    }
</script>
