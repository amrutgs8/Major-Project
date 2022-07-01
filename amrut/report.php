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
    <div class="container" style=" margin-top:200px;">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary" style="background-color: #12283b;">
          <!-- <div class="panel-heading text-center">
            <h1>Login Page</h1>
          </div> -->
          <div class="panel-body">
            <form action="dbreport1.php" method="post">

              <h2 style = " 
    color: #86c2e0;
    margin-bottom: 20px;
">Enter Start date and end date</h2>
              
              <div class="form-group">
                <label for="date" style="color: white;">from date</label>
                <input
                  type="date"
                  class="form-control"
                  id="date"
                  name="date"
                 />
              </div>
               
             <!-- <div class="form-group">
                <label for="date">to date</label>
                <input
                  type="date"
                  class="form-control"
                  id="todate"
                  name="todate"
                 />
              </div>
-->


              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
         
        </div>
      </div>
    </div>
    
  </body>
</html>
