<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TIP YOUR LOCAL - REGISTRIERT</title>

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/brands.min.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"></script>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/register.css">

    <!-- Font Awesome JS -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/brands.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>    

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript" src="js/index.js"></script>


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
            <li>
                <a href="./company_selector">Tippen/Spenden</a>
            </li>
            <li class="active">
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


        <?php
        session_start();

        $RequestSignature = $_SERVER['REQUEST_URI'].$_SERVER['QUERY_STRING'];
        if(strpos($_SESSION['LastRequest'], 'tipyourlocal.com/register') !== true && $_SESSION['LastRequest'] == $RequestSignature){
            $_SESSION['LastRequest'] = $RequestSignature;
            echo '<div class="alert alert-danger" role="alert">
                    Leider ist ein Fehler aufgetreten.
                </div>';
            return;
        }
        $_SESSION['LastRequest'] = $RequestSignature;

        if ( !isset($_POST['company_name_input']) || !isset($_POST['name_input']) || !isset($_POST['adress_input']) || !isset($_POST['plz_input'])
            || !isset($_POST['city_input']) || !isset($_POST['email_input']) || !isset($_POST['paypal_input'])){
            echo '<div class="alert alert-danger" role="alert">
                    Leider ist ein Fehler aufgetreten.
                </div>';
            return;
        }

        include './helper/db_connect.php';
        $conn = OpenCon();


        $company_name_input = $_POST['company_name_input'];
        $name_input = $_POST['name_input'];
        $adress_input = $_POST['adress_input'];
        $plz_input = $_POST['plz_input'];
        $city_input = $_POST['city_input'];
        $email_input = $_POST['email_input'];
        $paypal_input = $_POST['paypal_input'];
        $phone_input = $_POST['phone_input'];

        $query = 'INSERT INTO restaurants (company_name, private_name, address, PLZ, town, email, paypal_mail, phone_number, image_url) values (?, ?, ?, ?, ?, ?, ?, ?, "")';
        if ($stmt = $conn->prepare($query)) {
            try {
                $stmt->bind_param("ssssssss", strval($company_name_input), strval($name_input),
                    strval($adress_input), strval($plz_input), strval($city_input), strval($email_input), strval($paypal_input), strval($phone_input));
                $stmt->execute();

                if($stmt->affected_rows != 1){
                    echo '<div class="alert alert-danger" role="alert">
                        Leider ist ein Fehler aufgetreten.
                    </div>';
                    return;
                }
            } catch(PDOException $e){
                echo '<div class="alert alert-danger" role="alert">
                        Leider ist ein Fehler aufgetreten.
                    </div>';
                return;
            }
        }

        ?>

        <div class="col-md-12">
            <h1>
                Registrierung als Unternehmen
            </h1>

            <div style="height: 50px"></div>

            <div class="col-sm">
                <div style="height: 50px"></div>

                <p>
                    Vielen Dank für deine Registrierung. Deine Daten werden geprüft und falls keine Probleme damit bestehen schnellst möglich veröffentlicht!
                </p>
                <div style="height: 30px"></div>
            </div>

            <div style="height: 100px"></div>
        </div>
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