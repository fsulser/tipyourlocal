<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TIP YOUR LOCAL</title>

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

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

        <div class="col-md-12">
            <h1>
                Unterstütze dein Lokal mit einem Trinkgeld
            </h1>

            <div style="height: 50px"></div>

            <div class="col-sm">
                <img src="img/main_header.jpg" class="img-fluid">

                <div style="height: 50px"></div>

                <p>
                    Durch die aktuellen Gegebenheiten des Coronaviruses können viele Bars, Restaurants und andere Geschäfte aktuell leider nicht Ihrer Tätigkeit nachgehen und stehen damit leider auch vor der Frage wie es wirtschaftlich weiter gehen soll.
                    Damit diese Geschäfte und Lokal nach der Quarantänezeit auch wieder für uns geöffnet haben bietet diese Webseite die Möglichkeit Bars individuell zu unterstützen und Geld zu spenden.
                </p>
                <div style="height: 30px"></div>

                <a href="./company_selector" class="btn btn-info" role="button">JETZT TIPPEN</a>

                <div style="height: 30px"></div>
            </div>

            <div class="mb-4">
                <hr class="solid">
            </div>
            <div style="height: 50px"></div>

            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <img src="img/main_menucard.png" class="small_image img-fluid">
                        <div style="height: 20px"></div>
                        <h2>Menükarte</h2>
                        <p>Du willst einem Lokal etwas gutes tun? Hier kannst Du direkt die gewünschte Summe auswählen und an das Lokal spenden.</p>
                        <div style="height: 30px"></div>
                        <a href="./company_selector" class="btn btn-info" role="button">ZUM TIPPEN</a>
                        <div style="height: 100px"></div>
                    </div>
                    <div class="col-sm">
                        <img src="img/main_companies.png" class="small_image img-fluid">
                        <div style="height: 20px"></div>
                        <h2>Lokal</h2>
                        <p>Du besitzt ein Lokal und möchten Spenden erhalten? Registriere Dich hier, damit Du für deine Kunden auffindbar wirst.</p>
                        <div style="height: 30px"></div>
                        <a href="./register" class="btn btn-info" role="button">REGISTRIEREN</a>
                        <div style="height: 100px"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <footer class="page-footer font-small blue"></footer>

</div>

</body>

</html>