<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="<?php echo ADMIN_PUBLIC_URL ?>/css/style.css" >    
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <title>MiniMVC Admin</title>    
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12"><h1>MiniMVC Admin</h1></div>
            </div>    
            <div class="row">
                <div class="col-sm-3">
                    <div class="sidebar-nav">
                        <div class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <span class="visible-xs navbar-brand">Sidebar menu</span>
                            </div>
                            <div class="navbar-collapse collapse sidebar-navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="<?php echo PANEL_URL; ?>">MiniMVC Dashboard</a></li>
                                    <li><a href="<?php echo PANEL_URL."/content"; ?>">Add Content</a></li>
                                    <li><a href="<?php echo PANEL_URL."/contents"; ?>">List of Contents <span class="badge">2</span></a></li>
                                    <li><a href="<?php echo ADMIN_URL."/logout"; ?>">Logout</a></li>
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </div>
                </div>        