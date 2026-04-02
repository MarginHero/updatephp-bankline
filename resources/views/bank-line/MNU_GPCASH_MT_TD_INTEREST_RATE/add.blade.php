@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),$type]])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="type"/>
            <input type="hidden" id="stateType" value=""/>
            <div class="box">
            <form id="form-area" class="form-horizontal form-area">
                <div class="box-header">
                    <h3 class="box-title">RATE DETAIL</h3>
                </div>
                <input type="hidden" id="code_edit" value=""/>
                <input type="hidden" id="state" value=""/>
                <input type="hidden" id="submit_mode" value=""/>
                <input type="hidden" id="refNoInterestRate" name="refNoInterestRate" value="" >
                <div class="box-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="mb-3 row form-group">
                            <label class="col-md-2 col-form-label text-end lblDate"><strong>Date*</strong></label>
                            <div class="col-md-10">
                                <div class="row g-2 align-items-center">
                                    <div class="col-auto state_edit">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            <input type="text" id="fromDate" name="fromDate" class="form-control datepicker detail numeric" autocomplete="off" value="" data-error="Date is Mandatory" required>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <label id="fromDate_view" class="col-auto state_view">-</label>
                                    <div class="col-auto mx-2">
                                        <label class="col-form-label"><strong>to</strong></label>
                                    </div>
                                    <div class="col-auto state_edit">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            <input type="text" id="toDate" name="toDate" class="form-control datepicker numeric" autocomplete="off" value="" data-error="Date is Mandatory" required>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <label id="toDate_view" class="col-auto state_view">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header">
                    <h3 class="box-title">RATE LISTING</h3>
                </div>
                <div class="box-body">
                    <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                       style="border-collapse:collapse;">
                        <thead>
                            <tr>
                                <th align="left"><strong>Currency</strong></th>
                                <th align="left"><strong>Time Deposit Product</strong></th>
                                <th align="left"><strong>Period</strong></th>
                                <th align="left"><strong>Interest Rate (% pa)</strong></th>
                                <!-- <th align="left" class="state_edit"><strong></strong></th> -->
                            </tr>
                        </thead>
                    </table>
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
    var detailList;
    $(document).ready(function () {

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose: true
        });

        // $('#fromDate').val(moment(new Date(), "DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        // $('#toDate').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));

        // setRefNo();

        $(document).validator().on('#form-area','submit', function (e) {
            if (e.isDefaultPrevented()) {
                // handle the invalid form...
            } else {
                // everything looks good!

            }
        });

        oTable = $('#list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "columnDefs": [
               {
                    targets: 0,
                    sortable: false,
                    width: "20%"
                },
                {
                    targets: 1,
                    sortable: false,
                    width: "20%"
                },
                {
                    targets: 2,
                    sortable: false,
                    width: "20%"
                },
                {
                    targets: 3,
                    sortable: false,
                    width: "20%"

                }
            ]
        });


        $('.expHour_cls').each(function(){
                        var optionsStart = {
                                $el: $(this),
                                mask: 'HH:mm',
                                isUtc: true
                      };

                        Mask.newMask(optionsStart);
                    });

        $('#submit_view').on('click', function () {
            $(this).prop('disabled',true);
            var content ='';

            if (currState == 'ADD') {
                content = '{{trans('form.confirm_add')}}';
            } else if (currState == 'DELETE'){
                content='{{trans('form.confirm_delete')}}';
                submit_data = getTableData();
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

        $(".datepicker").change(function(){
            setRefNo();

            var $field = $(this);
            var $formGroup = $field.closest('.col-auto');
            var $helpBlock = $formGroup.find('.help-block');

            if($field.val() !== '' && $field.val() !== null) {
                $formGroup.removeClass('has-error');
                $field.css('border-color', '');
                $helpBlock.html('').hide();
            }
        });

        function submitData(){
            var value = {
                "fromDate": $('#fromDate').val(),
                "toDate": $('#toDate').val(),
                "detailList": getTableData(),
                "refNoInterestRate": $("#refNoInterestRate").val()
            };


            var url_action = '';
            if (currState == 'ADD') {
                url_action = 'add';
            } else if (currState == 'DELETE') {
                url_action = 'delete';
                action = 'submitDelete';
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
            $(".interestError").hide();

            var hasError = false;

            var $fromDate = $('#fromDate');
            var $fromDateFormGroup = $fromDate.closest('.col-auto');
            var $fromDateHelpBlock = $fromDateFormGroup.find('.help-block');

            if($fromDate.val() === '' || $fromDate.val() === null) {
                hasError = true;
                $fromDateFormGroup.addClass('has-error');
                $fromDate.css('border-color', '#a94442');
                $fromDateHelpBlock.html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
            } else {
                $fromDateFormGroup.removeClass('has-error');
                $fromDate.css('border-color', '');
                $fromDateHelpBlock.html('').hide();
            }

            var $toDate = $('#toDate');
            var $toDateFormGroup = $toDate.closest('.col-auto');
            var $toDateHelpBlock = $toDateFormGroup.find('.help-block');

            if($toDate.val() === '' || $toDate.val() === null) {
                hasError = true;
                $toDateFormGroup.addClass('has-error');
                $toDate.css('border-color', '#a94442');
                $toDateHelpBlock.html('<ul class="list-unstyled"><li style="color:#a94442;">This field is required.</li></ul>').show();
            } else {
                $toDateFormGroup.removeClass('has-error');
                $toDate.css('border-color', '');
                $toDateHelpBlock.html('').hide();
            }

            // If dates are valid, check other fields and proceed
            if (!hasError) {
                submit_data = getTableData();
                $('#submit_type').val('submit');
                if (!submitData) {
                    return;
                }
                stateView();
                submit_data = {};
            }else {
                window.scrollTo(0, 0)
            }
        });

        function getTableData() {
            var data = [];

            $("#list").find("tbody tr").each(function(){

                var currencyCode = $('td:eq(0)', $(this)).find('#currency').text();
                var productName = $('td:eq(1)', $(this)).find('#product').text();
                var productCode = $('td:eq(1)', $(this)).find('#product_code').val();
                var termName = $('td:eq(2)', $(this)).find('#term').text();
                var termCode = $('td:eq(2)', $(this)).find('#term_code').val();
                var interest = $('td:eq(3)', $(this)).find('#interest').val();
                if (interest == '') {
                    $('td:eq(3)', $(this)).find('.interestError').show();
                }
                var interestFormatted = currencyFormat($('td:eq(3)', $(this)).find('#interest').val());
                var obj = {
                    currencyCode,
                    productName,
                    productCode,
                    termName,
                    termCode,
                    interest,
                    interestFormatted,
                };

                data.push(obj);
            });

            return data;
        }

        /*$('#submit_add').on('click', function () {
            $('#submit_type').val('submit_add');
            stateView();
        });*/

        $('#back_view').on('click', function () {
            $(this).prop('disabled',true);
            $('#back').show();

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
                stateAdd();
                $('#back_view').prop('disabled',false);
                changeLabel(true);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         S   (true);
            }
        });


        /*$('.back').on('click', function () {
            app.setView(id,'landing')

        });*/
        $('.back').on('click', function () {
            $(this).prop('disabled',true);

            app.setView(id,'landing')

        });

        $('#done').on('click', function () {
            $(this).prop('disabled',true);
            app.setView(id,'landing');
        });

        $('#dateInterestRate').alphanum({
            allowSpace: false,
            allow : ''
        });


        $('.rate').autoNumeric('init',{
            emptyInputBehavior: 'focus',
            digitGroupSeparator        : ',',
            decimalCharacter           : '.',
            decimalCharacterAlternative: '.',
            // allowDecimalPadding : false,
            minimumValue:'0.000000',maximumValue:'99.999999'
        });
    });

    function getInputDetail(stateType) {
        var corporateId = $('#code_edit').val();

        var url_action = 'getInputDetail';
        var action = 'DETAIL';
        var currency, product, term = [];
	var value ={
                code:'',
                name:''
            };

        $.ajax({
            url: 'getAPIData',
            method: 'post',

            data: {
                value : value,
                menu : 'MNU_GPCASH_MT_TD_INTEREST_RATE',
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    currency = result.currency;
                    product = result.productMap.result;
                    generateListDataDetail(currency, product, stateType);
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

    function generateDefaultCurrValue() {
        var currency = [];
        var idr = {};
        idr.code = "IDR";
        idr.name = "IDR";
        currency.push(idr);
        var usd = {};
        usd.code = "USD";
        usd.name = "USD";
        currency.push(usd);
        var jpy = {};
        jpy.code = "JPY";
        jpy.name = "JPY";
        currency.push(jpy);

        return currency;
    }

    function generateListDataDetail(currency, product, stateType) {
        oTable.clear();
        // var detailId =
        var data = [];
        if (currency.length == 0) {
            currency = generateDefaultCurrValue();
        }
        $.each(currency, function(currIndex, curr) {
            if (curr.name == "IDR" || curr.name == "USD" || curr.name == "JPY") {
                $.each(product, function(prodIndex, prod) {
                        $.each(prod.termList, function(tIndex, t) {
                        // result.push({currency: curr, product: prod, term: t})
                        var obj = {
                            // id: interestId,
                            currencyCode: curr.code,
                            product: {
                                code: prod.code,
                                name: prod.name
                            },
                            term: {
                                code: t.code,
                                    name: t.termParam + " " + t.typeName,
                            },
                            interestRate:0
                        }
                        data.push(obj);

                    });
                });
            }
        });
        $.each(data, function(i, obj) {
            oTable.row.add([
                '<span id="currency">'+ obj.currencyCode +'</span>'+'<input id="currency_code" name="currency_code" value="' + obj.currencyCode + '" type="hidden"> <input id="currency_name" name="currency_name" value="' + obj.currencyCode + '" type="hidden">',
                '<span id="product">'+obj.product.name +'</span>'+'<input id="product_code" name="product_code" value="' + obj.product.code + '" type="hidden"><input id="product_name" name="product_name" value="' + obj.product.name + '" type="hidden">',
                '<span id="term">'+obj.term.name +'</span>'+'<input id="term_code" name="term_code" value="' + obj.term.code + '" type="hidden"> <input id="term_name" name="term_name" value="' + obj.term.name + '" type="hidden">',
                '<div class="mb-3 row form-group" style="margin:0!important;" ><input id="interest" name="interest" class="form-control state_edit rate'+i+'" value="'+ obj.interestRate +'" type="text" style="width:100%;text-align: right;" data-error="Interest Rate is Mandatory" required><span id="interest_view" class="state_view" style="float: right;">'+obj.interestRate+'</span><div class="help-block with-errors interestError" style="display:none;"></div></div>'
            ]).draw(false);
            $(".rate"+i).keydown(function (event) {

                if (event.shiftKey == true) {
                    event.preventDefault();
                }

                var val=$(".rate"+i).val();

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
        });


        if (stateType == 'DELETE') {
            stateView() ;
        } else {
            stateAdd();
        }
    }

    function stateAdd() {

        $('.editState').hide();
        $('.addState').show();
        $('#state').val('add');
        $('.state_view').hide();
        $('.state_edit').show();
        $('label.state_view').text('-');
        $('#save_screen').hide();
        $("#list").find("tbody tr").each(function () {
            $('td:eq(0)', $(this)).parent().show();
        });
        $('#done').hide();
        $('#next_user').hide();
    }

    function changeLabel(isBack){
        if (isBack) {

            $('.lblDate').html('<strong>Date*</strong>');
        } else {
            $('.lblDate').html('Date');
        }
    }

    function stateView() {
        $("#list").find("tbody tr").each(function(){
            var num = $('td:eq(3)', $(this)).find('#interest').val();
            var arrNum = num.toString().split('.');
            var price = arrNum.length > 1 ?  parseFloat(arrNum[0]).toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")+ '.' + arrNum[1] : parseFloat(arrNum[0]).toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
            $('td:eq(3)', $(this)).find('#interest_view').text(price);
        });

        var fromDate = ($('#fromDate').val() == '' ? '-' : $('#fromDate').val());
        var toDate = ($('#toDate').val() == '' ? '-' : $('#toDate').val());
        $('#fromDate_view').text(fromDate);
        $('#toDate_view').text(toDate);

        $('#back').hide();
        $('#state').val('view');
        $('#preview').text('Preview');
        $('.state_edit').hide();
        $('.state_view').show();
        $('#save_screen').hide();
        $('#done').hide();
        $('#next_user').hide();

        changeLabel(false);
    }

    function stateSuccess() {
        $('#state').val('success');
        $('input.state_edit').val('');
        $('input.check').attr('checked', '');
        $('#save_screen').show();
        $('#back_view').hide();
        $('#back_success').show();
        $('#done').show();
        $('#next_user').show();
        $('#back').hide();
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

    function setRefNo() {
        var refno = "";

        var fromDate = $("#fromDate").val();
        var toDate = $("#toDate").val();

        if (fromDate && toDate) {
            var formattedDateFrom = moment(fromDate, "DD/MM/YYYY").format("YYYYMMDD");
            var formattedDateTo = moment(toDate, "DD/MM/YYYY").format("YYYYMMDD");

            refno = formattedDateFrom + formattedDateTo;
        }

        $("#refNoInterestRate").val(refno);
    }
    function currencyFormat (num) {
        var arrNum = num.toString().split('.');
        var price = arrNum.length > 1 ?  parseFloat(arrNum[0]).toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")+ '.' + arrNum[1] : parseFloat(arrNum[0]).toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
        return price;
    }
</script>
