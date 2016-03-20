var xmppUtil = (function(){
	var server_name = "@iz28sp2t8dgz";
	var server_dom = "@cache.caifuqiao.cn";
	var url ="http://cache.caifuqiao.cn:7070/http-bind/";
	var initLenRev = 0;
	var initLenSend = 0;
	var receive = function(fromUserId, toUserId, len, msg){
		var fromUserId = fromUserId + server_name;
		var password = "zcl";
		$.xmpp.connect({resource:"chat",url:url, jid: fromUserId, password: password,
			onConnect: function(){
				$("#loginfo").html("connect success");
				$.xmpp.setPresence(null);
				$.xmpp.resource = "chat";
				// $.xmpp.onMessage({from: "zzl@cache.caifuqiao.cn/chat", body: msg});	
			},onMessage: function(message){
				if(initLenRev < len){
					var jid = message.from.split("/");
					var id = MD5.hexdigest(message.from);
					$("#mesfrom").html(message.from);
					$("#mesbody").append(message.body+'<br/>');
					initLenRev += 1;
				}
				if(initLenRev == len){
					$.xmpp.disconnect();	
				}		
			},onDisconnect: function(){
				$("#loginfo").html("disconnect");
			},onError:function(error){
				alert(error.error);
			}
		});
		
	};
	var send = function(fromUserId, toUserId, len, msg){
		var fromUserId = fromUserId + server_name;
		var password = "zcl";
		$.xmpp.connect({resource:"chat",url:url, jid: fromUserId, password: password,
			onConnect: function(){
				$("#loginfo").html("connect success");
				for(;initLenSend<len;initLenSend++){
					$.xmpp.sendMessage({to:toUserId+"@cache.caifuqiao.cn", body: msg},null,null);
					$("#send span").text(initLenSend+1);
					if(initLenSend == len){
						$.xmpp.disconnect();
					}
					// alert("wait...");
				}
									
		
			},onDisconnect: function(){
				$("#loginfo").html("disconnect");
			},onError:function(error){
				alert(error.error);
			}
		});
	};

	return {"send":send,"receive":receive};
})();