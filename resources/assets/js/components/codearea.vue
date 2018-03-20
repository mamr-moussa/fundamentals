<template>
<div>
	<!--level one. ========== -->
<div class = "row">
	<div class="ui icon buttons">
		<button class="ui button">
		<i class="play icon green-text text_ms"></i>
		<span class = "tinny_left_padding">Run</span>
		</button>
		<button class="ui button">
		<i class="stop icon red-text text_ms"></i>
		<span class = "tinny_left_padding">Stop</span>
		</button>
		<button class="ui button">
		<i class="knocks-lab4 purple-text text-darken-3	text_ms"></i>
		<span class = "tinny_left_padding">Analysis</span>
		</button>
		<button class="ui button" @click = "toggleWatchingMode()">
		<i class="text_ms" :class = "[{'knocks-eye-blocked orange-text text-darken-3' : !watchingMode},{'knocks-eye green-text' : watchingMode}]"></i>
		<span class = "tinny_left_padding" v-if = "!watchingMode">Watch</span>
		<span class = "tinny_left_padding" v-if = "watchingMode">Watching ..</span>
		</button>
	</div>
	
</div>
<!--level two ========== -->
<div class="row">
	      <div class = "col  border_radius_5 grey lighten-2" v-if = "code.length > 0" style="padding-bottom : 1rem">
	      	<br/>
	      	<div v-for ="line in linesNum" class = "blue-text center">
	      	<span>{{line}}</span><br/>
	      </div>
	      </div>
	       <div class="input-field col s10">
          <textarea id="textarea1" class="materialize-textarea" v-model = "code" ></textarea>
          <label for="textarea1">
          	<span class = "knocks-code"></span>
          	<span>Code</span>
          </label>
        </div>
</div>
</div>
</template>

<script>
export default {

  name: 'codearea',

  data () {
    return {
    	watchingMode : false ,
    	code : '' , 
    	dataTypes : window.Maps.dataTypes, 

    }
  },
  computed : {
  	linesNum(){
  		return this.lines.length;
  	},
  	lines(){
  		return this.code.split(/\r*\n/);
  	}
  },
  methods : {
  	toggleWatchingMode(){
  		this.watchingMode = !this.watchingMode;
  	}
  }
}
</script>

<style lang="css" scoped>
</style>