<?php

// php populate html table from mysql database

$hostname = "localhost";
$username = "root";
$password = "root";
$databaseName = "ecommerce";

// connect to mysql
$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query

$query = "SELECT * FROM scatole";

// mysql select query for dropdown filter

$query1 = "SELECT * FROM scatole WHERE spessore=3";

// result for method one
$result1 = mysqli_query($connect, $query);

// result for method two
$result2 = mysqli_query($connect, $query);

$dataRow = "";

while($row2 = mysqli_fetch_array($result2))
{
    $dataRow = $dataRow."<tr><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td><td>$row2[4]</td><td>$row2[5]</td><td>$row2[6]</td><td>$row2[7]</td><td>$row2[8]</td><td>$row2[9]</td><td>$row2[10]</td><td>$row2[11]</td><td>$row2[12]</td></tr>";
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title>PHP DATA ROW TABLE FROM DATABASE</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <!-- CHIAMATA ALLA FUNZIONE ALERT IN index.js -->
        <!--<script src="js/index.js"></script>-->
        
        <style>

            /*table,th,tr,td
            {
                border: 1px solid black;
            }
            td
            {
                text-align: center;
                height: 30px;
                width: 50px;
            }
            */
            *{
                font-size: 11px;
                text-align: center;
                font-family: sans-serif;
            }
            table {
                border-collapse: separate;
                border-spacing: 1px;
            }
            th,
            td {
                padding: 8px 8px;
            }
            th {
                /*font-size: 17px;*/
                background: #395870;
                color: #fff;
                text-align: center;
            }
                tbody tr:nth-child(even) {
                background: #f0f0f2;
            }
            td {
                border-bottom: 1px solid #cecfd5;
                border-right: 1px solid #cecfd5;
            }
            td:first-child {
                border-left: 1px solid #cecfd5;
            }

        </style>

    </head>

    <body>

    <!-- QUESTO PARAGRAFO SERVE PER LA FUNZIONE DEL ONCLICK, ONINPUT E DEL BUTTON; la funzione è a fondo pagina  
    <p id="demo"></p>
    <p id="demo1"></p>
    <p id="demo2"></p>
    <p id="demo3"></p>
    -->
    
    <!-- Table One -->
        <table id="table1"; style="background-color: white"; align="center">

            <tr>

                <th rowspan="2">Nome</th>
                <th rowspan="2">Spessore
                    <br>
                    (mm)
                    <br>
                    <br>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tutto
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php">Tutto</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="spessore3.php">3</a>
                            <a class="dropdown-item" href="spessore4.php">4</a>
                        </div>
                    </div>
                </th>
                <th rowspan="2">Lunghezza
                    <br>
                    (cm)
                    <br>
                    <br>
                  <div class="btn-group">
                      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Tutto
                      </button>
                      <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php">Tutto</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="lunghezza200.php">200</a>
                            <a class="dropdown-item" href="lunghezza250.php">250</a>
                            <a class="dropdown-item" href="lunghezza300.php">300</a>
                            <a class="dropdown-item" href="lunghezza350.php">350</a>
                            <a class="dropdown-item" href="lunghezza400.php">400</a>
                      </div>
                  </div>
                </th>
                <th rowspan="2">Larghezza
                    <br>
                    (cm)
                    <br>
                    <br>
                  <div class="btn-group">
                      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Tutto
                      </button>
                      <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php">Tutto</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="larghezza200.php">200</a>
                            <a class="dropdown-item" href="larghezza250.php">250</a>
                            <a class="dropdown-item" href="larghezza300.php">300</a>
                            <a class="dropdown-item" href="larghezza350.php">350</a>
                            <a class="dropdown-item" href="larghezza400.php">400</a>
                      </div>
                  </div>
                </th>
                <th rowspan="2">Altezza
                    <br>
                    (cm)
                    <br>
                    <br>
                  <div class="btn-group">
                      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tutto
                      </button>
                      <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php">Tutto</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="altezza150.php">150</a>
                            <a class="dropdown-item" href="altezza200.php">200</a>
                            <a class="dropdown-item" href="altezza250.php">250</a>
                            <a class="dropdown-item" href="altezza300.php">300</a>
                            <a class="dropdown-item" href="altezza350.php">350</a>
                            <a class="dropdown-item" href="altezza450.php">450</a>
                      </div>
                  </div>
                </th>
                <th rowspan="2">Confezione
                    <br>
                    da
                    <br>
                    <br>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tutto
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php">Tutto</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="confezione25.php">10</a>
                        </div>
                    </div>
                </th>
                <th class="zerobrd" colspan="5">Prezzo €/cad</th>
                <th rowspan="2">Quantità</th>
            </tr>
            <tr>
                <th class="nobrd" colspan="1">- di 100</th>
                <th class="nobrd" colspan="1">per 100 e +</th>
                <th class="nobrd" colspan="1">per 200 e +</th>
                <th class="nobrd" colspan="1">per 400 e +</th>
                <th class="nobrd" colspan="1">per 800 e +</th>
            </tr>

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <tr>
                <td><b><?php echo $row1[1];?></b></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
                <td><?php echo $row1[4];?></td>
                <td><?php echo $row1[5];?></td>
                <td><?php echo $row1[6];?></td>
                <td style="color: #E69C1C"><?php echo $row1[7];?></td>
                <td style="color: #E69C1C"><?php echo $row1[8];?></td>
                <td style="color: #E69C1C"><?php echo $row1[9];?></td>
                <td style="color: #E69C1C"><?php echo $row1[10];?></td>
                <td style="color: #E69C1C"><?php echo $row1[11];?></td>
                <!--<td><?php echo $row1[12];?></td>-->
                <td>             
                    <form name="CartShop">
                        <!--<input name="SKU" value="MS- 1"type="hidden">-->
                        
                        <input type="text" name="TextIntput" placeholder="Qtà">
                        <input type="button" value="+" onclick="myFunctionClick1()">
                        <input type="button" value="-" onclick="myFunctionClick2()"> 

                        <input type="button" class="woo-cart" value="Aggiungi" onclick="myFunctionAdd()">
                    </form>
                </td>
            </tr>
            <?php endwhile;?>
            
        </table>

    <br>

    <!-- FUNZIONE -->
    <script>
        function myFunctionInput() {             
            console.log("Q");
        }
        function myFunctionClick1(){
            for (let i = 0;i < 10; i++){
                console.log(i);
            }
        }
        function myFunctionClick2(){
            console.log(10+10);
        }
        function myFunctionAdd(){
            console.log(10);
        }
    </script> 

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
   
    </body>

</html>