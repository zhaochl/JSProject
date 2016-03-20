/*require(["string", "jquery-1.11.1.min"], function (str) {
    $("#Button1").bind("click", function () {
        var $a = $("#Text1").val();
        var $s = str.OrE($a);
        $("#tip").show().html("您输入的是：" + $s);
    });
});*/
//<script src="js/require.js" defer async="true" type="text/javascript"  data-main="js/listTagView"></script>
require(["TagModelUtil"], function (TagModel) {
	//alert('test');
	
	//alert(JSON.stringify(TagModel));//{}
	//adding event
	//alert(1);
	//TagModel.wait();
	var tag_id =10;
	var tagListX  = TagModel.wait(tag_id,function(tagList){
		//alert(3);
		//alert(JSON.stringify(tagList));
		for(var i=0;i<tagList.length;i++){
			var tag = tagList[i];
			//alert(tag.tag_name);
			var tagName = tag.tag_name;
			var tagStr="";
			TagModel.ctwait(tagName,function(rctagList){
				for(var i=0;i<rctagList.length;i++){
					var rctag = rctagList[i];
					//alert(JSON.stringify(rctag));
					
				}
				
			});
			tagStr="<div id=\"tagNum"+rctag.tag_id+"\" class=\"f-l pdh-xs pdv-11 mgr-m mgt-m bd-orange bdra-12 clearfix\">";
        	tagStr+="<div class=\"listtagl dpin f-l fts-30 lnh1 ftc-gray3 newtag\">"+tagName+"</div>";											
			tagStr+="<div class=\"dpin f-l fts-30 lnh1 ftf-en ftc-red1\">("+rctag+")</div>";
			//$("#tagNum"+rs.tag_id).append(tagStrNum);
			tagStr+="</div>";	
			$('#content').append(tagStr);
		}
	});
	//alert(2);
	//alert(JSON.stringify(tagListX));//undefined
	//alert(1);//1
	
	$(document).ready(function(){
		//lockPPE();
		//setTimeout(unlockPPE,500);
		
		/*var a = data.OddOrEven(12);
		var result = data.result;
		alert(a);
		$('#callResult').html(a+result);*/
	});

});