$.post("{:U('User/check')}",{username:username},function(data){
	$('#checknameResult').html(data.info);
});