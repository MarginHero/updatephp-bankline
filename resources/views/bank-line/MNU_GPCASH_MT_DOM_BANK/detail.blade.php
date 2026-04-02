@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'detail']])

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="code" value=""/>
            <input type="hidden" id="backType" value=""/>
            <div class="box">
                
                
                <div class="box-header">
                    <h3 class="box-title">Domestic Bank Detail</h3><br>
                </div>
                <form class="form-horizontal">
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Bank Code</label>
                                <div class="col-md-6">
                                    <label id="code_1">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Bank Name</label>
                                <div class="col-md-6">
                                    <label id="name">-</label>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Address</label>
                                <div class="col-md-6">
                                    <label id="address1">-</label>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="address2">-</label>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end"></label>
                                <div class="col-md-6">
                                    <label id="address3">-</label>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">SKN Code</label>
                                <div class="col-md-6">
                                    <label id="organizationUnitCode">-</label>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Branch Name</label>
                                <div class="col-md-6">
                                    <label id="organizationUnitName">-</label>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">Member Code</label>
                                <div class="col-md-6">
                                    <label id="memberCode">-</label>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-2 col-form-label text-end">BI Fast Code</label>
                                <div class="col-md-6">
                                    <label id="biFastCode">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <div class="box-header state_edit">
                    <h3 class="box-title">City</h3><br>
                </div>
                <form id="form-area" class="form-horizontal form-area">
                    <div class="box-body state_edit">
                        <div class="row">
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end">City</label>
                                    <div class="col-md-6">
                                        <div class="city_setup state_edit">
                                            <select class="form-control"></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 row form-group">
                                    <label class="col-md-2 col-form-label text-end"><strong></strong></label>
                                    <div class="col-md-5">
                                        <button type="button" id="add_list" class="btn btn-default">Add to List</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </form>
                <div class="box-header cityEdit">
                    <h3 class="box-title">City Listing</h3><br>
                </div>
                <div class="box-body cityEdit">
                    <div class="container-fluid">
                            <div class="row">
                                <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                       style="border-collapse:collapse;">
                                    <thead>
                                    <tr>
                                        <th align="center"><strong>City</strong></th>
                                        <th align="center" class="state_edit"><strong></strong></th>
                                    </tr>
                                    </thead>
                                    
                                </table>
                            </div>
                        </div>           
                </div>
		
		<div class="box-header cityDetail">
                    <h3 class="box-title">City Listing</h3><br>
                </div>
		<div class="box-body cityDetail">
                    <div class="container-fluid">
                            <div class="row">
                                <table id="list2" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                       style="border-collapse:collapse;">
                                    <thead>
                                    <tr>
                                        <th align="center"><strong>City</strong></th>
                                    </tr>
                                    </thead>
                                    
                                </table>
                            </div>
                        </div>           
                </div>
                        <div class="box-footer">
                            <div class="float-left">
                                <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                            </div>
                            <div class="float-right">
                                <button type="button" id="delete" name="delete" class="btn btn-danger">@lang('form.delete')</button>
                                <button type="button" id="edit" name="edit" class="btn btn-primary">Edit Domestic Bank</button>
                                <button type="button" id="editCity" name="editCity" class="btn btn-primary">Edit City</button>
                                <button type="button" id="confirmCity" name="confirmCity" class="btn btn-primary">@lang('form.confirm')</button>
                                <button type="button" id="submit_view" name="submit_view" class="btn btn-primary">@lang('form.submit')</button>
                                <button type="button" id="next_user" name="next_user" class="btn btn-info" style="display:none">@lang('form.next_user')</button>
                                <button type="button" id="save_screen" name="save_screen" class="btn btn-default" style="display:none" onclick="save_pdf();">@lang('form.save_pdf')</button>
                            </div>
                        </div>
                        @include('_partials.next_user')
                    </div>

            </div>
        </div>
    </div>

</section>

