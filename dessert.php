<? php
session_start();

if(isset($_SESSION['submitted'])){
	header("Location: ./appetizers_results.php");
	}
?>
	
<!DOCTYPE html>

<html>
    <head>
        <title>Dessert</title>
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
            	<li>Dessert</li>
            </ul>
                
            </span>
    
    </h3>
      
      <p><h4>  </h4></p><br><br>
      
    
      </form>  

<? php
$_SESSION['submitted'] = true;
?>
        
    </div>
    </div>
        
    <footer>
        <p><small><center>Brought to you by P. Ficklin</center></small>

    </footer>
    
	
</body>
</html>
    