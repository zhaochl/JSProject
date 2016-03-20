	
    var App = {
    	init:function (){

    			this.userdatadb = Utils.connect('oakdb','oakdb1.0',5 * 1024 * 1024);
    			//debugger;
    			Utils.create('cache',cacheModel);
    			//alert('create');
    			//Utils.fields = {'name':"TEXT",sex:"TEXT",age:"TEXT"};
    			/* var Student = Utils.D('student');

    			var mark = new Student({
                        	"id":Utils.uuid(),
                            "name": "张三",
                            "sex": "0",
                            "age": 18
                        }); 

				this.cacheElements();
				this.bindEvents();
				this.render(); */
    			//this.data = {'a':'a','b':'b'};
    		},
    	getdata:function (){
    			//console.log(this.data);
    			//alert(this.data);
    		},
    	cacheElements: function () {
			this.userVolistTemplate = Handlebars.compile($('#userVolistTemplate').html());
			this.$userlistView = $('#userlistView');
			//this.$dataList = this.$dataTable.find('#dataList');

			/*
			this.todoTemplate = Handlebars.compile($('#todo-template').html());
			this.footerTemplate = Handlebars.compile($('#footer-template').html());
			this.$todoApp = $('#todoapp');
			this.$header = this.$todoApp.find('#header');
			this.$main = this.$todoApp.find('#main');
			this.$footer = this.$todoApp.find('#footer');
			this.$newTodo = this.$header.find('#new-todo');
			this.$toggleAll = this.$main.find('#toggle-all');
			this.$todoList = this.$main.find('#todo-list');
			this.$count = this.$footer.find('#todo-count');
			this.$clearBtn = this.$footer.find('#clear-completed');
			*/
		},
		bindEvents: function(){
			/*
			var list = this.$todoList;
			this.$newTodo.on('keyup', this.create);
			this.$toggleAll.on('change', this.toggleAll);
			this.$footer.on('click', '#clear-completed', this.destroyCompleted);
			list.on('change', '.toggle', this.toggle);
			list.on('dblclick', 'label', this.edit);
			list.on('keypress', '.edit', this.blurOnEnter);
			list.on('blur', '.edit', this.update);
			list.on('click', '.destroy', this.destroy);
			*/
			$('#addBtn').on('click',this.add);
			
			//$('#editResultBtn').on('click',this.editResult);//unuseful
			//alert('bind');

			var userlistView = this.$userlistView;
			userlistView.on('click','.edit',this.edit);
			userlistView.on('click','#editResultBtn',this.editResult);//usefull
			userlistView.on('click','.del',this.del);//usefull

		},
		render: function () {

			//debugger;
			this.$userlistView.html(this.userVolistTemplate(this.userdata));
			Utils.store('userdata', this.userdata);
			
			//this.userVolistTemplate = Handlebars.compile($('#userVolistTemplate').html());
			//var myTemplate = Handlebars.compile($("#table-template").html());
        
        	//$('#tableList').html(myTemplate(data));

			/*
			this.$todoList.html(this.todoTemplate(this.todos));
			this.$main.toggle(!!this.todos.length);
			this.$toggleAll.prop('checked', !this.activeTodoCount());
			this.renderFooter();
			Utils.store('todos-jquery', this.todos);
			*/
		},		
		create: function (e) {
			var $input = $(this);
			var val = $.trim($input.val());

			if (e.which !== App.ENTER_KEY || !val) {
				return;
			}

			App.todos.push({
				id: Utils.uuid(),
				title: val,
				completed: false
			});

			$input.val('');
			App.render();
		},
		add: function(){
			//alert('add');
			//debugger;
			var $new_name = $('#new_name').val();
			var $new_age = $('#new_age').val();
			var $new_sex = $('#new_sex').val();
			var $new_id = Utils.uuid();
			App.userdata.push({
				id:$new_id,
				name:$new_name,
				age:$new_age,
				sex:$new_sex
			});
			$('#new_name').val('');
			$('#new_age').val('');
			$('#new_sex').val('');
			//v2-start
			var Student = Utils.D('student');
			var mark = new Student({
                    	"id":$new_id,
                        "name": $new_name,
                        "sex": $new_sex,
                        "age": $new_age
                    }); 
			//persistence.add(mark); 
			//persistence.flush();
			Utils.add(mark);
			//v2-end
			App.render();
		},
		edit:function(e){
			var _this = this;
			//var id = _this.
			console.log(this);
			//console.log(id);
			var aid = $(this).closest('a').attr('rel');
			var user = App.findByid(aid);
			console.log(user);

			//var user2 = Utils.store('7f53be06-b1f0-4bdf-9c43-f9011c1fedb2');
			//console.log(user2);

			//alert('edit '+aid);
			var str ='<input type="hidden" name="edit_id" id="edit_id" value="'+user.id+'" style="width:30px;"/>';
				str+= '<input type="text" name="new_name" id="edit_name" value="'+user.name+'" style="width:30px;"/>';
    			str+='<input type="text" name="new_sex" id="edit_sex" value="'+user.sex+'" style="width:30px;"/>';
    			str+='<input type="text" name="new_age" id="edit_age" value="'+user.age+'" style="width:30px;"/>';
    			str+='<input type="button" value="edit" id="editResultBtn"/>';
    		var trID = $(this).closest('tr');
    		//trID.html();
    		trID.html(str);
		},
		editResult:function(){
			//alert('edit-r');
			var $new_name = $('#edit_name').val();
			var $new_age = $('#edit_age').val();
			var $new_sex = $('#edit_sex').val();
			var $id = $('#edit_id').val();

			$.each(App.userdata, function (i, user) {
				console.log(i+':'+user);
				//debugger;
				if(user.id == $id){
					user.name = $new_name;
					user.age = $new_age;
					user.sex = $new_sex;
					//userResult =  user;
					return false;//return user unuseful go out circle,return user equals return true then equal will go on
				}
			});
			/*
var user = new User({firstname: "Joe", lastname: "Doo"});

// setter   
$(user).data('firstname', "Mike") 

// getter
console.log($(user).data('firstname')); // => Mike
			*/
			//v2-start
			var Student = Utils.D('student');
			 //var Stu = persistence.define('student',{'name':"TEXT",'sex':"TEXT",'age':"TEXT"});
			 //persistence.schemaSync();

			/*
			//fail
			Student.load($id, function(user){ 
				//persistence.remove(obj); 
				//persistence.flush();
				//Utils.remove(user);
				console.log(user);
				$(user).data('name', $new_name);
				$(user).data('age', $new_age);
				$(user).data('sex', $new_sex);
				console.log(user);
				Student.save(user);
			});*/ 
			
			//fail
			/*
			var mark = new Student({
               	"id":$id,
                "name": $new_name,
                "sex": $new_sex,
                "age": $new_age
            });
			*/
            //Utils.save(mark);//fail
            //persistence.save(mark,$id);//fail
            //persistence.flush();//fail
            
            /*
            Student.load($id, function(user){ 
				//persistence.remove(obj); 
				//persistence.flush();
				Utils.remove(user);

				
			});
			var mark = new Student({
                "id": $id,
                "name": $new_name,
                "sex": $new_sex,
                "age": $new_age
            }); 
            Utils.add(mark);
            alert('edit-websql-undone');
			*/
			//success
			
			Student.all().filter('id','=',$id).one(function(item){
				//alert(item);
				console.log(item);
				//debugger;
				item.name = $new_name;
				item.age = $new_age;
				item.sex = $new_sex;
				persistence.flush();
			});
			
			//v2-end
			App.render();
		},
		del:function(){
			var aid = $(this).closest('a').attr('rel');
			alert('del:'+aid);
			if(confirm('Are you sure to delete?')){
				$.each(App.userdata, function (i, user) {
					console.log(i+':'+user);
					//debugger;
					if(user.id == aid){
						App.userdata.splice($.inArray(user,App.userdata),1);
						return false;//return user unuseful
					}
				});
			}
			//v2-start
			var Student = Utils.D('student');
			Student.load(aid, function(user){ 
				//persistence.remove(obj); 
				//persistence.flush();
				Utils.remove(user);
			}); 
			//v2-end
			App.render();
		},
		findByid:function(id){
			var userResult = {};
			$.each(App.userdata, function (i, user) {
				console.log(i+':'+user);
				//debugger;
				if(user.id == id){
					userResult =  user;
					return false;//return user unuseful
				}
			});
			//Utils.store('userdata')[id];
			return userResult;
		},
		findAll:function(){

		}

    };