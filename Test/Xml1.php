<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("Xml.xml");

print $xmlDoc->saveXML();
?>