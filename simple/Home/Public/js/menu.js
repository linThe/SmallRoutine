$(document).ready(function(){
    $(window).scroll(function(){  //滚动条改变时
        var top = $(document).scrollTop();          //定义变量，获取滚动条的高度
        var menu = $("#menu");                      //定义变量，抓取#menu
        var items = $("#menu_Content").find(".item");    //定义变量，在menu_content里查找.item，返回变量数组把
        

        var curId = "";                             //定义变量，当前所在的楼层item #id 

        items.each(function(){  //遍历吗？
            var m = $(this);                        //定义变量，获取当前item对象
            var itemsTop = m.offset().top;        //获取当前类的top偏移量
            if(top > itemsTop-100){			//只要item(通过类名获得)偏移量超过100 ，就获得这个item(即当前的item)的id
            	//拿到id
                curId ="'"+"#" + m.attr("id")+"'";   //正确的选择器表达式:[href="属性值"] ;双引号很重要
            }else{
                return false;
            }
        });
		
        //给相应的楼层设置cur,取消其他楼层的cur
        var curLink = menu.find(".cur");  //找到当前楼层
        
        if( curId && curLink.attr("href") != curId ){  //if curId 不是false 就执行&& 的另一边，如果item的href属性值  不等于 当前item的id 就退出
            curLink.removeClass("cur");
            menu.find( "[href=" + curId + "]" ).addClass("cur");
        }else{
        	$("#item1").val("属性不等于") ;
        }
        // console.log(top);
    });
});
