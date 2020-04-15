<?php
  $page_title = 'All Scouts';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  $scouts = join_scout_table();

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
          <span>Scouts</span>
       </strong>
         <div class="pull-right">
           <a href="add_scout.php" class="btn btn-primary pull-right">Add New</a>
         </div>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">#</th>
                <th> Scout Name </th>
                <th class="text-center" style="width: 10%;"> Score </th>
                <th class="text-center" style="width: 100px;"> Actions </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($scouts as $scout):?>
              <tr>
                <td class="text-center"><?php echo count_id();?></td>
                <td><?php echo remove_junk($scout['scoutNameFirst']); ?> <?php echo remove_junk($scout['scoutNameLast']); ?></td>
                <td class="text-center"> <?php echo remove_junk($scout['score']); ?></td>
                <td class="text-center">
                  <div class="btn-group">
 <a href="delete_scout.php?id=<?php echo (int)$scout['id'];?>" class="btn btn-danger btn-xs"  title="Delete" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </div>
                </td>
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
    newWin = window.open("scout_print.php", "", "width=800,height=900");
    setTimeout(function (){
    newWin.print();
    newWin.close();
    window.location.reload();}, 1000);
}
</script>
