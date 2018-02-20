<!DOCTYPE html>
<html>
<head>
<title>Login | Add</title>


<script>



function validate() {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (reg.test(email.value) == false)
   
        {
        alert("Invalid Email Address")
        return false;
    }


var password = document.f1.pass.value;
if(password.length<8)

        
     {
        alert("password less than 6")
        return false;
    }


 
}
</script>

<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}

button:hover {
    opacity: 0.8;
}





img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 10%;
    }
    .container1{
    	width: 10%;
    }
}
</style>

</head>
<body>
<form action = "/create" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

  <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter emailid" name="email" id="email">
    <br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" id="pass">
    <br>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        
         <button type="submit" value="submit" name="submit" onclick="return validate()">Login</button>
    <label>
     
      <span class="psw">Forgot <a href="/password.email">password</a></span>
    </label>
  </div>

</form>
</body>
</html>