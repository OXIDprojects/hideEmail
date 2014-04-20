<?php
$myConfig = new myconfig;
$myConfig->init();
$sCacheFile = $myConfig->sCompileDir . '/_showemail.txt';
$myURL = parse_url($myConfig->sShopURL, PHP_URL_HOST);
$refererURL = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
// if referer page is not from inside -> die
if ($refererURL != $myURL) die();
	
// show cached file if exists
if (is_file($sCacheFile)) {
  $handle = fopen($sCacheFile, 'r');
  $content = fread($handle, 1000);
  fclose($handle);
  echo $content;
  exit;
  }

// load email adress from db
$mydb = @mysql_connect($myConfig->dbHost, $myConfig->dbUser, $myConfig->dbPwd);
mysql_select_db($myConfig->dbName, $mydb);
$result = mysql_query("select OXINFOEMAIL from oxshops limit 1");
$row = mysql_fetch_assoc($result);
$eMail = $row['OXINFOEMAIL'];
	
$content  = "<html>\n";
$content .= "<head>\n";
$content .= "<link rel='stylesheet' type='text/css' href='" . $myConfig->sShopURL . "/out/azure/src/css/oxid.css'>\n";
$content .= "<title>die Mailadresse</title>\n";
$content .= "<meta name='description' content='meine Mailadresse'>\n";
$content .= "<meta name='robots' content='noindex'>\n";
$content .= "</head>\n";
$content .= "<body>\n";
$content .= "<span><a href='mailto:$eMail'>$eMail</a></span>\n";
$content .= "</body>\n";
$content .= "</html>\n";

$handle = fopen($sCacheFile, 'w');
fwrite ($handle, $content);
fclose ($handle);
	
echo $content;

// --------------------------------------------
function myShopBasePath()
  {
    return dirname(__FILE__) . '/../../';
  }

// don't use oxid-framework because thats faster!
class myconfig 
  {
  function init() 
	  {
      include myShopBasePath() . 'config.inc.php';
		}
	}
