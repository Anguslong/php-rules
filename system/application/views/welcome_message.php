<html>
<head>
<title>Welcome to the PHP Rules sample application (on the CodeIgniter framework)</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

.minor {
	font-size:80%;
}	

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}
.good-news {
	background-color:#F8FFF0;
	border: 1px solid #BBEE77;
	padding:10px;
}
.important {
background: #FBE6F2;
 border: 1px solid #D893A1;
 color: #333;
 margin: 10px 0 5px 0;
 padding: 10px;
}
#db-status-success,
#db-status-error {
	display:none;
}
.code {
background-color:#FFFFFF;
color:#000000;
padding:10px;
font-weight:normal;
}
.code-comment{
color:#008200;
}
pre.code {
background-color:black;
color:white;
font-weight:bold;
border:1px solid #999;
padding:1.0em;
}
li {
margin-top:0.6em;
}
p {
	margin-left:1.2em;
}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/screen.css" />
</head>
<body>

<h1>Welcome to the PHP Rules sample application <br/>
<span class="minor">(on the CodeIgniter framework)</span></h1>

<p>Thanks for your interest in PHP Rules. This sample application provides two examples of using PHP Rules. Before you can execute the samples or unit tests,  you should also <a href="#install-sample-database">install the sample database</a> (if  you haven't already).</p>
<h2>Table of contents</h2>
<h3>API</h3>
<p><a href="phpdocs">Phprules API (phpdocs)</a></p>
<h3>Unit tests </h3>
<p><a href="unit_test.php">Phprules library unit tests</a> (You must first install before you can execute unit tests)</p>
<h3>Overview</h3>
<ul><li><a href="#what-is-php-rules">What is PHP Rules?</a></li>
    <li><a href="#install-sample-database">Install the sample database</a>   
        <ul>
            <li><a href="#prerequisites">Prerequisites</a></li>
            <li><a href="#step-1">Step 1: Install the demo database via the mysql command line</a></li>
            <li><a href="#step-2">Step 2: Configure the system/application/config/database.php file to connect to your database</a></li>
            <li><a href="#step-3">Step 3: Run the &quot;PHP Rules sample database installation wizard&quot; </a></li>
        </ul>
    </li>
</ul>
<h2><a name="what-is-php-rules"></a>What is PHP Rules?</h2>
<p>PHP Rules is a lightweight, forward-chaining inference engine based on the 
    <a href="http://books.google.com/books?id=NefmonGgEEMC&lpg=PA433&dq=architype%20mda%20patterns%20rules%20python&pg=PA433#v=onepage&q&f=false" target="_blank">&quot;Rule Archetype Pattern&quot;</a> described in chapter 12, "Rule archetype pattern," in the excellent book <em><a href="http://www.amazon.com/Enterprise-Patterns-MDA-Building-Archetype/dp/032111230X/ref=sr_1_1?ie=UTF8&s=books&qid=1294762210&sr=8-1" target="_blank">Enterprise 
Patterns and MDA: Building Better Software with Archetype Patterns and UML</a></em>. </p>
<p>PHP Rules models formal propositional logic. It allows 
    you to separate conditional logic from source code and database triggers in 
    a reusable package, where explicit rules can be independently defined &amp; 
    managed.</p>
<p>Rules are simple statements of fact about the state of something that may be 
    used explicitly to trigger actions.</p>
<h3>Phprules Package Class Diagram</h3>
<p><img src="http://swindle.net/php-rules/sites/all/php-rules-files/media/images/tutorials/getting-started/rule_archetype_pattern.png" style="padding:4px;border:1px solid #ccc;"></p>
<h2><a name="install-sample-database"></a>Install the sample database </h2>
<p>This section describes how to install a sample project with PHP Rules,  and how to get it running.</p>
<div class="notes"><strong>Note:</strong> You will find detailed, step-by-step instuctions on-line at the <a href="http://swindle.net/php-rules/tutorials/getting-started/install-php-rules-sample-application" target="_blank">"Install the PHP Rules sample application"</a> page on the <a href="http://swindle.net/php-rules/" target="_blank">PHP Rules website</a>, including steps for installing a database using cPanel. </div>
<h3><a name="prerequisites"></a>Prerequisites</h3>
<p>Before you begin, you must have the following installed:</p>
<ol>
    <li><a target="dependencies" href="http://httpd.apache.org/download.cgi">Apache HTTP server</a> - This tutorial assumes you're using Apache as a web server. PHP Rules should also run fine on <a target="_blank" href="http://php.iis.net/">ISS</a>, but it's currently untested.</li>
    <li><a target="dependencies" href="http://php.net/downloads.php">PHP</a> - As the name implies, PHP Rules runs on PHP. If you're reading this, you have PHP installed. </li>
    <li><a target="dependencies" href="http://dev.mysql.com/downloads/">MySQL Community Server</a> - In its current version, PHP Rules can run without a relational database. In the near future, however, this will be required. As you'll see in the examples section, business information is normally stored in multiple databases. PHP Rules provides a way of capturing business information in a common way.</li>
</ol>
<h3><a name="step-1"></a>Step 1: Install the demo database via the mysql command line</h3>
<ol>
    <li>Log in to the MySQL server:
    <pre class="code">
shell&gt; mysql --user=<em>user_name</em> --password=<em>your_password</em>
</pre>
    where
    <ul>
        <li><em>user_name</em> is a user that can create schemas and grant permissions, and</li>
        <li><em>your_password</em> is that user's password.</li>
    </ul>
    </li>
    <li>Create the <tt>airlines</tt> schema:
    <pre class="code">
mysql&gt; create database airlines;
</pre>
    </li>
    <li>Create a new user called <tt>usr_airlines</tt>:
    <pre class="code">
mysql&gt; create user 'usr_airlines'@'localhost' identified by 'password';
</pre>
    </li>
    <li>Assign privileges to <tt>usr_airlines</tt>:
    <pre class="code">
mysql&gt; grant all privileges on `airlines`.* to 'usr_airlines'@'localhost';
</pre>
    </li>
</ol>
    <h3><a name="step-2"></a>Step 2: Configure the system/application/config/database.php file to connect to your database</h3>
	<p>The sample application runs on CodeIgniter, so you have to configure it to connect to your new database.</p>
    <ol>
    <li>Open <tt>php-rules-sample/system/application/config/database.php</tt> in a text editor.</li>
    <li>Fill out the following with the values you saved in Step 1: 
	<pre class="code">
$db['default']['username'] = "usr_airlines";
 
$db['default']['password'] = "password";
 
$db['default']['database'] = "airlines";
	</pre>
	</li>
	<li>Save the file <tt>php-rules-sample/system/application/config/database.php</tt>.</li>
</ol>
<h3><a name="step-3"></a>Step 3: Run the &quot;PHP Rules Demo Installation Wizard&quot;</h3>
    <div id="db-status-success" class="good-news">
	Your database appears to be properly configured. You can <a href="<?php echo site_url(); ?>/install/">proceed with installation</a> (if you haven't already installed it).
</div>
	<div id="db-status-error" class="important">
	It appears that this sample application cannot connect to a database. Be sure to configure your database connection by opening the following file in a text editor <code>php-rules-sample/system/application/config/database.php</code> and filling out the following values:
<pre class="code">
$db['default']['hostname'] = "localhost";
 
<span class="code-comment">// Provide the user name from Step 2 of "Install the PHP Rules sample application"
// http://swindle.net/php-rules/tutorials/getting-started/install-php-rules-sample-application#step-2</span>
$db['default']['username'] = "";
 
<span class="code-comment">// Provide the password from Step 2 of "Install the PHP Rules sample application"
// http://swindle.net/php-rules/tutorials/getting-started/install-php-rules-sample-application#step-2</span>
$db['default']['password'] = "";
 
<span class="code-comment">// Provide the database name from Step 2 of "Install the PHP Rules sample application"
// http://swindle.net/php-rules/tutorials/getting-started/install-php-rules-sample-application#step-2</span>
$db['default']['database'] = "";
 
$db['default']['dbdriver'] = "mysql";
$db['default']['dbprefix'] = "";
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = "";
$db['default']['char_set'] = "utf8";
$db['default']['dbcollat'] = "utf8_general_ci";
</pre>
<p>Once you're done, <a href="javascript:location.reload();">reload this page</a>.</p>
<p>For detailed installation instructions, be sure to <a href="http://swindle.net/php-rules/tutorials/getting-started/install-php-rules-sample-application#step-2" target="instuctions">create the demo database and user</a> and <a href="http://swindle.net/php-rules/tutorials/getting-started/install-php-rules-sample-application#step-3" target="instuctions">configure the sample application</a>.</p>
	</div>
    
<hr />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
function testDatabaseConnection(){
	$.ajax({
		url: '<?php echo site_url(); ?>/install/dbconfigtest',
		success: function(data){
			$('#db-status-success').show();
		},
		error: function(data){
			$('#db-status-error').show()
		}
	});
}
function initView(){
	testDatabaseConnection();
}
$(document).ready(initView);
</script>
<p><br />Page rendered in {elapsed_time} seconds</p>

</body>
</html>