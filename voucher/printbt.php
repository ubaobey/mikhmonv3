<script>
function sendToQuickPrinterChrome(){
 
    var commandsToPrint = 

                        																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										<?php
// Copy Paste ke template editor [Settings -> Template Editor].



if(substr($validity,-1) == "d"){
  $validity = "".substr($validity,0,-1)." HARI";
}else if(substr($validity,-1) == "h"){
  $validity = "".substr($validity,0,-1)." JAM";
}
if(substr($timelimit,-1) == "d" & strlen($timelimit) >3){
  $timelimit = "Durasi:".((substr($timelimit,0,-1)*7) +  substr($timelimit, 2,1))." HARI";
}else if(substr($timelimit,-1) == "d"){
  $timelimit = "Durasi:".substr($timelimit,0,-1)." HARI";
}else if(substr($timelimit,-1) == "h"){
  $timelimit = "Durasi:".substr($timelimit,0,-1)." Jam";
}else if(substr($timelimit,-1) == "w"){
  $timelimit = "Durasi:".(substr($timelimit,0,-1)*7)." HARI";
}	            	            

/* 
Sesuikan harga dan warna masing-masing.
warna bisa dilihat di https://material.io/guidelines/style/color.html#color-color-palette
variable $color
background-color:<?php echo $color;?>; -webkit-print-color-adjust: exact;
ditambahkan ke style di tag html yang ingin dikasi warna. untuk template ini warna ditaruh di keterangan harga <-- Price --> line 81
*/

if($getprice == "3000"){ $color = "#ff00ff";} // jika harga == "1000" maka warna = "#01579B"
elseif($getprice == "1000"){ $color = "#00a105";}
elseif($getprice == "2000"){ $color = "#8B008B";}
elseif($getprice == "3000"){ $color = "#ff00ff";}
elseif($getprice == "5000"){ $color = "#FF4500";}
elseif($getprice == "10000"){ $color = "#E65100";}
elseif($getprice == "15000"){ $color = "#228B22";}
elseif($getprice == "20000"){ $color = "#008000";}
elseif($getprice == "30000"){ $color = "#FF00FF";}
elseif($getprice == "60000"){ $color = "#E60C00";} 
elseif($getprice == "80000"){ $color = "#00aeef";} 
// ini yang dicopy untuk menambah warna berdarsarkan harga, kemudian paste di atas baris // else color

// else color
else{ $color = "#00a105";}
?>  
 <!--mks-mulai-->	   
<style>
.qrcode{
		height:60px;
		width:60px;
}
</style>
<table style="display: inline-block;border-collapse: collapse;border: 1px solid #666;margin: 2.5px;width: 190px;overflow:hidden;position:relative;padding: 0px;margin: 2px;border: 1px solid #000000;">
<tbody>
<tr>
<td style="color:#666;" valign="top">
<table style="width:100%;">
<tbody>
<tr>
<td style="width:75px">
<div style="position:relative;z-index:-1;padding: 0px;float:left;">
<div style="position:absolute;top:0;display:inline;margin-top:-100px;width: 0; height: 1; border-top: 230px solid transparent;border-left: 50px solid transparent;border-right:140px solid transparent; "></div>
</div>
<div style="padding:0px;text-align:left;font-size:15px;font-family:Tahoma code;font-weight:bold;color:#000000;">CAHYA HOTSPOT
</td>	
<td style="width:115px">
<div style="float:right;margin-top:-6px;margin-right:0px;width:5%;text-align:right;font-size:7px;">
</div>
<div style="text-align:right;font-weight:bold;font-family:times new roman;font-size:18px;padding-left:7px;color:#000000;">
<small style="font-size:15px;margin-left:-7px;"></small><?php echo $validity;?>
<br/><span id="num"><?= " [$num]"; ?></span>

</div>	
</td>		
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="color:#666;border-collapse: collapse;" valign="top">
<table style="width:100%;border-collapse: collapse;">
<tbody>
<tr>
<td style="width:95px"valign="top" >
<div style="clear:both;color:#555;margin-top:2px;margin-left:18px;margin-bottom:2.5px;">
<?php if($v_opsi=='up'){ ?>
<?php }else{ ?>
<div style="padding:0px;text-align:left;font-size:21px;font-family:Tahoma code;font-weight:bold;color:#000000;"><?php echo $username;?></div>
<?php } ?>
</div>
<div style="text-align:center;color:#111;font-size:7px;font-weight:bold;margin:0px;padding:2.5px;">
 <br/>   <br/>
 
</div>
</td>	
<td style="width:100px;text-align:right;">
<div style="clear:both;padding:0 2.5px;font-size:7px;font-weight:bold;color:#000000">

</div>
<div style="float:right;padding:1px;text-align:right;width:70%;margin:0 5px -20px 0;"><?= $qrcode ?></div>
</td>		
</tr>
<tr>
<td style="color:#666;padding:0px;" valign="top" colspan="2">
<div style="text-align:left;font-size:13px;font-weight:bold;margin:0px;padding:2.5px;color:#000000;">
-<?= $comment; ?>
<b></b>
</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>	        	        	        	        	        	        	        	        	        	        	        	    	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	   
                ;
    var textEncoded = encodeURI(commandsToPrint);
    window.location.href="intent://"+textEncoded+"#Intent;scheme=quickprinter;package=pe.diegoveloper.printerserverapp;end;";
}
</script>