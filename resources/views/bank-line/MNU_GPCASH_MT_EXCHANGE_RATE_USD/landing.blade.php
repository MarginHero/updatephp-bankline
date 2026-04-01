@include('_partials.header_content',['breadcrumb'=>['Exchange Rate (USD)','Search']])


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
                                <label class="col-md-4 col-form-label text-end">Currency</label>

                                <div class="col-md-4">
                                   <select class="form-control" id="currencyCode">
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
                        <h3 class="box-title">Rate Listing</h3>
                    </div>
                    <div class="box-body list-title">

                                <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                       style="border-collapse:collapse;">
                                    <thead>
                                    <tr>
                                        <th align="center"><strong>Currency Code</strong></th>
                                        <th align="center"><strong>Currency Name</strong></th>
                                        <th align="center"><strong>Transaction Buy Rate</strong></th>
                                        <th align="center"><strong>Transaction Sell Rate</strong></th>
                                        <th align="center"><strong>Last Updated</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td align="left"></td>
                                        <td align="left"></td>
                                        <td align="left"></td>
                                        <td align="left"></td>
                                        <td align="left"></td>
                                    </tr>
                                    </tbody>
                                </table>

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

    $(document).ready(function () {

        $('#list').hide();
        $('.list-title').hide();

        getCurrency();

        $('#search').on('click', function () {
            currentPageTable= 0;
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
                    $('#currencyCode').val(code);
                    getMatrix();
                }
            }
        });

    });

    function searchFunction() {
        var url_action = 'search';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = {"currency.effectiveDate": "DESC"};

        $(this).prop("disabled",true);
        $('#list').show();
        $('.list-title').show();

        window.searchParam = {
            currencyCode: $('#currencyCode').val()
        }

        var value = {
            currencyCode: $('#currencyCode').val(),
            currentPage: "1",
            pageSize: "50",
        };

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
            "columnDefs": [
                {
                    targets: 0,
                    data: "currency.effectiveDate",
                    render: function ( data, type, full, meta ) {
                        return '<a href="javascript:void(0)" data-code="'+full.currencyCode+'">'+full.currencyCode+'</a>';
                    },
                    orderable: true
                },
                {
                    targets: 1,
                    data: "currency.name",
                    render: function ( data, type, full, meta ) {
                        return '<a href="javascript:void(0)" data-code="'+full.currencyName+'">'+full.currencyName+'</a>';
                    },
                    orderable: true
                },
                {
                    targets: 2,
                    data: "transactionBuyRate",
                    render: function ( data, type, full, meta ) {
                        return full.trxBuyRateFormatted;
                    },
                    orderable: true
                },
                {
                    targets: 3,
                    data: "transactionSellRate",
                    render: function ( data, type, full, meta ) {
                        return full.trxSellRateFormatted;
                    },
                    orderable: true
                },
                {
                    targets: 4,
                    data: "effectiveDate",
                    orderable: true
                }
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
                    unitOption = '<option value="">ALL</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.code + '">'+ obj.code + ' - ' + obj.name + '</option>';
                    });
                    $('#currencyCode').html(unitOption);
                    $('#currencyCode').select2();

                    if (window.searchParam) {
                        $('#currencyCode').val(window.searchParam.currencyCode).change();
                        
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


</script>
