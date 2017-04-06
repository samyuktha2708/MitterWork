
<!DOCTYPE HTML>
<html>
<head>
<title>View</title>
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Transparent Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css' />
<!--web-fonts-->
<!--  including bootstrap files  -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<style>
    table ,tr,td{
        color:white!important;
    }
    body{
        background-repeat: repeat-y;
    }
</style>
</head>

<body >
<!-- Bread crumbs to return to site -->
    <div class="col-md-2">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
  <li class="breadcrumb-item active">View</li>
</ol>    
    </div>
    
<!--header-->
	<div class="header-w3l">
		<h1> Nearest Public Services</h1>
	</div>
<!--//header-->
<?php// print_r($data); ?>
<div class="container">
<table class="table table-border table-bordered"  >
    <tr>
 <th>Service Name  </th>
 <th> Organization </th>
 <th> Description </th>
 <th> Type </th>
    </tr>
    
    <?php 
    // the data array from the view and loop it through in case of result
 foreach($data as $d){ ?>
    <tr style="text-align: left"> 
 <td><?php		echo  $d->service_name ;?></td>
    <td><?php		echo  $d->organization ;?></td>
    <td><?php		echo  $d->description ;?></td>
    <td><?php		echo  $d->type;?></td>
 </tr>
 <?php }
 ?> 
</table>    
</div>

<!--main-->

<!--//main-->

<!--footer-->
<!--<div class="footer" >
	<p>&copy; 2017 Transparent Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>-->

</body>
</html>