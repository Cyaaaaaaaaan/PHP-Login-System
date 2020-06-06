
<?php 

    define('__CONFIG__', true);
    require_once "inc/config.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>LOG-IN PAGE</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.5.3/css/uikit-core.min.css" />
  </head>

  <body>

    <div class="uk-section uk-container">
          <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
            <form class="uk-form-stacked js-register">

              <h2>SIGN UP HERE</h2>

              <div class="uk-margin">
                  <label class="uk-form-label" for="form-stacked-text">Username/Email</label>
                  <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="Username or Email">
                  </div>
              </div>

              <div class="uk-margin">
                  <label class="uk-form-label" for="form-stacked-text">Password</label>
                  <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text2" type="password" required='required' placeholder="">
                  </div>
              </div>

              <!-- <div class="uk-margin">
                  <label class="uk-form-label" for="form-stacked-text">Re-enter Your Password</label>
                  <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text3" type="password" required='required' placeholder="">
                  </div>
              </div> -->

              <div class="uk-margin uk-alert uk-alert-danger js-error" style='display: none;'></div>

              <div class="uk-margin">
                  <button class="uk-botton uk-button-default" type="submit">SIGN UP</button>
              </div>

            </form>
          </div> <!-- ENDS -->
    </div>

    <?php require_once "inc/footer.php"; ?>

  </body>

</html>
