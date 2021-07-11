<?php
require('getText.php');
?>
<!-- <pre>
    <?php
    //$x = count($arr);
    //echo $x;
    ?>
</pre> -->

<!doctype html>
<html lang="en">

<head>
  <title>Hari Ini Saya Bersyukur.com</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Newsreader&display=swap" rel="stylesheet">
  <link rel="icon" href="https://i.pinimg.com/originals/c5/6c/4c/c56c4c47aa3f89c78d642c253d912d11.png" sizes="16x16" type="image/png">
  <link rel="stylesheet" href="css/style.css">


</head>

<body>
  <h1>Hari Ini Saya Bersyukur</h1>
  <div class="container">

    <div class="input">
      <form method="post" action="insertText.php">
        <div class="row">
          <label for="inputTulisan" class="tulisanAtas mb-2">Tulis ucapan syukurmu di sini:</label>
          <div class="area">
            <div class="area1">
              <textarea id="inputTulisan" name="tulisan" rows="6" cols="55" placeholder="Hari ini saya bersyukur karena/atas/sebab. . ."></textarea>
            </div>
            <div class="area2">
              <input type="submit" class="buttonSend" value="KIRIM">
              <input type="button" class="buttonDel" value="HAPUS">
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class="text">
      <div class="row">

        <?php
        for ($i = count($arr) - 1; $i > 0; $i--) {
        ?>

          <div class="col-sm-4 mt-5">
            <div class="kartu card" data-tilt>
              <div class="kartuKepala card-header">
                <?php echo $arr[$i]['Created']; ?>
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p><?php echo $arr[$i]['Text']; ?> </p>
                  <footer class="blockquote-footer">Anonim</footer>
                </blockquote>
              </div>
            </div>
          </div>

        <?php
        }
        ?>

      </div>
    </div>

  </div>

  <!-- <div class="footer">
    <p>Footer</p>
  </div> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
  <script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>