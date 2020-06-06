$(document)
.on("submit", "form.js-register", function(event) {
  event.preventDefault();

  let _f = $(this);
  let _er = $(".js-error", _f);

  let data = {
    email: $("input[type='email'] ", _f).val(),
    password: $("input[type='password']", _f).val()
  }

  if (data.email.length < 8) {
    _er
      .text("Please enter a valid  email address")
      .show();
    return false;
  } else if (data.password.length < 8) {
    _er
      .text("Your password is too weak")
      .show();
    return false;
  }

  _er.hide();

  console.log(data);

  return false;
})