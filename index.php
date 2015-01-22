<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- =============================
	How long before it's 13:37
	Or how long since it was 13:37

	Created once by Vasilis van Gemert
	Generated by my server
	No more human labour needed

	http://vasilis.nl/random/
	============================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Geek Time</title>
	<meta name="description" content="The Geek perception of time: How long before it is, or how long since it was 13:37">
	<meta name="application-name" content="Geek Time">
	<meta name="apple-mobile-web-app-title" content="Geek Time">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<link rel="stylesheet" href="http://fonts.typotheque.com/WF-023273-007762.css">
<style>
html {
	height: 100%;
	background:   hsl(359, 97.5%, 9%);
	text-rendering: optimizeLegibility;
}
body {
	color:   hsl(110, 50%, 65%);
	height: 90%;
	height: 90vh;
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-webkit-justify-content: center;
	    -ms-flex-pack: center;
	        justify-content: center;
	-webkit-box-align: center;
	-webkit-align-items: center;
	    -ms-flex-align: center;
	        align-items: center;
	font-family: Irma, helvetica, arial, sans-serif;
	font-weight: 700;
	font-size: 13em;
	font-size: 30vw;
	line-height: 1;
	margin: 0;
	padding:0;
}
.l337 {
	color: red;
}
</style>
</head>
<body>
<?php
if(isset($_GET["loop"])) {
	echo '<video autoplay loop style="width: 1px;height:1px;position:absolute;"><source src="ding.mp4" type=video/mp4></video>';
	echo '<script>document.querySelector("title").innerHTML = "&nbsp;";</script>';
}

?>
<time>13:37</time>
<script>

function geekTime(n) {
	// Time in JavaScript is crazy.
	// Or I simply don't get it.
	var rightNow = new Date(n);
	var day = rightNow.getDate();
	var month = rightNow.getMonth();
	var year = rightNow.getFullYear();
	var nerdToday = new Date(year,month,day,13,37);
	var difference = (rightNow.getTime()-nerdToday.getTime());
	var difHours = (difference/1000/60/60);
	var difMinutes = (difHours - Math.floor(difHours))*60;
	if (difference<0) {
		difMinutes = 61 - ((difHours - Math.floor(difHours))*60);
		difHours = (difference/1000/60/60)+1;
	}
	
	var timeEl = document.querySelector('time');
	leetHours = Math.floor(difHours);
	if (difference < 0 && difference > -3600000) {
		leetHours = "-" + Math.floor(difHours);
	}
	else {
		leetHours = Math.floor(difHours);
	}
	if (Math.floor(difMinutes) < 10) {
		leetMinutes = "0"+Math.floor(difMinutes);
	}
	else {
		leetMinutes = Math.floor(difMinutes);
	}
	if (difference > 0 && difference < 60000) {
		timeEl.classList.add('l337');
		leetHours = 13;
		leetMinutes = 37;
	}
	else{
		timeEl.classList.remove('l337');
	}
	timeEl.innerHTML = leetHours + ':' + leetMinutes;

}

geekTime(Date.now());

setInterval(function(){
	geekTime(Date.now());
},1000);

</script>
</body>
</html>
