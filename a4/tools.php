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
  
  function verifyVariables(){
    echo '<div id= phpVariables>';

    //check if form is submitted
    //assigns form data to temporary variables
    if(isset($_POST['order'])) 
    {
      $_SESSION['cart'] = $_POST;
      $movieId = $_POST['movie']['id'];
      $movieDay = $_POST['movie']['day'];
      $movieHour = $_POST['movie']['hour'];

      $seatsSTA = $_POST['seats']['STA'];
      $seatsSTP = $_POST['seats']['STP'];
      $seatsSTC = $_POST['seats']['STC'];

      $seatsFCA = $_POST['seats']['FCA'];
      $seatsFCP = $_POST['seats']['FCP'];
      $seatsFCC = $_POST['seats']['FCC'];

      $custName = $_POST['cust']['name'];
      $custEmail = $_POST['cust']['email'];
      $custMobile = $_POST['cust']['mobile'];
      $custCard = $_POST['cust']['card'];
      $custExpiry = $_POST['cust']['expiry'];
    }
    

    //all the validation checks
      // validateMovieID($movieId);
      // validateMovieDay($movieDay);
      // validateMovieHour($movieHour);

      // validateNumSeats($seatsSTA);
      // validateNumSeats($seatsSTP);
      // validateNumSeats($seatsSTC);
      // validateNumSeats($seatsFCA);
      // validateNumSeats($seatsFCP);
      // validateNumSeats($seatsFCC);

      // validateCustName($custName);
      // validateCustEmail($custEmail);
      // validateCustMobile($custMobile);
      // validateCustCard($custCard);
      // validateCardExpiry($custCard);

    //checks whether all form data is valid
    if(validateMovieID($movieId) && validateMovieDay($movieDay) && validateMovieHour($movieHour)
      && validateNumSeats($seatsSTA) && validateNumSeats($seatsSTP) && validateNumSeats($seatsSTC)
      && validateNumSeats($seatsFCA) && validateNumSeats($seatsFCP) && validateNumSeats($seatsFCC)
      && validateCustName($custName) && validateCustEmail($custEmail) && validateCustMobile($custMobile)
      && validateCustCard($custCard) && validateCardExpiry($custCard))
    {
      //add form data to _SESSION
      $_SESSION["user"]['movieId'] = $movieId;
      $_SESSION["user"]['movieDay'] = $movieDay;
      $_SESSION["user"]['movieHour'] = $movieHour;

      $_SESSION["user"]['seatsSTA'] = $seatsSTA;
      $_SESSION["user"]['seatsSTP'] = $seatsSTP;
      $_SESSION["user"]['seatsSTC'] = $seatsSTC;
      $_SESSION["user"]['seatsFCA'] = $seatsFCA;
      $_SESSION["user"]['seatsFCP'] = $seatsFCP;
      $_SESSION["user"]['seatsFCC'] = $seatsFCC;

      $_SESSION["user"]['custName'] = $custName;
      $_SESSION["user"]['custMobile'] = $custMobile;
      $_SESSION["user"]['custEmail'] = $custEmail;
      $_SESSION["user"]['cardNo'] = $custCard . ", ";
      $_SESSION["user"]['cardExpiry'] = $custExpiry . "<br>";

      echo "Movie Id: " . $_SESSION["user"]['movieId'] . ", ";
      echo "Movie Day: " . $_SESSION["user"]['movieDay'] . ", ";
      echo "Movie Hour: " . $_SESSION["user"]['movieHour'] . "<br>";

      echo "Seats-STA: " . $_SESSION["user"]['seatsSTA'] . ", ";
      echo "Seats-STP: " . $_SESSION["user"]['seatsSTP'] . ", ";
      echo "Seats-STC: " . $_SESSION["user"]['seatsSTC'] . ", ";
      echo "Seats-FCA: " . $_SESSION["user"]['seatsFCA'] . ", ";
      echo "Seats-FCP: " . $_SESSION["user"]['seatsFCP'] . ", ";
      echo "Seats-FCC: " . $_SESSION["user"]['seatsFCC'] . "<br>";

      echo "Customer Name: " . $_SESSION["user"]['custName'] . ", ";
      echo "Customer Mobile: " . $_SESSION["user"]['custMobile'] . ", ";
      echo "Customer Email: " . $_SESSION["user"]['custEmail'] . ", ";
      echo "Card Number: " . $_SESSION["user"]['cardNo'] . ", ";
      echo "Card Expiry: " . $_SESSION["user"]['cardExpiry'];


      //send data to receipt.
    }
    echo '</div>';
  }


  function validateMovieID($movieId){
    if($movieId == "ACT" || "AHF" || "ANM" || "RMC")
      {
        return true;
      }
      else
      {
        return false;
      }
  }


  function validateMovieDay($movieDay)
  {
    if($movieDay == "MON" || "TUE" || "WED" || "THU" || "FRI" || "SAT" || "SUN")
        { 
          return true;
        }
        else
        {
          return false;
        }
  }


  function validateMovieHour($movieHour)
  {
    if($movieHour == "T12" || "T15" || "T18" || "21")
    {
      return true;
    }
    else
    {
      return false;
    }
  }


  //validates the number of seats booked for one movie type(i.e. FCA 'First Class Adult') 
  function validateNumSeats($numSeats)
  {
    if(($numSeats <=10 && $numSeats >0) || $numSeats == '')
    {
      return true;
    }
    else{
      echo "<script> alert('Seat Quantity cannot be less than 0'); </script>";
      return false;
    }
  }
    

  //checks format of customer's Name
  function validateCustName($custName)
  {
    if(preg_match("/^[a-zA-Z \-.']{1,100}$/", $custName))
    {
      return true;
    }
    else
    {
      echo "<script> alert('Invalid Customer Name'); </script>";
      return false;
    }
  }


  //checks format of customer's Email
  function validateCustEmail($custEmail){   
    if(filter_var($custEmail, FILTER_VALIDATE_EMAIL))
    {
      return true;
    }
    else
    {
      echo "<script> alert('Invalid Email'); </script>";
      return false;
    }
  }


  //validates format of customer's Mobile Number
  function validateCustMobile($custMobile)
  {     
    if(preg_match("(\(04\)|04|\+614)", $custMobile))
    {
      return true;
    }
    else
    {
      echo "<script> alert('Invalid Mobile Number'); </script>";
      return false;
    }
  }
  

  //validates format of Customer's Card Number
  function validateCustCard($custCard){
    $cardRegex = "/^((4\d{3})|(5[1-5]\d{2})|(6011)|(34\d{1})|(37\d{1}))-?\s?\d{4}-?\s?\d{4}-?\s?\d{4}|3[4,7][\d\s-]{15}$/";
    if (preg_match($cardRegex, $custCard))
    {
      return true;
    }

    else
    {
      echo  "<script> alert('Invalid Card Number'); </script>";
      return false;
    }
  }


  //validates expiry date of customer's card
  function validateCardExpiry($custExpiry)
  {
    //gets current date in YYYY-MM
    date_default_timezone_set('Australia/Melbourne');
    $currentDate = date('Y-m');
    $currentDateArray = explode('-', $currentDate, 2);
    $expiryArray = explode('-', $custExpiry, 2);

    //checks if date is in future
    if($expiryArray[0] > $currentDateArray[0] || ($expiryArray[0] == $currentDateArray[0] && $expiryArray[1] > $currentDateArray[1]))
    {
      return true;
    }
    else
    {
      return false;
    }
  }



  // function printToReceipt()
  // {
  //   $fp = fopen('bookings.txt');
  //   flock($fp, );
  // };




      


    


?>