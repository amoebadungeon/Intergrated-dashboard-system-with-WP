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



					<script>
function valued()
{
	
		 var element= document.getElementById("values");
		
		switch(element.value)
		{
			case "open"  : 
				
				break;
			
			case "pending": 
				element.value="#";
				break;
				
			case "closed":
				break;
		}	
		
	
}
</script>


  </style>
  <div class="container-fluid bg-1">
  
<table border='1' class='table' cellspacing='1' cellpadding="1" >
			<h2>list of User's Contact</h2>
			 <tr>
           
            <th>NAME</th>
       		<th>EMAIL</TH>
			<TH>SUBJECT</TH>
			<TH>MESSAGE</TH>
			
			<TH>REPLY</TH>
			
			</tr>
			<button type="button" class="btn btn-info">Quest</button>
			
<input onClick=href='unser.php?id='.$datas['id'].' value='open' ></input></td>";
<?php
	$conn=new mysqli("localhost","root","","testsaja2");
	//$sql="select form_value from wp_db7_forms";
	$result=mysqli_query($conn,'call latest_user');
	for($i=0;$i<4;$i++){
		
	while($string=mysqli_fetch_array($result))
	{
		
		$data=unserialize($string[0]);
		
		foreach($data as $datas=>$value){
			
			if($datas=='ur-name')
			{
				
				echo"<tr><td>". $value."</td>";			
			}
				else if($datas=='email')
				{
					echo"<td>" .$value."</td>";
				}
					else if($datas=='subject')
					{
						echo"<td>" .$value."</td>";
					}
						else if($datas=='message')
						{
							echo"<td>" .$value."</td>";
						}
							
		else 
			;

		}
		echo '<td> <a href=""> REPLY</a></td>';
		
	}
	}
		
?>
<div class=footer>
<ul class="pager">

    <li class="previous"><a href="#">Previous</a></li>
    <li class="next"><a href="#">Next</a></li>
  </ul>

</div>
 