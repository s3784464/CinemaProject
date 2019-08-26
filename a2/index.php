<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
  </head>

  <body>
    <header>
      <div class='lunardo'><h1>Lunardo Cinema</h1></div>
      <nav id="navbar">
        <!-- for putting an icon next to heading <img src =../../media/logo.png/> -->
          <a href= '#About-Us'>About Us</a> -
          <a href= '#Prices' >Prices</a> -
          <a href= '#Now-Showing'>Now Showing</a> 
      </nav>
    </header>

    <main>
      <article id='About-Us'>
        <h2>About Us</h2>
        <p>Lunardo Cinema has reopened after extensive improvements and renovations!<p>
        <p>-Our <b>Standard</b> cinema seats have been all received an upgrade  <br>
        -We have also finally opened our new <b>First Class</b> cinema! <br>
        -We're also happy to announce that our projection and sound systems are upgraded with <a href='https://www.dolby.com/us/en/brands/dolby-vision.html'>3D Dolby Vision </a> 
        and <a href='https://www.dolby.com/us/en/technologies/cinema/dolby-atmos.html'> Dolby Atmos</a> sound.</p>

        <img width=10% height=10% src='../../media/standard.png'>
        <img width=10% height=10% src='../../media/firstClass.png'>
      </article>

      <article id ='Prices'>
      <h2>Prices</h2>
        <table>
            <tr>
              <td>Seat Type</td>
              <td>Seat Code</td>
              <td>All day Monday and Wednesday AND 12pm on Weekdays</td>
              <td>All other times</td>
            </tr>
            <tr>
              <td>Standard Adult</td>
              <td>STA</td>
              <td>14.00</td>
              <td>19.80</td>
            </tr>
            <tr>
              <td>Standard Concession</td>
              <td>STP</td>
              <td>12.50</td>
              <td>17.50</td>
            </tr>
            <tr>
              <td>Standard Child</td>
              <td>STC</td>
              <td>11.00</td>
              <td>15.30</td>
            </tr>
            <tr>
              <td>First Class Adult</td>
              <td>FCA</td>
              <td>24.00</td>
              <td>30.00</td>
            </tr>
            <tr>
              <td>First Class Concession</td>
              <td>FCP</td>
              <td>22.50</td>
              <td>27.00</td>
            </tr>
            <tr>
              <td>First Class Child</td>
              <td>FCC</td>
              <td>21.00</td>
              <td>24.00</td>
            </tr>
        </table>
      </article>

      <article id ='Now-Showing'>
      <h2>Now Showing</h2>
        <div>
          Avengers: Endgame
        </div>
        <div>
          Top End Wedding
        </div>
        <div>
          Dumbo
        </div>
        <div>
          The Happy Prince
        </div>
      </article>

        <div id='endgame'>
          <h1>Avengers: Endgame</h1>
          <p>After the devastating events of <b>Avengers: Infinity War (2018)</b>, the universe is in ruins. With the help of remaining allies, 
          the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe. (IMDB Avengers: Endgame 2019)</p>
          <iframe width ="350" height = "200" src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder=0 allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

        <h3>Make a Booking:</h3>
        <!--Provide session times-->
        <p>WIP: <i>session times</i></p>

        <!--Create a 'booking form' option-->
        <p>WIP: <i>booking form</i></p>

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
      Jonathon Mitterbacher - s3784464 <a href='https://github.com/s3784464/wp'>- GitHub Repository </a>- Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
