<?php
  var_dump(
    mail(
      'gonzalo.padrino@onetec.es,sistemas@grupoonetec.com,nieves.acebal@lidera.com',
      'Testeando el correo de php5 - B',
      "AAAA\r\nBBB\r\nCC\r\nD\r\n".(isset($_GET['mailtest'])?"FUNCIONA DESDE LAS WEBS\r\n":'')
    )
  );
  echo "OOPS\n";


?>
