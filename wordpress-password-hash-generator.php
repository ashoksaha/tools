<?php
include 'class-phpass.php';
if(isset($_POST['submit']))
{
	$password = $_POST['password'];
	$hasher = new PasswordHash(8, TRUE);
	$hash = $hasher->HashPassword($password);
}
else
{
	$password = "password";
	$hasher = new PasswordHash(8, TRUE);
	$hash = $hasher->HashPassword($password);
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fidsi Tools</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Fidsi Tools</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">WORDPRESS PASSWORD HASH GENERATOR</h1>

      <div class="row">
	  <p>Wordpress salted password hash or version 3.x and 4.x. Very similar to Apache md5 crypt hash and you can use it instead. It's a cross platform encryption. Don't be affraid of using $1$ instead of $P$. It works properly. You can change in Wordpress mysql database » table *users. Asterix stands for db prefix. Easiest way to reset password or change password</p>
	  <p></p>
	  <div class="col-md-12">
			<form action="#" method="post" id="theForm">
			<input id="password" name="password" value="" placeholder="<?php echo $password; ?>" value="<?php echo $password; ?>"> 
			<input type="submit" name="submit"> 
			</form>
	  </div>
	 
	  <div class="col-md-12"><div id="hash"><h2>Wordpress v3,v4 password hash</h2><input value="<?php echo $hash; ?>"></div></div>
	  <div class="clear"></div>
	  <p>Easy to use tools for webmasters. You can calculate hash string for any input by various hash methods. Select your hashing method and simply enter your string and generate the hash of it.

Get your password hash and change password / reset admin password on Joomla, Drupal, Wordpress or custom CMS database. Never waste your time to recover password just overwrite old password with the new password's hash in MySQL, PostgresQL or any database type / MVC model.</p>
        
		
        
        
        
        
      </div>
      <!-- /.row -->

      <!-- Pagination -->
      

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; FIDSI 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
