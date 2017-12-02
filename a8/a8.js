let toggled = false;
$('nav').click(() => {
  // $(this).toggleClass('rotater');
  rotate(10);
  toggled = !toggled;
});
// const num = $(this).querySelectorAll('nav').length;

function rotate(degree) {
  for (let i = 5; i > 1; i -= 1) {
    $(`.item${i}`).animate({
      deg: toggled ? 0 : degree * (i - 1),
    }, {
      step(now, fx) {
        $(this).css('transform', `rotate(${now}deg)`);
      },
    });
  }
}
