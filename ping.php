<?php
if(!isset($_GET['q'])){
	header("Location:home.php");
}
$q = $_GET['q'];
$result = shell_exec("ping ".$q);
echo "<pre>$result</pre>";
?>
