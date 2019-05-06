<?php
//index.php looks to the layout.php files and they call on the routes.php where a class called
//pagescontroller is established
class PagesController {
   //this function will direct the user to the homepage
    public function homepage() {
      //this brings up the html to be used in the homepage
      require_once('views/pages/homepage.php');
    }
    
    //this function will take the user to the error page
    public function error() {
            require_once('views/pages/error.php');
    }
}