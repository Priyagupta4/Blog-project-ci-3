<html>
    <head>
        <title> Article List</title>
        <!-- this is the css file which will help to load the ui in responsive way on browser and mobile applications  -->
        <!-- <link href="http://localhost/Blog_project/Assets/css/bootstrap.min.css" rel="stylesheet">  -->
        <!-- <link href="<?= base_url("Assets/css/bootstrap.min.css")
        ?>" rel="stylesheet">  -->
    <!-- thios tag is given by html helper function and can be used in replace of base_url-->
        <?= link_tag("Assets/css/bootstrap.min.css")?>  
        </head>
        <body>
            <!-- <h1>Todays Blog and articles</h1> -->
            <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

<!-- here will add the logot button and checks of session -->
 <?php 
 if($this->session->userdata('id'))

// if($this->session->userdata('id') =1 )
// print_r($_SESSION);die;
  {
    ?>
    <!-- <li> <a href="<?= base_url('admin/logout'); ?>" class="btn btn-danger" style ="">Logout</a></li
    >  -->

     <!-- alternate we can use anchor tag as well -->
     <li> <?= anchor('admin/logout', 'Logout', ['class' => 'btn btn-danger']); ?> </li>

    <?php
    }

 ?>


    <!-- <div class="collapse navbar-collapse" id="navbarColor01"> -->
      <!-- <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Login
            <span class="visually-hidden">(current)</span>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li> -->
      <!-- </ul> -->
      <!-- <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    <!-- </div> -->
  </div>
</nav>