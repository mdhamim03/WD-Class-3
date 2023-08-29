<?php
//Write a program which posetive,nutrsl of negative number.
    $number = 51;
    if($number > 0){
        echo "its a posetive number";
        if($number%2 == 0){
            echo "its a evan number";
        }else{
            echo "its a odd number";
        }
    }else if($number = 0){
        echo "tis a nutral number";
    }else{
        echo "its a negative number";
    }
//Ternary Operator
    echo "<br>";
    $age = 21;
    echo $age>=18?"You are elegable </br>":"You are not elegable </br>";
//Write a simple car program using switch
    $car = "bmw";
    switch ($car){
        case "Tata":
            echo "car name is tata";
            break;
        case "bmw":
            echo "car name is BMW";
            break;
        default:
            echo "Car name doesn't match.";
    }
?>
<pre>
    <?php
    //Multidimensional Array
        $user = [
            "name" => "Md Hamim Miyazi",
            "social" => [
                "facebook" => "Md Hamim Evan.com",
                "tinder" => "are you single.com",
            ],
        ];

        print_r($user);
    ?>
</pre>