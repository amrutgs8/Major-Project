<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigmy Deposit Scheme</title>
      <!-- @font-face {
        font-family: headFont;
        src: url(Summer-vibes)
     }  -->
     
    <style>
        #wrapper{
            max-width: 900px;
            min-height: 500px;
            
            margin: auto;
            color: gray;
            font-size: 14px;
            /* font-family: headFont; */
        }
        form{
            margin: auto;
            padding: 10px;
            /* background-color: black; */
            width: 100%;
            max-width: 400px;
        }
        input[type=text], input[type=password],input[type=button]{
            padding: 10px;
            margin: 10px;
            width: 98%;
            border-radius: 5px;
            border: solid 1px grey;
        }
        input[type=button]{
           width: 104%;
           cursor: pointer;
           background-color: #2b5488;
           color: white;no
        }
        input[type=radio]{
           transform: scale(1.2);
           cursor: pointer;
        }
        #header{
            background-color: #485b6c;
          
            font-size: 40px;
            text-align: center;
            font-family: headFont;
           /* src: url(ui/fonts/Summer-Vibes-OTF.otf);  */
           width: 100%;
           color: white;
        }

        #error{
            text-align: center;
            padding: 0.5em;
            background-color: #aa9c97;
            color: white; 
            display: none; 
        }

    </style>
</head>
<body>
   <div id="wrapper">
       <div id="header">
       Pigmy Deposit Scheme
       <div style="font-size: 20px; "></div>
       </div>
     <div id="error" style="">some text</div>
      <form id="myform">
          <input type="text" name="username" placeholder="Username"><br>
          <input type="text" name="email" placeholder="Email"><br>
          <!-- <input type="text" name="intrest" placeholder="Interest.. eg: Cricket, Basketball, etc.."><br> -->
          <div style="padding: 10px;">
          <br>Gender:<br>
          <input type="radio" value="Male" name="gender_male"> Male<br>
          <input type="radio" value="Female" name="gender_female">Female<br>
          </div>
          <input type="password" name="password" placeholder="Password"><br>
          <input type="password" name="password2" placeholder="Retype Password"><br>
          <input type="button" value="Sign up" id="signup_button"><br>

          <br>
          <a href="index.php" style="display:block; text-align:center; text-decoration:none;">
             Already have an account? Login here
          </a>
          <br>
      </form>
   </div>
</body>
</html>
 <!-- <script type="text/javascript">
    
    function _(element) {
        return document.getElementById(element);
    }
   var signup_button = _("signup_button");
   signup_button.addEventListener("click",collect_data);

   function collect_data(){

    signup_button.disabled = true;
    signup_button.value = "Loading...Please wait..";
       var myform = _("myform");
       var inputs = myform.getElementsByTagName("INPUT");
       
       var data = {};
       for(var i = inputs.length-1;i>=0;i--){
           var key = inputs[i].name;

           switch(key){
               case "username":
                data.username =inputs[i].value;
                break;
               case "email":
                data.email =inputs[i].value;
                break;
                case "intrest":
                data.intrest =inputs[i].value;
                break;
               case "gender_male":
               case "gender_female":
                if(inputs[i].checked){
                data.gender =inputs[i].value;
                }
                break;
               case "password":
                data.password =inputs[i].value;
                break;
               case "password2":
                data.password2 =inputs[i].value;
                break;

           }
       }
       /* alert(JSON.stringify(data)); */
       send_data(data,"signup");
       
   }
   function send_data(data,type){
       var xml = new XMLHttpRequest();
       xml.onload = function(){
        if(xml.readyState == 4 || xml.status == 200){
            handle_result(xml.responseText);
            signup_button.disabled = false;
            signup_button.value = "Signup";
         }
        }
         data.data_type = type;
         var data_string = JSON.stringify(data);

         xml.open("POST","api.php",true);
         xml.send(data_string);
       }
    
       function handle_result(result)
       {
        alert(result);
           var data = JSON.parse(result);
           if(data.data_type == "info"){
            window.location = "index.php";
            
           }else{
                   var error = _("error");
                   error.innerHTML = data.message;
                   error.style.display = "block";
           }
       }
   
</script> -->