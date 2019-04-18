<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Multiplication</title>

    <!--style css -->
    <style>
    .container{
      margin: auto;
      width: 60%;
      padding: 10px;
    }

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  width: 50%;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
  font-weight: bold;
  font-size: 15px;
}
/* #customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;} */
#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}
</style>
  </head>
  <body>
<div class="container shadow p-4 mb-4 bg-gray">
  <div class="h3 text-center text-warning style-weight-bold transfom-uppercase">
    I know how to multiply a number
  </div>

      <form class="align-center" action="#" method="post">
        <div class="form-group row container shadow-sm p-3 mb-4 bg-light my-3">
          <label for="nombre" class="col-sm-5 col-form-label h2 style-weight-bold">Enter a number</label>
          <input type="number" class="form-control col-sm-6 mr-2 mb-3" name="nombre" value="">
          <input type="submit" name="resultat" class="form-control col-sm-5 btn btn-success " value="FIND">
        </div>
      </form>


      <table id="customers" class=" container-fluid">
        <tr>
          <th>Operation</th>
          <th>Result</th>
        </tr>
      <?php

          if (isset($_POST['resultat']) && !empty($_POST['nombre'])) {
            $nbr = $_POST['nombre'];
            $i = 0;

            for ($i=1; $i <= 10; $i++) {
            //
                $resultat = $nbr * $i ;

              //  for ($j=1; $j <= 10; $j++) {
      ?>

            <tr>
              <td><?php echo $nbr." * ".$i; ?></td>
              <td><?php echo $resultat ?></td>
            </tr>
      <?php
              //  echo $nbr." * ".$i. " = " .$resultat."<br>";
          //   }
           }
         }

       ?>
         </table>
         </div>
  </body>
</html>
