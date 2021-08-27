<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toggle Password Visibility</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/all.min.css">
    <style>
        form i {
    margin-left: -30px;
    cursor: pointer;
}
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Sign In</h1>
      <form method="post">
        <p>
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" class="">
        </p>
        <p>
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" />
          <i class="fa fa-eye" id="togglePassword"></i>
        </p>
        <button type="submit" id="submit" class="submit">Log In</button>
      </form>
    </div>
    <script src="js/app2.js"></script>
  </body>
</html>