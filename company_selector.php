<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TIP YOUR LOCAL - UNTERNEHMEN</title>

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/brands.min.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"></script>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/common.css">

    <!-- Font Awesome JS -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/brands.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>    

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>

    

    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/company_selector.js"></script>

    <style>
        .dataTables_filter {
            float: right !important;
        }
        .dataTables_length{
            float: left !important;
        }

        tr{
            cursor: pointer;
        }

        table.table-bordered.dataTable tbody th, table.table-bordered.dataTable tbody td {
            word-break: break-all;
        }

        .photo {
            border-radius: 45px;
        }

        .name {
            font-weight: 700;
        }

        .img-fluid{
            max-width: 150px
        }

    </style>


</head>

<body>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header"  id="dismiss_header">
            <h3>Menü</h3>
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>
        </div>


        <ul class="list-unstyled components">
            <li>
                <a href="./index">Startseite</a>
            </li>
            <li class="active">
                <a href="./company_selector">Tippen/Spenden</a>
            </li>
            <li>
                <a href="./register">Lokal registrieren</a>
            </li>
            <li>
                <a href="./about">Über</a>
            </li>
        </ul>
        <ul id="impressum" class="list-unstyled components">
            <li>
                <a href="./impressum">Impressum</a>
            </li>
        </ul>


    </nav>



    <div class="overlay"></div>

    <nav class="navbar navbar-light bg-light">
        <div class="navbar-nav ">
            
        <button class="btn btn_menu" id="sidebarCollapse">
            <i class="fa fa-bars"></i>
            Menu
        </button></div>

        <div class="navbar-nav col">
            <a class="navbar-brand" href="./index">TIP YOUR LOCAL</a>
        </div>
    </nav>

    <!-- Page Content  -->
    <div class="container">
    

        <div class="col-md-12">

            <h1>
                Wähle dein zu unterstützendes Unternehmen:
            </h1>
            <div style="height: 50px"></div>
    
            <input class="search form-control col-md-3" placeholder="Suchen" id="company_search" />       
            <div style="height: 30px"></div>

            <div class="list-group list">
                <?php
                    include './helper/db_connect.php';
                    $conn = OpenCon();

                    if($stmt = $conn->prepare("SELECT id, company_name, address, PLZ, town, email, image_url FROM restaurants WHERE activated = 1 AND public = 1")){
                        $stmt->execute();
                        $stmt->bind_result($id, $company_name, $address, $PLZ, $town, $email, $image_url);

                        while ($stmt->fetch()) { // For each row
                            if(!$image_url){
                                $image_url = './img/default_bar_image.jpg';
                            }

                            echo '
                                    <a href="./menu?id=' . $id . '" class="list-group-item">
                                    <div class="row">
                                        <div class="col-xs col-md-2">
                                            <div style="height: 15px"></div>
                                            <img src="' . $image_url . '" class="img-fluid">
                                            <div style="height: 15px"></div>
                                        </div>
                                        <div class="col-xs col-md-10">
                                            <div style="height: 15px"></div>
                                            <div class="col text-left mt-2">
                                                <h4 class="list-group-item-heading text-left">' . $company_name . '</h4>
                                                <p class="list-group-item-text text-left">' . $address . '</br>' . $PLZ . ' ' . $town . '</p>
                                            </div>
                                            <div style="height: 15px"></div>
                                        </div>
                                    </div>
                                    </a>
                                ';
                        }
                    };
                ?>
            </div>
        </div>

        <div style="height: 100px"></div>
    </div>
    <footer class="page-footer font-small blue">
        <a class="btn btn_sm" id="sidebarCollapse" href="https://www.facebook.com/tipyourlocal">
            <i class="fab fa-facebook fa-2x"></i>
        </a>
        <a class="btn btn_sm" id="sidebarCollapse" href="https://www.instagram.com/tipyourlocal.berlin/">
            <i class="fab fa-instagram fa-2x"></i>
        </a>
        <a class="btn btn_sm" id="sidebarCollapse" href="https://www.linkedin.com/company/tip-your-local">
            <i class="fab fa-linkedin fa-2x"></i>
        </a>
    </footer>
</div>

</body>

</html>