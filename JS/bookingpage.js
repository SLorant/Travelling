//localStorageból megszerezni a JSON adatokat
var selectedBooking = JSON.parse(localStorage.getItem('selectedBooking'));

//képek betöltése
for (let i = 1; i < 5; i++) {
    var imgKey = "img" + i;
    var imgValue = selectedBooking[imgKey];
    document.getElementById("img" + i).setAttribute("src", imgValue);
    document.getElementById("img" + i ).setAttribute("alt", selectedBooking.name);   
}

// adatok átvitele
document.getElementById("header1").innerHTML = selectedBooking.name;
document.getElementById("header2").innerHTML = selectedBooking.location;
document.getElementById("period").innerHTML = selectedBooking.nights;
document.getElementById("hotel").innerHTML = selectedBooking.location;
document.getElementById("price").innerHTML = selectedBooking.price;
document.getElementById("rooms").innerHTML = selectedBooking.rooms;
document.getElementById("article1").innerHTML = selectedBooking.description1;
document.getElementById("article2").innerHTML = selectedBooking.description2;
