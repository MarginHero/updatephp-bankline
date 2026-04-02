@include('_partials.header_content',['breadcrumb'=>['Pending task','Time Deposit Interest Rate Detail']])

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="referenceNo" value=""/>
            <input type="hidden" id="taskId" value=""/>
            <form class="form-horizontal">
                <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Pending Task Detail</h3><br>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Menu</label>
                                <div class="col-md-6">
                                    <label id="menu_text">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Activity</label>
                                <div class="col-md-6">
                                    <label id="activity_text">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Reference Number</label>
                                <div class="col-md-6">
                                    <label id="noref_text">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Activity Date Time</label>
                                <div class="col-md-6">
                                    <label id="datetime_text">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-header">
                    <h3 class="box-title"> Time Deposit Interest Rate Detail</h3><br>
                </div>
                <div class="box-body">
                    <div class=" list-delete" style="display: none;">
                        <div class="col-md-4">
                            <table id="listDelete" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                                <thead>
                                <tr>
                                    <th align="left"><strong>Interest Rate Date</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="single-delete">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end">Date</label>
                                    <div class="col-md-6">
                                        <label id="date">-</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                               style="border-collapse:collapse;">
                            <thead>
                            <tr>
                                <th align="left"><strong>Currency</strong></th>
                                <th align="left"><strong>Time Deposit Product</strong></th>
                                <th align="left"><strong>Period</strong></th>
                                <th align="left"><strong>Interest Rate (% pa)</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    @include('form.reason')
                </div>

                <div class="box-footer">
                    <div class="state_view" data-html2canvas-ignore="true">
                        <div class="float-left">
                            <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                        </div>
                        <div class="float-right">
                            <button type="button" id="save_screen" name="save_screen" class="btn btn-default" style="display:none" onclick="save_pdf();">@lang('form.save_pdf')</button>
                            <button type="button" id="reject" name="reject" class="btn btn-danger">@lang('form.reject')</button>
                            <button type="button" id="approve" name="approve" class="btn btn-primary">@lang('form.approve')</button>
                        </div>
                    </div>
                    <div class="state_reason" style="display: none;">
                        <div class="float-right">
                            <button type="button" id="rejectSubmit" name="btn_submit_reject" class="btn btn-primary">@lang('form.submit')</button>
                        </div>
                        <div class="float-left">
                            <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                        </div>
                    </div>
                </div>

            </div>
            </form>
        </div>
    </div>

</section>

