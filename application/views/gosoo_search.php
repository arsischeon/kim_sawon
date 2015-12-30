

<div style="min-width:1080px">
	<object id="obj" data="/sources/search_gosoo.svg" type="image/svg+xml"></object>
	<object style="min-width:1080px" id="obj2" data="/sources/coming_down2.svg" type="image/svg+xml"></object>
</div>

<style>
@keyframes down {
    /*0% {top:-220px;
		opacity:0;}
    100% {top:0px;
		opacity:1;}*/
}
@keyframes up {
    /*0% {top:0px;
		opacity:1;}
		100% {top:-220px;
				opacity:0.0;
		}*/
}
.movingDown{
	position:absolute;
	animation-name: down;
	animation-duration: 0.4s;
	top:0px;
}
.movingUp{
	position:absolute;
	animation-name: up;
	animation-duration: 0.7s;
	top:-220px;
}

</style>

<script>
var obj=document.getElementById('obj');
var obj2=document.getElementById('obj2');
 obj2.style.display='none';

function change(anim)
    {
        // find our -webkit-keyframe rule


        // remove the existing 0% and 100% rules
        keyframes.deleteRule("0%");
        keyframes.deleteRule("100%");

        // create new 0% and 100% rules with random numbers
				if(anim=="up"){
        keyframes.insertRule("0% {"  + " }");
        keyframes.insertRule("100% { "  + " }");
			}else{ //down
				keyframes.insertRule("0% {"  + " }");
        keyframes.insertRule("100% { " +  " }");
			}
}
//down 부터
// var keyframes = findKeyframesRule(anim);
// keyframes.insertRule("0% { opacity:0; top:-"+ doc.querySelector('#previous_page_arrow').getBoundingClientRect().height +"px }");
// keyframes.insertRule("100% { opacity:1; top:0px }");

// search the CSSOM for a specific -webkit-keyframe rule
function findKeyframesRule(rule) {
    // gather all stylesheets into an array
    var ss = document.styleSheets;

    // loop through the stylesheets
    for (var i = 0; i < ss.length; ++i) {

        // loop through all the rules
        for (var j = 0; j < ss[i].cssRules.length; ++j) {
            // find the -webkit-keyframe rule whose name matches our passed over parameter and return that rule
            if ((ss[i].cssRules[j].type == window.CSSRule.KEYFRAMES_RULE) && ss[i].cssRules[j].name == rule) return [ss[i], ss[i].cssRules[j]];
        }
    }

    // rule not found
    return null;
}




 // console.log(doc.querySelector('#previous_page_arrow').getBoundingClientRect().bottom);
obj.addEventListener("load",function(){
	//마우스오버시 메뉴가 내려옴
	var doc=this.getSVGDocument();
	doc.querySelector('#previous_page_arrow').addEventListener("mouseover",function(){
		obj2.style.display='';
		obj2.classList.remove('movingUp');
		//down 부터
		var keyframes = findKeyframesRule("down");
		keyframes.insertRule("0% { opacity:0; top:-"+ doc.querySelector('#background').getBoundingClientRect().height +"px }");
		keyframes.insertRule("100% { opacity:1; top:0px }");
		obj2.classList.add('movingDown');

	});
	obj2.addEventListener("mouseout",function(){
		obj2.classList.remove('movingDown');
		obj2.classList.add('movingUp');
	});

});
obj2.addEventListener("load",function(){
	var doc=this.getSVGDocument();

//내려온 메뉴에 링크를 붙임.
//coming_down.svg 에 클릭 이벤트 넣음.
doc.querySelector('#menu1').addEventListener("click",function(){
	location.href="/menu/description";
});
doc.querySelector('#menu2').addEventListener("click",function(){
	location.href="/menu/howto";
});
doc.querySelector('#menu3').addEventListener("click",function(){
	location.href="/menu/cs";
});
doc.querySelector('#logo').addEventListener("click",function(){
	location.href="/";
});


});

</script>
