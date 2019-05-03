<meta http-equiv="refresh" content="5">
<title>Team 0</title>
<b>Simple Scoring Engine For CDO Mini Hack!</b>
<h1></h1>
<h1>Team 0</h1>
<h3>Up/Down: </h3>
<b>Ping</b>
<h1></h1>
<?php
	echo ".10 ";
	$box_10="/var/www/html/teams/team0/pingup/10";
	if(file_exists($box_10)){
	echo file_get_contents($box_10);
	}
?>

<h1></h1>

<?php
        echo ".20 ";
        $box_20="/var/www/html/teams/team0/pingup/20";
        if(file_exists($box_20)){
        echo file_get_contents($box_20);
        }
?>

<h1></h1>

<?php
        echo ".30 ";
        $box_30="/var/www/html/teams/team0/pingup/30";
        if(file_exists($box_30)){
        echo file_get_contents($box_30);
        }
?>

<h1></h1>

<?php
        echo ".40 ";
        $box_40="/var/www/html/teams/team0/pingup/40";
        if(file_exists($box_40)){
        echo file_get_contents($box_40);
        }
?>

<h1>-</h2>
<b>Web Content</b>
<h1></h1>
<?php
        echo "Web .10 ";
        $box_10="/var/www/html/teams/team0/webup/10";
        if(file_exists($box_10)){
        echo file_get_contents($box_10);
        }
?>

<h1>-</h2>
<b>SSH</b>
<h1></h1>
<?php
        echo "SSH .20 ";
        $box_10="/var/www/html/teams/team0/sshup/10";
        if(file_exists($box_10)){
        echo file_get_contents($box_10);
        }
?>

