<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="height:100%;">

	<div class="h-100 d-flex align-items-center justify-content-center text-center">
		<h1 class="text-success m-3" id="">Successful Application</h1>

		<div class="row">
			<div class="">
				<p> Your Application for GearBox Academy has been received.<br>
					Check the application details and status by clicking the <strong>Details</strong> button or return
					to the home page.
				</p>
			</div>

			<div class="d-grid gap-2 col-6 mx-auto">
				<a href="applicant.php?p=apc<?php echo $id; ?>sc">
					<button class="btn btn-outline-dark">Details</button></a>
				<a href="index.php">
					<button class="btn btn-outline-dark">Home</button></a>
			</div>

		</div>
	</div>



	</div>

</body>

</html>