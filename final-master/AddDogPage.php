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
                <form class="form-horizontal" id="moveform" role="form"action="confirm.php" method="GET" >
                    <h2>הוספת כלב חדש</h2>
                    <div class="form-group">
                        <label for="firstName" class="col-sm-3 control-label">שם הכלב</label>
                        <div class="col-sm-9">
                            <input type="text" id="name" name="name" placeholder="Dogs Name" class="form-control"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">שם המטפל </label>
                        <div class="col-sm-9">
                            <input type="text" id="lastName" placeholder="Owners Name" name="id" class="form-control"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phoneNumber" class="col-sm-3 control-label">מספר ציפ אלקטרוני </label>
                        <div class="col-sm-9">
                            <input type="phoneNumber" id="phoneNumber" name="chipId" placeholder="Barkod Namber" class="form-control" required>
                            <span class="help-block">מספר הציפ על גבי הקולר </span>
                        </div>
                    </div>
                  

                    <div class="form-group">
                        <label for="birthDate" class="col-sm-3 control-label">תאריך לידה*</label>
                        <div class="col-sm-9">
                            <input type="date" id="birthDate" name="birthDate" class="form-control" required>
                        </div>
                    </div>
              
                    <div class="form-group">
                            <label for="Height" class="col-sm-3 control-label">גובה* </label>
                        <div class="col-sm-9">
                            <input type="number" id="height" name="height" placeholder="Please write your height in centimetres" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="weight" class="col-sm-3 control-label">משקל* </label>
                        <div class="col-sm-9">
                            <input type="number" id="weight" name="weight" placeholder="Please write your weight in kilograms" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                            <label for="weight" class="col-sm-3 control-label">גזע </label>
                            <select class="col-sm-9" id="breed" name="breed" value="" placeholder="בחר גזע" required >
                                    <option> בחר גזע</option>
                                    <option>לברדור</option>
                                    <option>פינצר</option>
                                    <option>פיטבול</option>
                                    <option>מעורב</option>
                                    <option>אחר</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">מין</label>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio"  name="gender" id="femaleRadio" value="Female">נקבה
                                    </label>
                                </div>
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio"  name="gender" id="maleRadio" value="Male">זכר
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.form-group -->


                    <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label">התנהגות קיימת </label><br><br>
                        <div class="listof">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="materialChecked2" checked>
                                <label class="form-check-label" for="materialChecked2">תוקפנות</label>
                            </div><br>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="materialChecked2" checked>
                                <label class="form-check-label" for="materialChecked2">הריסת חפצים</label>
                            </div><br>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="materialChecked2" checked>
                                <label class="form-check-label" for="materialChecked2">יללות ונביחות</label>
                            </div><br>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="materialChecked2" checked>
                                <label class="form-check-label" for="materialChecked2">צרכים בבית</label>
                            </div><br> 
                        </div>                 
                    </div>


                    <div class="form-group">
                            <label  for="poto" class="col-sm-3 control-label">תמונות</label>
                            <div class="col-sm-9">
                                    <input type="file" class="form-control" id="input" name="pics" value="" placeholder="" multiple accept="image/*" >
                            </div>
                        </div>



                    <div class="form-group">
                        <div class="col-sm-9">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="save">שמור</button>
                </form> <!-- /form -->
            </div> <!-- ./container -->
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

