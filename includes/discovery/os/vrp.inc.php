<?php

if(!$os) {

  if(strstr($sysDescr, "VRP (R) Software")) { $os = "vrp"; }
  else if(strstr($sysDescr, "VRP Software Version")) { $os = "vrp"; }
  else if(strstr($sysDescr, "Software Version VRP")) { $os = "vrp"; }

}

?>