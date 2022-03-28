<?php
error_reporting(0);
include("config.php");
$is_stacked = isset($_REQUEST['stacked']);
$sql = "SELECT * FROM ".$SETTINGS["data_table"]." ORDER BY id DESC";
$result = $mysqli->query ($sql) or die ('request "Could not execute SQL query" '.$sql);
$rows = array();
while ($row = $result->fetch_assoc()){
  $rows[] = $row;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Team Page Script</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<center>
  <a href="index.php">View as list</a> &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="index.php?stacked">View stacked</a>
</center><br /><br />

<ul id="member-list" class="member-list<?php echo $is_stacked?' stacked':''; ?>">
            <?php foreach ($rows AS $v): ?>
            <li>
                <?php if (!empty($v['photo'])): ?>
                    <img class="photo" src="<?php echo $v['photo']; ?>">
                <?php endif; ?>
                <div class="title"><?php echo $v['name']; ?></div>
                <p><?php echo $v['position']; ?>, <?php echo $v['company']; ?></p>
                <p><?php echo $v['phone']; ?></p>
                <p><a href="mailto:<?php echo $v['email']; ?>"><?php echo $v['email']; ?></a></p>
                <p><a href="<?php echo $v['website']; ?>" target="_blank"><?php echo $v['website']; ?></a></p>
                <ul class="social-link">
                   <?php if ($v['linkedin']<>'') { ?><li><a href="<?php echo $v['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a></li><?php } ?>
                   <?php if ($v['facebook']<>'') { ?><li><a href="<?php echo $v['facebook']; ?>" target="_blank"><i class="fa fa-facebook-square"></i></a></li><?php } ?>
                   <?php if ($v['google']<>'') { ?><li><a href="<?php echo $v['google']; ?>" target="_blank"><i class="fa fa-google-plus-square"></i></a></li><?php } ?>
                   <?php if ($v['twitter']<>'') { ?><li><a href="<?php echo $v['twitter']; ?>" target="_blank"><i class="fa fa-twitter-square"></i></a></li><?php } ?>
                </ul>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php if ($is_stacked): ?>
        <div class="prev-next">
            <a id="prev" href="#prev"><i class="fa fa-caret-left"></i></a>
            <a id="next" href="#next"><i class="fa fa-caret-right"></i></a>
        </div>
        <?php endif; ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/main.js"></script>

    </body>
</html>
