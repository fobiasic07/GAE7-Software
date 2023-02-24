<!DOCTYPE html>
<html>

<head>
  <title>Log In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <style>
    .d-flex {
      display: flex;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <div class="d-flex justify-content-center">
    <div class="card p-4">
      <div class="card-title">
        <?php
        $form_header = "Gearbox Academy Account Login";
        include_once 'loginformheader.php';
        ?>
      </div>
      <form action="verifylogin.php" method="post" class="card-body">
        <div>
          <label for="email" class="form-label">Email or Name:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter email or name" name="email">
        </div>
        <div class="mb-3 mt-3">
          <label for="pwd" class="form-label">Password:</label>
          <input type="password" class="form-control" id="passwd" placeholder="Enter Password" name="passwd">
        </div>

        <button type="submit" class="w-100 btn btn-outline-dark">Login</button>
      </form>
    </div>
  </div>

</body>

</html>