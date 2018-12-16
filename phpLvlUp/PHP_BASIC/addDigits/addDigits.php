function addDigits(int $num) : int
{
    $num = (string)$num;
    $numLength = strlen($num);
    $resultLength = 0;
    $result = 0;

    for($i = 0; $i < $numLength; $i += 1) {

        $result += $num[$i];

    }

        $resultLength = strlen((string)$result);

        if($resultLength > 1) {

            return addDigits($result);

        } else {

            return $result;

        }
        
        
}

echo addDigits(39);