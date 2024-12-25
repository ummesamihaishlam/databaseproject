<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Poetsen+One&display=swap" rel="stylesheet">
    <style>
   .anton-regular {
  font-family: "Anton", sans-serif;
  font-weight:400;}
  .navbar_start{
    color:#d91e36;
    text-decoration:none;
    margin-left:50px;


  }
    
  .navbar{
            display: flex;
            align-items: center;
            justify-content:space-around;
            background-color:orange;
            height: 60px;
            margin: 30px 60px;
            border-radious:20px;

        
        }
        .navbar_menu {
            display:flex;
            gap: 20px;
            list-style:none;
            background-color:#f8edeb;
            margin left: 100px;
        
        }
        .navbar_item{
            margin-left:40px;
        }
        .naav_link{
            color:#011627;
            text-decoration:none;
        }
        .from-seciton{
 background-color: #ffffff;
    padding: 20px;
    max-width: 500px;
    height: 300px;
    margin: 20px;
    margin-left: 400px;
    border-radius: 10px;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1);
    
}
   input,select{
     width:100%;
     height:20px;
   }
  label {
   display: block;
   margin-bottom:5px;
   margin-top:5px;
  }
  #btn{
         margin-top:10px;
         padding:10px 20px;
         background-color:orange;
         color:white;
         border:none;
  }
  #btn:hover { 
   background-color: #45a049;
   }


        </style>
</head>
<body>
<div class="container">
    <div class="navbar">
        <a href="#" class="navbar_start anton-regular">MediCorner</a>
        <ul class="navbar_menu">
        <li class="navbar_item"><a href="index.php" class="naav_link">Home</a></li>
<li class="navbar_item"><a href="registration.php" class="naav_link">Registration</a></li>
<li class="navbar_item"><a href="request.php" class="naav_link">Request</a></li>
<li class="navbar_item"><a href="search.php" class="naav_link">Search</a></li>
<li class="navbar_item"><a href="admin.php" class="naav_link">Admin</a></li>
  
      </ul>
      </div>
      <div class="mainpage">
                
          </div>

          <div class="from-seciton">
    <h2>Register here: </h2>
    <form action="" method="POST">
    <label for="Company name">Company Name: </label>
    <input type="text" id="Company name" name="company_name" required>
    <label for="Medicine name">Medicine name : </label>

    <select name="medicine_name" id="Medicine name">
     <option value="napa">napa</option>
     <option value="zi-max">zi-max</option>
     <option value="nexum-mumps">nexum-mumps</option>
     <option value="napa-extra">napa-extra</option>
     <option value="fanadin">fanadin</option>
     <option value="adovas">adovas</option>

    </select>
    <label for="region">Region : </label>
    <input type="text" name="region" id="region" required>
    <label for="contact">Contact : </label>
    <input type="text" name="contact" id="contact ">
    <button id="btn">submit</button>

    </form>
    </div>
    <!-- phpconnect -->
  <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "medicorner";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = $_POST['company_name'];
    $medicine_name = $_POST['medicine_name'];
    $region = $_POST['region'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO registration (company_name, medicine_name, region, contact) VALUES ('$company_name', '$medicine_name', '$region', '$contact')";

if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
     


  </div>
</body>
</html>