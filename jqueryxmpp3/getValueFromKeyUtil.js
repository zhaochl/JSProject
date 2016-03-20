var jsonUtil = (function(){
	var getValFromKey = function(key,stringData){
		// var stringData = stringData.replace("\t","\\t");
		// if(typeof JSON.parse(stringData) == "object") {
		var jsonData = JSON.parse(stringData);
		var kVal = jsonData[key]||"";
		$("#ival").html(kVal);
		if(typeof kVal == 'object'){
			$("#ival").html("object");
		}
		if(kVal == ""){
			for(item in jsonData){
				if(typeof jsonData[item] == 'object'){
					for(ii in jsonData[item]){
						if(ii == key){
							$("#ival").html(jsonData[item][ii]);
							return jsonData[item][ii];
						}
					}	
				}
			}
		}
		return kVal;
		// } else {
		// 	$("#ival").html("string is not jsonString");
		// 	return;
		// }
		// alert(jsonData.uid);
		
	};
	var getDataJSONObject = function(stringData){
		// if(typeof JSON.parse(stringData) == "object") {
		var jsonData = JSON.parse(stringData);
		// var stringKey = '"'+key+'"';
		return jsonData;
		// } else {
		// 	$("#ival").html("string is not jsonString");
		// 	return;
		// }
	};
	return {"getValFromKey":getValFromKey,"getDataJSONObject":getDataJSONObject};
})();