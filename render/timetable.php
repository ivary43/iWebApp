<?php
require_once('servConf.php');
$mon=array();
$tue=array();
$wed=array();
$thur=array();
$fri=array();
$a=array();
/*
function shorten($dayy,$row__){
	$stor=array();
$days=['mon','tue','wed','thur','fri'];

	if($row__[$days[$dayy]]){
								if($row__[$days[$dayy]]==900){
									$stor[0]=array($row__['cCode'],$row__['cColor']);
								}
								if($row__[$days[$dayy]]==1000 || ($row__[$days[$dayy]]<1000 && $row__[$days[$dayy].'_']>1000 ) ){
									$stor[1]=array($row__['cCode'],$row__['cColor']);
								}
								if($row__[$days[$dayy]]==1100 || ($row__[$days[$dayy]]<1100 && $row__[$days[$dayy].'_']>1100 ) ){
									$stor[2]=array($row__['cCode'],$row__['cColor']);
								}
								if($row__[$days[$dayy]]==1200 || ($row__[$days[$dayy]]<1200 && $row__[$days[$dayy].'_']>1200 ) ){
									$stor[3]=array($row__['cCode'],$row__['cColor']);
								}
								if($row__[$days[$dayy]]==1400 || ($row__[$days[$dayy]]<1400 && $row__[$days[$dayy].'_']>1400 ) ){
									$stor[4]=array($row__['cCode'],$row__['cColor']);
								}
								if($row__[$days[$dayy]]==1500 || ($row__[$days[$dayy]]<1500 && $row__[$days[$dayy].'_']>1500 ) ){
									$stor[5]=array($row__['cCode'],$row__['cColor']);
								}
								
								
							}else{
								for($i=0;$i<6;$i++){
									$stor[]=['',''];
								}
							}
							return $stor;
}
*/
$days=['mon','tue','wed','thur','fri'];
$sql = "SELECT `coID` FROM `sublist`  WHERE `uID`= '".$_SESSION['uID']."'";
        	$result = mysqli_query(mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE), $sql);
        	if($result){
				while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
					$sql_ = "SELECT `cCode`,`cColor`,`mon`,`mon_`,`tue`,`tue_`,`wed`,`wed_`,`thur`,`thur_`,`fri`,`fri_` FROM `ttable`  WHERE `cID`= '".$row['coID']."'";
		        	$result_ = mysqli_query(mysqli_connect(SERVER_ADDRESS,USER_NAME,PASSWORD,DATABASE), $sql_);
		        	if($result_){
						while ($row_ = mysqli_fetch_array($result_, MYSQL_ASSOC)) {
							
							if($row_[$days[0]]){
								if($row_[$days[0]]==900){
									$mon[0]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[0]]==1000 || ($row_[$days[0]]<1000 && $row_[$days[0].'_']>1000 ) ){
									$mon[1]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[0]]==1100 || ($row_[$days[0]]<1100 && $row_[$days[0].'_']>1100 ) ){
									$mon[2]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[0]]==1200 || ($row_[$days[0]]<1200 && $row_[$days[0].'_']>1200 ) ){
									$mon[3]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[0]]==1400 || ($row_[$days[0]]<1400 && $row_[$days[0].'_']>1400 ) ){
									$mon[4]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[0]]==1500 || ($row_[$days[0]]<1500 && $row_[$days[0].'_']>1500 ) ){
									$mon[5]=array($row_['cCode'],$row_['cColor']);
								}
								
								
							}else{
								for($i=0;$i<6;$i++){
									$mon[]=['',''];
								}
							}

							if($row_[$days[1]]){
								if($row_[$days[1]]==900){
									$tue[0]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[1]]==1000 || ($row_[$days[1]]<1000 && $row_[$days[1].'_']>1000 ) ){
									$tue[1]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[1]]==1100 || ($row_[$days[1]]<1100 && $row_[$days[1].'_']>1100 ) ){
									$tue[2]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[1]]==1200 || ($row_[$days[1]]<1200 && $row_[$days[1].'_']>1200 ) ){
									$tue[3]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[1]]==1400 || ($row_[$days[1]]<1400 && $row_[$days[1].'_']>1400 ) ){
									$tue[4]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[1]]==1500 || ($row_[$days[1]]<1500 && $row_[$days[1].'_']>1500 ) ){
									$tue[5]=array($row_['cCode'],$row_['cColor']);
								}
								
								
							}else{
								for($i=0;$i<6;$i++){
									$tue[]=['',''];
								}
							}

							if($row_[$days[2]]){
								if($row_[$days[2]]==900){
									$wed[0]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[2]]==1000 || ($row_[$days[2]]<1000 && $row_[$days[2].'_']>1000 ) ){
									$wed[1]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[2]]==1100 || ($row_[$days[2]]<1100 && $row_[$days[2].'_']>1100 ) ){
									$wed[2]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[2]]==1200 || ($row_[$days[2]]<1200 && $row_[$days[2].'_']>1200 ) ){
									$wed[3]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[2]]==1400 || ($row_[$days[2]]<1400 && $row_[$days[2].'_']>1400 ) ){
									$wed[4]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[2]]==1500 || ($row_[$days[2]]<1500 && $row_[$days[2].'_']>1500 ) ){
									$wed[5]=array($row_['cCode'],$row_['cColor']);
								}
								
								
							}else{
								for($i=0;$i<6;$i++){
									$wed[]=['',''];
								}
							}

							if($row_[$days[3]]){
								if($row_[$days[3]]==900){
									$thur[0]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[3]]==1000 || ($row_[$days[3]]<1000 && $row_[$days[3].'_']>1000 ) ){
									$thur[1]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[3]]==1100 || ($row_[$days[3]]<1100 && $row_[$days[3].'_']>1100 ) ){
									$thur[2]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[3]]==1200 || ($row_[$days[3]]<1200 && $row_[$days[3].'_']>1200 ) ){
									$thur[3]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[3]]==1400 || ($row_[$days[3]]<1400 && $row_[$days[3].'_']>1400 ) ){
									$thur[4]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[3]]==1500 || ($row_[$days[3]]<1500 && $row_[$days[3].'_']>1500 ) ){
									$thur[5]=array($row_['cCode'],$row_['cColor']);
								}
								
								
							}else{
								for($i=0;$i<6;$i++){
									$thur[]=['',''];
								}
							}

							if($row_[$days[4]]){
								if($row_[$days[4]]==900){
									$fri[0]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[4]]==1000 || ($row_[$days[4]]<1000 && $row_[$days[4].'_']>1000 ) ){
									$fri[1]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[4]]==1100 || ($row_[$days[4]]<1100 && $row_[$days[4].'_']>1100 ) ){
									$fri[2]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[4]]==1200 || ($row_[$days[4]]<1200 && $row_[$days[4].'_']>1200 ) ){
									$fri[3]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[4]]==1400 || ($row_[$days[4]]<1400 && $row_[$days[4].'_']>1400 ) ){
									$fri[4]=array($row_['cCode'],$row_['cColor']);
								}
								if($row_[$days[4]]==1500 || ($row_[$days[4]]<1500 && $row_[$days[4].'_']>1500 ) ){
									$fri[5]=array($row_['cCode'],$row_['cColor']);
								}
								
								
							}else{
								for($i=0;$i<6;$i++){
									$fri[]=['',''];
								}
							}
						}

						//replacing null by blank
						for ($i=0;$i<6;$i++){
							if(!isset($mon[$i])){
								$mon[$i]=array(' ','');
							}
						}
					}
				}
			}
