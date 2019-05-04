<meta http-equiv="refresh" content="60">

<?php

$team1f = file_get_contents("/var/www/html/teams/team1/points");
$team1 = number_format($team1f);
$team2f = file_get_contents("/var/www/html/teams/team2/points");
$team2 = number_format($team2f);
$team3f = file_get_contents("/var/www/html/teams/team3/points");
$team3 = number_format($team3f);
$team4f = file_get_contents("/var/www/html/teams/team4/points");
$team4 = number_format($team4f);
$team5f = file_get_contents("/var/www/html/teams/team5/points");
$team5 = number_format($team5f);

 
$dataPoints = array(
	array("x"=> 10, "y"=> $team1, "indexLabel"=> "Team 1"),
	array("x"=> 20, "y"=> $team2, "indexLabel"=> "Team 2"),
	array("x"=> 30, "y"=> $team3, "indexLabel"=> "Team 3"),
	array("x"=> 40, "y"=> $team4, "indexLabel"=> "Team 4"),
	array("x"=> 50, "y"=> $team5, "indexLabel"=> "Team 5"),
);

?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Overall Scores"
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>             
