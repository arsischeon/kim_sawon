
<table>
<?php foreach ($resultExact as $result): ?>
  <td>
    <tr><? echo $result['amount']; ?></tr>
    <tr><? echo $result['price']; ?></tr>
  </td>
<?php endforeach; ?>
</table>

<hr>

<table>
<?php foreach ($resultSimmilar as $result): ?>
  <td>
    <tr><? echo $result['amount']; ?></tr>
    <tr><? echo $result['price']; ?></tr>
  </td>
<?php endforeach; ?>
</table>
