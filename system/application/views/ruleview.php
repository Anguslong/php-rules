<?php echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Rule Example: Determine whether an Airline Passenger is Suitable for Upgrade</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/screen.css" type="text/css" />
</head>

<body>
<h1>Rule Example: Determine whether an Airline Passenger is Suitable for Upgrade</h1>
<p>In this example, we're determining whether a given airline passenger is eligible to have their
   coach seat upgraded to a first-class seat. In order to be eligible, a passenger must:</p>
<ul>
    <li>be in economy class now and either</li>
    <li>hold a Gold card or</li>
    <li>hold a Silver card and</li>
    <li>their carry-on luggage must be less than or equal to 15.0 pounds.</li>
</ul>
<p>In order to determine this, we must compare a passenger's facts with our rule.</p>  
<h2>The Rule</h2>
<p>We fetch the rule from our RuleBase, which, for simplicity's sake, is merely a text file with a <tt>.rul</tt> extension.
   It's contents are in Reverse Polish Notation (to handle precedence):</p> 
<pre class="codeHighlight">
<?php echo $ruleText; ?>
</pre>
<h2>The Rule Context:</h2>
<p>We get facts pertaining to a Rule from our FactBase, which again is simply a text file. Note the difference between
   a <strong><tt><?php echo anchor('rules/custodian/loadsql/4', 'sql.con'); ?></tt></strong> file and a <strong><tt><?php echo anchor('rules/custodian/loadtxt/4', 'txt.con'); ?></tt></strong> file.</p>
<pre class="codeHighlight">
<?php echo $ruleContextText;  ?>
</pre>
<h2>The Resulting Proposition:</h2>
<p class="codeHighlight">
<?php echo $result->toString(); ?>
</p>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3161256-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
<p>Page executed in <strong>{elapsed_time}</strong> seconds.</p>
</html>