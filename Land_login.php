<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Land login</title>

    <!-- Font Icon -->

    <script
      src="https://kit.fontawesome.com/45a812b4f2.js"
      crossorigin="anonymous"
    ></script>
    <!-- Main css -->
    <link rel="stylesheet" href="css0/style.css" />
  </head>
  <body>
    <div class="main">
      <!-- Sing in  Form -->
      <section class="sign-in">
        <div class="container">
          <div class="signin-content">
            <div class="signin-image">
              <figure>
                <img src="img/mainLS.png" alt="sing up image" />
              </figure>
              <a href="Land_signup.php" class="signup-image-link"
                >Create an account</a
              >
            </div>

            <div class="signin-form">
              <h2 class="form-title" style="text-align: center">
                Land Lord Login
              </h2>
              <form
                method="POST"
                action="Land_login_process.php"
                class="register-form"
                id="login-form"
              >
                <div class="form-group">
                  <label class="label" for="your_name"
                    ><i class="fa-sharp fa-solid fa-envelope fa-lg"></i></label>
                  <input
                    type="text"
                    name="your_email"
                    id="your_name"
                    placeholder="Your email"
                    style="font-family: poppins, sans-serif"
                  />
                </div>
                <div class="form-group">
                  <label for="your_pass"
                    ><i class="fa-sharp fa-solid fa-lock fa-lg"></i
                  ></label>
                  <input
                    type="password"
                    name="your_pass"
                    id="your_pass"
                    placeholder="Password"
                    style="font-family: poppins, sans-serif"
                  />
                </div>
                <div class="form-group">
                  <input
                    type="checkbox"
                    name="remember-me"
                    id="remember-me"
                    class="agree-term"
                  />
                  <label for="remember-me" class="label-agree-term"
                    ><span><span></span></span>Remember me</label
                  >
                </div>
                <div class="form-group form-button">
                  <input
                    type="submit"
                    name="signin"
                    id="signin"
                    class="form-submit"
                    value="Log in"
                    style="font-family: poppins, sans-serif"
                  />
                  <a href="Admin_login.php">
                    <input
                      type="button"
                      name="signin"
                      id=""
                      class="admin"
                      value="Admin"
                      style="font-family: poppins, sans-serif"
                  /></a>
                  <a href="Warden_login.php">
                    <input
                      type="button"
                      name="Warden"
                      id=""
                      class="admin"
                      value="Warden"
                      style="font-family: poppins, sans-serif"
                  /></a>
                  <a href="Student_login.php">
                    <input
                      type="button"
                      name="Student"
                      id=""
                      class="admin"
                      value="Client"
                      style="font-family: poppins, sans-serif"
                  /></a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
