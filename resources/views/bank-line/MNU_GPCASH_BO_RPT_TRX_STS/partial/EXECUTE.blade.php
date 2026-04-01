
<section class="content">
    <div class="panel panel-default">
        <div class="panel-body box-body">
            <input type="hidden" id="tempExecutedList" value=""/>
            <div class="box table-hidden-execute">
                <div class="box-body list-title table-hidden-list">

                    <table id="listDetailExecuted" class="table table-bordered table-striped dataTable " border="2" cellpadding="2" style="border-collapse:collapse;">
                        <thead>
                        <tr>
                            <th align="center"><strong>Executed Date</strong></th>
                            <th align="center"><strong>Debit Account</strong></th>
                            <th align="center"><strong>Amount</strong></th>
                            <th align="center"><strong>Credit Account</strong></th>
                            <th align="center"><strong>Status</strong></th>
                            <th align="center"><strong>Reason</strong></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td align="center"></td>
                            <td align="left"></td>
                            <td align="left"></td>
                            <td align="left"></td>
                            <td align="left"></td>
                            <td align="left"></td>
                        </tr>
                        </tbody>
                    </table>
</div>
<div class="box-body list-title table-hidden-list-bulk">
                    <table id="listDetailExecutedBulk" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                        <thead>
                        <tr>
                            <th align="center"><strong>Executed Date</strong></th>
                            <th align="center" ><strong>Sub Reference Number</strong></th>
                            <th align="center"><strong>Debit Account</strong></th>
                            <th align="center"><strong>Amount</strong></th>
                            <th align="center"><strong>Credit Account</strong></th>
                            <th align="center"><strong>Status</strong></th>
                            <th align="center"><strong>Reason</strong></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td align="center"></td>
                            <td align="left" ></td>
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
            <div id="detailModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Transaction Detail</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-5 col-form-label text-end">Executed Date</label>
                                        <div class="col-md-6">
                                            <label id="executedDate">-</label>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="row">--}}
                                {{--                                    <div class="mb-3 row">--}}
                                {{--                                        <label class="col-md-5 col-form-label text-end">System Reference Number</label>--}}
                                {{--                                        <div class="col-md-6">--}}
                                {{--                                            <label id="sysRefNo">-</label>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}

                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-5 col-form-label text-end">Debit Account</label>
                                        <div class="col-md-6">
                                            <label id="debitAcct">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-5 col-form-label text-end">Debit Equivalent Amount</label>
                                        <div class="col-md-6">
                                            <label id="debitEqv">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-5 col-form-label text-end">Beneficiary Reference Number</label>
                                        <div class="col-md-6">
                                            <label id="benRefNo">-</label>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="row">--}}
                                {{--                                    <div class="mb-3 row">--}}
                                {{--                                        <label class="col-md-5 col-form-label text-end">Order Party Reference Number</label>--}}
                                {{--                                        <div class="col-md-6">--}}
                                {{--                                            <label id="benRefNo">-</label>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-5 col-form-label text-end">Credit Account</label>
                                        <div class="col-md-6">
                                            <label id="creditAcct" style="word-wrap: break-word;">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-5 col-form-label text-end">Credit Equivalent Amount</label>
                                        <div class="col-md-6">
                                            <label id="creditEqv">-</label>
                                        </div>
                                    </div>
                                </div>
                                {{--                                <div class="row">--}}
                                {{--                                    <div class="mb-3 row">--}}
                                {{--                                        <label class="col-md-5 col-form-label text-end">Credit Exchange Rate</label>--}}
                                {{--                                        <div class="col-md-6">--}}
                                {{--                                            <label id="creditExchange">-</label>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-5 col-form-label text-end">Fee Account</label>
                                        <div class="col-md-6">
                                            <label id="feeAcct">-</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-5 col-form-label text-end">Fee Type</label>
                                        <div class="col-md-6">
                                            <label id="feeType">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-5 col-form-label text-end">Fee Equivalent Account</label>
                                        <div class="col-md-6">
                                            <label id="feeEqv">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-5 col-form-label text-end">Fee Exchange Rate</label>
                                        <div class="col-md-6">
                                            <label id="feeExchange">-</label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row chargeDetailExecuted">

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-bs-dismiss="modal">@lang('form.close')</button>
                        </div>
                    </div>

                </div>
            </div>
            <div id="detailSubModal" class="modal fade" role="dialog">
                <div class="modal-dialog" style="width: 900px">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Bulk Payment</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-content"  >
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Transaction Detail</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="box-header">
                                        <h3 class="box-title">Source Account</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Source Account</label>
                                                <label class="col-md-6 col-form-label static-label" id="sub_SourceAcct" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Remitter Information</label>
                                            <div class="col-md-6">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Remitter Name</label>
                                                <label class="col-md-6 col-form-label text-end" id="sub_remitterName" style="text-align: left;">-</label>
                                            </div>
                                        </div>                                          
                                    </div>

                                    <div class="box-header">
                                        <h3 class="box-title">Beneficiary Account</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Beneficiary Account</label>
                                                <label class="col-md-6 col-form-label text-end" hidden id="otherAcct" style="text-align: left;">Other Account</label>
                                                <label class="col-md-6 col-form-label text-end" hidden id="newEntry"  style="text-align: left;">New Entry</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="benTypeBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_BIFAST'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Beneficiary Account Type</label>
                                                <label class="col-md-6 col-form-label text-end" id="benType" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="proxyTypeBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_BIFAST' && this.popup.proxyType !=''">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Proxy Type</label>
                                                <label class="col-md-6 col-form-label text-end" id="proxyType" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="proxyAddressBlock" hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_BIFAST' && this.popup.proxyAddress !=''">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Proxy Address</label>
                                                <label class="col-md-6 col-form-label text-end" id="proxyAddress" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="bankCountryNameBlock" hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Country</label>
                                                <label class="col-md-6 col-form-label text-end" id="bankCountryName" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="destinationBankNameBlock" hidden v-if="this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_IH'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Beneficiary Bank</label>
                                                 <label class="col-md-6 col-form-label " id="destinationBankNameINT" hidden style="text-align: left;" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">-</label>
                                                <label class="col-md-6 col-form-label text-end" id="destinationBankName"  style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="destinationBankCityNameBlock" hidden v-if="this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_IH' && this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_BIFAST' && this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Beneficiary Bank City</label>
                                                <label class="col-md-6 col-form-label text-end" id="destinationBankCityName" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="destinationBankCodeBlock" hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_SKN'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">SKN Code</label>
                                                <label class="col-md-6 col-form-label text-end" id="destinationBankCode" style="text-align: left;"></label>
                                            </div>
                                        </div>
                                        <div class="row" id="destinationBankCodeRTGSBlock" hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_RTGS'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">RTGS Code</label>
                                                <label class="col-md-6 col-form-label text-end" id="destinationBankCodeRTGS" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="destinationBankCodeBIFASTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_BIFAST'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end" >BI FAST Code</label>
                                                <label class="col-md-6 col-form-label text-end" id="destinationBankCodeBIFAST" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="destinationBankCodeINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">SWIFT Code</label>
                                                <label class="col-md-6 col-form-label text-end" id="destinationBankCodeINT" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="destinationBankTownNameINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Town Name</label>
                                                <label class="col-md-6 col-form-label text-end" id="destinationBankTownNameINT" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                       <!--  <div class="row" hidden  id="destinationBankBranchINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Branch</label>
                                                <label class="col-md-6 col-form-label text-end" id="destinationBankBranchINT" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="destinationBankAddressINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Address</label>
                                                <label class="col-md-6 col-form-label text-end" id="destinationBankAddress1INT" style="text-align: left;">-</label>
                                                <label class="col-md-4 col-form-label text-end"></label>
                                                <label class="col-md-6 col-form-label text-end" id="destinationBankAddress2INT" style="text-align: left;">-</label>
                                                <label class="col-md-4 col-form-label text-end"></label>
                                                <label class="col-md-6 col-form-label text-end" id="destinationBankAddress3INT" style="text-align: left;">-</label>
                                            </div>
                                        </div> -->
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Beneficiary Account Number</label>
                                                <label class="col-md-6 col-form-label text-end" id="creditAccount" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Beneficiary Account Name</label>
                                                <label class="col-md-6 col-form-label text-end" id='creditAccountName' style="text-align: left;word-wrap: break-word;" >-</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="departmentINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Department</label>
                                                <label class="col-md-6 col-form-label text-end" id='department' style="text-align: left;word-wrap: break-word;" >-</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="subDepartmentINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Sub Department</label>
                                                <label class="col-md-6 col-form-label text-end" id='subDepartment' style="text-align: left;word-wrap: break-word;" >-</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="stretNameINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Street Name</label>
                                                <label class="col-md-6 col-form-label text-end" id='streetName' style="text-align: left;word-wrap: break-word;" >-</label>         
                                            </div>
                                        </div>
                                        <div class="row" hidden id="buildingNumberINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Building Number</label>
                                                <label class="col-md-6 col-form-label text-end" id='buildingNumber' style="text-align: left;word-wrap: break-word;" >-</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="buildingNameINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Building Name</label>
                                                <label class="col-md-6 col-form-label text-end" id='buildingName' style="text-align: left;word-wrap: break-word;" >-</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="floorINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Floor</label>
                                                <label class="col-md-6 col-form-label text-end" id='floor' style="text-align: left;word-wrap: break-word;" >-</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="postBoxINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Post Box</label>
                                                <label class="col-md-6 col-form-label text-end" id='postBox' style="text-align: left;word-wrap: break-word;" >-</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="postCodeINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Post Code</label>
                                                <label class="col-md-6 col-form-label text-end" id='postCode' style="text-align: left;word-wrap: break-word;" >-</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="roomINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Room</label>
                                                <label class="col-md-6 col-form-label text-end" id='room' style="text-align: left;word-wrap: break-word;" >-</label>
                                        </div>
                                        <div class="row"  hidden id="townNameINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Town Name</label>
                                                <label class="col-md-6 col-form-label text-end" id='townName' style="text-align: left;word-wrap: break-word;" >-</label>
                                            </div>
                                        </div>
                                        <div class="row" hidden id="townLocationNameINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Town Location Name</label>
                                                <label class="col-md-6 col-form-label text-end" id='townLocationName' style="text-align: left;word-wrap: break-word;" >-</label>
                                            </div>
                                        </div>
                                        <div class="row"  hidden id="districtNameINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">District Name</label>
                                                <label class="col-md-6 col-form-label text-end" id='districtName' style="text-align: left;word-wrap: break-word;" >-</label>
                                            </div>
                                        </div>
                                        <div class="row"  hidden id="countrySubDivisionINTBlock" v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Country Sub Division</label>
                                                <label class="col-md-6 col-form-label text-end" id='countrySubDivision' style="text-align: left;word-wrap: break-word;" >-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="addressBlock" hidden v-if="this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_IH' && this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_BIFAST' && this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Address</label>
                                                <label class="col-md-6 col-form-label text-end" id='benAddress1' style="text-align: left;">-</label>
                                                <label class="col-md-4 col-form-label text-end"></label>
                                                <label class="col-md-6 col-form-label text-end"  id='benAddress2' style="text-align: left;">-</label>
                                                <label class="col-md-4 col-form-label text-end" id="benAddres3Lbl"></label>
                                                <label class="col-md-6 col-form-label text-end" id='benAddress3' style="text-align: left;"></label>
                                            </div>
                                        </div>
                                        <div class="row" id="destinationCityBlock" hidden v-if="this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_IH' && this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_BIFAST' && this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">City</label>
                                                <label class="col-md-6 col-form-label text-end" id='destinationCity' style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="residentBlock" hidden v-if="this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_IH' && this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_BIFAST' && this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Residentship</label>
                                                <label class="col-md-2 col-form-label text-end" id="isBenResident" style="text-align: left;">-</label>
                                                <div class="mb-3 row" v-show="this.popup.isBenResident == 'N'">
                                                    <label class="col-md-2 col-form-label text-end static-label" id="residentCountry" style="text-align: left; margin-left:-70px">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="citiZenBlock" hidden v-if="this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_IH' && this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_BIFAST' && this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Citizhenship</label>
                                                <label class="col-md-2 col-form-label text-end" id="isBenCitizen" style="text-align: left;">-</label>
                                                <div class="mb-3 row" v-show="this.popup.isBenCitizen == 'N'">
                                                    <label class="col-md-2 col-form-label text-end static-label" id="citizenCountry" style="text-align: left; margin-left:-70px">
                                                        -
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="beneficiaryTypeBlock" hidden v-if="this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_IH' && this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_BIFAST' && this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Beneficiary Type</label>
                                                <label class="col-md-6 col-form-label text-end" id="beneficiaryType" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="benCountryNameBlock" hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Benefciary Country</label>
                                                <label class="col-md-6 col-form-label text-end" id='benCountryName' style="text-align: left;word-wrap: break-word;">-</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Order Party Reference Number</label>
                                                <label class="col-form-label static-label" id="subBenRefNo">
                                                    -
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-header">
                                        <h3 class="box-title">Transafer Detail</h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Amount</label>
                                                <label class="col-md-6 col-form-label text-end" id="amount" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="chargeToBlock" hidden v-if="this.menu !== 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_IH'">
                                            <div class="mb-3 row has-feedback">
                                                <label class="col-md-4 col-form-label text-end">Charge Instruction</label>
                                                <label class="col-md-6 col-form-label static-label" id="chargeTo" style="text-align: left;">
                                                    -
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row chargeClass">

                                        </div>
                                        <div class="row">
                                            <div class="mb-3 row has-feedback">
                                                <label class="col-md-4 col-form-label text-end">Total Debit Amount</label>
                                                <label class="col-md-6 col-form-label text-end" id="debitEquivalentAmount" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Description</label>
                                                <label class="col-form-label static-label" id="remark1">
                                                    -
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end"></label>
                                                <label class="col-form-label static-label" id="remark2">

                                                </label>
                                            </div>
                                        </div>
                                        <div class="row" id="remark3Block" hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_IH' || this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end"></label>
                                                <label class="col-form-label static-label" id="remark3">
                                                   -
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row" id="trxPurposeNameBlock" hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_BIFAST' || this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Transaction Purpose</label>
                                                <label class="col-md-6 col-form-label text-end" style="text-align: left;word-wrap: break-word;" id="trxPurposeName">-</label>
                                            </div>
                                        </div>
                                        <div class="row"  id="row_nameOfGoods" hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Name of Goods</label>
                                                <label class="col-md-6 col-form-label text-end" style="text-align: left;word-wrap: break-word;" id="nameOfGoods">-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="row_countryOfOrigin" hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Country of Origin</label>
                                                <label class="col-md-6 col-form-label text-end" style="text-align: left;word-wrap: break-word;" id="countryOfOrigin">-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="row_countryOfLoading" hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Country of Destination</label>
                                                <label class="col-md-6 col-form-label text-end" style="text-align: left;word-wrap: break-word;" id="countryOfLoading">-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="row_countryOfShipment" hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Country of Loading</label>
                                                <label class="col-md-6 col-form-label text-end" style="text-align: left;word-wrap: break-word;" id="countryOfShipment">-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="row_isRelated" hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end"></label> 
                                                <div class="col-md-6" style="text-align: left;word-wrap: break-word;">
                                                    <label class="col-form-label text-end" id="isRelatedYes" style="text-align:left !important;" hidden>
                                                        Related to transaction with sanctioned countries
                                                    </label>
                                                    <label class="col-form-label text-end" id="isRelatedNo" style="text-align:left !important;" hidden>
                                                        Not related to transaction with sanctioned countries
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id='senderCategoryDisplayBlock' hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Sender Category</label>
                                                <label class="col-md-6 col-form-label text-end" id="senderCategoryDisplay" style="text-align: left;">-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="benCategoryDisplayBlock" hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Beneficiary Category</label>
                                                <label class="col-md-6 col-form-label text-end" style="text-align: left;" id="benCategoryDisplay">-</label>
                                            </div>
                                        </div>
                                        <div class="row" id="trxRelationDisplayBlock" hidden v-if="this.menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Transactor Relationship</label>
                                                <label class="col-md-6 col-form-label text-end" style="text-align: left;" id="trxRelationDisplay">-</label>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Payment Schedule</label>
                                                <label class="col-md-6 col-form-label text-end" id='instructionMode' style="text-align:left;" >-</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Payment Date</label>
                                                <label class="col-md-6 col-form-label text-end" id="instructionDate" style="text-align:left;">-</label>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Notify The Beneficiary</label>
                                                <label class="col-md-6 col-form-label static-label" id="benNotificationFlag" style="text-align: left;">-
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row" id="benNotificationValueBlock" v-if="this.popup.benNotificationFlag == 'Y'">
                                            <div class="mb-3 row">
                                                <label class="col-md-4 col-form-label text-end">Beneficiary Email Address</label>
                                                <label class="col-md-6 col-form-label static-label" id="benNotificationValue" style="text-align: left;">
                                                    -
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">@lang('form.close')</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

</section>

<script>
    var executedList;
    var executedListBulk;
    var service = '{{ $service }}';
    var menuCodeExecution = '{{ $menuCodeExecution }}';
    var needIsBulk = false; 
	
   
    $(document).ready(function () {
	$('.table-hidden-execute').hide();
	if (menuCodeExecution.includes('BULK')) {
                    needIsBulk = true;
   	}
        var columnDefs = [
            {
                sortable: false,
                width: "12.5%",
                targets: 0,
                render: function (data, type, full, meta) {
                    return '<a href="javascript:void(0)" select-index="' + data.index + '" isSub="false">' + data.executedDate + '</a>';
                },
            }
        ];

        if (needIsBulk) {
            columnDefs.push({
                sortable: false,
                width: "12.5%",
                targets: columnDefs.length, // Set dynamic target index
                render: function (data, type, full, meta) {
                    return '<a href="javascript:void(0)" select-index="' + data.index + '" isSub="true">' + data.subReferenceNo + '</a>';
                },
            });
        }

        columnDefs.push(
            {
                targets: columnDefs.length,
                sortable: false,
                width: "12.5%"
            },
            {
                targets: columnDefs.length,
                sortable: false,
                width: "12.5%"
            },
            {
                targets: columnDefs.length,
                sortable: false,
                width: "12.5%"
            },
            {
                targets: columnDefs.length,
                sortable: false,
                className: 'dt-center',
                width: "12.5%"
            },
            {
                targets: columnDefs.length,
                sortable: false,
                className: 'dt-center',
                width: "12.5%"
            }
        );

        executedList = $('#listDetailExecuted').DataTable({
            // "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "searching": false,
            "autoWidth":false,
            "columnDefs": columnDefs
        });

        $('#listDetailExecuted tbody').on('click', 'a', function (e) {
            if(e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }

            var indexSelected = $(this).attr('select-index');
            var isSubDetail = $(this).attr('isSub');

            prepareDetailPopUp(indexSelected, isSubDetail);
            if (isSubDetail == 'true') {
                $('#detailSubModal').modal('show');
            } else {
                $('#detailModal').modal('show');
            }


        });


        executedListBulk = $('#listDetailExecutedBulk').DataTable({
            // "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "searching": false,
            "autoWidth":false,
            "columnDefs": columnDefs
        });

        $('#listDetailExecutedBulk tbody').on('click', 'a', function (e) {
            if(e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }

            var indexSelected = $(this).attr('select-index');
            var isSubDetail = $(this).attr('isSub');

            prepareDetailPopUp(indexSelected, isSubDetail);
            if (isSubDetail == 'true') {
                $('#detailSubModal').modal('show');
            } else {
                $('#detailModal').modal('show');
            }


        });

    });

    function getDetailExecuted(uploadId, menu){
        var value = {
            executedId : uploadId,
            executedMenuCode : menu,
            // currentPage : 1,
            // pageSize: 10,
        };
        prepareViewSubModal(menu);
        var url_action = 'detailExecutedTransaction';
        var action = 'DETAIL';
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : service,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {

                    var listExecuted = result.executedResult;

                    $('#tempExecutedList').val(JSON.stringify(listExecuted));

                    executedList.clear();
                    executedListBulk.clear();
                    $.each(listExecuted, function (idx, obj) {
                        let rowData = [
                            { "executedDate": obj.executedDate, "index": idx } // Object column (Handled in render)
                        ];

                        if (menu.includes('BULK')) {
                            rowData.push({ "subReferenceNo": obj.subReferenceNo, "index": idx }); // Object column (Handled in render)
                       }

                        rowData.push(
                            obj.debitAccount + " - " + obj.debitAccountName,
                            obj.transactionAmount !== '-1' ? (obj.transactionCurrency + ' ' + currencyFormat(obj.transactionAmount)) : '',
                            (obj.creditAccount ? obj.creditAccount : '') + " - " + (obj.creditAccountName ? obj.creditAccountName : ''),
                            obj.status? obj.status : '',
                            obj.errorDscp? obj.errorDscp : ''
                        );

if (menu.includes('BULK')) {
                        executedListBulk.row.add(rowData).draw(false);
}else{
                        executedList.row.add(rowData).draw(false);
}
                        
                    });

                    // console.log(result1.executedResult);

                } else {
                    flash('warning', result.message);
                }


            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            },
            complete: function(data) {
                $('.table-hidden-execute').show();
                $('.isBulk').hide();
                $('.table-hidden-list').show();
                $('.table-hidden-list-bulk').hide();
                needIsBulk = false;
                if (menu.includes('BULK')) {
                    $('.isBulk').show();
                    $('.table-hidden-list').hide();
                $('.table-hidden-list-bulk').show();
                    needIsBulk = true;
                }
            }
        });
    }

    function prepareDetailPopUp(idx, isSubDetail){

        var listExecuted = $('#tempExecutedList').val();
        listExecuted = JSON.parse(listExecuted);

        // console.log("list: ", listExecuted);
        if (isSubDetail == 'false') {

            $('#executedDate').text(listExecuted[idx].executedDate);
            $('#sysRefNo').text(listExecuted[idx].systemReferenceNo);
            if(listExecuted[idx].senderRefNo){
                $('#senderRefNoBlock').show();
                $('#senderRefNo').text(listExecuted[idx].senderRefNo);
            }else{
                $('#senderRefNoBlock').hide();
            }
            $('#debitAcct').text(listExecuted[idx].debitAccount +" / "+ listExecuted[idx].debitAccountName);
            $('#debitEqv').text(listExecuted[idx].debitAccountCurrency +" "+ currencyFormat(listExecuted[idx].debitEquivalentAmount));
            $('#debitExchange').text(listExecuted[idx].debitAccountCurrency +" "+ currencyFormat(listExecuted[idx].debitExchangeRate));
            $('#benRefNo').text(listExecuted[idx].benRefNo);
            $('#creditAcct').text(listExecuted[idx].creditAccount +" / "+ listExecuted[idx].creditAccountName);

            var creditCurrency = (listExecuted[idx].creditAccountCurrency !=null && listExecuted[idx].creditAccountCurrency !="") ? listExecuted[idx].creditAccountCurrency : listExecuted[idx].creditTransactionCurrency;

            $('#creditEqv').text(creditCurrency + " " + currencyFormat(listExecuted[idx].creditEquivalentAmount));
            $('#creditExchange').text(creditCurrency + " " + currencyFormat(listExecuted[idx].creditExchangeRate));
            $('#feeAcct').text(listExecuted[idx].chargeAccount);

            if (listExecuted[idx].chargeList !=null) {
                $('#feeAcct').text("");
                setChargesDetailExecuted(listExecuted[idx].chargeList);

            }
        } else {

            $('#sub_SourceAcct').text(listExecuted[idx].debitAccount + " / " + listExecuted[idx].debitAccountName + " (" + listExecuted[idx].debitAccountCurrency + ")");
            $('#destinationBankName').text(listExecuted[idx].destinationBankName);
            $('#destinationBankCityName').text(listExecuted[idx].destinationBankCityName);
            $('#destinationBankCodeRTGS').text(listExecuted[idx].destinationBankCodeRTGS);
            $('#destinationBankCode').text(listExecuted[idx].destinationBankCode);
            $('#creditAccount').text(listExecuted[idx].creditAccount);
            $('#creditAccountName').text(listExecuted[idx].creditAccountName);
            $('#benAddress1').text(listExecuted[idx].benAddress1);
            $('#benAddress2').text(listExecuted[idx].benAddress2);
            $('#benAddress3').text(listExecuted[idx].benAddress3);
            $('#destinationCity').text(listExecuted[idx].destinationCity);
            $('#isBenResident').text( listExecuted[idx].isBenCitizen != 'Y' ? "Non Resident " : "Yes");
            $('#isBenCitizen').text( listExecuted[idx].isBenResident != 'Y' ? "Non Citizen" : "Yes");
            $('#citizenCountry').text(listExecuted[idx].citizenCountry);
            $('#residentCountry').text(listExecuted[idx].residentCountry);
            // $('#sub_DestAcctNo').text(listExecuted[idx].creditAccount + " / " + listExecuted[idx].creditAccountName + " (" + listExecuted[idx].creditTransactionCurrency + ")");
            $('#beneficiaryType').text(listExecuted[idx].beneficiaryType);
            $('#subBenRefNo').text(listExecuted[idx].benRefNo);
            var creditCurrency = (listExecuted[idx].creditAccountCurrency !=null && listExecuted[idx].creditAccountCurrency !="") ? listExecuted[idx].creditAccountCurrency : listExecuted[idx].creditTransactionCurrency;

            $('#amount').text(creditCurrency +" "+currencyFormat(listExecuted[idx].transactionAmount));
            $('#chargeTo').text(listExecuted[idx].chargeTo);
            $('#debitEquivalentAmount').text(listExecuted[idx].debitAccountCurrency +" "+currencyFormat(listExecuted[idx].debitEquivalentAmount));
            $('#remark1').text(listExecuted[idx].remark1);
            $('#remark2').text(listExecuted[idx].remark2);
            $('#instructionMode').text(instructionText(listExecuted[idx].instructionMode));
            $('#instructionDate').text(moment(listExecuted[idx].instructionDate, 'DD/MM/YYYY HH:mm:ss').format('DD-MMMM-YYYY'));
            $('#benNotificationFlag').text( listExecuted[idx].benNotificationFlag != 'Y' ? "Don't Notify" : "Notify");
            if(listExecuted[idx].benNotificationFlag != 'Y'){
                $('#benNotificationValueBlock').hide();
            }
            if(listExecuted[idx].benType == '0'){
                $('#benType').text("Account");
            }else{
                $('#benType').text("Proxy Address");
            }
            if(listExecuted[idx].proxyType != ''){
                if(listExecuted[idx].proxyType == '1'){
                    $('#proxyType').text("Email");
                }else{
                    $('#proxyType').text("Phone No");
                }
            }else{
                $('#proxyTypeBlock').hide();
            }
            if(listExecuted[idx].proxyAddress != ''){
                $('#proxyAddress').text(listExecuted[idx].proxyAddress);
            }else{
                $('#proxyAddressBlock').hide();
            }

            $('#benNotificationValue').text(listExecuted[idx].benNotificationValue);
            $('#bankCountryName').text(listExecuted[idx].bankCountryName);
            $('#destinationBankCodeBIFAST').text(listExecuted[idx].destinationBankCodeBIFAST);
            $('#destinationBankCodeINT').text(listExecuted[idx].destinationBankCodeINT);
            $('#destinationBankTownNameINT').text(listExecuted[idx].destinationBankTownNameINT);
            $('#destinationBankBranchINT').text(listExecuted[idx].destinationBankBranchINT);
            $('#destinationBankAddress1INT').text(listExecuted[idx].destinationBankAddress1INT);
            $('#destinationBankAddress2INT').text(listExecuted[idx].destinationBankAddress2INT);
            $('#destinationBankAddress3INT').text(listExecuted[idx].destinationBankAddress3INT);
            $('#benCountryName').text(listExecuted[idx].benCountryName);
            $('#remark3').text(listExecuted[idx].remark3);
            $('#trxPurposeName').text(listExecuted[idx].trxPurposeName);
            $('#senderCategoryDisplay').text(listExecuted[idx].senderCategoryDisplay);
            $('#benCategoryDisplay').text(listExecuted[idx].benCategoryDisplay);
            $('#trxRelationDisplay').text(listExecuted[idx].trxRelationDisplay);
            $('#destinationBankNameINT').text(listExecuted[idx].destinationBankNameINT);

            //mx
            $('#sub_remitterName').text(listExecuted[idx].remitterName);

            $('#department').text(listExecuted[idx].benDepartment);
            $('#subDepartment').text(listExecuted[idx].benSubDepartment);
            $('#streetName').text(listExecuted[idx].benStreetName);
            $('#buildingNumber').text(listExecuted[idx].benBuildingNumber);
            $('#buildingName').text(listExecuted[idx].benBuildingName);
            $('#floor').text(listExecuted[idx].benFloor);
            $('#postBox').text(listExecuted[idx].benPostBox);
            $('#postCode').text(listExecuted[idx].benPostCode);
            $('#room').text(listExecuted[idx].benRoom);
            $('#townName').text(listExecuted[idx].benTownName);
            $('#townLocationName').text(listExecuted[idx].benTownLocationName);
            $('#districtName').text(listExecuted[idx].benDistrict);
            $('#countrySubDivision').text(listExecuted[idx].benCountrySubDivision);
            //

            if(listExecuted[idx].nameOfGoods && listExecuted[idx].nameOfGoods != ''){
				$('#row_isRelated').show();
                if(listExecuted[idx].relatedTrxCountryFlag == 'N'){
                    $('#isRelatedNo').show();
					$('#isRelatedYes').hide();
                } else {
                    $('#isRelatedYes').show();
					$('#isRelatedNo').hide();
                }
                $('#nameOfGoods').text(listExecuted[idx].nameOfGoods);
                $('#countryOfOrigin').text(listExecuted[idx].countryOfOriginName);
                $('#countryOfLoading').text(listExecuted[idx].countryOfLoadingName);
                $('#countryOfShipment').text(listExecuted[idx].countryOfShipmentName);

                $('#row_nameOfGoods').show();
                $('#row_countryOfOrigin').show();
                $('#row_countryOfLoading').show();
                $('#row_countryOfShipment').show();


            } else {
                $('#row_nameOfGoods').hide();
                $('#row_countryOfOrigin').hide();
                $('#row_countryOfLoading').hide();
                $('#row_countryOfShipment').hide();
                $('#row_isRelated').hide();
            }
        
            setChargesDetail(listExecuted[idx].chargeList);
        }

    }
    function prepareViewSubModal(menu){
        if( menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_RTGS'){
            $('#newEntry').show();
            $('#destinationBankNameBlock').show();
            $('#destinationBankCityNameBlock').show();
            $('#destinationBankCodeRTGSBlock').show();
            $('#addressBlock').show();
            $('#destinationCityBlock').show();
            $('#residentBlock').show();
            $('#citiZenBlock').show();
            $('#beneficiaryTypeBlock').show();
            $('#chargeToBlock').show();
        }else if( menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_SKN'){
            $('#newEntry').show();
            $('#destinationBankNameBlock').show();
            $('#destinationBankCityNameBlock').show();
            $('#destinationBankCodeBlock').show();
            $('#addressBlock').show();
            $('#destinationCityBlock').show();
            $('#residentBlock').show();
            $('#citiZenBlock').show();
            $('#beneficiaryTypeBlock').show();
            $('#chargeToBlock').show();
            $('#destinationBankCodeBlock').show();
        }else if( menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_BIFAST'){
            $('#newEntry').show();
            $('#benTypeBlock').show();
            $('#destinationBankNameBlock').show();
            $('#proxyTypeBlock').show();
            $('#proxyAddressBlock').show();
            $('#destinationBankCodeBIFASTBlock').show();
            $('#trxPurposeNameBlock').show();
            $('#chargeToBlock').show();
        }else if( menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_INT'){
            $('#newEntry').show();
            $('#bankCountryNameBlock').show();
            $('#destinationBankNameBlock').show();
            $('#destinationBankCodeINTBlock').show();
            $('#destinationBankTownNameINTBlock').show();
            $('#destinationBankBranchINTBlock').show();
            $('#destinationBankAddressINTBlock').show();
            $('#benCountryNameBlock').show();
            $('#addressBlock').hide();
            $('#remark3Block').show();
            $('#trxPurposeNameBlock').show();
            $('#senderCategoryDisplayBlock').show();
            $('#benCategoryDisplayBlock').show();
            $('#trxRelationDisplayBlock').show();
            $('#chargeToBlock').show();
            $('#destinationBankNameINT').show();
            $('#destinationBankName').hide();
            $('#benAddres3Lbl').text('City');
			$('#departmentINTBlock').show();
			$('#subDepartmentNTBlock').show();
			$('#buildingNumberINTBlock').show();
			$('#buildingNameINTBlock').show();
			$('#floorINTBlock').show();
			$('#postBoxINTBlock').show();
			$('#postCodeINTBlock').show();
			$('#roomINTBlock').show();
			$('#townNameINTBlock').show();
			$('#townLocationNameINTBlock').show();
			$('#districtNameINTBlock').show();
			$('#countrySubDivisionINTBlock').show();
			
        }else if( menu == 'MNU_GPCASH_F_MASS_FUND_BULK_PAYMENT_IH'){
            $('#otherAcct').show();
            $('#remark3Block').show();
        }
    }
    function instructionText (val){
        if(val=='I'){
            return "Immediate"
        }else if(val=='F'){
            return "Future Date"
        }else{
            return '';
        }
    }

    function notifyBenText (val, email) {
        if (val == "Y") {
            return "Notify " + email;
        } else {
            return "Don't Notify";
        }
    }

    function currencyFormat (num) {
        if(num != '' && num.trim() != '-'){
            return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
        }
        return num;
    }

    function setChargesDetailExecuted(chargeList){

        tags = '<div class="mb-3 row">'
        for (var i = 0; i < chargeList.length; i++) {
            if(chargeList[i].chargeEquivalentAmount  != '0' && chargeList[i].chargeEquivalentAmount   != '0.00' && chargeList[i].chargeEquivalentAmount != '0.0000000' && chargeList[i].chargeEquivalentAmount != '0.0' && chargeList[i].chargeEquivalentAmount != '0E-7'){
                tags += '<label class="col-md-5 col-form-label text-end">Fee Type</label>';
                tags += '<div class="col-md-6"><label>'+chargeList[i].chargeType+'</label></div>';
                tags += '<label class="col-md-5 col-form-label text-end">Fee Amount</label>';
                tags += '<div class="col-md-6"><label>'+chargeList[i].chargeCurrency+" "+currencyFormat(chargeList[i].chargeEquivalentAmount)+'</label></div>';
            }
        }
        tags += '</div>';

        $('.chargeDetailExecuted').html(tags);

    }
    function  setChargesDetail(chargeList){
        tags = '<div class="mb-3 row">'
        for (var i = 0; i < chargeList.length; i++) {
            if(chargeList[i].chargeEquivalentAmount  != '0' && chargeList[i].chargeEquivalentAmount   != '0.00' && chargeList[i].chargeEquivalentAmount != '0.0000000' && chargeList[i].chargeEquivalentAmount != '0.0' && chargeList[i].chargeEquivalentAmount != '0E-7'){
                tags += '<label class="col-md-4 col-form-label text-end">'+chargeList[i].chargeType+'</label><label class="col-md-6">'+chargeList[i].chargeCurrency+' '+currencyFormat(chargeList[i].chargeEquivalentAmount)+'</label>';
            }
        }
        tags += '</div>';

        $('.chargeClass').html(tags);
    }
</script>
