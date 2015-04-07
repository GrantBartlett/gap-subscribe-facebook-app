<?php
    require_once('_include/Language.php');
    require_once('_include/Strings.php');
    $locale = new Language();
    $strings = new Strings();
    $contentArr = $strings->getStrings();
    $contentArr = $contentArr[$locale->getLanguage()];
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GAP</title>

    <link rel="stylesheet" href="dist/css/main.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body <?php if($locale->getLanguage() == 'ar_AR') echo 'class="rtl"';?> >

<div class="container">
    <section class="app" role="main">
        <div class="row header">
            <div class="col-md-8 col-md-offset-2">

                <div class="main">
                    <img src="dist/images/main.jpg" alt="GAP feature">

                    <?php foreach($contentArr as $string): ?>

                    <section class="form">
                        <div class="row">
                            <div class="col-md-12">

                                <form action="http://smswmedia.createsend.com/t/d/s/iyithu/" method="post" id="form">

                                    <div class="form-group">
                                        <label for="fieldEmail"><?php echo $string['form']['email']; ?></label><br/>
                                        <input id="fieldEmail" name="cm-iyithu-iyithu" type="email" data-parsley-type="email" data-parsley-required-message="<?php echo $string['validate']['invalid']; ?>" class="form-control" placeholder="<?php echo $string['form']['email-placeholder']; ?>" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="confirmEmail"><?php echo $string['form']['email-confirm']; ?></label><br/>
                                        <input id="confirmEmail" data-parsley-equalto="#fieldEmail" type="email" data-parsley-type="email" data-parsley-required-message="<?php echo $string['validate']['confirm']; ?>" class="form-control" placeholder="<?php echo $string['form']['email-confirm']; ?>" required>
                                    </div>

                                    <p>
                                        <button type="submit" class="btn btn-primary text-uppercase"><?php echo $string['form']['submit']; ?>
                                            <i class="fa fa-play"></i>
                                        </button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </section>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script src="dist/js/app.min.js" type="text/javascript"></script>
</body>
</html>