<?php
function siteHead($title){
    ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $title; ?> | Pozemkové úpravy</title>

        <!-- Login CSS -->
        <link href="css/login.css" rel="stylesheet">

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/business-casual.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="css/timeline.css" rel="stylesheet">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <?php
}
?>

<?php
function sectionHeading($title, $subtitle){
    ?>
    <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center"><?php echo $title; ?>
            <strong><?php echo $subtitle; ?></strong>
        </h2>
        <hr>
    </div>
    <?php
}
?>


<?php
function tabbedNav($active_index) {
   ?>
    <div class="col-md-12" style="margin-bottom: 2%;">
        <ul class="nav nav-tabs">
            <li class="<?php if($active_index == 0){echo "active";} ?>" role="presentation" >
                <a class="text-success" href="about.php#content">
                    Všeobecne
                </a>
            </li>
            <li class="<?php if($active_index == 1){echo "active";} ?>" role="presentation" >
                <a class="text-success" href="about1.php#content">
                    JPÚ DNV A ZB
                </a>
            </li>
            <li class="<?php if($active_index == 2){echo "active";} ?>" role="presentation" >
                <a class="text-success" href="about2.php#content">
                    Sektory
                </a>
            </li>
            <li class="<?php if($active_index == 3){echo "active";} ?>" role="presentation" >
                <a class="text-success" href="timeline.php#content">
                    Časová os
                </a>
            </li>
            <li class="<?php if($active_index == 4){echo "active";} ?>" role="presentation" >
                <a class="text-success" href="about4.php#content">
                    Územný plán
                </a>
            </li>
        </ul>
    </div>
    <?php
}
?>

<?php
function tabbedContactNav($active_index) {
    ?>
    <div class="col-md-12" style="margin-bottom: 2%;">
        <ul class="nav nav-tabs">
            <li class="<?php if($active_index == 0){echo "active";} ?>" role="presentation" >
                <a class="text-success" href="contact.php#content">
                    Kontakty
                </a>
            </li>
            <li class="<?php if($active_index == 1){echo "active";} ?>" role="presentation" >
                <a class="text-success" href="qanda.php#content">
                    Často kladené otázky
                </a>
            </li>
            <li class="<?php if($active_index == 2){echo "active";} ?>" role="presentation" >
                <a class="text-success" href="ask.php#content">
                    Opýtajte sa nás
                </a>
            </li>
        </ul>
    </div>
    <?php
}
?>
