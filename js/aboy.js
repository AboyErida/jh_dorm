$(document).ready(function(){

$("#submit").on('click',function(){
	var form = $("#registerform").serialize();
	console.log(form);
		alert("ADDED");
		$.post('action.php', form, function(data){
			var str = data;
	console.log(data);
		alert(str);
		});
return false;
})

})