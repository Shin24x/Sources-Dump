<?php
include("connect.php");


$region = $_POST['Region'];
$province = $_POST['Province'];
$city = $_POST['City'];
$barangay = $_POST['Barangay'];
$fname = $_POST['Fname'];
$mname = $_POST['Mname'];
$lname = $_POST['Lname'];
$birthday = $_POST['bday'];
$sex = $_POST['gender'];
$cstatus = $_POST['status'];
$education = $_POST['education'];
$work = $_POST['Occupation'];
$address = $_POST['Address'];
$cp = $_POST['cpNum'];
$bhnum = $_POST['bhNum'];



$query = ("INSERT INTO barangay_tbl (id, region, province, city, barangay, fname, mname, lname, birthday, sex, cstatus, educ, occupation, address, cptel, bhtel, ) VALUES (null, '$region', '$province', '$city', '$barangay', '$fname', '$mname', '$lname', '$birthday', '$sex', '$cstatus', '$education', '$work', '$address', '$cp', '$bhnum')" );

$result = mysqli_query($con, $query);

?>
<script type="text/javascript">
    location.href = "view.php"
</script>