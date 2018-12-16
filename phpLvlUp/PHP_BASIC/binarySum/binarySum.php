function binarySum(string $b1, string $b2) : string
{
  $b1 = bindec($b1);
  $b2 = bindec($b2);

  $binSum = $b1 + $b2;

  $binSum = decbin($binSum);

  return $binSum;

}


echo binarySum('1101', '101');