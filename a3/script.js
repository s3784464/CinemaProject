var ENDGAME = {
    title:"Avengers: Endgame",
    classification:"PG", 
    synopsis:"After the devastating events of <b>Avengers: Infinity War (2018)</b>, the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe. <b><i>(IMDb Avengers: Endgame 2019)</i></b>",
    trailer: "https://www.youtube.com/embed/TcMBFSGVi1c",
    bookingTimes: ["Wednesday - 9pm", "Thursday - 9pm", "Friday - 9pm", "Saturday - 6pm", "Sunday - 6pm"]
};

var TOPENDWEDDING = {
    title:"Top End Wedding",
    classification:"M",
    synopsis: "Lauren and Ned are engaged, they are in love, and they have just ten days to find Lauren's mother who has gone AWOL somewhere in the remote far north of Australia, reunite her parents and pull off their dream wedding. <b><i>(IMDb Top End Wedding 2019)</i></b>",
    trailer: "https://www.youtube.com/embed/uoDBvGF9pPU",
    bookingTimes: ["Monday - 6pm", "Tuesday - 6pm", "Saturday - 12pm", "Sunday - 12pm"]
};

var DUMBO = {
    title:"Dumbo",
    classification:"PG",
    synopsis: "A young elephant, whose oversized ears enable him to fly, helps save a struggling circus, but when the circus plans a new venture, Dumbo and his friends discover dark secrets beneath its shiny veneer. <b><i>(IMDb Dumbo 2019)</i></b>",
    trailer: "https://www.youtube.com/embed/7NiYVoqBt-8",
    bookingTimes: ["Monday - 12pm", "Tuesday - 12pm", "Wednesday - 6pm", "Thursday - 6pm", "Friday - 6pm", "Saturday - 12pm", "Sunday - 12pm"]
};

var THEHAPPYPRINCE = {
    title:"The Happy Prince",
    classification:"R18+",
    synopsis: "The untold story of the last days in the tragic times of Oscar Wilde, a person who observes his own failure with ironic distance and regards the difficulties that beset his life with detachment and humor. <b><i>(IMDb The Happy Prince 2018)</i></b>",
    trailer: "https://www.youtube.com/embed/4HmN9r1Fcr8",
    bookingTimes: ["Wednesday - 12pm", "Thursday - 12pm", "Friday - 12pm", "Saturday - 9pm", "Sunday - 9pm"]
};

function changeSynopsis(movie){
        //assigns all parts of synopsisArea to variables
        var title = document.getElementById("synopsisTitle");
        var formatText = document.getElementById("balancingText"); //used keep the synopsis classification centered
        var classification = document.getElementById("movieClassification");
        var synopsis = document.getElementById("movieSynopsis");
        var trailer = document.getElementById("synopsisTrailer");
        var sessionTimes = document.getElementById("sessionTimes");
        var synopsisArea = document.getElementById("synopsisArea");

        //makes synopsis div visible
        synopsisArea.style.display = "block";

        synopsisArea.style.borderRadius = "25px 25px 25px 25px";
        var bookingForm = document.getElementById("bookingForm");
        bookingForm.style.display = "none";

        //updates the synopsis values
        title.innerHTML = movie.title;
        formatText.innerHTML = movie.title;//replicating title text
        classification.innerHTML = movie.classification;
        synopsis.innerHTML = movie.synopsis;
        trailer.src = movie.trailer;

        //removes existing session times
        while (sessionTimes.firstChild) {
            sessionTimes.removeChild(sessionTimes.firstChild);
        }

        //creates new session times
        for(let n =0; n< movie.bookingTimes.length; n++){
            var bookingElement = document.createElement("div");
            bookingElement.setAttribute("class", "sessionTime");
            let elementNum = n+1;
            bookingElement.setAttribute("id", "sessionTime" + elementNum);
            bookingElement.setAttribute("onclick", `updateForm("sessionTime${elementNum}")`);

            var newTime = document.createTextNode(movie.bookingTimes[n]);
            bookingElement.appendChild(newTime);
            sessionTimes.appendChild(bookingElement);
            console.log(bookingElement);
        }

}


