


{include file='user/header_info.tpl'}
	<main class="content">
		<div class="container">
			<section class="content-inner margin-top-no">
				<div class="ui-card-wrap">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<div class="text-center">
								<div id="ss-qr-n"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</main>
{include file='user/footer.tpl'}
<script src="/assets/public/js/jquery.qrcode.min.js"></script>
<script>
	var text_qrcode2 = '{$ssqr_s_new}';
	jQuery('#ss-qr-n').qrcode({
		"text": text_qrcode2
	});
</script>
