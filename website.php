<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        html{
            box-sizing: border-box;
            font-size: 50%;
            box-shadow: 5px 5px white, 10px 10px white, 15px 15px white;
        }
        body{
            width: 100%;
         background:  url(12.jpeg);
         background-position: center;
         background-size: cover;
         height: 100vh;
            font-family:'sans-serif';
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
       .container {
               width: 50%;
                border: 2px solid green;
                padding: 20px;
                 margin: auto;
                 text-align: center;
                background-color: green;
                
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: yellow;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


li a:hover {
  background-color: green;
  }
  
  
        </style>
</head>
<body>
   
<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="login.php">LOG IN</a></li>
  <li><a href="signUP.php">SIGN UP</a></li>

</ul>

<div class="container">
  <h1>WELCOME TO OUR WEBSITE</h1>
  <h1>YOU LOGGED IN SUCCESSFULLY!</h1>
</div>

     
</body>
</html>