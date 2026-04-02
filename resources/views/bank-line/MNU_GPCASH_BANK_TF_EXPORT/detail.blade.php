@include('_partials.header_content',['breadcrumb'=>['Export LC Search','detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="referenceNo" value=""/>
            <input type="hidden" id="dateFrom" value=""/>
            <input type="hidden" id="dateTo" value=""/>
            <input type="hidden" id="corpId" value=""/>
            <input type="hidden" id="currencyCode" value=""/>
            <input type="hidden" id="amountFrom" value=""/>
            <input type="hidden" id="amountTo" value=""/>
            <input type="hidden" id="tabActive" value=""/>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Export LC Detail</h3><br>
                </div>
                <form class="form-horizontal">
                <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Bank Reference No</strong></label>
                                    <div class="col-md-6">
                                        <label id="bankReferenceNo" class="state_view"></label>
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
                                        <label id="corporateName"></label>
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
                                    <label class="col-md-4 col-form-label text-end"><strong>Beneficiary Country</strong></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryCountryName" class="state_view"></label>
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
                                    <label id="tolerancePercentage" class="state_view"></label>
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
                                <!-- <div class="col-md-4">
                                    <label id="shipmentDateMode" class="state_view"></label>
                                </div> -->
                                <div class="col-md-4 state_shipmentdt">
                                    <label id="latestShipmenetDate" class="state_view"></label>
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
                            <h3 class="box-title">Swift Detail</h3><br>
                        </div>
                        <div class="box-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="mb-3 row form-group">
                                        <label class="col-md-2 col-form-label text-end">
                                            <a onClick="$('#swiftModal').modal('show');" style="color: #007bff; cursor: pointer; text-decoration: underline;">View Detail Swift</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">ATTACHMENT DETAIL</h3>
                        </div>
                        <div class="row" style="padding-top: 20px">
                            <div class="mb-3 row form-group fileName1">
                                <label class="col-md-4 col-form-label text-end">File Upload</label>
                                <div class="col-md-6 state_view">
                                    <label id="fileName1">-</label>
                                    <input type="hidden" id="fileId1" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group fileName2">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6 state_view">
                                    <label id="fileName2"></label>
                                    <input type="hidden" id="fileId2" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group fileName3">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6 state_view">
                                    <label id="fileName3"></label>
                                    <input type="hidden" id="fileId3" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group fileName4">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6 state_view">
                                    <label id="fileName4"></label>
                                    <input type="hidden" id="fileId4" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group fileName5">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6 state_view">
                                    <label id="fileName5"></label>
                                    <input type="hidden" id="fileId5" value=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="box-footer">
                    <div class="float-left">
                        <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                    <div class="float-right">
                    </div>
                </div>
                @include('_partials.next_user')
                </form>
            </div>
        </div>
    </div>
</section>

<div id="swiftModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Swift Message</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="detailTransaction">
                <pre id="detailSwift" class="prevent-select">

                </pre>
                <div id="watermark">
                  <p>Copy<br/>
                     <br/>Copy
                  </p>
                </div>

            </div>
            <div class="modal-footer">
                <!-- <div class="float-left">
                    <button type="button" id="print" name="print" class="btn btn-primary" data-bs-dismiss="modal">Print</button>
                </div> -->
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">@lang('form.close')</button>
            </div>
        </div>
    </div>
</div>

<script>
    var oTable;
    var id = '{{ $service }}';
    $(document).ready(function () {

        $('.back').on('click', function () {
            if (type == 'validation') {
                var res = app.setView(id,'landing');
            } else if (type = 'finally') {
                var res = app.setView(id,'landing');
            } else {
                $('.state_edit').show();
                $('#confirm').show();
                $('.state_view').hide();
                $('#submit_view').hide();
                type = 'validation'
            }
        });
    });

    function getDetail(){
        var url_action = 'search';
        var value ={
            referenceNo: $('#referenceNo').val(),
            currentPage: "1",
            pageSize: "20",
            orderBy: {"id": "ASC"}
        };

        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{
                value: value,
                menu: id,
                action: 'DETAIL',
                url_action: url_action,
            },
            success: function (data) {

                var result = JSON.parse(data);
                if (result.status == "200") {
                    type = 'validation';
                    var detail = result.result[0];

                    setField('bankReferenceNo', detail.bankReferenceNo);
                    setField('issueDate', moment(detail.issueDate, 'DD/MM/YYYY').format("DD-MMM-YYYY"));
                    setField('mediaOfIssue', detail.mediaOfIssueName);
                    setField('adviceDate', moment(detail.adviceDate, 'DD/MM/YYYY').format("DD-MMM-YYYY"));
                    setField('applicantName', detail.applicantName);
                    setField('applicantAddress1', detail.applicantAddress1);
                    setField('applicantAddress2', detail.applicantAddress2);
                    setField('applicantAddress3', detail.applicantAddress3);
                    setField('applicantCountryName', detail.applicantCountryName);
                    setField('corporateName', detail.corpName);
                    setField('beneficiaryName', detail.beneficiaryName);
                    setField('beneficiaryAddress1', detail.beneficiaryAddress1);
                    setField('beneficiaryAddress2', detail.beneficiaryAddress2);
                    setField('beneficiaryAddress3', detail.beneficiaryAddress3);
                    setField('beneficiaryCountryName', detail.beneficiaryCountryName);
                    setField('issuingBankName', detail.issuingBankName);
                    setField('issuingBankAddress1', detail.issuingBankAddress1);
                    setField('issuingBankAddress2', detail.issuingBankAddress2);
                    setField('issuingBankAddress3', detail.issuingBankAddress3);
                    setField('issuingBankCountryName', detail.issuingBankCountryName);
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
                    setField('tolerancePercentage', '+' + detail.plusTolerancePercentage + '%  -' + detail.minusTolerancePercentage + '%');
                    //setField('additionalAmount', currencyFormat(detail.additionalAmount));
                    setField('additionalAmount', detail.additionalAmount);
                    setField('expiryDate', moment(detail.expiryDate, 'DD/MM/YYYY').format("DD-MMM-YYYY"));
                    setField('expiryPlace', detail.expiryPlace);
                    // setField('shipmentDateMode', detail.shipmentDateModeName);
                    if (detail.shipmentDateMode == '1') {
                        $('.state_shipmentdt').hide();
                        $('.state_shipmentPeriod').show();
                    } else {
                        $('.state_shipmentdt').show();
                        $('.state_shipmentPeriod').hide();
                    }

                    setField('latestShipmenetDate', moment(detail.latestShipmenetDate, 'DD/MM/YYYY').format("DD-MMM-YYYY"));
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
                    setFieldFileName('fileName1', detail.fileName1);
                    setFieldFileName('fileName2', detail.fileName2);
                    setFieldFileName('fileName3', detail.fileName3);
                    setFieldFileName('fileName4', detail.fileName4);
                    setFieldFileName('fileName5', detail.fileName5);

                    $('#detailSwift').text(detail.swift);

                    // console.log("file id and name ", detail.fileId1, detail.fileName1);
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

    function setFieldFileName(fieldName, value){
        var returnVal = $('#'+fieldName).text(value);
        if(returnVal) {
            $('.'+fieldName).show();
        } else {
            $('.'+fieldName).hide();
        }
        return returnVal;
    }

    function currencyFormat (num) {
        if(num == '' || num == undefined)
            return num;
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

</script>

<style type="text/css">
    #watermark {
      color: #d0d0d0;
    font-size: 100pt;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    position: absolute;
    width: 100%;
    height: 100%;
    margin: 100;
    /*z-index: -2;*/
    left: 720px;
    top: -17px;
    opacity: 50%;
    }
    .prevent-select {
      -webkit-user-select: none; /* Safari */
      -ms-user-select: none; /* IE 10 and IE 11 */
      user-select: none; /* Standard syntax */
    }
</style>
