<?php echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP Rules Engine Installation</title>
<link rel="stylesheet" type="text/css" href="/php-rules-sample/css/screen.css" />
<meta http-equiv="Content-Type" content="text/html; utf-8" />
</head>

<body>
<h1>PHP Rules Engine Installation Successful </h1>
<p>Congratulations! You've successfully installed the sample application.</p>
<h2>Examples</h2>
<h3>Execute the Rule &quot;SuitableForUpgrade,&quot; which determines whether an airline passenger is eligible for an upgrade. </h3>
<ol>
    <li><a href="/php-rules-sample/index.php/rules/custodian/loadtxt/4">Evaluate a rule from text 
        files</a>.</li>
    <li><a href="/php-rules-sample/index.php/rules/custodian/loadsql/4">Evaluate a rule from a relational 
        database</a>.</li>
</ol>
<h2>Unit tests</h2>
<p><a href="<?php echo base_url(); ?>unit_test.php">Phprules library unit tests</a> (You must first install before you can execute unit tests)</p>
<h2>API Documentation (phpdocs)</h2>
<p><a href="<?php echo base_url(); ?>phpdocs">Phprules API (phpdocs)</a></p>
</body>
</html>
