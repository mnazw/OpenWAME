<?php
//Check input
if (isset($_POST['submit'])) {
  $number = $_POST['inputNumber'];
  $msg = $_POST['inputMsg'];

  $url = "https://wa.me/" . $number . "/?text=" . $msg;
} else {
  $number = "";
  $msg = "";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="favicon.ico" type="ico">
    <title>OpenWAME</title>
    <style>
    .form-control:focus {
      border-color: #28a745 !important;
      box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25) !important;
    }
    .fa {
      font-size: 20px;
      width: 20px;
      text-align: center;
      text-decoration: none;
    }

    .fa-exclamation-triangle{
      font-size: 12px !important;
    }

    </style>

  </head>
  <body>
    <div class="container container-sm border border-success rounded my-4 p-4">
      <div class="row">
        <div class="col">
          <h3 class="text-center font-monospace fw-bolder lh-1 fs-3 text-success">OpenWAME</h3>
          <center><span class="badge rounded-pill bg-success text-center font-monospace">Generate wa.me link and open it automatically.</span><br>
          <span class="badge bg-warning text-center font-monospace fst-italic fw-lighter text-danger"><span class="fa fa-exclamation-triangle"></span>&nbsp;ALLOW POP-UP TO MAKE THE WEBAPP WORK!&nbsp;<span class="fa fa-exclamation-triangle"></span></span>
          <br><br></center>

          <?php
          if (isset($_POST['submit'])) {
            echo "
            <script type='text/javascript' language='Javascript'>window.open('$url');</script>
            ";
            echo "
            <div class='alert alert-success text-center' role='alert'>
              Link generated! Check your browser's new tab or open on your Whatsapp app if you're on mobile.
            </div>
            ";
          }
          ?>

          <form action="index.php" method="POST">
            <span class="fw-bold lh-lg text-success">Number</span>
            <?php
            if (isset($number)) {
              echo "<input type='text' name='inputNumber' class='form-control' aria-describedby='number' value='$number' required>";
            } else {
              echo "<input type='text' name='inputNumber' class='form-control' aria-describedby='number' required>";
            }
            ?>
            <span name="number" class="form-text text-success">
              Format: +62xxxxxxxxxxx or 62xxxxxxxxxxx
            </span><br>
            <span class="fw-bold lh-lg text-success">Messages</span>
            <?php
            if (isset($msg)) {
              echo "<textarea class='form-control' name='inputMsg' rows='5'>$msg</textarea><br>";
            } else {
              echo "<textarea class='form-control' name='inputMsg' rows='5'></textarea><br>";
            }
            ?>
            <button type="submit" name="submit" class="btn btn-outline-success">Generate Link</button>
          </form>


        </div>
      </div>
		<br><br><br>
    <footer class="text-center text-lg-start">
      <div class="container">
        <div class="row">
          <div class="col">
            <center><span class="badge bg-light text-center">
              <div class="btn-group">
                <a href="https://www.facebook.com/lord.mnaw" class="btn btn-primary"><span class="fa fa-facebook"></span></a>
                <a href="https://www.instagram.com/m.nazw/" class="btn btn-danger"><span class="fa fa-instagram"></span></a>
                <a href="https://wa.me/6289689900920" class="btn btn-success"><span class="fa fa-whatsapp"></span></a>
                <a href="https://mnazw.me/" class="btn btn-secondary"><span class="fa fa-link"></span></a>
              </div>
            </span>
            </div>
          </div>
        </div>
      </div>
    </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>



  </body>
</html>
