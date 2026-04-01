@include('_partials.header_content',['breadcrumb'=>['Ongoing task','Amendment LC Detail']])


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
                    <h3 class="box-title">Import LC Detail</h3><br>
                </div>

                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Transaction Reference No.</label>
                                <div class="col-md-6">
                                    <label id="transNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Bank Reference No.</label>
                                <div class="col-md-6">
                                    <label id="bankRefno">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Corporate ID</label>
                                <div class="col-md-6">
                                    <label id="corpID">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Corporate name</label>
                                <div class="col-md-6">
                                    <label id="corpName">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Maker ID</label>
                                <div class="col-md-6">
                                    <label id="makerID">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Corp Release Date</label>
                                <div class="col-md-6">
                                    <label id="appDate">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Amount</label>
                                <div class="col-md-6">
                                    <label id="amount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Number of Returned</label>
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
                                <label class="col-md-2 col-form-label text-end">
                                    <a onClick="unlockAction(this);" style="color:#337ab7; text-decoration:underline; cursor:pointer;">View Detail Transaction</a>
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
                                    <label class="col-md-2 col-form-label text-end">Action Status</label>
                                    <div class="col-md-6">
                                        <label id="actionStatus">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Comment</label>
                                    <div class="col-md-6">
                                        <label id="comment">-</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="updateStatus">
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Action Status</label>
                                    <div class="col-md-6">
                                        <label id="actionStatus1">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Bank Reference No</label>
                                    <div class="col-md-6">
                                        <label id="bankRefNo">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Amend Date</label>
                                    <div class="col-md-6">
                                        <label id="amendDate">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Comment</label>
                                    <div class="col-md-6">
                                        <label id="comment1">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">File Upload</label>
                                    <div class="col-md-6">
                                        <div id="view_file_bank_upload1">
                                            <label>
                                                <a onClick="downloadFile('1', 'main');" id="file_bank_upload1">-</a>
                                            </label>
                                            <input type="hidden" id="fileIdMain1" value=""/>
                                        </div>
                                        <div id="view_file_bank_upload2">
                                            <label>
                                                <a onClick="downloadFile('2', 'main');" id="file_bank_upload2">-</a>
                                            </label>
                                            <input type="hidden" id="fileIdMain2" value=""/>
                                        </div>
                                        <div id="view_file_bank_upload3">
                                            <label>
                                                <a onClick="downloadFile('3', 'main');" id="file_bank_upload3">-</a>
                                            </label>
                                            <input type="hidden" id="fileIdMain3" value=""/>
                                        </div>
                                        <div id="view_file_bank_upload4">
                                            <label>
                                                <a onClick="downloadFile('4', 'main');" id="file_bank_upload4">-</a>
                                            </label>
                                            <input type="hidden" id="fileIdMain4" value=""/>
                                        </div>
                                        <div id="view_file_bank_upload5">
                                            <label>
                                                <a onClick="downloadFile('5', 'main');" id="file_bank_upload5">-</a>
                                            </label>
                                            <input type="hidden" id="fileIdMain5" value=""/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">City</label>
                                <div class="col-md-6">
                                    <label id="city">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Level</label>
                                <div class="col-md-6">
                                    <label id="level">-</label>
                                </div>
                            </div>
                        </div> -->
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
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detail Transaction Import LC</h4>
            </div>
            <div class="modal-body">
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Amendment LC</h3><br>
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
                            <div id="text-increase" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Increase Amount</label>
                                <div class="col-md-6">
                                    <label id="incrase">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-decrease" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Decrease Amount</label>
                                <div class="col-md-6">
                                    <label id="decrase">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-newAmount" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">New Amount</label>
                                <div class="col-md-6">
                                    <label id="newAmount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-currency" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Currency / Amount</label>
                                <div class="col-md-6">
                                    <label id="currency">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-tolerance" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Tolerance Percentage</label>
                                <div class="col-md-6">
                                    <label id="tolerance">-</label><label id="tolerance1">-</label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div id="text-tolerance1" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div id="text-addt_amount_covr" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Additionanl Amount Covered</label>
                                <div class="col-md-6">
                                    <label id="addt_amount_covr"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-expiry_date" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Expiry Date</label>
                                <div class="col-md-6">
                                    <label id="expiry_date">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-expiry_place" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Expiry Place</label>
                                <div class="col-md-6">
                                    <label id="expiry_place">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-amend_narrative" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Amendment Narrative</label>
                                <div class="col-md-6">
                                    <label id="amend_narrative" style="white-space: pre-wrap; width: 400px;">-</label>
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
                            <div id="text-ship_date1" class="mb-3 row">
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
                            <div id="text-period_present" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Period of Presentation</label>
                                <div class="col-md-6">
                                    <label id="period_present">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-narrative_present" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Narrative of Presentation</label>
                                <div class="col-md-6">
                                    <label id="narrative_present">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-partial_shipment" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Partial Shipment</label>
                                <div class="col-md-6">
                                    <label id="partial_shipment">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-transhipment" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Transhipment</label>
                                <div class="col-md-6">
                                    <label id="transhipment">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-port_loading" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Port of Loading</label>
                                <div class="col-md-6">
                                    <label id="port_loading">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-port_discharge" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Port of Discharge</label>
                                <div class="col-md-6">
                                    <label id="port_discharge">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-incoterms" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Incoterms</label>
                                <div class="col-md-6">
                                    <label id="incoterms">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-name_of_place" class="mb-3 row">
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
                            <div id="text-origin_ctry_goods" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Origin Country of Goods</label>
                                <div class="col-md-6">
                                    <label id="origin_ctry_goods">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-name_of_goods1" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Name of Goods</label>
                                <div class="col-md-6">
                                    <label id="name_of_goods1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-name_of_goods2" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-name_of_goods3" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods3">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-name_of_goods4" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods4">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-name_of_goods5" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods5">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-type_of_goods1" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Type of Goods</label>
                                <div class="col-md-6">
                                    <label id="type_of_goods1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-type_of_goods2" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="type_of_goods2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-qlty_of_goods" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Quality of Goods</label>
                                <div class="col-md-6">
                                    <label id="qlty_of_goods">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-vol_of_goods" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Volume of Goods</label>
                                <div class="col-md-6">
                                    <label id="vol_of_goods">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-price_per_unit" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Price per Unit</label>
                                <div class="col-md-6">
                                    <label id="price_per_unit">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-contract_no1" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Contract No.</label>
                                <div class="col-md-6">
                                    <label id="contract_no1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-contract_no2" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="contract_no2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-no_pos_tarif" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">No. Pos Tarif(HS)</label>
                                <div class="col-md-6">
                                    <label id="no_pos_tarif">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-incoterms1" class="mb-3 row">
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
                            <div id="text-doc_required" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Documents Required</label>
                                <div class="col-md-6">
                                    <label style="white-space: pre-wrap; width: 400px;" id="doc_required">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-additional_cond" class="mb-3 row">
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
                            <div id="text-amendOtherInfo" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Amendment Other Information</label>
                                <div class="col-md-6">
                                    <label id="amendOtherInfo" style="white-space: pre-wrap; width: 400px;">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-fee_acct_no" class="mb-3 row">
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
                        <div class="row">
                            <div id="text-file_upload1" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">File Upload</label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('1', 'detail');" id="file_upload_detail1">-</a>
                                    </label>
                                    <input type="hidden" id="fileIdTrx1" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-file_upload1" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('2', 'detail');" id="file_upload_detail2">-</a>
                                    </label>
                                    <input type="hidden" id="fileIdTrx2" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-file_upload1" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('3', 'detail');" id="file_upload_detail3">-</a>
                                    </label>
                                    <input type="hidden" id="fileIdTrx3" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-file_upload1" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('4', 'detail');" id="file_upload_detail4">-</a>
                                    </label>
                                    <input type="hidden" id="fileIdTrx4" value=""/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-file_upload1" class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('5', 'detail');" id="file_upload_detail5">-</a>
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
				<button type="button" class="btn btn-default" data-dismiss="modal">@lang('form.close')</button>
			</div>
        </div>
    </div>
