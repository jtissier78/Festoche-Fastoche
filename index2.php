<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
<<<<<<< HEAD
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css">
=======
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <!-- Stylesheet of calendar -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
>>>>>>> c817c355fc478d98635f4ce629133ab699ac3124

  <!-- Script jquery -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <!-- Script date rangepicker -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

  <script src="js/datePicker.js"></script> <!-- TODO Insert <img id="datepicker" src="http://jqueryui.com/resources/demos/datepicker/images/calendar.gif" alt="Date" > where we want to use DatePicker. -->
</head>

<body>
<!-- HEADER -->
    <header>
        <div class= "container-fluid">
          <!-- <div class="row "> -->
            <div class="col-sm-12 ">
              <div class="row">
                <div class="col-xs-2 logo"> 
                <img class="img-fluid rounded" src="icons8.png" alt="photo de profil">
                </div>
                <div class="col vide"> 
                </div>
            <!--   </div> -->
            </div>  
          </div>
        </div>
    </header>

<main>
 
  <div class="contener-fluid col-sm-12 main"> 
      <div class="row main mr-1 ml-1">
            <!-- navbar -->
          <div class="container-fluid sidenav">
            <div class="row main">
                <div class="col-2 collapse show d-md-flex pt-2 pl-0 min-vh-100" id="sidebar">
                    <ul class="nav flex-column flex-nowrap overflow-hidden">
                        <li class="nav-item">
                            <a class="nav-link text-truncate" href="#"><i class="fa fa-home"></i> <span class="d-none d-sm-inline">Overview</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link collapsed text-truncate" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><i class="fa fa-table"></i> <span class="d-none d-sm-inline"><!-- Search form -->
                            <form class="form-inline active-cyan-4">
                            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                                aria-label="Search">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            </form></span></a>
                            <div class="collapse" id="submenu1" aria-expanded="false">
                                <ul class="flex-column pl-2 nav">
                                    <li class="nav-item"><a class="nav-link py-0" href="#"><span>Orders</span></a></li>
                                    <li class="nav-item">
                                        <a class="nav-link collapsed py-1" href="#submenu1sub1" data-toggle="collapse" data-target="#submenu1sub1"><span>Customers</span></a>
                                        <div class="collapse" id="submenu1sub1" aria-expanded="false">
                                            <ul class="flex-column nav pl-4">
                                                <li class="nav-item">
                                                    <a class="nav-link p-1" href="#">
                                                        <i class="fa fa-fw fa-clock-o"></i> Daily </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-1" href="#">
                                                        <i class="fa fa-fw fa-dashboard"></i> Dashboard </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-1" href="#">
                                                        <i class="fa fa-fw fa-bar-chart"></i> Charts </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link p-1" href="#">
                                                        <i class="fa fa-fw fa-compass"></i> Areas </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-bar-chart"></i> <span class="d-none d-sm-inline">Analytics</span></a></li>
                        <li class="nav-item"><a class="nav-link text-truncate" href="#"><i class="fa fa-download"></i> <span class="d-none d-sm-inline">Export</span></a></li>
                    </ul>
                </div>
                <!-- colone resultats -->
                <div class="col-10 pt-2 text-center result">
                  <h2><br>
                      <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a>Recherches par type et ville</h2>
                      <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Selection
                     </button>

<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="dropdown open">
  <button class="btn btn-secondary dropdown-toggle"
          type="button" id="dropdownMenu3" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">

                        </button>
                        <div class="dropdown-menu">
                            <h6 class="dropdown-header">Dropdown header</h6>
                            <a class="dropdown-item" href="#!">Action</a>
                            <a class="dropdown-item" href="#!">Another action</a>
                        </div>
                    </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
                                        <br><br>
                 <div class="col-12 pt-3 titreresult">
                  <h2>
                      <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a>kikouuu</h2>
                  <h6 class="hidden-sm-down"></h6>
                </div>
                  <!-- colone resultats -->
                  <div class="col-12 pt-3 mt-1 resultrecherche">
                  <h2>
                      <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a>  </h2>
                  <h6 class="hidden-sm-down"></h6>
                </div>
                </div>  
            </div>
        </div>
     </div>
  </div>
  
</main>

<!-- FOOTER -->
    <footer>
      <div class="container-fluid"> 
        <div class="row "> 
          <div class="col-sm-12 "> 
          </div>
        </div>
        </div>    
        <p>Footer</p>
    </footer>

</body>
</html>





 
