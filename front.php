<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
.center {
    position: absolute;
    width: 100px;
    height: 50px;
    top: 15%;
    left: 43%;
    margin-left: -50px; /* margin is -0.5 * dimension */
    margin-top: -25px;
	font-size: 100px;
    font-family: "Luminari", fantasy;
	color: black;
}
p.footer{

font-size: 25px;
color: white;
}
div.bg {
            width: 100%;
            height: 100%;
            max-height: 100%;
            margin: 0;
            padding: 0;
            background-image: url('bg2.jpg');
            background-size:100% 100%;
            background-repeat: no-repeat;
        }

div.abc {
    background-color: white;
    opacity: 0.5;
    filter: Alpha(opacity=50); /* IE8 and earlier */
}
.buttonx {
    border: none;
    padding: 10px 50px;
    text-align: center;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button4 {
    background-color: black;
    color: white;
    border: 0px solid #555555;
}

.button4:hover {
    background-color: #555555;
    color: white;
}
.buttonx1 {
position: absolute;
    right: 700px;
bottom: 20px ;
}
.buttony {
    padding: 10px 50px;
    text-align: center;
    display: inline-block;
    background-color: black;
    color: white;
   font-size: 18px;
    margin: 15px 2px;
	line-height: 150%;
}
#navbar{
width: 100%;
height: 8%;
background-color: black;
color: white;
top: 0;
position: fixed;
font-size: 30px;
}
section{
width: 100%;
height: 120%;

}
h1{
  font-size: 40px;
color: white;
}
h3{
color:white;
}
p{
  align:left;
color:white;
font-size: 25px;
}
p.au{
  align:left;
color:white;
font-size: 30px;
}

.box {
      background-color: #181818;
      height: 80%;
      position: relative;
      top: 5;
      float: center;
      width: 50%;
      border: 5px solid white;
       margin-left: 0px;

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
a{
color: white;}
.heading{
		position: absolute;
		top: 120px;
		left: 490px;
		z-index: 1;
		width: 35%;
}
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: black;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
</head>
<body bgcolor="black">
<section id="home">
<div class="bg">
<img src="heading.jpg" class="heading">
<div class="abc">
    This is some text that is placed in the transparent box.
</div>
<center>
<a href="registerdonation.php" ><button class="buttonx button4 buttonx1">&nbsp DONATE</button></a>

</center>
</div>
<center>
<div id="navbar">
<a href="#home" ><button class="buttonx button4">&nbsp Home </button></a>
<a href="#AboutUs" ><button class="buttonx button4">&nbsp About us &nbsp</button></a>
<a href="" ><button class="buttonx button4">&nbsp  Explore NGO &nbsp</button></a>
<a href="#faq" ><button class="buttonx button4">&nbsp  FAQ &nbsp</button></a>
<a href="#ContactUs" ><button class="buttonx button4">&nbsp  Contact Us &nbsp</button></a>
</div>
</center>
</section>

<section id="AboutUs">
  <center>
    <h1>ABOUT US</h1>
    <hr>

      <iframe width="450" height="270" style="float: right" align="right" src="https://www.youtube.com/embed/i3X9tdF1fHY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <p class="au">The aim is to serve patients need in a holistic manner, enabling them to live active, dignified and healthier lives.</p>
      <p>  MediHelp India is a leading charity in India working with and for disadvantaged people for nearly 4 decades. It was set up in 1978 and is registered under the Societies’ Registration Act of 1860. There are an estimated 104 million patients in India. MediHelp advocates for  quality healthcare, action against Elder Abuse and many more at a national, state and societal level with Central and State governments.
      </p>
      <br>
      <center><h1>HISTORY</h1></center>
      <p>MediHelpe India came into being in 1978 with Cecil Jackson Cole, founder of MediHelp International (UK), as its first President. Around this time two other men figured prominently in the MediHelp India story – John F. Pearson and Samson Daniel.
        Constant grants from the United Kingdom were something both Pearson and Cole felt would not be practical in the long run. They realized a regular inflow of funds was needed so that they could make a positive and lasting impact.
        In March 1974, when Cole, visited India, an intrepid philanthropist named Samson Daniel approached him for financial help to set up a member organization in Delhi. A far-sighted man, Cole instead offered to train him to raise funds. After a three month training course in London, Mr. Daniel and his wife returned to India and organized a sponsored walk with schoolchildren in Delhi. It was so successful that in 1975 HelpAge International recruited more staff to cover Bombay, Madras and Calcutta.
</section>
<section id="faq">
  <h1><center>FAQ</center></h1>
  <hr>
  <button class="accordion">How can yoy register your NGO with us?</button>
  <div class="panel">
    <p>Go to Contact Us page and fill the form.Your request will be send to us and we will contact you.After verfication you can be a part of our MediHelp.</p>
  </div>

  <button class="accordion">How can an individual take help?</button>
  <div class="panel">
    <p>Go to contact NGO ,fill your request and then the respective NGO will contact you.</p>
  </div>

  <button class="accordion">How can we be be assured of our donations?</button>
  <div class="panel">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>

  <button class="accordion">How can an individual take help?</button>
  <div class="panel">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>

  <script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight){
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
  </script>

</section>
<section id="ContactUs">
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

</section>

</body>
</html>
