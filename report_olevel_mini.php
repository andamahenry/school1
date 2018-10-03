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
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
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
    <title>Report</title>

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
	
	<!-- Print -->
	<link href="css/report.css" rel="stylesheet" type="text/css" >
	
	
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
		<h3 class="box-title">Select Appropriate Fields to To View Mini-Report</h3><hr>
    </div>
	
	<!-- /.this contains the form section for selecting marks specifications-->		
	
     <form role="form" method="post"  name='form1'  action="" ">
		   <div class="container">
		   
		<div class="row">
        <div class="col-xs-2">
		<label for="exampleInputEmail1">Term</label>
		<select name="term"  class="form-control" >
		<?php
			$terms = mysql_query("SELECT * FROM terms ORDER BY name ASC") or die(mysql_error());
			while($row = mysql_fetch_array($terms)){
			?>
				<option><?php echo $row['name']?></option>
			<?php	
			}
		?>
		</select>
		
        </div>
			<div class="row">

		   <div class="col-xs-2">
		   <label for="exampleInputEmail1">Class</label>
			<select name="class"  class="form-control" >
			<?php 
				$query=mysql_query('SELECT * FROM classes WHERE abbr!=5 AND abbr!=6 ORDER BY name ASC') or die(mysql_error());
				while ($row=mysql_fetch_array($query)){
				$name=$row['name'];
				?>	
					<option><?php echo $name; ?></option>
				<?php						
				} 				
			?>						
			</select>
			 
			</div>
						
			<div class="col-xs-2">
		   <label for="exampleInputEmail1">Report Type</label>
			  <select name="report_type"  class="form-control" >
				<?php 
				//sql query code goes here
				$query=mysql_query("SELECT name FROM report_types WHERE category='mini'",$con) or die(mysql_error());
				while ($row=mysql_fetch_array($query)){
					$type=$row['name'];
				?>	
					<option><?php echo $type; ?></option>
				<?php						
				}						
				?>
				
			  </select>
			 
			</div>
					
			<div class="col-xs-2">
			<label for="exampleInputEmail1">Academic Year</label>
			  <select name="year"  class="form-control" >
				<option><?php echo $Year; ?></option>
			  </select>
			</div>
			<div class="col-xs-1" align='center'>
			<br>
				<input type="submit" name="cmdsearch" value="Submit Details" class="btn btn-primary" />
			</div>
			<!-- div class="col-xs-2">
			<label for="exampleInputEmail1"></label>
			  <select name="year"  class="form-control" >
				<option><?php //echo $Year; ?></option>
			  </select>
			 
			</div -->
					
			</div>
		</div>

            </form>
			<hr>
	</div>
</div>
<!--List of student names in selected class-->
<!--THIS DIV IS TO LEAVE THE FIRST PAGE EMPTY!-->
						<div class="printableArea"><div class='break' /></div>
	
