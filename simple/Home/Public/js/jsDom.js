$(document).ready(function() {

	//一共需要创建48个li条目

	var itemCount = 48;

	var dataArr = new Array(itemCount * 10);

	var obj ;

	$.ajax({

		type: "GET",

		url: "__ACTION__/itemCount/" + dataArr.length,

		dataType: "json",

		success: function(data) {

			addDom(data);

			obj = data ;

		},

		error: function(data) {

			alert("请求数据失败x");

		}

	});



	//	包装一下,觉得不好看

	function addDom(data) {

		creItem("english", data);

		creItem("program", data);

		creItem("daily", data);

	}

	//	创建三大面板的子节点ul and li 

	function creItem(name, data) {

		var ulCount = 4;

		var liCount = 4;

		var dataCount = 0;



		for(var q = 0; q < 4; q++) {

			var ulC = q + 1;

			$("#" + name + "-pane-" + ulC).append(

				"<ul class='text-center  my-cleanstyle-ul tm-margin-b-30'></ul>"

			);

			for(var i = 0; i < 4; i++) { 

				$("#" + name + "-pane-" + ulC + ">ul").append(

					"<li class='panel_li_mouseover'>" +

					"<a class='my-font-color-black' href='#'>" +

					"新闻标题:"+data[dataCount*parseInt(Math.random()*10)].title +"————"+

					"编者:"+data[dataCount*parseInt(Math.random()*10)].author+"————"+

					"时间:"+data[dataCount*parseInt(Math.random()*10)].newsTime+

					"</li>"

				);

				dataCount++;

			}

		}

	}

	



	

});



//	

//			$("#english-pane-1").append(

//		"<li>"+

//			"<a class='my-font-color-black'>"+data[1].id+"</a>"+

//		"</li>") ;

//		

/*待测

 * var a1 = document.createElement("li") ;

			var ac1 = document.createElement("a") ;

			var acc1 = document.createTextNode("我是新建的") ;

			ac1.appendChild(acc1) ;

			a1.appendChild(ac1);

			$("#english-pane-1").appendChild(a1);

			$("#english-pane-2").appendChild(al.appendChild(ac1.appendChild(acc1))) ;

			

			

			

			//li的鼠标悬停事件：显示有关信息   失败

	$(".panel_li_mouseover").mouseenter(function() {

		$(".panel_li_mouseover").prepend(

			"<div id='temp'>有关信息</div>"

		);

	});

	//li的鼠标移出事件：关闭有关信息

	$(".panel_li_mouseover").mouseleave(function() {

		$("#temp").remove();

	});

	

 */

//