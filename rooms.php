<?php 

$roomname=$_GET['roomname'];

//connection to the database
include 'db_connect.php';

$sql ="SELECT * FROM 'rooms' WHERE roomname='$roomname'";
$result = mysqli_query($conn, $sql);

if($result)
{
    if(mysqli_num_rows($result)==0);
    {
        $message="The room does not exists .Try creating a new one ";
        echo '<script language="javascript">';
        echo 'alert("'.$message.'");';
        echo 'window.location="http://localhost/chatroom"';
        echo "</script>";
    }

}
else
{
    echo "Error description: " . mysqli_error($conn);

}


echo "lets chat now";



?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
 
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.anyClass {
    height:350px;
    overflow-y:scroll;
}
</style>
</head>
<body>

<nav class="d-inline-flex flex-row mt-2 mt-md-0 ms-md-auto align-items-center">
    <a class="me-3 ml-30 py-2 link-body-emphasis text-decoration-none" href="#">AnonymousChat</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Home</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">About</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="#">Contact</a>
        
      </nav>


<h2>Chat Messages - <?php echo $roomname; ?></h2>

<div class="container">
    <div class="anyClass">
  <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
  </div>
</div>

<!-- <div class="container darker">
  <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>

<div class="container">
  <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
  <p>Sweet! So, what do you wanna do today?</p>
  <span class="time-right">11:02</span>
</div>

<div class="container darker">
  <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
  <span class="time-left">11:05</span>
</div> -->


<input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="Add Messages"><br>
<button class="btn btn-default border-1px solid black" name="submit" id="submitmsg">Send</button>

<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>




