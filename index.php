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
.navbar_start {color: #990066;}
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

.mainpage{
display: flex;
justify-content:space-between;
margin-top: 100px;
margin-left:50px;

}
.heading{
color:#DB4C00;
font-size:24px;
margin-bottom:10px;
}
.about {
background-color: #ffffff;
padding: 20px;
max-width: 500px;
margin: 20px;
.about {
    background-color: #ffffff;
    padding: 20px;
    max-width: 500px;
    margin: 20px;
    margin-left: 50px;
    border-radius: 10px;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
    text-align: center;
}
.about p {
    font-size: 16px;
    color: #333333;
    line-height: 1.6;
}
.image{
  margin-right:1px;
}


    </style>
</head>
<body>
<!-- Universal html -->
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
                <div class="about">
                       <h2 class="heading">About Us</h2>
                       <p>At MediCorner, your health is our priority. We source our products from reputable manufacturers and strictly adhere to regulatory standards. Our secure payment systems and privacy policies ensure your data is protected at all times.
                        <br>Experience the future of pharmacy with MediCorner. Register today and take the first step towards a healthier, more convenient way of managing your medication and wellness needs.

<br><h4>Your health, our priority  Welcome to MediCorner.

</p>
                </div>
                <div class="image">
                     <img src="Orange.png "weidth="500" height="550">
                </div>
          </div>


  </div>
  </body>
</html>

