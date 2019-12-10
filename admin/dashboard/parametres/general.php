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
            <h1 class="h3 mb-0 text-gray-800">Modifier la présentation général</h1>
          </div>

          <form>
            <div class="row">
              <div class="col">
                <label>Numéro</label>
                <input type="text" class="form-control" placeholder=".01">
              </div>
              <div class="col">
                <label>Titre</label>
                <input type="text" class="form-control" placeholder="PRESENTATION GENERALE">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label>Entête</label>
                <input type="text" class="form-control" placeholder="J'aime le design, la technologie et la créativité.">
              </div>
              <div class="col">
                <label>Text</label>
                <input type="text" class="form-control" placeholder="Bienvenue sur mon portfolio ...">
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>

          </form>

          <div class="row">

      <?php

        include '../inc/footer.php';

      ?>

</html>
