<html>
<head>
<title>Database Error</title>
<style type="text/css">

body {
background-color:	#fff;
margin:				40px;
font-family:		Lucida Grande, Verdana, Sans-serif;
font-size:			12px;
color:				#000;
}

#content  {
border:				#999 1px solid;
background-color:	#fff;
padding:			20px 20px 12px 20px;
}

h1 {
font-weight:		normal;
font-size:			14px;
color:				#990000;
margin: 			0 0 4px 0;
}
p.notes {
    background-color: rgb(249, 239, 192); 
    border: 5px solid rgb(249, 231, 139); 
    margin: 1em 0px; 
    padding: 5px 10px;
}
</style>
</head>
<body>
	<div id="content">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
		<p class="notes">Please ensure that you have correctly configured your database settings at <code>php-rules-sample/system/application/config/database.php</code>.</p>
	</div>
</body>
</html>