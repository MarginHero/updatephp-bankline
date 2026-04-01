@include('_partials.header_content',['breadcrumb'=>['Company Limit Usage','detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="code" value="" />
            <input type="hidden" id="name" value="" />
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Corporate Detail</h3><br>
                </div>
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Company ID</label>
                                    <div class="col-md-6">
                                        <label id="corpId">-</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <label class="col-md-4 col-form-label text-end">Company Name</label>
                                    <div class="col-md-6">
                                        <label id="corpName">-</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-header detail_view">
                        <h3 class="box-title">Company Limit per Day per Company</h3><br>
                    </div>
                    <div class="box-body detail_view">
                        <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                            <thead>
                                <tr>
                                    <th style="vertical-align : middle;text-align:center;" rowspan="2"><strong>No.</strong></th>
                                    <th style="vertical-align : middle;text-align:center;" rowspan="2"><strong>Service</strong></th>
                                    <th style="vertical-align : middle;text-align:center;" rowspan="2"><strong>Company Matrix</strong></th>
                                    <th style="vertical-align : middle;text-align:center;" colspan="3"><strong>Number Of Transaction</strong></th>
                                    <th style="vertical-align : middle;text-align:center;" colspan="4"><strong>Transaction Amount</strong></th>
                                </tr>
                                <tr>
                                    <th style="vertical-align : middle;text-align:center;"><strong>Maximum Value</strong></th>
                                    <th style="vertical-align : middle;text-align:center;"><strong>Usage</strong></th>
                                    <th style="vertical-align : middle;text-align:center;"><strong>Remaining Value</strong></th>
                                    <th style="vertical-align : middle;text-align:center;"><strong>Currency</strong></th>
                                    <th style="vertical-align : middle;text-align:center;"><strong>Maximum Value</strong></th>
                                    <th style="vertical-align : middle;text-align:center;"><strong>Usage</strong></th>
                                    <th style="vertical-align : middle;text-align:center;"><strong>Remaining Value</strong></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </form>
                <div class="box-footer">
                    <div class="float-left">
                        <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>                    
                    </div>
                    <div class="float-right">    
                        <button type="button" id="save_screen" name="save_screen" class="btn btn-default float-left" style="display:none" onclick="save_pdf();">@lang('form.save_pdf')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    var oTable;
    var id = '{{ $service }}';
    var noRef;
    var deleteData;
    var isEdit = false;
    var acctList = [];

    $(document).ready(function() {
        oTable = $('#list').DataTable({
            "paging" : false,
            "ordering": false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth": false,
            "lengthMenu": [
                [10, 25, 50],
                [10, 25, 50]
            ],
            "columnDefs": [
                {
                    sortable: true,
                    width: "5%",
                    targets: 0,
                },
                {
                    targets: 1,
                    sortable: true,
                    width: "15%"
                },
                {
                    targets: 2,
                    sortable: true,
                    width: "12%"
                },
                {
                    targets: 3,
                    sortable: true,
                    render: $.fn.dataTable.render.number( ',', '.', 2, '' ),
                    width: "7%"
                },
                {
                    targets: 4,
                    sortable: false,
                    render: $.fn.dataTable.render.number( ',', '.', 2, '' ),
                    width: "10%"
                },
                {
                    targets: 5,
                    sortable: false,
                    render: $.fn.dataTable.render.number( ',', '.', 2, '' ),
                    width: "12%"
                },
                {
                    targets: 6,
                    sortable: true,
                    width: "10%"
                },
                {
                    targets: 7,
                    sortable: false,
                    render: $.fn.dataTable.render.number( ',', '.', 2, '' ),
                    width: "10%"
                },
                {
                    targets: 8,
                    sortable: true,
                    render: $.fn.dataTable.render.number( ',', '.', 2, '' ),
                    width: "7%"
                },
                {
                    targets: 9,
                    sortable: true,
                    render: $.fn.dataTable.render.number( ',', '.', 2, '' ),
                    width: "12%"
                }
            ],
        });

        $('.back').on('click', function() {
            var res = app.setView(id, 'landing');
        });

        $('#save_screen').hide();


    });

    function getDetail() {
        var corpId = $('#code').val();
        var url_action = 'searchCorporateLimit';
        var no = 1;
        var value = {
            corporateId: corpId,
        };
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value: value,
                menu: id,
                action: 'DETAIL',
                url_action: url_action,
                _token: '{{ csrf_token() }}'
            },
            success: function(data) {
                var result = JSON.parse(data);
                var detail = result.result;
                var stsCd;

                if (result.status == "200") {                  

                    if (detail) {
                        before = "";
                        $.each(detail, function(idx, obj) {                            
                            oTable.row.add([
                                before == "" ? no++ : before == obj.serviceName ? "" : no++,
                                before == "" ? obj.serviceName : before == obj.serviceName ? "" : obj.serviceName,
                                obj.currencyMatrixName,
                                obj.maxOccurrenceLimit,
                                obj.occurrenceLimitUsage,
                                obj.remainingOccurenceLimit,
                                obj.currencyCode,
                                obj.maxAmountLimit,
                                obj.amountLimitUsage,
                                obj.remainingAmountLimit,
                            ]).draw(true);
                            before = obj.serviceName;
                        });
                    }

                } else {
                    flash('warning', result.message);
                }



            },
            error: function(xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            },
            complete: function(data) {
                $('.table-hidden').show();
                $('#save_screen').show();
            }
        });
    }

</script>