<?php
require_once './Sanemplater.php';
$templater=new Sanemplater("examples");
echo $templater->makePage("layout.html", array("title"=>"Ejemplo"));
?>
