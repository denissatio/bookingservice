<?php
function clientInfo($type) {
    switch ($type) {
        case 'client' :
            if (isset($_SERVER['HTTP_CLIENT_IP']) === TRUE) {
                $result = $_SERVER['HTTP_CLIENT_IP'];
            } else {
                $result = "-";
            }
            break;
        case 'ua' :
            $result = $_SERVER['HTTP_USER_AGENT'];
            break;
        case 'remote' :
            $result = $_SERVER['REMOTE_ADDR'];
            break;

        case 'proxy' :
            if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) === TRUE) {
                $result = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $result = "-";
            }
            break;
    }
    return $result;
}

function optdate($type = "", $data = "") {
    /* $opentag  = "<select id=\"".$idname."\" name=\"".$idname."\" class=\"".$class."\" >";
      $closetag = "</select>"; */
    $first = "<option value=\"\">--</option>";
    switch ($type) {
        case 'date' :
            $opsi = "";
            for ($i = 1; $i <= 31; $i++) {
                if (strlen($i) == 1) {
                    $val = '0' . $i;
                } else {
                    $val = $i;
                }
                if ($data == $val) {
                    $value = "<option selected value=\"" . $val . "\">" . $i . "</option>";
                } else {
                    $value = "<option value=\"" . $val . "\">" . $i . "</option>";
                }

                $opsi = $opsi . ' ' . $value;
            }
            $option = $first . ' ' . $opsi;
            break;

        case 'month' :
            $arr_month = array(1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
                'Agustus', 'September', 'Oktober', 'November', 'Desember');
            $option = '';
            for ($i = 1; $i <= 12; $i++) {
                if (strlen($i) == 1) {
                    $val = '0' . $i;
                } else {
                    $val = $i;
                }
                if ($data == $val) {
                    $value = "<option selected value=\"" . $val . "\">" . $arr_month[$i] . "</option>";
                } else {
                    $value = "<option value=\"" . $val . "\">" . $arr_month[$i] . "</option>";
                }

                $option = $option . ' ' . $value;
            }
            $option = $first . ' ' . $option;
            break;

        case 'year' :
            $opsi = "";
            for ($i = 2001; $i >= 1990; $i--) {
                if ($data == $i) {
                    $value = "<option selected value=\"" . $i . "\">" . $i . "</option>";
                } else {
                    $value = "<option value=\"" . $i . "\">" . $i . "</option>";
                }

                $opsi = $opsi . ' ' . $value;
            }
            $option = $first . ' ' . $opsi;
            break;

        default :
            break;
    }
    return $option;
}

//============secure global variable GET===========//
function getvar($get) {
    if (isset($_GET[$get]) === TRUE) {
        $var = strip_tags($_GET[$get]);
    } else {
        $var = FALSE;
    }
    return $var;
}

//=============secure global variable POST================//
function postvar($post) {
    if (isset($_POST[$post]) === TRUE) {
        $var = mysql_real_escape_string($_POST[$post]);
    } else {
        $var = FALSE;
    }
    return $var;
}

?>