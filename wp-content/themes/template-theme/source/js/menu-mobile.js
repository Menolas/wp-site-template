'use strict';
(function () {

	let width = document.querySelector("body").clientWidth;
	console.log(width);
	
	if (width < 990) {

		const menu = document.querySelector(".main-menu");
		const button = document.querySelector(".toggler");
		const header = document.querySelector(".main-header");
		const menuItems = document.querySelectorAll(".menu-item-has-children");

		// const openMenuItem = function (item) {
	 //        item.classList.add("menu-item-has-children--opened");
	 //        item.querySelector(".sub-menu").classList.add("sub-menu--shown");
		// };

		// const closeMenuItem = function (item) {
		// 	item.classList.remove("menu-item-has-children--opened");
		// 	item.querySelector(".sub-menu").classList.remove("sub-menu--shown");
		// }

		// const findAndCloseMenuItem = function () {
		// 	Array.from(menuItems).forEach(function (el) {
		// 		if (el.classList.contains("menu-item-has-children--opened")) {
		// 			closeMenuItem(el);
		// 		}
		// 	}); 
		// };

		function toggleMenu () {
			button.classList.toggle("toggler--close");
			menu.classList.toggle("main-menu--shown");
			header.classList.toggle("main-header--mobile");
		}

		button.addEventListener('click', function(e) {
			toggleMenu();
		});

		// Array.from(menuItems).forEach(function (el) {
		// 	el.addEventListener("click", function (e) {
		// 		let menuItemLink = el.querySelector("a");
		// 		let target = e.currentTarget;
				
		// 		if (!el.classList.contains("menu-item-has-children--opened")) {
		// 		    findAndCloseMenuItem();
	 //                openMenuItem(el);
	 //            } else {
	 //            	closeMenuItem(el);
	 //            }
		        
		// 	});
		// });
	}
	
})();
