<?php
   include 'db_connect.php';

    if(isset($_POST['submit'])){

        //retrieve data from the form using 'name' attributes
        $Student_Full_Name = $_POST['Student_Full_Name'];    
        $Date_of_Birth = $_POST['Date_of_Birth'];    
        $Gender = $_POST['Gender'];    
        $Current_School = $_POST['Current_School'];    
        $Class_Applying_For = $_POST['Class_Applying_For'];    
        $Parent_Guardian_Name = $_POST['Parent_Guardian_Name'];    
        $Parent_Guardian_Phone = $_POST['Parent_Guardian_Phone'];    
        $Parent_Guardian_Email = $_POST['Parent_Guardian_Email'];    
        $Physical_Address = $_POST['Physical_Address'];    
        $Report_Card_from_former_school = $_POST['Report_Card_from_former_school'];    

        //This querry asks to insert data into my table named "alumni"
        $sql = "INSERT INTO student_application_form (Student_Full_Name,Date_of_Birth,Gender,Current_School,Class_Applying_For,Parent_Guardian_Name,Parent_Guardian_Phone,Parent_Guardian_Email,Physical_Address,Report_Card_from_former_school) VALUES ('$Student_Full_Name','$Date_of_Birth','$Gender','$Current_School','$Class_Applying_For','$Parent_Guardian_Name','$Parent_Guardian_Phone','$Parent_Guardian_Email','$Physical_Address','$Report_Card_from_former_school')";
        
        if ($conn->query($sql) === TRUE){
            echo "Registration Scuccess!";
        }
        else{
            echo "Error:" . $conn->error;
        }
    }
    $conn->close(); 
?>
