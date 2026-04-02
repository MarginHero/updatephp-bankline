@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'Search']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                <div class="box-header">
                    <h3 class="box-title">Underlying Document Filter</h3>
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
                                    <select class="form-control" id="corporate" data-error="please select corporate">
                                        <option></option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-date">
                            <div class="mb-3 row form-group">
                                <div class="col-md-3" >
                                    <label>Date Range</label>
                                </div>
                                <div class="col-md-7" >
                                    <div class="row g-2 align-items-center">
                                        <div class="col-auto">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                <input type="text" id="dateFrom" name="dateFrom" class="form-control datepicker detail numeric" autocomplete="off" value="">
                                            </div>
                                        </div>
                                        <div class="col-auto mx-2">
                                            <label class="col-form-label"><strong>to</strong></label>
                                        </div>
                                        <div class="col-auto">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                <input type="text" id="dateTo" name="dateTo" class="form-control datepicker numeric" autocomplete="off" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-status">
                            <div class="mb-3 row form-group">
                                <div class="col-md-3" >
                                    <label>Submitted By</label>
                                </div>
                                <div class="col-md-7"  >
                                    <label class="radio-inline">
                                        <input type="radio" name="submittedBy" id="all" value="" checked> All
                                    </label>
                                    <label class="radio-inline" style="margin-left: 25px;margin-right: 25px">
                                        <input type="radio" name="submittedBy" id="upload" value="1"> Upload
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="submittedBy" id="option3" value="0"> Other
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <div class="col-md-3">
                                   <input type="radio" id="refNo-rb" name="searchBy-rb" value="1">
                                   <label for="refNo-rb">Reference Number</label>
                                </div>
                                <div class="col-md-7" >
                                    <input type="text" id="refNo" name="refNo" class="form-control" autocomplete="off" value="" maxlength="40">
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
                        <h3 class="box-title">Underlying Document Listing</h3>
                    </div>
                    <div class="box-body list-title">

                        <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
                            <thead>
                            <tr>
                                <th></th>
                                <th align="center"><strong>Transaction Date<strong></th>
                                <th align="center"><strong>Corporate<strong></th>
                                <th align="center"><strong>Transaction Type</strong></th>
                                <th align="center"><strong>Transaction Reference No.</strong></th>
                                <th align="center"><strong>Source Currency<strong></th>
                                <th align="center"><strong>Filename</strong></th>
                                <th align="center"><strong>Submitted By</strong></th>
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

</section>

