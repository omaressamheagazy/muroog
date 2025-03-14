<?php

use App\Helpers\Enums\MessagesName;
use App\Helpers\MessageReporting;

 include INC_BACKEND . "/header.php";?>
<?php include INC_BACKEND . "/navbar.php";?>
<?php include INC_BACKEND . "/sidebar.php"?>

<main class="mt-5 pt-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <br>
        <h4>Dashboard</h4>
      </div>
    </div>
    <!--
          analysis
        -->
    <div class="row">
      <?php MessageReporting::flash(MessagesName::ADMIN) ?>
      <?php MessageReporting::flash(MessagesName::ERROR)?>
      <div class="col-md-3 mb-3 my-5">
        <div class="card bg-light text-dark h-100 shadow border-0">
          <div class="card-body py-5 d-flex justify-content-between text-center align-middle">
            <h1 class="align-middle">
              <i class="bi bi-building text-primary"></i>
            </h1>
            <div>
              <h2 class="align-middle"><?= $data["building"] ?></h2>
              <span class="text-muted">Projects</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-3 my-5">
        <div class="card bg-light text-dark h-100 shadow border-0">
          <div class="card-body py-5 d-flex justify-content-between text-center align-middle">
            <h1 class="align-middle">
              <i class="bi bi-bag-fill  text-secondary"></i>
            </h1>
            <div>
              <h2 class="align-middle"><?= $data["category"] ?></h2>
              <span class="text-muted">Categories</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-3 my-5">
        <div class="card bg-light text-dark h-100 shadow border-0">
          <div class="card-body py-5 d-flex justify-content-between text-center align-middle">
            <h1 class="align-middle">
              <i class="bi bi-map-fill text-success"></i>
            </h1>
            <div>
              <h2 class="align-middle"><?= $data["location"] ?></h2>
              <span class="text-muted">Locations</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-3 my-5">
        <div class="card bg-light text-dark h-100 shadow border-0">
          <div class="card-body py-5 d-flex justify-content-between text-center align-middle">
            <h1 class="align-middle">
              <i class="bi bi-people-fill text-secondary"></i>
            </h1>
            <div>
              <h2 class="align-middle"><?= $data["admin"] ?></h2>
              <span class="text-muted">Admins</span>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!--
          End of analysis
        -->

  </div>

</main>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">


  <!-- Section: Links  -->


  <!-- Copyright -->
  <div class="text-center p-4 fixed-bottom" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
		<span>Muroog Engineering Consultancy</span>
    <!-- <a class="text-reset fw-bold" href="https://mdbootstrap.com/"></a> -->
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<?php include INC_BACKEND . "/footer.php"?>
