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
        <div class="panel panel-primary" style = " margin-top: 65px;">
          <!-- <div class="panel-heading text-center">
            <h1>Login Page</h1>
          </div> -->
          <div class="panel-body" style="background-color: #12283b;">
            <form action="operation-customer.php" method="post">

              <h2 style = " color: #86c2e0; text-align: center;">Enter Customer Details</h2>
              
              <div class="form-group">
                <label for="firstName" style=" color:white;">Enter First Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  name="firstName"
                 />
              </div>

              <div class="form-group">
                <label for="lastName" style="color:white;">Enter Last Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  name="lastName"
                />
              </div>

              <div class="form-group">
                <label for="email" style="color:white;">Enter email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>

              <div class="form-group">
                <label for="phone_no" style="color: white;">Enter phone number</label>
                <input
                  type="text"
                  class="form-control"
                  id="phone_no"
                  name="phone_no"
                />
              </div>

              <div class="form-group">
                <label for="Married" style="color: white;">Married?</label>
                <select name="Married" id="Married">
                     <option value="Yes">Yes</option>
                     <option value="No">No</option>
                     </select>
              </div>

              <div class="form-group">
                <label for="Dependents" style="color: white;">Enter no of dependents</label>
                <input
                  type="number"
                  class="form-control"
                  id="Dependents"
                  name="Dependents"
                />
              </div>

              <div class="form-group">
                <label for="Education" style="color: white;">Education</label>
                <select name="Education" id="Education">
                     <option value="Graduate">Graduate</option>
                     <option value="Not Graduate">Not Graduate</option>
                </select>
              </div>

              <div class="form-group">
                <label for="Self_Employed" style="color: white;">Self Employed?</label>
                <select name="Self_Employed" id="Self_Employed">
                     <option value="Yes">Yes</option>
                     <option value="No">No</option>
                     </select>
              </div>

              <div class="form-group">
                <label for="Income" style="color:white;">Enter Income</label>
                <input
                  type="number"
                  class="form-control"
                  id="Income"
                  name="Income"
                />
              </div>

              <div class="form-group">
                <label for="Credit_History" style="color: white;">Credit History?</label>
                <select name="Credit_History" id="Credit_History">
                     <option value="1">1 for No issues</option>
                     <option value="0">0 if issues are there while returning amount</option>
                     </select>
              </div>

              <div class="form-group">
                <label for="Cibil_score" style="color:white;">Enter Cibil Score</label>
                <input
                  type="number"
                  class="form-control"
                  id="Cibil_score"
                  name="Cibil_score"
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
