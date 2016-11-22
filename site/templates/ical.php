<?php

// the iCal date format. Note the Z on the end indicates a UTC timestamp.
define('DATE_ICAL', 'Ymd\THis\Z');

// max line length is 75 chars. New line is \\n

$output = "BEGIN:VCALENDAR
METHOD:PUBLISH
VERSION:2.0
PRODID:-//Webworker NRW//Webworker Treffen//DE\n";

// loop over events
$treffenAll = $pages->find('treffen')->children()->flip();

foreach ($treffenAll as $treffen) {
    $titles = array();
    $authors = array();
    $descriptions = array();
    $modified = 0;
    $startDate = preg_replace('/^.*(\d{2})\.(\d{2})\.(\d{4}).*$/', '$3-$2-$1 19:00:00h', strval($treffen->datum()));
    $endDate = preg_replace('/^.*(\d{2})\.(\d{2})\.(\d{4}).*$/', '$3-$2-$1 23:00:00h', strval($treffen->datum()));

    $themen = $treffen->children();
    foreach ($themen as $thema) {
        $titles[] = strval($thema->title());
        $authors[] = strval($thema->author());
        $descriptions[] = html($thema->text());
        $modified = $thema->modified() > $modified ? $thema->modified() : $modified;
    }

$output .=
"BEGIN:VEVENT
SUMMARY:" . implode(' & ', $titles) . "
DESCRIPTION:" . implode(' & ', $descriptions) . "
ORGANIZER:" . implode(' & ', $authors) . "
UID:" . md5($treffen->datum()) . "
DTSTART:" . date(DATE_ICAL, strtotime($startDate)) . "
DTEND:" . date(DATE_ICAL, strtotime($endDate)) . "
LAST-MODIFIED:" . date(DATE_ICAL, $modified) . "
LOCATION:Sipgate, Gladbacher Straße 74, 40219 Düsseldorf
END:VEVENT\n";
}

// close calendar
$output .= "END:VCALENDAR";

echo $output;