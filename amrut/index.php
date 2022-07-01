<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
    
      
  </head>

  <style>
    body{
  background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('login-img4.JPG');
  background-size: cover;
  background-position: center;
  width: 100%;
}
  </style>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3" style="position: absolute; top: 50%; left: 25%; transform: translate(-50%, -50%); height: 200px; width: 600px; margin-top:-207px">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Login Page</h1>
          </div>
          <div class="panel-body">
            <form action="login.php" method="post">
              <div class="form-group">
                <label for="firstName">FirstName</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="name"
                />
              </div>
              
              
              
              <div class="form-group">
                <label for="password">Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              
              <button id="myButton" type="submit" name="submit" style = " width:534px;
              margin-top: 23px; border-radius: 15px; background-color:#3b3333; color: white;
              ">Login</button>

               <br>
          <a href="signup.php" style="display:block; text-align:center; text-decoration:none;">
              Don't have an account? Signup here
          </a>
         
            </form>
          </div>
         
        </div>
      </div>
    </div>
    
  </body>
</html>
