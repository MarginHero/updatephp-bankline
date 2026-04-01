				<div class="box-header">
                    <h3 class="box-title">Bank Detail</h3><br>
                </div>

                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Organization Type</label>
                                        <div class="col-md-6">
                                            <label id="organization">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Bank Code</label>
                                        <div class="col-md-6">
                                            <label id="code_1">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Bank Name</label>
                                        <div class="col-md-6">
                                            <label id="name">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Department</label>
                                        <div class="col-md-6">
                                            <label id="department">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Sub Department</label>
                                        <div class="col-md-6">
                                            <label id="subDepartment">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Street Name</label>
                                        <div class="col-md-6">
                                            <label id="streetName">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Building Number</label>
                                        <div class="col-md-6">
                                            <label id="buildingNumber">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Building Name</label>
                                        <div class="col-md-6">
                                            <label id="buildingName">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Floor</label>
                                        <div class="col-md-6">
                                            <label id="floor">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Post Box</label>
                                        <div class="col-md-6">
                                            <label id="postBox">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Post Code</label>
                                        <div class="col-md-6">
                                            <label id="postCode">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Room</label>
                                        <div class="col-md-6">
                                            <label id="room">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Town Name</label>
                                        <div class="col-md-6">
                                            <label id="townName">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Town Location Name</label>
                                        <div class="col-md-6">
                                            <label id="townLocationName">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">District Name</label>
                                        <div class="col-md-6">
                                            <label id="districtName">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Country Sub Division</label>
                                        <div class="col-md-6">
                                            <label id="countrySubDivision">-</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 row">
                                        <label class="col-md-2 col-form-label text-end">Country</label>
                                        <div class="col-md-6">
                                            <label id="country">-</label>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>

<script>
    var oTable;

    $(document).ready(function () {       
		getDetail('MNU_GPCASH_LOG_ACTV');
    });

    function getDetail(id){
        var pendingTaskId_id= $('#pendingTaskId').val();
        var url_action= 'detailPendingTask';
         var value ={
            pendingTaskId:pendingTaskId_id,
            currentPage: "1",
            pageSize: "20",
            orderBy: {"code": "ASC"}
        };
        var action = 'DETAIL';
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : id,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {

                var result = JSON.parse(data);
                 if (result.status=="200") {
                    var detail = result.details;
                     if(detail.internationalBankOrganizationName !== "")
                        $('#organization').text(detail.internationalBankOrganizationName);
                     
                     if(detail.code !== "")
                        $('#code_1').text(detail.code);
                    
                     if(detail.name !== "")
                        $('#name').text(detail.name);
                    
                     if(detail.department !== "")
                        $('#department').text(detail.department);
                    
                     if(detail.subDepartment !== "")
                        $('#subDepartment').text(detail.subDepartment);
                    
                     if(detail.streetName !== "")
                        $('#streetName').text(detail.streetName);

                     if(detail.buildingNumber !== "")
                        $('#buildingNumber').text(detail.buildingNumber);
                    
                     if(detail.buildingName !== "")
                        $('#buildingName').text(detail.buildingName);
                    
                     if(detail.floor !== "")
                        $('#floor').text(detail.floor);
                    
                     if(detail.postBox !== "")
                        $('#postBox').text(detail.postBox);
                    
                     if(detail.postCode !== "")
                        $('#postCode').text(detail.postCode);
                    
                     if(detail.room !== "")
                        $('#room').text(detail.room);
                    
                     if(detail.townName !== "")
                        $('#townName').text(detail.townName);
                    
                     if(detail.townLocationName !== "")
                        $('#townLocationName').text(detail.townLocationName);
                    
                     if(detail.districtName !== "")
                        $('#districtName').text(detail.districtName);
                    
                     if(detail.countrySubDivision !== "")
                        $('#countrySubDivision').text(detail.countrySubDivision);
                    
                     if(detail.countryName !== "")
                        $('#country').text(detail.countryName);
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

</script>