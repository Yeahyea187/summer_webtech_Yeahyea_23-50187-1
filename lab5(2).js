const myImage = document.getElementById("myImage");
const showBtn = document.getElementById("showImage");
const hideBtn = document.getElementById("hideImage");

showBtn.addEventListener("click", function () {
    myImage.style.visibility = "visible"; // Keep space, just make visible
});

hideBtn.addEventListener("click", function () {
    myImage.style.visibility = "hidden"; // Hide but keep centered
});
