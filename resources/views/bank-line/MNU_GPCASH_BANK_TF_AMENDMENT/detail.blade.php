﻿@include('_partials.header_content',['breadcrumb'=>['Amendment LC Search','detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="radioSelect" value=""/>
            <input type="hidden" id="issuanceID" value=""/>
            <input type="hidden" id="corpId" value=""/>
            <input type="hidden" id="currencyCode" value=""/>
            <input type="hidden" id="amountFrom" value=""/>
            <input type="hidden" id="amountTo" value=""/>
            <input type="hidden" id="releaseDateFrom" value=""/>
            <input type="hidden" id="releaseDateTo" value=""/>
            <input type="hidden" id="tabActive" value=""/>
            <div class="box">


                <div class="box-header">
                    <h3 class="box-title">Amendment LC Detail</h3><br>
                </div>
                <form class="form-horizontal">
                <div class="box-header">
                    <h3 class="box-title">General</h3><br>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Transaction Reference No.</label>
                                <div class="col-md-6">
                                    <label id="transNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Bank Reference No.</label>
                                <div class="col-md-6">
                                    <label id="bankRefno">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Corporate ID</label>
                                <div class="col-md-6">
                                    <label id="corpID">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Corporate name</label>
                                <div class="col-md-6">
                                    <label id="corpName">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Maker ID</label>
                                <div class="col-md-6">
                                    <label id="makerID">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Corp Release Date</label>
                                <div class="col-md-6">
                                    <label id="appDate">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Amount</label>
                                <div class="col-md-6">
                                    <label id="amount">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">
                                    <a onClick="unlockAction(this);" style="color:#337ab7; text-decoration:underline; cursor:pointer;">View Detail Transaction</a>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="box-header">
                    <h3 class="box-title">Attachment Detail</h3><br>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">File Upload</label>
                                <div class="col-md-6">
                                    <label id="code_1">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="box-header">
                    <h3 class="box-title">Bank Response</h3><br>
                </div>
                <form id="form-area" class="form-horizontal">
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="tab-validation">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end"><b>Action Status*</b></label>
                                    <div class="col-md-6 state_edit">
                                        <select class="form-control" id="actionStatus" data-error="please select action status" required>
                                            <option value=""> select action status</option>
                                            <option value="CONFIRM"> Confirm</option>
                                            <option value="RETURNED"> Return</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 state_view">
                                        <label id="actionStatus_view">-</label>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end">Comment</label>
                                    <!-- <div class="col-md-6 state_edit">
                                        <textarea id="validationComment" class="form-control" rows="3" maxlength="200" style="margin-top: 10px;height:100px !important;" required></textarea>
                                    </div> -->
                                    <div class="col-md-6 state_edit">
                                        <textarea id="validationComment" class="form-control" maxlength="200" style="min-height: 120px;" required></textarea>
                                    </div>
                                    <div class="col-md-6 state_view">
                                        <label id="validationComment_view">-</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-update">
                            <form id="form-area1" class="form-horizontal form-area1">
                                <div class="row">
                                    <div class="mb-3 row form-group">
                                        <label class="col-md-2 col-form-label text-end"><b>Action Status*</b></label>
                                        <div class="col-md-6 state_edit">
                                            <select class="form-control" id="actionStatus1" name="actionStatus1">
                                                <option value=""> select action status</option>
                                                <option value="APPROVED"> Approve</option>
                                                <option value="DECLINED"> Decline</option>
                                                <option value="RETURNED"> Return</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 state_view">
                                            <label id="actionStatus1_view">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row form-group">
                                        <label class="col-md-2 col-form-label text-end"><b>Bank Reference No</b></label>
                                        <div class="col-md-6 state_edit">
                                            <input type="text" id="bankRefNo" name="bankRefNo" class="form-control" autocomplete="off" value="" maxlength="40" disabled>
                                        </div>
                                        <div class="col-md-6 state_view">
                                            <label id="bankRefNo_view">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row form-group">
                                        <label class="col-md-2 col-form-label text-end"><b>Amend Date*</b></label>
                                        <div class="col-md-6 state_edit">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                <input type="text" id="amendDate" name="amendDate" class="form-control datepicker numeric" autocomplete="off" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 state_view">
                                            <label id="amendDate_view">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row form-group">
                                        <label class="col-md-2 col-form-label text-end">Comment</label>
                                        <!-- <div class="col-md-6 state_edit">
                                            <textarea id="updateStatusComment" class="form-control" rows="3" maxlength="200" style="margin-top: 10px;height:100px !important;" required></textarea>
                                        </div> -->
                                        <div class="col-md-6 state_edit">
                                            <textarea id="updateStatusComment" class="form-control" maxlength="200" style="min-height: 120px;" required></textarea>
                                        </div>
                                        <div class="col-md-6 state_view">
                                            <label id="updateStatusComment_view">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row form-group">
                                        <label class="col-md-2 col-form-label text-end">Upload Documents</label>
                                        <div class="col-md-6 state_edit" >
                                            <div style="text-align:right; margin-bottom:8px;">
                                                <button type="button" id="addFile" name="addFile" class="btn btn-default" style="border:1px solid #aaa;">Upload More</button>
                                            </div>
                                            <div id="upload-container"></div>
                                            <div id="errorFileFormat" style="color:red; margin-top:5px;"></div>
                                        </div>
                                            <!-- <div class="row" id="upload_file1" style="margin: 15px 0px;" data-index="1">
                                                <div class="col-md-6">
                                                    <input name="file" type="file" id="fileName1" value="Select file" accept=".pdf, .jpg, .jpeg, .tif" />
                                                    <i>* Allowed File Type: pdf, jpeg, jpg and tif.</i><br>
                                                    <span>Files must be less than 5 MB.</span>
                                                </div>
                                                <div class="float-right">
                                                    <button type="button" data-index="1" class="btn btn-danger delete-file">Clear</button>
                                                </div>
                                            </div>
                                            <div class="row" id="upload_file2" style="margin: 15px 0px;" data-index="2">
                                                <div class="col-md-6">
                                                    <input name="file" type="file" id="fileName2" value="Select file" accept=".pdf, .jpg, .jpeg, .tif" />
                                                    <i>* Allowed File Type: pdf, jpeg, jpg and tif.</i><br>
                                                    <span>Files must be less than 5 MB.</span>
                                                </div>
                                                <div class="float-right">
                                                    <button type="button" data-index="2" class="btn btn-danger delete-file">Clear</button>
                                                </div>
                                            </div>
                                            <div class="row" id="upload_file3" style="margin: 15px 0px;" data-index="3">
                                                <div class="col-md-6">
                                                    <input name="file" type="file" id="fileName3" value="Select file" accept=".pdf, .jpg, .jpeg, .tif" />
                                                    <i>* Allowed File Type: pdf, jpeg, jpg and tif.</i><br>
                                                    <span>Files must be less than 5 MB.</span>
                                                </div>
                                                <div class="float-right">
                                                    <button type="button" data-index="3" class="btn btn-danger delete-file">Clear</button>
                                                </div>
                                            </div>
                                            <div class="row" id="upload_file4" style="margin: 15px 0px;" data-index="4">
                                                <div class="col-md-6">
                                                    <input name="file" type="file" id="fileName4" value="Select file" accept=".pdf, .jpg, .jpeg, .tif" />
                                                    <i>* Allowed File Type: pdf, jpeg, jpg and tif.</i><br>
                                                    <span>Files must be less than 5 MB.</span>
                                                </div>
                                                <div class="float-right">
                                                    <button type="button" data-index="4" class="btn btn-danger delete-file">Clear</button>
                                                </div>
                                            </div>
                                            <div class="row" id="upload_file5" style="margin: 15px 0px;" data-index="5">
                                                <div class="col-md-6">
                                                    <input name="file" type="file" id="fileName5" value="Select file" accept=".pdf, .jpg, .jpeg, .tif" />
                                                    <i>* Allowed File Type: pdf, jpeg, jpg and tif.</i><br>
                                                    <span>Files must be less than 5 MB.</span>
                                                </div>
                                                <div class="float-right">
                                                    <button type="button" data-index="5" class="btn btn-danger delete-file">Clear</button>
                                                </div>
                                            </div> -->
                                            <!-- <div id="errorFileFormat"></div> -->
                                        <div class="col-md-6">
                                        <div id="upload-document"></div>
                                            <!-- <div class="state_view">
                                                <label id="fileName1_view"></label>
                                                <input type="hidden" id="fileId1" value=""/>
                                            </div>
                                            <div class="state_view">
                                                <label id="fileName2_view"></label>
                                                <input type="hidden" id="fileId2" value=""/>
                                            </div>
                                            <div class="state_view">
                                                <label id="fileName3_view"></label>
                                                <input type="hidden" id="fileId3" value=""/>
                                            </div>
                                            <div class="state_view">
                                                <label id="fileName4_view"></label>
                                                <input type="hidden" id="fileId4" value=""/>
                                            </div>
                                            <div class="state_view">
                                                <label id="fileName5_view"></label>
                                                <input type="hidden" id="fileId5" value=""/>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </form>
                <div class="box-footer">
                    <div class="float-left">
                        <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                        <button type="button" id="save_screen" name="save_screen" class="btn btn-default" style="display:none" onclick="save_pdf();">@lang('form.save_pdf')</button>
                    </div>
                    <div class="float-right">
                        <!-- <button type="button" id="delete" name="delete" class="btn btn-danger">@lang('form.delete')</button> -->
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
            <div class="modal-header">
                <h4 class="modal-title">Detail Transaction Amendment LC</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="box-header">
                    <h3 class="box-title text-uppercase">Amendment LC</h3><br>
                    <hr>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Transaction Status</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="transStatus">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Bank Reference No.</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="bankRefno1">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Transaction Reference No.</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="transNo1">-</label>
                                <!-- </div> -->
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Media of Issue</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="media_of_issue">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Application Date</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="application_date">-</label>
                                <!-- </div> -->
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Applicant Name</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="applicant_name">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Applicant Address</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="applicant_addr1">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="applicant_addr2">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="applicant_addr3">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Applicant Country</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="applicant_ctry">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Contact Person Phone No.</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="cp_phone">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Contact Person Fax No.</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="cp_fax">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">NPWP</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="npwp">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">API</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="api">-</label>
                                <!-- </div> -->
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Beneficiary Type</label>
                                <div class="col-md-6">
                                    <label id="bene_type">-</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Beneficiary Name</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="bene_name">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Beneficiary Address</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="bene_addr1">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="bene_addr2">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="bene_addr3">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Beneficiary Country</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="bene_ctry">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Beneficiary Phone No.</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="bene_phone">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Beneficiary Fax No.</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="bene_fax">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="mb-3 row form-group">
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Advising Bank Name</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="adv_bank_name">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Advising Bank Address</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="adv_bank_addr1">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="adv_bank_addr2">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="adv_bank_addr3">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Advising Bank Country</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="adv_bank_ctry">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Advising Bank Swift Code</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="adv_bank_swift">-</label>
                                <!-- </div> -->
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Customer Reference No.</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="cust_ref_no">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Transferable</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="transferable">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">LC Type</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="lc_type">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Confirming Instruction</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="confirm_inst">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Credit Available By</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="credit_avlb_by">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Payment/Draft At</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-2 col-form-label" id="payment_draft_at">-</label>&nbsp;<label class="col-md-3 col-form-label" id="payment_draft_at1">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Percentage of Invoice</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="percent_invoice">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-increase" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Increase Amount</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="incrase">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-decrease" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Decrease Amount</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="decrase">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-newAmount" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">New Amount</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="newAmount">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-currency" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Currency / Amount</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="currency">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-tolerance" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Tolerance Percentage</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-2 col-form-label" id="tolerance">-</label>&nbsp;<label class="col-md-3 col-form-label" id="tolerance1">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div id="text-tolerance1" class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <div class="col-md-6">

                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div id="text-addt_amount_covr" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Additionanl Amount Covered</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="addt_amount_covr"></label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-expiry_date" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Expiry Date</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="expiry_date">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-expiry_place" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Expiry Place</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="expiry_place">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-amend_narrative" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Amendment Narrative</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="amend_narrative" style="white-space: pre-wrap; width: 400px;">-</label>
                                <!-- </div> -->
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
                            <div id="label_charge_by_bank" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Issuing Bank Charges Paid By</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="charge_by_bank">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="label_charge_by_confirm" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Confirming Charges Paid By</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="charge_by_confirm">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="label_charge_by_outside" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Outside Country Charges Paid By</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="charge_by_outside">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="label_charge_by_reimbursing" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Reimbursing Bank Charge Paid By</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="charge_by_reimbursing">-</label>
                                <!-- </div> -->
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
                            <div id="text-ship_date1" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Shipment Date</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="ship_date1">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <div class="col-md-6">
                                    <label id="ship_date1">-</label>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div id="text-period_present" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Period of Presentation</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="period_present">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-narrative_present" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Narrative of Presentation</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="narrative_present">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-partial_shipment" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Partial Shipment</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="partial_shipment">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-transhipment" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Transhipment</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="transhipment">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-port_loading" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Port of Loading</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="port_loading">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-port_discharge" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Port of Discharge</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="port_discharge">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-incoterms" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Incoterms</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="incoterms">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-name_of_place" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Name of Place</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="name_of_place">-</label>
                                <!-- </div> -->
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
                            <div id="text-origin_ctry_goods" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Origin Country of Goods</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="origin_ctry_goods">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-name_of_goods1" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Name of Goods</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="name_of_goods1">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-name_of_goods2" class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="name_of_goods2">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-name_of_goods3" class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="name_of_goods3">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-name_of_goods4" class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="name_of_goods4">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-name_of_goods5" class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="name_of_goods5">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-type_of_goods1" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Type of Goods</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="type_of_goods1">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-type_of_goods2" class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="type_of_goods2">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-qlty_of_goods" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Quality of Goods</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="qlty_of_goods">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-vol_of_goods" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Volume of Goods</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="vol_of_goods">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-price_per_unit" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Price per Unit</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="price_per_unit">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-contract_no1" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Contract No.</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="contract_no1">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-contract_no2" class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="contract_no2">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-no_pos_tarif" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">No. Pos Tarif(HS)</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="no_pos_tarif">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-incoterms1" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Incoterms</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="incoterms1">-</label>
                                <!-- </div> -->
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
                            <div id="text-doc_required" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Documents Required</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" style="white-space: pre-wrap; width: 400px;" id="doc_required">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-additional_cond" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Additional Conditions</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" style="white-space: pre-wrap; width: 400px;" id="additional_cond">-</label>
                                <!-- </div> -->
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Other Information</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="other_info">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-amendOtherInfo" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Amendment Other Information</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="amendOtherInfo" style="white-space: pre-wrap; width: 400px;">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-fee_acct_no" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Account No. for Fees</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="fee_acct_no">-</label>
                                <!-- </div> -->
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
                            <div id="text-file_upload1" class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">File Upload</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label">
                                        <a onClick="downloadFile('1', 'detail');" id="file_upload1" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                    </label>
                                    <input type="hidden" id="fileIdTrx1" value=""/>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-file_upload1" class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label">
                                        <a onClick="downloadFile('2', 'detail');" id="file_upload2" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                    </label>
                                    <input type="hidden" id="fileIdTrx2" value=""/>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-file_upload1" class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label">
                                        <a onClick="downloadFile('3', 'detail');" id="file_upload3" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                    </label>
                                    <input type="hidden" id="fileIdTrx3" value=""/>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-file_upload1" class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label">
                                        <a onClick="downloadFile('4', 'detail');" id="file_upload4" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                    </label>
                                    <input type="hidden" id="fileIdTrx4" value=""/>
                                <!-- </div> -->
                            </div>
                        </div>
                        <div class="row">
                            <div id="text-file_upload1" class="mb-3 row form-group">
                                <label class="col-md-4"></label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label">
                                        <a onClick="downloadFile('5', 'detail');" id="file_upload5" style="color:#337ab7; text-decoration:underline; cursor:pointer;">-</a>
                                    </label>
                                    <input type="hidden" id="fileIdTrx5" value=""/>
                                <!-- </div> -->
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Affiliate</label>
                                <!-- <div class="col-md-6"> -->
                                    <label class="col-md-6 col-form-label" id="affiliate">-</label>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" id="print" name="print" class="btn btn-primary">Print</button>
				<button type="button" class="btn btn-default" data-bs-dismiss="modal">@lang('form.close')</button>
			</div>
        </div>
    </div>
</div>

<script>
    var oTable;
    var id = '{{ $service }}';
    var noRef;
    var type;
    var selectedValue
    var fileImage1, fileImage2, fileImage3, fileImage4, fileImage5
    let formCounter = 0;
    let uploadIndex = 1;
    let arrFile = []
    const maxForms = 5;
    $(document).ready(function () {
        $('.state_delete').hide();
        $('.tab-validation').hide();
        $('.tab-update').hide();
        $('.state_view').hide();
        $('#submit_view').hide();

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true
        });

        $('#amendDate').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));

        $('select[id="actionStatus1"]').on('change', function(e) {
            selectedValue = $(this).val();
            if (selectedValue == 'DECLINED' || selectedValue == 'RETURNED') {
                $('#amendDate').prop("disabled",true);
            } else {
                $('#amendDate').prop("disabled",false);
            }
        })

        $("#addFile").on("click", function () {
            if (formCounter < maxForms) {
                formCounter++;
                uploadIndex++;
                createUploadRow(uploadIndex);
            } else {
                alert("Maximum limit reached: " + maxForms);
            }
        });

        // Function to delete an upload row
        function deleteFile(fileNumber) {
            $(`#upload_file${fileNumber}`).remove();
            $("#errorFileFormat").text("").hide();
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
                validateAndUploadFile(file, formData, fileNumber);
            }
        });

        function validateAndUploadFile(file, formData, fileNumber) {
            const extension = file.name.split(".").pop().toLowerCase();

            // Check file format
            const validExtensions = ["pdf", "jpeg", "jpg", "tiff"];
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

        function uploadFile (formData, fileNumber) {
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: 'uploadTrade',
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                timeout: (60000*5),
                async:false,
                xhrFields: {
                    withCredentials: true
                },
                headers: { 'x-xsrf-token': '{{ csrf_token() }}' },
                success: function (data) {
                    var result = JSON.parse(data);
                    if (result.status=="200") {
                        arrFile.push({
                            filename: result.fileName,
                            fileId: result.fileId,
                            fileNumber: fileNumber
                        })
                        console.log(arrFile);
                    }
                }, error: function (xhr, ajaxOptions, thrownError) {
                    var msg = '{{trans('form.conn_error')}}';
                    flash('warning', msg);
                    console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
                }
            });
        }

        $('#validationComment').on('input', function () {
            const regex = /^[a-zA-Z0-9.,\s-]*$/;
            const textarea = $(this);
            const value = textarea.val();

            if (!regex.test(value)) {
                const cleanValue = value.replace(/[^a-zA-Z0-9.,\s-]/g, '');
                textarea.val(cleanValue);
                textarea.addClass('invalid');
            } else {
                textarea.removeClass('invalid');
            }
        });

        $('#bankRefNo').on('input', function () {
            const regex = /^[a-zA-Z0-9.,\s-]*$/;
            const textarea = $(this);
            const value = textarea.val();

            if (!regex.test(value)) {
                const cleanValue = value.replace(/[^a-zA-Z0-9.,\s-]/g, '');
                textarea.val(cleanValue);
                textarea.addClass('invalid');
            } else {
                textarea.removeClass('invalid');
            }
        });

        $('#updateStatusComment').on('input', function () {
            const regex = /^[a-zA-Z0-9.,\s-]*$/;
            const textarea = $(this);
            const value = textarea.val();

            if (!regex.test(value)) {
                const cleanValue = value.replace(/[^a-zA-Z0-9.,\s-]/g, '');
                textarea.val(cleanValue);
                textarea.addClass('invalid');
            } else {
                textarea.removeClass('invalid');
            }
        });

        $('#confirm').on('click', function () {
            var tabActive= $('#tabActive').val();
            $('#form-area').validator('validate');
            if ($('#form-area').validator('validate').has('.has-error').length!=0){
                return;
            }

            if ($('#errorFileFormat').text() != '') {
                return;
            }

            if (tabActive === '#tab_validation') {
                if ($('#actionStatus').val() == "") {
                    var content ='{{trans('form.alert_empty',['label'=>'Action status'])}}';
                    $.alert({
                        title: '{{trans('form.warning')}}',
                        content: content
                    });
                    return;
                }
            } else {
                if ($('#actionStatus1').val() == "") {
                    var content ='{{trans('form.alert_empty',['label'=>'Action status'])}}';
                    $.alert({
                        title: '{{trans('form.warning')}}',
                        content: content
                    });
                    return;
                }

                if (selectedValue === 'APPROVED') {
                    if ($('#bankRefNo').val() == "") {
                        var content ='{{trans('form.alert_empty',['label'=>'Bank reference no'])}}';
                        $.alert({
                            title: '{{trans('form.warning')}}',
                            content: content
                        });
                        return;
                    }
                    if ($('#amendDate').val() == "") {
                        var content ='{{trans('form.alert_empty',['label'=>'Issue date'])}}';
                        $.alert({
                            title: '{{trans('form.warning')}}',
                            content: content
                        });
                        return;
                    }
                }
            }
            setTimeout(function(){
                stateView();
            });
        });

        $('#print').on('click', function() {
            var combinedApplicant = $('#applicant_addr1').text() + ' ' + $('#applicant_addr2').text() + ' ' + $('#applicant_addr3').text();
            $('#applicant_addr1').text(combinedApplicant);
            $('#applicant_addr2').hide();
            $('#applicant_addr3').hide();

            var combinedAddress = $('#bene_addr1').text() + ' ' + $('#bene_addr2').text() + ' ' + $('#bene_addr3').text();
            $('#bene_addr1').text(combinedAddress);
            $('#bene_addr2').hide();
            $('#bene_addr3').hide();

            var combinedAdvising = $('#adv_bank_addr1').text() + ' ' + $('#adv_bank_addr2').text() + ' ' + $('#adv_bank_addr3').text();
            $('#adv_bank_addr1').text(combinedAdvising);
            $('#adv_bank_addr2').hide();
            $('#adv_bank_addr3').hide();

            var combinedGoods = $('#name_of_goods1').text() + ' ' + $('#name_of_goods2').text() + ' ' + $('#name_of_goods3').text() + ' ' + $('#name_of_goods4').text() + ' ' + $('#name_of_goods5').text();
            $('#name_of_goods1').text(combinedGoods);
            $('#name_of_goods2').hide();
            $('#name_of_goods3').hide();
            $('#name_of_goods4').hide();
            $('#name_of_goods5').hide();

            var combinedType = $('#type_of_goods1').text() + ' ' + $('#type_of_goods2').text();
            $('#type_of_goods1').text(combinedType);
            $('#type_of_goods2').hide();

            var combinedContract = $('#contract_no1').text() + ' ' + $('#contract_no2').text();
            $('#contract_no1').text(combinedContract);
            $('#contract_no2').hide();

            var combinedFile = $('#file_upload1').text() + ' ' + $('#file_upload2').text() + ' ' + $('#file_upload3').text() + ' ' + $('#file_upload4').text() + ' ' + $('#file_upload5').text();
            $('#file_upload1').text(combinedFile);
            $('#file_upload2').hide();
            $('#file_upload3').hide();
            $('#file_upload4').hide();
            $('#file_upload5').hide();

            var printContents = $('#transactionModal').html();

            var printWindow = window.open('', '_blank');
            printWindow.document.write('<html><head><title>-</title>');
            printWindow.document.write('<style>');
            printWindow.document.write('@media print {');
            printWindow.document.write('@page { size: A4; margin: 1cm; }'); // Set paper size to A4 and margin to 1cm
            printWindow.document.write('*[style] { margin-left: 0 !important; padding-left: 0 !important; }');
            printWindow.document.write('.col-form-label { font-weight: bold; }');
            printWindow.document.write('.col-form-label::after { content: ":"; margin-right: 5px; }');
            printWindow.document.write('#media_of_issue { display: inline; }');
            printWindow.document.write('.col-md-6 { display: inline-flex; align-items: flex-start; }'); // Flexbox with align-items: flex-start
            printWindow.document.write('br { display: none; }');
            printWindow.document.write('#print { display: none; }');
            printWindow.document.write('.btn-default { display: none; }');
            printWindow.document.write('.close { display: none; }');
            printWindow.document.write('</style></head><body>');
            printWindow.document.write(printContents);
            printWindow.document.write('</body></html>');

            printWindow.document.close();
            printWindow.print();
            printWindow.onafterprint = function () {
                printWindow.close();
            };
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

        function submitData(){
            var action = 'CREATE'
            var url_action = 'submit'
            var tabActive= $('#tabActive').val();
            var value

            if (tabActive === '#tab_validation') {
                value = {
                    issuanceId:  $('#issuanceID').val(),
                    actionStatus: $('#actionStatus').val(),
                    validationComment: $('#validationComment').val(),
                    bankRefNo: $('#bankRefNo').val(),
                    type: 'searchValidationLC'
                }
            } else {
                value = {
                    issuanceId: $('#issuanceID').val(),
                    actionStatus: $('#actionStatus1').val(),
                    bankRefNo: $('#bankRefNo').val(),
                    amendDate: $('#amendDate').val(),
                    updateStatusComment: $('#updateStatusComment').val(),
                    fileName1: $('#fileName1_view').text(),
                    fileId1: $('#fileId1').val(),
                    fileName2: $('#fileName2_view').text(),
                    fileId2: $('#fileId2').val(),
                    fileName3: $('#fileName3_view').text(),
                    fileId3: $('#fileId3').val(),
                    fileName4: $('#fileName4_view').text(),
                    fileId4: $('#fileId4').val(),
                    fileName5: $('#fileName5_view').text(),
                    fileId5: $('#fileId5').val(),
                    type: 'searchUpdateStatusLC'
                }
                value.fileId1 = value.fileId1 === undefined ? "" : value.fileId1;
                value.fileId2 = value.fileId2 === undefined ? "" : value.fileId2;
                value.fileId3 = value.fileId3 === undefined ? "" : value.fileId3;
                value.fileId4 = value.fileId4 === undefined ? "" : value.fileId4;
                value.fileId5 = value.fileId5 === undefined ? "" : value.fileId5;
            }

            // console.log(value);
            $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {"_token": "{{ csrf_token() }}",
            action:action,
            url_action:url_action,
            menu: id,
            value: value},
            success: function (data) {
                $('#confirm').prop('disabled',false);
                var result = JSON.parse(data);
                if (result.status=="200") {
                    type = 'finally';
                    noRef=result.referenceNo;
                    $('#submit_view').hide();
                    $('#next_user').show();
                    $('#save_screen').show();
                    $('#back').hide();
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

        $('.back').on('click', function () {
            if (type == 'validation') {
                var res = app.setView(id,'landing');
            } else if (type == 'finally') {
                var res = app.setView(id,'landing');
            } else {
                $('.state_view label').each(function() {
                    if ($(this).text().trim() === '') {
                        $(this).show();
                    }
                });
                $('.state_edit').show();
                $('#confirm').show();
                $('.state_view').hide();
                $('#submit_view').hide();
                type = 'validation'

                for (let i = 0; i < arrFile.length; i++) {
                    $(`.file${i + 1}`).remove();
                }
            }
        });

        $('.done').on('click', function () {
           var res = app.setView(id,'landing');
        });

    });

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

    function getDetail(){
        var tabActive= $('#tabActive').val();
        var url_action

        if (tabActive === '#tab_validation') {
            $('.tab-validation').show();
            url_action = 'searchValidationLC';
        } else {
            $('.tab-update').show();
            url_action = 'searchUpdateStatusLC';
        }
        var radioSelect = $('#radioSelect').val();
        var issuanceId= $('#issuanceID').val();
        var corpId= $('#corpId').val();
        var currencyCode= $('#currencyCode').val();
        var amountFrom= $('#amountFrom').val();
        var amountTo= $('#amountTo').val();
        var releaseDateFrom= $('#releaseDateFrom').val();
        var releaseDateTo= $('#releaseDateTo').val();
        var value ={
            issuanceId: issuanceId,
            corpId: corpId,
            currencyCode: currencyCode,
            amountFrom: amountFrom,
            amountTo: amountTo,
            releaseDateFrom: releaseDateFrom,
            releaseDateTo: releaseDateTo,
            currentPage: "1",
            pageSize: "20",
            orderBy: {"id": "ASC"}
        };

        if (radioSelect === '1') {
            value.releaseDateFrom = ''
            value.releaseDateTo = ''
            value.amountFrom = ''
            value.amountTo = ''
            value.currencyCode = ''
            value.corpId = ''
        } else if (radioSelect === '2') {
            value.releaseDateFrom = ''
            value.releaseDateTo = ''
            value.amountFrom = ''
            value.amountTo = ''
            value.currencyCode = ''
            value.corpId = ''
        }

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
                    var index = result.result.map(function(o) { return o.issuanceId; }).indexOf(issuanceId.toString());
                    var detail = result.result[index];
                    let applicationDate = moment(detail.applicationDate, 'DD/MM/YYYY').format("DD-MMM-YYYY")

                    // Add Image
                    if (formCounter < maxForms) {
                        formCounter++;
                        createUploadRow(formCounter);
                    } else {
                        alert("Maximum limit reached: " + maxForms);
                    }

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
                    $('#bankRefno1').text(detail.bankRefNo);
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
                    var incoterms1 = `${detail.incotermName} ${detail.incotermValue}`
                    $('#incoterms1').text(incoterms1);
                    // Documents
                    $('#doc_required').text(detail.docsRequired);
                    $('#additional_cond').text(detail.additionalCondition);
                    // Others
                    $('#other_info').text(detail.otherInformation);
                    $('#amendOtherInfo').text(detail.amendOtherInfo);
                    var fee_acct_no = detail.feeAccountNo + ' / ' + detail.feeAccountName + '(' + detail.feeAccountCcy + ')'
                    $('#fee_acct_no').text(fee_acct_no);
                    $('#file_upload1').text(detail.fileName1);
                    $('#fileIdTrx1').val(detail.fileId1);
                    $('#file_upload2').text(detail.fileName2);
                    $('#fileIdTrx2').val(detail.fileId2);
                    $('#file_upload3').text(detail.fileName3);
                    $('#fileIdTrx3').val(detail.fileId3);
                    $('#file_upload4').text(detail.fileName4);
                    $('#fileIdTrx4').val(detail.fileId4);
                    $('#file_upload5').text(detail.fileName5);
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
        });
    }

    function createUploadRow(fileNumber) {
        const uploadRow = `
            <div id="upload_file${fileNumber}" style="display:flex; align-items:flex-start; justify-content:space-between; margin-bottom:10px">
                <div>
                    <input name="file" type="file" id="fileName${fileNumber}" accept=".pdf, .jpg, .jpeg, .tif" style="display:none;" />
                    <div style="display:flex; align-items:center; gap:8px;">
                        <button type="button" class="btn btn-default" style="border:1px solid #aaa;" onclick="document.getElementById('fileName${fileNumber}').click()">Choose File</button>
                        <span id="fileLabel${fileNumber}" style="color:#555; font-size:13px;">No file chosen</span>
                    </div>
                    <div><small><i>* Allowed File Type: pdf, jpeg, jpg and tif.</i></small></div>
                    <div><small>Files must be less than 5 MB.</small></div>
                </div>
                <div style="margin-left:10px; flex-shrink:0;">
                    <button type="button" data-index="${fileNumber}" class="btn btn-danger" onclick="deleteFile(${fileNumber})">Clear</button>
                </div>
            </div>`;
        $("#upload-container").append(uploadRow);
    }

    function stateView(){
        $('.state_edit').hide();
        $('.state_view').show();
        var tabActive= $('#tabActive').val();
        type = 'edit';
        if (tabActive === '#tab_validation') {
            var actionStatus = ($('#actionStatus').val() == '' ? '-' : $('#actionStatus').val());
            var validationComment = ($('#validationComment').val() == '' ? '-' : $('#validationComment').val());
            $('#actionStatus_view').text(actionStatus);
            $('#validationComment_view').text(validationComment);
        } else {
            var actionStatus1 = ($('#actionStatus1').val() == '' ? '-' : $('#actionStatus1').val());
            var bankRefNo = ($('#bankRefNo').val() == '' ? '-' : $('#bankRefNo').val());
            var amendDate = ($('#amendDate').val() == '' ? '-' : $('#amendDate').val());
            var updateStatusComment = ($('#updateStatusComment').val() == '' ? '-' : $('#updateStatusComment').val());
            $('#actionStatus1_view').text(actionStatus1);
            $('#bankRefNo_view').text(bankRefNo);
            $('#amendDate_view').text(amendDate);
            $('#updateStatusComment_view').text(updateStatusComment);

            $.each(arrFile, function(index, file) {
                // Template row HTML
                let uploadRow = `
                    <div class="link-primary col-md-6 state_view file${index + 1}">
                        <label id="fileName${index + 1}_view">${file.filename}</label>
                        <input type="hidden" id="fileId${index + 1}" value="${file.fileId}"/>
                    </div>
                `;

                // Append row ke elemen #upload-document
                $("#upload-document").append(uploadRow);
            });
        }
        $('.state_view label').each(function() {
            if ($(this).text().trim() === '') {
                $(this).hide();
            }
        });
        $('#submit_view').show();
        $('#save_screen').hide();
        $('#confirm').hide();
    }

    function unlockAction(e){
        $('#transactionModal').modal('show');
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

    function downloadFile(num, dtl) {
            var fileName;
            var fileId;
            var type;

            if (dtl == 'detail') {
                fileName = $('#file_upload'+num).text();
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

    function currencyFormat(num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }
</script>
