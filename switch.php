<?php

// $hari = 1;

// switch ($hari) {
//     case 1:
//         echo 'Minggu';
//         break;
//     case 2:
//         echo 'Senin';
//         break;
//     case 3:
//         echo 'Selasa';
//         break;

//     default:
//         echo 'Hari belum di buat';
//         break;
// }

$pilihan = 'ubah';

switch ($pilihan) {
    case 'tambah':
        echo 'anda memilih tambah';
        break;
    case 'ubah':
        echo 'anda memilih ubah';
        break;
    case 'hapus':
        echo 'anda memilih hapus';
        break;

    default:
        echo 'Pilihan belum ada';
        break;
}
