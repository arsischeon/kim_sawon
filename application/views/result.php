
<table>
<?php foreach ($resultExact->result_array() as $result): ?>
  <td>
    <tr><? echo $result['amount']; ?></tr>
    <tr><? echo $result['price']; ?></tr>
  </td>
<?php endforeach; ?>
</table>

<hr>

<table>
<?php foreach ($resultSimmilar->result_array() as $result): ?>
  <td>
    <tr><? echo $result['amount']; ?></tr>
    <tr><? echo $result['price']; ?></tr>
  </td>
<?php endforeach; ?>
</table>
