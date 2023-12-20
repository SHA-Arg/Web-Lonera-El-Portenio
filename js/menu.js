const nav = document.querySelector(".navbar");

window.addEventListener("scroll", function () {
	navbar.classList.toggle("active", window.scrollY > 0);
});

window.onscroll = () => {
	navbar.classList.remove("active");
};
