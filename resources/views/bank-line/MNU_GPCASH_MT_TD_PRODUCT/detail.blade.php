@include('_partials.header_content',['breadcrumb'=>['Time Deposit Product','detail']])


<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="selectedProduct" value=""/>
            <input type="hidden" id="backType" value=""/>
            <div class="box">


                <div class="box-header">
                    <h3 class="box-title">Time Deposit Product Detail</h3><br>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">Code</label>
                                <div class="col-md-6">
                                    <label id="productCode">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">Name</label>
                                <div class="col-md-6">
                                    <label id="productName">-</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end">Description</label>
                                <div class="col-md-6">
                                    <label id="description">-</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header termEdit state_edit">
                    <h3 class="box-title">Term</h3><br>
                </div>
                <div class="box-body termEdit state_edit">
                    <div class="container-fluid">
                        <div class="row">
                            <div id="termblock" class="mb-3 row form-group has-feedback">
                                <label class="col-md-4 col-form-label lblTerm text-end"><strong>Term&ast;</strong></label>
                                <div class="col-md-6">
                                    <input type="text" id="term" name="term" class="form-control state_edit" autocomplete="off" value="" style="width:100%;text-align: left;" data-error="This field is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row state_edit">
                            <div class="mb-3 row form-group">
                                <label class="col-md-4 col-form-label text-end"><strong></strong></label>
                                <div class="col-md-5">
                                   <button type="button" id="add_list" class="btn btn-default">Add to List</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-header termEdit">
                    <h3 class="box-title">Term Listing</h3><br>
                </div>
                <div class="box-body termEdit">
                    <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                                       style="border-collapse:collapse;">
                        <thead>
                            <tr>
                                <th align="left"><strong>Term</strong></th>
                                <th align="left" class="state_edit"><strong></strong></th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="box-footer">

                                <div class="state_view">
                                    <div class="float-left">
                                        <button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
                                        <button type="button" id="save_screen" name="save_screen" class="btn btn-default" style="display:none" onclick="save_pdf();">@lang('form.save_pdf')</button>
                                    </div>
                                    <div class="float-right">
                                        <button type="button" id="delete" name="delete" class="btn btn-danger">@lang('form.delete')</button>
                                        <button type="button" id="edit_term" name="edit_term" class="btn btn-primary">@lang('form.edit_term')</button>
                                        <button type="button" id="edit" name="edit" class="btn btn-primary">@lang('form.edit_product')</button>
                                        <button type="button" id="confirmTerm" name="confirmTerm" class="btn btn-primary">@lang('form.confirm')</button>
                                        <button type="button" id="submit_view" name="submit_view" class="btn btn-primary">@lang('form.submit')</button>
                                        <button type="button" id="next_user" name="next_user" class="btn btn-info" style="display:none">@lang('form.next_user')</button>
                                        <button type="button" id="done" name="done" class="btn btn-primary done" style="display:none">@lang('form.done')</button>

                                    </div>



                                </div>

                        </div>
                @include('_partials.next_user')

            </div>
        </div>
    </div>

</section>

