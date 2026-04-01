@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'Search']])

<style>
    .datepicker-dropdown {
        z-index: 9999 !important;
    }

    .datepicker table {
        cursor: pointer;
    }

    .btn-group {
        position: relative;
        display: inline-block;
        vertical-align: middle;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 120px;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 4px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    }

    .dropdown-menu.show {
        display: block !important;
    }

    .dropdown-menu > li > a {
        display: block;
        padding: 3px 20px;
        clear: both;
        font-weight: 400;
        line-height: 1.42857143;
        color: #333;
        white-space: nowrap;
        cursor: pointer;
        text-decoration: none;
    }

    .dropdown-menu > li > a:hover,
    .dropdown-menu > li > a:focus {
        color: #262626;
        text-decoration: none;
        background-color: #f5f5f5;
    }
</style>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                <div class="box-header">
                    <h3 class="box-title">Transaction Filter</h3>
                </div>
                <form class="form-horizontal" id="form-area">

                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row">
                                    <div class="col-md-3">
                                        <input type="radio" id="corporate-rb" name="searchBy-rb" value="0" checked>
                                        <label for="corporate-rb" ><strong>Corporate</strong></label>
                                    </div>
                                    <div class="col-md-7 row-corporate" >
                                        <select class="form-control" id="corporate" >
                                            <option value="">All Corporate</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-menu">
                                <div class="mb-3 row">
                                    <div class="col-md-3" >
                                        <label>Branch</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" id="branch">
                                            <option value="">Select Branch</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="row row-menu">
                                <div class="mb-3 row">
                                    <div class="col-md-2" style="margin-left: 15px;">
                                        <label>Menu</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" id="menu">
                                            <option value="">Select Menu</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                            <div class="row row-menu">
                                <div class="mb-3 row">
                                    <div class="col-md-3" >
                                        <label>Service</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" id="service">
                                            <option value="">Select Service</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-date">
                                <div class="mb-3 row">
                                    <div class="col-md-3" >
                                        <label>Date Range</label>
                                    </div>
                                    <div class="col-md-7" >
                                        <div class="row">
                                            <div class="col-md-3" style="padding-left: calc(var(--bs-gutter-x) * .5);">
                                        <select class="form-control" id="dateType">
                                            <option value="0">Creation Date</option>
                                            <option value="1">Payment Date</option>
                                        </select>
                                    </div>

                                            <div class="col-md-3">
                                                <div class="input-group">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="dateFrom" name="dateFrom" class="form-control datepicker detail numeric" autocomplete="off" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-3" style="text-align: center">
                                                <label class="col-form-label"><strong>to</strong></label>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="input-group state_edit">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="dateTo" name="dateTo" class="form-control datepicker numeric" autocomplete="off" value="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row row-rate">
                                <div class="mb-3 row">
                                    <div class="col-md-3" >
                                        <label>Rate</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" id="rate">
                                            <option value="">All Rate</option>
                                            <option value="CR">Counter Rate</option>
                                            <option value="SR">Special Rate</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-status">
                                <div class="mb-3 row">
                                    <div class="col-md-3">
                                        <label>Transaction Status</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" id="trxStatus">
                                            <option value="">All Status</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <div class="col-md-3">
                                        <input type="radio" id="refNo-rb" name="searchBy-rb" value="1">
                                        <label for="refNo-rb" >Reference Number</label>
                                    </div>
                                    <div class="col-md-7" >
                                        <input type="text" id="refNo" name="refNo" class="form-control" autocomplete="off" value="" maxlength="40" style="display: none">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <div class="col-md-3">
                                        <input type="radio" id="prnt-refNo-rb" name="searchBy-rb" value="2">
                                        <label for="prnt-refNo-rb" >Reference Number Parent</label>
                                    </div>
                                    <div class="col-md-7" >
                                        <input type="text" id="parentRefNo" name="parentRefNo" class="form-control" autocomplete="off" value="" maxlength="40" style="display: none">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="float-left">
                                <button type="button" id="search" name="search" class="btn btn-primary">@lang('form.search')</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="box-header list-title">
                    <h3 class="box-title">Transaction Listing</h3>
                </div>
                <div class="box-body list-title">

                                <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse; width: 100%; overflow-x: auto; border-bottom: 0px">
                        <thead>
                        <tr>
                            <th align="center"><strong>No.</strong></th>
                            <th align="center"><strong>Corporate</strong></th>
                            <th align="center"><strong>Latest Activity</strong></th>
                            <th align="center"><strong>Reference No</strong></th>
                            <th align="center"><strong>Service</strong></th>
                            <th align="center"><strong>Rate</strong></th>
                            <th align="center"><strong>Transaction Amount</strong></th>
                            <th align="center"><strong>Payment Schedule</strong></th>
                            <th align="center"><strong>Payment Date</strong></th>
                            <th align="center"><strong>Created By</strong></th>
                            <th align="center"><strong>Transaction Status</strong></th>
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
                            <td align="left"></td>
                            <td align="left"></td>
                            <td align="left"></td>
                            <td align="left"></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
                    <div class="box-footer list-title">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Download <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" id="downloadFormat">
                            <li><a href="#" data-format="CSV">CSV</a></li>
                            <li><a href="#" data-format="TXT">TXT</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</section>

