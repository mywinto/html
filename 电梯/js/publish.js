function cellallClick(obj){
	
	var isSelect=obj.checked;
	if(isSelect){
	$(".cell-select").attr("checked",true);
}else{
	$(".cell-select").attr("checked",false);
}

	
}
$(function(){
	$(".statisticsul ul").empty();
	
	for(var i=1;i<8;i++){
		$(".statisticsul ul").append("<li style='list'>"+i+"</li>")
	}
	var seleli=$(".statisticsul ul li:first-child");
	$(".statisticsul ul li").eq(0).addClass("cellClass");
	
	$(".statisticsul ul li").click(function(){
		if(seleli){
		seleli.removeClass("cellClass");
		}
		$(this).toggleClass("cellClass");
		seleli=$(this);
	});
	$(".homecell").click(function(){
		seleli.removeClass("cellClass");
		$(".statisticsul ul li").eq(0).addClass("cellClass");
seleli=$(".statisticsul ul li").eq(0);
	})
	$(".lastcell").click(function(){
	
		var i=$(".statisticsul ul li").index(seleli);
		if(i>0){
			seleli.removeClass("cellClass");
			$(".statisticsul ul li").eq(i-1).addClass("cellClass");
			seleli=$(".statisticsul ul li").eq(i-1);
		}else{
			
		}
		
		
	})
	
	$(".nextclass").click(function(){
	
		var i=$(".statisticsul ul li").index(seleli);
		if(i<7){
			seleli.removeClass("cellClass");
			$(".statisticsul ul li").eq(i+1).addClass("cellClass");
			seleli=$(".statisticsul ul li").eq(i+1);
		}else{
			
		}
	})
//	弹窗一
$(".searchLi").click(function(){
	
	$(".alertSearch").addClass('searchClass')
})
$(".alertSearch").click(function(){
	
//		$(".alertSearch").removeClass('searchClass')

})
//弹窗二
$(".addLi").click(function(){
	$(".alertAdd").addClass('searchClass')
})
})
function alertClose(){
	$(".alertSearch").removeClass('searchClass');
}
