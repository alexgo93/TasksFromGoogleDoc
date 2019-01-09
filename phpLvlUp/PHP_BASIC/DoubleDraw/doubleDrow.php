$arr = [
    ['*', '*', '*', '*'],
    ['*', '-', '-', '*'],
    ['*', '-', '-', '*'],
    ['*', '*', '*', '*']
];
function doublePicture($arr)
{
    $doubleArr = [];
    foreach($arr as $item) {
        $doubleArr[] = array_reduce($item,function($acc, $elem)
    {
        $acc[] = $elem;
        $acc[] = $elem;
        return $acc;
    });
    }
    showPicture($doubleArr);
    
}
function showPicture($arr) 
{
    foreach($arr as $str) {
        echo implode(' ',$str), "\n";
        echo implode(' ',$str), "\n";
    }
}
doublePicture($arr);