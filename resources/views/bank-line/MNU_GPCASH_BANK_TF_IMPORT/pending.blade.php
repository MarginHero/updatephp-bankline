﻿@include('_partials.header_content',['breadcrumb'=>['Ongoing task','Import LC Detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="referenceNo" value=""/>
            <input type="hidden" id="taskId" value=""/>
            <form class="form-horizontal">
                <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Ongoing Task Detail</h3><br>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Menu</label>
                                <div class="col-md-6">
                                    <label id="menu_text">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Activity</label>
                                <div class="col-md-6">
                                    <label id="activity_text">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Reference Number</label>
                                <div class="col-md-6">
                                    <label id="noref_text">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Activity Date Time</label>
                                <div class="col-md-6">
                                    <label id="datetime_text">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title">Import LC Detail</h3><br>
                </div>
                <div class="box-body">
                    <div class="container-fluid" id="importDetail">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Transaction Reference No.</label>
                                <div class="col-md-6">
                                    <label id="transNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Corporate ID</label>
                                <div class="col-md-6">
                                    <label id="corpID">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Corporate name</label>
                                <div class="col-md-6">
                                    <label id="corpName">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Maker ID</label>
                                <div class="col-md-6">
                                    <label id="makerID">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Application Date</label>
                                <div class="col-md-6">
                                    <label id="appDate">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Amount</label>
                                <div class="col-md-6">
                                    <label id="amount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Number of Returned</label>
                                <div class="col-md-6">
                                    <label id="numberOf">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title">Transaction Detail</h3><br>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">
                                    <a href="javascript:void(0)" onClick="unlockAction(this);" style="color:#337ab7; text-decoration:underline; cursor:pointer;">View Detail Transaction</a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title">Bank Response</h3><br>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div id="validation">
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Action Status</label>
                                    <div class="col-md-6">
                                        <label id="actionStatus">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Comment</label>
                                    <div class="col-md-6">
                                        <label id="comment">-</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="updateStatus">
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Action Status</label>
                                    <div class="col-md-6">
                                        <label id="actionStatus1">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Bank Reference No</label>
                                    <div class="col-md-6">
                                        <label id="bankRefNo">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Issue Date</label>
                                    <div class="col-md-6">
                                        <label id="issueDate">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Comment</label>
                                    <div class="col-md-6">
                                        <label id="comment1">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">File Upload</label>
                                    <div class="col-md-6 col-form-label">
                                        <div id="view_file_upload1">
                                            <label>
                                                <a onClick="downloadFile('1', 'main');" id="file_upload1" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                            </label>
                                            <input type="hidden" id="fileIdMain1" value=""/>
                                        </div>
                                        <div id="view_file_upload2">
                                            <label>
                                                <a onClick="downloadFile('2', 'main');" id="file_upload2" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                            </label>
                                            <input type="hidden" id="fileIdMain2" value=""/>
                                        </div>
                                        <div id="view_file_upload3">
                                            <label>
                                                <a onClick="downloadFile('3', 'main');" id="file_upload3" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                            </label>
                                            <input type="hidden" id="fileIdMain3" value=""/>
                                        </div>
                                        <div id="view_file_upload4">
                                            <label>
                                                <a onClick="downloadFile('4', 'main');" id="file_upload4" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                            </label>
                                            <input type="hidden" id="fileIdMain4" value=""/>
                                        </div>
                                        <div id="view_file_upload5">
                                            <label>
                                                <a onClick="downloadFile('5', 'main');" id="file_upload5" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                            </label>
                                            <input type="hidden" id="fileIdMain5" value=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('form.reason')
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

<div id="transactionModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Detail Transaction Import LC</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                <label class="col-md-4 col-form-label text-end">Transaction Status</label>
                                <div class="col-md-6">
                                    <label id="transStatus">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Transaction Reference No.</label>
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
                                <label class="col-md-4 col-form-label text-end">Media of Issue</label>
                                <div class="col-md-6">
                                    <label id="media_of_issue">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Application Date</label>
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
                                <label class="col-md-4 col-form-label text-end">Applicant Name</label>
                                <div class="col-md-6">
                                    <label id="applicant_name">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Applicant Address</label>
                                <div class="col-md-6">
                                    <label id="applicant_addr1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="applicant_addr2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="applicant_addr3">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Applicant Country</label>
                                <div class="col-md-6">
                                    <label id="applicant_ctry">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Contact Person Phone No.</label>
                                <div class="col-md-6">
                                    <label id="cp_phone">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Contact Person Fax No.</label>
                                <div class="col-md-6">
                                    <label id="cp_fax">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">NPWP</label>
                                <div class="col-md-6">
                                    <label id="npwp">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">API</label>
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
                                <label class="col-md-4 col-form-label text-end">Beneficiary Type</label>
                                <div class="col-md-6">
                                    <label id="bene_type">-</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Beneficiary Name</label>
                                <div class="col-md-6">
                                    <label id="bene_name">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Beneficiary Address</label>
                                <div class="col-md-6">
                                    <label id="bene_addr1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="bene_addr2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="bene_addr3">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Beneficiary Country</label>
                                <div class="col-md-6">
                                    <label id="bene_ctry">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Beneficiary Phone No.</label>
                                <div class="col-md-6">
                                    <label id="bene_phone">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Beneficiary Fax No.</label>
                                <div class="col-md-6">
                                    <label id="bene_fax">-</label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Save to Beneficiary Contact</label>
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
                                <label class="col-md-4 col-form-label text-end">Advising Bank Name</label>
                                <div class="col-md-6">
                                    <label id="adv_bank_name">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Advising Bank Address</label>
                                <div class="col-md-6">
                                    <label id="adv_bank_addr1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="adv_bank_addr2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="adv_bank_addr3">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Advising Bank Country</label>
                                <div class="col-md-6">
                                    <label id="adv_bank_ctry">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Advising Bank Swift Code</label>
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
                                <label class="col-md-4 col-form-label text-end">Customer Reference No.</label>
                                <div class="col-md-6">
                                    <label id="cust_ref_no">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Transferable</label>
                                <div class="col-md-6">
                                    <label id="transferable">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">LC Type</label>
                                <div class="col-md-6">
                                    <label id="lc_type">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Confirming Instruction</label>
                                <div class="col-md-6">
                                    <label id="confirm_inst">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Credit Available By</label>
                                <div class="col-md-6">
                                    <label id="credit_avlb_by">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Payment/Draft At</label>
                                <div class="col-md-6">
                                    <label id="payment_draft_at">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="payment_draft_at1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Percentage of Invoice</label>
                                <div class="col-md-6">
                                    <label id="percent_invoice">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Currency / Amount</label>
                                <div class="col-md-6">
                                    <label id="currency">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Tolerance Percentage</label>
                                <div class="col-md-6">
                                    <label id="tolerance">-</label><label id="tolerance1">-</label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">

                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Additionanl Amount Covered</label>
                                <div class="col-md-6">
                                    <label id="addt_amount_covr"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Expiry Date</label>
                                <div class="col-md-6">
                                    <label id="expiry_date">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Expiry Place</label>
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
                            <div id="label_charge_by_bank" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Issuing Bank Charges Paid By</label>
                                <div class="col-md-6">
                                    <label id="charge_by_bank">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="label_charge_by_confirm" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Confirming Charges Paid By</label>
                                <div class="col-md-6">
                                    <label id="charge_by_confirm">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="label_charge_by_outside" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Outside Country Charges Paid By</label>
                                <div class="col-md-6">
                                    <label id="charge_by_outside">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="label_charge_by_reimbursing" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Reimbursing Bank Charge Paid By</label>
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
                                <label class="col-md-4 col-form-label text-end">Shipment Date</label>
                                <div class="col-md-6">
                                    <label id="ship_date1">-</label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="ship_date1">-</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Period of Presentation</label>
                                <div class="col-md-6">
                                    <label id="period_present">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Narrative of Presentation</label>
                                <div class="col-md-6">
                                    <label id="narrative_present">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Partial Shipment</label>
                                <div class="col-md-6">
                                    <label id="partial_shipment">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Transhipment</label>
                                <div class="col-md-6">
                                    <label id="transhipment">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Port of Loading</label>
                                <div class="col-md-6">
                                    <label id="port_loading">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Port of Discharge</label>
                                <div class="col-md-6">
                                    <label id="port_discharge">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Incoterms</label>
                                <div class="col-md-6">
                                    <label id="incoterms">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Name of Place</label>
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
                                <label class="col-md-4 col-form-label text-end">Origin Country of Goods</label>
                                <div class="col-md-6">
                                    <label id="origin_ctry_goods">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Name of Goods</label>
                                <div class="col-md-6">
                                    <label id="name_of_goods1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods3">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods4">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods5">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Type of Goods</label>
                                <div class="col-md-6">
                                    <label id="type_of_goods1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="type_of_goods2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Quality of Goods</label>
                                <div class="col-md-6">
                                    <label id="qlty_of_goods">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Volume of Goods</label>
                                <div class="col-md-6">
                                    <label id="vol_of_goods">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Price per Unit</label>
                                <div class="col-md-6">
                                    <label id="price_per_unit">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Contract No.</label>
                                <div class="col-md-6">
                                    <label id="contract_no1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="contract_no2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">No. Pos Tarif(HS)</label>
                                <div class="col-md-6">
                                    <label id="no_pos_tarif">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Incoterms</label>
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
                                <label class="col-md-4 col-form-label text-end">Documents Required</label>
                                <div class="col-md-6">
                                    <label style="white-space: pre-wrap; width: 400px;" id="doc_required">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Additional Conditions</label>
                                <div class="col-md-6">
                                    <label style="white-space: pre-wrap; width: 400px;" id="additional_cond">-</label>
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
                                <label class="col-md-4 col-form-label text-end">Other Information</label>
                                <div class="col-md-6">
                                    <label id="other_info">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Account No. for Fees</label>
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
                        <div class="row detailUpload1" style="display: none;">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">File Upload</label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('1', 'detail');" id="detailUpload1" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                    </label>
                                    <input type="hidden" id="fileIdTrx1" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row detailUpload2"  style="display: none;">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('2', 'detail');" id="detailUpload2" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                    </label>
                                    <input type="hidden" id="fileIdTrx2" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row detailUpload3"  style="display: none;">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('3', 'detail');" id="detailUpload3" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                    </label>
                                    <input type="hidden" id="fileIdTrx3" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row detailUpload4"  style="display: none;">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('4', 'detail');" id="detailUpload4" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                    </label>
                                    <input type="hidden" id="fileIdTrx4" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row detailUpload5"  style="display: none;">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('5', 'detail');" id="detailUpload5" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                    </label>
                                    <input type="hidden" id="fileIdTrx5" value=""/>
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
                                <label class="col-md-4 col-form-label text-end">Affiliate</label>
                                <div class="col-md-6">
                                    <label id="affiliate">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">@lang('form.close')</button>
            </div>
        </div>
    </div>
</div>

<script>
    var oTable;
    var currencyOption;
    var fileImage1, fileImage2, fileImage3, fileImage4, fileImage5
    var fileBankImage1, fileBankImage2, fileBankImage3, fileBankImage4, fileBankImage5
    var fileIdTrx1, fileIdTrx2, fileIdTrx3, fileIdTrx4, fileIdTrx5
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
                            $('#reject').prop('disabled',false);
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

    function unlockAction(e){
        $('#transactionModal').modal('show');
    }

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
                    if (detail.validationComment != '') {
                        $('#validation').show();
                        $('#actionStatus').text(detail.actionStatus);
                        $('#comment').text(detail.validationComment);
                    } else {
                        $('#updateStatus').show();
                        $('#actionStatus1').text(detail.actionStatus);
                        $('#bankRefNo').text(detail.bankRefNo);
                        var issueDate = moment(detail.issueDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")
                        $('#issueDate').text(issueDate);
                        $('#comment1').text(detail.updateStatusComment);

                        $('#file_upload1').text(detail.fileName1);
                        $('#file_upload2').text(detail.fileName2);
                        $('#file_upload3').text(detail.fileName3);
                        $('#file_upload4').text(detail.fileName4);
                        $('#file_upload5').text(detail.fileName5);


                        $('#fileIdMain1').val(detail.fileId1);
                        $('#fileIdMain2').val(detail.fileId2);
                        $('#fileIdMain3').val(detail.fileId3);
                        $('#fileIdMain4').val(detail.fileId4);
                        $('#fileIdMain5').val(detail.fileId5);
                    }

                    var importDetail = detail.importDetail;

                    Object.entries(importDetail).forEach(([key, value]) => { // Iterate imporDetail and set value by Id
                        // console.log(`${key}: ${value}`);
                        $('#'+`${key}`).text(`${value}`);
                    });

                    var detailTransaction = detail.detailTransaction;
                    Object.entries(detailTransaction).forEach(([key, value]) => { // Iterate detailTransaction and set value by Id
                        // console.log(`${key}: ${value}`);
                        const valueDetail = `${value}`;
                        if (valueDetail !==null && valueDetail !== 'null') {
                            $('#'+`${key}`).text(valueDetail);
                        }
                    });

                    var trxUploadFile = detail.trxUploadFile;
                    Object.entries(trxUploadFile).forEach(([key, value]) => { // Iterate trxUploadFile and set value by Id
                       const valueDetail = `${value}`;
                        if (valueDetail !==null && valueDetail !== 'null') {
                            $('#'+`${key}`).text(valueDetail);
                            $('.'+`${key}`).show();
                            if (`${key}`.includes('fileIdTrx')) {
                                // const num = `${key}`.slice(-1);
                                // setFileId(num, valueDetail);
                                $('#'+`${key}`).val(valueDetail);
                            }
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
                $('.table-hidden').show();
            }
        });
    }

    function downloadFile(num, dtl) {
            var fileName;
            var fileId;
            var type;

            if (dtl == 'detail') {
                fileName = $('#detailUpload'+num).text();
                fileId = $('#fileIdTrx'+num).val();
                type = 'C';
            } else {
                fileName = $('#file_upload'+num).text();
                fileId = $('#fileIdMain'+num).val();
                type = 'B';
            }

            const urlGet = "download?fileName="+fileName+"&fileId="+fileId+"&type="+type;

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
            } else {
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
                    $('.state_view').show();
                    //$(".state_reason").hide();
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

    function setFileId(num, id) {
        if (num == 1) {
            fileIdTrx1 = id
        } else if (num == 2) {
            fileIdTrx2 = id
        } else if (num == 3) {
            fileIdTrx3 = id
        } else if (num == 4) {
            fileIdTrx4 = id
        } else if (num == 5) {
            fileIdTrx5 = id
        }
    }

</script>
@include('form.script')
