<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TIP YOUR LOCAL - ÜBER</title>

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/register.css">

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
    <script type="text/javascript" src="js/about.js"></script>


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
            <li>
                <a href="./register">Lokal registrieren</a>
            </li>
            <li class="active">
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
            <div class="row">
                <div class="col-md-auto">
                    <button class="btn btn_menu" id="sidebarCollapse">
                        <i class="fa fa-bars"></i>
                        Menu
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content  -->
    <div class="container">

        <div class="col-md-12">
            <h1>
                Über
            </h1>

            <div style="height: 50px"></div>

            <div class="col-sm">
                <p>Die Seite soll helfen Menschen die aufgrund der Sars-CoV-2 Grippepandemie nicht ihrer Tätigkeit nachgehen können und um unser aller Wohl zu schützen auf Ihr eigenes Glück verzichten müssen. Um diese Menschen zu Unterstützen wir hier die Möglichkeit geboten eine Spende zu leisten. Die Spenden werden in Ihrer Gesamtheit an die Unternehmen weitergeleitet.</p>
            </div>

            <div style="height: 50px"></div>
            <div class="mb-4">
                <hr class="solid">
            </div>

            <div style="height: 50px"></div>

            <p>
                Bei Fragen oder Problemen, melde dich gern bei:
                <a href="mailto:help@tipyourlocal.com" target="_blank" class="btn btn-primary">help@tipyourlocal.com</a>
            </p>

            <div style="height: 50px"></div>
            <div class="mb-4">
                <hr class="solid">
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <img src="img/spende.png" class="small_image img-fluid">
                    </div>
                    <div class="col-sm">
                        Möchtest du dem ersteller der Webseite eine kleine Spende entrichten um die Kosten zu decken dann kannst du das gern hier tun:
                        <div style="height: 30px"></div>
                        <div class="form-group">
                            <label for="freevalue_field">Wert eintragen</label>
                            <div class="input-group">
                                <input type="number" id="freevalue_field" class="form-control" placeholder="Freier Betrag" value="5" min="0" step="1" data-number-to-fixed="2" data-number-stepfactor="100" style="text-align: right">
                                <span class="input-group-text">€</span>
                            </div>
                        </div>

                        <div class="float-right">
                            <button class="btn right order freetext">Spenden</button>
                        </div>
                    </div>
                </div>
            </div>




            <div style="height: 100px"></div>
        </div>
    </div>
</div>

</body>

</html>