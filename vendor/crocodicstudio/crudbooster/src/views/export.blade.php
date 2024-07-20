<html>
<head>
    <meta charset="utf-8"/>
    @if (App::getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('css/cssAr/Report.css') }}">
@else
    <link rel="stylesheet" href="{{ asset('css/cssEN/Report.css') }}">
@endif

</head>

<body>
    @if (Request::input('fileformat') == 'pdf')
    <header>
        <div class="wrap header">
            <div class="EN">
                <li>
                    Republic of Yemen
                </li>
                <li style="font-size: 18px;">
                    AL-ADEL UNIVERSITY
                </li>
                <li style="font-size: 16px;">
                    Date: {{ Request::input('date') }}
                </li>
            </div>
            <div class="logo">
                <img src="{{ asset('logo.png') }}">
            </div>
            <div class="AR">
                <li>
                    الـجـمـهـوريـة الـيـمـنـيـة
                </li>
                <li>
                    جـــامــعــة الــعـــادل
                </li>
                <li style="font-size: 16px;">
                    التاريخ: {{ Request::input('date') }}
                </li>
            </div>
        </div>
        <hr>
    </header>
        <h2>{{ cbLang('Report') }}
            {{ strip_tags(cbLang($page_title)) }}
        </h2>
    @endif
    <table>
        <thead>
            <tr>
                <?php
                foreach ($columns as $col) {
                    if (Request::get('columns')) {
                        if (!in_array($col['name'], Request::get('columns'))) {
                            continue;
                        }
                    }
                    $colname = $col['label'];
                    echo "<th style='background:#eeeeee'>$colname</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            @if (count($result) == 0)
                <tr class='warning'>
                    <td colspan='{{ count($columns) + 1 }}' align="center">No Data Avaliable</td>
                </tr>
            @else
                @foreach ($result as $row)
                    <tr>
                        <?php
                        foreach ($columns as $col) {
                            if (Request::get('columns')) {
                                if (!in_array($col['name'], Request::get('columns'))) {
                                    continue;
                                }
                            }
                        
                            $value = @$row->{$col['field']};
                            $title = @$row->{$title_field};
                        
                            if (@$col['image']) {
                                if ($value == '') {
                                    $value = 'http://placehold.it/50x50&text=NO+IMAGE';
                                }
                                $pic = strpos($value, 'http://') !== false ? $value : asset($value);
                                $pic_small = $pic;
                                if (Request::input('fileformat') == 'pdf') {
                                    echo "<td><a data-lightbox='roadtrip' rel='group_{{$table}}' title='$col[label]: $title' href='" . $pic . "'><img class='img-circle' width='40px' height='40px' src='" . $pic_small . "'/></a></td>";
                                } else {
                                    echo "<td>$pic</td>";
                                }
                            } elseif (@$col['download']) {
                                $url = strpos($value, 'http://') !== false ? $value : asset($value);
                                echo "<td><a class='btn btn-sm btn-primary' href='$url' target='_blank' title='Download File'>Download</a></td>";
                            } else {
                                //limit character
                                if ($col['str_limit']) {
                                    $value = trim(strip_tags($value));
                                    $value = Str::limit($value, $col['str_limit']);
                                }
                        
                                if ($col['nl2br']) {
                                    $value = nl2br($value);
                                }
                        
                                if (Request::input('fileformat') == 'pdf') {
                                    if (!empty($col['callback_php'])) {
                                        foreach ($row as $k => $v) {
                                            $col['callback_php'] = str_replace('[' . $k . ']', $v, $col['callback_php']);
                                        }
                                        @eval("\$value = " . $col['callback_php'] . ';');
                                    }
                        
                                    //New method for callback
                                    if (isset($col['callback'])) {
                                        $value = call_user_func($col['callback'], $row);
                                    }
                                }
                        
                                echo '<td>' . $value . '</td>';
                            }
                        }
                        ?>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <script type="text/php">
    if ( isset($pdf) ) {
        $font = Font_Metrics::get_font("helvetica", "bold");
        $pdf->page_text(36, 18, "Page {PAGE_NUM} of {PAGE_COUNT}", $font, 6, array(0,0,0));
    }

</script>
</body>
</html>
