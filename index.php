<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>corona counter</title>
    <meta name="viewport"
     content="width=device-width,initial-scale=1.0">
  </head>
  <body>
    <?php include('script.php')?>
    <header>
      <div class="header header-logo">
        <h1>Corona Counter <?php echo $data[0]['name']?></h1>
        <div class="header header-list">
          <ul>
            <li>corona counter</li>
            <li>total jumlah positive <?php echo $data[0]['positif']?></li>
            <li>total jumlah kematian <?php echo $data[0]['meninggal']?></li>
            <li>total jumlah sembuh <?php echo $data[0]['sembuh']?></li>
          </ul>
        </div>
      </div>
    </header>
    <main>

    </main>
    <footer>
      <div class="footer">
        <div class="footer logo">
          <h3>&copy;puthut wahyu aji</h3>
          <ul>
            <li>instagram</li>
            <li>facebook</li>
            <li>youtube</li>
            <li>sedang dalam masa pengembangan</li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
