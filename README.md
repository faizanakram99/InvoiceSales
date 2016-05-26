# InvoiceSales
Invoice Sales System developed using symfony framework - CRUD operations, download invoice as pdf and email invoice.

My first ever project in symfony.

**For running this application. Follow these steps :**
- Install PHP 5.5+
- Install MySQL (The easiest way is to install WAMP, LAMP or XAMPP server)
- Create a Database in MySQL and name it as `InvoiceSales`
- [Download](http://github.com/faizanakram99/InvoiceSales/archive/master.zip) the application and extract it.
- Navigate to `InvoiceSales` folder and open `command prompt` or `terminal`.
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
