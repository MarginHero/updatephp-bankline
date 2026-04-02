@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'detail']])

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="refNo" value=""/>
            <input type="hidden" id="idTrx" value=""/>
            <input type="hidden" id="state" value=""/>
			<form id="form-area" class="form-horizontal form-area">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Form Drop Detail</h3><br>
					</div>

					<div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Transaction Reference Number</label>
									<div class="col-md-5">
										<label id="referenceNo"></label>
									</div>
								</div>
							</div>
							<div class="row row-status">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Corporate ID</label>
									<div class="col-md-5">
										<label id="corporateId"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Corporate Name</label>
									<div class="col-md-5">
										<label id="corporateName"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">User Maker ID</label>
									<div class="col-md-5">
										<label id="createdBy"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Menu</label>
									<div class="col-md-5">
										<label id="menu"></label>
									</div>
								</div>
							</div>
							<div class="row declineTrx">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label state_add text-end"><strong>Reason&ast;</strong></label>
                                    <label class="col-md-3 col-form-label state_view text-end">Reason</label>
									<div class="col-md-5">
										<input type="text" id="reason_reject" name="reason_reject" class="form-control state_add" autocomplete="off" value="" maxlength="100" data-error="This field is required." required>
	                                    <div class="help-block with-errors"></div>
	                                    <label id="reason_reject_view" class="state_view"></label>
									</div>
								</div>
							</div>

							<div class="row processTrx">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Reason</label>
									<div class="col-md-5">
										<input type="text" id="reason_process" name="reason_process" class="form-control state_add" autocomplete="off" value="" maxlength="100">
	                                    <label id="reason_process_view" class="state_view"></label>
									</div>
								</div>
							</div>

                            <!-- <div class="row state_detail">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Reason</label>
                                    <div class="col-md-5">
                                        <input type="text" id="reason" name="reason" class="form-control" autocomplete="off" value="" maxlength="100" data-error="This field is required." required>
	                                    <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div> -->
						</div>
					</div>
                    <div class="box-header list-title">
                        <h3 class="box-title">Form Drop Status History</h3>
                    </div>
                    <div class="box-body list-title">
                        <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                            style="border-collapse:collapse;">
                            <thead>
                                <tr>
                                    <th align="center"><strong>Status</strong></th>
                                    <th align="center"><strong>Action Date</strong></th>
                                    <th align="center"><strong>Action By</strong></th>
                                    <th align="center"><strong>Reason</strong></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="box-header">
						<h3 class="box-title">Source Account</h3><br>
					</div>
					<div class="box-body">
						<div class="container-fluid">
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Source Account</label>
									<div class="col-md-5">
										<label id="sourceAccount"></label>
									</div>
								</div>
							</div>
                             <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Remitter Information</label>
									<div class="col-md-5">
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Remitter Name</label>
									<div class="col-md-5">
										<label id="remitterName"></label>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="box-header">
                        <h3 class="box-title">Beneficiary Account</h3><br>
                    </div>
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Beneficiary Account</label>
                                    <div class="col-md-5">
                                        <label id="destinationAccount"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Country</label>
									<div class="col-md-5">
										<label id="destCountry"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Beneficiary Bank</label>
									<div class="col-md-5">
										<label id="destBank"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">SWIFT Code</label>
									<div class="col-md-5">
										<label id="swiftCode"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Town Name</label>
                                    <div class="col-md-5">
                                        <label id="bankTownName"></label>
                                    </div>
                                </div>
                            </div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Account Number</label>
									<div class="col-md-5">
										<label id="benAccountNo"></label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Account Name</label>
									<div class="col-md-5">
										<label id="benAccountName"></label>
									</div>
								</div>
							</div>

                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Department</label>
                                    <div class="col-md-5">
                                        <label id="department"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Sub Department</label>
                                    <div class="col-md-5">
                                        <label id="subDepartment"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Street Name</label>
                                    <div class="col-md-5">
                                        <label id="streetName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Building Number</label>
                                    <div class="col-md-5">
                                        <label id="buildingNumber"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Building Name</label>
                                    <div class="col-md-5">
                                        <label id="buildingName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Floor</label>
                                    <div class="col-md-5">
                                        <label id="floor"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Post Box</label>
                                    <div class="col-md-5">
                                        <label id="postBox"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Post Code</label>
                                    <div class="col-md-5">
                                        <label id="postCode"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Room</label>
                                    <div class="col-md-5">
                                        <label id="room"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Town Name</label>
                                    <div class="col-md-5">
                                        <label id="townName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Town Location Name</label>
                                    <div class="col-md-5">
                                        <label id="townLocationName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">District Name</label>
                                    <div class="col-md-5">
                                        <label id="districtName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Country Sub Division</label>
                                    <div class="col-md-5">
                                        <label id="countrySubDivision"></label>
                                    </div>
                                </div>
                            </div>


                            <div class="row saveBenFlag">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Unique Name</label>
                                    <div class="col-md-5">
                                        <label id="aliasBen"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Beneficiary Country</label>
                                    <div class="col-md-5">
                                        <label id="beneficiaryCountry"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Order Party Reference No</label>
                                    <div class="col-md-5">
                                        <label id="benRefNo"></label>
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
									<label class="col-md-3 col-form-label text-end">Amount</label>
									<div class="col-md-5">
										<label id="amount"></label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Exchange Rate</label>
									<div class="col-md-5">
										<label id="exchangeRate"></label>
									</div>
								</div>
							</div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Charge Instruction</label>
                                    <div class="col-md-5">
                                        <label id="chargeIns"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="row chargeTo_class" style="display:none">
                            <div class="mb-3 row form-group">
                                <label class="col-md-5 col-form-label text-end">Charge To</label>
                                <div class="col-md-6">
                                    <label id="chargeTo">-</label>
                                </div>
                            </div>
                        </div>

							<!-- <div id="chargeList"></div>

							<div class="row stateTotalFee">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Total Fee</label>
									<div class="col-md-5">
										<label id="totalFee"></label>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Total Debit Amount</label>
									<div class="col-md-5">
										<label id="totalDebitAmount"></label>
									</div>
								</div>
							</div> -->

							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Description</label>
									<div class="col-md-5">
										<label id="dscp1"></label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5">
										<label id="dscp2"></label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5">
										<label id="dscp3"></label>
									</div>
								</div>
							</div>
							<!-- <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Extended Payment Detail</label>
									<div class="col-md-5">
										<label id="extPaymentDetail"></label>
									</div>
								</div>
							</div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Transaction Purpose LHBU</label>
                                    <div class="col-md-5">
                                        <label id="transactionPurposeLHBU"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Document Type</label>
                                    <div class="col-md-5">
                                        <label id="documentType"></label>
                                    </div>
                                </div>
                            </div>-->
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Underlying Document</label>
                                    <div class="col-md-5">
                                        <label id="underlyingCode"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row fileUpload" style="display:none">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end"></label>
                                    <div class="col-md-5">
                                        <label id="fileName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Transaction Purpose LLD</label>
                                    <div class="col-md-5">
                                        <label id="transactionPurpose"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row"  id="row_nameOfGoods" style="display: none;">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Name of Goods</label>
                                    <div class="col-md-5">
                                        <label id="nameOfGoods"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="row_countryOfOrigin" style="display: none;">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Country of Origin</label>
                                    <div class="col-md-5">
                                        <label id="countryOfOrigin"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="row_countryOfLoading" style="display: none;">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Country of Destination</label>
                                    <div class="col-md-5">
                                        <label id="countryOfLoading"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="row_countryOfShipment" style="display: none;">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Country of Loading</label>
                                    <div class="col-md-5">
                                        <label id="countryOfShipment"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="row_isRelated">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end"></label>
                                    <div class="col-md-5">
                                        <label class="col-form-label text-end" id="isRelatedYes" style="text-align:left !important;display: none; " >
                                            Related to transaction with sanctioned countries
                                        </label>
                                        <label class="col-form-label text-end" id="isRelatedNo" style="text-align:left !important;display: none;" >
                                            Not related to transaction with sanctioned countries
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Sender Category</label>
                                    <div class="col-md-5">
                                        <label id="senderCategory"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Beneficiary Category</label>
                                    <div class="col-md-5">
                                        <label id="beneficiaryCategory"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Transactor Relationship</label>
									<div class="col-md-5">
										<label id="transactorRelationship"></label>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="box-header">
						<div class="row">
							<div class="mb-3 row form-group">
								<label class="col-md-3 col-form-label text-end">Payment Schedule</label>
								<div class="col-md-5">
									<label id="paymentSchedule"></label>
								</div>
							</div>
						</div>
						<div class="row instructionModeClass"></div>
					</div>
					<div class="box-body">
						<div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Notify the Beneficiary</label>
                                    <div class="col-md-5">
                                        <label id="notify"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row notifyEmail" style="display:none">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-3 col-form-label text-end">Beneficiary Email Address</label>
                                    <div class="col-md-5">
                                        <label id="email"></label>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
					<!-- <div class="box-header">
						<h3 class="box-title">Underlying Document</h3><br>
					</div>
					<div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Underlying Code</label>
									<div class="col-md-5">
										<label id="underlyingCode"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Document Type</label>
									<div class="col-md-5">
										<label id="docType"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Underlying Amount</label>
									<div class="col-md-5">
										<label id="uderlyingAmount"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Remark</label>
									<div class="col-md-5">
										<label id="remark"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Expiry Date</label>
									<div class="col-md-5">
										<label id="expiryDate"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Registering Branch</label>
									<div class="col-md-5">
										<label id="docBranch"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Register Date</label>
									<div class="col-md-5">
										<label id="registerDate"></label>
									</div>
								</div>
							</div>

						</div>
					</div> -->
					<!-- <div class="box-header processTrx">
						<h3 class="box-title">Transaction Number</h3><br>
					</div>
					<div class="box-body processTrx">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"><strong>Transaction ID&ast;</strong></label>
									<div class="col-md-5">
										<input type="text" id="trxId" name="trxId" class="form-control state_add" autocomplete="off" value="" maxlength="40" data-error="This field is required." required>
	                                    <div class="help-block with-errors"></div>
	                                    <label id="trxId_view" class="state_view"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Remark</label>
									<div class="col-md-5">
										<input type="text" id="processRemark" name="processRemark" class="form-control state_add" autocomplete="off" value="" maxlength="100">
	                                    <div class="help-block with-errors"></div>
	                                    <label id="processRemark_view" class="state_view"></label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box-header declineTrx">
						<h3 class="box-title">Decline</h3><br>
					</div>
					<div class="box-body declineTrx">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"><strong>Rejection Reason&ast;</strong></label>
									<div class="col-md-5">
										<input type="text" id="declineRemark" name="declineRemark" class="form-control state_add" autocomplete="off" value="" maxlength="100" data-error="This field is required." required>
	                                    <div class="help-block with-errors"></div>
	                                    <label id="declineRemark_view" class="state_view"></label>
									</div>
								</div>
							</div>
						</div>
					</div> -->

					<div class="box-footer">
						<div class="state_detail">
							<div class="float-left">
								<button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
							</div>
							<div class="float-right state_detail_r">
                                <button type="button" id="process_inprogress" name="process_inprogress" class="btn btn-primary">@lang('form.in_progress')</button>
								<button type="button" id="process_complete" name="process_complete" class="btn btn-primary">@lang('form.complete')</button>
                                <button type="button" id="decline" name="decline" class="btn btn-danger">@lang('form.reject')</button>
                                <button type="button" id="save_screen" name="save_screen" class="btn btn-default" onclick="save_pdf();">@lang('form.save_pdf')</button>
							</div>
						</div>
						<div class="col-md-12 state_add text-center">
							<button type="button" id="back_add" name="back_add" class="btn btn-default back float-left">@lang('form.back')</button>
							<button type="button" id="confirm" name="confirm" class="btn btn-primary float-right ">@lang('form.confirm')</button>
						</div>
						<div class="col-md-12 state_view text-center btn1" data-html2canvas-ignore="true">
							<div class="float-left">
								<button type="button" id="back_view" name="back_view" class="btn btn-default">@lang('form.back')</button>
								<!-- <button type="button" id="save_screen" name="save_screen" class="btn btn-default" onclick="save_pdf();">@lang('form.save_pdf')</button> -->
							</div>
							<div class="float-right" style="display:inline;">
								<button type="button" id="done" name="done" class="btn btn-primary" style="display:none">@lang('form.done')</button>
								<button type="button" id="submit_view" name="submit_view" class="btn btn-primary">@lang('form.submit')</button>
                                <button type="button" id="save_screen1" name="save_screen1" class="btn btn-default" onclick="save_pdf();" style="display:none">@lang('form.save_pdf')</button>
							</div>
						</div>
                        <div class="col-md-12 text-center btn2">
							<div class="float-left">
								<button type="button" id="back2" name="back2" class="btn btn-default">@lang('form.back')</button>
								<!-- <button type="button" id="save_screen" name="save_screen" class="btn btn-default" onclick="save_pdf();">@lang('form.save_pdf')</button> -->
							</div>
							<div class="float-right" style="display:inline;">
								<button type="button" id="save_screen2" name="save_screen2" class="btn btn-default" onclick="save_pdf();">@lang('form.save_pdf')</button>
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
    var noRef = 'Form-Drop';

    $(document).ready(function () {

		$('#form-area').validator().on('submit', function (e) {
            if (e.isDefaultPrevented()) {
                // handle the invalid form...
            } else {
                // everything looks good!

            }
        });

        oTable = $('#list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "select": false,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: false,
                    width: "25%"
                },
                {
                    targets: 1,
                    sortable: false,
                    width: "25%"
                },
                {
                    targets: 2,
                    sortable: false,
                    width: "25%"
                },
                {
                    targets: 3,
                    sortable: false,
                    width: "25%"
                }
            ]
        });

        $('.numeric').numeric({allowMinus:false, allowDecSep:false, allowThouSep:false});

        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',.-'
        });

        $('.processTrx').hide();
        $('.declineTrx').hide();

        $('#reason_reject').on('input change', function() {
            var $this = $(this);
            var $formGroup = $this.closest('.row');
            var $helpBlock = $formGroup.find('.help-block');

            if($this.val() !== '' && $this.val() !== null) {
                $formGroup.removeClass('has-error');
                $this.css('border-color', '');
                $helpBlock.html('').hide();
            }
        });

		$('#process_inprogress').on('click', function () {
            $('.processTrx').show();
			$('#state').val("processInprogressNew");
			stateAdd();
        });
        $('#process_complete').on('click', function () {
            $('.processTrx').show();
			$('#state').val("processCompleteNew");
			stateAdd();
        });

		$('#decline').on('click', function () {
			$('.declineTrx').show();
			$('#state').val("declineNew");
			stateAdd();
        });

		$('#confirm').on('click', function () {
            var state = $('#state').val();

            if(state == 'declineNew') {
                var hasError = false;
                var $reasonField = $('#reason_reject');
                var $formGroup = $reasonField.closest('.row');
                var $helpBlock = $formGroup.find('.help-block');

                if($reasonField.val() === '' || $reasonField.val() === null) {
                    hasError = true;
                    $formGroup.addClass('has-error');
                    $reasonField.css('border-color', '#a94442');
                    $helpBlock.html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
                } else {
                    $formGroup.removeClass('has-error');
                    $reasonField.css('border-color', '');
                    $helpBlock.html('').hide();
                }

                if(hasError) {
                    return;
                }
            }

            setTimeout(function(){
                stateView();
            });
        });

		$('#submit_view').on('click', function () {
            $(this).prop('disabled',true);
			var content='';
			var state = $('#state').val();
			if(state == 'processInprogressNew'){
				content = '{{trans('form.confirm_process_inprogress')}}';
			}else if(state == 'processCompleteNew'){
				content = '{{trans('form.confirm_process_complete')}}';
			}else if (state == 'declineNew'){
				content = '{{trans('form.confirm_decline')}}';
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
                            var state = $('#state').val();
							if(state == 'processInprogressNew'){
								submitProcessInprogress();
							} else if(state == 'processCompleteNew'){
								submitProcessComplete();
							} else if (state == 'declineNew'){
								submitDecline();
							}
                        }
                    }
                }
            });
        });

        $('#back').on('click', function () {
            $('.processTrx').validator('reset');
        	$('.declineTrx').validator('reset');

            var res = app.setView(id,'landing');
        });
        $('#back2').on('click', function () {
            $('.processTrx').validator('reset');
        	$('.declineTrx').validator('reset');

            var res = app.setView(id,'landing');
        });

		$('#done').on('click', function () {
            $(this).prop('disabled',true);
            app.setView(id,'landing');
        });

		$('#back_add').on('click', function () {
            $('.processTrx').validator('reset');
			$('.declineTrx').validator('reset');
			$('.state_detail').show();
			$('.state_detail_r').show();
			$('.processTrx').hide();
			$('.declineTrx').hide();
			$('.state_add').hide();
        });

		$('#back_view').on('click', function () {
            $('.processTrx').validator('reset');
			$('.declineTrx').validator('reset');
			stateAdd();
        });

    });

    function getDetail(){
        var refNo= $('#refNo').val();
        var url_action= 'search';
        var value ={
            referenceNo: refNo,
            corporateId: "",
            corporateName: "",
            currentPage: "1",
            pageSize: "20",
            orderBy: {"referenceNo": "ASC"}
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
					$('.state_view').hide();

					var index = result.result.map(function(o) { return o.referenceNo; }).indexOf(refNo.toString());
                    var detail = result.result[index];

					//new
                    $('#idTrx').val(detail.formDropId);

                    $('#referenceNo').text(detail.referenceNo);
                    $('#corporateId').text(detail.corporateId);
                    $('#corporateName').text(detail.corporateName);
                    $('#createdBy').text(detail.createdBy);
                    $('#menu').text(detail.menu);
					$('#statusName').text(detail.statusName);
					$('#requestBy').text(detail.corpId + ' - ' + detail.corpName);
					$('#sourceAccount').text(detail.sourceAccountNo + ' / ' + detail.sourceAccountName + ' ('+detail.sourceAccountCurrency+')');
					$('#processBranch').text(detail.branchCode + ' - '+ detail.branchName);

					$('#amount').text(detail.trxCurrency + ' ' + currencyFormat(detail.trxAmount));
                    $('#exchangeRate').text('Forward Contract');
					setChargeList(detail.chargeList);

					if(detail.totalChargeAmount != 0){
						$('#totalFee').text(detail.trxCurrency +' '+ detail.totalChargeAmount);
						$('.stateTotalFee').show();
					}else{
						$('.stateTotalFee').hide();
					}
					$('#totalDebitAmount').text(detail.trxCurrency +' '+ detail.totalDebitAmount);
					$('#dscp1').text(detail.remark1);
                    $('#dscp2').text(detail.remark2);
                    $('#dscp3').text(detail.remark3);
					$('#extPaymentDetail').text(detail.remark2);
					$('#trxPurpose').text(detail.trxPurposeCode + ' - ' + detail.trxPurposeName);
					$('#trxDscp').text(detail.trxDescription);

					if (detail.instructionMode == 'I') {
						$('#paymentSchedule').text('Immediate');
					} else if (detail.instructionMode == 'F'){
						$('#paymentSchedule').text('Specific Date');
					} else if (detail.instructionMode == 'R'){
						$('#paymentSchedule').text('Repeat');
					}
					setInstructionMode(detail);

                    if(detail.destinationAccount == '0'){
                        $('#destinationAccount').text('Predefined Beneficiary');
                    }else{
                        $('#destinationAccount').text('New');
                    }

					$('#destCountry').text(detail.benCountryName);
					$('#destBank').text(detail.benBankName);
					$('#swiftCode').text(detail.benBankCode);
                    $('#bankTownName').text(detail.benBankTownName);
					$('#destBankbranch').text(detail.benBankBranch);
					$('#bankAddress1').text(detail.benBankAddress1);
                    if(detail.bankAddress2 == ''){
                        $('.bankAddress2').show();
                    }
                    if(detail.bankAddress3 == ''){
                        $('.bankAddress3').show();
                    }
                    $('#bankAddress2').text(detail.benBankAddress2);
                    $('#bankAddress3').text(detail.benBankAddress3);
					$('#destAccountNo').text(detail.benAccountNo);
                    $('#destAccountName').text(detail.benAccountName);
					$('#accountAddress1').text(detail.benAddress1);
                    $('#accountAddress2').text(detail.benAddress2);
                    $('#accountAddress3').text(detail.benAddress3);
                    $('#benAccountNo').text(detail.benAccountNo);
                    $('#benAccountName').text(detail.benAccountName);

                    //mx
                    $('#department').text(detail.department);
                    $('#subDepartment').text(detail.subDepartment);
                    $('#streetName').text(detail.streetName);
                    $('#buildingNumber').text(detail.buildingNumber);
                    $('#buildingName').text(detail.buildingName);
                    $('#floor').text(detail.floor);
                    $('#postBox').text(detail.postBox);
                    $('#postCode').text(detail.postCode);
                    $('#room').text(detail.room);
                    $('#townName').text(detail.townName);
                    $('#townLocationName').text(detail.townLocationName);
                    $('#districtName').text(detail.districtName);
                    $('#countrySubDivision').text(detail.countrySubDivision);
                    $('#remitterName').text(detail.remitterName);


                    $('#senderRefNo').text(detail.senderRefNo);
                    if(detail.isFinalPayment == 'Y'){
                        $('#isFinalPayment').text('Yes');
                    }else{
                        $('#isFinalPayment').text('No');
                    }

                    $('#benRefNo').text(detail.benRefNo);


                    if (detail.isResident == 'Y') {
						$('#isResident').text('Resident');
					} else if (detail.isResident == 'N') {
						$('#isResident').text('Non Resident' + '\t' + detail.residentCountryName);
					}

					if (detail.isCitizen == 'Y') {
						$('#isCitizen').text('Citizen');
					} else if (detail.isCitizen == 'N') {
						$('#isCitizen').text('Non Citizen');
						$('#isCitizenCountry').text(detail.citizenCountryName);
					}

					if (detail.isIdentical == 'Y') {
						$('#identitiy').text('Remitter is identical with Beneficiary');
					} else if (detail.isIdentical == 'N') {
						$('#identitiy').text('Remitter is not identical with Beneficiary');
					}

					$('#transactorRelationship').text(detail.transactorRelationship);
                    $('#transactorRelationshipCode').text(detail.transactorRelationshipCode);

                    if (detail.chargeTo == 'OUR') {
						$('#chargeIns').text('OUR (Sender)');
					} else if (detail.chargeTo == 'SHA') {
						$('#chargeIns').text('SHA (Shared)');
					}else if (detail.chargeTo == 'BEN') {
						$('#chargeIns').text('BEN (Beneficiary)');
					}
                    $('#transactionPurposeLHBU').text(detail.transactionPurposeLHBUCode + ' - ' + detail.transactionPurposeLHBUName);
                    $('#documentType').text(detail.documentTypeCode + ' - ' + detail.documentTypeName);
                    if(detail.underlyingCode != null){
                        $('#underlyingCode').text(detail.underlyingCode.slice(0, 1).toUpperCase() + detail.underlyingCode.slice(1));
                        if(detail.underlyingCode == 'upload'){
                            $('.fileUpload').show();
                            $('#fileName').text(detail.fileName);
                        }
                    }

                    if(detail.senderCategory != null){
                        $('#senderCategory').text(detail.senderCategory.slice(0, 1).toUpperCase() + detail.senderCategory.slice(1));
                    }
                    if(detail.beneficiaryCategory != null){
                        $('#beneficiaryCategory').text(detail.beneficiaryCategory.slice(0,1).toUpperCase() + detail.beneficiaryCategory.slice(1));
                    }
                    if(detail.benCountryName != null){
                        $('#beneficiaryCountry').text(detail.benCountryName.slice(0,1).toUpperCase() + detail.benCountryName.slice(1));
                    }
                    $('#transactionPurpose').text(detail.transactionPurposeCode + ' - ' + detail.transactionPurposeName);
                    if(detail.nameOfGoods && detail.nameOfGoods != '' ){
                        if(detail.isRelatedCountry == 'N'){
                            $('#isRelatedNo').show();
                        } else {
                            $('#isRelatedYes').show();
                        }
                        $('#nameOfGoods').text(detail.nameOfGoods);
                        $('#countryOfOrigin').text(detail.countryOfOrgin);
                        $('#countryOfLoading').text(detail.portOfLoading);
                        $('#countryOfShipment').text(detail.portOfShipment);

                        $('#row_nameOfGoods').show();
                        $('#row_countryOfOrigin').show();
                        $('#row_countryOfLoading').show();
                        $('#row_countryOfShipment').show();
                        $('#row_isRelated').show();

                    } else {
                        $('#row_nameOfGoods').hide();
                        $('#row_countryOfOrigin').hide();
                        $('#row_countryOfLoading').hide();
                        $('#row_countryOfShipment').hide();
                        $('#row_isRelated').hide();
                    }
                    if (detail.isNotifBen == 'Y') {
                        $('#email').text(detail.notifyBenValue);
                        $('#notify').text('Notify');
                        $('.notifyEmail').show();
                    }else{
                         $('#notify').text(`Don't Notify`);
                    }

                    if(detail.isSaveFlag == 'Y') {
                        $('.saveBenFlag').show();
                        $('#isSaveFlag').text('Yes');
                        $('#aliasBen').text(detail.aliasBen);
                    }else{
                        $('.saveBenFlag').hide();
                    }

                    var histories = detail.historyList;
                    oTable.clear();
                    if(histories){
                        $.each(histories, function (idx, obj){
                            oTable.row.add([
                                '<span id="history_status">'+obj.status+'</span>',
                                '<span id="history_actionDate">'+obj.actionDate+'</span>',
                                '<span id="history_actionBy">'+obj.actionBy+'</span>',
                                '<span id="history_reason">'+obj.reason+'</span>'
                            ]).draw(true);
                        });
                    }

                    if(detail.historyList[0].status == 'NEW') {
                        $('#process_complete').prop("disabled", true);
                    } else if(detail.historyList[0].status == 'INPROGRESS') {
                        $('#process_inprogress').prop("disabled", true);
                    }else if(detail.historyList[0].status == 'COMPLETE' || detail.historyList[0].status == 'REJECT') {
                        $('#process_inprogress').prop("disabled", true);
                        $('#process_complete').prop("disabled", true);
                        $('#decline').prop("disabled", true);
                    }


					if (detail.statusCode == 'PROCESSED_INPROGRESS' || detail.statusCode == 'PROCESSED_COMPLETE' || detail.statusCode == 'PROCESSED_DECLINE'){
						$('.state_detail').show();
                        $('.state_detail_r').show();
						$('.processTrx').hide();
						$('.state_add').hide();
						$('.state_view').show();
						$('.help-block').hide();
						$('.btn1').hide();
                        $('.btn2').hide();
                        $('#process_inprogress').prop("disabled", true);
                        $('#process_complete').prop("disabled", true);
                        $('#decline').prop("disabled", true);
                        console.log("masuk 11");

					} else if (detail.statusCode == 'DECLINE' || detail.statusCode == 'COMPLETE'){
                        $('.state_detail').hide();
						$('.state_detail_r').hide();
						$('.declineTrx').hide();
						$('.state_add').hide();
						$('.state_view').show();
						$('.help-block').hide();
                        $('.btn1').hide();
						$('.btn2').show();
                        $('#submit_view').hide();
                        $('#save_screen1').show();
                        console.log("masuk 22");

					}else{
                        $('.btn2').hide();

                        console.log("masuk 33");
                    }

					/*$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();
					$('#').text();*/

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
				html +='<div class="row"><div class="mb-3 row form-group">';
				html += '<label class="col-md-3 col-form-label text-end">' + chg.chargeType + '</label>';
				html += '<div class="col-md-5"><label>' + chg.chargeCurrency +' '+ chg.chargeEquivalentAmount+'</label></div>';
				html += '</div></div>'
			});
			$('#chargeList').html(html);
		}
	}

    function setInstructionMode(detail){
        var instructionMode = detail.instructionMode;

        tags = '<div class="mb-3 row form-group">'
        if (instructionMode !=null && instructionMode == 'I') {
            tags += '<label class="col-md-3 col-form-label text-end">Payment Date</label>';
            tags += '<div class="col-md-8">';
            tags += '<label>'+detail.instructionDate+'</label>';
            tags += '</div>';
            if(detail.sessionTime != '00:00'){
                tags += '<label class="col-md-3 col-form-label text-end">at</label>';
                tags += '<div class="col-md-8">';
                tags += '<label>'+detail.sessionTime+'</label>';
                tags += '</div>';
            }
        } else if (instructionMode !=null && instructionMode == 'F') {
            tags += '<label class="col-md-3 col-form-label text-end">Payment Date</label>';
            tags += '<div class="col-md-8">';
            tags += '<label>'+detail.instructionDate+'</label>';
            tags += '</div>';
            if(detail.sessionTime != '00:00'){
                tags += '<label class="col-md-3 col-form-label text-end">at</label>';
                tags += '<div class="col-md-8">';
                tags += '<label>'+detail.sessionTime+'</label>';
                tags += '</div>';
            }
        }
        tags += '</div>';

        $('.instructionModeClass').html(tags);

    }

	function submitDecline(){
		var value = {
            formDropId: $('#idTrx').val(),
            refNo: $('#refNo').val(),
			reason: $('#reason_reject').val()
		};
		$.ajax({
			url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : id,
                url_action : 'submit',
                action : 'DECLINE',
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                $('#submit_view').prop('disabled',false);
                var result = JSON.parse(data);
                if (result.status=="200") {
                    noRef=result.referenceNo;
                    flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                    $('#submit_view').hide();
					$('#back_view').hide();
					$('#done').show();
					$('#save_screen').show();

					$('#statusName').text(result.statusName);
					$('.row-status').show();
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


	function submitProcessInprogress(){
		var value = {
            formDropId: $('#idTrx').val(),
            refNo: $('#refNo').val(),
			reason: $('#reason_process').val()
		};
		$.ajax({
			url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : id,
                url_action : 'submit',
                action : 'INPROGRESS',
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                $('#submit_view').prop('disabled',false);
                var result = JSON.parse(data);
                if (result.status=="200") {
                    noRef=result.referenceNo;
                    flash('success', result.message+'<br>'+'Status: INPROGRESS'+'<br>'+result.dateTimeInfo);
                    $('#submit_view').hide();
					$('#back_view').hide();
					$('#done').show();
					$('#save_screen').show();

					$('#statusName').text(result.statusName);
					$('.row-status').show();
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

    function submitProcessComplete(){
		var value = {
            formDropId: $('#idTrx').val(),
            refNo: $('#refNo').val(),
			reason: $('#reason_process').val()
		};
		$.ajax({
			url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : id,
                url_action : 'submit',
                action : 'COMPLETE',
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                $('#submit_view').prop('disabled',false);
                var result = JSON.parse(data);
                if (result.status=="200") {
                    noRef=result.referenceNo;
                    flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                    $('#submit_view').hide();
					$('#back_view').hide();
					$('#done').show();
					$('#save_screen').show();

					$('#statusName').text(result.statusName);
					$('.row-status').show();
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

	function stateAdd(){
		$('.state_detail').hide();
		$('.state_add').show();
		$('.state_view').hide();
	}

	function stateView() {
		$('.state_add').hide();
		$('.state_view').show();
		$('.help-block').hide();

		$('#done').hide();
		$('#save_screen').hide();

		var state = $('#state').val();
		if(state == 'processInprogressNew'){
            console.log("masuk 1");
			$('.processTrx').validator('validate');
			if($('.processTrx').validator('validate').has('.has-error').length!=0){
            	$('.state_add').show();
				$('.state_view').hide();
				$('.help-block').show();
                return;
            }
            $('#reason_process_view').text($('#reason_process').val() == '' ? '-' : $('#reason_process').val());

		} else if (state == 'declineNew'){
            console.log("masuk 2");
			$('.declineTrx').validator('validate');
            if($('.declineTrx').validator('validate').has('.has-error').length!=0){
            	$('.state_add').show();
				$('.state_view').hide();
				$('.help-block').show();
                return;
            }

			$('#reason_reject_view').text($('#reason_reject').val() == '' ? '-' : $('#reason_reject').val());

		}else if(state == 'processCompleteNew'){
            console.log("masuk 3");
			$('.processTrx').validator('validate');
			if($('.processTrx').validator('validate').has('.has-error').length!=0){
            	$('.state_add').show();
				$('.state_view').hide();
				$('.help-block').show();
                return;
            }
            $('#reason_process_view').text($('#reason_process').val() == '' ? '-' : $('#reason_process').val());

		} else {
            // $('#reason_process_view').text($('#reason_process').val() == '' ? '-' : $('#reason_process').val());
            console.log("masuk 3");
        }
	}

    function currencyFormat(num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }


</script>
