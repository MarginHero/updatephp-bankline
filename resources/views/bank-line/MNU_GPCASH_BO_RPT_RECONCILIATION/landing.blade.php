@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'Search']])


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
                                <div class="mb-3 row form-group">
                                    <div class="col-md-3">
                                        <input type="radio" id="corporate-rb" name="searchBy-rb" value="0" checked>
                                        <label for="corporate-rb">Corporate</label>
                                    </div>
                                    <div class="col-md-7 row-corporate" >
                                        <select class="form-control" id="corporate">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-corpaccount">
                                <div class="mb-3 row form-group">
                                    <div class="col-md-3" >
                                        <label>Corporate Account</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" id="corpAccount">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-date">
                                <div class="mb-3 row form-group">
                                    <div class="col-md-3" >
                                        <label>Activity Date</label>
                                    </div>
                                    <div class="col-md-7">
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
                                        <label>Status</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" id="status">
                                            <option value=""> All Status</option>
                                            <option value="SUCCESS"> Success</option>
                                            <option value="FAILED"> Failed</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="mb-3 row form-group">
                                    <div class="col-md-2" style="margin-left: 15px;">
                                        <label>Menu</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" id="menu">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->
                            <div class="row row-service">
                                <div class="mb-3 row form-group">
                                    <div class="col-md-3" >
                                        <label>Service</label>
                                    </div>
                                    <div class="col-md-7">
                                        <select class="form-control" id="service">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 row form-group">
                                    <div class="col-md-3">
                                    <input type="radio" id="refNo-rb" name="searchBy-rb" value="1">
                                    <label for="refNo-rb">Reference Number</label>
                                    </div>
                                    <div class="col-md-7" id="refNoblock">
                                        <input type="text" id="refNo" name="refNo" class="form-control" autocomplete="off" value="" maxlength="40" style="display: none">
                                        <div class="help-block with-errors"></div>
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
                                        <!-- <li><a>PDF</a></li>
                                        <li><a>Excel</a></li> -->
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

		getFormatDroplist();

        getCorporate();
        // getMenuDroplist();
        getServiceDroplist();
        getStatusDroplist();
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

        $('#dateTo').val(moment(new Date(),"DD/MM/YYYY hh:mm").format("DD/MM/YYYY"));
        $('#dateFrom').val(moment(new Date()).add(-1, 'days').format("DD/MM/YYYY"));

        $(document).off('click', '.dropdown-toggle').on('click', '.dropdown-toggle', function(e) {
            e.preventDefault();
            e.stopPropagation();
            var $dropdown = $(this).next('.dropdown-menu');

            $('.dropdown-menu').not($dropdown).removeClass('show').hide();

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
                !$(e.target).closest('.datepicker-dropdown').length) {
                $('.dropdown-menu').removeClass('show').hide();
            }
        });

        $('input[name="searchBy-rb"]').on('change', function(e){
            if (this.value=='1') {
                $('.row-corporate').hide();
                $('.row-corpaccount').hide();
                $('.row-date').hide();
                $('.row-status').hide();
                $('.row-service').hide();

                $('#refNo').show();

                $('#form-area').validator('reset');

            } else {
                $('.row-corporate').show();
                $('.row-corpaccount').show();
                $('.row-date').show();
                $('.row-status').show();
                $('.row-service').show();
                $('#refNo').hide();
            }
        });

        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',.-'
        });

        $('#corpAccount').prop("disabled",true);

        $('select[id="corporate"]').on('change', function(e) {
            $('#corpAccount').prop("disabled",false);
            getCorporateAccountDroplist(this.value);
        });


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
            referenceNo: "",
            status: "",
            pendingTaskMenuCode: "",
            fileFormat: fileFormat,
            statusTrx: "",
        };

        var validate = true;
        var searchByRefNo = ($('input[name="searchBy-rb"]:checked').val() == '1' ? true : false);

        if (searchByRefNo) {
            value.referenceNo = $('#refNo').val();
            if(value.referenceNo == '' || value.referenceNo == null){
                flash('warning', 'Reference Number is mandatory');
                return;
            }
        } else {
            if ($('#dateFrom').val() == '') {
                flash('warning', 'From Date is mandatory');
                return;
            }
            if ($('#dateTo').val() == '') {
                flash('warning', 'To Date is mandatory');
                return;
            }

            // Date comparison validation
            var dateFrom = $('#dateFrom').val();
            var dateTo = $('#dateTo').val();

            if(moment(dateFrom, "DD/MM/YYYY").isAfter(moment(dateTo, "DD/MM/YYYY"))){
                flash('warning', 'From Date cannot be greater than To Date');
                return;
            }

            if(moment(dateTo, "DD/MM/YYYY").isAfter(moment(new Date(), "DD/MM/YYYY").add(1,'days'))){
                flash('warning', 'To date cannot be greater than today');
                return;
            }

            // Assign values
            if($('#corporate').val() != ''){
                value.corporateId = $('#corporate').val();
            }
            if($('#corpAccount').val() != ''){
                value.corpAccount = $('#corpAccount').val();
            }

            value.fromDate = $('#dateFrom').val();
            value.toDate = $('#dateTo').val();
            value.statusTrx = $('#status').val();
            value.serviceCode = $('#service').val();
            value.pendingTaskMenuCode = $('#service option:selected').attr('data-menuCode');
        }

        if(validate){
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
    function getCorporate() {
        var value = {
            code: "",
        };
        var url_action = 'searchCorporate';
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
                console.log(result);
                if (result.status=="200") {
                    unitOption = '<option value="">All Corporate</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.corporateId + '">' + obj.corporateId + ' - ' +obj.corporateName + '</option>';
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

    function getMenuDroplist() {
        var value = {
            code: "",
			mennuCode:menu
        };
        var url_action = 'searchMenu';
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
                console.log(result);
                if (result.status=="200") {
                    unitOption = '<option value="">All Menu</option>';
                    $.each(result.result, function (idx, obj) {
                        unitOption += '<option value="' + obj.menuCode + '">' + obj.menuName + '</option>';
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
                        unitOption += '<option value="' + obj.serviceCode + '" data-menuCode ="'+ obj.menuCode + '">' + obj.serviceName + '</option>';
                    });
                    $('#service').html(unitOption);
                    $('#service').select2();
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
                    unitOption = '<option value="">Select Account</option>';
                    $.each(result.accounts, function (idx, obj) {
                        unitOption += '<option value="' + obj.accountGroupDtlId + '">' + obj.accountNo + ' / ' + obj.accountName + ' (' + obj.accountCurrencyName + ')' + '</option>';
                    });
                    $('#corpAccount').html(unitOption);
                    $('#corpAccount').select2();
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

    function getStatusDroplist() {

        var value = {

        };
        var url_action = 'getTransactionStatus';
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
                console.log(result);
                if (result.status=="200") {
                    unitOption = '<option value="">All Status</option>';
                    $.each(result.trxStatus, function (idx, obj) {
                        unitOption += '<option value="' + obj.key + '">' + obj.value + '</option>';
                    });
                    $('#trxStatus').html(unitOption);
                    $('#trxStatus').select2();
                } else {
                    flash('warning', result.message);
                }
                // if (result) {
                //     unitOption = '<option value="">All Status</option>';
                //     $.each(result, function (idx, obj) {
                //         unitOption += '<option value="' + obj.key + '">' + obj.value + '</option>';
                //     });
                //     $('#trxStatus').html(unitOption);
                //     $('#trxStatus').select2();
                // } else {
                //     flash('warning', result.message);
                // }

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

</script>
