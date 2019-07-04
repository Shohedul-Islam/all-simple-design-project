<?php    
	          			
$con=mysqli_connect('localhost','root','');

                         if(!$con)
                         {
                             echo'not connected to server';
                         } 
                         else{
                             echo"connect to server<br> ";
                         }

                         if(!mysqli_select_db($con,'St_inform'))
                         {
                             echo'database not selected';
                         }
                         $fname=$_POST['fname'];
                         $lname=$_POST['lname'];
                         $roll=$_Post['roll'];
                         $

                    
                         $sql="INSERT INTO inform(Student_name,Roll_no,Password) VALUES('$name','$roll','$password')";
                         if(!mysqli_query($con,$sql))
                         {
                             echo'not inserted';
                         }
                         else{
                             echo'This information has been saved in database';
                         }
                         header("refresh:50;url=form.html");
                
            ?>
