
<?php
//git init
//git add .
//git status
//git commit -m "commit msg"
//git branch -Main
//git remote add origins https://github.com/arvinalmario/multidimension-array.git
//git push -u origin main

//git pull
//git checkout -b name of branch
//git push -set-upstream origin name of branch



/*
echo "awit ako sa PHP";
echo "<br>";

$name = "Angelito";
$age = "19";
$bebelabs = "Kimberly";  //MEMORY ALLOCATION
$gender = true;
$baon = 150;

// var_dump($name); // para makita ang value 

//double cout
echo "ako si $name ay $age";
echo "<br";
//single cout
echo 'my name is ' .$name. ' at ako ay pogi';


//constant PAG MARAMIHAN
define ('const', 'WELCOME TO LIPA');

echo "const";



//array
echo "<br>";
$array1 = [1 => 'Jerick', 'Vincent', 'Eman'];
echo $array1['Name1' ];
echo "<br>";
// var_dump($array1);

echo "<br>";

$array2 = array('Name1' => 'Kyla', 'Karyl', 'Sam');

echo $array2['Name1' ];
echo "<br>";
// var_dump($array2);
echo "<br>";
print_r($array2);
echo "<br>";

*/
// $age = '18';

// echo "<br>";
//     if ($age <= 9)
//         echo 'Your are allowed'.'<br>';

//     else
//         echo 'You are not allowed';
    
        
// Ternary operator for age check
// $age = 7;
// echo $age === 7 ? 'You are allowed' : 'You are not allowed';

// echo '<br>';

// $age = 18;
// echo $age <=19 ? 'pasa ka' : 'hulog ka';

// echo '<br>';

// $name1 = 'Sam';
// // Ternary operator for name check
// echo $name1 === 'manoy' ? 'Hi Welcomeeee ' . $name1 : 'You are not ' . $name1;


// //funtion
// function myFunction($param1, $param2){
//     return 'The answer is ' .$param1 * $param2;
// }

// echo "<br>";
// echo myFunction(2,3); 

// myFunction Camel casing
// Myclass    Pascal casing

//CONCATENATION pag combine sa iisang line



// for loop ---> when you know beforehand how many times you want to execute the statement
//                 for (initialization; condition; itiration){
//                     echo
//                 }


// while loop ---> when you want to execute a block of code as long as condition remains TRUE
//                     $i = 0;
//                     while (/*condtion*/ $i < 5){
//                         echo 'The number is '$i;
//                         $i++;
//                     }


// do-while loop ---> it will run if the condtion remains true but the condition is FALSE it will stop
//                         $i = 0
//                         do {
//                             echo 'The number is'. $i .'<br>';
//                             $i++;
//                         } while ($i < 5);



// foreach loop ---> works with array and use to iterate over each element in an array
//                         // foreach($array as $value){
//                         // }
                    // $colors = array("Red","Blue","Pink","Violet");
                    //     foreach ($colors as $col){
                    //         echo $col.'<br>';
                    //     }


// if else
// if , else if, else ---> pag di na meet ang both condition saka mag rururn sa else


    //less than    ( < ) - incremet
    //greater than ( > ) - decrement




    // $num = 1;
    
    // do{
    //     echo 'Numero ' .$num .'<br>';
    //     $num++;
    // }while($num <= 5);
    
    // while($num <= 5){
    //     echo 'Numero ' .$num .'<br>';
    //     $num++;
    // }

    // while ($num <= 1){
    //     echo 'NUMBER ' .$num . '<br>';
    //     $num++;
    // }



    // //Initialize,condition,iteration
    // for( $num1=1; $num1<=5; $num1++){
    //     echo 'Numero ' .$num1 .'<br>';
    // }
    
     
    
    // create a function that returns loop
    
    
    // function myFunc($param1,$param2,$param3,$param4){
    
    //     $array = [$param1, $param2, $param3, $param4];
    
    //     foreach($array as $array){
    //         echo 'Numero ' . $array .'<br>';
    //     }
    // }
    
    // echo myFunc(34,33,56,56);





