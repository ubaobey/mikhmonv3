<?php date_default_timezone_set($_SESSION['timezone']); ?>
<script>
function sendToQuickPrinterChrome(){
 
    var commandsToPrint = 

                        "<center><big><bold><?= $hotspotname ?>\n" +
                        //"<line0>\n" +
                        "<center><?= date("d-m-Y h:i:sa") ?>\n" +
						"<center>Masa Aktif : <?= $validity ?>\n" +
						"<center>Login : http://<?= $dnsname ?>\n" +
                        "<line0>\n" +
						"<center><big><bold><?= $uname ?>\n" +
                        "<line0>\n" +
						"<center>.\n" +
						"<center>.\n" +
                        //"<line0>\n" +
                        <?php if($qrbt == "enable"){
                          echo '"<center><image>" + "'.$qrcode.'" +"\n"';
                        }else{echo '"\n"';}?>
                        + "<cut>"
                ;
    var textEncoded = encodeURI(commandsToPrint);
    window.location.href="intent://"+textEncoded+"#Intent;scheme=quickprinter;package=pe.diegoveloper.printerserverapp;end;";
}
</script>