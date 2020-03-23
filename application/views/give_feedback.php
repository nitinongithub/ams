<html>
	<head>
		<title>feedback</title>
		<link rel="stylesheet" href="<?php echo base_url();?>css/style8.css">
<script src="https://kit.fontawesome.com/ada59038f7.js" crossorigin="anonymous"></script>

	</head>
	<body>
		<div class="parent">
		<form class="form" method="post" align="center" action="<?php echo site_url('web/give_feedback');?>">
			<a href="<?php echo site_url('web');?>"><input type="button" class="btn" value="home"></a>
			<header ><h1>Give Feedback</h1></header>
			<label>Parent Name:</label><input type="text" name="parent"></br></br>
			<label>Feedback:</label><textarea name="feedback"></textarea></br></br>
			<input type="submit" value="Submit" class="btn">
		</form>
		</div>
	</body>
</html>