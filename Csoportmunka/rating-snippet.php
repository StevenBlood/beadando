<?php
$image_id = $image_id ?? 1;
?>
<div class="rating-widget" data-image-id="<?=htmlspecialchars($image_id, ENT_QUOTES)?>">
  <?php for ($i=1;$i<=5;$i++): ?>
    <span class="star" data-value="<?=$i?>">★</span>
  <?php endfor; ?>
</div>

<script>
document.addEventListener('DOMContentLoaded', ()=>{
  const widget = document.querySelector('.rating-widget[data-image-id="<?=$image_id?>"]');
  if (!widget) return;
  const stars = widget.querySelectorAll('.star');
  let selected = 0;

  stars.forEach(s=>{
    const value = parseInt(s.dataset.value);

    s.addEventListener('click', ()=>{
      selected = value;
      stars.forEach(x=>{
        x.style.color = parseInt(x.dataset.value) <= selected ? 'gold' : 'gray';
      });
      const fd = new FormData();
      fd.append('image_id', widget.dataset.imageId);
      fd.append('rating', selected);
      fetch('rating-handler.php', { method:'POST', body: fd });
    });
  });
});
</script>
