
@include('_partials.header_content',['breadcrumb'=>[ str_replace('-',' ',$menu),$type ]])

<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div id="print" class="box">

                <form id="form-area" class="form-horizontal form-area">
                    <input type="hidden" id="code_edit" value=""/>
                    <input type="hidden" id="type" value=""/>
                    <input type="hidden" id="state" value=""/>
                    <div id="exTab" class="">

                        <ul class="nav nav-tabs state_edit" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="detail-tab" data-bs-toggle="tab" data-bs-target="#tab_detail" type="button" role="tab" aria-controls="tab_detail" aria-selected="true">User Detail</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="role-tab" data-bs-toggle="tab" data-bs-target="#tab_role" type="button" role="tab" aria-controls="tab_role" aria-selected="false">User Role</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab_detail" role="tabpanel" aria-labelledby="detail-tab" style="display:block;">
                                <div class="box-header state_view" style="display:none;">
                                    <h3 class="box-title">User Detail</h3><br>
                                </div>
                                <div class="box-body">
                                        <div class="mb-3 row form-group">
                                            <label class="col-md-3 col-form-label text-end"><strong>User Id&ast;</strong></label>
                                            <div class="col-md-6">
                                                <input type="text" id="code" name="code" class="form-control state_edit detail" autocomplete="off" value="" maxlength="40" data-error="This field is required." required>
                                                <div class="help-block with-errors"></div>
                                                <label id="code_view" class="state_view">-</label>

                                            </div>
                                        </div>

                                        <div class="mb-3 row form-group">
                                            <label class="col-md-3 col-form-label text-end"><strong>User Name&ast;</strong></label>
                                            <div class="col-md-6">
                                                <input type="text" id="name" name="name" class="form-control state_edit detail" autocomplete="off" value="" maxlength="100" data-error="This field is required." required>
                                                <div class="help-block with-errors"></div>
                                                <label id="name_view" class="state_view">-</label>
                                            </div>
                                        </div>

                                        <div class="mb-3 row form-group">
                                            <label class="col-md-3 col-form-label text-end"><strong>Unit&ast;</strong></label>
                                            <div class="col-md-6">
                                                <div class="state_edit">
                                                <select class="form-control detail" id="branchCode" data-error="This field is required." required>
                                                    <option></option>
                                                </select>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                                <label id="branchCode_view" class="state_view">-</label>

                                            </div>
                                        </div>

                                        <div class="mb-3 row form-group">
                                            <label class="col-md-3 col-form-label text-end"><strong>Email Address&ast;</strong></label>
                                            <div class="col-md-6">
                                                <input type="email" id="email" name="email" class="form-control state_edit detail" autocomplete="off" value="" maxlength="100" data-error="This field is required." required>
                                                <div class="help-block with-errors"></div>
                                                <label id="email_view" class="state_view">-</label>
                                            </div>
                                        </div>


                                    <div class="mb-3 row form-group">
                                        <label class="col-md-3 col-form-label text-end"><strong>Active From&ast;</strong></label>
                                        <div class="col-md-6">
                                            <div class="row g-2 align-items-center">
                                                <div class="col-auto">
                                                    <div class="input-group state_edit" style="position: relative;">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                        <input type="text" id="activeFrom" name="activeFrom" class="form-control datepicker detail numeric" autocomplete="off" value="" data-error="This field is required." required>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                    <label id="activeFrom_view" class="state_view" style="display: inline-block; padding-top: 7px; margin-bottom: 0;">-</label>
                                                </div>
                                                <div class="col-auto mx-2">
                                                    <label class="col-form-label"><strong>to</strong></label>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="input-group state_edit" style="position: relative;">
                                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                        <input type="text" id="activeTo" name="activeTo" class="form-control datepicker numeric" autocomplete="off" value="">            
                                                    </div>
                                                    <label id="activeTo_view" class="state_view" style="display: inline-block; padding-top: 7px; margin-bottom: 0;">-</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="mb-3 row form-group">
                                            <label class="col-md-3 col-form-label text-end">Password Never Expired</label>
                                            <div class="col-md-6">
                                                <div class="state_edit">
                                                <input type="checkbox" id="isPwdNeverExpired" name="isPwdNeverExpired" value="Yes"/>
                                                </div>
                                                <label id="isPwdNeverExpired_view" class="state_view">-</label>

                                            </div>
                                        </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab_role" role="tabpanel" aria-labelledby="role-tab" style="display:none;">
                                <div class="container-fluid box-body">
                                    <div class="col-xs-12">
                                        <div class="mb-3 row form-group">
                                            <label class="col-md-2 col-form-label text-end">Role</label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="roleCode">

                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="button" id="addrole" name="addrole" class="btn wire-btn-primary">Add to List</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="role_list" class="row">
                                        <div class="role_list">
                                        <div class="box-header state_view" style="display:none;">
                                            <h3 class="box-title">User Role</h3><br>
                                        </div>
                                        <div class="col-xs-12">
                                            <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                                   style="border-collapse:collapse;">
                                                <thead>
                                                <tr>
                                                    <th><strong>Role</strong></th>
                                                    <th><strong>Description</strong></th>
                                                    <th><strong>Action</strong></th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
                <div class="state_view">

                        <div class="box-header">
                            <h3 class="box-title">User Role</h3><br>
                        </div>
                        <div class="box-body col-xs-12">
                            <table id="list_view" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                   style="border-collapse:collapse;">
                                <thead>
                                <tr>
                                    <th><strong>Role</strong></th>
                                    <th><strong>Description</strong></th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                </div>
                <div class="row table-hidden">

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
            </div>
            </div>
        </div>
