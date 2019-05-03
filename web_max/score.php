<meta http-equiv="refresh" content="5">
<title>Overall Score</title>
<b>Overall Scores</b>
<h1></h1>
<h1>Yeet </h1>
<?php
        echo "Team 0 points -  ";
        $team0="/var/www/html/teams/team0/points";
        if(file_exists($team0)){
        echo file_get_contents($team0);
        }
?>