<?php
if(isset($_POST['cmdsearch'])){
global $term,$class,$report_type,$year,$stream;
	$term = $_POST['term'];$class = $_POST['class'];$report_type = $_POST['report_type'];$year = $Year;$stream='';
	
	//check for updates in the marks table then decide whether to calculate new positions or use the las updates
	function position_verifier($typ,$trm,$clss){
		include("connect.php");
		//$typ = ($typ);
		//Get last activity on the specific type of marks
		$query1=mysql_query("SELECT MAX(time_stamp) AS tlogs FROM logs WHERE year='$Year' AND term='$trm' AND class='$clss'",$con) or die(mysql_error());
		$query2=mysql_query("SELECT MAX(time_stamp) AS tmarks FROM positions_mini WHERE type='$typ' AND year='$Year' AND term='$trm' AND class='$clss'",$con) or die(mysql_error());
		while($row1 = mysql_fetch_array($query1)){$t_pos = $row1['tlogs'];}
		while($row2 = mysql_fetch_array($query2)){$t_marks = $row2['tmarks'];}
		
		//$diff1 = (strtotime($t_pos) - strtotime($t_marks));
		$diff2 = (strtotime($t_marks) - strtotime($t_pos));
		return $diff2;
	}
	//Position sanitizer
	function position($number){
		$number2 = ($number + 1);
		$ends = array('th','st','nd','rd','th','th','th','th','th','th');
		if (($number2 %100) >= 11 && ($number2%100) <= 13){
			$abbreviation ='th';
		}else{
			$abbreviation = $ends[$number2 % 10];
		}
		//return $number2.$abbreviation;
		return $number2.' <sup>'.$abbreviation.'</sup>';
	}
	
	//Marks sanitizer function
	global $std_mark,$grade,$point,$comment;
	function markSanitizer($mrk){//function that creates spaces and dashes for optional and missed subjects
		$mk = $mrk;
		global $std_mark;
		if($mk==-1){
			$std_mark = '__';
		}if($mk==-2){
			$std_mark = '';
		}
		if($mk==''){
			$std_mark = '';
		}
		if($mk!=-1 AND $mk!=-2 AND $mk!='' AND $mk!=NULL){
			$std_mark = $mk;
		}
		if($mk>=0 AND $mk<=9 AND $mk != NULL){
			$std_mark = '0'.$mk;
		}
		return $std_mark;
	}
	function aggFunction($avg_mks){//function that calculates aggregates
		require "connect.php";
		global $grade,$point,$comment;
		$query_1=mysql_query("select * FROM grading_olevel ",$con)or die(mysql_error());
		while($row=mysql_fetch_array($query_1)){
			$from = $row['fro'];
			$to = $row['max'];
			$grade1 = $row['grade'];
			$point1 = $row['points'];
			$comment1 = $row['comment'];
			
			if ($avg_mks >= $from && $avg_mks <= $to) {
				$grade = $grade1 AND $point = $point1 AND $comment = $comment1 ;
			}
		}
		if($avg_mks<0 OR $avg_mks>100){
			$grade = 'x' AND $point = '__' AND $comment = 'Missed' ;;
		}
		return array($grade,$point,$comment);//returns array of grades and points
	}
	function gradeFunction($total_agg){
		global $division;
		require('connect.php');
		$div_agg = $total_agg;
		$agg_query = mysql_query("SELECT * FROM hteacher_comments",$con) or die(mysql_error());
		while($row = mysql_fetch_array($agg_query)){
			$from = $row['fro'];
			$to = $row['max'];
			$division1 = $row['division'];
			$ht_comment = $row['comment'];
			if ($div_agg >= $from && $div_agg <= $to) {
				$division = $division1 AND $hteacher_comment = $ht_comment;
			}
		}
		return array($division,$hteacher_comment);
	}
	function subjectTeacher($subj_name,$class){
		require 'connect.php';
		$teacher_query = mysql_query("SELECT initials FROM subject_teachers WHERE subject='$subj_name' AND class='$class'",$con) or die(mysql_error());
		if(mysql_num_rows($teacher_query) > 0){
			while($row1 = mysql_fetch_array($teacher_query)){
				$initials = $row1['initials'];
			}
			return $initials;
		}else{
			$initials = '';
			return $initials;
		}
	}
	function classTeacher($class){
		require 'connect.php';
		$teacher_query = mysql_query("SELECT name FROM class_teachers WHERE class='$class'",$con) or die(mysql_error());
		if(mysql_num_rows($teacher_query) > 0){
			while($row1 = mysql_fetch_array($teacher_query)){
				$class_teacher = $row1['name'];
			}
			return $class_teacher;
		}else{
			$class_teacher = '';
			return $class_teacher;
		}
	}
	/*function position_sanitizer(){
		
	}*/
	
	//Include position calculator script for generating student positions
	//include("position_cal_mini.php");
	//positions($sno);
	//select database table for each exam type
	if(strtolower($report_type)=='b.o.t'){$marks_table = "marks_olevel_bot" AND $requirements = '';}
	if(strtolower($report_type)=='mid'){$marks_table = "marks_olevel_mot" AND $requirements = '';}
	if(strtolower($report_type)=='e.o.t'){$marks_table = "marks_olevel_eot" AND $requirements = 'REQUIREMENTS: Refer To The Circular.';}
	//if(strtolower($exam_type)=='progressive'){$marks_table = "marks_olevel";}
	
	//Deside whether there is need to calculate positions or just generate the reports
	if(position_verifier($report_type,$term,$class) <= 0){
		header("location:position_cal_mini.php?term=$term&class=$class&report_type=$report_type");
	}
	//continue with generating the reports if the positions are up-to-date
	$subject_array=array();//create empty array of subjects
	$subject_abbr_array=array();//create empty array of subject abbr
	
	//Query for subjects from database
	$query1=mysql_query("SELECT subject,abbr FROM ncdc_olevel WHERE applicable='yes' ORDER BY type,subject ASC",$con) or die('Woowe: '.mysql_error());
	while($row1=mysql_fetch_array($query1)){
		$subject=$row1['subject'];//Query subjects
		$abbr=$row1['abbr'];//Query subject abbreviations
		if(strtolower($class)=='senior 1' && strtolower($ourname)=='city hill college mutundwe' && strtolower($abbr)=='com'){continue;}
		if(strtolower($class)=='senior 2' && strtolower($ourname)=='city hill college mutundwe' && strtolower($abbr)=='ent'){continue;}
		array_push($subject_array,$subject);//append subject to the array of subjects
		array_push($subject_abbr_array,$abbr);//append abbreviation to the array of subject abbreviations
	}
	//calculate number of students before loop begins
	$ttotal=mysql_num_rows(mysql_query("SELECT sno FROM students WHERE room_name='$class' AND active='yes'",$con));
	//Declare recurring variables
	//$std_name = '';$std_no = 1;
	$total_subjects = 0;$total_marks = 0;$total_agg = 0;$average_mark = 0;$missed_papers = 0;
	$failed = 0;
	$agg_array = array();$student_positions = array();

	//Assign order for positioning students depending on class.
	global $position_order;
	if(strtolower($class)=='senior 1' || strtolower($class)=='senior 2'){$position_order = "`div` ASC,total DESC";}
	if(strtolower($class)=='senior 3' || strtolower($class)=='senior 4'){$position_order = "`div` ASC,agg ASC,total DESC";}
	
	//Select student s/numbers from table of positions according to the best student
	$test_select = mysql_query("SELECT * FROM positions_mini WHERE class='$class' AND type='$report_type' AND term='$term' AND year='$Year' 
					ORDER BY $position_order",$con) or die('Waalala'.mysql_error());
	while($row1 = mysql_fetch_array($test_select)){
		array_push($student_positions,$row1['sno']);
	}
	//print_r ($student_positions);
	$tot_students = COUNT($student_positions);
	for($pos=0;$pos < $tot_students;++$pos){
		$_s = $student_positions[$pos];
		//Query for student names from database
		$student_names=mysql_query("SELECT * FROM students WHERE sno='$_s' AND room_name='$class' AND active='yes'",$con) or die(mysql_error());
		while($row=mysql_fetch_array($student_names)){// LIMIT 100
			$sno = $row['sno'];
			$fname = $row['fname'];$lname = $row['lname'];
			$photo = $row['photo'];
			$gender = $row['gender'];
			//$ttotal = $row['ttotal'];
			//print $class.'++>'.$stream;
			
			//$snoarray=array();// empty array of serial numbers
			$std_name = ($fname.'&nbsp;'.$lname);
			//print $std_name;
		}	
		?>	
			<div class="printableArea">
				<div class="bordered" id="reportcard">
					<div class = "reportheader">
						<!-- title row -->
					  <div class="row">
						<div class="col-xs-2">
						  <h2>
						   <center><img src="logo/<?php echo $logo; ?>" class="img-rounded" width="150px" height="150px" /></center>
						  </h2>
						</div>
						<div class="col-xs-8">
						  <h2>
							<h4 style="text-align:center;background-color:yellow;">
								<h1><center><strong><font size='36'><?php echo strtoupper($ourname);?></font></strong></center></h1>
								<h3 align="center" class="" style= "color:green; font-size: 20px;">
									<strong><?php echo 'P.O BOX '.$boxnumber.'&nbsp;TEL: '.$phone ?></strong>
								</h3>
								<h2><center><u><?php echo strtoupper($report_type).'&nbsp;'.strtoupper($term).'&nbsp;REPORT&nbsp;'.' FORM';?></u></center></h2>
							</h4>
						  </h2>
						</div>
						<div class="col-xs-2">
						  <h2>
						   <img src="uploads/<?php echo $photo;?>" class="img-rounded" width="150px" height="150px"  />
						  </h2>
						</div>
						<!-- /.col -->
					  </div>

					  <hr style="border-width:2px; color:green">
					  <!-- info row -->		
					</div>
					  <!-- End of report headers -->		
					<div>
						<div class="row">
							<div class="col-xs-5">
								<label>&nbsp;Student Name: &nbsp;</label><b><?php echo $std_name;?></b>
							</div>					
							<div class="col-xs-3">
								<label>Gender: &nbsp;</label><?php echo $gender;?>
							</div>					
							<div class="col-xs-4" align="center">
								<label>Class: &nbsp;</label><strong><?php echo $class;?></strong>
							</div>
						</div>
					</div>
					<div>
						<div class="row">
							<div class="col-xs-5">
								<label>&nbsp;Year: &nbsp;</label><?php echo $Year;?>
							</div>					
							<?php
							if(strtolower($class)=='senior 1' || strtolower($class)=='senior 2'){
							?>
								<div class="col-xs-3">
									<label>Position: &nbsp;<label><i style="font-size:18px"><?php echo position($pos);?></i>
								</div>					
								<div class="col-xs-4" align = "center">
									<label>Out Of: &nbsp;<label><i style="font-size:18px"><?php echo $ttotal;?></i>
								</div>					
							<?php
							}
							?>
						</div>
					</div>
				<div>	
					<div style="z-index=100;transparency:100%">
						<table class="tstyle" >
							<thead>
								<th>SUBJECT</th><th><?php echo $report_type.' (%)';?></th><th>GRADE</th><th>POINTS</th><th>COMMENT</th><th>INITIALS</th>
							</thead>
							<tbody>
							<?php
							$i=0;//Set subject index from the array of subjects and abbreviations
							foreach($subject_abbr_array as $subj){
								//Query for subject types from the thable of subjects
								$subject_types = mysql_query("SELECT type FROM ncdc_olevel WHERE abbr='$subj'",$con) or die('Luno: '.mysql_query());
								while($sub_type = mysql_fetch_array($subject_types)){
									$subject_type = $sub_type['type'];//Assign subject type
								}
								//Query sunbject marks from the table of marks
								$_marks=mysql_query("SELECT $subj FROM $marks_table WHERE sno='$sno' AND term='$term' AND year='$Year' AND class='$class' AND 
									type='$report_type'",$con) or die(mysql_error());;
								while($row=mysql_fetch_array($_marks)){$_mark=$row[$subj];}
								if($_mark<=-2 OR $_mark>100 OR $_mark=='NULL' OR COUNT($_marks)==0){//Skip subject if has NULL marks or -2
									$i+=1;
									continue;
								}
								$subject_name = $subject_array[$i];//Assign subject name if subject has valid marks
								//Check whether the student missed any compulsory paper
								if($_mark==NULL && strtolower($subject_type) == 'compulsory'){array_push($agg_array,10);}
								if($_mark==-1 OR $_mark==-2){//if student has a missing mark
									if((strtolower($class)=='senior 1') OR (strtolower($class)=='senior 2')){//check whether class is S.1 or S.2
										++$missed_papers;
									}
									if((strtolower($class)=='senior 3') OR (strtolower($class)=='senior 4')){//check whether class is S.3 or S.4
										if($subject_type == 'compulsory'){
											++$missed_papers;
										}
									}
								}//End of condition for missing marks
								//Check if mark is valid and increment total number of valid marks
								if($_mark>=0 AND $_mark<=100 AND $_mark != NULL){$total_marks+=$_mark;}
								++$total_subjects;//Increment number of subjects attempted
								//Assign subject aggregate
								$agg_comment = aggFunction($_mark)[2];//Return Aggregate comment
								$aggregate_points = aggFunction($_mark)[1];//Return aggregate points
								$aggregate = aggFunction($_mark)[0];//to return aggregate abbr e.g D1
								//check whether student passed both English and Mathematics
								if(strtolower($subj) == 'eng'){//if subject is English
									if($aggregate_points > 6){
										$failed+=1;
										//print 'haaaa';
									}
								}
								if(strtolower($subj) == 'mtc'){//if subject is Mathematics
									if($aggregate_points > 8){
										$failed+=1;
										//print "hoooo";
									}
								}
								
							?>	
							<tr>
								<td style="text-align:left;"><?php echo '&nbsp;&nbsp;'.ucwords($subject_name);?></td>
								<td><?php echo markSanitizer($_mark);?></td><td><?php echo $aggregate;?></td>
								<td><?php echo aggFunction($_mark)[1];?></td><td><?php echo $agg_comment;?></td>
								<td><?php echo subjectTeacher($subject_name,$class);?></td>
							</tr>

							<?php
							//Manipulate arrays and counters after every subject
								$i+=1;//Increment counter after every subject
								array_push($agg_array,aggFunction($_mark)[1]);	
							}	
							?>
							</tbody>
							<?php
								if($total_subjects > 0){
									$average = ($total_marks/$total_subjects);
								}else{$average = 0;}
								$ascend =sort($agg_array);//Arrange array of grades in ascending order
								$_8 = array_slice($agg_array,0,8);//select the first 8 item of the array
								$best_8 = array_sum($_8);//Sums up the first eight elements of an array
								//Assign student division/grade and headteacher's comment
								$div = gradeFunction($best_8)[0];$hteacher_comment = gradeFunction($best_8)[1];
								//Change grade/division if failed English or Mathematics
								if($total_subjects==0 || $missed_papers>=1){$division_grade = 'X';}//Set Division X if no subject done
								if($total_subjects!=0){//Number of subjects offered by the student
									//$div = 	($best_8);							
									if($missed_papers==0){//No paper missed
										if($failed > 0){//If failed Math or English or both
											if($failed == 1){//If failed Math OR English
												if($div=='I'){$division_grade='II';}
												elseif($div=='II'){$division_grade='III';}
												else{$division_grade = $div;}
											}elseif($failed == 2){//If failed Math AND English
												if($div=='I' OR $div=='II'){$division_grade='III';}
												else{$division_grade = $div;}
											}else{$division_grade = $div;}
										}elseif($failed==0){$division_grade = $div;}
									}elseif($missed_papers > 0){
										$division_grade = 'X';
									}
								}
								//Class teacher comments
								$query1=mysql_query("select * FROM comments_teacher ORDER BY max ASC ",$con)or die(mysql_error());
								while($row=mysql_fetch_array($query1)){
									$from = $row['fro'];
									$to = $row['max'];
									$commentz = $row['comment'];
									$avg=round($average,0);
									if ($avg >= $from && $avg <= $to){
										$tcomment = $commentz;
										//echo $comment;
									}
								}
							?>
							<thead>
								<th>TOTALS</th><th><?php echo $total_marks;?></th>
								<th>AVG:&nbsp;<span style="font-size:15px"><?php echo round($average,1).' %';?></span></th>
								<th>BEST 8:&nbsp;<span style="font-size:15px"><?php echo $best_8;?></span></th><th>DIVISION:</th>
								<th><span style="font-size:15px"><?php echo $division_grade;?></span></th>
							</thead>
						</table>
							<br>
						<div>
							<div class="row">
								<div class="col-xs-4"><label>&nbsp;Class Teacher's Comment: &nbsp;<label><?php ?></div>					
								<div class="col-xs-5"><label><?php echo $tcomment;?></center></div>					
								<div class="col-xs-3"><!-- label>Signature: ......................&nbsp;<label --></div>
							</div>
							<div class="row">
								<div class="col-xs-4"><!--label>&nbsp;Class Teacher's Name: &nbsp;<label--><?php ?></div>					
								<div class="col-xs-5" align = "right"><label><i><?php echo classTeacher($class);?></i></label></div>					
								<div class="col-xs-3"><label>Signature: ......................&nbsp;</label></div>
							</div>
								<br>
							<div class="row">
								<div class="col-xs-4"><label>&nbsp;Head Teacher's Comment: &nbsp;<label><?php ?></div>					
								<div class="col-xs-5"><label><label><?php echo $hteacher_comment;?></div>					
								<div class="col-xs-3"><label>Signature: ......................&nbsp;<label></div>
							</div>
						</div>
							<br>
						<table id="example2" class="pstyle">
							<tr>
								<th>Marks</th>
								<?php
								$query=mysql_query("SELECT * FROM `grading_olevel` ORDER BY points ASC",$con)or die(mysql_error());
								while($row=mysql_fetch_array($query)){
									$from = $row['fro'];
									$to = $row['max'];
									?>
									<td align='center'><?php echo $to ?> - <?php echo $from ?></td>
								<?php 
								}
								?>
							</tr>
							<tr>
								<th>Grade</th>
								<?php
								$query=mysql_query("SELECT * FROM `grading_olevel` ORDER BY points ASC",$con)or die(mysql_error());
								while($row=mysql_fetch_array($query)){
								$grade = $row['grade'];
								?>
								<td align='center'><?php echo $grade;?></td>
								<?php 
								}
								?>
							</tr>
						</table>
							<br>
						<div class="row">
							<div class="col-xs-11" align="right"><label>Date Of Issue:&nbsp;<?php echo date('d/m/Y').'&nbsp;' ;?></label></div>					
						</div>
						<div class="row">
							<div class="col-xs-7"><label><strong><i>&nbsp;This Report is only valid with a stamp</i></strong><label></div>
							<div class="col-xs-5" align='center'><label><strong><i>&nbsp;<?php echo $requirements;?></i></strong><label></div>
						</div>
							<br>
					</div>
				</div>
				</div>
														<!-- End of report card body -->		
			</div>		
										<div class="break"><!-- This is a page break for after each student report --></div>
		
	<?php
		$agg_array = array();$total_subjects = 0;$total_marks = 0;$missed_papers = 0;$failed = 0;
		////End of loop for each student information
	}//End of loop for each student in class
}//End of if condition for creating report cards table on submittion of student details
//Delete temporary table of results after query positions
//$delete_temp_table = mysql_query("DROP TABLE temporary_positions",$con) or die('LUNO: '.mysql_error());
?>	
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