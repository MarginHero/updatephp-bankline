@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),$type]])

<style>
.has-error .help-block {
    color: #dd4b39 !important;
}
.has-error .form-control {
    border-color: #dd4b39 !important;
}
.has-error .with-errors {
    color: #dd4b39 !important;
}
.with-errors ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
.with-errors ul li {
    color: #dd4b39 !important;
    font-size: 12px;
    margin-top: 5px;
}
</style>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
           <div class="box-header">
                     <h3 class="box-title">Special Rate Detail</h3>
                </div>
                <form id="form-area" class="form-horizontal form-area">
                <input type="hidden" id="code_edit" value=""/>
                <input type="hidden" id="type" value=""/>
                <input type="hidden" id="state" value=""/>
                <input type="hidden" id="submit_mode" value=""/>
                <input type="hidden" id="rateType" value=""/>
                <input type="hidden" id="refNoSpecialRate" value=""/>
                <input type="hidden" id="operation" value=""/>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label lblDealRate text-end"><strong>Deal Rate No.&ast;</strong></label>
                                <div class="col-md-5">
                                    <div class="state_edit">
                                       <select class="form-control" id="dealRateNo" name="dealRateNo">
                                            <option value="MK" > MK</option>
                                            <option value="TR" > TR</option>
                                       </select>
                                   </div>
                                   <label id="deal_rate_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group" id="corporateblock">
                                <label class="col-md-4 col-form-label lblcorpID text-end"><strong>Corporate ID&ast;</strong></label>
                                <div class="col-md-5">
                                    <div class="corporate_setup state_edit"><select class="form-control"></select></div>
                                    <div class="help-block with-errors"></div>
                                    <label id="corporate_setup_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="mb-3 row form-group" id="debitCurrencyBlock">
                                <label class="col-md-4 col-form-label lblDebitCurr text-end"><strong>Debit Currency&ast;</strong></label>
                                <div class="col-md-5 state_view">
                                    <label id="debit_curr_view" class="state_view"></label>
                                    <label id="debit_amount_view" class="state_view"></label>
                                </div>
                                <div class="col-md-1 debit_currency_setup">
                                    <select class="form-control state_edit" id="debit_currency">
                                        <option value="IDR" selected>IDR</option>
                                        <option value="USD">USD</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-1 state_edit" style="width:20px !important; padding-top:7px;margin-left: -5px;margin-right:5px;" >
                                    <input type="radio" name="curr" id="debit_currency_rb" value="DEBIT" class="amountType" checked>
                                </div>
                                <div class="col-md-4" style="margin-left: -5px; display: block;" id="debitblok">
                                    <input type="text" class="state_edit form-control numeric rate"  id="debit_amount" name="debit_amount">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-4" style="margin-left: -5px; display: none;" id="debitblokjpy">
                                    <input type="text" class="state_edit form-control numeric rateJpy"  id="debit_amount_jpy" name="debit_amount_jpy" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="mb-3 row form-group" id="creditCurrencyBlock">
                                <label class="col-md-4 col-form-label lblCreditCurr text-end"><strong>Credit Currency&ast;</strong></label>
                                <div class="col-md-5 state_view">
                                    <label id="credit_curr_view" class="state_view"></label>
                                    <label id="credit_amount_view" class="state_view"></label>
                                </div>
                                <div class="col-md-1 credit_currency_setup">
                                    <select class="form-control state_edit" id="credit_currency">
                                        <option value="IDR" selected>IDR</option>
                                        <option value="USD">USD</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-1 state_edit" class="state_edit" style="width:20px !important; padding-top:7px;margin-left: -5px;margin-right:5px;" >
                                    <input  type="radio" name="curr" id="credit_currency_rb" value="CREDIT" class="amountType" >
                                </div>
                                <div class="col-md-4" style="margin-left: -5px; display: block;"  id="creditblok">
                                    <input type="text" class="state_edit form-control numeric rate"  id="credit_amount" name="credit_amount">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-4" style="margin-left: -5px; display: none;" id="creditblokjpy">
                                    <input type="text" class="state_edit form-control numeric rateJpy"  id="credit_amount_jpy" name="credit_amount_jpy" >
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group" id="specialRateblok">
                                <label class="col-md-4 col-form-label lblSpecialrate text-end"><strong>Special Rate&ast;</strong></label>
                                <div class="state_edit col-md-5">
                                    <input type="text" id="specialRate" name="specialRate" class="form-control state_edit numeric rateSpecial"  data-error="This field is required." required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="state_edit col-md-3">
                                    <button id="calculateButton" class="btn btn-primary text-end">Calculate</button>
                                </div>
                                <div class="col-md-5 state_view">
                                    <label id="specialRate_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">Remark</label>
                                <div class="col-md-5">
                                    <input type="text" id="remark" name="remark" class="form-control state_edit" maxlength="200" autocomplete="off" value="" >
                                    <label id="remark_view" class="state_view" style="word-wrap:break-word;width:100%;"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label lblActiveDate text-end"><strong>Active Date&ast;</strong></label>
                                    <div class="activeDate_setup state_edit col-md-5">
                                        <select class="form-control"></select>
                                    </div>
                                    <div class="help-block with-errors"></div>
				    <div class="col-md-5 state_view">
                                    	<label id="activeDate_setup_view" class="state_view"></label>
			            </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="mb-3 row form-group" id="emailblock">
                                <label class="col-md-4 col-form-label lblEmail text-end">Email</label>
                                <div class="col-md-5">
                                    <input type="text" id="email" maxlength="1000" name="email" class="form-control state_edit email" autocomplete="off" value="" >
                                    <label id="email_view" class="state_view" style="word-wrap:break-word;width:100%;"></label>
                                    <div class="help-block with-errors"></div>
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
    var unitOption;
    var cityOption;
    var submit_data;
    var id = '{{ $service }}';
    var noRef;
    $(document).ready(function () {
        $('input[type=radio][name=curr]').change(function() {
            if (this.value == 'DEBIT') {
                $("#credit_currency").prop('disabled', false);
                $("#credit_amount").prop('disabled', true);
                $("#credit_amount_jpy").prop('disabled', true);
            }else{
                $("#credit_currency").prop('disabled', false);
                $("#credit_amount").prop('disabled', false);
                $("#credit_amount_jpy").prop('disabled', false);
            }
             if (this.value == 'CREDIT') {
                $("#debit_currency").prop('disabled', false);
                $("#debit_amount").prop('disabled', true);
                 $("#debit_amount_jpy").prop('disabled', true);
            }else{
                 $("#debit_currency").prop('disabled', false);
                 $("#debit_amount").prop('disabled', false);
                 $("#debit_amount_jpy").prop('disabled', false);
             }
        });
        $(document).validator().on('#form-area','submit', function (e) {
            if (e.isDefaultPrevented()) {
                // handle the invalid form...
            } else {
                // everything looks good!

            }
        });

        getCurrency();
        getCorporate();
        activeDateSetup();
        stateEdit();
        $("#credit_amount").prop('disabled', true);
        $("#credit_currency_rb").prop('disabled', false);
        $("#credit_amount_jpy").prop('disabled', true);
        $('.expHour_cls').each(function(){
            var optionsStart = {
                    $el: $(this),
                    mask: 'HH:mm',
                    isUtc: true
            };

            Mask.newMask(optionsStart);
        });
        $('#email').alphanum({
            allowSpace: false,
            allow : '@,.-_+'
        });
        $('.rate').autoNumeric('init',{
            emptyInputBehavior: 'focus',
            digitGroupSeparator        : ',',
            decimalCharacter           : '.',
            decimalCharacterAlternative: '.',
            // allowDecimalPadding : false,
            minimumValue:'0.00',maximumValue:'999999999999999.99'
        });
        $(".rateSpecial").keydown(function (event) {

            if (event.shiftKey == true) {
                event.preventDefault();
            }

            var val=$(".rateSpecial").val();

            if(val.split('.').length > 1 ){
                var dec = val.split('.')[1];
                if(dec.length > 5 && event.keyCode != 8 ){
                    event.preventDefault();
                }
            }
            if ((event.keyCode >= 48 && event.keyCode <= 57) ||
                (event.keyCode >= 96 && event.keyCode <= 105) ||
                event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 ||
                event.keyCode == 39 || event.keyCode == 46 || event.keyCode == 190) {

            } else {
                event.preventDefault();
            }

            if($(this).val().indexOf('.') !== -1 && event.keyCode == 190)
                event.preventDefault();


        });
        $('.rateJpy').autoNumeric('init',{
            emptyInputBehavior: 'focus',
            digitGroupSeparator        : ',',
            decimalCharacter           : '.',
            decimalCharacterAlternative: '.',
            // allowDecimalPadding : false,
            minimumValue:'0',maximumValue:'999999999999999'
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

	$('input[type="text"]').not('.numeric').not('.email').alphanum({
            allowSpace: true,
            allow : ',.-'
        });

        $(".amountType").on("click", function () {
            // var rateType = $(this).val();
            // if (rateType == 'CREDIT') {
                $("#debit_amount").val("");
            // } else {
                $("#credit_amount").val("");
            var debitblok = $("#debitblok");
            debitblok.removeClass('has-error');
            debitblok.find('.with-errors').html('');
            var creditblok = $("#creditblok");
            creditblok.removeClass('has-error');
            creditblok.find('.with-errors').html('');

             $("#debit_amount_jpy").val("");
            // } else {
                $("#credit_amount_jpy").val("");
            var debitblokjpy = $("#debitblokjpy");
            debitblokjpy.removeClass('has-error');
            debitblokjpy.find('.with-errors').html('');
            var creditblokjpy = $("#creditblokjpy");
            creditblokjpy.removeClass('has-error');
            creditblokjpy.find('.with-errors').html('');
            // }
        });

        $("#calculateButton").on("click", function (e) {
            e.preventDefault();

            var rate = $("#specialRate").val();
            var rateType = $('input[name="curr"]:checked').val();
            var curr1, curr2 = "";
            var amount, credit_amount, debit_amount = 0;

            /*if (rateType == 'CREDIT') {
                curr1 = $("#credit_currency").val();
                curr2 = $("#debit_currency").val();

                if(curr2 == 'JPY'){
                    credit_amount = $("#credit_amount_jpy").autoNumeric('get');
                }else{
                    credit_amount = $("#credit_amount").autoNumeric('get');
                }

            } else {
                curr2 = $("#credit_currency").val();
                curr1 = $("#debit_currency").val();


                if(curr1 == 'JPY'){
                    debit_amount = $("#debit_amount_jpy").autoNumeric('get');
                }else{
                    debit_amount = $("#debit_amount").autoNumeric('get');
                }
            }*/

var specialRateblok = $("#specialRateblok");
                                if(rate==''){
                                    specialRateblok.addClass('has-error');
                                    specialRateblok.find('.with-errors').html('This field is required.');
                                    return;
                                }else {
                                    specialRateblok.removeClass('has-error');
                                    specialRateblok.find('.with-errors').html('');
                                }

	curr1 = $("#debit_currency").val();
	curr2 = $("#credit_currency").val();

		if(curr1 == 'JPY'){
                    debit_amount = $("#debit_amount_jpy").autoNumeric('get');
                }else{
                    debit_amount = $("#debit_amount").autoNumeric('get');
                }

 		if(curr2 == 'JPY'){
                    credit_amount = $("#credit_amount_jpy").autoNumeric('get');
                }else{
                    credit_amount = $("#credit_amount").autoNumeric('get');
                }

            if (curr1 == curr2) {
                if (rateType == 'CREDIT') {
                    if ((credit_amount - rate) == 0) {
                        $("#debit_amount").val(credit_amount);
                    } else {
                        flash('warning', 'invalid rate');
                        return;
                    }
                } else {
                    if ((debit_amount - rate) == 0) {
                        $("#credit_amount").val(debit_amount);
                    } else {
                        flash('warning', 'invalid rate');
                    }
                }

                $('.rate').autoNumeric('init',{
                    emptyInputBehavior: 'focus',
                    digitGroupSeparator        : ',',
                    decimalCharacter           : '.',
                    decimalCharacterAlternative: '.',
                    // allowDecimalPadding : false,
                    minimumValue:'0.00',maximumValue:'999999999999999.99'
                });
                return;
            }



            var value = {
                source: curr1,
                dest: curr2
            };

            var url_action = 'getRateOperation';
            var action = 'SEARCH';
            var menu = 'MNU_GPCASH_MT_SPECIAL_RATE';

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

                        var operation = result.result;
                        $("#operation").val(operation);
                        var amount = 0;
                        if (rateType == 'CREDIT') {
                            if (operation == "DIVIDE") {
                                amount = (credit_amount / rate).toFixed(2);
                            } else {
                                amount = (credit_amount * rate);
                            }


                            if($("#debit_currency").val() == 'JPY'){
                                $('#debit_amount_jpy').autoNumeric('set', amount);
                                var debitblok = $("#debitblokjpy");
                                if($("#debit_amount_jpy").val()==''){
                                    debitblok.addClass('has-error');
                                    debitblok.find('.with-errors').html('This field is required.');
                                }else {
                                    debitblok.removeClass('has-error');
                                    debitblok.find('.with-errors').html('');
                                }
                            }else{
                                $('#debit_amount').autoNumeric('set', amount);
                                var debitblok = $("#debitblok");
                                if($("#debit_amount").val()==''){
                                    debitblok.addClass('has-error');
                                    debitblok.find('.with-errors').html('This field is required.');
                                }else {
                                    debitblok.removeClass('has-error');
                                    debitblok.find('.with-errors').html('');
                                }
                            }


                        } else {
                            if (operation == "MULTIPLY") {
                                amount = (debit_amount / rate).toFixed(2);
                            } else {
                                amount = debit_amount * rate;
                            }

                            if($("#credit_currency").val() == 'JPY'){
                                $('#credit_amount_jpy').autoNumeric('set', amount);
                                var creditblok = $("#creditblokjpy");
                                if($("#credit_amount_jpy").val()==''){
                                    creditblok.addClass('has-error');
                                    creditblok.find('.with-errors').html('This field is required.');
                                }else {
                                    creditblok.removeClass('has-error');
                                    creditblok.find('.with-errors').html('');
                                }
                            }else{
                                $('#credit_amount').autoNumeric('set', amount);
                                var creditblok = $("#creditblok");
                                if($("#credit_amount").val()==''){
                                    creditblok.addClass('has-error');
                                    creditblok.find('.with-errors').html('This field is required.');
                                }else {
                                    creditblok.removeClass('has-error');
                                    creditblok.find('.with-errors').html('');
                                }
                            }

                        }

                    } else {
                        flash('warning', result.message);
                    }
                }, error: function (xhr, ajaxOptions, thrownError) {
                    var msg = '{{trans('form.conn_error')}}';
                    flash('warning', msg);
                    console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
                }, complete: function (data) {
                    $('.rate').autoNumeric('init',{
                        emptyInputBehavior: 'focus',
                        digitGroupSeparator        : ',',
                        decimalCharacter           : '.',
                        decimalCharacterAlternative: '.',
                        // allowDecimalPadding : false,
                        minimumValue:'0.00',maximumValue:'999999999999999.99'
                    });
                }
            });

        });

        function submitData(){

            var credit_amount, debit_amount = 0;

                if($("#debit_currency").val() == 'JPY'){
                    debit_amount = $("#debit_amount_jpy").autoNumeric('get');
                }else{
                    debit_amount = $("#debit_amount").autoNumeric('get');
                }

                if($("#credit_currency").val() == 'JPY'){
                    credit_amount = $("#credit_amount_jpy").autoNumeric('get');
                }else{
                    credit_amount = $("#credit_amount").autoNumeric('get');
                }

            var value = {
                "refNoSpecialRate": $("#refNoSpecialRate").val(),
                "corporateId": $('#corporate_list').val(),
                "corporateName": $('#corporate_list option:selected').attr('data-name'),
                // "dealRateNo": $("#dealRateNo").val(),
                "debitCurrency": $("#debit_currency").val(),
                "debitAmount": debit_amount,
                "creditCurrency": $("#credit_currency").val(),
                "creditAmount": credit_amount,
                "specialRate": $("#specialRate").val(),
                "specialRateFormatted": currencyFormat($("#specialRate").val()),
                "rateType":  $('input[name="curr"]:checked').val(),
                "activeDate": $("#actvDate_list").val(),
                "remark": $('#remark').val(),
                "email": $('#email').val(),
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

        $('#debit_amount').blur(function(){
            var debitblok = $("#debitblok");
            var debit_amount = $("#debit_amount").val();
            if(debit_amount==''){
                debitblok.addClass('has-error');
                debitblok.find('.with-errors').html('This field is required.');
            }else {
                debitblok.removeClass('has-error');
                debitblok.find('.with-errors').html('');
            }
        });
        $('#debit_amount_jpy').blur(function(){
            var debitblok = $("#debitblokjpy");
            var debit_amount = $("#debit_amount_jpy").val();
            if(debit_amount==''){
                debitblok.addClass('has-error');
                debitblok.find('.with-errors').html('This field is required.');
            }else {
                debitblok.removeClass('has-error');
                debitblok.find('.with-errors').html('');
            }
        });
        $('#credit_amount').blur(function(){
            var creditblok = $("#creditblok");
            var credit_amount = $("#credit_amount").val();
            if(credit_amount==''){
                creditblok.addClass('has-error');
                creditblok.find('.with-errors').html('This field is required.');
            }else {
                creditblok.removeClass('has-error');
                creditblok.find('.with-errors').html('');
            }
        });
        $('#credit_amount_jpy').blur(function(){
            var creditblok = $("#creditblokjpy");
            var credit_amount = $("#credit_amount_jpy").val();
            if(credit_amount==''){
                creditblok.addClass('has-error');
                creditblok.find('.with-errors').html('This field is required.');
            }else {
                creditblok.removeClass('has-error');
                creditblok.find('.with-errors').html('');
            }
        });
        $('#confirm').on('click', function () {

            $('#form-area').validator('validate');
            var rate = $("#specialRate").val();
            var rateType = $('input[name="curr"]:checked').val();
            var curr1, curr2 = "";
            var amount =0;
            var    credit_amount= 0;
            var    debit_amount = 0;

            var hasError = false;

            // Validate Corporate ID
            var corporateId = $('#corporate_list').val();
            var corporateblock = $('#corporateblock');
            console.log('Corporate ID:', corporateId);
            if(corporateId == '' || corporateId == null){
                corporateblock.addClass('has-error');
                corporateblock.find('.with-errors').html('<ul class="list-unstyled" style="color: #dd4b39;"><li>This field is required.</li></ul>');
                hasError = true;
            } else {
                corporateblock.removeClass('has-error');
                corporateblock.find('.with-errors').html('');
            }

            // Validate Debit Currency
            var debitCurrency = $('#debit_currency').val();
            var debitCurrencySetup = $('.debit_currency_setup');
            console.log('Debit Currency:', debitCurrency);
            console.log('Debit Currency Setup element:', debitCurrencySetup.length);
            console.log('Error div in debit:', debitCurrencySetup.find('.with-errors').length);
            if(debitCurrency == '' || debitCurrency == null){
                debitCurrencySetup.addClass('has-error');
                debitCurrencySetup.find('.with-errors').html('<ul class="list-unstyled" style="color: #dd4b39;"><li>This field is required.</li></ul>');
                hasError = true;
            } else {
                debitCurrencySetup.removeClass('has-error');
                debitCurrencySetup.find('.with-errors').html('');
            }

            // Validate Credit Currency
            var creditCurrency = $('#credit_currency').val();
            var creditCurrencySetup = $('.credit_currency_setup');
            console.log('Credit Currency:', creditCurrency);
            console.log('Credit Currency Setup element:', creditCurrencySetup.length);
            console.log('Error div in credit:', creditCurrencySetup.find('.with-errors').length);
            if(creditCurrency == '' || creditCurrency == null){
                creditCurrencySetup.addClass('has-error');
                creditCurrencySetup.find('.with-errors').html('<ul class="list-unstyled" style="color: #dd4b39;"><li>This field is required.</li></ul>');
                hasError = true;
            } else {
                creditCurrencySetup.removeClass('has-error');
                creditCurrencySetup.find('.with-errors').html('');
            }

            // Validate Special Rate
            var specialRateblok = $("#specialRateblok");
            if(rate == '' || rate == null){
                specialRateblok.addClass('has-error');
                specialRateblok.find('.with-errors').html('<ul class="list-unstyled" style="color: #dd4b39;"><li>This field is required.</li></ul>');
                hasError = true;
            } else {
                specialRateblok.removeClass('has-error');
                specialRateblok.find('.with-errors').html('');
            }

            // If any validation failed, stop here
            if(hasError){
                console.log('Validation failed, hasError:', hasError);
                return;
            }

            //if (rateType == 'CREDIT') {
                if($("#credit_currency").val() == 'JPY'){
                    credit_amount = $("#credit_amount_jpy").autoNumeric('get');
                    var creditblok = $("#creditblokjpy");
                    if(credit_amount==''){
                        creditblok.addClass('has-error');
                        creditblok.find('.with-errors').html('This field is required.');
                    }else {
                        creditblok.removeClass('has-error');
                        creditblok.find('.with-errors').html('');
                    }
                }else{
                    credit_amount = $("#credit_amount").autoNumeric('get');
                    var creditblok = $("#creditblok");
                    if(credit_amount==''){
                        creditblok.addClass('has-error');
                        creditblok.find('.with-errors').html('This field is required.');
                    }else {
                        creditblok.removeClass('has-error');
                        creditblok.find('.with-errors').html('');
                    }
                }


            //} else {

                if($("#debit_currency").val() == 'JPY'){
                    debit_amount = $("#debit_amount_jpy").autoNumeric('get');
                    var debitblok = $("#debitblokjpy");
                    if(debit_amount==''){
                        debitblok.addClass('has-error');
                        debitblok.find('.with-errors').html('This field is required.');
                    }else {
                        debitblok.removeClass('has-error');
                        debitblok.find('.with-errors').html('');
                    }
                }else{
                    debit_amount = $("#debit_amount").autoNumeric('get');
                    var debitblok = $("#debitblok");
                    if(debit_amount==''){
                        debitblok.addClass('has-error');
                        debitblok.find('.with-errors').html('This field is required.');
                    }else {
                        debitblok.removeClass('has-error');
                        debitblok.find('.with-errors').html('');
                    }
                }
            //}
            if (!validateEmail()) {
                return;
            }

	   if ($("#debit_currency").val() == $("#credit_currency").val()) {
                        flash('warning', 'invalid rate');
                        return;
            }


            setTimeout(function(){
                if($('#form-area').validator('validate').has('.has-error').length==0){

                    $('#submit_type').val('submit');

                    //dihitung ulang, jika ada perubahan rate
                    var operation = $("#operation").val()
                    var amount = 0;
                        if (rateType == 'CREDIT') {
                            if (operation == "DIVIDE") {
                                amount = (credit_amount / rate).toFixed(2);
                            } else {
                                amount = (credit_amount * rate);
                            }


                            if($("#debit_currency").val() == 'JPY'){
                                $('#debit_amount_jpy').autoNumeric('set', amount);
                                var debitblok = $("#debitblokjpy");
                                if($("#debit_amount_jpy").val()==''){
                                    debitblok.addClass('has-error');
                                    debitblok.find('.with-errors').html('This field is required.');
                                }else {
                                    debitblok.removeClass('has-error');
                                    debitblok.find('.with-errors').html('');
                                }
                            }else{
                                $('#debit_amount').autoNumeric('set', amount);
                                var debitblok = $("#debitblok");
                                if($("#debit_amount").val()==''){
                                    debitblok.addClass('has-error');
                                    debitblok.find('.with-errors').html('This field is required.');
                                }else {
                                    debitblok.removeClass('has-error');
                                    debitblok.find('.with-errors').html('');
                                }
                            }


                        } else {
                            if (operation == "MULTIPLY") {
                                amount = (debit_amount / rate).toFixed(2);
                            } else {
                                amount = debit_amount * rate;
                            }

                            if($("#credit_currency").val() == 'JPY'){
                                $('#credit_amount_jpy').autoNumeric('set', amount);
                                var creditblok = $("#creditblokjpy");
                                if($("#credit_amount_jpy").val()==''){
                                    creditblok.addClass('has-error');
                                    creditblok.find('.with-errors').html('This field is required.');
                                }else {
                                    creditblok.removeClass('has-error');
                                    creditblok.find('.with-errors').html('');
                                }
                            }else{
                                $('#credit_amount').autoNumeric('set', amount);
                                var creditblok = $("#creditblok");
                                if($("#credit_amount").val()==''){
                                    creditblok.addClass('has-error');
                                    creditblok.find('.with-errors').html('This field is required.');
                                }else {
                                    creditblok.removeClass('has-error');
                                    creditblok.find('.with-errors').html('');
                                }
                            }

                        }

                    stateView();
                }
            });
        });

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
            } else {
                $('#back_view').prop('disabled',false);
                changeLabel(true);
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
                    $('#currencyCode').val(code);
                    getMatrix();
                }
            }
        });

        $('#done').on('click', function () {
            $(this).prop('disabled',true);
            app.setView(id,'landing');
        });

        $('.rate').autoNumeric('init',{
            emptyInputBehavior: 'focus',
            digitGroupSeparator        : ',',
            decimalCharacter           : '.',
            decimalCharacterAlternative: '.',
            // allowDecimalPadding : false,
            minimumValue:'0.00',maximumValue:'999999999999999.9999'
        });

    });

    function activeDateSetup() {

        var today = moment(new Date(),"DD/MM/YYYY hh:mm").format("DD MMMM YYYY");
        var tom = moment(new Date()).add(1, 'days').format("DD MMMM YYYY");
        var spot = moment(new Date()).add(2, 'days').format("DD MMMM YYYY");

        unitOption = '<select id="actvDate_list" class="form-control state_edit">';
                    unitOption += '<option value="'+today+'" selected="selected">'+today+'</option>';
                    unitOption += '</select>';

                    $('.activeDate_setup').html(unitOption);

    }

    function changeExpDate() {

        var today = moment(new Date(),"DD/MM/YYYY hh:mm").format("DD MMMM YYYY");
        var tom = moment(new Date()).add(1, 'days').format("DD MMMM YYYY");
        var spot = moment(new Date()).add(2, 'days').format("DD MMMM YYYY");

        unitOption = '<select id="expDate_list" class="form-control state_edit">';
                    unitOption += '<option value="'+today+'" selected="selected">'+today+'</option>';

                    if ($('#typeRate').val()=='TOM') {
                        unitOption += '<option value="'+tom+'" selected="selected">'+tom+'</option>';
                    }else if($('#typeRate').val()=='SPOT'){
                        unitOption += '<option value="'+tom+'" selected="selected">'+tom+'</option>';
                        unitOption += '<option value="'+spot+'" selected="selected">'+spot+'</option>';
                    }



                    unitOption += '</select>';
                    $('.activeDate_setup').html(unitOption);

    }

    function calculate() {


            // otherInput.val((parseFloat(input.val()) * parseFloat(rate)).toFixed(2));
    }

    function getCurrency() {
        var value = {
            code: "",
            name: "",
            modelCode: "COM_MT_CURRENCY"
        };
        var url_action = 'searchModelForDroplist';
        var action = 'SEARCH';
        var menu = 'MNU_GPCASH_MT_PARAMETER';

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

                    unitOption = '<select id="debit_currency" class="form-control state_edit" required>';
                    $.each(result.result, function (idx, obj) {
			if(obj.code == 'IDR'){
				unitOption += '<option value="IDR" selected="selected">IDR</option>';
			}else{
				unitOption += '<option value="' + obj.code + '">'+ obj.name + '</option>';
			}
                    });
                    unitOption += '</select>';

                    $('.debit_currency_setup').html(unitOption);
                    $('#debit_amount_jpy').change(function(e) {
                        $("#debit_amount").val($("#debit_amount_jpy").val());
                    });
                    $('#credit_amount_jpy').change(function(e) {
                        $("#credit_amount").val($("#credit_amount_jpy").val());
                    });
                    $('#debit_currency').on('change', function(e) {
                        var  selectedValue = $(this).val();
                        $("#debit_amount").val('');
                        $("#debit_amount_jpy").val('');

                        if (selectedValue == 'JPY' ) {
                            $('#debitblokjpy').css('display', 'block');
                            $('#debitblok').css('display', 'none');

                            try {
                                $('#debit_amount_jpy').autoNumeric('destroy');
                            } catch(e) {}

                            $('#debit_amount_jpy').autoNumeric('init',{
                                emptyInputBehavior: 'focus',
                                digitGroupSeparator        : ',',
                                decimalCharacter           : '.',
                                decimalCharacterAlternative: '.',
                                minimumValue:'0',
                                maximumValue:'999999999999999'
                            });
                        } else {
                            $('#debitblokjpy').css('display', 'none');
                            $('#debitblok').css('display', 'block');

                            try {
                                $('#debit_amount').autoNumeric('destroy');
                            } catch(e) {}

                            $('#debit_amount').autoNumeric('init',{
                                emptyInputBehavior: 'focus',
                                digitGroupSeparator        : ',',
                                decimalCharacter           : '.',
                                decimalCharacterAlternative: '.',
                                minimumValue:'0.00',
                                maximumValue:'999999999999999.99'
                            });
                        }
                    })
                    unitOption = '<select id="credit_currency" class="form-control state_edit" required>';
                    unitOption += '<option value="IDR" selected="selected">IDR</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.code + '">'+ obj.name + '</option>';
                    });
                    unitOption += '</select>';

                    $('.credit_currency_setup').html(unitOption);
                    $('#credit_currency').on('change', function(e) {
                        var  selectedValue = $(this).val();

                        if (selectedValue == 'JPY' ) {
                            $('#creditblokjpy').css('display', 'block');
                            $('#creditblok').css('display', 'none');

                            try {
                                $('#credit_amount_jpy').autoNumeric('destroy');
                            } catch(e) {}

                            $('#credit_amount_jpy').autoNumeric('init',{
                                emptyInputBehavior: 'focus',
                                digitGroupSeparator        : ',',
                                decimalCharacter           : '.',
                                decimalCharacterAlternative: '.',
                                minimumValue:'0',
                                maximumValue:'999999999999999'
                            });
                        } else {
                            $('#creditblokjpy').css('display', 'none');
                            $('#creditblok').css('display', 'block');

                            try {
                                $('#credit_amount').autoNumeric('destroy');
                            } catch(e) {}

                            $('#credit_amount').autoNumeric('init',{
                                emptyInputBehavior: 'focus',
                                digitGroupSeparator        : ',',
                                decimalCharacter           : '.',
                                decimalCharacterAlternative: '.',
                                minimumValue:'0.00',
                                maximumValue:'999999999999999.99'
                            });
                        }
                        $("#credit_amount").val('');
                        $('#credit_amount_jpy').val('');
                    })

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


    function getCorporate() {
        var value = {
            code: "",
        };
        var url_action = 'searchCorporate';
        var action = 'SEARCH';
        //var menu = service;
        var menu = 'MNU_GPCASH_BO_RPT_TRX_STS';

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
                    unitOption = '<select id="corporate_list" class="form-control state_edit" data-error="Corporate is mandatory" required>';
                    unitOption += '<option value="" selected="selected"></option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.corporateId + '"data-name = "' + obj.corporateName + '">'+ obj.corporateId + ' - ' + obj.corporateName + '</option>';
                    });
                    unitOption += '</select>';

                    $('.corporate_setup').html(unitOption);
                    $('#corporate_list').select2();

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
    function getRateEdit(code_id){

        var url_action= 'search';
        var value ={
            currencyCode:code_id,
            name:'',
            currentPage: "1",
            pageSize: "50",
            orderBy: {"currency.effectiveDate": "DESC"}
        };
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{value:value,menu:id,action:'DETAIL',url_action:url_action},
            success: function (data) {

                var result = JSON.parse(data);
                if (result.status=="200") {
                    var index = result.result.map(function(o) { return o.currencyCode; }).indexOf(code_id.toString());
                    var detail = result.result[index];

                    $('#currency_list').val(detail.currencyCode).trigger('change');
                    $('#currency_list').prop('disabled',true)
                    $('#trxBuyRate').val(detail.trxBuyRate);
                    $('#trxMidRate').val(detail.trxMidRate);
                    $('#trxSellRate').val(detail.trxSellRate);
                    $('#bankBuyRate').val(detail.bankBuyRate);
                    $('#bankSellRate').val(detail.bankSellRate);
                    $('#tellerBuyRate').val(detail.tellerBuyRate);
                    $('#tellerSellRate').val(detail.tellerSellRate);
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


    function stateEdit() {

        $('#state').val('edit');
        $('.state_view').hide();
        $('.state_edit').show();
        $('label.state_view').text('-');
        $('#save_screen').hide();
        $('.help-block').show();
        $('#done').hide();
        $('#next_user').hide();
        var rateType = $('#rateType').val();
            if (rateType=='FOREIGN') {
                $('.foreign').show();
                    $('.local').hide();
            } else {
                $('.foreign').hide();
                $('.local').show();
            }

    }

    function stateView() {
        $('#state').val('view');

        // var refNoSpecialRate = ($('#refNoSpecialRate').val() == '' ? '-' : $('#refNoSpecialRate').val());
        var dealRateNo = ($('#dealRateNo option:selected').text() == '' ? '-' : ($('#dealRateNo option:selected').text()+Math.floor(10000000000 + Math.random() * 900000)));
        var corporateId = ($('#corporate_list option:selected').text() == '' ? '-' : $('#corporate_list option:selected').text());

        //debit
        var debitCurrency = ($('#debit_currency option:selected').text() == '' ? '-' : $('#debit_currency option:selected').text());
        var debitAmount = ($('#debit_amount').val() == '' ? '-' : $('#debit_amount').val());
        if(debitCurrency == 'JPY'){
            debitAmount = ($('#debit_amount_jpy').val() == '' ? '-' : $('#debit_amount_jpy').val());
        }

        // credit
        var creditCurrency = ($('#credit_currency option:selected').text() == '' ? '-' : $('#credit_currency option:selected').text());

        var creditAmount = ($('#credit_amount').val() == '' ? '-' : $('#credit_amount').val());
        if(creditCurrency == 'JPY'){
            creditAmount = ($('#credit_amount_jpy').val() == '' ? '-' : $('#credit_amount_jpy').val());
        }


        var specialRate = ($('#specialRate').val() == '' ? '-' :currencyFormat($('#specialRate').val()));
        var remark = ($('#remark').val() == '' ? '-' : $('#remark').val());
        var activeDate = ($('#actvDate_list option:selected').text() == '' ? '-' : $('#actvDate_list option:selected').text());
        var email = ($('#email').val() == '' ? '-' : $('#email').val());

        $('.state_edit').hide();
        $('.state_view').show();

        $("#deal_rate_view").text(dealRateNo);
        $("#refNoSpecialRate").val(dealRateNo);
        $("#corporate_setup_view").text(corporateId);
        $("#debit_curr_view").text(debitCurrency);
        $("#debit_amount_view").text(debitAmount);
        $("#credit_curr_view").text(creditCurrency);
        $("#credit_amount_view").text(creditAmount);
        $("#specialRate_view").text(specialRate);
        $("#remark_view").text(remark);
        $("#activeDate_setup_view").text(activeDate);
        $("#email_view").text(email);


        $('#save_screen').hide();
        $('.help-block').hide();
        $('#done').hide();
        $('#next_user').hide();

        changeLabel(false);

    }

        function currencyFormat (num) {
            var arrNumTemp=num.toString().split('.');

        // jika akhiran 0, di hapus
        if(arrNumTemp.length > 1){
            var decimal = arrNumTemp[1].replace(/\b(\d*?)0+\b/g, '$1');
            if(decimal == ''){
                num = arrNumTemp[0]
            }else{
                num = arrNumTemp[0] + '.' + decimal;
            }
        }

            var arrNum=num.toString().split('.');
            var price = arrNum.length > 1 ?  parseFloat(arrNum[0]).toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")+ '.' + arrNum[1] : parseFloat(arrNum[0]).toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
            return price;
        }

    function validateEmail() {
        var email = $("#email").val();
        if(email.slice(-1) == ','){
            email = email.substring(0,email.length-1);
            $("#email").val(email);
        }
        var emailblock = $("#emailblock");
        emailblock.removeClass('has-error');
        emailblock.find('.with-errors').html('');

        var emailList=email.split(',')

        var emailValid=true
        emailList.forEach(
            val=>{
                if(!isEmailValid(val) && val != '') emailValid=false
            }
        )
        if(emailList.length>10){
            emailblock.addClass('has-error');
            emailblock.find('.with-errors').html('emails should not exceed 10');
            return false;
        }
        if (!emailValid) {
            emailblock.addClass('has-error');
            emailblock.find('.with-errors').html('email not valid');
        }
        return emailValid;
    }
    function isEmailValid(email) {
        var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        return re.test(email);
    }
    function stateSuccess() {
        $('#state').val('success');
        $('#code_1').val('');
        // $('#name').val('');
        $('input.state_edit').val('');
        $('#back_view').hide();
        $('#save_screen').show();
        $('#done').show();
        $('#next_user').show();
    }

    function changeLabel(isBack){
        if (isBack) {

            $('.lblDealRate').html('<strong>Deal Rate No.*</strong>');
            $('.lblcorpID').html('<strong>Corporate ID*</strong>');
            $('.lblDebitCurr').html('<strong>Debit Currency*</strong>');
            $('.lblCreditCurr').html('<strong>Credit Currency*</strong>');
            $('.lblSpecialrate').html('<strong>Special Rate*</strong>');
            $('.lblActiveDate').html('<strong>Active Date*</strong>');
            $('.lblEmail').html('<strong>Email*</strong>');
        } else {
            $('.lblDealRate').html('Deal Rate No.');
            $('.lblcorpID').html('Corporate ID');
            $('.lblDebitCurr').html('Debit Currency');
            $('.lblCreditCurr').html('Credit Currency');
            $('.lblSpecialrate').html('Special Rate');
            $('.lblActiveDate').html('Active Date');
            $('.lblEmail').html('Email');
        }
    }


</script>
