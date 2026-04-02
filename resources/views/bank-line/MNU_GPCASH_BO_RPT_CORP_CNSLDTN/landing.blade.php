﻿@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'Search']])

<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    #downloadFormat {
        min-width: 160px;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,.15);
        border-radius: 4px;
        box-shadow: 0 6px 12px rgba(0,0,0,.175);
    }

    #downloadFormat.show {
        display: block !important;
    }

    #downloadFormat li {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    #downloadFormat .dropdown-item {
        display: block;
        width: 100%;
        padding: 8px 20px;
        clear: both;
        font-weight: 400;
        color: #333;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
        text-decoration: none;
        cursor: pointer;
    }

    #downloadFormat .dropdown-item:hover {
        background-color: #f5f5f5;
        color: #262626;
        text-decoration: none;
    }

    /* Error styling for select */
    #corporate.error {
        border-color: #dd4b39 !important;
    }

    .help-block.with-errors {
        color: #dd4b39;
        font-size: 12px;
        margin-top: 5px;
    }

    .datepicker-dropdown {
        z-index: 9999 !important;
    }

    .datepicker table {
        cursor: pointer;
    }

    /* Checkbox styling */
    .form-check {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .form-check-input {
        margin-right: 8px;
        margin-top: 0;
        cursor: pointer;
    }

    .form-check-label {
        margin-bottom: 0;
        cursor: pointer;
        user-select: none;
    }
</style>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                <div class="box-header">
                    <h3 class="box-title">Report Filter</h3>
                </div>
                <form class="form-horizontal" id="form-area">

                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <div class="col-md-3">
                                   <label for="corporate-rb"><strong>Company</strong></label>
                                </div>
                                <div class="col-md-5 row-corporate">
                                    <select class="form-control" id="corporate">
                                        <option value="">Select Company</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="mb-3 row form-group">
                                <div class="col-md-3">
                                   <label></label>
                                </div>
                                <div class="col-md-9 row-feature">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature-checkbox" id="inlineCheckbox1" value="PROFILE">
                                                <label class="form-check-label" for="inlineCheckbox1">Profile</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature-checkbox" id="inlineCheckbox2" value="AUTH_DEVICE">
                                                <label class="form-check-label" for="inlineCheckbox2">Authentication Type</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature-checkbox" id="inlineCheckbox3" value="CORP_CH_PC_DTL">
                                                <label class="form-check-label" for="inlineCheckbox3">Transaction Fee</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature-checkbox" id="inlineCheckbox4" value="CORP_LMT_PC_DTL">
                                                <label class="form-check-label" for="inlineCheckbox4">Transaction Limit</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature-checkbox" id="inlineCheckbox5" value="PRO_MNU_PC">
                                                <label class="form-check-label" for="inlineCheckbox5">Menu Setup</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature-checkbox" id="inlineCheckbox6" value="AUTH_LMT_SCHEME">
                                                <label class="form-check-label" for="inlineCheckbox6">Authorized Limit</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature-checkbox" id="inlineCheckbox7" value="APRV_MTRX">
                                                <label class="form-check-label" for="inlineCheckbox7">Approval Matrix</label>
                                            </div>
                                            <!-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature-checkbox" id="inlineCheckbox8" value="ACCT_SETUP">
                                                <label class="form-check-label" for="inlineCheckbox8">Account Hierarchy</label>
                                            </div> -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature-checkbox" id="inlineCheckbox9" value="ACCT_GROUP">
                                                <label class="form-check-label" for="inlineCheckbox9">Account Group</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="feature-checkbox" id="inlineCheckbox10" value="USER_GROUP">
                                                <label class="form-check-label" for="inlineCheckbox10">User Group</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="mb-3 row form-group">
                                <div class="col-md-12">
                                   <label><strong>Select none of the check box in order to select all available lists</strong></label>
                                </div>
                            </div>
                        </div>
					</div>
				</div>

                <div class="box-footer">
                    <!-- <div class="float-left">
                        <button type="button" id="search" name="search" class="btn btn-primary">@lang('form.save_pdf')</button>
                    </div> -->
                    <div>
                        <div class="float-left">
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Request Download
                                </button>

                                <ul class="dropdown-menu" id="downloadFormat">
                                </ul>
                            </div>

                            <button type="button" id="view" name="view" class="btn btn-info">View</button>
                        </div>
						<div class="float-right">
							<button type="button" id="search" name="search" class="btn btn-primary">Refresh</button>
						</div>
                    </div>
                </div>
                </form>
            </div>
			<div class="box-header list-title">
					<h3 class="box-title">Pending Download</h3>
            </div>

				<div class="box-body list-title">
                    <div class="container-fluid">
                        <div class="row">
                            <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                       style="border-collapse:collapse;">
                                <thead>
									<tr>
										<th align="center"><strong>No</strong></th>
										<th align="center"><strong>Request Date Time</strong></th>
										<th align="center"><strong>File Type</strong></th>
										<th align="center"><strong>File Name</strong></th>
										<th align="center"><strong>File Status</strong></th>
										<th align="center"><strong></strong></th>

									</tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="left"></td>
                                        <td align="left"></td>
										<td align="left"></td>
                                        <td align="left"></td>
										<td align="left"></td>
                                        <td align="left"></td>
                                    </tr>
                                 </tbody>
                            </table>
                         </div>
                    </div>
                </div>

                <div class="box profile_info">
                    <div class="box-header">
                        <h3 class="box-title"><strong>Bank Registered Data</strong></h3>
                    </div>
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <h4 class="box-title"><strong>Company Information</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Company ID</label>
                                    <div class="col-md-6">
                                        <label id="profile_corpId">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Company Name</label>
                                    <div class="col-md-6">
                                        <label id="profile_corpName">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Address</label>
                                    <div class="col-md-6">
                                        <label id="profile_address">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Post Code</label>
                                    <div class="col-md-6">
                                        <label id="profile_postCode">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">City</label>
                                    <div class="col-md-6">
                                        <label id="profile_city">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Country</label>
                                    <div class="col-md-6">
                                        <label id="profile_country">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Email Address 1</label>
                                    <div class="col-md-6">
                                        <label id="profile_email1">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Email Address 2</label>
                                    <div class="col-md-6">
                                        <label id="profile_email2">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Phone No.</label>
                                    <div class="col-md-6">
                                        <label id="profile_phone">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Fax No.</label>
                                    <div class="col-md-6">
                                        <label id="profile_fax">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Servicing Branch</label>
                                    <div class="col-md-6">
                                        <label id="profile_branch">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Industry Segment</label>
                                    <div class="col-md-6">
                                        <label id="profile_industry">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Business Unit</label>
                                    <div class="col-md-6">
                                        <label id="profile_unit">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Tax ID</label>
                                    <div class="col-md-6">
                                        <label id="profile_taxId">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Handling Officer</label>
                                    <div class="col-md-6">
                                        <label id="profile_officer">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Status</label>
                                    <div class="col-md-6">
                                        <label id="profile_status">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Reason</label>
                                    <div class="col-md-6">
                                        <label id="profile_reason">-</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="box-header">
                        <h3 class="box-title"><strong>Services</strong></h3>
                    </div> -->
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <h4 class="box-title"><strong>Services</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Services</label>
                                    <div class="col-md-6">
                                        <label id="profile_services">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Special Limit</label>
                                    <div class="col-md-6">
                                        <label id="profile_specialLimit">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Special Fee</label>
                                    <div class="col-md-6">
                                        <label id="profile_specialFee">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Corporate SME</label>
                                    <div class="col-md-6">
                                        <label id="profile_corporateSME">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Maximum Number of User</label>
                                    <div class="col-md-6">
                                        <label id="profile_maxUser">-</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="box-header">
                        <h3 class="box-title"><strong>Contact Person</strong></h3>
                    </div> -->
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <h4 class="box-title"><strong>Contact Person</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <table id="contact_list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                                    <thead>
                                        <tr>
                                            <th align="left"><strong>No</strong></th>
                                            <th align="left"><strong>Name</strong></th>
                                            <th align="left"><strong>Phone</strong></th>
                                            <th align="left"><strong>Mobile Phone</strong></th>
                                            <th align="left"><strong>Email Address</strong></th>
                                            <th align="left"><strong>Fax</strong></th>
                                        </tr>
                                    </thead>
                                </table>
                             </div>
                        </div>
                    </div>
                    <!-- <div class="box-header">
                        <h3 class="box-title"><strong>Company Admin</strong></h3>
                    </div> -->
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <h4 class="box-title"><strong>Company Admin</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <table id="admin_list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                                    <thead>
                                        <tr>
                                            <th align="left"><strong>Role</strong></th>
                                            <th align="left"><strong>User ID</strong></th>
                                            <th align="left"><strong>User Name</strong></th>
                                            <th align="left"><strong>Email Address</strong></th>
                                            <th align="left"><strong>Mobile Phone</strong></th>
                                        </tr>
                                    </thead>
                                </table>
                             </div>
                        </div>
                    </div>
                </div> <!-- profile_info END-->

                <div class="box auth_info">
                    <div class="box-header">
                        <h3 class="box-title"><strong>Token Listing</strong></h3>
                    </div>
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <table id="token_list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                                    <thead>
                                        <tr>
                                            <th align="left"><strong>Serial Number</strong></th>
                                            <th align="left"><strong>Assigned To</strong></th>
                                            <th align="left"><strong>Assigned By</strong></th>
                                            <th align="left"><strong>Assigned Date</strong></th>
                                            <th align="left"><strong>Status</strong></th>
                                            <th align="left"><strong>Retry</strong></th>
                                        </tr>
                                    </thead>
                                </table>
                             </div>
                        </div>
                    </div>
                </div> <!-- auth_info END-->

                <div class="box charge_info">
                    <div class="box-header">
                        <h3 class="box-title"><strong>Transactional Fee List</strong></h3>
                    </div>
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <table id="charge_list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                                    <thead>
                                        <tr>
                                            <th align="left"><strong>Menu</strong></th>
                                            <th align="left"><strong>Fee Type</strong></th>
                                            <th align="left"><strong>Currency</strong></th>
                                            <th align="left"><strong>Value</strong></th>
                                        </tr>
                                    </thead>
                                </table>
                             </div>
                        </div>
                    </div>
                </div> <!-- charge_info END-->

                <div class="box limit_info">
                    <div class="box-header">
                        <h3 class="box-title"><strong>Transactional Limit Detail</strong></h3>
                    </div>
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <h4 class="box-title"><strong>Transaction Limit Per Day Per Company</strong></h4>
                                </div>
                            </div>
                            <div class="row">
                                <table id="limit_list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                                    <thead>
                                        <tr>
                                            <th align="center" rowspan="2"><strong>Service</strong></th>
                                            <th align="center" rowspan="2"><strong>Currency Matrix</strong></th>
                                            <th align="center" rowspan="2"><strong>Maximum Number of Transaction / Day</strong></th>
                                            <th align="center" colspan="2"><strong>Maximum Transaction Amount / Day</strong></th>
                                        </tr>
                                        <tr>
                                            <th align="center"><strong>Currency</strong></th>
                                            <th align="center"><strong>Value</strong></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- limit_info END-->

                <div class="box menu_info">
                    <div class="box-header">
                        <h3 class="box-title"><strong>Menu Setup Listing</strong></h3>
                    </div>
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <table id="menu_list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                                    <thead>
                                        <tr>
                                            <th align="left"><strong>Menu Group</strong></th>
                                            <th align="left"><strong>Menu</strong></th>
                                        </tr>
                                    </thead>
                                </table>
                             </div>
                        </div>
                    </div>
                </div> <!-- charge_info END-->

                <div class="box authLimit_info">
                    <div class="box-header">
                        <h3 class="box-title"><strong>Authorized Limit Scheme Detail</strong></h3>
                    </div>
                    <div class="authLimitData"></div>
                </div> <!-- authLimit_info END-->

                <div class="box matrix_info">
                    <div class="box-header">
                        <h3 class="box-title"><strong>Approval Mechanism</strong></h3>
                    </div>
                    <div class="matrixData"></div>
                </div> <!-- matrix_info END-->

                <!-- <div class="box account_info">
                    <div class="box-header">
                        <h3 class="box-title"><strong>Account Hierarchy</strong></h3>
                    </div>
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label ">Detail</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --> <!-- matrix_info END-->

                <div class="box accountGroup_info">
                    <div class="accountGroupData"></div>
                </div> <!-- matrix_info END-->

                <div class="box userGroup_info">
                    <div class="box-header">
                        <h3 class="box-title"><strong>User Group</strong></h3>
                    </div>
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="userGroupData"></div>
                        </div>
                    </div>
                </div> <!-- matrix_info END-->

        </div>
    </div>

</section>

<script>
    var service = '{{ $service }}';
    var profile_contactList;
    var profile_adminList;
    var auth_tokenList;
    var fee_chargeList;
    var limit_limitList;
    var menu_menuList;
    var matrix_appMatrixList;
    var account_accountList;
    var accountGroup_accountGroupList;
    var userGroup_userGroupList;
    var matrixTable = [];
    var totalInitiateData = 100;
    var tagsM = '';

    $(document).ready(function () {

        var url_action = '';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = {"referenceNo": "DESC"};
        var data_code = '';

        getCorporate();
        getFormatDroplist();
		searchReport();

        setTimeout(function() {
        }, 2000);

        // Manual dropdown toggle handler - more specific selector
        $(document).off('click', '.dropdown-toggle').on('click', '.dropdown-toggle', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var $dropdown = $(this).next('.dropdown-menu');
            $('.dropdown-menu').not($dropdown).removeClass('show').hide();

            if ($dropdown.hasClass('show')) {
                $dropdown.removeClass('show').hide();
            } else {
                $dropdown.addClass('show').show();
            }
        });

        // Close dropdown when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.dropdown').length) {
                $('.dropdown-menu').removeClass('show').hide();
            }
        });

        // Handle dropdown item clicks with event delegation
        $(document).off('click', '#downloadFormat .dropdown-item').on('click', '#downloadFormat .dropdown-item', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var format = $(this).data('format');
            $('.dropdown-menu').removeClass('show').hide();
            requestDownload(format);
        });

        // Clear validation error when corporate is selected
        $('#corporate').on('change', function() {
            if($(this).val() != '' && $(this).val() != 'Select Company') {
                $(this).removeClass('error');
                $(this).closest('.mb-3').find('.help-block.with-errors').html('');
            }
        });

		$('#search').on('click', function () {
			searchReport();
		});

        $('#view').on('click', function () {
            viewDetail();
        });

        $('.profile_info').hide();
        $('.auth_info').hide();
        $('.charge_info').hide();
        $('.limit_info').hide();
        $('.menu_info').hide();
        $('.authLimit_info').hide();
        $('.matrix_info').hide();
        $('.account_info').hide();
        $('.accountGroup_info').hide();
        $('.userGroup_info').hide();


        profile_contactList = $('#contact_list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: true,
                    width: "5%"
                },
                {
                    targets: 1,
                    sortable: true,
                    width: "20%"
                },
                {
                    targets: 2,
                    sortable: true,
                    width: "15%"
                },
                {
                    targets: 3,
                    sortable: true,
                    width: "20%"
                },
                {
                    targets: 4,
                    sortable: true,
                    width: "25%"
                },
                {
                    targets: 5,
                    sortable: true,
                    width: "15%"
                }
            ]
        });

        profile_adminList = $('#admin_list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: true,
                    width: "15%"
                },
                {
                    targets: 1,
                    sortable: true,
                    width: "20%"
                },
                {
                    targets: 2,
                    sortable: true,
                    width: "20%"
                },
                {
                    targets: 3,
                    sortable: true,
                    width: "25%"
                },
                {
                    targets: 4,
                    sortable: true,
                    width: "20%"
                }
            ]
        });

        auth_tokenList = $('#token_list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: true,
                    width: "16.66%"
                },
                {
                    targets: 1,
                    sortable: true,
                    width: "16.66%"
                },
                {
                    targets: 2,
                    sortable: true,
                    width: "16.66%"
                },
                {
                    targets: 3,
                    sortable: true,
                    width: "16.66%"
                },
                {
                    targets: 4,
                    sortable: true,
                    width: "16.66%"
                },
                {
                    targets: 5,
                    sortable: true,
                    width: "16.66%"
                }
            ]
        });

        fee_chargeList = $('#charge_list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: true,
                    width: "25%"
                },
                {
                    targets: 1,
                    sortable: true,
                    width: "25%"
                },
                {
                    targets: 2,
                    sortable: true,
                    width: "25%"
                },
                {
                    targets: 3,
                    sortable: true,
                    width: "25%"
                }
            ]
        });

        limit_limitList = $('#limit_list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: true,
                    width: "25%"
                },
                {
                    targets: 1,
                    sortable: true,
                    width: "15%"
                },
                {
                    targets: 2,
                    sortable: true,
                    width: "20%"
                },
                {
                    targets: 3,
                    sortable: true,
                    width: "25%"
                },
                {
                    targets: 4,
                    sortable: true,
                    width: "25%"
                }
            ]
        });

        menu_menuList = $('#menu_list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: true,
                    width: "50%"
                },
                {
                    targets: 1,
                    sortable: true,
                    width: "50%"
                }
            ]
        });

        /*for (var i = 0; i<totalInitiateData; i++) {
            const matrixId = '#matrix_list'+i;
            // console.log("=========", matrixId);
            matrixTable[i] = $(matrixId).DataTable({
                "paging" : false,
                "ordering" : false,
                "info": false,
                "destroy": true,
                "searching": false,
                "autoWidth":false,
                "lengthMenu": [[10, 25, 50], [10, 25, 50]],
                "columnDefs": [
                    {
                        targets: 0,
                        sortable: true,
                        width: "16.66%"
                    },
                    {
                        targets: 1,
                        sortable: true,
                        width: "16.66%"
                    },
                    {
                        targets: 2,
                        sortable: true,
                        width: "16.66%"
                    },
                    {
                        targets: 3,
                        sortable: true,
                        width: "16.66%"
                    },
                    {
                        targets: 4,
                        sortable: true,
                        width: "16.66%"
                    },
                    {
                        targets: 5,
                        sortable: true,
                        width: "16.66%"
                    }
                ]
            });

            initiateApprovalMatrix(i);
        }
        $('.matrixData').html(tagsM);*/

    });

    function getCorporate() {
        var value = {
            code: "",
        };
        var url_action = 'searchCorporate';
        var action = 'SEARCH';
        var menu = service;
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
                    unitOption = '<option value=""><p>Select company</p></option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.corporateId + '" corp-name="' + obj.corporateName + '">'+ obj.corporateId + ' - ' + obj.corporateName + '</option>';
                    });
                    $('#corporate').html(unitOption);
                    $('#corporate').select2();
                } else {
                    flash('warning', result.message);
                }


            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });
    }

    function getFormatDroplist() {

        var url_action = 'fileFormat';
        var action = 'SEARCH';
        var menu = service;
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : '',
                menu : menu,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    formats = '';
                    $.each(result.fileFormats, function (idx, obj) {
                        formats += '<li><a class="dropdown-item" data-code="' + obj.ext +'" href="javascript:void(0);" data-format="'+obj.name+'">' + obj.name + '</a></li>';
                    });
                    $('#downloadFormat').html(formats);
                } else {
                    flash('warning', result.message);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });

    }

    function requestDownload(fileFormat) {

        $('.row-corporate').validator('validate');

        // Clear previous errors
        $('#corporate').removeClass('error');
        $('#corporate').closest('.mb-3').find('.help-block.with-errors').html('');

        var corpId = $("#corporate").val();
        if(corpId == '' || corpId == 'Select Company') {
            $('#corporate').addClass('error');
            $('#corporate').closest('.mb-3').find('.help-block.with-errors').html('<span style="color: red;">Please Select Company</span>');
            return;
        }

        var fileNameReq = $('#corporate').find(':selected').attr('corp-name') + "-%s"; //<-- used to override in backend

        var featureList = [];
        $('input[name="feature-checkbox"]:checked').each(function() {
            featureList.push('"'+this.value+'"');
        });

        // if select none, then put all features
        if(featureList.length == 0) {
            $('input[name="feature-checkbox"]').each(function() {
                featureList.push('"'+this.value+'"');
            });
        }

        var value = {
                corporateId : corpId,
                feature: featureList,
                fileFormat: fileFormat,
                fileName: fileNameReq,
        };

        var validate = true;
        if (validate) {

            $.ajax({
                url: 'getAPIData',
                method: 'post',
                data: {
                    value : value,
                    menu : service,
                    url_action : 'submit',
                    action : 'REQUEST_DOWNLOAD',
                    _token : '{{ csrf_token() }}'
                },
                success: function (data) {

                    var result = JSON.parse(data);
                    if (result.status=="200") {
                        noRef=result.referenceNo;
                        flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                        searchReport();
                    } else {
                        flash('warning', result.message);
                    }
                }, error: function (xhr, ajaxOptions, thrownError) {
                    flash('warning', 'Form Submit Failed');
                    console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
                }, complete: function (data) {

                }
            });

        }

    }

	function downloadReport(downloadId) {

        var value = {
                downloadId : downloadId,
        };

        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : service,
                url_action : 'downloadReport',
                action : 'DOWNLOAD',
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {

                $.ajax({
                    url: 'downloadFile',
                    method: 'POST',
                    cache: false,
                    data:{
                        url_action : 'download',
                        // value:'EXECUTE',
                        service:service,
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

            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });

    }

	function searchReport() {
        $("#vue-success").find(".close").trigger("click");

		setTimeout(function(){

            var validate = true;

            var value = {};
            var url_action = 'search';
            var action = 'SEARCH';
            var result_key = 'result';
            var custom_order = '';

            value = {
                orderBy: {"createdDate": "ASC"},
                currentPage: "1",
                pageSize: "20"
            };

            if(validate){
                $('#list').show();
                $('.list-title').show();
                var index = 1;
                $('#list').DataTable({
                    "destroy": true,
                    "initComplete": function(settings, json) {

                    },
                    "select": false,
                    "searching": false,
                    "lengthMenu": [[10, 25, 50], [10, 25, 50]],
                    "processing": true,
                    "serverSide": true,
                    "autoWidth": false,
                    "ScrollX": '100%',
                    "columnDefs": [
                        {
                            targets: 0,
                            data: "createdDate",
                            render: function ( data, type, full, meta ) {
                                var pageInfo = $('#list').DataTable().page.info();
                                // var row=(page*10)+(index++);
                                var row = (pageInfo.length * (pageInfo.page)) + (meta.row +1);
                                return row;
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 1,
                            data: "createdDate",
                            orderable: false
                        },
                        {
                            targets: 2,
                            data: "fileType",
                            orderable: false
                        },
                        {
                            targets: 3,
                            data: "fileName",
                            orderable: false
                        },
                        {
                            targets: 4,
                            data: "statusDescription",
                            orderable: false
                        },
                        {
                            targets: 5,
                            data: {isReadyForDownload:"isReadyForDownload", id: "id"},
                            width: "15%",
                            render: function ( data, type, full, meta ) {
                                var disabled = 'disabled';
                                if(data.isReadyForDownload == 'Y'){
                                    disabled = '';
                                }
                                return '<button data-id="'+data.id+'" class="btn btn-primary" style="width:125px;" align="center" onClick="downloadReport(\''+data.id+'\');"' +disabled+'>Download</button>';
                            },
                            orderable: false
                        }
                    ],
                    "ajax": {
                        url: "fetchDataTable",
                        type:'POST',
                        data: function ( d ) {
                            d.value = value;
                            d.menu = service;
                            d.url_action = url_action;
                            d.action = action;
                            d.result_key = result_key;
                            d.custom_order = custom_order;
                            d._token = '{{ csrf_token() }}';
                        },
                        error:function (jqXHR, textStatus, errorThrown) {

                            var msg = '{{trans('form.conn_error')}}';
                            flash('warning', msg);
                            $('#list').hide();
                            $('.list-title').hide();
                        }
                    }
                });
            }
        });
	}

    function getActivityByDroplist(corpId) {
		var menu = '{{ $service }}';
        var value = {
            corporateId: corpId
        };
        var url_action = 'searchUser';
        var action = 'SEARCH';
        var menu = menu;
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
					unitOption = '<option value="" selected>Select User</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="'+ obj.actionByUserId +'"data-value = "'+obj.actionByUserName+'">'+ obj.actionByUserName + '</option>';
                    });
                    $('#activityBy').html(unitOption);
                    $('#activityBy').select2();
                } else {
                    flash('warning', result.message);
                }


            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });
    }

    function viewDetail() {
        $('.profile_info').hide();
        $('.auth_info').hide();
        $('.charge_info').hide();
        $('.limit_info').hide();
        $('.menu_info').hide();
        $('.authLimit_info').hide();
        $('.matrix_info').hide();
        $('.account_info').hide();
        $('.accountGroup_info').hide();
        $('.userGroup_info').hide();

        $('.row-corporate').validator('validate');
        var corpId = $("#corporate").val();
        if(corpId == '') {
            var content ='Company ID ' + '{{trans('form.mandatory')}}';
            $.alert({
                title: '{{trans('form.warning')}}',
                content: content
            });
            return;
        }

        var featureList = [];
        $('input[name="feature-checkbox"]:checked').each(function() {
            // console.log(this.value);
            featureList.push('"'+this.value+'"');
        });

        // if select none, then put all features
        if(featureList.length == 0) {
            $('input[name="feature-checkbox"]').each(function() {
                featureList.push('"'+this.value+'"');
            });
        }
        console.log('featureList', featureList);

        var value = {
                corporateId : corpId,
		loginCorporateId : corpId,
                feature: featureList,
        };

        var validate = true;
        if (validate) {

            $.ajax({
                url: 'getAPIData',
                method: 'post',
                data: {
                    value : value,
                    menu : service,
                    url_action : 'searchViewReport',
                    action : 'SEARCH',
                    _token : '{{ csrf_token() }}'
                },
                success: function (data) {
                    var result = JSON.parse(data);
                    if (result.status=="200") {
                        // console.log(result);

                        if (result.showProfile == true) {
                            $('.profile_info').show();
                            const profileData = result.dataProfile;
                            const contactList = profileData.contactList;
                            const adminList = profileData.adminList;
                            Object.entries(profileData).forEach(([key, value]) => { // Iterate dataProfile and set value by Id
                                $('#profile_'+`${key}`).text(`${value}`);
                            });

                            profile_adminList.clear();
                            $.each(adminList, function (idx, obj) {
                                profile_adminList.row.add([
                                    obj.role,
                                    obj.userId,
                                    obj.username,
                                    obj.email,
                                    obj.mobile
                                ]).draw(false);
                            });

                            profile_contactList.clear();
                            $.each(contactList, function (idx, obj) {
                                profile_contactList.row.add([
                                    obj.no,
                                    obj.name,
                                    obj.phone,
                                    obj.mobile,
                                    obj.email,
                                    obj.faxNo
                                ]).draw(false);
                            });
                        }

                        if (result.showAuthType == true) {
                            $('.auth_info').show();
                            const authData = result.dataAuthType;
                            auth_tokenList.clear();
                            $.each(authData.authList, function (idx, obj) {
                                auth_tokenList.row.add([
                                    obj.serialNumber,
                                    obj.assignedTo,
                                    obj.assignedBy,
                                    obj.assignedDate,
                                    obj.status,
                                    obj.retry
                                ]).draw(false);
                            });
                        }

                        if (result.showTrxChg == true) {
                            $('.charge_info').show();
                            const chargeData = result.dataTrxChg;
                            fee_chargeList.clear();
                            $.each(chargeData.chargeList, function (idx, obj) {
                                fee_chargeList.row.add([
                                    obj.serviceName,
                                    obj.serviceChargeName,
                                    obj.currencyCode,
                                    obj.value
                                ]).draw(false);
                            });
                        }

                        if (result.showTrxLimit == true) {
                            $('.limit_info').show();
                            const limitData = result.dataTrxLimit;
                            limit_limitList.clear();
                            $.each(limitData.limitList, function (idx, obj) {
                                limit_limitList.row.add([
                                    obj.service,
                                    obj.currencyMatrix,
                                    obj.maxTrx,
                                    obj.currency,
                                    obj.value
                                ]).draw(false);
                            });
                        }

                        if (result.showMenuPkg == true) {
                            $('.menu_info').show();
                            const menuData = result.dataMenuPkg;
                                var parent = '';
                                var parentView = '';
                            menu_menuList.clear();
                            $.each(menuData.menuList, function (idx, obj) {
                                if (idx == 0) {
                                    parent = obj.parentMenu;
                                    parentView = obj.parentMenu;
                                } else {
                                    if (parent === obj.parentMenu) {
                                        parentView = '';
                                    } else {
                                        parent = obj.parentMenu;
                                        parentView = obj.parentMenu;
                                    }
                                }
                                menu_menuList.row.add([
                                    parentView,
                                    obj.childMenu
                                ]).draw(false);
                            });

                        }

                        if (result.showAuthorizedLimit == true) {
                            $('.authLimit_info').show();
                            const limitData = result.dataAuthorizedLimit;
                            prepareAuthLimitData(limitData);
                        }

                        if (result.showApprovalMatrix == true) {
                            $('.matrix_info').show();
                            const matrixData = result.dataApprovalMatrix;
                            prepareApprovalMatrixData(matrixData);
                        }

                        /*if (result.showAcctHierarcy == true) {
                            $('.account_info').show();
                        }*/

                        if (result.showAcctGroup == true) {
                            $('.accountGroup_info').show();
                            const acctAccountGroupData = result.dataAcctGroup;
                            prepareAccountGroupData(acctAccountGroupData);
                        }

                        if (result.showUserGroup == true) {
                            $('.userGroup_info').show();

                            // const formattedDataUserGroup = result.dataUserGroup.map(group => {
                            // const formattedMenuPackageList = group.menuPackageList.map((item, index, arr) => {
                            //     if (index > 0 && item.parentMenu === arr[index - 1].parentMenu) {
                            //     return { ...item, parentMenu: "" };
                            //     }
                            //     return item;
                            // });

                            // return { ...group, menuPackageList: formattedMenuPackageList };
                            // });
                            const userGroupData = result.dataUserGroup;
                            prepareUserGroupData(userGroupData);
                        }

                    } else {
                        flash('warning', result.message);
                    }
                }, error: function (xhr, ajaxOptions, thrownError) {
                    flash('warning', 'Form Submit Failed');
                    console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
                }, complete: function (data) {

                }
            });

        }

    }

    function currencyFormat(num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

    function prepareAuthLimitData(authLimit) {
        tags = ''

        $.each(authLimit, function (idx, obj) {
            tags += '<div class="box-body">';
                tags += '<div class="container-fluid">';
                    tags += '<div class="row"><div class="mb-3 row form-group">';
                        tags += '<h4 class="box-title"><strong>User Level Information</strong></h4>';
                    tags += '</div></div>';
                    tags += '<div class="row"><div class="mb-3 row form-group">';
                        tags += '<label class="col-md-3 col-form-label ">User Level</label>';
                        tags += '<div class="col-md-6"><label id="auth_name'+ idx+ '">'+ obj.name +'</label></div>';
                    tags += '</div></div>';
                    tags += '<div class="row"><div class="mb-3 row form-group">';
                        tags += '<label class="col-md-3 col-form-label ">User Level Alias</label>';
                        tags += '<div class="col-md-6"><label id="auth_alias'+ idx+ '">'+ (obj.alias !==undefined ? obj.alias : '-') +'</label></div>';
                    tags += '</div></div>';
                    tags += '<div class="row"><div class="mb-3 row form-group">';
                        tags += '<label class="col-md-3 col-form-label ">Currency</label>';
                        tags += '<div class="col-md-6"><label id="auth_currencyName'+ idx+ '">'+ (obj.currencyName !==undefined ? obj.currencyName : '-') +'</label></div>';
                    tags += '</div></div>';
                    tags += '<div class="row"><div class="mb-3 row form-group">';
                        tags += '<label class="col-md-3 col-form-label ">Maker Limit</label>';
                        tags += '<div class="col-md-6"><label id="auth_makerLimit'+idx+'">'+ ((obj.makerLimit !='' && obj.makerLimit !==undefined) ? obj.makerLimit : '-')  +'</label></div>';
                    tags += '</div></div>';
                tags += '</div>';
            tags += '</div>';
            tags += '<div class="box-body">';
                tags += '<div class="container-fluid">';
                    tags += '<div class="row"><div class="mb-3 row form-group">';
                        tags += '<h4 class="box-title"><strong>Authorized Limit</strong></h4>';
                    tags += '</div></div>';
                    tags += '<div class="row"><div class="mb-3 row form-group">';
                        tags += '<label class="col-md-3 col-form-label ">Single Approval Limit</label>';
                        tags += '<div class="col-md-6"><label id="auth_singleApprovalLimit'+ idx+ '">'+ ((obj.singleApprovalLimit !='' && obj.singleApprovalLimit !==undefined) ? obj.singleApprovalLimit : '-') +'</label></div>';
                    tags += '</div></div>';
                    tags += '<div class="row"><div class="mb-3 row form-group">';
                        tags += '<label class="col-md-3 col-form-label ">Same Group Approval Limit</label>';
                        tags += '<div class="col-md-6"><label id="auth_intraGroupLimit'+ idx+ '">'+ ((obj.intraGroupLimit !='' && obj.intraGroupLimit !==undefined) ? obj.intraGroupLimit : '-') +'</label></div>';
                    tags += '</div></div>';
                    tags += '<div class="row"><div class="mb-3 row form-group">';
                        tags += '<label class="col-md-3 col-form-label ">Cross Group Approval Limit</label>';
                        tags += '<div class="col-md-6"><label id="auth_crossGroupLimit'+ idx+ '">'+ ((obj.crossGroupLimit !='' && obj.crossGroupLimit !==undefined) ? obj.crossGroupLimit : '-') +'</label></div>';
                    tags += '</div></div>';
                tags += '</div>';
            tags += '</div>';

        });

        $('.authLimitData').html(tags);
    }

    function prepareApprovalMatrixData(matrixData) {
        var tags = '';

        $.each(matrixData, function (idx, obj) {
            var idTable = "matrix_list" + idx;
            tags += '<div class="box-body">';
            tags += '<div class="container-fluid">';
            tags += '<div class="row"><div class="mb-3 row form-group"><h4 class="box-title"><strong>Mechanism Information</strong></h4>';
            tags += '<label class="col-md-3 col-form-label ">Menu</label>';
            tags += '<div class="col-md-6"><label id="name' + idx + '">' + obj.approvalMenu + '</label></div>';
            tags += '</div></div>';
            tags += '<div class="row"><div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">Currency</label>';
            tags += '<div class="col-md-6"><label id="curr' + idx + '">' + (obj.approvalCurrency !== undefined ? obj.approvalCurrency : '-') + '</label></div>';
            tags += '</div></div>';
            tags += '</div>';
            tags += '</div>';
            tags += '<div class="box-body">';
            tags += '<div class="container-fluid">';
            tags += '<div class="row"><div class="mb-3 row form-group">';
            tags += '<h4 class="box-title"><strong>Mechanism Listing</strong></h4>';
            tags += '</div></div>';
            tags += '<div class="row">';
            tags += '<table id="' + idTable + '" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">';
            tags += '<thead><tr>';
            tags += '<th align="left"><strong>Approval Limit</strong></th>';
            tags += '<th align="left"><strong>No. of Approval</strong></th>';
            tags += '<th align="left"><strong>Sequence</strong></th>';
            tags += '<th align="left"><strong>No. of User</strong></th>';
	    tags += '<th align="left"><strong>User Group Option</strong></th>';
            tags += '<th align="left"><strong>User Group</strong></th>';
            tags += '<th align="left"><strong>User Level</strong></th>';
            tags += '</tr></thead><tbody>';

	    var approvalLimitTemp= '';
	    var approvalLimitView= '';
	    var noOfApprovalTemp= '';
	    var noOfApprovalView= '';

            $.each(obj.approvalMatrixList, function (idx1, obj1) {

		//if (idx1 == 0) {
                	//approvalLimitTemp = obj1.approvalLimit;
			//approvalLimitView = obj1.approvalLimit;
		//} else {
                	//if (approvalLimitTemp === obj1.approvalLimit) {
                        //	approvalLimitView = '';
			//} else {
                        //	approvalLimitTemp = obj1.approvalLimit;
			//	approvalLimitView = obj1.approvalLimit;
			//}
		//}

		//if (idx1 == 0) {
                	//noOfApprovalTemp = obj1.noOfApproval;
			//noOfApprovalView = obj1.noOfApproval;
		//} else {
                	//if (noOfApprovalTemp === obj1.noOfApproval) {
                      //  	noOfApprovalView = '';
			//} else {
                        //	noOfApprovalTemp = obj1.noOfApproval;
			//	noOfApprovalView = obj1.noOfApproval;
			//}
		//}

		approvalLimitView = obj1.approvalLimit;
		noOfApprovalView = obj1.noOfApproval;

                tags += '<tr>';
                tags += '<td>' + approvalLimitView + '</td>';
                tags += '<td>' + noOfApprovalView + '</td>';
                tags += '<td>' + obj1.sequence + '</td>';
                tags += '<td>' + obj1.noOfUser + '</td>';
		tags += '<td>' + obj1.userGroupOption + '</td>';
                tags += '<td>' + obj1.userGroup + '</td>';
                tags += '<td>' + obj1.userLevel + '</td>';
                tags += '</tr>';
            });

            tags += '</tbody></table>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';
        });

        $('.matrixData').html(tags);

        $.each(matrixData, function (idx, obj) {
            var idTable = "#matrix_list" + idx;
            $(idTable).DataTable();
        });
    }

    function prepareAccountGroupData(accountGroupData) {

        var tags = '';

        $.each(accountGroupData, function (idx, group) {
            var idTable = "limit_list" + idx;
            tags += '<div class="box-header"><h3 class="box-title"><strong>Account Group</strong></h3>';
            tags += '</div>';

            tags += '<div class="box-body">';
            tags += '<div class="container-fluid">';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">Account Group Code</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + group.accountGroupCode + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">Account Group Name</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + group.accountGroupName + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<h4 class="box-title"><strong>Account Listing</strong></h4>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<table id="' + idTable + '" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">';
            tags += '<thead>';
            tags += '<tr>';
            tags += '<th align="left"><strong>Account Number</strong></th>';
            tags += '<th align="left"><strong>Account Name</strong></th>';
            tags += '<th align="left"><strong>Currency</strong></th>';
            tags += '<th align="left"><strong>Allow Inquiry</strong></th>';
            tags += '<th align="left"><strong>Allow Debit</strong></th>';
            tags += '<th align="left"><strong>Allow Credit</strong></th>';
	    tags += '<th align="left"><strong>Account Alias</strong></th>';
	    tags += '<th align="left"><strong>Account Limit</strong></th>';
            tags += '</tr>';
            tags += '</thead><tbody>';

            $.each(group.accountGroupList, function (idx1, account) {
                tags += '<tr>';
                tags += '<td>' + account.accountNumber + '</td>';
                tags += '<td>' + account.accountName + '</td>';
                tags += '<td>' + account.currency + '</td>';
                tags += '<td>' + account.allowInquiry + '</td>';
                tags += '<td>' + account.allowDebit + '</td>';
                tags += '<td>' + account.allowCredit + '</td>';
		tags += '<td>' + account.accountAlias + '</td>';
                tags += '<td>' + account.accountLimit + '</td>';
                tags += '</tr>';
            });

            tags += '</tbody></table>';
            tags += '</div></div></div>';
        });

        $('.accountGroupData').html(tags);

        $.each(accountGroupData, function (idx, group) {
            var idTable = "#limit_list" + idx;
            $(idTable).DataTable();
        });
    }

    function prepareUserGroupData(dataUserGroup) {
        var tags = '';

        $.each(dataUserGroup, function (idx, group) {
            // Group Information
            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<h4 class="box-title"><strong>Group Information</strong></h4>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">Corporate</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + group.corporate + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">User Group Code</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + group.userGroupCode + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">User Group Name</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + group.userGroupName + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">Account Group</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + group.accountGroup + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            // Menu Package List
            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<h4 class="box-title"><strong>Menu</strong></h4>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<table id="menuPackageList' + idx + '" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">';
            tags += '<thead>';
            tags += '<tr>';
            tags += '<th align="left"><strong>Menu Parent</strong></th>';
            tags += '<th align="left"><strong>Menu Child</strong></th>';
            tags += '</tr>';
            tags += '</thead><tbody>';

            $.each(group.menuPackageList, function (idx1, menu) {
                tags += '<tr>';
                tags += '<td>' + menu.parentMenu + '</td>';
                tags += '<td>' + menu.childMenu + '</td>';
                tags += '</tr>';
            });

            // let parent = '';
            // let parentView = '';

            // $.each(group.menuPackageList, function (idx1, obj) {
            //     if (idx1 === 0) {
            //         parent = obj.parentMenu;
            //         parentView = obj.parentMenu;
            //     } else {
            //         if (parent === obj.parentMenu) {
            //             parentView = '';
            //         } else {
            //             parent = obj.parentMenu;
            //             parentView = obj.parentMenu;
            //         }
            //     }

            //     tags += '<tr>';
            //     tags += '<td>' + parentView + '</td>';
            //     tags += '<td>' + obj.childMenu + '</td>';
            //     tags += '</tr>';
            // });

            tags += '</tbody></table>';
            tags += '</div>';

            // Transaction Limit List
            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<h4 class="box-title"><strong>Transaction Limit Detail</strong></h4>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<table id="trxLimitList' + idx + '" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">';
            tags += '<thead>';
            tags += '<tr>';
            tags += '<th align="left" rowspan="2"><strong>Service</strong></th>';
            tags += '<th align="left" rowspan="2"><strong>Currency Matrix</strong></th>';
            tags += '<th align="left" colspan="2"><strong>Maximum Transaction Amount (Daily)</strong></th>';
            tags += '</tr>';
            tags += '<tr>';
            tags += '<th align="left"><strong>Currency</strong></th>';
            tags += '<th align="right"><strong>Value</strong></th>';
            tags += '</tr>';
            tags += '</thead><tbody>';

            $.each(group.trxLimitList, function (idx1, trxLimit) {
                tags += '<tr>';
                tags += '<td>' + trxLimit.service + '</td>';
                tags += '<td>' + trxLimit.currencyMatrix + '</td>';
                tags += '<td>' + trxLimit.currency + '</td>';
                tags += '<td>' + trxLimit.value + '</td>';
                tags += '</tr>';
            });

            tags += '</tbody></table>';
            tags += '</div>';

$.each(group.userCorpList, function (idx1, userCorp) {
                // Group Information
            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<h4 class="box-title"><strong>User Add</strong></h4>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">User Id</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + userCorp.userId + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">User Name</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + userCorp.userName + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">Email Address</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + userCorp.phoneNo + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">Mobile Phone Number</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + userCorp.emailAddress + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">User Role</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + userCorp.role + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">Approval Level</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + userCorp.aprrovalLevel + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">On Behalf User</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + userCorp.onBehalfUser + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">Grant View Detail</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + userCorp.grantView + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            tags += '<div class="row">';
            tags += '<div class="mb-3 row form-group">';
            tags += '<label class="col-md-3 col-form-label ">Authentication Type</label>';
            tags += '<div class="col-md-6">';
            tags += '<label>' + userCorp.authenticationType + '</label>';
            tags += '</div>';
            tags += '</div>';
            tags += '</div>';

            });
        });

        $('.userGroupData').html(tags);

        // Optionally, you can initialize the DataTables plugin for each dynamically created table
        $.each(dataUserGroup, function (idx, group) {
            $('#menuPackageList' + idx).DataTable();
            $('#trxLimitList' + idx).DataTable();
        });
    }


</script>
