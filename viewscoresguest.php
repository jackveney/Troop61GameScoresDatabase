 <?php
  $page_title = 'Scores';
  require_once('includes/load.php');
  $scouts = join_scout_table();
  $reload = $_GET['timer'];

?>
<meta http-equiv="refresh" content="<?php echo $reload;?>" />
<?php include_once('layouts/headernomenu.php'); ?>
  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
	 <strong>
          <span class="glyphicon glyphicon-th"></span>
          <span>Scores</span>
       </strong>
		<div class="pull-right">
               <a href="picktimerguest.php" class="btn btn-primary pull-right">Change Reload Timer</a> <br><br>
		   <button onclick="printDiv()" class="btn btn-primary pull-right">PRINT THIS PAGE</button>
            </div>

        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">#</th>
                <th class="text-center"> Scout Name </th>
                <th class="text-center" style="width: 40%;"> Score </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($scouts as $scout):?>
              <tr>
                <td class="text-center"><?php echo count_id();?></td>
                <td class="text-center"><?php echo remove_junk($scout['scoutNameFirst']); ?> <?php echo remove_junk($scout['scoutNameLast']); ?></td>
                <td class="text-center"> <?php echo remove_junk($scout['score']); ?></td>
              </tr>
             <?php endforeach; ?>
            </tbody>
          </tabel>
        </div>
      </div>
    </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>

<script>
function printDiv() {
    newWin = window.open("printscores.php?timer=0", "", "width=800,height=900");
    setTimeout(function (){
    newWin.print();
    newWin.close();
    window.location.reload();}, 1000);
}
</script>
