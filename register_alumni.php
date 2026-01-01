<?php
   include 'db_connect.php';

if(isset($_POST['submit'])){

    //retrieve data from the form using 'name' attributes
    $Full_Name = $_POST['Full_Name'];
     $Year_Of_Graduation = $_POST['Year_Of_Graduation'];
    $Physical_Address = $_POST['Physical_Address'];
    $Phone_Number = $_POST['Phone_Number'];
    $Current_Profession = $_POST['Current_Profession'];
    $Short_Biography = $_POST['Short_Biography'];
   
  
    //This querry asks to insert data into my table named "alumni"
    $sql = "INSERT INTO alumni (Full_Name,Year_Of_Graduation,Physical_Address,Phone_Number,Current_Profession,Short_Biography) VALUES ('$Full_Name','$Year_Of_Graduation','$Physical_Address','$Phone_Number','$Current_Profession','$Short_Biography')";
    
    if ($conn->query($sql) === TRUE){
        echo "Registration Scuccess!";
    }
    else{
        echo "Error:" . $conn->error;
    }
}
    $conn->close(); 
?>