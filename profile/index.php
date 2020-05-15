<?php
error_reporting(0);
include '../db/vericek.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="UoSm4WjuhNJKvDC9bvsSBUsyaagUrLzzPbhIsW0W">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link rel="stylesheet" href="https://faceitelo.net/css/flag-icon.min.css">


    <link rel="stylesheet" href="https://faceitelo.net/css/bootstrap.min.css">
    <link href="https://faceitelo.net/css/style.css" rel="stylesheet">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
    <div id="app">


        <main>
    <section class="section bg-header">
    <?php include('profileheader.php'); ?>
</section>        <div class="section grey">

      <?php
include('profilelevel.php');
include('profileeloproges.php');
       ?>



    </div>
</div>

<?php
include('profilematchhistory.php');
include('profilemapsstats.php');
 ?>


        </main>


    </div>
</body>
<!-- Scripts -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://faceitelo.net/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
  player_base_url = 'https://faceitelo.net/player' + '/';
</script>
<script src="https://faceitelo.net/js/script.js"></script>
    <script src="https://faceitelo.net/js/chart.min.js"></script>
    <script>
    <?php echo $namedizi8[3]; ?>
    </script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128566885-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128566885-1');
</script>
</html>
