@include('_partials.header_content',['breadcrumb'=>['Pending task','Export LC Detail']])


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
                                    <label class="col-md-4 col-form-label text-end">Menu</label>
                                    <div class="col-md-6">
                                        <label id="menu_text">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end">Activity</label>
                                    <div class="col-md-6">
                                        <label id="activity_text">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end">Reference Number</label>
                                    <div class="col-md-6">
                                        <label id="noref_text">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end">Activity Date Time</label>
                                    <div class="col-md-6">
                                        <label id="datetime_text">-</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-header">
                        <h3 class="box-title">Export LC Detail</h3><br>
                    </div>
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Bank Reference No</strong></label>
                                    <div class="col-md-6">
                                        <label id="bankRefNo" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Issue Date</strong></label>
									<div class="col-md-6 state_issuedt">
                                        <label id="issueDate" class="state_view"></label>
									</div>
                                </div>
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">GENERAL</h3>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Media of Issue</strong></label>
									<div class="col-md-6">
                                        <label id="mediaOfIssue" class="state_view"></label>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Advise Date</strong></label>
                                    <div class="col-md-6 state_advisedt">
                                        <label id="adviceDate" class="state_view"></label>
									</div>
                                </div>
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">APPLICANT DETAIL</h3>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Applicant Name</strong></label>
                                    <div class="col-md-6">
                                        <label id="applicantName" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Applicant Address</strong></label>
                                    <div class="col-md-6">
                                        <label id="applicantAddress1" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <label id="applicantAddress2" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <label id="applicantAddress3" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Applicant Country</strong></label>
                                    <div class="col-md-6 state_view">
                                        <label id="applicantCountryName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">BENEFICIARY DETAIL</h3>
                            </div>
							<div class="row" style="padding-top: 20px">
								<div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Corporate ID</strong></label>
                                    <div class="col-md-6 state_view">
                                        <label id="corpId"></label>
                                    </div>
								</div>
							</div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Beneficiary Name</strong></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryName" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Beneficary Address</strong></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryAddress1" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryAddress2" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryAddress3" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Beneficiary Country<strong></label>
                                    <div class="col-md-6 state_view">
                                        <label id="beneficiaryCountryName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">ISSUING BANK DETAIL</h3>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Issuing Bank Name</strong></label>
                                    <div class="col-md-6">
                                        <label id="issuingBankName" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Issuing Bank Address</strong></label>
                                    <div class="col-md-6">
                                        <label id="issuingBankAddress1" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <label id="issuingBankAddress2" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <label id="issuingBankAddress3" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Issuing Bank Country</strong></label>
                                    <div class="col-md-6 state_view">
                                        <label id="issuingBankCountryName"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">CONTRACT DETAIL</h3>
                        </div>
                        <div class="row" style="padding-top: 20px">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Transferable</strong></label>
                                <div class="col-md-6">
                                    <label id="transferable" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Confirming Instruction</strong></label>
                                <div class="col-md-6">
                                    <label id="confirmingInst" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Bank Confirmation</strong></label>
                                <div class="col-md-6">
                                    <label id="bankConfirming" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Credit Available By</strong></label>
                                <div class="col-md-6">
                                    <label id="creditAvailableBy" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Payment / Draft At</strong></label>
                                <div class="col-md-6 state_view">
                                    <label id="paymentDraftAt"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row state_paymentAtUsanceUpas">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-1 state_paymentAtUsance">
                                    <label id="usanceDay" class="state_view"></label>
                                </div>
                                <div class="col-md-1 state_paymentAtUpas">
                                    <label id="upasNote" class="state_view"></label>
                                </div>
                                <div class="col-md-1">
                                    <label id="usanceUpasOpt1" class="state_view"></label>
                                </div>
                                <div class="col-md-4">
                                    <label id="usanceUpasOpt2" class="state_view"></label>
                                </div>
                                <div class="col-md-4 state_paymentAtUsanceUpas_other">
                                    <label id="usanceUpasOt" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Currency</strong></label>
                                <div class="col-md-6 state_view">
                                    <label id="currency"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Amount</strong></label>
                                <div class="col-md-6">
                                    <label id="amount" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Tolerance Percentage</strong></label>
                                <div class="col-md-6">
                                    <label id="" class="state_view">Tolerance</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong></strong></label>
                                <div class="col-md-6">
                                    <label id="plusTolerancePercentage" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Additional Amount Covered</strong></label>
                                <div class="col-md-6">
                                    <label id="additionalAmount" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Expiry Date</strong></label>
                                <div class="col-md-6 state_expiryDate">
                                    <label id="expiryDate" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Expiry Place</strong></label>
                                <div class="col-md-6">
                                    <label id="expiryPlace" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">GOODS AND SHIPMENT</h3>
                        </div>
                        <div class="row" style="padding-top: 20px">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Shipment Date</strong></label>
                                <div class="col-md-4 state_shipmentdt">
                                    <label id="latestShipmentDate" class="state_view"></label>
                                </div>
                                <div class="col-md-4 state_shipmentPeriod">
                                    <label id="shipmentPeriod" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Period of Presentation</strong></label>
                                <div class="col-md-6">
                                    <label id="periodPresentation" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Partial Shipment</strong></label>
                                <div class="col-md-6">
                                    <label id="partialShipment" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Transhipment</strong></label>
                                <div class="col-md-6">
                                    <label id="transhipment" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="box-header">
                            <h3 class="box-title">GOODS AND SHIPMENT</h3>
                        </div>
                        <div class="row" style="padding-top: 20px">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Other Information</strong></label>
                                <div class="col-md-6">
                                    <label id="otherInformation" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">ATTACHMENT DETAIL</h3>
                        </div>
                        <div class="row" style="padding-top: 20px">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">File Upload</label>
                                <div class="col-md-6 state_view">
                                    <!-- <label id="fileName1"></label>-->
                                    <label>
                                        <a onClick="downloadFile('1');" id="fileName1">-</a>
                                    </label>
                                    <input type="hidden" id="fileId1" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6 state_view">
                                    <!-- <label id="fileName2"></label>-->
                                    <label>
                                        <a onClick="downloadFile('2');" id="fileName2">-</a>
                                    </label>
                                    <input type="hidden" id="fileId2" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6 state_view">
                                    <!-- <label id="fileName3"></label> -->
                                    <label>
                                        <a onClick="downloadFile('3');" id="fileName3">-</a>
                                    </label>
                                    <input type="hidden" id="fileId3" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6 state_view">
                                    <!-- <label id="fileName4"></label> -->
                                    <label>
                                        <a onClick="downloadFile('4');" id="fileName4">-</a>
                                    </label>
                                    <input type="hidden" id="fileId4" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6 state_view">
                                    <!-- <label id="fileName5"></label> -->
                                    <label>
                                        <a onClick="downloadFile('5');" id="fileName5">-</a>
                                    </label>
                                    <input type="hidden" id="fileId5" value=""/>
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
    var noRef = 'OT'+$('#referenceNo').val();
    $(document).ready(function () {
        $('#validation').hide();
        $('#updateStatus').hide();

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
                    var detail = result.details;

                    setField('bankRefNo', detail.bankRefNo);
                    setField('issueDate', formatDate(detail.issueDate));
                    setField('mediaOfIssue', detail.mediaOfIssueName);
                    setField('adviceDate', formatDate(detail.adviceDate));
                    setField('applicantName', detail.applicantName);
                    setField('applicantAddress1', detail.applicantAddress1);
                    setField('applicantAddress2', detail.applicantAddress2);
                    setField('applicantAddress3', detail.applicantAddress3);
                    setField('applicantCountryName', detail.applicantCountryCode + ' - ' + detail.applicantCountryName);
                    setField('corpId', detail.corpId);
                    setField('beneficiaryName', detail.beneficiaryName);
                    setField('beneficiaryAddress1', detail.beneficiaryAddress1);
                    setField('beneficiaryAddress2', detail.beneficiaryAddress2);
                    setField('beneficiaryAddress3', detail.beneficiaryAddress3);
                    setField('beneficiaryCountryName', detail.beneficiaryCountryCode + ' - ' + detail.beneficiaryCountryName);
                    setField('issuingBankName', detail.issuingBankName);
                    setField('issuingBankAddress1', detail.issuingBankAddress1);
                    setField('issuingBankAddress2', detail.issuingBankAddress2);
                    setField('issuingBankAddress3', detail.issuingBankAddress3);
                    setField('issuingBankCountryName', detail.issuingBankCountryCode + '-' + detail.issuingBankCountryName);
                    setField('transferable', detail.transferableName);
                    setField('confirmingInst', detail.confirmingInstName);
                    setField('bankConfirming', detail.bankConfirmingName);
                    setField('creditAvailableBy', detail.creditAvailableByName);
                    setField('paymentDraftAt', detail.paymentDraftAtName);

                    if(detail.paymentDraftAt == '1' || detail.paymentDraftAt == '2') {
                        $('.state_paymentAtUsanceUpas').show();
                        if(detail.paymentDraftAt == '1') {
                            $('.state_paymentAtUsance').show();
                            $('.state_paymentAtUpas').hide();
                        } else {
                            $('.state_paymentAtUsance').hide();
                            $('.state_paymentAtUpas').show();
                        }
                    }else {
                        $('.state_paymentAtUsanceUpas').hide();
                    }

                    setField('usanceDay', detail.usanceDay);
                    setField('upasNote', detail.upasNote);
                    setField('usanceUpasOpt1', detail.usanceUpasOpt1Name);
                    setField('usanceUpasOpt2', detail.usanceUpasOpt2Name);
                    setField('usanceUpasOt', detail.usanceUpasOt);
                    setField('currency', detail.currency);
                    setField('amount', currencyFormat(detail.amount));
                    setField('plusTolerancePercentage', '+' + detail.plusTolerancePercentage + '%   /    -' + detail.minusTolerancePercentage + '%');
                    setField('additionalAmount', detail.additionalAmount);
                    //setField('additionalAmount', currencyFormat(detail.additionalAmount));
                    setField('expiryDate', formatDate(detail.expiryDate));
                    setField('expiryPlace', detail.expiryPlace);
                    // setField('shipmentDateMode', detail.shipmentDateModeName);
                    if (detail.shipmentDateMode == '1') {
                        $('.state_shipmentdt').hide();
                        $('.state_shipmentPeriod').show();
                    } else {
                        $('.state_shipmentdt').show();
                        $('.state_shipmentPeriod').hide();
                    }
                    setField('latestShipmentDate', formatDate(detail.latestShipmenetDate));
                    setField('shipmentPeriod', detail.shipmentPeriod);
                    if (detail.periodPresentation != '' && detail.periodPresentation.trim() != '') {
                    setField('periodPresentation', detail.periodPresentation + ' day(s) after shipment');
                    }
                    setField('partialShipment', detail.partialShipmentName);
                    setField('transhipment', detail.transhipmentName);
                    setField('otherInformation', detail.otherInformation);
                    setField('fileId1', detail.fileId1);
                    setField('fileId2', detail.fileId2);
                    setField('fileId3', detail.fileId3);
                    setField('fileId4', detail.fileId4);
                    setField('fileId5', detail.fileId5);
                    setField('fileName1', detail.fileName1);
                    setField('fileName2', detail.fileName2);
                    setField('fileName3', detail.fileName3);
                    setField('fileName4', detail.fileName4);
                    setField('fileName5', detail.fileName5);

                } else {
                    flash('warning', result.message);
                }


            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            },
            complete: function(data) {
                $('.table-hidden').show();

            }
        });
    }

    function setField(fieldName, value) {
        return $('#'+fieldName).text(value);
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

    function currencyFormat (num) {
        if(num == '' || num == undefined)
            return num;
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

    function formatDate(dateVal) {
        return moment(dateVal, 'DD/MM/YYYY').format("DD-MMM-YYYY")
    }

    function downloadFile(num) {

        let fileName = $('#fileName'+num).text();
        let fileId = $('#fileId'+num).text();
        const urlGet = "download?fileName="+fileName+"&fileId="+fileId+"&type=B";
        
        $.ajax({
            url: 'downloadTrade',
            method: 'POST',
            cache: false,
            data:{
                url_action : urlGet,
                service:'MNU_GPCASH_BANK_TF_EXPORT',
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
@include('form.script')
