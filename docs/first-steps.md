# Getting started

This guide is loosely based on [How to install Laravel 5 with Xampp (Windows)](https://www.codementor.io/magarrent/how-to-install-laravel-5-xampp-windows-du107u9ji)

## Install xampp for windows

* Download from XAMPP from [apachefriends.org](https://www.apachefriends.org/index.html)
* Install to default location c:\xampp or any other location. Beware that all configurtion below is written for this location, adjust accordingly.

## Install additional laravel dependencies

* Download from [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)
* Follow the installer.

## Clone the repository

* Open a shell in the location you want to host the project, for example `c:\projects`
* Enter `git clone https://github.com/sandraburri/eallergiepass.git`
* Wait for the operation to finish
* Change the directory using `cd eallergiepass`
* Configure your user name using `git config user.name <Your name>`
* Configure your e-mail address using `git config user.email <your-email@example.com>`

## Add virtual host

* Open `C:\Windows\System32\drivers\etc\hosts` in your favourite editor
* Add the following line `127.0.0.1           eallergiepass.test`
* Save (might need administrative permission)

## Configure apache virtual host

* Open `c:\xampp\apache\conf\extra\httpd-vhosts.conf` in your favourite editor
* Add the following section

```xml
<VirtualHost eallergiepass.test:443>
    DocumentRoot "c:/projects/eallergiepass/public/"
    ServerName eallergiepass.test
    ServerAlias *.eallergiepass.test
    SSLEngine On
    SSLCertificateFile "c:/xampp/apache/crt/eallergiepass.test/server.crt"
    SSLCertificateKeyFile "c:/xampp/apache/crt/eallergiepass.test/server.key"
    <Directory "c:/projects/eallergiepass/">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

## Create self-signed certificate

* Follow the tutorial here [How to Create Valid SSL in localhost for XAMPP](https://shellcreeper.com/how-to-create-valid-ssl-in-localhost-for-xampp/).
* Create a directory `c:\xampp\apache\crt`, download the files *cert.conf* and *make-cert.bat*.
* Open a shell in this location
* Execute `make-cert.bat`
* For the *Enter domain* prompt, add `eallergiepass.test`
* Press Enter (default/skip) for all other promps, until
* For the *Common Name* prompt, add `eallergiepass.test`
* Import the certificate to the *Trusted root certification authorities* as described.

## Create database

* Open `https://localhost/phpmyadmin/`
* Create new database with
  * Name `eallergiepass`
  * Collation `utf8mb4_unicode_ci`

## Configure laravel environment

* Copy `.env.example` to .env
  * Change `DB_DATABASE=eallergiepass`
  * Change `DB_USERNAME=root`
  * Change `DB_PASSWORD=<password>` (Default is empty)

## Restore composer packages

* Open a shell in `c:/projects/eallergiepass/`
* Execute `composer install`

## Add laravel key

* Open a shell in `c:/projects/eallergiepass/`
* Execute `php artisan key:generate`

## Start the web server

* Start Xampp Control using `c:\xampp\xampp-control.exe`
* Start Module *Apache* and *MySQL*
* Ensure that the background of the module is green.
* Else, Panic