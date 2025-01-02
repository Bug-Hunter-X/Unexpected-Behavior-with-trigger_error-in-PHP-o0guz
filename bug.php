```php
function calculate_total($items) {
  $total = 0;
  foreach ($items as $item) {
    if (!is_numeric($item['price'])) {
      // This line will cause a warning if price is not numeric. However, it won't stop execution.
      trigger_error('Price must be numeric', E_USER_WARNING);
    }
    $total += $item['price'];
  }
  return $total;
}

$items = [
  ['name' => 'Item 1', 'price' => 10],
  ['name' => 'Item 2', 'price' => 'abc'], // Invalid price
  ['name' => 'Item 3', 'price' => 20],
];

$total = calculate_total($items);
echo "Total: " . $total; //Output will be 30, the error is not handled properly
```