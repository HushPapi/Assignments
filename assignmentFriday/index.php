<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- css -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body style="margin: 50px;">
    <h1>Customer Details</h1>

    <br>

    <table class="table">
        <thead>
            <tr>
                <th>Account No.</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>Address No.</th>
                <th>Action</th>
            </tr>
        </thead>

<!--CODE  WRITTEN BY ADRIAN  -->


        <tbody >
            <tr>
                <?php
                    // connection
                    $conn = mysqli_connect("localhost","root","","assignment_friday")
                        or die ("couldn't connect to database");
                    
                    // read all rows from database table

                    $sql ="SELECT * FROM customers";
                    $results = $conn->query($sql);

                    // while loop to loop through  contents of each user
                    while($row = $results->fetch_assoc()){
                        echo "
                        <tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["first_name"] . "</td>
                            <td>" . $row["last_name"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["phone"] . "</td>
                            <td>" . $row["address"] . "</td>
                            
                            <td>
                                <a class='btn btn-primary btn-sm ' href='update'>Update</a>
                                <a class='btn btn-danger btn-sm ' href='delete'>Update</a>
                            </td>
                        <tr>";
                    }
                
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>