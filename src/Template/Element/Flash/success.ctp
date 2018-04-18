<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="card-panel color-1">
<div class="message success" onclick="this.classList.add('hidden')"><?= $message ?><i class="material-icons blue-text">check_circle</i></div>
</div>