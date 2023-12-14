<?php

//using if,elseif condition in function
function getCorrectWeight($m1,$o1,$g1) {
    $Mango=$m1;
    $Orange=$o1;
    $Grape=$g1;

    if($Mango>$Orange && $Mango>$Grape)
    {
        echo "$Mango is heavier than $Orange and $Grape";

    }

    elseif ($Orange>$Mango && $Orange>$Grape)
    {
        echo" $Orange is heavier than $Mango and $Grape";
        
    }
    else {
        echo "$Grape is heavier than $Mango and $Orange </br>";

    }
}

getCorrectWeight(25,22,45);


//Switch

$Grade="A";

switch($Grade) {
    case 'A':
        echo "</br>  Very Good";
        break;
        case 'B':
            echo "</br>  Good";
            break;
            case'c';
            echo"</br>  passed";
            break;
        }


//indexing array
$Flower=['Rose','Yellow','friendship'];


echo "<pre>";
print_r($Flower);
echo "</pre></br>";

//aassociative array

$Flower=[ 'Name'=>'Rose',
           'Colour'=> 'Yellow',
           'Symbol'=>'friendship'];


           echo "<pre>";
           print_r($Flower);
           echo "</pre></br>";

//multidimensional array

$Flowers= [
          'Name'=>'Rose',

           'Colour'=> ['Yellow','Red','White'],
            
            'Symbol'=> [
                'Yellow'=>"friendship",
                'Red' => "Love",
                'White'=> "Purity"
          
    ],
];



echo "<pre>";
print_r($Flowers['Symbol']['White']);
echo "</pre> </br>";

//string functions
//strtoupper

$Food='Pasta</br>';
echo strtoupper($Food);

//strtolower

$Food='Pasta</br>';
echo strtolower($Food);

//ucwords
$Food='chicken sandwich</br>';
echo ucwords($Food);
//ucfirst
$place='chawkbazar chattogram</br>';
echo ucfirst($place);

//strrev

$Date="111223";

echo strrev($Date);
function dateChecker($Date) {
    if ($Date == strrev($Date) )
    {

        echo "</br>Yes";
    }

    else 
    {
        echo "</br>NO";
    }

}
dateChecker(221122);



//ternary operator
$Date="111223";
{
echo $Date == strrev($Date)? "Yes</br>":"<br>No</br>";
}

//strpos

$Sentence="She is very kind";
var_dump (strpos($Sentence, "very"));

if(strpos($Sentence,'Very') !=true)
{
    echo "<br>word is available here</br>";
}
else{
    echo"</br>Word is not available here";
}


//substr

$Sentence="She is very kind</br>";
echo substr($Sentence,0,8 ) . "...";

//strreplace

$Sentence="She is very kind</br>";
echo str_replace("kind","beautiful","</br>$Sentence");

//trim

$password ='12545 ';
var_dump (rtrim($password));
echo'</br>';

$password = ' 12545';
var_dump (ltrim($password));
echo'</br>';

//md5

$password = '12545'; 
echo md5($password);
echo'</br>';

//sha1
$password = '12545';
var_dump (sha1($password));
echo'</br>';

//PASSWORD_BCRYPT
$password = '12545\n';
echo password_hash ($password,PASSWORD_BCRYPT) ;
echo'</br>';

//strlen

$password = '12545';
echo strlen($password);
echo'</br>';

?>
