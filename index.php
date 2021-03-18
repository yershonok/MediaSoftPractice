<?php

$str = 'Дождались меня белые ночи
    Над простором густых островов
    Снова смотрят знакомые очи,
    И мелькает былое без слов.
    В царство времени всё я не верю,
    Силу сердца еще берегу,
    Роковую не скрою потерю,
    Но сказать навсегда - не могу.
    При мерцании долгом заката,
    Пред минутной дремотою дня,
    Что погиб его свет без возврата,
    В эту ночь не уверишь меня.';


$words = str_word_count($str, 1, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
$words = array_unique($words);

$count = count($words);

$words_count = [];

foreach ($words as $word) {

    preg_match_all('~\b' . $word . '\b~iu', $str, $words_count[$word]);
}


foreach ($words_count as $word => $word_count) {
    $entry_count = count($word_count[0]);
    echo "{$word}: {$entry_count}" . PHP_EOL;
}

echo "Всего слов: {$count}";