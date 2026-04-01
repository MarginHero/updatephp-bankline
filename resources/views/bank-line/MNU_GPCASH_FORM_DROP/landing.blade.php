@include('_partials.header_content',['breadcrumb'=>['Form Drop','Search']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                <div class="box-header">
                    <h3 class="box-title">Form Drop Filter</h3>
                </div>
                <form class="form-horizontal">

                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Transaction Reference No</label>

                                    <div class="col-md-6">
                                        <input type="text" id="referenceNo" name="referenceNo" class="form-control numeric"
                                            autocomplete="off" value="" maxlength="40">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Corporate ID</label>

                                    <div class="col-md-6">
                                        <input type="text" id="corporateId" name="corporateId" class="form-control" autocomplete="off"
                                            value="" maxlength="100">

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label text-end">Corporate Name</label>

                                    <div class="col-md-6">
                                        <input type="text" id="corporateName" name="corporateName" class="form-control" autocomplete="off"
                                            value="" maxlength="100">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="box-footer">

                        <div class="float-left">
                            <button type="button" id="search" name="search"
                                class="btn btn-primary">@lang('form.search')</button>
                        </div>

                    </div>
                </form>
                <div class="box-header list-title">
                    <h3 class="box-title">Form Drop Listing</h3>
                </div>
                <div class="box-body list-title">

                    <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                        style="border-collapse:collapse;">
                        <thead>
                            <tr>
                                <th align="center"><strong>Transaction Reference No</strong></th>
                                <th align="center"><strong>Submitted Date</strong></th>
                                <th align="center"><strong>Corporate ID</strong></th>
                                <th align="center"><strong>Corporate Name</strong></th>
                                <th align="center"><strong>Last Status</strong></th>
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

    $(document).ready(function() {

        $('#list').hide();
        $('.list-title').hide();

        if (window.searchParam) {
            $('#referenceNo').val(window.searchParam.referenceNo).change();
            $('#corporateId').val(window.searchParam.corporateId).change();
            $('#corporateName').val(window.searchParam.corporateName).change();
            
            $('#search').trigger('click');
            searchFunction();
        }

         $('#list tbody').on('click', 'a', function (e) {
            if(e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
            var refNo = $(this).data('code');
            if (refNo !== undefined) {
                var res = app.setView(id,'detail');
                if(res=='done'){
                    $('#refNo').val(refNo);
                    getDetail();
                }
            }
        });

        $('#search').on('click', function() {
            currentPageTable = 0;
            currentPageSize = 10;

            searchFunction();
        });

    });

    function searchFunction(){
        var url_action = 'search';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = '';

        $(this).prop("disabled", true);
        $('#list').show();
        $('.list-title').show();

        window.searchParam = {
            referenceNo: $('#referenceNo').val(),
            corporateId: $('#corporateId').val(),
            corporateName: $('#corporateName').val(),
        }

        var value = {
            referenceNo: "%" + $('#referenceNo').val() + "%",
            corporateId: $('#corporateId').val(),
            corporateName: $('#corporateName').val(),
            currentPage: "1",
            pageSize: "20",
            orderBy: {
                "referenceNo": "ASC"
            }
        };


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
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "pageLength":currentPageSize,
            "displayStart":currentPageTable * currentPageSize,
            "ScrollX": '100%',
            "columnDefs": [{
                    targets: 0,
                    data: "referenceNo",
                        render: function ( data, type, full, meta ) {
                        return '<a href="javascript:void(0)" data-code="'+data+'">'+data+'</a>';
                    },
                    orderable: true
                },
                {
                    targets: 1,
                    data: "internationalTransfer.instructionDate",
                    orderable: true,
                    render: function ( data, type, full, meta ) {
                        return full.submittedDate;
                    },
                },
                {
                    targets: 2,
                    data: "corporate.id",
                    orderable: true,
                    render: function ( data, type, full, meta ) {
                        return full.corporateId;
                    },
                },
                {
                    targets: 3,
                    data: "corporate.name",
                    orderable: true,
                    render: function ( data, type, full, meta ) {
                        return full.corporateName;
                    },
                },
                {
                    targets: 4,
                    data: "status",
                    orderable: true,
                    render: function ( data, type, full, meta ) {
                        return full.lastStatus;
                    },
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
                    // d.custom_order = custom_order;
                    d._token = '{{ csrf_token() }}';
                },
                error: function(jqXHR, textStatus, errorThrown) {

                    var msg = '{{trans(' form.conn_error ')}}';
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
</script>
