
<?php 

function sortear(){

    $array = array();
    foreach(range(1,10) as $num){
        array_push($array, $num);
    }

    $newArray = array();
    foreach(range(1,20) as $x){
            $rand = array_rand($array, 1);
            array_push($newArray, $rand);
        }

    $stringNewArray = implode(", ", $newArray);
    $unicos = array_unique($newArray, SORT_NUMERIC);
    $stringUnicos = implode(", ", $unicos);
    
    print_r("Valores sorteados: [$stringNewArray]\n");
    print_r("Os valores não repetidos são: [$stringUnicos] \n");
        // o valor mostrará os números repetidos, embora a proposta não seja esta.
    };

echo sortear();
?>