<script>
    var oTable;
    var id = '{{ $service }}';
    var noRef;
    var submit_data;
    $(document).ready(function () {
        oTable = $('#list').DataTable({
            //"paging" : false,
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
                        return '<button data-cif="'+data+'" class="btn btn-danger" onClick="removeRow(this);" style="width:100px;">Remove</button>';
                    }
                }
            ],
        });


        $('.state_delete').hide();
        $('#confirmTerm').hide();
        $('#submit_view').hide();

        $('#delete').on('click', function () {
            $(this).prop('disabled',true);
            $.confirm({
                title: '{{trans('form.delete')}}',
                content: '{{trans('form.confirm_delete_td_product')}}',
                buttons: {

                    cancel: {
                        text: '{{trans('form.cancel')}}',
                        btnClass: 'btn-default',
                        action: function(){
                            $('#delete').prop('disabled',false);
                        }
                    },
                    confirm: {
                        text: '{{trans('form.confirm')}}',
                        btnClass: 'btn-primary',
                        action: function(){
                            submit_delete();
                        }
                    },

                }
            });
        });

        $('#add_list').on('click', function () {
            // $(this).prop('disabled',true);
            $("#termblock").removeClass('has-error');
            $('#term').css('border-color', '');
            $('#term').parent().find('.with-errors').html('');
            var termParam = $('#term').val();
            if (termParam == '') {
                $("#termblock").addClass('has-error');
                $('#term').css('border-color', '#a94442');
                $('#term').parent().find('.with-errors').html('<ul class="list-unstyled"><li style="color:#a94442;">' + $('#term').data('error') + '</li></ul>');
                return;
            }
            var termSplit = termParam.split(' ');
            var termPeriod = "";
            var termType = "";

            if(termSplit.length != 2){
                if(termParam == 'overnight'){
                    termPeriod = "Overnight";
                    termType = "O";
                }else{
                    $("#termblock").addClass('has-error');
                    $('#term').css('border-color', '#a94442');
                    $('#term').parent().find('.with-errors').html('<ul class="list-unstyled"><li style="color:#a94442;">invalid Term Period</li></ul>');
                    return;
                }
            }else{
                termPeriod = termSplit[0];

                var regNumber  = /^[0-9]+$/;
                if(!regNumber.test(termPeriod)){
                    $("#termblock").addClass('has-error');
                    $('#term').css('border-color', '#a94442');
                    $('#term').parent().find('.with-errors').html('<ul class="list-unstyled"><li style="color:#a94442;">invalid Term Period</li></ul>');
                    return;
                }

                if(termSplit[1] == 'days'){
                    termType = 'D';
                }else if (termSplit[1] == 'weeks'){
                    termType = 'W'
                }else if (termSplit[1] == 'months'){
                    termType = 'M'
                }else{
                    $("#termblock").addClass('has-error');
                    $('#term').css('border-color', '#a94442');
                    $('#term').parent().find('.with-errors').html('<ul class="list-unstyled"><li style="color:#a94442;">invalid Term Period</li></ul>');
                    return;
                }
            }


            validateAddList(termPeriod, termType);

        });

         $('#confirmTerm').on('click', function () {

            setTimeout(function(){
                    submit_data = getTableData();
                    $('.state_edit').hide();
                    $('#submit_view').show();
                    $('#confirmTerm').hide();
                    $('#backType').val('ConfirmTerm');
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
                            submitTermData();
                        }
                    },

                }
            });

        });


        function submit_delete () {

            var value = {
                "code": $('#selectedProduct').val(),
                "name": $("#productName").text(),
                "description": $("#description").text(),
            };
            $.ajax({
                url: 'delete',
                method: 'post',
                data: {"_token": "{{ csrf_token() }}", menu: id, value: value,url_action:'submitDelete'},
                success: function (data) {
                    $('#delete').prop('disabled',false);
                    var result = JSON.parse(data);
                    if (result.status=="200") {
                        noRef = result.referenceNo;
                        flash('success', result.message+'<br>'+'ReferenceNo: '+ result.referenceNo+'<br>'+result.dateTimeInfo);
                        $('#submit_view').hide();
                        $('#save_screen').show();
                        $('#next_user').show();
                        $('#done').show();
                        $('#back').hide();
                        $('#delete').hide();
                        $('#edit').hide();
                        $('#edit_term').hide();
                        $('#confirmTerm').hide();
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

        function submitTermData(){
            var value = {
                "code": $('#productCode').text(),
                "name": $('#productName').text(),
                "description": $('#description').text(),
                "termList": submit_data,
            };

            var url_action = "submit";

             $.ajax({
                    url: 'getAPIData',
                    method: 'post',
                    data: {"_token": "{{ csrf_token() }}", menu: id, value: value, url_action: url_action, action: 'UPDATE_TERM'},
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
                            $('#confirmTerm').hide();
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



        $('#back_delete').on('click', function () {
            $('.state_delete').hide();
            $('.state_view').show();
        });

        $('.back').on('click', function () {
            var type = $('#backType').val();
		var code = $('#selectedProduct').val();
            // console.log("type:", type);
            if (type == 'EditTerm') {
                var res = app.setView(id,'detail');
                if(res=='done'){
                    $('#selectedProduct').val(code);
                    getMatrix();
                }
                /*$('.termEdit').hide();
                $('#confirmTerm').hide();
                $('#delete').show();
                $('#edit').show();
                $('#edit_term').show();*/
                $('#backType').val('Detail');
            }else if(type == 'ConfirmTerm'){
                var code = $('#selectedProduct').val();
                $('.termEdit').show();
                $('#confirmTerm').show();
                $('#delete').hide();
                $('#edit').hide();
                $('#edit_term').hide();
                $('#backType').val('EditTerm');
                $('.state_edit').show();
                 $('#submit_view').hide();

            } else {
                $('#backType').val('Detail');
                var res = app.setView(id,'landing');
            }

        });

        $('.done').on('click', function () {
           var res = app.setView(id,'landing');
        });

        $('#edit').on('click', function () {
            var code = $('#selectedProduct').val();
            var res = app.setView(id,'add');
            if(res=='done'){
                $('#type').val('edit');
                $('#breadcrumb-action').html('edit');
                $('#code_edit').val(code);
                getProductEdit(code);
            }

        });

        $('#edit_term').on('click', function () {
            var code = $('#selectedProduct').val();
            $('.termEdit').show();
            $('#confirmTerm').show();
            $('#delete').hide();
            $('#edit').hide();
            $('#edit_term').hide();
            $('#backType').val('EditTerm');
            $('.state_edit').show();
        });

        // Event listener untuk menghapus error message saat user mengetik
        $('#term').on('input', function() {
            if($(this).val().trim() !== '') {
                $("#termblock").removeClass('has-error');
                $(this).css('border-color', '');
                $(this).parent().find('.with-errors').html('');
            }
        });

    });

    function getTableData() {
            var data = [];

            var productCode = $('#productCode').text();

            $("#list").find("tbody tr").each(function () {
                var term = $('td:eq(0)', $(this)).find('#termHidden').val();
                var type = $('td:eq(0)', $(this)).find('#typeHidden').val();

                var obj = {
                    code: productCode+term+type,
                    termType:type,
                    termParam:term,

                };

                data.push(obj);

            });

            return data;
    }

    function getMatrix(){
        var selectedProduct = $('#selectedProduct').val();
        var url_action = 'search';
        var value ={
            code:selectedProduct,
            name:'',
            currentPage: "1",
            pageSize: "50",
        };
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{value:value,menu:id,action:'DETAIL',url_action:url_action},
            success: function (data) {

                var result = JSON.parse(data);

                if (result.status=="200") {
                    var index = result.result.map(function(o) { return o.code; }).indexOf(selectedProduct.toString());
                    var detail = result.result[index];

                    $('#productCode').text(detail.code);
                    $('#productName').text(detail.name);
                    $('#description').text(detail.dscp);

                    if (detail.termList) {
                            $.each(detail.termList, function (idx, obj){
                                oTable.row.add([
                                    (obj.termParam +' '+obj.typeName) + '<input type=hidden id="termHidden" value="' + obj.termParam + '"><input type=hidden id="typeHidden" value="' + obj.typeCode + '">',
                                ]).draw(true);
                            });
                            $('.state_edit').hide();
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

    function validateAddList(param, type){

        var text = '';
        if (type == 'D') {
            text = 'days';
        } else if (type == 'M'){
            text = 'months';
        }else if (type == 'W'){
            text = 'weeks';
        }

        if(checkDuplicateList(param, type)) {

            oTable.row.add([
                (param +' '+text) + '<input type=hidden id="termHidden" value="' + param + '"><input type=hidden id="typeHidden" value="' + type + '">',
            ]).draw(true);
        } else {
            flash('warning', 'Term has been added to List');
        }
    }

    function checkDuplicateList(param, type){

            var duplicate = 0;

            $("#list").find("tbody tr").each(function (idx, obj) {

                var termEx = $('td:eq(0)', $(this)).find('#termHidden').val();
                var typeEx = $('td:eq(0)', $(this)).find('#typeHidden').val();

                if(param==termEx){
                    if(type == typeEx){
                        duplicate = 1;
                    }
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
