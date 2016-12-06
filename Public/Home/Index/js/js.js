// JavaScript Document
function txtOnfocus(txt){
	if(txt.value == '输入关键词进行搜索'){
		txt.value = '';
		txt.style.color = '#FFF';
	}
}
function txtOnblur(txt){
	if(txt.value == ''){
		txt.value = '输入关键词进行搜索';
		txt.style.color = '#CCC';
	}
}
function tab(pid){
	var tabs = ["tab1","tab2","tab3","tab4"];
	for(var i=0;i<4;i++){
		if(tabs[i] == pid){
			document.getElementById(tabs[i]).style.display = "block";
		}else{
			document.getElementById(tabs[i]).style.display = "none";
		}
	}
}