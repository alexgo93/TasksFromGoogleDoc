function fib(int $a) : int
{
  if ($a == 1) {
    return $a;
  } else {
    return $a += fib($a - 1);
  }
}
print fib(10);