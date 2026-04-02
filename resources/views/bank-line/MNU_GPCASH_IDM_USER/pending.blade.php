@include('_partials.header_content',['breadcrumb'=>['Pending task','User Identification Detail']])


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
                    <h3 class="box-title">User Identification Detail</h3><br>
                </div>

                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end">User Id</label>
                                    <div class="col-md-6">
                                        <label id="code_1"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end">User Name</label>
                                    <div class="col-md-6">
                                        <label id="name"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end">Unit</label>
                                    <div class="col-md-6">
                                        <label id="unit"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end">Email Address</label>
                                    <div class="col-md-6">
                                        <label id="email"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end">Active From</label>
                                    <div class="col-md-4">
                                        <label id="activeFrom"></label>
                                    </div>
                                    <label class="col-md-2 col-form-label text-end">Active To</label>
                                    <div class="col-md-4">
                                        <label id="activeTo"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end">Password Never Expired</label>
                                    <div class="col-md-6">
                                        <label id="isPwdNeverExpired"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end">Status</label>
                                    <div class="col-md-6">
                                        <label id="status"></label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                <div class="box-header">
                    <h3 class="box-title table-hidden">User Role</h3>
                </div>

                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row table-hidden">
                            <div class="mb-3 row form-group">
                                <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                       style="border-collapse:collapse;">
                                    <thead>
                                    <tr>
                                        <th align="center"><strong>Role</strong></th>
                                        <th align="center"><strong>Description</strong></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td align="left"></td>
                                        <td align="left"></td>
                                    </tr>
                                    </tbody>
                                </table>
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

<script>
    var oTable;
    var currencyOption;
    var id = '{{ $service }}';
    var noRef = 'OT'+$('#referenceNo').val();
    $(document).ready(function () {

        oTable = $('#list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "select": false,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: false,
                    width: "50%"
                },
                {
                    targets: 1,
                    sortable: false,
                    width: "50%"
                }

            ]
        });


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
                    }

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
                    }

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
                    var detail = result.details.roleCodeList;
                    $('#code_1').text(result.details.code);
                    $('#name').text(result.details.name);
                    var branchCode
                    if (result.details.branchCode !== undefined) {
                        branchCode = result.details.branchCode + ' - ' + result.details.branchName
                    } else {
                        branchCode = result.details.branchName
                    }
                    $('#unit').text(branchCode);
                    $('#email').text(result.details.email);
                    $('#activeFrom').text(moment(result.details.activeFrom,"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
                    if(result.details.activeTo) {
                        $('#activeTo').text(moment(result.details.activeTo, "DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
                    }
                    $('#isPwdNeverExpired').text(result.details.isPwdNeverExpired);
                    $('#status').text(result.details.status);
                    var status = $('#status').text();
                    if(status=="RESET"){
                        $('#reset').prop('disabled',false);
                        $('#unlock').prop('disabled',true);
                        $('#inactivate').prop('disabled',false);
                        $('#activate').prop('disabled',true);

                    }else if(status=="ACTIVE"){
                        $('#reset').prop('disabled',false);
                        $('#unlock').prop('disabled',true);
                        $('#inactivate').prop('disabled',false);
                        $('#activate').prop('disabled',true);
                    }else if(status=="INACTIVE"){
                        $('#reset').prop('disabled',true);
                        $('#unlock').prop('disabled',true);
                        $('#inactivate').prop('disabled',true);
                        $('#activate').prop('disabled',false);
                    }else if(status=="LOCKED"){
                        $('#reset').prop('disabled',true);
                        $('#unlock').prop('disabled',false);
                        $('#inactivate').prop('disabled',false);
                        $('#activate').prop('disabled',true);
                    }else{
                        $('#reset').prop('disabled',true);
                        $('#unlock').prop('disabled',true);
                        $('#inactivate').prop('disabled',true);
                        $('#activate').prop('disabled',true);
                    }
                    oTable.clear();
                    if(detail){
                    $.each(detail, function (idx, obj){
                        oTable.row.add([
                            obj.roleName,
                            obj.roleDscp
                        ]).draw(true);
                    });
                    }
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
                    $("#rejectSubmit").hide();
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

</script>
@include('form.script')
