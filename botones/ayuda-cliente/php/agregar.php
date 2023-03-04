<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["lastname"]) &&isset($_POST["email"]) &&isset($_POST["help"]) &&isset($_POST["phone"])){
		if($_POST["name"]!=""&& $_POST["lastname"]!=""&&$_POST["help"]!=""){
			include "conexion.php";
			
			$sql = "insert into person_help(name,lastname,email,help,phone,created_at) value (\"$_POST[name]\",\"$_POST[lastname]\",\"$_POST[email]\",\"$_POST[help]\",\"$_POST[phone]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>