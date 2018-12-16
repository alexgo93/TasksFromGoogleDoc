function isPowerOfThree(int $value) : string
{

    while($value >= 1) {

        if($value % 3 == 0) {

            $value /= 3;
        
        } elseif($value == 1) {

            return 'true';

        } else {

            return 'false';

        }

    }
}

echo isPowerOfThree(81);