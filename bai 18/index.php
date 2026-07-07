<?php

$students = [

    ["name"=>"An","score"=>8],

    ["name"=>"Bình","score"=>9.5],

    ["name"=>"Lan","score"=>7.5],

    ["name"=>"Hoa","score"=>9]

];

function maxStudent($arr){

    $max = $arr[0];

    foreach($arr as $sv){

        if($sv["score"]>$max["score"]){

            $max=$sv;

        }

    }

    return $max;

}

$result=maxStudent($students);

echo "Sinh viên điểm cao nhất:<br>";

echo $result["name"]." - ".$result["score"];

?>