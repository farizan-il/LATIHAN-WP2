<section>
    <h1><?php echo $judul ?></h1>
    <p align="justify">Pada pengertian codeigniter di atas tadi di jelaskan bahwa codeigniter menggunakan metode MVC. Apa itu 45 MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar codeigniter.</p>
    <p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view dan controller.</p>
    <ol type="a">
        <li>Model</li>
        <p align="justify">Model adalah kelas yang merepresentasikan ataumemodelkan tipe data yang akan digunakan oleh aplikasi. Model jugadapat didefinisakn sebagai bagian penanganan yang berhubungan denganpengolahan atau manipulasi database. Seperti misalnya mengambil datadari database, menginput dan pengolahan database lainnya. Semuaintruksi atau fungsi yang berhubung dengan pengolahan database diletakkan di dalam model. Sebagai contoh, jika ingin membuat aplikasiuntuk menghitung luas dan keliling lingkaran, maka dapat memodelkanobjek lingkaran sebagai kelas model.</p>
        <p align="justify">Sebagai catatan, Semua model harus disimpan didalam folder application\models</p>
        
        <li>View</li>
        <p align="justify">View merupakan bagian yang menangani halaman userinterface atau halaman yang muncul pada user(pada browser). Tampilandari user interface di kumpulkan pada view untuk memisahkannyadengan controller dan model sehingga memudahkan web designer dalammelakukan pengembangan tampilan halaman website.</p>
        
        <li>Controller</li>
        <p align="justify">Controller merupakan kumpulan intruksi aksi yangmenghubungkan model dan view, jadi user tidak akan berhubungandengan model secara langsung, intinya data yang tersimpan didatabase (model) di ambil oleh controller dan kemudian controllerpula yang menampilkan nya ke view. Jadi controller lah yang mengolahintruksi.</p>
        <p align="justify">Dari penjelasan tentang model view dan controllerdi atas dapat di simpulkan bahwa controller sebagai penghubung viewdan model. Misalnya pada aplikasi yang menampilkan data denganmenggunakan metode konsep mvc, controller memanggil intruksi padamodel yang mengambil data pada database, kemudian controller yangmeneruskannya pada view untuk di tampilkan. Jadi jelas sudah dansangat mudah dalam pengembangan aplikasi dengan cara mvc ini karenaweb designer atau front-end developer tidak perlu lagi berhubungandengan controller, dia hanya perlu berhubungan dengan view untukmendesign tampilann aplikasi, karena back-end developer yang46menangani bagian controller dan modelnya. Jadi pembagian tugas punmenjadi mudah dan pengembangan aplikasi dapat di lakukan dengancepat dan terstruktur.</p>
</section>