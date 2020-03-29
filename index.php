<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TIP YOUR LOCAL</title>

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/brands.min.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"></script>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">

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
            <li class="active">
                <a href="./index">Startseite</a>
            </li>
            <li>
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
                Unterstütze dein Lokal mit einem Trinkgeld
            </h1>

            <div style="height: 50px"></div>

            <div class="col-sm">
                <img src="img/schwarze.jpg" class="img-fluid col-9">

                <div style="height: 50px"></div>

                <p>
                    Durch die aktuellen Gegebenheiten des Coronaviruses können viele Bars, Restaurants und andere Geschäfte leider nicht Ihrer Tätigkeit nachgehen, und stehen damit leider auch vor der Frage wie es wirtschaftlich weiter gehen soll.
                    Damit diese Geschäfte und Lokale nach der Quarantänezeit auch wieder für uns geöffnet haben, soll diese Webseite die Möglichkeit bieten diese Unternehmen individuell zu unterstützen und Geld zu spenden.
                    Dabei wird die Gesamtheit des getippten Geldes (abzüglich der Paypal Gebühr) direkt an das entsprechende Lokal per Paypal überwiesen.
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
                        <img src="img/main_menucard.jpg" class="small_image img-fluid">
                        <div style="height: 20px"></div>
                        <h2>Menükarte</h2>
                        <p>Du willst einem Lokal etwas gutes tun? Hier kannst Du direkt dein Lokal auswählen und die gewünschte Summe an das Lokal spenden.</p>
                        <div style="height: 30px"></div>
                        <a href="./company_selector" class="btn btn-info" role="button">ZUM TIPPEN</a>
                        <div style="height: 100px"></div>
                    </div>
                    <div class="col-sm">
                        <img src="img/main_companies.jpg" class="small_image img-fluid">
                        <div style="height: 20px"></div>
                        <h2>Lokal</h2>
                        <p>Du besitzt ein Lokal und möchtest Spenden erhalten? Registriere Dich hier, damit Du für deine Kunden auffindbar wirst.</p>
                        <div style="height: 30px"></div>
                        <a href="./register" class="btn btn-info" role="button">REGISTRIEREN</a>
                        <div style="height: 100px"></div>
                    </div>
                </div>
            </div>

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