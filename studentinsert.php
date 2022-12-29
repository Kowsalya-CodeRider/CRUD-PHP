<?php
//add dataabse connection
include 'config.php';
//add class file
include 'studentclass.php';
//call class[name-student]
$insert = new student();
if(isset($_POST['submit']))
{
   //call insert function [name-details]
   $obj = $insert->details();     
}
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/javascript/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/javascript/bootstrap.js"></script>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                background-color: SandyBrown;
            }
            
            form {
                border: 3px solid #f1f1f1;
            }
            
            input[type=text],
            input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            
            button {
                background-color: olive;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            
            button:hover {
                opacity: 0.8;
            }
            
            h2 {
                color: purple;
                text-align: center;
            }
            
            .container {
                padding: 16px;
            }
            
            select {
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-sm-6">
                    <h2>Student Register</h2>
                    <form method="post" type="submit" value="submit" action="">
                        <div class="col-md-6">
                            <center>
                                <label for="regno"><b>Register Number</b></label>
                            </center>
                            <input type="text" placeholder="Enter your register number" name="regno" required>
                        </div>
                        <div class="col-md-6">
                            <center>
                                <label for="name"><b>Name</b></label>
                            </center>
                            <input type="text" placeholder="Enter your name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <center>
                                <label for="department"><b>Department</b></label>
                                <br>
                            </center>
                            <select name="department" required>
                                <option> </option>
                                <option>CSE</option>
                                <option>IT</option>
                                <option>ECE</option>
                                <option>EEE</option>
                                <option>MECHANICAL</option>
                                <option>CIVIL</option>
                            </select>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <center>
                                <label for="section"><b>Section</b></label>
                                <br>
                            </center>
                            <select name="section" required>
                                <option> </option>
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <center>
                                <label for="dateofbirth"><b>Date of birth</b></label>
                            </center>
                            <input type="text" placeholder="Enter your date of birth" name="dateofbirth" required>
                        </div>
                        <div class="col-md-6">
                            <center>
                                <label for="phoneno"><b>Phone Number</b></label>
                            </center>
                            <input type="text" placeholder="Enter your phone number" name="phoneno" required>
                        </div>
                        <label for="email"><b>Email id</b></label>
                        <input type="text" placeholder="Enter your mail id" name="email" required>
                        <label for="address"><b>Address</b></label>
                        <input type="text" placeholder="Enter your current address" name="address" required>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="submit" name="submit">Submit</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>