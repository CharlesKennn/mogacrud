<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      *{
    padding: 0;
    margin-top:  10px;
    box-sizing: border-box;
}
body{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(cpsu1.png);
    background-position: center;
    background-size: cover;
    height: 100vh;
}
table{
    width: 90%;
    display: fixed;
    margin: auto;
}
table,tr,td,th{
    border: 1px solid rgb(200,200,200);
    border-collapse: collapse;
}
th{
    width: 500px;
    height: 30px;
    background: rebeccapurple;
    color: white;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
td{
    text-align: center;
}
a{
    text-decoration: none;
}
img{
    width: 20px;
    height: 20px;
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
</style>
</head>

<body>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="login.php">LOG IN</a></li>
  <li><a href="signUP.php">SIGN UP</a></li>
  
</ul>
   
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php
        require('./conection.php');
            $p=crud::Selectdata();
            if (isset($_GET['id'])) {
                $id=$_GET['id'];
                $e=crud::delete($id);
            }
            if (count( $p)>0) {
                for ($i=0; $i < count( $p); $i++) { 
                   echo '<tr>';
                   foreach ( $p[$i] as $key => $value) {
                    if ($key!='id') {
                        echo '<td>'.$value.'</td>';
                    }
                    }
                    ?>

                    <td><a href="users.php?id=<?php echo $p[$i]['id'] ?>"><img src="./trash.svg" alt="" srcset=""></a></td>
                    <td><a href="upDate.php?id_up=<?php echo $p[$i]['id'] ?>"><img src="./edit.svg" alt="" srcset=""></a></td>
                    <?php
                    echo '</tr>';
                }
            }


    ?>
        </tbody>
    </table>
</body>
</html>