<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse Text</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	
</head>
<style>
body{
        background-color: Khaki;
    }
#inputs{
        width:300px;
    }
#bg{
        width: 600px;
        height:270px;
    }
h2{
        margin-top:20px;
    }
#btn{
        margin-top:30px;
        margin-left:400px;
    }

</style>
<body>
<center>
<div class="jumbotron text-center">
    <h2>𝐑𝐞𝐯𝐞𝐫𝐬𝐞 𝐒𝐭𝐫𝐢𝐧𝐠</h2>
</div>
    <form method = "GET">
        <div class="container p-5 my-3 bg-primary text-white" id = "bg">
            <div class="form-group">
            <label for="usr">𝐈𝐧𝐩𝐮𝐭 𝐚𝐧𝐲 𝐖𝐨𝐫𝐝(𝐬):</label>
            <input type="text" class="form-control" id="inputs" name = "input_text">
            <input type="submit" class="btn btn-info" name = "reverse_text" id = "btn">
            </div>
                <?php

                    if(isset($_GET['reverse_text'])){
                        $text = $_GET['input_text']; 
                        reverseText($text);
                    }

                    function reverseText($text){
                        $reversedString = strrev($text);
                        $stringLength = strlen($reversedString);
                        if ($stringLength%2 == 0){
                            echo substr($reversedString, 0, $stringLength/2); 
                        }else{
                            echo $reversedString;
                        }
                    } 
                    ?>  
            
            </div>
        </div>
    </form>
</div>
</center>               
</body>
</html>