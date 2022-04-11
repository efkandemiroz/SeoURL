<?php

function seoURL($trData)
{
    $tr = array('ş', 'Ş', 'ı', 'I', 'İ', 'ğ', 'Ğ', 'ü', 'Ü', 'ö', 'Ö', 'Ç', 'ç', '(', ')', '/', ' ', ',', '?');
    $eng = array('s', 's', 'i', 'i', 'i', 'g', 'g', 'u', 'u', 'o', 'o', 'c', 'c', '', '', '-', '-', '', '');
    $trData = str_replace($tr, $eng, $trData);
    $trData = strtolower($trData);
    $trData = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $trData);
    $trData = preg_replace('/\s+/', '-', $trData);
    $trData = preg_replace('|-+|', '-', $trData);
    $trData = preg_replace('/#/', '', $trData);
    $trData = str_replace('.', '', $trData);
    $trData = str_replace('\'', '', $trData);
    $trData = str_replace('+', '-', $trData);
    $trData = str_replace('!', '-', $trData);
     $trData = str_replace(':', '-', $trData);
     $trData = str_replace(',', '-', $trData);
     $trData = str_replace('²', '2', $trData);
    $trData = str_replace('\'', '', $trData);
    $trData = str_replace('$', '-usd-', $trData);
    $trData = str_replace('½', '', $trData);
    $trData = str_replace('^', '-', $trData);
    $trData = str_replace('₺', '-tl-', $trData);
    $trData = str_replace(';', '', $trData);
    $trData = trim($trData, '-');

    return $trData;
}

echo (seoURL('Efkan Demiröz Kişisel Github Profil Sayfası;'));