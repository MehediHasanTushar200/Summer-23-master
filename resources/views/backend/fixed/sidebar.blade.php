<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">



                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            {{-- @if(auth()->user()->user_type =='employee') --}}
                         
                           {{-- @endif --}}
                            
                            @if(auth()->user()->user_type =='admin')
                            

                            <a class="nav-link" href="{{route('dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            

                            <a class="nav-link" href="{{route('Property')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Property
                            </a>
                            
                            
                           
                            <a class="nav-link" href="{{route('Booking')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Booking
                            </a>
                            
                            <a class="nav-link" href="{{route('all')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                all Report
                            </a>
                            <a class="nav-link" href="{{route('Client')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Client
                            </a>
                            <a class="nav-link" href="{{route('backend.contact.us')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Contact
                            </a>
                           
                            @endif
                            <a class="nav-link" href="{{route('Project')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Project
                            </a>
                           
                            
                            
                          
                            {{-- <a class="nav-link" href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Contact us
                            </a> --}}
                       
                       
                           
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                           

                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    
  
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>