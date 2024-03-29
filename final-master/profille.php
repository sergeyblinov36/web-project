<?php session_start();

?>

<!DOCTYPE html>
<html>

    <head>
        <title>DogFetch</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="includes/style.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body id="wrapper">
    <header>
        <div class="navbar navbar-custom navbar-static-top" id="colorHed">
          <div class="container">
            <div class="navbar-header" id="go-right">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar" style="background-color: #fff;"></span>
                <span class="icon-bar" style="background-color: #fff;"></span>
                <span class="icon-bar" style="background-color: #fff;" ></span>
              </button>


              <ul class="nav navbar-nav navbar-left leftSise2" style="float: right;">
                <li class="dropdown" id="wi"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                  class="glyphicon glyphicon-bell" id="icon-Nav"></span><span class="label label-primary">42</span>
                  </a>
                </li>
                                  <?php if(isset($_SESSION["name"]))
                  echo '<li class="dropdown" id="wi"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                  class="glyphicon glyphicon-user"  id="icon-Nav"></span>'.  $_SESSION["name"] .' </a>
                  <ul class="dropdown-menu" id="wi2">
                      <li><a href="#"><span class="glyphicon glyphicon-user"></span>פרופיל</a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-cog"></span>הגדרות</a></li>
                      <li class="divider"></li>
                      <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
                    </ul>
                  </li>';
                  else  echo '<li id="wi"><a href="login.php" ><span class="glyphicon glyphicon-user"  id="icon-Nav"></span> התחבר </a></li>'?>
              </ul>
                                                              

              <ul class="nav navbar-nav navbar-left leftSise">
                <li class="dropdown" id="wi"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                    class="glyphicon glyphicon-bell" id="icon-Nav"></span>התראות <span class="label label-primary">42</span>
                    </a>
                    <ul class="dropdown-menu"  id="wi2">
                        <li><a href="#"><span class="label label-warning">7:00 AM</span>גולי נמצאת באזור ספה</a></li>
                        <li><a href="#"><span class="label label-warning">8:00 AM</span>דיבל 300 כ-4 דק</a></li>
                        <li><a href="#"><span class="label label-warning">9:00 AM</span>גולי בחדר שלך רון </a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="text-center">צפיה כל ההתראות</a></li>
                    </ul>
                </li>
                <li class="dropdown" id="wi"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                  class="glyphicon glyphicon-envelope"  id="icon-Nav"></span>הודעות <span class="label label-info">32</span>
                  </a>
                  <ul class="dropdown-menu" id="wi2">
                      <li><a href="#"><span class="label label-warning">4:00 AM</span>Favourites Snippet</a></li>
                      <li><a href="#"><span class="label label-warning">4:30 AM</span>Email marketing</a></li>
                      <li><a href="#"><span class="label label-warning">5:00 AM</span>Subscriber focused email
                        design</a></li>
                      <li class="divider"></li>
                      <li><a href="#" class="text-center">View All</a></li>
                  </ul>
                </li>

                  <?php if(isset($_SESSION["name"]))
                  echo '<li class="dropdown" id="wi"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                  class="glyphicon glyphicon-user"  id="icon-Nav"></span>'.  $_SESSION["name"] .' </a>
                  <ul class="dropdown-menu" id="wi2">
                      <li><a href="#"><span class="glyphicon glyphicon-user"></span>פרופיל</a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-cog"></span>הגדרות</a></li>
                      <li class="divider"></li>
                      <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
                    </ul>
                  </li>';
                  else  echo '<li id="wi"><a href="login.php" ><span class="glyphicon glyphicon-user"  id="icon-Nav"></span> התחבר </a></li>'?>
                </li>
              </ul>


              <a id="Logo" href="index.php">
                  <span class="fa fa-paw paw1"></span>
                  <h1 class="Hdog">Dog </h1>
                  <span class="logoIMG"></span> 
                  <h1 class="Hfetch"> Fetch</h1> 
                  <span class="fa fa-paw paw2"></span>                            
              </a>  
                            
                          
              </div>
                <div class="collapse navbar-collapse" id="fix">
                  <ul class="nav navbar-nav" id="onlyapp" id="moveRight">
                  <?php if(isset($_SESSION["name"])) echo '
                      <li><a href="#"><img src="images/avatar.svg" class="imagHumborger">הגדרות פרפיל </a></li>
                      <li class="active"><a href="listDogsPage.php"><img src="images/add-dog.svg" class="imagHumborger">הכלבים שלי</a></li>   
                      <li class="active"><a href="#"><img src="images/animal.svg" class="imagHumborger">מעקב טיפול</a></li>
                      <li class="active"><a href="listDOT.php"><img src="images/dot.svg" class="imagHumborger">אזורים אזורים</a></li>
                      <li class="active"><a href="#"><img src="images/colar.svg" class="imagHumborger">מכשיר אלקטרוני</a></li>
                      <li class="active"><a href="logout.php"><img src="images/logout.svg" class="imagHumborger"> התנתק\י</a></li>';
                      else echo '<li><a href="#"><img src="images/avatar.svg" class="imagHumborger">הגדרות פרפיל </a></li>
                      <li class="active"><a href="login.php"><img src="images/add-dog.svg" class="imagHumborger">הכלבים שלי</a></li>   
                      <li class="active"><a href="login.php"><img src="images/animal.svg" class="imagHumborger">מעקב טיפול</a></li>
                      <li class="active"><a href="login.php"><img src="images/dot.svg" class="imagHumborger">אזורים אזורים</a></li>
                      <li class="active"><a href="login.php"><img src="images/colar.svg" class="imagHumborger">מכשיר אלקטרוני</a></li>';?>
                </div><!--/.nav-collapse -->
              </div>
            </div>




            <div class="navbar navbar-custom navbar-static-top" id="notonapp">
              <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  </div>
                  <div class="collapse navbar-collapse" id="moveRight">
                    <ul class="nav navbar-nav" id="wi">
                    <?php if(isset($_SESSION["name"])) echo '
                    <li class="active"><a href="#">הגדרות</a></li>
                    <li class="active"><a href="table.php"> בקרת טיפול</a></li>
                      <li class="active"><a href="#">טיפול משמעת</a></li>
                      <li class="active"><a href="#"> WIFI מעקב </a></li>
                      <li class="active"><a href="#"> GPS מעקב </a></li>
                      <li class="active"><a href="listDogsPage.php">הכלבים שלי</a></li>   
                      <li><a href="index.php">בית</a></li>';
                      else echo '  <li class="active"><a href="login.php">הגדרות</a></li>
                      <li class="active"><a href="table.php"> בקרת טיפול</a></li>
                      <li class="active"><a href="login.php">טיפול משמעת</a></li>
                      <li class="active"><a href="login.php"> WIFI מעקב </a></li>
                      <li class="active"><a href="login.php"> GPS מעקב </a></li>
                      <li class="active"><a href="login.php">הכלבים שלי</a></li>   
                      <li><a href="index.php">בית</a></li>';?>
                    </ul>
                  </div><!--/.nav-collapse -->
                </div>               
              </div>
      </header>





        <main>
            <div class="container">
                <div class="row" id="namerow">
                    <div class="col-xs-6 col-xs-offset-3">
                            <h4 class="Hh3"> גולי פרופיל </h4>
                    </div>

                <div id="main_area">
                    <!-- Slider -->
                    <div class="row">
                        <div class="col-xs-12" id="slider">
                            <!-- Top part of the slider -->
                            <div class="row">
                                <div class="col-sm-8" id="carousel-bounding-box">
                                    <div class="carousel slide" id="myCarousel">
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                            <img src="images/d1.jpg"></div>

                                            <div class="item" data-slide-number="1">
                                            <img src="images/d2.jpg"></div>

                                            <div class="item" data-slide-number="2">
                                            <img src="images/d3.jpg"></div>

                                            <div class="item" data-slide-number="3">
                                            <img src="images/d4.jpg"></div>

                                            <div class="item" data-slide-number="4">
                                            <img src="images/d5.png"></div>

                                            <div class="item" data-slide-number="5">
                                            <img src="images/d666.jpg"></div>
                                        </div><!-- Carousel nav -->
                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                        </a>                                
                                    </div>
                                </div>

                                <div class="col-sm-4 no-none" id="carousel-text"  style="text-align: center;">
                                    <div id="some" >
                                        <h2 class="H2-none">גולי</h2>
                                        <p>לברדור מעורב ,נקבה,בת 3 שנים</p>
                                        <p class="sub-text">עודכן ב24 אוקטובר 2019</p>
                                        <br>
                                        <p>מטפל: רון</p>
                                        <div class="row ">
                                            <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                                                <img src="images/ron.jpg" class="rounded-circle">
                                            </div>
                                        </div>
                                        <p>87%</p>
        
                                    </div>
                                </div>             
                            </div>
                        </div>
                    </div><!--/Slider-->
                </div>

                <div class="row hidden-xs" id="slider-thumbs">
                    <!-- Bottom switcher of slider -->
                    <ul class="hide-bullets">
                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-0"><img src="images/d1.jpg"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-1"><img src="images/d2.jpg"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-2"><img src="images/d3.jpg"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-3"><img src="images/d4.jpg"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-4"><img src="images/d5.png"></a>
                        </li>

                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-5"><img src="images/d666.jpg"></a>
                        </li>
                    </ul>                 
                </div>
            </div>







            <div class="container main-secction">
                <div >          
                    <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left no-none">                           
                        <div class="row ">                                                                                                  
                            <button class="btn btn-warning btn-block">ערוך פרופיל</button>                                   
                            <button id="btn-contact" class="btn btn-success btn-block follow">ממצאי טיפול</button>                                                                    
                            <button id="btn-contact" class="btn btn-success btn-block follow">הגדרות טיפול</button>                           
                        </div>
                                <div class="row user-detail-row">
                                    <div class="col-md-12 col-sm-12 user-detail-section2 pull-left" style="text-align: center;">
                                        <div class="border"></div>
                                        <p>פרופיל עודכן ב24 לאוקטובר ע"י רון</p>
                                        <p>התראה מרשימה ב13 למאי 13:54</p> 
                                        <p>טיפול משמעת אחרון ב2 מאי -לא טופל</p>
                                    </div>                           
                                </div> 
                            </div>
                        </div>

                        <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                            <div class="row profile-right-section-row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <button class="btn btn-warning btn-block" id="yes-none" >ערוך פרופיל</button>  

                                        <div class="col-md-8">
                                            <div class="col-md-12 profile-header">
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">                                                                            
                                                </div>                                                   
                                                <div class="panel panel-default">
                                                    <div class="panel-heading resume-heading">
                                                       <div class="row">
                                                          <div class="col-lg-12">
                                                             <div >
                                                                <div class="row">
                                                                    <ul class="list-group" style="margin-left: 30%; text-align: right;">
                                                                            <li class="list-group-item">מטפל :רון גוניור</li>
                                                                             <li class="list-group-item">טיפול עיקרי: הריסת חפצים</li>
                                                                             <li class="list-group-item"> 46 ימים בהליך </li>
                                                                             <li class="list-group-item">מדד עליה :70%</li>
                                                                             <li class="list-group-item">התראה אחרונה לפני 4 ימים </li>
                                                                             <li class="list-group-item"><i class="fa fa-phone"></i> 000-000-0000 </li>
                                                                             <li class="list-group-item"><i class="fa fa-envelope"></i> ron@example.com</li>
                                                                    </ul>                              
                                                                </div>                                                                                 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="bs-callout bs-callout-danger">
                                                        <h4>גולי טיפול</h4>
                                                        <p>
                                                           מגיעה ממשפחת אומנה ,תוקפנית כפי אנשים וכלבים, לא מסתדרת לבד ,הורסת חפצים ואינה יודעת להתמודד עם נטישה
                                                        </p>
                                                        <p>
                                                              טיפול עיקרי הוגדר להיותת בהריסת רכוש, טיפול משני הוגדר להיות בהתנהלות מול כלבים נוספים 
                                                        </p>
                                                        <p>יעד זמן הטיפול כ60 ימים להתמודדות עם הריסת רכוש</p> 
                                                        <p>התראההוגדרה: אזור "ספה גדולה" ,"רון חדר" ת "מטבח" , "חדר אלין", לא הוגדר טיפול מערכת. זמן התראה ממוצע כ-3 דק אחר שהיהי</p> 
                                                </div>


                                                <div class="bs-callout bs-callout-danger">
                                                        <h4>תרשים מעקב של גולי </h4>
                                                        <ul class="list-group">
                                                            <a class="list-group-item inactive-link" href="#">
                                                              <div class="progress">
                                                                    <div data-placement="top" style="width: 80%;" 
                                                                        aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-success">
                                                                        <span class="sr-only">80%</span>
                                                                        <span class="progress-type">הריסת חפצים </span>
                                                                    </div>
                                                                </div>
                                                                <div class="progress">
                                                                    <div data-placement="top" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">
                                                                        <span class="sr-only">70%</span>
                                                                        <span class="progress-type">תוקפנות</span>
                                                                    </div>
                                                                </div>
                                                                <div class="progress">
                                                                    <div data-placement="top" style="width: 70%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-success">
                                                                        <span class="sr-only">70%</span>
                                                                        <span class="progress-type">שיפור בהתראות</span>
                                                                    </div>
                                                                </div>
                                                                <div class="progress">
                                                                    <div data-placement="top" style="width: 65%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" role="progressbar" class="progress-bar progress-bar-warning">
                                                                        <span class="sr-only">65%</span>
                                                                        <span class="progress-type">פעילות לב ובריאות</span>
                                                                    </div>
                                                                </div>
                                                                <div class="progress">
                                                                    <div data-placement="top" style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                                                                        <span class="sr-only">60%</span>
                                                                        <span class="progress-type">הפעלת משחק ביתי</span>
                                                                    </div>
                                                                </div>
                                                                <div class="progress">
                                                                     <div data-placement="top" style="width: 50%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning">
                                                                        <span class="sr-only">50%</span>
                                                                        <span class="progress-type">תזונה</span>
                                                                     </div>
                                                                </div>
                                                            </a>                                                                                                                                 </a>
                                                        </ul>
                                                </div>

                                                
                                                <div class="bs-callout bs-callout-danger">
                                                    <h4>רשימת פידבקים </h4>
                                                    <p>
                                                       מגיעה ממשפחת אומנה ,תוקפנית כפי אנשים וכלבים, לא מסתדרת לבד ,הורסת חפצים ואינה יודעת להתמודד עם נטישה
                                                    </p>
                                                    <p>
                                                          טיפול עיקרי הוגדר להיותת בהריסת רכוש, טיפול משני הוגדר להיות בהתנהלות מול כלבים נוספים 
                                                    </p>
                                                    <p>יעד זמן הטיפול כ60 ימים להתמודדות עם הריסת רכוש</p> 
                                                    <p>התראההוגדרה: אזור "ספה גדולה" ,"רון חדר" ת "מטבח" , "חדר אלין", לא הוגדר טיפול מערכת. זמן התראה ממוצע כ-3 דק אחר שהיהי</p> 
                                                </div>

                                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>


        <footer>
                <div class="footer-top"> 
                        <div class="container">
                          <div class="col-lg-2 col-xs-12 text-center">
                              <a href="#"><i class="fa fa-facebook fa-2x"></i>Facebook</a>
                          </div>
                           <div class="col-lg-2 col-xs-12 text-center">
                              <a href="#"><i class="fa fa-twitter fa-2x"></i>Twitter</a>
                          </div>
                           <div class="col-lg-2 col-xs-12 text-center">
                              <a href="#"><i class="fa fa-flickr fa-2x"></i>Flickr</a>
                          </div>
                           <div class="col-lg-2 col-xs-12 text-center">
                              <a href="#"><i class="fa fa-tumblr fa-2x"></i>Tumblr</a>
                          </div>
                           <div class="col-lg-2 col-xs-12 text-center">
                              <a href="#"><i class="fa fa-github fa-2x"></i>Github</a>
                          </div>
                           <div class="col-lg-2 col-xs-12 text-center">
                              <a href="#"><i class="fa fa-google-plus fa-2x"></i>Google</a>
                          </div>
                        </div> 
                     </div>  
                     
                     <div class="container" style="border-top:1px solid grey;">
                         <div class="row text-center">   
                             <div class="col-lg-6 col-lg-offset-3">
                                 <ul class="menu">
                                     <li>
                                         <a href="#">בית</a>
                                     </li>
                                            
                                     <li>
                                         <a href="#">אודות</a>
                                     </li>
                                            
                                     <li>
                                         <a href="#">Blog</a>
                                     </li>
                                            
                                     <li>
                                         <a href="#">גלריה</a>
                                     </li>
                                            
                                     <li>
                                         <a href="#">צור קשר</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
        </footer>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="./includes/script.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    </body>
</html>