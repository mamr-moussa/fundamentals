require('vue');   //Front End Framework.
require('materialize-css'); //Front/JS/CSS Framework based on JS/CSS.
Vue.component('codearea', require('./components/codearea.vue'));
window.Vue = require('vue');      //Front End Framework.
window.App = new Vue({
	el : '#app' , 
	data : {

	}
})