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
                         
                            $sname=$_POST['sname'];
                            $fname=$_POST['fname'];
                            $roll=$_POST['roll'];
                            $shift=$_POST['Shift'];
                            $email=$_POST['email'];
                            $gender=$_POST['gender'];
                            $birthday=$_POST['date'];
                            $addres=$_POST['address'];
                            $mobile=$_POST['mobile'];
						 
                         $sql="INSERT INTO `student-list` (`id`, `sname`, `fname`, `roll`, `shift`, `email`, `gender`, `birthday`, `addres`, `mobile`) VALUES('id','$sname','$fname','$roll','$shift','$email','$gender','$birthday','$addres','$mobile')";
                         if(!mysqli_query($con,$sql))
                         {
                             echo'not inserted';
                         }
                         else{
                             echo'This information has been saved in database';
                         }
						 
						 
                        
                
            ?>
