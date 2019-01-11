$arr = [1, 25, 28, 56, 75, 21, 33, 45, 72, 31];

function getClosest(int $number, array $arr)
{
    $closest = array_reduce($arr, function($acc, $n) use($number)
    {
        $acc[] = abs($n - $number);
        return $acc;
    },[]);
    $closestKey = array_search(min($closest),$closest);
    return $arr[$closestKey];
}

print_r(getClosest(27, $arr));