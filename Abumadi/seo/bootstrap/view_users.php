<!DOCTYPE html>
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="style.css" />
    <title>View Users</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">Tous les utilisateurs</h1>  
    <a href=mytries.php>quelques users</a>
  
        <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  


            <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
                <thead>  

                <tr>  

                    <th>Id</th>  
                    <th>Nom</th> 
                    <th>Post-Nom</th>
                    <th>Prenom</th>  
                    <th>Genre</th>  
                    <th>Promotion</th> 
                    <th>Departement</th>  
                    <th>Email</th>
                    <th>Telephone</th>  
                    <th>Adresse</th>
                    <th>Matricule</th>
                    <th>DEL</th>
                    <th>UP</th>
                    
                </tr>  
                </thead>  

                <?php  
                include("db_connection.php");  
                $view_users_query="select * from etudiants";//select query for viewing users.  
                $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
                
/* @var $run type */
while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
                {  
                    $id=$row[0];  
                    $nom=$row[1];  
                    $postnom=$row[2];
                    $prenom=$row[3];
                    $genre=$row[4]; 
                    $promotion=$row[5];
                    $departement=$row[6];
                    $email=$row[7];
                    $telephone=$row[8];
                    $adresse=$row[9];
                    $matricule=$row[10];
                    
                    
                ?>  

                <tr>  
        <!--here showing results in the table -->  
                    <td><?php echo $id;  ?></td>  
                    <td><?php echo $nom;  ?></td>  
                    <td><?php echo $postnom;  ?></td>  
                    <td><?php echo $prenom;  ?></td> 
                    <td><?php echo $genre;  ?></td>
                    <td><?php echo $promotion;  ?></td>
                    <td><?php echo $departement;  ?></td>
                    <td><?php echo $email;  ?></td>
                    <td><?php echo $telephone;  ?></td>
                    <td><?php echo $adresse;  ?></td>
                    <td><?php echo $matricule;  ?></td>
                    <td><a href="delete.php?del=<?php echo $id ?>"><button class="btn btn-danger glyphicon glyphicon-erase">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger--> 
                    <td><a href="update.php?upd=<?php echo $id ?>"><button class="btn btn-danger">Update</button></a></td>
                </tr>  

                <?php } ?> 

            </table>  
     </div>  
</div>  
  
  
</body>  
  
</html>

