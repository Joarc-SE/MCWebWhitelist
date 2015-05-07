<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Joarc and Gustavwiz">
    <title>Begining work of this project!</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
  </head>
  <body>
    <div class="fluid-container">
      <div class="col-md-offset-4 col-md-4">
        <div class="page-header">
          <h1>Whitelist Manager - <?= $_SERVER['SERVER_NAME'] ?></h1>
        </div>
        <div class="col-md-offset-3 col-md-6">
          <h2>Please login to continue</h2>
          <form method="post" action="/login.php">
            <input type="hidden" name="action" value="login">
            <div class="login-form">
              <label for="username">Username and Password: </label>
              <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
              <button type="submit" class="btn btn-primary btn-block" id="loginButton">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
