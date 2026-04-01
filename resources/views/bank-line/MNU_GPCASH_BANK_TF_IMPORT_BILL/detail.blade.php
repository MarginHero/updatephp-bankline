@include('_partials.header_content',['breadcrumb'=>['Import Bills Search','detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Import Bills Detail</h3><br>
                </div>
                <form class="form-horizontal">
                <div class="box-body">
                        <div class="container-fluid">
                            <div class="box-header">
                                <h3 class="box-title">LC INFORMATION</h3>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Corporate ID</strong></label>
                                    <div class="col-md-6">
                                        <label id="corpId"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Coporate Name</strong></label>
									<div class="col-md-6">
                                        <label id="corpName"></label>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Bank Reference Number</strong></label>
									<div class="col-md-6 col-form-label">
                                        <a onClick="unlockAction(this);" style="color:#007bff; cursor:pointer; text-decoration:underline;">
                                            <label id="bankRefNo" style="color:#007bff; cursor:pointer;"></label>
                                        </a>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Issued Date</strong></label>
									<div class="col-md-6">
                                        <label id="issuedDate"></label>
									</div>
                                </div>
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">APPLICANT DETAIL</h3>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Applicant Name</strong></label>
                                    <div class="col-md-6">
                                        <label id="applicantName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Applicant Address</strong></label>
                                    <div class="col-md-6">
                                        <label id="applicantAddress1"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <label id="applicantAddress2"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <label id="applicantAddress3"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Application Country</strong></label>
                                    <div class="col-md-6">
                                        <label id="applicantCountryName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">BENEFICIARY DETAIL</h3>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Beneficiary Name</strong></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Beneficary Address</strong></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryAddress1"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryAddress2"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryAddress3"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Beneficiary Country</strong></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryCountryName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">BILLS DETAIL</h3>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Bank Presentation Reference No.</strong></label>
                                    <div class="col-md-6">
                                        <label id="bankPresentationRefNo"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Bill Reference No.</strong></label>
                                    <div class="col-md-6">
                                        <label id="billRefNo"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Maturity Date</strong></label>
                                    <div class="col-md-6">
                                        <label id="maturityDate"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Letter of Credit Amount</strong></label>
                                    <div class="col-md-6">
                                        <label id="lcAmount"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-5 col-form-label text-end"><strong>Bill Amount</strong></label>
                                    <div class="col-md-6">
                                        <label id="billAmount"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">DOCUMENT RECEIVED DETAIL</h3>
                        </div>
                        <div class="row" style="padding-top: 20px">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end"><strong>Discrepancy</strong></label>
                                <div class="col-md-6">
                                    <label id="discrepancy1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end"><strong>Notes</strong></label>
                                <div class="col-md-6">
                                    <label id="notes1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">ATTACHMENT DETAIL</h3>
                        </div>
                        <div class="row attachmentClass">
                        </div>
                        <div class="row state_edit">
                            <div class="mb-3 row">
                                <label class="col-md-5 col-form-label text-end">Upload Documents</label>
                                <div class="col-md-7">
                                    <div style="text-align:right; margin-bottom:8px; padding-right:60px;">
                                        <button type="button" id="addFile" name="addFile" class="btn btn-default" style="border:1px solid #aaa;">Upload More</button>
                                    </div>
                                    <div id="upload-container"></div>
                                    <div id="errorFileFormat" style="display:none; color:red; margin-top:5px;"></div>
                                </div>
                            </div>
                        </div>
                        <div id="upload-document"></div>
                    </div>
                </form>
                <div class="box-footer">
                    <div class="float-left">
                        <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                    </div>
                    <div class="float-right">
                        <button type="button" id="save_screen" name="save_screen" class="btn btn-default" onclick="save_pdf();">@lang('form.save_pdf')</button>
                        <button type="button" id="upload" name="upload" class="btn btn-primary">@lang('form.upload')</button>
                        <button type="button" id="confirm" name="confirm" class="btn btn-primary">@lang('form.confirm')</button>
                        <button type="button" id="submit_view" name="submit_view" class="btn btn-primary">@lang('form.submit')</button>
                        <button type="button" id="next_user" name="next_user" class="btn btn-info" style="display:none">@lang('form.next_user')</button>
                        <button type="button" id="done" name="done" class="btn btn-primary done" style="display:none">@lang('form.done')</button>
                    </div>
                </div>
                @include('_partials.next_user')
                </form>
            </div>
        </div>
    </div>
</section>
<div id="transactionModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="position:relative;">
                <h4 class="modal-title">Detail Transaction Import LC</h4>
                <button type="button" class="close" onclick="$('#transactionModal').modal('hide');" style="position:absolute; right:15px; top:10px; font-size:22px; line-height:1;">&times;</button>
            </div>
            <div class="modal-body">
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Issuance LC</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Transaction Status</label>
                                <div class="col-md-6">
                                    <label id="transStatus">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Transaction Reference No.</label>
                                <div class="col-md-6">
                                    <label id="transNo1">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title text-uppercase">General</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Media of Issue</label>
                                <div class="col-md-6">
                                    <label id="media_of_issue">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Application Date</label>
                                <div class="col-md-6">
                                    <label id="application_date">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Applicant Detail</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Applicant Name</label>
                                <div class="col-md-6">
                                    <label id="applicant_name">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Applicant Address</label>
                                <div class="col-md-6">
                                    <label id="applicant_addr1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="applicant_addr2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="applicant_addr3">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Applicant Country</label>
                                <div class="col-md-6">
                                    <label id="applicant_ctry">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Contact Person Phone No.</label>
                                <div class="col-md-6">
                                    <label id="cp_phone">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Contact Person Fax No.</label>
                                <div class="col-md-6">
                                    <label id="cp_fax">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">NPWP</label>
                                <div class="col-md-6">
                                    <label id="npwp">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">API</label>
                                <div class="col-md-6">
                                    <label id="api">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Beneficiary Detail</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <!-- <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Beneficiary Type</label>
                                <div class="col-md-6">
                                    <label id="bene_type">-</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Beneficiary Name</label>
                                <div class="col-md-6">
                                    <label id="bene_name">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Beneficiary Address</label>
                                <div class="col-md-6">
                                    <label id="bene_addr1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="bene_addr2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="bene_addr3">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Beneficiary Country</label>
                                <div class="col-md-6">
                                    <label id="bene_ctry">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Beneficiary Phone No.</label>
                                <div class="col-md-6">
                                    <label id="bene_phone">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Beneficiary Fax No.</label>
                                <div class="col-md-6">
                                    <label id="bene_fax">-</label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Save to Beneficiary Contact</label>
                                <div class="col-md-6">
                                    <label id="save_to_bene">-</label>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Advising Bank Detail</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Advising Bank Name</label>
                                <div class="col-md-6">
                                    <label id="adv_bank_name">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Advising Bank Address</label>
                                <div class="col-md-6">
                                    <label id="adv_bank_addr1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="adv_bank_addr2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="adv_bank_addr3">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Advising Bank Country</label>
                                <div class="col-md-6">
                                    <label id="adv_bank_ctry">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Advising Bank Swift Code</label>
                                <div class="col-md-6">
                                    <label id="adv_bank_swift">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Contract Detail</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Customer Reference No.</label>
                                <div class="col-md-6">
                                    <label id="cust_ref_no">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Transferable</label>
                                <div class="col-md-6">
                                    <label id="transferable">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">LC Type</label>
                                <div class="col-md-6">
                                    <label id="lc_type">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Confirming Instruction</label>
                                <div class="col-md-6">
                                    <label id="confirm_inst">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Credit Available By</label>
                                <div class="col-md-6">
                                    <label id="credit_avlb_by">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Payment/Draft At</label>
                                <div class="col-md-6">
                                    <label id="payment_draft_at">-</label><label id="payment_draft_at1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Currency / Amount</label>
                                <div class="col-md-6">
                                    <label id="currency">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Tolerance Percentage</label>
                                <div class="col-md-6">
                                    <label id="tolerance">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="tolerance1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Additionanl Amount Covered</label>
                                <div class="col-md-6">
                                    <label id="addt_amount_covr"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Expiry Date</label>
                                <div class="col-md-6">
                                    <label id="expiry_date">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Expiry Place</label>
                                <div class="col-md-6">
                                    <label id="expiry_place">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Charges Detail</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Issuing Bank Charges Paid By</label>
                                <div class="col-md-6">
                                    <label id="charge_by_bank">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Confirming Charges Paid By</label>
                                <div class="col-md-6">
                                    <label id="charge_by_confirm">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Outside Country Charges Paid By</label>
                                <div class="col-md-6">
                                    <label id="charge_by_outside">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Reimbursing Bank Charge Paid By</label>
                                <div class="col-md-6">
                                    <label id="charge_by_reimbursing">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Goods and Shipment</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Shipment Date</label>
                                <div class="col-md-6">
                                    <label id="ship_date">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="ship_date1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Period of Presentation</label>
                                <div class="col-md-6">
                                    <label id="period_present">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Narrative of Presentation</label>
                                <div class="col-md-6">
                                    <label id="narrative_present">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Partial Shipment</label>
                                <div class="col-md-6">
                                    <label id="partial_shipment">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Transhipment</label>
                                <div class="col-md-6">
                                    <label id="transhipment">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Port of Loading</label>
                                <div class="col-md-6">
                                    <label id="port_loading">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Port of Discharge</label>
                                <div class="col-md-6">
                                    <label id="port_discharge">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Incoterms</label>
                                <div class="col-md-6">
                                    <label id="incoterms">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Name of Place</label>
                                <div class="col-md-6">
                                    <label id="name_of_place">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Goods Detail</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Origin Country of Goods</label>
                                <div class="col-md-6">
                                    <label id="origin_ctry_goods">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Name of Goods</label>
                                <div class="col-md-6">
                                    <label id="name_of_goods1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods3">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods4">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods5">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Type of Goods</label>
                                <div class="col-md-6">
                                    <label id="type_of_goods1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="type_of_goods2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Quality of Goods</label>
                                <div class="col-md-6">
                                    <label id="qlty_of_goods">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Volume of Goods</label>
                                <div class="col-md-6">
                                    <label id="vol_of_goods">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Price per Unit</label>
                                <div class="col-md-6">
                                    <label id="price_per_unit">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Contract No.</label>
                                <div class="col-md-6">
                                    <label id="contract_no1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="contract_no2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">No. Pos Tarif(HS)</label>
                                <div class="col-md-6">
                                    <label id="no_pos_tarif">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Incoterms</label>
                                <div class="col-md-6">
                                    <label id="incoterms1">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Documents</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Documents Required</label>
                                <div class="col-md-6">
                                    <label style="white-space: pre;" id="doc_required">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Additional Conditions</label>
                                <div class="col-md-6">
                                    <label style="white-space: pre;" id="additional_cond">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Others</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Other Information</label>
                                <div class="col-md-6">
                                    <label id="other_info">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Account No. for Fees</label>
                                <div class="col-md-6">
                                    <label id="fee_acct_no">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Attachment Detail</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">File Upload</label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('file_upload1');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="file_upload1">-</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('file_upload2');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="file_upload2">-</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('file_upload3');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="file_upload3">-</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('file_upload4');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="file_upload4">-</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('file_upload5');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="file_upload5">-</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title text-uppercase">BI Regulation</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label ">Affiliate</label>
                                <div class="col-md-6">
                                    <label id="affiliate">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
				<button type="button" class="btn btn-default" onclick="$('#transactionModal').modal('hide');">@lang('form.close')</button>
			</div>
        </div>
    </div>
</div>
<script>
    var id = '{{ $service }}';
    var files;
    var noRef;
    var parentDetail;
    $(document).ready(function () {
        $('.upload_state').hide();
        $('.state_edit').hide();
        $('#submit_view').hide();
        $('#confirm').hide();

        //hide file upload
        for (var i = 2; i < 21; i++) {
            $('.file'+i).hide();
             $('#upload_file'+i).hide();
        }

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

        let formCounter = 0;
        let uploadIndex = 1;
        // let counterDelete = []
        let arrFile = []
        const maxForms = 20;

        var upload1 = true;
        var upload2 = false;
        var upload3 = false;
        var upload4 = false;
        var upload5 = false;
        var upload6 = false;
        var upload7 = false;
        var upload8 = false;
        var upload9 = false;
        var upload10 = false;
        var upload11 = false;
        var upload12 = false;
        var upload13 = false;
        var upload14 = false;
        var upload15 = false;
        var upload16 = false;
        var upload17 = false;
        var upload18 = false;
        var upload19 = false;
        var upload20 = false;

        $("#addFile").on("click", function () {
            if (formCounter < maxForms) {
                formCounter++;
                uploadIndex++;
                createUploadRow(uploadIndex);
            } else {
                alert("Maximum limit reached: " + maxForms);
            }
        });

        $("#upload-container").on("change", "input[type='file']", function () {
            const input = this;
            const file = input.files[0];
            const fileNumber = $(this).attr("id").replace("fileName", "");

            if (file) {
                $(`#fileLabel${fileNumber}`).text(file.name);
                const formData = new FormData();
                formData.append("file", file);
                formData.append("menu", "{{ $service }}");
                formData.append("fileNumber", fileNumber);

                // Validasi dan unggah file
                console.log(file, formData, fileNumber);
                validateAndUploadFile(file, formData, fileNumber);
            }
        });

        function createUploadRow(fileNumber) {
            const uploadRow = `
                <div id="upload_file${fileNumber}" style="display:flex; align-items:flex-start; justify-content:space-between; margin-bottom:10px; padding-right:60px;">
                    <div>
                        <input name="file" type="file" id="fileName${fileNumber}" accept=".pdf, .doc, .docx, .xls, .xlsx" style="display:none;" />
                        <div style="display:flex; align-items:center; gap:8px;">
                            <button type="button" class="btn btn-default" style="border:1px solid #aaa;" onclick="document.getElementById('fileName${fileNumber}').click()">Choose File</button>
                            <span id="fileLabel${fileNumber}" style="color:#555; font-size:13px;">No file chosen</span>
                        </div>
                        <div><small><i>* Allowed File Type: *pdf, *doc, *docx, *xls and *xlsx.</i></small></div>
                        <div><small>Files must be less than 5 MB.</small></div>
                    </div>
                    <div style="margin-left:10px; flex-shrink:0;">
                        <button type="button" class="btn btn-danger" onclick="deleteFile(${fileNumber})">Clear</button>
                    </div>
                </div>`;
            $("#upload-container").append(uploadRow);
        }


        // Function to delete an upload row
        function deleteFile(fileNumber) {
            $(`#upload_file${fileNumber}`).remove();

            let arrFileTemp = [];
            $.each(arrFile, function(index, file) {
                if(file.fileNumber != fileNumber){
                    arrFileTemp.push(file);
                }
            });

            arrFile = arrFileTemp;
            console.log(arrFile);

            formCounter--;
        }
        window.deleteFile = deleteFile;

        function validateAndUploadFile(file, formData, fileNumber) {
            const extension = file.name.split(".").pop().toLowerCase();

            // Check file format
            const validExtensions = ["pdf", "xls", "xlsx", "doc", "docx"];
            if (!validExtensions.includes(extension)) {
                $("#errorFileFormat")
                    .text(`Invalid file format.`)
                    .css("color", "red")
                    .show();
                return;
            }

            // Check file size
            const sizeInMb = file.size / (1024 * 1024);
            if (sizeInMb > 5) {
                $("#errorFileFormat")
                    .text(`File size exceeds 5MB (${sizeInMb.toFixed(2)} MB).`)
                    .css("color", "red")
                    .show();
                return;
            }

            // Clear any error messages
            $("#errorFileFormat").text("").hide();

            // Upload the file using the combined formData
            uploadFile(formData, fileNumber);
        }

        // Function to upload the file
        function uploadFile(formData, fileNumber) {
            $.ajax({
                type: "POST",
                enctype: "multipart/form-data",
                url: "uploadTrade",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 300000,
                async: false,
                xhrFields: {
                    withCredentials: true,
                },
                headers: { "x-xsrf-token": "{{ csrf_token() }}" },
                success: function (data) {
                    const result = JSON.parse(data);
                    if (result.status == "200") {
                        arrFile.push({
                            filename: result.fileName,
                            fileId: result.fileId,
                            fileNumber:fileNumber
                        })
                        // if (counterDelete.length !== 0) {
                        //     const lastElement = counterDelete.pop();
                        //     $(`#fileName${lastElement}_view`).text(result.fileName);
                        //     $(`#fileId${lastElement}`).val(result.fileId);

                        // } else {
                        //     $(`#fileName${fileNumber}_view`).text(result.fileName);
                        //     $(`#fileId${fileNumber}`).val(result.fileId);
                        // }
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    const msg = "{{ trans('form.conn_error') }}";
                    flash("warning", msg);
                    console.log(xhr.status + ", " + ajaxOptions + ", " + thrownError);
                },
            });
        }

        $('#upload').on('click', function () {
            $('.state_edit').show();
            $('#confirm').show();
            $('#upload').hide();

            if (formCounter < maxForms) {
                formCounter++;
                createUploadRow(formCounter);
            } else {
                alert("Maximum limit reached: " + maxForms);
            }
        });

        $('#confirm').on('click', function () {
             $('#form-area').validator('validate');
            if ($('#form-area').validator('validate').has('.has-error').length!=0){
                return;
            }
            $('.state_edit').hide();
            $('.upload_state').show();
            $('#submit_view').show();
            $('#confirm').hide();
            $('#save_screen').hide();

            $.each(arrFile, function(index, file) {
                // Tentukan label untuk indeks pertama
                let label = index === 0 ? "Upload Documents" : "";

                // Template row HTML
                let uploadRow = `
                    <div class="row file${index + 1} upload_state">
                        <div class="mb-3 row">
                            <label class="col-md-5 upload_state col-form-label text-end">${label}</label>
                            <div class="col-md-6 upload_state">
                                <label id="fileName${index + 1}_view">${file.filename}</label>
                                <input type="hidden" id="fileId${index + 1}" value="${file.fileId}"/>
                            </div>
                        </div>
                    </div>
                `;

                // Append row ke elemen #upload-document
                $("#upload-document").append(uploadRow);
            });

            for (var i = 1; i < 21; i++) {
                if ($(`#fileName${i}_view`).text().trim() !== '') {
                    eval(`upload${i} = true;`);
                    $(`.file${i}`).show();
                } else {
                    $(`.file${i}`).hide();
                }
            }

        });
        $('#submit_view').on('click', function () {
            $(this).prop('disabled',true);
            var content='{{trans('form.confirm_add')}}';

            $.confirm({
                title: '{{trans('form.submit')}}',
                content: content,
                buttons: {

                    cancel: {
                        text: '{{trans('form.cancel')}}',
                        btnClass: 'btn-default',
                        action: function(){
                            $('#submit_view').prop('disabled',false);
                        }
                    },
                    confirm: {
                        text: '{{trans('form.confirm')}}',
                        btnClass: 'btn-primary',
                        action: function(){
                            submitData();
                        }
                    }

                }
            });
        })

        $('.done').on('click', function () {
           var res = app.setView(id,'landing');
        });


        function submitData(){
            var action = 'CREATE'
            var url_action = 'submit'
            var value = {
                bankRefNo: $('#bankRefNo').text(),
                fileName1: '',
                fileId1: '',
                fileName2: '',
                fileId2: '',
                fileName3: '',
                fileId3: '',
                fileName4: '',
                fileId4: '',
                fileName5: '',
                fileId5: '',
                fileName6: '',
                fileId6: '',
                fileName7: '',
                fileId7: '',
                fileName8: '',
                fileId8: '',
                fileName9: '',
                fileId9: '',
                fileName10: '',
                fileId10: '',
                fileName11: '',
                fileId11: '',
                fileName12: '',
                fileId12: '',
                fileName13: '',
                fileId13: '',
                fileName14: '',
                fileId14: '',
                fileName15: '',
                fileId15: '',
                fileName16: '',
                fileId16: '',
                fileName17: '',
                fileId17: '',
                fileName18: '',
                fileId18: '',
                fileName19: '',
                fileId19: '',
                fileName20: '',
                fileId20: '',
                ...parentDetail,
            };
            if(upload1){
                value.fileName1 = $('#fileName1_view').text();
                value.fileId1 = $('#fileId1').val();
            }
            if(upload2){
                value.fileName2 = $('#fileName2_view').text();
                value.fileId2 = $('#fileId2').val();
            }
            if(upload3){
                value.fileName3 = $('#fileName3_view').text();
                value.fileId3 = $('#fileId3').val();
            }
            if(upload4){
                value.fileName4 = $('#fileName4_view').text();
                value.fileId4 = $('#fileId4').val();
            }
            if(upload5){
                value.fileName1 = $('#fileName5_view').text();
                value.fileId1 = $('#fileId5').val();
            }
            if(upload6){
                value.fileName6 = $('#fileName6_view').text();
                value.fileId6 = $('#fileId6').val();
            }
            if(upload7){
                value.fileName7 = $('#fileName7_view').text();
                value.fileId7 = $('#fileId7').val();
            }
            if(upload8){
                value.fileName8 = $('#fileName8_view').text();
                value.fileId8 = $('#fileId8').val();
            }
            if(upload9){
                value.fileName9 = $('#fileName9_view').text();
                value.fileId9 = $('#fileId9').val();
            }
            if(upload10){
                value.fileName10 = $('#fileName10_view').text();
                value.fileId10 = $('#fileId10').val();
            }
            if(upload11){
                value.fileName11 = $('#fileName11_view').text();
                value.fileId11 = $('#fileId11').val();
            }
            if(upload12){
                value.fileName12 = $('#fileName12_view').text();
                value.fileId12 = $('#fileId12').val();
            }
            if(upload13){
                value.fileName13 = $('#fileName13_view').text();
                value.fileId13 = $('#fileId13').val();
            }
            if(upload14){
                value.fileName14 = $('#fileName14_view').text();
                value.fileId14 = $('#fileId14').val();
            }
            if(upload15){
                value.fileName15 = $('#fileName15_view').text();
                value.fileId15 = $('#fileId15').val();
            }
            if(upload16){
                value.fileName16 = $('#fileName16_view').text();
                value.fileId16 = $('#fileId16').val();
            }
            if(upload17){
                value.fileName17 = $('#fileName17_view').text();
                value.fileId17 = $('#fileId17').val();
            }
            if(upload18){
                value.fileName18 = $('#fileName18_view').text();
                value.fileId18 = $('#fileId18').val();
            }
            if(upload19){
                value.fileName19 = $('#fileName19_view').text();
                value.fileId19 = $('#fileId19').val();
            }
            if(upload20){
                value.fileName20 = $('#fileName20_view').text();
                value.fileId20 = $('#fileId20').val();
            }

            $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {"_token": "{{ csrf_token() }}",
                action:action,
                url_action:url_action,
                menu: id,
                value: value
            },
            success: function (data) {
                $('#confirm').prop('disabled',false);
                var result = JSON.parse(data);
                if (result.status=="200") {
                    type = 'finally';
                    $('#submit_view').hide();
                    $('#done').show();
                    flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                } else {
                    flash('warning',result.message);
                }
            }, error: function (xhr, ajaxOptions, thrownError) {
                //$('#confirm').prop('disabled',false);
                flash('warning', 'Form Submit Failed');
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }
            });
        }
    });

    function getDetail(idBill){
        var url_action = 'search';
        var value ={
            // bankRefNo: referenceNo,
            id:idBill,
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
                    var index = result.result.map(function(o) { return o.id; }).indexOf(idBill.toString());
                    var detail = result.result[index];
                    var lcDetail = detail.detailsLC;

                    //set to variable for submit
                    parentDetail = detail;
                    //==================================== DETAIL IMPORT ===================================//
                    setField('corpId', detail.corpId);
                    setField('corpName', detail.corpName);
                    setField('bankRefNo', detail.bankRefNo);
                    setField('issuedDate', detail.issuedDate);

                    setField('applicantName', detail.applicantName);
                    setField('applicantAddress1', detail.applicantAddress1);
                    setField('applicantAddress2', detail.applicantAddress2);
                    setField('applicantAddress3', detail.applicantAddress3);
                    setField('applicantCountryName', detail.applicantCountryName);

                    setField('beneficiaryName', detail.beneficiaryName);
                    setField('beneficiaryAddress1', detail.beneficiaryAddress1);
                    setField('beneficiaryAddress2', detail.beneficiaryAddress2);
                    setField('beneficiaryAddress3', detail.beneficiaryAddress3);
                    setField('beneficiaryCountryName', detail.beneficiaryCountryName);

                    setField('bankPresentationRefNo', detail.bankPresentationRefNo);
                    setField('billRefNo', detail.billRefNo);
                    setField('maturityDate', detail.maturityDate);
                    setField('lcAmount', detail.lcCurrency + ' ' + currencyFormat(detail.lcAmount) + ' ( +'+detail.tolerancePlus+'% / -'+detail.toleranceMinus+'% )');
                    setField('billAmount', detail.billCurrency + ' '+currencyFormat(detail.billAmount));

                    if (detail.discrepancy != '') {
                        setField('discrepancy1', detail.discrepancy);
                    }

                    if (detail.notes1 != '') {
                        setField('notes1', detail.notes1);
                    }

                    //==================================== DETAIL IMPORT ===================================//

                    console.log(detail.files);
                    if(detail.files){
                   setAttachmentDetail(detail.files);
                    }
                    // console.log("file id and name ", detail.fileId1, detail.fileName1);

                    // =================================== LC DETAIL ====================================
                    // Modal
                    $('#transStatus').text(lcDetail.transactionStatus);
                    $('#transNo1').text(lcDetail.trxRefNo);
                    // General
                    $('#media_of_issue').text(lcDetail.mediaOfIssueCode);
                    $('#application_date').text(lcDetail.applicationDate);
                    $('#applicant_name').text(lcDetail.applicantName);
                    $('#applicant_addr1').text(lcDetail.applicantAddress1);
                    $('#applicant_addr2').text(lcDetail.applicantAddress2);
                    $('#applicant_addr3').text(lcDetail.applicantAddress3);
                    $('#applicant_ctry').text(lcDetail.applicantCountryName);
                    $('#cp_phone').text(lcDetail.applicantPhoneNo);
                    $('#cp_fax').text(lcDetail.applicantFaxNo);
                    $('#npwp').text(lcDetail.applicantNPWPNo);
                    var Api = lcDetail.applicantAPIType + ` ` + lcDetail.applicantAPINo
                    $('#api').text(Api);
                    $('#bene_type').text(lcDetail.beneficiaryType);
                    $('#bene_name').text(lcDetail.beneficiaryName);
                    $('#bene_addr1').text(lcDetail.beneficiaryAddress1);
                    $('#bene_addr2').text(lcDetail.beneficiaryAddress2);
                    $('#bene_addr3').text(lcDetail.beneficiaryAddress3);
                    $('#bene_ctry').text(lcDetail.beneficiaryCountryName);
                    $('#bene_phone').text(lcDetail.beneficiaryPhoneNo);
                    $('#bene_fax').text(lcDetail.beneficiaryFaxNo);
                    $('#adv_bank_name').text(lcDetail.advisingBankName);
                    $('#adv_bank_addr1').text(lcDetail.advisingBankAddress1);
                    $('#adv_bank_addr2').text(lcDetail.advisingBankAddress2);
                    $('#adv_bank_addr3').text(lcDetail.advisingBankAddress3);
                    $('#adv_bank_ctry').text(lcDetail.advisingBankCountryName);
                    $('#adv_bank_swift').text(lcDetail.advisingBankCode);
                    // Contract
                    $('#cust_ref_no').text(lcDetail.customerRefNo);
                    $('#transferable').text(lcDetail.transferable === 'Y'? 'Yes' : 'No');
                    $('#lc_type').text(lcDetail.lcTypeCode);
                    $('#confirm_inst').text(lcDetail.confirmInstructionCode);
                    $('#credit_avlb_by').text(lcDetail.creditAvailableCode);
                    $('#payment_draft_at').text(lcDetail.payDraftAtType === 'SIGHT'? 'Sight Draft' : lcDetail.payDraftAtType === 'USANCE'? 'Usance' : lcDetail.payDraftAtType === 'UPAS'? 'Upas' : '');
                    var currency = lcDetail.feeAccountCcy + ` ` + currencyFormat(lcDetail.transactionAmount)
                    $('#currency').text(currency);
                    $('#tolerance').text('Tolerance');
                    var tolerance1 = '+'+ lcDetail.tolerancePlus + '%' + ` ` + '-' + lcDetail.toleranceMinus + '%'
                    $('#tolerance1').text(tolerance1);
                    $('#addt_amount_covr').text(lcDetail.additionalAmountCovered);
                    $('#expiry_date').text(lcDetail.expiryDate);
                    $('#expiry_place').text(lcDetail.expiryPlace);
                    $('#charge_by_bank').text(lcDetail.issuingBankChargeBy === 'APP' ? 'Applicant' : 'Beneficiary');
                    $('#charge_by_confirm').text(lcDetail.confirmingChargeBy === 'APP' ? 'Applicant' : 'Beneficiary');
                    $('#charge_by_outside').text(lcDetail.outsideCountryChargeBy === 'APP' ? 'Applicant' : 'Beneficiary');
                    $('#charge_by_reimbursing').text(lcDetail.reimburseBankChargeBy === 'APP' ? 'Applicant' : 'Beneficiary');
                    // Goods and Shipment
                    $('#ship_date').text(lcDetail.shipmentDateType === '0'? 'Latest Shipment Date' : 'Shipment Period');
                    $('#ship_date1').text(lcDetail.latestShipmentDate);
                    var period_present = lcDetail.presentationPeriod + ' days'
                    $('#period_present').text(lcDetail.period_present);
                    $('#narrative_present').text(lcDetail.presentationNarrative);
                    $('#partial_shipment').text(lcDetail.partialShipment === 'Y'? 'Allowed' : 'Not Allowed');
                    $('#transhipment').text(lcDetail.transhipment === 'Y'? 'Allowed' : 'Not Allowed');
                    $('#port_loading').text(lcDetail.portOfLoading);
                    $('#port_discharge').text(lcDetail.portOfDischarge);
                    $('#incoterms').text(lcDetail.incotermName);
                    $('#name_of_place').text(lcDetail.nameOfPlace);
                    $('#origin_ctry_goods').text(lcDetail.originCountryOfGoodsName);
                    $('#name_of_goods1').text(lcDetail.nameOfGoods1);
                    $('#name_of_goods2').text(lcDetail.nameOfGoods2);
                    $('#name_of_goods3').text(lcDetail.nameOfGoods3);
                    $('#name_of_goods4').text(lcDetail.nameOfGoods4);
                    $('#name_of_goods5').text(lcDetail.nameOfGoods5);
                    $('#type_of_goods1').text(lcDetail.typeOfGoods1);
                    $('#type_of_goods2').text(lcDetail.typeOfGoods2);
                    $('#qlty_of_goods').text(lcDetail.qualityOfGoods);
                    $('#vol_of_goods').text(lcDetail.volumeOfGoods);
                    $('#price_per_unit').text(lcDetail.pricePerUnit);
                    $('#contract_no1').text(lcDetail.contractNo1);
                    $('#contract_no2').text(lcDetail.contractNo2);
                    $('#no_pos_tarif').text(lcDetail.posTarifNo);
                    $('#incoterms1').text(lcDetail.incotermName);
                    // Documents
                    $('#doc_required').text(lcDetail.docsRequired);
                    $('#additional_cond').text(lcDetail.additionalCondition);
                    // Others
                    $('#other_info').text(lcDetail.otherInformation);
                    var fee_acct_no = lcDetail.feeAccountNo + ' / ' + lcDetail.feeAccountName + '(' + lcDetail.feeAccountCcy + ')'
                    $('#fee_acct_no').text(fee_acct_no);
                    $('#file_upload1').text(lcDetail.fileName1);
                    fileImage1 = 'data:application/octet-stream;base64,' + lcDetail.fileBytes1
                    $('#file_upload2').text(lcDetail.fileName2);
                    fileImage2 = 'data:application/octet-stream;base64,' + lcDetail.fileBytes2
                    $('#file_upload3').text(lcDetail.fileName3);
                    fileImage3 = 'data:application/octet-stream;base64,' + lcDetail.fileBytes3
                    $('#file_upload4').text(lcDetail.fileName4);
                    fileImage4 = 'data:application/octet-stream;base64,' + lcDetail.fileBytes4
                    $('#file_upload5').text(lcDetail.fileName5);
                    fileImage5 = 'data:application/octet-stream;base64,' + lcDetail.fileBytes5
                    $('#affiliate').text(lcDetail.isAffiliate === 'Y' ? 'Affiliate' : 'Non Affiliate');

                    // =================================================================================

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

    function unlockAction(e){
        $('#transactionModal').modal('show');
    }

    function currencyFormat (num) {
        if(num == '' || num == undefined)
            return num;
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

    function setAttachmentDetail(files){
        tags = '<div class="mb-3 row"><label class="col-md-5 col-form-label text-end">File Upload</label><div class="col-md-6"><label>'+files[0].fileName+'</label></div>';
        for (var i = 1; i < files.length; i++) {
           tags += '<label class="col-md-5 col-form-label text-end"></label><div class="col-md-6"><label>'+files[i].fileName+'</label></div>';
        }
        tags += '</div>';

        $('.attachmentClass').html(tags);
    }

    function downloadFile(e) {
        var imageUrl, fileName
        if (e == 'file_upload1') {
            imageUrl = fileImage1;
            fileName = $('#file_upload1').text()
        } else if (e == 'file_upload2') {
            imageUrl = fileImage2;
            fileName = $('#file_upload2').text()
        } else if (e == 'file_upload3') {
            imageUrl = fileImage3;
            fileName = $('#file_upload3').text()
        } else if (e == 'file_upload4') {
            imageUrl = fileImage4;
            fileName = $('#file_upload4').text()
        } else if (e == 'file_upload5') {
            imageUrl = fileImage5;
            fileName = $('#file_upload5').text()
        }

        var xhr = new XMLHttpRequest();
            xhr.responseType = 'blob';
            xhr.onload = function() {
                var blob = xhr.response;
                var url = window.URL.createObjectURL(blob);

                var a = $("<a>")
                    .attr("href", url)
                    .attr("download", fileName)
                    .appendTo("body");

                a[0].click();

                window.URL.revokeObjectURL(url);
                a.remove();
            };
            xhr.open('GET', imageUrl);
            xhr.send();
    }

</script>
