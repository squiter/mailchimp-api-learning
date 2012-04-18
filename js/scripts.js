function listLists(obj){
	var request_url = base_url + "/scripts/ajax/list_lists.php";
	var send_data = "";
	$.ajax({
		type: 'POST',
		url: request_url,
		data: send_data,
	    success: function(data){
			$(obj).next().html(data);
		}
	});
}

function showUsers(obj, id){
	var request_url = base_url + "/scripts/ajax/show_users.php";
	var send_data = "id="+id;
	$.ajax({
		type: 'POST',
		url: request_url,
		data: send_data,
	    success: function(data){
			$(obj).next().html(data);
			$(obj).next().slideDown();
		}
	});
}