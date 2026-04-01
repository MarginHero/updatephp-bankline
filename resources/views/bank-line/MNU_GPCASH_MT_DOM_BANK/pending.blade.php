@include('_partials.header_content',['breadcrumb'=>['Pending task','Domestic Bank Detail']])

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
                <div class="box-header detail" style="display:none">
                    <span id="detail" class="detail" style="color:darkred;"><small><i>Detail</i></small></span>
                </div>
                <div class="box-header">
                    <h3 class="box-title">Domestic Bank Detail</h3><br>
                </div>

                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Code</label>
                                <div class="col-md-6">
                                    <label id="code_1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Bank Name</label>
                                <div class="col-md-6">
                                    <label id="name">-</label>
                                </div>
                            </div>
                        </div>
						<div class="row domDetail">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Address</label>
                                <div class="col-md-6">
                                    <label id="address1">-</label>
                                </div>
                            </div>
                        </div>
						<div class="row domDetail">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="address2">-</label>
                                </div>
                            </div>
                        </div>
						<div class="row domDetail">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="address3">-</label>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">SKN Code</label>
                                <div class="col-md-6">
                                    <label id="organizationUnitCode">-</label>
                                </div>
                            </div>
                        </div>
						<div class="row domDetail">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Branch Name</label>
                                <div class="col-md-6">
                                    <label id="organizationUnitName">-</label>
                                </div>
                            </div>
                        </div>
						<div class="row domDetail">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Member Code</label>
                                <div class="col-md-6">
                                    <label id="memberCode">-</label>
                                </div>
                            </div>
                        </div>
						<div class="row domDetail">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">BI Fast Code</label>
                                <div class="col-md-6">
                                    <label id="biFastCode">-</label>
                                </div>
                            </div>
                        </div>
                    @include('form.reason')
</div>
                </div>

		<div class="box-header cityDetail">
                    <h3 class="box-title">City Listing</h3><br>
                </div>
		<div class="box-body cityDetail">
                    <div class="container-fluid">
                            <div class="row">
                                <table id="list2" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                       style="border-collapse:collapse;">
                                    <thead>
                                    <tr>
                                        <th align="center"><strong>City</strong></th>
                                    </tr>
                                    </thead>

                                </table>
                            </div>
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

oTable2 = $('#list2').DataTable({
            //"paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [

                {
                    targets: 0,
                    sortable: false,
                    width: "100%"
                }
            ],
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
                    var detail = result.details.menuList;
		     $('#code_1').text(result.details.code);
                    $('#name').text(result.details.name);
$('#organizationUnitCode').text(result.details.organizationUnitCode);
	            if(result.details.bankCityList){
			$.each(result.details.bankCityList, function (idx, obj){
                                oTable2.row.add([
                                    obj.name,
                                ]).draw(true);
                            });
			$('.cityDetail').show();
                        $('.domDetail').hide();
                    }else{
		    	$('#address1').text(result.details.address1);
						$('#address2').text(result.details.address2);
						$('#address3').text(result.details.address3);

						$('#organizationUnitName').text(result.details.organizationUnitName);
						$('#memberCode').text(result.details.memberCode);
						$('#biFastCode').text(result.details.biFastCode);
			$('.cityDetail').hide();
                        $('.domDetail').show();
		    }



                } else {
                    flash('warning', result.message);
                }


            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            },
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
                    //$(".state_reason").hide();
                    $('.state_view').show();
                }else{
                    flash('warning',result.message);
                    $('#save_screen').hide();
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
