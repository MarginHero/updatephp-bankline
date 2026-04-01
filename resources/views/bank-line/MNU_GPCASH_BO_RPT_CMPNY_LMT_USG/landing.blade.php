@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'Search']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                <div class="box-header">
                    <h3 class="box-title">Company Search</h3>
                </div>
                <form class="form-horizontal">

                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row">
                                    <div class="col-md-3 col-form-label text-right">
                                        <label for="corporateId"><strong>Company ID</strong></label>
                                    </div>
                                    <div class="col-md-5 row-corporate">
                                        <select class="form-control" id="corporateId">
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <div class="col-md-3 col-form-label text-right">
                                        <label for="corporateName"><strong>Company Name</strong></label>
                                    </div>
                                    <div class="col-md-5 row-corporate">
                                        <select class="form-control" id="corporateName">
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="box-footer">

                        <div class="float-left">
                            <button type="button" id="search" name="search" class="btn btn-primary">@lang('form.search')</button>
                        </div>

                    </div>
                </form>
                <div class="box-header list-title">
                    <h3 class="box-title">Company Listing</h3>
                </div>
                <div class="box-body list-title">

                    <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                        <thead>
                            <tr>
                                <th align="center">No</th>
                                <th align="center"><strong>Company ID</strong></th>
                                <th align="center"><strong>Company Name</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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

    $(document).ready(function() {

        getCorporateDroplist();

        setTimeout(function() {
            window.$('.dropdown-toggle').dropdown();
        }, 200)

        $('#list').hide();
        $('.list-title').hide();

        $('#list tbody').on('click', 'a', function(e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }

            var code = $(this).data('code');
            var name = $(this).data('name');

            if (code !== undefined) {
                var res = app.setView(id, 'detail');
                if (res == 'done') {
                    $('#code').val(code);
                    $('#name').val(name);
                    $('#corpId').html(code);
                    $('#corpName').html(name);
                    getDetail();
                }
            }
        });

        $('#search').on('click', function () {
            currentPageTable= 0;
            currentPageSize = 10;

            searchFunction();
        });

        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow: ',._!@'
        });

    });

    function searchFunction() {
        
        var url_action = 'search';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = {
            "id": "ASC"
        };

        $(this).prop("disabled", true);
        $('#list').show();
        $('.list-title').show();

        window.searchParam = {
            corporateId: $('#corporateId').val(),
            name: $('#corporateName').val(),
        }

        var value = {
            corporateId: $('#corporateId').val(),
            name: $('#corporateName').val(),
            currentPage: "1",
            pageSize: "20"
        };

        var index = 1;
        oTable = $('#list').DataTable({
            "destroy": true,
            "initComplete": function(settings, json) {
                $('#search').prop("disabled", false);

            },
            "select": false,
            "searching": false,
            "lengthMenu": [
                [10, 25, 50],
                [10, 25, 50]
            ],
            "pageLength":currentPageSize,
            "displayStart":currentPageTable * currentPageSize,
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "ScrollX": '100%',
                "drawCallback": function () {
                    index=1;
                },
            "columnDefs": [
                {
                    targets: 0,
                    data: "corporateId",
                    render: function ( data, type, full, meta ) {
                                    var table = $('#list').DataTable(); //note that you probably already have this call
                                    var info = table.page.info();
                                    return info.start + (index++);
                    },						
                    orderable: false
                },
                {
                    targets: 1,
                    data: {
                        corporateId: "corporateId",
                        name: "name",
                    },
                    render: function(data, type, full, meta) {
                        return '<a href="javascript:void(0)" data-code="' + data.corporateId + '" data-name="' + data.name + '">' + data.corporateId + '</a>';
                    },
                    orderable: true
                },
                {
                    targets: 2,
                    data: "name",
                    orderable: true
                }
            ],
            "ajax": {
                url: "fetchDataTable",
                type: 'POST',
                data: function(d) {
                    d.value = value;
                    d.menu = id;
                    d.url_action = url_action;
                    d.action = action;
                    d.result_key = result_key;
                    d.custom_order = custom_order;
                    d._token = '{{ csrf_token() }}';
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    var msg = '{{trans('form.conn_error')}}';
                    flash('warning', msg);
                    $('#list').hide();
                    $('.list-title').hide();
                    $('#search').prop("disabled", false);
                },
                complete:function(data){
                    currentPageTable = oTable.page.info().page;
                    currentPageSize = oTable.page.len();
                }
            }
        });
    }
    
    function getCorporateDroplist() {
        var value = {};
        var url_action = 'searchCorporate';
        var action = 'SEARCH';
        var menu = '{{ $service }}';
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value: value,
                menu: menu,
                url_action: url_action,
                action: action,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                var result = JSON.parse(data);
                if (result.status == "200") {
                    // id
                    unitOption = '<option value="">Select Company ID</option>';
                    $.each(result.result, function(idx, obj) {
                        unitOption += '<option value="' + obj.corporateId + '">' + obj.corporateId + '</option>';
                    });
                    $('#corporateId').html(unitOption);
                    $('#corporateId').select2();
                    // name
                    nameOption = '<option value="">Select Company Name</option>';
                    $.each(result.result, function(idx, obj) {
                        nameOption += '<option value="' + obj.name + '">' + obj.name + '</option>';
                    });
                    $('#corporateName').html(nameOption);
                    $('#corporateName').select2();

                    if (window.searchParam) {
                        $('#corporateId').val(window.searchParam.corporateId).change();
                        $('#corporateName').val(window.searchParam.name).change();
                        
                        searchFunction();
                    }
                } else {
                    flash('warning', result.message);
                }


            },
            error: function(xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error ')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            },
            complete: function(data) {

            }
        });
    }

    
</script>