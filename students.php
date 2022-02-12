<?php 

//function to insert a student
function insert_student(){
    include '../api/connection.php';//connection to the database
    //if a post request has been made it will execute the code bellow
    if(isset($_POST['submit'])){
    //stores input from post request and will be used for the values in the sql statement
    $student_name=$_POST['studentname'];
    $student_age=$_POST['studentage'];
    $student_number=$_POST['studentnumber'];
    $id=$_POST['studentid'];
    //sql statement that stores the values to the database
    $mysqlInsert ="INSERT INTO student (student_name,student_age,student_number,id) 
    VALUES('$student_name','$student_age','$student_number','$id')";
    //executes the query
    $studentquery=$serverConnection->query($mysqlInsert);
    //checks if query works
    if(!$studentquery){// will show error if request has failed
        // message to show that their is an error
       die(mysqli_error($serverConnection));
       //http response code 404 not found
       http_response_code(404);
    }
    else{
        //http response code 200 ok
        http_response_code(200);
        //displays that data insert works
        echo "Data has been accepted";
        echo"<br>";
        echo"<br>";
    }
   
   
}
}

//function to get a specific student
function get_student($id){
    include '../api/connection.php';//connection to the database
    //sql squery statement 
    $studentQuery = "SELECT *FROM student WHERE id=$id LIMIT 1";
     //executes the server connection and accepts the query
    $getAStudent =$serverConnection->query($studentQuery);
    //condition statement if it works or not
    if($getAStudent){
    //loops through the data to get a single student record by a specified id
    while($studentdata=mysqli_fetch_assoc($getAStudent)){
    //displays the a single student data
    echo "Student name: ".$studentdata['student_name']."<br>";
    echo "Student age: ".$studentdata['student_age']."<br>";
    echo "Student number: ".$studentdata['student_number']."<br>";
    echo "Student id: ".$studentdata['id']."<br>";
    }   
    //http response code 200 ok
    http_response_code(200);
    }
    else{
     // message to show that their is an error
     die(mysqli_error($serverConnection));
     //http response code 404 not found
     http_response_code(404);
    }

}
      


insert_student();//exectutes the function callback

if(isset($_GET['submitId'])){// if button name is find Id get request of that form
    $id=$_GET['id'];// makes sure we get the inputted id 
    get_student($id);//function callback to get a specified student id
}

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
    <style>
        *{
            box-sizing: border-box;
        }
        table {
            border-collapse: collapse;
            background-color: #c5bcbc;
        }
        table thead{
            text-transform: capitalize;
        }
        table,th,tr,td,thead,tbody{
            padding:2px;
            border: 2px solid gainsboro;
        }
        form{
            background-color: #c5bcbc;
            width: 25%;
          
        }
      
        form input[type="text"]{
          
            padding: 10px 10px;
            display: inline-block;
            margin: 5px 0;
            box-sizing: border-box;

        }
        form input[type=submit] {
        border: none 4px solid green;
        padding: 10px 10px;
        margin: 5px 0;
        border-radius: 5px 5px;

        }

     
    </style>
</head>
<body>
    
    <div id="form_Contatiner">
    <br>
        <hr>
     
    <form  method="post">
     
        
            <label >Student Name:</label>
            <input type="text" class="formInput" placeholder="Enter student name" name="studentname"> 
            <br>
     
     
            <label >Student Age:</label>
            <input type="text" class="formInput" placeholder="Enter student age" name="studentage"> 
            <br>
  
    
            <label >Student Number:</label>
            <input type="text" class="formInput" placeholder="Enter student number" name="studentnumber"> 
            <br>
    
     
            <label >Student Id:</label>
            <input type="text" class="formInput" placeholder="Enter student id" name="studentid"> 
            <br>
            <input type="submit" name="submit" value="submit"/>
    </form>
    </div>
    <hr>
    <br>
    <div id="student_Container">
    <table>
        <thead>
            <tr>
                <th>
                student name
                </th>
                <th>
                student age
                </th>
                <th>
                student number
                </th>
                <th>
                student id
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            //gets the connection php
             include '../api/connection.php';
             //sql squery statement 
             $studentQuery ="SELECT * FROM student";
             //executes the server connection and accepts the query
             $getStudentQuery= $serverConnection->query($studentQuery);
        
             //condition if the query works
            if($getStudentQuery){
                //while loop to display the student data
                //mysql_fetch_array allows us to get the data as an array
                while($studentRow=mysqli_fetch_array($getStudentQuery)){
                //make variable instance and have that instance take in a certain student row
                $student_name=$studentRow['student_name'];
                $student_age =$studentRow['student_age'];
                $student_number =$studentRow['student_number'];
                $id=$studentRow['id'];
                //display data accordingly to variable row instance
                echo '<tr>';
                echo '<th scope="row">'.$student_name.'</th>';
                echo '<td>'  .$student_age. '</td>';
                echo '<td>' .$student_number. '</td>';
                echo'  <td>' .$id. '</td>';
                echo '</tr>';
             
               }
            }
            
            ?>
       
        </tbody>
     
    </table>
    </div>
    <hr>
    <form method="GET">
        <label for="id">Student ID:</label>
        <input type="text" placeholder="enter student id" name="id">
        <input type="submit" name="submitId" >
        </form>
</body>
</html>
