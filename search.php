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
   /* universal css */
*{
   margin:0px;
   padding:0px;
}
  .navbar_start {
   color: #d91e36;
    text-decoration: none;
    margin-left:50px;
  
  }

  .anton-regular {
  font-family: "Anton", sans-serif;
  font-weight:400;
  font-style
 normal;
}
.body{
 background-color: #f9f9f9;
}
.navbar{
 display:flex;
 justify-content:space-around;
 align-items: center;
 background-color:orange;
 height:60px;
 margin: 30px 60px;
 border-radius: 20px;
}
.navbar_menu{
   display: flex;
   gap:5px;
     list-style: none;
     margin-left: 100px;

 
}
.container{
  width:100%;
}
.navbar-item{
    margin-left:40px;

}
.navbar-link{
    color:#011627;
    text-decoration:none;

}
.navbar-link:hover{
      color:#d91e36;
}

/* private css */
 .search-section{
        margin-left: 400px;
        margin-top: 100px;   
        width:600px;
 }
 .search-bar input { height:30px; margin-bottom: 10px; }

        .search-bar input[type="text"] { width: 40%; margin-right: 10px; }

        #btn {
           margin-top: 20px;
           padding: 10px 20px;
           background-color: orange;
           color: white;
           border: none;
           cursor: pointer;
       }
       #btn:hover {
           background-color: #45a049;
       }
       
  </style>
</head>
<body>
           <!-- universal html -->
 <div class="container">
  <div class="navbar">
   <a href="#" class="navbar_start anton-regular ">MediCorner </a>
   <ul class="navbar_menu">
    <li class="navbar-item"> <a href="index.php " class="navbar-link">Home</a></li>
    <li class="navbar-item"> <a href="registration.php " class="navbar-link">Registration</a></li>
    <li class="navbar-item"> <a href="request.php " class="navbar-link">Request</a></li>
    <li class="navbar-item"> <a href="search.php " class="navbar-link">Search </a></li>
    <li class="navbar-item"> <a href="admin.php " class="navbar-link">admin</a></li>

      
   </ul>
  </div>
  <!-- universla html -->
 <!-- private html  -->
          <div class="search-section">
             <h3>Search medicine name </h3>
              <form method= "GET" action="" class="search-bar ">
                   <input type="text" name="medicine_name" id="Medicine name" value="adovas " required >
                   <input type="text" name="region" id="" value="Khulna" reqiured >
                   <button type="submit" id="btn">Search</button>

              </form>
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
          if (isset($_GET['medicine_name']) && isset($_GET['region'])) {
                $medicine_name = $_GET['medicine_name'];
                $region = $_GET['region'];

                $sql = "SELECT Company_Name, Medicine_name, Region, Contact FROM registration WHERE Medicine_name = '$medicine_name' AND Region = '$region'";
                $result = $conn->query($sql);

if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='card'>
                                <h3>{$row['Company_Name']}</h3>
                                <p><strong>Medicine_name:</strong> {$row['Medicine_name']}</p>
                                <p><strong>Region:</strong> {$row['Region']}</p>
                                <p><strong>Contact:</strong> {$row['Contact']}</p>
                                <br>
                              </div>";
                    }
                } else {
                    echo "<p>No data found</p>";
                }
            }

            $conn->close();
            ?>
          </div>
        

</body>
</html>