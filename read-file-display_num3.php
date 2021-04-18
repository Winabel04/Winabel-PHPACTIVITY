<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read of File and Display</title>
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
    <h2>𝐑𝐞𝐚𝐝 𝐅𝐢𝐥𝐞 𝐃𝐢𝐬𝐩𝐥𝐚𝐲</h2>
</div>
    <form>
        <div class="container p-5 my-3 bg-primary text-white" id = "bg">
                <?php
                    function getFile($filename){
                        $toLowerFile = strtolower($filename);
                        $textLines = file($filename);
                        $fileLength = strlen($toLowerFile);
                        $ctr = 0;
                        for ($count = 0; $count < $fileLength ;$count++){  
                            if ($toLowerFile[$count] == "a" || $toLowerFile[$count] == "e" || $toLowerFile[$count] == "i" || $toLowerFile[$count] == "o"|| $toLowerFile[$count] == "u") { 
                                $ctr++;
                            }
                        } 

                        if ($ctr % 2 == 0) {         
                            echo "<h5>".$textLines[1]."</h5><br>";
                            echo "<h5>".$textLines[3]."</h5><br>";
                        }else{
                            echo "<h4>".$textLines[2]."</h4><br>";
                            echo "<h4>".$textLines[4]."</h4><br>";
                        }
                    
                        if (file_exists($filename)) {
                            echo "<h3>The file $filename exists </h3>";
                        } else {
                            echo "<h3>The file $filename does not exists!</h3>";
                        }
                    } 
                    getFile("appendsample.txt");
                ?>  
        </div>
    </form>
</div>
</center>               
</body>
</html>