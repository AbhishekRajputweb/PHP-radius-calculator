
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ========== CSS ========== -->
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- ===== HEADING ===== -->
        <div class="text-box">
            <div class="title">
                <h2>PHP <br> CALCULATOR</h2>
            </div>
            <p>
                <?php

                  if(isset($_POST["submit"])){
                      $radius = $_POST["radius"];
                      $option = $_POST["option"];

                    switch($option){
                        case "Circumference":
                            $circum = 2*pi()*$radius;
                            $res = "The $option of your circle is $circum ";
                            break; 
                        
                        case "Area of circle":
                            $area = pi()*$radius*$radius;
                            $res = "The $option of your circle is $area";
                            break; 
                            
                        case "diameter":
                            $diameter = 2*$radius;
                            $res = "The $option of your circle is $diameter";
                            break;  
                            
                        default:
                        $res = "plesse enter radius or choose one";
                        break;    
                    }
                    echo $res;  
                  }
                  ?>
            </p>
        </div>

        <!-- ===== CALCULATION ===== -->
    <form action="" method="post">
        <div class="calculation">
            <div class="inputs">
                <input type="text" placeholder="ENTER RADIUS" name="radius">
            </div>
            <div class="sec">
             <select class="options-calculation" name="option">
                <option value="Circumference">Circumference</option>
                <option value="Area of circle">Area of circle</option>
                <option value="diameter">Diameter</option>
             </select>
            </div>
            <div class="btn">
                <input type="submit" name="submit" value="CALCULATE" >
            </div>
        </div>
    </form>
    </div>
</body>
</html>