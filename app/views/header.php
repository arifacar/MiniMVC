<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <?php
        if (isset($getContent[0]["title"]))
            echo "<title>" . $getContent[0]["title"] . " - " . $Options["site_title"] . "</title>";
        else
            echo "<title>" . $Options["site_title"] . "</title>";
        ?>
        <meta name="description" content="<?php echo $Options["site_desc"]; ?>">
        <meta name="keywords" content="<?php echo $Options["site_keywords"]; ?>">
        <meta name="author" content="Arif Acar">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <link rel="stylesheet" href="<?php echo PUBLIC_URL ?>/css/style.css" >

    </head>
    <body>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">NAVI</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo SITE_URL . "/" . Session::get("lang"); ?>"><img src="<?php echo PUBLIC_URL ?>/images/logo.png"></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <?php
                        foreach ($getMenu as $menu) {
                            if ($menu["type"] == "1") { // ifsiz?                             
                                echo "<li><a href='" . SITE_URL . "/" . Session::get("lang") . "/" . $menu["permalink"] . "'>" . $menu["text"] . "</a></li>";
                            }
                        }
                        ?>
                    </ul>

                    <div class="pull-right">
                        <a href="<?php echo SITE_URL . "/en"; ?>">EN</a> | <a href="<?php echo SITE_URL . "/tr"; ?>">TR</a> 
                    </div>

                </div><!--/.nav-collapse -->
            </div>
        </nav>