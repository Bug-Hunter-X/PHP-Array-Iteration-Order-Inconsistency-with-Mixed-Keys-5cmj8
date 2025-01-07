To avoid this problem, it's best to use either purely numeric keys (starting from 0, with no gaps) or purely string keys. 

If you need to preserve order, consider using alternative data structures like `SplFixedArray` which explicitly supports ordered access. 

Here's a solution that uses `SplFixedArray` to maintain order:

```php
<?php
$myArray = new SplFixedArray(4);
$myArray[0] = 0;
$myArray[1] = array('a' => 1);
$myArray[2] = array('b' => 2);
$myArray[3] = array('c' => 3);

foreach ($myArray as $key => $value) {
  if (is_array($value)) {
      foreach ($value as $innerKey => $innerValue) {
           echo "Key: " . $innerKey . ", Value: " . $innerValue . "\n";
      }
  } else {
      echo "Key: " . $key . ", Value: " . $value . "\n";
  }
}
?>
```
This ensures predictable iteration and prevents the unpredictable order issue.