<?php
include_once 'header.php'
?>


<div class="page-header theme-bg-dark py-5 text-center position-relative">
	<div class="theme-bg-shapes-right"></div>
	<div class="theme-bg-shapes-left"></div>
	<div class="container">
		<h1 class="page-heading single-col-max mx-auto">GIVE IT YOUR 200% AND Y'ALL WILL THRIVE!!</h1>
		<div class="page-intro single-col-max mx-auto">
			<b>If it's made by man it can be learnt and understood.</b>
		</div>
	</div>
</div><!--//page-header-->

<div class="page-content">
	<div class="container">
		<div class="docs-overview py-5">
			<div class="row justify-content-center">
				<?php
				require 'fetchteams.php';
				$data = team_details();				
				foreach ($data as $row):
					echo
						<<<ITEM
						<div class="col-12 col-lg-4 py-3">
							<div class="card shadow-sm">
								<div class="card-body">
									<h5 class="card-title mb-3">
										<span class="theme-icon-holder card-icon-holder me-2 material-symbols-outlined" style="background-color:#871b1c ; color:white;">
											$row[icon]
										</span><!--//card-icon-holder-->
										<span class="card-title-text" style="font-size: 18px;">
											$row[name]
										</span>
									</h5>
									<div class="card-text">
										$row[description]
									</div>
									<a class="card-link-mask" href=$row[drive_link]></a>
								</div><!--//card-body-->
							</div><!--//card-->
						</div>
					ITEM;
				endforeach; ?>
			</div><!--//row-->
		</div><!--//container-->
	</div><!--//container-->
</div><!--//page-content-->


<!-- <div class="page-content">
		<div class="container">
			<div class="docs-overview py-5">
				<div class="row justify-content-center">
					<?php
					require __DIR__ . '/fetchteams.php';
					$data = team_details(); foreach ($data as $row):
						echo
							<<<ITEM
						<div class="col-12 col-lg-4 py-3">
							<div class="card shadow-sm">
								<div class="card-body">
									<h5 class="card-title mb-3">
										<span class="theme-icon-holder card-icon-holder me-2 material-symbols-outlined">
											$row[icon]
										</span><!--//card-icon-holder-->
										<span class="card-title-text" style="font-size: 18px;">
											$row[name]
										</span>
									</h5>
									<div class="card-text">
										$row[description]
									</div>
									<a class="card-link-mask" href="teampage.php"></a>
								</div><!--//card-body-->
							</div><!--//card-->
						</div>
						ITEM;
					endforeach; ?>
				</div><!--//row-->
</div><!--//container-->
</div><!--//container-->
</div><!--//page-content-->
-->
<section id="section_apply" class="cta-section text-center py-5 theme-bg-dark position-relative">
	<div class="theme-bg-shapes-right"></div>
	<div class="theme-bg-shapes-left"></div>
	<div class="container">
		<h3>Apply Now</h3>
		<br><br>
		<a class="btn btn-light" href="applyja.php">Junior Academy</a>
		<a class="btn btn-light" href="applyacad.php">Gearbox Academy </a>
	</div>
	</div>
</section><!--//cta-section-->

<footer class="footer">
	<div class="footer-bottom text-center py-5 theme-bg-dark">
		<div class="theme-bg-shapes-right"></div>
		<div class="theme-bg-shapes-left"></div>
		<ul class="social-list list-unstyled pb-4 mb-0">
			<li class="list-inline-item"><a href="https://github.com/ngugiephy/ngugiephy.github.io.git "><i
						class="fab fa-github fa-fw"></i></a></li>
			<li class="list-inline-item"><a href=" https://twitter.com/GearboxAcademy?s=20&t=ie_UbQDmx79_V-rkbQI9KA "><i
						class="fab fa-twitter fa-fw"></i></a></li>
			<li class="list-inline-item"><a href="https://ke.linkedin.com/company/gearbox-kenya "><i
						class="fab fa-linkedin fa-fw"></i></a></li>
			<li class="list-inline-item"><a href=" https://www.facebook.com/GearboxKE/"><i
						class="fab fa-facebook-f fa-fw"></i></a></li>
			<li class="list-inline-item"><a href="https://www.instagram.com/gearbox_ke/?hl=en "><i
						class="fab fa-instagram fa-fw"></i></a></li>
			<li class="list-inline-item"><a href="http://www.gearbox.co.ke/"><i class="fa fa-home"></i></a></li>
		</ul><!--//social-list-->
	</div>
</footer>
<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->

<!-- Javascript -->
<script src="assets/plugins/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Page Specific JS -->
<script src="assets/plugins/smoothscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
<script src="assets/js/highlight-custom.js"></script>
<script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>
<script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script>
<script src="assets/js/docs.js"></script>

</body>

</html>