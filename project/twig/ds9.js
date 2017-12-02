// function ham() {
// 	// console.log('begin');
// 	let menus = document.querySelector('.menus');
// 	menus.classList.toggle('open');
// 	// console.log('end');
// }

$('.hamburger').click(
	function() {
		$('.hamburger').animate({ color: 'gold' });
	},
	function() {
		$('.menus').toggleClass('open', 100);
	}
);

$('.promo-text').hover(
	function() {
		if (!$(this).hasClass('animated')) {
			$(this).dequeue().stop().animate({ width: '100%' });
		}
	},
	function() {
		$(this).addClass('animated').animate({ width: '60%' }, 'normal', 'linear', function() {
			$(this).removeClass('animated').dequeue();
		});
	}
);
$('.checkOrder').click(function() {
	// var model = $('.model').val();
	// var name = $('.name').val();
	// var address = $('.address').val();
	// var comment = $('.comment').val();
	$.ajax({
		type: 'POST',
		url: 'login_check.php',
		// data: {
		// 	name: name,
		// 	model: model,
		// 	address: address,
		// 	comment: comment,
		// },
		// success: function (response) {
		// 	let responseObj = JSON.parse(response);			
		// 	$('.history').append("<p>【" + responseObj.model + '】' + responseObj.name + "</p>");
		success: function (output){
			$('.history').html(output);
		}
	});
});
