@include('_partials.header_content',['breadcrumb'=>['Pending task','Corporate Maintenance Detail']])


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
                    <h3 class="box-title">Corporate Detail</h3><br>
                </div>

                    <div class="box-body">
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">CIF</label>
                                <div class="col-md-6">
                                    <label id="cifid">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Customer Location</label>
                                <div class="col-md-6">
                                    <label id="customerLocation">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Corporate ID</label>
                                <div class="col-md-6">
                                    <label id="corporateId">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Corporate Name</label>
                                <div class="col-md-6">
                                    <label id="corporateName">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Address</label>
                                <div class="col-md-6">
                                    <label id="address1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="address2">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="address3">-</label>
                                </div>
                            </div>
                        </div>

                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Country</label>
                                <div class="col-md-6">
                                    <label id="countryName">-</label>
                                </div>
                            </div>
                        </div>

                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">State</label>
                                <div class="col-md-6">
                                    <label id="stateName">-</label>
                                </div>
                            </div>
                        </div>

                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Substate</label>
                                <div class="col-md-6">
                                    <label id="substateName">-</label>
                                </div>
                            </div>
                        </div>

                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">City</label>
                                <div class="col-md-6">
                                    <label id="cityName">-</label>
                                </div>
                            </div>
                        </div>

                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Post Code</label>
                                <div class="col-md-6">
                                    <label id="postcode">-</label>
                                </div>
                            </div>
                        </div>

                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Email Address</label>
                                <div class="col-md-6">
                                    <label id="email1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Alternate Email Address</label>
                                <div class="col-md-6">
                                    <label id="email2">-</label>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Phone No.</label>
                                <div class="col-md-3">
                                    <label id="phoneNo">-</label>
                                </div>
                                <label class="col-md-2 col-form-label text-end">Ext No.</label>
                                <div class="col-md-2">
                                    <label id="extNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Fax No.</label>
                                <div class="col-md-6">
                                    <label id="faxNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Servicing Branch</label>
                                <div class="col-md-6">
                                    <label id="servicingBranch">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Industry Segment</label>
                                <div class="col-md-6">
                                    <label id="industrySegmentName">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Business Unit</label>
                                <div class="col-md-6">
                                    <label id="businessUnitName">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Tax ID</label>
                                <div class="col-md-6">
                                    <label id="taxIdNo">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Handling Officer</label>
                                <div class="col-md-6">
                                    <label id="handlingOfficer">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Residential Status</label>
                                <div class="col-md-6">
                                    <label id="residentialStatus">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Citizenship</label>
                                <div class="col-md-6">
                                    <label id="citizenship">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row non-status">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Remitter Type</label>
                                <div class="col-md-6">
                                    <label id="remitterType">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-3 col-form-label text-end">Status</label>
                                <div class="col-md-6">
                                    <label id="status" class="state_normal">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row status">
                                <label class="col-md-3 col-form-label text-end">Reason</label>
                                <div class="col-md-6">
                                    <label id="inActiveReason" class="state_normal">-</label>
                                </div>
                            </div>
                        </div>

                    </div>


                <div class="box-header table-hidden non-status">
                    <h3 class="box-title">Contact Person</h3>
                </div>
                <div class="box-body table-hidden non-status">
                    <table id="list_cp" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                           style="border-collapse:collapse;">
                        <thead>
                        <tr>
                            <th align="left"><strong>No</strong></th>
                            <th align="left"><strong>Name</strong></th>
                            <th align="left"><strong>Phone</strong></th>
                            <th align="left"><strong>Mobile</strong></th>
                            <th align="left"><strong>Email Address</strong></th>
                            <th align="left"><strong>Fax No.</strong></th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <div class="box-header table-hidden non-status">
                    <h3 class="box-title">Services</h3>
                </div>
                <div class="box-body table-hidden non-status">
                    <div class="row">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label text-end">Service Setup</label>
                            <div class="col-md-6">
                                <label id="servicePackageName">-</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label text-end">Special Limit</label>
                            <div class="col-md-6">
                                <label id="specialLimitFlag">-</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label text-end">Special Fee</label>
                            <div class="col-md-6">
                                <label id="specialChargeFlag">-</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label text-end">Corporate SME</label>
                            <div class="col-md-6">
                                <label id="smeFlag">-</label>
                            </div>
                        </div>
                    </div>
                     <div class="row app-matrix">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label text-end">Default Approval Matrix</label>
                            <div class="col-md-6">
                                <label id="defAppMatrixFlag">-</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label text-end">Maximum Number of User</label>
                            <div class="col-md-6">
                                <label id="maxCorporateUser">-</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="box-header auth-device table-hidden non-status token-list">
                    <h3 class="box-title">Authentication Device</h3>
                </div>
                <div class="box-body auth-device table-hidden non-status token-list">
                    <div class="row">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label text-end">Authentication Device Type</label>
                            <div class="col-md-5">
                                <label id="tokenType">Hard Token</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label text-end"></label>
                        <div class="col-md-5">
                        <table id="list_token" class="table table-bordered table-striped dataTable" style="border-collapse:collapse;" border="2" cellpadding="2"
                               style="border-collapse:collapse;">
                            <thead>
                            <tr>
                                <th align="left"><strong>Serial Number</strong></th>
                            </tr>
                            </thead>
                        </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label text-end">Total Number of Token</label>
                            <div class="col-md-6">
                                <label id="tokenNum">0</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header table-hidden non-status">
                    <h3 class="box-title">Corporate Admin</h3>
                </div>
                <div class="box-body table-hidden non-status">

                    <table id="list_admin" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                           style="border-collapse:collapse;">
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
                    @include('form.reason')
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

        oTable_cp = $('#list_cp').DataTable({
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
                    width: "15%"
                },
                {
                    targets: 4,
                    sortable: true,
                    width: "30%"
                },
                {
                    targets: 5,
                    sortable: true,
                    width: "15%"
                }
            ]
        });

        oTable_token = $('#list_token').DataTable({
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
                    width: "100%"
                }
            ]
        });

        oTable_admin = $('#list_admin').DataTable({
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
                    width: "10%"
                },
                {
                    targets: 2,
                    sortable: true,
                    width: "10%"
                },
                {
                    targets: 3,
                    sortable: true,
                    width: "20%"
                },
                {
                    targets: 4,
                    sortable: true,
                    width: "10%"
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
                    var contactList = detail.contactList;
                    var adminList = detail.adminList;
                    var tokenList = detail.tokenList;
                    var spesial_limit = detail.specialLimitFlag;
                    var spesial_charge = detail.specialChargeFlag;
                    var isSME = detail.smeFlag;
                    var isDefAppMatrix = detail.defAppMatrixFlag;

                    if(detail.action=="CREATE"){
                        $('.app-matrix').show();
                    }else{
                        $('.app-matrix').hide();
                    }


                    if(detail.action=="UPDATE_STATUS"){
                        $('.non-status').hide();
                        $('.status').show();
                        $('#activity_text').text("UPDATE STATUS");
                    }else{
                        $('.non-status').show();
                        $('.status').hide();
                    }
                    if(spesial_limit=='Y'){
                        spesial_limit='Yes'
                    }
                    if(spesial_limit=='N'){
                        spesial_limit='No'
                    }
                    if(spesial_charge=='Y'){
                        spesial_charge='Yes'
                    }
                    if(spesial_charge=='N'){
                        spesial_charge='No'
                    }


                         $('#list_admin').show();


                    if(isSME=='Y'){
                        isSME='Yes'
                    }
                    if(isSME=='N'){
                        isSME='No'
                    }

                    if(isDefAppMatrix=='Y'){
                        isDefAppMatrix='Yes'
                    }
                    if(isDefAppMatrix=='N'){
                        isDefAppMatrix='No'
                    }



                    $('#cifid').text(detail.cifId);
                    $('#customerLocation').text(detail.customerLocation);
                    $('#corporateId').text(detail.corporateId);
                    $('#corporateName').text(detail.name);
                    $('#address1').text(detail.address1);
                    $('#address2').text(detail.address2);
                    $('#address3').text(detail.address3);
                    $('#postcode').text(detail.postName);
                    $('#cityName').text(detail.cityName);
                    $('#substateName').text(detail.substateName);
                    $('#stateName').text(detail.stateName);
                    $('#countryName').text(detail.countryName);
                    $('#email1').text(detail.email1);
                    $('#email2').text(detail.email2);
                    $('#phoneNo').text(detail.phoneNo);
                    $('#extNo').text(detail.extNo);
                    $('#faxNo').text(detail.faxNo);
                    $('#servicingBranch').text(detail.branchName);
                    $('#industrySegmentName').text(detail.industrySegmentName);
                    $('#businessUnitName').text(detail.businessUnitName);
                    $('#taxIdNo').text(detail.taxIdNo);
                    $('#maxCorporateUser').text(detail.maxCorporateUser);
                    $('#servicePackageName').text(detail.servicePackageName);
                    $('#specialLimitFlag').text(spesial_limit);
                    $('#specialChargeFlag').text(spesial_charge);
                    $('#smeFlag').text(isSME);
                    $('#defAppMatrixFlag').text(isDefAppMatrix);
                    $('#handlingOfficer').text(detail.handlingOfficerCode+' - '+detail.handlingOfficerName);
                    $('#residentialStatus').text(detail.isResidenceText);
                    $('#citizenship').text(detail.isCitizenText);
                    $('#remitterType').text(detail.isCategoryText);
                    $('#status').text(detail.inactiveFlag == 'N' ? 'Active' : detail.inactiveFlag == 'Y' ? 'In Active' : detail.inactiveFlag);
                    //$('#inActiveFlag').val(detail.inactiveFlag).trigger('change');
                    if(detail.inactiveReason){
                        $('#inActiveReason').text(detail.inactiveReason);
                    }
                    oTable_cp.clear();
                    if(contactList){
                    var cp_count = 1;
                    $.each(contactList, function (idx, obj){
                        oTable_cp.row.add([
                            cp_count,
                            obj.name,
                            obj.phoneNo,
                            obj.mobileNo,
                            obj.email,
                            obj.faxNo
                        ]).draw(true);
                        cp_count++;
                    });
                    }

                    oTable_token.clear();
                    if(tokenList) {
                        $.each(tokenList, function (idx, obj) {
                            oTable_token.row.add([
                                obj
                            ]).draw(true);

                        });
                        tokenCount();
                    }else{
                     $('.token-list').hide();
                    }
                    if(adminList){
                    oTable_admin.clear();
                    $.each(adminList, function (idx, obj){
                        oTable_admin.row.add([
                            obj.role,
                            obj.userId,
                            obj.name,
                            obj.email,
                            obj.mobileNo
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
            complete: function(data) {

            }
        });
    }

    function tokenCount(){
        if(oTable_token !== undefined)
            var token_count = oTable_token.data().count();
        $('#tokenNum').text(token_count);
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
                $(window).scrollTop(0);
                if (result.status=="200") {
                    flash('success', result.message + '<br>' + result.dateTimeInfo);
                    $('#approve').hide();
                    $('#reject').hide();
                    $('#save_screen').show();
                    $('#back').html('{{trans('form.done')}}');
                    flash('success', '{{trans('form.pending_success')}}');
                    $('#approve').prop('disabled', false);
                    $('#reject').prop('disabled', false);
                    $('#rejectSubmit').prop('disabled',false);
                    $('#rejectSubmit').hide();
                    $("#reason_text").hide();
                    $("#reason_view").show();
                    //$(".state_reason").hide();
                    $('.state_view').show();
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
