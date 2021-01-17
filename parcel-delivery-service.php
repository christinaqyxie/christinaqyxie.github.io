<!DOCTYPE html>

<html lang="en">
<head>
		<title>Parcel Delivery Service</title>
		<meta charset="utf-8">
		<meta name="description" content="Parcel Delivery Service">
		<meta name="author" content="Christina Xie">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	  <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lato|Poppins|Raleway|Roboto|Roboto+Slab" rel="stylesheet">
</head>
<style>
	body {
		font-family: "Poppins";
		background-image: linear-gradient(to top, #1e3c72 0%, #1e3c72 1%, #2a5298 100%);
	}
	.maintext {
		text-align: center;
	}
	table {
		text-align: center;
	}
	a:link, a:visited, a:active, a:hover {
		color: white;
		text-decoration: none;
	}
	.btnBack {
			background-color: #316DD4;
			text-decoration: none;
			border: none; /* Remove borders */
			color: white; /* White text */
			padding: 15px 40px 15px 40px;
			font-size: 20px;
			align:'left';
			border-radius: 0.3em;
			margin-left: 14px;
			margin-top: 15px;
			transition: 0.5s;
			font-family: "Lato";
			margin-bottom: 20px;
	}
	.btnBack:hover {
			background-color:#6494E7;
	}
	.subBtn {
		margin: auto;
		text-align: center;
		transition: 0.5s;
		background-color: #E8A34F;
		height: 40px;
		width: 300px;
		font-size: 20px;
		border-radius: 4px;
		font-weight: 300;
		font-family: "Poppins";
		border: none; /* Remove borders */
		color: white; /* White text */
		margin-top: 20px;
		margin-bottom: 0px;
	}
	.subBtn:hover {
		background-color:#F9B65F;
		cursor: pointer;
	}
	.container {
	   background-color: white;
	   padding-top: 7px;
	   padding-bottom: 25px;
	   width: 400px;
	   border-radius: 13px;
	   text-align:center;
		 margin-top: 35px;
	   margin-left: auto;
	   margin-right: auto;
	}
	h1 {
		font-weight: bolder;
		margin-bottom: 5px;
	}
	h2 {
		padding-top: 5px;
		margin-bottom: 15px;
	}
	input[type=number], input[type=text], input[type=tel] {
	   width: 300px;
	   height: 19px;
	   border: none;
	   background-color: transparent;
	   margin-bottom: 15px;
	   border-bottom: 2px solid #ADADAD;
	}
	form {
		margin-left: auto;
		margin-right: auto;
	}
	.subtitle {
		margin-bottom: 0px;
		margin-top: -1px;
		text-align: left;
		font-size: 14px;
		padding-left: 50px;
	}
	select {
	  font-size: 18px;
	  color: #333333;
	  font-family:'Poppins';
	  width: 300px;
	  padding: 16px 20px;
	  border: none;
	  border-radius: 4px;
	  background-color: #FCFCFC;
		margin-top: 5px;

	}
	::placeholder {
	  color: #D9D9D9;
	  font-family:'Poppins';
	  font-size: 19px;
	}
	textarea {
		overflow:auto;
		resize: none;
		width: 295px;
		height: 100px;
		margin-top: 5px;
		border-radius: 0.5em;
		border: 2px solid #ADADAD;
	}
	hr {
	  color: #ADADAD;
	  padding: 1px 0 1px 0;
	  background-color: #ADADAD;
	  border: #ADADAD;
		width: 300px;
	  margin-top: 15px;
	  margin-bottom: 15px;
	}
	.error {
		color: red;
		text-transform: capitalize;
	}
	table {
		color: white;
	}

</style>
<body>
  <button class="btnBack"><a class="goBack" href="https://christinaqyxie.github.io/projects.html#projectlist"><i class="fa fa-home"></i> Back</a></button>
	<div class = "maintext">
		<h1>X P R E S S</h1>
		<img src="https://image.flaticon.com/icons/png/512/178/178754.png" title="Icon" alt="delivery-icon" height="170px">
	  <p>Welcome to XPRESS Delivery Service!<br>We specialize in speed and quality care.<br>Clients must fill out the following form, once they hit submit,<br> the shipping costs will be calculated and displayed. </p>
				<div class="container">
		  <form action="parcel-delivery-service.php" name="form" method="post">
		      <!--php in "value"-allows the form to retain information if the sender encounters an error, so it does not need to be typed again-->
		      <h2>Contact Information</h2>
		      <p class='subtitle'>Name</p><input type="text" name="name" value="" placeholder="Enter Your Full Name Here" required></br>
		      <p class='subtitle'>Email</p><input type="text" name="email" value="" placeholder="Enter Your Email Here" required></br>
		      <p class='subtitle'>Phone Number</p><input type="tel" name="phone" value="" placeholder="000-000-0000" required></br>

		      <h2>Parcel Specifications</h2>
		      <p class='subtitle'>Length (cm)</p><input type="number" name="length" value="" placeholder="Please Enter a Value" required></br>
		      <p class='subtitle'>Width (cm)</p><input type="number" name="width" value=""placeholder="Please Enter a Value" required></br>
		      <p class='subtitle'>Height (cm)</p><input type="number" name="height" value=""placeholder="Please Enter a Value" required></br>
		      <p class='subtitle'>Mass (kg)</p><input type="number" name="mass" value=""placeholder="Please Enter a Value" required></br>

		      <h2>Delivery Distance</h2>
					<hr>
					<select name="distance" required>
		        <option value="" disabled selected>Please Enter a Distance</option>
		        <option value="1">0-10 km</option>
		        <option value="2">10-50 km (+15% extra)</option>
		        <option value="3">50-100 km (+25% extra)</option>
		      </select>
				<hr>
		      <h2>Comments </h2><textarea name="comments" rows="5" cols="40" placeholder="Please leave any questions, comments, or further specifications here!"></textarea></br>
	      <input type="submit" name="submitBtn" class="subBtn" value="Deliver!" method="post">
			</form>
				</div>
</div>
<br></br>
</body>
</html>
