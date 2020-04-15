<?php
  $page_title = 'Score Management';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  $Scouts = find_all('scores');
?>

<style>
.column {
  float: left;
  width: 50%;
  padding: 25px;
}

.column2 {
  float: left;
}
.left, .right {
  width: 49%;
}
.middle {
  width: 2%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

<?php
 if(isset($_POST['p200'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score+200 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"200 points added to the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to add 200 points to the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['p400'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score+400 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"400 points added to the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to add 400 points to the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['p600'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score+600 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"600 points added to the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to add 600 points to the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['p800'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score+800 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"800 points added to the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to add 800 points to the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['p1000'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score+1000 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"1000 points added to the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to add 1000 points to the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['p1200'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score+1200 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"1200 points added to the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to add 1200 points to the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['p1600'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score+1600 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"1600 points added to the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to add 1600 points to the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['p2000'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score+2000 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"2000 points added to the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to add 2000 points to the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['pcustomsubmit'])){
   $req_fields = array('ScoutName', 'pcustom', );
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));
     $pcustom  = remove_junk($db->escape($_POST['pcustom']));

     $query  = "UPDATE scores SET score = score+{$pcustom} WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"{$pcustom} points added to the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to add {$pcustom} points to the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['m200'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score-200 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"200 points removed from the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to remove 200 points from the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['m400'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score-400 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"400 points removed from the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to remove 400 points from the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['m600'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score-600 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"600 points removed from the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to remove 600 points from the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['m800'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score-800 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"800 points removed from the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to remove 800 points from the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['m1000'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score-1000 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"1000 points removed from the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to remove 1000 points from the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['m1200'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score-1200 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"1200 points removed from the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to remove 1200 points from the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['m1600'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score-1600 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"1600 points removed from the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to remove 1600 points from the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['m2000'])){
   $req_fields = array('ScoutName',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));

     $query  = "UPDATE scores SET score = score-2000 WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"2000 points removed from the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to remove 2000 points from the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 
<?php
 if(isset($_POST['mcustomsubmit'])){
   $req_fields = array('ScoutName', 'mcustom',);
   validate_fields($req_fields);
   if(empty($errors)){
     $scoutid  = remove_junk($db->escape($_POST['ScoutName']));
     $mcustom  = remove_junk($db->escape($_POST['mcustom']));

     $query  = "UPDATE scores SET score = score-{$mcustom} WHERE id={$scoutid};";
     if($db->query($query)){
       $session->msg('s',"{$mcustom} points removed from the score.");
       redirect('scores.php', false);
     } else {
       $session->msg('d',' Sorry failed to remove {$mcustom} points from the score! Please try again.');
       redirect('scores.php', false);
     }
   } else{
     $session->msg("d", $errors);
     redirect('scores.php',false);
   }
 }
?> 

<?php include_once('layouts/header.php'); ?>
  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
	 <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Add / Remove To Scores</span>
       </strong>
        </div>
        <div class="panel-body">
          <form method="post" action="scores.php">
            <div class="form-group">
              <label for="ScoutName">Scout Name</label>
                <select class="form-control" name="ScoutName">
                  <?php foreach ($Scouts as $scout):?>
                   <option value="<?php echo $scout['id'];?>"><?php echo remove_junk($scout['scoutNameFirst']); ?> <?php echo remove_junk($scout['scoutNameLast']); ?></option>
                <?php endforeach;?>
                </select>
            </div>
		<center>
            <div class="row">
		  <div class="column">
		  	<div class="form-group clearfix">
          		    <button type="submit" name="p200" class="btn btn-primary">+200 Points</button>
           		 </div>

		  	<div class="form-group clearfix">
          		    <button type="submit" name="p400" class="btn btn-primary">+400 Points</button>
           		 </div>

		  	<div class="form-group clearfix">
          		    <button type="submit" name="p600" class="btn btn-primary">+600 Points</button>
           		 </div>

		  	<div class="form-group clearfix">
          		    <button type="submit" name="p800" class="btn btn-primary">+800 Points</button>
           		 </div>

		  	<div class="form-group clearfix">
          		    <button type="submit" name="p1000" class="btn btn-primary">+1000 Points</button>
           		 </div>

		  	<div class="form-group clearfix">
          		    <button type="submit" name="p1200" class="btn btn-primary">+1200 Points</button>
           		 </div>

		  	<div class="form-group clearfix">
          		    <button type="submit" name="p1600" class="btn btn-primary">+1600 Points</button>
           		 </div>

		  	<div class="form-group clearfix">
          		    <button type="submit" name="p2000" class="btn btn-primary">+2000 Points</button>
           		 </div>
           	<div class="column2 left">
              <input type="number" class="form-control" name="pcustom">
		</div>
		<div class="column2 middle">
			<p></p>
		</div>
		<div class="column2 right">
              <button type="submit" name="pcustomsubmit" class="btn btn-primary pull-left">+ Custom Amount of Points</button>
		</div>
		  
		  </div>
<div class="column">
		  	<div class="form-group clearfix">
          		    <button type="submit" name="m200" class="btn btn-primary">-200 Points</button>
           		 </div>

		  	<div class="form-group clearfix">
          		    <button type="submit" name="m400" class="btn btn-primary">-400 Points</button>
           		 </div>

		  	<div class="form-group clearfix">
          		    <button type="submit" name="m600" class="btn btn-primary">-600 Points</button>
           		 </div>

		  	<div class="form-group clearfix">
          		    <button type="submit" name="m800" class="btn btn-primary">-800 Points</button>
           		 </div>

		  	<div class="form-group clearfix">
          		    <button type="submit" name="m1000" class="btn btn-primary">-1000 Points</button>
           		 </div>

		  	<div class="form-group clearfix">
          		    <button type="submit" name="m1200" class="btn btn-primary">-1200 Points</button>
           		 </div>

		  	<div class="form-group clearfix">
          		    <button type="submit" name="m1600" class="btn btn-primary">-1600 Points</button>
           		 </div>

		  	<div class="form-group clearfix">
          		    <button type="submit" name="m2000" class="btn btn-primary">-2000 Points</button>
           		 </div>

		<div class="column2 left">
           	<div class="form-group">
              <input type="number" class="form-control" name="mcustom">
		</div>
		</div>
		<div class="column2 middle">
			<p></p>
		</div>
		<div class="column2 right">
		<div class="form-group clearfix">
              <button type="submit" name="mcustomsubmit" class="btn btn-primary pull-left">- Custom Amount of Points</button>
		 </div>
		</div>
		</div>
	    </center>
        </form>
        </div>
      </div>
    </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>
