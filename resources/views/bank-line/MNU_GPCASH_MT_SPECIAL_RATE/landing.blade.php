@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'Search']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                <div class="box-header">
                    <h3 class="box-title">Special Rate Filter</h3>
                </div>
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end">Deal Rate No</label>

                                    <div class="col-md-4">
                                        <input type="text" id="dealRateNo" name="dealRateNo" class="form-control" autocomplete="off" value="" maxlength="15">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end">Corporate</label>

                                    <div class="col-md-4">
                                    <select class="form-control" id="corporate">
                                            <option></option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row local">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end">Debit Currency</label>

                                    <div class="col-md-4">
                                    <select class="form-control" id="debitCurrency">
                                            <option></option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row local">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-4 col-form-label text-end">Credit Currency</label>

                                    <div class="col-md-4">
                                    <select class="form-control" id="creditCurrency">
                                            <option></option>
                                    </select>
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
                    <h3 class="box-title">Special Rate Listing</h3>
                </div>
                <div class="box-body list-title">
                    <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                            style="border-collapse:collapse;">
                        <thead>
                        <tr>
                            <th></th>
                            <th align="center"><strong>Deal Rate No. </strong></th>
                            <th align="center"><strong>Corporate ID</strong></th>
                            <th align="center"><strong>Debit Currency</strong></th>
                            <th align="center"><strong>Credit Currency</strong></th>
                            <th align="center"><strong>Status</strong></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="center"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                                <td align="left"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="float-left">

                    </div>
                    <div class="float-right">
                        <button type="button" id="delete" name="delete" class="btn btn-danger">@lang('form.delete')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var id = '{{ $service }}';
    var currentPageTable;
    var currentPageSize;
    var oTable;

    var url_action = 'search';
    var action = 'SEARCH';
    var result_key = 'result';
    var custom_order = '';

    $(document).ready(function () {

        $('#list').hide();
        $('.list-title').hide();
        $('#delete').hide();

        getCurrency();

        $('#search').on('click', function () {
            currentPageTable = 0;
            currentPageSize = 10;

            searchFunction();
        });

        $('#add').on('click', function () {

            var res = app.setView(id,'add');
            if(res=='done'){
                $('#type').val('add');
            }
        });

        $('#list tbody').on('click', 'a', function (e) {
            if(e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
            var code = $(this).data('code');

            if (code !== undefined) {
                var res = app.setView(id,'detail');
                if(res=='done'){
                    $('#dealRateNo').val(code);
                    getMatrix(code);
                }
            }
        });

        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',.-'
        });

        $('#delete').on('click', function () {
            if(countMenu()==0){
                var content ='{{trans('form.alert_noselect',['label'=>'Account'])}}';
                $.alert({
                    title: '{{trans('form.warning')}}',
                    content: content
                });
                return;
            }

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
                    }

                }
            });
        });

        function submit_delete () {

            var value = getTableData();

            $.ajax({
                url: 'delete',
                method: 'post',
                data: {"_token": "{{ csrf_token() }}", menu: id, action:"DELETE_LIST", value: value, url_action:'submit'},
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

                        // oTable.column(0).visible(false);
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
    });

    function searchFunction(){

        $('#list').show();
        $('.list-title').show();
        $('#delete').show();

        window.searchParam = {
            creditCurrencyCode: $("#creditCurrency").val(),
            debitCurrencyCode: $('#debitCurrency').val(),
            refNoSpecialRate: $('#dealRateNo').val().toUpperCase(),
            corporateId: $('#corporate').val(),
        }

        var value = {
            creditCurrencyCode: $("#creditCurrency").val(),
            debitCurrencyCode: $('#debitCurrency').val(),
            refNoSpecialRate: "%" + $('#dealRateNo').val().toUpperCase() + "%",
            corporateId: $('#corporate').val(),
            currentPage: "1",
            pageSize: "20",
            orderBy: {"createdDate": "ASC"},
        };

        var url_action = 'search';
        var action = 'SEARCH';
        var result_key='result';

        oTable = $('#list').DataTable({
            "destroy": true,
            "initComplete": function(settings, json) {
                $('#search').prop("disabled",false);
            },
            "select": false,
            "searching": false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "pageLength":currentPageSize,
            "displayStart":currentPageTable * currentPageSize,
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "ScrollX": '100%',
                "order": [
                    [0,"desc"]
                ],
            "columnDefs": [
                {
                    // sortable: false,
                    width: "5%",
                    checkboxes: {
                        selectRow: false,
                        selectAllPages: false
                    },
                    targets: 0,
                    data: "createdDate", // buat filter
                    render: function ( data, type, full, meta ) {
                        return  '<input id="check" name="check" class="dt-checkboxes state_edit" value="" type="checkbox">';
                    },
                    orderable: true
                },
                {
                    targets: 1,
                    data: "refNoSpecialRate",
                    render: function ( data, type, full, meta ) {
                        return '<input id="dealRateNo" value="'+full.dealRateNo+'" type="hidden" /><a href="javascript:void(0)" data-code="'+full.dealRateNo+'">'+full.dealRateNo+'</a>';
                    },
                    orderable: true
                },
                {
                    targets: 2,
                    data: "corporate.id",
                    render: function ( data, type, full, meta ) {
                        return full.corporateId+' - '+full.corporateName;
                    },
                    orderable: true
                },
                {
                    targets: 3,
                    data: "debitCurrency",
                    orderable: true
                },
                {
                    targets: 4,
                    data: "creditCurrency",
                    orderable: true
                },
                {
                    targets: 5,
                    data: "status",
                    orderable: true
                },
            ],
            "ajax": {
                url: "fetchDataTable",
                type:'POST',
                data: function ( d ) {
                    d.value = value;
                    d.menu = id;
                    d.url_action = url_action;
                    d.action = action;
                    d.result_key = result_key;
                    d.custom_order = custom_order;
                    d._token = '{{ csrf_token() }}';
                },
                error:function (jqXHR, textStatus, errorThrown) {

                    var msg = '{{trans('form.conn_error')}}';
                    flash('warning', msg);
                    $('#list').hide();
                    $('.list-title').hide();
                    $('#search').prop("disabled",false);
                },
                complete:function(data){
                    currentPageTable = oTable.page.info().page;
                    currentPageSize = oTable.page.len();
                }
            }
        });
    }

    function getTableData() {
        var result = {};
        result["refNoSpecialRate"] = "";
        result["specialRateList"] = [];

        $("#list").find("tbody tr").each(function () {

            var check = ($('td:eq(0)', $(this)).children().is(':checked') ? 1 : 0);

            if (check == 0) {
                $('td:eq(0)', $(this)).parent().hide();
            }

            if (check == 1) {
                $('td:eq(0)', $(this)).find("#check").prop("disabled", true);
                var dealRateNo = $('td:eq(1)', $(this)).find("#dealRateNo").val();
                var corporateId = $('td:eq(2)', $(this)).text();
                var debitCurrency = $('td:eq(3)', $(this)).text();
                var creditCurrency = $('td:eq(4)', $(this)).text();
                var status = $('td:eq(5)', $(this)).text();

                var obj = {
                    dealRateNo: dealRateNo,
                    refNoSpecialRate: dealRateNo,
                    corporateId: corporateId,
                    debitCurrency: debitCurrency,
                    creditCurrency: creditCurrency,
                    status: status,
                };

                result["refNoSpecialRate"] = result["refNoSpecialRate"]+dealRateNo;
                result["specialRateList"].push(obj);
            }
        });

        return result;
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
            async: false,
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

                    unitOption = '<option value="">All Corporate</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.corporateId + '">'+ obj.corporateId  + ' - ' + obj.corporateName + '</option>';
                    });
                    $('#corporate').html(unitOption);
                    $('#corporate').select2();

                    if (window.searchParam) {
                        $('#creditCurrency').val(window.searchParam.creditCurrencyCode).change();
                        $('#debitCurrency').val(window.searchParam.debitCurrencyCode).change();
                        $('#dealRateNo').val(window.searchParam.refNoSpecialRate).change();
                        $('#corporate').val(window.searchParam.corporateId).change();

                        $('#search').trigger('click');
                        searchFunction();
                    }

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
            async: false,
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
                    unitOptionDebit = '<option value="">All Debit Currency</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOptionDebit += '<option value="' + obj.code + '">'+ obj.name + '</option>';
                    });

                    unitOptionCredit = '<option value="">All Credit Currency</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOptionCredit += '<option value="' + obj.code + '">'+ obj.name + '</option>';
                    });

                    $('#debitCurrency').html(unitOptionDebit);
                    $('#debitCurrency').select2();

                    $('#creditCurrency').html(unitOptionCredit);
                    $('#creditCurrency').select2();

                    getCorporate();
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

    function countMenu() {
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
