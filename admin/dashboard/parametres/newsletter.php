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
            <h1 class="h3 mb-0 text-gray-800">Envoyer une newsletter</h1>
          </div>

          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">Email</th>
                <th scope="col">Choisir une newsletter</th>
                <th class="text-center" scope="col">Supprimer</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>01/11/2019</td>
                <td>Marck@gmail.com</td>
                <td><input type="file" class="form-control-file" id="exampleFormControlFile1"></td>
                <td class="text-center"><i class="fas fa-trash-alt"></i></td>
              </tr>
            </tbody>
          </table>

          <div class="row">

      <?php

        include '../inc/footer.php';

      ?>

</html>
