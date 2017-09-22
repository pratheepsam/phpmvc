<!doctype html>
<html>
<head>
    <title>Test</title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

   <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">-->
    <script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.2.3/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/js/dataTables.editor.min.js"></script>


</head>

<body>
<?php Session::init()?>
<div id="header">Header
    <br>
    <a href="index">Index</a>
    <a href="help">Help</a>
    <?php if (Session::get('loggedIn') == true){ ?>
        <a class="link" href="dashboard/logout" style="text-decoration:none">logout</a>
    <?php }else{ ?>
        <a class="link" href="login" style="text-decoration:none">login</a>
    <?php } ?>

</div>
<div id="content">
