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
            <a href="index.php"><i class="fa fa-angle-double-left"></i> Back</a>
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
          <p>You will find below those hotels which are within walking distance of the Palais des Congrès. As an
            indication of price, current rates per room are shown for two people sharing.</p>
          <p>If you are travelling by car, few hotels have their own car park but public car parking is available at
            around 7€/10€ per night or check with the hotel on the ease of street parking.</p>
          <a href="#map" class="btn btn-default btn-lg page-scroll"><i class="fa fa-map-marker fa-fw"></i> <span
            class="network-name">See the map</span></a>
        </div>
      </div>
    </div>
  </section>


  <section class="content-section">
    <div class="intro-section">
      <div class="separator col-md-12">
        <div class="pricely-chart">
          <section class="col-xs-12">
            <ul class="pricely-pro">
              <li class="pricely-first-heading panel-success col-md-4 text-center">
                <h3 class="panel-heading"></h3>
                <ul class="list-group">
                  <li class="list-group-item">Walking time</li>
                  <li class="list-group-item">Room rates (2 people sharing)</li>
                  <li class="list-group-item">Breakfast</li>
                  <li class="list-group-item">Car park</li>
                  <li class="list-group-item">Address</li>
                  <li class="list-group-item">Tel.</li>
                </ul>
              </li>

              <li class="pricely-inner panel-info col-xs-6 col-md-2 text-center">
                <h3 class="panel-heading">
                  <span class="pricely-label">Aletti<br />****
                  </span> <a href="http://www.hotel-aletti.fr/en/" class="btn btn-info" target="_blank">Website</a>
                </h3>
                <ul class="list-group">
                  <li class="list-group-item">2 min.</li>
                  <li class="list-group-item">96€</li>
                  <li class="list-group-item">15€</li>
                  <li class="list-group-item">200m</li>
                  <li class="list-group-item">3 place Joseph Aletti</li>
                  <li class="list-group-item">+33 (0)4 70 30 20 20</li>
                </ul>
              </li>

              <li class="pricely-inner panel-success col-xs-6 col-md-2 text-center">
                <h3 class="panel-heading">
                  <span class="pricely-label">Les Nations<br />***
                  </span> <a href="http://www.lesnations.com/en/" class="btn btn-success" target="_blank">Website</a>
                </h3>
                <ul class="list-group">
                  <li class="list-group-item">2 min.</li>
                  <li class="list-group-item">70€/89€</li>
                  <li class="list-group-item">12€</li>
                  <li class="list-group-item">300m</li>
                  <li class="list-group-item">13 boulevard de Russie</li>
                  <li class="list-group-item">+33 (0)4 70 98 21 63</li>
                </ul>
              </li>

              <li class="pricely-inner panel-info col-xs-6 col-md-2 text-center">
                <h3 class="panel-heading">
                  <span class="pricely-label">De Grignan<br />***
                  </span> <a href="http://www.hoteldegrignan.fr/" class="btn btn-info" target="_blank">Website</a>
                </h3>
                <ul class="list-group">
                  <li class="list-group-item">3 min.</li>
                  <li class="list-group-item">67€/99€</li>
                  <li class="list-group-item">12.50€</li>
                  <li class="list-group-item">Free</li>
                  <li class="list-group-item">7 place Sévigné</li>
                  <li class="list-group-item">+33 (0)4 70 32 08 11</li>
                </ul>
              </li>

              <li class="pricely-inner panel-success col-xs-6 col-md-2 text-center">
                <h3 class="panel-heading">
                  <span class="pricely-label">Hotel Moderne<br />**
                  </span> <a
                    href="http://www.hotelmoderne-vichy.fr/anglais-vichy-hotel/index-anglais/index-anglais.html"
                    class="btn btn-success" target="_blank">Website</a>
                </h3>
                <ul class="list-group">
                  <li class="list-group-item">7 min.</li>
                  <li class="list-group-item">54€/62€</li>
                  <li class="list-group-item">8€</li>
                  <li class="list-group-item">200m</li>
                  <li class="list-group-item">8 Max Durand Fardel</li>
                  <li class="list-group-item">+33 (0)4 70 31 20 21</li>
                </ul>
              </li>
            </ul>
          </section>
        </div>
      </div>
    </div>
    <div class="separator col-md-12">
      <div class="pricely-chart">
        <section class="col-xs-12">
          <ul class="pricely-pro">
            <li class="pricely-first-heading panel-success col-md-4 col-md-offset-1">
              <h3 class="panel-heading"></h3>
              <ul class="list-group">
                <li class="list-group-item">Walking time</li>
                <li class="list-group-item">Room rates (2 people sharing)</li>
                <li class="list-group-item">Breakfast</li>
                <li class="list-group-item">Car park</li>
                <li class="list-group-item">Address</li>
                <li class="list-group-item">Tel.</li>
              </ul>
            </li>

            <li class="pricely-inner panel-info col-xs-6 col-md-2 text-center">
              <h3 class="panel-heading">
                <span class="pricely-label">Mercure<br />****
                </span> <a href="http://www.mercure.com/gb/hotel-0460-mercure-vichy-thermalia-hotel/index.shtml"
                  class="btn btn-info" target="_blank">Website</a>
              </h3>
              <ul class="list-group">
                <li class="list-group-item">9 min.</li>
                <li class="list-group-item">97€</li>
                <li class="list-group-item">8€/14.50€</li>
                <li class="list-group-item">opposite</li>
                <li class="list-group-item">1 avenue Thermale</li>
                <li class="list-group-item">+33 (0)4 70 30 52 52</li>
              </ul>
            </li>

            <li class="pricely-inner panel-success col-xs-6 col-md-2 text-center">
              <h3 class="panel-heading">
                <span class="pricely-label">Ibis<br />**
                </span> <a href="http://www.ibis.com/gb/united-kingdom/index.shtml" class="btn btn-success"
                  target="_blank">Website</a>
              </h3>
              <ul class="list-group">
                <li class="list-group-item">9 min.</li>
                <li class="list-group-item">60€/72€</li>
                <li class="list-group-item">9.50€</li>
                <li class="list-group-item">9€/night</li>
                <li class="list-group-item">1 avenue Victoria</li>
                <li class="list-group-item">+33 (0)4 70 30 53 53</li>
              </ul>
            </li>

            <li class="pricely-inner panel-info col-xs-6 col-md-2 text-center">
              <h3 class="panel-heading">
                <span class="pricely-label">Chambord<br />**
                </span> <a href="http://www.hotel-chambord-vichy.com/en/" class="btn btn-info" target="_blank">Website</a>
              </h3>
              <ul class="list-group">
                <li class="list-group-item">12 min.</li>
                <li class="list-group-item">60€/74€</li>
                <li class="list-group-item">9.50€</li>
                <li class="list-group-item">100m</li>
                <li class="list-group-item">82-84 rue de Paris</li>
                <li class="list-group-item">+33 (0)4 70 30 16 30</li>
              </ul>
            </li>
          </ul>
        </section>
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
