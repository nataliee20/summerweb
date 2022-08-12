<?php
include_once("db.php");
?>


<!DOCTYPE html>
<html>
<head>
	<style>
		.username-ok{color:#2FC332;}
		.username-taken{color:#D60202;}
	</style>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script>
		function checkAvailability()
		{
			jQuery.ajax(
			{
				url: "acheck_availability.php",
				data:'username='+$("#username").val(),
				type: "POST",
				success:function(data)
				{
					$("#msg").html(data);
				}
			});
		}

		function getResult() 
		{
			jQuery.ajax(
			{
				url: "search.php",
				data:'term='+$("#term").val(),
				type: "POST",
				success:function(data2)
				{
					$("#result").html(data2);
				}
			});
		}
	</script>
</head>
<body>
        
<!-- 	
	<br><hr><br>
	
	<h1>Live Search</h1>
	 -->
</body>
</html>