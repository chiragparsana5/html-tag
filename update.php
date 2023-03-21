<?php
require "config.php";
if(isset($_REQUEST['id']))
{
$id=$_REQUEST['id'];
$fnm=$_REQUEST['fnm'];
$cou=$_REQUEST['cou'];
$num=$_REQUEST['num'];
$gen=$_REQUEST['gen'];
$ci=$_REQUEST['ci'];
$update="UPDATE `jnp` SET `fnm`='$fnm',`cou`='$cou',`num`='$num',`gen`='$gen',`ci`='$ci' WHERE `id`='$id'";
$res=mysqli_query($con,$update);
header("location:updateAct.php");
} ?>