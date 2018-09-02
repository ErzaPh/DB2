<!DOCTYPE html>
<html>
<head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}
#btn_div .btn_design{
    text-align:center;
}

#btn_div .btn_design{
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
#btn_div .btn_design:hover{
    background-color: #707172;
    cursor: pointer;
}
</style>
</head>
    <body>
    <!-- <div id="btn_div">
    <button class="btn_design" onclick='document.getElementById("ifr").src="insertform.php";' type="button">Back</button>
    </div> -->

            <?php
            require_once("connection.php");

            $getsql="SELECT client.client_id, client.client_name,client.client_age,client.client_city,client.client_zip, invoices.invoice_amt, invoices.invoice_date, invoices.invoice_description 
            From client INNER Join invoices ON client.client_id = invoices.client_id";

            $result = mysqli_query($connection,$getsql);
            echo "<table id=customers>";
            echo "<tr>";
            echo  "<th>ID</th>";
            echo  "<th>Name</th>";
            echo  "<th>Age</th>";
            echo  "<th>City</th>";
            echo  "<th>Zip</th>";
            echo  "<th>Amount</th>";
            echo  "<th>Invoice Date</th>";
            echo  "<th>Description</th>";
            echo  "</tr>";          
            
            
            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr><td align=center>".$row['client_id']."</td>".
                            "<td align=center>".$row['client_name']."</td>".
                            "<td align=center>".$row['client_age']."</td>".
                            "<td align=center>".$row['client_city']."</td>".
                            "<td align=center>".$row['client_zip']."</td>".
                            "<td align=center>".$row['invoice_amt']."</td>".
                            "<td align=center>".$row['invoice_date']."</td>".
                            "<td align=center>".$row['invoice_description']."</td></tr>";
                    ;
                }
            }
            else{
                echo "0 Records";
            }




            //show to tables nalang ang kulang with CSS para kuyaw


            ?>

    </body>
</html>