<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | PG Life</title>

        <?php
            include "includes/header_links.php";
        ?>

        <link href="css/index.css" rel="stylesheet">

    </head>

    <body>
        
        <!-- Header -->
        <?php
            include "includes/header.php";
        ?>
        <!--Header end-->

        <div class="main-img">
            <div class="img-container">
                <div class="heading-searchbar page-container">
                    <div class="img-element">
                            <h1>Happiness Per Square Foot</h1>
                    </div>
                    <div class="img-element">
                        <form id="search-form" action="property_list.php" method="GET">
                            <div class="input-group">
                                <div id="search-autocomplete" class="form-outline">
                                <input type="search" id="form1" class="form-control" placeholder="Enter your city to search for PGs" />
                                </div>
                                <button type="button" class="btn btn-secondary">
                                <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h2 class="cities-text">Major Cities</h2>
        </div>
        <div class="page-container">
            <div class="cities-container">
                <a href="property_list.php?city=Delhi">            
                    <div class="cities-image">
                            <img class="img-cities" src="img/delhi.png" alt="">
                    </div>
                </a>
                <a href="property_list.php?city=Mumbai">
                    <div class="cities-image">
                        
                            <img class="img-cities" src="img/mumbai.png" alt="">
                        
                    </div>
                </a>
                <a href="property_list.php?city=Bangalore">
                    <div class="cities-image">                        
                            <img class="img-cities" src="img/bangalore.png" alt="">                        
                    </div>
                </a>
                <a href="property_list.php?city=Hyderabad">
                    <div class="cities-image">
                            <img class="img-cities" src="img/hyderabad.png" alt="">
                    </div>
                </a>
            </div>
        </div>

        <div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="filter-heading" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="filter-heading">Filters</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <div class="modal-body">
                        <h5>Gender</h5>
                        <hr />
                        <div>
                            <button class="btn btn-outline-dark btn-active">
                                No Filter
                            </button>
                            <button class="btn btn-outline-dark">
                                <i class="fas fa-venus-mars"></i>Unisex
                            </button>
                            <button class="btn btn-outline-dark">
                                <i class="fas fa-mars"></i>Male
                            </button>
                            <button class="btn btn-outline-dark">
                                <i class="fas fa-venus"></i>Female
                            </button>
                        </div>
                    </div>
    
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-success">Okay</button>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- signup modal code -->
        <?php include "includes/signup_modal.php"; ?>
    
        <!-- login modal -->
        <?php include "includes/login_modal.php"; ?>

        <!--Footer-->
        <?php
            include "includes/fotter.php";
        ?>
    </body> 
</html>