<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | PG Life</title>
        
        <?php include "includes/header_links.php" ?>

        <link rel="stylesheet" href="css/property_list.css">
        <link href="css/dashboard.css" rel="stylesheet">

    </head>

    <body>
        
        <!-- Header -->
        <?php include "includes/header.php"; ?>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb py-2">
                <li class="breadcrumb-item">
                    <a href="index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Dashboard
                </li>
            </ol>
        </nav>

        <div class="page-container info-container">
            <div class="main-name">
                <h1>My Profile</h1>
            </div>
            <div class="info">
                <div class="profile-pic">
                    <i class="fas fa-user pic"></i>  
                </div>
                <div class="person-info">
                    <p><b>Aditya Sood</b></p>
                    <p>adityasood@gmail.com</p>
                    <p>2880382380</p>
                </div>
                <div class="edit-profile">
                    <a href=""><u>Edit Profile</u></a>
                </div>
            </div>
        </div>

        <div class="user-interested">
            <div> 
                <h1>
                    My Interested Properties
                </h1>
            </div>

            <div class="property-card row">
                <div class="image-container col-md-4">
                    <img src="img/properties/1/eace7b9114fd6046.jpg" />
                </div>
                <div class="content-container col-md-8">
                    <div class="row no-gutters justify-content-between">
                        <div class="star-container" title="4.8">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="interested-container">
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <div class="detail-container">
                        <div class="property-name">Ganpati Paying Guest</div>
                        <div class="property-address">Police Beat, Sainath Complex, Besides, SV Rd, Daulat Nagar, Borivali East, Mumbai - 400066</div>
                        <div class="property-gender">
                            <img src="img/unisex.png" />
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="rent-container col-6">
                            <div class="rent">Rs 8,500/-</div>
                            <div class="rent-unit">per month</div>
                        </div>
                        <div class="button-container col-6">
                            <a href="property_detail.html" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="property-card row">
                <div class="image-container col-md-4">
                    <img src="img/properties/1/1d4f0757fdb86d5f.jpg" />
                </div>
                <div class="content-container col-md-8">
                    <div class="row no-gutters justify-content-between">
                        <div class="star-container" title="4.5">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="interested-container">
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <div class="detail-container">
                        <div class="property-name">Navkar Paying Guest</div>
                        <div class="property-address">44, Juhu Scheme, Juhu, Mumbai, Maharashtra 400058</div>
                        <div class="property-gender">
                            <img src="img/male.png" />
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="rent-container col-6">
                            <div class="rent">Rs 9,500/-</div>
                            <div class="rent-unit">per month</div>
                        </div>
                        <div class="button-container col-6">
                            <a href="property_detail.html" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer-->
        <?php inlcude "inlcudes/fotter.php" ?>
    </body> 
</html>