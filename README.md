# InvoiceSales
Invoice Sales System developed using symfony framework - CRUD operations, download invoice as pdf (or view inline) and email invoice.

**For running this application. Follow these steps :**
- Install PHP 5.5+
- Install MySQL (The easiest way is to install WAMP, LAMP or XAMPP server)
- Download `wkhtmltopdf` from [here](http://wkhtmltopdf.org/downloads.html)
- Download and global install [composer](https://getcomposer.org/download)
- Create a Database in MySQL and name it as `InvoiceSales`
- [Download](http://github.com/faizanakram99/InvoiceSales/archive/master.zip) the application and extract it.
- Navigate to `InvoiceSales-master` folder open `app/config/config.yml` in any text editor. Search `#KnpSnappyBundle Configuration` and add installation path of `wkhtmltopdf`  to `binary`
- Navigate to `InvoiceSales-master` folder and open `command prompt` or `terminal`.
- Run `composer install`
- Run `php app/console doctrine:schema:update --force`

**Configuring Email**
- Open `app/config/config.yml` and navigate to *Swiftmailer Configuration*

        swiftmailer:
            transport: gmail
            username:  user_name
            password:  password

- Replace `user_name` with you gmail `username` and `your_password` with your gmail password.
- For other mail server configuration there is some additional configuration which can be checked from symfony documentation online.


*Finally run `php app/console server:run` from the root_dir of project i.e. InvoiceSales and open `localhost:8000` in browser to start the app.*

**NOTE** : Tested in Chrome 60, this application won't run in IE due to its limited support of ES6, if you want to run this application in IE, convert ES6 code (`/src/Sales/SalesBundle/Resources/public/js/scripts.js`) to ES5 [here](https://babeljs.io/repl/) and paste it into `scripts.js` file. Run `php app/console assets:install` to reflect changes.
