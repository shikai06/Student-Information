<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
<body>
<?php
  include "config.php";

      $fname=$lname=$gender=$bday=$age=$course=$year=$address=$citizenship=$status=$bt="";
      $ID=0; //variables

          if(isset($_GET['id']) and$_SERVER["REQUEST_METHOD"]=="GET")//request method to GET
          { 
              $ID=$_GET["id"];
              $sql = "SELECT * FROM infotbl WHERE ID=".$ID.""; //Query getting recent data
              $rs=$conn->query($sql);

                        if ($rs->num_rows > 0) 
                        {
                         
                               while($row = $rs->fetch_assoc()) 
                               {
                                $fname=$row["FirstName"];
                                $lname=$row["LastName"];
                                $gender=$row["Gender"];
                                $bday=$row["Dateofbirth"];
                                $age=$row["Age"];
                                $course=$row["Course"];
                                $year=$row["Year"];
                                $address=$row["Address"];
                                $citizenship=$row["Citizenship"];
                                $status=$row["Status"];
                                $bt=$row["BloodType"];
                              }
                        }
          }

            if(isset($_POST['update']) and $_SERVER["REQUEST_METHOD"]=="POST")//post method

            { 
                              $fname=$_POST["fname"];
                              $lname=$_POST["lname"];
                              $gender=$_POST["gender"];
                              $bday=$_POST["bday"];
                              $age=$_POST["age"];
                              $course=$_POST["course"];
                              $year=$_POST["year"];
                              $address=$_POST["address"];
                              $citizenship=$_POST["citizenship"];
                              $status=$_POST["status"];
                              $bt=$_POST["bt"];


                $sql = "UPDATE infotbl SET FirstName='$fname', LastName='$lname', Gender='$gender', Dateofbirth='$bday'
                , Age='$age', Course='$course', Year='$year', Address='$address', Citizenship='$citizenship', Status='$status'
                , BloodType='$bt'WHERE ID='".intval($_REQUEST['id'])."'";


              if (mysqli_query($conn, $sql)) //checking query 

              { 
                echo "Updated record successfully";
                $fname=$lname="";
              } 
              else 
              {
                echo "Error" . $sql . mysqli_error($conn);
              }
            }

            mysqli_close($conn);
?>

<!--FORM in UPDATE-->
<div class="form">
    <form action="#" method="post">
    FIRST NAME:
        <input type="text" name="fname" value="<?php echo $fname;?>">
        <br><br>
    LAST NAME:
        <input type="text" name="lname" value="<?php echo $lname;?>">
        <br><br>
    GENDER:
         <input type="radio" name="gender" 
            <?php if (isset($gender) && $gender=="female") echo "checked";?>  
         value="female">Female
         <input type="radio" name="gender" 
            <?php if (isset($gender) && $gender=="male") echo "checked";?> 
         value="male">Male
         <br><br>
    DATE OF BIRTH:
        <input type="date" name="bday" value="<?php echo $bday;?>"><br><br>
    AGE:
        <input type="text" name="age" value="<?php echo $age;?>">
        <br><br>
    COURSE: <select name="course">
            <option value="<?php echo $course;?>"><?php echo $course;?></option>
            <option value="Information Technology">Information Technology</option>
            <option value="Nursing">Nursing</option>
            <option value="Medical Technology">Medical Technology</option>
            <option value="RadTech">RadTech</option>
            <option value="Physical Therapy">Physical Therapy</option>
            <option value="Business and Accountancy">Business and Accountancy</option>
            <option value="Criminology">Criminology</option>
            <option value="HRIM">HRIM</option>
            <option value="School of Law">School of Law</option>
            <option value="Education">Education</option>
          </select><br><br>
    YEAR: <select name="year">
            <option value="<?php echo $year;?>"><?php echo $year;?></option>
            <option value="Freshmen">Freshmen</option>
            <option value="Sophomore">Sophomore</option>
            <option value="Junior">Junior</option>
            <option value="Senior">Senior</option>
      </select><br><br>
    ADDRESS:
          <input type="text" name="address" value="<?php echo $address;?>">
        <br><br>
    CITIZENSHIP:
          <input type="text" name="citizenship" value="<?php echo $citizenship;?>">
        <br><br>
    STATUS: <select name="status">
            <option value="<?php echo $status;?>"><?php echo $status;?></option>
            <option value="Single">Single</option>
            <option value="Engaged">In a relationship</option>
            <option value="Engaged">Engaged</option>
            <option value="Married">Married</option>
            <option value="Widowed">Widowed</option>
            <option value="Separated">Separated</option>
            <option value="Divorce">Divorce</option>
            <option value="Just Hungry">Just Hungry</option>
      </select><br><br>
    BLOOD TYPE: <select name="bt">
            <option value="<?php echo $bt;?>"><?php echo $bt;?></option>
            <option value="O">O</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
      </select><br><br>


    <!-- BUTTTONS-->
    <input id="button" type="submit" name="update" value="Update">

        <input id="button" name="cancel" type="submit" onclick="history.go(-1);"  value="Cancel">
    </form>
</div>
</body>
</html>