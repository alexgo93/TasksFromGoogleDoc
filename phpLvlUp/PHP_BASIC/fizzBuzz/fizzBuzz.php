function fizzBuzz (int $begin, int $end)
{
    for($i = $begin; $i <= $end; $i += 1) {

        echo $i % 3 == 0 ? 'Fizz' : '';
        echo $i % 5 == 0 ? 'Buzz' : '';
        echo ($i % 3 !== 0 && $i % 5 !== 0) ? $i : '';

    }

}
	fizzBuzz(11,20);
