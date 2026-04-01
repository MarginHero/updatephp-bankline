﻿@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'Search']])

<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    #downloadFormat {
        min-width: 160px;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        padding: 5px 0;
        margin: 2px 0 0;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,.15);
        border-radius: 4px;
        box-shadow: 0 6px 12px rgba(0,0,0,.175);
    }

    #downloadFormat.show {
        display: block !important;
    }

    #downloadFormat li {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    #downloadFormat .dropdown-item {
        display: block;
        width: 100%;
        padding: 8px 20px;
        clear: both;
        font-weight: 400;
        color: #333;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
        text-decoration: none;
        cursor: pointer;
    }

    #downloadFormat .dropdown-item:hover {
        background-color: #f5f5f5;
        color: #262626;
        text-decoration: none;
    }

    /* Error styling for select */
    #branch.error {
        border-color: #dd4b39 !important;
    }

    .help-block.with-errors {
        color: #dd4b39;
        font-size: 12px;
        margin-top: 5px;
    }

    .datepicker-dropdown {
        z-index: 9999 !important;
    }

    .datepicker table {
        cursor: pointer;
    }
</style>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <div class="box">
                <div id="spinner" style="display:none"></div>
                <div class="box-header">
                    <h3 class="box-title">Report Filter</h3>
                </div>
                <form class="form-horizontal" id="form-area">

                <div class="box-body">
                    <div class="container-fluid">
                            <div class="row">
								<div class="mb-3 row">
									<label class="col-md-2 col-form-label text-end">Branch</label>

									<div class="col-md-6">
										<select class="form-control" id="branch" >
											<option>Select Branch</option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row">
									<label class="col-md-2 col-form-label text-end">Status</label>

									<div class="col-md-6">
										<select class="form-control" id="status">
											<option>All Status</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row">
									<label class="col-md-2 col-form-label text-end"><strong>Order Date</strong></label>
									<div class="col-md-6">
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
					</div>
                </div>
                <div class="box-footer">
                    <!-- <div class="float-left">
                        <button type="button" id="search" name="search" class="btn btn-primary">@lang('form.save_pdf')</button>
                    </div> -->
                    <div>
                        <div class="float-left">
                            <div class="dropdown">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Request Download
                                </button>

                                <ul class="dropdown-menu" id="downloadFormat">

                                </ul>
                            </div>
                        </div>
						<div class="float-right">
							<button type="button" id="search" name="search" class="btn btn-primary">Refresh
							</button>
						</div>
                    </div>
                </div>

                </form>
            </div>
			<div class="box-header list-title">
					<h3 class="box-title">Pending Download</h3>
                </div>

				<div class="box-body list-title">
                    <div class="container-fluid">
                        <div class="row">
                            <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                       style="border-collapse:collapse;">
                                <thead>
									<tr>
										<th align="center"><strong>No</strong></th>
										<th align="center"><strong>Request Date Time</strong></th>
										<th align="center"><strong>File Type</strong></th>
										<th align="center"><strong>File Name</strong></th>
										<th align="center"><strong>File Status</strong></th>
										<th align="center"><strong></strong></th>

									</tr>
                                </thead>
                                <tbody>
                                    <tr>
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
                    </div>
                </div>
        </div>
    </div>

</section>

