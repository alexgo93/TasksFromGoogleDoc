function isHappy(string $num) : bool
{
    if(strlen($num) % 2 === 0) {

        $arr = str_split($num);
        $count = count($arr) / 2;
        
        return array_sum(array_slice($arr, 0, $count)) === array_sum(array_slice($arr, $count, $count)) ? true : false;
        
    } else {

        return false;

    }
    
    
}

echo isHappy('223322');
