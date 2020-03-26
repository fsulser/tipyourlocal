
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TIP YOUR LOCAL - THANK YOU</title>

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/register.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="./js/index.js"></script>

</head>

<body>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div id="dismiss">
            <i class="fas fa-arrow-left"></i>
        </div>

        <div class="sidebar-header">
            <h3>Menü</h3>
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="btn btn_menu" id="sidebarCollapse"><i class="fa fa-bars"></i> Menu</button>
        </div>
    </nav>

    <!-- Page Content  -->
    <div class="container">

        <?php
        session_start();

        if($_SERVER['REQUEST_METHOD'] != 'POST') {
            echo '<div class="alert alert-danger" role="alert">
                    Leider ist ein Fehler aufgetreten.
                </div>';
            return;
        }
        if(!isset($_POST['receiver_id']) || !isset($_POST['payer_email']) || !isset($_POST['payer_id']) || !isset($_POST['address']) || !isset($_POST['given_name']) || !isset($_POST['surname']) || !isset($_POST['amount']) ){
            echo '<div class="alert alert-danger" role="alert">
                    Leider ist ein Fehler aufgetreten.
                </div>';
            return;
        }

        $RequestSignature = $_SERVER['REQUEST_URI'].$_SERVER['QUERY_STRING'];
        if(strpos($_SESSION['LastRequest'], 'tipyourlocal.com/pay') !== true && $_SESSION['LastRequest'] == $RequestSignature){
            $_SESSION['LastRequest'] = $RequestSignature;
            echo '<div class="alert alert-danger" role="alert">
                    Leider ist ein Fehler aufgetreten.
                </div>';
            return;
        }
        $_SESSION['LastRequest'] = $RequestSignature;


        $receiver_id = $_POST['receiver_id'];
        $payer_email = $_POST['payer_email'];
        $payer_id = $_POST['payer_id'];
        $address = $_POST['address'];
        $given_name = $_POST['given_name'];
        $surname = $_POST['surname'];
        $amount = $_POST['amount'];

        include './helper/db_connect.php';
        $conn = OpenCon();

        $query = 'INSERT INTO payments (receiver_id, payer_email, payer_id, address, given_name, surname, amount) values (?, ?, ?, ?, ?, ?, ?)';
        if ($stmt = $conn->prepare($query)) {
            try {
                $stmt->bind_param("sssssss", strval($receiver_id), strval($payer_email), strval($payer_id), strval($address), strval($given_name), strval($surname), strval($amount));
                $stmt->execute();

                if($stmt->affected_rows != 1){
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
                Vielen Dank für Deine Unterstützung. Wir hoffen du konntest damit deinem Wunschunternehmen helfen
            </h1>
            <div style="height: 30px"></div>

            <div class="col-sm">

                <img src="./img/celebrate.jpg" class="img-fluid">

            </div>

            <div style="height: 100px"></div>
        </div>
    </div>
    <footer class="page-footer font-small blue"></footer>
</div>

</body>

</html>
