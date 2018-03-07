<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Team 1 Homepage</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
	function gotoURL(phpFile){
		location.href = phpFile;
	}

	$(document).ready(function(){
		$("#userPane").hide();
		$("#adminPane").hide();

		$("#lblUser").click(function(){
			$("#userPane").hide();
			$("#adminPane").hide();
			$("#userPane").show();
		});

		$("#lblAdmin").click(function(){
			$("#userPane").hide();
			$("#adminPane").hide();
			$("#adminPane").show();
		});
	});


</script>
<style>
	.linkDiv{
		cursor:pointer;
		color:grey;
		text-align: left;
	}
	#lblUser{
		position: fixed;
		left: 10px;
		top: 10px;
		padding:2px;

		border:solid 1px grey;
		width: 300px;
		height: 30px;

		cursor:pointer;
	}
	#lblAdmin{
		position: fixed;
		left: 10px;
		top: 50px;
		padding:2px;

		border:solid 1px grey;
		width: 300px;
		height: 30px;

		cursor:pointer;
	}
	#userPane{
		position: fixed;
		left: 10px;
		top: 90px;
		padding:2px;

		border-right:solid 1px grey;
		width: 300px;
	}
	#adminPane{
		position: fixed;
		left: 10px;
		top: 90px;
		padding:2px;

		border-right:solid 1px grey;
		width: 300px;
	}

</style>

</head>

<body topmargin="0" leftmargin="0">
	<div id="lblUser">User Functions</div>
	<div id="lblAdmin">Admistrator Functions</div>

	<div id="userPane">
		<div>User Functions</div>
		<div class="linkDiv" onclick="gotoURL('suggestedTimeToPark1.php');">Suggested Parking Time</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
	</div>

	<div id="adminPane">
		<div>Admin Functions</div>
		<div class="linkDiv" onclick="gotoURL('estimatedAvailableSpaces1.php');">Estimated Available Spaces</div>
		<div class="linkDiv" onclick="gotoURL('daily_use_data.php');">Daily Use Data</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
		<div class="linkDiv" onclick="gotoURL('xxxxxxxxx.php');">Function Name</div>
	</div>

</body>
</html>