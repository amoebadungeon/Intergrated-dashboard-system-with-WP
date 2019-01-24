<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
	font-family: Arial, Helvetica, sans-serif;
}
*{
	box-sizing: border-box;
}
.container{
	position: center;
	  margin-top: 30px;
    margin-bottom: 30px;
    margin-right: 80px;
    margin-left: 80px;
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px 0px 10px 10px;
}
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; 
  
}
input:hover,
.btn:hover {
  opacity: 1;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

.col {
  float: center;
  width: 50%;
  margin: auto;
  padding: 0px 50px;
  margin-top: 6px;
}
.w3-lobster {
    font-family: "Lobster", Sans-serif;
}

</style>
</head>


<div class="container">
  <form>
    <div class="row">
	
      <h2 style="text-align:center" >MYINSURANS.COM STAFF DASHBOARD</h2>
    
<body>	
 <div class="col">
     <br><img src="myinsurans_logo.png" width="400" height="80" ></img>
 
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login" formaction="/myinsurans/unserialize.php">
      </div>

    </div>
  </form>
</div>
</body>
<?php
	$conn=new mysqli("localhost","root","","myinsurans");
	$sql="select * from staff";
	$result=mysqli_query($conn,$sql);
	
	while($string=mysqli_fetch_array($result))
	{
		
	}
?>