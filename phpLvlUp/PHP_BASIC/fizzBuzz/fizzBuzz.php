function fizzBuzz (int $begin, int $end) : string
{
    $result = '';
   
    for($i = $begin; $i <= $end; $i += 1) {

    $devideThree = ($i % 3 == 0);
    $devideFive = ($i % 5 == 0);
	
        $devideThree ? $result .= 'Fizz' : '';
        $devideFive  ? $result .= 'Buzz' : '';
        !$devideThree && !$devideFive ? $result .= $i : '';

    }
    return $result;
}
	echo fizzBuzz(11,20);	
