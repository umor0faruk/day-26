<?php

	function insert(){
		$con=new mysqli("localhost","root","","batch04");

		$name=$_POST['name'];
		$email=$_POST['email'];
		$status=$_POST['status'];
		

		if($name==""){
			echo '<span class="alert alert-danger">Name Field Not Empty</span>';
		}
		if($email==""){
			echo '<span class="alert alert-danger">Email Field Not Empty</span>';
		}
		else{
			$result = $con->query("INSERT INTO tbl_student(name,email,status)VALUES('faruk','farukhdsk@gmail.com',13)");

		if($result){
			echo '<span class="alert alert-success">Success</span>';
		}
		else{
			echo '<span class="alert alert-danger">error</span>';
		}
		}
		
	}
	

	


	
?>