<script>
    var service = '{{ $service }}';

    $(document).ready(function () {

		var url_action = '';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = {"referenceNo": "DESC"};
        var data_code = '';

        getBranch();
        getStatus();
		getFormatDroplist();
		searchReport();

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

        // $('#dateFrom').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY")); //start from today
        // $('#dateTo').val(moment(new Date()).add(1, 'days').format("DD/MM/YYYY"));    // end tommorow
        $('#dateFrom').val(moment(new Date()).subtract(3, 'months').format("DD/MM/YYYY"));
        $('#dateTo').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));

        // Manual dropdown toggle handler
        $(document).off('click', '.dropdown-toggle').on('click', '.dropdown-toggle', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var $dropdown = $(this).next('.dropdown-menu');

            // Close other dropdowns
            $('.dropdown-menu').not($dropdown).removeClass('show').hide();

            // Toggle current dropdown
            if ($dropdown.hasClass('show')) {
                $dropdown.removeClass('show').hide();
            } else {
                $dropdown.addClass('show').show();
            }
        });

        $(document).on('click', '.dropdown-menu', function(e) {
            e.stopPropagation();
        });

        $(document).on('click', function(e) {
            if (!$(e.target).closest('.dropdown').length &&
                !$(e.target).closest('.datepicker').length &&
                !$(e.target).hasClass('datepicker') &&
                !$(e.target).closest('.datepicker-dropdown').length &&
                !$(e.target).hasClass('day') &&
                !$(e.target).hasClass('month') &&
                !$(e.target).hasClass('year')) {
                $('.dropdown-menu').removeClass('show').hide();
            }
        });


        $('#branch').on('change', function() {
            if($(this).val() != '' && $(this).val() != 'Select Branch') {
                $(this).removeClass('error');
                $(this).closest('.mb-3').find('.help-block.with-errors').html('');
            }
        });

		//setInterval(function(){
			//searchReport();
		//}, 10000);//time in milliseconds

		$('#search').on('click', function () {
			searchReport();
		});
    });

	function searchReport() {
        $("#vue-success").find(".close").trigger("click");

		setTimeout(function(){

                   var validate = true;


					var value = {};
		var url_action = 'search';
        var action = 'SEARCH';
        var result_key = 'result';
        var custom_order = '';

					value = {

						orderBy: {"createdDate": "ASC"},
						currentPage: "1",
						pageSize: "20"
					};



				if(validate){
					$('#list').show();
					$('.list-title').show();
					var index = 1;
					$('#list').DataTable({
						"destroy": true,
						"initComplete": function(settings, json) {

						},
						"select": false,
						"searching": false,
						"lengthMenu": [[10, 25, 50], [10, 25, 50]],
						"processing": true,
						"serverSide": true,
						"autoWidth": false,
						"ScrollX": '100%',
						"columnDefs": [
							{
								targets: 0,
								data: "createdDate",
								render: function ( data, type, full, meta ) {
									return index++;
								},
								orderable: false
							},
							{
								targets: 1,
								data: "createdDate",
								orderable: false
							},
							{
								targets: 2,
								data: "fileType",
								orderable: false
							},
							{
								targets: 3,
								data: "fileName",
								orderable: false
							},
							{
								targets: 4,
								data: "statusDescription",
								orderable: false
							},
							{
								targets: 5,
								data: {isReadyForDownload:"isReadyForDownload", id: "id"},
								width: "15%",
								render: function ( data, type, full, meta ) {
									var disabled = 'disabled';
									if(data.isReadyForDownload == 'Y'){
										disabled = '';
									}
									return '<button data-id="'+data.id+'" class="btn btn-primary" style="width:125px;" align="center" onClick="downloadReport(\''+data.id+'\');"' +disabled+'>Download</button>';
								},
								orderable: false
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
							}
						}
					});
                }
            });
	}

    function getBranch() {
        var value = {
            code: "",
        };
        var url_action = 'searchBranch';
        var action = 'SEARCH';
        var menu = service;
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
                    unitOption = '<option value="">All Branch</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.code + '">' + obj.name + '</option>';
                    });
                    $('#branch').html(unitOption);
                    $('#branch').select2();
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

	function getStatus() {
        var value = {
            code: "",
        };
        var url_action = 'getStatus';
        var action = 'SEARCH';
        var menu = service;
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
                    unitOption = '<option value="">All Status</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.key + '">' + obj.value + '</option>';
                    });
                    $('#status').html(unitOption);
                    $('#status').select2();


            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });
    }
    function getFormatDroplist() {

        var url_action = 'fileFormat';
        var action = 'SEARCH';
        var menu = service;
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data: {
                value : '',
                menu : menu,
                url_action : url_action,
                action : action,
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    formats = '';
                    $.each(result.fileFormats, function (idx, obj) {
                        formats += '<li><a class="dropdown-item" data-code="' + obj.ext +'" href="javascript:void(0);" data-format="'+obj.name+'">' + obj.name + '</a></li>';
                    });
                    $('#downloadFormat').html(formats);

                    $('.dropdown-item').off('click').on('click', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        var format = $(this).data('format');
                        $('.dropdown-menu').removeClass('show').hide();
                        requestDownload(format);
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

	function requestDownload(fileFormat){
		var value = {
            branchCode : "",
            fromDate : "",
            toDate : "",
            statusCode:"",
            fileFormat: fileFormat,
        };

        var validate = true;

        // Clear previous errors
        $('#branch').removeClass('error');
        $('#branch').closest('.mb-3').find('.help-block.with-errors').html('');

        value.branchCode = $('#branch').val();
        value.statusCode = $('#status').val();


        if ($('#dateFrom').val() == '') {
                return;
        }
        if ($('#dateTo').val() == '') {
                return;
        }

        if(checkDate()>0){
            var content ='{{trans('form.alert_date_compare_report')}}';
            $.alert({
                title: '{{trans('form.warning')}}',
                content: content
            });
            return;
        }

        if(!is3MonthValid()){
            var content ='{{trans('form.alert_date_3_month_report')}}';
            $.alert({
                title: '{{trans('form.warning')}}',
                content: content
            });
            return;
        }

        value.fromDate = $('#dateFrom').val();
        value.toDate = $('#dateTo').val();


		$.ajax({
			url: 'getAPIData',
            method: 'post',
            data: {
                value : value,
                menu : service,
                url_action : 'submit',
                action : 'REQUEST_DOWNLOAD',
                _token : '{{ csrf_token() }}'
            },
            success: function (data) {
                var result = JSON.parse(data);
                if (result.status=="200") {
                    noRef=result.referenceNo;
                    flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                    searchReport();
                } else {
                    flash('warning', result.message);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                flash('warning', 'Form Submit Failed');
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }
        });
	}

    function downloadReport(downloadId) {


                var value = {
                        downloadId : downloadId,
                };


                    $.ajax({
                        url: 'getAPIData',
                        method: 'post',
                        data: {
                            value : value,
                            menu : service,
                            url_action : 'downloadReport',
                            action : 'DOWNLOAD',
                            _token : '{{ csrf_token() }}'
                        },
                        success: function (data) {

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
                                   var filename = "";
                                   var disposition = xhr.getResponseHeader('Content-Disposition');
                                   if (disposition && disposition.indexOf('attachment') !== -1) {
                                       var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                                       var matches = filenameRegex.exec(disposition);
                                       if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                                   }

                                   var type = xhr.getResponseHeader('Content-Type');
                                   var blob = new Blob([response], { type: type });
                                   saveAs(blob, filename);


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

    function checkDate(){

        var count = 0;
        var date1 = $("#dateFrom").data('datepicker').getFormattedDate('yyyy/mm/dd');
        var date2 = $("#dateTo").data('datepicker').getFormattedDate('yyyy/mm/dd');

        console.log("checkDate1 ", new Date() - new Date($("#dateFrom").data('datepicker').getFormattedDate('yyyy/mm/dd')));
        console.log("checkDate2 ", new Date() - new Date(date2));

        if(date1 == '')
            date1 = moment(new Date()).subtract(1, 'day').format("YYYY/MM/DD");

        if(date2 == '')
            date2 = moment(new Date(),"DD/MM/YYYY hh:mm").format("YYYY/MM/DD")

        if(date2!=''){
            var x = new Date(date1);
            var y = new Date(date2);
            if(x>y){
                count = 1;
            }
        }

		console.log("count ", count);

        return count;

    }

    function is3MonthValid(){
        var date1 = $("#dateFrom").data('datepicker').getFormattedDate('yyyy-mm-dd 23:59:59');
        if(date1 == '')
            date1 = moment(new Date()).subtract(3, 'month').format("YYYY-MM-DD 23:59:59");
        return moment().diff(date1, "months")<=2;

    }

</script>
