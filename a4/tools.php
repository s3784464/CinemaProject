<?php
  session_start();

// Put your PHP functions and modules here
  function preShow( $arr, $returnAsString=false ) {
    $ret  = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
      return $ret;
    else 
      echo $ret; 
  }

  function printMyCode() {
    $lines = file($_SERVER['SCRIPT_FILENAME']);
    echo "<pre class='mycode'><ol>";
    foreach ($lines as $line)
       echo '<li>'.rtrim(htmlentities($line)).'</li>';
    echo '</ol></pre>';
  }
  
  function php2js( $arr, $arrName ) {
    $lineEnd="";
    echo "<script>\n";
    echo "/* Generated with A4's php2js() function */";
    echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
    echo "</script>\n\n";
  }
  
  function getVariables(){
    //check if form is submitted
    if(isset($_POST['order'])) 
    {
      $custName = $_POST['cust[name]'];
      $custEmail = $_POST['cust[email]'];
      $custMobile = $_POST['cust[mobile]'];
      $custCard = $_POST['cust[card]'];
      $custExpiry = $_POST['cust[expiry]'];

      echo "Customer name is $custName eyah cool";
    }
  }


?>