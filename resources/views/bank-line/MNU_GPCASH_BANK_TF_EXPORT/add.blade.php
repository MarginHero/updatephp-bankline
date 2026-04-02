@include('_partials.header_content',['breadcrumb'=>['Export LC',$type]])

<style>
    input.error, select.error {
        border-color: #dd4b39 !important;
        box-shadow: 0 0 0 0.2rem rgba(221,75,57,.25) !important;
    }
    .help-block.with-errors {
        color: #dd4b39;
        font-size: 12px;
        margin-top: 4px;
        display: none;
    }
</style>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <form id="form-area" class="form-horizontal form-area">
                    <input type="hidden" id="code_edit" value=""/>
                    <input type="hidden" id="type" value=""/>
                    <input type="hidden" id="state" value=""/>
                    <input type="hidden" id="submit_mode" value=""/>
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Bank Reference No.&ast;</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" id="refNo" name="refNo" class="form-control state_edit" autocomplete="off" value="" maxlength="40" data-error="This field is required." required>
                                        <div class="help-block with-errors"></div>
                                        <label id="refNo_view" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Issue Date&ast;</strong></label>
									<div class="col-md-6 state_issuedt">
                                        <div class="input-group state_edit">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            <input type="text" id="issueDate" name="issueDate" class="form-control datepicker numeric" value="" autocomplete="off" data-error="This field is required." required>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                        <label id="issueDate_view" class="state_view"></label>
									</div>
                                </div>
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">GENERAL</h3>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Media of Issue&ast;</strong></label>
									<div class="col-md-6">
										<select class="form-control state_edit" id="mediaOfIssue" data-error="This field is required." required>
                                            <option value="" data-name=""></option>
                                            <option value="S" data-name="Swift">Swift</option>
                                            <option value="L" data-name="Letter">Letter</option>
										</select>
                                        <div class="help-block with-errors"></div>
                                        <label id="mediaOfIssue_view" class="state_view"></label>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Advise Date&ast;</strong></label>
                                    <div class="col-md-6 state_advisedt">
                                        <div class="input-group state_edit">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            <input type="text" id="adviseDate" name="adviseDate" class="form-control datepicker detail numeric" autocomplete="off" data-error="This field is required." required>
                                        </div>
                                        <label id="adviseDate_view" class="state_view"></label>
									</div>
                                </div>
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">APPLICANT DETAIL</h3>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Applicant Name&ast;</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" id="appName" name="appName" class="form-control state_edit alphanumspecial" autocomplete="off" value="" maxlength="100" data-error="This field is required." required>
                                        <div class="help-block with-errors"></div>
                                        <label id="appName_view" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Applicant Address&ast;</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" id="address1" name="address1" class="form-control state_edit alphanumspecial" autocomplete="off" value="" maxlength="50" data-error="This field is required." required>
                                        <div class="help-block with-errors"></div>
                                        <label id="address1_view" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <input type="text" id="address2" name="address2" class="form-control state_edit" autocomplete="off" value="" maxlength="50">
                                        <div class="help-block with-errors"></div>
                                        <label id="address2_view" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <input type="text" id="address3" name="address3" class="form-control state_edit" autocomplete="off" value="" maxlength="50">
                                        <div class="help-block with-errors"></div>
                                        <label id="address3_view" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Applicant Country&ast;</strong></label>
									<div class="col-md-6 state_edit">
										<select class="form-control" id="country" data-error="This field is required." required>
											<option></option>
										</select>
                                        <div class="help-block with-errors"></div>
									</div>
                                    <div class="col-md-6 state_view">
                                        <label id="country_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">BENEFICIARY DETAIL</h3>
                            </div>
							<div class="row" style="padding-top: 20px">
								<div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Corporate ID&ast;</strong></label>
									<div class="col-md-6 state_createddt state_edit">
										<select class="form-control " id="corpId" data-error="please select corporate" required>
											<option></option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
                                    <div class="col-md-6 state_view">
                                        <label id="corpId_view"></label>
                                    </div>
								</div>
							</div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Beneficiary Name&ast;</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" id="benName" name="benName" class="form-control state_edit alphanumspecial" autocomplete="off" value="" maxlength="100" data-error="This field is required." required>
                                        <div class="help-block with-errors"></div>
                                        <label id="benName_view" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Beneficary Address&ast;</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" id="benAddress1" name="benAddress1" class="form-control state_edit alphanumspecial" autocomplete="off" value="" maxlength="50" data-error="This field is required." required>
                                        <div class="help-block with-errors"></div>
                                        <label id="benAddress1_view" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <input type="text" id="benAddress2" name="benAddress2" class="form-control state_edit" autocomplete="off" value="" maxlength="50">
                                        <div class="help-block with-errors"></div>
                                        <label id="benAddress2_view" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <input type="text" id="benAddress3" name="benAddress3" class="form-control state_edit" autocomplete="off" value="" maxlength="50">
                                        <div class="help-block with-errors"></div>
                                        <label id="benAddress3_view" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Beneficiary Country*</strong></label>
									<div class="col-md-6 state_edit">
										<select class="form-control" id="benCountry" data-error="This field is required." required>
											<option></option>
										</select>
                                        <div class="help-block with-errors"></div>
									</div>
                                    <div class="col-md-6 state_view">
                                        <label id="benCountry_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">ISSUING BANK DETAIL</h3>
                            </div>
                            <div class="row" style="padding-top: 20px">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Issuing Bank Name&ast;</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" id="issName" name="issName" class="form-control state_edit" autocomplete="off" value="" maxlength="100" data-error="This field is required." required>
                                        <div class="help-block with-errors"></div>
                                        <label id="issName_view" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Issuing Bank Address&ast;</strong></label>
                                    <div class="col-md-6">
                                        <input type="text" id="issAddress1" name="issAddress1" class="form-control state_edit" autocomplete="off" value="" maxlength="50" data-error="This field is required." required>
                                        <div class="help-block with-errors"></div>
                                        <label id="issAddress1_view" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <input type="text" id="issAddress2" name="issAddress2" class="form-control state_edit" autocomplete="off" value="" maxlength="50">
                                        <div class="help-block with-errors"></div>
                                        <label id="issAddress2_view" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"></label>
                                    <div class="col-md-6">
                                        <input type="text" id="issAddress3" name="issAddress3" class="form-control state_edit" autocomplete="off" value="" maxlength="50">
                                        <div class="help-block with-errors"></div>
                                        <label id="issAddress3_view" class="state_view"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end"><strong>Issuing Bank Country*</strong></label>
									<div class="col-md-6 state_edit">
										<select class="form-control" id="issCountry" data-error="This field is required." required>
											<option></option>
										</select>
                                        <div class="help-block with-errors"></div>
									</div>
                                    <div class="col-md-6 state_view">
                                        <label id="issCountry_view"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">CONTRACT DETAIL</h3>
                        </div>
                        <div class="row" style="padding-top: 20px">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Transferable*</strong></label>
                                <div class="col-md-6">
                                    <select class="form-control state_edit" id="transferable" data-error="This field is required." required>
                                        <option value="" data-name=""></option>
                                        <option value="Y" data-name="Yes">Yes</option>
                                        <option value="N" data-name="No">No</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                    <label id="transferable_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Confirming Instruction*</strong></label>
                                <div class="col-md-6">
                                    <select class="form-control state_edit" id="confirmInst" data-error="This field is required." required>
                                        <option value="" data-name=""></option>
                                        <option value="0" data-name="Confirm">Confirm</option>
                                        <option value="1" data-name="Without">Without</option>
                                        <option value="2" data-name="May Add">May Add</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                    <label id="confirmInst_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Bank Confirmation*</strong></label>
                                <div class="col-md-6">
                                    <select class="form-control state_edit" id="bankConfirm" data-error="This field is required." required>
                                        <option value="" data-name=""></option>
                                        <option value="Y" data-name="Yes">Yes</option>
                                        <option value="N" data-name="No">No</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                    <label id="bankConfirm_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Credit Available By*</strong></label>
                                <div class="col-md-6">
                                    <select class="form-control state_edit" id="creditAvailBy" data-error="This field is required." required>
                                        <option value=""></option>
                                        <option value="0" data-name="Payment">Payment</option>
                                        <option value="1" data-name="Acceptance">Acceptance</option>
                                        <option value="2" data-name="Negotiation">Negotiation</option>
                                        <option value="3" data-name="Deferred Payment">Deferred Payment</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                    <label id="creditAvailBy_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Payment / Draft At*</strong></label>
                                <div class="col-md-6 state_edit">
                                    <select class="form-control" id="paymentAt" data-error="This field is required." required>
                                        <option></option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 state_view">
                                    <label id="paymentAt_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row state_paymentAtUsanceUpas">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-1 state_paymentAtUsance">
                                    <input autofocus type="text" id="usanceDay" name="usanceDay" class="form-control numeric-input state_edit" autocomplete="off" value="" maxlength="3" data-error="This field is required.">
                                    <div class="help-block with-errors"></div>
                                    <label id="usanceDay_view" class="state_view"></label>
                                </div>
                                <div class="col-md-1 state_paymentAtUpas">
                                    <input autofocus type="text" id="upasNote" name="upasNote" class="form-control state_edit" autocomplete="off" value="" maxlength="3" data-error="This field is required.">
                                    <div class="help-block with-errors"></div>
                                    <label id="upasNote_view" class="state_view"></label>
                                </div>
                                <div class="col-md-1">
                                    <select class="form-control state_edit" id="usanceOpt1">
                                        <option value="after" data-name="After">After</option>
                                        <option value="before" data-name="Before">Before</option>
                                    </select>
                                    <label id="usanceOpt1_view" class="state_view"></label>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control state_edit" id="usanceOpt2">
                                        <option value="OT" data-name="Other">Other</option>
                                        <option value="AW" data-name="Air Waybill">Air Waybill</option>
                                        <option value="AG" data-name="Arrival of Good">Arrival of Good</option>
                                        <option value="BE" data-name="Bill of Exchange">Bill of Exchange</option>
                                        <option value="BL" data-name="Bill of Lading">Bill of Lading</option>
                                        <option value="IV" data-name="Invoice">Invoice</option>
                                        <option value="SD" data-name="Shipment Date">Shipment Date</option>
                                        <option value="SG" data-name="Sight">Sight</option>
                                    </select>
                                    <label id="usanceOpt2_view" class="state_view"></label>
                                </div>
                            </div>
                            <div class="mb-3 row form-group state_paymentAtUsanceUpas_other">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <input type="text" id="usanceOther" name="usanceOther" class="form-control state_edit" autocomplete="off" value="" maxlength="100">
                                    <label id="usanceOther_view" class="state_view"></label>

                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Currency*</strong></label>
                                <div class="col-md-6 state_edit">
                                    <select class="form-control" id="currency" data-error="This field is required." required>
                                        <option></option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 state_view">
                                    <label id="currency_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Amount*</strong></label>
                                <div class="col-md-6">
                                    <input type="text" id="amount" name="amount" class="form-control numeric-input state_edit" autocomplete="off" value="" maxlength="40" data-error="This field is required." required>
                                    <div class="help-block with-errors"></div>
                                    <label id="amount_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Tolerance Percentage*</strong></label>
                                <div class="col-md-6 state_edit">
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto">
                                            <label class="col-form-label"><strong>+</strong></label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="fromTolerance" name="fromTolerance" class="form-control numeric-input" autocomplete="off" value="" maxlength="5" style="width:80px;" data-error="Tolerance (+) is required." required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-auto">
                                            <label class="col-form-label"><strong>%</strong></label>
                                        </div>
                                        <div class="col-auto" style="margin-left: 15px;margin-right: 15px;">
                                            <label class="col-form-label"><strong>-</strong></label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="toTolerance" name="toTolerance" class="form-control numeric-input" autocomplete="off" value="" maxlength="5" style="width:80px;" data-error="This field is required." required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-auto">
                                            <label class="col-form-label"><strong>%</strong></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 state_view">
                                    <label id="fromTolerance_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">Additional Amount Covered</label>
                                <div class="col-md-6">
                                    <input type="text" id="addAmount" name="addAmount" class="form-control state_edit" autocomplete="off" value="" maxlength="50">
                                    <div class="help-block with-errors"></div>
                                    <label id="addAmount_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Expiry Date*</strong></label>
                                <div class="col-md-6 state_expiryDate">
                                    <div class="input-group state_edit">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        <input type="text" id="expiryDate" name="expiryDate" class="form-control datepicker detail numeric" autocomplete="off" data-error="This field is required." required>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                    <label id="expiryDate_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Expiry Place*</strong></label>
                                <div class="col-md-6">
                                    <input type="text" id="expPlace" name="expPlace" class="form-control state_edit alphanumspecial" autocomplete="off" value="" maxlength="100" data-error="This field is required." required>
                                    <div class="help-block with-errors"></div>
                                    <label id="expPlace_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">GOODS AND SHIPMENT</h3>
                        </div>
                        <div class="row" style="padding-top: 20px">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Shipment Date*</strong></label>
                                <div class="col-md-6">
                                    <!-- <select class="form-control state_edit" id="shipDateMode" data-error="This field is required." required>
                                        <option value="" data-name=""></option>
                                        <option value="0" data-name="Latest Shipment">Latest Shipment</option>
                                        <option value="1" data-name="Shipment Period">Shipment Period</option>
                                    </select> -->
                                    <div class="input-group state_edit">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        <input type="text" id="shipmentDate" name="shipmentDate" class="form-control datepicker detail numeric" autocomplete="off" data-error="This field is required." required>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                    <label id="shipmentDate_view" class="state_view"></label>

                                    <!-- <div class="help-block with-errors"></div>
                                    <label id="shipDateMode_view" class="state_view"></label> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row state_shipmentdt_shipmentPeriod">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-6 state_shipmentdt">
                                    <div class="input-group state_edit">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        <input type="text" id="shipmentDate" name="shipmentDate" class="form-control datepicker detail numeric" autocomplete="off" data-error="This field is required.">
                                    </div>
                                    <div class="help-block with-errors"></div>
                                    <label id="shipmentDate_view" class="state_view"></label>
                                </div>
                                <div class="col-md-6 state_shipmentPeriod">
                                    <input type="text" id="shipmentPeriod" name="shipmentPeriod" class="form-control state_edit" autocomplete="off" value="" maxlength="100"  data-error="This field is required.">
                                    <div class="help-block with-errors"></div>
                                    <label id="shipmentPeriod_view" class="state_view"></label>
                                </div>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Period of Presentation*</strong></label>
                                <div class="col-md-6">
                                    <input type="text" id="periodPresent" name="periodPresent" class="form-control numeric-input state_edit" autocomplete="off" value="" maxlength="3" data-error="This field is required." required>
                                    <div class="help-block with-errors"></div>
                                    <label id="periodPresent_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Partial Shipment*</strong></label>
                                <div class="col-md-6">
                                    <select class="form-control state_edit" id="partialShip" data-error="This field is required." required>
                                        <option value=""></option>
                                        <option value="0" data-name="Allowed">Allowed</option>
                                        <option value="1" data-name="Not Allowed">Not Allowed</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                    <label id="partialShip_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong>Transhipment*</strong></label>
                                <div class="col-md-6">
                                    <select class="form-control state_edit" id="transhipment" data-error="This field is required." required>
                                        <option value="" data-name=""></option>
                                        <option value="0" data-name="Allowed">Allowed</option>
                                        <option value="1" data-name="Not Allowed">Not Allowed</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                    <label id="transhipment_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="box-header">
                            <h3 class="box-title">GOODS AND SHIPMENT</h3>
                        </div>
                        <div class="row" style="padding-top: 20px">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">Other Information</label>
                                <div class="col-md-6">
                                    <input type="text" id="otherInf" name="otherInf" class="form-control state_edit" autocomplete="off" value="" maxlength="100">
                                    <div class="help-block with-errors"></div>
                                    <label id="otherInf_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="box-header">
                            <h3 class="box-title">ATTACHMENT DETAIL</h3>
                        </div>
                        <div class="row" style="padding-top: 20px">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">File Upload</label>
                                <div class="col-md-7 state_edit" >
                                    <div style="text-align:right; margin-bottom:8px;margin-right: 60px;">
                                        <button type="button" id="addFile" name="addFile" class="btn btn-default" style="border:1px solid #aaa;">Upload More</button>
                                    </div>
                                    <div id="upload-container"></div>
                                    <div id="errorFileFormat" style="color:red;margin-top:5px;"></div>
                                </div>
                                <div class="col-md-8">
                                    <div id="upload-document"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="col-md-12 state_edit text-center">
                            <button type="button" id="back" name="back" class="btn btn-default back float-left">@lang('form.cancel')</button>
                            <button type="button" id="confirm" name="confirm" class="btn btn-primary float-right ">@lang('form.confirm')</button>
                        </div>
                        <div class="col-md-12 state_view text-center" data-html2canvas-ignore="true">
                            <div class="float-left">
                                <button type="button" id="back_view" name="back_view" class="btn btn-default">@lang('form.cancel')</button>
                                <button type="button" id="save_screen" name="save_screen" class="btn btn-default" style="display:none" onclick="save_pdf();">@lang('form.save_pdf')</button>
                            </div>
                            <div class="float-right" style="display:inline;">
                                <button type="button" id="next_user" name="next_user" class="btn btn-info">@lang('form.next_user')</button>
                                <button type="button" id="done" name="done" class="btn btn-primary" style="display:none">@lang('form.done')</button>
                                <button type="button" id="submit_view" name="submit_view" class="btn btn-primary">@lang('form.submit')</button>
                            </div>
                        </div>
                    </div>
                    @include('_partials.next_user')
                </form>
            </div>
        </div>
    </div>

