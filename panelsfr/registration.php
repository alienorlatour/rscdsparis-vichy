<!-- Panel : registration -->
<section class="content-section text-center">
  <div class="registration-section">
    <div class="container">
      <div class="col-lg-8 col-lg-offset-2">
        <h2>Rejoignez-nous</h2>
        <?php if (new DateTime() < new DateTime("2015-10-30 12:00:00")) { ?>
	        <p>Les inscriptions seront ouvertes<br/>le vendredi 30 octobre 2015 à midi heure française.</p>
        <?php } else {?>
	        <a href="https://www.weezevent.com/evenement.php?id_evenement=121598&lg_billetterie=1" class="btn btn-default btn-lg hidden">Inscription</a>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- /Panel : registration -->
