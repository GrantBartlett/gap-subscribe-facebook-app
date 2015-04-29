<div class="container-fluid">
    <section class="app" role="main">
        <div class="row header">
            <div class="col-md-8 col-md-offset-2">

                <div class="main">
	                <?php foreach ( $contentArr as $string ): ?>
	                <div class="logo text-left">
		                <p>
	                        <img src="dist/images/logo.jpg" alt="GAP logo" width="91" height="91" class="img-responsive">
						</p>
	                </div>

	                <div class="thanks text-center">
		                <p>
	                        <img src="<?php echo $string['images']['thanks']; ?>" alt="thank you message" width="292" height="75">
						</p>
	                </div>

	                <div class="block-center text-center">
		                <p>
			                <a href="https://www.facebook.com/GapSaudiArabia" class="btn btn-primary text-uppercase submit" target="_blank">
				                <?php echo $string['thanks']['return']; ?>
			                </a>
		                </p>
	                </div>
	                <?php endforeach; ?>

                </div>

            </div>
        </div>
    </section>
</div>