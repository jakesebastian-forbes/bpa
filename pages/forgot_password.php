

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "segoe ui", verdana, helvetica, arial, sans-serif;
      font-size: 16px;
      transition: all 500ms ease;
    }

    body {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      text-rendering: optimizeLegibility;
      -moz-font-feature-settings: "liga" on;
    }

    .row {
      background-color: #245a94;
      color: #fff;
      text-align: center;
      padding: 2em 2em 0.5em;
      width: 90%;
      margin: 2em auto;
      border-radius: 5px;
    }

    .row h1 {
      font-size: 2.5em;
    }

    .row .form-group {
      margin: 0.5em 0;
    }

    .row .form-group label {
      display: block;
      color: #fff;
      text-align: left;
      font-weight: 600;
    }

    .row .form-group input,
    .row .form-group button {
      display: block;
      padding: 0.5em 0;
      width: 100%;
      margin-top: 1em;
      margin-bottom: 0.5em;
      background-color: inherit;
      border: none;
      border-bottom: 1px solid white;
      color: #eee;
    }

    .row .form-group input:focus,
    .row .form-group button:focus {
      background-color: #fff;
      color: #000;
      border: none;
      padding: 1em 0.5em;
      animation: pulse 1s infinite ease;
    }

    .row .form-group button {
      border: 1px solid #fff;
      border-radius: 5px;
      outline: none;
      -moz-user-select: none;
      user-select: none;
      color: #000000;
      font-weight: 800;
      cursor: pointer;
      margin-top: 2em;
      padding: 1em;
    }

    .row .form-group button:hover,
    .row .form-group button:focus {
      background-color: #fff;
    }

    .row .form-group button.is-loading::after {
      animation: spinner 500ms infinite linear;
      content: "";
      position: absolute;
      margin-left: 2em;
      border: 2px solid #000;
      border-radius: 100%;
      border-right-color: transparent;
      border-left-color: transparent;
      height: 1em;
      width: 4%;
    }

    .row .footer h5 {
      margin-top: 1em;
    }

    .row .footer p {
      margin-top: 2em;
    }

    .row .footer p .symbols {
      color: #444;
    }

    .row .footer a {
      color: inherit;
      text-decoration: none;
    }

    .information-text {
      color: #ddd;
    }

    @media screen and (max-width: 320px) {
      .row {
        padding-left: 1em;
        padding-right: 1em;
      }

      .row h1 {
        font-size: 1.5em !important;
      }
    }

    @media screen and (min-width: 900px) {
      .row {
        width: 50%;
      }
    }
  </style>
</head>
<body>

<div class="row">
  <h1>Forgot Password</h1>
  <h6 class="information-text">Enter your registered email to reset your password.</h6>
  <div class="form-group">
    <input type="email" class="form-control" id="user_email" placeholder="  Email">
    <button class="btn btn-primary" onclick="showSpinner()">Reset Password</button>
  </div>
  <div class="footer">
    <h5>New here? <a href="applicant_signup.php">Sign Up.</a></h5>
    <h5>Already have an account? <a href="../index.php">Sign In.</a></h5>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>