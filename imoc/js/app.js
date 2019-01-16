$(document).ready(function () {
setTimeout(function () {
	window.location.href = 'Agenda.html';
}, 5000);
$("#typed").typed({
	strings: ["😀👍", "Bienvenido a IMOC"],
	typeSpeed: 30,
	backDelay: 500,
	loop: false,
	loopCount: false,
	callback: function () { foo(); }
});
function foo() { console.log("Callback"); }
});


//este script es de nuestro preloader