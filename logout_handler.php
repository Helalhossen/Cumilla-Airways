<html>
	<head>
		<title>Logout Handler</title>
	</head>
	<body>
		<?php
			session_start();
			session_destroy();
			header("location: home_page.php");
		?>
<style>
.fter {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>

<div class="fter">
  <p>All Rights Reserved @Cumilla Airways</p>
  <p>Project Manager: Helal Hossen</p>
</div>
	</body>
</html>