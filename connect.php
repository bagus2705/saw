<?php
$konek=new mysqli('localhost','root','','saw');
if ($konek->connect_errno){
    "Database Error".$konek->connect_error;
}
?>