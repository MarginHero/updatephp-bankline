<div id="chPassModal" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Force Change Password</h4>
			</div>
			<div class="modal-body">
				<div id="alerts"></div>
				<form id="form-area" class="form-horizontal">
					<input type="hidden" id="code_edit" value=""/>

					<div class="form-group">
						<label class="col-xs-12 control-label text-left"><strong>Current Password*</strong></label>
						<div class="col-xs-12">
							<input type="password" id="current_pwd" name="current_pwd" class="form-control" maxlength="100" autocomplete="off" value="" data-error="This field is required." required>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-12">
							<div class="box-notif">
								<h6><strong>For your security, your password must alphanumeric and contains at least :</strong></h6>
								<div class="row">
									<div class="col-xs-6">
										<div id="valid-upper" class="valid-txt">
																<i class="fa fa-check green"></i>
											<span>1 uppercase</span>
										</div>
										<div id="valid-lower" class="valid-txt">
																<i class="fa fa-check green"></i>
											<span>1 lowercase</span>
										</div>
										<div id="valid-numbers" class="valid-txt">
																<i class="fa fa-check green"></i>
											<span>1 number</span>
										</div>
										<div id="valid-special" class="valid-txt">
																<i class="fa fa-check green"></i>
											<span>1 special character e.g space,._@!</span>
										</div>
									</div>
									<div class="col-xs-6">
										<div id="valid-length" class="valid-txt">
																<i class="fa fa-check green"></i>
											<span>min. 8 characters</span>
										</div>
										<div id="valid-same" class="valid-txt">
																<i class="fa fa-check green"></i>
											<span>repeat password matched</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-xs-12 control-label text-left"><strong>New Password*</strong></label>
						<div class="col-xs-12">
							<input type="password" id="new_pwd" name="new_pwd" class="form-control" maxlength="100" autocomplete="off" value="" data-error="This field is required." required>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-xs-12 control-label text-left"><strong>Confirm New Password*</strong></label>
						<div class="col-xs-12">
							<input type="password" id="new_pwd_confirm" name="new_pwd_confirm" class="form-control" maxlength="100" autocomplete="off" value="" data-error="Please enter the same value again." required>
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="cancel" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" id="confirm" name="confirm" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</div>
</div>

<style>
#chPassModal .modal-header {
	position: relative;
	border-bottom: 1px solid #e5e5e5;
	padding: 15px;
}
#chPassModal .modal-header .close {
	position: absolute;
	right: 15px;
	top: 15px;
	font-size: 28px;
	font-weight: 700;
	line-height: 1;
	color: #000;
	opacity: 0.5;
	background: none;
	border: 0;
	cursor: pointer;
	padding: 0;
	margin: 0;
}
#chPassModal .modal-header .close:hover,
#chPassModal .modal-header .close:focus {
	opacity: 0.8;
	text-decoration: none;
}
#chPassModal .modal-title {
	margin: 0;
	line-height: 1.42857143;
}
#chPassModal .form-group {
	margin-bottom: 15px;
}
#chPassModal .control-label {
	text-align: left;
	padding-left: 15px;
	padding-right: 15px;
	margin-bottom: 5px;
	font-weight: normal;
}
#chPassModal .valid-txt {
	margin-bottom: 5px;
	font-size: 12px;
	line-height: 1.5;
}
#chPassModal .valid-txt i {
	margin-right: 5px;
	color: #999;
}
#chPassModal .valid-txt.valid i {
	color: #5cb85c;
}
#chPassModal .valid-txt.error i {
	color: #d9534f;
}
#chPassModal .box-notif {
	background-color: #f5f5f5;
	padding: 15px;
	border-radius: 4px;
	margin-bottom: 0;
}
#chPassModal .box-notif h6 {
	margin-top: 0;
	margin-bottom: 10px;
	font-size: 13px;
}
#chPassModal .form-horizontal .form-group {
	margin-left: 0;
	margin-right: 0;
}
#chPassModal .modal-body {
	padding: 15px 20px;
}
</style>



