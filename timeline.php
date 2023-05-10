<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        span {
            opacity: 50%;
        }
    </style>

    <link rel="stylesheet" href="css/bootstrap.min.css" />

</head>
<body class="bg-dark">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="timeline1.php" class="btn btn-primary">My Design</a></p><a href="logout.php" class="btn btn-warning">Logout</a></p>
                </div>
            </div>

            
        </div>


        <div class="col-md-8">

          
            
            <div class="card mb-3">
                <div class="card-body"> <b>About Me</b> <br>
                I am a Creative State Polytechnic student 
majoring in Multimedia who is learning 
many new things about multimedia itself, 
I can do web design, and digital illustrator
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                <b>Biodata</b> <br>
                Birthday:
                3 February 2002 <br>
                Website:
                www.example.com<br>
                Phone:
                089503231206 <br>
                City:
                Jakarta, INDONESIA<br>
                Age:
                20<br>
                Job:
                Student<br>
                Email:
                dhannyhidayat8@gmail.com
                </div>
            </div>

<div class="card mb-3">
                <div class="card-body">
                <b>Education</b> <br>
                <ul>
             <li>Multimedia(2021)</li>
            <span>Creative Media State Polytechnic</span> <br>
            <li>Natural Sciences Major</li>
            <span>State Senior High School 2 Sukabumi(2019)</span><br>
            Member of OSIS State Senior High School 2 Sukabumi in 2017‑2018 <br>
            Scout Member of State Senior High School 2 Sukabumi in 2017‑1018
            </ul>
                </div>
            </div>
             <div class="card mb-3">
                <div class="card-body"> <b>Skills</b> <br>
                Web Deveploment     <span>Intermediate</span><br>
                Adobe Ilustrator    <span>Intermediate</span><br>
                Communication  <span>Advanced</span><br>
                Data Analysis <span>Advanced</span><br>
                Proﬁcient with Microsoft Oﬃ 
ce and Internet Explorer <span>Expert</span><br>
                </div>
            </div>
        </div>
    
    </div>
</div>

</body>
</html>