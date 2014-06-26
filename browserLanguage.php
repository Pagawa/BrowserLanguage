<?php
/**
 * BrowserLanguage - Version 1.0
 *
 * Copyright 2014, Jonathan M. Piat
 * http://pgwjs.com - http://pagawa.com
 * 
 * Released under the GNU GPLv3 license - http://opensource.org/licenses/gpl-3.0
 */

function browserLanguage($acceptLanguage)
{
    $languages = [];
    $acceptLanguages = explode(',', $acceptLanguage);

    if (empty($acceptLanguages)) {
        return [];
    }

    foreach($acceptLanguages as $acceptLanguage) {
        $language = [];

        // Language
        $primary = (stripos($acceptLanguage, ';')) ? stristr($acceptLanguage, ';', true) : $acceptLanguage;
        $primary = trim($primary);

        if (stripos($primary, '-')) {
            $language['primary'] = stristr($primary, '-', true);
            $language['full'] = $primary;
        } else {
            $language['primary'] = $primary;
        }

        // Qvalue
        preg_match('/q=([0-9.]+)/', $acceptLanguage, $qvalue);
        $language['qvalue'] = (! empty($qvalue[1])) ? $qvalue[1] : 1;

        $languages[] = $language;
    }

    return $languages;
}