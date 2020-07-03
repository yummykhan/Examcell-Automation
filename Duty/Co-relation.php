<?php
 include("style.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Time_Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
function Sem() {
                var b;
                b=document.getElementById('dept').value;
                
                var u="HAS";
                var x="Computer";
                var y="Electrical";
                var z="Electronics and Telecommunications";
                var a="Mechanical";
                var c="Civil";
                var v=document.getElementById("sel");
                var w=document.getElementById("sel1");
            if(b==u){
              v.style.display="block";
               w.style.display="block";  
            }  
            else{
              v.style.display="none";
              w.style.display="none";
            }

           

            }

			function Table() {
                var e;
                e=document.getElementById('tabl').value;
                
                var d="SEM I";
                
                var f=document.getElementById("tab");
                var g=document.getElementById("tab1");
            if(e==d){
              f.style.display="block";
               g.style.display="block";  
            }  
            else{
              f.style.display="none";
              g.style.display="none";
            }

           

            }            
    </script>

</head>

<body>
<fieldset>
<form action="tt.php" method="POST">
  
<div class="container-fluid">
  <h1>Time Table:</h1>
        <label for="name" class="req">Department:</label>
            <select id="dept" onclick="Sem()" name="school_of">
              <option>No Selection</option>
              <option>HAS</option>
              <option>Computer</option>
              <option>Electrical</option>
              <option>Electronics and Telecommunications</option>
              <option>Mechanical</option>
              <option>Civil</option>
            </select>

      <LABEL id="sel1" style='display: none'></LABEL>
            <select style="display:none" id="sel" onclick="Table()" name='dept'>
              <option>SEM I</option>
              <option>SEM II</option>
             
              </select>
        

  
  <table class="table" id="tab1" style='display: none'>
    <div class="col-sm-3" style="display:none" id="tab"  name='tabl' >
      
            <select >
    <thead>
      <tr>
        <th>Exam</th>
        <th>Date</th>
         <th>Department</th>
         <th>Semester</th>
        <th>Subject</th>
         <th>Time</th>
        <th>Session</th>
       
      </tr>
    </thead>
    
     <tbody>
      
        <tr>
           <td><input type="text" name="exam" ></td>
           <td><input type="date" name="date" ></td>
            <td><input type="text" name="department"></td>
            <td><input type="text" name="sem"></td>
           <td><input type="text" name="subject" ></td>
            <td><input type="text" name="time" ></td>
           <td><input type="text" name="session"></td>
        </tr>


    
    <tr>
           <td><input type="text" name="exam" ></td>
           <td><input type="date" name="date" ></td>
            <td><input type="text" name="department"></td>
           <td><input type="text" name="year" ></td>
            <td><input type="text" name="sem"></td>
           <td><input type="text" name="subject" ></td>
            <td><input type="text" name="time" ></td>
           <td><input type="text" name="session"></td>
        </tr>

          <tr>
           <td><input type="text" name="exam"></td>
           <td><input type="date" name="date"></td>
            <td><input type="text" name="department"></td>
           <td><input type="text" name="year"></td>
            <td><input type="text" name="sem"></td>
           <td><input type="text" name="subject" ></td>
            <td><input type="text" name="time" ></td>
           <td><input type="text" name="session"></td>
        </tr> 

        <button type="submit">SUBMIT</button>
       </tbody>
        </div>
        
        </table>
     
    </div>

    

</form>
</fieldset>


</body>
</html>
                                                                                        
 