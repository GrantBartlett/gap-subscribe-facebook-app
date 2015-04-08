<?php
    require_once('_include/Language.php');
    require_once('_include/Strings.php');
    $locale = new Language();
    $strings = new Strings();
    $contentArr = $strings->getStrings();
    $contentArr = $contentArr[$locale->getLanguage()];
?>

<?php include_once('_include/header.php'); ?>

<body <?php if($locale->getLanguage() == 'ar_AR') echo 'class="rtl"';?> >

<div class="container">
    <section class="app" role="main">
        <div class="row header">
            <div class="col-md-8 col-md-offset-2">

                <div class="main">

	                <div class="logo text-left">
		                <p>
	                        <img src="dist/images/logo.jpg" alt="GAP logo">
						</p>
	                </div>

	                <div class="thanks text-center">
		                <p>
	                        <img src="dist/images/thanks.jpg" alt="thank you message">
						</p>
	                </div>

	                <?php foreach ( $contentArr as $string ): ?>
		                <div class="block-center text-center">
			                <p>
				                <a href="https://www.facebook.com/GapSaudiArabia" class="btn btn-primary text-uppercase">
					                <?php echo $string['thanks']['return']; ?>
					                <i class="fa fa-play"></i>
				                </a>
			                </p>
		                </div>
	                <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>
</div>

<?php include_once('_include/footer.php'); ?>