PATH_INFO merupakan key yang terdapat di global variable $_SERVER
● PATH_INFO adalah informasi path yang terdapat pada URL ketika kita mengakses file php
● Misal jika URL nya adalah http://contoh.com/index.php, maka tidak ada PATH_INFO
● Jika URL nya http://contoh.com/index.php/test, maka PATH_INFO nya adalah /test
● Jika URL nya adalah http://contoh.com/index.php/products/123, maka PATH_INFO nya adalah
/products/123
● Dan jika URL nya http://contoh.com/index.php/category?id=123, maka PATH_INFO nya adalah
/category

PATH_INFO ini banyak digunakan sebagai URL Routing
● Artinya, saat membuat aplikasi PHP, kebanyakan kita biasanya membuat 1 file untuk 1 URL, misal
contoh.com/index.php, contoh.com/product.php, contoh.com/login.php
● Namun best practice dalam framework-framework MVC, biasanya kita hanya menggunakan 1 file
php sebagai gerbang masuk nya, dan memanfaatkan PATH_INFO sebagai informasi file apa yang
harus kita load

Routing adalah teknik melakukan penentuan rute dari URL ke file PHP yang akan dieksekusi
● Secara default routing sudah dilakukan oleh Web Server, misal jika kita buka /index.php maka akan
mengakses file index.php, jika membuat url /user/login.php, maka akan mengakses file login.php di
folder user
Router yang sebelumnya sangat sederhana, hanya meneruskan PATH_INFO ke file php yang dituju,
sedangkan dalam MVC, Router seharusnya meneruskan PATH_INFO menuju class Controller yang dituju

Controller
Selanjutnya, setelah kita selesai membuat Router dan sukses melakukan pemetaan antara path dan
Controller nya, saatnya kita buat class Controller nya
● Class Controller sangat sederhana, class ini merupakan class yang digunakan sebagai class yang
menerima request pertama kali
● Selanjutnya class Controller bisa melakukan pengolahan logic menggunakan class apapun
● Saat ini kita buat class Controller yang sederhana terlebih dahulu

Integrasi Router dengan Controller
Setelah membuat controller, sekarang pertanyaannya, bagaimana integrasi dengan class Router
yang sudah kita buat?
● Pada Class Router sebelumnya, kita hanya susah menemukan class Controller berupa String,
artinya kita perlu buat dulu object dari class Controller tersebut dari String nya, lalu eksekusi
function yang sudah di petakan dengan path tersebut

Model
Model merupakan data
● Saat membuat aplikasi, pada kenyataannya data itu banyak jenis nya
● Misal data request yang dikirim oleh client, data response yang diberikan oleh server, data di
database, dan lain-lain
● Saat ini kita akan buat data yang sederhana dahulu, tanpa menggunakan database
● Model biasanya digunakan oleh Controller, untuk selanjutnya diberikan ke View

View
View adalah bagian yang berisikan kode untuk response
● Kenapa tidak dilakukan di Controller? Hal ini dikarenakan agar Controller bisa fokus berisikan
kode logic aplikasi kita, sedangkan jika kita ingin menampilkan response, kita bisa menggunakan
View
● View biasanya tidak memiliki logic yang terlalu rumit, karena tugasnya hanya menampilkan data
dari Model yang sudah diberikan oleh Controller

Middleware
Middleware merupakan fitur yang biasanya ada pada framework Web MVC
● Middleware merupakan bagian kode yang dieksekusi sebelum Controller di eksekusi
● Dengan Middleware, kita bisa menggabungkan kode-kode yang sama yang harus dieksekusi
sebelum Controller dieksekusi
● Contoh misalnya pengecekan apakan pengguna sudah login atau belum
● Dibandingkan kita simpan di tiap Controller, lebih baik kita gunakan Middleware untuk melakukan
hal tersebut
● Namun sayangnya, pada Router yang telah kita buat, belum mendukung Middleware, sehingga kita
perlu menambahkan fitur Middleware
