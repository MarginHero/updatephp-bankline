@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),$type]])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="type"/>
            <input type="hidden" id="stateType" value=""/>
            <div class="box">
           <div class="box-header">
                     <h3 class="box-title">TD Special Rate Detail</h3>
                </div>
                <form id="form-area" class="form-horizontal form-area">
                <input type="hidden" id="code_edit" value=""/>
                <input type="hidden" id="state" value=""/>
                <input type="hidden" id="submit_mode" value=""/>
                <input  type="hidden" id="period" name="period" >
                <input  type="hidden" id="termType" name="termType" value="F">

                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row state_view" >
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label lblRefNo text-end"><strong>Reference Number&ast;</strong></label>
                                <div class="col-md-5 state_edit">
                                    <input type="text" id="refNoSpecialRate" name="refNoSpecialRate" class="form-control state_edit" autocomplete="off" value="" maxlength="10" data-error="This field is required." required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 state_view">
                                    <label id="refNoSpecialRate_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label lblcorpID text-end"><strong>Corporate ID&ast;</strong></label>
                                <div class="col-md-5 state_edit">
                                    <div class="corporate_setup state_edit"><select class="form-control"></select></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 state_view">
                                    <label id="corporate_setup_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label lbltimeDepo text-end"><strong>Time Deposit Product&ast;</strong></label>
                                <div class="col-md-5 state_edit">
                                    <div class="time_deposit state_edit">
                                        <select class="form-control" id="timeDepositProduct" name="timeDepositProduct" data-error="This field is required." required></select>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 state_view">
                                    <label id="time_deposit_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row state_view" >
                            <div class="mb-3 row row" >
                                <label class="col-md-4 col-form-label text-end ">Period </label>
                                <div class="col-md-6 state_view">
                                    <label id="periodDesc">-</label>
                                </div>

                            </div>
                        </div>
                        <div class="row state_edit" >
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label lblDebitCurr text-end"><strong>Period&ast;</strong></label>
                                <div class="col-md-5 state_edit">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" id="radioFixed" name="prd" value="F" checked> Fixed For
                                            </label>
                                        </div>
                                        <div class="col-md-8" id="timePeriodBlock">
                                            <select id="timePeriod" name="timePeriod" class="form-control state_edit" data-error="This field is required." required></select>
                                            <div class="help-block with-errors" style="color:#dd4b39;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row state_edit">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end"></label>
                                <div class="col-md-5 state_edit">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="radio-inline">
                                                <input type="radio" id="radioMature" name="prd" value="M"> Mature On
                                            </label>
                                        </div>
                                        <div class="col-md-8" id="dateBlock">
                                            <div class="input-group state_edit" id="matureDateBlock">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                <input type="text" id="matureDate" name="matureDate" class="form-control datepicker numeric" autocomplete="off" value="" data-error="This field is required.">
                                            </div>
                                            <div class="input-group state_edit" id="matureDateTomBlock">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text" id="matureDateTom" name="matureDateTom" class="form-control datepickerTom numeric" autocomplete="off" value="" data-error="This field is required." hidden>
                                            </div>
                                            <div class="help-block with-errors" style="color:#dd4b39;"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row ">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label lblSpecialRate text-end"><strong>Special Rate&ast;</strong></label>
                                <div class="col-md-2 state_edit">
                                    <input type="text" id="specialRate" name="specialRate" class="form-control state_edit numeric rateSpecial"  data-error="This field is required." required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-1 state_edit" style="padding-top: 7px; margin-left: -10px;">%</div>
                                <div class="col-md-6 state_view">
                                    <label id="specialRate_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label lblPaymentAmount text-end"><strong>Placement Amount&ast;</strong></label>
                                <div class="col-md-5 state_edit">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select class="form-control" id="placementAmountCurrency">
                                                <option value="IDR">IDR</option>
                                                <option value="USD">USD</option>
                                                <option value="JPY">JPY</option>
                                            </select>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" id="placementAmount" name="placementAmount" class="state_edit form-control amount" autocomplete="off" value="" data-error="This field is required." required>
                                            <input type="text" id="placementAmountJpy" name="placementAmountJpy" class="state_edit form-control amountJpy" autocomplete="off" value="" data-error="This field is required." required>
                                        </div>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 state_view">
                                    <label id="payment_amount_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-4 col-form-label text-end">Remark</label>
                                <div class="col-md-5 state_edit">
                                    <input type="text" id="remark" maxlength="200" name="remark" class="form-control state_edit" autocomplete="off" value="" >
                                </div>
                                <div class="col-md-6 state_view">
                                    <label id="remark_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div id="emailblock" class="mb-3 row">
                                <label class="col-md-4 col-form-label lblEmail text-end">Email</label>
                                <div class="col-md-5 state_edit">
                                    <input type="text" id="email" maxlength="1000" name="email" class="form-control state_edit" autocomplete="off" value="">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 state_view">
                                    <label id="email_view" class="state_view"></label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 row" id="validUntilBlock">
                                <label class="col-md-4 col-form-label lblExpDate text-end"><strong>Valid Until&ast;</strong></label>
                                <div class="col-md-5 state_edit">
                                    <div class="row">
                                        <div class="col-md-8 validUntil_setup">
                                            <select class="form-control"></select>
                                        </div>
                                        <div class="col-md-4">
                                            <input id="expHour" class="form-control edit expHour_cls" type="text" maxlength="5" data-error="This field is required." required>
                                        </div>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 state_view">
                                    <label id="validUntil_setup_view" class="state_view"></label>
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
    var unitOption;
    var cityOption;
    var submit_data;
    var id = '{{ $service }}';
    var noRef;
    $(document).ready(function () {

        $(document).validator().on('#form-area','submit', function (e) {
            if (e.isDefaultPrevented()) {
                // handle the invalid form...
            } else {
                // everything looks good!

            }
        });
        $('#matureDate').on('change', function() {
            clearErrorPeriod()
            if($(this).val() != '') {
                var dateBlock = $("#dateBlock");
                dateBlock.removeClass('has-error');
                dateBlock.find('.with-errors').html('');
            }
        });
        $('#matureDateTom').on('change', function() {
            clearErrorPeriod()
            // Clear error when date is selected
            if($(this).val() != '') {
                var dateBlock = $("#dateBlock");
                dateBlock.removeClass('has-error');
                dateBlock.find('.with-errors').html('');
            }
        });

        $('#refNoSpecialRate').on('input', function() {
            var refNoBlock = $(this).closest('.mb-3');
            if($(this).val().trim() != '') {
                refNoBlock.removeClass('has-error');
                refNoBlock.find('.with-errors').html('');
            }
        });

        $('#corporate_list').on('change', function() {
            var corporateBlock = $(this).closest('.mb-3');
            if($(this).val() != null && $(this).val() != '') {
                corporateBlock.removeClass('has-error');
                corporateBlock.find('.with-errors').html('');
            }
        });

        $('#specialRate').on('input', function() {
            var specialRateBlock = $(this).closest('.mb-3');
            if($(this).val().trim() != '') {
                specialRateBlock.removeClass('has-error');
                specialRateBlock.find('.with-errors').html('');
            }
        });

        $('#placementAmount').on('input', function() {
            var placementAmountBlock = $(this).closest('.mb-3');
            if($(this).val().trim() != '') {
                placementAmountBlock.removeClass('has-error');
                placementAmountBlock.find('.with-errors').html('');
            }
        });

        $('#placementAmountJpy').on('input', function() {
            var placementAmountBlock = $(this).closest('.mb-3');
            if($(this).val().trim() != '') {
                placementAmountBlock.removeClass('has-error');
                placementAmountBlock.find('.with-errors').html('');
            }
        });

        $('#email').on('input', function() {
            var emailblock = $("#emailblock");
            if($(this).val().trim() != '') {
                emailblock.removeClass('has-error');
                emailblock.find('.with-errors').html('');
            }
        });

        $('#expHour').on('input', function() {
            var validUntilBlock = $("#validUntilBlock");
            if($(this).val().trim() != '') {
                validUntilBlock.removeClass('has-error');
                validUntilBlock.find('.with-errors').html('');
            }
        });

        $('#timePeriod').on('change', function() {
            var selectedValue = $('#timePeriod :selected').attr('data-termParam');
            $('#period').autoNumeric('set', selectedValue);
            clearErrorPeriod();
            // Clear error when period is selected
            if($(this).val() != null && $(this).val() != '') {
                var timePeriodBlock = $("#timePeriodBlock");
                timePeriodBlock.removeClass('has-error');
                timePeriodBlock.find('.with-errors').html('');
            }
        });
        $('#placementAmountCurrency').on('change', function() {

            if($('#placementAmountCurrency').val()!='JPY'){
                $('#placementAmount').show()
                $('#placementAmountJpy').hide()
            }else{
                $('#placementAmount').hide()
                $('#placementAmountJpy').show()
            }
            $('.amount').autoNumeric('set', '');
            $('.amountJpy').autoNumeric('set', '');
        });
        getCorporate();
        validUntiSetup();
        stateEdit();
        getTimeDepositProduct();
        $("#matureDate").prop('disabled', true);
        $("#matureDateTom").prop('disabled', true);
        $('input[type=radio][name=prd]').change(function() {
            clearErrorPeriod()

            $('#matureDate').val('');
            $('#matureDateTom').val('');
            $('#timePeriod').val('').change();

            $('#termType').val(this.value);
            if (this.value == 'F') {
                $("#matureDate").prop('disabled', true);
                $("#matureDateTom").prop('disabled', true);
                $("#timePeriod").prop('disabled', false);

                if($("#timePeriod").val() == null || $("#timePeriod").val() == ""){
                    var timePeriodBlock = $("#timePeriodBlock");
                    timePeriodBlock.addClass('has-error');
                    timePeriodBlock.find('.with-errors').html('<span style="color:#dd4b39;">This field is required</span>');
                }
            }else{
                $("#matureDate").prop('disabled', false);
                $("#matureDateTom").prop('disabled', false);
                $("#timePeriod").prop('disabled', true);

                // Show error if date is empty when Mature On is selected
                if($("#matureDate").val() == '' && $("#matureDateTom").val() == ""){
                    var dateBlock = $("#dateBlock");
                    dateBlock.addClass('has-error');
                    dateBlock.find('.with-errors').html('<span style="color:#dd4b39;">This field is required</span>');
                }
            }
        });
        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true,
            startDate:  moment($('#expDate_list').val(),'DD MMMM YYYY').format('DD/MM/YYYY'),
            endDate:  moment($('#expDate_list').val(),'DD MMMM YYYY').add(27, 'days').format('DD/MM/YYYY'),
        });
        $('.datepickerTom').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true,
            startDate:  moment($('#expDate_list').val(),'DD MMMM YYYY').add(28, 'days').format('DD/MM/YYYY'),
            endDate:  moment($('#expDate_list').val(),'DD MMMM YYYY').add(393, 'days').format('DD/MM/YYYY'),
        });
        $('.expHour_cls').each(function(){
                        var optionsStart = {
                                $el: $(this),
                                mask: 'HH:MM',
                                isUtc: true
                      };

                        Mask.newMask(optionsStart);
                    });

        $('#submit_view').on('click', function () {
            $(this).prop('disabled',true);
            var content ='';

                content='{{trans('form.confirm_add_submit')}}';

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
            var matureDate='';
            var termType= $('#termType').val();
            var product=$("#timeDepositProduct").val();
            if(termType == 'M'){
                if(product == '001'){
                    matureDate = moment($('#matureDate').val(),'DD/MM/YYYY').format("DD/MM/YYYY HH:mm:ss")
                }else if(product =='002'){
                    matureDate = moment($('#matureDateTom').val(),'DD/MM/YYYY').format("DD/MM/YYYY HH:mm:ss")
                }
            }
            var expiryTs =moment($('#expDate_list').val(),'DD MMMM YYYY').format("DD/MM/YYYY") +' '+$('#expHour').val()+':00';
            var value = {
                "refNoSpecialRate": $('#refNoSpecialRate').val(),
                "corporateId": $('#corporate_list').val(),
                "period": $('#period').autoNumeric('get'),
                "timePeriod": $("#timePeriod").val(),
                "timePeriodName": $("#timePeriod :selected").text(),
                "periodName": $("#timeDepositProduct :selected").text(),
                "termCode": $('#timePeriod :selected').attr('data-termCode'),
                "product": product,
                "termType":   $('#termType').val(),
                "specialRate": $('#specialRate').val(),
                "specialRateFormatted": currencyFormat($('#specialRate').val()),
                "expiryDate": $('#expDate_list').val(),
                "expiryTimestamp": expiryTs,
                "expHour": $('#expHour').val(),
                "periodDesc": $('#periodDesc').text(),
                "matureDate": matureDate,
                "coporateDesc": $('#corporate_list option:selected').text(),
                "placementAmountCurrency": $('#placementAmountCurrency').val(),
                "placementAmount": $('#placementAmountCurrency').val()!='JPY'?$('#placementAmount').autoNumeric('get'):$('#placementAmountJpy').autoNumeric('get'),
                "email": $('#email').val(),
                "remark": $('#remark').val(),
                "status" : "OPEN",
            };


            var url_action = "";

                url_action = "add";


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
            if( $('#placementAmountCurrency').val()!='JPY'){
                $('#placementAmountJpy').val( $('#placementAmount').val())
            }else {
                $('#placementAmount').val( $('#placementAmountJpy').val())
            }
            $('#form-area').validator('validate');
            var isError=false;


            if (!validateCorporate()) {
                isError=true;
            }

            if (!validateTimeDepositProduct()) {
                isError=true;
            }

            if (!validateSpecialRate()) {
                isError=true;
            }

            if (!validatePlacementAmount()) {
                isError=true;
            }

            if (!validateEmail()) {
                isError=true;
            }
            if (!validateTime()) {
                isError=true;
            }
            if (!validatePeriode()) {
                isError=true;
            }
            if(isError){
                return;
            }
            setTimeout(function(){
                if($('#form-area').validator('validate').has('.has-error').length==0){
                    $('#submit_type').val('submit');
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

        $('.back').on('click', function () {
            $(this).prop('disabled',true);

            app.setView(id,'landing')

        });

        $('#done').on('click', function () {
            $(this).prop('disabled',true);
            app.setView(id,'landing');
        });

        $('#refNoSpecialRate').alphanum({
            allowSpace: false,
            allow : ''
        });
        $('#email').alphanum({
            allowSpace: false,
            allow : '@;.'
        });
        $('#remark').alphanum({
            allowSpace: false,
            allow : ' '
        });
        $('#period').autoNumeric('init',{
            emptyInputBehavior: 'focus',
            // allowDecimalPadding : false,
            minimumValue:'0',maximumValue:'999'
        });
        $('.rate').autoNumeric('init',{
            emptyInputBehavior: 'focus',
            // allowDecimalPadding : false,
            minimumValue:'0',maximumValue:'999'
        });
        $("#specialRate").keydown(function (event) {

            if (event.shiftKey == true) {
                event.preventDefault();
            }

            var val=$("#specialRate").val();

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
        $('.amount').autoNumeric('init',{
            emptyInputBehavior: 'focus',
            digitGroupSeparator        : ',',
            decimalCharacter           : '.',
            decimalCharacterAlternative: '.',
            // allowDecimalPadding : false,
            minimumValue:'0.00',maximumValue:'999999999999999.99'
        });
        $('.amountJpy').autoNumeric('init',{
            emptyInputBehavior: 'focus',
            digitGroupSeparator        : ',',
            decimalCharacter           : '.',
            decimalCharacterAlternative: '.',
            // allowDecimalPadding : false,
            minimumValue:'0',maximumValue:'999999999999999'
        });
        $('#placementAmountJpy').hide()
    });

    function getInputDetail(stateType) {
        var corporateId = $('#code_edit').val();

        var url_action = 'getInputDetail';
        var action = 'SEARCH';
        var currency, product, term = [];
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                // value : value,
                menu : 'MNU_GPCASH_MT_TD_INTEREST_RATE',
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    currency = result.currency;
                    product = result.product;
                    term = result.term;
                    generateListDataDetail(currency, product, term, stateType);
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


    function validateRefNo() {
        var refNo = $("#refNoSpecialRate").val().trim();
        var refNoBlock = $("#refNoSpecialRate").closest('.mb-3');
        refNoBlock.removeClass('has-error');
        refNoBlock.find('.with-errors').html('');

        if (refNo == '') {
            refNoBlock.addClass('has-error');
            refNoBlock.find('.with-errors').html('<span style="color:#dd4b39;">This field is required.</span>');
            return false;
        }
        return true;
    }

    function validateCorporate() {
        var corporate = $("#corporate_list").val();
        var corporateBlock = $("#corporate_list").closest('.mb-3');
        corporateBlock.removeClass('has-error');
        corporateBlock.find('.with-errors').html('');

        if (corporate == null || corporate == '') {
            corporateBlock.addClass('has-error');
            corporateBlock.find('.with-errors').html('<span style="color:#dd4b39;">This field is required.</span>');
            return false;
        }
        return true;
    }

    function validateTimeDepositProduct() {
        var timeDeposit = $("#timeDepositProduct").val();
        var timeDepositBlock = $("#timeDepositProduct").closest('.mb-3');
        timeDepositBlock.removeClass('has-error');
        timeDepositBlock.find('.with-errors').html('');

        if (timeDeposit == null || timeDeposit == '') {
            timeDepositBlock.addClass('has-error');
            timeDepositBlock.find('.with-errors').html('<span style="color:#dd4b39;">This field is required.</span>');
            return false;
        }
        return true;
    }

    function validateSpecialRate() {
        var specialRate = $("#specialRate").val().trim();
        var specialRateBlock = $("#specialRate").closest('.mb-3');
        specialRateBlock.removeClass('has-error');
        specialRateBlock.find('.with-errors').html('');

        if (specialRate == '' || specialRate == '0' || specialRate == '0.00') {
            specialRateBlock.addClass('has-error');
            specialRateBlock.find('.with-errors').html('<span style="color:#dd4b39;">This field is required.</span>');
            return false;
        }
        return true;
    }

    function validatePlacementAmount() {
        var currency = $('#placementAmountCurrency').val();
        var placementAmount = '';
        var placementAmountBlock;

        if(currency != 'JPY') {
            placementAmount = $("#placementAmount").autoNumeric('get');
            placementAmountBlock = $("#placementAmount").closest('.mb-3');
        } else {
            placementAmount = $("#placementAmountJpy").autoNumeric('get');
            placementAmountBlock = $("#placementAmountJpy").closest('.mb-3');
        }

        placementAmountBlock.removeClass('has-error');
        placementAmountBlock.find('.with-errors').html('');

        if (placementAmount == '' || placementAmount == null || placementAmount == '0' || parseFloat(placementAmount) == 0) {
            placementAmountBlock.addClass('has-error');
            placementAmountBlock.find('.with-errors').html('<span style="color:#dd4b39;">This field is required.</span>');
            return false;
        }
        return true;
    }

    function validateEmail() {
        var email = $("#email").val().trim();

        if(email == '') {
            return true;
        }

        if(email.slice(-1) == ';'){
            email = email.substring(0,email.length-1);
            $("#email").val(email);
        }
        var emailblock = $("#emailblock");
        emailblock.removeClass('has-error');
        emailblock.find('.with-errors').html('');

        var emailList=email.split(';')

        var emailValid=true
        emailList.forEach(
            val=>{
               if(!isEmailValid(val.trim()) && val.trim() != '' ) emailValid=false
            }
        )
        if(emailList.length>10){
            emailblock.addClass('has-error');
            emailblock.find('.with-errors').html('<span style="color:#dd4b39;">emails should not exceed 10</span>');
            return false;
        }

        if (!emailValid) {
            emailblock.addClass('has-error');
            emailblock.find('.with-errors').html('<span style="color:#dd4b39;">email not valid</span>');
        }
        return emailValid;
    }
    function isEmailValid(email) {
        var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        return re.test(email);
    }
    function validateTime(){
        var time = $('#expHour').val();
        var isValid = /^(?:[01][0-9]|2[0-3]):[0-5][0-9](?::[0-5][0-9])?$/.test(time);
        var validUntilBlock = $("#validUntilBlock");
        validUntilBlock.removeClass('has-error');
        validUntilBlock.find('.with-errors').html('');
        if(!isValid){
            validUntilBlock.addClass('has-error');
            validUntilBlock.find('.with-errors').html('<span style="color:#dd4b39;">invalid time input.</span>');
        }
        return isValid;
    }
    function validatePeriode(){
        clearErrorPeriod();
        var timePeriodBlock = $("#timePeriodBlock");
        var dateBlock = $("#dateBlock");
        if ($('#termType').val() == 'F') {
            if($("#timePeriod").val()==null || $("#timePeriod").val()==""){
                timePeriodBlock.addClass('has-error');
                timePeriodBlock.find('.with-errors').html('<span style="color:#dd4b39;">This field is required.</span>');
                return false;
            }
        }else{

            if($("#matureDate").val()=='' && $("#matureDateTom").val()==""){
                dateBlock.addClass('has-error');
                dateBlock.find('.with-errors').html('<span style="color:#dd4b39;">This field is required.</span>');
                return false;
            }
        }
        return true;
    }
    function loadState() {
        var stateType = $('#stateType').val();
        currState = stateType;
        if (stateType == 'ADD') {
            stateAdd();
            getInputDetail('')
        } else if (stateType == 'DELETE'){
            getInputDetail(stateType)
        }
    }

    function validUntiSetup() {

        var today = moment(new Date(), "DD/MM/YYYY hh:mm").format("DD MMMM YYYY");
        var tom = moment(new Date()).add(1, 'days').format("DD MMMM YYYY");

        unitOption = '<select id="expDate_list" class="form-control state_edit">';
        unitOption += '<option value="'+today+'" selected="selected">'+today.toString().toUpperCase()+'</option>';
        unitOption += '<option value="'+tom+'">'+tom.toString().toUpperCase()+'</option>';
        unitOption += '</select>';

        $('.validUntil_setup').html(unitOption);

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
                    unitOption = '<select id="corporate_list" class="form-control state_edit" data-error="This field is required." required>';
                    unitOption += '<option value="" selected="selected"></option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.corporateId + '">'+ obj.corporateId + ' - ' + obj.corporateName + '</option>';
                    });
                    unitOption += '</select>';

                    $('.corporate_setup').html(unitOption);
                    $('#corporate_list').select2();

                    $(document).on('change', '#corporate_list', function() {
                        var corporateBlock = $(this).closest('.mb-3');
                        if($(this).val() != null && $(this).val() != '') {
                            corporateBlock.removeClass('has-error');
                            corporateBlock.find('.with-errors').html('');
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
    function getTimeDepositProduct(){
        var value = {
            code: "",
            name: "",
            modelCode: "COM_MT_TD_PRODUCTS"
        };
        var url_action = 'getTimeDepositProduct';
        var action = 'SEARCH';
        var menu = 'MNU_GPCASH_MT_TD_PRODUCT';

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
                unitOption = '<select id="timeDepositProduct" class="form-control state_edit" data-error="This field is required." required>';
                unitOption += '<option value="" selected="selected"></option>';
                $.each(result.result, function (idx, obj) {
                    unitOption += '<option value="' + obj.code + '">'+ obj.name +'</option>';
                });
                unitOption += '</select>';

                $('.time_deposit').html(unitOption);
                $('#timeDepositProduct').on('change', function(e) {
                    var  selectedValue = $(this).val();

                    var timeDepositBlock = $(this).closest('.mb-3');
                    if(selectedValue != null && selectedValue != '') {
                        timeDepositBlock.removeClass('has-error');
                        timeDepositBlock.find('.with-errors').html('');
                    }

                    if(selectedValue == '001'){
                        $('#matureDateBlock').show();
                        $('#matureDateTomBlock').hide();
                    }else if (selectedValue == '002'){
                        $('#matureDateBlock').hide();
                        $('#matureDateTomBlock').show();
                    }

                    getPeriod(selectedValue);
                })

            }, error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }
        });
    }
    function getPeriod(productCode){
        var value = {
            productCode:productCode
        };
        var url_action = 'searchTermByProductsForDroplist';
        var action = 'SEARCH';

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
                unitOption = '<select id="timePeriod" class="form-control state_edit" data-error="This field is required." required>';
                unitOption += '<option value="" selected="selected"></option>';
                $.each(result.result, function (idx, obj) {
                    var val=obj.typeName.toString().substring(0,obj.typeName.length-1);
                    val+='(s)';
                    unitOption += '<option value="' + val + '" data-termCode = "'+obj.code+'"data-termParam = "'+obj.termParam+'">'+ obj.name +'</option>';
                });
                unitOption += '</select>';

                $('#timePeriod').html(unitOption);
            }, error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
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
        $('#matureDateTomBlock').hide();
        if($('#placementAmountCurrency').val()!='JPY'){
            $('#placementAmount').show()
            $('#placementAmountJpy').hide()
        }else{
            $('#placementAmount').hide()
            $('#placementAmountJpy').show()
        }
    }

    function stateView() {

        var matureDate='';
        var product=$("#timeDepositProduct").val();
        if(product == '001'){
            matureDate = $("#matureDate").val()
        }else if(product =='002'){
            matureDate = $("#matureDateTom").val()
        }

        $('#state').val('view');

        var refNoSpecialRate = new Date().getFullYear() + '' +(Math.floor(10000000000 + Math.random() * 900000));

        var corporateId = ($('#corporate_list option:selected').text() == '' ? '-' : $('#corporate_list option:selected').text());

        var timedeposit = ($('#timeDepositProduct option:selected').text() == '' ? '-' : $('#timeDepositProduct option:selected').text());

        var specialRate = ($('#specialRate').val() == '' ? '-' : currencyFormat($('#specialRate').val()));

        var expiryDate = ($('#expDate_list').val() == '' ? '-' : $('#expDate_list').val().toUpperCase()+' '+$('#expHour').val());

        //period
        var timePeriod = $("#timePeriod :selected").text();

        // Placement amount
        var placementAmount = $('#placementAmountCurrency').val()!='JPY'?$('#placementAmount').val():$('#placementAmountJpy').val();
        var placementAmountCurrency = $("#placementAmountCurrency :selected").text();
        var email = $("#email").val();
        var remark = ($('#remark').val() == '' ? '-' : $('#remark').val());
        var periodDesc=  $('#termType').val() == 'F' ? 'Fixed For '+ $("#timePeriod :selected").text() :   'Mature On ' + matureDate
        $('.state_edit').hide();
        $('.state_view').show();

        $('#refNoSpecialRate').val(refNoSpecialRate);
        $('#refNoSpecialRate_view').text(refNoSpecialRate);
        $('#corporate_setup_view').text(corporateId);
        $('#periodDesc').text(periodDesc);

        $('#time_deposit_view').text(timedeposit);

        $('#validUntil_setup_view').text(expiryDate);

        $('#specialRate_view').text(specialRate+ " %");

        $("#period_setup_view").text(timePeriod);
        $("#payment_amount_view").text(placementAmountCurrency + " " + placementAmount);
        $('#email_view').text(email);
        $('#remark_view').text(remark);

        $('#save_screen').hide();
        $('.help-block').hide();
        $('#done').hide();
        $('#next_user').hide();

        changeLabel(false);

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
            $('.lblRefNo').html('<strong>Reference Number*</strong>');

            $('.lblcorpID').html('<strong>Corporate ID*</strong>');
            $('.lbltimeDepo').html('<strong>Time Deposit Product*</strong>');
            $('.lblSpecialRate').html('<strong>Special Rate*</strong>');
            $('.lblExpDate').html('<strong>Valid Until*</strong>');
            $('.lblPeriod').html('<strong>Placement Amount*</strong>');
            $('.lblPaymentAmount').html('<strong>Placement Amount*</strong>');
            $('.lblEmail').html('<strong>Email*</strong>');
        } else {
            $('.lblRefNo').html('Reference Number');

            $('.lblcorpID').html('Corporate ID');
            $('.lbltimeDepo').html('Time Deposit Product');
            $('.lblSpecialRate').html('Special Rate');
            $('.lblExpDate').html('Valid Until');
            $('.lblPeriod').html('Period');
            $('.lblPaymentAmount').html('Placement Amount');
            $('.lblEmail').html('Email');
        }


    }

    function currencyFormat (num) {
        var arrNum=num.toString().split('.');
        var price= arrNum.length > 1 ?  parseFloat(arrNum[0]).toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")+ '.' + arrNum[1] : parseFloat(arrNum[0]).toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
        return price;
    }
    function clearErrorPeriod () {
        var timePeriodBlock = $("#timePeriodBlock");
        var dateBlock = $("#dateBlock");
        timePeriodBlock.removeClass('has-error');
        dateBlock.removeClass('has-error');
        timePeriodBlock.find('.with-errors').html('');
        dateBlock.find('.with-errors').html('');
    }

</script>
