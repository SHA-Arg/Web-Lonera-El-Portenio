let nav = document.getElementById("nav");
let menu = document.getElementById("menu-lg");

window.addEventListener("scroll", () => {
	let value = window.scrollY;
	if (value > 0) {
		nav.classList.add("nav-scrolled");
		menu.classList.add("menu-lg-scrolled");
	} else {
		nav.classList.remove("nav-scrolled");
		menu.classList.remove("menu-lg-scrolled");
	}
});
