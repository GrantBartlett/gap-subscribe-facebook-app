<div class="container">
    <section class="app" role="main">
        <div class="row header">
            <div class="col-md-8 col-md-offset-2">

                <div class="main">

	                <div class="logo text-left">
		                <p>
	                        <img src="dist/images/logo.jpg" alt="GAP logo" width="91" height="91" class="img-responsive">
						</p>
	                </div>

	                <div class="thanks text-center">
		                <p>
	                        <img src="dist/images/thanks.jpg" alt="thank you message" width="292" height="75" style="max-width:100%;">
						</p>
	                </div>

	                <?php foreach ( $contentArr as $string ): ?>
		                <div class="block-center text-center">
			                <p>
				                <a href="https://www.facebook.com/GapSaudiArabia" class="btn btn-primary text-uppercase" target="_blank">
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