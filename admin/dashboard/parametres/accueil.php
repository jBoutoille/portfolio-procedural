<!DOCTYPE html>
<html lang="fr">

<?php

  include '../inc/head.php';

?>

<body id="page-top">

  <!-- HOME DASHBOARD -->
  <div id="wrapper">

  <?php

    include '../inc/header.php';

  ?>


    <div id="content-wrapper" class="d-flex flex-column">


      <div id="content">

      <?php

        include '../inc/topbar.php';

      ?>

        <!-- CONTENT -->
        <div class="container-fluid">

          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Modifier l'accueil</h1>
          </div>

          <form>
            <div class="row">
              <div class="col">
                <label>Nom</label>
                <input type="text" class="form-control" placeholder="CODE-STEEL">
              </div>
              <div class="col">
                <label>Navigation</label>
                <input type="text" class="form-control" placeholder="ACCUEIL">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Navigation</label>
                <input type="text" class="form-control" placeholder="GENERAL">
              </div>
              <div class="col">
                <label>Navigation</label>
                <input type="text" class="form-control" placeholder="COMPETENCE">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Navigation</label>
                <input type="text" class="form-control" placeholder="A PROPOS">
              </div>
              <div class="col">
                <label>Navigation</label>
                <input type="text" class="form-control" placeholder="CONTACT">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>

          </form>

          <div class="row">

      <?php

        include '../inc/footer.php';

      ?>

</html>
