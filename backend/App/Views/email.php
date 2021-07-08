<p>
    From <strong><?=$data['name']?></strong>
</p>
<p>
    Email: <a href="mailto:<?=$data['email']?>"><?=$data['email']?></a>
</p>
<p>
    Phone: <a href="tel:<?=$data['phone']?>"><?=$data['phone']?></a>
</p>
<p>
  Address: <?=$data['address']?>
</p>
<p>
  Date: <?=$data['date']?> <?=$data['time']?>
</p>
<div>
  Service Types:
  <ul>
    <?php foreach ($data['service'] as $item):?>
      <li><?=$item?></li>
    <?php endforeach; ?>
  </ul>
</div>
Description:
<p> <?=$data['description']?></p>
