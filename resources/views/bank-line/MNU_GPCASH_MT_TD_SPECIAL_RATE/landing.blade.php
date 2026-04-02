@include('_partials.header_content',['breadcrumb'=>['TD Special Rate','Search']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                <div class="box-header">
                    <h3 class="box-title">TD Special Rate Filter</h3>
                </div>
                <form class="form-horizontal">

                    <div class="box-body">
                        <div class="container-fluid">

                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <div class="col-md-2">
                                        <input type="radio" id="corporate-rb" name="searchBy-rb" value="0" checked>
                                        <label for="corporate-rb" style="margin-left: 5px;">Corporate</label>
                                    </div>
                                    <div class="col-md-7 row-corporate">
                                        <select class="form-control" id="corporate">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-date">
                                <div class="mb-3 row form-group">
                                    <div class="col-md-2">
                                        <label for="dateRange-label" style="margin-left: 20px;">Date Range</label>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-auto">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="dateFrom" name="dateFrom"
                                                           class="form-control datepicker detail numeric"
                                                           autocomplete="off" value="">
                                                </div>
                                            </div>
                                            <div class="col-auto mx-2">
                                                <label class="col-form-label"><strong>to</strong></label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="dateTo" name="dateTo"
                                                           class="form-control datepicker numeric" autocomplete="off"
                                                           value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <div class="col-md-2">
                                        <input type="radio" id="refNo-rb" name="searchBy-rb" value="1">
                                        <label for="refNo-rb" style="margin-left: 5px;">Reference Number</label>
                                    </div>
                                    <div class="col-md-7">
                                        <input style="display: none" type="text" id="refNoFilter" name="refNoFilter"
                                               class="form-control" autocomplete="off" value="" maxlength="14">
                                        <div class="help-block with-errors"></div>
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
                        <div class="float-right">
                            <button type="button" id="add" name="add" class="btn btn-info">@lang('form.add')</button>
                        </div>

                    </div>
                </form>
                <div class="box-header list-title">
                    <h3 class="box-title">TD Special Rate Listing</h3>
                </div>
                <div class="box-body list-title">

                    <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                        style="border-collapse:collapse;">
                        <thead>
                            <tr>
                                <th></th>
                                <th align="center"><strong>Reference Number </strong></th>
                                <th align="center"><strong>Corporate</strong></th>
                                <th align="center"><strong>Created Date</strong></th>
                                <th align="center"><strong>Valid Until</strong></th>
                                <th align="center"><strong>Special Rate</strong></th>
                                <th align="center"><strong>Status Transaction</strong></th>
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
    var custom_order = '';
    var currentPageTable;
    var currentPageSize;
    var oTable;

    $(document).ready(function () {

        $('#list').hide();
        $('.list-title').hide();
        $('#delete').hide();

         $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true
        });

        $('#dateFrom').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#dateTo').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));

        getCorporate();

        $('#search').on('click', function () {
            currentPageTable= 0;
            currentPageSize = 10;

            searchFunction();
        });

        $('#add').on('click', function () {

            var rateType = $('#rateType').val();

            var res = app.setView(id,'add');
            if(res=='done'){

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
                    $('#refNoSpecialRate').val(code);

                    getMatrix();
                }
            }
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

        $('input[name="searchBy-rb"]').on('change', function(e){
            if (this.value=='1') {
                $('.row-date').hide();
                $('.row-corporate').hide();
                $('#refNoFilter').show();
                $('#form-area').validator('reset');

            } else {
                $('.row-date').show();
                $('.row-corporate').show();
                $('#refNoFilter').hide();
            }
        });

        if(window.searchParam){
            if(window.searchParam.refNo){
                $("#refNo-rb").attr('checked', 'checked');
                $('#refNoFilter').val(window.searchParam.refNo);

                $('.row-date').hide();
                $('.row-corporate').hide();
                $('#refNoFilter').show();
                $('#form-area').validator('reset');

                $('#search').trigger('click');
                searchFunction();
            } else {
                $("#corporate-rb").attr('checked', 'checked');
                $('.row-date').show();
                $('.row-corporate').show();
                $('#refNoFilter').hide();
            }
        }

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

    function searchFunction() {

        $('#notification').hide();
        var searchByRefNo = ($('input[name="searchBy-rb"]:checked').val() == '1' ? true : false);
        var corporate=$('#corporate').val();
        var dateFrom=$('#dateFrom').val();
        var dateTo=$('#dateTo').val();
        var refNo=$('#refNoFilter').val();

        window.searchParam = {
            searchByRefNo : ($('input[name="searchBy-rb"]:checked').val() == '1' ? true : false),
            corporate: $('#corporate').val(),
            dateFrom: $('#dateFrom').val(),
            dateTo: $('#dateTo').val(),
            refNo: $('#refNoFilter').val(),
        }

        searchByRefNo = window.searchParam.searchByRefNo;

        if (searchByRefNo) {
            dateFrom='';
            dateTo='';
            corporate='';
        }else{
            refNo='';
            if(moment(dateFrom, "DD/MM/YYYY").isAfter(moment(dateTo, "DD/MM/YYYY"))){
                $('#notification').show();
                flash('warning', 'From Date cannot be greater than To Date');
                return;
            }
            if(moment(dateTo, "DD/MM/YYYY").isAfter(moment(new Date(), "DD/MM/YYYY").add(1,'days'))){
                $('#notification').show();
                flash('warning', 'To date cannot be greater than today');
                return;
            }
        }

        $(this).prop("disabled",true);
        $('#list').show();
        $('.list-title').show();
        $('#delete').show();

        var id = '{{ $service }}';
        var value = {
            refNoSpecialRate: "%" + refNo + "%",
            corporateId: corporate,
            dateFrom: dateFrom,
            dateTo: dateTo,
            currentPage: "1",
            pageSize: "20",
            orderBy: {"expiryDate": "ASC"},
        };

        var url_action = 'search';
        var action = 'SEARCH';
        var result_key='result';

        oTable = $('#list').DataTable({
            "destroy": true,
            "initComplete": function(settings, json) {
                if(json.message){
                    $('#notification').show();
                    flash('warning', json.message);
                    $('#list').hide();
                    $('.list-title').hide();
                }

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
                    // sortable: false,
                    width: "5%",
                    checkboxes: {
                        selectRow: false,
                        selectAllPages: false
                    },
                    targets: 0,
                    data: "expiryDate", // buat filter
                    render: function ( data, type, full, meta ) {
                        return  '<input id="check" name="check" class="dt-checkboxes state_edit" value="" type="checkbox">';
                    },
                    orderable: true
                },
                {
                    targets: 1,
                    data: "refNoSpecialRate",
                    render: function ( data, type, full, meta ) {
                        return '<input id="refNoSpecialRate" value="'+data+'" type="hidden" /><a href="javascript:void(0)" data-code="'+data+'">'+data+'</a>';
                    },
                    orderable: true
                },
                {
                    targets: 2,
                    data: {corporateId:"corporateId", corporateName:"corporateName"},
                    render: function ( data, type, full, meta ) {
                        return data.corporateId+' - '+data.corporateName;
                    },
                    orderable: false
                },
                {
                    targets: 3,
                    data: "createdDate",
                    orderable: true
                },
                {
                    targets: 4,
                    data: "expiryDate",
                    orderable: true
                },
                {
                    targets: 5,
                    data: {
                        specialRateFormatted: "specialRateFormatted"
                    },
                    render: function ( data, type, full, meta ) {
                        return data.specialRateFormatted+' '+ '%';
                    },
                    orderable: true
                },
                {
                    targets: 6,
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
                    $('#notification').show();
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

        $('.dt-checkboxes-select-al').find("input[type='checkbox']").prop("disabled", true);

        $("#list").find("tbody tr").each(function () {

            var check = ($('td:eq(0)', $(this)).children().is(':checked') ? 1 : 0);

            if (check == 0) {
                $('td:eq(0)', $(this)).parent().hide();
            }

            if (check == 1) {

                $('td:eq(0)', $(this)).find("#check").prop("disabled", true);
                var refNoSpecialRate = $('td:eq(1)', $(this)).find("#refNoSpecialRate").val();
                var corporateId = $('td:eq(2)', $(this)).text();
                var createdDate = $('td:eq(3)', $(this)).text();
                var expiryDate = $('td:eq(4)', $(this)).text();
                var specialRate = $('td:eq(5)', $(this)).text();
                var status = $('td:eq(6)', $(this)).text();

                var obj = {
                    refNoSpecialRate: refNoSpecialRate,
                    corporateId: corporateId,
                    createdDate: createdDate,
                    expiryDate: expiryDate,
                    specialRate: specialRate,
                    status: status,
                };

                result["refNoSpecialRate"] = result["refNoSpecialRate"]+refNoSpecialRate;
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

                    if(window.searchParam) {
                        $('#corporate').val(window.searchParam.corporate).change();
                        $('#dateFrom').val(window.searchParam.dateFrom).change();
                        $('#dateTo').val(window.searchParam.dateTo).change();
                        $('#refNoFilter').val(window.searchParam.refNo).change();

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
