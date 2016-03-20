var OakJs = {
	P:{},
	init:function(){
		this.P = persistence;
		persistence.store.websql.config(this.P, 'ptest', 'A database description', 5 * 1024 * 1024);
		if(localStorage.getItem('install_lock')!=1){
			persistence.schemaSync();
			localStorage.setItem('install_lock',1);
		}
	},
	reset:function(){
		persistence.store.websql.config(persistence, 'ptest', 'A database description', 5 * 1024 * 1024);
		persistence.reset(function(){
			console.log('reset success');
		});
	},
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
		this.P.add(obj); 
		this.P.flush();
	},
	t:function (info){
		console.log(info);
	},
	savep:function(pk,pv,Table,fk,fv){
		var _t = this;
		_t.t('pk:'+pk+',pv:'+pv);
		Table.all().list(function(list){
			console.log(list);
			console.log('t-updating');
			list.forEach(function(t){
				console.log(t);
				console.log('t.pk:'+t[pk]+',t.pv:'+pv);
				if(t[pk]==pv){
					console.log('pk=pv');				
//					t.fk=fv;//error
					t[fk]=fv;
				}
				_t.P.flush(function(){
					//alert('flushing');
				});
			});
		});
	},
	save :function (obj) {
		this.P.save(obj); 
		this.P.flush();
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