</div>

<script>
    var oTable;
    var currencyOption;
    var fileImage1, fileImage2, fileImage3, fileImage4, fileImage5
    var fileBankImage1, fileBankImage2, fileBankImage3, fileBankImage4, fileBankImage5
    var noRef = 'OT'+$('#referenceNo').val();
    var fileImage1, fileImage2, fileImage3, fileImage4, fileImage5
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
                    getDetailSubmit(result)
                    var detail = result.details;
                    if (detail.type === 'searchValidationLC') {
                        $('#validation').show();
                        $('#actionStatus').text(detail.actionStatus);
                        $('#comment').text(detail.validationComment);
                    } else {
                        $('#updateStatus').show();
                        $('#actionStatus1').text(detail.actionStatus);
                        $('#bankRefNo').text(detail.bankRefNo);
                        var amendDate = moment(detail.amendDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")
                        $('#amendDate').text(amendDate);
                        $('#comment1').text(detail.updateStatusComment);

                        $('#file_bank_upload1').text(detail.fileName1);
                        $('#file_bank_upload2').text(detail.fileName2);
                        $('#file_bank_upload3').text(detail.fileName3);
                        $('#file_bank_upload4').text(detail.fileName4);
                        $('#file_bank_upload5').text(detail.fileName5);

                        if (detail.fileName1 == "" || detail.fileName1 == null) { $('#view_file_bank_upload1').hide(); }
                        if (detail.fileName2 == "" || detail.fileName2 == null) { $('#view_file_bank_upload2').hide(); }
                        if (detail.fileName3 == "" || detail.fileName3 == null) { $('#view_file_bank_upload3').hide(); }
                        if (detail.fileName4 == "" || detail.fileName4 == null) { $('#view_file_bank_upload4').hide(); }
                        if (detail.fileName5 == "" || detail.fileName5 == null) { $('#view_file_bank_upload5').hide(); }

                        $('#fileIdMain1').val(detail.fileId1);
                        $('#fileIdMain2').val(detail.fileId2);
                        $('#fileIdMain3').val(detail.fileId3);
                        $('#fileIdMain4').val(detail.fileId4);
                        $('#fileIdMain5').val(detail.fileId5);
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
                $('.table-hidden').show();

            }
        });
    }

    function getDetailSubmit(val){
        var value = {
            issuanceId: val.details.issuanceId,
            corpId: '',
            currencyCode: '',
            amountFrom: '',
            amountTo: '',
            releaseDateFrom: '',
            releaseDateTo: '',
            currentPage: "1",
            pageSize: "20",
            orderBy: {"id": "ASC"}
        };
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{
                value: value,
                menu: "MNU_GPCASH_BANK_TF_AMENDMENT",
                action: 'DETAIL',
                url_action: val.details.type,
            },
            success: function (data) {
            var result = JSON.parse(data);
            if (result.status == "200") {
                type = 'validation';
                var index = result.result.map(function(o) { return o.issuanceId; }).indexOf(val.details.issuanceId.toString());
                var detail = result.result[index];
                let applicationDate = moment(detail.applicationDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")

                $('#transNo').text(detail.referenceNo);
                $('#corpID').text(detail.corpId);
                $('#corpName').text(detail.corpName);
                $('#makerID').text(detail.makerId);
                $('#appDate').text(applicationDate);
                var parseAmount = detail.transactionCurrency + ` ` + currencyFormat(detail.transactionAmount)
                $('#amount').text(parseAmount);
                $('#numberOf').text(detail.noOfReturn);
                $('#bankRefno').text(detail.bankRefNo);

                // Modal
                $('#transStatus').text(detail.transactionStatus);
                $('#transNo1').text(detail.referenceNo);
                // General
                $('#media_of_issue').text(detail.mediaOfIssueCode);
                $('#application_date').text(applicationDate);
                $('#applicant_name').text(detail.applicantName);
                $('#applicant_addr1').text(detail.applicantAddress1);
                $('#applicant_addr2').text(detail.applicantAddress2);
                $('#applicant_addr3').text(detail.applicantAddress3);
                $('#applicant_ctry').text(detail.applicantCountryName);
                $('#cp_phone').text(detail.applicantPhoneNo);
                $('#cp_fax').text(detail.applicantFaxNo);
                $('#npwp').text(detail.applicantNPWPNo);
                var Api = detail.applicantAPIType + ` ` + detail.applicantAPINo
                $('#api').text(Api);
                $('#bene_type').text(detail.beneficiaryType);
                $('#bene_name').text(detail.beneficiaryName);
                $('#bene_addr1').text(detail.beneficiaryAddress1);
                $('#bene_addr2').text(detail.beneficiaryAddress2);
                $('#bene_addr3').text(detail.beneficiaryAddress3);
                $('#bene_ctry').text(detail.beneficiaryCountryName);
                $('#bene_phone').text(detail.beneficiaryPhoneNo);
                $('#bene_fax').text(detail.beneficiaryFaxNo);
                $('#adv_bank_name').text(detail.advisingBankName);
                $('#adv_bank_addr1').text(detail.advisingBankAddress1);
                $('#adv_bank_addr2').text(detail.advisingBankAddress2);
                $('#adv_bank_addr3').text(detail.advisingBankAddress3);
                $('#adv_bank_ctry').text(detail.advisingBankCountryName);
                $('#adv_bank_swift').text(detail.advisingBankCode);
                // Contract
                $('#cust_ref_no').text(detail.customerRefNo);
                $('#transferable').text(detail.transferable === 'Y'? 'Yes' : 'No');
                $('#lc_type').text(detail.lcTypeCode === 'SKBDN'? 'SKBDN/Local LC' : detail.lcTypeCode === 'IRREV'? 'Irrevocable LC' : '');
                $('#confirm_inst').text(detail.confirmInstructionCode === 'CONFIRM'? 'Confirm' : detail.confirmInstructionCode === 'WITHOUT'? 'Without' : detail.confirmInstructionCode === 'MAYADD'? 'May Add' : '');
                $('#credit_avlb_by').text(getcreditAvailableCode(detail.creditAvailableCode));
                $('#payment_draft_at').text(detail.payDraftAtType === 'SIGHT'? 'Sight Draft' : detail.payDraftAtType === 'USANCE'? 'Usance' : detail.payDraftAtType === 'UPAS'? 'Upas' : '');

                if (detail.payDraftAtType === 'SIGHT') {
                    $('#payment_draft_at1').hide();
                }
                var payment_draft_at1 = `${detail.payDraftAtDays} Days - ${detail.payDraftAtValue1 === 'AFTER' ? 'After' : 'Before'} - ${getPayDraftAtValue2(detail.payDraftAtValue2)} ${detail.payDraftAtValue3 === '' ? '' : '-'} ${detail.payDraftAtValue3}`
                $('#payment_draft_at1').text(payment_draft_at1);
                var percent_invoice = detail.invoicePercentage + ' %'
                $('#percent_invoice').text(percent_invoice);
                var currency = detail.transactionCurrency + ` ` + currencyFormat(detail.transactionAmount)
                $('#currency').text(currency);
                var decrase = currencyFormat(detail.amountDecrease)
                if (detail.amountDecrease === '') {
                    decrase = 0;
                }
                $('#decrase').text(decrase);
                var incrase = currencyFormat(detail.amountIncrease)
                if (detail.amountIncrease === '') {
                    incrase = 0;
                }
                $('#incrase').text(incrase);
                var newAmount = currencyFormat(detail.amountNew)
                $('#newAmount').text(newAmount);

                $('#tolerance').text('Tolerance');
                var tolerance1 = '+'+ detail.tolerancePlus + '%' + ` ` + '-' + detail.toleranceMinus + '%'
                $('#tolerance1').text(tolerance1);
                $('#addt_amount_covr').text(detail.additionalAmountCovered);
                var expiry_date = moment(detail.expiryDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")
                $('#expiry_date').text(expiry_date);
                $('#amend_narrative').text(detail.amendNarative);
                $('#expiry_place').text(detail.expiryPlace);
                $('#charge_by_bank').text(detail.issuingBankChargeBy === '' ? '' : detail.issuingBankChargeBy == 'APP'? 'Applicant' : 'Beneficiary');
                $('#charge_by_confirm').text(detail.confirmingChargeBy === '' ? '' : detail.confirmingChargeBy == 'APP'? 'Applicant' : 'Beneficiary');
                $('#charge_by_outside').text(detail.outsideCountryChargeBy === '' ? '' : detail.outsideCountryChargeBy == 'APP'? 'Applicant' : 'Beneficiary');
                $('#charge_by_reimbursing').text(detail.reimburseBankChargeBy === '' ? '' : detail.reimburseBankChargeBy == 'APP'? 'Applicant' : 'Beneficiary');
                // Goods and Shipment
                $('#ship_date').text(detail.shipmentDateType === '0'? 'Latest Shipment Date' : 'Shipment Period');
                var ship_date1 = moment(detail.latestShipmentDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")
                $('#ship_date1').text(ship_date1);
                var period_present = detail.presentationPeriod + ' days'
                $('#period_present').text(period_present);
                $('#narrative_present').text(detail.presentationNarrative);
                $('#partial_shipment').text(detail.partialShipment === 'Y'? 'Allowed' : 'Not Allowed');
                $('#transhipment').text(detail.transhipment === 'Y'? 'Allowed' : 'Not Allowed');
                $('#port_loading').text(detail.portOfLoading);
                $('#port_discharge').text(detail.portOfDischarge);
                $('#incoterms').text(detail.incotermName);
                $('#name_of_place').text(detail.nameOfPlace);
                $('#origin_ctry_goods').text(detail.originCountryOfGoodsName);
                $('#name_of_goods1').text(detail.nameOfGoods1);
                $('#name_of_goods2').text(detail.nameOfGoods2);
                $('#name_of_goods3').text(detail.nameOfGoods3);
                $('#name_of_goods4').text(detail.nameOfGoods4);
                $('#name_of_goods5').text(detail.nameOfGoods5);
                $('#type_of_goods1').text(detail.typeOfGoods1);
                $('#type_of_goods2').text(detail.typeOfGoods2);
                $('#qlty_of_goods').text(detail.qualityOfGoods);
                var vol_of_goods = `${detail.volumeOfGoods} ${detail.incotermQuantityTolerance === ''? '' : '+/-'}${detail.incotermQuantityTolerance} ${detail.incotermQuantityTolerance === ''? '' : ' %'}`
                $('#vol_of_goods').text(vol_of_goods);
                $('#price_per_unit').text(detail.pricePerUnit);
                $('#contract_no1').text(detail.contractNo1);
                $('#contract_no2').text(detail.contractNo2);
                $('#no_pos_tarif').text(detail.posTarifNo);
                var incoterms1 = `${detail.incotermName} ${detail.incotermValue} ${detail.incotermQuantityTolerance} ${detail.incotermQuantityTolerance === ''? '' : ' %'}`
                $('#incoterms1').text(incoterms1);
                // Documents
                $('#doc_required').text(detail.docsRequired);
                $('#additional_cond').text(detail.additionalCondition);
                // Others
                $('#other_info').text(detail.otherInformation);
                $('#amendOtherInfo').text(detail.amendOtherInfo);
                var fee_acct_no = detail.feeAccountNo + ' / ' + detail.feeAccountName + '(' + detail.feeAccountCcy + ')'
                $('#fee_acct_no').text(fee_acct_no);
                $('#file_upload_detail1').text(detail.fileName1);
                $('#fileIdTrx1').val(detail.fileId1);
                $('#file_upload_detail2').text(detail.fileName2);
                $('#fileIdTrx2').val(detail.fileId2);
                $('#file_upload_detail3').text(detail.fileName3);
                $('#fileIdTrx3').val(detail.fileId3);
                $('#file_upload_detail4').text(detail.fileName4);
                $('#fileIdTrx4').val(detail.fileId4);
                $('#file_upload_detail5').text(detail.fileName5);
                $('#fileIdTrx5').val(detail.fileId5);
                $('#affiliate').text(detail.isAffiliate === 'Y' ? 'Affiliate' : 'Non Affiliate');

                $('#bankRefNo').val(detail.bankRefNo);
                $('#bankRefNo').prop('disabled', true);

                if (detail.issuingBankChargeBy === '') {
                    $('#label_charge_by_bank').hide();
                }
                if (detail.confirmingChargeBy === '') {
                    $('#label_charge_by_confirm').hide();
                }
                if (detail.outsideCountryChargeBy === '') {
                    $('#label_charge_by_outside').hide();
                }
                if (detail.reimburseBankChargeBy === '') {
                    $('#label_charge_by_reimbursing').hide();
                }

                if (detail.checkbox.inc_amount === 'Y') {
                    var inc_amount = document.getElementById('text-increase');
                    inc_amount.style.color = 'blue';
                }
                if (detail.checkbox.dec_amount === 'Y') {
                    var dec_amount = document.getElementById('text-decrease');
                    dec_amount.style.color = 'blue';
                }
                if (detail.checkbox.new_amount === 'Y') {
                    var new_amount = document.getElementById('text-newAmount');
                    new_amount.style.color = 'blue';
                }
                if (detail.checkbox.tolerance === 'Y') {
                    var tolerance = document.getElementById('text-tolerance');
                    tolerance.style.color = 'blue';
                    var tolerance1 = document.getElementById('text-tolerance1');
                    tolerance1.style.color = 'blue';
                }
                if (detail.checkbox.addt_amount_covr === 'Y') {
                    var addt_amount_covr = document.getElementById('text-addt_amount_covr');
                    addt_amount_covr.style.color = 'blue';
                }
                if (detail.checkbox.expiry_date === 'Y') {
                    var expiry_date = document.getElementById('text-expiry_date');
                    expiry_date.style.color = 'blue';
                }
                if (detail.checkbox.expiry_place === 'Y') {
                    var expiry_place = document.getElementById('text-expiry_place');
                    expiry_place.style.color = 'blue';
                }
                if (detail.checkbox.amend_narrative === 'Y') {
                    var amend_narrative = document.getElementById('text-amend_narrative');
                    amend_narrative.style.color = 'blue';
                }
                if (detail.checkbox.latestShipmentDate === 'Y') {
                    var latestShipmentDate = document.getElementById('text-ship_date1');
                    latestShipmentDate.style.color = 'blue';
                }
                if (detail.checkbox.presentationPeriod === 'Y') {
                    var presentationPeriod = document.getElementById('text-period_present');
                    presentationPeriod.style.color = 'blue';
                }
                if (detail.checkbox.presentationNarrative === 'Y') {
                    var presentationNarrative = document.getElementById('text-narrative_present');
                    presentationNarrative.style.color = 'blue';
                }
                if (detail.checkbox.partialShipment === 'Y') {
                    var partialShipment = document.getElementById('text-partial_shipment');
                    partialShipment.style.color = 'blue';
                }
                if (detail.checkbox.transhipment === 'Y') {
                    var transhipment = document.getElementById('text-transhipment');
                    transhipment.style.color = 'blue';
                }
                if (detail.checkbox.portOfLoading === 'Y') {
                    var portOfLoading = document.getElementById('text-port_loading');
                    portOfLoading.style.color = 'blue';
                }
                if (detail.checkbox.portOfDischarge === 'Y') {
                    var portOfDischarge = document.getElementById('text-port_discharge');
                    portOfDischarge.style.color = 'blue';
                }
                if (detail.checkbox.incotermName === 'Y') {
                    var incotermName = document.getElementById('text-incoterms');
                    incotermName.style.color = 'blue';
                }
                if (detail.checkbox.nameOfPlace === 'Y') {
                    var nameOfPlace = document.getElementById('text-name_of_place');
                    nameOfPlace.style.color = 'blue';
                }
                if (detail.checkbox.originCountryOfGoodsName === 'Y') {
                    var originCountryOfGoodsName = document.getElementById('text-origin_ctry_goods');
                    originCountryOfGoodsName.style.color = 'blue';
                }
                if (detail.checkbox.nameOfGoods1 === 'Y') {
                    var nameOfGoods1 = document.getElementById('text-name_of_goods1');
                    nameOfGoods1.style.color = 'blue';
                    var nameOfGoods2 = document.getElementById('text-name_of_goods2');
                    nameOfGoods2.style.color = 'blue';
                    var nameOfGoods3 = document.getElementById('text-name_of_goods3');
                    nameOfGoods3.style.color = 'blue';
                    var nameOfGoods4 = document.getElementById('text-name_of_goods4');
                    nameOfGoods4.style.color = 'blue';
                    var nameOfGoods5 = document.getElementById('text-name_of_goods5');
                    nameOfGoods5.style.color = 'blue';
                }
                if (detail.checkbox.typeOfGoods1 === 'Y') {
                    var typeOfGoods1 = document.getElementById('text-type_of_goods1');
                    typeOfGoods1.style.color = 'blue';
                    var typeOfGoods2 = document.getElementById('text-type_of_goods2');
                    typeOfGoods2.style.color = 'blue';
                }
                if (detail.checkbox.qualityOfGoods === 'Y') {
                    var qualityOfGoods = document.getElementById('text-qlty_of_goods');
                    qualityOfGoods.style.color = 'blue';
                }
                if (detail.checkbox.volumeOfGoods === 'Y') {
                    var volumeOfGoods = document.getElementById('text-vol_of_goods');
                    volumeOfGoods.style.color = 'blue';
                }
                if (detail.checkbox.pricePerUnit === 'Y') {
                    var pricePerUnit = document.getElementById('text-price_per_unit');
                    pricePerUnit.style.color = 'blue';
                }
                if (detail.checkbox.contractNo1 === 'Y') {
                    var contractNo1 = document.getElementById('text-contract_no1');
                    contractNo1.style.color = 'blue';
                    var contractNo2 = document.getElementById('text-contract_no2');
                    contractNo2.style.color = 'blue';
                }
                if (detail.checkbox.posTarifNo === 'Y') {
                    var posTarifNo = document.getElementById('text-no_pos_tarif');
                    posTarifNo.style.color = 'blue';
                }
                if (detail.checkbox.incotermValue === 'Y') {
                    var incotermValue = document.getElementById('text-incoterms1');
                    incotermValue.style.color = 'blue';
                }
                if (detail.checkbox.docsRequired === 'Y') {
                    var docsRequired = document.getElementById('text-doc_required');
                    docsRequired.style.color = 'blue';
                }
                if (detail.checkbox.docsRequired === 'Y') {
                    var docsRequired = document.getElementById('text-doc_required');
                    docsRequired.style.color = 'blue';
                }
                if (detail.checkbox.additionalCondition === 'Y') {
                    var additionalCondition = document.getElementById('text-additional_cond');
                    additionalCondition.style.color = 'blue';
                }
                if (detail.checkbox.fileImage === 'Y') {
                    var fileImage1 = document.getElementById('text-file_upload1');
                    fileImage1.style.color = 'blue';
                    var fileImage2 = document.getElementById('text-file_upload2');
                    fileImage2.style.color = 'blue';
                    var fileImage3 = document.getElementById('text-file_upload3');
                    fileImage3.style.color = 'blue';
                    var fileImage4 = document.getElementById('text-file_upload4');
                    fileImage4.style.color = 'blue';
                    var fileImage5 = document.getElementById('text-file_upload5');
                    fileImage5.style.color = 'blue';
                }
                if (detail.checkbox.amendOtherInfo === 'Y') {
                    var amendOtherInfo = document.getElementById('text-amendOtherInfo');
                    amendOtherInfo.style.color = 'blue';
                }
                if (detail.checkbox.feeAccountName === 'Y') {
                    var feeAccountName = document.getElementById('text-fee_acct_no');
                    feeAccountName.style.color = 'blue';
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
                $('.table-hidden').show();
            }
        })
    }

    function unlockAction(e){
        $('#transactionModal').modal('show');
    }

    function getcreditAvailableCode(val) {
        var creditAvailableCode = {
            1: 'Payment',
            2: 'Acceptance',
            3: 'Negotiation',
            4: 'Deferred Payment',
        }
        return creditAvailableCode[val]
    }

    function getPayDraftAtValue2(val) {
        var namePayDraftAtValue2 = {
            '0': 'Other',
            '1': 'Air Waybill',
            '2': 'Arrival of Good',
            '3': 'Bill of Exchange',
            '4': 'Bill of Lading',
            '5': 'Invoice',
            '6': 'Shipemnt Date',
        }
        return namePayDraftAtValue2[val]
    }

    function currencyFormat(num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
    }

    // function downloadFile(e) {
    //     var imageUrl, fileName
    //     if (e == 'file_upload1') {
    //         imageUrl = fileImage1;
    //         fileName = $('#file_upload1').text()
    //     } else if (e == 'file_upload2') {
    //         imageUrl = fileImage2;
    //         fileName = $('#file_upload2').text()
    //     } else if (e == 'file_upload3') {
    //         imageUrl = fileImage3;
    //         fileName = $('#file_upload3').text()
    //     } else if (e == 'file_upload4') {
    //         imageUrl = fileImage4;
    //         fileName = $('#file_upload4').text()
    //     } else if (e == 'file_upload5') {
    //         imageUrl = fileImage5;
    //         fileName = $('#file_upload5').text()
    //     }

    //     var xhr = new XMLHttpRequest();
    //         xhr.responseType = 'blob';
    //         xhr.onload = function() {
    //             var blob = xhr.response;
    //             var url = window.URL.createObjectURL(blob);

    //             var a = $("<a>")
    //                 .attr("href", url)
    //                 .attr("download", fileName)
    //                 .appendTo("body");

    //             a[0].click();

    //             window.URL.revokeObjectURL(url);
    //             a.remove();
    //         };
    //         xhr.open('GET', imageUrl);
    //         xhr.send();
    // }

    // function downloadBankFile(e) {
    //     var imageUrl, fileName
    //     if (e == 'file_bank_upload1') {
    //         imageUrl = fileBankImage1;
    //         fileName = $('#file_bank_upload1').text()
    //     } else if (e == 'file_bank_upload2') {
    //         imageUrl = fileBankImage2;
    //         fileName = $('#file_bank_upload2').text()
    //     } else if (e == 'file_bank_upload3') {
    //         imageUrl = fileBankImage3;
    //         fileName = $('#file_bank_upload3').text()
    //     } else if (e == 'file_bank_upload4') {
    //         imageUrl = fileBankImage4;
    //         fileName = $('#file_bank_upload4').text()
    //     } else if (e == 'file_bank_upload5') {
    //         imageUrl = fileBankImage5;
    //         fileName = $('#file_bank_upload5').text()
    //     }

    //     var xhr = new XMLHttpRequest();
    //         xhr.responseType = 'blob';
    //         xhr.onload = function() {
    //             var blob = xhr.response;
    //             var url = window.URL.createObjectURL(blob);

    //             var a = $("<a>")
    //                 .attr("href", url)
    //                 .attr("download", fileName)
    //                 .appendTo("body");

    //             a[0].click();

    //             window.URL.revokeObjectURL(url);
    //             a.remove();
    //         };
    //         xhr.open('GET', imageUrl);
    //         xhr.send();
    // }

    function downloadFile(num, dtl) {
            var fileName;
            var fileId;
            var type;

            if (dtl == 'detail') {
                fileName = $('#file_upload_detail'+num).text();
                fileId = $('#fileIdTrx'+num).val();
                type = 'C';
            } else {
                fileName = $('#file_bank_upload'+num).text();
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

</script>
@include('form.script')
