function mymode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
}
let href = ["data.php", "Rpg.php", "ui-design.php"];
let href2 = [];
let src = ["img/Mysql8.png", "img/cmatrix-clear.png", "img/unity-desktop-animation.webp"];
let src2 = [];
let left = document.querySelector('#directionLeft');
let right = document.querySelector('#directionRight');
let title = document.querySelector('#title');

function right_function() {
    document.querySelector(".current").href = href[2];
    document.querySelector("#current").src = src[2];
    document.querySelector("#left").src = src[1];
    document.querySelector(".left").href = href[1];
    document.querySelector("#right").src = src[0];
    document.querySelector(".right").href = href[0];
    href2[0] = href[1];
    href2[1] = href[2];
    href2[2] = href[0];
    href[0] = href2[0];
    href[1] = href2[1];
    href[2] = href2[2];
    src2[0] = src[1];
    src2[1] = src[2];
    src2[2] = src[0];
    src[0] = src2[0];
    src[1] = src2[1];
    src[2] = src2[2];
}

function left_function() {
    document.querySelector(".current").href = href[0];
    document.querySelector("#current").src = src[0];
    document.querySelector("#left").src = src[2];
    document.querySelector(".left").href = href[2];
    document.querySelector("#right").src = src[1];
    document.querySelector(".right").href = href[1];
    href2[2] = href[1];
    href2[0] = href[2];
    href2[1] = href[0];
    href[0] = href2[0];
    href[1] = href2[1];
    href[2] = href2[2];
    src2[2] = src[1];
    src2[0] = src[2];
    src2[1] = src[0];
    src[0] = src2[0];
    src[1] = src2[1];
    src[2] = src2[2];
    console.log(document.querySelector(".current").href);
}

function title_function() {
    if(document.querySelector(".current").href.includes("data.php")) {
        title.innerHTML = "Data-Base";
    } else if(document.querySelector(".current").href.includes("Rpg.php")) {
        title.innerHTML = "RPG Python";
    } else if(document.querySelector(".current").href.includes("ui-design.php")) {
        title.innerHTML = "UI Design";
    }
}

right.addEventListener("click", right_function);
left.addEventListener("click", left_function);
right.addEventListener("click", title_function);
left.addEventListener("click", title_function);