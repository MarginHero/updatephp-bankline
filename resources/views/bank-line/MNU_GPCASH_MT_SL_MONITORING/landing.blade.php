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
</style>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                    <div class="box-header">
                        <h3 class="box-title">STATEMENT LETTER FILTER</h3>
                    </div>
                    <form class="form-horizontal" id="form-area">

                    <div class="box-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="mb-3 row">
                                    <div class="col-md-3">
                                    <input type="radio" id="corporate-rb" name="searchBy-rb" value="0" checked>
                                    <label for="corporate-rb"><strong>Corporate</strong></label>
                                    </div>
                                    <div class="col-md-7 row-corporate" >
                                        <select class="form-control" id="corporate" data-error="please select corporate">
                                            <option></option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-date">
                                <div class="mb-3 row" >
                                    <label class="col-md-3">Date Range</label>
                                    <div class="col-md-7">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-auto">
                                                <div class="input-group ig-dateFrom">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="dateFrom" name="dateFrom" class="form-control datepicker detail numeric" autocomplete="off" data-error="This field is mandatory." style="width: 150px;" required>
                                                </div>
                                                <div class="help-block with-errors e-dateFrom"></div>
                                            </div>
                                            <div class="col-auto mx-2">
                                                <label class="col-form-label"><strong>to</strong></label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="input-group ig-dateTo">
                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                    <input type="text" id="dateTo" name="dateTo" class="form-control datepicker numeric" autocomplete="off" data-error="This field is mandatory." style="width: 150px;" required>
                                                </div>
                                                <div class="help-block with-errors e-dateTo"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row">
                                    <div class="col-md-3">
                                        <input type="radio" id="refNo-rb" name="searchBy-rb" value="1">
                                        <label for="refNo-rb"><strong>Transaction Reference No</strong></label>
                                    </div>
                                    <div class="col-md-7" >
                                        <input type="text" id="refNo" name="refNo" class="form-control" autocomplete="off" value="" maxlength="40" data-error="Transaction reference number is mandatory." style="display: none">
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
                        <h3 class="box-title">STATEMENT LETTER LISTING</h3>
                    </div>
                    <div class="box-body list-title">

                        <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                            <thead>
                            <tr>
                                <th></th>
                                <th align="center"><strong>Transaction Date</strong></th>
                                <th align="center"><strong>Corporate</strong></th>
                                <th align="center"><strong>Transaction Type</strong></th>
                                <th align="center"><strong>Transaction Reference No.</strong></th>
                                <th align="center"><strong>Source Currency</strong></th>
                                <th align="center"><strong>Filename</strong></th>
                                <th align="center"><strong>Releaser</strong></th>
                                <th align="center"><strong>Transaction Status</strong></th>
                            </tr>
                            </thead>
                        </table>

                    </div>
                    <iframe title="pdfviewer" id="pdfviewer" name="pdfviewer" src="" type="application/pdf"  width="100%" height="500px"></iframe>
                    <div class="box-footer list-title">
                        <div class="float-right">
                            <button type="button" id="download" name="download" class="btn btn-primary">@lang('form.save_pdf')</button>
                            <button type="button" id="print" name="print" class="btn btn-primary">@lang('form.print')</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var service = '{{ $service }}';

    $(document).ready(function () {

        var data_code = '';
        $('#pdfviewer').hide();
        $('#list').hide();
        $('.list-title').hide();
        $('.e-dateFrom').hide();
        $('.e-dateTo').hide();
        getCorporate();

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true
        });

        $('#dateFrom').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#dateTo').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));

        $('#refNo').on('input', function() {
            if($(this).val().trim() !== '') {
                $(this).removeClass('error');
                $(this).parent().find('.help-block.with-errors').html('').hide();
            }
        });

        $('#dateFrom').on("change", function () {
            $('.ig-dateFrom').removeClass('has-error has-danger');
            $('.e-dateFrom').hide();
        });

        $('#dateTo').on("change", function () {
            $('.ig-dateTo').removeClass('has-error has-danger');
            $('.e-dateTo').hide();
        });


        oTable = $('#list').DataTable({
            "paging" : true,
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
                    orderable: false
                },
                {
                    targets: 2,
                    orderable: false
                },
                {
                    targets: 3,
                    orderable: false
                },
                {
                    targets: 4,
                    orderable: false
                },
                {
                    targets: 5,
                    orderable: false
                },
                {
                    targets: 6,
                    orderable: false
                },
                {
                    targets: 7,
                    orderable: false
                },
                {
                    targets: 8,
                    orderable: false
                }
            ],
        });

        $('#search').on('click', function () {
            searchFunction();
        });

        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',.-'
        });

        $('input[name="searchBy-rb"]').on('change', function(e){
            if (this.value=='1') {
                $('#refNo').prop('required', true);
                $('#dateFrom').prop('required', false);
                $('#dateTo').prop('required', false);

                $('.ig-dateFrom').removeClass('has-error has-danger');
                $('.e-dateFrom').hide();
                $('.ig-dateTo').removeClass('has-error has-danger');
                $('.e-dateTo').hide();
                $('#dateFrom').removeClass('error');
                $('#dateTo').removeClass('error');

                $("#corporate").prop('disabled', true);
                $("#dateFrom").prop('disabled', true);
                $("#dateTo").prop('disabled', true);
                $('.row-corporate').hide();
                $('.row-date').hide();
                $('#refNo').show();
            } else {
                $('#refNo').prop('required', false);
                $('#dateFrom').prop('required', true);
                $('#dateTo').prop('required', true);

                $('#refNo').removeClass('error');
                $('#refNo').parent().find('.help-block.with-errors').html('').hide();

                $("#corporate").prop('disabled', false);
                $("#dateFrom").prop('disabled', false);
                $("#dateTo").prop('disabled', false);
                $('.row-corporate').show();
                $('.row-date').show();
                $('#refNo').hide();
            }
        });

        $("#download").click(function() {
            var ids = populateDatatable();
            if (ids.length == 0) {
                flash('warning', 'Please check at least one document');
                return;
            }

            for(var i = 0; i < ids.length; i++) {
                downloadFile(ids[i], true);
            }
        });

        $("#print").click(function() {
            var ids = populateDatatable();
            if (ids.length == 0) {
                flash('warning', 'Please check one of the documents');
                return;
            }

            if (ids.length > 1) {
                flash('warning', 'Can only print 1 record');
                return;
            }

            for(var i = 0; i < ids.length; i++) {
                downloadFile(ids[i], false);
            }
        });

    });

    function populateDatatable() {
        var ids = [];
        $("#list").find("tbody tr").each(function () {

            var check = ($('td:eq(0)', $(this)).children().is(':checked') ? 1 : 0);
            var id = $('td:eq(1)', $(this)).find("#id").val();

            if (check == 1) {
                ids.push(id);
            }
        });
        return ids;
    }

    function searchFunction() {
        var radioValue = $('input[name="searchBy-rb"]:checked').val();
        var searchByRefNo = (radioValue == '1');

        if (searchByRefNo) {
            // Search by Reference Number
            $('#refNo').prop('required', true);
            $('#dateFrom').prop('required', false);
            $('#dateTo').prop('required', false);

            // Clear date errors
            $('.ig-dateFrom').removeClass('has-error has-danger');
            $('.e-dateFrom').hide();
            $('.ig-dateTo').removeClass('has-error has-danger');
            $('.e-dateTo').hide();

            var trimmedRefNo = $('#refNo').val().trim();
            if (trimmedRefNo === '') {
                console.log('VALIDATION FAILED: Reference No is empty!');
                $('#refNo').addClass('error');
                $('#refNo').parent().find('.help-block.with-errors').html('<span style="color: #dd4b39 !important; font-weight: bold; display: block !important;">Transaction reference number is mandatory.</span>').show();
                return false;
            }

            // Clear refNo error if valid
            $('#refNo').removeClass('error');
            $('#refNo').parent().find('.help-block.with-errors').html('').hide();

        } else {
            // Search by Corporate and Date Range
            $('#refNo').prop('required', false);
            $('#dateFrom').prop('required', true);
            $('#dateTo').prop('required', true);

            // Clear refNo error
            $('#refNo').removeClass('error');
            $('#refNo').parent().find('.help-block.with-errors').html('').hide();

            var dateFrom = $('#dateFrom').val();
            var dateTo = $('#dateTo').val();

            var hasError = false;


            if(hasError) {
                return false;
            }

            // Validate date range
            const dateFromMoment = moment(dateFrom, "DD/MM/YYYY");
            const dateToMoment = moment(dateTo, "DD/MM/YYYY");

            if (dateToMoment.isBefore(dateFromMoment)) {
                flash('warning', 'To date which is smaller than the From date!');
                return false;
            }
        }

        // If validation passes, call getDataTable
        getDataTable();
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
                    unitOption = '<option value="">All</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.corporateId + '">' + obj.corporateName + '</option>';
                    });
                    $('#corporate').html(unitOption);
                    $('#corporate').select2();
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

    function getDataTable() {

        var id = '{{ $service }}';
        $('#list').show();
        $('.list-title').show();

        var validate = true;
        $("#vue-warning").hide();
        var value = {
            referenceNo : "",
            corporateId: "",
            dateFrom: "",
            dateTo: "",
            submittedBy: "",
            currentPage: "1",
            pageSize: "10",
        };

        var url_action = 'search';
        var searchByRefNo = ($('input[name="searchBy-rb"]:checked').val() == '1' ? true : false);
        var action = 'SEARCH';
        var result_key='result';

        if (searchByRefNo) {
            value.referenceNo = $('#refNo').val();
        } else {
            value.corporateId = $('#corporate').val();
            value.dateFrom = $('#dateFrom').val();
            value.dateTo = $('#dateTo').val();
            value.submittedBy = $('input[name="submittedBy"]').val();
        }
        console.log(value);
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

                var result = JSON.parse(data);
                if (result.status=="200") {
                    oTable.clear().draw();
                    if(result.result[0] == undefined){
                        return;
                    }
                    var detail = result.result;
                    if(detail){
                        $.each(detail, function (idx, obj){
                            oTable.row.add([
                                '<input id="check" name="check" class="dt-checkboxes state_edit" value="" type="checkbox">',
                                '<input id="id" type="hidden" value="'+obj.id+'">'+obj.transactionDate,
                                obj.corporateId+' - '+obj.corporateName,
                                obj.transactionType,
                                obj.transactionRefNo,
                                obj.currency,
                                obj.filename,
                                obj.releaser,
                                obj.transactionStatus,
                            ]).draw(false);

                        });
                    }

                } else {
                    flash('warning', result.message);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            },
            complete: function(data) {
            }
        });
    }

    function downloadFile(id, isDownload) {
        console.log(`id : ${id}`);
        var service = '{{ $service }}';
        var value = {
            id
        };

        $.ajax({
            url: 'getAPIData',
            method: 'post',
            async: false,
            data: {
                value : value,
                menu : service,
                url_action : 'downloadFile',
                action : 'DOWNLOAD',
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                console.log(`request`);
                $.ajax({
                    url: 'downloadFile',
                    method: 'POST',
                    cache: false,
                    data:{
                        url_action : 'download',
                        // value:'EXECUTE',
                        service:service,
                    },
                    xhrFields: {
                        withCredentials: true,
                        responseType:'arraybuffer'
                    },
                    success: function (response, status, xhr) {
                        if(isDownload == true) {
                            console.log(`download`);
                            var filename = "";
                            var disposition = xhr.getResponseHeader('Content-Disposition');
                            if (disposition && disposition.indexOf('attachment') !== -1) {
                                var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                                var matches = filenameRegex.exec(disposition);
                                if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                            }

                            if(filename.indexOf("_") > 0) {
                                var filenameUnderscoreLoc = filename.lastIndexOf("_");
                                filename = filename.substring(0, filenameUnderscoreLoc) + ".pdf";
                            }

                            var type = xhr.getResponseHeader('Content-Type');
                            var blob = new Blob([response], { type: type });
                            saveAs(blob, filename);
                        } else {
                            console.log(response, response instanceof ArrayBuffer);
                            $("#pdfviewer").attr("src", URL.createObjectURL(new Blob([response], {
                                type: "application/pdf"
                            })));

                            setTimeout(function(){
                                window.frames["pdfviewer"].focus();
                                window.frames["pdfviewer"].print();
                            },60);
                        }

                    }

                });

            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });

    }

</script>
