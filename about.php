<!DOCTYPE html>
<html lang="en">
<head>
  <title>Haluzz Point</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
  <link rel="stylesheet" href="style.css">
  <style>
    .r {
        margin-top: -57px;
    }
    #team {
    padding: 60px 0;
    text-align: center;
    background-color: ;
    color: #145889;
    margin-top: 0px;
    margin-bottom: 0px;
}
#team h2 {
    position: relative;
    padding: 0px 0px 15px;
}
#team p {
    font-size: 15px;
    font-style: italic;
    padding: 0px;
    margin: 25px 0px 40px;
}
#team h2::after {
    content: '';
    border-bottom: 2px solid #fff;
    position: absolute;
    bottom: 0px;
    right: 0px;
    left: 0px;
    width: 90px;
    margin: 0 auto;
    display: block;
}
#team .member {
    margin: 0px;
    position: relative;
    overflow: hidden;
    background-color: #ffffff;
    padding: 10px;
    border-radius: 15px 0px 15px 0px;
    box-shadow: 0px 1px 6px 0px rgba(0, 0, 0, 0.4);
}
#team .member .member-info {
    display: block;
    position: absolute;
    bottom: 0px;
    left: -200px;
    transition: 0.4s;
    padding: 15px 0;
    background: rgba(0, 0, 0, 0.4);
}
#team .member:hover .member-info {
    left: 0px;
    right: 0px;
}
#team .member h4 {
    font-weight: 700;
    margin-bottom: 2px;
    font-size: 18px;
    color: #fff;
}
#team .member span {
    font-style: italic;
    display: block;
    font-size: 13px;
}
#team .member .social-links {
    margin-top: 15px;
}
#team .member .social-links a {
    transition: none;
    color: #fff;
}
#team .member .social-links a:hover {
    color: #ffc107;
}
#team .member .social-links i {
    font-size: 18px;
    margin: 0 2px;
}

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
        <img src="first.jpg" class="pull-left" style="width:5%;" alt="Logo">
        <li><a href="index.php">Haluzz Point</a></li>
        <li><a href="index.php">HOME</a></li>
        <li class="active"><a href="about.php">ABOUT US</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>  Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<section id="team">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-sm-12 r"><br><br>
                  <h2>Meet Our Team</h2><br><br>
                  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="member-img">
                          <img src="budak.jpg" class="img-fluid" alt="" style="width: 260px">
                      </div>
                        <div class="member-info">
                            <h4>AMIRUL</h4>
                            <span>DEVELOPER</span>
                            <div class="social-links">
                                <a href="https://web.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.pinterest.com"><i class="fab fa-pinterest-p"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="member-img">
                          <img src="zul.jpg" class="img-fluid" alt="" style="width: 260px">
                      </div>
                        <div class="member-info">
                            <h4>ZULFAQAR</h4>
                            <span>UI/UX DESIGNER</span>
                            <div class="social-links">
                                <a href="https://web.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.pinterest.com"><i class="fab fa-pinterest-p"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="member-img">
                          <img src="ajwad.jpg" class="img-fluid" alt="" style="width: 260px">
                      </div>
                        <div class="member-info">
                            <h4>AJWAD</h4>
                            <span>PROJECT MANAGER</span>
                            <div class="social-links">
                                <a href="https://web.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.pinterest.com"><i class="fab fa-pinterest-p"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-8">
                    <div class="member">
                      <div class="member-img">
                          <img src="aiman.jpg" class="img-fluid" alt="" style="width: 280px">
                      </div>
                        <div class="member-info">
                            <h4>AIMAN FIKRI</h4>
                            <span>BACKEND DEVELOPER</span>
                            <div class="social-links">
                                <a href="https://web.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.pinterest.com"><i class="fab fa-pinterest-p"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
               
            </div>
        </div>
    </section>
    
<footer class="container-fluid text-center">
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li>
        <h5 >Open-source Apache Licensed</h5>
      </li>
    </ul>
  </div>
</footer>

</body>
</html>
