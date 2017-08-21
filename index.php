<html>
<head>
      <title>Login PHP </title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" >
	  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
 <div style="width:700px;">
<body style="width:200%">
<center>
	<div class="container">
    		<div class="row">
            	<div class="col-md-3"></div>
  				<div class="col-md-6">
                <h1> PHP Member </h1>
                	<form action="checklogin.php" method="post">
                		<div class="form-group">
                        	<label for="email">Email </label> <br>
                        	<input type="email" class="form-control" id="email" name="email"  placeholder="Email">
                       </div>
                       <div class="form-group">
                        	<label for="password">Password </label><br>
                        	<input type="password" class="form-control" id="password" name=password placeholder="Password">
                      </div> <br>
                     <a href="http://10.193.34.242/test2/#"> <input type="submit" value="Log in" class="btn btn-primary" style="background-color:#3399FF" ></a>
                </form>
                
                </div>
            <div class="col-md-3"></div>
            </div>
    
	</div>		
                
     </center>   
	<script typ="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>