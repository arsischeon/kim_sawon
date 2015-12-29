<h1>정확한 결과</h1>
<table>
  <tr>
    <td>수량 </td>
    <td>가격 </td>
  </tr>
<?php foreach ($resultExact->result_array() as $result): ?>
  <tr>
    <td><? echo $result['amount']; ?></td>
    <td><? echo $result['price']; ?></td>
  </tr>
<?php endforeach; ?>
</table>

<hr>
<h1>추천결과</h1>
<table>
  <tr>
    <td>수량 </td>
    <td>가격 </td>
  </tr>
<?php foreach ($resultSimmilar->result_array() as $result): ?>
  <tr>
    <td><? echo $result['amount']; ?></td>
    <td><? echo $result['price']; ?></td>
  </tr>
<?php endforeach; ?>
</table>
