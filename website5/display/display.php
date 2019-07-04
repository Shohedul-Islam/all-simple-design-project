<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="display.css">
</head>

<body>
    <h1>Student List</h1>
    <table border="1px" style="width:100%;height:auto; margin:auto;">
        <tr>
            <td>Id</td>
            <td>Student Name</td>
            <td>Father Name</td>
            <td>Roll</td>
            <td>Shift</td>
            <td>Email</td>
            <td>Gender</td>
            <td>Date Of Birth</td>
            <td>Addres</td>
            <td>Mobile Number</td>
        </tr>

        <?php
			$con=mysqli_connect('localhost','root','');

                         if(!$con)
                         {
                             echo'not connected to server';
                         } 
                         else{
                             echo"connect to server<br> ";
                         }
						 
                         if(!mysqli_select_db($con,'student-information'))
                         {
                             echo'database not selected';
                         } 
					

			$sql = "SELECT id, sname,fname,roll,shift,email,gender,birthday,addres,mobile FROM student-list";
$result = $con->query($sql);

          if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         echo"<tr>";
         echo"<td>".$row["id"]."</td>";
        echo"<td>".$row["sname"]."</td>";
         echo"<td>".$row["fname"]."</td>";
         echo"<td>".$row["roll"]."</td>";
		 echo"<td>".$row["shift"]."</td>";
         echo"<td>".$row["email"]."</td>";
        echo"<td>".$row["gender"]."</td>";
        echo"<td>".$row["birthday"]."</td>";
        echo"<td>".$row["addres"]."</td>";
        echo"<td>".$row["mobile"]."</td>";
         echo"</tr>";
    }
} else {
    echo "0 results";
}

$con->close();
?>
    </table>
</body>

</html>
