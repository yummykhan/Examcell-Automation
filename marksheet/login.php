

<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <script type="text/javascript" scr="login.js"></script>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="login-page" id="wrapper">
  <div class="form">
    <!--<form class="register-form" method="POST" onsubmit="return Validate()" name="form">
      <input type="text" placeholder="name"/>
      <div id="name_e" class="var_e" ></div>
      <input type="password" placeholder="password"/>
          <div id="pass_e" class="var_e" ></div>
      <input type="text" placeholder="email address"/>
          <div id="name_e" class="var_e" ></div>
      <button>create</button>
      <p class="message">Already registered? <a href="login.html">Sign In</a></p>
    </form>-->
    <form class="login-form" method="POST" action="select_data.php" onsubmit="return Validate()" name="form">
      <input type="text" name="logname" id="name" placeholder="username"/>
      <div id="name_e" class="var_e" ></div>
      <input type="password" name="logpass" id="pass" placeholder="password"/>
         <div id="name_e" class="var_e" ></div>
   <input type="submit" value="login" class="btn"  id="logsubmit"  name="logsubmit" background:color="#4CAF50">
      <p class="message">Not registered? <a href="regis.html">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
function Validate()
{
var name=document.forms["form"]["name"].value;
var pass=document.forms["form"]["pass"].value;



if(name=="")
{
alert("Username required");
return false;
}

else if(pass=="")
{
alert("Password required");

return false;

}
}

</script>
