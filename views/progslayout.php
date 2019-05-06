<?php //check if a file exists first and instruct them to upload a file if not
    if (!file_exists('uploads/programmes.xml')){ ?>
            <p>Please upload a programmes.xml file to see your recommendations!</p>
<?php }
    else { ?>
            <p>We recommend you watch:</p>
<?php } ?>
            
<div> 
    <?php require_once('routes.php'); ?>
</div>