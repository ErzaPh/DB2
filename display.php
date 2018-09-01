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
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
    <body>
    <table id="customers">
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>

            <?
            require_once("connection.php");

            $getsql="SELECT client.client_id, client.client_name,client.client_age,client.client_city,client.client_zip,  invoices.invoice_amt, invoices.invoice_date, invoices.invoice_description 
            From client INNER Join invoices ON client.client_id = invoices.client_id";

            $result = mysql_query($connection,$getsql);





            //show to tables nalang ang kulang with CSS para kuyaw


            ?>

    </body>
</html>