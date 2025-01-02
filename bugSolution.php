```php
function calculate_total($items) {
  $total = 0;
  foreach ($items as $item) {
    if (!is_numeric($item['price'])) {
      //Handle the error properly, for example throw an exception
      throw new InvalidArgumentException('Price must be numeric');
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

try {
  $total = calculate_total($items);
echo "Total: " . $total;
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage();
}
```