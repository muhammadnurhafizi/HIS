<?php
session_start();

require "../src/backend/conn.php";

$staff_id = $_SESSION['staff_id'];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Staff</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link href="../src/css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../src/style.css">

	<style type="text/css">
		.sidebar {
		  width: 300px;
		  height: auto;
		  background-color: white;
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		  padding-top: 10px;
		  padding-bottom: 10px;
		}

		.sidebar a {
		  padding: 10px 8px 10px 16px;
		  text-decoration: none;
		  color: grey;
		  display: block;
		}

		.sidebar a:hover {
		  color: black;
		}
		.active{
			background-color:  #33cabb;
			color: white !important;
		}
		.pageSize{
		  height: 100%;
		  margin-left: 5%;
		  margin-right: 5%;
		}

		/*pagination*/
		.table-responsive {
		    margin: 30px 0;
		}
		.table-wrapper {
		    min-width: 1000px;
		    background: #fff;
		    padding: 20px;
		    box-shadow: 0 1px 1px rgba(0,0,0,.05);
		}
		.table-title {
		    padding-bottom: 10px;
		    margin: 0 0 10px;
		    min-width: 100%;
		}
		.table-title h2 {
		    margin: 8px 0 0;
		    font-size: 22px;
		}
		.search-box {
		    position: relative;        
		    float: right;
		}
		.search-box input {
		    height: 34px;
		    border-radius: 20px;
		    padding-left: 35px;
		    border-color: #ddd;
		    box-shadow: none;
		}
		.search-box input:focus {
		    border-color: #3FBAE4;
		}
		.search-box i {
		    color: #a0a5b1;
		    position: absolute;
		    font-size: 19px;
		    top: 8px;
		    left: 10px;
		}
		table.table tr th, table.table tr td {
		    border-color: #e9e9e9;
		}
		table.table-striped tbody tr:nth-of-type(odd) {
		    background-color: #fcfcfc;
		}
		table.table-striped.table-hover tbody tr:hover {
		    background: #f5f5f5;
		}
		table.table th i {
		    font-size: 13px;
		    margin: 0 5px;
		    cursor: pointer;
		}
		table.table td:last-child {
		    width: 130px;
		}
		table.table td a {
		    color: #a0a5b1;
		    display: inline-block;
		    margin: 0 5px;
		}
		table.table td a.view {
		    color: #03A9F4;
		}
		table.table td a.edit {
		    color: #FFC107;
		}
		table.table td a.delete {
		    color: #E34724;
		}
		table.table td i {
		    font-size: 19px;
		}    
		.pagination {
		    float: right;
		    margin: 0 0 5px;
		}
		.pagination li a {
		    border: none;
		    font-size: 95%;
		    width: 30px;
		    height: 30px;
		    color: #999;
		    margin: 0 2px;
		    line-height: 30px;
		    border-radius: 30px !important;
		    text-align: center;
		    padding: 0;
		}
		.pagination li a:hover {
		    color: #666;
		}	
		.pagination li.active a {
		    background: #03A9F4;
		}
		.pagination li.active a:hover {        
		    background: #0397d6;
		}
		.pagination li.disabled i {
		    color: #ccc;
		}
		.pagination li i {
		    font-size: 16px;
		    padding-top: 6px
		}
		.hint-text {
		    float: left;
		    margin-top: 6px;
		    font-size: 95%;
		} 

		/*filtertable   */

	</style>
</head>
<body>
	<script>
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
	</script>
	<?php include('header.php') ?>
	
	<?php include('dashboard.php') ?>
	<?php include('patient.php') ?>
	<?php include('addpatient.php') ?>
	<?php include('doctor.php') ?>
	<?php include('order.php') ?>
	<?php include('drugs.php') ?>
	<?php include('billing.php') ?>
	<?php include('profile.php') ?>
	

	<script>
	$(document).ready(function(){
	  $("#myInput").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("#myTable tr").filter(function() {
	      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    });
	  });
	});
	</script>

	<script>
	$(document).ready(function(){
	  $("#myInput2").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("#myTable2 tr").filter(function() {
	      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    });
	  });
	});
	</script>
</body>
</html>