<script>
    var oTable;
    var oTableList;
    var currencyOption;
    var noRef = 'OT'+$('#referenceNo').val();
    $(document).ready(function () {

        oTable = $('#list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "select": false,
            "searching": false,
            "autoWidth":false,
            "columnDefs": [
               {
                    targets: 0,
                    sortable: false,
                    width: "25%"
                },
                {
                    targets: 1,
                    sortable: false,
                    width: "25%"
                },
                {
                    targets: 2,
                    sortable: false,
                    width: "25%"
                },
                {
                    targets: 3,
                    sortable: false,
                    width: "25%",
                    className:"dt-right",
                }

            ]
        });

        oTableList = $('#listDelete').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "select": false,
            "searching": false,
            "autoWidth":false,
            "columnDefs": [
                {
                    targets: 0,
                    sortable: true,
                    width: "20%"
                },
            ]
        });

        $('#approve').on('click', function () {
            $('#approve').prop('disabled',true);
            $.confirm({
                title: '{{trans('form.confirm')}}',
                content: '{{trans('form.confirm_approve')}}',
                buttons: {

                    cancel: {
                        text: '{{trans('form.cancel')}}',
                        btnClass: 'btn-default',
                        action: function(){
                            $('#approve').prop('disabled',false);
                        }
                    },
                    confirm: {
                        text: '{{trans('form.confirm')}}',
                        btnClass: 'btn-primary',
                        action: function(){
                            submitTask('approve');
                        }
                    },

                }
            });
        });

        $('#rejectSubmit').on('click', function () {
            $('#rejectSubmit').prop('disabled',true);
            $.confirm({
                title: '{{trans('form.confirm')}}',
                content: '{{trans('form.confirm_reject')}}',
                buttons: {

                    cancel: {
                        text: '{{trans('form.cancel')}}',
                        btnClass: 'btn-default',
                        action: function(){
                            $('#rejectSubmit').prop('disabled',false);
                        }
                    },
                    confirm: {
                        text: '{{trans('form.confirm')}}',
                        btnClass: 'btn-primary',
                        action: function(){
                            submitTask('reject');
                        }
                    },

                }
            });
        });

        $('.back').on('click', function () {
            res = app.setView('MNU_GPCASH_PENDING_TASK','landing');
        });

    });

    function getData() {
        var referenceNo = $('#referenceNo').val();
        var value = {
            referenceNo : referenceNo
        };
        var url_action = 'detailPendingTask';
        var action = 'DETAIL';
        var menu = 'MNU_GPCASH_PENDING_TASK';
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
                    var detail = result.details;
                    if (detail.action != 'DELETE_LIST') {
                        $('#refNoInterestRate').text(detail.refNoInterestRate);
                        $('#corporate').text(detail.corporateId);
                        $('#interestRate').text(detail.interestRate);
                        $('#status').text(detail.status);

                        var toDate = moment(detail.toDate, "DD/MM/YYYY");
                        var fromDate = moment(detail.fromDate, "DD/MM/YYYY");
                        var formattedDateTo = toDate.format("DD MMMM YYYY");
                        var formattedDateFrom = fromDate.format("DD MMMM YYYY");

                        $('#date').text(formattedDateFrom + " to " + formattedDateTo);

                       
                        if(detail.action == 'DELETE'){
                            $('#interestRate').text(detail.interestRate);
                            $('#transactionAmountRate').text(detail.transactionAmountRate);
                            $('#expiryDate').text(detail.expiryDate);

                             $.each(detail.detailList, function(i, obj) {
                                oTable.row.add([
                                    obj.currencyCode,
                                    obj.productName,
                                    obj.termName,
                                    obj.interestFormatted
                                ]).draw(false);
                            });


                        }else{
                        $.each(detail.detailList, function(i, obj) {
                            oTable.row.add([
                                obj.currencyCode,
                                obj.productName,
                                obj.termName,
                                currencyFormat(obj.interest)
                            ]).draw(false);
                        });

                        }
                    } else {
                        $(".single-delete").hide();
                        $(".list-delete").show();
                        oTableList.clear();
                        if(detail.interestRateList){
                            $.each(detail.interestRateList, function (idx, obj){
                                oTableList.row.add([
                                    obj.interestDate
                                ]).draw(false);
                            });
                        }
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


            }
        });
    }



    function submitTask(type){
        var id = 'MNU_GPCASH_PENDING_TASK';
        var value = {
            "referenceNo": $('#referenceNo').val(),
            "reason": $("#reason_text").val(),
            "taskId": $('#taskId').val()
        };
        var formReason = $(".state_reason").find('.mb-3.row');
        formReason.removeClass('has-error');
        formReason.find('.with-errors').html('');
        $('#rejectSubmit').prop('disabled',false);

        var action;
        var url_action;
        if(type=='approve'){
            action = 'APPROVE';
            url_action = 'approve';
        }else if(type=='reject'){
            action = 'REJECT';
            url_action = 'reject';
            if (value.reason == '') {
                formReason.addClass('has-error');
                formReason.find('.with-errors').html('{{ trans('form.mandatory') }}');
                return;
            } else{
                $("#reasonLbl").html("Reject Reason")
                $("#reason_view").html(value.reason);
            }
        }else{
            return;
        }

        $.ajax({
            url: 'detail',
            method: 'post',
            data: {"_token": "{{ csrf_token() }}", menu: id, value: value,url_action:url_action,action:action},
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    flash('success', result.message+'<br>'+result.dateTimeInfo);
                    $(window).scrollTop(0);
                    $('#approve').hide();
                    $('#reject').hide();
                    $('#save_screen').show();
                    $('#back').html('{{trans('form.done')}}');
                    $('#approve').prop('disabled',false);
                    $('#reject').prop('disabled',false);
                    $('#rejectSubmit').prop('disabled',false);
                    $('#rejectSubmit').hide();
                    $("#reason_text").hide();
                    $("#reason_view").show();
                    //$(".state_reason").hide();
                    $('.state_view').show();
                }else{
                    flash('warning',result.message+'<br>'+result.dateTimeInfo);
                    $('#approve').prop('disabled',false);
                    $('#reject').prop('disabled',false);
                    $('#rejectSubmit').prop('disabled',false);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                $(window).scrollTop(0);
                $('#approve').prop('disabled',false);
                $('#reject').prop('disabled',false);
                $('#rejectSubmit').prop('disabled',false);
                $('#save_screen').hide();
                flash('warning','{{trans('form.pending_error')}}');
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }
        });
    }

    function currencyFormat (num) {
        var arrNum=num.toString().split('.');
        var price= arrNum.length > 1 ?  parseFloat(arrNum[0]).toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")+ '.' + arrNum[1] : parseFloat(arrNum[0]).toFixed(0).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
        return price;
    }

</script>
@include('form.script')
