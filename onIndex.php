<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF"UTF-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>V-International Hotel </title>
</head>

<body> 
    
<nav class="navbar navbar-expand-lg navbar-light bg-White px-lg-3 py-lg-2  ">
  <div class="container-fluid">
    <a class="navbar-brand" href="onlindex.php">V-International hotel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>                
        <li class="nav-item">
          <a class="nav-link" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Facilities</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <button type="button" class="btn btn-outline-dark  shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="LoginModal">
         loginModal
          
</button>
      </form>
    </div>
  </div>
</nav>



<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <h5 class="modal-title"  >
          <i class="bi bi-person"></i> User login 
       </h5>
        <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
        <form>
  <div class="mb-3">
           <label  class="form-label">Email address</label>
            <input type="email" class="form-control shadow none">
         </div>
     <div class="d-flex aligin-items">
             <label  class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
              <a href="javascript: void(0)"> Forgot password?</a>
               
  </div>
        
        <button type="submit" class="btn btn-primary shadaw-none">LOGIN</button>


</form>
      </div>
      