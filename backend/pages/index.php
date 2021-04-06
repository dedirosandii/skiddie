<!DOCTYPE html>
<html>

<head>
	<?php include 'layouts/style.php'; ?>
</head>

<body>
	<!-- page luar -->
	<div class="page">

		<!-- navbar top -->
		<?php include 'layouts/navbar-top.php'; ?>

		<!-- page content dalam -->
		<div class="page-content d-flex align-items-stretch">
			<!-- Side Navbar -->
			<?php include 'layouts/sidebar.php'; ?>
			<!-- end sidebar -->

			<!-- content dashboard -->
			<div class="content-inner">
				<!--dashboard content  -->
				<?php include 'layouts/dashboard.php'; ?>

				<!-- Page Footer-->
				<?php include 'layouts/footer.php'; ?>
			</div>
			<!-- content dashboard -->
		</div>
		<!-- end page content dalam -->

	</div>
	<!-- end page luar -->

	<!-- JavaScript files-->
	<?php include 'layouts/script.php'; ?>
	<!-- end javascript files -->
</body>

</html>