<script>
    var oTable;
    var currencyOption;
    var id = 'MNU_GPCASH_MT_DOM_BANK';
    var noRef;
    var bankCityList
    $(document).ready(function () {      
        $('.state_delete').hide();
        $('.cityEdit').hide();
        $('.state_edit').hide();
        $('#confirmCity').hide();
        $('#submit_view').hide();

	getCityDropList();

    oTable = $('#list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [

                {
                    targets: 0,
                    sortable: false,
                    width: "85%"
                },
                {
                    targets: 1,
                    sortable: false,
                    width: "15%",
                    className: "dt-center state_edit",
                    render: function ( data, type, full, meta ) {
                        return '<button data-cif="'+data+'" class="btn btn-danger state_edit" onClick="removeRow(this);" style="width:100px;">Remove</button>';
                    }
                }
            ],
        });


	oTable2 = $('#list2').DataTable({
            // "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [

                {
                    targets: 0,
                    sortable: false,
                    width: "100%"
                }
            ],
        });

        $('#edit').on('click', function () {
            var code = $('#code_1').text();
            var res = app.setView(id,'add');
            if(res=='done'){
                $('#type').val('edit');
                $('#breadcrumb-action').html('edit');
                $('#code_edit').val(code);
                getDomesticBankEdit(code);
            }
            
        });

        $('#editCity').on('click', function () {
            var code = $('#code_1').text();

            $('#delete').hide();
            $('#edit').hide();
            $('#editCity').hide();
            $('.cityDetail').hide();
            $('.cityEdit').show();
            $('#confirmCity').show();
            $('.state_edit').show();
            $('#backType').val('EditCity');
        });

        $('#confirmCity').on('click', function () {
            
            setTimeout(function(){
                    bankCityList = getTableData();

                    $('.state_edit').hide();
                    $('#submit_view').show();
		    $('.cityEdit').show();
                    $('#confirmCity').hide();
                    $('#backType').val('ConfirmCity');
                });

        });

        function getTableData() {
            var data = [];

            $("#list").find("tbody tr").each(function () {
                var cityCode = $('td:eq(0)', $(this)).find('#bankCityCodeHidden').val();
                var cityName = $('td:eq(0)', $(this)).find('#bankCityNameHidden').val();

                var obj = {
                    code: cityCode,
                    name:cityName
                };

                data.push(obj);

            });

            return data;
    }
        $('#add_list').on('click', function () {
            // $(this).prop('disabled',true);
            $('#form-area').validator('validate');
            // setTimeout(function(){
            if($('#form-area').validator('validate').has('.has-error').length==0){
                var cityData = $('.city_setup').find(":selected").val();
                var cityName = $('.city_setup').find(":selected").text();
                validateAddList(cityData, cityName);
            }
        });

        $('#delete').on('click', function () {
           // $('.state_view').hide();
           // $('.state_delete').show();
            $(this).prop('disabled',true);
            $.confirm({
                title: '{{trans('form.delete')}}',
                content: '{{trans('form.confirm_delete_table')}}',
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
                    },

                }
            });
        });

