<html>
<head>
    <title>Study Material for Engineering Student</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="main-div">
        <h2>List of notes uploaded by Students</h2>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>course</th>
                            <th>branch</th>
                            <th>sem</th>
                            <th>notes</th>
                            <th>username</th>
                            <th> download</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php     
                    
                           include 'conn.php';
                           $selectquery=" select * from notes1 ";
                           $query = mysqli_query($con,$selectquery);
                           $nums= mysqli_num_rows($query);
   
                           while($res=mysqli_fetch_array($query)){
                         
                        
                               ?>
   
                               <tr>    
                                    <td> <?php echo $res['id']; ?></td> 
                                    
                                    <td><?php echo $res['course']; ?>  </td> 
                                   <td><?php echo $res['branch']; ?>  </td> 
                                   <td><?php echo $res['sem']; ?> </td> 
                                   <td><?php echo $res['notes']; ?>  </td>
                                   <td> <?php echo $res['username']; ?></td> 
                                   <td class="text-center">
                                   <a href="download.php?id=file"
                                   <?php echo $res['id'] ?>"class="btnRegister">Download</a></td>
                               </tr> 
                               <?php 
                        } 
                        ?>

                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>

                        

    
     
</body>
</html>