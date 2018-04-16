<html>

<head>
<link href='https://fonts.googleapis.com/css?family=Romanesco' rel='stylesheet'>

<title>Stage1</title>
</head>
<style>

	.dest {
		font-family: Romanesco, Monospace;
		font-size: 64px;
		text-align: center;
		position: absolute;
		width: 450px;
		height: 100px;
		left: 450px;
		top: 160px;
		font-style: normal;
		font-weight: normal;
		line-height: normal;
		letter-spacing:0.1em
				}


	.design {
		font-family: Romanesco, Monospace;
		font-size: 64px;
		text-align: center;
		position: absolute;
		width: 500px;
		height: 227px;
		left: 430px;
		top: 300px;
		font-style: normal;
		font-weight: normal;
		line-height: normal;
		letter-spacing:0.1em

	}

	.txt {
		position:absolute;

		color: #02422F;
		font-size: 45px;
		text-align:center;
	}
.auto-style1 {
	border-radius: 200px;
	background-repeat: no-repeat;
	background-position: center center;


	width: 900px;
	height: 500px;
}
</style>
<body>

<p>

<center><img src="flowers2.jpg" class="auto-style1"><center>

<div class="txt dest" align="center">
HNG Internship Program 4.0
</div>

<div class="txt design" align="center" >
	<?php
				echo "Today is " . date("l") . ", " . date("d/m/Y") . "<br>" ;
    	    	echo $timestamp = date('H:i:s');
				$url1=$_SERVER['REQUEST_URI'];
				header("Refresh: 10; URL=$url1");


	?>
</div>




</p>

</body>

</html>