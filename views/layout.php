<!DOCTYPE html>
<html>
  <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- links to google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
<!-- link to bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- link to internal style sheet -->
    <link rel="stylesheet" href="views/css/styling.css">
<!-- link to fontawesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!-- scripts required for bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- link to javascript files -->
    <script src="views/javascript/navbar.js"></script>
    <script src="views/javascript/recommendations.js"></script>
  </head>
  <body>
      <!-- navbar -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="https://www.sky.com/">
      <img src="views/images/skylogo.jpg" width="auto" height="80" class="d-inline-block align-top" alt="sky logo">
  </a>
    <!-- Toggler Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item text-right">
            <a class="nav-link" href="https://www.sky.com/help/articles/contacting-sky">Contact Us</a>
      </li>
      <li class="nav-item text-right">
        <div class="btn-group dropright mb-1">
            <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Social Media            
            </button>
       	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <h6 class="dropdown-header text-right">Our Accounts - Follow Us!</h6>
            <div class="dropdown-divider"></div>
      	    <a class="dropdown-item text-right" href="https://www.facebook.com/sky/"><i class="fab fa-facebook-square"></i></a>
      	    <a class="dropdown-item text-right" href="https://www.instagram.com/skyatlanticuk"><i class="fab fa-instagram"></i></a>
      	    <a class="dropdown-item text-right" href="https://twitter.com/SkyUK"><i class="fab fa-twitter"></i></a>
        </div>
        </div>
      </li>
      <li class="nav-item text-right">
        <div class="btn-group dropright mt-1 mb-1">
            <button type="button" class="btn btn-sm btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                File Upload
            </button>
        <div class="dropdown-menu">
            
            <!-- try upload with php file -->
<!--        <form action="views/uploader/uploadhandler.php" method="post"  enctype="multipart/form-data">-->
            
            <!-- try upload with controller -->            
            <form action="?controller=programme&action=addProgrammes" method="post"  enctype="multipart/form-data">
                
                <div class="custom-file">
                    <input type="file" name="uploadFile" class="custom-file-input" id="uploadFile">
                    <label class="custom-file-label" for="uploadFile">Choose file</label>
                    <input type="submit" value="Upload" name="submit">
                </div>
            </form> 
        </div>
        </div>
      </li>
      <li class="nav-item text-right">
        <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="Use the file uploader above to upload programmes.xml file found in resources" id="help">
            Need help with uploading?
        </button>
      </li>
    </ul>
  </div> 
</nav>
      <br><br>
      <div> <p>Tell us your mood - pick up to 4 moods! We can recommend some great movies...</p> </div>
      <!-- slider -->
<div class="row">
    <div class="col-md-3 text-right"><span>Happy</span></div>
    <div class="col-md-6 slidecontainer">
            <input type="range" min="0" max="2" value="1" class="slider" id="happyslider">
    </div>
    <div class="col-md-3 text-left"><span>Sad</span></div>
    <div id="sliderAmount"></div>
</div>
<div class="row">
    <div class="col-md-3 text-right"><span>Awake</span></div>
    <div class="col-md-6 slidecontainer">
            <input type="range" min="0" max="2" value="1" class="slider" id="tiredslider">
    </div>
    <div class="col-md-3 text-left"><span>Tired</span></div>
</div>
<div class="row">
    <div class="col-md-3 text-right"><span>Calm</span></div>
    <div class="col-md-6 slidecontainer">
            <input type="range" min="0" max="2" value="1" class="slider" id="calmslider">
    </div>
    <div class="col-md-3 text-left"><span>Agitated</span></div>
</div>
<div class="row">
    <div class="col-md-3 text-right"><span>Fearless</span></div>
    <div class="col-md-6 slidecontainer">
            <input type="range" min="0" max="2" value="1" class="slider" id="scaredslider">
    </div>
    <div class="col-md-3 text-left"><span>Scared</span></div>
</div>
<br><br>      
 <!-- this div gives the mood recommendations / no content -->
            <div id="recommendations"></div>
<br>
<!-- this div displays the footer -->
            <div>
                Copyright - &COPY;Keishalois2019
                <a class="nav-link" href="https://github.com/keishalois">See more of my work</a>
            </div>

  </body>
</html>

