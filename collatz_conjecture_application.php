<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Collatz 3n+1 Conjecture, Christina Xie</title>
	<meta name="description" content="Even Odd Problem">
	<meta name="author" content="Christina Xie">
  <link rel="stylesheet" href="collatz.css?v=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,700|Raleway|Roboto|Roboto+Slab" rel="stylesheet">
</head>
<style>
.btnBack {
    background-color: #635380;
    border: none; /* Remove borders */
    color: white; /* White text */
    padding: 15px 40px 15px 40px;
    font-size: 16px;
    transition: 0.5s;
    align:'left';
    border-radius: 3px;
    margin-left: 15px;
    margin-top: 15px;
}
.btnBack:hover {
    background-color:#8D81A2;
}
.goBack {
  text-decoration: none;
  color: #ffffff;
}
table, th, td {
    border: 1px solid black;
}
.maintext {
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  font-family: "Poppins";
}
h1 {
  text-align: center;
  font-family: "Poppins";
  margin-top: 35px;
  margin-bottom: -20px;
  color: #635380;
}
h2 {
  color: #635380;
}
.error {
  color: red;
  text-transform: uppercase;
}
.subBtn {
  margin: auto;
  text-align: center;
  transition: 0.5s;
  background-color: #635380;
  height: 35px;
  width: 240px;
  border-radius: 4px;
  font-weight: bolder;
  font-family: "Poppins";
  border: none; /* Remove borders */
  color: white; /* White text */
  margin-top: 7px;
  margin-bottom: 0px;
}
 .subBtn:hover {
  background-color:#8D81A2;
}
 .output {
  display: inline;
}
  img {
  height: 15px;
  width: 25px;
}
::placeholder {
   color: #D9D9D9;
   font-family:'Poppins';
   font-size: 17px;
}
input[type=number] {
   width: 240px;
   height: 20px;
   border: none;
   background-color: transparent;
   margin-bottom: 7px;
   border-bottom: 2px solid #ADADAD;
}
.container {
   background-color: white;
   padding-top: 25px;
   padding-bottom: 25px;
   width: 300px;
   border-radius: 13px;
   text-align:left;
   margin-left: auto;
   margin-top: 20px;
   margin-right: auto;
   padding-left: 60px;
}
  body {
    background-image: linear-gradient(to top, #bdc2e8 0%, #bdc2e8 1%, #e6dee9 100%);
    background-repeat: no-repeat;
    background-size: 100% 100%;
    margin: 0;
    height: 100%;
  }

</style>
<body>
  <button class="btnBack"><a class="goBack" href="https://christinaqyxie.github.io/projects.html#projectlist"><i class="fa fa-home"></i> Back</a></button>
  <div class="maintext">
    <h1>Even Odd Problem</h1>
    <h2>(Collatz 3n+1 Conjecture)</h2>
    <p>This activity allows the user to input a number and upon submit, <br>  the algorithm will loop through until the number reaches one based on <br> the Collatz Conjecture.
        The Collatz Conjecture is a sequence in which any <br> number can be taken and if the number is even, it will be divided by two. <br> If the number is odd, it will be multipled by three and one will be added. <br> The processes are repeated and all numbers eventually reach one.
        <br> Watch the video below to learn more about the Collatz Conjecture or try out the form below!</p>
        <iframe width="350" height="200" src="https://www.youtube.com/embed/5mFpVDpKX70" frameborder="0" style="border:2px solid #adadad;" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 <div class="container">
 <form action="collatz_conjecture_application.php" name="variables" method="POST">
     Enter a Number: <input type="number" name="number" value="" placeholder="Please enter a value"></input><br/><br/>
     <input type="submit" name="subBtn" class="subBtn" value="Submit" method="POST"></input>
   </form>
 </div>
</div>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>

</body>
</html>
