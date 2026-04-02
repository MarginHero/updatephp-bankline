@include('_partials.header_content',['breadcrumb'=>[str_replace('-',' ',$menu),'detailpresdoc']])

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div id="notification"></div>
            <input type="hidden" id="refNo" value=""/>
            <input type="hidden" id="idTrx" value=""/>
			<form id="form-area" class="form-horizontal form-area">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Presentation Docs Information</h3><br>
					</div>

					<div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Transaction Reference No.</label>
									<div class="col-md-5">
										<label id="trxRefNo">-</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Number of Correction</label>
									<div class="col-md-5">
										<label id="noOfCorrection">-</label>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    <div class="box-header">
						<h3 class="box-title">Presentation Docs Detail</h3><br>
					</div>
					<div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Bank Ref No.</label>
									<div class="col-md-5">
										<label id="bankRefNo">-</label>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Issued Date</label>
									<div class="col-md-5">
										<label id="issueDate">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Invoice No</label>
									<div class="col-md-5">
										<label id="invoiceNo">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Amount</label>
									<div class="col-md-5">
										<label id="amount">-</label>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Description</label>
									<div class="col-md-5">
										<label id="templateDesc">-</label>
									</div>
								</div>
							</div>
                            <div class="row fileUploadClass"></div>
						</div>
					</div>
                    <div class="box-header list-title">
                        <h3 class="box-title">Bank Response</h3>
                    </div>
                    <div class="box-body">
						<div class="container-fluid">
							<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Action Status</label>
									<div class="col-md-5">
										<label id="status">-</label>
									</div>
								</div>
							</div><div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end">Comment by Bank</label>
									<div class="col-md-5">
										<label id="bankComment">-</label>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <div class="box-header list-title">
                        <h3 class="box-title">Transaction History</h3>
                    </div>
                    <div class="box-body list-title">
                        <table id="list" class="table table-bordered table-striped dataTable" border="2" cellpadding="2"
                            style="border-collapse:collapse;">
                            <thead>
                                <tr>
                                    <th align="center"><strong>ActivityDate</strong></th>
                                    <th align="center"><strong>Activity</strong></th>
                                    <th align="center"><strong>Activity By</strong></th>
                                    <th align="center"><strong>Approval Count</strong></th>
                                    <th align="center"><strong>Amount</strong></th>
                                    <th align="center"><strong>Transaction Status</strong></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
					<div class="box-footer">
						<div class="float-left">
							<button type="button" id="back" name="back" class="btn btn-default back">@lang('form.back')</button>
						</div>
						<div class="float-right">
                            <button type="button" id="save_screen" name="save_screen" class="btn btn-default" onclick="save_pdf();">@lang('form.save_pdf')</button>
                        </div>
                    </div>
				</div>
			</form>
        </div>
    </div>

</section>

