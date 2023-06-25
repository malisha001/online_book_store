let searchbtn = document.querySelector(".searchbtn");
let closebtn = document.querySelector(".closebtn");
let cartbtn = document.querySelector(".cartbtn");
let searchbar = document.querySelector(".searchbar");
let navi = document.querySelector(".navi");
let menubtn = document.querySelector(".menubtn");
let header = document.querySelector("header");
let submenu = document.getElementById("submenu");

searchbtn.onclick =function() {
    searchbar.classList.add("active");
    closebtn.classList.add("active");
    searchbtn.classList.add("active");
    cartbtn.classList.add("active");
    userbtn.classList.add("active");
}

closebtn.onclick = function() {
    searchbar.classList.remove("active");
    closebtn.classList.remove("active");
    searchbtn.classList.remove("active");
    cartbtn.classList.remove("active");
    userbtn.classList.remove("active");
}

menubtn.onclick = function() {
    header.classList.toggle("open");
}

function toggleMenu(){
    submenu.classList.toggle("openmenu");
}