<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sign.css">
    <title>Sign UPt</title>
    <style>
        .form{
            width: 230px;
            height: 280px;
            background:  url(moga.jpg);
         background-position: center;
         background-size: cover;
         height: 50vh;
            
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

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: green;
  }
  body {
            width: 100%;
    background:  linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%),  url(ccs3.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
    font-family: Arial, sans-serif;
}


    </style>
</head>
<body>
<ul>
  <li><a href="home.php">HOME</a></li>
  <li><a href="login.php">LOG IN</a></li>
  <li><a href="signUP.php">SIGN UP</a></li>
  
</ul>
       

        <?php
            require('./conection.php');
            if (isset($_POST['login_button'])) {
                $_SESSION['validate']=false;
                $name=$_POST['name'];
                $password=$_POST['password'];
                $p=crud::conect()->prepare('SELECT * FROM crudtable WHERE name=:n and pass=:p');
                $p->bindValue(':n',$name);
                $p->bindValue(':p',$password);
                $p->execute();
                $d=$p->fetchAll(PDO::FETCH_ASSOC);
                if ($p->rowCount()>0) {
                    $_SESSION['name']=$name;
                    $_SESSION['pass']=$password;
                    $_SESSION['validate']=true;
                    header('location:website.php');
                }else {
                    echo'Make sure that you are registered!';
                }

        }
        ?>
    <div class="form">
        <div class="title">
            <p>LOG IN FORM</p>
        </div>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="password" placeholder="Password">
            <input type="submit" value="Login" name="login_button"> 
            <a href="./signUP.php" style="position:relative; left:50px;top:-8px; font-size:14px">Click here to sign up</a>
        </form>
    </div>
</body>
</html>