?>
<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Timetable::iWebApp</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/timetable/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						
							<a href="#menu" style="margin-left:30px ;">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Home</a></li>
							<li><a href="landing.html">Landing</a></li>
							<li><a href="generic.html">Generic</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
						<ul class="actions vertical">
							<li><a href="#" class="button special fit">Get Started</a></li>
							<li><a href="#" class="button fit">Log In</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">

									<header class="major">
										<h1>Your Time Table</h1><hr style="width: 30%">
										<h3>This section shows you your's week's timetable<br>based upon the courses that you have subscribed to.</h3>
									</header><hr style="width: 60%">
													<div class="table-wrapper">
														<table class="alt">
															<thead>
																<tr>
																	<th>Day</th>
																	<th>9-10am</th>
																	<th>10-11am</th>
																	<th>11-12am</th>
																	<th>12-1pm</th>
																	<th>2-5pm LAB</th>
																	<th>5-6pm</th>
																	
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Monday</td>
																	<?php echo"<td style='background:#".$mon[0][1]."'>".$mon[0][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$mon[1][1]."'>".$mon[1][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$mon[2][1]."'>".$mon[2][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$mon[3][1]."'>".$mon[3][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$mon[4][1]."'>".$mon[4][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$mon[5][1]."'>".$mon[5][0]."</td>";  ?>
																	
																	
																</tr>
																<tr>
																	<td>Tuesday</td>
																	<?php echo"<td style='background:#".$tue[0][1]."'>".$tue[0][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$tue[1][1]."'>".$tue[1][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$tue[2][1]."'>".$tue[2][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$tue[3][1]."'>".$tue[3][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$tue[4][1]."'>".$tue[4][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$tue[5][1]."'>".$tue[5][0]."</td>";  ?>
																	
																</tr>

																<tr>
																	<td>Wednesday</td>
																	<?php echo"<td style='background:#".$wed[0][1]."'>".$wed[0][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$wed[1][1]."'>".$wed[1][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$wed[2][1]."'>".$wed[2][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$wed[3][1]."'>".$wed[3][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$wed[4][1]."'>".$wed[4][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$wed[5][1]."'>".$wed[5][0]."</td>";  ?>
																	
																</tr>
																<tr>
																	<td>Thursday</td>
																	<?php echo"<td style='background:#".$thur[0][1]."'>".$thur[0][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$thur[1][1]."'>".$thur[1][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$thur[2][1]."'>".$thur[2][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$thur[3][1]."'>".$thur[3][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$thur[4][1]."'>".$thur[4][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$thur[5][1]."'>".$thur[5][0]."</td>";  ?>
																	
																</tr>
																<tr>
																	<td>Friday</td>
																	<?php echo"<td style='background:#".$fri[0][1]."'>".$fri[0][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$fri[1][1]."'>".$fri[1][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$fri[2][1]."'>".$fri[2][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$fri[3][1]."'>".$fri[3][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$fri[4][1]."'>".$fri[4][0]."</td>";  ?>
																	<?php echo"<td style='background:#".$fri[5][1]."'>".$fri[5][0]."</td>";  ?>
																	
																</tr>
															</tbody>
														
														</table>
													</div>

											</div>
										
										</div>

								</div>
							</section>

					</div>

		
			</div>

		<!-- Scripts -->
			<script src="assets/timetable/js/jquery.min.js"></script>
			<script src="assets/timetable/js/jquery.scrolly.min.js"></script>
			<script src="assets/timetable/js/jquery.scrollex.min.js"></script>
			<script src="assets/timetable/js/skel.min.js"></script>
			<script src="assets/timetable/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/timetable/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/timetable/js/main.js"></script>

	</body>
</html>