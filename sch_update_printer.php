<?php

date_default_timezone_set('Asia/Jakarta');

$arrContextOptions=array(
			    "ssl"=>array(
			        "verify_peer"=>false,
			        "verify_peer_name"=>false,
			    ),
			); 

mysql_connect('localhost','root', '1ctportal2017');
mysql_select_db('app_monitor');

//echo	$last_update=date('Y-M-d H:i:s'); exit;
$sql=mysql_query("select * from tb_printer") or die(mysql_error());

while($data_dis=mysql_fetch_array($sql))
{

	// $ip='10.21.10.213';
	echo $ip=$data_dis['ip'];
	$ipaddress=$data_dis['ip'].'<br />';
	exec("ping -c 1 $ip 2>&1", $output, $retval);
	echo '<br/>'.$retval;
	 //	print_r($output);			
	if ($retval == 1) { 
		print_r($output);
		$last_update=date('Y-m-d H:i:s'); 
		$qry="update tb_printer set status='OFF' , last_update='$last_update'  where ip='".$ip."'";
		mysql_query($qry);	
	} else { 		
		$response = file_get_contents("https://".$ip,false,stream_context_create($arrContextOptions));
		echo $response;

		$dom = new DomDocument();
		libxml_use_internal_errors(true);
		$dom->loadHtml($response);
		$xpath = new DomXpath($dom);
		$id1='//*[@id="SupplyName';
		$id2='//*[@id="SupplyPartNumber';
		$id3='//*[@id="SupplyGauge';
		$end='"]';				

		for ($a=0;$a<1;$a++)
			for ($b=0;$b<=3;$b++){
			$div = $xpath->query($id1.$b.$end)->item(0);
			$data[] = $div->nodeValue;
			$div = $xpath->query($id2.$b.$end)->item(0);
			$data[] = $div->nodeValue;
			$div = $xpath->query($id3.$b.$end)->item(0);
			$data[] = $div->nodeValue;
		}
			
		$black=$data[11];
		$yellow=$data[2];
		$cyan=$data[8];
		$magenta=$data[5];

		$last_update=date('Y-m-d H:i:s');
		$qry="update tb_printer set black='$black',yellow='$yellow',cyan='$cyan',magenta='$magenta',status='ON',last_update='$last_update'  where ip='".$ip."'";
		mysql_query($qry);	
	}
	$data=null;
}
	 		
?>
Sukses