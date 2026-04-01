
<!-- <section class="content" id="displayInt">
    <div class="panel panel-default">
        <div class="panel-body box-body"> -->
<input type="hidden" id="referenceNo" value=""/>
<!-- <div class="box">
    <div class="box-header">
        <h3 class="box-title">Source Account</h3><br>
    </div> -->
<div class="box-body">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Source Account</label>
                <div class="col-md-6">
                    <label id="sourceAccount"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Remitter Information</label>
            <div class="col-md-6">
            </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Remitter Name</label>
                <div class="col-md-6">
                    <label id="remitterName"></label>
                </div>
            </div>
        </div>        
        <div class="row" style="display: none;">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Sender Reference Number</label>
                <div class="col-md-6">
                    <label id="senderRefNo"></label>
                </div>
            </div>
        </div>
        <div class="row" style="display: none;">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Final Payment</label>
                <div class="col-md-6">
                    <label id="finalPayment"></label>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="box-header">
    <h3 class="box-title">Beneficiary Account</h3><br>
</div> -->
<div class="box-body">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Beneficiary Account</label>
                <div class="col-md-6">
                    <label id="destAccount"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Country</label>
                <div class="col-md-6">
                    <label id="destCountry"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Beneficiary Bank</label>
                <div class="col-md-6">
                    <label id="destBank"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
			     <label class="col-md-2 col-form-label text-end">SWIFT Code</label>
			     <div class="col-md-6">
				    <label id="swiftCode"></label>
				</div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                 <label class="col-md-2 col-form-label text-end">Town Name</label>
                 <div class="col-md-6">
                    <label id="bankTownName"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Account Number</label>
                <div class="col-md-6">
                    <label id="benAccountNo"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Account Name</label>
                <div class="col-md-6">
                    <label id="benAccountName"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Department</label>
                <div class="col-md-6">
                    <label id="department"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Sub Department</label>
                <div class="col-md-6">
                    <label id="subDepartment"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Street Name</label>
                <div class="col-md-6">
                    <label id="streetName"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Building Number</label>
                <div class="col-md-6">
                    <label id="buildingNumber"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Building Name</label>
                <div class="col-md-6">
                    <label id="buildingName"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Floor</label>
                <div class="col-md-6">
                    <label id="floor"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Post Box</label>
                <div class="col-md-6">
                    <label id="postBox"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Post Code</label>
                <div class="col-md-6">
                    <label id="postCode"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Room</label>
                <div class="col-md-6">
                    <label id="room"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Town Name</label>
                <div class="col-md-6">
                    <label id="townName"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Town Location Name</label>
                <div class="col-md-6">
                    <label id="townLocationName"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">District Name</label>
                <div class="col-md-6">
                    <label id="districtName"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Country Sub Division</label>
                <div class="col-md-6">
                    <label id="countrySubDivision"></label>
                </div>
            </div>
        </div>


        <div class="row saveBenFlag">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Unique Name</label>
                <div class="col-md-6">
                    <label id="aliasBen"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Beneficiary Country</label>
                <div class="col-md-6">
                    <label id="beneficiaryCountry"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Order Party Reference No</label>
                <div class="col-md-6">
                    <label id="benRefNo"></label>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- <div class="box-header">
    <h3 class="box-title">Transaction Detail</h3><br>
