const nav = document.querySelector(".navbar");

window.addEventListener("scroll", function () {
	nav.classList.toggle("active", window.scrollY > 0);
});


// Path: js\app.js



