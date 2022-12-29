<!DOCTYPE html>
    <html lang='en'>
    <head>

    </head>

    <body class="">

        <div class="content">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-danger">
                                    <h4 class="card-title">Choose Profile</h4>
                                    <p class="card-category">Delete your profile</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4">
                                            <div class="card card-profile">
                                                <input type="file" name="image" value="" accept="image/*" />
                                                <div class="card-body">
                                                    <h6 class="card-category text-gray">Student Profile</h6>
                                                    <h4 class="card-title">Student name</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
include 'config.php';
$uid = $_GET['id'];
$query = "SELECT * FROM student WHERE id = '".$uid."'";
$result = mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);

?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">ID </label>
                                                    <input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating"> Register Number </label>
                                                    <input type="text" class="form-control" name="regno" value="<?php echo $row['regno']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Student name</label>
                                                    <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Father's name</label>
                                                    <input type="text" class="form-control" name="fathers_name" value="<?php echo $row['fathers_name']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Date of Birth</label>
                                                    <input type="text" class="form-control" name="dob" value="<?php echo $row['dob']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Department</label>
                                                    <select class="form-control" name="dept">
                                                        <option> </option>
                                                        <option value="CSE" <?php if($row[ "dept"]=='CSE' ) { echo "Selected"; } ?>>CSE</option>
                                                        <option value="IT" <?php if($row[ "dept"]=='IT' ) { echo "Selected"; } ?>>IT</option>
                                                        <option value="ECE" <?php if($row[ "dept"]=='ECE' ) { echo "Selected"; } ?>>ECE</option>
                                                        <option value="EEE" <?php if($row[ "dept"]=='EEE' ) { echo "Selected"; } ?>>EEE</option>
                                                        <option value="MECHANICAL" <?php if($row[ "dept"]=='MECHANICAL' ) { echo "Selected"; } ?>>MECHANICAL</option>
                                                        <option value="CIVIL" <?php if($row[ "dept"]=='CIVIL' ) { echo "Selected"; } ?>>CIVIL</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Year</label>
                                                    <select class="form-control" name="year">
                                                        <option> </option>
                                                        <option value="I" <?php if($row[ "year"]=='I' ) { echo "Selected"; } ?>>I</option>
                                                        <option value="II" <?php if($row[ "year"]=='II' ) { echo "Selected"; } ?>>II</option>
                                                        <option value="III" <?php if($row[ "year"]=='III' ) { echo "Selected"; } ?>>III</option>
                                                        <option value="IV" <?php if($row[ "year"]=='IV' ) { echo "Selected"; } ?>>IV</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Section</label>
                                                    <select class="form-control" name="section">
                                                        <option> </option>
                                                        <option value="A" <?php if($row[ "section"]=='A' ) { echo "Selected"; } ?>>A</option>
                                                        <option value="B" <?php if($row[ "section"]=='B' ) { echo "Selected"; } ?>>B</option>
                                                        <option value="C" <?php if($row[ "section"]=='C' ) { echo "Selected"; } ?>>C</option>
                                                        <option value="D" <?php if($row[ "section"]=='D' ) { echo "Selected"; } ?>
                                                            >D</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Gender</label>
                                                    <select class="form-control" name="gender">
                                                        <option> </option>
                                                        <option value="Male" <?php if($row[ "gender"]=='Male' ) { echo "Selected"; } ?>>Male</option>
                                                        <option value="Female" <?php if($row[ "gender"]=='Female' ) { echo "Selected"; } ?>>Female</option>
                                                        <option value="Other" <?php if($row[ "gender"]=='Other' ) { echo "Selected"; } ?>>Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Blood group</label>
                                                    <select class="form-control" name="bg">
                                                        <option> </option>
                                                        <option value="O+" <?php if($row[ "bg"]=='O+' ) { echo "Selected"; } ?>>O+</option>
                                                        <option value="O-" <?php if($row[ "bg"]=='O-' ) { echo "Selected"; } ?>>O-</option>
                                                        <option value="A+" <?php if($row[ "bg"]=='A+' ) { echo "Selected"; } ?>>A+</option>
                                                        <option value="A-" <?php if($row[ "bg"]=='A-' ) { echo "Selected"; } ?>>A-</option>
                                                        <option value="B+" <?php if($row[ "bg"]=='B+' ) { echo "Selected"; } ?>>B+</option>
                                                        <option value="B-" <?php if($row[ "bg"]=='B-' ) { echo "Selected"; } ?>>B-</option>
                                                        <option value="AB+" <?php if($row[ "bg"]=='AB+' ) { echo "Selected"; } ?>>AB+</option>
                                                        <option value="AB-" <?php if($row[ "bg"]=='AB-' ) { echo "Selected"; } ?>>AB-</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">State</label>
                                                    <select class="form-control" name="state">
                                                        <option> </option>
                                                        <option value="Tamilnadu" <?php if($row[ "state"]=='Tamilnadu' ) { echo "Selected"; } ?>>Tamilnadu</option>
                                                        <option value="Andra pradesh" <?php if($row[ "state"]=='Andra pradesh' ) { echo "Selected"; } ?>>Andra pradesh</option>
                                                        <option value="Kerala" <?php if($row[ "state"]=='Kerala' ) { echo "Selected"; } ?>>Kerala</option>
                                                        <option value="Maharashtra" <?php if($row[ "state"]=='Maharashtra' ) { echo "Selected"; } ?>>Maharashtra</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Email</label>
                                                    <input type="text" class="form-control" name="email" value="<?php echo $row['email']; ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Phone number</label>
                                                    <input type="text" class="form-control" name="phno" value="<?php echo $row['phno']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Address</label>
                                                    <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <?php
