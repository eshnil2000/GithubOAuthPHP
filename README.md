# GithubOAuthPHP

## Github setup
Go to settings, create new App, get Client ID & Secret.
Set Homepage [localhost] and callback page [callback.php]

## Key items on server
Need Apache2 enabled, PHP enabled
Ensure chmod +x *.php . All files executable

## Use phpdotenv to save and retrieve environment variables
in /var/www/html [assuming this is the folder where your app is installed] create a file .env.
save variables here
CLIENT_ID=XXX
CLIENT_SECRET=XXX

Install composer:
sudo apt-get install composer
sudo composer require vlucas/phpdotenv

In your init.php:
require __DIR__ . '/vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

Finally, access your environment variables in init.php:
$client_id = $_SERVER['CLIENT_ID'];
