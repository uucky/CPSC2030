function ham() {
	// console.log('begin');
	let menus = document.querySelector('.menus');
	menus.classList.toggle('open');
	// console.log('end');
}
$('.menu').click (function(){
	$(this).toggleClass('open');
  });
  

// $(document).ready(function () {
//     /* handling form validation */
//     $("#login-form").validate({
//         rules: {
//             password: {
//                 required: true,
//             },
//             username: {
//                 required: true,
//                 email: true
//             },
//         },
//         messages: {
//             password: {
//                 required: "Please enter your password"
//             },
//             username: "Please enter your email address",
//         },
//         submitHandler: submitForm
//     });
// }

// // function submitForm() {
//     var data = $('.login-box').serialize();
//     $.ajax({
//         type: 'POST',
//         url : 'response.php?action=login',
//         data: data,
//         beforeSend: function(){
//             $('#error').fadeOut();
//             $('#login-submit').html('sending ...');
//         },
//         success: function(response){
//             if($.trim(response) === "1"){
//                 console.log('sucess??');
//                 $("#login-submit").html('Signing in ...');
//                 setTimeout('window.location.href = "logged.php";' ,2000);
//             } else {
//                 $('#error').fadeIn(1000, function(){
//                     $('#error').html(response).show();
//                 })
//             }
//         }
//     });
//     return false;
// }
