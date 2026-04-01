@include('_partials.header_content',['breadcrumb'=>['International Bank','detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="code" value=""/>
            <div class="box">


                <div class="box-header">
                    <h3 class="box-title">Bank Detail</h3><br>
                </div>
                <form class="form-horizontal">
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
                <div class="box-footer">

                                <div class="state_view">
                                    <div class="float-left">
                                        <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                                        <button type="button" id="save_screen" name="save_screen" class="btn btn-default" style="display:none" onclick="save_pdf();">@lang('form.save_pdf')</button>
                                    </div>

                                    <div class="float-right">
                                        <button type="button" id="delete" name="delete" class="btn btn-danger">@lang('form.delete')</button>
                                        <button type="button" id="edit" name="edit" class="btn btn-primary">@lang('form.edit')</button>
                                        <button type="button" id="next_user" name="next_user" class="btn btn-info" style="display:none">@lang('form.next_user')</button>
                                         <button type="button" id="done" name="done" class="btn btn-primary done" style="display:none">@lang('form.done')</button>

                                    </div>



                                </div>


                        </div>
                </form>
                    @include('_partials.next_user')
            </div>
        </div>
    </div>

</section>

<script>
    var oTable;
    var id = '{{ $service }}';
    var noRef;
    $(document).ready(function () {
        $('.state_delete').hide();


        $('#delete').on('click', function () {
           // $('.state_view').hide();
           // $('.state_delete').show();
            $(this).prop('disabled',true);
            $.confirm({
                title: '{{trans('form.delete')}}',
                content: '{{trans('form.confirm_delete')}}',
                buttons: {

                    cancel: {
                        text: '{{trans('form.cancel')}}',
                        btnClass: 'btn-default',
                        action: function(){
                            $('#delete').prop('disabled',false);
                        }
                    },
                    confirm: {
                        text: '{{trans('form.delete')}}',
                        btnClass: 'btn-primary',
                        action: function(){
                            submit_delete();
                        }
                    },

                }
            });
        });

        function submit_delete () {

            var value = {
                "code": $('#code').val(),
                "name": $('#name').text(),
                "countryName": $("#country").text(),
                "internationalBankOrganizationName": $("#organization").text(),
                "organizationUnitName": $('#branch').text(),
                "cityName": $("#city").text(),
                "department": $('#department').text(),
                "subDepartment": $('#subDepartment').text(),
                "streetName": $('#streetName').text(),
                "buildingNumber": $('#buildingNumber').text(),
                "buildingName": $('#buildingName').text(),
                "floor": $('#floor').text(),
                "postBox": $('#postBox').text(),
                "postCode": $('#postCode').text(),
                "room": $('#room').text(),
                "townName": $('#townName').text(),
                "townLocationName": $('#townLocationName').text(),
                "districtName": $('#districtName').text(),
                "countrySubDivision": $('#countrySubDivision').text(),
            };
            $.ajax({
                url: 'delete',
                method: 'post',
                data: {"_token": "{{ csrf_token() }}", menu: id, value: value,url_action:'submitDelete'},
                success: function (data) {
                    $('#delete').prop('disabled',false);
                    var result = JSON.parse(data);
                    if (result.status=="200") {
                        noRef = result.referenceNo;
                        flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                        $('#submit_view').hide();
                        $('#save_screen').show();
                        $('#next_user').show();
                        $('#done').show();
                        $('#delete').hide();
                        $('#edit').hide();
                        $('#back').hide();
                    } else {
                        $('#delete').prop('disabled',false);
                        flash('warning', result.message);
                    }

                }, error: function (xhr, ajaxOptions, thrownError) {
                    $('#delete').prop('disabled',false);
                    flash('warning', 'Form Submit Failed');
                   console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
                }
            });
        }



        $('#back_delete').on('click', function () {
            $('.state_delete').hide();
            $('.state_view').show();
        });

        $('.back').on('click', function () {
           var res = app.setView(id,'landing');
        });

        $('.done').on('click', function () {
           var res = app.setView(id,'landing');
        });

        $('#edit').on('click', function () {
            var code = $('#code_1').text();
            var res = app.setView(id,'add');
            if(res=='done'){
                $('#type').val('edit');
                $('#breadcrumb-action').html('edit');
                $('#code_edit').val(code);
                getInternationalBankEdit(code);
            }

        });

    });

    function getMatrix(){
        var code_id= $('#code').val();
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

                    $('#organization').text(detail.internationalBankOrganizationName);
                    $('#code_1').text(detail.code);
                    $('#name').text(detail.name);
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
                $('.table-hidden').show();

            }
        });
    }


</script>
