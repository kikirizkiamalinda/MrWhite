
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');
 require('./select2.min.js')
 // import owlCarousel from 'owl.carousel';
 require('./owl.carousel.js')
 require('./owl_carousel.js')
 require('./all.js')
 require('./slider.js')
 require('./jquery-ui.min.js')
 require('./jquery.min.js')
 // require('./drag_drop.js')

 // import 'owl.carousel';
// require('./flickity.pkgd.min.js')

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.component('example-component', require('./components/ExampleComponent.vue'));

 const app = new Vue({
 	el: '#app'
 });

 $(window).scroll(function () {
 	var headerHeight = $('.navbar').innerHeight();
 	var contentHeight = $('.site-main').innerHeight();
 	var sidebarHeight = $('.sidenav').height();
 	var sidebarBottomPos = contentHeight - sidebarHeight; 
 	var trigger = $(window).scrollTop() - headerHeight;

 	if ($(window).scrollTop() >= headerHeight) {
 		$('.sidenav').addClass('fixed');
 	} else {
 		$('.sidenav').removeClass('fixed');
 	}

 	if (trigger >= sidebarBottomPos) {
 		$('.sidenav').addClass('bottom');
 	} else {
 		$('.sidenav').removeClass('bottom');
 	}
 });

 var dropdown = document.getElementsByClassName("dropdown-btn");
 var i;

 for (i = 0; i < dropdown.length; i++) {
 	dropdown[i].addEventListener("click", function() {
 		this.classList.toggle("active");
 		var dropdownContent = this.nextElementSibling;
 		if (dropdownContent.style.display === "block") {
 			dropdownContent.style.display = "none";
 		} else {
 			dropdownContent.style.display = "block";
 		}
 	});
 }