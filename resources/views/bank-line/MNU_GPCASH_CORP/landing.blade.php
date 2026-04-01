@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'Search']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Corporate Filter</h3>
                </div>
                <form class="form-horizontal">

                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Corporate ID</label>

                                <div class="col-md-6">
                                    <input type="text" id="corporateId" name="corporateId" class="form-control" autocomplete="off" value="" maxlength="40">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label text-end">Corporate Name</label>

                                <div class="col-md-6">
                                    <input type="text" id="name" name="name" class="form-control" autocomplete="off" value="" maxlength="100">

                                </div>
                            </div>
                        </div>
                       </div>
                </div>

                <div class="box-footer">
                    <button type="button" id="search" name="search" class="btn  btn-primary float-left">@lang('form.search')</button>
                    <button type="button" id="add" name="add" class="btn  btn-info float-right">@lang('form.add')</button>

                </div>

                </form>
                    <div class="box-header list-title">
                        <h3 class="box-title">Corporate Listing</h3>
                    </div>
                    <div class="box-body list-title">
                        <div class="container-fluid">
                           <div class="row">
                                <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                       style="border-collapse:collapse;">
                                    <thead>
                                    <tr>
                                        <th align="center"><strong>Corporate ID</strong></th>
                                        <th align="center"><strong>Corporate Name</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td align="left"></td>
                                        <td align="left"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
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

    $(document).ready(function () {

        var url_action = 'search';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = '';

        $('#list').hide();
        $('.list-title').hide();

        if(window.searchParam){
            $('#corporateId').val(window.searchParam.corporateId);
            $('#name').val(window.searchParam.name);

            $('#search').trigger('click');
            onSearch();
        }
        $('#add').on('click', function () {
            app.setView(id,'add');
            $('#type').val('add');
            getData('','');
        });

        $('#search').on('click', function () {
            currentPageTable= 0;
            currentPageSize = 10;

            onSearch();
        });


        $('#list tbody').on('click', 'a', function (e) {
            if(e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
            var code = $(this).data('code');
            var cifid = $(this).data('cifid');
            var name = $(this).parent().next().text();
            //console.log("name",name);
            preloaderVisible(true);
            if (code !== undefined) {
                var res = app.setView(id,'detail');
                if(res=='done'){
                    $('#code').val(code);
                    getData(code,name);
                }

            }
        });
        $('div.dt-buttons').css('float','right');
        $('a.dt-button').addClass('btn btn-primary');
        $('input[type=text]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',.-'
        });
    });



    function onSearch() {
        var url_action = 'search';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = '';

        window.searchParam = {
            corporateId:$('#corporateId').val(),
            name:$('#name').val(),
        }

        $(this).prop("disabled",true);
        $('#list').show();
        $('.list-title').show();
        var corporateId = $('#corporateId').val();
        var name = $('#name').val();

        var value = {
            "corporateId": '%' + corporateId + '%',
            "name": name
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
                    data: "id",
                    render: function ( data, type, full, meta ) {
                        return '<a href="javascript:void(0)" data-cifid="'+full.cifId+'" data-code="'+full.corporateId+'">'+full.corporateId+'</a>';
                    },
                    orderable: true
                },
                {
                    targets: 1,
                    data: "name",
                    orderable: true
                }
            ],
            "ajax": {
                url: "fetchDataTable",
                type:'POST',
                data: function ( d ) {
                    d.value = value;
                    d.menu = '{{ $service }}';
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
</script>
