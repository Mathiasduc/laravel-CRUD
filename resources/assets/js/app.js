const app = {

	init: function(){
		console.log("init");

	},

	listeners: function(){
		$('.')
	}
}
if(document.readyState != 'loading'){
	app.init();
} else {
	document.addEventListener('DOMContentLoaded', app.init);
}