function stackCalc($expression)
{
    $stack = [];
    foreach($expression as $element) {
        $newValue = 0;
        switch ($element) {
            case "-":
                $newValue = -array_pop($stack) + array_pop($stack);
                array_push($stack,$newValue);
                break;
            case "+":
                $newValue = array_pop($stack) + array_pop($stack);
                array_push($stack,$newValue);
                break;
            case "*":
                $newValue = array_pop($stack) * array_pop($stack);
                array_push($stack,$newValue);
                break;
            case "/":
                $newValue = 1 / array_pop($stack) * array_pop($stack);
                array_push($stack,$newValue);
                break;    
            default:
                array_push($stack,$element);
        }
    }
    return $stack[0];
}

$expression = [7, 2, "+", 3, "/", 3, "-"];
echo stackCalc($expression);