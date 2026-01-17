# uas_keamanan_AlifahDian_119
Detail Kerentanan

Sebagian besar modul aplikasi ini rentan untuk simulasi pengujian keamanan. Versi yang rentan memiliki modul login yang menggunakan password yang tidak kuat dan tidak membatasi jumlah percobaan login, sehingga rentan terhadap brute force. Kerentanan Cross-Site Scripting (XSS) muncul ketika modul komentar menampilkan input pengguna tanpa validasi. Selain itu, modul visualisasi file menerima nama file langsung dari parameter URL, yang memungkinkan Local File Inclusion (LFI) terjadi.

Teknik Mitigasi

Versi aman menggunakan sejumlah kontrol keamanan untuk menutupi celah yang ada. Dengan menggunakan bcrypt, kata sandi untuk modul login disimpan dalam bentuk hash, dan jumlah percobaan untuk mengaksesnya dibatasi. Untuk mencegah script berbahaya dijalankan, komentar dimasukkan melalui encoding. Mekanisme whitelist membatasi akses ke file dalam modul visualisasi file, sehingga hanya file tertentu yang dapat diakses.

Analisis Risiko Singkat

Kerentanan LFI pada modul file viewer memiliki risiko sedang karena memungkinkan akses file yang tidak seharusnya. Di sisi lain, kerentanan pada modul login dan komentar memiliki risiko tinggi karena dapat menyebabkan pengambilalihan akun serta pencurian data pengguna.
