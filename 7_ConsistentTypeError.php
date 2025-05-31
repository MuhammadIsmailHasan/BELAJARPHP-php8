<?php
/*    Consistent Type Error adalah fitur baru di PHP 8 yang membuat error lebih konsisten dan mudah dipahami.
    Fitur ini mengubah cara PHP menangani error terkait tipe data, sehingga error yang dihasilkan lebih jelas dan informatif.
    Ini membantu pengembang untuk lebih mudah menemukan dan memperbaiki bug dalam kode mereka.

    Pada php 7.4, masih ada function bawaan php yang hanya memberikan warning ketika argument yang diberikan tidak sesuai dengan tipe data yang diharapkan.
    Sehingga error yang dihasilkan tidak konsisten dan bisa membingungkan.
*/


// strlen([]);
// Fatal error: Uncaught TypeError: strlen(): Argument #1 ($string) must be of type string, array given