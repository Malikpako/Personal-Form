
<html>
 
    <head>
        
        
        
        <meta charset="UTF-8">
        <title> Form </title>
        <link rel="stylesheet" type="text/css" href="Form.css">
        
        
        
    </head>
    
    
    
    <body>
        
        
        <center>
        <h1>Personal Form</h1>	

        

        <div id="Form"> </div>

        <script type="text/javascript" src="Battleshio.js"></script>
   
    
    
        <form method="post" action="calc.php">
  First name:
  <input type="text" name="firstname" value="">
  <br>
  Last name:
  <input type="text" name="lastname" value="">
  <br>
  Gender:
    <label for="male">Male</label>
        <input type="radio" name="gender" id="male" value="male">
        <label for="female">Female</label>
        <input type="radio" name="gender" id="female" value="female"><br>
  <tr>
                    <td>Birthday</td>
                    <td> <input type="date" name="bday" size="35" required><br>
                    </td>
                </tr>
  

  <br><br>
  


        

            Mobile No.: <input type="number" name="FirstName" value=""><br>
            e.mail: <input type="text" name="LastName" value=""><br>


        
            Place Of Birth: <input type="text" name="PlaceOfBirth" value=""><br>
        

        
        <input type="submit" value="Submit">

</form>
 </center>
    </body>
</html>