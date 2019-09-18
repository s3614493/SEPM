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
		echo "The username is exist! <br/><br/>Please enter another one via <a href='client.html'>client.html</a>";
	}else{
		//open a file named "database.txt"
		$file = fopen("Mdatabase.txt","a");
		//insert this input (plus a newline) into the database.txt
		fwrite($file,$input."\n");
		fwrite($file,$gg."\n");
		//close the "$file"
		fclose($file);
		echo "The input is added to the database.txt. <br/><br/>Please try to enter the same input again via <a href='client.html'>client.html</a>";
	}
?>

</body>
</html>
	