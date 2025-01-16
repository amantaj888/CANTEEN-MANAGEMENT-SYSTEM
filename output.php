<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        body{
            /*background-image: url("images/bir.jpg");*/
            background: linear-gradient(to bottom, #0000ff 0%, #00ffcc 100%);
        }
        table{
            background: linear-gradient(to bottom right, #990099 0%, #ff6666 100%);
            color: white;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="case.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;600&family=Square+Peg&display=swap" rel="stylesheet">
    <title></title>
    <link rel="shortcut icon" href="mask.svg">
</head>
<body>
    <div class="main">
        <div class="in1">
            <div class="user">
                <!-- <img src="incognito.jpg" alt="" class="incog"> -->
                <h1 style="text-align: center; background: linear-gradient(to bottom, #ffff00 0%, #993300 100%); font-size: 40px; -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;">Welcome to the Canteen</h1>
                <div class="container">
                    <img src="user.svg" alt="" class="logo">
                    <p></p>
                </div>
            </div>
          
        <div class="in2">
            <div id="display1">
                <p>TODAY'S ORDERS</p>
                <table style="align-content: center; text-align: center; left: 50%; right: 50%;">
                    <thead>
                        <tr class="tr" style="border:1px solid #050714;text-align:center">
                            <th class="th" style="border:1px solid #050714;text-align:center;padding:1px;">Name</th>
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Number</th>
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Order</th>
                            <!-- <th>Address</th> -->
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Additional Food</th>
                            <th style="border:1px solid #050714;text-align:center;padding:1px">how many</th>
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Date And Time</th>
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Address</th>
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Message</th>
                            <th style="border:1px solid #050714;text-align:center;padding:1px">Total Cost</th>
                            <!-- <th>Complain</th> -->
                        </tr>
                    </thead>
                    <tbody style="align-content: center; text-align: center;">
                        <?php
                        $connection = new mysqli('localhost', 'root','','cms');
                        if($connection->connect_error){
                            die("connection failed :" . $connection->connect_error);
                        }
                        $sql = "SELECT * FROM vig";
                        $result = $connection->query($sql);
                        if(!$result)
                        {
                            die("Invalid query:" .$connection->error);
                        }
                        while($row = $result->fetch_assoc())
                        {
                            echo "<tr style='border:1px solid #050714; align-content: center; text-align: center; color: white'>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:center; color: white; '>" . $row["Your Name"] . "</td>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:center; color: white; '>" .$row["Your Number"]. "</td>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:center; color: white; '>" .$row["Your Order"] . "</td>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:center; color: white; '>" .$row["Additional Food"] . "</td>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:center; color: white; '>" .$row["How Much"]. "</td>
                            <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:center; color: white; '>" .$row["Date And Time"] . "</td>
                             <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:center; color: white; '>" .$row["Your Address"] . "</td>
                              <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:center; color: white; '>" .$row["Your Message"] . "</td>
                              <td style='border:1px solid #050714;text-align:center;padding:8px;color:#050714;font-weight:600;text-align:center; color: white; '>" .$row["Total cost"] . "</td>
                            
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <!-- <div class="report12"></div>
                <div class="report13"></div> -->
            </div>
            
         
                </table>
            
        </div>
    </div>

</body>
</html>
