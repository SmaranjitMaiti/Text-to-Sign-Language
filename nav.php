<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background:#337ab7;color:white;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="index.php" style="padding:0;padding-left:10px;"><h1 style="padding:0; margin:0;"><img src="images/logo.png" style="height:55px;"></h1></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
<li <?php if($pageName=='index.php') echo 'class="active"'; ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Team <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="min-width:180px; padding-right:10px;">
            <li><a href="#">Principle Investigator</a></li>
            <li><a href="#">Co-principle Investigator</a></li>
            <li><a href="#">Research Assistant</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Project<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">History</a></li>
            <li><a href="#">Objective</a></li>
            <li><a href="#">Working</a></li>
            <li><a href="#">Funding</a></li>
            <li><a href="#">Contributors</a></li>
            <li><a href="#">Publications</a></li>
          </ul>
        </li>
        <li <?php if($pageName=='about-piratica-it-services-and-training.php') echo 'class="active"'; ?>><a href="#">Workshop</a></li>
        <li <?php if($pageName=='contact-piratica.php') echo 'class="active"'; ?>><a href="#">Contact</span></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>