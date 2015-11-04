<html>
<head>
<title>
Login Page 
</title>

		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style>
.button_format{
	height: 40px;
	width: 200px;
	margin-left: 100px;
}

</style>
</head>
<body>
	<div class="container">
		<div class="row">
			 <button type="button" class="btn btn-info btn-lg button_format" data-toggle="modal" data-target="#myModal">LOGIN</button>

  				<!-- Modal -->
				  <div class="modal fade" id="myModal" role="dialog">
				    <div class="modal-dialog">
				    
				      <!-- Modal content-->
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Login</h4>
				        </div>
				        <div class="modal-body">
				       <form action="login.php" method="post" style="margin-top:100px;">
					 <div class="form-group">
					        <label for="Email ID">Email ID</label>
					        <input class="form-control" type="email" name="email" value="" placeholder="Email ID">
					      </div>
					      <div class="form-group">
					        <label for="Password">Password</label>
					        <input class="form-control" type="password" name="password" value="" placeholder="Password">
					      </div>
					 <button type="submit" class="btn btn-success btn-lg btn-block" name="button">LOGIN</button>
					 		</form>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				      </div>
				      
				    </div>
				  </div>

			 
				    </div>
				  </div>	  	




			

			



	



</body>
</html>