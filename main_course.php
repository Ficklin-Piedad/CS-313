 <!DOCTYPE html>

<html>
    <head>
        <title>Main Course</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="recipes-style.css" media="screen">
    </head>
    
    <body>
    <form action="survey_results.php" method="POST">
      
        
        <header>
            <div class="wrapper">
                <div class="logo">
                <img src="logo.jpg"  alt="logo" height="80" width="150"> 
		
	<nav>
		<ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="assignments.php">Assignments</a>
                    </li>
                </ul>
        </nav>
                </div>
            </div>
        </header>
        
        <h2><strong></strong></h2> 
          
        
        <div class="paragraph">
        <div class="wrapper">
   
            
    <h3>
            <span style="color: #800000;">
            <ul>
            	<li>Main Course</li>
            </ul>
                
            </span>
    
    </h3>
    <?php
    try
    {
	  
	$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST');
	$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT');
	$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
	$dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
	$dbName = "recipe_box";
	$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);  //create a secure database variable
	  echo '<p>';
	  
	  foreach ($db->query('SELECT * FROM mainCourse')as $row) {
        echo '<b>'.$row['recipe_category'].' '.$row['recipe_name'].':'.$row['recipe_content'].'<br />';
      }
	
	echo '<p>';
}

     catch (PDOException $ex)
     {
     echo 'Error!:' . $ex->getMessage();
     die();
     }
     ?> 
      <p><h4> </h4></p><br><br>
      
  
    </div>
    </div>
        
    <footer>
        <p><small><center>Brought to you by P. Ficklin</center></small>

    </footer>
    
	
</body>
</html>
    