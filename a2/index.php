<?php include('../a4/tools.php'); ?>

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='../wireframe.js'></script>

  </head>

  <body>
    <header>
      
      <div class='lunardo'>
       <img src ='../../media/logo.png' alt='Logo' height=100px> <h1>Lunardo Cinema</h1> 
        
      </div>
      <nav id="navbar">
        <a href= '#About-Us' id="navAboutUs">About Us</a>
        <a href= '#Prices' id="navPrices">Prices</a>
        <a href= '#Now-Showing' id="navNowShowing">Now Showing</a> 
      </nav>
    </header>

    <main>
      <article id='About-Us' onscroll="highlightNavChoice('navAboutUs')">
        <div id='aboutUsInfo' onscroll="highlightNavChoice('navAboutUs')">
          <h2>About Us</h2>
          <p>Lunardo Cinema has reopened after receiving extensive improvements and multiple renovations including:<p>
          <ul>
            <li>The <b>Standard</b> cinema seats have been all been replaced and upgraded (see below)</li>
            <li>The launch of our new <i>brand new</i> <b>First Class</b> cinema! (see below) </li>
            <li>Our projection and sound systems have all been upgraded with the latest 
              <a href='https://www.dolby.com/us/en/brands/dolby-vision.html' target="_blank">3D Dolby Vision </a> and
              <a href='https://www.dolby.com/us/en/technologies/cinema/dolby-atmos.html' target="_blank"> Dolby Atmos</a> sound </li>
        </ul>

          <div class="hoverPics">
            <span class="imageContainer">
              <div id="standardSeats" class="classText">Standard Seats
                <img src='../../media/standard.png' alt="standard" class="Image">
              </div>
            </span>

            <span class="imageContainer">
              <div id="firstClassSeats" class="classText">First Class Seats
                <img src='../../media/firstClass.png' alt="firstClass" class="Image">
              </div>
            </span>
          </div>
        </div>

      </article>

      <article id ='Prices' onscroll="highlightNavChoice('navPrices')">
          <h2>Prices</h2>
          <table>
              <tr>
                <td class="topTable">Seat Type</td>
                <td class="topTable">Seat Code</td>
                <td class="topTable">ALL day Monday & Wednesday, 12pm other Weekdays</td>
                <td class="topTable">All other times</td>
              </tr>
              <tr>
                <td class="leftTable">Standard Adult</td>
                <td>STA</td>
                <td>14.00</td>
                <td>19.80</td>
              </tr>
              <tr>
                <td class="leftTable">Standard Concession</td>
                <td>STP</td>
                <td>12.50</td>
                <td>17.50</td>
              </tr>
              <tr>
                <td class="leftTable">Standard Child</td>
                <td>STC</td>
                <td>11.00</td>
                <td>15.30</td>
              </tr>
              <tr>
                <td class="leftTable">First Class Adult</td>
                <td>FCA</td>
                <td>24.00</td>
                <td>30.00</td>
              </tr>
              <tr>
                <td class="leftTable">First Class Concession</td>
                <td>FCP</td>
                <td>22.50</td>
                <td>27.00</td>
              </tr>
              <tr>
                <td class="leftTable">First Class Child</td>
                <td>FCC</td>
                <td>21.00</td>
                <td>24.00</td>
              </tr>
          </table>
      </article>

    <article id ='Now-Showing'>
      <div id=nowShowingContainer>
        <h2>Now Showing</h2>
        <div class="showcases">
          <div class='nowShowing'>

            <div id="moviePanelACT" onclick = "changeSynopsis(ENDGAME)">
              <a href="#synopsisArea">
                <img src="../../media/endgame.jpg" alt="Avengers: Endgame" width="600" height="400">
                <div class="desc"><h4>Avengers: Endgame</h4>
                  <h4>PG</h4>
                  <p>Wednesday - 9pm</p>
                  <p>Thursday - 9pm</p>
                  <p>Friday - 9pm</p>
                  <p>Saturday - 6pm</p>
                  <p>Sunday - 6pm</p>
                </div>
              </a>
            </div>
          
            <div id="moviePanelRMC" onclick = "changeSynopsis(TOPENDWEDDING)">
              <a href="#synopsisArea">
                <img src="../../media/topendwedding.jpg" alt="Top End Wedding" width="600" height="400">
                <div class="desc"><h4>Top End Wedding</h4>
                <h4>M</h4>
                  <p>Monday - 6pm</p>
                  <p>Tuesday - 6pm</p>
                  <p>Saturday - 12pm</p>
                  <p>Sunday - 12pm</p>
                </div>
              </a>
            </div>

            <div id="moviePanelANM" onclick = "changeSynopsis(DUMBO)">
              <a href="#synopsisArea">
                <img src="../../media/dumbo.jpg" alt="Dumbo" width="600" height="400">
                <div class="desc"><h4>Dumbo</h4>
                  <h4>PG</h4>
                  <p>Monday - 12pm</p>
                  <p>Tuesday - 12pm</p>
                  <p>Wednesday - 6pm</p>
                  <p>Thursday - 6pm</p>
                  <p>Friday - 6pm</p>
                  <p>Saturday - 12pm</p>
                  <p>Sunday - 12pm</p>
                </div>
              </a>
            </div>
          
            <div id="moviePanelAHF" onclick = "changeSynopsis(THEHAPPYPRINCE)">
              <a href="#synopsisArea">
                <img src="../../media/thehappyprince.jpg" alt="The Happy Prince" width="600" height="400">
                <div class="desc"><h4>The Happy Prince</h4>
                  <h4>R 18+</h4>
                  <p>Wednesday - 12pm</p>
                  <p>Thursday - 12pm</p>
                  <p>Friday - 12pm</p>
                  <p>Saturday - 9pm</p>
                  <p>Sunday - 9pm</p>
                </div>
              </a>
            </div>

          </div>
      </div>
    </article>
    
    <?php 
      getVariables();
    ?>

    <div id="synopsisArea">
      <h2 id="movieHeading">
        <div id="synopsisTitle" class="movieHeading">Title</div>
        <div id="movieClassification" class="movieHeading">Classification</div>
        <div id="balancingText" class="movieHeading">Title</div>
      </h2>
      <iframe id="synopsisTrailer" frameborder=0 allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <p id="movieSynopsis">Synopsis here</p>

      <div id="synopsisBooking">
        <h6 id="makeABooking">Make a Booking:</h6>
        <div id="sessionTimes"></div>
      </div> <!-- end synopsisBooking -->
    </div> <!-- end synopsisArea -->

        <article id=bookingForm>
          <form id= "ticketForm" method= "post" action= "">
            <h2>  
              <div id="movieHeading-id" class="bookingHeading">Movie Title</div> - 
              <div id="movieHeading-day" class="bookingHeading">Day</div> - 
              <div id="movieHeading-hour" class="bookingHeading">Time</div>

              <input type = "hidden"  name="movie[id]" id="movie-id" value =""></div> 
              <input type = "hidden"  name="movie[day]" id="movie-day" value=""></div>
              <input type = "hidden"  name="movie[hour]" id="movie-hour" value =""></div>
            </h2>
            <div id="formInfo">
              <div id="formLHS">
                <div id="standard">
                  <h5>Standard</h5>
                    <label for="seats-STA">Adults</label>
                      <select name="seats[STA]" id="seats-STA" onchange= "calculateTotal()">
                      <option value= ''>Please Select</option>
                      <option value= 1>1</option>
                      <option value= 2>2</option>
                      <option value= 3>3</option>
                      <option value= 4>4</option>
                      <option value= 5>5</option>
                      <option value= 6>6</option>
                      <option value= 7>7</option>
                      <option value= 8>8</option>
                      <option value= 9>9</option>
                      <option value= 10>10</option>
                    </select>
                    <br>
                    <label for="seats-STP">Concession</label>
                      <select name="seats[STP]" id="seats-STP" onchange= "calculateTotal()">
                      <option value= ''>Please Select</option>
                      <option value= 1>1</option>
                      <option value= 2>2</option>
                      <option value= 3>3</option>
                      <option value= 4>4</option>
                      <option value= 5>5</option>
                      <option value= 6>6</option>
                      <option value= 7>7</option>
                      <option value= 8>8</option>
                      <option value= 9>9</option>
                      <option value= 10>10</option>
                    </select>
                    <br>
                    <label for="seats-STC">Children</label>
                      <select name="seats[STC]" id="seats-STC" onchange= "calculateTotal()">
                      <option value= ''>Please Select</option>
                      <option value= 1>1</option>
                      <option value= 2>2</option>
                      <option value= 3>3</option>
                      <option value= 4>4</option>
                      <option value= 5>5</option>
                      <option value= 6>6</option>
                      <option value= 7>7</option>
                      <option value= 8>8</option>
                      <option value= 9>9</option>
                      <option value= 10>10</option>
                    </select>
                </div>
            
                <div id="firstClass">
                  <h5>First Class</h5>
                  <label for="seats-FCA">Adults</label>
                    <select name="seats[FCA]" id="seats-FCA" onchange= "calculateTotal()">
                      <option value= ''>Please Select</option>
                      <option value= 1>1</option>
                      <option value= 2>2</option>
                      <option value= 3>3</option>
                      <option value= 4>4</option>
                      <option value= 5>5</option>
                      <option value= 6>6</option>
                      <option value= 7>7</option>
                      <option value= 8>8</option>
                      <option value= 9>9</option>
                      <option value= 10>10</option>
                    </select>
                    <br>
                    <label for="seats-FCP">Concession</label>
                    <select name="seats[FCP]" id="seats-FCP" onchange= "calculateTotal()">
                      <option value= ''>Please Select</option>
                      <option value= 1>1</option>
                      <option value= 2>2</option>
                      <option value= 3>3</option>
                      <option value= 4>4</option>
                      <option value= 5>5</option>
                      <option value= 6>6</option>
                      <option value= 7>7</option>
                      <option value= 8>8</option>
                      <option value= 9>9</option>
                      <option value= 10>10</option>
                    </select>
                    <br>
                    <label for="seats-FCC">Children</label>
                    <select name="seats[FCC]" id="seats-FCC" onchange= "calculateTotal()">
                      <option value= ''>Please Select</option>
                      <option value= 1>1</option>
                      <option value= 2>2</option>
                      <option value= 3>3</option>
                      <option value= 4>4</option>
                      <option value= 5>5</option>
                      <option value= 6>6</option>
                      <option value= 7>7</option>
                      <option value= 8>8</option>
                      <option value= 9>9</option>
                      <option value= 10>10</option>
                    </select>
                </div>

                <div id="formTotal">Total $ 
                  <div id=totalValue>0</div>
                </div>
              </div> <!-- end formLHS -->

              <div id="formRHS">
                <label for="cust-name">Name <input type="text" name="cust[name]" id='cust-name' required pattern="[a-zA-Z \-.']{1,100}"></label><br>
                <label for="cust-email">Email <input type="email" name="cust[email]" id='cust-email' required></label><br>
                <label for="cust-mobile">Mobile <input type="tel" name="cust[mobile]" id='cust-mobile' required pattern="(\(04\)|04|\+614)( ?\d){8}" ></label><br>
                <label for="cust-card">Credit Card <input type="text" name="cust[card]" id='cust-card' required pattern="((4\d{3})|(5[1-5]\d{2})|(6011)|(34\d{1})|(37\d{1}))-?\s?\d{4}-?\s?\d{4}-?\s?\d{4}|3[4,7][\d\s-]{15}"></label><br>
                <br>
                <label for="cust-expiry">Expiry <input type="month" name="cust[expiry]" id='cust-expiry' required></label>
                <br>
                <input type="submit" name="order" value="Order" id='order' onclick="validateDate()">
              </div> <!-- end formRHS -->
            </div><!-- end formInfo -->
          </form>

          
    </article>

 
    <?php /* tool1
    preShow($_POST); // ie echo a string
    preShow($_SESSION);
    $aaarg = preShow($my_bad_array, true); // ie return as a string
    echo "Why is \n $aaarg \n not working?"; 
    */
    ?> 

    <?php  /* tool2
    printMyCode(); 
    */
    ?> 

    <?php /* tool3
    $pricesArrayPHP = array ( ... );
    php2js($pricesArrayPHP, 'pricesArrayJS'); // ie echos javascript equivalent code
    */ 
    ?> 
    
    </main>


    <footer>
      <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script>
      lunardocinema@gmail.com - 0412 345 678 - 
      <a href='https://www.google.com/maps/place/123+La+Trobe+St,+Melbourne+VIC+3000/@-37.8086568,144.9655973,17z/data=!3m1!4b1!4m5!3m4!1s0x6ad642cebf245a07:0x258769ae7754af!8m2!3d-37.8086568!4d144.967786'>
        123 La Trobe St, Melbourne
      </a><br>
      Jonathon Mitterbacher - s3784464 - <a href='https://github.com/s3784464/wp'>GitHub Repository </a>- Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

    <script src="../a3/script.js"></script>

  </body>
</html>
