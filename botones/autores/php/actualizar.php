<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["lastname"]) &&isset($_POST["email"]) &&isset($_POST["description"]) &&isset($_POST["phone"])){
		if($_POST["name"]!=""&& $_POST["lastname"]!=""&&$_POST["description"]!=""){
			include "conexion.php";
			
			$sql = "update author set name=\"$_POST[name]\",lastname=\"$_POST[lastname]\",email=\"$_POST[email]\",description=\"$_POST[description]\",phone=\"$_POST[phone]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>