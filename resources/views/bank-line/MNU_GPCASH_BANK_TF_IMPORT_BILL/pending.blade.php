@include('_partials.header_content',['breadcrumb'=>['Pending task','Import LC Detail']])


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
                                    <label class="col-md-5 col-form-label text-end">Menu</label>
                                    <div class="col-md-6">
                                        <label id="menu_text">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end">Activity</label>
                                    <div class="col-md-6">
                                        <label id="activity_text">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end">Reference Number</label>
                                    <div class="col-md-6">
                                        <label id="noref_text">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end">Activity Date Time</label>
                                    <div class="col-md-6">
                                        <label id="datetime_text">-</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-header">
                        <h3 class="box-title">Import Bills Detail</h3><br>
                    </div>
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="box-header">
                                <h3 class="box-title">LC INFORMATION</h3>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"><strong>Corporate ID</strong></label>
                                    <div class="col-md-6">
                                        <label id="corpId"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"><strong>Coporate Name</strong></label>
                                    <div class="col-md-6">
                                        <label id="corpName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"><strong>Bank Reference No</strong></label>
                                    <div class="col-md-6 col-form-label">
                                        <a onClick="unlockAction(this);" style="color:#007bff; cursor:pointer; text-decoration:underline;">
                                            <label id="bankRefNo" ></label>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"><strong>Issued Date</strong></label>
									<div class="col-md-6 state_issuedt">
                                        <label id="issuedDate" ></label>
									</div>
                                </div>
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">APPLICANT DETAIL</h3>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"><strong>Applicant Name</strong></label>
                                    <div class="col-md-6">
                                        <label id="applicantName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"><strong>Applicant Address</strong></label>
                                    <div class="col-md-6">
                                        <label id="applicantAddress1"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <label id="applicantAddress2"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <label id="applicantAddress3"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"><strong>Application Country</strong></label>
                                    <div class="col-md-6">
                                        <label id="applicantCountryName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">BENEFICIARY DETAIL</h3>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"><strong>Beneficiary Name</strong></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"><strong>Beneficary Address</strong></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryAddress1"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryAddress2"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryAddress3"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"><strong>Beneficiary Country<strong></label>
                                    <div class="col-md-6">
                                        <label id="beneficiaryCountryName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">BILLS DETAIL</h3>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"><strong>Bank Presentation Reference No.</strong></label>
                                    <div class="col-md-6">
                                        <label id="bankPresentationRefNo"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"><strong>Bill Reference No.</strong></label>
                                    <div class="col-md-6">
                                        <label id="billRefNo"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"><strong>Maturity Date</strong></label>
                                    <div class="col-md-6">
                                        <label id="maturityDate"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-5 col-form-label text-end"><strong>Letter of Credit Amount</strong></label>
                                    <div class="col-md-6">
                                        <label id="lcAmount"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end"><strong>Discrepancy</strong></label>
                                <div class="col-md-6">
                                    <label id="discrepancy1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end"><strong>Notes</strong></label>
                                <div class="col-md-6">
                                    <label id="notes1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">ATTACHMENT DETAIL</h3>
                        </div>
                        <div class="row" style="padding-top: 20px">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Upload Documents</label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('1', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName1">-</a>
                                    </label>
                                    <input type="hidden" id="fileId1" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file2" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('2', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName2">-</a>
                                    </label>
                                    <input type="hidden" id="fileId2" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file3" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('3', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName3">-</a>
                                    </label>
                                    <input type="hidden" id="fileId3" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file4" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('4', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName4">-</a>
                                    </label>
                                    <input type="hidden" id="fileId4" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file5" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('5', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName5">-</a>
                                    </label>
                                    <input type="hidden" id="fileId5" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file6" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('6', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName6">-</a>
                                    </label>
                                    <input type="hidden" id="fileId6" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file7" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('7', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName7">-</a>
                                    </label>
                                    <input type="hidden" id="fileId7" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file8" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('8', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName8">-</a>
                                    </label>
                                    <input type="hidden" id="fileId8" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file9" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('9', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName9">-</a>
                                    </label>
                                    <input type="hidden" id="fileId9" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file10" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('10', 'detail');" id="fileName10">-</a>
                                    </label>
                                    <input type="hidden" id="fileId10" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file11" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('11', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName11">-</a>
                                    </label>
                                    <input type="hidden" id="fileId11" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file12" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('12', 'detail');" id="fileName12">-</a>
                                    </label>
                                    <input type="hidden" id="fileId12" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file13" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('13', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName13">-</a>
                                    </label>
                                    <input type="hidden" id="fileId13" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file14" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('14', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName14">-</a>
                                    </label>
                                    <input type="hidden" id="fileId14" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file15" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('15', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName15">-</a>
                                    </label>
                                    <input type="hidden" id="fileId15" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file16" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('16', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName16">-</a>
                                    </label>
                                    <input type="hidden" id="fileId16" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file17" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('17', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName17">-</a>
                                    </label>
                                    <input type="hidden" id="fileId17" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file18" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('18', 'detail');" id="fileName18">-</a>
                                    </label>
                                    <input type="hidden" id="fileId18" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file19" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('19', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName19">-</a>
                                    </label>
                                    <input type="hidden" id="fileId19" value=""/>
                                </div>
                            </div>
                            <div class="mb-3 row form-group file20" style="display: none">
                                <label class="col-md-5 col-form-label text-end"></label>
                                <div class="col-md-6 ">
                                    <label>
                                        <a onClick="downloadFile('20', 'detail');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="fileName20">-</a>
                                    </label>
                                    <input type="hidden" id="fileId20" value=""/>
                                </div>
                            </div>
                        </div>
                         @include('form.reason')
                    </div>

                    <div class="box-footer">
                        <div class="state_view"  data-html2canvas-ignore="true">
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Transaction Status</label>
                                <div class="col-md-6">
                                    <label id="transStatus">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Media of Issue</label>
                                <div class="col-md-6">
                                    <label id="media_of_issue">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Applicant Name</label>
                                <div class="col-md-6">
                                    <label id="applicant_name">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Applicant Address</label>
                                <div class="col-md-6">
                                    <label id="applicant_addr1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="applicant_addr2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="applicant_addr3">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Applicant Country</label>
                                <div class="col-md-6">
                                    <label id="applicant_ctry">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Contact Person Phone No.</label>
                                <div class="col-md-6">
                                    <label id="cp_phone">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Contact Person Fax No.</label>
                                <div class="col-md-6">
                                    <label id="cp_fax">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">NPWP</label>
                                <div class="col-md-6">
                                    <label id="npwp">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
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
                                <div class="col-md-6">
                                    <label id="bene_name">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Beneficiary Address</label>
                                <div class="col-md-6">
                                    <label id="bene_addr1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="bene_addr2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="bene_addr3">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Beneficiary Country</label>
                                <div class="col-md-6">
                                    <label id="bene_ctry">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Beneficiary Phone No.</label>
                                <div class="col-md-6">
                                    <label id="bene_phone">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Beneficiary Fax No.</label>
                                <div class="col-md-6">
                                    <label id="bene_fax">-</label>
                                </div>
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
                                <div class="col-md-6">
                                    <label id="adv_bank_name">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Advising Bank Address</label>
                                <div class="col-md-6">
                                    <label id="adv_bank_addr1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="adv_bank_addr2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="adv_bank_addr3">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Advising Bank Country</label>
                                <div class="col-md-6">
                                    <label id="adv_bank_ctry">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Customer Reference No.</label>
                                <div class="col-md-6">
                                    <label id="cust_ref_no">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Transferable</label>
                                <div class="col-md-6">
                                    <label id="transferable">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">LC Type</label>
                                <div class="col-md-6">
                                    <label id="lc_type">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Confirming Instruction</label>
                                <div class="col-md-6">
                                    <label id="confirm_inst">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Credit Available By</label>
                                <div class="col-md-6">
                                    <label id="credit_avlb_by">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Payment/Draft At</label>
                                <div class="col-md-6">
                                    <label id="payment_draft_at">-</label><label id="payment_draft_at1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Currency / Amount</label>
                                <div class="col-md-6">
                                    <label id="currency">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Tolerance Percentage</label>
                                <div class="col-md-6">
                                    <label id="tolerance">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="tolerance1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Additionanl Amount Covered</label>
                                <div class="col-md-6">
                                    <label id="addt_amount_covr"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Expiry Date</label>
                                <div class="col-md-6">
                                    <label id="expiry_date">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Issuing Bank Charges Paid By</label>
                                <div class="col-md-6">
                                    <label id="charge_by_bank">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Confirming Charges Paid By</label>
                                <div class="col-md-6">
                                    <label id="charge_by_confirm">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Outside Country Charges Paid By</label>
                                <div class="col-md-6">
                                    <label id="charge_by_outside">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Shipment Date</label>
                                <div class="col-md-6">
                                    <label id="ship_date">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="ship_date1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Period of Presentation</label>
                                <div class="col-md-6">
                                    <label id="period_present">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Narrative of Presentation</label>
                                <div class="col-md-6">
                                    <label id="narrative_present">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Partial Shipment</label>
                                <div class="col-md-6">
                                    <label id="partial_shipment">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Transhipment</label>
                                <div class="col-md-6">
                                    <label id="transhipment">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Port of Loading</label>
                                <div class="col-md-6">
                                    <label id="port_loading">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Port of Discharge</label>
                                <div class="col-md-6">
                                    <label id="port_discharge">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Incoterms</label>
                                <div class="col-md-6">
                                    <label id="incoterms">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Origin Country of Goods</label>
                                <div class="col-md-6">
                                    <label id="origin_ctry_goods">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Name of Goods</label>
                                <div class="col-md-6">
                                    <label id="name_of_goods1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods3">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods4">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="name_of_goods5">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Type of Goods</label>
                                <div class="col-md-6">
                                    <label id="type_of_goods1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="type_of_goods2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Quality of Goods</label>
                                <div class="col-md-6">
                                    <label id="qlty_of_goods">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Volume of Goods</label>
                                <div class="col-md-6">
                                    <label id="vol_of_goods">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Price per Unit</label>
                                <div class="col-md-6">
                                    <label id="price_per_unit">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Contract No.</label>
                                <div class="col-md-6">
                                    <label id="contract_no1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label id="contract_no2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">No. Pos Tarif(HS)</label>
                                <div class="col-md-6">
                                    <label id="no_pos_tarif">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Documents Required</label>
                                <div class="col-md-6">
                                    <label style="white-space: pre;" id="doc_required">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">Other Information</label>
                                <div class="col-md-6">
                                    <label id="other_info">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
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
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label ">File Upload</label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('file_upload1');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="file_upload1">-</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('file_upload2');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="file_upload2">-</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('file_upload3');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="file_upload3">-</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label "></label>
                                <div class="col-md-6">
                                    <label>
                                        <a onClick="downloadFile('file_upload4');" style="color:#337ab7;text-decoration:underline; cursor:pointer;" id="file_upload4">-</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
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
                            <div class="mb-3 row form-group">
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

                    $('#fileId1').val(detail.fileId1);
                    setField('fileName1', detail.fileName1);
                    for (var i = 2; i < 21; i++) {
                        // console.log('===========', detail['fileId'+i]);
                        if (detail['fileId'+i] !='') {
                            $('#fileId'+i).val(detail['fileId'+i]);
                            setField('fileName'+i, detail['fileName'+i]);
                            var className = '.file'+i;
                            $(className).show();
                        }
                    }

                    //===============================SET DETAIL LC========================
                    var lcDetail = detail.detailsLC;

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
                    $('#payment_draft_at').text(lcDetail.payDraftAtType);
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
                    $('#fileIdTrx1').val(lcDetail.fileId1);
                    // fileImage1 = 'data:application/octet-stream;base64,' + lcDetail.fileBytes1
                    $('#file_upload2').text(lcDetail.fileName2);
                    $('#fileIdTrx2').val(lcDetail.fileId2);
                    // fileImage2 = 'data:application/octet-stream;base64,' + lcDetail.fileBytes2
                    $('#file_upload3').text(lcDetail.fileName3);
                    $('#fileIdTrx3').val(lcDetail.fileId3);
                    // fileImage3 = 'data:application/octet-stream;base64,' + lcDetail.fileBytes3
                    $('#file_upload4').text(lcDetail.fileName4);
                    $('#fileIdTrx4').val(lcDetail.fileId4);
                    // fileImage4 = 'data:application/octet-stream;base64,' + lcDetail.fileBytes4
                    $('#file_upload5').text(lcDetail.fileName5);
                    $('#fileIdTrx5').val(lcDetail.fileId5);
                    // fileImage5 = 'data:application/octet-stream;base64,' + lcDetail.fileBytes5
                    $('#affiliate').text(lcDetail.isAffiliate === 'Y' ? 'Affiliate' : 'Non Affiliate');
                    //===============================SET DETAIL LC========================


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

    function downloadFile(num, dtl) {
            var fileName;
            var fileId;
            var type;

            if (dtl == 'detail') {
                fileName = $('#fileName'+num).text();
                fileId = $('#fileId'+num).val();
                type = 'B';
            } else {
                fileName = $('#file_upload'+num).text();
                fileId = $('#fileIdTrx'+num).val();
                type = 'C';
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

    function unlockAction(e){
        $('#transactionModal').modal('show');
    }

</script>
@include('form.script')
