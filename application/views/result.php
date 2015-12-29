
<table>
  <tr>
    <td>수량 </tr>
    <td>가격 </tr>
  </tr>
<?php foreach ($resultExact->result_array() as $result): ?>
  <tr>
    <td><? echo $result['amount']; ?></tr>
    <td><? echo $result['price']; ?></tr>
  </tr>
<?php endforeach; ?>
</table>

<hr>

<table>
  <tr>
    <td>수량 </tr>
    <td>가격 </tr>
  </tr>
<?php foreach ($resultSimmilar->result_array() as $result): ?>
  <tr>
    <td><? echo $result['amount']; ?></tr>
    <td><? echo $result['price']; ?></tr>
  </tr>
<?php endforeach; ?>
</table>
