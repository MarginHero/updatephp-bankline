@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'Search']])

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
    #corporate_code.error {
        border-color: #dd4b39 !important;
    }

    .help-block.with-errors {
        color: #dd4b39;
        font-size: 12px;
        margin-top: 5px;
    }
</style>


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
			<input type="hidden" id="index" value="1"/>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Activity Filter</h3>
                </div>
				<form id="form-area" class="form-horizontal form-area">
					<div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row">
									<div class="col-md-2">
										<input type="radio" id="createddt-rb" name="searchby-rb" value="0" checked>
										<label for="createddt-rb" style="margin-left: 7px;"><strong>Company</strong></label>
									</div>
									<div class="col-md-7 state_createddt row-corporate">
										<select class="form-control" id="corporate_code" data-error="Please Select Company" required>
											<option></option>
										</select>
										<div class="help-block with-errors" id="corporate_code-error"></div>
									</div>
								</div>
							</div>
							<div class="row state_createddt">
								<div class="mb-3 row">
									<div class="col-md-2">
										<label style="margin-left:15Px">Activity By</label>
									</div>
									<div class="col-md-7">
										<select class="form-control" id="activityBy">
											<option></option>
										</select>
									</div>
								</div>
							</div>
							<div class="row state_createddt">
								<div class="mb-3 row">
									<div class="col-md-2">
										<label style="margin-left:15Px">Account No</label>
									</div>
									<div class="col-md-7">
										<select class="form-control" id="accountNo">
											<option></option>
										</select>
									</div>
								</div>
							</div>
							<div class="row state_createddt">
								<div class="mb-3 row">
									<div class="col-md-2">
										<label style="margin-left:15Px">Menu</label>
									</div>
									<div class="col-md-7">
										<select class="form-control" id="menuType">
											<option></option>
										</select>
									</div>
								</div>
							</div>
							<div class="row state_createddt">
								<div class="mb-3 row">
									<div class="col-md-2">
										<label style="margin-left:15Px">Activity Type</label>
									</div>
									<div class="col-md-7">
										<select class="form-control" id="activityType">
											<option></option>
										</select>
									</div>
								</div>
							</div>
							<div class="row state_createddt">
								<div class="mb-3 row">
									<div class="col-md-2">
										<label style="margin-left:15Px">Status</label>
									</div>
									<div class="col-md-7">
										<select class="form-control" id="status">
											<option></option>
										</select>
									</div>
								</div>
							</div>
							<div class="row state_createddt">
								<div class="mb-3 row">
                                    <div class="col-md-2">
                                        <label style="margin-left:15px">Activity Date</label>
                                    </div>
									<div class="col-md-7">
										<div class="row g-2 align-items-center">
											<div class="col-md-4">
												<div class="input-group">
													<span class="input-group-text"><i class="fa fa-calendar"></i></span>
													<input type="text" id="fromDate" name="fromDate" class="form-control datepicker detail numeric" autocomplete="off">
												</div>
											</div>
											<div class="col-md-4" style="text-align: center">
												<label class="col-form-label"><strong>to</strong></label>
											</div>
											<div class="col-md-4">
												<div class="input-group">
													<span class="input-group-text"><i class="fa fa-calendar"></i></span>
													<input type="text" id="toDate" name="toDate" class="form-control datepicker numeric" autocomplete="off">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row state_createddt">
								<div class="mb-3 row">
									<div class="col-md-2">
										<label style="margin-left:15Px">Instruction Date</label>
									</div>
									<div class="col-md-7">
										<select class="form-control" id="instructionMode">
											<option value="ALL">All</option>
											<option value="I" data-name = "I">Immediate</option>
											<option value="F" data-name = "F">Future</option>
											<option value="R" data-name = "R">Recurring</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row">
									<div class="col-md-3">
										<input type="radio" id="refno-rb" name="searchby-rb" value="1">
										<label for="refno-rb" style="margin-left: 7px;"><strong>Reference Number</strong></label>
									</div>
									<div class="col-md-7 state_refno">
										<input type="text" id="referenceNo" name="code" class="form-control" autocomplete="off" value="" maxlength="40" data-error="This field is required." required>
									</div>
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
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
				<h3 class="box-title">Activity Listing</h3>
			</div>

			<div class="box-body list-title">
				<div class="container-fluid">
					<div class="row">
						<table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2" style="border-collapse:collapse;">
							<thead>
								<tr>
									<th align="center"><strong>No</strong></th>
									<th align="center"><strong>Request Date Time</strong></th>
									<th align="center"><strong>File Type</strong></th>
									<th align="center"><strong>File Name</strong></th>
									<th align="center"><strong>File Status</strong></th>
									<th align="center"><strong> </strong></th>
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

		getCorporateDroplist();
		getActivityTypeDroplist();
		getStatusDroplist();
		getFormatDroplist();
		searchReport();

		$('.state_refno').hide();
		$('.state_createddt').show();

		$('.datepicker').datepicker({
            format: "dd/mm/yyyy",
            locale: 'id',
            autoclose:true,
            endDate: new Date(),
        });

		$('#fromDate').val(moment(new Date()).format("DD/MM/YYYY"));
        $('#toDate').val(moment(new Date()).format("DD/MM/YYYY"));

		$('input[name="searchby-rb"]').on('change', function(e) {
			$('#form-area').validator('reset');
            if(this.value=='1'){
                $('.state_refno').show();
				$('.state_createddt').hide();
            }else{
                $('.state_refno').hide();
				$('.state_createddt').show();
            }
        });

		$('#activityBy').prop("disabled",true);
		$('#accountNo').prop("disabled",true);
		$('#menuType').prop("disabled",true);
		$('#activityType').prop("disabled",false);
		$('#status').prop("disabled",false);
		$('#instructionMode').prop("disabled",false);

		$('select[id="corporate_code"]').on('change', function(e) {
			$('#activityBy').prop("disabled",false);
			$('#accountNo').prop("disabled",false);
            $('#menuType').prop("disabled",false);
			if ($('#corporate_code').val() != "") {
    			getActivityByDroplist(this.value);
				getAccountDroplist(this.value);
    			getMenuTypeDroplist(this.value);
				$('#corporate_code').removeClass('error');
				$('#corporate_code-error').html('');
			}
        });

		$('#search').on('click', function () {
			searchReport();
		});

		// Manual dropdown toggle handler
		$(document).on('click', '.dropdown-toggle', function(e) {
			e.preventDefault();
			e.stopPropagation();

			var searchByCorp = ($('input[name="searchby-rb"]:checked').val() == '0' ? true : false);
			if (searchByCorp) {
				$('#corporate_code').removeClass('error');
				$('#corporate_code-error').html('');

				if ($('#corporate_code').val() == '' || $('#corporate_code').val() == null) {
					$('#corporate_code').addClass('error');
					$('#corporate_code-error').html('<span style="color: red;">Please Select Company</span>');
					window.scrollTo(0, 0);
					return false;
				}
			}

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

		// Close dropdown when clicking outside
		$(document).on('click', function(e) {
			if (!$(e.target).closest('.dropdown').length) {
				$('.dropdown-menu').removeClass('show').hide();
			}
		});

		// Handle dropdown item clicks with event delegation
		$(document).on('click', '#downloadFormat .dropdown-item', function(e) {
			e.preventDefault();
			e.stopPropagation();
			var format = $(this).data('format');
			$('.dropdown-menu').removeClass('show').hide();
			requestDownload(format);
		});

        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',.-'
        });

    });

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
					console.log("success get fileFormat");
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

	function requestDownload(fileFormat) {

		$('.row-corporate').validator('validate');

		var value = {
			corporateId: $('#corporate_code').val(),
			fromDate: $('#fromDate').val(),
			toDate: $('#toDate').val(),
			actionType: $('#activityType').val(),
			actionByUserId: $('#activityBy').val(),
			menuType: $('#menuType').val(),
			referenceNo:$('#referenceNo').val(),
			fileFormat: fileFormat,
			currentPage: "1",
			pageSize: "20"
		};

		var validate = true;
		var searchByCorp = ($('input[name="searchby-rb"]:checked').val() == '0' ? true : false);
		if (searchByCorp) {

			$('#corporate_code').removeClass('error');
			$('#corporate_code-error').html('');

			if (value.corporateId == '' || value.corporateId == null) {
				validate = false;
				$('#corporate_code').addClass('error');
				$('#corporate_code-error').html('<span style="color: red;">Please Select Company</span>');
				window.scrollTo(0, 0);
				return;
			}

			if (value.fromDateVal == '') {
				var content ='From Date ' + '{{trans('form.mandatory')}}';
				$.alert({
					title: '{{trans('form.warning')}}',
					content: content
				});
				validate = false;
				return;
			}

			if (value.toDateVal == '') {
				var content ='To Date ' + '{{trans('form.mandatory')}}';
				$.alert({
					title: '{{trans('form.warning')}}',
					content: content
				});
				validate = false;
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

			//if(!is3MonthValid()){
				//var content ='{{trans('form.alert_date_3_month_report')}}';
				//$.alert({
				//	title: '{{trans('form.warning')}}',
				//	content: content
			//	});
			//	return;
		//	}

		} else {

			if (value.referenceNo == '') {
				var content ='Reference Number ' + '{{trans('form.mandatory')}}';
				$.alert({
					title: '{{trans('form.warning')}}',
					content: content
				});
				validate = false;
				return;
			}
		}

		if (validate) {

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
				}, complete: function (data) {

				}
			});

		}

	}

	function searchReport() {
		$("#vue-success").find(".close").trigger("click");

		setTimeout(function(){

			var validate = true;
			var url_action = 'search';
			var action = 'SEARCH';
			var result_key = 'result';
			var custom_order = '';
			var value = {
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

	function getCorporateDroplist() {
		var menu = '{{ $service }}';
        var value = {
        };
        var url_action = 'searchCorporate';
        var action = 'SEARCH';
        var menu = menu;
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

                    unitOption = '<option value="" selected="selected">Select Company</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="'+ obj.corporateId +'"data-name = "'+obj.corporateName+'">'+ obj.corporateId + " - " + obj.corporateName + '</option>';
                    });

					$('#corporate_code').html(unitOption);
                    $('#corporate_code').select2({width: '100%'});
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

	function getMenuTypeDroplist(corpId) {
		var menu = '{{ $service }}';
        var value = {
            corporateId: corpId
        };
        var url_action = 'getMenuType';
        var action = 'SEARCH';
        var menu = menu;
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
                    unitOption = '';
					unitOption = '<option value="ALL MENU" selected> All Menu</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="'+ obj.menuCode +'"data-value = "'+obj.menuName+'">'+ obj.menuName + '</option>';
                    });
                    $('#menuType').html(unitOption);
                    $('#menuType').select2({width: '100%'});

            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });
    }

	function getActivityTypeDroplist() {
		var menu = '{{ $service }}';
        var value = {
            code: "",
            name: "",
        };
        var url_action = 'getActivityType';
        var action = 'SEARCH';
        var menu = menu;
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
				console.log("result ", result);
				unitOption = '<option value="" selected>All Activity Type</option>';
				$.each(result.result, function (idx, obj) {
					unitOption += '<option value="'+ obj.key +'"data-name = "'+obj.value+'">'+ obj.value + '</option>';
				});
				$('#activityType').html(unitOption);
				$('#activityType').select2({width: '100%'});

            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });
    }

	function getStatusDroplist() {
		var menu = '{{ $service }}';
        var value = {
            code: "",
            name: "",
        };
        var url_action = 'getStatus';
        var action = 'SEARCH';
        var menu = menu;
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
				console.log("result ", result);
				unitOption = '<option value="ALL STATUS" selected>All Status</option>';
				$.each(result.result, function (idx, obj) {
					unitOption += '<option value="'+ obj.key +'"data-name = "'+obj.value+'">'+ obj.value + '</option>';
				});
				$('#status').html(unitOption);
				$('#status').select2({width: '100%'});

            }, error: function (xhr, ajaxOptions, thrownError) {
                var msg = '{{trans('form.conn_error')}}';
                flash('warning', msg);
                console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
            }, complete: function (data) {

            }
        });
    }

	function getActivityByDroplist(corpId) {
		var menu = '{{ $service }}';
        var value = {
            corporateId: corpId
        };
        var url_action = 'searchUser';
        var action = 'SEARCH';
        var menu = menu;
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
					unitOption = '<option value="" selected> All Activity By</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="'+ obj.actionByUserId +'"data-value = "'+obj.actionByUserName+'">'+ obj.actionByUserId  + " - " + obj.actionByUserName+ '</option>';
                    });
                    $('#activityBy').html(unitOption);
                    $('#activityBy').select2();
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

	function getAccountDroplist(corpId) {
		var menu = '{{ $service }}';
        var value = {
            corporateId: corpId
        };
        var url_action = 'searchAccount';
        var action = 'SEARCH';
        var menu = menu;
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
					unitOption = '<option value="" selected>All Account No</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="'+ obj.accountNo +'"data-value = "'+obj.accountNo+'">'+ obj.accountNo + '/' + obj.accountName + '</option>';
                    });
                    $('#accountNo').html(unitOption);
                    $('#accountNo').select2();
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


    function checkDate(){

        var count = 0;
        var date1 = $("#fromDate").data('datepicker').getFormattedDate('yyyy/mm/dd');
        var date2 = $("#toDate").data('datepicker').getFormattedDate('yyyy/mm/dd');

		console.log("checkDate1 ", new Date() - new Date($("#fromDate").data('datepicker').getFormattedDate('yyyy/mm/dd')));
		console.log("checkDate2 ", new Date() - new Date(date2));

		if(date1 == '' || date1 == undefined)
            date1 = moment(new Date(),"DD/MM/YYYY hh:mm").format("YYYY/MM/DD")

        if(date2 == '' || date2 == undefined)
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
        var date1 = $("#fromDate").data('datepicker').getFormattedDate('yyyy-mm-dd 23:59:59');
        if(date1 == '')
            date1 = moment(new Date()).subtract(3, 'month').format("YYYY-MM-DD 23:59:59");
        return moment().diff(date1, "months")<=2;

    }

</script>
