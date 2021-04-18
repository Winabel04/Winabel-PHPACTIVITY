<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing the NTH line of a file</title>
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
    <h2>𝐍𝐭𝐡 𝐥𝐢𝐧𝐞 𝐨𝐟 𝐚 𝐭𝐞𝐱𝐭 𝐟𝐢𝐥𝐞</h2>
</div>
    <form>
        <div class="container p-5 my-3 bg-primary text-white" id = "bg">
                <?php
                    function lineTextFile($fileName, $nthLine){
                        if (file_exists($fileName)){
                            $file = file($fileName);
                            echo "<h3>".($file[$nthLine-1]);
                        }else{
                            echo "<h3>The file $fileName doesn't exist. ";
                        }
                    }
                    lineTextFile("appendsample.txt",2);
                ?>  
        </div>
    </form>
</div>
</center>               
</body>
</html>