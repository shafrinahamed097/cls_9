<?php

// simple if-else
$userName="abc";
$pass="123";

if($userName=="abc" && $pass=="123"){
    echo "Login Success";
}
else{
    echo "Login Failed";
}

// if else ladder


$score=75;

if($score >=90){
    echo "A";
}
elseif($score >=80){
    echo "B";
}
elseif($score >=70){
    echo "C";
}
elseif($score >=60){
    echo "D";
}

elseif($score >=50){
    echo "E";
}

else{
    echo "F";
}




// Nested if else

$examScore=80;
$grade="";

if($examScore >=90){
    $grade="A";
}
else{
    if($grade>=80){
        $grade="B";
    }
    else{
        if($examScore >=70){
            $grade="C";
        }
        else{
            if($examScore >=60){
                $grade="D";
            }
            else{
                if($examScore >=50){
                    $grade="E";
                }
                else{
                    $grade="F";
                }
            }
        }
    }
}



?>