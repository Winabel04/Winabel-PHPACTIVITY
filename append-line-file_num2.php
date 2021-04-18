<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appending the Line in a File</title>
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
    <h2>𝐀𝐩𝐩𝐞𝐧𝐝𝐢𝐧𝐠 𝐭𝐡𝐞 𝐋𝐢𝐧𝐞 𝐢𝐧 𝐚 𝐅𝐢𝐥𝐞</h2>
</div>
    <form>
        <div class="container p-5 my-3 bg-primary text-white" id = "bg">
                <?php

                    function insertLineString($fileName, $appendText, $numberLine){
                        if(file_exists($fileName)){
                            $file= fopen($fileName, 'a');
                            $textLines = file ($fileName, FILE_IGNORE_NEW_LINES);
                            array_splice($textLines, $numberLine-1, 0, $appendText);
                            file_put_contents($fileName, join("\n", ($textLines)));
                            fclose($file);
                          
                            
                        }
                    }
                        insertLineString('appendsample.txt', '    You are the master of your fate and You are the captain of your soul.',5);
                        echo "File appended successfully";
                ?>  
        </div>
    </form>
</div>
</center>               
</body>
</html>