<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        /*
        if (filter_has_var(INPUT_POST, 'email')) {
            echo 'Data Found';
           
        } else {
            echo 'No Data';
        }

        

        if (filter_has_var(INPUT_POST, 'data')) {
            $email = $_POST['data'];
            # eliminar caracteres invalidos
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            echo "$email <br>";
            #ojo, un email valido lleva el '.com' o lo que sea
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "email is valid";
            } else{
                echo "email is not valid";
            } 
        }

        #LISTA DE FILTROS

        #FILTER_VALIDATE_BOOLEAN
		#FILTER_VALIDATE_EMAIL		
		#FILTER_VALIDATE_FLOAT		
		#FILTER_VALIDATE_INT			
		#FILTER_VALIDATE_IP			
		#FILTER_VALIDATE_REGEXP		
		#FILTER_VALIDATE_URL

		#FILTER_SANITIZE_EMAIL	
		#FILTER_SANITIZE_ENCODED	
		#FILTER_SANITIZE_NUMBER_FLOAT	
		#FILTER_SANITIZE_NUMBER_INT	
		#FILTER_SANITIZE_SPECIAL_CHARS	 
		#FILTER_SANITIZE_STRING		
        #FILTER_SANITIZE_URL
        
        $var = 'kdkejdked';

		if(filter_var($var, FILTER_VALIDATE_INT)){
			echo $var.'is a number';
		} else {
			echo $var.'is NOT a number';
		}

		$var = '<script>alert(1)</script>';
		echo $var;
		echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
        var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
        

        $filters = array(
            "data" => FILTER_VALIDATE_EMAIL,
            "data2" => array(
                "filter" => FILTER_VALIDATE_INT,
                "options" => array(
                    "min_range" => 1,
                    "max_range" => 150
                )
            )
        );
        */

      //  var_dump(filter_input_array(INPUT_POST, $filters));

        $arr = array(
            "name" => "luis tobar",
            "age" => "225",
            "email" => "tobar@gmail.com"
        );

        $filters2 = array(
            "name" => array(
                "filter" => FILTER_CALLBACK,
                "options" => "ucwords"
            ),
            "age" => array(
                "filter" => FILTER_VALIDATE_INT,
                "options" => array(
                    "min_range" => 1,
                    "max_range" => 120
                )
            ),
            "email" => FILTER_VALIDATE_EMAIL
        );

        print_r(filter_var_array($arr, $filters2));


    ?>
    <div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
        <input type="text" name="data" placeholder="data">
        <input type="text" name="data2" placeholder="data2">
        <button type="submit">Submit</button>
    </form>
    </div>
   
    
</body>
</html>