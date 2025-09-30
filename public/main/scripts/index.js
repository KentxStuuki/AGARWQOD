// Pupose Section Read More and Read Less Button Functionality
const moreText = document.getElementById("moreText");
const btn = document.getElementById("readMoreBtn");

btn.addEventListener("click", () => {
    moreText.classList.toggle("hidden"); // toggle visibility
    btn.textContent = moreText.classList.contains("hidden") ? "Read More" : "Read Less";
});

// Marketing Section Read More and Read Less Button Functionality
const shortText1 = document.getElementById("shortText_1");
const fullText1 = document.getElementById("fullText_1");
const btn1 = document.getElementById("readMoreBtn_1");

const shortText2 = document.getElementById("shortText_2");
const fullText2 = document.getElementById("fullText_2");
const btn2 = document.getElementById("readMoreBtn_2");

const shortText3 = document.getElementById("shortText_3");
const fullText3 = document.getElementById("fullText_3");
const btn3 = document.getElementById("readMoreBtn_3");


btn1.addEventListener("click", () => {
    shortText1.classList.toggle("hidden");
    fullText1.classList.toggle("hidden");
    btn1.textContent = fullText1.classList.contains("hidden") ? "Read More" : "Read Less";
});


btn2.addEventListener("click", () => {
    shortText2.classList.toggle("hidden");
    fullText2.classList.toggle("hidden");
    btn2.textContent = fullText2.classList.contains("hidden") ? "Read More" : "Read Less";
});


btn3.addEventListener("click", () => {
    shortText3.classList.toggle("hidden");
    fullText3.classList.toggle("hidden");
    btn3.textContent = fullText3.classList.contains("hidden") ? "Read More" : "Read Less";
});