
<style>
.tnky{
	width:100%;
	text-align:center;
	margin-top:100px;
	background:#d1e4dd;
}
body{
	background:#d1e4dd;
}

.display-3{
	font-size:48px;
	
}
.btn {
	background-color:#000;
	padding:10px;
	color:#fff;
}

.quote{
	background:#51b993;
	width:100px;
	padding:20px;
	text-align:center;
	margin-left:auto;
	margin-right:auto;
}

button{
	background:transparent;
	border:none;
	font-size:18px;
}

</style>
<div class="container tnky">

<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  
    Having trouble? <a href="#">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="http://localhost/paktolus/" role="button">Continue to homepage</a>
  </p>
</div></br></br>
<div class="quote">
<button>
<?php

echo $_GET['quote_premium'];

?>
</button>
</div>
</div>
