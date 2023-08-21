<html>
   <head>
     <title></title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
	 
  </head>
  <style type="text/css">
    .PAN
    {
        text-transform: uppercase;
    }
    .error
    {
        color: Red;
        visibility: hidden;
    }
	body {
    background-image: url(bg-img.jpeg);
    background-repeat: no-repeat;
    background-position: center top;
    background-size: 100% 100%;
}
</style>
  <body>
     <div class="container-fluid ">
         <div class="container">
		     <form action="/action_page.php">
                 <div class="mb-3 mt-3">
                    <label for="Your Full Name" class="text-white">Username</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Username" name="username">
                 </div>
                 <div class="mb-3">
                    <label for="phone" class="text-white">Phone No.</label>
                    <input type="text" class="form-control" id="tell" placeholder="Phone No." name="number">
                 </div>
				 <div class="mb-3 mt-3">
                    <label for="Email" class="text-white">Your Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Your Email." name="email">
                 </div>
				 <div class="mb-3 mt-3">
                    <label for="Email" class="text-white">password</label>
                    <input type="password" class="form-control" placeholder="Password" id="password" required>
                 </div>
				 <div class="mb-3 mt-3">
                    <label for="Email" class="text-white">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm Password" id="confirm_password" required>
                 </div>
                 <div class="mb-3">
                    <label for="AdhaarNo." class="text-white">Your Adhaar No.</label>
                    <input name="txtAdhaar" type="text" name="adhaar" id="txtAdhaar" class="form-control" placeholder="Your Adhaar No." />
                 </div>
				 <div class="mb-3">
				    <label for="Email" class="text-white">Your Pan No.</label><span id="lblPANCard" class="error">Invalid PAN Number</span>
                    <input name="txtPANCard" type="text" id="txtPANCard" class="PAN form-control" placeholder="Your Pan No." />
                 </div>
				 <div class="mb-3">
                    <label for="A/C No." class="text-white">Account No.</label>
                    <input type="number" class="form-control" id="Account No." placeholder="Your Account No." name="accountnumber">
                 </div>
                 <div class="mb-3">
                    <label for="IFSC code" class="text-white">Your IFSC Code</label>
                    <input type="txtnumber" class="form-control" id="IFSC code" placeholder="Your IFSC Code" name="ifsccode">
                 </div>
		<div class="mb-3">
                    <label for="IFSC code" class="text-white">Your profile Photo</label>
                    <input id="image" type="file" class="form-control" name="profile_photo" placeholder="Photo" required="" capture>
                 </div>		 
                 
				 <button type="button" class="btn btn-primary" id="btnSubmit" value="" onclick="ValidatePAN()" style="background-image: linear-gradient(to right, red , Orange);">
				 <a href="index.php" class="text-decoration-none">Submit</a></button>
			 
			 </form>
        </div>
     </div>






<script type="text/javascript">
    function ValidatePAN() {
        var txtPANCard = document.getElementById("txtPANCard");
        var lblPANCard = document.getElementById("lblPANCard")
        var regex = /([A-Z]){5}([0-9]){4}([A-Z]){1}$/;
        if (regex.test(txtPANCard.value.toUpperCase())) {
            lblPANCard.style.visibility = "hidden";
            return true;
        } else {
            lblPANCard.style.visibility = "visible";
            return false;
        }
    }
</script>
 
  </body>
</html>
