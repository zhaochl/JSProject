function validate(f){
	if(!(/^/w{5,15}$/.test(f.userId.value))){
		alert("用户id必须为5-15位！");
		f.userId.focus();
		return false;
	}
	if(!(/^/w{5,15}$/.test(f.password.value))){
		alert("密码必须为5-15位！");
		f.password.focus();
		return false;
	}
	return true;
}