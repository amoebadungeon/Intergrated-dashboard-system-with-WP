<html>
<head>
  <title>Customer Request</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
<style>
  body {
    background-color: #fefbd8;
}
h2 {
    background-color: #80ced6;
}
#xs {
	
	background:rgba(192,192,192,0.3);
	width: 70%;
	column-count:2;
	 padding-top: 20px;
    padding-right: px;
    padding-bottom: 20px;
    padding-left: 80px;
	margin: 30px;
	border: 1px solid grey
 
   
}
#xxl{
	
	
	text-align:center;
	
}
.pk{
	color:blue;
}
.button1 {
    background-color: blue;
    border: black;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    margin: 4px 2px;
    cursor: pointer;
}


</style>


		
<?php 
			echo"<div id='xs' >";
				$conn=new mysqli("localhost","root","","testsaja2");
				
				if(isset($_GET['id']))
		{
						$id= (int)$_GET['id'];
				
				$query=mysqli_query($conn,"UPDATE wp_db7_forms SET status='1' where id=$id"); 
							
				$result=mysqli_query($conn,"SELECT form_value,status from wp_db7_forms where id=$id");
				echo "<h2>Customer request</h2>";
				
				while($string = mysqli_fetch_array($result))
			{

					$data=unserialize($string[0]);
					
				
					foreach ($data as $custdata=>$value)
				{
					//echo $custdata.":".$value."<br>";
					
					switch($custdata)
					{
						case 'ur-name': echo "Fullname:". $value."<p>";break;
						case "ur-id": echo "NRIC:".$value."<p>";break;
						case "email": echo "Email:".$value."<p>";break;			
						case "gender": echo "Gender:".$value."<p>";break;
						case "DOB": echo"DOB:". $value."<p>";break;
						case "mobile": echo"Phone Number:". $value."<p>";break;
						case "address": echo"Address:". $value."<p>";break;
						case "state": echo"State:". $value."<p>";break;
						case "national": echo "Nationality:".$value."<p>";break;
						case "RegNum": echo"Registration Number:".$value."<p>";break;
						case "model": echo"Vehicle Model:". $value."<p>";break;
						case "chasis": echo"Chasis Number:". $value."<p>";break;
						case "engine": echo "Engine Number:".$value."<p>";break;
						case "seating": echo"Seating Number:". $value."<p>";break;
						case "class": echo"Vehicle Class:". $value."<p>";break;
						case "ManuYear": echo "Manufacturing year:".$value."<p>";break;
						case "cc": echo "Vehicle CC:".$value."<p>";break;
						case "ImportType": echo"Import Type:". $value."<p>";break;
						case "place": echo"Place:". $value."<p>";break;
						case "garage": echo"Garage:". $value."<p>";break;
						case "safety": echo "Safety Features:".$value."<p>";break;
						case "Anti-theft": echo "Anti-theft feature:".$value."<p>";break;
									
					}
						
					
				}
				
			}
			
			if(isset($_POST['return']))
				{
				$query=mysqli_query($conn,"UPDATE wp_db7_forms SET status='0' where id=$id"); 
			header("Location: unserialize.php");
			
			
  
				}
			if(isset($_POST['close']))
				{
				$query=mysqli_query($conn,"UPDATE wp_db7_forms SET status='2' where id=$id"); 
				header("Location: unserialize.php");
				}
			
		}	
		echo"</div>";
?>		




			<div id="xxl" >	
			
			<form method="post"  >
			<button class="btn btn-info btn-lg" name="return"    >RETURN</button>
			<button class="btn btn-info btn-lg" name="close"    >CLOSED</button>
			<button  class="btn btn-info btn-lg" onClick="openWin()" >SEND MAIL</a>
	
 
  
</div>
<script>
function openWin(){
		myWindow=window.open("form.php","_blank","width=500,height=500");
		
}
</script>
<marquee behavior="scroll" direction="left">Press "RETURN" button if you wish to continue your work later, Press "CLOSED" button if you have
 send quotation to customer.<i> The system will be updating later to ease your works. THANK YOU FOR YOUR HARDWORK<i></marquee>


</body>
</html>
