<?php
 include_once ("vendor/autoload.php");
 
 use Medoo\Medoo;
 
 $database = new Medoo (
     [
     'database_type' => 'mysql',
      'server' => '127.0.0.1',
      'database_name' => 'p04_db',
      'username' => 'p04_g36d',
      'password' => 'F8q3O6KCEp'
     ]);

//ambil data dari koordinator

$koordinator = $database ->select
        ("koordinator",
    ["id_koordinator","nama_koordinator","email_koordinator","pass_koordinator","foto"]);

    $ROW_SIZE = 8;
$rows = intval(sizeof($koordinator) / $ROW_SIZE);
if (sizeof($koordinator) % $ROW_SIZE) {
    ++$rows;
}

        
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="latin-1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/055b2fddae.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style/navigation.css">

    <!-- SESUAIKAN JUDUL TEMAN SEKALIAN -->

    <title>Sistem Informasi Management TA</title>
  </head>
  <body>
      <div class = "container">
        <h1 style="text-align: center"> Koordinator </h1>
        <hr>
        <br>
        <p class = "text-monospace">Silahkan lakukan pengeditan pada halaman ini</p>
        <div class = "container">
          <table class = "table">
            <thead class = "thead-light">
              <tr>
                <th scope = "col"> Action </th>
                <th scope = "col"> ID </th>
                <th scope = "col"> Nama </th>
                <th scope = "col"> email </th>
                <th scope = "col"> Password </th>
                <th scope = "col"> Foto </th>
              </tr>
            </thead>
            <?php 
               $counter = 0;
               while ($koordinator && $rows) {

                ?>
            <tbody>
            <?php 
                    do {?>
              <tr> 
                
                <td scope ="row">
                    <a href="">Edit</a> | 
                    <a href="">Hapus</a>
                  </td>
                <td scope ="row">
                    <?=$koordinator[$counter]["id_koordinator"]?>
                  </td>
                <td scope ="row">
                    <?=$koordinator[$counter]["nama_koordinator"]?>
                  </td>
                <td scope ="row">
                    <?=$koordinator[$counter]["email_koordinator"]?>
                  </td>
                <td scope ="row">
                    <?=$koordinator[$counter]["pass_koordinator"]?>
                  <td>
                <td scope ="row">
                    <?=$koordinator[$counter]["foto"]?>
                  </td>
                  <?php
                }while ((++$counter)% $ROW_SIZE) ?>
              </tr>
              <br> 
            </tbody>
            <?php --$rows;
                }?>
          </table>

        </div>
      </div>
    </body>

    
  </html>