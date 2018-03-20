require('vue');   //Front End Framework.
require('materialize-css'); //Front/JS/CSS Framework based on JS/CSS.
window.Vue = require('vue');      //Front End Framework.
Vue.component('codearea', require('./components/codearea.vue'));
window.App = new Vue({
	el : '#app' , 
	data : {

	}
})