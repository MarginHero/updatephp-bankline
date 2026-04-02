@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),$type]])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
           <div class="box-header">
                     <h3 class="box-title">Bank Detail</h3>
                </div>
                <form id="form-area" class="form-horizontal form-area">
                <input type="hidden" id="code_edit" value=""/>
                <input type="hidden" id="type" value=""/>
                <input type="hidden" id="state" value=""/>
                <input type="hidden" id="submit_mode" value=""/>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Organization Type</label>
                                <div class="col-md-5">
                                    <div class="org_type state_edit">
                                        <select class="form-control bank-required"  data-error="This field is required." required></select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <label id="org_type_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end"><strong>Bank Code&ast;</strong></label>
                                <div class="col-md-5">
                                    <input type="text" id="code" name="code" class="form-control state_edit bank-required" autocomplete="off" value="" maxlength="11" data-error="This field is required." required>
                                    <div class="help-block with-errors"></div>
                                    <label id="code_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end"><strong>Bank Name&ast;</strong></label>
                                <div class="col-md-5">
                                    <input type="text" id="name" name="name" class="form-control state_edit bank-required" autocomplete="off" value="" maxlength="100" data-error="This field is required." required>
                                    <div class="help-block with-errors"></div>
                                    <label id="name_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Department</label>
                                <div class="col-md-5">
                                    <input type="text" id="department" name="department" class="form-control state_edit" autocomplete="off" value="" maxlength="70">
                                    <div class="help-block with-errors"></div>
                                    <label id="department_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Sub Department</label>
                                <div class="col-md-5">
                                    <input type="text" id="subDepartment" name="subDepartment" class="form-control state_edit" autocomplete="off" value="" maxlength="70">
                                    <div class="help-block with-errors"></div>
                                    <label id="subDepartment_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Street Name</label>
                                <div class="col-md-5">
                                    <input type="text" id="streetName" name="streetName" class="form-control state_edit" autocomplete="off" value="" maxlength="70">
                                    <div class="help-block with-errors"></div>
                                    <label id="streetName_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Building Number</label>
                                <div class="col-md-5">
                                    <input type="text" id="buildingNumber" name="buildingNumber" class="form-control state_edit" autocomplete="off" value="" maxlength="16">
                                    <div class="help-block with-errors"></div>
                                    <label id="buildingNumber_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Building Name</label>
                                <div class="col-md-5">
                                    <input type="text" id="buildingName" name="buildingName" class="form-control state_edit" autocomplete="off" value="" maxlength="70">
                                    <div class="help-block with-errors"></div>
                                    <label id="buildingName_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Floor</label>
                                <div class="col-md-5">
                                    <input type="text" id="floor" name="floor" class="form-control state_edit" autocomplete="off" value="" maxlength="70">
                                    <div class="help-block with-errors"></div>
                                    <label id="floor_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Post Box</label>
                                <div class="col-md-5">
                                    <input type="text" id="postBox" name="postBox" class="form-control state_edit" autocomplete="off" value="" maxlength="70">
                                    <div class="help-block with-errors"></div>
                                    <label id="postBox_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Post Code</label>
                                <div class="col-md-5">
                                    <input type="text" id="postCode" name="postCode" class="form-control state_edit" autocomplete="off" value="" maxlength="16">
                                    <div class="help-block with-errors"></div>
                                    <label id="postCode_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Room</label>
                                <div class="col-md-5">
                                    <input type="text" id="room" name="room" class="form-control state_edit" autocomplete="off" value="" maxlength="70">
                                    <div class="help-block with-errors"></div>
                                    <label id="room_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end"><strong>Town Name*</strong></label>
                                <div class="col-md-5">
                                    <input type="text" id="townName" name="townName" class="form-control state_edit bank-required" autocomplete="off" value="" maxlength="35" data-error="This field is required." required>
                                    <div class="help-block with-errors"></div>
                                    <label id="townName_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Town Location Name</label>
                                <div class="col-md-5">
                                    <input type="text" id="townLocationName" name="townLocationName" class="form-control state_edit" autocomplete="off" value="" maxlength="35">
                                    <div class="help-block with-errors"></div>
                                    <label id="townLocationName_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">District Name</label>
                                <div class="col-md-5">
                                    <input type="text" id="districtName" name="districtName" class="form-control state_edit" autocomplete="off" value="" maxlength="35">
                                    <div class="help-block with-errors"></div>
                                    <label id="districtName_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Country Sub Division</label>
                                <div class="col-md-5">
                                    <input type="text" id="countrySubDivision" name="countrySubDivision" class="form-control state_edit" autocomplete="off" value="" maxlength="35">
                                    <div class="help-block with-errors"></div>
                                    <label id="countrySubDivision_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end"><strong>Country&ast;</strong></label>
                                <div class="col-md-5">
                                    <div class="state_edit">
                                        <select id="country_list" class="form-control state_edit bank-required"  data-error="This field is required." required>
                                            <option></option>
                                        </select></div>
                                    <div class="help-block with-errors"></div>
                                    <label id="country_view" class="state_view"></label>
                                </div>
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
    var orgTypeOption;
    var countryOption="";
    var stateOption;
    var substateOption;
    var cityOption;
    var submit_data;
    var id = '{{ $service }}';
    var noRef;
    $(document).ready(function () {
        $('.table-hidden').hide();

        $(document).validator().on('#form-area','submit', function (e) {
            if (e.isDefaultPrevented()) {
                // handle the invalid form...
            } else {
                // everything looks good!

            }
        });


        getOrganizationType();
        stateEdit();

        // Add blur/change validation for bank-required fields
        $('.bank-required').on('blur change', function() {
            var $this = $(this);
            var $formGroup = $this.closest('.row');
            var $helpBlock = $formGroup.find('.help-block');

            if($this.val() === '' || $this.val() === null) {
                $formGroup.addClass('has-error');

                if($this.hasClass('select2-hidden-accessible')) {
                    $this.next('.select2-container').find('.select2-selection').css('border-color', '#a94442');
                } else {
                    $this.css('border-color', '#a94442');
                }

                $helpBlock.html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
            } else {
                $formGroup.removeClass('has-error');

                if($this.hasClass('select2-hidden-accessible')) {
                    $this.next('.select2-container').find('.select2-selection').css('border-color', '');
                } else {
                    $this.css('border-color', '');
                }

                $helpBlock.html('').hide();
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

        function submitData(){
            var value = {
                "code": $('#code').val(),
                "name": $('#name').val(),
                "countryCode": $('#country_list').val(),
                "countryName": $("#country_list option:selected").text(),
                "internationalBankOrganizationCode": $('#orgType_list').val(),
                "internationalBankOrganizationName": $("#orgType_list option:selected").text(),
                "organizationUnitName": $('#branch').val(),

                "department": $('#department').val(),
                "subDepartment": $('#subDepartment').val(),
                "streetName": $('#streetName').val(),
                "buildingNumber": $('#buildingNumber').val(),
                "buildingName": $('#buildingName').val(),
                "floor": $('#floor').val(),
                "postBox": $('#postBox').val(),
                "postCode": $('#postCode').val(),
                "room": $('#room').val(),
                "townName": $('#townName').val(),
                "townLocationName": $('#townLocationName').val(),
                "districtName": $('#districtName').val(),
                "countrySubDivision": $('#countrySubDivision').val(),
            };
            var url_action = "";
            if ($('#type').val() == 'add'){
                url_action = "add";
            } else {
                url_action = "edit";
            }

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

            $('#form-area').validator('validate');

            var hasEmptyField = false;
            $('.bank-required').each(function() {
                var $this = $(this);
                var $formGroup = $this.closest('.row');
                var $helpBlock = $formGroup.find('.help-block');

                if($this.val() === '' || $this.val() === null) {
                    hasEmptyField = true;
                    $formGroup.addClass('has-error');

                    // Different styling for select2 vs regular inputs
                    if($this.hasClass('select2-hidden-accessible')) {
                        $this.next('.select2-container').find('.select2-selection').css('border-color', '#a94442');
                    } else {
                        $this.css('border-color', '#a94442');
                    }

                    $helpBlock.html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
                } else {
                    $formGroup.removeClass('has-error');

                    if($this.hasClass('select2-hidden-accessible')) {
                        $this.next('.select2-container').find('.select2-selection').css('border-color', '');
                    } else {
                        $this.css('border-color', '');
                    }

                    $helpBlock.html('').hide();
                }
            });

            if(hasEmptyField){
                return;
            }

            setTimeout(function(){
                if($('#form-area').validator('validate').has('.has-error').length==0){
                    $('#submit_type').val('submit');
                    stateView();
                }
            });
        });

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
        });


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



$('.numeric').numeric({
            allowSpace: false,
            allow : ''
        });

        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',.-+()/'
        });

 $('#code').alphanum({
            allowSpace: false
         });

    });
    function getOrganizationType() {

        var url_action = 'searchInternationalBankOrganizationForDroplist';
        var action = 'SEARCH';
        var menu = 'MNU_GPCASH_MT_INT_BANK';
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
                    orgTypeOption = '<select id="orgType_list" class="form-control state_edit bank-required"  data-error="This field is required." required>';
                    orgTypeOption += '<option value="" selected="selected">--Select Organization Type--</option>';
                    $.each(result.result, function (idx, obj) {
                        orgTypeOption += '<option value="' + obj.code + '">' + obj.name + '</option>';

                    });
                    orgTypeOption += '</select>';
                    orgTypeOption += '<div class="help-block with-errors"></div>';
                } else {
                    flash('warning', result.message);
                }


            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {
                $('.org_type').html(orgTypeOption);
                $('#orgType_list').select2();
                $('#orgType_list').on('blur change', function() {
                    var $this = $(this);
                    var $formGroup = $this.closest('.row');
                    var $helpBlock = $formGroup.find('.help-block');

                    if($this.val() === '' || $this.val() === null) {
                        $formGroup.addClass('has-error');
                        if($this.hasClass('select2-hidden-accessible')) {
                            $this.next('.select2-container').find('.select2-selection').css('border-color', '#a94442');
                        } else {
                            $this.css('border-color', '#a94442');
                        }
                        $helpBlock.html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
                    } else {
                        $formGroup.removeClass('has-error');
                        if($this.hasClass('select2-hidden-accessible')) {
                            $this.next('.select2-container').find('.select2-selection').css('border-color', '');
                        } else {
                            $this.css('border-color', '');
                        }
                        $helpBlock.html('').hide();
                    }
                });
            }
        });
    }

    function getInternationalBankEdit(code_id){

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

                    getCountryDropList(detail.countryCode);
                    $('#state_list').val(detail.stateCode);
                    $('#substate_list').val(detail.substateCode);
                     $('#city_list').val(detail.cityCode);
                    /*getStateDroplist(detail.countryCode,detail.stateCode);
                    getSubstateDroplist(detail.stateCode,detail.substateCode);
                    getCityDroplist(detail.substateCode,detail.cityCode);*/
                    $('#orgType_list').val(detail.internationalBankOrganizationCode).trigger('change');
                    $('#code').val(detail.code);
                    // $('#code').attr('readonly', true);
                    $('#code').prop('disabled',true)
                    $('#name').val(detail.name);

                    $('#department').val(detail.department);
                    $('#subDepartment').val(detail.subDepartment);
                    $('#streetName').val(detail.streetName);
                    $('#buildingNumber').val(detail.buildingNumber);
                    $('#buildingName').val(detail.buildingName);
                    $('#floor').val(detail.floor);
                    $('#postBox').val(detail.postBox);
                    $('#postCode').val(detail.postCode);
                    $('#room').val(detail.room);
                    $('#townName').val(detail.townName);
                    $('#townLocationName').val(detail.townLocationName);
                    $('#districtName').val(detail.districtName);
                    $('#countrySubDivision').val(detail.countrySubDivision);
                    $('#country').val(detail.country);


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

    function getDroplist(currentDroplist){
            if(currentDroplist == "country"){
                    getStateDroplist($('#country_list').val(),$('#state_list').val());
                    /*getSubstateDroplist($('#state_list').val(),$('#substate_list').val());
                    getCityDroplist($('#substate_list').val(),$('#city_list').val());*/

            }

            if(currentDroplist == "state" ){
                    getSubstateDroplist($('#state_list').val(),$('#substate_list').val());
                    getCityDroplist($('#substate').val(),$('#city').val());
            }

            if(currentDroplist == "substate"){
                    getCityDroplist($('#substate_list').val(),$('#city_list').val());
            }

        }

    function getCountryDropList(countryCode) {

        var url_action = 'searchCountryForDroplist';
        var action = 'SEARCH';
        var menu = 'MNU_GPCASH_MT_INT_BANK';
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
                   /* countryOption = '<select id="country_list" class="form-control state_edit" onchange="getDroplist("country")" required>';*/
                    countryOption += '<option value=""></option>';
                    $.each(result.result, function (idx, obj) {
                        countryOption += '<option value="' + obj.code + '">' + obj.name + '</option>';

                    });
                    /*countryOption += '</select>';*/
                    /*countryOption += '<div class="help-block with-errors"></div>';*/
                    $('#country_list').html(countryOption);
                    $('#country_list').val(countryCode);
                    $('#country_list').select2({ width: '100%',placeholder: 'Select Country' });

                    // Attach validation handler
                    $('#country_list').on('change', function() {
                        var $this = $(this);
                        var $formGroup = $this.closest('.row');
                        var $helpBlock = $formGroup.find('.help-block');

                        if($this.val() === '' || $this.val() === null) {
                            $formGroup.addClass('has-error');
                            $this.next('.select2-container').find('.select2-selection').css('border-color', '#a94442');
                            $helpBlock.html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
                        } else {
                            $formGroup.removeClass('has-error');
                            $this.next('.select2-container').find('.select2-selection').css('border-color', '');
                            $helpBlock.html('').hide();
                        }
                    });
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

    function getStateDroplist(country_code, stateCode) {

         var value = {
            code: "",
            name: "",
            modelCode: "COM_MT_STATE",
            parentProperty:"country",
            parentPropertySearchCode:country_code
        };
        var url_action = 'searchModelForDroplist';
        var action = 'SEARCH';
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            async:false,
            data: {
                value : value,
                menu : 'MNU_GPCASH_MT_PARAMETER',
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    stateOption = '<option value=""></option>';
                    $.each(result.result, function (idx, obj) {
                        stateOption += '<option value="' + obj.code + '">' + obj.name + '</option>';
                    });
                    $('#state_list').html(stateOption);
                    $('#state_list').val(stateCode);
                    $('#state_list').select2({ width: '100%',placeholder: 'Select State' });
                } else {
                    flash('warning', result.message);
                }



            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                app.setView(id);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });
    }

     function getSubstateDroplist(state_code,substateCode) {
        var value = {
            code: "",
            name: "",
            modelCode: "COM_MT_SUBSTATE",
            parentProperty:"state",
            parentPropertySearchCode:state_code
        };

        var url_action = 'searchModelForDroplist';
        var action = 'SEARCH';
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            async:false,
            data: {
                value : value,
                menu : 'MNU_GPCASH_MT_PARAMETER',
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    substateOption = '<option value=""></option>';
                    $.each(result.result, function (idx, obj) {
                        substateOption += '<option value="' + obj.code + '">' + obj.name + '</option>';
                    });
                    $('#substate_list').html(substateOption);
                    $('#substate_list').val(substateCode);
                    $('#substate_list').select2({ width: '100%',placeholder: 'Select Substate' });
                } else {
                    flash('warning', result.message);
                }



            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                app.setView(id);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });
    }

    function getCityDroplist(substate_code,cityCode) {
        var value = {
            code: "",
            name: "",
            modelCode: "COM_MT_CITY",
            parentProperty:"substate",
            parentPropertySearchCode:substate_code
        };
        var url_action = 'searchModelForDroplist';
        var action = 'SEARCH';
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            async:false,
            data: {
                value : value,
                menu : 'MNU_GPCASH_MT_PARAMETER',
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    cityOption = '<option value=""></option>';
                    $.each(result.result, function (idx, obj) {
                        cityOption += '<option value="' + obj.code + '">' + obj.name + '</option>';
                    });
                    $('#city_list').html(cityOption);
                    $('#city_list').val(cityCode);
                    $('#city_list').select2({ width: '100%',placeholder: 'Select City' });
                } else {
                    flash('warning', result.message);
                }



            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                app.setView(id);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });
    }

        function stateEdit() {

            // $('.parent_menu_name').show();

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

        function stateView() {
            $('#state').val('view');
            // $('.parent_menu_name').show();

            $('input:checkbox').prop('disabled','disabled');
            var code = ($('#code').val() == '' ? '-' : $('#code').val());
            var name = ($('#name').val() == '' ? '-' : $('#name').val());
            var branch = ($('#branch').val() == '' ? '-' : $('#branch').val());
            //var substate = ($('#substate').val() == '' ? '-' : $('#substate').val());
            //var state = ($('#state_setup').val() == '' ? '-' : $('#state_setup').val());
            var address1 = ($('#address1').val() == '' ? '-' : $('#address1').val());
            var address2 = ($('#address2').val() == '' ? '-' : $('#address2').val());
            var address3 = ($('#address3').val() == '' ? '-' : $('#address3').val());
            //var city = ($('#city_setup').val() == '' ? '-' : $('#city_setup').val());
            var orgType = ($('#orgType_list option:selected').text() == '' ? '-' : $('#orgType_list option:selected').text());
            var country = ($('#country_list option:selected').text() == '' ? '-' : $('#country_list option:selected').text());

            var state = ($('#state_list').val() == '' ? '-' : $('#state_list').val());
            var substate = ($('#substate_list').val() == '' ? '-' : $('#substate_list').val());
            var city = ($('#city_list').val() == '' ? '-' : $('#city_list').val());
            var department = ($('#department').val() == '' ? '-' : $('#department').val());
            var subDepartment = ($('#subDepartment').val() == '' ? '-' : $('#subDepartment').val());
            var streetName = ($('#streetName').val() == '' ? '-' : $('#streetName').val());
            var buildingNumber = ($('#buildingNumber').val() == '' ? '-' : $('#buildingNumber').val());
            var buildingName = ($('#buildingName').val() == '' ? '-' : $('#buildingName').val());
            var floor = ($('#floor').val() == '' ? '-' : $('#floor').val());
            var postBox = ($('#postBox').val() == '' ? '-' : $('#postBox').val());
            var postCode = ($('#postCode').val() == '' ? '-' : $('#postCode').val());
            var room = ($('#room').val() == '' ? '-' : $('#room').val());
            var townName = ($('#townName').val() == '' ? '-' : $('#townName').val());
            var townLocationName = ($('#townLocationName').val() == '' ? '-' : $('#townLocationName').val());
            var districtName = ($('#districtName').val() == '' ? '-' : $('#districtName').val());
            var countrySubDivision = ($('#countrySubDivision').val() == '' ? '-' : $('#countrySubDivision').val());

/*            var state = ($('#state_list option:selected').text() == '' ? '-' : $('#state_list option:selected').text());
            var substate = ($('#substate_list option:selected').text() == '' ? '-' : $('#substate_list option:selected').text());
            var city = ($('#city_list option:selected').text() == '' ? '-' : $('#city_list option:selected').text());*/

            $('#preview').text('Preview');
            $('.state_edit').hide();
            $('.state_view').show();
            $('#code_view').text(code);
            $('#name_view').text(name);
            $('#branch_view').text(branch);
            $('#substate_view').text(substate);
            $('#state_setup_view').text(state);
            $('#address1_view').text(address1);
            $('#address2_view').text(address2);
            $('#address3_view').text(address3);
            $('#city_setup_view').text(city);
            $('#country_view').text(country);
            $('#org_type_view').text(orgType);
            $('#save_screen').hide();
            $('.help-block').hide();
            $('#done').hide();
            $('#next_user').hide();
            $('#department_view').text(department);
            $('#subDepartment_view').text(subDepartment);
            $('#streetName_view').text(streetName);
            $('#buildingNumber_view').text(buildingNumber);
            $('#buildingName_view').text(buildingName);
            $('#floor_view').text(floor);
            $('#postBox_view').text(postBox);
            $('#postCode_view').text(postCode);
            $('#room_view').text(room);
            $('#townName_view').text(townName);
            $('#townLocationName_view').text(townLocationName);
            $('#districtName_view').text(districtName);
            $('#countrySubDivision_view').text(countrySubDivision);
            $('#country_view').text(country);
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


</script>
