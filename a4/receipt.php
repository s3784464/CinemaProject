<?php include('../a4/tools.php'); ?>

<!DOCTYPE html>
<html lang='en'>
  <body>
    <div id=header>
      <link id='stylecss' type="text/css" rel="stylesheet" href="receiptStyle.css">
      <img src ='../../media/logo.png' alt='Logo' height=100px> <h2>Lunardo Cinema - <i>Melbourne's Best Cinema Experience</i></h2>
    </div>
    <h3><u>GROUP TICKET</u></h3>

    <?php
      createReceipt();

    ?>
  </body>
</html>