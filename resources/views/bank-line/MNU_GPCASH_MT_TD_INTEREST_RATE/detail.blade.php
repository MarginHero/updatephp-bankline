@include('_partials.header_content',['breadcrumb'=>['Time Deposit Interest Rate','detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="interestId" value=""/>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">RATE DETAIL</h3><br>
                </div>
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end">Date</label>
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
    var submit_data;
    $(document).ready(function () {
        $('.state_delete').hide();

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

            $.ajax({
                url: 'delete',
                method: 'post',
                data: {"_token": "{{ csrf_token() }}", menu: id, value: submit_data,url_action:'submit'},
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
            var code = $('#refNoInterestRate').val();
            var res = app.setView(id,'add');
            if(res=='done'){
                $('#type').val('edit');
                $('#breadcrumb-action').html('edit');
                $('#code_edit').val(code);
                getRateEdit(code);
            }

        });

    });

    function getDetail(){
        var interestId = $('#interestId').val();
        var url_action = 'search';
        var value ={
            interestId:interestId,
            name:'',
            currentPage: "1",
            pageSize: "50",
            orderBy: {"id": "DESC"}
        };
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{value:value,menu:id,action:'DETAIL',url_action:url_action},
            success: function (data) {

                var result = JSON.parse(data);
                if (result.status=="200") {
                    var detail = result.result[0];
                    $('#refNoInterestRate').text(detail.refNoInterestRate);
                    $('#corporate').text(detail.corporateId);
                    $('#interestRate').text(detail.interestRate);
                    $('#status').text(detail.status);

                    var toDate = moment(detail.toDate, "DD/MM/YYYY");
                    var fromDate = moment(detail.fromDate, "DD/MM/YYYY");
                    var formattedDateTo = toDate.format("DD MMMM YYYY");
                    var formattedDateFrom = fromDate.format("DD MMMM YYYY");

                    $('#date').text(formattedDateFrom + " to " + formattedDateTo);

                    $.each(detail.detailList, function(i, obj) {
                        oTable.row.add([
                            obj.currencyCode,
                            obj.productName,
                            obj.termName,
                            obj.interestFormatted
                        ]).draw(false);
                    });
                    submit_data = detail;
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
                    minimumValue:'0.000000',maximumValue:'999999999999999.999999'
                });
            }
        });
    }


</script>
