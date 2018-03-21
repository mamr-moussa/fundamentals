window.Maps = {
	dataTypes : {
		Float : {
			regex : /Float/ , 
			value : /[0-9][0-9]*\.[0-9][0-9]*/
		},
		Int : {
			regex : /Int/ , 
			value : /[0-9][0-9]*/
		} ,
		String : {
			regex : /String/ , 
			value : /(\'\w*\')|(\"\w*\")/
		}

	} , 
	reservedWords : [
	 'for' , 
	 'if' , 
	 'Int' , 
	 'Float' , 
	 'String' ,
	],

	tokens : {
		start : '\ *\!all features installed\/System Start;' , 
		id : '[A-Za-z][A-Za-z$]*' , 
		number : '[0-9][0-9]*' , 
		symbols : ' [^a-zA-Z0-9!#]+' ,
		reserved : '(if|for|Int|Float|String)' , 
		dataType : '(if|for|Int|Float|String)' , 
		comment : '%.*' , 
		space : '\\ *',
		string : '(\'\\w\')|(\"\\w\")' , 

	} , 

}
window.Statments = {
	common : {
		declare : Maps.tokens.id+ Maps.tokens.space+'='+Maps.tokens.space+Maps.tokens.number
	}
}