include 'config.php';
$uregno = $_GET['regno'];
$query = "SELECT * FROM student_mark_list WHERE regno='".$uregno."'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
?>
                                                            <div class="card-header card-header-danger">
                                                                <h4 class="card-title ">Semester 1</h4>
                                                            </div>
                                                            <div class="card-body">

                                                                <div class="table-responsive">
                                                                    <table class="table">
                                                                        <thead class=" text-danger">
                                                                            <th>
                                                                                <b>Subjects</b>
                                                                            </th>
                                                                            <th>
                                                                                <b>Marks</b>
                                                                            </th>

                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    M-I
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" name="sub1" value="<?php echo $row['sub1'];?>">
                                                                                </td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    E-1
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" name="sub2" value="<?php echo $row['sub2'];?>">
                                                                                </td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    P-I
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" name="sub3" value="<?php echo $row['sub3'];?>">
                                                                                </td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    C-I
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" name="sub4" value="<?php echo $row['sub4'];?>">
                                                                                </td>

                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    EC
                                                                                </td>
                                                                                <td>
                                                                                    <input type="text" name="sub5" value="<?php echo $row['sub5'];?>">
                                                                                </td>

                                                                            </tr>
                                                                            <td>
                                                                                ED
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub6" value="<?php echo $row['sub6'];?>">
                                                                            </td>

                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-header card-header-danger">
                                                            <h4 class="card-title ">Semester 2</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead class=" text-danger">
                                                                        <th>
                                                                            <b>Subjects</b>
                                                                        </th>
                                                                        <th>
                                                                            <b>Marks</b>
                                                                        </th>

                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                M-II
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub7" value="<?php echo $row['sub7']?>">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                E-II
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub8" value="<?php echo $row['sub8'];?>">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                P-II
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub9" value="<?php echo $row['sub9'];?>">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                C-II
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub10" value="<?php echo $row['sub10'];?>">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                CT
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub11" value="<?php echo $row['sub11'];?>">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                CP
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub12" value="<?php echo $row['sub12'];?>">
                                                                            </td>

                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-header card-header-danger">
                                                            <h4 class="card-title ">Semester 3</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead class=" text-danger">
                                                                        <th>
                                                                            <b>Subjects</b>
                                                                        </th>
                                                                        <th>
                                                                            <b>Marks</b>
                                                                        </th>

                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                EC-I
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub13" value="<?php  echo $row['sub13'];?>">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                PE
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub14" value="<?php echo $row['sub14'];?>">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                AWP
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub15" value="<?php echo $row['sub15'];?>">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                TLW
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub16" value="<?php echo $row['sub16'];?>">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                MPMC
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub17" value="<?php echo $row['sub17'];?>">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                TPDE
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub18" value="<?php echo $row['sub18'];?>">
                                                                            </td>

                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="card">
                                                        <div class="card-header card-header-danger">
                                                            <h4 class="card-title ">Semester 4</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead class=" text-danger">
                                                                        <th>
                                                                            <b>Subjects</b>
                                                                        </th>
                                                                        <th>
                                                                            <b>Marks</b>
                                                                        </th>

                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                EC-II
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub19" value="<?php echo $row['sub19'];?>">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                OC
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub20" value="<?php echo $row['sub20'];?>">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                POM
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub21" value="<?php echo $row['sub21'];?>">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                CA
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub22" value="<?php echo $row['sub22'];?>">
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                ACA
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub23" value="<?php echo $row['sub23'];?>">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                PLP
                                                                            </td>
                                                                            <td>
                                                                                <input type="text" name="sub24" value="<?php echo $row['sub24'];?>">
                                                                            </td>

                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <center>
                                            <button type="submit" onclick="deleteData(<?php echo$row['id']?>)" name="delete" class="btn btn-danger">Delete Profile
                                            </button>
                                        </center>
                                        <div class="clearfix"></div>
            </form>
            </div>
            </div>
            </div>
            </div>
            </div>
        </div>
        </div>
        </form>
        <script>
            function deletedata(str) {
                var id = str
                if (confirm("Are you sure want to delete the data")) {
                    $.ajax({
                        type: "post",
                        url: "delete3.php",
                        data: "id=" + id '
                        success: function() {}
                    });
                };
        </script>
    </body>

    </html>