<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/logo kpum km utm.png">
    <style>
      .button {
        border-radius: 8px;
        background-color: #f54242;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 28px;
        padding: 20px;
        width: 25%;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }

      .button a {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button a:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button:hover a {
        padding-right: 20px;
      }

      .button:hover a:after {
        opacity: 1;
        right: 0;
      }
      .div{
        border-radius: 5px;
        width: 90%;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        padding: 25px;
      }
      </style>
    <title>Hasil Pemungutan Suara Pemilu Raya 2020</title>
</head>
<body>
<script src="bootstrap-4.4.1-dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <div style="margin-left: auto; margin-right: auto;">
        <img src="img/logo kpum km utm.png" alt="Logo KPUM-KM UTM" style="display: block; margin-left: auto; margin-right: auto; width: 7%; padding: 10px">
        <h1 style="text-align: center;">Sistem Perhitungan Suara E-Voting Pemilu Raya 2020</h1>
        <h3 style="text-align: center;">Komisi Pemilihan Umum Mahasiswa Keluarga Mahasiswa Universitas Trunojoyo Madura 2020</h3>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <a class="navbar-brand text-light" href="index.php">Hasil Pemungutan Suara Pemilu E-Vote 2020</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-light" href="index.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="hasil_presma.php">Pemilihan Presiden dan Wakil Presiden Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="index.php">Hasil Pemilihan DPM-KM</a>
            </li>
            </ul>
        </div>
    </nav>
  <div class="div">
    <h2 class="text-center">Lihat Hasil Pemilihan</h2>
    <br>
    <button class="button"><a target="_blank" class="text-light" href="hasil_presma.php" style="font-size: 27px">Presma dan WaPresma</a></button>
    <button class="button"><a class="text-light" target="_blank" href="hasil_dpm_fh.php">DPM-KM Dapil FH</a></button>
    <button class="button"><a target="_blank" class="text-light" href="hasil_dpm_feb.php">DPM-KM Dapil FEB</a></button>
    <button class="button"><a class="text-light" target="_blank" href="hasil_dpm_fp.php">DPM-KM Dapil FP</a></button>
    <button class="button"><a class="text-light" target="_blank" href="hasil_dpm_ft.php">DPM-KM Dapil FT</a></button>
    <button class="button"><a class="text-light" target="_blank" href="hasil_dpm_fisib.php">DPM-KM Dapil FISIB</a></button>
    <button class="button"><a class="text-light"  href="#">DPM-KM Dapil FIP</a></button>
    <button class="button"><a class="text-light" target="_blank" href="hasil_dpm_fkis.php">DPM-KM Dapil FKis</a></button>
  </div>
</body>
</html>
