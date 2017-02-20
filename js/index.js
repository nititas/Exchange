/*setInterval(function() {
  $(".login-form").velocity("callout.shake");
},62000);*/

dynamics.animate(document.querySelector('.login-form'), {
  translateY: 200
}, {
  type: dynamics.spring,
  duration: 1388
})

dynamics.animate(document.querySelector('.circle2'), {
  translateX: 200
}, {
  type: dynamics.gravity,
  duration: 1388
})