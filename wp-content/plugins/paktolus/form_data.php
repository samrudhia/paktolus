<?php

$servername='localhost';
	$username='root';
	$password='';
	$dbname = "frontform";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	  if(!$conn){
		  die('Could not Connect MySql Server:' .mysql_error());
		}

?>
 <html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js" integrity="sha512-XZEy8UQ9rngkxQVugAdOuBRDmJ5N4vCuNXCh8KlniZgDKTvf7zl75QBtaVG1lEhMFe2a2DuA22nZYY+qsI2/xA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/localization/messages_ar.min.js" integrity="sha512-bGOftAqe7xfGxaWMsVQR187i+R9E0tXZIUL0idz1NKBBZIW78hoDtFY9gGLEGJFwHPjQSmPiHdm+80QParVi1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/localization/messages_bg.min.js" integrity="sha512-li3eNvg/eoOQI0x8ZQboer6q7nm2xAJ05DzOt0gQPLW/U2F0PiDl1iFtAb/qic+3ahyMHtNLXiVo3U7qF6Vo1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/localization/messages_az.min.js" integrity="sha512-SvhMADI1DZzfemkOl+WTUMjydoZxloCfaGAcC1qcYi8Bm2uFvEwazPiMZLDllBiNcGbSKWriKUYFD9KM4zJPxA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	   <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="http://localhost/paktolus/wp-content/plugins/paktolus/assets/js/front.js">
  <link href="http://localhost/paktolus/wp-content/plugins/paktolus/assets/css/style.css">
    
  </head>
  <body>
       <div class='wrap'>  
        <h2 style="text-align:center">PAKTOLUS FORM</h2>  
        <div class="main-content">  </br></br>
  
        <!-- You only need this form and the form-basic.css -->  
  
        <form class="myaccount" method="post" action="wp-content/plugins/paktolus/save.php">  
  
            
  <div class="row">
  <div class="col-md-4">
    <input type="text" name="fname" placeholder="First Name" class="form-control"/></div>
	<div class="col-md-4"><input type="text" name="mname" placeholder="Midle Name" class="form-control" /></div>
	<div class="col-md-4"><input type="text" name="lname" placeholder="Last Name" class="form-control" /></div>
	</div>
	
   <div class="row">
   <div class="col-md-8">	
     <textarea placeholder="Address" name="address" onkeyup="adjust_textarea(this)" class="form-control"></textarea> </div>
	 <div class="col-md-4">
     <input type="text" name="unit" placeholder="Unit" class="form-control" /> </div>
   </div>
   
   <div class="row">
   <div class="col-md-4">
    <input type="text" class="form-control" id="inputCity" name="city" placeholder="City" class="form-control"></div>
	<div class="col-md-4"><select id="inputState" name="state" class="form-control">
        <option selected>Choose...</option>
       <?php $result = mysqli_query($conn,"SELECT * FROM states");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
<?php
}
?>
      </select></div>
	<div class="col-md-4"><input type="text" name="zipcode" placeholder="Zip Coad" class="form-control"/></div>
	</div>
	
	<input type="date" id="birthday" name="birthday" class="form-control">
	
	<div class="row">
   <div class="col-md-8">
   <input type="tel" name="phone_number" id="phone_number" pattern="^\d{10}$" required="required" placeholder="phone Number" class="form-control"/>
    </div>
	<div class="col-md-4">
    <input type="email" name="email_id" placeholder="Email" class="form-control" /> </div></div>
	<div class="parent" style="text-align:center">
    <div class="row">
	<div class='col text-center rcol'>
        <input type="radio" name="imgbackground" id="img1" class="d-none imgbgchk" value="">
          <label for="img1">HOUSE
            <img src="http://localhost/paktolus/wp-content/uploads/2022/01/house.png" alt="Image 1">
            <div class="tick_container">
              <div class="tick"><i class="fa fa-check"></i></div>
            </div>
            </label>
        </div>
        <div class='col text-center rcol'>
        <input type="radio" name="imgbackground" id="img2" class="d-none imgbgchk" value="">
          <label for="img2">CONDO
            <img src="http://localhost/paktolus/wp-content/uploads/2022/01/condo.png" alt="Image 2">
            <div class="tick_container">
              <div class="tick"><i class="fa fa-check"></i></div>
            </div>
          </label>
        </div>
        <div class='col text-center rcol'>
        <input type="radio" name="imgbackground" id="img3" class="d-none imgbgchk" value="">
          <label for="img3"> HO5
            <img src="http://localhost/paktolus/wp-content/uploads/2022/01/ho5.jpg" alt="Image 3">
            <div class="tick_container">
              <div class="tick"><i class="fa fa-check"></i></div>
            </div>
          </label>
        </div></div></div></br>
		<input type="hidden" name="quote_premium" value="1183">
	
	
	<div class="row subbtn" style="text-align:center;">
    <input type="submit" value="Submit" /> </div>
  </form>
  
    </div>  
          
       </div>  
	   </div>
	   <script>
	   
//auto expand textarea

/auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}

jQuery(document).ready(function($){ 
	
	
		
			
		
	
	
// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='myaccount']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      fname: "required",
	  mname: "required",
	  lname: "required",
	  address: "required",
	  state: "required",
	  city: "required",
	  zipcode: "required",
	  unit: "required",
	  
      email_id: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      phone_number:{
          required:{
          depends:function(){
            $(this).val($.trim($(this).val()));
            return true;
        }
        },
          number:true,
          minlength:10,
         maxlength:10,
        // number:true,
        // maxlength:10,
      },
    },
    // Specify validation error messages
    messages: {
      fname: "Please enter your first name",
	  mname: "Please enter your middle name",
	  lname: "Please enter your last name",
      email_id: "Please enter a valid email address",
	  address: "Please enter your address",
	  state: "Please select your state",
	  city: "Please select your city",
	  zipcode: "Please enter your zipcoad",
	  unit: "required",
      phone_number:{
        required:"Please enter mobile number",
        number:"Only enter number",
        minlength:"Mobile number should be 10 digit number",
        maxlength:"Mobile number should be only 10 digit number",

      },
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });
});
});
 
	   </script>
   </body>
   
   </html>
