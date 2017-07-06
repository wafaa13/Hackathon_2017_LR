<!DOCTYPE html>
<html>
    <head>
        <title>Hackathon</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

    <!-- ============================ -->
    <!-- ========== Navbar ========== -->
    <!-- ============================ -->

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <!-- Navbar responsive -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">CoustaData</a>
        </div>

        <!-- navbar -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="demarche.php">La démarche</a></li>
            <li><a href="visuIndex.php">Visualisation des données</a></li>
            <li><a href="utiliserPlateforme.php">Utiliser la plateforme</a></li>
            <li><a href="contactezNous.php">Contactez-nous</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="mentionsLegales.php">Mentions légales</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <?php 
        if(isset($_POST['submit'])){
            $to = "claire.lozano@live.fr"; // this is your Email address
            $from = $_POST['emailForm']; // this is the sender's Email address
            $first_name = $_POST['prenomForm'];
            $last_name = $_POST['nomForm'];
            $subject = $_POST['sujetForm']; 
            $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['messageForm'];
            $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['messageForm'];

            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to,$subject,$message,$headers);
            mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
            echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
            header('Location: messageSent.php'); // marche pas --' 
            // You can also use header('Location: thank_you.php'); to redirect to another page.
        }
    ?>

    <!-- ============================ -->
    <!-- =========== Body =========== -->
    <!-- ============================ -->
    <body>
        <div class="divContent">
            <div class="page-header">
                <h1>Contactez-nous</h1>
            </div>
            <form action="" method="post">
                <div class="form-group">
                    <label for="nomForm">Nom *</label>
                    <input type="text" class="form-control formContactInput" id="nomForm" name="nomForm">
                </div>
                <div class="form-group">
                    <label for="prenomForm">Prénom *</label>
                    <input type="text" class="form-control formContactInput" id="prenomForm" name="prenomForm">
                </div>
                <div class="form-group">
                    <label for="emailForm">Email *</label>
                    <input type="email" class="form-control formContactInput" id="emailForm" name="emailForm">
                </div>
                <div class="form-group">
                    <label>Sujet</label>
                    <input type="text" class="form-control formContactInput" id="sujetForm" name="sujetForm">
                </div>
                <div class="form-group">
                    <label for="messageForm">Message *</label>
                    <textarea id="messageForm" name="messageForm" class="form-control formContactInput" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Envoyer</button>
            </form>
            </br>
            </br>
        </div>
    </body>


    <!-- ============================ -->
    <!-- ========== Footer ========== -->
    <!-- ============================ -->
    <a href="#top"><div class="topHalfCircle">
        <span id="arrowFooter" class="glyphicon glyphicon-menu-up"></span>
    </div></a>

    <script type="text/javascript">
        $("a[href='#top']").click(function() {
            $("html, body").animate({ scrollTop: 0 }, "slow");
        });
    </script>
    
    <footer>

    </footer>


    <!-- ============================ -->
    <!-- ======== Javascript ======== -->
    <!-- ============================ -->
    <script type="text/javascript"></script>


    <!-- ============================ -->
    <!-- ========== Import ========== -->
    <!-- ============================ -->  

   

</html>