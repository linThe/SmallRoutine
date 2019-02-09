<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("Xml.xml");

$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item)
{
print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
?>