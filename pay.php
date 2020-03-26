<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TIP YOUR LOCAL - BEZAHLEN</title>

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/register.css">

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

    <script type="text/javascript" src="js/index.js"></script>

    <script
            src="https://www.paypal.com/sdk/js?client-id=ARU7xpc4LH-KbJpJlmWDZGpAMx0rBBz6W_l5Ow0SEiP3oilZ8tPD-u0lfAkne43lbuwTZHJ4XeaFGbd-&currency=EUR"> // Required.
    </script>

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

            <?php
            session_start();
            include './helper/db_connect.php';

            $_SESSION['LastRequest'] = $_SERVER['REQUEST_URI'].$_SERVER['QUERY_STRING'];


            if(!isset($_GET['id']) || !isset($_GET["amount"])){
                echo '<div class="alert alert-danger" role="alert">
                        UUPS, da ist leider ein Fehler aufgetreten!
                    </div>';
                return;
            }

            $restaurant_id = $_GET["id"];
            $amount = $_GET["amount"];
            if($amount < 0 || !is_numeric($amount)){
                echo '<div class="alert alert-danger" role="alert">
                        UUPS, da ist leider ein Fehler aufgetreten!
                    </div>';
                return;
            }

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
                };
            };

            ?>

            <h1>
                Zahlung von <?php echo $amount; ?> € an <?php echo $company_name; ?>
            </h1>
            <div style="height: 50px"></div>

            <div id="paypal-button" style="width: 50%"></div>
            <div id="paypal-button-container"></div>
        </div>
    </div>

    <script>

        $(document).ready(function () {

            $(document).ready(function () {
                paypal.Buttons({
                    createOrder: function (data, actions) {
                        $('.overlay').addClass('active');
                        // This function sets up the details of the transaction, including the amount and line item details.
                        return actions.order.create({
                            purchase_units: [{
                                seller_protection: "NOT_ELIGIBLE",
                                disbursement_mode: "INSTANT",
                                description: "Tipped <?php echo $amount; ?> € to <?php echo $company_name; ?>",
                                amount: {
                                    currency_code: 'EUR',
                                    value: '<?php echo $amount; ?>'
                                },
                                payee: {
                                    email_address: '<?php echo $paypal_mail; ?>'
                                }
                            }]
                        });
                    },
                    onApprove: function (data, actions) {
                        // This function captures the funds from the transaction.
                        return actions.order.capture().then(function (details) {
                            // This function shows a transaction success message to your buyer.
                            var payer_email = details.payer.email_address;
                            var payer_id = details.payer.payer_id;
                            var address = details.payer.address;
                            var given_name = details.payer.given_name;
                            var surname = details.payer.surname;
                            var amount = details.purchase_units[0].amount.value;
                            postForm('./pay_success', {
                                receiver_id: <?php echo $restaurant_id ?>,
                                payer_email: payer_email,
                                payer_id: payer_id,
                                address: address,
                                given_name: given_name,
                                surname: surname,
                                amount: amount
                            });
                        });
                    }
                }).render('#paypal-button-container');
                //This function displays Smart Payment Buttons on your web page.


                function postForm(path, params, method) {
                    method = method || 'post';

                    var form = document.createElement('form');
                    form.setAttribute('method', method);
                    form.setAttribute('action', path);

                    for (var key in params) {
                        if (params.hasOwnProperty(key)) {
                            var hiddenField = document.createElement('input');
                            hiddenField.setAttribute('type', 'hidden');
                            hiddenField.setAttribute('name', key);
                            hiddenField.setAttribute('value', params[key]);

                            form.appendChild(hiddenField);
                        }
                    }

                    document.body.appendChild(form);
                    form.submit();
                }

            });


            function postForm(path, params, method) {
                method = method || 'post';

                var form = document.createElement('form');
                form.setAttribute('method', method);
                form.setAttribute('action', path);

                for (var key in params) {
                    if (params.hasOwnProperty(key)) {
                        var hiddenField = document.createElement('input');
                        hiddenField.setAttribute('type', 'hidden');
                        hiddenField.setAttribute('name', key);
                        hiddenField.setAttribute('value', params[key]);

                        form.appendChild(hiddenField);
                    }
                }

                document.body.appendChild(form);
                form.submit();
            }

        });
    </script>

</div>

</body>

</html>
