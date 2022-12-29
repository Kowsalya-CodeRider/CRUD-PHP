<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/javascript/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/javascript/bootstrap.js"></script>
    <style type="text/css">
        table,
        th,
        tr {
            border: 3px solid purple;
        }
        
        table {
            width: 100%;
            text-align: center;
        }
    </style>
</head>

<body style="background-color: NavajoWhite;">
    <div class="container">
        <div class="row">
            <center>
                <h3 style="color: blue;">Update the student data's in database</h3></center>
            <br>
            <br>
            <form method="post">
                <table>
                    <thead>
                        <th><b><center>ID</center></b></th>
                        <th><b><center>Register number</center></b></th>
                        <th><b><center>Name</center></b></th>
                        <th><b><center>Update</center></b></th>
                    </thead>
                    <tbody>
                        <?php
include 'config.php';
include 'studentclass.php';
$insert = new student();
//delete
   $obj1 = $insert->view1();  
?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</body>

</html>