<script>
    var service = '{{ $service }}';

    $(document).ready(function () {

        var data_code = '';

        $('#pdfviewer').hide();
        $('#list').hide();
        $('.list-title').hide();
        getCorporate();

        $('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true
        });

        $('#dateFrom').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#dateTo').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));

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
                },
                {
                    targets: 9,
                    orderable: false
                },
            ],
        });

        $('#search').on('click', function () {
            $("#vue-warning").hide();
            getDataTable();

            // $(this).prop("disabled",true);

        });

        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',.-'
        });

        $('input[name="searchBy-rb"]').on('change', function(e){
            $('#form-area').validator('reset');
            if (this.value=='1') {
                $("#corporate").prop('disabled', true);
                $("#dateFrom").prop('disabled', true);
                $("#dateTo").prop('disabled', true);
                $("input[name='submittedBy']").prop('disabled', true);
                $("#refNo").prop('disabled', false);
            } else {
                $("#corporate").prop('disabled', false);
                $("#dateFrom").prop('disabled', false);
                $("#dateTo").prop('disabled', false);
                $("input[name='submittedBy']").prop('disabled', false);
                $("#refNo").prop('disabled', true);
            }
        });

        $("#download").click(function() {
            var ids = populateDatatable();
            $('#notif-inner').show();
            if (ids.length == 0) {
                flash('warning', 'Please check at least one document');
                return;
            }

            if(!populateDatatableFileName()){
                flash('warning', 'File Not Found');
                return;
            }

            for(var i = 0; i < ids.length; i++) {
                $('#notif-inner').hide();
                downloadFile(ids[i], true);
            }
        });

        $("#print").click(function() {
            var ids = populateDatatable();
            $('#notif-inner').show();
            if (ids.length == 0) {
                flash('warning', 'Please check one of the documents');
                return;
            }

            if (ids.length > 1) {
                flash('warning', 'Can only print 1 record');
                return;
            }

            if(!populateDatatableFileName()){
                flash('warning', 'File Not Found');
                return;
            }

            for(var i = 0; i < ids.length; i++) {
                $('#notif-inner').hide();
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

    function populateDatatableFileName() {
        var isValid = true
        $("#list").find("tbody tr").each(function () {

            var check = ($('td:eq(0)', $(this)).children().is(':checked') ? 1 : 0);
            var filename = $('td:eq(2)', $(this)).find("#filenameVal").val();


            if(check == 1){
                console.log(filename);
                if (!filename || filename=='null') {
                    isValid = false;
                    return false;
                }
            }
        });
        console.log(isValid);
        return isValid;
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
                    $('#notif-inner').show();
                    flash('warning', result.message);
                }


            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                $('#notif-inner').show();
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });
    }

    function getDataTable() {

        $('#notif-inner').hide();

        $('#list').show();
        $('.list-title').show();

        var validate = true;

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
        var action = 'SEARCH';
        var result_key='result';
        var searchByRefNo = ($('input[name="searchBy-rb"]:checked').val() == '1' ? true : false);

        if (searchByRefNo) {
            value.referenceNo = $('#refNo').val();
            if(value.referenceNo == '') {
                validate = false;
                $('#notif-inner').show();
                flash('warning', "Reference Number is mandatory");
                return;
            }

        } else {

            var dateFrom = $('#dateFrom').val();
            var dateTo = $('#dateTo').val();

            if (dateFrom == '' || dateTo == '') {
                validate = false;
                $('#notif-inner').show();
                flash('warning', "Date Range is required");
                return;
            }

            var dateFromCheck = moment(dateFrom, 'DD/MM/YYYY');
            var dateToCheck = moment(dateTo, 'DD/MM/YYYY');
            if (dateFromCheck.diff(dateToCheck, 'days') > 0) {
                $('#notif-inner').show();
                flash('warning', 'to date cannot be smaller to from date');
                return;
            }
            if (dateFromCheck.diff(dateToCheck, 'days') < -180) {
                $('#notif-inner').show();
                flash('warning', 'Maximum range for date must not exceed 180 days.');
                return;
            }


            value.corporateId = $('#corporate').val();
            value.dateFrom = dateFrom;
            value.dateTo = dateTo;
            value.submittedBy = $('input[name="submittedBy"]:checked').val();

        }

        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : service,
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
                                '<input id="id" type="hidden" value="'+obj.id+'">'+
                                obj.createdDate,
                                '<input id="filenameVal" type="hidden" value="'+obj.filename+'">'+
                                obj.corporateId+' - '+obj.corporateName,
                                obj.transactionType,
                                obj.transactionRefNo,
                                obj.currency,
                                obj.filename,
                                obj.submittedBy=='0' ? 'Other' : 'Upload',
                                obj.releaser,
                                obj.transactionStatus,
                            ]).draw(false);
                        });
                    }

                } else {
                    $('#notif-inner').show();
                    flash('warning', result.message);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                $('#notif-inner').show();
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
                            var filename = "";
                            var disposition = xhr.getResponseHeader('Content-Disposition');
                            if (disposition && disposition.indexOf('attachment') !== -1) {
                                var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                                var matches = filenameRegex.exec(disposition);
                                if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                            }

                            if(filename.indexOf("_") > 0) {
                                var filenameUnderscoreLoc = filename.lastIndexOf("_");
                                filename = filename.substring(0, filenameUnderscoreLoc);
                            }

                            console.log(`download`, filename);
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
                $('#notif-inner').show();
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });

    }

</script>
