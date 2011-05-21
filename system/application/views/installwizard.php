<?php echo "<?xml version=\"1.0\" encoding=\"utf-8\"?".">"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP Rules sample application installation wizard</title>
<link rel="stylesheet" type="text/css" href="<?php echo $cssHref; ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<h1>PHP Rules sample application installation wizard</h1>
<div class="notes"><strong>Note:</strong> You will find detailed, step-by-step instuctions on-line at the <a href="http://swindle.net/php-rules/tutorials/getting-started/install-php-rules-sample-application" target="_blank">"Install the PHP Rules sample application"</a> page.</div>
<h2>Load the sample database </h2>
<p>Verify the settings below and click the button 
    "Load the sample  database." (The fields are prepopulated with the values you entered in the page <tt>php-rules-sample/system/application/config/database.php</tt>.)</p>
<form id="frmInstall" name="frmInstall" method="post" action="/php-rules-sample/index.php/install/sample">
<fieldset class="dialog">
	<legend>Database Settings</legend>
    <p><strong>MySQL Server Address<br />
        </strong>Usually you will use 'localhost', but your hosting provider may 
        require something else:</p>
	<p> 
        <input name="txtMySQLAddress" type="text" id="txtMySQLAddress" value="<?php echo $dbHost; ?>" />
    </p>
    <p><strong>MySQL Username<br />
        </strong>The username you use to access your MySQL database:</p>
    <p> 
        <input name="txtMySQLUsername" type="text" id="txtMySQLUsername" value="<?php echo $dbUser; ?>" />
    </p>
    <p><strong>MySQL Password<br />
        </strong>The password you use to access your MySQL database:</p>
    <p> 
        <input name="pwdMySQLPassword" type="password" id="pwdMySQLPassword" value="<?php echo $dbPass; ?>" />
    </p>
    <p><strong>MySQL Database Name<br />
        </strong>The name of the database where your demo FactBase will be installed 
        (this cannot be edited):</p>
    <p>
        <input name="txtDbName" type="text" id="txtDbName" value="<?php echo $dbName; ?>" />
    </p>
    </fieldset>
	<input name="btnSubmit" type="submit" value="Load the sample database" />
</form>
</body>
</html>
