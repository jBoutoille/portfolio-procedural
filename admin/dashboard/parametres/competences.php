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
            <h1 class="h3 mb-0 text-gray-800">Modifier mes compétences</h1>
          </div>

          <form>
            <div class="row">
              <div class="col">
              <label>Icon</label>
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="validatedCustomFile" required>
              <label class="custom-file-label" for="validatedCustomFile">Selectionner un fichier</label>
              <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
              </div>
              <div class="col">
              <label>Description</label>
                <input type="text" class="form-control" placeholder="HTML">
              </div>
            </div>

            <div class="row">
              <div class="col">
              <label>Icon</label>
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="validatedCustomFile" required>
              <label class="custom-file-label" for="validatedCustomFile">Selectionner un fichier</label>
              <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
              </div>
              <div class="col">
              <label>Description</label>
                <input type="text" class="form-control" placeholder="CSS">
              </div>
            </div>

            <div class="row">
              <div class="col">
              <label>Icon</label>
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="validatedCustomFile" required>
              <label class="custom-file-label" for="validatedCustomFile">Selectionner un fichier</label>
              <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
              </div>
              <div class="col">
              <label>Description</label>
                <input type="text" class="form-control" placeholder="JAVASCRIPT">
              </div>
            </div>

            <div class="row">
              <div class="col">
              <label>Icon</label>
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="validatedCustomFile" required>
              <label class="custom-file-label" for="validatedCustomFile">Selectionner un fichier</label>
              <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
              </div>
              <div class="col">
              <label>Description</label>
                <input type="text" class="form-control" placeholder="PHP">
              </div>
            </div>

            <div class="row">
              <div class="col">
              <label>Icon</label>
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="validatedCustomFile" required>
              <label class="custom-file-label" for="validatedCustomFile">Selectionner un fichier</label>
              <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
              </div>
              <div class="col">
              <label>Description</label>
                <input type="text" class="form-control" placeholder="BOOTSTRAP">
              </div>
            </div>

            <div class="row">
              <div class="col">
              <label>Icon</label>
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="validatedCustomFile" required>
              <label class="custom-file-label" for="validatedCustomFile">Selectionner un fichier</label>
              <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
              </div>
              <div class="col">
              <label>Description</label>
                <input type="text" class="form-control" placeholder="SYMFONY">
              </div>
            </div>

            <div class="row">
              <div class="col">
              <label>Icon</label>
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="validatedCustomFile" required>
              <label class="custom-file-label" for="validatedCustomFile">Selectionner un fichier</label>
              <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
              </div>
              <div class="col">
              <label>Description</label>
                <input type="text" class="form-control" placeholder="WORDPRESS">
              </div>
            </div>

            <div class="row">
              <div class="col">
              <label>Icon</label>
              <div class="custom-file">
              <input type="file" class="custom-file-input" id="validatedCustomFile" required>
              <label class="custom-file-label" for="validatedCustomFile">Selectionner un fichier</label>
              <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
              </div>
              <div class="col">
              <label>Description</label>
                <input type="text" class="form-control" placeholder="ADOBE">
              </div>
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>

          </form>

          <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

          <div class="row">

      <?php

        include '../inc/footer.php';

      ?>

</html>
