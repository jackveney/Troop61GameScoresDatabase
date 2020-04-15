<?php
  $page_title = 'Pick Timer For Scores Reload';
  require_once('includes/load.php');
?>

<?php
 if(isset($_POST['timersubmit'])){
   $req_fields = array('timer', );
   validate_fields($req_fields);
   if(empty($errors)){
     $timeramount  = remove_junk($db->escape($_POST['timer']));

       redirect('viewscoresguest.php?timer='.$timeramount, false);
     } else{
        $session->msg("d", $errors);
        redirect('picktimerguest.php',false);
   }

 }

?>

<?php include_once('layouts/headernomenu.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
</div>
  <div class="row">
  <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Select Reload Timer</span>
         </strong>
        </div>
        <div class="panel-body">
         <div class="col-md-12">
          <form method="post" action="picktimerguest.php" class="clearfix">
			<div class="form-group clearfix">
			<input type="number" class="form-control" name="timer" placeholder="Number Of Seconds Between Reloads" default="10">
			</div>
		  <div class="form-group clearfix">
              <button type="submit" name="timersubmit" class="btn btn-danger">Submit</button>
	        </div>
          </form>
         </div>
        </div>
      </div>
    </div>
  </div>

<?php include_once('layouts/footer.php'); ?>
