<div class="emptyprogrammes">
    <?php //check programmes exist - if not display wow much empty
    if(empty($moodProgrammes)) {
        $emptypic = 'views/images/wow-much-empty.jpg';
                if(file_exists($emptypic)){
                    $img = "<img src='$emptypic' width='150' />";
                echo $img;
                } 
                ?>
    <p>please pick your mood!!!</p>
     <br><br> 
</div> 
<?php        //this means there are films to recommend so display them below
    } else { ?> 
    <div class="row" align="center">
        <?php 
//start counter for number of programme cards to a row - start on 1 as 0 puts first card on a row of its own
        $x = 1; ?>
        <div class="card-deck">
        <div class="col-sm-1" align="center"></div>
   <?php    
//display films with user moods by looping through Programme::getprogrammesbymood resulting array
   foreach($moodProgrammes as $programme) {
       ?>
  <div class="col-sm-2" align="center">
        <div class="card mb-3">
              <div class="card-header">
              Since you are feeling <span class="feeling"><?php echo $programme->getmood(); ?></span>...
              </div>
            <img class="card-img-top" src="<?php echo $programme->getimgsrc(); ?>" alt="No Pic Available">
            <div class="card-body text-info programmes">
                <h5 class="card-title"><?php echo $programme->gettitle(); ?> </h5>
                <h6 class="card-subtitle mb-2 text-muted">You might like this film</h6>
                <p class="card-text"><?php echo $programme->getdescription(); ?> </p> 
                <br>
            </div>
        </div>
  </div>
<?php
// this is counting the number of cards to a row and making a new row once there are 5 cards
    if ($x > 0 && $x % 5 == 0) {
            ?>
        </div>
    </div>
    <div class="row" align="center">
        <div class="card-deck">
        <div class="col-sm-1" align="center"></div> 
            <?php }
    $x++; //increment $x with each programme card
        }   ?>
        </div>
    <div class="col-sm-1" align="center"></div>
    </div>

            <?php } 