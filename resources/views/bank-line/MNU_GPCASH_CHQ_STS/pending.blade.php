@include('_partials.header_content',['breadcrumb'=>['Pending task','Cheque Status']])

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="referenceNo" value=""/>
            <input type="hidden" id="taskId" value=""/>
            <input type="hidden" id="chqOrderId" value=""/>
            <input type="hidden" id="orderNo_id" value=""/>
            <input type="hidden" id="state" value=""/>
            <form id="form-area" class="form-horizontal form-area">
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
                    <div class="box-header">
                        <h3 class="box-title">Request Detail</h3><br>
                    </div>

                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Order Number</label>
                                    <div class="col-md-5">
                                        <label id="orderNo">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Transaction Reference Number</label>
                                    <div class="col-md-5">
                                        <label id="trxReferenceNo">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-status">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Status</label>
                                    <div class="col-md-5">
                                        <label id="statusName">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Request By</label>
                                    <div class="col-md-5">
                                        <label id="requestBy">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Source Account</label>
                                    <div class="col-md-5">
                                        <label id="sourceAccount">-</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="box-header">
                        <h3 class="box-title">Cheque Detail</h3><br>
                    </div>
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Book Type</label>
                                    <div class="col-md-5">
                                        <label id="chequeType">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Number of Books</label>
                                    <div class="col-md-5">
                                        <label id="noOfPages">-</label>
                                    </div>
                                </div>
                            </div>

                            <div id="chargeList"></div>



                            <div class="row stateTotalFee">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Total Debit Amount</label>
                                    <div class="col-md-5">
                                        <label id="totalDebitAmount">-</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Branch</label>
                                    <div class="col-md-5">
                                        <label id="pickupBranch">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end"></label>
                                    <div class="col-md-5">
                                        <label id="branchAddress">-</label>
                                    </div>
                                </div>
                            </div>
                            {{--							<div class="row">--}}
                            {{--								<div class="mb-3 row">--}}
                            {{--									<label class="col-md-3 col-form-label text-end">Pickup Schedule</label>--}}
                            {{--									<div class="col-md-5">--}}
                            {{--										<label id="pickupDate">-</label>--}}
                            {{--									</div>--}}
                            {{--								</div>--}}
                            {{--							</div>--}}
                            {{--							<div class="row">--}}
                            {{--								<div class="mb-3 row">--}}
                            {{--									<label class="col-md-3 col-form-label text-end">at</label>--}}
                            {{--									<div class="col-md-5">--}}
                            {{--										<label id="pickupTime">-</label>--}}
                            {{--									</div>--}}
                            {{--								</div>--}}
                            {{--							</div>--}}



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
    var id = '{{ $service }}';
    var noRef = 'OT'+$('#referenceNo').val();
    $(document).ready(function () {

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
                    $('#address1').text(result.details.address1);
						$('#address2').text(result.details.address2);
						$('#address3').text(result.details.address3);
						$('#organizationUnitCode').text(result.details.organizationUnitCode);
						$('#organizationUnitName').text(result.details.organizationUnitName);
						$('#memberCode').text(result.details.memberCode);
						$('#interBankCode').text(result.details.interBankCode);
                    $('#orderNo_id').val(result.details.orderNo);
                    getDetail()
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

    function getDetail(){
        var orderNo= $('#orderNo_id').val();
        var url_action= 'search';
        var value ={
            orderNo:orderNo,
            currentPage: "1",
            pageSize: "20"
        };
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{value:value,menu:id,action:'DETAIL',url_action:url_action},
            success: function (data) {

                var result = JSON.parse(data);
                if (result.status=="200") {

                    $('.state_detail').show();
                    $('.state_detail_r').show();
                    $('.state_add').hide();

                    var index = result.result.map(function(o) { return o.orderNo; }).indexOf(orderNo.toString());
                    var detail = result.result[index];

                    //new
                    $('#chqOrderId').val(detail.chequeOrderId);
                    $('#orderNo').text(detail.orderNo);
                    $('#trxReferenceNo').text(detail.referenceNo);
                    $('#statusName').text(detail.statusName);
                    $('#requestBy').text(detail.corporateId + ' - ' + detail.corporateName);
                    $('#sourceAccount').text(detail.sourceAccountNo + ' / ' + detail.sourceAccountName + ' ('+detail.sourceAccountCurrency+')');
                    if (detail.chequeType.toString().toLowerCase() === 'cheque') {
                        $('#chequeType').text('Cheque');
                    } else if (detail.chequeType.toString().toLowerCase() === 'bilyet giro') {
                        $('#chequeType').text('Bilyet Giro');
                    }

                    $('#noOfPages').text(detail.noOfPages);
                    $('#pickupBranch').text(detail.branchName);

                    if(detail.branchAddress1 != '' || detail.branchAddress2 !='' || detail.branchAddress3 !=''){
                        $('#branchAddress').text(detail.branchAddress1 + ' '+ detail.branchAddress2 + ' '+ detail.branchAddress3);
                    }

                    $('#pickupDate').text(detail.pickupDate);
                    $('#pickupTime').text(detail.pickupTime);

                    setChargeList(detail.chargeList);

                    if(detail.totalCharge != 0){
                        $('#totalFee').text(detail.transactionCurrency +' '+ detail.totalCharge + ' X ' + detail.noOfPages);
                        $('#totalDebitAmount').text(detail.transactionCurrency +' '+ detail.totalDebitedAmountView);
                        $('.stateTotalFee').show();
                    }else{
                        $('.stateTotalFee').hide();
                    }

                    //declined
                    $('#trxRejectReason').text(detail.reason);

                    //pickedUp
                    $('#pickupID').text(detail.identityType + ' - ' + detail.identityNo);
                    $('#nameID').text(detail.identityName);
                    $('#handoverDate').text(detail.handoverDate);
                    $('#phoneNo').text(detail.mobileNo);


                    if(detail.statusCode == 'NEW REQUEST'){
                        stateDetailNewRequest();
                    }else if (detail.statusCode == 'DECLINED'){
                        stateDetailDeclined();
                    }else if (detail.statusCode == 'READY'){
                        stateDetailReady();
                    }else if (detail.statusCode == 'PICKED UP'){
                        stateDetailPickedUp();
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
    function setChargeList(chargeList){
        var html = '';
        if(chargeList.length >0){
            $.each(chargeList, function (idx, chg) {
                html +='<div class="row"><div class="mb-3 row">';
                if (chg.value != '0' && chg.value != '0.00' && chg.value != '.00') {
                    html += '<label class="col-md-3 col-form-label text-end">' + chg.serviceChargeName + '</label>';
                    html += '<div class="col-md-5"><label>' + chg.currencyName +' '+ chg.value+'</label>';
                }
                html += '</div>';
                html += '</div></div>'
            });
            $('#chargeList').html(html);
        }
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
