<!-- Content Header (Page header) -->
@include('_partials.header_content',['breadcrumb'=>['Pending task']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div class="box-header state_pending">
                    <h3 class="box-title">Pending Task Listing</h3>

                </div>
                <div class="box-body state_pending">
                    <div class="col-xs-12 no-padding">
                        <table id="list" class="table table-bordered table-striped dataTable" width="100%" border="2" cellpadding="2" style="border-collapse:collapse;">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th align="left"><strong>Reference Number</strong></th>
                                    <th align="left"><strong>Activity Date Time</strong></th>
                                    <th align="left"><strong>Menu</strong></th>
                                    <th align="left"><strong>Activity</strong></th>
                                    <th align="left"><strong>Maker User ID</strong></th>
                                    <th align="left"><strong>Description</strong></th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="button" id="btn_refresh" name="btn_refresh" class="btn btn-default float-left state_pending">
                        Refresh
                    </button>
                    <div class="float-right state_pending">
                        <button type="button" id="btn_reject" name="btn_reject" class="btn btn-danger">
                            @lang('form.reject')
                        </button>
                        <button type="button" id="btn_approve" name="btn_approve" class="btn btn-primary">
                            @lang('form.approve')
                        </button>
                    </div>
                </div>

                <div class="box-header state_result">
                    <h3 class="box-title">Pending Task Submitted</h3>
                </div>
                <div class="box-body state_result">
                    <div class="container-fluid">
                        <div class="row">
                            <table id="result" class="table table-bordered table-striped dataTable" width="100%" border="2" cellpadding="2" style="border-collapse:collapse;">
                                <thead>
                                    <tr>
                                        <th align="left"><strong>Reference Number</strong></th>
                                        <th align="left"><strong>Activity Date Time</strong></th>
                                        <th align="left"><strong>Menu</strong></th>
                                        <th align="left"><strong>Activity</strong></th>
                                        <th align="left"><strong>Maker User ID</strong></th>
                                        <th align="left"><strong>Description</strong></th>
                                        <th align="left"><strong>Result Message</strong></th>
                                    </tr>
                                </thead>

                            </table>
                        </div>
                        <div id="reason_row" class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="mb-3 row">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="col-form-label text-end">Reject Reason</label>
                                        </div>
                                        <div class="col-md-6">
                                            <label id="reject_text">-</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="result_row" class="row">
                                <div class="mb-3 row">
                                    <div class="col-md-12 text-center" data-html2canvas-ignore="true">
                                        <div class="float-right">
                                            <button type="button" id="btn_done" name="btn_done" class="btn btn-primary">
                                                @lang('form.done')
                                            </button>
                                        </div>
                                        <div class="float-left">
                                            <button type="button" id="save_screen" name="save_screen" class="btn btn-default" onclick="save_pdf();">@lang('form.save_pdf')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="box-header state_reason">
                        <h3 class="box-title">Pending Task Listing</h3>
                </div>
                <div class="box-body state_reason">
                    <div class="container-fluid">
                        <div class="row">
                            <table id="reason" class="table table-bordered table-striped dataTable" width="100%" border="2" cellpadding="2" style="border-collapse:collapse;">
                                <thead>
                                    <tr>
                                        <th align="left"><strong>Reference Number</strong></th>
                                        <th align="left"><strong>Activity Date Time</strong></th>
                                        <th align="left"><strong>Menu</strong></th>
                                        <th align="left"><strong>Activity</strong></th>
                                        <th align="left"><strong>Maker User ID</strong></th>
                                        <th align="left"><strong>Description</strong></th>
                                    </tr>
                                </thead>

                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="mb-3 row">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="col-form-label text-end"><strong>Reject Reason&ast;</strong></label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" id="reason_text" name="reason_text" class="form-control" autocomplete="off" value="" data-error="This field is required." required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer state_reason">
                    <div class="float-right">
                        <button type="button" id="btn_submit_reject" name="btn_submit_reject" class="btn btn-primary">
                            @lang('form.submit')
                        </button>
                    </div>
                    <div class="float-left">
                        <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var oTable = null;
    var oResult = null;
    var oReason = null;
    var noRef = 'OTB';
    var id = '<?php echo e($service); ?>';

    var currentPageTable;
    var currentPageSize;
    var oTable;

    $(document).ready(function() {
        $('.state_result').hide();
        $('.state_reason').hide();

        getData();
        init_resultTable();
        init_reasonTable();


        $('#btn_refresh').on('click', function() {
            $('#btn_refresh').prop("disabled", true);
            currentPageTable= 0;
            currentPageSize = 10;
            getData();
        });

        $('#btn_done').on('click', function() {
            getData();
            $('.state_pending').show();
            $('.state_result').hide();
            $('.state_reason').hide();
        });

        $('#btn_approve').on('click', function() {
            if (countMenu() == 0) {

                var content = '{{trans('form.alert_noselect',['label'=>'Pending Task '])}}';
                $.alert({
                    title: '{{trans('form.warning')}}',
                    content: content
                });
                return;
            }
            $('#btn_approve').prop('disabled', true);
            $.confirm({
                title: '{{trans('form.confirm')}}',
                content: '{{trans('form.confirm_approve')}}',
                buttons: {

                    cancel: {
                        text: '{{trans('form.cancel')}}',
                        btnClass: 'btn-default',
                        action: function() {
                            $('#btn_approve').prop('disabled', false);
                        }
                    },
                    confirm: {
                        text: '{{trans('form.confirm')}}',
                        btnClass: 'btn-primary',
                        action: function() {
                            submitTask('approve');
                        }
                    }

                }
            });

        });
        $('#btn_reject').on('click', function() {
            if (countMenu() == 0) {
                var content = '{{trans('form.alert_noselect',['label'=>'Pending Task '])}}';
                $.alert({
                    title: '{{trans('form.warning')}}',
                    content: content
                });
                return;
            }
            // $('#btn_reject').hide();
            // $('#btn_approve').hide();
            var selected = $.map(oTable.rows('.selected').data(), function(item) {
                return item;
            });
            var data = [];
            if (selected) {
                oReason.clear();
                $.each(selected, function(index, val, full) {
                    oReason.row.add([
                        '<a href="javascript:void(0)" id="' + val.taskId + '" data-parent-menu="" data-service="' + val.pendingTaskMenuCode + '" data-refno="' + val.referenceNo + '" data-taskid="' + val.taskId + '" data-datetime="' + val.startDate + '" data-menu="' + val.pendingTaskMenuName + '" data-menucode="' + val.pendingTaskMenuCode + '" data-menuname="' + val.pendingTaskMenuName + '" data-action="' + val.action + '">' + val.referenceNo + '</a>',
                        val.startDate,
                        val.pendingTaskMenuName,
                        val.action,
			val.createdBy,
                        val.uniqueKeyDisplay
                    ]).draw(false);
                });
                $('.state_pending').hide();
                $('.state_reason').show();
            }

        });
        $('#btn_submit_reject').on('click', function() {
            $('#btn_submit_reject').prop('disabled', true);
            $.confirm({
                title: '{{trans('form.confirm')}}',
                content: '{{trans('form.confirm_reject')}}',
                buttons: {

                    cancel: {
                        text: '{{trans('form.cancel')}}',
                        btnClass: 'btn-default',
                        action: function() {
                            $('#btn_submit_reject').prop('disabled', false);
                        }
                    },
                    confirm: {
                        text: '{{trans('form.confirm')}}',
                        btnClass: 'btn-primary',
                        action: function() {
                            submitTask('reject');
                        }
                    }

                }
            });
        });
    });

    $(".back").on('click', function() {
        $('.state_pending').show();
        $('.state_reason').hide();
        getData();
    });

    $('#list tbody').on('click', 'a', function(e) {

        if (e.handled !== true) // This will prevent event triggering more then once
        {
            e.handled = true;
        }
        var no_ref = $(this).attr('data-refno');
        var parent_menu = $(this).attr('data-parent-menu');
        var menu_code = $(this).attr('data-menucode');
        var menu_name = $(this).attr('data-menuname');
        var datetime = $(this).attr('data-datetime');
        var action = $(this).attr('data-action');
        var task_id = $(this).attr('data-taskid');
        if (no_ref !== undefined) {
            if(!action.includes('UPDATE')){
                var res = app.setView(task_id, 'pending');
                if (res == 'done') {
                    $('#referenceNo').val(no_ref);
                    $('#taskId').val(task_id);
                    $('#menu_text').text(menu_name);
                    $('#datetime_text').text(datetime);
                    $('#noref_text').text(no_ref);
                    $('#activity_text').text(action);
                    getData();
                }
            }else {
                var res = app.setView(id, 'detail-update');
                if (res == 'done') {
                    $('#referenceNo').val(no_ref);
                    $('#taskId').val(task_id);
                    $('#menu_text').text(menu_name);
                    $('#datetime_text').text(datetime);
                    $('#noref_text').text(no_ref);
                    $('#activity_text').text(action);
                    $('#pendingTaskId').text(action);
                    getMenuDetailViewUpdate(menu_code,no_ref,task_id);
                }
            }


        }
    });

    $('#reason tbody').on('click', 'a', function(e) {

        if (e.handled !== true) // This will prevent event triggering more then once
        {
            e.handled = true;
        }
        var no_ref = $(this).attr('data-refno');
        var parent_menu = $(this).attr('data-parent-menu');
        var menu_code = $(this).attr('data-menucode');
        var menu_name = $(this).attr('data-menuname');
        var datetime = $(this).attr('data-datetime');
        var action = $(this).attr('data-action');
        var task_id = $(this).attr('data-taskid');
        if (no_ref !== undefined) {
            var res = app.setView(task_id, 'pending');
            if (res == 'done') {
                $('#referenceNo').val(no_ref);
                $('#taskId').val(task_id);
                $('#menu_text').text(menu_name);
                $('#datetime_text').text(datetime);
                $('#noref_text').text(no_ref);
                $('#activity_text').text(action);
                getData();
            }

        }
    });

    function getData() {
        var id = 'MNU_GPCASH_PENDING_TASK';
        var value = {
            "referenceNo": "",
            "pendingTaskMenuCode": "",
            orderBy: {"startDate": "DESC"}
        };
        var url_action = 'searchPendingTaskByUser';
        var result_key = 'tasks';
        var action = 'SEARCH';
        var custom_order = ""

        oTable = $('#list').DataTable({
            "destroy": true,
            "searching": false,
            "initComplete": function(settings, json) {
                $('#btn_refresh').prop("disabled", false);

            },
            "lengthMenu": [
                [10, 25, 50],
                [10, 25, 50]
            ],
            "processing": true,
            "serverSide": true,
            "order": [
                [2, "desc"]
            ],
            "select": {
                style: 'multi',
                selector: 'input.dt-checkboxes'
            },
            "drawCallback": function(settings) {
                if (oTable && oTable.page && typeof oTable.page.info === 'function') {
                    var pageInfo = oTable.page.info();
                    currentPageTable = pageInfo.page;
                    currentPageSize = pageInfo.length;
                }
            },
            "pageLength": currentPageSize || 10,
            "displayStart": (currentPageTable || 0) * (currentPageSize || 10),
            "columnDefs": [{
                    targets: 0,
                    data: null,
                    render: function(data, type, full, meta) {
                        return '<input class="dt-checkboxes"  type="checkbox">';
                    },
                    checkboxes: {
                        selectRow: true,
                        selectAllPages: false
                    },
                    orderable: false,
                    width: '5%'
                },
                {
                    targets: 1,
                    data: 'referenceNo',
                    render: function(data, type, full, meta) {
                        return '<a href="javascript:void(0)" id="' + full['taskId'] + '" data-parent-menu="" data-service="' + full['pendingTaskMenuCode'] + '" data-refno="' + full['referenceNo'] + '" data-taskid="' + full['taskId'] + '" data-datetime="' + full['startDate'] + '" data-menu="' + full['pendingTaskMenuName'] + '" data-menucode="' + full['pendingTaskMenuCode'] + '" data-menuname="' + full['pendingTaskMenuName'] + '" data-action="' + full['action'] + '">' + full['referenceNo'] + '</a>';

                    },
                    orderable: true,
                    width: '20%'
                },
                {
                    targets: 2,
                    data: "startDate",
                    orderable: true,
                    width: '15%'
                },
                {
                    targets: 3,
                    data: "pendingTaskMenuName",
                    orderable: true,
                    width: '20%'
                },
                {
                    targets: 4,
                    data: "action",
                    orderable: true,
                    width: '15%'
                },
                {
                    targets: 5,
                    data: "createdBy",
                    orderable: true,
                    width: '15%'
                },
                {
                    targets: 6,
                    data: "uniqueKeyDisplay",
                    render: function(data, type, full, meta) {
                        return full['pendingTaskMenuName'] != 'Cheque Status'? full['uniqueKeyDisplay'] : ''
                    },
                    orderable: true,
                    width: '25%'
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
                    $('#list_processing').hide();
                    $('#btn_refresh').prop("disabled", false);
                }
            }
        });

    }

    function submitTask(type) {
        var id = 'MNU_GPCASH_PENDING_TASK';
        var selected = $.map(oTable.rows('.selected').data(), function(item) {
            return item;
        });

        var data = [];
        if (selected) {
            $.each(selected, function(index, value) {
                data.push({
                    referenceNo: value.referenceNo,
                    taskId: value.taskId,
                    startDate: value.startDate,
                    pendingTaskMenuName: value.pendingTaskMenuName,
                    action: value.action,
                    createdBy: value.createdBy,
                    uniqueKeyDisplay: value.uniqueKeyDisplay
                });
            });
        }

        $("#reason_row").hide();
        var obj = {
            pendingTaskList: data,
            reason: ''
        };
        var action;
        var url_action;
        var reason;
        var message = '{{trans('form.pending_success')}}';
        if (type == 'approve') {
            action = 'APPROVE';
            url_action = 'approveList';
        } else if (type == 'reject') {
            reason = $("#reason_text").val();
            action = 'REJECT';
            url_action = 'rejectList';
            obj.reason = reason;
            message = '{{trans('form.pending_reject')}}';
            var formReason = $(".state_reason").find('.mb-3.row');
            formReason.removeClass('has-error');
            formReason.find('.with-errors').html('');
            if (reason == '') {
                formReason.addClass('has-error');
                formReason.find('.with-errors').html('{{ trans('form.mandatory') }}');
                $('#btn_submit_reject').prop('disabled', false);
                return;
            } else{
                $("#reject_text").html(reason);
                $("#reason_row").show();
            }

        } else {
            return;
        }


        $.ajax({
            url: 'detail',
            method: 'post',
            data: {
                "_token": "{{ csrf_token() }}",
                menu: id,
                value: obj,
                url_action: url_action,
                action: action
            },
            success: function(data) {
                $('.state_result').show();
                $('.state_reason').hide();
                $('#btn_approve').prop('disabled', false);
                $('#btn_reject').prop('disabled', false);
                var result = JSON.parse(data);
                oResult.clear();
                if (result) {
                    $.each(result, function(i) {
                        $.each(result[i], function(idx, obj) {

                            oResult.row.add([
                                obj.referenceNo, obj.startDate, obj.pendingTaskMenuName, obj.action,obj.createdBy, obj.uniqueKeyDisplay, obj.message
                            ]).draw(false);
                        });
                    });
                }
                $(window).scrollTop(0);
                getData();
                flash('success', message);
                $('#btn_approve').prop('disabled', false);
                $('#btn_reject').prop('disabled', false);
                $('.state_pending').hide();
                $('.state_reason').hide();
                $('.state_result').show();
                $('#save_screen').show();


            },
            error: function(xhr, ajaxOptions, thrownError) {
                $(window).scrollTop(0);
                $('#btn_approve').prop('disabled', false);
                $('#btn_reject').prop('disabled', false);
                flash('warning', 'Task Approve Failed');
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }
        });
    }

    function init_resultTable() {
        oResult = $('#result').DataTable({
            "info": false,
            "destroy": true,
            "searching": false,
            "lengthMenu": [
                [10, 25, 50],
                [10, 25, 50]
            ],
            "processing": false,
            "serverSide": false
        });
    }

    function init_reasonTable() {
        oReason = $('#reason').DataTable({
            "info": false,
            "destroy": true,
            "searching": false,
            "lengthMenu": [
                [10, 25, 50],
                [10, 25, 50]
            ],
            "processing": false,
            "serverSide": false
        });
    }

    function countMenu() {
        var count = 0;
        $("#list").find("tbody tr").each(function() {
            var check = ($('td:eq(0)', $(this)).children().is(':checked') ? 1 : 0);

            if (check == 1) {
                count++;
            }
        });
        return count;
    }
</script>
