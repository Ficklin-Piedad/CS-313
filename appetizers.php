	
<!DOCTYPE html>

<html>
    <head>
        <title>Appetizers</title>
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
            	<li>Appetizers</li>
            </ul>
                
            </span>
    
    </h3>
    
    <?php
    
    echo 'Helloooo!!!';
    
   
	require 'recipebox_db.php';
	$db = dbConnect();
	echo 'Work please';
	
	  try
	  {
	  foreach ($db->query('SELECT * FROM recipes')as $row) {
        echo '<b>'.$row['recipe_category'].' '.$row['recipe_name'].':'.$row['ingredients'].' '.['content'].'<br />';
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
    