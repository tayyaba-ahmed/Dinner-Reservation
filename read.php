<?php
    include 'connection.php';
    $q="SELECT * from reservation_table";
    $rows=mysqli_query($con,$q);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>
    <style>
 body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background-color: #f4f4f4;
 }
 table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
 }
 #font{
    font-size: large;

}
.table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    background-color: #f9f9f9;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.table th {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    text-align: left;
}
.table td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
}
.table tr:nth-child(even) {
    background-color: #f2f2f2;
}
.table tr:hover {
    background-color: #ddd;
}
#font {
    font-family: 'Arial', sans-serif;
    font-size: 1.1em;
    font-weight: bold;
}
.table a {
    text-decoration: none;
    color: #4CAF50;
    font-weight: bold;
}
.table a:hover {
    color: #45a049;
}
.table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.table th {
    background-color: #4CAF50;
    color: white;
    padding: 15px;
    text-align: left;
    font-size: 1.2em;
}
.table td {
    padding: 12px;
    border-bottom: 1px solid #ddd;
}
.table tr:nth-child(even) {
    background-color: #f9f9f9;
}
.table tr:hover {
    background-color: #f1f1f1;
}
.table a {
    text-decoration: none;
    color: #4CAF50;
    font-weight: bold;
    padding: 5px 10px;
    border-radius: 3px;
    transition: background-color 0.3s ease, color 0.3s ease;
}
.table a:hover {
    background-color: #4CAF50;
    color: white;
}
.table .header-row {
    background-color: #4CAF50;
    color: white;
    font-weight: bold;
}
 </style>
 <body>
    <table border="1" class="table">
    <tr class="header-row">
    <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email </th>
            <th>Phone</th>
            <th>No_of_Tickets</th>
            <th>Name_of_people</th>
            <th>Additional_info</th>
            <th colspan="2"> Action </th>
            </tr>
        <?php
        while($data = mysqli_fetch_assoc($rows)) {
            echo "<tr>
            <td>".$data['ID']."</td>
                <td>" . $data['Firstname'] . "</td>
                <td>" . $data['Lastname'] . "</td>
                <td>" . $data['Email'] . "</td>
                <td>" . $data['Phone'] . "</td>
                <td>" . $data['No_of_Tickets'] . "</td>
                <td>" . $data['Name_of_people'] . "</td>
                <td>" . $data['Additional_info'] . "</td>
                <td><a href='update.php?id=". $data['ID']. "'> Edit </a></td>
                <td><a href='delete.php?id=". $data['ID']. "'> Delete </a></td>
            </tr>";
        }
        ?>
        
    </table>
</body>
</html>