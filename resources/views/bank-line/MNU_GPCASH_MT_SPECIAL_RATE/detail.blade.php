@include('_partials.header_content',['breadcrumb'=>['Special Rate','detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="currencyCode" value=""/>
            <div class="box">


                <div class="box-header">
                    <h3 class="box-title">Special Rate Detail</h3><br>
                </div>
                <form class="form-horizontal">
                <div class="box-body">
                    <div class="container-fluid">
                    <div class="row">
                        <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label lblDealRate text-end">Deal Rate No.</label>
                                <div class="col-md-6">
                                <label id="refNoSpecialRate">-</label>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label lblcorpID text-end">Corporate ID</label>
                                    <div class="col-md-6">
                                        <label id="corporate">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="mb-3 row form-group row">
                                    <label class="col-md-4 col-form-label lblDebitCurr text-end">Debit Currency</label>
                                    <div class="col-md-6">
                                        <label id="debitCurrency">-</label>
                                        <label id="debitAmount" class="rate">-</label>
					<label id="debitAmountJpy" class="rateJpy" hidden>-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label lblCreditCurr text-end">Credit Currency</label>
                                    <div class="col-md-6 ">
                                        <label id="creditCurrency">-</label>
                                        <label id="creditAmount" class="rate">-</label>
					<label id="creditAmountJpy" class="rateJpy" hidden>-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label lblSpecialrate text-end">Special Rate</label>
                                    <div class="col-md-6">
                                        <label id="specialRate" >-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end">Remark</label>
                                    <div class="col-md-6" style="word-wrap:break-word;width:50%;">
                                        <label id="remark">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label lblActiveDate text-end">Active Date</label>
                                    <div class="col-md-6">
                                        <label id="activeDate">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row" hidden>
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label lblEmail text-end">Email</label>
                                    <div class="col-md-6" style="word-wrap:break-word;width:50%;">
                                        <label id="email">-</label>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">Status</label>
                                <div class="col-md-6">
                                    <label id="status" >-</label>
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
                                       <!--  <button type="button" id="edit" name="edit" class="btn btn-primary">@lang('form.edit')</button> -->
                                        <button type="button" id="next_user" name="next_user" class="btn btn-info" style="display:none">@lang('form.next_user')</button>
                                        <button type="button" id="done" name="done" class="btn btn-primary done" style="display:none">@lang('form.done')</button>

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
    var id = '{{ $service }}';
    var noRef;
    $(document).ready(function () {
        $('.state_delete').hide();

        $('#delete').on('click', function () {

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
                "refNoSpecialRate": $('#refNoSpecialRate').text(),
                "corporateId": $('#corporate').text(),
                "debitCurrency": $("#debitCurrency").text(),
		"debitAmount": $("#debitAmount").text(),
                "unit": $("#unit").text(),
                "specialRate": $("#specialRate").text(),
                "transactionAmountRate": $("#transactionAmountRate").text(),
                "creditCurrency": $("#creditCurrency").text(),
		"creditAmount": $("#creditAmount").text(),
                "type": $("#type").text(),
                "typeRate": $("#type").text(),
                "expiryDate": $("#expiryDate").text(),
                "remark": $("#remark").text(),
                "status": $("#status").text(),
"email": $("#email").text(),
"activeDate": $("#activeDate").text(),
                "createdBy": $("#createdBy").text(),
                "createdDate": $("#createdDate").text(),
            };
            $.ajax({
                url: 'delete',
                method: 'post',
                data: {"_token": "{{ csrf_token() }}", menu: id, value: value,url_action:'submit'},
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
                        $('#back').hide();
                        $('#delete').hide();
                        $('#edit').hide();
                        $('#back').html('{{trans('form.done')}}');
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
            var code = $('#refNoSpecialRate').val();
            var res = app.setView(id,'add');
            if(res=='done'){
                $('#type').val('edit');
                $('#breadcrumb-action').html('edit');
                $('#code_edit').val(code);
                getRateEdit(code);
            }

        });

    });

    function getMatrix(code){
        var refNoSpecialRate = $('#refNoSpecialRate').val();
        var url_action = 'search';
        var value ={
            refNoSpecialRate:code,
            name:'',
            currentPage: "1",
            pageSize: "1"
        };
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{value:value,menu:id,action:'DETAIL',url_action:url_action},
            success: function (data) {

                var result = JSON.parse(data);
                if (result.status=="200") {
                    var detail;
                    if (result.result.length == 1) detail = result.result[0];
                    else {
                        $.each(result.result, function(index, data) {

                            if (data.dealRateNo == refNoSpecialRate) {
                                detail = data;
                            }
                        });
                    }
                    $('#refNoSpecialRate').text(detail.dealRateNo);
                    $('#corporate').text(detail.corporateId+ " - "+detail.corporateName);
                    $('#debitCurrency').text(detail.debitCurrency);
                    $('#debitAmount').text(detail.debitAmount);
                    $('#debitAmountJpy').text(detail.debitAmount);
                    $('#creditCurrency').text(detail.creditCurrency);
                    $('#creditAmount').text(detail.creditAmount);
                    $('#creditAmountJpy').text(detail.creditAmount);
                    $('#specialRate').text(detail.specialRateFormatted);
                    $('#activeDate').text(detail.activeDate);
                    $('#remark').text(detail.remark);
                    $('#email').text(detail.email);
                    $('#status').text(detail.status);

		    	if(detail.creditCurrency == 'JPY'){
				$('#creditAmountJpy').show();
				$('#creditAmount').hide();
			}else{
				$('#creditAmountJpy').hide();
				$('#creditAmount').show();
			}

			if(detail.debitCurrency == 'JPY'){
				$('#debitAmountJpy').show();
				$('#debitAmount').hide();
			}else{
				$('#debitAmountJpy').hide();
				$('#debitAmount').show();
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

                $('.rate').autoNumeric('init',{
                    emptyInputBehavior: 'focus',
                    digitGroupSeparator        : ',',
                    decimalCharacter           : '.',
                    decimalCharacterAlternative: '.',
                    // allowDecimalPadding : false,
                    minimumValue:'0.00',maximumValue:'999999999999999.99'
                });
                $('.rateSpecial').autoNumeric('init',{
                    emptyInputBehavior: 'focus',
                    digitGroupSeparator        : ',',
                    decimalCharacter           : '.',
                    decimalCharacterAlternative: '.',
                    // allowDecimalPadding : false,
                    minimumValue:'0.000000',maximumValue:'999999999999999.999999'
                });
		$('.rateJpy').autoNumeric('init',{
                    emptyInputBehavior: 'focus',
                    digitGroupSeparator        : ',',
                    decimalCharacter           : '.',
                    decimalCharacterAlternative: '.',
                    // allowDecimalPadding : false,
                    minimumValue:'0',maximumValue:'999999999999999'
                });
            }
        });
    }


</script>
