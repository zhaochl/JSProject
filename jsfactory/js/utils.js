var Utils = {
	fields:{},
	uuid: function () {
		/*jshint bitwise:false */
		var i, random;
		var uuid = '';

		for (i = 0; i < 32; i++) {
			random = Math.random() * 16 | 0;
			if (i === 8 || i === 12 || i === 16 || i === 20) {
				uuid += '-';
			}
			uuid += (i === 12 ? 4 : (i === 16 ? (random & 3 | 8) : random)).toString(16);
		}

		return uuid;
	},
	pluralize: function (count, word) {
		return count === 1 ? word : word + 's';
	},
	store: function (namespace, data) {
		if (arguments.length > 1) {
			return localStorage.setItem(namespace, JSON.stringify(data));
		} else {
			var store = localStorage.getItem(namespace);
			if(typeof(store)=="object"){
				return (store && JSON.parse(store)) || [];
			} else{
				localStorage.setItem(namespace, '');
				return [];
			}
		}
	},
	//v2
	
	connect:function(db,desc,size){
		if (window.openDatabase) {
			persistence.store.websql.config(persistence, db, desc, size);
		} else {
			persistence.store.memory.config(persistence);
		}
	},
	create:function (table,fields) {
		//if(typeof(fields)=='object'){
			persistence.define(table, fields);
  			persistence.schemaSync();
		//}else{
			//alert('null table');
		//}
	},
	D :function (table) {
		return persistence.define(table,this.fields);
	},
	add: function (obj){
		persistence.add(obj); 
		persistence.flush();
	},
	save :function (obj) {
		persistence.save(obj); 
		persistence.flush();
	},
	remove:function (obj){
		//User.load(id, function(user){ 
			persistence.remove(obj); 
			persistence.flush();
		//}); 
	},
	findByid:function(id){

	}
	
};