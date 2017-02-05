<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

<div class="form">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); //pag send sa form return to the page itself?>">
    <br><br>
FIRST NAME:
        <input type="text" name="fname"><!--FIRSTNAME Textbox-->
      <br><br>

LAST NAME:
       <input type="text" name="lname"><!--LASTNAME Textbox-->
      <br><br>

GENDER: <!--GENDER Radio Button-->
      <input type="radio" name="gender" 
        <?php if (isset($gender) && $gender=="female") echo "checked";?>  
     value="female">Female
      <input type="radio" name="gender" 
        <?php if (isset($gender) && $gender=="male") echo "checked";?> 
     value="male">Male
       <br><br>

DATE OF BIRTH:
     <input type="date" data-format="yyyy-m-dd" name="bday"><!--BIRTHDAY DATEPICKER-->
    <br><br>

 AGE:
      <input type="text" name="age"><!--Age Textbox-->
    <br><br>

COURSE: <select name="course"><!--COURSE DROPDOWNLIST-->
            <option></option>
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
        </select>
  <br><br>

YEAR: <select name="year"><!--YEAR DropDownList-->
          <option></option>
          <option value="Freshmen">Freshmen</option>
          <option value="Sophomore">Sophomore</option>
          <option value="Junior">Junior</option>
          <option value="Senior">Senior</option>
     </select>
  <br><br>

ADDRESS:
      <input type="text" name="address"><!--ADDRESS Textbox-->
    <br><br>

CITIZENSHIP:
      <input type="text" name="citizenship"><!--CITIZENSHIP Textbox-->
    <br><br>

STATUS: <select name="status"><!--STATUS Dropdownlist-->
            <option></option>
            <option value="Single">Single</option>
            <option value="Engaged">In a relationship</option>
            <option value="Engaged">Engaged</option>
            <option value="Married">Married</option>
            <option value="Widowed">Widowed</option>
            <option value="Separated">Separated</option>
            <option value="Divorce">Divorce</option>
            <option value="Just Hungry">Just Hungry</option>
      </select>
  <br><br>

BLOOD TYPE: <select name="bt"><!--BLOODTYPE DROPDOWN LIST-->
                 <option></option>
                <option value="O">O</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
        </select>
        <br><br>


        <input type="submit" value="Submit" name="submit" href="index.php"> <!--SUBMIT BUTTON-->
    <a onclick="history.back()"> <!--Mu balik sya og usa ka page base sa history-->
        <button class="btn">Go Back</button> <!--GO BACK BUTTON-->
    </a>
</form>
</div>
</body>
</html>

<!--PROCESS INSERTING INPUTS IN DATABASE-->
<?php
if(isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") //checking request method using POST
{
  include"config.php";//connection page
  //SQL query for inserting data in the database
  $mysqli = "INSERT INTO infotbl (FirstName, LastName, Gender, Dateofbirth, Age, Course, Year, Address, Citizenship, Status, BloodType)
  VALUES('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["gender"]."','".$_POST["bday"]."','".$_POST["age"]."','".$_POST["course"]."','".$_POST["year"]."','".$_POST["address"]."','".$_POST["citizenship"]."','".$_POST["status"]."','".$_POST["bt"]."')";
  
  if(mysqli_query($conn,$mysqli)){ //checking query
    echo "Recorded Succesfully";
  }else{
    echo "ERROR: " .$mysqli. "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn); //close connection
}

?>