</section>

<script>
    var oTable;
    var levelOption;
    var cityOption;
    var submit_data;
    var id = '{{ $service }}';
    var noRef;

    let formCounter = 0;
    let arrFile = []
    const maxForms = 5;
    let uploadIndex = 1;
    $(document).ready(function () {

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true
        });

        $(document).on('input change', 'input.error, select.error', function () {
            $(this).removeClass('error');
            $(this).closest('.mb-3, .col-md-6').find('.help-block.with-errors').html('').hide();
        });
        $(document).on('change', 'select', function () {
            $(this).removeClass('error');
            $(this).closest('.mb-3, .col-md-6').find('.help-block.with-errors').html('').hide();
        });

        $('.table-hidden').hide();

        $(document).validator().on('#form-area','submit', function (e) {
            if (e.isDefaultPrevented()) {
                // handle the invalid form...
            } else {
                // everything looks good!

            }
        });

        // $('.state_shipmentdt_shipmentPeriod').hide();
        // $('.state_shipmentdt').hide();

        $('#issueDate').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#adviseDate').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#expiryDate').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#shipmentDate').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));

        getCorporateDroplist();
        getCountryDropList();
        getBenCountryDropList('');
        getCurrencyDropList();
        stateEdit();

        // $('select[id="corpId"]').on('change', function(e) {
		// 	$('#activityBy').prop("disabled",false);
		// 	$('#accountNo').prop("disabled",false);
        //     $('#menuType').prop("disabled",false);
		// 	if ($('#corpId').val() != "") {
    	// 		getActivityByDroplist(this.value);
		// 		getAccountDroplist(this.value);
    	// 		getMenuTypeDroplist(this.value);
		// 	}
        // });

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

        $('#creditAvailBy').on('change', function() {
            var unitOption = '';
			if ($('#creditAvailBy').val() != "") {
                unitOption = '<option value="" selected="selected"></option>';
                if($('#creditAvailBy').val() == '0') {
                    unitOption += '<option value="0" data-name = "Sight Draft">Sight Draft</option>';
                } else if ($('#creditAvailBy').val() == '1' || $('#creditAvailBy').val() == '3') {
                    unitOption += '<option value="1" data-name = "Usance">Usance</option>';
                    unitOption += '<option value="2" data-name = "Upas">Upas</option>';
                } else if ($('#creditAvailBy').val() == '2') {
                    unitOption += '<option value="0" data-name = "Sight">Sight</option>';
                    unitOption += '<option value="1" data-name = "Usance">Usance</option>';
                    unitOption += '<option value="2" data-name = "Upas">Upas</option>';
                }
			}

            $('.state_paymentAtUsanceUpas').hide();

            $('#paymentAt').html(unitOption);
            $('#paymentAt').select2({});
        });

        /*$('.state_shipmentdt_shipmentPeriod').hide();
        $('.state_shipmentdt').hide();
        $('.state_shipmentPeriod').hide();
        $("#shipDateMode").on("change", function () {
            var shipDateMode = $('#shipDateMode').val();

            if (shipDateMode == '1') {
                $('.state_shipmentdt').hide();
                $('#shipmentDate').prop('required', false);
                $('.state_shipmentPeriod').show();
                $('.state_shipmentdt_shipmentPeriod').show();
                $('#shipmentPeriod').prop('required', true);
            } else if (shipDateMode == '0') {
                $('.state_shipmentdt').show();
                $('.state_shipmentdt_shipmentPeriod').show();
                $('#shipmentDate').prop('required', true);
                $('.state_shipmentPeriod').hide();
                $('#shipmentPeriod').prop('required', false);
            } else {
                $('.state_shipmentdt_shipmentPeriod').hide();
            }
        });*/

        $('.state_paymentAtUsanceUpas').hide();
        // $('#usanceDay').attr('data-error', 'This field is required.');
        $('#paymentAt').on('change', function() {
            if($('#paymentAt').val() == '1' || $('#paymentAt').val() == '2') {
                if($('#paymentAt').val() == '1') {
                    $('.state_paymentAtUsance').show();
                    $('.state_paymentAtUpas').hide();
                    $('#usanceDay').prop('required', true);
                    $('#upasNote').prop('required', false);
                    $('#usanceDay').val("");
                    $('#usanceDay').focus();
                } else {
                    $('.state_paymentAtUsance').hide();
                    $('.state_paymentAtUpas').show();
                    $('#usanceDay').prop('required', false);
                    $('#upasNote').prop('required', true);
                }
                $('.state_paymentAtUsanceUpas').show();

            }else {
                $('.state_paymentAtUsanceUpas').hide();
                $('#usanceDay').prop('required', false);
            }
        });

        $('#usanceOpt2').on('change', function() {
            if($('#usanceOpt2').val() == 'OT') {
                $('.state_paymentAtUsanceUpas_other').show();
            } else {
                $('.state_paymentAtUsanceUpas_other').hide();
            }
        });


        $('#benCountry').on('change', function() {
            $('#expPlace').val($('#benCountry option:selected').attr('data-name'));
        });

        $('#corpId').on('change', function() {
            $('#benName').val($('#corpId option:selected').attr('data-name'));
            $('#benAddress1').val($('#corpId option:selected').attr('data-address1'));
            $('#benAddress2').val($('#corpId option:selected').attr('data-address2'));
            $('#benAddress3').val($('#corpId option:selected').attr('data-address3'));
            // $('#benCountry').val($('#corpId option:selected').attr('data-countryCode')).trigger('change');
            getBenCountryDropList($('#corpId option:selected').attr('data-countryCode'));
            // $('#benCountry').select2({});
            // $('#benCountry').val($('#corpId option:selected').attr('data-countryCode'));

            // $('#benCountry option[value='+ $('#corpId option:selected').attr('data-countryCode') +']').attr('selected', 'selected').trigger('change');

            $('#expPlace').val($('#corpId option:selected').attr('data-countryName'));
        });

        $('#issueDate').on('change', function() {
            var issueDate=$('#issueDate').val();
            var adviseDate=$('#adviseDate').val();
            if(moment(issueDate, "DD/MM/YYYY").isBefore(moment(adviseDate, "DD/MM/YYYY"))){
                flash('warning', 'Issue Date cannot be smaller than Advise Date');
                $('#issueDate').val('');
                return;
            }

        });

        $('#adviseDate').on('change', function() {
            var issueDate=$('#issueDate').val();
            var adviseDate=$('#adviseDate').val();
            if(moment(issueDate, "DD/MM/YYYY").isBefore(moment(adviseDate, "DD/MM/YYYY"))){
                flash('warning', 'Issue Date cannot be smaller than Advise Date');
                $('#adviseDate').val('');
                return;
            }

        });

        $('#submit_view').on('click', function () {
            $(this).prop('disabled',true);
            var content ='';
            if ($('#type').val() == 'add'){
                content='{{trans('form.confirm_add')}}';
            }else{
                content='{{trans('form.confirm_edit')}}';
            }

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
                    },

                }
            });
        });

        function checkFileSize(file) {
            var fileSize = file.size;

            var fileSizeMB = fileSize / (1024 * 1024);
            var maxFileSizeMB = 5;

            console.log("file size "+ Math.round(parseFloat(fileSizeMB) * 2) / 2 + " MB");
            var isValid = true;
            if (fileSizeMB > maxFileSizeMB) {
                isValid = false;
                alert("File size exceeded "+ maxFileSizeMB + " Mb");
            }

            return isValid;
        }

        function uploadFile (formData, fileNumber) {
            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: 'uploadDoc',
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                timeout: 60000,
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
                        // $(`#fileName${IdClass}_view`).text(result.fileName);
                        // $(`#fileId${IdClass}`).val(result.fileId);
                    }
                }, error: function (xhr, ajaxOptions, thrownError) {
                    var msg = '{{trans('form.conn_error')}}';
                    flash('warning', msg);
                    console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
                }
            });
        }

        function submitData(){
            var value = {
                "bankRefNo" : setDisplayText('refNo'),
                "issueDate" : setDisplayText('issueDate'),
                "mediaOfIssue" : setDisplayText('mediaOfIssue option:selected'),
                "mediaOfIssueName" : setDisplayDropListName('mediaOfIssue'),
                "adviceDate" : setDisplayText('adviseDate'),
                "applicantName" : setDisplayText('appName'),
                "applicantAddress1" : setDisplayText('address1'),
                "applicantAddress2" : setDisplayText('address2'),
                "applicantAddress3" : setDisplayText('address3'),
                "applicantCountryCode" : setDisplayText('country option:selected'),
                "applicantCountryName" : setDisplayDropListName('country'),
                "corpId" : setDisplayText('corpId option:selected'),
                "beneficiaryName" : setDisplayText('benName'),
                "beneficiaryAddress1" : setDisplayText('benAddress1'),
                "beneficiaryAddress2" : setDisplayText('benAddress2'),
                "beneficiaryAddress3" : setDisplayText('benAddress3'),
                "beneficiaryCountryCode" : setDisplayText('benCountry option:selected'),
                "beneficiaryCountryName" : setDisplayDropListName('benCountry'),
                "issuingBankName" : setDisplayText('issName'),
                "issuingBankAddress1" : setDisplayText('issAddress1'),
                "issuingBankAddress2" : setDisplayText('issAddress2'),
                "issuingBankAddress3" : setDisplayText('issAddress3'),
                "issuingBankCountryCode" : setDisplayText('issCountry option:selected'),
                "issuingBankCountryName" : setDisplayDropListName('issCountry'),
                "transferable" : setDisplayText('transferable option:selected'),
                "transferableName" : setDisplayDropListName('transferable'),
                "confirmingInst" : setDisplayText('confirmInst option:selected'),
                "confirmingInstName" : setDisplayDropListName('confirmInst'),
                "bankConfirming" : setDisplayText('bankConfirm option:selected'),
                "bankConfirmingName" : setDisplayDropListName('bankConfirm'),
                "creditAvailableBy" : setDisplayText('creditAvailBy option:selected'),
                "creditAvailableByName" : setDisplayDropListName('creditAvailBy'),
                "paymentDraftAt" : setDisplayText('paymentAt option:selected'),
                "paymentDraftAtName" : setDisplayDropListName('paymentAt'),
                "usanceDay" : setDisplayText('usanceDay'),
                "upasNote" : setDisplayText('upasNote'),
                "usanceUpasOpt1" : setDisplayText('usanceOpt1 option:selected'),
                "usanceUpasOpt1Name" : setDisplayDropListName('usanceOpt1'),
                "usanceUpasOpt2" : setDisplayText('usanceOpt2 option:selected'),
                "usanceUpasOpt2Name" : setDisplayDropListName('usanceOpt2'),
                "usanceUpasOt" : setDisplayText('usanceOther'),
                "currency" : setDisplayText('currency option:selected'),
                "amount" : setDisplayText('amount'),
                "plusTolerancePercentage" : setDisplayText('fromTolerance'),
                "minusTolerancePercentage" : setDisplayText('toTolerance'),
                "additionalAmount" : setDisplayText('addAmount'),
                "expiryDate" : setDisplayText('expiryDate'),
                "expiryPlace" : setDisplayText('expPlace'),
                // "shipmentDateMode" : setDisplayText('shipDateMode option:selected'),
                "shipmentDateModeName" : setDisplayDropListName('shipDateMode'),
                "latestShipmenetDate" : setDisplayText('shipmentDate'),
                "shipmentPeriod" : setDisplayText('shipmentPeriod'),
                "periodPresentation" : setDisplayText('periodPresent'),
                "partialShipment" : setDisplayText('partialShip option:selected'),
                "partialShipmentName" : setDisplayDropListName('partialShip'),
                "transhipment" : setDisplayText('transhipment option:selected'),
                "transhipmentName" : setDisplayDropListName('transhipment'),
                "otherInformation" : setDisplayText('otherInf'),
                "fileId1" : setDisplayText('fileId1'),
                "fileId2" : setDisplayText('fileId2'),
                "fileId3" : setDisplayText('fileId3'),
                "fileId4" : setDisplayText('fileId4'),
                "fileId5" : setDisplayText('fileId5'),
                "fileName1" : setDisplayTextFileName('fileName1_view'),
                "fileName2" : setDisplayTextFileName('fileName2_view'),
                "fileName3" : setDisplayTextFileName('fileName3_view'),
                "fileName4" : setDisplayTextFileName('fileName4_view'),
                "fileName5" : setDisplayTextFileName('fileName5_view'),
            };
            value.fileId1 = value.fileId1 === undefined ? "" : value.fileId1;
            value.fileId2 = value.fileId2 === undefined ? "" : value.fileId2;
            value.fileId3 = value.fileId3 === undefined ? "" : value.fileId3;
            value.fileId4 = value.fileId4 === undefined ? "" : value.fileId4;
            value.fileId5 = value.fileId5 === undefined ? "" : value.fileId5;

            console.log('============= ', value);

            var url_action = "add";

             $.ajax({
                 url: url_action,
                 method: 'post',
                 data: {"_token": "{{ csrf_token() }}", menu: id, value: value},
                 success: function (data) {
                     $('#submit_view').prop('disabled',false);
                     var result = JSON.parse(data);
                     if (result.status=="200") {
                         noRef=result.referenceNo;
                         flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                         $('#submit_view').hide();
                         stateSuccess();
                     } else {
                         $('#submit_view').prop('disabled',false);
                         flash('warning', result.message);
                     }

                 }, error: function (xhr, ajaxOptions, thrownError) {
                     $('#submit_view').prop('disabled',false);
                     flash('warning', 'Form Submit Failed');
                     console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
                 }
             });
        }


        $('#confirm').on('click', function () {
            if (!validateForm()) {
                return;
            }
            $('#submit_type').val('submit');
            stateView();
        });

        function validateForm() {
            var isValid = true;

            function showError(fieldId, message) {
                var $field = $('#' + fieldId);
                $field.addClass('error');
                var $helpBlock = $field.next('.help-block.with-errors');
                if ($helpBlock.length === 0) {
                    $helpBlock = $field.closest('.mb-3, .col-md-6').find('.help-block.with-errors').first();
                }
                $helpBlock
                    .html('<span style="color:#dd4b39;font-weight:bold;">' + message + '</span>')
                    .show();
                if (!isValid) return; // scroll ke error pertama saja
                $('html, body').animate({ scrollTop: $field.offset().top - 100 }, 300);
            }

            function clearError(fieldId) {
                var $field = $('#' + fieldId);
                $field.removeClass('error');
                var $helpBlock = $field.next('.help-block.with-errors');
                if ($helpBlock.length === 0) {
                    $helpBlock = $field.closest('.mb-3, .col-md-6').find('.help-block.with-errors').first();
                }
                $helpBlock.html('').hide();
            }

            var mandatoryFields = [
                { id: 'refNo',        label: 'Bank Reference No',      type: 'text' },
                { id: 'issueDate',    label: 'Issue Date',             type: 'text' },
                { id: 'mediaOfIssue', label: 'Media of Issue',         type: 'select' },
                { id: 'adviseDate',   label: 'Advise Date',            type: 'text' },
                { id: 'appName',      label: 'Applicant Name',         type: 'text' },
                { id: 'address1',     label: 'Applicant Address',      type: 'text' },
                { id: 'country',      label: 'Applicant Country',      type: 'select' },
                { id: 'corpId',       label: 'Corporate ID',           type: 'select' },
                { id: 'benName',      label: 'Beneficiary Name',       type: 'text' },
                { id: 'benAddress1',  label: 'Beneficiary Address',    type: 'text' },
                { id: 'benCountry',   label: 'Beneficiary Country',    type: 'select' },
                { id: 'issName',      label: 'Issuing Bank Name',      type: 'text' },
                { id: 'issAddress1',  label: 'Issuing Bank Address',   type: 'text' },
                { id: 'issCountry',   label: 'Issuing Bank Country',   type: 'select' },
                { id: 'transferable', label: 'Transferable',           type: 'select' },
                { id: 'confirmInst',  label: 'Confirming Institution', type: 'select' },
                { id: 'bankConfirm',  label: 'Bank Confirming',        type: 'select' },
                { id: 'creditAvailBy',label: 'Credit Available By',    type: 'select' },
                { id: 'paymentAt',    label: 'Payment Draft At',       type: 'select' },
                { id: 'currency',     label: 'Currency',               type: 'select' },
                { id: 'amount',       label: 'Amount',                 type: 'text' },
                { id: 'fromTolerance',label: 'Tolerance (+)',          type: 'text' },
                { id: 'toTolerance',  label: 'Tolerance (-)',          type: 'text' },
                { id: 'expiryDate',   label: 'Expiry Date',            type: 'text' },
                { id: 'expPlace',     label: 'Expiry Place',           type: 'text' },
                { id: 'shipmentDate', label: 'Shipment Date',          type: 'text' },
                { id: 'periodPresent',label: 'Period of Presentation', type: 'text' },
                { id: 'partialShip',  label: 'Partial Shipment',       type: 'select' },
                { id: 'transhipment', label: 'Transhipment',           type: 'select' },
            ];

            $.each(mandatoryFields, function(i, f) { clearError(f.id); });

            $.each(mandatoryFields, function(i, f) {
                var val = '';
                if (f.type === 'select') {
                    val = $('#' + f.id).val();
                } else {
                    val = $.trim($('#' + f.id).val());
                }
                if (val === '' || val === null || val === undefined) {
                    showError(f.id, f.label + ' is required.');
                    isValid = false;
                }
            });

            if ($('#paymentAt').val() == '1') {
                clearError('usanceDay');
                if ($.trim($('#usanceDay').val()) === '') {
                    showError('usanceDay', 'Usance Day is required.');
                    isValid = false;
                }
            }

            if ($('#paymentAt').val() == '2') {
                clearError('upasNote');
                if ($.trim($('#upasNote').val()) === '') {
                    showError('upasNote', 'UPAS Note is required.');
                    isValid = false;
                }
            }

            return isValid;
        }

        /*$('#submit_add').on('click', function () {
            $('#submit_type').val('submit_add');
            stateView();
        });*/

        $('#back_view').on('click', function () {
            $(this).prop('disabled',true);

            if($('#state').val() == 'success'){
                var action = '';
                if($('#submit_type').val()=='submit'){
                    action = 'landing';
                }else{
                    action = 'add';
                }
                app.setView(id,action)
                return;
            }else{
            $('#back_view').prop('disabled',false);
            stateEdit();
            }
            for (let i = 0; i < arrFile.length; i++) {
                $(`.file${i + 1}`).remove();
            }
        });


        /*$('.back').on('click', function () {
            app.setView(id,'landing')

        });*/
        $('.back').on('click', function () {
            $(this).prop('disabled',true);
            if ($('#type').val() == 'add') {
                app.setView(id,'landing')
            } else {
                var code = $('#code_edit').val();
                var res = app.setView(id,'detail');
                if(res=='done'){
                    $('#code').val(code);
                    getMatrix();
                }
            }
        });

        $('#done').on('click', function () {
            $(this).prop('disabled',true);
            app.setView(id,'landing');
        });

        $('.alphanumspecial').alphanum({
            allowSpace: true,
            allow : '/-?:().,\'+'
        });

        $('input[type="text"]').not('.numeric').not('.alphanumspecial').alphanum({
            allowSpace: true,
            allow : '.,-'
        });

        $('.numeric-input').numeric({
            allowMinus: false,
            allowThouSep : false,
            allowDecSep : false,
        });
    });

    function getCorporateDroplist() {
		var menu = '{{ $service }}';
        var value = {
        };
        var url_action = 'searchCorporateForDroplist';
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

                    // Add Image
                    if (formCounter < maxForms) {
                        formCounter++;
                        createUploadRow(formCounter);
                    } else {
                        alert("Maximum limit reached: " + maxForms);
                    }

                    unitOption = '<option value=""selected="selected">select corporate</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="'+ obj.corporateId +'" data-name = "'+obj.name+'" data-address1 = "'+obj.address1+'" data-address2 = "'+obj.address2+'" data-address3 = "'+obj.address3+'" data-countryCode = "'+obj.countryCode+'" data-countryName = "'+obj.countryName+'" >'+ obj.corporateName + '</option>';
                    });

					$('#corpId').html(unitOption);
                    $('#corpId').select2({width: '100%'});
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

    function getCountryDropList() {

        var url_action = 'searchCountryForDroplist';
        var action = 'SEARCH';
        var menu = '{{ $service }}';
        var countryOption;
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            type: 'json',
            data: {
                menu : menu,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                                        // countryOption = '<select id="country" class="form-control state_edit" required>';
                    countryOption += '<option value="" selected="selected">--Select Country--</option>';


                    $.each(result.result, function (idx, obj) {
                        countryOption += '<option value="' + obj.code +' "data-name = "'+obj.name+'">' + obj.name + '</option>';
                    });

                    // countryOption += '</select>';
                    // countryOption += '<div class="help-block with-errors"></div>';

                    $('#country').html(countryOption);
                    $('#country').select2({width: '100%'});

                    $('#issCountry').html(countryOption);
                    $('#issCountry').select2({width: '100%'});
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

    function getBenCountryDropList(defaultValue) {

        var url_action = 'searchCountryForDroplist';
        var action = 'SEARCH';
        var menu = '{{ $service }}';
        var countryOption;
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            type: 'json',
            data: {
                menu : menu,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                                        // countryOption = '<select id="country" class="form-control state_edit" required>';
                    if(defaultValue === undefined || defaultValue === '') {
                        countryOption += '<option value="" selected="selected">--Select Country--</option>';
                    } else {
                        countryOption += '<option value="">--Select Country--</option>';
                    }

                    $.each(result.result, function (idx, obj) {
                        if(obj.code === defaultValue) {
                            countryOption += '<option value="' + obj.code +' "data-name = "'+obj.name+'" selected="selected">' + obj.name + '</option>';
                        } else {
                            countryOption += '<option value="' + obj.code +' "data-name = "'+obj.name+'">' + obj.name + '</option>';
                        }

                    });

                    $('#benCountry').html(countryOption);
                    $('#benCountry').select2({width: '100%'});
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

    function getCurrencyDropList() {

        var url_action = 'searchCurrencyForDroplist';
        var action = 'SEARCH';
        var menu = '{{ $service }}';
        var currencyOption;
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            type: 'json',
            data: {
                menu : menu,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    // currencyOption = '<select id="currency" class="form-control state_edit" required>';
                    currencyOption += '<option value="" selected="selected">--Select Currency--</option>';
                    $.each(result.result, function (idx, obj) {
                        currencyOption += '<option value="' + obj.code + '" data-name="'+obj.name+'">' + obj.name + '</option>';
                    });
                    // currencyOption += '</select>';
                    // currencyOption += '<div class="help-block with-errors"></div>';

                    $('#currency').html(currencyOption);
                    $('#currency').select2({width: '100%'});
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

    function getBranchEdit(code_id){

        var url_action= 'search';
        var value ={
            code:code_id,
            name:'',
            currentPage: "1",
            pageSize: "20",
            orderBy: {"code": "ASC"}
        };
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{value:value,menu:id,action:'DETAIL',url_action:url_action},
            success: function (data) {

                var result = JSON.parse(data);
                if (result.status=="200") {
                    var index = result.result.map(function(o) { return o.code; }).indexOf(code_id.toString());
                    var detail = result.result[index];

                    $('#code').val(detail.code);
                    $('#code').prop('disabled',true)
                    $('#name').val(detail.name);
                    $('#dscp').val(detail.dscp);
                    $('#contact').val(detail.contactName);
                    $('#email').val(detail.email);
                    $('#address1').val(detail.address1);
                    $('#address2').val(detail.address2);
                    $('#address3').val(detail.address3);
                    $('#city_list').val(detail.cityCode).trigger('change');
                    $('#level_list').val(detail.levelCode).trigger('change');
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

    function stateEdit() {

        $('.parent_menu_name').show();

        $('input:checkbox').prop('disabled','');
        $('#state').val('edit');
        $('.state_view').hide();
        $('.state_edit').show();
        $('label.state_view').text('-');
        $('#save_screen').hide();
        $('.help-block').show();
        $('#done').hide();
        $('#next_user').hide();
    }

    function setDisplayText(value) {
        return value == '' ? '-' : value;
    }

    function createUploadRow(fileNumber) {
        const uploadRow = `
            <div id="upload_file${fileNumber}" style="display:flex; align-items:flex-start; justify-content:space-between; margin-bottom:10px; padding-right:60px;">
                <div>
                    <input name="file" type="file" id="fileName${fileNumber}" accept=".pdf, .jpg, .jpeg, .tif" style="display:none;" />
                    <div style="display:flex; align-items:center; gap:8px;">
                        <button type="button" class="btn btn-default" style="border:1px solid #aaa;" onclick="document.getElementById('fileName${fileNumber}').click()">Choose File</button>
                        <span id="fileLabel${fileNumber}" style="color:#555; font-size:13px;">No file chosen</span>
                    </div>
                    <div><small><i>* Allowed File Type: *pdf, *jpeg, *jpg and *tif.</i></small></div>
                    <div><small>Files must be less than 5 MB.</small></div>
                </div>
                <div style="margin-left:10px; flex-shrink:0;">
                    <button type="button" data-index="${fileNumber}" class="btn btn-danger" onclick="deleteFile(${fileNumber})">Clear</button>
                </div>
            </div>`;
        $("#upload-container").append(uploadRow);
    }

    function stateView() {
        $('#state').val('view');
        $('.parent_menu_name').show();

        $('input:checkbox').prop('disabled','disabled');

        var refNo = setDisplayText('refNo');
        var issueDate = setDisplayText('issueDate');
        var mediaOfIssue = setDisplayDropListName('mediaOfIssue');
        var adviseDate = setDisplayText('adviseDate');
        var appName = setDisplayText('appName');
        var address1 = setDisplayText('address1');
        var address2 = setDisplayText('address2');
        var address3 = setDisplayText('address3');
        var country = setDisplayDropListName('country');
        var corpId = setDisplayDropListName('corpId');
        var benName = setDisplayText('benName');
        var benAddress1 = setDisplayText('benAddress1');
        var benAddress2 = setDisplayText('benAddress2');
        var benAddress3 = setDisplayText('benAddress3');
        var benCountry = setDisplayDropListName('benCountry');
        var issName = setDisplayText('issName');
        var issAddress1 = setDisplayText('issAddress1');
        var issAddress2 = setDisplayText('issAddress2');
        var issAddress3 = setDisplayText('issAddress3');
        var issCountry = setDisplayDropListName('issCountry');
        var transferable = setDisplayDropListName('transferable');
        var confirmInst = setDisplayDropListName('confirmInst');
        var bankConfirm = setDisplayDropListName('bankConfirm');
        var creditAvailBy = setDisplayDropListName('creditAvailBy');
        var paymentAt = setDisplayDropListName('paymentAt');

        // usance / upas
        var usanceDay = setDisplayText('usanceDay');
        var upasNote = setDisplayText('upasNote');
        var usanceOpt1 = setDisplayDropListName('usanceOpt1');
        var usanceOpt2 = setDisplayDropListName('usanceOpt2');
        var usanceOther = setDisplayText('usanceOther');

        var paymentAtKey = setDisplayText('paymentAt');
        if(paymentAtKey == '1' || paymentAtKey == '2') {
            $('.state_paymentAtUsanceUpas').show();
            if(paymentAtKey == '1') {
                $('.state_paymentAtUsance').show();
                $('.state_paymentAtUpas').hide();
            } else {
                $('.state_paymentAtUsance').hide();
                $('.state_paymentAtUpas').show();
            }
        }else {
            $('.state_paymentAtUsanceUpas').hide();
        }

        var currency = setDisplayDropListName('currency');
        var amount = setDisplayText('amount');
        var fromTolerance = setDisplayText('fromTolerance');
        var toTolerance = setDisplayText('toTolerance');
        var addAmount = setDisplayText('addAmount');
        var expiryDate = setDisplayText('expiryDate');
        var expPlace = setDisplayText('expPlace');
        // var shipDateMode = setDisplayDropListName('shipDateMode');

        /*var shipDateModeKey = setDisplayText('shipDateMode');
        if (shipDateModeKey == '1') {
            $('.state_shipmentdt').hide();
            $('.state_shipmentPeriod').show();
            $('.state_shipmentdt_shipmentPeriod').show();
        } else if (shipDateModeKey == '0'){
            $('.state_shipmentdt').show();
            $('.state_shipmentdt_shipmentPeriod').show();
            $('.state_shipmentPeriod').hide();
        } else {
            $('.state_shipmentdt_shipmentPeriod').hide();
        }*/
        // shipDateMode 1
        var shipmentDate = setDisplayText('shipmentDate');
        // shipDateMode 2
        // var shipmentPeriod = setDisplayText('shipmentPeriod');

        var periodPresent = setDisplayText('periodPresent');
        var partialShip = setDisplayDropListName('partialShip');
        var transhipment = setDisplayDropListName('transhipment');
        var otherInf = setDisplayText('otherInf');

        // var fileName1 = setDisplayText('fileName1');
        // var fileName2 = setDisplayText('fileName2');
        // var fileName3 = setDisplayText('fileName3');
        // var fileName4 = setDisplayText('fileName4');
        // var fileName5 = setDisplayText('fileName5');

        $.each(arrFile, function(index, file) {
            // Template row HTML
            let uploadRow = `
                <div class="state_view file${index + 1}">
                    <label id="fileName${index + 1}_view">${file.filename}</label>
                    <input type="hidden" id="fileId${index + 1}" value="${file.fileId}"/>
                </div>
            `;

            // Append row ke elemen #upload-document
            $("#upload-document").append(uploadRow);
        });

        $('#preview').text('Preview');
        $('.state_edit').hide();
        $('.state_view').show();

        $('#refNo_view').text(refNo);
        $('#issueDate_view').text(issueDate);
        $('#mediaOfIssue_view').text(mediaOfIssue);
        $('#adviseDate_view').text(adviseDate);
        $('#appName_view').text(appName);
        $('#address1_view').text(address1);
        $('#address2_view').text(address2);
        $('#address3_view').text(address3);
        $('#country_view').text(country);
        $('#corpId_view').text(corpId);
        $('#benName_view').text(benName);
        $('#benAddress1_view').text(benAddress1);
        $('#benAddress2_view').text(benAddress2);
        $('#benAddress3_view').text(benAddress3);
        $('#benCountry_view').text(benCountry);
        $('#issName_view').text(issName);
        $('#issAddress1_view').text(issAddress1);
        $('#issAddress2_view').text(issAddress2);
        $('#issAddress3_view').text(issAddress3);
        $('#issCountry_view').text(issCountry);
        $('#transferable_view').text(transferable);
        $('#confirmInst_view').text(confirmInst);
        $('#bankConfirm_view').text(bankConfirm);
        $('#creditAvailBy_view').text(creditAvailBy);
        $('#paymentAt_view').text(paymentAt);
        $('#usanceDay_view').text(usanceDay);
        $('#upasNote_view').text(upasNote);
        $('#usanceOpt1_view').text(usanceOpt1);
        $('#usanceOpt2_view').text(usanceOpt2);
        $('#usanceOther_view').text(usanceOther);
        $('#currency_view').text(currency);
        $('#amount_view').text(currencyFormat(amount));
        $('#fromTolerance_view').text('+' + fromTolerance + "% -"+toTolerance+'%');
        //$('#addAmount_view').text(currencyFormat(addAmount));
        $('#addAmount_view').text(addAmount);
        $('#expiryDate_view').text(expiryDate);
        $('#expPlace_view').text(expPlace);
        // $('#shipDateMode_view').text(shipDateMode);
        $('#shipmentDate_view').text(shipmentDate);
        // $('#shipmentPeriod_view').text(shipmentPeriod);
        $('#periodPresent_view').text(periodPresent + ' day(s) after shipment');
        $('#partialShip_view').text(partialShip);
        $('#transhipment_view').text(transhipment);
        $('#otherInf_view').text(otherInf);

        $('#save_screen').hide();
        $('.help-block').hide();
        $('#done').hide();
        $('#next_user').hide();

    }

    function stateSuccess() {
        $('#state').val('success');
        $('#code_1').val('');
        $('#name').val('');
        $('input.state_edit').val('');
        $('input.check').attr('checked', '');
        $('#back_view').hide();
        $('#save_screen').show();
        $('#done').show();
        $('#next_user').show();
    }

    function setDisplayText(id) {
        return $('#'+id).val();
    }

    function setDisplayTextFileName(id) {
        var returnVal = $('#'+id).text();

        if(returnVal) {
            returnVal = returnVal.replace(/^.*[\\/]/, '');
        }

        return returnVal;
    }


    function setDisplayDropListName(id) {
        return $('#'+id+' option:selected').attr('data-name');
    }

    function currencyFormat (num) {
        if(num == '' || num == undefined)
            return num;
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

</script>
