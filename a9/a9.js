var responseObj;
$('.send').click(function () {
	//send message to php, save message in sql
	var username = $('.username').val();
	var message = $('.message').val();
	if (message == '' || username == '') {
		alert('Type some text please.');
		return false;
	}
	$.ajax({
		type: 'POST',
		url: 'send.php',//save input to database
		data: {
			username: username,
			message: message
		},
		success: function (response, status, xhr) {
			update(); //print the last message in database
			// latestSentTime = responseObj.time;
		}
	});
});

function update() {
	//print the last message in database
	var username = $('.username').val();
	var message = $('.message').val();
	$.ajax({
		type: 'POST',
		url: 'show.php',
		data:{
			username: username,
			message: message
		},
		success: function (response, status, xhr) {
			responseObj = JSON.parse(response);			
			message = '';
			// $('.history').append("<p>【" + responseObj.time + '】' + responseObj.username + ': ' + responseObj.message + "</p>");

			// setInterval(auto, 1000);
		}
	});
}

setInterval(function(){
	$('.history').load('update.php');
}, 1000);

// function auto() {
// 	//print the last message in database
// 	let responseObj = JSON.parse(response);			
// 	$('.history').append("<p>【" + responseObj.time + '】' + responseObj.username + ': ' + responseObj.message + "</p>");
// }
