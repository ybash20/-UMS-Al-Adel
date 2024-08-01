<?php
$table = $form['datamodal_table'];
$field = explode(',', $form['datamodal_columns'])[0];
echo UMS::first($table, ['id' => $value])->$field;
?>