@include('_partials.header_content',['breadcrumb'=>['Pending task','Form Drop']])

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
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Menu</label>
                                <div class="col-md-6">
                                    <label id="menu_text"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Activity</label>
                                <div class="col-md-6">
                                    <label id="activity_text"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Reference Number</label>
                                <div class="col-md-6">
                                    <label id="noref_text"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Activity Date Time</label>
                                <div class="col-md-6">
                                    <label id="datetime_text"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header detail" style="display:none">
                    <span id="detail" class="detail" style="color:darkred;"><small><i>Detail</i></small></span>
                </div>
                <div class="box-header">
						<h3 class="box-title">Form Drop Detail</h3><br>
					</div>

					<div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row">
									<label class="col-md-3 col-form-label text-end">Transaction Reference Number</label>
									<div class="col-md-5">
										<label id="trxRefNo"></label>
									</div>
								</div>
							</div>
							<div class="row row-status">
								<div class="mb-3 row">
									<label class="col-md-3 col-form-label text-end">Corporate ID</label>
									<div class="col-md-5">
										<label id="corporateId"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row">
									<label class="col-md-3 col-form-label text-end">Corporate Name</label>
									<div class="col-md-5">
										<label id="corporateName"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row">
									<label class="col-md-3 col-form-label text-end">User Maker ID</label>
									<div class="col-md-5">
										<label id="createdBy"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row">
									<label class="col-md-3 col-form-label text-end">Menu</label>
									<div class="col-md-5">
										<label id="menu"></label>
									</div>
								</div>
							</div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Reason</label>
                                    <div class="col-md-5">
	                                    <label id="reason"></label>
                                    </div>
                                </div>
                            </div>
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
								<div class="mb-3 row">
									<label class="col-md-3 col-form-label text-end">Source Account</label>
									<div class="col-md-5">
										<label id="sourceAccount"></label>
									</div>
								</div>
							</div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Remitter Information</label>
                                    <div class="col-md-5">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
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
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Beneficiary Account</label>
                                    <div class="col-md-5">
                                        <label id="destinationAccount"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Country</label>
                                    <div class="col-md-5">
                                        <label id="destCountry"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Beneficiary Bank</label>
                                    <div class="col-md-5">
                                        <label id="destBank"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">SWIFT Code</label>
                                    <div class="col-md-5">
                                        <label id="swiftCode"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Town Name</label>
                                    <div class="col-md-5">
                                        <label id="bankTownName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Department</label>
                                    <div class="col-md-5">
                                        <label id="department"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Sub Department</label>
                                    <div class="col-md-5">
                                        <label id="subDepartment"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Street Name</label>
                                    <div class="col-md-5">
                                        <label id="streetName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Building Number</label>
                                    <div class="col-md-5">
                                        <label id="buildingNumber"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Building Name</label>
                                    <div class="col-md-5">
                                        <label id="buildingName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Floor</label>
                                    <div class="col-md-5">
                                        <label id="floor"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Post Box</label>
                                    <div class="col-md-5">
                                        <label id="postBox"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Post Code</label>
                                    <div class="col-md-5">
                                        <label id="postCode"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Room</label>
                                    <div class="col-md-5">
                                        <label id="room"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Town Name</label>
                                    <div class="col-md-5">
                                        <label id="townName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Town Location Name</label>
                                    <div class="col-md-5">
                                        <label id="townLocationName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">District Name</label>
                                    <div class="col-md-5">
                                        <label id="districtName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Country Sub Division</label>
                                    <div class="col-md-5">
                                        <label id="countrySubDivision"></label>
                                    </div>
                                </div>
                            </div>


                            <div class="row saveBenFlag">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Unique Name</label>
                                    <div class="col-md-5">
                                        <label id="aliasBen"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Beneficiary Country</label>
                                    <div class="col-md-5">
                                        <label id="beneficiaryCountry"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
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
								<div class="mb-3 row">
									<label class="col-md-3 col-form-label text-end">Amount</label>
									<div class="col-md-5">
										<label id="amount"></label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row">
									<label class="col-md-3 col-form-label text-end">Exchange Rate</label>
									<div class="col-md-5">
										<label id="exchangeRate"></label>
									</div>
								</div>
							</div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Charge Instruction</label>
                                    <div class="col-md-5">
                                        <label id="chargeIns"></label>
                                    </div>
                                </div>
                            </div>

							<div class="row">
								<div class="mb-3 row">
									<label class="col-md-3 col-form-label text-end">Description</label>
									<div class="col-md-5">
										<label id="dscp1"></label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5">
										<label id="dscp2"></label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5">
										<label id="dscp3"></label>
									</div>
								</div>
							</div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Underlying Document</label>
                                    <div class="col-md-5">
                                        <label id="underlyingCode"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row fileUpload" style="display:none">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end"></label>
                                    <div class="col-md-5">
                                        <label id="fileName"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Transaction Purpose</label>
                                    <div class="col-md-5">
                                        <label id="transactionPurpose"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Sender Category</label>
                                    <div class="col-md-5">
                                        <label id="senderCategory"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Beneficiary Category</label>
                                    <div class="col-md-5">
                                        <label id="beneficiaryCategory"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
								<div class="mb-3 row">
									<label class="col-md-3 col-form-label text-end">Transactor Relationship</label>
									<div class="col-md-5">
										<label id="transactorRelationship"></label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row">
									<label class="col-md-3 col-form-label text-end">Payment Schedule</label>
									<div class="col-md-5">
										<label id="paymentSchedule"></label>
									</div>
								</div>
							</div>
							<div class="row instructionModeClass"></div>
                            @include('form.reason')
						</div>
					</div>
                    <div class="box-body">
						<div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Notify the Beneficiary</label>
                                    <div class="col-md-5">
                                        <label id="notify"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="row notifyEmail" style="display:none">
                                <div class="mb-3 row">
                                    <label class="col-md-3 col-form-label text-end">Beneficiary Email Address</label>
                                    <div class="col-md-5">
                                        <label id="email"></label>
                                    </div>
                                </div>
                            </div>
						</div>
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