</section>

<script>
    var oTable;
    var oTable_view;
    var oTable_next_user;
    var unitOption;
    var roleOption;
    var id = '{{ $service }}';
    var noRef;

    function hideVueWarning() {
        $("#vue-warning").hide();
        $("#vue-warning").find('p').html('');
        if (typeof child !== 'undefined' && child.alert) {
            child.alert.status = '';
            child.alert.msg = '';
        }
    }

    function hideParent(element) {
        $(element).closest('.alert').hide();
        if (typeof child !== 'undefined' && child.alert) {
            child.alert.status = '';
            child.alert.msg = '';
        }
    }

    $(document).ready(function () {

        var submit_data;
        $('#isPwdNeverExpired').lc_switch();
        /*$('#activeTo').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id'
        });*/
        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id'
        });

        $('.input-group-addon').on('click', function() {
            $(this).siblings('.datepicker').focus();
        });

        $('#form-area').validator({
            delay: 100,
            html: true,
            disable: false,
            focus: false,
            custom: {},
            errors: {
                match: 'Does not match',
                minlength: 'Not long enough'
            },
            feedback: {
                success: 'glyphicon-ok',
                error: 'glyphicon-remove'
            }
        }).on('submit', function (e) {
          if (e.isDefaultPrevented()) {
            // handle the invalid form...
          } else {
            // everything looks good!
            //console.log('valid')
          }
        });

        $('.detail[required]').on('blur change', function() {
            var $this = $(this);
            var $formGroup = $this.closest('.row');
            var $helpBlock = $formGroup.find('.help-block');

            if($this.val() === '') {
                $formGroup.addClass('has-error');
                $this.css('border-color', '#a94442');
                $helpBlock.html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
            } else {
                $formGroup.removeClass('has-error');
                $this.css('border-color', '');
                $helpBlock.html('').hide();
            }
        });

        $('#branchCode').on('change', function() {
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

        $('#email').on('blur change', function() {
            var $this = $(this);
            var $formGroup = $this.closest('.row');
            var $helpBlock = $formGroup.find('.help-block');
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if($this.val() === '') {
                $formGroup.addClass('has-error');
                $this.css('border-color', '#a94442');
                $helpBlock.html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
            } else if(!emailPattern.test($this.val())) {
                $formGroup.addClass('has-error');
                $this.css('border-color', '#a94442');
                $helpBlock.html('<ul class="list-unstyled"><li style="color:#a94442;">Please enter a valid email address.</li></ul>').show();
            } else {
                $formGroup.removeClass('has-error');
                $this.css('border-color', '');
                $helpBlock.html('').hide();
            }
        });

        $('#activeFrom').on('blur change', function() {
            var $this = $(this);
            var $formGroup = $this.closest('.row');
            var $helpBlock = $formGroup.find('.help-block');

            if($this.val() === '') {
                $formGroup.addClass('has-error');
                $this.css('border-color', '#a94442');
                $helpBlock.html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
            } else {
                $formGroup.removeClass('has-error');
                $this.css('border-color', '');
                $helpBlock.html('').hide();
            }
        });

        oTable = $('#list').DataTable({
            "paging": false,
            "ordering": false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth": false,
            "ScrollX": '100%',
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    sortable: true,
                    width: "30%",
                    targets: 0
                },
                {
                    targets: 1,
                    sortable: true,
                    width: "60%"
                },
                {
                    targets: 2,
                    sortable: true,
                    width: "10%"
                }
            ]
        });

        oTable_view = $('#list_view').DataTable({
            "paging": false,
            "ordering": false,
            "info": false,
            "destroy": true,

            "searching": false,
            "autoWidth": false,
            "ScrollX": '100%',
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    sortable: true,
                    width: "33%",
                    targets: 0
                },
                {
                    targets: 1,
                    sortable: true,
                    width: "66%"
                }
            ]
        });

        oTable_next_user = $('#nextUserList').DataTable({
            "paging": false,
            "ordering": false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth": false,
            "ScrollX": '100%',
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    sortable: true,
                    width: "50%",
                    targets: 0
                },
                {
                    targets: 1,
                    sortable: true,
                    width: "50%"
                }
            ]
        });

        stateEdit();

        $('#detail-tab, #role-tab').on('click', function (e) {
            e.preventDefault();

            var target = $(this).attr('data-bs-target');

            $('.nav-tabs button').removeClass('active').attr('aria-selected', 'false');
            $(this).addClass('active').attr('aria-selected', 'true');

            $('.tab-pane').hide().removeClass('show active');
            $(target).addClass('show active').show();
        });


        $('#submit_view').on('click', function () {
            $(this).prop('disabled',true);
            var content ='';
            if ($('#type').val() == 'add'){
                content='{{trans('form.confirm_add_user',['user'=>'$user'])}}';
                content= content.replace('$user', $('#name').val());
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
                    }

                }
            });

        });

        function submitData(){
            //console.log('activeFrom',$('#activeFrom').val());
            //exit;
            var value = {
                "code": $('#code').val(),
                "name": $('#name').val(),
                "branchCode" : $('#branchCode').val(),
                "branchName" : $('#branchCode option:selected').attr('data-name'),
                "activeFrom" : ($('#activeFrom').val() == '' ? '' : $("#activeFrom").val()+' 00:00:00'),
                "activeTo" : ($('#activeTo').val() == '' ? '' : $("#activeTo").val()+' 00:00:00'),
                "email" : $('#email').val(),
                "isPwdNeverExpired" : ($('#isPwdNeverExpired').is(':checked') ? 'Y' : 'N'),
                "roleCodeList": submit_data
            };
            //console.log(value);
            //return;
            if($('#type').val() == 'add'){
                $.ajax({
                    url: 'add',
                    method: 'post',
                    data: {"_token": "{{ csrf_token() }}", menu: id, value: value},
                    success: function (data) {
                        $('#submit_view').prop('disabled',false);
                        var result = JSON.parse(data);
                        if (result.status=="200") {
                            noRef=result.referenceNo;
                            flash('success', result.message+'<br>'+'Reference Number: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                            $('#submit_view').hide();
                            getNextUserData(noRef);
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
            }else{
                $.ajax({
                    url: 'edit',
                    method: 'post',
                    data: {"_token": "{{ csrf_token() }}", menu: id, value: value},
                    success: function (data) {
                        $('#submit_view').prop('disabled',false);
                        var result = JSON.parse(data);
                        if (result.status=="200") {
                            noRef=result.referenceNo;
                            flash('success', result.message+'<br>'+'Reference Number: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                            $('#submit_view').hide();
                            getNextUserData(noRef);
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
        }


        $('#confirm').on('click', function () {
            if(checkDate()>0){
                $('.nav-tabs button').removeClass('active').attr('aria-selected', 'false');
                $('#detail-tab').addClass('active').attr('aria-selected', 'true');
                $('.tab-pane').hide().removeClass('show active');
                $('#tab_detail').addClass('show active').show();

                var content ='{{trans('form.alert_date_compare')}}';
                $.alert({
                    title: '{{trans('form.warning')}}',
                    content: content
                });
                return;
            }
            $('#form-area').validator('validate');

            var hasEmptyField = false;
            $('.detail[required]').each(function() {
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
                $('.nav-tabs button').removeClass('active').attr('aria-selected', 'false');
                $('#detail-tab').addClass('active').attr('aria-selected', 'true');
                $('.tab-pane').hide().removeClass('show active');
                $('#tab_detail').addClass('show active').show();
                return;
            }

            setTimeout(function() {
                if($('#form-area').has('.has-error').length != 0){
                    $('.nav-tabs button').removeClass('active').attr('aria-selected', 'false');
                    $('#detail-tab').addClass('active').attr('aria-selected', 'true');
                    $('.tab-pane').hide().removeClass('show active');
                    $('#tab_detail').addClass('show active').show();
                    return;
                }

                var currentTabTitle = $('#detail-tab').hasClass('active') ? '#tab_detail' : '#tab_role';
                if(currentTabTitle=='#tab_detail'){
                    $('.nav-tabs button').removeClass('active').attr('aria-selected', 'false');
                    $('#role-tab').addClass('active').attr('aria-selected', 'true');
                    $('.tab-pane').hide().removeClass('show active');
                    $('#tab_role').addClass('show active').show();
                    return;
                }

                if(countRole()==0){
                    var content ='{{trans('form.alert_empty',['label'=>'Role'])}}';

                    $.alert({
                        title: '{{trans('form.warning')}}',
                        content: content
                    });
                    return;
                }

                submit_data = getTableData();
                stateView(submit_data);
            }, 100);
        });

        $('#back_view').on('click', function () {
            $(this).prop('disabled',true);
            if($('#state').val() == 'success'){
                app.setView(id,'landing')
            }else{
            $('#back_view').prop('disabled',false);
            stateEdit();
            }
        });


        $('.back').on('click', function () {
            $(this).prop('disabled',true);
            if ($('#type').val() == 'add') {
                app.setView(id,'landing');
            } else {
                var code = $('#code_edit').val();
                var res = app.setView(id,'detail');
                if(res=='done'){
                    $('#code').val(code);
                    getData(code);
                }
            }
        });



        $('#addrole').on('click', function () {
            var role_added = [];

            $("#list").find("tbody tr").each(function () {
                var role_name = $('td:eq(0)', $(this)).find('#role_name').text();
                role_added.push(role_name);
            });


            var code = $('#roleCode').val();
            var name = $('#roleCode option:selected').text();
            var dscp = $('#roleCode option:selected').attr('data-dscp');

if(code==''){
                $.alert({
                    title: 'Attention',
                    content: 'Please select a role'
                });
                return;
            }

            if(jQuery.inArray(name, role_added)!==-1){
                $.alert({
                    title: 'Attention',
                    content: 'Role already exist in the list'
                });
                return;
            }


            oTable.row.add([
                '<span id="role_name">'+name+'</span>',
                '<span id="role_dscp">'+dscp+'</span>',
                '<button type="button" id="'+code+'" class="btn wire-btn-alert removerole" onClick="return removeRole(\''+code+'\');return false;">Remove</button>'
            ]).draw(false);

        });


        $('#done').on('click', function () {
            $(this).prop('disabled',true);
            app.setView(id,'landing');
        });

        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',.-'
        });

        $('#code').alphanum({
            allowSpace: false
        });

    });

        function countRole(){
            var count = oTable.data().count();
            return count;
        }

        function removeRole(code){
            //console.log($('#'+code));
            oTable.row($('#'+code).closest("tr").get(0)).remove().draw(true);
        }

        function getData(code) {

            var value = {
                code: code,
                name: "",
                branchCode: "",
                currentPage: "1",
                pageSize: "20",
                orderBy: {"code": "ASC"}
            };
            var url_action = 'search';
            var action = 'DETAIL';
            var menu = id;
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
                    var data = JSON.parse(data);
                    if (data.status=="200") {
						var index = data.result.map(function(o) { return o.code; }).indexOf(code.toString());
                        var detail = data.result[index].roleCodeList;

                        $('#code').val(data.result[index].code);
                        $('#code').attr('readonly', true);
                        $('#name').val(data.result[index].name);
                        $('#branchCode').val(data.result[index].branchCode).trigger('change');
                        $('#activeFrom').val(moment(data.result[index].activeFrom,"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
                        if(data.result[index].activeTo){
                            $('#activeTo').val(moment(data.result[index].activeTo,"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
                        }
                        $('#email').val(data.result[index].email);
                        if(data.result[index].isPwdNeverExpired=="Y"){
                            $('#isPwdNeverExpired').lcs_on();
                        }else{
                            $('#isPwdNeverExpired').lcs_off();
                        }
                        oTable.clear();
                        //console.log(detail);
                        if(detail) {
                            $.each(detail, function (idx, obj) {
                                oTable.row.add([
                                    '<span id="role_name">' + obj.roleName + '</span>',
                                    '<span id="role_dscp">' + obj.roleDscp + '</span>',
                                    '<button type="button" id="' + obj.roleCode + '" class="btn btn-danger removerole" onClick="return removeRole(\''+obj.roleCode+'\');return false;">Remove</button>'
                                ]).draw(true);
                            });
                        }
                        stateEdit();
                    } else {
                        flash('warning', data.message);
                    }


                }, error: function (xhr, ajaxOptions, thrownError) {
                    var msg = '{{trans('form.conn_error')}}';
                    flash('warning', msg);
                    console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
                },
                complete: function (data) {

                }
            });
        }


        function getTableData() {
            var data = [];

            $("#list").find("tbody tr").each(function () {

                var role_code = $('td:eq(2)', $(this)).find('button').attr('id');
                var role_name = $('td:eq(0)', $(this)).find('#role_name').text();
                var role_dscp = $('td:eq(1)', $(this)).find('#role_dscp').text();
                var obj = {
                    roleCode: role_code,
                    roleName: role_name,
                    roleDscp: role_dscp
                };
                data.push(obj);

            });

            return data;
        }

    function getBranchCode() {
        var value = {
            code: "",
            name: ""
        };
        var url_action = 'searchBranch';
        var action = 'SEARCH';
        var menu = id;
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
                    unitOption = '<option value="">-- Select Unit --</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.code + '" data-name="'+obj.name+'">' + obj.code + ' - ' +  obj.name + '</option>';
                    });
                    $('#branchCode').html(unitOption);
                    $('#branchCode').select2({ width: '100%' });
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

    function getRoleCode(code) {
        getBranchCode();
        var value = {
            code: "",
            name: ""
        };
        var url_action = 'searchRole';
        var action = 'SEARCH';
        var menu = id;
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
                    roleOption = '<option value=""></option>';
                    $.each(result.result, function (idx, obj) {
                        roleOption += '<option data-dscp="'+obj.dscp+'" value="' + obj.code + '">' + obj.name + '</option>';
                    });
                    $('#roleCode').html(roleOption);
                    $('#roleCode').select2({ width: '100%',placeholder: "Select a role" });
                } else {
                    flash('warning', result.message);
                }



            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {
                //$('#roleCode :nth-child(1)').prop('selected', true);
                if ($('#type').val() == 'edit'){
                getData(code);
                }
            }
        });
    }

        function stateEdit() {

            $('#state').val('edit');
            $('.state_view').hide();
            $('.state_edit').show();
            $('label.state_view').text('-');
            $('#save_screen').hide();
            $('.help-block').show();
            $('#done').hide();
            $('#next_user').hide();
            $("#list").find("tbody tr").each(function () {

                $('td:eq(0)', $(this)).parent().show();

            });

            $('#detail-tab, #role-tab').off('click').on('click', function (e) {
                e.preventDefault();

                var target = $(this).attr('data-bs-target');

                $('.nav-tabs button').removeClass('active').attr('aria-selected', 'false');
                $(this).addClass('active').attr('aria-selected', 'true');

                $('.tab-pane').hide().removeClass('show active');
                $(target).addClass('show active').show();
            });
            if ($('#type').val() == 'edit'){
                $('#code').prop('disabled',true);
            }else{
                $('#code').prop('disabled',false);
            }
        }

        function stateView(submit_data) {
            $('#state').val('view');

            $('.nav-tabs button').removeClass('active').attr('aria-selected', 'false');
            $('#detail-tab').addClass('active').attr('aria-selected', 'true');
            $('.tab-pane').hide().removeClass('show active');
            $('#tab_detail').addClass('show active').show();

           // $('.role_list').appendTo('.role_view');
            //oTable.column(2).visible(false);
            var code = ($('#code').val() == '' ? '-' : $('#code').val());
            var name = ($('#name').val() == '' ? '-' : $('#name').val());
            var branch = ($('#branchCode :selected').text() == '' ? '-' : $('#branchCode :selected').text());
            var email = ($('#email').val() == '' ? '-' : $('#email').val());
            var activeFrom = ($('#activeFrom').val() == '' ? '-' : $('#activeFrom').val());
            var activeTo = ($('#activeTo').val() == '' ? '-' : $('#activeTo').val());
            var isPwdNeverExpired = ($('#isPwdNeverExpired').is(':checked') ? 'Yes' : 'No');

            oTable_view.clear();
            $.each(submit_data, function (idx, obj) {
                oTable_view.row.add([
                    '<span id="role_name">'+obj.roleName+'</span>',
                    '<span id="role_dscp">'+obj.roleDscp+'</span>'
                ]).draw(true);
            });


            $('.state_edit').hide();
            $('.state_view').show();

            $('#code_view').text(code);
            $('#name_view').text(name);
            $('#activeFrom_view').text(activeFrom);
            $('#activeTo_view').text(activeTo);
            $('#branchCode_view').text(branch);
            $('#email_view').text(email);
            $('#isPwdNeverExpired_view').text(isPwdNeverExpired);
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

    function checkDate(){
        var count = 0;
        var date1 = $("#activeFrom").data('datepicker').getFormattedDate('yyyy/mm/dd');
        var date2 = $("#activeTo").data('datepicker').getFormattedDate('yyyy/mm/dd');

        if(date2!=''){
            var x = new Date(date1);
            var y = new Date(date2);
            if(x>y){
                count = 1;
            }
        }
        return count;

    }


</script>