<script>
    var oTable;
    var currencyOption;
    var noRef;
    var id = '{{ $service }}';

    $(document).ready(function () {

		// $('#form-area').validator().on('submit', function (e) {
        //     if (e.isDefaultPrevented()) {
        //         // handle the invalid form...
        //     } else {
        //         // everything looks good!

        //     }
        // });

        oTable = $('#list').DataTable({
            "paging" : false,
            "ordering" : false,
            "info": false,
            "destroy": true,
            "select": false,
            "searching": false,
            "autoWidth":false,
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
            "columnDefs": [
                {
                    targets: 0,
                    sortable: false,
                    width: "12%"
                },
                {
                    targets: 1,
                    sortable: false,
                    width: "12%"
                },
                {
                    targets: 2,
                    sortable: false,
                    width: "12%"
                },
                {
                    targets: 3,
                    sortable: false,
                    width: "12%"
                },
                {
                    targets: 4,
                    sortable: false,
                    width: "12%"
                },
                {
                    targets: 5,
                    sortable: false,
                    width: "12%"
                }
            ]
        });

        $('.numeric').numeric({allowMinus:false, allowDecSep:false, allowThouSep:false});

        $('input[type="text"]').not('.numeric').alphanum({
            allowSpace: true,
            allow : ',._!@'
        });

        $('#back').on('click', function () {
            var res = app.setView(id,'landing');
        });

    });

    function getDetail(){
        var refNo= $('#refNo').val();
        var url_action= 'detail';
        var value ={
            referenceNo: refNo,
            currentPage: "1",
                pageSize: "10",
                orderBy: {
                    "activityDate": "ASC"
                }
        };
        $.ajax({
            url: 'getAPIData',
            method: 'post',
            data:{value:value,menu:id,action:'DETAIL',url_action:url_action},
            success: function (data) {

                var result = JSON.parse(data);
                if (result.status=="200") {

					// var index = result.resultTrade.map(function(o) { return o.referenceNo; }).indexOf(refNo.toString());
                    var detail = result.resultTrade;
                    // var history;
                    $('#trxRefNo').text(detail.trxRefNo);
                    $('#noOfCorrection').text(detail.noOfCorrection);
                    $('#bankRefNo').text(detail.bankRefNo);
                    $('#issueDate').text(detail.issueDate);
                    $('#invoiceNo').text(detail.invoiceNo);
                    $('#amount').text(detail.amount);
                    $('#templateDesc').text(detail.templateDesc);
                    $('#fileName1').val(detail.fileName1);
                    $('#fileName2').val(detail.fileName2);
                    $('#fileName3').val(detail.fileName3);
                    $('#fileName4').val(detail.fileName4);
                    $('#fileName5').val(detail.fileName5);
                    $('#fileId1').val(detail.fileId1);
                    $('#fileId2').val(detail.fileId2);
                    $('#fileId3').val(detail.fileId3);
                    $('#fileId4').val(detail.fileId4);
                    $('#fileId5').val(detail.fileId5);

                    $('#status').text(detail.status);
                    $('#bankComment').text(detail.bankComment);
                    setFileUpload(detail);

                    var activity = result.activities;
                    oTable.clear();
                    if(activity){
                        $.each(activity, function (idx, obj){
                            oTable.row.add([
                                '<span id="activity_activityDate">'+obj.activityDate+'</span>',
                                '<span id="activity_activity">'+obj.activiti+'</span>',
                                '<span id="activity_activityBy">'+obj.user+'</span>',
                                '<span id="activity_approvalCount">'+obj.approvalLvCount+'</span>',
                                '<span id="activity_amount">'+obj.amount+'</span>',
                                '<span id="activity_transactionStatus">'+obj.status+'</span>'
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

    function setFileUpload(detail){
        var fileNames = [];
        if(detail.fileName1!=null && detail.fileName1!= undefined && detail.fileName1!=''){
            fileNames.push(detail.fileName1);
        }
        if(detail.fileName2!=null && detail.fileName2!= undefined && detail.fileName2!=''){
            fileNames.push(detail.fileName2);
        }
        if(detail.fileName3!=null && detail.fileName3!= undefined && detail.fileName3!=''){
            fileNames.push(detail.fileName3);
        }
        if(detail.fileName4!=null && detail.fileName4!= undefined && detail.fileName4!=''){
            fileNames.push(detail.fileName4);
        }
        if(detail.fileName5!=null && detail.fileName5!= undefined && detail.fileName5!=''){
            fileNames.push(detail.fileName5);
        }
        tags = `<div class="row">
					<div class="mb-3 row form-group">
						<label class="col-md-3 col-form-label text-end">Atachment Detail</label>
						<div class="col-md-5">
							<label>${fileNames[0]}</label>
						</div>
					</div>
				</div>`;

        for(let i = 1; i < fileNames.length; i++){
            tags = tags + `<div class="row">
								<div class="mb-3 row form-group">
									<label class="col-md-3 col-form-label text-end"></label>
									<div class="col-md-5">
                                        <label>${fileNames[i]}</label>
									</div>
                                </div>
                           </div>`;
        }
        $('.fileUploadClass').html(tags);
    }

</script>
