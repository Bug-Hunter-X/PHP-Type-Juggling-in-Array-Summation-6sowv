```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    // Check if the value is a number before adding
    if (is_numeric($number)) {
      $sum += (float)$number; // Explicit type casting for safety
    } else {
      // Handle non-numeric values appropriately (e.g., error handling or skipping)
      trigger_error('Non-numeric value encountered in array', E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; 
```