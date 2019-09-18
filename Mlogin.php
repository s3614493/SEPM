<html>
<body>

<?php
	
	//Receive input from clint side
	$input = $_POST['enter'];
	$gg = $_POST['password'];
	
	//check if the input exist
	$exist = 0;

           //read the file line by line
          $file = fopen("Mdatabase.txt","r");
           while(!feof($file))  {
                 // get a line without the last “newline” character
                $line = trim(fgets($file));
                //compare the content of the input and the line
               if($line == $input){
				   
				   $exist = 1;
				   	break;
	     }		
		   }
		   fclose($file);	
		   
		   if($exist == 1){
		echo "login in succussful";
			
	     }			
		 else{
			 echo "password or username not right";
		 }
            
          
?>

</body>
</html>