@include('_partials.header_content',['breadcrumb'=>['Exchange Rate (USD)','detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="currencyCode" value=""/>
            <div class="box">


                <div class="box-header">
                    <h3 class="box-title">Rate Detail</h3><br>
                </div>
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Currency</label>
                                    <div class="col-md-6">
                                        <label id="currency">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Transaction Buy Rate</label>
                                    <div class="col-md-6">
                                        <label id="trxBuy" class="rate">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Transaction Sell Rate</label>
                                    <div class="col-md-6">
                                        <label id="trxSell" class="rate">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Created By</label>
                                    <div class="col-md-6">
                                        <label id="createdBy">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Created Date</label>
                                    <div class="col-md-6">
                                        <label id="createdDate">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Updated By</label>
                                    <div class="col-md-6">
                                        <label id="updatedBy">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Updated Date</label>
                                    <div class="col-md-6">
                                        <label id="updatedDate">-</label>
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
                "currencyCode": $('#currencyCode').val(),
                "currencyView": $('#currency').text(),
                "trxBuyRate": $("#trxBuy").text(),
                "trxMidRate": $("#trxMid").text(),
                "trxSellRate": $("#trxSell").text(),
                "bankBuyRate": $("#bankBuy").text(),
"trxBuyRateFormatted": $("#trxBuy").text(),
				"trxSellRateFormatted":$("#trxSell").text(),
                "bankSellRate": $("#bankSell").text(),
                "tellerBuyRate": $("#tellerBuy").text(),
                "tellerSellRate": $("#tellerSell").text(),
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

        $("#trxBuy").keydown(function (event) {

            if (event.shiftKey == true) {
                event.preventDefault();
            }

            var val=$("#trxBuy").val();

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
        $("#trxSell").keydown(function (event) {

            if (event.shiftKey == true) {
                event.preventDefault();
            }

            var val=$("#trxSell").val();

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
            var code = $('#currencyCode').val();
            var res = app.setView(id,'add');
            if(res=='done'){
                $('#type').val('edit');
                $('#breadcrumb-action').html('edit');
                $('#code_edit').val(code);
                getRateEdit(code);
            }

        });

    });

    function getMatrix(){
        var currencyCode = $('#currencyCode').val();
        var url_action = 'search';
        var value ={
            currencyCode:currencyCode,
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
                    var index = result.result.map(function(o) { return o.currencyCode; }).indexOf(currencyCode.toString());
                    var detail = result.result[index];

                    $('#currency').text(detail.currencyCode + " - " + detail.currencyName);
                    $('#trxBuy').text(detail.trxBuyRateFormatted);
                    $('#trxMid').text(detail.trxMidRate);
                    $('#trxSell').text(detail.trxSellRateFormatted);
                    $('#bankBuy').text(detail.bankBuyRate);
                    $('#bankSell').text(detail.bankSellRate);
                    $('#tellerBuy').text(detail.tellerBuyRate);
                    $('#tellerSell').text(detail.tellerSellRate);
                    $('#createdBy').text(detail.createdBy);
                    $('#createdDate').text(detail.createdDate);
                    $('#updatedBy').text(detail.updatedBy);
                    $('#updatedDate').text(detail.updatedDate);
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
