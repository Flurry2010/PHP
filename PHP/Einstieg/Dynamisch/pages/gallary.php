<?php

$gallary = createGallery('./bilder/', 7, 100);
echo $gallary;

function createGallery($srcdir, $n, $width, $height = null)
{

    $ret = '<table><tbody><tr>';
    $bilder = glob($srcdir . '*.jpg');
    $count = 1;
    foreach ($bilder as $key => $bild) {
        $ret .= '<td><a href="' . $bild . '"target="blank"><img src="' . $bild . '" width="' . $width . '"/></a></td>';
        if ($count++ == $n) {
            $ret .= '</tr><tr>';
            $count = 1;
        }
        // if ((($key+1)%$n)==0)$ret.='</tr><tr>'; Das wäre eine Möglichkeit mit Modulo
    }
    for($i = $count; $i<=$n;$i++){
        $ret.='<td></td>';
    }
    return $ret . '</tr></tbody></table>';
}

?>