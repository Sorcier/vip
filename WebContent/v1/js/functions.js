/**
 * Author : Frédéric GERMAIN
 * Copyright VIP PLOMBERIE
 */

function language_set(lang){
	// Check browser support
	if (typeof(Storage) !== "undefined") {
	    // Store
	    localStorage.setItem("lang", lang);
	} 
}

function language_get(){
    // Retrieve
    document.getElementById("result").innerHTML = localStorage.getItem("l");
}