$('#submit_view').on('click', function () {
            $(this).prop('disabled',true);

            $.confirm({
                title: '{{trans('form.submit')}}',
                content: '{{trans('form.confirm_edit')}}',
                buttons: {
                    
                    cancel: {
                        text: '{{trans('form.cancel')}}',
                        btnClass: 'btn-default',
                        action: function(){
                            $('#submit_view').prop('disabled',false);
                        }
                    },
                    confirm: {
                        text: '{{trans('form.confirm')}}',
                        btnClass: 'btn-primary',
                        action: function(){
                            submitCityData();
                        }
                    },

                }
            });

        });

        function getCityDropList() {

            var url_action = 'searchCityForDroplist';
            var action = 'SEARCH';
            var menu = 'MNU_GPCASH_MT_BRANCH';
            $.ajax({
                url: 'getAPIData',
                method: 'post',
                type: 'json',
                data: {
                    menu : menu,
                    url_action : url_action,
                    action : action,
                    _token : '{{ csrf_token() }}'
                },
                success: function (data) {
                    var result = JSON.parse(data);
                    if (result.status=="200") {
                        cityOption = '<select id="city_list" class="form-control state_edit" required>';
                        cityOption += '<option value="" selected="selected">--Select City--</option>';
                        $.each(result.result, function (idx, obj) {
                            cityOption += '<option value="' + obj.code + '">' + obj.name + '</option>';

                        });
                        cityOption += '</select>';
                        cityOption += '<div class="help-block with-errors"></div>';
                    } else {
                        flash('warning', result.message);
                    }



                }, error: function (xhr, ajaxOptions, thrownError) {
                    var msg = '{{trans('form.conn_error')}}';
                    flash('warning', msg);
                    console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
                }, complete: function (data) {
                    $('.city_setup').html(cityOption);
                    $('#city_list').select2({width: '100%'});
                }
            });
        }

        function submit_delete () {

            var value = {
                "code": $('#code').val(),	
				"name": $('#name').text(),
				"address1": $('#address1').text(),
				"address2": $('#address2').text(),
				"address3": $('#address3').text(),
				"organizationUnitCode": $('#organizationUnitCode').text(),
				"organizationUnitName": $('#organizationUnitName').text(),
				"memberCode": $('#memberCode').text(),
				"biFastCode": $('#biFastCode').text()			
            };
            $.ajax({
				url: 'delete',
                method: 'post',
                data: {"_token": "{{ csrf_token() }}", menu: id, value: value,url_action:'submitDelete'},
                success: function (data) {
                    $('#delete').prop('disabled',false);
                    var result = JSON.parse(data);
					noRef = result.referenceNo;
                    if (result.status=="200") {
                        flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                        $('#submit_view').hide();
                        $('#save_screen').show();
                        $('#next_user').show();
                        $('#delete').hide();
                        $('#edit').hide();
                        $('#back').html('{{trans('form.done')}}');
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

        $('#back_delete').on('click', function () {
            $('.state_delete').hide();
            $('.state_view').show();
        });

        $('.back').on('click', function () {
            var type = $('#backType').val();
            var code = $('#code').val();
            if (type == 'EditCity') {
                 var res = app.setView(id,'detail');
                if(res=='done'){
                    $('#code').val(code);
                    getMatrix();
                }
                /*$('#delete').show();
                $('#edit').show();
                $('#editCity').show();
                $('.cityDetail').show();
                $('.cityEdit').hide();
                $('#confirmCity').hide();
                $('.state_edit').hide();*/
                $('#backType').val('Detail');
            }else if(type == 'ConfirmCity') {
                var code = $('#code_1').text();

                $('#delete').hide();
                $('#edit').hide();
                $('#editCity').hide();
                $('.cityDetail').hide();
                $('.cityEdit').show();
                $('#confirmCity').show();
                $('.state_edit').show();
                $('#backType').val('EditCity');
                $('#submit_view').hide();

            } else {
                $('#backType').val('Detail');
                var res = app.setView(id,'landing');
            }
        });

    });

    function getMatrix(){
        var code_id= $('#code').val();
        var url_action= 'search';
        var value ={
            code:code_id,
            name:'',
            currentPage: "1",
            pageSize: "20",
            orderBy: {"code": "ASC"}
        };
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{value:value,menu:id,action:'DETAIL',url_action:url_action},
            success: function (data) {

                var result = JSON.parse(data);
                if (result.status=="200") {
                    var index = result.result.map(function(o) { return o.bankCode; }).indexOf(code_id.toString());
                    var detail = result.result[index];
					
                    $('#code_1').text(detail.bankCode);
                    $('#name').text(detail.name);
                        $('#address1').text(detail.address1);
						$('#address2').text(detail.address2);
						$('#address3').text(detail.address3);
						$('#organizationUnitCode').text(detail.organizationUnitCode);
						$('#organizationUnitName').text(detail.organizationUnitName);
						$('#memberCode').text(detail.memberCode);
						$('#biFastCode').text(detail.biFastCode);

                    if (detail.bankCityList) {
                            $.each(detail.bankCityList, function (idx, obj){
                                oTable2.row.add([
                                    obj.name,
                                ]).draw(true);
                            });

 			  $.each(detail.bankCityList, function (idx, obj){
				var codeArr = obj.code.split("_");
                                oTable.row.add([
                                    obj.name + '<input type=hidden id="bankCityCodeHidden" value="' + codeArr[1] + '"><input type=hidden id="bankCityNameHidden" value="' + obj.name + '">',
                                ]).draw(true);
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
            
        });
    }

    function submitCityData(){
            var value = {
                "code": $('#code').val(),   
                "name": $('#name').text(),
"memberCode": $('#memberCode').text(),
"organizationUnitCode": $('#organizationUnitCode').text(),
                "bankCityList": bankCityList,
		"updateCity": "Y"
            };

            var url_action = "submit";
            
             $.ajax({
                    url: 'edit',
                    method: 'post',
                    data: {"_token": "{{ csrf_token() }}", menu: id, value: value, url_action: url_action, action: 'UPDATE_CITY'},
                    success: function (data) {
                        $('#submit_view').prop('disabled',false);
                        var result = JSON.parse(data);
                        if (result.status=="200") {
                            noRef=result.referenceNo;
                            flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                            $('#submit_view').hide();
                            $('#save_screen').show();
                            $('#next_user').show();
                            $('#done').show();
                            $('#confirmCity').hide();
                        } else {
                            $('#submit_view').prop('disabled',false);
                            flash('warning', result.message);
                        }

                    }, error: function (xhr, ajaxOptions, thrownError) {
                        $('#submit_view').prop('disabled',false);
                        flash('warning', 'Form Submit Failed');
                        console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
                    }
                });
        }

    function validateAddList(code, name){

        if(checkDuplicateList(code, name)) {

            oTable.row.add([
                name + '<input type=hidden id="bankCityCodeHidden" value="' + code + '"><input type=hidden id="bankCityNameHidden" value="' + name + '">',
            ]).draw(true);
        } else {
            flash('warning', 'City has been added to List');
        }
    }

    function checkDuplicateList(code, name){

            var duplicate = 0;

            $("#list").find("tbody tr").each(function (idx, obj) {

                var codeEx = $('td:eq(0)', $(this)).find('#bankCityCodeHidden').val();
                if(code==codeEx){
                    duplicate = 1;                    
                }

            });

            if(duplicate==1){
                return false;
            }else{
                return true;
            }
    }

    function removeRow(el){
        var row = $(el).parent().parent();
        oTable.row(row).remove().draw(true);
    }
   

</script>