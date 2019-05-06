<div class="row" align="center">
<div class="col-sm-1" align="center"></div>
    <?php 
//this displays 5 no content cards with the message changing when a file is uploaded
for ($x = 0; $x < 5; $x++) { ?>
      <div class="col-sm-2" align="center">
            <div class="card" align="center">
            <img class="card-img-top" src="#" alt="No Programme Available">
            <div class="card-body">
<?php           if (!file_exists('uploads/programmes.xml')){ ?>
                    <p class="card-text">Please upload a file and select your mood after</p><?php }
                else { ?>
                    <p class="card-text">Please select your mood</p>
                <?php } ?>
            </div>
            </div>
      </div>
<?php } 
?>
<div class="col-sm-1" align="center"></div>
</div>