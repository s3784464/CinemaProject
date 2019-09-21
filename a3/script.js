function highlightNavChoice(navClick){
    var aboutUs = document.getElementById("navAboutUs");
    aboutUs.style.color = "#E2FCEF";
    aboutUs.style.textDecorationLine = "none";

    var prices = document.getElementById("navPrices");
    prices.style.color = "#E2FCEF";
    prices.style.textDecorationLine = "none";

    var nowShowing = document.getElementById("navNowShowing");
    nowShowing.style.color = "#E2FCEF";
    nowShowing.style.textDecorationLine = "none";

    //changes the color of the selected nav element
    var name = document.getElementById(navClick);
        name.style.color = "rgb(211, 175, 245)";
        name.style.textDecorationLine = "underline";
}