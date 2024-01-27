<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
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
         background:  url(ccs.jpg);
         background-position: center;
         background-size: cover;
         height: 100vh;
            font-family:'sans-serif';
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .grid{
            display: grid;
            width: 114em;
            grid-gap: 6rem;
            grid-template-columns: repeat(auto-fit,minmax(30rem, 1fr));
            align-items: start;
        }
        .grid-item{
            background-color: green;
            border-radius: 0.4rem;
            overflow: hidden;
            box-shadow: 0 3rem 6rem rgba(0,0,0, 0.1);
            cursor: pointer;
            transition: 0.2s;
        }
        .grid-item:hover{
            transform: translateY(-0.5%);
            box-shadow: 0 4rem 8rem rgba(0,0,0, 0.5);

        }
        .card-img{
            display: block;
            width: 100%;
            height: 20rem;
            object-fit:cover;
            

        }
        .card-content{
            padding: 3rem;
            border: 1px solid green;
            box-shadow: 200rem;
            
        }
        .card-header{
            font-size: 3rem;
            font-weight: 500;
            color: #0d0d0d;
            margin-bottom: 1.5rem;
        }
        .card-text{
            font-size: 1.6rem;
            letter-spacing: 0.1rem;
            line-height: 1.7;
            color: white;
            margin-bottom: 2.5rem;
        }
        .card-btn{
            display: block;
            width: 100%;
            padding: 1.5rem;
            font-size: 2rem;
            text-align: center;
            color: #3363ff;
            background-color: #d8e0fd;
            border: none;
            border-radius: 0.4rem;
            transition: 0.2s;
            cursor: pointer;
            letter-spacing: 0.1rem;
        }
        .card-btn span{
            margin-left: 1rem;
            transition: 0.2s;
        }
        .card-btn:hover,
        .card-btn:active{
            background-color: #c2cffc;
        }
        .card-btn:hover span,
        .card-btn:active{
            margin-left: 1.5rem;
        }
        body{
            padding: 3rem;
        }
        .grid{
            grid-gap: 3rem;
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
  color: white;
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
<div class="grid">
    <div class="grid-item">
        <div class="card">
            <img class="card-img" src="ccs1.jpg" atl="CCS">
            <div class="card-content">
                <h1 class="card-header"><center>INFO-TECH </center></h1>
                <p class="card-text">
                CPSU's dedication to providing quality and advanced higher <br>
                education reflects a profound understanding of the unique needs of its neighboring areas.<br>
                 Firmly rooted in its mission, CPSU is on an inspiring journey to <br>
                 evolve into a technology-driven multi-disciplinary university by 2023.


            </p>
            <button class="card-btn">Visit<span></span>
            </button>
        </div>
     </div>
   </div>
   <div class="grid-item">
        <div class="card">
            <img class="card-img" src="ccs3.jpg" atl="CCS">
            <div class="card-content">
                <h1 class="card-header"><center>CPSU</center></h1>
                <p class="card-text">
                CPSU's dedication to providing quality and advanced higher <br>
                education reflects a profound understanding of the unique needs of its neighboring areas.<br>
                 Firmly rooted in its mission, CPSU is on an inspiring journey to <br>
                 evolve into a technology-driven multi-disciplinary university by 2023.

            </p>
            <button class="card-btn">Visit<span></span>
            </button>
        </div>
     </div>
   </div>
   <div class="grid-item">
        <div class="card">
            <img class="card-img" src="ccs4.jpg" atl="CCS">
            <div class="card-content">
                <h1 class="card-header"><center>CPSU</center></h1>
                <p class="card-text">
                CPSU's dedication to providing quality and advanced higher <br>
                education reflects a profound understanding of the unique needs of its neighboring areas.<br>
                 Firmly rooted in its mission, CPSU is on an inspiring journey to <br>
                 evolve into a technology-driven multi-disciplinary university by 2023.

            
            </p>
            <button class="card-btn">Visit<span></span>
            </button>
        </div>
     </div>
   </div>
</div>


</body>
</html>