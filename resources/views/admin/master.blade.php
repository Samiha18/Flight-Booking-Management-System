<!DOCTYPE html>
<html lang="en">
    <head>
    <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Flight Booking Management System</title>

        @notifyCss

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{url('/backend/')}}/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>





        


    </head>
    <body class="sb-nav-fixed">
   
   
    <x-notify::notify />


        @include('Admin.partial.header')
        








        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    
                
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"> admin panel</div>
                            <a class="nav-link" href="{{route('dashboard.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dasboard
                            </a>
                            
                            <a class="nav-link" href="{{route('user.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Users 
                            </a>

                            <a class="nav-link" href="{{route('passenger.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Passenger
                            </a>

                            <a class="nav-link" href="{{route('airport.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Airport
                            </a>


                            <a class="nav-link" href="{{route('airlines.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Airlines
                            </a>


                            <a class="nav-link" href="{{route('booking.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Booking
                            </a>
                            
                            
                    <a class="nav-link" href="{{route('flights.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Flights
                            </a>



                            
                        <a class="nav-link" href="{{route('seat.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Seat
                            </a>


                            
                           
                         
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                          
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    
                                  
                               
                                </nav>
                            </div>
                      
                    </div>
                  
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    
                          
                            
                        </div>
                        @yield('content')
                    </div>
                    
                </main>
           
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('/backend/')}}/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{url('/backend/')}}/assets/demo/chart-area-demo.js"></script>
        <script src="{{url('/backend/')}}/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{url('/backend/')}}/js/datatables-simple-demo.js"></script>

        @notifyJs
    </body>
</html>
