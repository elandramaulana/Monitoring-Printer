<meta http-equiv="refresh" content="3600" />
<br>
 <section class="content">
 <?php
 foreach ($list_data_printer as $data_1) ;
 
 echo " Last Updated Data ".$data_1->last_update;
 echo "&nbsp;&nbsp;&nbsp;<a target='_blank' href='http://192.168.2.97/monitoring/sch_update_printer.php'>Update data</a>";
 ?>
      <div class="row">
<?php
foreach ($list_data_printer as $data) {
$black='green';
$yellow='green';
$cyan='green';
$magenta='green';


if($data->black<=10)$black='red';
if($data->yellow<=10)$yellow='red';
if($data->cyan<=10)$cyan='red';
if($data->magenta<=10)$magenta='red';


?>

<div class="col-md-2">
  <div class="box">
     <div class="box-body">
          <p class="text-center">
            <strong><?php echo $data->nama_unit ?>  
			<p class="text-center" style="margin-top: -10px"> &nbsp;(<?php  if($data->status=='OFF') {echo "<font color='red'>".$data->status."</font>" ; }else echo $data->status; ?>) </p>
			<p class="text-center" style="margin-top: -10px">(<?php echo substr($data->ip,0,15); ?>) </p>
			</strong>
          </p>
          <div class="progress-group" >
            <span class="progress-text">Black</span>
            <span class="progress-number"><b><?php echo $data->black ?></b></span>

            <div class="progress sm">
              <div class="progress-bar progress-bar-<?php echo $black; ?>" style="width: <?php echo $data->black ?>"></div>
            </div>
          </div>
          <!-- /.progress-group -->
          <div class="progress-group" style="margin-top:-20px">
            <span class="progress-text">Yellow</span>
            <span class="progress-number"><b><?php echo $data->yellow ?></span>

            <div class="progress sm">
              <div class="progress-bar progress-bar-<?php echo $yellow; ?>" style="width: <?php echo $data->yellow ?>"></div>
            </div>
          </div>
          <!-- /.progress-group -->
          <div class="progress-group" style="margin-top:-20px">
            <span class="progress-text">Cyan</span>
            <span class="progress-number"><b><?php echo $data->cyan ?></span>

            <div class="progress sm">
              <div class="progress-bar progress-bar-<?php echo $cyan; ?>" style="width: <?php echo $data->cyan ?>"></div>
            </div>
          </div>
          <!-- /.progress-group -->
          <div class="progress-group" style="margin-top:-20px">
            <span class="progress-text">Magenta</span>
            <span class="progress-number"><b><?php echo $data->magenta ?></span>

            <div class="progress sm">
              <div class="progress-bar progress-bar-<?php echo $magenta; ?>" style="width: <?php echo $data->magenta ?>"></div>
            </div>
          </div>
          <div class="icon">
              <a href="<?= base_url(); ?>editprinter/formedit/<?= $data->id;?>" class="ion ion-edit"></i>&ensp;Edit</a>
            </div>
            <div class="icon">
              <a href="<?= base_url(); ?>hapusprinter/hapus/<?= $data->id;?>" class="ion ion-close" onclick="return confirm('Yakin?');"></i>&ensp;Delete</a>
            </div>
          <!-- /.progress-group -->
        </div>
      </div>
        <!-- /.col -->
</div> 

<?php
}
?>
</b>
</div>


