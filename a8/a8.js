$('nav').click(() => {
  $(this).toggleClass('rotater');
  console.log('rotater');
  rotate(10);
});

function rotate(degree) {
  $('p').animate({
    deg: degree,
  }, {
    step(now, fx) {
      console.log('rotate');
      $(this).css('transform', `rotate(${now}}deg)`);
    },
  });
}

