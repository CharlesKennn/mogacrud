<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./sign.css">
    <title>Sign UPt</title>
    <style>
        body{  
          background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(moga.jpg);
         background-position: center;
         background-size: cover;
         height: 50vh;}
        
        
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
        if (isset($_GET['id_up'])) {
            $id_up=$_GET['id_up'];
            $data=crud::userDataPerId($id_up);
        }
        if (isset($_POST['signUP_button'])) {
            $name=$_POST['name'];
            $lastName=$_POST['lastName'];
            $email=$_POST['email'];
            $password=$_POST['password'];
           if (!empty($_POST['name'])&& !empty($_POST['lastName'])&& !empty($_POST['email'])&&!empty($_POST['password'])) {
    
                $p=crud::conect()->prepare('UPDATE crudtable SET name=:n,lastName=:l,email=:e,pass=:p where id=:id');
                $p->bindValue(':id',$id_up);
                $p->bindValue(':n', $name);
                $p->bindValue(':l', $lastName);
                $p->bindValue(':e', $email);
                $p->bindValue(':p',$password);
                $p->execute();
                echo 'Updated!';

            }
           }
        

    ?>
    <div class="form">
        <div class="title">
            <p>UPDATING USERS DATA</p>
        </div>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Name" value="<?php if(isset($data)){
echo $data['name'];
            } ?>">
            <input type="text" name="lastName" placeholder="Last name" value="<?php if(isset($data)){
echo $data['lastName'];
            } ?>">
            <input type="email" name="email" placeholder="Email" value="<?php if(isset($data)){
echo $data['email'];
            } ?>">
            <input type="text" name="password" placeholder="Password" value="<?php if(isset($data)){
echo $data['pass'];
            } ?>">
            <input type="submit" value="UPDATE" name="signUP_button"> 
        </form>
    </div>
</body>
</html>