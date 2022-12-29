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
            border: 3px solid green;
        }
        
        table {
            width: 100%;
            text-align: center;
        }
    </style>
</head>

<body style="background-color: Khaki;">
    <div class="container">
        <div class="row">
            <center>
                <h3 style="color: red;">Student data's in database</h3></center>
            <br>
            <br>
            <form method="post">
                <table>
                    <thead>
                        <th><b><center>ID</center></b></th>
                        <th><b><center>Register number</center></b></th>
                        <th><b><center>Name</center></b></th>
                        <th><b><center>View</center></b></th>
                        <th><b><center>Insert</center></b></th>
                        <th><b><center>Update</center></b></th>
                        <th><b><center>Delete</center></b></th>
                    </thead>
                    <tbody>
                        <?php
                                                  include 'config.php';
                                                  $query = "SELECT id,regno,name FROM student";
                                                  $result = mysqli_query($con,$query);
                                                  while($row=mysqli_fetch_array($result))
                                                    {
                                              ?>
                            <tr>
                                <td style="border: 3px solid green;">
                                    <?php echo $row['id']; ?>
                                </td>
                                <td style="border: 3px solid green;">
                                    <?php echo $row['regno']; ?>
                                </td>
                                <td style="border: 3px solid green;">
                                    <?php echo $row['name']; ?>
                                </td>
                                <td style="border: 3px solid green;"><a href="view.php?id=<?php echo $row['id'];?>">view</a></td>
                                <td style="border: 3px solid green;"><a href="studentinsert.php?id=<?php echo $row['id'];?>">insert</a></td>
                                 <td><a href="update.php?id=<?php echo $row['id'];?>">update</a></td>    
                                <td style="border: 3px solid green;"><a href="#" class="del" id="<?php echo $row['id']; ?>">delete</a></td>
                            </tr>
                            <?php 
                                                    } 
                                               ?>

                    </tbody>
                </table>
            </form>
            <script src="javascript/jquery.min.js"></script>
            <script src="javascript/jquery.js"></script>
            <script src="javascript/jquery-ui.js"></script>
            <script src="javascript/bootstrap.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.del').click(function() {
                        var id = $(this).attr('id');
                        if (confirm("Are you sure want ot delete")) {
                            $.ajax({
                                type: 'POST',
                                url: 'd1.php',
                                data: {
                                    id: id
                                },
                                success: function(data) {
                                    location.reload('delete.php')

                                }

                            })
                        }
                    })
                });
            </script>
        </div>
    </div>
</body>

</html>