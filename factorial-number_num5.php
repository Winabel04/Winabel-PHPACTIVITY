<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial of Numbers</title>
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
    <h2>𝐅𝐚𝐜𝐭𝐨𝐫𝐢𝐚𝐥 𝐍𝐮𝐦𝐛𝐞𝐫</h2>
</div>
    <form method = "GET">
        <div class="container p-5 my-3 bg-primary text-white" id = "bg">
            <div class="form-group">
            <label for="usr">𝐈𝐧𝐩𝐮𝐭 𝐚𝐧𝐲 𝐍𝐮𝐦𝐛𝐞𝐫(𝐬):</label>
            <input type="number" class="form-control" id="inputs" name = "input_number">
            <input type="submit" class="btn btn-info" name = "factorial_num" id = "btn">
            </div>
                <?php

                    if(isset($_GET['factorial_num'])){
                        $number = $_GET['input_number']; 
                        calculate($number);
                    }

                    function calculate($number){
                        $factorial = 1;
                        if ($number <= 0){
                            echo "<h3><strong>".(abs($number))."</strong></h3>";
                        }else{
                            for ($num = $number; $num >= 1 ; $num--) { 
                                $factorial = $factorial * $num;
                            }
                            echo "<h4>Factorial of $number is $factorial.</h4>";
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