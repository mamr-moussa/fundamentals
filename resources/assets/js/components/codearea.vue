<template>
<div>
	<!--level one. ========== -->
<div class = "row">
	<div class="ui icon buttons">
		<button class="ui button" @click = "runMode = true;" :disabled = "runMode">
		<i class="play icon green-text text_ms"></i>
		<span class = "tinny_left_padding">Run</span>
		</button>
		<button class="ui button" @click = "runMode = false;" :disabled = "!runMode">
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
          <textarea id="textarea1" class="materialize-textarea" v-model = "code" :disabled = "runMode" ></textarea>
          <label for="textarea1">
          	<span class = "knocks-code"></span>
          	<span>Code</span>
          </label>
        </div>
</div>
<!--level two ========== -->
<div class = "row" v-if = "watchingMode || runMode">
	<p class = "red-text" v-if = "!hasStart">You didn't start your code correctly</p>
	<p v-for = "err in declarationErrors" class = "red-text">{{err}}</p>
	<p class = "green-text" v-if ="hasNoErrors">Your Program Was Succesfully Built!</p>
	<table v-if = "!hasNoVariables && hasNoErrors">
		<tr v-for = "v in cashVariables">
			<td>{{v.name}}</td>
			<td>{{v.type}}</td>
			<td>{{v.value}}</td>
		</tr>
	</table>
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
    	tokens : window.Maps.tokens , 
    	cashVariables : {} , 
    	declarationErrors : [] , 

    	runMode : false ,

    }
  },
  computed : {
  	linesNum(){
  		return this.lines.length;
  	},
  	lines(){
  		return this.code.split(/\r*\n/);
  	},
  	hasStart(){
  		if(this.code.match(this.tokens.start) == null) return false
  		return true;
  	},
  	hasNoErrors(){
  		if(!this.hasStart) return false;
  		if(this.declarationErrors.length > 0) return false;

  		return true;
  	},
  	hasNoVariables(){
  		return Object.keys(this.cashVariables).length === 0 && this.cashVariables.constructor === Object
  	},
  	semiColoned(){
        this.cashVariables = {};	
        this.declarationErrors = [];
        let noBreak = this.code.split(/\n/).join('');
  		let semis =  noBreak.split(';') 
  		let  i ;
  		for(i= 0; i < semis.length; i++){
  			this.isADeclaration(semis[i])
  		}

  		return semis
  	}
  },
  methods : {
  	toggleWatchingMode(){
  		this.watchingMode = !this.watchingMode;
  	},
  	isADeclaration(stm){
  		let statment = stm.split(' ')

  		if(statment.indexOf('=') == -1 || statment.length < 4) return false ;
  		let i , type ;
  		if(this.dataTypes[statment[0]] !== undefined){
  			if(statment[1].match(this.tokens.id) && statment[2] == '='){
  				if(statment[3].match(this.dataTypes[statment[0]].value)){	
  				 if(this.cashVariables[statment[1]] !== undefined)
  				 	this.declarationErrors.push('Dublication in declaring variable : '+statment[1])
  				 else this.cashVariables[statment[1]] = { type : statment[0] , value : statment[3] , name : statment[1] }
  				}else this.declarationErrors.push('Invalid value was assigned to variable : '+statment[1])
  			}
  		}else{

  		}
  	}
  }
}
</script>

<style lang="css" scoped>
</style>