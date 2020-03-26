<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->

    <title>TIP YOUR LOCAL - MENÜ</title>

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/menu.css">

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
    <script type="text/javascript" src="js/menu.js"></script>


</head>

<div>


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

            <?php

            include './helper/db_connect.php';

            if(!isset($_GET['id'])){
                echo '<div class="alert alert-danger" role="alert">
                        Unternehmen konnte nicht gefunden werden!
                    </div>';
                return;
            }

            $restaurant_id = $_GET["id"];

            $conn = OpenCon();

            if($stmt = $conn->prepare("SELECT id, company_name, address, PLZ, town, email, paypal_mail, phone_number FROM restaurants WHERE id = ? AND activated = 1 LIMIT 1")){
                $stmt->bind_param("s", $restaurant_id);
                $stmt->execute();
                $stmt->bind_result($id, $company_name, $address, $PLZ, $town, $email, $paypal_mail, $phone_number);
                $row = $stmt->fetch();

                if(!$row){
                    echo '<div class="alert alert-danger" role="alert">
                        Unternehmen konnte nicht gefunden werden!
                    </div>';
                    return;
                }
            }
            ?>

            <div class="col-md-12">
                    <h1>
                        Getränkekarte von <?php echo $company_name; ?>
                    </h1>

                    <div style="height: 50px"></div>

                    <div class="col-sm">

                        <img src="img/menu/menu_header.jpg" class="img-fluid col-lg-7">

                        <div style="height: 20px"></div>
                        <div class="mb-4">
                            <hr class="solid">
                        </div>
                        <div style="height: 50px"></div>
                        <div class="mb-4">
                            <hr class="solid">
                        </div>
                    </div>

                    <div class="row">
                        <div style="height: 50px"></div>
                        <div class="col-sm">
                            <img src="img/menu/shot.jpg" class="img-fluid col-lg-12">
                        </div>
                        <div class="col-sm">
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="row">
                                    <h2 class="col menu_item">Shot</h2>
                                    <h2 class="col price">2€</h2>
                                </div>
                            </div>
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="float-right">
                                    <button class="btn right order" data-value="2">Bestellen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 50px"></div>
                    <div class="mb-4">
                        <hr class="solid">
                    </div>

                    <div class="row">
                        <div style="height: 50px"></div>
                        <div class="col-sm">
                            <img src="img/menu/small_beer.jpg" class="img-fluid col-lg-12">
                        </div>
                        <div class="col-sm">
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="row">
                                    <h2 class="col menu_item">Kleines Bier</h2>
                                    <h2 class="col price">3.5€</h2>
                                </div>
                            </div>
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="float-right">
                                    <button class="btn right order" data-value="3.5">Bestellen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 50px"></div>
                    <div class="mb-4">
                        <hr class="solid">
                    </div>


                    <div class="row">
                        <div style="height: 50px"></div>
                        <div class="col-sm">
                            <img src="img/menu/big_beer.jpg" class="img-fluid col-lg-12">
                        </div>
                        <div class="col-sm">
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="row">
                                    <h2 class="col menu_item">Grosses Bier</h2>
                                    <h2 class="col price">5€</h2>
                                </div>
                            </div>
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="float-right">
                                    <button class="btn right order" data-value="5">Bestellen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 50px"></div>
                    <div class="mb-4">
                        <hr class="solid">
                    </div>

                    <div class="row">
                        <div style="height: 50px"></div>
                        <div class="col-sm">
                            <img src="img/menu/vine_glass.jpg" class="img-fluid col-lg-12">
                        </div>
                        <div class="col-sm">
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="row">
                                    <h2 class="col menu_item">Glas Wein</h2>
                                    <h2 class="col price">5€</h2>
                                </div>
                            </div>
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="float-right">
                                    <button class="btn right order" data-value="5">Bestellen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 50px"></div>
                    <div class="mb-4">
                        <hr class="solid">
                    </div>


                    <div class="row">
                        <div style="height: 50px"></div>
                        <div class="col-sm">
                            <img src="img/menu/vine_bottle.jpg" class="img-fluid col-lg-12">
                        </div>
                        <div class="col-sm">
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="row">
                                    <h2 class="col menu_item">Flasche Wein</h2>
                                    <h2 class="col price">10€</h2>
                                </div>
                            </div>
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="float-right">
                                    <button class="btn right order" data-value="10">Bestellen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 50px"></div>
                    <div class="mb-4">
                        <hr class="solid">
                    </div>


                    <div class="row">
                        <div style="height: 50px"></div>
                        <div class="col-sm">
                            <img src="img/menu/cocktail.jpg" class="img-fluid col-lg-12">
                        </div>
                        <div class="col-sm">
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="row">
                                    <h2 class="col menu_item">Cocktail</h2>
                                    <h2 class="col price">20€</h2>
                                </div>
                            </div>
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="float-right">
                                    <button class="btn right order" data-value="20">Bestellen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 50px"></div>
                    <div class="mb-4">
                        <hr class="solid">
                    </div>


                    <div class="row">
                        <div style="height: 50px"></div>
                        <div class="col-sm">
                            <img src="img/menu/vine_box.jpg" class="img-fluid col-lg-12">
                        </div>
                        <div class="col-sm">
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="row">
                                    <h2 class="col menu_item">Kiste Wein</h2>
                                    <h2 class="col price">50€</h2>
                                </div>
                            </div>
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="float-right">
                                    <button class="btn right order" data-value="50">Bestellen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 50px"></div>
                    <div class="mb-4">
                        <hr class="solid">
                    </div>


                    <div class="row">
                        <div style="height: 50px"></div>
                        <div class="col-sm">
                            <img src="img/menu/vine_fass.jpg" class="img-fluid col-lg-12">
                        </div>
                        <div class="col-sm">
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="row">
                                    <h2 class="col menu_item">Fass Wein</h2>
                                    <h2 class="col price">100€</h2>
                                </div>
                            </div>
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="float-right">
                                    <button class="btn right order" data-value="100">Bestellen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 50px"></div>
                    <div class="mb-4">
                        <hr class="solid">
                    </div>


                    <div class="row">
                        <div style="height: 50px"></div>
                        <div class="col-sm">
                            <img src="img/menu/dagobert.jpg" class="img-fluid col-lg-12">
                        </div>
                        <div class="col-sm">
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="row">
                                    <h2 class="col menu_item">Freier Betrag</h2>
                                    <div class="col form-group">
                                        <div class="input-group">
                                            <input type="number" id="freevalue_field" class="form-control" placeholder="Freier Betrag" value="200" min="0" step="1" data-number-to-fixed="2" data-number-stepfactor="100" style="text-align: right">
                                            <span class="input-group-text">€</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="height: 30px"></div>
                            <div class="container">
                                <div class="float-right">
                                    <button class="btn right order freetext">Bestellen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="height: 50px"></div>
                    <div class="mb-4">
                        <hr class="solid">
                    </div>

                    <div style="height: 100px"></div>
                </div>
            </div>
            <footer class="page-footer font-small blue"></footer>
        </div>
    </div>
</body>

</html>