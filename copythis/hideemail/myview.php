<?php
class myView extends myView_parent {
  
	function showEmailFrame () {
	  $retstr = "<iframe src='";
		$retstr .= $this->getBaseDir();
		$retstr .= "modules/hideemail/myframe.php' ";
		$retstr .= "scrolling='no' marginheight='0' marginwidth='0' frameborder='0' width='250' height='25'>";
		$retstr .= "</iframe>";
		return $retstr;
	  }
  }