
<html>
<head>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


   <script>
function validate() {

     var x = document.forms["f2"]["name"].value;
        if (x == "") 
        {
        alert("Name must be filled out");
        return false;
    }

   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(email.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }



        var age=document.getElementById('age').value;
           age = parseInt(age, 10);

//check if age is a number or less than or greater than 100
       if (isNaN(age) || age < 1 || age > 100)
   { 
      alert("The age must be a number between 1 and 100");
        return false;
}


var val = number.value
if (/^\d{10}$/.test(val)) {
    // value is ok, use it
} else {
    alert("Invalid number; must be ten digits")
    number.focus()
    return false
}

var dropdown = document.getElementById('gender');
if(dropdown.selectedIndex==0){
        dropdown.focus();
            return false; 
            }
            


       

        
}

</script>
    </head>

<style>
input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
     margin-left: 50px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=textt], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
     margin-left: 60px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


 #datepicker{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
     margin-left: 60px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=textttt], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
     margin-left: 48px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=file], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
     margin-left: 75px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.Gender {
    width: 50%;
    padding: 12px 20px;
    margin-left: 30px 0;
    margin: 8px 0;
     margin-left: 50px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}


input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 18px 0;
     margin-left: 60px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;

}

</style>
<body>

  

<form  name="f2" action="{{ URL::to('/contactform') }}" method="POST"   style="border:1px solid #ccc">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

  <div class="container">
     <label for="lname">Name</label>
    <input type="text" name="name" placeholder="Name...."  /><br>

    <label for="lname">Email</label>
    <input type="text" name="email" id="email" placeholder="Emailid.." /><br>

    <label for="lname">Age</label>
    <input type="textt" name="age" id="age" placeholder="Age" required><br>
    <label for="lname">Date</label>
    <input type="text"  placeholder="Date" class="form-control datepicker" id="datepicker" name="date_order"  required><br>
     
    <label for="lname">Mobile</label>
    <input type="textttt" name="mobile"  id="number" placeholder="Mobile no.."/><br>
    <label>file</label>
    <input type="file" name="profileimg" id="profileimg" accept="image/*" required><br>

    <label for="Gender">Gender</label>
    <select class="Gender" id="gender" name="Gender">
       <option value="">Select gender</option>
      <option value="Female">Female</option>
      <option value="male">Male</option><br>
      
     <input type="submit" value="Submit" onclick="return validate()"/>


         <a href="{{ route('contactform',['download'=>'pdf']) }}">Download PDF</a>


         
    
    





  </div>


    
</form>

</body>
</html>