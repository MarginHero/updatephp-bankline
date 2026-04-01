@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),$type]])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
           <div class="box-header">
                     <h3 class="box-title">Branch Setup Detail</h3>
                </div>
                <form id="form-area" class="form-horizontal form-area">
                <input type="hidden" id="code_edit" value=""/>
                <input type="hidden" id="type" value=""/>
                <input type="hidden" id="state" value=""/>
                <input type="hidden" id="submit_mode" value=""/>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end"><strong>Branch Code&ast;</strong></label>
                                <div class="col-md-6">
                                    <input type="text" id="code" name="code" class="form-control state_edit numeric" autocomplete="off" value="" maxlength="40" data-error="This field is required." required>
                                    <div class="help-block with-errors"></div>
                                    <label id="code_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end"><strong>Branch Name&ast;</strong></label>
                                <div class="col-md-6">
                                    <input type="text" id="name" name="name" class="form-control state_edit" autocomplete="off" value="" maxlength="100" data-error="This field is required." required>
                                    <div class="help-block with-errors"></div>
                                    <label id="name_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end"><strong>Description&ast;</strong></label>
                                <div class="col-md-6">
                                    <input type="text" id="dscp" name="dscp" class="form-control state_edit" autocomplete="off" value="" maxlength="100" data-error="This field is required." required>
                                    <div class="help-block with-errors"></div>
                                    <label id="dscp_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end"><strong>Contact Person&ast;</strong></label>
                                <div class="col-md-6">
                                    <input type="text" id="contact" name="contact" class="form-control state_edit" autocomplete="off" value="" maxlength="100" data-error="This field is required." required>
                                    <div class="help-block with-errors"></div>
                                    <label id="contact_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="emailBlock" class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end"><strong>Email&ast;</strong></label>
                                <div class="col-md-6">
                                    <input type="text" id="email" name="email" class="form-control state_edit email" autocomplete="off" value="" maxlength="300" data-error="This field is invalid." required>
                                    <div class="help-block with-errors"></div>
                                    <label id="email_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="address1" name="address1" class="form-control state_edit" autocomplete="off" value="" maxlength="100">
                                    <!-- <div class="help-block with-errors"></div> -->
                                    <label id="address1_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end"><strong></strong></label>
                                <div class="col-md-6">
                                    <input type="text" id="address2" name="address2" class="form-control state_edit" autocomplete="off" value="" maxlength="100">
                                    <!-- <div class="help-block with-errors"></div> -->
                                    <label id="address2_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end"><strong></strong></label>
                                <div class="col-md-6">
                                    <input type="text" id="address3" name="address3" class="form-control state_edit" autocomplete="off" value="" maxlength="100">
                                    <!-- <div class="help-block with-errors"></div> -->
                                    <label id="address3_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end"><strong>Type&ast;</strong></label>
                                <div class="col-md-4">
                                    <div class="state_edit">
                                        <select class="form-control" id="branchType" name="branchType" data-error="This field is invalid." required>
                                            <option value="">-- Select Type --</option>
                                            <option value="branch">Branch</option>
                                            <option value="sub-branch">Sub Branch</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <label id="branchType_view" class="state_view"></label>
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

        stateEdit();

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
                "email": $('#email').val(),
                "dscp": $('#dscp').val(),
                "contactName": $('#contact').val(),
                "address1": $('#address1').val(),
                "address2": $('#address2').val(),
                "address3": $('#address3').val(),
                "type": $('#branchType').val(),
            };

            var url_action = "";
            if ($('#type').val() == 'add'){
                url_action = "add";
            } else {
                url_action = "edit";
            }
            $('#notif-inner').show();

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
            var hasError = false;

            if($('#code').val().trim() === '') {
                var $formGroup = $('#code').closest('.row');
                $formGroup.addClass('has-error');
                $('#code').css('border-color', '#a94442');
                $formGroup.find('.help-block').html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
                hasError = true;
            } else {
                var $formGroup = $('#code').closest('.row');
                $formGroup.removeClass('has-error');
                $('#code').css('border-color', '');
                $formGroup.find('.help-block').html('').hide();
            }

            if($('#name').val().trim() === '') {
                var $formGroup = $('#name').closest('.row');
                $formGroup.addClass('has-error');
                $('#name').css('border-color', '#a94442');
                $formGroup.find('.help-block').html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
                hasError = true;
            } else {
                var $formGroup = $('#name').closest('.row');
                $formGroup.removeClass('has-error');
                $('#name').css('border-color', '');
                $formGroup.find('.help-block').html('').hide();
            }

            // Validasi Description
            if($('#dscp').val().trim() === '') {
                var $formGroup = $('#dscp').closest('.row');
                $formGroup.addClass('has-error');
                $('#dscp').css('border-color', '#a94442');
                $formGroup.find('.help-block').html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
                hasError = true;
            } else {
                var $formGroup = $('#dscp').closest('.row');
                $formGroup.removeClass('has-error');
                $('#dscp').css('border-color', '');
                $formGroup.find('.help-block').html('').hide();
            }

            // Validasi Contact Person
            if($('#contact').val().trim() === '') {
                var $formGroup = $('#contact').closest('.row');
                $formGroup.addClass('has-error');
                $('#contact').css('border-color', '#a94442');
                $formGroup.find('.help-block').html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
                hasError = true;
            } else {
                var $formGroup = $('#contact').closest('.row');
                $formGroup.removeClass('has-error');
                $('#contact').css('border-color', '');
                $formGroup.find('.help-block').html('').hide();
            }

            // Validasi Email
            if($('#email').val().trim() === '') {
                var $formGroup = $('#email').closest('.row');
                $formGroup.addClass('has-error');
                $('#email').css('border-color', '#a94442');
                $formGroup.find('.help-block').html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
                hasError = true;
            } else {
                var $formGroup = $('#email').closest('.row');
                $formGroup.removeClass('has-error');
                $('#email').css('border-color', '');
                $formGroup.find('.help-block').html('').hide();
            }

            // Validasi Type
            if($('#branchType').val() === '' || $('#branchType').val() === null) {
                console.log('Type validation failed - value:', $('#branchType').val());
                var $formGroup = $('#branchType').closest('.row');
                $formGroup.addClass('has-error');
                $('#branchType').css('border-color', '#a94442');
                var $helpBlock = $formGroup.find('.help-block');
                console.log('Help block found:', $helpBlock.length);
                $helpBlock.html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
                hasError = true;
            } else {
                var $formGroup = $('#branchType').closest('.row');
                $formGroup.removeClass('has-error');
                $('#branchType').css('border-color', '');
                $formGroup.find('.help-block').html('').hide();
            }

            // Jika ada error dari validasi manual, stop
            if(hasError) {
                return;
            }

            $('#form-area').validator('validate');
            if (validateEmail()) {
                setTimeout(function(){
                    if($('#form-area').validator('validate').has('.has-error').length==0){
                        $('#submit_type').val('submit');
                        stateView();
                    }
                });
            }
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
            $('#notif-inner').hide();
            stateEdit();
            }
        });


        /*$('.back').on('click', function () {
            app.setView(id,'landing')

        });*/
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
            allowMinus: false,
            allowThouSep : false,
            allowDecSep : false,
        });

        $('input[type="text"]').not('.numeric').not('.email').alphanum({
            allowSpace: true,
            allow : ',.-;'
        });

        $('.email').alphanum({
            allowSpace: true,
            allow : ',.-;_@'
        });

        // Event listener untuk menghapus error message saat user mengetik
        $('#code').on('input', function() {
            if($(this).val().trim() !== '') {
                var $formGroup = $(this).closest('.row');
                $formGroup.removeClass('has-error');
                $(this).css('border-color', '');
                $formGroup.find('.help-block').html('').hide();
            }
        });

        $('#name').on('input', function() {
            if($(this).val().trim() !== '') {
                var $formGroup = $(this).closest('.row');
                $formGroup.removeClass('has-error');
                $(this).css('border-color', '');
                $formGroup.find('.help-block').html('').hide();
            }
        });

        $('#dscp').on('input', function() {
            if($(this).val().trim() !== '') {
                var $formGroup = $(this).closest('.row');
                $formGroup.removeClass('has-error');
                $(this).css('border-color', '');
                $formGroup.find('.help-block').html('').hide();
            }
        });

        $('#contact').on('input', function() {
            if($(this).val().trim() !== '') {
                var $formGroup = $(this).closest('.row');
                $formGroup.removeClass('has-error');
                $(this).css('border-color', '');
                $formGroup.find('.help-block').html('').hide();
            }
        });

        $('#email').on('input', function() {
            if($(this).val().trim() !== '') {
                var $formGroup = $(this).closest('.row');
                $formGroup.removeClass('has-error');
                $(this).css('border-color', '');
                $formGroup.find('.help-block').html('').hide();
            }
        });

        $('#branchType').on('change', function() {
            if($(this).val() !== '' && $(this).val() !== null) {
                var $formGroup = $(this).closest('.row');
                $formGroup.removeClass('has-error');
                $(this).css('border-color', '');
                $formGroup.find('.help-block').html('').hide();
            }
        });
    });

    function validateEmail() {
        $("#emailBlock").removeClass("has-error");
        $("#emailBlock").removeClass("has-danger");
        $("#emailBlock").find(".with-errors").html("");
        var emails = $("#email").val();
        var arrEmails = emails.split(";");
	    let pass = true;
        console.log(`emails length : ${arrEmails.length} `);
        console.log(`> 10 : ${arrEmails.length  > 10} `);
        if (arrEmails.length > 10) {
            $("#emailBlock").addClass("has-error").addClass("has-danger");
            $("#emailBlock").find(".with-errors").html("Please ensure that no more than 10 emails are entered");
            return false;
        }

		if(arrEmails.length > 0){
			$.each(arrEmails, function (idx, obj){
				 const emailRegex= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
				if(!emailRegex.test(obj)){
					$("#emailBlock").addClass("has-error").addClass("has-danger");
            				$("#emailBlock").find(".with-errors").html("Invalid format email");
           				 pass = false;
				}
			});
		}

        return pass;
    }

    function getBranchEdit(code_id){

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

                    $('#code').val(detail.code);
                    $('#code').prop('disabled',true)
                    $('#name').val(detail.name);
                    $('#dscp').val(detail.dscp);
                    $('#contact').val(detail.contactName);
                    $('#email').val(detail.email);
                    $('#address1').val(detail.address1);
                    $('#address2').val(detail.address2);
                    $('#address3').val(detail.address3);
                    console.log(detail,'aaa')
                    $("#branchType").val(detail.type).trigger('change');
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


        function stateEdit() {

            $('.parent_menu_name').show();

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
            $('.parent_menu_name').show();

            $('input:checkbox').prop('disabled','disabled');
            var code = ($('#code').val() == '' ? '-' : $('#code').val());
            var name = ($('#name').val() == '' ? '-' : $('#name').val());
            var dscp = ($('#dscp').val() == '' ? '-' : $('#dscp').val());
            var contact = ($('#contact').val() == '' ? '-' : $('#contact').val());
            var email = ($('#email').val() == '' ? '-' : $('#email').val());
            var address1 = ($('#address1').val() == '' ? '-' : $('#address1').val());
            var address2 = ($('#address2').val() == '' ? '-' : $('#address2').val());
            var address3 = ($('#address3').val() == '' ? '-' : $('#address3').val());
            var type = ($('#branchType option:selected').text() == '' ? '-' : $('#branchType option:selected').text());
            $('#preview').text('Preview');
            $('.state_edit').hide();
            $('.state_view').show();
            $('#code_view').text(code);
            $('#name_view').text(name);
            $('#dscp_view').text(dscp);
            $('#contact_view').text(contact);
            $('#email_view').text(email);
            $('#address1_view').text(address1);
            $('#address2_view').text(address2);
            $('#address3_view').text(address3);
            $("#branchType_view").text(type);
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


</script>
