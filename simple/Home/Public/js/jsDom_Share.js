$(document).ready(function(){

	/*****share****/

	var listCount = 7 ;

	for (var i=0;i<listCount;i++) {

		$("#alist").append(

			'<a href="#" class="list-group-item list-group-item-action tm-margin-t-10-important" >'+

				i+

			'</a>'	

		);

	}

});