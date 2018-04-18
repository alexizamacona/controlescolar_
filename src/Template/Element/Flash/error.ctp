<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="card-panel color-3 center padding-icon" >

<div class="message error" onclick="this.classList.add('hidden');">
	<?= $message ?>
	<i class="material-icons red-text">cancel</i></div>
</div>
