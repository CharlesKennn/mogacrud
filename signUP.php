<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sign.css">
    <title>Sign UPt</title>
    <style>
                body{  background:  url(1m.jpg);
         background-position: center;
         background-size: cover;
         height: 50vh;}
        
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: green;
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

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: black;
  }
  .form{
            width: 250px;
            height: 280px;
            background:  url(moga.jpg);
         background-position: center;
         background-size: cover;
         height: 60vh;
            
        }
  </style>
</head>
<body>
<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="login.php">LOG IN</a></li>
  <li><a href="signUP.php">SIGN UP</a></li>
  <li><a href="users.php">USERS</a></li>
</ul>
       
    <?php
        require('./conection.php');
        if (isset($_POST['signUP_button'])) {
            $name=$_POST['name'];
            $lastName=$_POST['lastName'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $confPassword=$_POST['confiPassword'];
           if (!empty($_POST['name'])&& !empty($_POST['lastName'])&& !empty($_POST['email'])&&!empty($_POST['password'])) {
            if ($password== $confPassword) {
                $p=crud::conect()->prepare('INSERT INTO crudtable(name,lastName,email,pass) VALUES(:n,:l,:e,:p)');
                $p->bindValue(':n', $name);
                $p->bindValue(':l', $lastName);
                $p->bindValue(':e', $email);
                $p->bindValue(':p',$password);
                $p->execute();
                echo 'User added successfully!';
            }else{
                echo 'Password does not match!';
            }
           }
        }

    ?>
    <div class="form">
        <div class="title">
            <p>SIGN UP FORM</p>
        </div>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="lastName" placeholder="Last name">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="password" placeholder="Password">
            <input type="text" name="confiPassword" placeholder="Confrim password">
            
            <input type="submit" value="SIGN UP" name="signUP_button"> 
            <a href="./login.php">Do you have account? Sign in</a>
        </form>
    </div>
</body>
</html>