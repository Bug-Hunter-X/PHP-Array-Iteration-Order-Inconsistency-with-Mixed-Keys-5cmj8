In PHP, a common yet subtle issue arises when dealing with array keys that aren't strictly numeric.  Consider this scenario:

```php
$myArray = array('a' => 1, 'b' => 2, 'c' => 3);
foreach ($myArray as $key => $value) {
  echo "Key: $key, Value: $value\n";
}
```
This seems straightforward, but if you later add a numeric key, like `$myArray[0] = 0;` things get unpredictable.  The order of the foreach loop won't be guaranteed; the 'a','b','c' keys might not be processed before the new numeric key.

The problem is that PHP does not consistently guarantee the order of elements in an array unless it's a numerically indexed array starting from 0 and without gaps.