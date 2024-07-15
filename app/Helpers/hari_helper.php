<?php

// menampilkan nama hari ini dalam bahasa indonesia
function hari_apa($hari)
{
    switch ($hari) {
        case 'Sun':
            $hari_apa = "Minggu";
            break;

        case 'Mon':
            $hari_apa = "Senin";
            break;

        case 'Tue':
            $hari_apa = "Selasa";
            break;

        case 'Wed':
            $hari_apa = "Rabu";
            break;

        case 'Thu':
            $hari_apa = "Kamis";
            break;

        case 'Fri':
            $hari_apa = "Jumat";
            break;

        case 'Sat':
            $hari_apa = "Sabtu";
            break;

        default:
            $hari_apa = "Tidak di ketahui";
            break;
    }

    return $hari_apa;
}
