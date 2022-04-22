
<?php

include("auth.php");

?>



<html lang="en">
<head>
  <title>Course Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 600px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
     footer {
      background-color: #555;
      color: white;	  
	  position: relative;
	  right: 0;
	  bottom: 0;
	  left: 0;
	  padding: 1rem;
	  text-align: center;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
  </style>
</head>
<body bgcolor="#c1bdba">

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav" style='height:900px;'>
      <h2>IS475 Course Registration</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="enroll.html">Enroll Course</a></li>
        <li><a href="dropCourse.html">Drop Course</a></li>
        <li><a href="schedule.html">Enrolled Courses</a></li>
        <li><a href="cart.html">Course Cart</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul><br>
    </div>

    <div class="col-sm-9" style="background-color:white">
	<br>
	<br>
	<div class='container' style='width:100%; '>
		<table id='theTable' class='display'>
			<thead>
			  <tr>
				<th class='col-5'>Course Id</th>
				<th class='col-5'>Course Name</th>
				<th class='col-5'>Description</th>
				<th class='col-5'>Term</th>
				<th class='col-5'>Status</th>
			  </tr>
			</thead>
		</table>
	</div>	
	
	 <br><br>
    </div>
  </div>
</div>


<footer class="container-fluid">
  <p>Taylor Aguilera, Ryan Miller, Faisal</p>
</footer>

<script type="text/javascript">

$( document ).ready(function() {
    $('#theTable').dataTable({
        "ajax": {
            url: 'welcome.php'
        },
		"columns": [
            {"data": "id"},
            {"data": "name"},
            {"data": "descr"},
            {"data": "term"},
            {"data": "status"}
        ],
  });   
});

</script>

</body>
</html>