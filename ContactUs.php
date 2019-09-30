<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
var q = document.forms["myForm"]["email"].value;
var r = document.forms["myForm"]["phoneno"].value;
var y = document.forms["myForm"]["donate"].value;
var s = document.forms["myForm"]["status"].value;
    if (x == "" ) {
        alert("Name must be filled out");
        return false;
    }
    else if (q == "" ) {
        alert("email must be filled out");
        return false;
    }
    else if (r == "" ) {
        alert("phone no. must be filled out");
        return false;
    }
    else if (y == "" ) {
        alert("tyoe must be filled out");
        return false;
    }
    else if (s == "" ) {
        alert("workshop/competition must be filled out");
        return false;
    }
}
</script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
.box {
      background-color: #181818;
      height: 150%;
      position: absolute;
      top: 5;
      float: center;
      width: 60%;
      border: 5px solid white;
       margin-left: 300px;

}
input[type=text], select, textarea {
    width: 30%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: black;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: grey;
}

.container {
    border-radius: 5px;
    padding: 20px;
}
h1{
color: white;
}
h3{
color:white;
}
</style>
</head>
<body background="gallery.jpg">
<center>
<h1>CONTACT US</h1>
<hr>
<div class="box">
<div class="container">
  <form name="myForm" action="/action_page.php"
onsubmit="return validateForm()" method="post">
    <label for="fname"><h3>Full Name*</h3></label>
    <input type="text" id="fname" name="fullname" placeholder="Your name..">

    <label for="email"><h3>Email Id*</h3></label>
    <input type="text" id="email" name="email" placeholder="Your Email Id.."><br>


    <label for="phoneno"><h3>Phone No.*</h3></label>
    <input type="text" id="phoneno" name="phoneno" placeholder="Your Phone No.."><br>

    <label for="comments"><h3>About your organization/Any query*</h3></label>
    <textarea rows="10" cols="200">
    </textarea><br>
    <input type="submit" value="Submit">
  </form>
</div>
</div>
</center>
</body>
</html>
