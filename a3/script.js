var aboutUs = document.getElementById("navAboutUs");
var prices = document.getElementById("navPrices");
var nowShowing = document.getElementById("navNowShowing");

var aboutUsDiv = document.getElementById("About-Us");
var pricesDiv = document.getElementById("Prices");
var nowShowingDiv = document.getElementById("Now-Showing");

function highlightNavChoice(navClick){
    aboutUs.style.color = "#E2FCEF";
    aboutUs.style.textDecorationLine = "none";

    prices.style.color = "#E2FCEF";
    prices.style.textDecorationLine = "none";

    nowShowing.style.color = "#E2FCEF";
    nowShowing.style.textDecorationLine = "none";

    //changes the color of the selected nav element
    var name = document.getElementById(navClick);
        name.style.color = "rgb(211, 175, 245)";
        name.style.textDecorationLine = "underline";
}

function calculateTotal(){
    var total = document.getElementById("formTotal");
    //WIP
}
 
window.onscroll = function(){
    console.log(window.scrollY);
    var articles = document.getElementsByTagName('main')
    [0].getElementsByTagName('article');
    console.log(articles);
    var navlinks = document.getElementsByTagName('nav')
    [0].getElementsByTagName('a');
    console.log(navlinks);
}

function showSynopsis(movieClick){
    var movieChoice = document.getElementById(movieClick);

    endgameSynopsis = document.getElementById('endgameShowcase');
    movieChoice.style.display = inline-block;
    endgameSynopsis.style.display = inline-block;
}
