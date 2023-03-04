<?php

if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["lastname"]) &&isset($_POST["email"]) &&isset($_POST["comentario"]) &&isset($_POST["phone"])){
		if($_POST["name"]!=""&& $_POST["lastname"]!=""&&$_POST["comentario"]!=""){
			include "conexion.php";
			
			$sql = "insert into person_blog(name,lastname,email,comentario,phone,created_at) value (\"$_POST[name]\",\"$_POST[lastname]\",\"$_POST[email]\",\"$_POST[comentario]\",\"$_POST[phone]\",NOW())";
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