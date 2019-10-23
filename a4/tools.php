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

    //checks whether all form data is valid
      if(validateMovieID($movieId) && validateMovieDay($movieDay) && validateMovieHour($movieHour)
        && validateNumSeats($seatsSTA) && validateNumSeats($seatsSTP) && validateNumSeats($seatsSTC)
        && validateNumSeats($seatsFCA) && validateNumSeats($seatsFCP) && validateNumSeats($seatsFCC)
        && validateCustName($custName) && validateCustEmail($custEmail) && validateCustMobile($custMobile)
        && validateCustCard($custCard) && validateCardExpiry($custExpiry))
      {
        echo "<div id= 'sessionValues'>";
        echo "Movie Id: " . $_SESSION["cart"]["movie"]['id'] . "<br>";
        echo "Movie Day: " . $_SESSION["cart"]["movie"]['day'] . "<br>";
        echo "Movie Hour: " . $_SESSION["cart"]["movie"]['hour'] . "<br>";

        echo "Seats-STA: " . $_SESSION["cart"]["seats"]['STA'] . "<br>";
        echo "Seats-STP: " . $_SESSION["cart"]["seats"]['STP'] . "<br>";
        echo "Seats-STC: " . $_SESSION["cart"]["seats"]['STC'] . "<br>";
        echo "Seats-FCA: " . $_SESSION["cart"]["seats"]['FCA'] . "<br>";
        echo "Seats-FCP: " . $_SESSION["cart"]["seats"]['FCP'] . "<br>";
        echo "Seats-FCC: " . $_SESSION["cart"]["seats"]['FCC'] . "<br>";

        echo "Customer Name: " . $_SESSION["cart"]["cust"]['name'] . "<br>";
        echo "Customer Mobile: " . $_SESSION["cart"]["cust"]['mobile'] . "<br>";
        echo "Customer Email: " . $_SESSION["cart"]["cust"]['email'] . "<br>";
        echo "Card Number: " . $_SESSION["cart"]["cust"]['card'] . "<br>";
        echo "Card Expiry: " . $_SESSION["cart"]["cust"]['expiry'];
        echo "</div>";

        //send data to session
        $_SESSION['cart'] = $_POST;


        //adds receipt to bookings.txt *NOT WORKING* :////
        addToBookings();  

        //redirect to receipt page
        header("Location: ../a4/receipt.php");
        die();
        
      }

      else{
        header("Location: ../a2/index.php");
        die();
      }
    }
    echo '</div>';
  }


  //attempt at matching the headers in bookings.txt
//   function addToBookings()
// {
//   $movieData = $_SESSION['cart']['movie']; 
//   $custData = $_SESSION['cart']['cust']; 
//   $seatsData = $_SESSION['cart']['seats']; 

//   $file = fopen('../a4/bookings.txt', "a"); //opens 'bookings.txt' file
//   flock($file, LOCK_EX);

//   fputcsv($file, date("D M d"), "\t");

//   foreach($custData as $cells)
//   {
//     fputcsv($file, $cells, "\t");
//   }
//   foreach($movieData as $cells)
//   {
//     fputcsv($file, $cells, "\t");
//   }
//   foreach($seatsData as $cells)
//   {
//     fputcsv($file, $cells, "\t");
//   }
//   //fputcsv($file, calculateTotal());
//   flock($file, LOCK_UN);
//   fclose($file);
// }


//adds the current booking to the bookings.txt *NOT WORKING and I have no idea why :/ *
function addToBookings(){
  $cells = $_SESSION['cart']['cust'];

  $fp = fopen('bookings.txt', 'a');
  flock($fp, LOCK_EX);
  foreach ($cells as $row)
  {
    fputcsv($fp, $row, "\t");
  }
  flock($fp, LOCK_UN);
  fclose($fp);
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

  function validateCardExpiry($custExpiry)
  {
    date_default_timezone_set("Australia/Melbourne");
    //gets the first day of the card expiry month
    $start_date = date_create($custExpiry . '-01'); 
    //echo "StartDate: " . $start_date->format('y-m-d');

    //gets the date YYYY-MM in 28 days
    $end_date = date_create(Date("y-m-d")); 
    //echo "EndDate: " . $end_date->format('y-m-d');
    $diff = date_diff($start_date, $end_date);
    //echo "DiffDays: " . $diff->format("%a");

    if($diff->format("%a")>28){
      return true;
    }
    else{
      echo "<script> alert('Invalid Expiry Date'); </script>";
      return false;
    } 
      
    // Get the difference and divide into  
    // total no. seconds 60/60/24 to get  
    // number of days 
    echo date_diff($start_date, $end_date)->format("%a"); 
  }





function calculateTotal()
{
  $day = $_SESSION["cart"]["movie"]["day"];
  $time = $_SESSION["cart"]["movie"]["hour"];

  $STA = $_SESSION["cart"]["seats"]['STA'];
  $STP = $_SESSION["cart"]["seats"]['STP'];
  $STC = $_SESSION["cart"]["seats"]['STC'];
  $FCA = $_SESSION["cart"]["seats"]['FCA'];
  $FCP = $_SESSION["cart"]["seats"]['FCP'];
  $FCC = $_SESSION["cart"]["seats"]['FCC'];

  $STAprice;
  $STPprice;
  $STCprice;
  $FCAprice;
  $FCPprice;
  $FCCprice;

    if($day == "MON" ||$day == "WED" || $time == "T12")
    {
        $STAprice = 14.00;
        $STPprice = 12.50;
        $STCprice = 11.00;
        $FCAprice = 24.00;
        $FCPprice = 22.50;
        $FCCprice = 21.00;
    }
    else{
        $STAprice = 19.80;
        $STPprice = 17.50;
        $STCprice = 15.30;
        $FCAprice = 30.00;
        $FCPprice = 27.00;
        $FCCprice = 24.00;
    }
    $total = number_format(($STA * $STAprice) + ($STP*$STPprice) + ($STC*$STCprice) + ($FCA*$FCAprice) + ($FCP*$FCPprice) + ($FCC*$FCCprice), 2);
    return $total . " (inc. $" . number_format($total/10, 2) . " GST)";
}


function createReceipt()
{
  echo "<h1>" . $_SESSION["cart"]["movie"]['id'] . " - " . $_SESSION["cart"]["movie"]["day"] . " - " . $_SESSION["cart"]["movie"]["hour"] . "</h1>";

  echo "<h1 id=cinema>CINEMA 1</h1>";

  echo "<div id= 'totalPrice'>Name: " . $_SESSION["cart"]["cust"]["name"] . "<br>";
  echo "Price: $" . calculateTotal() . "</div>";
  
  echo "<div id= 'seats'><b>SEATS: </b><br>";
  printSeatType('STA');
  printSeatType('STP');
  printSeatType('STC');
  printSeatType('FCA');
  printSeatType('FCP');
  printSeatType('FCC');
  
  echo "</div>";
  echo "<hr style='border-top: dashed 3px;' />";

  echo "<div id= 'bottomReceipt'>" . $_SESSION["cart"]["movie"]['id'] . " - " . $_SESSION["cart"]["movie"]["day"] . " - " . $_SESSION["cart"]["movie"]["hour"];
  echo "<br>Price: $" . calculateTotal() . "</div>";
}


function printSeatType($seatType)
{
  $seatValue = $_SESSION['cart']['seats'][$seatType];
  if($seatValue !=0 && $seatValue != NULL)
  {
    echo $seatType . ": " . $_SESSION['cart']['seats'][$seatType] . "<br>";
  }
}






      


    


?>