<?php
include("bridge.php");

$query = "SELECT * FROM barangay_tbl";

$result = mysqli_query($con,$query);
?>
<html>
<body>
	<table border="1">
		<tr>
            <td>ID</td>
			<td>REGION</td>
            <td>PROVINCE</td>
            <td>CITY/MUNCIPALITY</td>
            <td>BARANGAY</td>
            <td>FIRST NAME</td>
            <td>MIDDLE NAME</td>
            <td>LAST NAME</td>
            <td>DATE OF BIRTH</td>
            <td>SEX</td>
            <td>CIVILSTATUS</td>
            <td>HIGHEST EDUCATION ATTAINMENT</td>
            <td>OCCUPATION</td>
            <td>ADDRESS</td>
            <td>CELL PHONE NO.</td>
            <td>BARANGAY TEL. NO.</td>
			

		</tr>
<?php
//opening loop
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){	
?>		
		
		<tr>
            <td nowrap><?php echo $row['id']; ?></td>
			<td nowrap><?php echo $row['region']; ?></td>
            <td nowrap><?php echo $row['province']; ?></td>
            <td nowrap><?php echo $row['city']; ?></td>
            <td nowrap><?php echo $row['barangay']; ?></td>
            <td nowrap><?php echo $row['fname']; ?></td>
            <td nowrap><?php echo $row['mname']; ?></td>
            <td nowrap><?php echo $row['lname']; ?></td>
            <td nowrap><?php echo $row['birthday']; ?></td>
            <td nowrap><?php echo $row['sex']; ?></td>
            <td nowrap><?php echo $row['cstatus']; ?></td>
            <td nowrap><?php echo $row['educ']; ?></td>
            <td nowrap><?php echo $row['occupation']; ?></td>
            <td nowrap><?php echo $row['address']; ?></td>
            <td nowrap><?php echo $row['cptel']; ?></td>
            <td nowrap><?php echo $row['bhtel']; ?></td>
		</tr>
		
<?php
	} // close bracket for while
}//close bracket for if
else{
	echo "0 Record";
}
?>

	</table>
    <a href="index.php"><input type="button" value="REGISTER">
</body>
</html>