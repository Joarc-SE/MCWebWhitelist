<?php if ($_SERVER['REQUEST_URI'] != "/") header('Location: /'); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['action'])) {
    if ($_POST['action'] == "login") {
      if (isset($_POST['username']) && isset($_POST['password'])) {
        if (userExists($_POST['username'])) {
          if (checkPassword($_POST['username'], $_POST['password'])) {
            $_SESSION['logged_in'] = true;
            $_SESSION['user_rank'] = getRank($_POST['username']);
            header('Location: /');
            echo "user password true";
          } else {
            echo "password false";
          }
        } else {
          echo "user false";
        }
      }
    }
  }
}
?>
<div class="col-md-offset-4 col-md-4">
  <div class="page-header text-center">
    <h1>Whitelist Manager - <?= $_SERVER['SERVER_NAME'] ?></h1>
  </div>
  <?php if (isset($alert)): ?>
    <div class="alert alert-warning">
      <?= $alert ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif; ?>
  <div class="col-md-offset-2 col-md-8">
    <h2 id="login-form-text">Please login to continue</h2>
    <form method="post" autocomplete="off">
      <input type="hidden" name="action" value="login">
      <div class="login-form">
        <input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" required autofocus>
        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
        <button type="submit" class="btn btn-primary btn-block btn-lg" id="loginButton">Login</button>
      </div>
    </form>
  </div>
</div>
