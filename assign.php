<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="Post">
    //Enter number 1
    <div>
        <label for="num1">number1</label>
        <input type="number"  name="num1" id="num1">
    </div>
    //enter the number 2
    <div>
        <label for="num2">number2</label>
        <input type="number"  name="num1" id="num2">

    </div>
    //operator
    <div>
        <input type="submit" value="add" name="operation">
        <input type="submit" value="sub" name="operation">
        <input type="submit" value="prod" name="operation">
        <input type="submit" value="div" name="operation">
    </div>
    </form>
   
    <?php
    if(isset($_POST['operation'])){
        $x=$_POST['num1'];
        $y=$_POST['num2'];
        $op=$_POST['operation'];
        switch($op){
            case"add":
                $result=$x+$y;
                break;
                case"sub":
                    $result=$x-$y;
                    break;
                    case"prod":
                        $result=$x*$y;
                        break;
                        case"div":
                            $result=$x/$y;
                            break;
                            default:
                            echo"invalid number";

        }

    }
    ?>
</body>
</html>