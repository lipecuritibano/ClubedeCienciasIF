$(document).ready(() => {
  const $loginbutton = $('.login-button');
  const $loginform = $('.login-form');
    $loginbutton.on('click', () => {
  $loginform.show();
});
  })
})