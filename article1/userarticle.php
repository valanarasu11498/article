<!DOCTYPE html>
<html lang="en">
<head>
  <title>article</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/user.js"></script>
   <link rel="stylesheet" href="css/logstyle.css">
   	<style>
	.article-widget
	{
	       border: 1px solid #ddd;
			background: #f8f7d7;
			border-radius: 5px;
			box-shadow: 2px 2px 0px 2px #eed5d5;
			cursor: pointer;
			margin-bottom: 15px;
	}
	.article-widget:hover
	{
			box-shadow: 5px 5px 0px 5px #eed5d5;
	}
	.image{
		width: 100px;
		height: 100px;
	}
	</style>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
	<span class="icon-bar"></span>
		<span class="icon-bar"></span>

	<span class="icon-bar"></span>

	</button>
      <a class="navbar-brand" href="#">INFINITI SOFTWARE SOLUTIONS</a>
    </div>
	<div id="MyNavbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li ><a href="userhome.php"><i class="	glyphicon glyphicon-home"> HOME</i></a></li>
      <li class="active"><a href="adminarticles.php"><i class="	glyphicon glyphicon-lock">ARTICLES</i></a></li>
      <li><a href="home_page1.php"><i class="	glyphicon glyphicon-log-in"> LOGOUT</i></a></li>
    </ul>
	</div>
  </div>
</nav>


<div class="container-fluid">
     <h3 style="text-align:center"><p>ALL ARTICLES</p></h3>
		<div class="">
			<div class="col-md-12" id="table-lists">
				<div class="col-md-4">
					<div class="col-md-12 article-widget" onclick="getSingleArticle()">
						<div class="col-md-4">
							<img class="image" src="anish (1).jpg">
						</div>
						<div class="col-md-8">
							<div class="title">
								<h3>hjdbsisy fejkfbkjf jekfnkfj </h3>
								<span class=""author>Author</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
	  

</body>
</html>