</div> -->
<div class="box-body">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Amount</label>
                <div class="col-md-6">
                    <label id="amount"></label>

                </div>
            </div>
        </div>
        <div class="row exchange">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Exchange Rate</label>
                <div class="col-md-6">
                    <label id="exchangeRate"></label>
                    <label id="counterRate"></label>
                    <label id="specialRate"></label>
                </div>
            </div>
        </div>
        <div class="row treasury_class" style="display:none">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Deal Rate No</label>
                <div class="col-md-6">
                    <label id="treasuryCode"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Charge Instruction</label>
                <div class="col-md-6">
                    <label id="chargeIns"></label>
                </div>
            </div>
        </div>
        <div class="row chargeTo_class" style="display:none">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Charge To</label>
                <div class="col-md-6">
                    <label id="chargeTo"></label>
                </div>
            </div>
        </div>
        <div class="row chargeClass" style="display:none"></div>
        <div class="row totalAndEquivalent" style="display:none">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Equivalent To</label>
                <div class="col-md-6">
                    <label id="equivalentTo"></label>
                </div>
            </div>
        </div>
        <!-- <div class="row totalAndEquivalent" style="display:none">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Total Fee</label>
                <div class="col-md-6">
                    <label id="feeTotal"></label>
                </div>
            </div>
        </div>
        <div class="row totalAndEquivalent" style="display:none">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Total Fee Equivalent</label>
                <div class="col-md-6">
                    <label id="feeTotalEquivalent">-</label>
                </div>
            </div>
        </div> -->
        <div class="row totalDebitAmountOnly" style="display:none">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Total Debit Amount</label>
                <div class="col-md-6">
                    <label id="totalDebitAmount">-</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Description</label>
                <div class="col-md-6">
                    <label id="dscp1" style="text-transform: none"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2"></label>
                <div class="col-md-6">
                    <label id="dscp2" style="text-transform: none"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2"></label>
                <div class="col-md-6">
                    <label id="dscp3" style="text-transform: none"></label>
                </div>
            </div>
        </div>
        <div class="row purpose_lhbu" style="display:none">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Transaction Purpose LHBU</label>
                <div class="col-md-6">
                    <label id="transactionPurposeLHBU"></label>
                </div>
            </div>
        </div>
        <div class="row document_type" style="display:none">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Document Type</label>
                <div class="col-md-6">
                    <label id="documentType"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Underlying Document</label>
                <div class="col-md-6">
                    <label id="underlyingCode"></label>
                </div>
            </div>
        </div>
        <div class="row fileUpload" style="display:none">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end"></label>
                <div class="col-md-6">
                    <label id="fileName"></label>
                </div>
            </div>
        </div>
        <div class="row fileUpload" style="display:none">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end"></label>
                <div class="col-md-6">
                    <label id="fileName2"></label>
                </div>
            </div>
        </div>
        <div class="row fileUpload" style="display:none">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end"></label>
                <div class="col-md-6">
                    <label id="fileName3"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Transaction Purpose LLD</label>
                <div class="col-md-6">
                    <label id="transactionPurpose"></label>
                </div>
            </div>
        </div>
        <div class="row"  id="row_nameOfGoods" style="display: none;">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Name of Goods</label>
                <div class="col-md-6">
                    <label id="nameOfGoods"></label>
                </div>
            </div>
        </div>
        <div class="row" id="row_countryOfOrigin" style="display: none;">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Country of Origin</label>
                <div class="col-md-6">
                    <label id="countryOfOrigin"></label>
                </div>
            </div>
        </div>
        <div class="row" id="row_countryOfLoading" style="display: none;">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Country of Destination</label>
                <div class="col-md-6">
                    <label id="countryOfLoading"></label>
                </div>
            </div>
        </div>
        <div class="row" id="row_countryOfShipment" style="display: none;">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Country of Loading</label>
                <div class="col-md-6">
                    <label id="countryOfShipment"></label>
                </div>
            </div>
        </div>
        <div class="row" id="row_isRelated">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end"></label>
                <div class="col-md-6">
                    <label class="col-form-label text-end" id="isRelatedYes" style="text-align:left !important;display: none;">
                        Related to transaction with sanctioned countries
                    </label>
                    <label class="col-form-label text-end" id="isRelatedNo" style="text-align:left !important;display: none;" >
                        Not related to transaction with sanctioned countries
                    </label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Sender Category</label>
                <div class="col-md-6">
                    <label id="senderCategory"></label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Beneficiary Category</label>
                <div class="col-md-6">
                    <label id="beneficiaryCategory"></label>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Transactor Relationship</label>
                <div class="col-md-6">
                    <label id="transactorRelation"></label>
                </div>
            </div>
        </div>

        <hr style="height:1px;border:none;color:#333;background-color:#d2d6de;"/>
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Payment Schedule</label>
                <div class="col-md-6">
                    <label id="paymentSchedule">-</label>
                </div>
            </div>
        </div>
        <div class="row instructionModeClass"></div>
    </div>
</div>
<div class="box-body">
    <div class="container-fluid">
        <div class="row">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Notify the Beneficiary</label>
                <div class="col-md-6">
                    <label id="notify"></label>
                </div>
            </div>
        </div>
        <div class="row notifyEmail" style="display:none">
            <div class="mb-3 row">
                <label class="col-md-2 col-form-label text-end">Beneficiary Email Address</label>
                <div class="col-md-6">
                    <label id="email"></label>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </div>
</div>
</div> -->
<!-- </section> -->

