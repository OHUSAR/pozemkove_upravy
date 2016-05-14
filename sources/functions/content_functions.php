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
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

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
                    Základné informácie
                </a>
            </li>
            <li class="<?php if($active_index == 1){echo "active";} ?>" role="presentation" >
                <a class="text-success" href="about1.php#content">
                    JPU DNV A ZB
                </a>
            </li>
            <li class="<?php if($active_index == 2){echo "active";} ?>" role="presentation" >
                <a class="text-success" href="about2.php#content">
                    Sektory
                </a>
            </li>
        </ul>
    </div>
    <?php
}
?>