// // //Initialize,condition,iteration
// // Function to increment numbers and check if odd or even
// function checkOddEvenBy10($limit) {
//     for ($i = 1; $i <= $limit; $i++) {
//         if ($i % 2 == 0) {
//             echo "$i is Even<br>";
//         } else {
//             echo "$i is Odd<br>";
//         }$i += 10;
//     }
// }

// // Call the function with 100 as the limit
// echo checkOddEvenBy10(100);
// //                     |
// //                 argument
    


// for ($i = 1; $i <=100; $i+=9){
//     echo 'is '. $i .($i % 2 == 0 ? ' Even' : ' Odd'). '<br>';
// }


// // CONCATINATION WITH DECREMENT
// function oddEven($number){
//     for ($i = 100; $i >= 1; $i-= $number){
//     echo $i. ' is '. ($i % 2 == 0 ? ' Odd' : ' Even'). '<br>';
//     } 
// }
// oddEven(9);

     

// create a function(parameteras)
// sa loob
// array declaration {}
// value ng array (arguments) na ibabato sa parameters


// function pangalanNgTao ($param1, $param2, $param3, $param4){
//     $arrayKo = [$param1, $param2, $param3, $param4];

//     foreach($arrayKo as $ar){
        
//         echo $ar. '<br>';
//     }
// }
// echo 'List of pogi :'. '<br>';
// pangalanNgTao('Angeito', 'Bata', 'angelits', 'gitoy');


// function Students ($student1, $student2, $student3, $student4){
//  $arrayStu = array ($student1, $student2, $student3, $student4);
//         foreach ($arrayStu as $KUPAL){
//             echo '==> '. $KUPAL. '<br>';
//         }
// }
// Students('pedro','david','nilo','juan');


// function majorProf ($parameter1, $parameter2, $parameter3, $parameter4){
//     $array = [$parameter1, $parameter2, $parameter3, $parameter4];
//         foreach($array as $prof){
//             echo $prof. '<br>';
//         }
// }
// echo majorProf ('Sir Tiquo','Sir Arvin','Sir Bunyi','Maam Aileen');
// //                       |
// //                  ARGUMENTS



// // ASSOCIATIVE ARRAY
// function rastaColors($color1, $color2, $color3){
//     $arrayName = array('1st Color :'=> $color1,
//                         '2nd Color :'=> $color2,
//                         '3rd Color :'=> $color3);
                        
//         foreach($arrayName as $position =>$color)
//             echo $position. $color. '<br>';
// }
// echo rastaColors('Red','Yellow','Green');




// function monster ($monster1, $monster2, $monster3, $monster4){
//     $godMonsterArray = array($monster1, $monster2, $monster3, $monster4);
//         foreach ($godMonsterArray as $monster){
//             echo $monster. '<br>';
//         }
// }
// echo 
// monster('godzilla','kingKong','Alitaptap','littleKong');


// // loop 0 by 100
// // increment by 3
// // do while with function

// function zeroBywanhandred(){
//     $num =0;
//     do{ 
//         echo 'Number '.$num. '<br>';
//         $num+=3;
//     } while($num <= 100);
// }
// zeroBywanhandred();




// create array using for loop

// function favUlam ($ulam1, $ulam2, $ulam3, $ulam4){
//     $ulamArray = array($ulam1, $ulam2, $ulam3, $ulam4);
    
//     for ($i = 0; $i <= count($ulamArray)-1; $i++){
//     echo $ulamArray[$i].'<br>';
//     }
// }
// echo 'Mga Ulam na lagi ko binibili at AFFORDABLE :'.'<br>';
// echo favUlam('Munggo','Tilapia','Pusit','Sisig');

// The loop iterates from 0 to count($ulamArray) - 1 (which is 3 in this case). 



// $nameArray = array('1. ' => 'Juls',
//                     '2. ' => 'Nami',
//                     '3. ' => 'Gela',
//                     '4. ' => 'Jaira');

// function displayNames($param){
    
//     for ($i = 0; $i < count($param); $i++){
//         $position = array_keys($param)[$i];
//         $name = $param[$position];
//         echo $position .$name. '<br>';
//     }

