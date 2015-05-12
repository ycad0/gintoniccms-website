<?php
use Cake\Filesystem\File;
$file = new File('metrics/phpcs.report');
?>


<div class="container">
    <h2>PHP CodeSniffer information report</h2>
    <hr>
    <pre>
    <?= nl2br($file->read(true, 'r')) ?>
    </pre>
</div>

