// Read More and Read Less Button Functionality
const moreText = document.getElementById("moreText");
const btn = document.getElementById("readMoreBtn");

const shortText1 = document.getElementById("shortText_1");
const fullText1 = document.getElementById("fullText_1");
const btn1 = document.getElementById("readMoreBtn_1");

const shortText2 = document.getElementById("shortText_2");
const fullText2 = document.getElementById("fullText_2");
const btn2 = document.getElementById("readMoreBtn_2");

const shortText3 = document.getElementById("shortText_3");
const fullText3 = document.getElementById("fullText_3");
const btn3 = document.getElementById("readMoreBtn_3");

const shortText4 = document.getElementById("shortText_4");
const fullText4 = document.getElementById("fullText_4");
const btn4 = document.getElementById("readMoreBtn_4");

const shortText5 = document.getElementById("shortText_5");
const fullText5 = document.getElementById("fullText_5");
const btn5 = document.getElementById("readMoreBtn_5");

const shortText6 = document.getElementById("shortText_6");
const fullText6 = document.getElementById("fullText_6");
const btn6 = document.getElementById("readMoreBtn_6");

const shortText7 = document.getElementById("shortText_7");
const fullText7 = document.getElementById("fullText_7");
const btn7 = document.getElementById("readMoreBtn_7");

btn.addEventListener("click", () => {
    moreText.classList.toggle("hidden"); // toggle visibility
    btn.textContent = moreText.classList.contains("hidden") ? "Read More" : "Read Less";
});

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


btn4.addEventListener("click", () => {
    shortText4.classList.toggle("hidden");
    fullText4.classList.toggle("hidden");
    btn4.textContent = fullText4.classList.contains("hidden") ? "Read More" : "Read Less";
});


btn5.addEventListener("click", () => {
    shortText5.classList.toggle("hidden");
    fullText5.classList.toggle("hidden");
    btn5.textContent = fullText5.classList.contains("hidden") ? "Read More" : "Read Less";
});

btn6.addEventListener("click", () => {
    shortText6.classList.toggle("hidden");
    fullText6.classList.toggle("hidden");
    btn6.textContent = fullText6.classList.contains("hidden") ? "Read More" : "Read Less";
});

btn7.addEventListener("click", () => {
    shortText7.classList.toggle("hidden");
    fullText7.classList.toggle("hidden");
    btn7.textContent = fullText7.classList.contains("hidden") ? "Read More" : "Read Less";
});

