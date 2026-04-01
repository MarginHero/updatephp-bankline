@include('_partials.header_content',['breadcrumb'=>['Time Deposit Interest Rate','Search']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                <div class="box-header">
                    <h3 class="box-title">Rate Filter</h3>
                </div>
                <form class="form-horizontal">

                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Interest Rate Date</label>
                                    <div class="col-md-10">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-auto">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="fromDate" name="fromDate" class="form-control datepicker detail numeric" autocomplete="off" value="">
                                                </div>
                                            </div>
                                            <div class="col-auto mx-2">
                                                <label class="col-form-label"><strong>to</strong></label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="toDate" name="toDate" class="form-control datepicker numeric" autocomplete="off" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="box-footer">

                        <div class="float-left">
                            <button type="button" id="search" name="search" class="btn btn-primary">@lang('form.search')</button>
                        </div>
                        <div class="float-right">
                            <button type="button" id="add" name="add" class="btn btn-info">@lang('form.add')</button>
                        </div>

                    </div>
                </form>
                <div class="box-header list-title">
                    <h3 class="box-title">Rate Listing</h3>
                </div>
                <div class="box-body list-title">
                    <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                        <thead>
                            <tr>
                                <th align="center"></th>
                                <th align="left"><strong>Interest Rate Date</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="col-md-4">
                    </div>
                </div>
                <div class="box-footer list-title">
                    <div class="float-left">
                        <button type="button" id="delete" name="delete" class="btn btn-danger">@lang('form.delete')</button>
                    </div>
                    <div class="float-right">

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    var oTable;
    var url_action;
    var action;
    var result_key;
    var custom_order;
    var id;

    $(document).ready(function() {
        id = '{{ $service }}';
        url_action = 'search';
        action = 'SEARCH';
        result_key = 'result';
        custom_order = {
            "fromDate": "ASC"
        };

        $('#list').hide();
        $('.list-title').hide();

        if (window.searchParam) {
            $('#fromDate').val(window.searchParam.fromDate).change();
            $('#toDate').val(window.searchParam.toDate).change();

            $(this).prop("disabled", true);
            $('#list').show();
            $('.list-title').show();
            getMatrix();
        } else {
            $('.datepicker').datepicker({
                format: "dd/mm/yyyy",
                locale: 'id',
                autoclose: true
            });

            $('#fromDate').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
            $('#toDate').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));
        }


        oTable = $('#list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "select": {
                style: 'multi',
                selector: 'input.dt-checkboxes'
            },
            "searching": false,
            "autoWidth":false,
            "columnDefs": [
                {
                    sortable: false,
                    width: "5%",
                    targets: 0,
                    checkboxes: {
                        selectRow: false,
                        selectAllPages: false
                    }
                },
                {
                    targets: 1,
                    sortable: true,
                    width: "20%"
                },
            ]
        });


        $('#search').on('click', function() {
            window.searchParam = {
                fromDate:$('#fromDate').val(),
                toDate:$('#toDate').val(),
            }
            $(this).prop("disabled", true);
            $('#list').show();
            $('.list-title').show();
            getMatrix();

        });


        $('#add').on('click', function() {
            var type = 'Add';
            var res = app.setView(id, 'add');
            if (res == 'done') {
                $('#type').text(type);
                $('#stateType').val('ADD');
                loadState();
            }
        });

        $('#list tbody').on('click', 'a', function(e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
            var code = $(this).data('code');

            if (code !== undefined) {
                var res = app.setView(id, 'detail');
                if (res == 'done') {
                    $('#interestId').val(code);

                    getDetail();
                }
            }
        });

        $('#delete').on('click', function () {
            if(countMenu()==0){
                var content ='{{trans('form.alert_noselect',['label'=>'Interest Rate'])}}';
                $.alert({
                    title: '{{trans('form.warning')}}',
                    content: content
                });
                return;
            }
            $(this).prop('disabled',true);
            $.confirm({
                title: '{{trans('form.delete')}}',
                content: '{{trans('form.confirm_delete_table')}}',
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
                    }

                }
            });
        });

        function submit_delete () {

            var value = getTableData();

            $.ajax({
                url: 'delete',
                method: 'post',
                data: {"_token": "{{ csrf_token() }}", menu: id, action:"DELETE_LIST", value: value, url_action:'submitDelete'},
                success: function (data) {
                    $('#delete').prop('disabled',false);
                    var result = JSON.parse(data);
                    if (result.status=="200") {
                        noRef=result.referenceNo;
                        flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                        $('#submit_view').hide();
                        $('#edit').hide();
                        $('#delete').hide();
                        // $('#back').html('{{trans('form.done')}}');

                        $('.dt-buttons').hide();
                        $('#back').hide();
                        $('#next_user').show();
                        $('#done').show();
                        $('#save_screen').show();

                        oTable.column(0).visible(false);
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
        if(window.searchParam){
            $('#fromDate').val(window.searchParam.fromDate);
            $('#toDate').val(window.searchParam.toDate);
            $('#search').trigger('click');
        }

    });

    function getMatrix(){

        window.searchParam = {
            fromDate: $('#fromDate').val(),
            toDate: $('#toDate').val(),
        }

        var value = {
            fromDate: $('#fromDate').val(),
            toDate: $('#toDate').val(),
            currentPage: "1",
            pageSize: "50",
        };

        var url_action = 'search';
        var action = 'SEARCH';
        var result_key='result';

        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : id,
                url_action : url_action,
                action : action,
                result_key : result_key,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                oTable.clear().draw();
                var result = JSON.parse(data);
                if (result.status=="200") {
                    if(result.result[0] == undefined){
                        return;
                    }
                    var detail = result.result;
                    oTable.clear();
                    $.each(detail, function (idx, obj){
                        var toDate = moment(obj.toDate, "DD/MM/YYYY");
                        var fromDate = moment(obj.fromDate, "DD/MM/YYYY");
                        var formattedDateTo = toDate.format("DD MMMM YYYY");
                        var formattedDateFrom = fromDate.format("DD MMMM YYYY");

                        oTable.row.add([
                            '<input id="check" name="check" class="dt-checkboxes state_edit" value="" type="checkbox">',
                            '<a href="javascript:void(0)" data-code="'+obj.id+'"  data-refnointerest="'+obj.refNoInterestRate+'">'+ formattedDateFrom + ' - ' + formattedDateTo +'</a>'
                        ]).draw(false);

                    });
                } else {
                    flash('warning', result.message);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            },
            complete: function(data) {
                $("#search").prop("disabled", false);
               // $('th.sorting_disabled.dt-checkboxes-select-all').children('input').click();
            }
        });
    }

    function getTableData(){
        var result = {};
        result["interestRateList"] = [];
        result['refNoInterestRate'] = '';

        $("#list").find("tbody tr").each(function(){
            var check = ($('td:eq(0)', $(this)).children().is(':checked') ? 1:0);
            var tdId = $('td:eq(1)', $(this)).find('a').data('code');
            var refNoInterestRate = $('td:eq(1)', $(this)).find('a').data('refnointerest');
            var date = $('td:eq(1)', $(this)).find('a').html();

            var obj = {refNoInterestRate:refNoInterestRate, interestDate:date};
            if(check==1){
                result["interestRateList"].push(obj);
                result['refNoInterestRate'] = refNoInterestRate;
            }
        });

        return result;
    }

    function countMenu(){
        var count = 0;
        $("#list").find("tbody tr").each(function () {
            var check = ($('td:eq(0)', $(this)).children().is(':checked') ? 1 : 0);

            if (check == 1) {
                count++;
            }
        });
        return count;
    }
</script>
