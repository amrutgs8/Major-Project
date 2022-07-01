<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <style>
    body{
  background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('./background.jpg');
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  width: 100%;
}
  </style>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary" style="margin-top: 200px;">
          <!-- <div class="panel-heading text-center">
            <h1>Login Page</h1>
          </div> -->
          <div class="panel-body" style=" background-color: #12283b;">
            <form action="abc.php" method="post">
              
              <div class="form-group">
                <label for="cust_id" style="
    color: #86c2e0;
    font-size: 26px;
">Enter Customer Id</label>
                <input
                  type="number"
                  class="form-control"
                  id="cust_id"
                  name="cust_id"
                 />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
         
        </div>
      </div>
    </div>
    
  </body>
</html>
