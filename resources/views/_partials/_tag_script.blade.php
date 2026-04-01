<script src="{{ assets_url('js/vendor/jquery.min.js') }} "></script>
<script src="{{ assets_url('js/vendor/bootstrap.min.js') }} "></script>
<script src="{{ assets_url('js/vendor/vue.min.js') }} "></script>
<script src="{{ assets_url('js/vendor/validator.js') }} "></script>
<script src="{{ assets_url('js/vendor/select2/select2.min.js') }} "></script>

<script src="{{ assets_url('js/min/app.js') }} "></script>
<script src="{{ assets_url('js/min/pushstate.min.js') }} "></script>
<script src="{{ assets_url('js/min/autoNumeric.min.js') }} "></script>
<script src="{{ assets_url('js/min/lc_switch.min.js') }} "></script>
<script src="{{ assets_url('js/min/jspdf.min.js') }} "></script>
<script src="{{ assets_url('js/crypto-js.js') }} "></script>
<script src="{{ assets_url('js/vendor/moment-with-locales.js') }} "></script>
<script src="{{ assets_url('js/vendor/html2canvas.js') }} "></script>
<script src="{{ assets_url('js/vendor/fullcalendar.min.js') }} "></script>

<script src="{{ assets_url('js/bootstrap-datepicker.js') }} "></script>
<script src="{{ assets_url('js/jquery.dataTables.min.js') }} "></script>
<script src="{{ assets_url('js/dataTables.select.min.js') }} "></script>
<script src="{{ assets_url('js/dataTables.responsive.js') }} "></script>
<script src="{{ assets_url('js/bootstrap.min.js') }} "></script>
<script src="{{ assets_url('js/datetime.js') }} "></script>
<script src="{{ assets_url('js/jquery.form-validator.min.js') }} "></script>
<script src="{{ assets_url('js/jquery-confirm.min.js') }} "></script>
<script src="{{ assets_url('js/vendor/jsTree/jstree.min.js') }} "></script>
<script src="{{ assets_url('js/dataTables.buttons.min.js') }} "></script>
<script src="{{ assets_url('js/min/dataTables.checkboxes.min.js') }} "></script>
<script src="{{ assets_url('js/min/jquery.mask.min.js') }} "></script>
<script src="{{ assets_url('js/jquery.alphanum.js') }} "></script>

<script src="{{ assets_url('js/mask.js') }} "></script>
<script src="{{ assets_url('js/FileSaver.js') }} "></script>

<script type="text/javascript">
	var api_url = "{{ route('search.getAPIData') }}";
	var _token = '{{ csrf_token() }}';
	window.setTimeout(function() {
		$(".alert.alert-danger").fadeOut(500, 0).slideUp(500, function(){
			$(this).remove();
		});
	}, 5000);

	$.ajaxSetup({
	   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
	});
	//disable browser BACK button---
	(function (global) {

		if(typeof (global) === "undefined") {
			throw new Error("window is undefined");
		}

		var _hash = "!";
		var noBackPlease = function () {
			global.location.href += "#";

			// making sure we have the fruit available for juice (^__^)
			global.setTimeout(function () {
				global.location.href += "!";
			}, 50);
		};

		global.onhashchange = function () {
			if (global.location.hash !== _hash) {
				global.location.hash = _hash;
			}
		};

		global.onload = function () {
			noBackPlease();

			// disables backspace on page except on input fields and textarea..
			document.body.onkeydown = function (e) {
				var elm = e.target.nodeName.toLowerCase();
				if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
					e.preventDefault();
				}
				// stopping event bubbling up the DOM tree..
				e.stopPropagation();
			};
		}

	})(window);

	
</script>
<script type="text/javascript">
	function save_pdf() {
     window.scrollTo(0, 0);

		setTimeout(function(){

    const element = document.querySelector('.content-wrapper');

    html2canvas(element, {
        scale: 2,
        useCORS: true,
        scrollX: 0,
        scrollY: 0,
        x: 0,
        y: 0,
        windowWidth: element.scrollWidth,
        windowHeight: element.scrollHeight,
				onrendered: function(canvas) {

            const imgData = canvas.toDataURL('image/png');

            const pdf = new jsPDF('p', 'mm', 'a4');

            const pageWidth = 210;
            const pageHeight = 297;

            const imgWidth = pageWidth;
            const imgHeight = canvas.height * pageWidth / canvas.width;

            let position = 0;
            let page = 0;

            while (position < imgHeight) {

                if (page > 0) pdf.addPage();

                pdf.addImage(
                    imgData,
                    'PNG',
                    0,
                    -position,
                    imgWidth,
                    imgHeight
                );

                position += pageHeight;
                page++;
					}

            const today = new Date();
            const dd = String(today.getDate()).padStart(2, '0');
            const MM = String(today.getMonth() + 1).padStart(2, '0');
            const yyyy = today.getFullYear();
            const hh = String(today.getHours()).padStart(2, '0');
            const mi = String(today.getMinutes()).padStart(2, '0');
            const ss = String(today.getSeconds()).padStart(2, '0');

            pdf.save(`${yyyy}${MM}${dd}${hh}${mi}${ss}.pdf`);
				}
			});
}, 800);
	}

	function getNextUserData(noRef) {

		var value = {
			referenceNo: noRef
		};

		var url_action = 'searchPendingTaskByReferenceNo';
		var action = 'SEARCH';
		var menu = 'MNU_GPCASH_PENDING_TASK';
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
				var data = JSON.parse(data);
				console.log(data);
				if (data.status=="200") {
					var detail = data.tasks;

					oTable_next_user.clear();
					//console.log(detail);
					$.each(detail, function (idx, obj) {
						oTable_next_user.row.add([
							'<span id="user_name">'+obj.userCode+' - '+obj.userName+'</span>',
							'<span id="user_level">'+data.approvalLvName+'</span>'
						]).draw(true);
					});

				} else {
					flash('warning', data.message);
				}


			}, error: function (xhr, ajaxOptions, thrownError) {
				var msg = '{{trans('form.conn_error')}}';
				flash('warning', msg);
				console.log(xhr.status + " ," + " " + ajaxOptions + ", " + thrownError);
			},
			complete: function (data) {

			}
		});
	}


	function calculateAspectRatioFit(srcWidth, srcHeight, maxWidth, maxHeight) {
		var ratio = Math.min(maxWidth / srcWidth, maxHeight / srcHeight);
		var rtnWidth = srcWidth*ratio;
		var rtnHeight = srcHeight*ratio;

		return { width: rtnWidth, height: rtnHeight };
	}
</script>
<script>
	//spinner
	var opts = {};

</script>

@yield('scripts')
<!-- <script src="{{ assets_url('js/sticky.js') }} "></script> -->
<script src="{{ assets_url('js/min/script.min.js') }} "></script>
