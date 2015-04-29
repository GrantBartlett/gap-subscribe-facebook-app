<?php
require_once( '_include/Language.php' );
require_once( '_include/Strings.php' );
$locale     = new Language();
$strings    = new Strings();
$contentArr = $strings->getStrings();
$contentArr = $contentArr[ $locale->getLanguage() ];
?>

<?php include_once( '_include/header.php' ); ?>

<body <?php if ( $locale->getLanguage() == 'ar_AR' ) { echo 'class="rtl"'; } ?>>

<?php foreach ( $contentArr as $string ): ?>

<div class="container-fluid">
	<section class="app feature form-main" role="main">

		<div class="row header">
			<div class="col-md-12">

				<div class="main">

					<section class="logo">
						<img src="dist/images/logo.jpg" width="91" height="91" alt="GAP logo" class="img-responsive">
					</section>

					<section class="intro">
						<img src="<?php echo $string['images']['intro']; ?>" alt="Be in the know" width="395" height="45" class="img-responsive">
						<br>

						<p>
							<?php echo $string['intro']['text']; ?>
						</p>
					</section>

					<section class="form">
						<div class="row">
							<div class="col-md-12">

								<form action="https://smswmedia.createsend.com/t/d/s/iyithu/" method="post" id="form">
									<div class="form-group">
										<label for="fieldEmail"><?php echo $string['form']['email']; ?></label><br/>
										<input id="fieldEmail" name="cm-iyithu-iyithu" type="email" data-parsley-type="email" data-parsley-required-message="<?php echo $string['validate']['invalid']; ?>" class="form-control" placeholder="<?php echo $string['form']['email-placeholder']; ?>" required>
									</div>

									<div class="form-group">
										<label for="confirmEmail"><?php echo $string['form']['email-confirm']; ?></label><br/>
										<input id="confirmEmail" data-parsley-equalto="#fieldEmail" type="email" data-parsley-type="email" data-parsley-required-message="<?php echo $string['validate']['confirm']; ?>" class="form-control" placeholder="<?php echo $string['form']['email-confirm-placeholder']; ?>" required>
									</div>

									<div class="form-group">
										<label for="fieldjilrdu"><?php echo $string['form']['mobile']; ?></label><br/>
										<input id="fieldjilrdu" name="cm-f-jilrdu" type="text" data-parsley-type="number" data-parsley-required-message="<?php echo $string['validate']['invalid-mobile']; ?>" class="form-control" placeholder="<?php echo $string['form']['mobile-placeholder']; ?>" required>
									</div>
									<p>
										<button type="submit" class="btn btn-primary text-uppercase submit"><?php echo $string['form']['submit']; ?></button>
									</p>
								</form>

							</div>
						</div>
					</section>


				</div>
			</div>
		</div>
	</section>
</div>

<section class="form-response hidden">
	<?php include_once('thanks.php'); ?>
</section>

<?php endforeach; ?>
<?php include_once( '_include/footer.php' ); ?>