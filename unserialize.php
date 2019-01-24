<html>
<head>
<meta http-equiv="refresh" content="10">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
  body {
    background-color: #fefbd8;
}
h2 {
    background-color: #80ced6;
}
th {
    background-color: #f18973;
}
.footer{
	position:fixed;
	bottom:0;
	width:1000px;
}
.open {
    background-color: blue;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
   
    cursor: pointer;
}
.pending {
    background-color: yellow;
    
    color: black;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
   
    cursor: pointer;
}
.close {
    background-color: red;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
   
    cursor: pointer;
}



  </style>
  <div class="container-fluid bg-1">
  
<table border='1' class='table' cellspacing='1' cellpadding="1" >
			<h2>list of Quotation request</h2>
			 <tr>
			<th>Form ID</th>
            <th>IDENTIFICATION NUMBER</th>
            <th>CAR REG</th>
			<th>EMAIL</TH>
			<TH>FULL NAME</TH>
			<TH>STATUS</TH>
			
			</tr>
			<button onClick="location.href='/rest_api/product/read.php'" class="btn btn-info">Quest</button>
			<button onClick="location.href='contactUs.php'" class="btn btn-info" > User Contact </button>
			

<?php
	$conn=new mysqli("localhost","root","","testsaja2");
	//$sql="select form_value from wp_db7_forms";
	$result=mysqli_query($conn,'call latest_user');
	
		
	while($string=mysqli_fetch_array($result))
	{
		
				
	echo"<tr><td>".$string['id']."</td>";	
		$data=unserialize($string[0]);
		
		foreach($data as $datas=>$value)
		{
			
			
			if($datas=='ur-id')
			{
				 echo "<td>".$value."</td>";				
			}
			elseif($datas=='ur-name')
			{
				  echo "<td>".$value."</td>";				
			}
			elseif($datas=='email')
			{
				 echo "<td>".$value."</td>";					
			}
			elseif($datas=='RegNum')
			{
				  echo "<td>".$value."</td>";			
			}
			
		}
		if($string['status']==0)
			echo "<td><a class='open' href='/myinsurans/unser.php?id=".$string['id']."'>OPEN</a></td>";
		
		else if($string['status']==1)
			echo "<td><a class='pending'href='/myinsurans/unser.php?id=".$string['id']."'>ON GOING</a></td>";
		
		else if($string['status']==2)
			echo "<td><a class='close'>"."CLOSED"."</a></td>";
		
	}
?>



<div class=footer>
<ul class="pager">

    <li class="previous"><a href="#">Previous</a></li>
    <li class="next"><a href="#">Next</a></li>
  </ul>

</div>
 