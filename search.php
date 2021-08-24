<?php ini_set('default_charset','UTF-8');header('Content-Type: text/html; charset=UTF-8');header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');header('Cache-Control: post-check=0, pre-check=0', false);header('Pragma: no-cache'); ?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Site Search Results</title>
<meta name="referrer" content="same-origin">
<meta name="viewport" content="width=960">
<style>html,body{-webkit-text-zoom:reset !important;-ms-text-size-adjust:none !important;-moz-text-size-adjust:none !important;-webkit-text-size-adjust:none !important}@font-face{font-display:block;font-family:"EB Garamond";src:url('css/EBGaramond-Regular.woff2') format('woff2'),url('css/EBGaramond-Regular.woff') format('woff');font-weight:400}body>div{font-size:0}p, span,h1,h2,h3,h4,h5,h6{margin:0;word-spacing:normal;word-wrap:break-word;-ms-word-wrap:break-word;pointer-events:auto;max-height:1000000000px}sup{font-size:inherit;vertical-align:baseline;position:relative;top:-0.4em}sub{font-size:inherit;vertical-align:baseline;position:relative;top:0.4em}ul{display:block;word-spacing:normal;word-wrap:break-word;list-style-type:none;padding:0;margin:0;-moz-padding-start:0;-khtml-padding-start:0;-webkit-padding-start:0;-o-padding-start:0;-padding-start:0;-webkit-margin-before:0;-webkit-margin-after:0}li{display:block;white-space:normal}li p{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}form{display:inline-block}a{text-decoration:inherit;color:inherit;-webkit-tap-highlight-color:rgba(0,0,0,0)}textarea{resize:none}.shm-l{float:left;clear:left}.shm-r{float:right;clear:right}.whitespacefix{word-spacing:-1px}html{font-family:sans-serif}body{font-size:0;margin:0}audio,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:0 0;outline:0}b,strong{font-weight:700}dfn{font-style:italic}h1,h2,h3,h4,h5,h6{font-size:1em;line-height:1;margin:0}img{border:0}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=submit]{-webkit-appearance:button;cursor:pointer;box-sizing:border-box;white-space:normal}input[type=text],input[type=password],textarea{-webkit-appearance:none;appearance:none;box-sizing:border-box}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}textarea{overflow:auto;box-sizing:border-box;border-color:#ddd}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}blockquote{margin-block-start:0;margin-block-end:0;margin-inline-start:0;margin-inline-end:0}:-webkit-full-screen-ancestor:not(iframe){-webkit-clip-path:initial!important}
html{-webkit-font-smoothing:antialiased; -moz-osx-font-smoothing:grayscale}#b{background-color:#fafafa}.ps31{position:relative;margin-top:192px}.v6{display:block;*display:block;zoom:1;vertical-align:top}.s36{pointer-events:none;min-width:960px;width:960px;margin-left:auto;margin-right:auto;min-height:1200px}.v7{display:inline-block;*display:inline;zoom:1;vertical-align:top}.ps32{position:relative;margin-left:96px;margin-top:0}.s37{min-width:768px;width:768px;min-height:32px}.c61{z-index:1;pointer-events:auto;overflow:hidden;height:32px}.p2{padding-top:0;text-indent:0;padding-bottom:0;padding-right:0;text-align:left}.f6{font-family:"EB Garamond";font-size:15px;font-weight:400;font-style:normal;text-decoration:none;text-transform:none;color:#123250;background-color:initial;line-height:19px;letter-spacing:normal;text-shadow:none}.ps33{position:relative;margin-left:96px;margin-top:32px}.s38{min-width:768px;width:768px;min-height:1000px}.c62{z-index:2;pointer-events:auto;border:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;background-color:#ddedf7;background-clip:padding-box}.ps34{position:relative;margin-left:0;margin-top:8px}.s39{min-width:768px;width:768px;min-height:89px}.c63{pointer-events:none}.ps35{position:relative;margin-left:8px;margin-top:0}.s40{min-width:752px;width:752px;min-height:32px}.c64{pointer-events:auto;overflow:hidden;height:32px}.s41{min-width:742px;width:742px;min-height:57px}.c65{pointer-events:auto;overflow:hidden;height:57px}</style>
<link onload="this.media='all';this.onload=null;" rel="stylesheet" href="css/site.c6c8f1.css" media="print">
<!--[if lte IE 7]>
<link rel="stylesheet" href="css/site.c6c8f1-lteIE7.css" type="text/css">
<![endif]-->
</head>
<body id="b">
<?php
    $mb = extension_loaded('mbstring');

    function find($searchText, $searchFor) {
        global $mb;
        return $mb ? mb_stripos($searchText, $searchFor) : stripos($searchText, $searchFor);
    }

    function mb_split_str($str) {
        preg_match_all("/./u", $str, $arr);
        return $arr[0];
    }

    function mb_similar_text($str1, $str2, &$percent) {
        global $mb;
        $arr_1 = array_unique(mb_split_str($str1));
        $arr_2 = array_unique(mb_split_str($str2));
        $similarity = count($arr_2) - count(array_diff($arr_2, $arr_1));
        $percent = ($similarity * 2) / ($mb ? (mb_strlen($str1) + mb_strlen($str2)) : (strlen($str1) + strlen($str2)));
        return $similarity;
    }

    function simfind($searchText, $searchWord, &$score) {
        global $mb;
        $s = strtoupper($searchWord);
        foreach(preg_split("/[\\s]+/", $searchText) as $w) {
            mb_similar_text($s, strtoupper($w), $percent);
            if(strlen($searchWord) < 6)
                $percent = $percent * strlen($searchWord) / 5;
            if($percent >= .8) {
                $score = $percent;
                return array($mb ? mb_stripos($searchText, $w) : stripos($searchText, $w), $mb ? mb_strlen($w) : strlen($w));
            }
        }
        return array(FALSE, FALSE);
    }

    function scorecmp($a, $b) {
        if ($a['score'] == $b['score']) {
            return 0;
        }
        return ($a['score'] < $b['score']) ? 1 : -1;
    }

    function textlencmp($a, $b) {
        if (strlen($a['text']) == strlen($b['text'])) {
            return 0;
        }
        return (strlen($a['text']) < strlen($b['text'])) ? 1 : -1;
    }

    function snipcmp($a, $b) {
        if ($a['score'] == $b['score']) {
            return textlencmp($a, $b);
        }
        return ($a['score'] < $b['score']) ? 1 : -1;
    }

    function ordercmp($a, $b) {
        if ($a['order'] == $b['order']) {
            return 0;
        }
        return ($a['order'] < $b['order']) ? 1 : -1;
    }

    function mfind($searchText, $searchFor, $words, $w, &$wordsfound) {
        if(empty($searchFor))
            return FALSE;

        $snippet = array('text' => $searchText, 'w' => $w);
        if(($pos = find($searchText, $searchFor)) !== FALSE) {
            $wordsfound = array_merge($wordsfound, $words);
            $snippet['score'] = 20;
            $snippet['pos'] = $pos;
            $snippet['matchlen'] = strlen($searchFor);
            return $snippet;
        }
        foreach($words as $searchWord) {
            if(($pos = find($searchText, $searchWord)) !== FALSE) {
                $snippet['score'] = isset($wordscores[$searchWord]) ? 0.5 : 10;
                $wordsfound[] = $searchWord;
                $snippet['pos'] = $pos;
                $snippet['matchlen'] = strlen($searchWord);
                return $snippet;
            }
        }
        foreach($words as $searchWord) {
            $score = 1;
            $match = simfind($searchText, $searchWord, $score);
            if($match[0] !== FALSE) {
                $wordsfound[] = $searchWord;
                $snippet['score'] = $score * 5;
                $snippet['pos'] = $match[0];
                $snippet['matchlen'] = $match[1];
                return $snippet;
            }
        }
        return FALSE;
    }

    $page = 0;
    $start_page = 0;
    $end_page = -1;
    $searchResults = array();
    $found = array();
    if(isset($_GET['search'])) {
        $results_per_page = 10;
        $pages = 10;
        $page = (isset($_GET['page']) ? $_GET['page'] : 1);
        if($page < 1) {
            $page = 1;
        }
        $start_page = $page - $pages / 2;
        if($start_page < 1) {
            $start_page = 1;
        }
        $end_page = $page + $pages / 2 - 1;

        $searchFor = $_GET['search'];
        $words = array_filter(preg_split("/[\\s]+/", $searchFor), function ($w) { return strlen($w) > 2; });
        $searchJSON = file_get_contents('search.json');
        $searchPages = json_decode($searchJSON, TRUE);
        foreach($searchPages as $searchPage) {
            $foundwords = array();
            if(($title = mfind($searchPage['title'], $searchFor, $words, 10, $foundwords)) !== FALSE) {
                $title['score'] *= (strlen($searchFor) / strlen($searchPage['title']));
            }
            $snippets = array();
            $order = 0;
            foreach($searchPage['texts'] as $text) {
                if(($s = mfind($text['t'], $searchFor, $words, $text['w'], $foundwords)) !== FALSE) {
                    $s['order'] = $order++;
                    $snippets[] = $s;
                }
            }
            if(count(array_diff(array_unique($words), array_unique($foundwords))) == 0) {
                if(count($snippets)) {
                    $len = 300;
                    $snippet_count = intval(($len + 99) / 100);
                    uasort($snippets, 'snipcmp');
                    $original_snippets = $snippets;
                    if(count($snippets) > $snippet_count) {
                        $snippets = array_slice($snippets, 0, $snippet_count);
                    } else {
                        $snippet_count = count($snippets);
                    }
                
                    $snippet_length = intval($len / $snippet_count);
                    $score = 0;
                
                    foreach($original_snippets as $s) {
                        $l = strlen($s['text']);
                        if($l > $snippet_length)
                            $l = $snippet_length;
                        $score += $s['score'] * $s['w'] * ($l / $snippet_length);
                    }
                
                    uasort($snippets, 'ordercmp');
                    if($title !== FALSE) {
                        $score += 30 * $title['score'];
                    }
                    $found[] = array('link' => $searchPage['link'], 'title' => htmlentities($searchPage['title']), 'score' => $score, 'snippets' => $snippets);
                } else if($title !== FALSE) {
                    foreach($searchPage['texts'] as $text) {
                        $s = array('text' => $text['t'], 'w' => $text['w']);
                        $s['score'] = $text['w'];
                        $snippets[] = $s;
                    }
                    $found[] = array('link' => $searchPage['link'], 'title' => htmlentities($searchPage['title']), 'score' => 30 * $title['score'], 'snippets' => $snippets);
                }
            }
        }
        $current_page = $page;
        $end_page = (count($found) + ($results_per_page - 1)) / $results_per_page;
        uasort($found, 'scorecmp');
        $searchResults = array_slice($found, ($page - 1) * $results_per_page, $results_per_page);
    }
?>

<div class="ps31 v6 s36">
<div class="v7 ps32 s37 c61">
<p class="p2 f6">Search results for &quot;<?php if(isset($_GET['search'])) echo $_GET['search']; ?>&quot;</p>
</div>
<div class="v7 ps33 s38 c62">
<?php
    function rev_string($string) {
        global $mb;
        $chars = $mb ? mb_split_str($string, 1, mb_internal_encoding()) : str_split($string, 1);
        return implode('', array_reverse($chars));
    }

    function word_trunc($string, $length) {
        global $mb;
        if(strlen($string) > $length)
        {
            $string = wordwrap($string, $length);
            $string = $mb? mb_substr($string, 0, mb_strpos($string, "\n")) : substr($string, 0, strpos($string, "\n"));;
        }
        return $string;
    }

    function clip_string($string, $pos, $length, $total) {
        global $mb;
        $m = $mb ? mb_substr($string, $pos, $length) : substr($string, $pos, $length);
        $before = $mb ? mb_substr($string, 0, $pos) : substr($string, 0, $pos);
        $after = $mb ? mb_substr($string, $pos + $length, mb_strlen($string) - ($pos + $length)) : substr($string, $pos + $length, strlen($string) - ($pos + $length));
        $before = rev_string($before);
        $half = intval(($total - $length) / 2);
        $hlPre = '';
        $hlPost = '';
        $out = htmlentities(rev_string(word_trunc($before, $half))) . $hlPre . htmlentities($m) . $hlPost . htmlentities(word_trunc($after, $half));
        return $out;
    }

    if(count($searchResults) == 0) {
        $result = '<div class="v7 ps34 s39 c63"><div class="v7 ps35 s40 c64"><p class="p2 f6">{title}</p></div><div class="v7 ps35 s41 c65"><p class="p2 f6">{text}</p></div></div>';
        $result = str_replace('{title}', htmlentities('No search result'), $result);
        $result = str_replace('{text}', '', $result);
        echo $result;
    }
    else {
        foreach($searchResults as $searchResult) {
            $result = '<div class="v7 ps34 s39 c63"><div class="v7 ps35 s40 c64"><p class="p2 f6">{title}</p></div><div class="v7 ps35 s41 c65"><p class="p2 f6">{text}</p></div></div>';
            $result = str_replace('{title}', '<a href="' . $searchResult['link'] . '">' . $searchResult['title'] . '</a>', $result);

            $text = "";
            foreach($searchResult['snippets'] as $s) {
                if(isset($s['pos'])) {
                    $pos = $s['pos'];
                    $m = $s['matchlen'];
                    $snippet = clip_string($s['text'], $pos, $m, $snippet_length);
                } else {
                    $snippet = $s['text'];
                }
                if(strlen($text))
                    $text .= "&hellip;";
                $text .= " " . $snippet;
            }

            $result = str_replace('{text}', $text, $result);
            echo $result;
        }
   }
?>

</div>
<div class="v4 ps28 s33 c47">
<div class="ps27">
<?php

    $control = '<div class="v4 ps29 s34 c48" style="display:none"><a href="#" class="f5 btn1 v5 s35">&lt;&lt;</a></div>';
    if($page > 1) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . ($page - 1);
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        $control = str_replace('href="#"', 'href="' . $url . '"', $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v4 ps30 s34 c49" style="display:none"><a href="#" class="f5 btn2 v5 s35">{page_num}</a></div>';
    $buttonPage = $start_page + 1 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fafafa; border-color: #000"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v4 ps30 s34 c50" style="display:none"><a href="#" class="f5 btn3 v5 s35">{page_num}</a></div>';
    $buttonPage = $start_page + 2 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fafafa; border-color: #000"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v4 ps30 s34 c51" style="display:none"><a href="#" class="f5 btn4 v5 s35">{page_num}</a></div>';
    $buttonPage = $start_page + 3 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fafafa; border-color: #000"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v4 ps30 s34 c52" style="display:none"><a href="#" class="f5 btn5 v5 s35">{page_num}</a></div>';
    $buttonPage = $start_page + 4 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fafafa; border-color: #000"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v4 ps30 s34 c53" style="display:none"><a href="#" class="f5 btn6 v5 s35">{page_num}</a></div>';
    $buttonPage = $start_page + 5 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fafafa; border-color: #000"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v4 ps30 s34 c54" style="display:none"><a href="#" class="f5 btn7 v5 s35">{page_num}</a></div>';
    $buttonPage = $start_page + 6 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fafafa; border-color: #000"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v4 ps30 s34 c55" style="display:none"><a href="#" class="f5 btn8 v5 s35">{page_num}</a></div>';
    $buttonPage = $start_page + 7 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fafafa; border-color: #000"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v4 ps30 s34 c56" style="display:none"><a href="#" class="f5 btn9 v5 s35">{page_num}</a></div>';
    $buttonPage = $start_page + 8 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fafafa; border-color: #000"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v4 ps30 s34 c57" style="display:none"><a href="#" class="f5 btn10 v5 s35">{page_num}</a></div>';
    $buttonPage = $start_page + 9 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fafafa; border-color: #000"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v4 ps30 s34 c58" style="display:none"><a href="#" class="f5 btn11 v5 s35">{page_num}</a></div>';
    $buttonPage = $start_page + 10 - 1;
    if($buttonPage <= $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . $buttonPage;
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        if($buttonPage == $page) {
            $control = str_replace('href="#"', 'style="border: 0; background-color: #c0c0c0; color: #fafafa; border-color: #000"', $control);
        }
        else {
            $control = str_replace('href="#"', 'href="' . $url . '"', $control);
        }
        $control = str_replace('{page_num}', $buttonPage, $control);
    }
    echo $control;

?>

<?php

    $control = '<div class="v4 ps30 s34 c59" style="display:none"><a href="#" class="f5 btn12 v5 s35">&gt;&gt;</a></div>';
    if($page < $end_page) {
        $url = strtok($_SERVER['REQUEST_URI'],'?') . '?search=' . $searchFor . '&page=' . ($page + 1);
        $control = str_replace('style="visibility:hidden"', '', $control);
        $control = str_replace('style="display:none"', '', $control);
        $control = str_replace('href="#"', 'href="' . $url . '"', $control);
    }
    echo $control;

?>

</div>
</div>
</div>
<div class="c60">
</div>
<script>dpth="/";!function(){var s=["js/jquery.579bc0.js","js/search.c6c8f1.js"],n={},j=0,e=function(e){var o=new XMLHttpRequest;o.open("GET",s[e],!0),o.onload=function(){if(n[e]=o.responseText,2==++j)for(var t in s){var i=document.createElement("script");i.textContent=n[t],document.body.appendChild(i)}},o.send()};for(var o in s)e(o)}();
</script>
<script type="text/javascript">
var ver=RegExp(/Mozilla\/5\.0 \(Linux; .; Android ([\d.]+)/).exec(navigator.userAgent);if(ver&&parseFloat(ver[1])<5){document.getElementsByTagName('body')[0].className+=' whitespacefix';}
</script>
</body>
</html>