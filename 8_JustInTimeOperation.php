JIT adalah singkatan dari Just In Time, yaitu sebuah teknik optimasi yang digunakan oleh PHP 8 untuk meningkatkan performa eksekusi kode.
Baru di kembangkan pada PHP 8.0, JIT memungkinkan PHP untuk mengkompilasi kode menjadi bytecode yang lebih efisien pada saat runtime, sehingga dapat meningkatkan kecepatan eksekusi kode secara signifikan.
Cara kerjanya adalah dengan mengkompilasi kode PHP menjadi bytecode yang lebih efisien pada saat runtime, sehingga dapat meningkatkan kecepatan eksekusi kode secara signifikan.

Jika dibandingkan dengan proses tanpa JIT, prosesnya adalah sebagai berikut:
1. PHP menginterpretasikan kode PHP secara langsung, yang berarti setiap baris kode dieksekusi satu per satu.
2. Dengan JIT, PHP mengkompilasi kode PHP menjadi bytecode yang lebih efisien pada saat runtime.
3. Bytecode ini kemudian dieksekusi oleh mesin virtual PHP, yang dapat meningkatkan kecepatan eksekusi kode secara signifikan.
4. JIT juga dapat mengoptimalkan kode yang sering dieksekusi, sehingga meningkatkan performa aplikasi secara keseluruhan.
5. JIT dapat mengurangi overhead yang biasanya terjadi pada proses interpretasi kode, sehingga meningkatkan efisiensi eksekusi kode.
6. JIT juga dapat mengoptimalkan penggunaan memori, sehingga mengurangi penggunaan sumber daya sistem.
7. JIT dapat meningkatkan performa aplikasi yang membutuhkan komputasi intensif, seperti aplikasi web yang kompleks atau aplikasi yang memproses data besar.

Cara mengaktifkan JIT di PHP 8 adalah dengan menambahkan konfigurasi berikut pada file php.ini:
1. Pada linux, etc/php/8/0/cli/php.ini & etc/php/8.0/fpm/php.ini
2. Lakukan uncomment pada zend extension=opcache.so
3. cek pada phpinfo() apakah sudah ada JIT atau dengan perintah php -version pada cli, maka akan tampil informasi tentang JIT dibawah inforasi PHP