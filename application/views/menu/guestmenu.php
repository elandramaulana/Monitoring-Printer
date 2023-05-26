<?php ?>
<li class="treeview active">
  <a href="#">
	<i class="fa fa-edit"></i> <span>List Printer SIG</span>
	<span class="pull-right-container">
	  <i class="fa fa-angle-left pull-right"></i>
	</span>
  </a>
  <?php

  {
  ?>
  <ul class="treeview-menu">
  	<li  class="active"><a href="<?php echo base_url('index.php/aplikasiguest/printer_padang')?>"><i class="fa fa-circle-o"></i>Padang</a></li>
	<li  class="active"><a href="<?php echo base_url('index.php/aplikasiguest/printer_jakarta')?>"><i class="fa fa-circle-o"></i>Jakarta</a></li>
  	<li  class="active"><a href="<?php echo base_url('index.php/aplikasiguest/printer_rembang')?>"><i class="fa fa-circle-o"></i>Rembang</a></li>
  	<li  class="active"><a href="<?php echo base_url('index.php/aplikasiguest/printer_tuban')?>"><i class="fa fa-circle-o"></i>Tuban</a></li>
  	<li  class="active"><a href="<?php echo base_url('index.php/aplikasiguest/printer_gresik')?>"><i class="fa fa-circle-o"></i>Gresik</a></li>
  	<li  class="active"><a href="<?php echo base_url('index.php/aplikasiguest/printer_tonasa')?>"><i class="fa fa-circle-o"></i>Tonasa</a></li>
  </ul>
  <?php
	}
	

 ?>
</li>

<li class="header"></li>
<li><a href="<?php echo base_url('index.php/login')?>"><i class="fa fa-circle-o text-red"></i> <span>Back</span></a></li>