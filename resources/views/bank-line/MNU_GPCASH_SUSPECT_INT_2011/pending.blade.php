@include('_partials.header_content',['breadcrumb'=>['Pending task','Suspect Remittance 1011']])


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
                        <h3 class="box-title">Suspect Remittance Detail</h3><br>
                    </div>
                    <form class="form-horizontal">
                        <div class="box-body" id="trxDetail">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="mb-3 row form-group">
                                        <label class="col-md-2 col-form-label text-end">Transaction Reference Number</label>
                                        <div class="col-md-6">
                                            <label id="transReferenceNo">-</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 row form-group">
                                        <label class="col-md-2 col-form-label text-end">Corporate ID</label>
                                        <div class="col-md-6">
                                            <label id="corporateId">-</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 row form-group">
                                        <label class="col-md-2 col-form-label text-end">Corporate Name</label>
                                        <div class="col-md-6">
                                            <label id="corporateName">-</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 row form-group">
                                        <label class="col-md-2 col-form-label text-end">User Maker ID</label>
                                        <div class="col-md-6">
                                            <label id="userMakerId">-</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 row form-group">
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
                        <div class="box-body" id="reason_form_box" style="display: none">
                            <div class="mb-3 row form-group">
                                <div class="row">
                                    <div class="col-md-2 text-right">
                                        <label class="col-form-label text-end" > Reason Decline</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label id="reason_form_txt" >-</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
    var oTable;
    var currencyOption;
    var id = '{{ $service }}';
    var noRef = 'OT'+$('#referenceNo').val();
    $(document).ready(function () {

        oTable_cp = $('#list_cp').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: true,
                    width: "5%"
                },
                {
                    targets: 1,
                    sortable: true,
                    width: "15%"
                },
                {
                    targets: 2,
                    sortable: true,
                    width: "20%"
                },
                {
                    targets: 3,
                    sortable: true,
                    width: "15%"
                },
                {
                    targets: 4,
                    sortable: true,
                    width: "30%"
                },
                {
                    targets: 5,
                    sortable: true,
                    width: "15%"
                }
            ]
        });

        oTable_token = $('#list_token').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: true,
                    width: "100%"
                }
            ]
        });

        oTable_admin = $('#list_admin').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: true,
                    width: "15%"
                },
                {
                    targets: 1,
                    sortable: true,
                    width: "10%"
                },
                {
                    targets: 2,
                    sortable: true,
                    width: "10%"
                },
                {
                    targets: 3,
                    sortable: true,
                    width: "20%"
                },
                {
                    targets: 4,
                    sortable: true,
                    width: "10%"
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
                    getDetail(result.details)
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

    function tokenCount(){
        if(oTable_token !== undefined)
            var token_count = oTable_token.data().count();
        $('#tokenNum').text(token_count);
    }

    function getDetail(detail){

        console.log(detail,'detaillll')
        var refNo= detail.referenceNo;
        var url_action= 'search';
        var value ={
            referenceNo: refNo,
            currentPage: "1",
            pageSize: "20",
        };
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{
                value:value,
                menu:id,
                action:'DETAIL',
                url_action:url_action
            },
            success: function (data) {
                var resultArray = JSON.parse(data);
                var result= resultArray.result[0];
                if (resultArray.status=="200") {
                    $('#transReferenceNo').text(refNo);
                    $('#corporateId').text(result.corporateId);
                    $('#corporateName').text(result.corporateName);
                    $('#userMakerId').text(result.userMakerId);
                    $('#menu').text(result.menu);
                    if(detail.actionForm == 'DECLINE'){
                        $('#reason_form_box').show();
                        $('#reason_form_txt').text(detail.actionFormReason);
                    }
                    $('.table-hidden').show();
                    $.ajax({
                        url: 'getViewWithURL',
                        method: 'post',
                        data: {
                            viewURL : id + '.partial.' +  result.detail.menuCode
                        },
                        success: function (datas) {
                            $('#detailActivity').html(datas);
                            viewDetai(detail)

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
        getDetailData(detail);
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
                $(window).scrollTop(0);
                if (result.status=="200") {
                    flash('success', result.message + '<br>' + result.dateTimeInfo);
                    $('#approve').hide();
                    $('#reject').hide();
                    $('#save_screen').show();
                    $('#back').html('{{trans('form.done')}}');
                    flash('success', '{{trans('form.pending_success_suspect')}}');
                    $('#approve').prop('disabled', false);
                    $('#reject').prop('disabled', false);
                    $('#rejectSubmit').prop('disabled',false);
                    $('#rejectSubmit').hide();
                    $("#reason_text").hide();
                    $("#reason_view").show();
                    //$(".state_reason").hide();
                    $('.state_view').show();
                }else{
                    flash('warning',result.message+'<br>'+result.dateTimeInfo);
                    $('#approve').prop('disabled',false);
                    $('#reject').prop('disabled',false);
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
@include('form.script')
