<?php
include("connect.php");

require_once('session1.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	
	<!--link rel="stylesheet/less" href="../less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="../less/responsive.less" type="text/css" /-->
	<!--script src="../js/less-1.3.3.min.js"></script-->
	<!--append �#!watch� to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/alert.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
  <![endif]-->

  <link rel="shortcut icon" href="assets/img/calculator.png">

	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
    <title>Comments</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Print -->
	<link href="css/print.css" rel="stylesheet" type="text/css" media="print">
	
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->	 
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>
  <body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="span3">&nbsp;&nbsp;&nbsp;&nbsp;<img class="index_logo" height="45" width="100" src="assets/img/logosmall.png"></div>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                        
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;
				<?php
				//Check to see if the user is logged in.
			
				if(isset($_SESSION['fname']))
				{ 
				echo 
				"".$_SESSION['fname']. "&nbsp;".$_SESSION['lname']. " ";
				}

				?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
					<li>
                        <a href="manage_account.php"><i class="fa fa-users fa-lg"></i>&nbsp;Accounts</a>
                    </li>
					<li class="divider"></li>
                    <li>
                        <a href="session_logout.php"><i class="fa fa-fw fa-power-off"></i>&nbsp;Log Out</a>
                    </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        		<!--The side bar menu script goes in here-->
				<?php include("sidebarmenu.php"); ?>           
				<!--The side bar menu script goes in here-->            
            <!-- /.navbar-collapse -->
		</nav>
		
		
<div id="page-wrapper">
    <div class="container-fluid">
<div class="empty">

	<div class="box-header with-border">
		<h3 class="box-title">Select Appropriate Fields to To View Comments</h3><hr>
    </div>
	
	<!-- /.this contains the form section for selecting marks specifications-->		
	
    <form role="form" method="post"  name='form1'  action="" ">
		<div class="row" >
		
			<div class="col-xs-1" align='right'><label>Level:</label></div>
			<div class="col-xs-2">
				<select name="level"  class="form-control" >
					<option>O-Level</option>
					<option>A-Level</option>
				</select>
			</div>
			
			<div class="col-xs-1"></div>
			
			<div class="col-xs-1" align='right'><label>Type:</label></div>
			<div class="col-xs-2">
				<select name="type"  class="form-control" >
					<option>ClassTeacher</option>
					<option>HeadTeacher</option>
				</select>
			</div>

			<div class="col-xs-1"></div>

			<div class="col-xs-1">
			 <input type="submit" name="cmdsearch" value="Submit Details" class="btn btn-primary" />
			</div>
			
		</div>
	</form>
			<hr>
	</div>
	
<?php
if(isset($_POST['cmdsearch'])){
	$level = $_POST['level'];$type = $_POST['type'];
	//print $level.'==>'.$type.'<br>';
	//If O-Level is selected
	if(strtolower($level)=='o-level'){
		//If classTeacher comment is selected
		if(strtolower($type)=='classteacher'){
			
		}
		//If HeadTeacher comment is selected
		if(strtolower($type)=='headteacher'){
			
		}
	}
	//If A-Level is selected
	if(strtolower($level)=='a-level'){
		//If classTeacher comment is selected
		if(strtolower($type)=='classteacher'){
			echo "<center><u><h4>".strtoupper($level).'&nbsp;&nbsp;'.strtoupper($type).'&nbsp;&nbsp;COMMENTS.'."</h4></u></center>";
			?>
			<form method='POST'>	
			<div align=''>
				<div class="row">
					<div class="col-xs-1"><label>POINTS:</label></div>
				</div>
				<div class="row">
					<div class="col-xs-1" align='right'><label>From:</label></div>
					<div class="col-xs-1">
						<input type='number' class='form-control' name='from' min=0 max=20 />
					</div>
					<div class="col-xs-1" align='right'><label>To:</label></div>
					<div class="col-xs-1">
						<input type='number' class='form-control' name='to' min=0 max=20 />
					</div>
					<div class="col-xs-1" align='right'><label>Comment:</label></div>
					<div class="col-xs-5" align='left'>
					<input type='text' class='form-control' name='comment' placeholder='Class Teacher Comment Goes Here ...' size='60%' />
					</div>
					<div class="col-xs-1">
						<input type='submit' name='acteacher' value='Add Comment' class='btn btn-primary' />
					</div>
				</div>
			</div>
			</form>		
			<hr>
			<center><h3><u>List Of Available Comments.</u></h3></center>
			<table border=1 align='center' width='60%' class='tsyle'>
				<thead align='center'><tr><th>#</th><th>From</th><th>To</th><th>Comment</th></tr></thead>
				<tbody>
				<?php
				$i=1;
				$query=mysql_query("SELECT * FROM cteacher_alevel ORDER BY `from` ASC,`to` ASC",$con) or die(mysql_error());
				while($row=mysql_fetch_array($query)){
					$from=$row['from'];
					$to=$row['to'];
					$comment=$row['comment'];
					echo "<tr><td>".$i."</td><td>".$from."</td><td>".$to."</td><td>".$comment."</td></tr>";
					$i++;
				}
				?>
				</tbody>
			</table>
			<?php
		}
		//If HeadTeacher comment is selected
		if(strtolower($type)=='headteacher'){
			echo "<center><u><h4>".strtoupper($level).'&nbsp;&nbsp;'.strtoupper($type).'&nbsp;&nbsp;COMMENTS.'."</h4></u></center>";
			?>
			<form method='POST'>	
			<div align=''>
				
				<div class="row">
					<div class="col-xs-1"><label>PRINCIPAL PASSES: </label></div>
					
					<div class="col-xs-1">
						<input type='number' class='form-control' name='ppasses' min=0 max=3 />
					</div>
					
					<div class="col-xs-1" align='right'><label>Comment:</label></div>
					<div class="col-xs-5" align='left'>
					<input type='text' class='form-control' name='comment' placeholder='Class Teacher Comment Goes Here ...' size='60%' />
					</div>
					<div class="col-xs-1">
						<input type='submit' name='ahteacher' value='Add Comment' class='btn btn-primary' />
					</div>
				</div>
			</div>
			</form>		
			<hr>
			<center><h3><u>List Of Available Comments.</u></h3></center>
			<table border=1 align='center' width='60%' class='tsyle'>
				<thead align='center'><tr><th>#</th><th>PASSES</th><th>Comment</th></tr></thead>
				<tbody>
				<?php
				$i=1;
				$query=mysql_query("SELECT * FROM hteacher_alevel ORDER BY `ppasses` ASC",$con) or die(mysql_error());
				while($row=mysql_fetch_array($query)){
					$ppasses=$row['ppasses'];

					$comment=$row['comment'];
					echo "<tr><td>".$i."</td><td>".$ppasses."</td><td>".$comment."</td></tr>";
					$i++;
				}
				?>
				</tbody>
			</table>
			<?php
		}
	}
}
if(isset($_POST['acteacher'])){
	$from=$_POST['from'];$to=$_POST['to'];$comment=$_POST['comment'];
	//print $from.'==>'.$to.'==>'.$comment;
	$query=mysql_query("INSERT INTO cteacher_alevel (id,`from`,`to`,`comment`) VALUES ('','$from','$to','$comment')",$con) or die(mysql_error());
	if($query){
		header("location:comment_report.php");
	}
}
if(isset($_POST['ahteacher'])){
	$ppasses=$_POST['ppasses'];$comment=$_POST['comment'];
	//print $ppasses.'==>'.$comment;
	$query=mysql_query("INSERT INTO hteacher_alevel (id,`ppasses`,`comment`) VALUES ('','$ppasses','$comment')",$con) or die(mysql_error());
	if($query){
		header("location:comment_report.php");
	}
}	
	
?>	
</div>
	</div>
</div>		
			</div>
			<!-- /block -->
		</div>                   
<!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
	</nav>
    <!-- /#wrapper -->
    <!-- jQuery Version 1.11.0 -->
</body>

<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
<?php include('script.php'); ?>
</html>