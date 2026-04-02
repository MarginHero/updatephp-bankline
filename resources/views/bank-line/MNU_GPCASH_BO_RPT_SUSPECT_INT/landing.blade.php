@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'Search']])

<style>
    .form-control.error {
        border-color: #dd4b39 !important;
        box-shadow: 0 0 0 0.2rem rgba(221, 75, 57, 0.25) !important;
    }

    .help-block.with-errors {
        color: #dd4b39 !important;
        font-size: 12px;
        margin-top: 5px;
        display: block !important;
        font-weight: bold;
    }

    .help-block.with-errors span {
        color: #dd4b39 !important;
    }

    .has-error .form-control,
    .has-danger .form-control {
        border-color: #dd4b39 !important;
        box-shadow: 0 0 0 0.2rem rgba(221, 75, 57, 0.25) !important;
    }

    .ig-dateFrom.has-error .input-group,
    .ig-dateFrom.has-danger .input-group,
    .ig-dateTo.has-error .input-group,
    .ig-dateTo.has-danger .input-group {
        border: 2px solid #dd4b39 !important;
        border-radius: 4px;
    }

    .e-dateFrom span,
    .e-dateTo span {
        color: #dd4b39 !important;
        font-weight: bold;
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
                    <h3 class="box-title">Report  Filter</h3>
                </div>
                <form class="form-horizontal" id="form-area">

                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <div class="col-md-3">
                                        <input type="radio" id="corporate-rb" name="searchBy-rb" value="0" checked>
                                        <label for="corporate-rb"><strong>Corporate</strong></label>
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
                                <div class="mb-3 row form-group">
                                    <div class="col-md-3" >
                                        <label>Service</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" id="serviceList">
                                            <option value="">Select Service</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-status">
                                <div class="mb-3 row form-group">
                                    <div class="col-md-3" >
                                        <label>Status</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" id="trxStatus">
                                            <option value="">All Status</option>
                                            <option value="Y">Suspect</option>
                                            <option value="N">Non Suspect</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-actionsuspect">
                                <div class="mb-3 row form-group">
                                    <div class="col-md-3" >
                                        <label>Action</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" id="actionSuspect">
                                            <option value="">All Action</option>
                                            <option value="SUSPECT_UNPROCESSED">Unprocessed</option>
                                            <option value="SUSPECT_ACCEPT">Accept</option>
                                            <option value="SUSPECT_DECLINE">Decline</option>
                                            <option value="SUSPECT_PASSED">Passed</option>
                                            <option value="SUSPECT_NOACTION">No Action</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-date">
                                <div class="mb-3 row form-group">
                                    <div class="col-md-3" >
                                        <label>Date Range</label>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-auto">
                                                <div class="input-group ig-dateFrom">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="dateFrom" name="dateFrom" class="form-control datepicker detail numeric" autocomplete="off" value="" >
                                                </div>
                                                <div class="help-block with-errors e-dateFrom"></div>
                                            </div>
                                            <div class="col-auto mx-2">
                                                <label class="col-form-label"><strong>to</strong></label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="input-group ig-dateTo">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="dateTo" name="dateTo" class="form-control datepicker numeric" autocomplete="off" value="" >
                                                </div>
                                                <div class="help-block with-errors e-dateTo"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <div class="col-md-3">
                                        <input type="radio" id="refNo-rb" name="searchBy-rb" value="1">
                                        <label for="refNo-rb">Transaction Reference Number</label>
                                    </div>
                                    <div class="col-md-7" >
                                        <input type="text" id="refNo" name="refNo" class="form-control" autocomplete="off" value="" maxlength="40" style="display: none">
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

                                <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse; display: block; overflow-x: auto; border-bottom: 0px">
                        <thead>
                        <tr>
                            <th align="center"><strong>No.</strong></th>
                            <th align="center"><strong>Corporate ID</strong></th>
                            <th align="center"><strong>Corporate Name</strong></th>
                            <th align="center"><strong>Date</strong></th>
                            <th align="center"><strong>Transaction Reference Number</strong></th>
                            <th align="center"><strong>Amount</strong></th>
                            <th align="center"><strong>Service</strong></th>
                            <th align="center"><strong>Status</strong></th>
                            <th align="center"><strong>Action</strong></th>

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
                        </tr>
                        </tbody>
                    </table>

                </div>
                    <div class="box-footer list-title">
                        <div class="float-left">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Download <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" id="downloadFormat">
                                    <li><a href="#" data-format="PDF">PDF</a></li>
                                    <li><a href="#" data-format="EXCEL">EXCEL</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</section>

<script>
    var service = '{{ $service }}';
    var totalDataSearch;
    var valueTable;

    $(document).ready(function () {

        var url_action = '';
        var action = 'SEARCH';
        var result_key = 'result';
        var data_code = '';

        $('#list').hide();
        $('.list-title').hide();

        $('.e-dateFrom').html('').hide();
        $('.e-dateTo').html('').hide();

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose: true,
            todayHighlight: true,
            orientation: "bottom auto",
            container: 'body'
        }).on('show', function(e) {
            var $input = $(this);
            var $picker = $('body > .datepicker-dropdown');
            var offset = $input.closest('.input-group').offset();
            var height = $input.closest('.input-group').outerHeight();
            $picker.css({
                top: (offset.top + height + window.scrollY) + 'px',
                left: offset.left + 'px'
        });
            $picker.removeClass('datepicker-orient-top').addClass('datepicker-orient-bottom');
        });;

        $('.datepicker').on('click', function(e) {
            e.stopPropagation();
        });

        $(document).on('click', '.datepicker-dropdown', function(e) {
            e.stopPropagation();
        });


        $('#dateFrom').on("change", function () {
            $('.ig-dateFrom').removeClass('has-error has-danger');
            $('.e-dateFrom').html('').hide();
        });

        $('#dateTo').on("change", function () {
            $('.ig-dateTo').removeClass('has-error has-danger');
            $('.e-dateTo').html('').hide();
        });

        $('#dateFrom').val(moment(new Date(), "DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#dateTo').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));

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

            // Reset after delay
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
                $('.dropdown-menu').hide(); // Close all other dropdowns
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

        $('#refNo').on('input', function () {
            $(this).val($(this).val().replace(/\s/g, ''));
        });

        getCorporate();
        getServiceDroplist();

        $('#search').on('click', function () {
            // Clear all errors first
            $('.ig-dateFrom').removeClass('has-error has-danger');
            $('.e-dateFrom').html('').hide();
            $('.ig-dateTo').removeClass('has-error has-danger');
            $('.e-dateTo').html('').hide();

            window.searchParam = {
                refNo: $('#refNo').val(),
                searchByRefNo: ($('input[name="searchBy-rb"]:checked').val() == '1' ? true : false),
                corporate: $('#corporate').val(),
                dateFrom: $('#dateFrom').val(),
                dateTo: $('#dateTo').val(),
                trxStatus: $('#trxStatus').val(),
                actionSuspect: $('#actionSuspect').val(),
                serviceList: $('#serviceList option:selected').attr('data-serviceCode') == 'null' ? '' : $('#serviceList option:selected').attr('data-serviceCode'),
            }
            $("#vue-warning").hide();
            var validate = true;

            var value = {
                referenceNo: "",
                senderRefNo: "",
                benRefNo: "",
                rate: "",
                currentPage: "1",
                pageSize: "20",
            };

            var searchByRefNo = window.searchParam.searchByRefNo;

            if (searchByRefNo) {
                url_action = 'search';
                value.referenceNo = $('#refNo').val();
                if (value.referenceNo == '') {
                    flash('warning', 'Reference Number is mandatory');
                    return;
                }
            } else {
                $('.row-corporate').validator('validate');
                value.corporateId = $('#corporate').val();
                var dateFrom = $('#dateFrom').val();
                var dateTo = $('#dateTo').val();


                if(!validate) {
                    return;
                }

                // Validate date range
                if (moment(dateFrom, "DD/MM/YYYY").isAfter(moment(dateTo, "DD/MM/YYYY"))) {
                    flash('warning', 'From Date cannot be greater than To Date');
                    return;
                }
                if (moment(dateTo, "DD/MM/YYYY").isAfter(moment(new Date(), "DD/MM/YYYY").add(1, 'days'))) {
                    flash('warning', 'To date cannot be greater than today');
                    return;
                }


                value.creationDateFrom = $('#dateFrom').val();
                value.creationDateTo = $('#dateTo').val();
                value.serviceCode = $('#serviceList option:selected').attr('data-serviceCode') == 'null' ? '' : $('#serviceList option:selected').attr('data-serviceCode');
                value.status = $('#trxStatus').val();
                value.actionSuspect = $('#actionSuspect').val();
                url_action = 'search';
            }

            $(this).prop("disabled", true);
            $('#list').show();
            $('.list-title').show();

            if (validate) {
                var index = 1;
                valueTable = value;
                $('#list').DataTable({
                    "destroy": true,
                    "initComplete": function (settings, json) {
                        if (json.message) {
                            flash('warning', json.message);
                            $('#list').hide();
                            $('.list-title').hide();
                        }
                        $('#search').prop("disabled", false);
                        index = 1
                        totalDataSearch = json.recordsTotal;
                    },
                    "select": false,
                    "searching": false,
                    "lengthMenu": [[10, 25, 50], [10, 25, 50]],
                    "processing": true,
                    "serverSide": true,
                    "ScrollX": true,
                    "drawCallback": function () {
                        index = 1;
                    },
                    preDrawCallback: function (settings) {
                        index=1;
                    },
                    "columnDefs": [
                        {
                            targets: 0,
                            data: "createdDate",
                            width: "5%",
                            render: function (data, type, full, meta) {
                                var table = $('#list').DataTable(); //note that you probably already have this call
                                var info = table.page.info();
                                return info.start + (index++);
                            },
                            orderable: false,
                            className: 'dt-center',
                        },
                        {
                            targets: 1,
                            data: "corporate.id",
                            width: "7%",
                            orderable: true,
                            render: function ( data, type, full, meta ) {
                                return full.corporateId;
                            },
                        },
                        {
                            targets: 2,
                            data: "corporate.name",
                            width: "15%",
                            orderable: true,
                            render: function ( data, type, full, meta ) {
                                return full.corporateName;
                            },
                        },
                        {
                            targets: 3,
                            data: "createdDate",
                            width: "10%",
                            orderable: true,
                            render: function ( data, type, full, meta ) {
                                return full.createdDate;
                            },
                        },
                        {
                            targets: 4,
                            data: "referenceNo",
                            name: "referenceNo",
                            width: "15%",
                            render: function (data, type, full, meta) {
                                return "<a href='javascript:void(0)' data-menuCode='" + full.menuCode +
                                    "' data-code='" + full.pendingTaskId +
                                    "' data-refNo='" + full.referenceNo +
                                    "'>" + full.referenceNo + "</a>";
                            },
                            orderable: true
                        },
                        {
                            targets: 5,
                            width: "13%",
                            data: "transactionAmount",
                            name: "transactionAmount",
                            orderable: true,
                            // render: $.fn.dataTable.render.number( ',', '.', 0, 'IDR ' )
                            render: function (data, type, full, meta) {
                                if (full.transactionAmount == '-1' || full.transactionAmount == '-1.00') {
                                    return '';
                                } else {
                                    return full.transactionCurrency + ' ' + currencyFormat(full.transactionAmount);
                                }
                            },
                        },
                        {
                            targets: 6,
                            width: "15%",
                            data: "menu.name",
                            orderable: true,
                            render: function ( data, type, full, meta ) {
                                return full.service;
                            },
                        },
                        {
                            targets: 7,
                            width: "10%",
                            data: "isSuspect",
                            orderable: true,
                            render: function (data, type, full, meta) {
                                if (data == 'N') {
                                    return 'NON SUSPECT';
                                } else {
                                    return 'SUSPECT';
                                }
                            },
                        },
                        {
                            targets: 8,
                            data: "actionSuspect",
                            width: "10%",
                            orderable: true,
                            render: function ( data, type, full, meta ) {
                                return full.actionSuspect;
                            },
                        },
                    ],
                    "ajax": {
                        url: "fetchDataTable",
                        type: 'POST',
                        data: function (d) {
                            d.value = value;
                            d.menu = service;
                            d.url_action = url_action;
                            d.action = action;
                            d.result_key = result_key;
                            d._token = '{{ csrf_token() }}';
                        },
                        error: function (jqXHR, textStatus, errorThrown) {

                            var msg = '{{trans('form.conn_error')}}';
                            flash('warning', msg);
                            $('#list').hide();
                            $('.list-title').hide();
                            $('#search').prop("disabled", false);
                        }
                    }
                });
            }

        });

        $('#list tbody').on('click', 'a', function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                e.handled = true;
            }
            var trxRefNo = $(this).attr('data-refNo');
            if (trxRefNo !== undefined) {
                $('#service').val('{{ $service }}');
                var res = app.setView('{{ $service }}', 'detail');
                if (res == 'done') {
                    getDetail(trxRefNo);
                }
            }
        });

        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow: ' '
        });

        $('input[name="searchBy-rb"]').on('change', function (e) {
            if (this.value == '1') {
                $('.row-date').hide();
                $('.row-corporate').hide();
                $('.row-createdby').hide();
                $('.row-menu').hide();
                $('.row-corpaccount').hide();
                $('.row-status').hide();
                $('.row-actionsuspect').hide();
                $('.row-rate').hide();
                $('#refNo').show();

                $('#form-area').validator('reset');

            } else {
                $('.row-date').show();
                $('.row-corporate').show();
                $('.row-createdby').show();
                $('.row-menu').show();
                $('.row-corpaccount').show();
                $('.row-status').show();
                $('.row-actionsuspect').show();
                $('.row-rate').show();
                $('#refNo').hide();
            }
        });


        $('select[id="corporate"]').on('change', function (e) {
            $('#menu').prop("disabled", false);
            $('#dateType').prop("disabled", false);
            $('#dateFrom').prop("disabled", false);
            $('#dateTo').prop("disabled", false);
            $('#rate').prop("disabled", false);
            $('#trxStatus').prop("disabled", false);
            $('#actionSuspect').prop("disabled", false);

            // getMenuDroplist(this.value);
            getServiceDroplist(this.value);

        });

        if (window.searchParam) {
            if (window.searchParam.searchByRefNo) {
                $("#refNo-rb").attr('checked', 'checked');
                $('#refNo').val(window.searchParam.refNo);
                $('.row-date').hide();
                $('.row-corporate').hide();
                $('.row-menu').hide();
                $('.row-status').hide();
                $('.row-actionsuspect').hide();
                $('#refNo').show();
                $('#form-area').validator('reset');

                $('#search').trigger('click');
            } else {
                $('#corporate').val(window.searchParam.corporate);
                $('#dateFrom').val(window.searchParam.dateFrom);
                $('#dateTo').val(window.searchParam.dateTo);
                $('#trxStatus').val(window.searchParam.trxStatus);
                $('#actionSuspect').val(window.searchParam.actionSuspect);
                $('#serviceList').val(window.searchParam.serviceList);
                $('.row-date').show();
                $('.row-corporate').show();
                $('.row-menu').show();
                $('.row-status').show();
                $('.row-actionsuspect').show();
                $('#refNo').hide();
                $('#search').trigger('click');
            }
        }
    });

    var isDownloading = false;
    function doDownload(fileFormat) {
        if (typeof valueTable === 'undefined' || !valueTable) {
            flash('warning', 'Please perform a search first before downloading');
            return;
        }

        if (isDownloading) {
            console.log('Download already in progress, blocking...');
            flash('warning', 'Download is already in progress. Please wait...');
            return;
        }

        isDownloading = true;
        console.log('Starting download for format:', fileFormat);

        var url_action = 'downloadReport';
        var action = 'DOWNLOAD';
        var menu = service;
        valueTable.downloadFormat = fileFormat;

        $.ajax({
            url: 'getAPIData',
            method: 'post',
            cache: false,
            data: {
                value: valueTable,
                menu: menu,
                url_action: url_action,
                action: action,
                _token: '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status == "200") {
                    let fileName = result.fileId;

                    $.ajax({
                        url: 'downloadFile',
                        method: 'POST',
                        cache: false,
                        data:{
                            url_action : "download",
                            service: service,
                            _token: '{{ csrf_token() }}'
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
                                var extension = fileFormat == 'PDF' ? 'pdf' : 'xlsx';
                                filename = 'suspect_report_' + moment().format('YYYYMMDD_HHmmss') + '.' + extension;
                            }

                            saveAs(blob, filename);
                            isDownloading = false; // Reset flag after successful download
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            var msg = '{{trans('form.conn_error')}}';
                            flash('warning', 'Failed to download file: ' + msg);
                            isDownloading = false; // Reset flag on error
                        }
                    });
                } else {
                    flash('warning', result.message);
                    isDownloading = false; // Reset flag if request failed
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                isDownloading = false;
            }
        });
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
                        // pendingTaskMenuCode:$('#service option:selected').attr('data-menuCode'),
                    $('#corporate').html(unitOption);
                    $('#corporate').select2();
                    if(window.searchParam){
                        $('#corporate').val(window.searchParam.corporate).change();
                        console.log(window.searchParam,'sss')
                        $('#serviceList').val(window.searchParam.serviceList).change();
                        $('#trxStatus').val(window.searchParam.trxStatus).change();
                        $('#actionSuspect').val(window.searchParam.actionSuspect).change();

                        $('#dateFrom').val(window.searchParam.dateFrom);
                        $('#dateTo').val(window.searchParam.dateTo);

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
                console.log(result);
                if (result.status=="200") {
                    unitOption = '<option value="">All Service</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.menuCode + '" data-serviceCode ="'+ obj.menuCode + '" data-menuCode ="'+ obj.menuCode +'">' + obj.menuName + '</option>';
                    });
                    $('#serviceList').html(unitOption);
                    $('#serviceList').select2();
                    var corporate= $('#corporate').val()
                    if(window.searchParam){
                        $('#corporate').val(window.searchParam.corporate).change();
                        $('#serviceList').val(window.searchParam.serviceList).change();
                        $('#trxStatus').val(window.searchParam.trxStatus).change();
                        $('#actionSuspect').val(window.searchParam.actionSuspect).change();
                        $('#dateFrom').val(window.searchParam.dateFrom);
                        $('#dateTo').val(window.searchParam.dateTo);
                        $('#search').trigger('click');
                    }
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



    function currencyFormat (num) {
        return parseFloat(num).toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");  //<--- $1  is a special replacement pattern which holds a value of the first parenthesised submatch string
    }


    function requestDownload(fileFormat){

        var url_action = 'requestDownloadListing';
        var action = 'DOWNLOAD';
        var menu = service;
        var value = {
            referenceNo : "",
            senderRefNo : "",
            benRefNo : "",
            rate : "",
            currentPage: 1,
            pageSize: totalDataSearch,
            fileType: fileFormat,
        };

        var searchByRefNo = ($('input[name="searchBy-rb"]:checked').val() == '1' ? true : false);

        if (searchByRefNo) {
            value.referenceNo = $('#refNo').val();
        } else {
            value.corporateId = $('#corporate').val();

            if ($('#dateType').val() == '0') {
                value.creationDateFrom = $('#dateFrom').val();
                value.creationDateTo = $('#dateTo').val();
            } else {
                value.instructionDateFrom = $('#dateFrom').val();
                value.instructionDateTo = $('#dateTo').val();
            }
            // value.pendingTaskMenuCode = $('#menu').val();
            value.serviceCode =$('#service option:selected').attr('data-serviceCode');
            value.pendingTaskMenuCode = $('#service option:selected').attr('data-menuCode');
            console.log(value.pendingTaskMenuCode);
            value.status = $('#trxStatus').val();
            value.actionSuspect = $('#actionSuspect').val();
            value.rate=$('#rate').val();
            value.branch = $('#branch').val();
        }

        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : service,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    var fileId = result.fileId;
                    if (fileId) {
                        downloadFile(fileId, fileFormat);
                    }

                } else {
                    flash('warning', result.message);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                flash('warning', 'Form Submit Failed');
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }
        });
    }

    function downloadFile(downloadId, fileType) {

       /* var value = {
            fileType : fileType,
            fileId: downloadId
        };*/

        $.ajax({
            url: 'downloadTrade',
            method: 'POST',
            cache: false,
            data:{
                url_action : "download?fileType="+fileType+"&fileId="+downloadId,
                // value:'EXECUTE',
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
                var blob = new Blob([response], { type: 'text/csv' });
                saveAs(blob, filename);

            }

        });
    }


</script>

