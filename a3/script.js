var aboutUs = document.getElementById("navAboutUs");
var prices = document.getElementById("navPrices");
var nowShowing = document.getElementById("navNowShowing");

var aboutUsDiv = document.getElementById("About-Us");
var pricesDiv = document.getElementById("Prices");
var nowShowingDiv = document.getElementById("Now-Showing");

// function highlightNavChoice(navClick){
//     aboutUs.style.color = "#E2FCEF";
//     aboutUs.style.textDecorationLine = "none";

//     prices.style.color = "#E2FCEF";
//     prices.style.textDecorationLine = "none";

//     nowShowing.style.color = "#E2FCEF";
//     nowShowing.style.textDecorationLine = "none";

//     //changes the color of the selected nav element
//     var name = document.getElementById(navClick);
//         name.style.color = "rgb(211, 175, 245)";
//         name.style.textDecorationLine = "underline";
// }

function calculateTotal(){
    var total = document.getElementById("formTotal");

    var standardAdult;
    //standardAdult = 14.00;

    var standardConc;
    //standardConc = 12.50;

    var standardChild;
    //standardChild = 11.00;

    var fcAdult;
    //fcAdult=24.00;

    var fcConc;
    //fcConc=22.50;

    var fcChild;
    //fcChild = 21.00


}
 
window.onscroll = function(){
    console.clear();
    console.log("Win Y: " +window.scrollY);
    var articles = [aboutUsDiv, pricesDiv, nowShowingDiv];
    console.log(articles);
    var navlinks = document.getElementsByTagName('nav')
    [0].getElementsByTagName('a');
    console.log(navlinks);
    var n= -1;
    while (n < articles.length -1 && articles[n+1].offsetTop <= window.scrollY ) {
        n++;
    }
    console.log(n);
    for (var a=0; a<navlinks.length; a++) {
        navlinks[a].classList.remove('active');
    }
    if (n >= 0) {
         navlinks[n].classList.add('active');
    }
    console.log(articles[n].id+": "+articles[n].offsetTop);
}

function showSynopsis(movieClick){
    var movieChoice = document.getElementById(movieClick);
    movieChoice.style.display = "block";
}


