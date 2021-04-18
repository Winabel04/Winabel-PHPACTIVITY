<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loyalty Of A Name</title>
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
    <h2>𝐇𝐨𝐰 𝐋𝐨𝐲𝐚𝐥 𝐲𝐨𝐮𝐫 𝐍𝐚𝐦𝐞 𝐢𝐬?...</h2>
</div>
    <form method = "GET">
        <div class="container p-5 my-3 bg-primary text-white" id = "bg">
            <div class="form-group">
            <label for="usr">𝐈𝐧𝐩𝐮𝐭 𝐚𝐧𝐲 𝐍𝐚𝐦𝐞(𝐬):</label>
            <input type="text" class="form-control" id="inputs" name = "input_name">
            <input type="submit" class="btn btn-info" name = "loyal_name" id = "btn">
            </div>
                <?php

                    if(isset($_GET['loyal_name'])){
                        $name = $_GET['input_name']; 
                        loyalName($name);
                    }

                    function loyalName($name){
                        $toLowerTxt = strtolower($name);
                        $nameLength = strlen($toLowerTxt);
                        $ctr = 0;
                        for ($count = 0; $count < $nameLength ;$count++){  
                            if ($toLowerTxt[$count] == "e" || $toLowerTxt[$count] == "a" || $toLowerTxt[$count] == "n") { 
                                $ctr++;
                            }
                        }

                        $result = $ctr * $nameLength;

                        if($result%6 == 0 && $ctr>2){
                            echo "<strong>The $name name is LOYAL. </strong>";  
                        }else{       
                            echo "<strong>The $name name is NOT SURE LOYAL.</strong>";  
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