var getidToWrite = document.querySelector("#change_type_text");
var textForTyping = ["Web Designer", "Web Developer", "Programmer", "Android App developer"];
var index = 0;
var isAdding = true;
var textToBeTypedIndex = 0;

function playAmimation() {
    setTimeout(function () {
        // set the text of getidToWrite to a substring of the text to be typed using index.
        getidToWrite.innerText = textForTyping[textToBeTypedIndex].slice(0, index);
        if (isAdding) {

            if (index > textForTyping[textToBeTypedIndex].length) {

                isAdding = false
                getidToWrite.classList.add("showAnim")

                setTimeout(function () {
                    getidToWrite.classList.remove("showAnim");
                    playAmimation();
                }, 2000)
                return
            } else {

                index++
            }
        } else {
            // removing text
            if (index === 0) {
                // no more text to remove
                isAdding = true
                //switch to next text in text array
                textToBeTypedIndex = (textToBeTypedIndex + 1) % textForTyping.length
            } else {

                index--
            }
        }
        // call itself
        playAmimation();
    }, isAdding ? 200 : 80)
}
// start animation
playAmimation();


// javascript for light box
var closelightbtn = document.querySelector("#close_lightbox");
var lighbox = document.querySelector(".light_bx");
var lightinneimg = document.querySelector("#inne_l_im");
var pimgi1 = document.querySelector(".p-img1");
var pimgi2 = document.querySelector(".p-img2");
var pimgi3 = document.querySelector(".p-img3");
var pimgi4 = document.querySelector(".p-img4");
var pimgi5 = document.querySelector(".p-img5");
var pimgi6 = document.querySelector(".p-img6");


// code for close lightbox
closelightbtn.addEventListener("click", function () {
    lighbox.setAttribute("style", "display:none");

});

pimgi1.addEventListener("click", function () {
    lighbox.setAttribute("style", "display:block");

    lightinneimg.src = "img/my_full.png";

});
pimgi2.addEventListener("click", function () {
    lighbox.setAttribute("style", "display:block");

    lightinneimg.src = "img/vr_full.jpg";

});
pimgi3.addEventListener("click", function () {
    lighbox.setAttribute("style", "display:block");

    lightinneimg.src = "img/re_full.png";

});
pimgi4.addEventListener("click", function () {
    lighbox.setAttribute("style", "display:block");

    lightinneimg.src = "img/crar_full.png";

});
pimgi5.addEventListener("click", function () {
    lighbox.setAttribute("style", "display:block");

    lightinneimg.src = "img/abu1_full.png";

});
pimgi6.addEventListener("click", function () {
    lighbox.setAttribute("style", "display:block");

    lightinneimg.src = "img/top_full.png";

});