// }
// displayNames($nameArray);

// // count($param) gives the total number of items in the list.
// // $i is a number that starts at 0 and increases by 1 every time the loop runs, 
// // stopping when it reaches the end of the list.

// // array_keys($param) gives you all the labels (keys) like 'First Name', 'Second Name'.
// // $position = array_keys($param)[$i] selects one label at a time, based on the loop counter $i.
// // $name = $param[$position] gets the corresponding name (value) for that label (key).



//--- ARRAaaaAAAAAAAAAAAAAAAAAAAAAAAAAAAAYYYYYyyyyyyyyyyyyyyyyyyyyyyyyy

$array = []; //1D
$array = [[],[]]; //2D
$array = [[[]],[[]]]; //3D

// $arrayy = [[1,2,3],[4,5,6],[7,8,9]];
// //                          |
// // var_dump($arrayy);
// // echo '<br>';
// print_r($arrayy); //much readable ang array

// echo 'The value of the array'.$arrayy[2][0];



//2 DIMENTIONAL ----------------------------------------------------

// USING ASSOCIATIVE WITH ARRAY INDEX
// ASSOCIATIVE ARRAY INSIDE THE ASSOCIATIVE ARRAY INSIDE THE 2 DIMENTIONAL ARRAY

// $arrayy = [
// /* 1 => */  'Array1' => ['a' => 1, 'b' => 2, 'c' => 3], 
//             'Array2' => ['d' => 4, 'e' => 5, 'f' => 6], // <------
//             'Array3' => ['g' => 7, 'h' => 8, 'i' => 9] // pag int nilagay matic yun na starting point EX: from 1 , THEN 2, 3, 4....                   
// ];                            // pag unspecified, start sya sa 0 counting

// var_dump($arrayy);
// echo '<br>';
// print_r($arrayy); //much readable ang array

// echo 'The value of the array'.$arrayy[$Array2][2];


// foreach($arrayy as $index1 => $array1){
//         echo $index1. '<br>';
//     foreach($array1 as $index2 => $array2){
//             echo $index2.' '. $array2. "\t";
//         }
//         echo "<br>";
// }



// 3 DIMENTIONAL ---------------------------------------------------

// $array3 = [
//     'num1' => [
//         [1,2,3],
//         [4,5,6],
//         [7,8,9],
//         [10,11,12]
//     ],
//     'num2' => [
//         [13,14,15],
//         [16,17,18],
//         [19,20,21]
//     ]
// ];
// echo 'The value of the array'. $array3[$num1][1][2];

// echo '<br>';
// $array3 = [
//     'num1' => [
//        'bloke1' => ['a' => 1,'b' => 2,'c' => 3],
//        'bloke2' => [4,5,6],
//        'bloke3' => [7,8,9],
//        'bloke4' => [10,11,12]
//     ],
//     'num2' => [
//        'bloke5' => [13,14,15],
//        'bloke6' => [16,17,18],
//        'bloke7' => [19,20,21]
//     ]
// ];

// echo 'The value of the array is: ' . $array3['num1']['bloke1']['c'];

// foreach($array3 as $index1 => $arr1){
//     echo $index1. '<br>';
//     foreach($arr1 as $index2 => $arr2){
//         echo $index2. '<br>';
//         foreach($arr2 as $index3 => $arr3){
//             echo $index3. ' => '. $arr3. ', '. "\t";
//         }echo '<br>';
//     } echo '<br>';
// }




// PASS BY VALUE AND PASS BY REFERENCE

echo 'PASS BY VALUE'. '<br>';
function passByValue($param) {
    $param += 5;
    echo 'This is the value inside the function: '. $param;
}

$num = 10;

passByValue($num);
echo '<br>'. 'This is the value outside the function: '. $num . '<br><br>';



echo 'PASS BY REFERENCE'. '<br>';
function passByReference(&$paramm) {
    $paramm += 5;
    echo 'This is the value inside the function: '. $paramm;
}

$num1 = 10;

passByReference($num1);
echo '<br>'. 'This is the value outside the function: '. $num1;






















    
?>  