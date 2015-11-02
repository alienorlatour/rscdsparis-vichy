<!DOCTYPE html>
<html lang="en">

<head>

    <?php require_once 'panels/head.html'?>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.php"><span class="light">Rendez-vous à</span> Vichy </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
          <li>
            <a href="index.php?fr#accommodation"><i class="fa fa-angle-double-left"></i> Retour</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="content-section">
    <div class="intro-section">
      <div class="container">
        <div class="col-lg-8 col-lg-offset-2 text-center">
          <h2>Hotels</h2>
          <p>
            Nous avons négocié des tarifs spéciaux avec trois des hôtels proches du Palais des Congrès (voir ci-dessous). 
            Pour bénéficier de ces tarifs, il suffit de mentionner à l’hôtel de votre choix que vous participez au 
            weekend de danses écossaises de Pâques 2016. Ces offres ne sont disponibles qu'à travers une réservation 
            directe auprès de l'hôtel et non par des sites de réservation tels que Booking ou Hotels.com.
          </p>
          <p>Peu d’hôtels ont leur propre parking, mais il y a des parkings publics de 7 à 10 euros la nuit, 
          et vous pouvez demander à votre hôtel s’il est possible de se garer dans la rue.</p>
          <a href="#map" class="btn btn-default btn-lg page-scroll"><i class="fa fa-map-marker fa-fw"></i> <span
            class="network-name">Voir la carte</span></a>
        </div>
      </div>
    </div>
  </section>

  <section class="content-section">
    <div class="intro-section">
      <div class="separator col-md-12">
        <p class="col-md-offset-2 col-md-8 text-center">
          Prix d’une chambre avec petit déjeuner. Tarifs 2015, par nuit, par personne.<br />Les offres spéciales sont 
          disponibles jusqu’au 31 janvier 2016.
        </p>
        <div class="pricely-chart">
          <section class="col-xs-12">
            <ul class="pricely-pro">
              <li class="pricely-first-heading panel-success col-md-offset-1 col-md-2 text-center">
                <h3 class="panel-heading"></h3>
                <ul class="list-group">
                  <li class="list-group-item">Temps de marche</li>
                  <li class="list-group-item">Chambre à 2</li>
                  <li class="list-group-item">Chambre simple</li>
                  <li class="list-group-item">Taxe de séjour</li>
                  <li class="list-group-item">Parking</li>
                  <li class="list-group-item">Adresse</li>
                  <li class="list-group-item">Tél.</li>
                </ul>
              </li>

              <li class="pricely-inner panel-info col-xs-6 col-md-3 text-center">
                <h3 class="panel-heading">
                  <span class="pricely-label">Aletti<br />****
                  </span> <a href="http://www.hotel-aletti.fr/en/" class="btn btn-info" target="_blank">Site web</a>
                </h3>
                <ul class="list-group">
                  <li class="list-group-item">2 min.</li>
                  <li class="list-group-item">50€</li>
                  <li class="list-group-item">90€</li>
                  <li class="list-group-item">2€</li>
                  <li class="list-group-item">200m, 7€/jour</li>
                  <li class="list-group-item">3 place Joseph Aletti</li>
                  <li class="list-group-item">+33 (0)4 70 30 20 20</li>
                </ul>
              </li>

              <li class="pricely-inner panel-success col-xs-6 col-md-3 text-center">
                <h3 class="panel-heading">
                  <span class="pricely-label">De Grignan<br />***
                  </span> <a href="http://www.hoteldegrignan.fr/" class="btn btn-success" target="_blank">Site web</a>
                </h3>
                <ul class="list-group">
                  <li class="list-group-item">3 min.</li>
                  <li class="list-group-item">50€*, 43.50€</li>
                  <li class="list-group-item">89€*, 78€</li>
                  <li class="list-group-item">1.25€</li>
                  <li class="list-group-item">Gratuit (20 places)</li>
                  <li class="list-group-item">7 place Sévigné</li>
                  <li class="list-group-item">+33 (0)4 70 32 08 11</li>
                </ul>
              </li>

              <li class="pricely-inner panel-info col-xs-6 col-md-3 text-center">
                <h3 class="panel-heading">
                  <span class="pricely-label">Hotel Moderne<br />**
                  </span> <a href="http://www.hotelmoderne-vichy.com/" class="btn btn-info" target="_blank">Site web</a>
                </h3>
                <ul class="list-group">
                  <li class="list-group-item">7 min.</li>
                  <li class="list-group-item">39.30€</li>
                  <li class="list-group-item">54.30€ / 46.30€(mini)</li>
                  <li class="list-group-item">0.70€</li>
                  <li class="list-group-item">200m</li>
                  <li class="list-group-item">8 Max Durand Fardel</li>
                  <li class="list-group-item">+33 (0)4 70 31 20 21</li>
                </ul>
              </li>
            </ul>
          </section>
        </div>
        <p class="col-md-offset-2 col-md-8 text-center small">
          * L’Hotel de Grignan propose des chambres Premium récemment rénovées et modernisées (20m<sup>2</sup>) ainsi que des chambres standard.
        </p>
      </div>
    </div>
  </section>


  <!-- Map Section -->
  <div id="map"></div>

  <!-- Footer -->
  <footer>
    <div class="container text-center">
      <p>&copy; 2015 RSCDS Paris Branch</p>
    </div>
  </footer>

  <!-- jQuery and bootstrap -->
  <script src="rsrc/js/jquery.js"></script>
  <script src="rsrc/js/bootstrap.min.js"></script>
  <script src="rsrc/js/jquery.easing.min.js"></script>
  <!-- Google Maps API Key -->
  <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDVXvIpUizo4p8fIdP7CS1TPH40HFI8Qo&sensor=false"></script>
  <!-- Custom Theme JavaScript -->
  <script src="rsrc/js/grayscale-hotels.js"></script>

</body>

</html>
