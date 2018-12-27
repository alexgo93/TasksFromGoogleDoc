function isPerfect(int $n) : bool
{   

    $arr = [];

    for($i = 1; $i < $n; $i += 1) {

        if($n % $i == 0) {

            $arr[] = $i;

        }

    }

    //echo $n == array_sum($arr) ? true : false

    if($n == array_sum($arr)) {
        
        return true;

    } else {

        return false;

    }

}

echo isPerfect();