function updateForm(sessionId){
    var day = document.getElementById("movie-day");     //booking form day value
    var hour = document.getElementById("movie-hour");   //booking form movie-hour value
    var id = document.getElementById("movie-id");       //booking form movie-id value

    var sessionChoice = document.getElementById(sessionId);
    choiceContent = sessionChoice.textContent;
    //console.log("the choice is" + choiceContent);
    var dayAndHour = choiceContent.split(" - ");
    //console.log(dayAndHour[0]);   //logs literal movie-day data
    //console.log(dayAndHour[1]);   //logs literal movie-hour data

    switch(dayAndHour[0]){ //assigns abbreviated movie-day data to booking form
        case "Monday":
            day.value= "MON";
            break;
        case "Tuesday":
            day.value= "TUE";
            break;
        case "Wednesday":
            day.value= "WED";
            break;
        case "Thursday":
            day.value= "THU";
            break;
        case "Friday":
            day.value= "FRI";
            break;
        case "Saturday":
            day.value= "SAT";
            break;
        case "Sunday":
            day.value= "SUN";
            break;
    }

    switch(dayAndHour[1]){ //assigning abbreviated movie-hour data to booking form
        case "12pm":
            hour.value= "T12";
            break;
        case "3pm":
            hour.value= "T15";
            break;
        case "6pm":
            hour.value= "T18";
            break;
        case "9pm":
            hour.value= "T21";
            break;
    }

    var synopsisTitle = document.getElementById("synopsisTitle").textContent;
    var headingDay = document.getElementById("movieHeading-day");
    headingDay.innerHTML = dayAndHour[0];    //when assigning literal movie-day to booking for e.g. "Monday"
    var headingTime = document.getElementById("movieHeading-hour");
    headingTime.innerHTML = dayAndHour[1];   //when asigning literal movie-time to booking form e.g. "9pm"
    var headingId = document.getElementById("movieHeading-id");
    headingId.innerHTML = synopsisTitle;


    
    switch(synopsisTitle){ //assigning abbreviated movie-id data to booking form
        case "Avengers: Endgame":
            id.value= "ACT";
            break;
        case "The Happy Prince":
            id.value= "AHF";
            break;
        case "Dumbo":
            id.value= "ANM";
            break;
        case "Top End Wedding":
            id.value= "RMC";
            break;
    }
    
    
    var synopsisArea = document.getElementById("synopsisArea");
    synopsisArea.style.borderRadius = "25px 25px 0 0";
    var bookingForm = document.getElementById("bookingForm");
    bookingForm.style.display = "block";
    var form = document.getElementById("ticketForm").reset();
    calculateTotal();
    
}

function calculateTotal(){
    STA = document.getElementById("seats-STA").value;
    STP = document.getElementById("seats-STP").value;
    STC = document.getElementById("seats-STC").value;
    FCA = document.getElementById("seats-FCA").value;
    FCP = document.getElementById("seats-FCP").value;
    FCC = document.getElementById("seats-FCC").value;
    //console.log(STA);

    var day = document.getElementById("movie-day").textContent;
    var time = document.getElementById("movie-hour").textContent;

    var STAprice;
    var STPprice;
    var STCprice;
    var FCAprice;
    var FCPprice;
    var FCCprice;

    if(day == "Monday" ||day == "Wednesday" || time == "12pm"){
        STAprice = 14.00;
        STPprice = 12.50;
        STCprice = 11.00;
        FCAprice = 24.00;
        FCPprice = 22.50;
        FCCprice = 21.00
    }
    else{
        STAprice = 19.80;
        STPprice = 17.50;
        STCprice = 15.30;
        FCAprice = 30.00;
        FCPprice = 27.00;
        FCCprice = 24.00
    }
    totalPrice = ((+STA * STAprice) + (+STP*STPprice) + (+STC*STCprice) + (+FCA*FCAprice) + (+FCP*FCPprice) + (+FCC*FCCprice)).toFixed(2);

    var totalElement = document.getElementById("totalValue");
    totalElement.innerHTML = totalPrice;
}
 
window.onscroll = function(){
    var aboutUsDiv = document.getElementById("About-Us");
    var pricesDiv = document.getElementById("Prices");
    var nowShowingDiv = document.getElementById("Now-Showing");

    //console.clear();
    //console.log("Win Y: " +window.scrollY);
    var articles = [aboutUsDiv, pricesDiv, nowShowingDiv];
    //console.log(articles);
    var navlinks = document.getElementsByTagName('nav')
    [0].getElementsByTagName('a');
    //console.log(navlinks);
    var n= -1;
    while (n < articles.length -1 && articles[n+1].offsetTop <= window.scrollY+1) {
        n++;
    }
    //console.log(n);
    for (var a=0; a<navlinks.length; a++) {
        navlinks[a].classList.remove('active');
    }
    if (n >= 0) {
         navlinks[n].classList.add('active');
    }
    //console.log(articles[n].id+": "+articles[n].offsetTop);
}

function validateDate(){
    var expiryDate = document.forms["ticketForm"]["cust[expiry]"].value;
    var dateArr = expiryDate.split("-");
    var expiryYear = dateArr[0];    //dateArr[0] is year
    //console.log(expiryYear);
    var expiryMonth = dateArr[1];   //dateArr[1] is month
    //console.log(expiryMonth);

    var date = new Date();
    //console.log(date.getMonth());
    var getMonth = date.getMonth();

    var currentMonth = +getMonth + +1;
    if(currentMonth<10){
        currentMonth = "0" + currentMonth;
    }
    //console.log(currentMonth);

    console.log("value is" + expiryDate);
    if (expiryYear < date.getFullYear() || (expiryYear == date.getFullYear() && expiryMonth <= currentMonth))
    {
        //alert("Invalid Card Expiry Date");
        document.getElementById("cust-expiry").value = '';
        return false;
    }
    else
    {
        return true;
    }
}