<script>
    var oTable;
    var chargeList;
    var service = '{{ $service }}';
    var createdByUserCode = '{{ $createdByUserCode }}';
    $(document).ready(function () {

    });

    function getDetailData(data){
        var detail = data.detail;
        var confirm_data = detail.confirm_data;
        chargeList = detail.chargeList;

        $('#sourceAccount').text(confirm_data.source_account);
        $('#senderRefNo').text(confirm_data.senderRefNo);
        $('#finalPayment').text(confirm_data.isFinalPayment);
        $('#trfService').text(confirm_data.transService);
        $('#amount').text(detail.transactionCurrency +' '+confirm_data.transactionAmount);
        if(detail.equivalentAmount!=''){
            $('#equivalentTo').text(detail.source_acct_ccy+' '+currencyFormat(detail.equivalentAmount));
        }

        $('#feeTotal').text(confirm_data.totalChargeCurrency+' '+confirm_data.totalCharge);
        $('#feeTotalEquivalent').text(detail.source_acct_ccy+' '+confirm_data.totalChargeEquivalent);
        $('#totalDebitAmount').text(detail.source_acct_ccy +' '+confirm_data.totalDebitedAmount);
        $('#remark').text(detail.remark1);
        $('#paymentSchedule').text(confirm_data.payment_schedule);
        $('#notify').html(confirm_data.notify);
        if (detail.isNotify == 'Y') {
            $('#email').text(detail.notifyBenValue);
            $('.notifyEmail').show();
        }
        $('#destAccount').text(confirm_data.destinationAccount);
        $('#destBank').text(confirm_data.destinationBank);
        $('#beneType').text(confirm_data.beneficairyType);
        $('#benRefNo').text(detail.benRefNo);

        $('#isResident').text(confirm_data.isResident);
        if (detail.isBenResident == 'N') {
            $('#isResident').text(confirm_data.isResident + ',  ' + confirm_data.residentCountry);
        }

        $('#isCitizen').text(confirm_data.isCitizent);
        if (detail.isBenCitizen == 'N') {
            $('#isResident').text(confirm_data.isCitizent + ',  ' + confirm_data.citizenCountry);
        }

        if (detail.isSaveBenFlag == 'Y') {
            $('#isSaveFlag').text(confirm_data.isSaveBenFlag);
            $('#aliasBen').text(confirm_data.aliasName);
        } else {
            $('.saveBenFlag').hide();
        }
        $('#exchangeRate').text(confirm_data.exchangeRate);
        if(confirm_data.exchangeRate!=null && confirm_data.exchangeRate!=''){
            if(detail.exchangeRate != 'FC'){
                $('.totalAndEquivalent').show();
            }
            if(detail.exchangeRate == 'SR'){
                $('#specialRate').text(confirm_data.specialRate);
                $('#treasuryCode').text(detail.treasuryCode);
                $('.treasury_class').show();
                $('.purpose_lhbu').show();
                $('.document_type').show();

                $('#transactionPurposeLHBU').text(confirm_data.transactionPurposeLHBU);
                $('#documentType').text(confirm_data.documentType);
            }
            if(detail.exchangeRate == 'CR'){
                $('#counterRate').text(confirm_data.counterRate);
            }
        }else{
            $('.exchange').hide();
        }

         //ikutin di front-inenya trx status
        if('FC' != detail.exchangeRate){
             $('.totalDebitAmountOnly').show();
        }

        $('#destCountry').text(confirm_data.country);

        $('#swiftCode').text(confirm_data.swiftCode);
        $('#bankTownName').text(confirm_data.bankTownName);
        $('#destBankbranch').text(confirm_data.bankBranchName);
        $('#bankAddress1').text(confirm_data.bankAddress);
        // if(detail.bankAddress2 == ''){
        //     $('.bankAddress2').show();
        // }
        // if(detail.bankAddress3 == ''){
        //     $('.bankAddress3').show();
        // }
        $('#bankAddress1').text(confirm_data.bankAddress);

        // $('#destAccountNo').text(confirm_data.destinationAccountNumber.split('-')[0]);
        $('#destAccountNo').text(confirm_data.destinationAccountNumber);
        $('#destAccountName').text(detail.benAccountName);
        $('#accountAddress1').text(detail.address1);
        $('#accountAddress2').text(detail.address2);
        $('#accountAddress3').text(detail.address3);
        $('#benAccountNo').text(confirm_data.destinationAccountNumber	);
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

        $('#identity').text(confirm_data.identity);
        $('#transactorRelation').text(confirm_data.transactorRelationship);

        $('#chargeIns').text(confirm_data.chargeIns);
        $('#dscp1').text(detail.remark1);
        $('#dscp2').text(detail.remark2);
        $('#dscp3').text(detail.remark3);


        if(detail.underlyingCode != null){
            $('#underlyingCode').text(detail.underlyingCode.slice(0, 1).toUpperCase() + detail.underlyingCode.slice(1));
            if(detail.underlyingCode == 'upload'){
                $('.fileUpload').show();
                $('#fileName').text(detail.fileName);
                $('#fileName2').text(detail.fileName2);
                $('#fileName3').text(detail.fileName3);
            }
        }
        if(detail.senderCategory != null){
            $('#senderCategory').text(detail.senderCategory.slice(0, 1).toUpperCase() + detail.senderCategory.slice(1));
        }
        if(detail.beneficiaryCategory != null){
            $('#beneficiaryCategory').text(detail.beneficiaryCategory.slice(0,1).toUpperCase() + detail.beneficiaryCategory.slice(1));
        }
        // if(detail.benCountryName != null){
        $('#beneficiaryCountry').text(confirm_data.beneficiaryCountry);

        // }
        $('#transactionPurpose').text(confirm_data.transactionPurpose);
//        if(detail.transactionPurpose=='2012'){ //yangmasuk menu ini sudah pasti yang suspect
            if(detail.isRelatedCountry == 'N'){
                $('#isRelatedNo').show();
            } else {
                $('#isRelatedYes').show();
            }
            $('#nameOfGoods').text(detail.nameOfGoods);
            $('#countryOfOrigin').text(confirm_data.countryOfOrgin);
            $('#countryOfLoading').text(confirm_data.portOfLoading);
            $('#countryOfShipment').text(confirm_data.portOfShipment);

            $('#row_nameOfGoods').show();
            $('#row_countryOfOrigin').show();
            $('#row_countryOfLoading').show();
            $('#row_countryOfShipment').show();
            $('#row_isRelated').show();

  /*      } else {
            $('#row_nameOfGoods').hide();
            $('#row_countryOfOrigin').hide();
            $('#row_countryOfLoading').hide();
            $('#row_countryOfShipment').hide();
            $('#row_isRelated').hide();
        }*/


        setChargesDetail(chargeList);
        setInstructionMode(detail, confirm_data);

    }

    function setInstructionMode(detail, confirm_data){
        var instructionMode = detail.instructionMode;

        tags = '<div class="mb-3 row">'
        if (instructionMode !=null && instructionMode == 'I') {
            tags += '<label class="col-md-2 col-form-label text-end">Payment Date</label>';
            tags += '<div class="col-md-9 col-form-label">';
            tags += '<label>'+confirm_data.payment_date+'</label>';
            tags += '</div>';
            if(detail.sessionTime != '00:00'){
                tags += '<label class="col-md-2 col-form-label text-end">at</label>';
                tags += '<div class="col-md-6">';
                tags += '<label>'+detail.sessionTime+'</label>';
                tags += '</div>';
            }

            if (instructionMode == 'I' && detail.sessionTime != '00:00') {
                $('#paymentSchedule').text("Today with Session Time");
            } else {
                $('#paymentSchedule').text("Immediate");
            }
        } else if (instructionMode !=null && instructionMode == 'F') {
            tags += '<label class="col-md-2 col-form-label text-end">Payment Date</label>';
            tags += '<div class="col-md-9 col-form-label">';
            tags += '<label>'+confirm_data.payment_date+'</label>';
            tags += '</div>';
            if(detail.sessionTime != '00:00'){
                tags += '<label class="col-md-2 col-form-label text-end">at</label>';
                tags += '<div class="col-md-6 col-form-label">';
                tags += '<label>'+detail.sessionTime+'</label>';
                tags += '</div>';
            }
            $('#paymentSchedule').text("Future Date");
        } else if (instructionMode !=null && instructionMode == 'R') {
            tags += '<label class="col-md-2 col-form-label text-end">For</label>';
            tags += '<div class="col-md-9 col-form-label">';
            tags += '<label>'+confirm_data.payment_for+'</label>';
            tags += '</div>';
            tags += '<label class="col-md-2 col-form-label text-end">Every</label>';
            tags += '<div class="col-md-9 col-form-label">';
            tags += '<label>'+confirm_data.payment_every+'</label>';
            tags += '</div>';
            if(detail.sessionTime != '00:00'){
                tags += '<label class="col-md-2 col-form-label text-end">At</label>';
                tags += '<div class="col-md-9 col-form-label">';
                tags += '<label>'+detail.sessionTime+'</label>';
                tags += '</div>';
            }
            tags += '<label class="col-md-2 col-form-label text-end">End Date</label>';
            tags += '<div class="col-md-9 col-form-label">';
            tags += '<label>'+confirm_data.payment_date_end+'</label>';
            tags += '</div>';

            $('#paymentSchedule').text("Recurring");
        }
        tags += '</div>';

        $('.instructionModeClass').html(tags);

    }

    function setChargesDetail(chargeList){

        tags = '<div class="mb-3 row">'
        for (var i = 0; i < chargeList.length; i++) {
            if (chargeList[i].value != '0' && chargeList[i].value !='0.00' && chargeList[i].value != '0.0000000' && chargeList[i].value != '.00') {
                tags += '<label class="col-md-2 col-form-label text-end">'+chargeList[i].serviceChargeName+'</label><div class="col-md-6"><label>'+chargeList[i].currencyCode+' '+chargeList[i].value+'</label></div>';
            }
        }
        tags += '</div>';

        $('.chargeClass').html(tags);

    }

    function currencyFormat(num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }


</script>