<script>
    var oTable;
    var currencyOption;
    var id = '{{ $service }}';
    var noRef = 'OT'+$('#referenceNo').val();
    $(document).ready(function () {

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
                    }

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
                    }

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
                    $('#trxRefNo').text(detail.refNo);
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
					if (detail.instructionMode == 'I') {
						$('#paymentSchedule').text('Immediate');
					} else if (detail.instructionMode == 'F'){
						$('#paymentSchedule').text('Specific Date');
					} else if (detail.instructionMode == 'R'){
						$('#paymentSchedule').text('Repeat');
					}
					setInstructionMode(detail);

					$('#destCountry').text(detail.benCountryName);
					$('#destBank').text(detail.benBankName);
					$('#swiftCode').text(detail.benBankCode);
                    $('#bankTownName').text(detail.benBankTownName);
					$('#destBankbranch').text(detail.benBankBranch);
					// $('#bankAddress').text(detail.benBankAddress1 + ' ' + detail.benBankAddress2 + ' ' + detail.benBankAddress3);
					$('#bankAddress1').text(detail.benBankAddress1);
                    if(detail.bankAddress2 == ''){
                        $('.bankAddress2').show();
                    }
                    if(detail.bankAddress3 == ''){
                        $('.bankAddress3').show();
                    }
                    $('#bankAddress2').text(detail.benBankAddress2);
                    $('#bankAddress3').text(detail.benBankAddress3);
                    // $('#destAccount').text(detail.benAccountNo + ' / ' + detail.benAccountName + ' ('+ detail.benAccountCurrency +')');
					// $('#accountAddress').text(detail.benAddress1 + ' ' + detail.benAddress2 + ' ' + detail.benAddress3);
                    $('#destAccountNo').text(detail.benAccountNo);
                    $('#destAccountName').text(detail.benAccountName);
                    $('#accountAddress1').text(detail.benAddress1);
                    $('#accountAddress2').text(detail.benAddress2);
                    $('#accountAddress3').text(detail.benAddress3);

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

                    $('#senderRefNo').text(detail.senderRefNo);
                    if(detail.isFinalPayment == 'Y'){
                        $('#isFinalPayment').text('Yes');
                    }else{
                        $('#isFinalPayment').text('No');
                    }

                    if(detail.destinationAccount == '0'){
                        $('#destinationAccount').text('Predefined Beneficiary');
                    }else{
                        $('#destinationAccount').text('New');
                    }
                    $('#benRefNo').text(detail.benRefNo);


                    $('#reason').text(detail.reason);

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
                            if(obj.status == 'INPROGRESS') {
                                $('#process_inprogress').prop("disabled", true);
                            }else if(obj.status == 'COMPLETE' || obj.status == 'REJECT') {
                                $('#process_inprogress').prop("disabled", true);
                                $('#process_complete').prop("disabled", true);
                                $('#decline').prop("disabled", true);
                            }
                            oTable.row.add([
                                '<span id="history_status">'+obj.status+'</span>',
                                '<span id="history_actionDate">'+obj.actionDate+'</span>',
                                '<span id="history_actionBy">'+obj.actionBy+'</span>',
                                '<span id="history_reason">'+obj.reason+'</span>'
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

    function setChargeList(chargeList){
		var html = '';
		if(chargeList.length >0){
			$.each(chargeList, function (idx, chg) {
				html +='<div class="row"><div class="mb-3 row">';
				html += '<label class="col-md-3 col-form-label text-end">' + chg.chargeType + '</label>';
				html += '<div class="col-md-5"><label>' + chg.chargeCurrency +' '+ chg.chargeEquivalentAmount+'</label></div>';
				html += '</div></div>'
			});
			$('#chargeList').html(html);
		}
	}

    function setInstructionMode(detail){
        var instructionMode = detail.instructionMode;

        tags = '<div class="mb-3 row">'
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
                    $('.state_view').show();
                }else{
                    flash('warning',result.message);
                    $('#save_screen').hide();
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

    function currencyFormat(num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

</script>
@include('form.script')
