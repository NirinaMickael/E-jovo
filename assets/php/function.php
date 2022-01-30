<?php
    function header_page(){
        return <<< HTML
        <header>
        <div class="container-nav">
            <nav class="navbar navbar-expand-sm navbar-dark bg-blue fixed-top container-fluid">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.html"><img src="" alt="cordova" srcset="" width="150px"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item"><a class="nav-link text" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link text" href="#">About Us</a></li>
                            <li class="nav-item"><a class="nav-link text" href="#">Blog</a></li>
                            <li class="nav-item"><a class="nav-link text" href="assets/login/login.php">Login</a></li>
                        </ul>
                        <form class="navbar-form navbar-right" id="header-search-form" role="search">
                            <div class="input-group">
                                
                                <input id="header-search-field" type="text" placeholder="Search '10.x' docs..." class="form-control hidden-xs text" autocomplete="off">
                            </div>
                        </form>
                  </div>
                </div>
              </nav>
        </div>
    </header>
HTML;
    }
?>