# Website Form Pendaftaran

Website form pendaftaran merupakan sebuah website sederhana yang dibuat untuk tes praktik junior programmer. Website ini dapat digunakan untuk melakukan pendaftaran, mengirimkan email notifikasi setelah melakukan pendaftaran dan melihat data pendaftar.

## Features

* Melakukan pendaftaran
* Mengirim email notifikasi otomatis
* Melihat data pendaftar

## Tech
Website form pendaftaran dibangun dengan tools berikut:
- [PHP](https://www.php.net/) - popular general-purpose scripting language that is especially suited to web development.
- [Laravel](https://laravel.com/) - a web application framework with expressive, elegant syntax..
- [Tailwind CSS](https://tailwindcss.com/) - a utility-first CSS framework packed with classes like flex, pt-4, text-center and rotate-90 that can be composed to build any design, directly in your markup.
- [Laragon](https://laragon.org/) - is containerized, isolated & portable. It is well-known in the PHP Community but also is used for Node.js & Python projects.
- [MySQL](https://www.mysql.com/) - cluster enables users to meet the database challenges of next generation web, cloud, and communications services.
- [Visual Studio Code](https://code.visualstudio.com/) - a code editor redefined and optimized for building and debugging modern web and cloud applications.

## Requirement
* PHP 8.1 or later

## Installation

Clone the project
~~~bash 
git clone https://github.com/OryzaAmaliatuzZahra/Web-Pendaftaran-Oryza-Amaliatuz-Zahra.git
~~~ 

Go to the project directory
~~~bash
cd web-pendaftaran
~~~ 

Install dependencies
~~~bash
npm install
~~~ 

Add user to database
~~~bash
php artisan db:seed --class=UserSeeder
~~~

Start the server
~~~bash
npm run dev

php artisan serve
~~~

Access in browser
~~~bash
localhost:8000/registration

localhost:8000/admin/data
~~~

## Credits

* [Oryza Amaliatuz Zahra](https://github.com/OryzaAmaliatuzZahra)