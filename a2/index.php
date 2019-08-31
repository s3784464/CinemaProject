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
        <a href= '#About-Us'>About Us</a>
        <a href= '#Prices' >Prices</a>
        <a href= '#Now-Showing'>Now Showing</a> 
      </nav>
    </header>

    <main>
      <article id='About-Us'>
        <h2>About Us</h2>
        <p>Lunardo Cinema has reopened after receiving extensive improvements and multiple renovations including:<p>
        <ul>
          <li>The <b>Standard</b> cinema seats have been all been replaced and upgraded (see below)</li>
          <li>The launch of our new <i>brand new</i> <b>First Class</b> cinema! (see below) </li>
          <li>Our projection and sound systems have all been upgraded with the latest <a href='https://www.dolby.com/us/en/brands/dolby-vision.html'>3D Dolby Vision </a> 
        and <a href='https://www.dolby.com/us/en/technologies/cinema/dolby-atmos.html'> Dolby Atmos</a> sound. </li>
      </ul>

      <div class="hoverPics">
        <span class="imageContainer">
          <p class="classText">Standard Seats</p>
          <img src='../../media/standard.png' alt="standard" class="Image">
        </span>

        <span class="imageContainer">
          <p class="classText">First Class Seats</p>
          <img src='../../media/firstClass.png' alt="firstClass" class="Image">
        </span>
      </div>

      </article>

      <article id ='Prices'>
      <h2>Prices</h2>
        <table>
            <tr>
              <td class="topTable">Seat Type</td>
              <td class="topTable">Seat Code</td>
              <td class="topTable">All day Monday and Wednesday AND 12pm on Weekdays</td>
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
    <h2>Now Showing</h2>
    <div class="showcases">
      <div class='nowShowing'>
        <div class='endgame'>
            <img src="../../media/endgame.jpg" alt="Avengers: Endgame" width="600" height="400">
          <div class="desc"><h4>Avengers: Endgame</h4>
            <h4>PG</h4>
            <p>Wednesday - 9pm</p>
            <p>Thursday - 9pm</p>
            <p>Friday - 9pm</p>
            <p>Saturday - 6pm</p>
            <p>Sunday - 6pm</p>
          </div>
        </div>
      
        <div class='topEndWedding'>
            <img src="../../media/topendwedding.jpg" alt="Top End Wedding" width="600" height="400">
          <div class="desc"><h4>Top End Wedding</h4>
          <h4>M</h4>
            <p>Monday - 6pm</p>
            <p>Tuesday - 6pm</p>
            <p>Saturday - 12pm</p>
            <p>Sunday - 12pm</p>
          </div>
        </div>

        <div class='dumbo'>
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
        </div>

        <div class='theHappyPrince'>
            <img src="../../media/thehappyprince.jpg" alt="The Happy Prince" width="600" height="400">
          <div class="desc"><h4>The Happy Prince</h4>
          <h4>R 18+</h4>
            <p>Wednesday - 12pm</p>
            <p>Thursday - 12pm</p>
            <p>Friday - 12pm</p>
            <p>Saturday - 9pm</p>
            <p>Sunday - 9pm</p>
          </div>
        </div>
      </div>
    </article>

        <div id='endgameShowcase'>
          <div id='endgameHeading'>
            <h2>Avengers: Endgame</h2>
            <span class="pg">PG</span>
          </div>
          <iframe width ="700" height = "400" src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder=0 allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <p>After the devastating events of <b>Avengers: Infinity War (2018)</b>, the universe is in ruins. With the help of remaining allies, 
          the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe. (IMDB Avengers: Endgame 2019)</p>
          
          <article id = 'makeABooking'>
          <p id="makeabooking">Make a Booking:<p>
            <span class='avengersTime'> Wednesday - 9pm</span>
            <span class='avengersTime'>Thursday - 9pm</span>
            <span class='avengersTime'>Friday - 9pm</span>
            <span class='avengersTime'>Saturday - 6pm</span>
            <span class='avengersTime'>Sunday - 6pm</span>
          </div>

        

        <article id=bookingForm>
        <!--Create a 'booking form' option-->
        <p>WIP: <i>Booking Form</i></p>
        </article>

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

  </body>
</html>
