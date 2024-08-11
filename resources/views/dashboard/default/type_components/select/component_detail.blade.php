<?php
if (isset($form['datatable'])) {
    $datatable = explode(',', $form['datatable']);
    $table = $datatable[0];
    $field = $datatable[1];
    $result = UMS::first($table, ['id' => $value]);

    echo isset($result) ? $result->$field : null;

}
if (isset($form['dataquery'])) {
    $dataquery = $form['dataquery'];
    $query = DB::select(DB::raw($dataquery));
    if ($query) {
        foreach ($query as $q) {
            if ($q->value == $value) {
                echo $q->label;
                break;
            }
        }
    }
}
if (isset($form['dataenum'])) {
    echo $value;
}
?>