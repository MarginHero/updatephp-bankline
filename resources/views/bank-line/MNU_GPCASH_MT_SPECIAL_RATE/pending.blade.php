@include('_partials.header_content',['breadcrumb'=>['Pending task','Special Rate Detail']])


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
                        <h3 class="box-title"> Special Rate Detail</h3><br>
                    </div>

                    <div class="box-body list-delete" style="display: none;">

                    <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                        style="border-collapse:collapse;">
                        <thead>
                            <tr>
                                <th align="center"><strong>Deal Rate No. </strong></th>
                                <th align="center"><strong>Company ID</strong></th>
                                <th align="center"><strong>Debit Currency</strong></th>
                                <th align="center"><strong>Credit Currency</strong></th>
                                <th align="center"><strong>Status</strong></th>
                            </tr>
                        </thead>
                    </table>
                </div>

                    <div class="box-body single-delete">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label lblDealRate text-end">Deal Rate No.</label>
                                    <div class="col-md-6">
                                    <label id="refNoSpecialRate">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label lblcorpID text-end">Corporate ID</label>
                                    <div class="col-md-6">
                                        <label id="corporate">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="mb-3 row form-group row">
                                    <label class="col-md-2 col-form-label lblDebitCurr text-end">Debit Currency</label>
                                    <div class="col-md-6">
                                        <label id="debitCurrency">-</label>
                                        <label id="debitAmount" class="rate">-</label>
					<label id="debitAmountJpy" class="rateJpy" hidden>-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label lblCreditCurr text-end">Credit Currency</label>
                                    <div class="col-md-6 ">
                                        <label id="creditCurrency">-</label>
                                        <label id="creditAmount" class="rate">-</label>
					<label id="creditAmountJpy" class="rateJpy">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label lblSpecialrate text-end">Special Rate</label>
                                    <div class="col-md-6">
                                        <label id="specialRate">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end">Remark</label>
                                    <div class="col-md-6" style="word-wrap:break-word;width:50%;">
                                        <label id="remark">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label lblActiveDate text-end">Active Date</label>
                                    <div class="col-md-6">
                                        <label id="activeDate">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label lblEmail text-end">Email</label>
                                    <div class="col-md-6" style="word-wrap:break-word;width:50%;">
                                        <label id="email">-</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
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
    var noRef = 'OT'+$('#referenceNo').val();
    $(document).ready(function () {

        oTable = $('#list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "select": {
                style: 'multi',
                selector: 'input.dt-checkboxes'
            },
            "searching": false,
            "autoWidth":false,
            "columnDefs": [
                {
                    targets: 0,
                    orderable: true
                },
                {
                    targets: 1,
                    orderable: false
                },
                {
                    targets: 2,
                    orderable: true
                },
                {
                    targets: 3,
                    orderable: true
                },
                {
                    targets: 4,
                    orderable: true
                },
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
                    },

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
                    },

                }
            });
        });

        $('.back').on('click', function () {
            res = app.setView('MNU_GPCASH_PENDING_TASK','landing');
        });

    });

    function getData() {

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
                    var detail = result.details;
                    if (detail.action != 'DELETE_LIST') {
                        $('#refNoSpecialRate').text(detail.refNoSpecialRate);
                        $('#corporate').text(detail.corporateId+ " - "+detail.corporateName);
                        $('#debitCurrency').text(detail.debitCurrency);
                        $('#debitAmount').text(detail.debitAmount);
                        $('#creditCurrency').text(detail.creditCurrency);
                        $('#creditAmount').text(detail.creditAmount);
                        $('#specialRate').text(detail.specialRateFormatted);
                        $('#activeDate').text(detail.activeDate);
                        $('#remark').text(detail.remark);
                        $('#email').text(detail.email);

			$('#debitAmountJpy').text(detail.debitAmount);
		    $('#creditAmountJpy').text(detail.creditAmount);

			if(detail.creditCurrency == 'JPY'){
				$('#creditAmountJpy').show();
				$('#creditAmount').hide();
			}else{
				$('#creditAmountJpy').hide();
				$('#creditAmount').show();
			}

			if(detail.debitCurrency == 'JPY'){
				$('#debitAmountJpy').show();
				$('#debitAmount').hide();
			}else{
				$('#debitAmountJpy').hide();
				$('#debitAmount').show();
			}


                        if(detail.action == 'DELETE'){
                            $('#specialRate').text(detail.specialRate);
                            $('#transactionAmountRate').text(detail.transactionAmountRate);
                            $('#expiryDate').text(detail.expiryDate);
                            $('#transactionBuyRate').text(detail.transactionSellRate);
                            $('#transactionSellRate').text(detail.transactionSellRate);
                        }

                    } else {
                        $(".single-delete").hide();
                        $(".list-delete").show();
                        oTable.clear();
                        if(detail.specialRateList){
                            $.each(detail.specialRateList, function (idx, obj){
                                oTable.row.add([
                                    obj.dealRateNo,
                                    obj.corporateId,
                                    obj.debitCurrency,
                                    obj.creditCurrency,
                                    obj.status,
                                ]).draw(false);

                            });
                        }

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

                $('.rate').autoNumeric('init',{
                    emptyInputBehavior: 'focus',
                    digitGroupSeparator        : ',',
                    decimalCharacter           : '.',
                    decimalCharacterAlternative: '.',
                    // allowDecimalPadding : false,
                    minimumValue:'0.00',maximumValue:'999999999999999.99'
                });
                $(".rateSpecial").keydown(function (event) {

                    if (event.shiftKey == true) {
                        event.preventDefault();
                    }

                    var val=$(".rateSpecial").val();

                    if(val.split('.').length > 1 ){
                        var dec = val.split('.')[1];
                        if(dec.length > 5 && event.keyCode != 8 ){
                            event.preventDefault();
                        }
                    }
                    if ((event.keyCode >= 48 && event.keyCode <= 57) ||
                        (event.keyCode >= 96 && event.keyCode <= 105) ||
                        event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
                        event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

                    } else {
                        event.preventDefault();
                    }

                    if($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
                        event.preventDefault();


                });
		 $('.rateJpy').autoNumeric('init',{
                    emptyInputBehavior: 'focus',
                    digitGroupSeparator        : ',',
                    decimalCharacter           : '.',
                    decimalCharacterAlternative: '.',
                    // allowDecimalPadding : false,
                    minimumValue:'0',maximumValue:'999999999999999'
                });

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
                    //$(".state_reason").hide();
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
