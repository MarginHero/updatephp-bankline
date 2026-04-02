@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'detail']])

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="refNo" value=""/>
            <input type="hidden" id="idTrx" value=""/>
			<form id="form-area" class="form-horizontal form-area">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Import LC Information</h3><br>
					</div>

					<div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Transaction Status</label>
									<div class="col-md-5 col-form-label">
										<label id="status">-</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Transaction Reference No</label>
									<div class="col-md-5 col-form-label">
										<label id="trxRefNo">-</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Bank Reference No</label>
									<div class="col-md-5 col-form-label">
										<label id="bankRefNo">-</label>
									</div>
								</div>
							</div>

                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Issued Date</label>
									<div class="col-md-5 col-form-label">
										<label id="issuedDate">-</label>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="box-header">
						<h3 class="box-title">General</h3><br>
					</div>
					<div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Media Of Issue</label>
									<div class="col-md-5 col-form-label">
										<label id="mediaOfIssueCode">-</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Application Date</label>
									<div class="col-md-5 col-form-label">
										<label id="applicationDate">-</label>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="box-header list-title">
                        <h3 class="box-title">Applicant Detail</h3>
                    </div>
                    <div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Applicant Name</label>
									<div class="col-md-5 col-form-label">
										<label id="applicantName">-</label>
									</div>
								</div>
							</div><div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Applicant Address</label>
									<div class="col-md-5 col-form-label">
										<label id="applicantAddress1">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="applicantAddress2">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="applicantAddress3">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Applicant Country</label>
									<div class="col-md-5 col-form-label">
										<label id="applicantCountryName">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Contact Person Phone No.</label>
									<div class="col-md-5 col-form-label">
										<label id="applicantPhoneNo">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Contact Person Fax No.</label>
									<div class="col-md-5 col-form-label">
										<label id="applicantFaxNo">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">NPWP</label>
									<div class="col-md-5 col-form-label">
										<label id="applicantNPWPNo">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">API</label>
									<div class="col-md-5 col-form-label">
										<label id="applicantAPI">-</label>
									</div>
								</div>
							</div>
						</div>
					</div>

                    <div class="box-header list-title">
                        <h3 class="box-title">Beneficiary Detail</h3>
                    </div>
                    <div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Beneficiary Name</label>
									<div class="col-md-5 col-form-label">
										<label id="beneficiaryName">-</label>
									</div>
								</div>
							</div><div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Beneficiary Address</label>
									<div class="col-md-5 col-form-label">
										<label id="beneficiaryAddress1">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="beneficiaryAddress2">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="beneficiaryAddress3">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Beneficiary Country</label>
									<div class="col-md-5 col-form-label">
										<label id="beneficiaryCountryName">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Beneficiary Phone No.</label>
									<div class="col-md-5 col-form-label">
										<label id="beneficiaryPhoneNo">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Beneficiary Fax No.</label>
									<div class="col-md-5 col-form-label">
										<label id="beneficiaryFaxNo">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Save To Beneficiary Contact</label>
									<div class="col-md-5 col-form-label">
										<label id="isSaveBeneficiary">-</label>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="box-header list-title">
                        <h3 class="box-title">Advising Bank Detail</h3>
                    </div>
                    <div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Advising Bank Name</label>
									<div class="col-md-5 col-form-label">
										<label id="advisingBankName">-</label>
									</div>
								</div>
							</div><div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Advising Bank Address</label>
									<div class="col-md-5 col-form-label">
										<label id="advisingBankAddress1">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="advisingBankAddress2">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="advisingBankAddress3">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Advising Bank Country</label>
									<div class="col-md-5 col-form-label">
										<label id="advisingBankCountryName">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Advising Bank Swift Code</label>
									<div class="col-md-5 col-form-label">
										<label id="advisingBankSwift">-</label>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="box-header list-title">
                        <h3 class="box-title">Contract Detail</h3>
                    </div>
                    <div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Customer Reference No.</label>
									<div class="col-md-5 col-form-label">
										<label id="customerRefNo">-</label>
									</div>
								</div>
							</div><div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Transferable</label>
									<div class="col-md-5 col-form-label">
										<label id="transferable">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">LC Type</label>
									<div class="col-md-5 col-form-label">
										<label id="lcTypeCode">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Confirming Instruction</label>
									<div class="col-md-5 col-form-label">
										<label id="confirmInstructionCode">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Credit Available By</label>
									<div class="col-md-5 col-form-label">
										<label id="creditAvailableCode">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Payment/Draft At</label>
									<div class="col-md-5 col-form-label">
										<label id="payDraftAtType">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Percentage of Invoice</label>
									<div class="col-md-5 col-form-label">
										<label id="invoicePercentage">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Amount</label>
									<div class="col-md-5 col-form-label">
										<label id="trxAmount">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Tolerance Percentage</label>
									<div class="col-md-5 col-form-label">
										<label id="tolerance">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Additionanl Amount Covered</label>
									<div class="col-md-5 col-form-label">
										<label id="additionalAmountCovered">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Expiry Date</label>
									<div class="col-md-5 col-form-label">
										<label id="expiryDate">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Expiry Place</label>
									<div class="col-md-5 col-form-label">
										<label id="expiryPlace">-</label>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="box-header list-title">
                        <h3 class="box-title">Charges Detail</h3>
                    </div>
                    <div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Issuing Bank Charges Paid By</label>
									<div class="col-md-5 col-form-label">
										<label id="issuingBankChargeBy">-</label>
									</div>
								</div>
							</div><div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Confirming Charges Paid By</label>
									<div class="col-md-5 col-form-label">
										<label id="confirmingChargeBy">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Outside Country Charges Paid By</label>
									<div class="col-md-5 col-form-label">
										<label id="outsideCountryChargeBy">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Reimbursing Bank Charge Paid By </label>
									<div class="col-md-5 col-form-label">
										<label id="reimburseBankChargeBy">-</label>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="box-header list-title">
                        <h3 class="box-title">Goods and Shipment</h3>
                    </div>
                    <div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Shipment Date</label>
									<div class="col-md-5 col-form-label">
										<label id="latestShipmentDate">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Period of Presentation</label>
									<div class="col-md-5 col-form-label">
										<label id="presentationPeriod">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Narrative Of Present</label>
									<div class="col-md-5 col-form-label">
										<label id="presentationNarrative">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Partial Shipment</label>
									<div class="col-md-5 col-form-label">
										<label id="partialShipment">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Transhipment</label>
									<div class="col-md-5 col-form-label">
										<label id="transhipment">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Port Loading</label>
									<div class="col-md-5 col-form-label">
										<label id="portOfLoading">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Port Discharge</label>
									<div class="col-md-5 col-form-label">
										<label id="portOfDischarge">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Incoterms</label>
									<div class="col-md-5 col-form-label">
										<label id="incotermName">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Name Of Place</label>
									<div class="col-md-5 col-form-label">
										<label id="nameOfPlace">-</label>
									</div>
								</div>
							</div>
						</div>
					</div>

                    <div class="box-header list-title">
                        <h3 class="box-title">Goods Detail</h3>
                    </div>
                    <div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Origin Country Of Goods</label>
									<div class="col-md-5 col-form-label">
										<label id="originCountryOfGoodsName">-</label>
									</div>
								</div>
							</div><div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Name Of Goods</label>
									<div class="col-md-5 col-form-label">
										<label id="nameOfGoods1">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="nameOfGoods2">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="nameOfGoods3">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="nameOfGoods4">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="nameOfGoods5">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Type Of Goods</label>
									<div class="col-md-5 col-form-label">
										<label id="typeOfGoods1">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="typeOfGoods2">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Quality Of Goods</label>
									<div class="col-md-5 col-form-label">
										<label id="qualityOfGoods">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Volume Of Goods</label>
									<div class="col-md-5 col-form-label">
										<label id="volumeOfGoods">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Price Per Unit</label>
									<div class="col-md-5 col-form-label">
										<label id="pricePerUnit">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Contract No</label>
									<div class="col-md-5 col-form-label">
										<label id="contractNo1">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="contractNo2">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">No. Pos Tarif(HS)</label>
									<div class="col-md-5 col-form-label">
										<label id="posTarifNo">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Incoterms</label>
									<div class="col-md-5 col-form-label">
										<label id="incotermValue">-</label>
									</div>
								</div>
							</div>
						</div>
					</div>

                    <div class="box-header list-title">
                        <h3 class="box-title">Documents</h3>
                    </div>
                    <div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Doc Required</label>
									<div class="col-md-5 col-form-label">
										<label id="docsRequired">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Additional Condition</label>
									<div class="col-md-5 col-form-label">
										<label id="additionalCondition">-</label>
									</div>
								</div>
							</div>
						</div>
					</div>

                    <div class="box-header list-title">
                        <h3 class="box-title">Others</h3>
                    </div>
                    <div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Other Information</label>
									<div class="col-md-5 col-form-label">
										<label id="otherInformation">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Account No for Fees</label>
									<div class="col-md-5 col-form-label ">
										<label id="feeAccount">-</label>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="box-header list-title">
                        <h3 class="box-title">Attachment Detail</h3>
                    </div>
                    <div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">File Upload</label>
									<div class="col-md-5 col-form-label">
										<label id="fileName1">-</label>
									</div>
								</div>
                            </div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="fileName2">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="fileName3">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="fileName4">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="fileName5">-</label>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="box-header list-title">
                        <h3 class="box-title">BI Regulation</h3>
                    </div>
                    <div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Affiliate</label>
									<div class="col-md-5 col-form-label">
										<label id="isAffiliate">-</label>
									</div>
								</div>
                            </div>
						</div>
					</div>
                    <div class="box-header list-title">
                        <h3 class="box-title">Bank Response</h3>
                    </div>
                    <div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Action Status</label>
									<div class="col-md-5 col-form-label">
										<label id="actionStatus">-</label>
									</div>
								</div>
                            </div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Comment By Bank</label>
									<div class="col-md-5 col-form-label">
										<label id="commentByBank">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Bank Upload Document</label>
									<div class="col-md-5 col-form-label">
										<label id="bankUploadDocument1">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="bankUploadDocument2">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="bankUploadDocument3">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="bankUploadDocument4">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5 col-form-label">
										<label id="bankUploadDocument5">-</label>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="box-header list-title">
                        <h3 class="box-title">Transaction History</h3>
                    </div>
                    <div class="box-body list-title">
                        <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                            style="border-collapse:collapse;">
                            <thead>
                                <tr>
                                    <th align="center"><strong>ActivityDate</strong></th>
                                    <th align="center"><strong>Activity</strong></th>
                                    <th align="center"><strong>Activity By</strong></th>
                                    <th align="center"><strong>Approval Count</strong></th>
                                    <th align="center"><strong>Amount</strong></th>
                                    <th align="center"><strong>Transaction Status</strong></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
					<div class="box-footer">
						<div class="float-left">
							<button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
						</div>
						<div class="float-right">
                            <button type="button" id="save_screen" name="save_screen" class="btn btn-default" onclick="save_pdf();">@lang('form.save_pdf')</button>
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
    var noRef;
    var id = '{{ $service }}';

    $(document).ready(function () {

		// $('#form-area').validator().on('submit', function (e) {
        //     if (e.isDefaultPrevented()) {
        //         // handle the invalid form...
        //     } else {
        //         // everything looks good!

        //     }
        // });

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
                    width: "12%"
                },
                {
                    targets: 1,
                    sortable: false,
                    width: "12%"
                },
                {
                    targets: 2,
                    sortable: false,
                    width: "12%"
                },
                {
                    targets: 3,
                    sortable: false,
                    width: "12%"
                },
                {
                    targets: 4,
                    sortable: false,
                    width: "12%"
                },
                {
                    targets: 5,
                    sortable: false,
                    width: "12%"
                }
            ]
        });

        $('.numeric').numeric({allowMinus:false, allowDecSep:false, allowThouSep:false});

        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',._!@'
        });

        $('#back').on('click', function () {
            var res = app.setView(id,'landing');
        });

    });

    function getDetail(){
        var refNo= $('#refNo').val();
        var url_action= 'detail';
        var value ={
            referenceNo: refNo,
            currentPage: "1",
                pageSize: "10",
                orderBy: {
                    "activityDate": "ASC"
                }
        };
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{value:value,menu:id,action:'DETAIL',url_action:url_action},
            success: function (data) {

                var result = JSON.parse(data);
                if (result.status=="200") {

					// var index = result.resultTrade.map(function(o) { return o.referenceNo; }).indexOf(refNo.toString());
                    var detail = result.resultTrade;
                    // var history;

                    $('#status').text(detail.status);
                    $('#trxRefNo').text(detail.trxRefNo);
                    $('#bankRefNo').text(detail.bankRefNo);
                    $('#issuedDate').text(detail.issuedDate);
                    $('#mediaOfIssueCode').text(detail.mediaOfIssueCode);
                    $('#applicationDate').text(detail.applicationDate);
                    $('#applicantName').text(detail.applicantName);
                    $('#applicantAddress1').text(detail.applicantAddress1);
                    $('#applicantAddress2').text(detail.applicantAddress2);
                    $('#applicantAddress3').text(detail.applicantAddress3);
                    $('#applicantCountryCode').text(detail.applicantCountryCode);
                    $('#applicantCountryName').text(detail.applicantCountryName);
                    $('#applicantPhoneNo').text(detail.applicantPhoneNo);
                    $('#applicantFaxNo').text(detail.applicantFaxNo);
                    $('#applicantNPWPNo').text(detail.applicantNPWPNo);
                    $('#applicantAPI').text(`${detail.applicantAPIType} ${detail.applicantAPINo}`);
                    $('#applicantAPIType').text(detail.applicantAPIType);
                    $('#applicantAPINo').text(detail.applicantAPINo);
                    $('#beneficiaryType').text(detail.beneficiaryType);
                    $('#beneficiaryId').text(detail.beneficiaryId);
                    $('#beneficiaryAddress1').text(detail.beneficiaryAddress1);
                    $('#beneficiaryAddress2').text(detail.beneficiaryAddress2);
                    $('#beneficiaryAddress3').text(detail.beneficiaryAddress3);
                    $('#beneficiaryCountryCode').text(detail.beneficiaryCountryCode);
                    $('#beneficiaryCountryName').text(detail.beneficiaryCountryName);
                    $('#beneficiaryPhoneNo').text(detail.beneficiaryPhoneNo);
                    $('#beneficiaryFaxNo').text(detail.beneficiaryFaxNo);
                    $('#beneficiaryName').text(detail.beneficiaryName);
                    if(detail.isSaveBeneficiary == 'Y'){
                        $('#isSaveBeneficiary').text('Yes');
                    }else if(detail.isSaveBeneficiary == 'N'){
                        $('#isSaveBeneficiary').text('No');
                    }else{
                         $('#isSaveBeneficiary').text(detail.isSaveBeneficiary);
                    }
                    // $('#isSaveBeneficiary').text(detail.isSaveBeneficiary);
                    $('#advisingBankName').text(detail.advisingBankName);
                    $('#advisingBankCode').text(detail.advisingBankCode);
                    $('#advisingBankAddress1').text(detail.advisingBankAddress1);
                    $('#advisingBankAddress2').text(detail.advisingBankAddress2);
                    $('#advisingBankAddress3').text(detail.advisingBankAddress3);
                    $('#advisingBankCountryCode').text(detail.advisingBankCountryCode);
                    $('#advisingBankCountryName').text(detail.advisingBankCountryName);
                    $('#advisingBankSwift').text(detail.advisingBankSwift);

                    $('#customerRefNo').text(detail.customerRefNo);


                    if(detail.transferable == 'Y'){
                        $('#transferable').text('Yes');
                    }else if(detail.transferable == 'N'){
                        $('#transferable').text('No');
                    }

                    if(detail.lcTypeCode == 'SKBDN'){
                        $('#lcTypeCode').text("SKBDN/Local LC");
                    }else if(detail.lcTypeCode == 'IRREV'){
                        $('#lcTypeCode').text("Irrevocable LC");
                    }else{
                         $('#lcTypeCode').text(detail.lcTypeCode);
                    }

                    $('#confirmInstructionCode').text(detail.confirmInstructionCode);
                    if(detail.creditAvailable == '1'){
                        $('#creditAvailableCode').text("Payment");
                    }else if(detail.creditAvailable == '2'){
                        $('#creditAvailableCode').text("Acceptance");
                    }else if(detail.creditAvailable == '3'){
                        $('#creditAvailableCode').text("Negotiation");
                    }else if(detail.creditAvailable == '4'){
                        $('#creditAvailableCode').text("Deferred Payment");
                    }

                    $('#payDraftAtType').text(detail.payDraftAtType);
                    $('#payDraftAtDays').text(detail.payDraftAtDays);
                    $('#payDraftAtValue1').text(detail.payDraftAtValue1);
                    $('#payDraftAtValue2').text(detail.payDraftAtValue2);
                    $('#payDraftAtValue3').text(detail.payDraftAtValue3);
                    $('#invoicePercentage').text(`${detail.invoicePercentage}%`);
                    $('#transactionCurrency').text(detail.transactionCurrency);
                    $('#transactionAmount').text(detail.transactionAmount);
                    $('#trxAmount').text(detail.trxAmount);
                    $('#tolerance').text(`+${detail.tolerancePlus}%/-${detail.toleranceMinus}%`);
                    $('#tolerancePlus').text(detail.tolerancePlus);
                    $('#toleranceMinus').text(detail.toleranceMinus);
                    $('#additionalAmountCovered').text(detail.additionalAmountCovered);
                    $('#expiryDate').text(detail.expiryDate);
                    $('#expiryPlace').text(detail.expiryPlace);
                    if(detail.issuingBankChargeBy=='APP'){
                        $('#issuingBankChargeBy').text("Applicant");
                    }else if(detail.issuingBankChargeBy=='BEN'){
                        $('#issuingBankChargeBy').text("Beneficiary");
                    }
                    if(detail.confirmingChargeBy == 'APP'){
                        $('#confirmingChargeBy').text("Applicant");
                    }else if(detail.confirmingChargeBy == 'BEN'){
                        $('#confirmingChargeBy').text("Beneficiary");
                    }
                    if(detail.outsideCountryChargeBy=='APP'){
                        $('#outsideCountryChargeBy').text("Applicant");
                    }else if(detail.outsideCountryChargeBy=='BEN'){
                        $('#outsideCountryChargeBy').text("Beneficiary");
                    }
                    if(detail.reimburseBankChargeBy=='APP'){
                        $('#reimburseBankChargeBy').text("Applicant");
                    }else if(detail.reimburseBankChargeBy=='BEN'){
                        $('#reimburseBankChargeBy').text("Beneficiary");
                    }else{
                        $('#reimburseBankChargeBy').text(detail.reimburseBankChargeBy);
                    }

                    $('#latestShipmentDate').text(detail.latestShipmentDate);
                    $('#shipmentPeriod').text(detail.shipmentPeriod);
                    $('#presentationPeriod').text(`${detail.presentationPeriod}days`);
                    $('#presentationNarrative').text(detail.presentationNarrative);
                    if(detail.partialShipment == 'Y'){
                        $('#partialShipment').text("Allowed");
                    }else if(detail.partialShipment == 'N'){
                        $('#partialShipment').text("Not Allowed");
                    }
                    if(detail.transhipment == 'Y'){
                        $('#transhipment').text("Allowed");
                    }else if(detail.transhipment == 'N'){
                        $('#transhipment').text("Not Allowed");
                    }
                    $('#portOfLoading').text(detail.portOfLoading);
                    $('#portOfDischarge').text(detail.portOfDischarge);
                    $('#incotermCode').text(detail.incotermCode);
                    $('#incotermName').text(detail.incotermName);
                    $('#nameOfPlace').text(detail.nameOfPlace);
                    $('#originCountryOfGoodsCode').text(detail.originCountryOfGoodsCode);
                    $('#originCountryOfGoodsName').text(detail.originCountryOfGoodsName);
                    $('#nameOfGoods1').text(detail.nameOfGoods1);
                    $('#nameOfGoods2').text(detail.nameOfGoods2);
                    $('#nameOfGoods3').text(detail.nameOfGoods3);
                    $('#nameOfGoods4').text(detail.nameOfGoods4);
                    $('#nameOfGoods5').text(detail.nameOfGoods5);
                    $('#typeOfGoods1').text(detail.typeOfGoods1);
                    $('#typeOfGoods2').text(detail.typeOfGoods2);
                    $('#qualityOfGoods').text(detail.qualityOfGoods);
                    $('#volumeOfGoods').text(detail.volumeOfGoods);
                    $('#pricePerUnit').text(detail.pricePerUnit);
                    $('#contractNo1').text(detail.contractNo1);
                    $('#contractNo2').text(detail.contractNo2);
                    $('#posTarifNo').text(detail.posTarifNo);
                    $('#incotermValue').text(`${detail.incotermName} ${detail.incotermValue} ${detail.incotermQuantityTolerance} %`);
                    $('#incotermQuantityTolerance').text(detail.incotermQuantityTolerance);
                    $('#docsRequired').text(detail.docsRequired);
                    $('#additionalCondition').text(detail.additionalCondition);
                    $('#otherInformation').text(detail.otherInformation);
                    $('#feeAccountGroupDtlId').text(detail.feeAccountGroupDtlId);
                    $('#feeAccountNo').text(detail.feeAccountNo);
                    $('#feeAccountName').text(detail.feeAccountName);
                    $('#feeAccountCcy').text(detail.feeAccountCcy);
                    $('#feeAccount').text(`${detail.feeAccountNo}/${detail.feeAccountName}(${detail.feeAccountCcy})`);
                    $('#fileName1').text(detail.fileName1);
                    $('#fileName2').text(detail.fileName2);
                    $('#fileName3').text(detail.fileName3);
                    $('#fileName4').text(detail.fileName4);
                    $('#fileName5').text(detail.fileName5);
                    $('#fileId1').text(detail.fileId1);
                    $('#fileId2').text(detail.fileId2);
                    $('#fileId3').text(detail.fileId3);
                    $('#fileId4').text(detail.fileId4);
                    $('#fileId5').text(detail.fileId5);
                    if(detail.isAffiliate == 'Y'){
                        $('#isAffiliate').text('Affiliate');
                    }else if (detail.isAffiliate == 'N'){
                        $('#isAffiliate').text('Non Affiliate');
                    }

                    $('#actionStatus').text(detail.actionStatus);
                    $('#commentByBank').text(detail.commentByBank);
                    $('#bankUploadDocument1').text(detail.bankUploadDocument1);
                    $('#bankUploadDocument2').text(detail.bankUploadDocument2);
                    $('#bankUploadDocument3').text(detail.bankUploadDocument3);
                    $('#bankUploadDocument4').text(detail.bankUploadDocument4);
                    $('#bankUploadDocument5').text(detail.bankUploadDocument5);
                    var activity = result.activities;
                    oTable.clear();
                    if(activity){
                        $.each(activity, function (idx, obj){
                            oTable.row.add([
                                '<span id="activity_activityDate">'+obj.activityDate+'</span>',
                                '<span id="activity_activity">'+obj.activiti+'</span>',
                                '<span id="activity_activityBy">'+obj.user+'</span>',
                                '<span id="activity_approvalCount">'+obj.approvalLvCount+'</span>',
                                '<span id="activity_amount">'+obj.amount+'</span>',
                                '<span id="activity_transactionStatus">'+obj.status+'</span>'
                            ]).draw(true);
                        });
                    }
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

</script>