<script>
    var service = '{{ $service }}';
    var totalDataSearch;
    var currentPageTable;
    var currentPageSize;
    var oTable;
    var valueTable;
    var isDownloading = false;

    $(document).ready(function () {

        var url_action = '';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = {"activityDate": "DESC"};
        var data_code = '';

        $('#list').hide();
        $('.list-title').hide();



        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true,
            endDate: new Date(),
        });

        $('.datepicker').on('click', function(e) {
            e.stopPropagation();
        });

        $(document).on('click', '.datepicker-dropdown', function(e) {
            e.stopPropagation();
        });

        setTimeout(function(){
            window.$('.dropdown-toggle').dropdown();
        },200)

        $(document).off('click', '#downloadFormat a').on('click', '#downloadFormat a', function(e) {
            e.preventDefault();
            e.stopPropagation();

            if (isDownloading) {
                return false;
            }

            var format = $(this).data('format');

            if ($(this).data('downloading')) {
                return false;
            }

            $(this).data('downloading', true);
            var $link = $(this);

            doDownload(format);

            setTimeout(function() {
                $link.data('downloading', false);
            }, 2000);

            return false;
        });

        $(document).off('click', '.dropdown-toggle').on('click', '.dropdown-toggle', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var $menu = $(this).next('.dropdown-menu');

            if ($menu.is(':visible')) {
                $menu.hide();
            } else {
                $('.dropdown-menu').hide();
                $menu.show();
            }
            return false;
        });

        $(document).on('click', function(e) {
            var $target = $(e.target);

            if (!$target.closest('.btn-group').length &&
                !$target.hasClass('datepicker') &&
                !$target.closest('.datepicker').length &&
                !$target.hasClass('datepicker-dropdown') &&
                !$target.closest('.datepicker-dropdown').length) {
                $('.dropdown-menu').hide();
            }
        });

        $('#refNo').on('input', function() {
            $(this).val($(this).val().replace(/\s/g, ''));
        });

        $('#dateFrom').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#dateTo').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));
        getBranchDroplist();


        $('#search').on('click', function () {
	    currentPageTable= 0;
    	currentPageSize = 10;

            searchFunction();

        });

        $('#list tbody').on('click', 'a', function (e) {
            if(e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
            var id = $(this).data('code');
            var menuName = $(this).attr('data-menu');
            var trxRefNo = $(this).attr('data-refNo');
            var trxStatus = $(this).attr('data-trxStatus');
            var menuCode = $(this).attr('data-menuCode');
            var createdByUserCode = $(this).attr('data-createdByUserCode');
            var rejectReason = $(this).attr('data-rjct');

            if (id !== undefined) {
                var res = app.setView(service,'detail');
                if(res=='done'){
                    $('#pendingTaskId').val(id);
                    $('#menuName').text(menuName);
                    $('#trxStatus').text(trxStatus);
                    $('#trxRefNo').text(trxRefNo);
                    $('#refNo').val(trxRefNo);
                    $('#menuCode').val(menuCode);
                    $('#createdByUserCode').val(createdByUserCode);
                    $('#rejectReason').text(rejectReason);

                    if ( rejectReason === 'undefined') {
                        $('#isReject').val(false);
                    } else {
                        $('#isReject').val(true);
                    }

                    getDetail();
                }
            }
        });
        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ' '
        });

        $('input[name="searchBy-rb"]').on('change', function(e){
            if (this.value=='1') {
                $('.row-date').hide();
                $('.row-corporate').hide();
                $('.row-createdby').hide();
                $('.row-menu').hide();
                $('.row-corpaccount').hide();
                $('.row-status').hide();
                $('.row-rate').hide();
                $('#refNo').show();
                $('#parentRefNo').hide();
                $('#form-area').validator('reset');

            } else if (this.value=='2') {
                $('.row-date').hide();
                $('.row-corporate').hide();
                $('.row-createdby').hide();
                $('.row-menu').hide();
                $('.row-corpaccount').hide();
                $('.row-status').hide();
                $('.row-rate').hide();
                $('#parentRefNo').show();
                $('#refNo').hide();
                $('#form-area').validator('reset');

            } else {
                $('.row-date').show();
                $('.row-corporate').show();
                $('.row-createdby').show();
                $('.row-menu').show();
                $('.row-corpaccount').show();
                $('.row-status').show();
                $('.row-rate').show();
                $('#refNo').hide();
                $('#parentRefNo').hide();
            }
        });



        $('select[id="corporate"]').on('change', function(e) {
            $('#menu').prop("disabled",false);
            $('#dateType').prop("disabled",false);
            $('#dateFrom').prop("disabled",false);
            $('#dateTo').prop("disabled",false);
            $('#rate').prop("disabled",false);
            $('#trxStatus').prop("disabled",false);

            // getMenuDroplist(this.value);
            //getServiceDroplist(this.value);

        });

        if(window.searchParam){
            if(window.searchParam.searchByRefNo){
                $("#refNo-rb").attr('checked', 'checked');
                $('#refNo').val(window.searchParam.refNo);
                $('#parentRefNo').val('');
                $('.row-date').hide();
                $('.row-corporate').hide();
                $('.row-createdby').hide();
                $('.row-menu').hide();
                $('.row-corpaccount').hide();
                $('.row-status').hide();
                $('.row-rate').hide();
                $('#refNo').show();

                $('#form-area').validator('reset');

                $('#search').trigger('click');
            }else if(window.searchParam.searchByParentRefNo){
                $("#prnt-refNo-rb").attr('checked', 'checked');
                $('#parentRefNo').val(window.searchParam.parentRefNo);
                $('#refNo').val('');
                $('.row-date').hide();
                $('.row-corporate').hide();
                $('.row-createdby').hide();
                $('.row-menu').hide();
                $('.row-corpaccount').hide();
                $('.row-status').hide();
                $('.row-rate').hide();
                $('#parentRefNo').show();

                $('#form-area').validator('reset');

                $('#search').trigger('click');
            }else {
                $("#corporate-rb").attr('checked', 'checked');
                $('.row-date').show();
                $('.row-corporate').show();
                $('.row-createdby').show();
                $('.row-menu').show();
                $('.row-corpaccount').show();
                $('.row-status').show();
                $('.row-rate').show();
                $('#refNo').hide();
                $('#search').trigger('click');
            }


        }
    });

    function searchFunction(){
        var url_action = '';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = {"activityDate": "DESC"};
        var data_code = '';


        window.searchParam = {
                refNo : $('#refNo').val(),
                parentRefNo : $('#parentRefNo').val(),
                searchByRefNo: ($('input[name="searchBy-rb"]:checked').val() == '1' ? true : false),
                searchByParentRefNo: ($('input[name="searchBy-rb"]:checked').val() == '2' ? true : false),
                corporate: $('#corporate').val(),
                dateFrom:$('#dateFrom').val(),
                dateTo:$('#dateTo').val(),
		        dateType:$('#dateType').val(),
                service:$('#service').val( )== 'null' ? '' : $('#service').val(),
                pendingTaskMenuCode:$('#service option:selected').attr('data-menuCode'),
                trxStatus:$('#trxStatus').val(),
                rate:$('#rate').val(),
                branch:$('#branch').val(),
            }
        console.log(window.searchParam,'window.searchParam')
            $("#vue-warning").hide();
            var validate = true;

            var value = {
                referenceNo : "",
                senderRefNo : "",
                benRefNo : "",
                parentRefNo : "",
                rate : "",
                currentPage: "1",
                pageSize: "20",
            };

            var searchByRefNo = window.searchParam.searchByRefNo;
            var searchByParentRefNo = window.searchParam.searchByParentRefNo;

            if (searchByRefNo) {
                url_action = 'searchTransactionStatusByReferenceNo';
                value.referenceNo = $('#refNo').val();
                if( value.referenceNo ==''){
                    flash('warning', 'Reference Number is mandatory');
                    return;
                }
            } else if(searchByParentRefNo){
                url_action = 'searchTransactionStatusByReferenceNo';
                value.parentRefNo = $('#parentRefNo').val();
                if( value.parentRefNo ==''){
                    flash('warning', 'Reference Number Parent is mandatory');
                    return;
                }
            }else {
                $('.row-corporate').validator('validate');
                value.corporateId = $('#corporate').val();
                var dateFrom=$('#dateFrom').val();
                var dateTo=$('#dateTo').val();
                if(moment(dateFrom, "DD/MM/YYYY").isAfter(moment(dateTo, "DD/MM/YYYY"))){
                    flash('warning', 'From Date cannot be greater than To Date');
                    return;
                }
                if ($('#dateType').val() == '0') { // creation Date
                if(moment(dateTo, "DD/MM/YYYY").isAfter(moment(new Date(), "DD/MM/YYYY").add(1,'days'))){
                    flash('warning', 'To date cannot be greater than today');
                    return;
                }
                }


                if ($('#dateType').val() == '0') { // creation Date
                    value.creationDateFrom = $('#dateFrom').val();
                    value.creationDateTo = $('#dateTo').val();
                } else {
                    value.instructionDateFrom = $('#dateFrom').val();
                    value.instructionDateTo = $('#dateTo').val();
                }
                // value.pendingTaskMenuCode = $('#service').val();

                value.serviceCode = $('#service').val( )== 'null' ? '' : $('#service').val();
                value.pendingTaskMenuCode = $('#service option:selected').attr('data-menuCode');

                value.status = $('#trxStatus').val();
                value.rate=$('#rate').val();
                value.branch = $('#branch').val();
                url_action = 'searchTransactionStatus';
            }

            $(this).prop("disabled",true);
            $('#list').show();
            $('.list-title').show();

            if (validate) {
                valueTable = value;
                var index = 1;
                oTable = $('#list').DataTable({
                    "destroy": true,
                    preDrawCallback: function (settings) {
                        var table = $('#list').DataTable();
                        index=1;
                        var dataTableHeaderElements =   table.column( 3, {order:'name'} );
                        var order = table.order()[0];
                        var columnName=table.settings().init().columnDefs[order[0]].name;
                        if(columnName=='corporateId'
                            ||columnName=='activityDate'
                            ||columnName=='referenceNo'
                            ||columnName=='pendingTaskMenuName'
                            ||columnName=='rate'
                            ||columnName=='transactionAmount'
                            ||columnName=='instructionMode'
                            ||columnName=='instructionDate'
                            ||columnName=='createdByUserId'
                            ||columnName=='status'){
                            custom_order = {};
                            custom_order[columnName]= order[1].toString().toUpperCase();
                        }

                    },
                    "initComplete": function(settings, json) {
                        if(json.message){
                            flash('warning', json.message);
                            $('#list').hide();
                            $('.list-title').hide();
                        }

                        $('#search').prop("disabled",false);
                        index=1
                        totalDataSearch = json.recordsTotal;
                    },
                    "select": false,
                    "searching": false,
                    "lengthMenu": [[10, 25, 50,100], [10, 25, 50,100]],
	                "pageLength":currentPageSize,
                    "processing": true,
                    "serverSide": true,
                    "autoWidth": true,
                    "ScrollX": true,
		    "displayStart":currentPageTable * currentPageSize,
                    "drawCallback": function () {
                        index=1;
                    },
                    "columnDefs": [
                        {
                            targets: 0,
                            data: "createdDate",
                            name: "createdDate",
                            render: function ( data, type, full, meta ) {
                                //var table = oTable; //note that you probably already have this call
                                var info = oTable.page.info();
                                return info.start + (index++);
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 1,
                            name: "corporateId",
                            data: {
                                corporateId: "corporateId",
                                corporateName: "corporateName"
                            },
                            render: function ( data, type, full, meta ) {
                                return data.corporateId +' - '+ data.corporateName;
                            },
                            orderable: true
                        },
                        {
                            targets: 2,
                            data: "latestActivityDate",
                            name: "activityDate",
                            orderable: true
                        },
                        {
                            targets: 3,
                            data: "referenceNo",
                            name: "referenceNo",
                            render: function ( data, type, full, meta ) {
                                    return '<a href="javascript:void(0)" data-code="'+full.pendingTaskId+'" data-menu="'+full.pendingTaskMenuName+'" data-menuCode="'+full.pendingTaskMenuCode+'" data-createdByUserCode="'+full.corporateId+'|'+full.createdByUserId+'" data-refNo="'+ full.referenceNo+'" data-trxStatus="'+full.status+'"  data-rjct="'+full.rejectReason+'">'+full.referenceNo+'</a>';
                            },
                            orderable: true
                        },
                        {
                            targets: 4,
                            data: "pendingTaskMenuName",
                            name: "pendingTaskMenuName",
                            orderable: true
                        },
                        {
                            targets: 5,
                            data: "rate",
                            name: "rate",
                            render: function ( data, type, full, meta ) {
                                if (full.transactionAmount == '-1' || data.transactionAmount == '-1.00') {
                                    return '';
                                } else {
                                    if (data == 'SR') {
                                        return 'Special Rate';
                                    } else if (data == 'CR') {
                                        return 'Counter Rate';
                                    } else {
                                        return '';
                                    }
                                }
                            },
                            orderable: true
                        },
                        {
                            targets: 6,
                            // data: "transactionAmount",
                            data: {
                                transactionAmount: "transactionAmount",
                                transactionCurrency: "transactionCurrency",
                                pendingTaskMenuCode: "pendingTaskMenuCode",
                                amendmentAmount: "amendmentAmount"
                            },
                            name:"transactionAmount",
                            orderable: true,
                            // render: $.fn.dataTable.render.number( ',', '.', 0, 'IDR ' )
                            render: function ( data, type, full, meta ) {
                                if(data.transactionAmount == '-1' || data.transactionAmount == '-1.00'){
                                    return '';
                                } else {
                                    if(data.pendingTaskMenuCode == 'MNU_GPCASH_F_TF_AMENDMENT'){
                                        if (full.transactionAmount == '-2') {
                                            return '-';
                                        }else{
                                        return data.transactionCurrency +' '+ data.amendmentAmount + ' ' +currencyFormat(data.transactionAmount);
                                        }
                                    }else{
                                        return  data.transactionCurrency +' '+currencyFormat(data.transactionAmount);
                                    }
                                }
                            },
                        },
                        {
                            targets: 7,
                                data: "instructionMode",
                                name: "instructionMode",
                                render: function ( data, type, full, meta ) {
                                    if(data=='I') {
                                        return 'Immediate';
                                    } else if (data=='F') {
                                        return 'Future Date';
                                    } else if (data=='R') {
                                        return 'Recurring';
                                    } else {
                                        return '';
                                    }
                                },
                                orderable: true
                            },
                            {
                                targets: 8,
                                data: "instructionDate",
                                name: "instructionDate",
                                orderable: true
                            },
                            {
                                targets: 9,
                                name: 'createdByUserId',
                            data: {
                                createdByUserId: "createdByUserId",
                                createdByUserName: "createdByUserName"
                            },
                            render: function ( data, type, full, meta ) {
                                return data.createdByUserId +' - '+ data.createdByUserName;
                            },
                            orderable: true
                        },
                        {
                                targets: 10,
                            data: "status",
                            name: "status",
                            orderable: true
                        }
                    ],
                    "ajax": {
                        url: "fetchDataTable",
                        type:'POST',
                        data: function ( d ) {
                            d.value = value;
                            d.menu = service;
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
                            console.log("=====currentPage", currentPageTable);
			    console.log("=====currentPageSize", currentPageSize);
                        }
                    }
                });
            }
    }
    function getCorporate() {
        var value = {
            code: "",
        };
        var url_action = 'searchCorporate';
        var action = 'SEARCH';
        var menu = service;
        // var menu = 'MNU_GPCASH_BO_RPT_TRX_STS';
        $.ajax({
            url: 'getAPIData',
            async: false,
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
                    unitOption = '<option value="">All Corporate</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.corporateId + '">' + obj.corporateId +' - '+ obj.corporateName + '</option>';
                    });
                    $('#corporate').html(unitOption);
                    $('#corporate').select2();
                    if(window.searchParam){
                        $('#corporate').val(window.searchParam.corporate).change();
                        $('#branch').val(window.searchParam.branch).change();
                        $('#service').val(window.searchParam.service).change();
                        $('#trxStatus').val(window.searchParam.trxStatus).change();
                        $('#rate').val(window.searchParam.rate).change();

                        $('#dateFrom').val(window.searchParam.dateFrom);
                        $('#dateTo').val(window.searchParam.dateTo);

			            $('#dateType').val(window.searchParam.dateType);
                        $('#refNo').val(window.searchParam.refNo).change();
                        $('#search').trigger('click');

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

    function getMenuDroplist(corpId) {

        var value = {
            corporateId: corpId
        };
        var url_action = 'searchCorporateMenu';
        var action = 'SEARCH';
        var menu = service;
        $.ajax({
            url: 'getAPIData',
            async: false,
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
                    unitOption = '<option value="">Select Menu</option>';
                    $.each(result.menus, function (idx, obj) {
                        unitOption += '<option value="' + obj.pendingTaskCode + '">' + obj.pendingTaskName + '</option>';
                    });
                    $('#menu').html(unitOption);
                    $('#menu').select2();
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
    function getServiceDroplist() {
        var value = {
            code: "",
        };
        var url_action = 'searchServiceList';
        var action = 'SEARCH';
        var menu = service;
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
                    unitOption = '<option value="">All Service</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.serviceCode + '" data-menuCode ="'+ obj.menuCode + '">' + obj.name + '</option>';
                    });
                    $('#service').html(unitOption);
                    $('#service').select2();
                    var corporate= $('#corporate').val()

                    if(corporate==''){
                        getCorporate()
                    }
                   ;
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

    function getBranchDroplist() {

        var value = {

        };
        var url_action = 'searchBranch';
        var action = 'SEARCH';
        var menu = service;
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
                    unitOption = '<option value="">All Branch</option>';
                    $.each(result.branchs, function (idx, obj) {
                        unitOption += '<option value="' + obj.branchCode + '">' + obj.branchName + '</option>';
                    });
                    $('#branch').html(unitOption);
                    $('#branch').select2();
                    getStatusDroplist();
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

    function getCreatedByDroplist(corpId) {

        var url_action = 'searchUserMaker';
        var action = 'SEARCH';
        var menu = service;
        var value = {
            corporateId: corpId
        };
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
                    unitOption = '<option value="">select maker user ID</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.makerUserId+ '">' + obj.makerUserName + '</option>';
                    });
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

    function getCorporateAccountDroplist(corpId) {

        var value = {
            corporateId: corpId
        };
        var url_action = 'searchSourceAccount';
        var action = 'SEARCH';
        var menu = service;
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
                    unitOption = '<option value="">select account</option>';
                    $.each(result.accounts, function (idx, obj) {
                        unitOption += '<option value="' + obj.accountGroupDtlId + '">' + obj.accountNo + ' / ' + obj.accountName + ' (' + obj.accountCurrencyName + ')' + '</option>';
                    });
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

    function getStatusDroplist(corpId) {

        var value = {
            corporateId: corpId
        };
        var url_action = 'getTransactionStatus';
        var action = 'SEARCH';
        var menu = service;
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
                if (result) {
                    unitOption = '<option value="">All Status</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.key + '">' + obj.value + '</option>';
                    });
                    $('#trxStatus').html(unitOption);
                    $('#trxStatus').select2();

                    getServiceDroplist();
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

    function currencyFormat (num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }

    function doDownload(fileFormat) {

        if (typeof valueTable === 'undefined' || !valueTable) {
            flash('warning', 'Please perform a search first before downloading');
            return;
        }

        if (isDownloading) {
            flash('warning', 'Download is already in progress. Please wait...');
            return;
        }

        isDownloading = true;

        var url_action = 'requestDownloadListing';
        var action = 'DOWNLOAD';
        var menu = service;

        var downloadValue = $.extend(true, {}, valueTable);
        downloadValue.fileType = fileFormat;
        downloadValue.currentPage = 1;
        downloadValue.pageSize = totalDataSearch;

        $.ajax({
            url: 'getAPIData',
            method: 'post',
            cache: false,
            data: {
                value: downloadValue,
                menu: menu,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    var fileId = result.fileId;
                    if (fileId) {
        $.ajax({
            url: 'downloadTrade',
            method: 'POST',
            cache: false,
            data:{
                                url_action: "download?fileType=" + fileFormat + "&fileId=" + fileId,
                service:service,
            },
            xhrFields: {
                withCredentials: true,
                responseType:'arraybuffer'
            },
            success: function (response, status, xhr) {
                var filename = "";
                var disposition = xhr.getResponseHeader('Content-Disposition');
                if (disposition && disposition.indexOf('attachment') !== -1) {
                    var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                    var matches = filenameRegex.exec(disposition);
                    if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                }

                var type = xhr.getResponseHeader('Content-Type');
                                var blob = new Blob([response], { type: type || 'application/octet-stream' });

                                if (!filename) {
                                    var extension = fileFormat.toLowerCase();
                                    filename = 'transaction_status_' + moment().format('YYYYMMDD_HHmmss') + '.' + extension;
                                }

                saveAs(blob, filename);
                                isDownloading = false;
                            },
                            error: function (xhr, ajaxOptions, thrownError) {
                                var msg = '{{trans('form.conn_error')}}';
                                flash('warning', 'Failed to download file: ' + msg);
                                isDownloading = false;
                            }
                        });
                    } else {
                        isDownloading = false;
                    }
                } else {
                    flash('warning', result.message);
                    isDownloading = false;
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                isDownloading = false;
            }

        });
    }


</script>
