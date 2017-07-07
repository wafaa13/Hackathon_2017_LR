<!DOCTYPE html>
<html>
    <head>
        <title>Hackathon</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link rel="stylesheet" type="text/css" href="../style/styleVisu.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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


    <!-- ============================ -->
    <!-- =========== Body =========== -->
    <!-- ============================ -->
    <body>
        <div class="divContent">

            <!-- <div class="navbar navTitleIcon">
                <div class="navbar-inner">
                    <ul class="navTitleIcons">
                        <li id="titleIcon1" class="titleIcons">Citoyennete</li>
                        <li id="titleIcon2" class="titleIcons">Déplacement</li>
                        <li id="titleIcon3" class="titleIcons">Espace Public</li>
                        <li id="titleIcon4" class="titleIcons">Finance</li>
                        <li id="titleIcon5" class="titleIcons">Gestion Interne</li>
                        <li id="titleIcon6" class="titleIcons">Jeunesse, sport et culture</li>
                        <li id="titleIcon7" class="titleIcons">Référentiel Géographique</li>
                        <li id="titleIcon8" class="titleIcons">Urbanisme et politique de la ville</li>
                    </ul>
                </div>
            </div>
            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="navIcons">
                        <li class=""><a href="#" id="iconsNav1" title="Citoyennete" class="glyphicon glyphicon-user iconsNav"></a></li>
                        <li class=""><a href="#" id="iconsNav2" title="Déplacement" class="glyphicon glyphicon-road"></a></li>
                        <li class=""><a href="#" id="iconsNav3" title="Espace Public" class="glyphicon glyphicon-tree-deciduous"></a></li>
                        <li class=""><a href="#" id="iconsNav4" title="Finance" class="glyphicon glyphicon-euro"></a></li>
                        <li class=""><a href="#" id="iconsNav5" title="Gestion Interne" class="glyphicon glyphicon-cog"></a></li>
                        <li class=""><a href="#" id="iconsNav6" title="Jeunesse, sport et culture" class="glyphicon glyphicon-headphones"></a></li>
                        <li class=""><a href="#" id="iconsNav7" title="Référentiel Géographique" class="glyphicon glyphicon-map-marker"></a></li>
                        <li class=""><a href="#" id="iconsNav8" title="Urbanisme et politique de la ville" class="glyphicon glyphicon-home"></a></li>
                    </ul>
                </div>
            </div> 

            </br>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Rechercher</button>
                </span>
            </div>
            <div class="page-header"></div>-->

            <div class="page-header">
            </br>
                <h2> Visualisation - 
                   <?php 
                    if ($_GET['resource'] == disponibilite_parking) {
                        echo "Parkings - Places disponibles"; 
                    } 
                    if ($_GET['resource'] == archive_fiche) {
                        echo "Archives"; 
                    }
                    if ($_GET['resource'] == bp_2017_fonction) {
                        echo "Budget prévisionnel - 2017 fonction"; 
                    }
                    if ($_GET['resource'] == population_2008) {
                        echo "Population 2008"; 
                    }?>
                </h2> 
            </div>

            </br>

            <div id="exTab2" class="container"> 
                <ul class="nav nav-tabs">
                    <li id="tab1"><a href="#1" data-toggle="tab">Graphe</a></li>
                    <li id="tab2"><a href="#2" data-toggle="tab">Tableau</a></li>
                    <li id="tab3"><a href="#3" data-toggle="tab">Carte</a></li>
                    <li id="tab4"><a href="#4" data-toggle="tab">Ligne temporelle</a></li>
                    <li id="tab5"><a href="#5" data-toggle="tab">Infos</a></li>
                    <li id="tab6"><a href="#6" data-toggle="tab">Télécharger</a></li>
                </ul>

                <div class="tab-content ">
                    <div class="tab-pane" id="1">
                        <div id='box1' class="boxVisu">
                            <h4 class="panel-title pull-left"></h4>

                            <div id="panel-body-0">
                                <select class="form-control select" id="selectChart"></select>
                                <select class="form-control select" id="select0"></select>
                                <a id="seeMoreChart0"><canvas id="myChart0" class="chart" height="1000" width="600"></canvas></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="2">
                        <div id='box2' class="boxVisu">
                            <h4 class="panel-title pull-left"></h4>

                            <div id="panel-body-1">
                                </br>
                                <select class="form-control" id="select1"></select>
                                </br>
                                <a id="seeMoreChart1"><canvas id="myChart1" class="chart"></canvas></a>
                            </div>
                        </div>
                    </div>
                  <div class="tab-pane" id="3">
                        <div id='box3' class="panel panel-default">
                            <h4 class="panel-title pull-left"></h4>

                            <div id="panel-body-2" class="panel-body form-group panelBody">
                                </br>
                                <select class="form-control" id="select2"></select>
                                </br>
                                <a id="seeMoreChart2"><canvas id="myChart2" class="chart"></canvas></a>
                            </div>
                        </div>
                  </div>
                  <div class="tab-pane" id="4">
                        <div id='box4' class="panel panel-default">
                            <h4 class="panel-title pull-left"></h4>

                            <div id="panel-body-3" class="panel-body form-group panelBody">
                                </br>
                                <select class="form-control" id="select3"></select>
                                </br>
                                <a id="seeMoreChart3"><canvas id="myChart3" class="chart"></canvas></a>
                            </div>
                        </div>
                  </div>
                  <div class="tab-pane" id="5">
                      <h3>Affichage des informations sur la donnée</h3>
                  </div>
                  <div class="tab-pane" id="6">
                      <h3>Affichage des liens de téléchargement</h3>
                  </div>
              </div>
            </div>             

            <div class="page-header">
                <h2>Partager </h2>
            </div>
            <p>Vous pouvez partager cette page sur facebook ainsi que twitter : </p>
            <div id="rs">
                
                <!-- FACEBOOK -->
                <div id="fb-root" class="rs"></div>
                <script>(
                    function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9&appId=778292025574313";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>

                <!-- TWITTER -->
                <div class="rs">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-size="large">Tweet</a> 
                    <script>
                        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
                    </script>
                </div>

                  <!-- Your share button code -->
                  <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Partager</a></div>
            </div>

            <div class="page-header">
                <h2>Commentaires </h2>
            </div>
            <div class="post-footer">
                <ul class="comments-list">
                    <li class="comment">
                        <div class="comment-body">
                            <div class="comment-heading">
                                <h4 class="user">Annonyme</h4>
                                <h5 class="time">Il y a 8 minutes</h5>
                            </div>
                            <p>Commentaire numéro 1</p>
                        </div>
                    </li>
                    <li class="comment">
                        <div class="comment-body">
                            <div class="comment-heading">
                                <h4 class="user">Open Data La Rochelle</h4>
                                <h5 class="time">Il y a 3 minutes</h5>
                            </div>
                            <p>Commentaire numéro 2</p>
                        </div>
                    </li>
                    <li class="comment">
                        <div class="comment-body">
                            <div class="comment-heading">
                                <h4 class="user">Annonyme</h4>
                                <h5 class="time">Il y a 2 minutes</h5>
                            </div>
                            <p>Commentaire numéro 3</p>
                        </div>
                    </li>
                </ul>
                <div class="input-group"> 
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                        <a href="#"><i class="glyphicon glyphicon-pencil"></i></a>  
                    </span>
                </div>
            </div>

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
    <script type="text/javascript">
        if (<?php echo '"' . $_GET['type'] . '"' ?> == "graph") {
            $("#1").addClass("active");
            $("#tab1").addClass("active");
        }

        if (<?php echo '"' . $_GET['type'] . '"' ?> == "tableau") {
            $("#2").addClass("active");
            $("#tab2").addClass("active");
        }

        if (<?php echo '"' . $_GET['type'] . '"' ?> == "info") {
            $("#5").addClass("active");
            $("#tab5").addClass("active");
        }
    </script>


    <!-- ============================ -->
    <!-- ========== Import ========== -->
    <!-- ============================ --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" />
    <script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="../draw.js"></script>
    <script type="text/javascript" src="../controller.js"></script>
    <script type="text/javascript" src="../visu.js"></script>
    <!--<script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" />

    <script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="../draw.js"></script>
    <script type="text/javascript" src="../controller.js"></script>-->

   

</html>
