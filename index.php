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
            <form class="uk-form-stacked">

              <div class="uk-margin">
                  <label class="uk-form-label" for="form-stacked-text">Username/Email</label>
                  <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="text" required='required' placeholder="Username or Email">
                  </div>
              </div>

              <div class="uk-margin">
                  <label class="uk-form-label" for="form-stacked-text">Password</label>
                  <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="password" required='required' placeholder="">
                  </div>
              </div>

              <div class="uk-margin">
                  <button class="uk-botton uk-button-default" type="submit">LOG IN</button>
              </div>

            </form>
          </div> <!-- ENDS -->
    </div>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.3/dist/js/uikit-icons.min.js"></script>

  </body>

</html>
