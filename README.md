CodeIgniter 4 Application Starter
What is CodeIgniter?
CodeIgniter is a powerful PHP framework that is lightweight, fast, and flexible. It is designed for developers who need a simple and elegant toolkit to create full-featured web applications.

This repository contains a composer-installable app starter based on CodeIgniter 4, which is built from the official development repository.

For more details, check out the official CodeIgniter 4 User Guide or visit the CodeIgniter forums.

Installation & Updates
Step 1: Install CodeIgniter 4
To create a new project, run the following composer command in your terminal:

bash
Copy code
composer create-project codeigniter4/appstarter
This will install CodeIgniter 4 and set up a new application for you.

Step 2: Update Your Project
Whenever there is a new release of the CodeIgniter framework, run:

bash
Copy code
composer update
This will update your project to the latest stable release. When updating, make sure to review the release notes to see if there are any changes you need to apply to your app folder. You can copy or merge the affected files from vendor/codeigniter4/framework/app.

Setup
Step 1: Configure the .env File
Copy the .env.example to .env:

The .env file contains your environment-specific configuration. You should rename the example file to .env to configure your settings.

bash
Copy code
cp .env.example .env
Edit the .env file:

Open the .env file in a text editor and set up your environment variables for your application. The most important settings are:

Base URL: Set the base URL for your application (e.g., http://localhost:8080 for local development).

ini
Copy code
app.baseURL = 'http://localhost:8080'
Database Configuration: Set up your database connection by configuring the following fields:

ini
Copy code
database.default.hostname = localhost
database.default.database = ci4_project # Your database name
database.default.username = root # Your database username
database.default.password = # Your database password
database.default.DBDriver = MySQLi # Set your DB driver (e.g., MySQLi, PostgreSQL)
Save the .env file after editing.

Step 2: Run Database Migrations
Run the migrations:

To create the necessary tables in your database, run the following command in your terminal:

bash
Copy code
php spark migrate
This command will apply all migrations from the app/Database/Migrations directory and create the required tables in your database.

Verify Database:

After running the migration command, check your database to ensure the required tables have been created.

Step 3: Start the Development Server
Once the environment and database are set up, you can start the PHP built-in development server.

Run the development server:

Use the following command to start the server:

bash
Copy code
php spark serve
By default, this will run the server on http://localhost:8080. You can access your application by visiting this URL in your browser.

Access the Application:

Open your browser and navigate to:

arduino
Copy code
http://localhost:8080
You should see the CodeIgniter 4 welcome page or the landing page you have set up.

Server Requirements
To run CodeIgniter 4, ensure your server meets the following requirements:

PHP 7.4 or higher.
The following PHP extensions:
intl (for internationalization support).
mbstring (for string manipulation).
json (enabled by default).
mysqlnd (if using MySQL).
libcurl (if using HTTP\CURLRequest).
Note: PHP 7.4 reached end-of-life in November 2022. If you're still using PHP 7.4, consider upgrading to PHP 8.1 or newer.

Repository Management
We track bugs and approved development work packages in the GitHub issues of the main CodeIgniter repository. You can also use the CodeIgniter forum for support and to discuss feature requests.

This repository is a distribution built by the release preparation script. For issues with the starter app or the framework, you can raise them on the forum or as issues in the main repository.

Troubleshooting
If you encounter issues with migrations:
Check your .env file: Ensure that your database settings (hostname, username, password, etc.) are correct.
Migration files: Ensure that the migration files exist in the app/Database/Migrations folder and are correctly defined.
If php spark serve doesn't work:
Check PHP version: Ensure PHP is installed by running php -v. If not, install PHP from php.net.
Check for file permission issues: Make sure your project files have the correct permissions, especially if running on a server.
If you get a "Database connection failed" error:
Double-check your database credentials in the .env file.
Ensure the database server is running and accessible from your application.
Additional Commands
Rollback migrations (undo changes):

bash
Copy code
php spark migrate:rollback
Create a new migration:

bash
Copy code
php spark make:migration <migration_name>
Check the status of migrations:

bash
Copy code
php spark migrate:status
Conclusion
By following the steps in this guide, you should be able to set up a CodeIgniter 4 application, configure your environment, run migrations, and start the built-in development server. If you run into any issues, be sure to consult the official CodeIgniter 4 User Guide or the CodeIgniter Forum.

Happy coding!
