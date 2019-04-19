
        <?php
        include "include.php";
         session_start();
		$rr=$_SESSION['Seats_no'];
		$size=sizeof($_POST);
		$number=$size/5;   //here 3 is number of column in the HTML table
		for($i=1;$i<=$rr;$i++)
		{
			$index1="fname".$i;
			$fname[$i]=$_POST[$index1];
			$index2="lname".$i;
			$lname[$i]=$_POST[$index2];
			$index3="date2".$i;
			$date2[$i]=$_POST[$index3];	
			$date2[$i] = strip_tags( utf8_decode( $date2[$i] ) );
			$index3="age".$i;
			$age[$i]=$_POST[$index3];	
			$index3="aadhar".$i;
			$aadhar[$i]=$_POST[$index3];	
		}	
		for($i=1;$i<=$rr;$i++)
		{
            $s1="SELECT * FROM `aadhar` where Aadhar_no='".$aadhar[$i]."'";
        $result=mysql_query($s1) or die(mysql_error());
        if(mysql_num_rows($result) == 0)
        {
	       
	        $_SESSION['Aadharv'] = 'Plz Input write information';
  	        header('Location: passengerd.php');
	//echo "<h3>Invalid username and password combination<br>Go to <a href='home.php'>homepage</a></h3>";
        }
        else{
        
		
			$query = "INSERT INTO `passenger`(`UserID`,`Bus_id`,`Fname`,`Lname`,`dob`,`age`,`Origin`,`Destination`,`JourneyDate`,`Aadhar_no`)VALUES((SELECT UserID FROM user WHERE Username LIKE '".$_SESSION['user']."'),'". $_SESSION['Bus_id'] ."','". $fname[$i] ."','". $lname[$i] ."', '". $date2[$i] ."','". $age[$i] ."','". $_SESSION['ori'] ."','". $_SESSION['des'] ."','". $_SESSION['DATE'] ."',(SELECT Aadhar_no FROM aadhar WHERE Fname LIKE '".$fname[$i]."'))";
		  $number = mysql_query($query) or die(mysql_error());
		 $_SESSION["fname{$i}"] = $fname[$i];
         $_SESSION["lname{$i}"] = $lname[$i];
         header('Location: seat.php');
        }
    }
		
?>