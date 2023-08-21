
# Project Title

A brief description of what this project does and who it's for


## Acknowledgements

 - [Awesome Readme Templates](https://awesomeopensource.com/project/elangosundar/awesome-README-templates)
 - [Awesome README](https://github.com/matiassingers/awesome-readme)
 - [How to write a Good readme](https://bulldogjob.com/news/449-how-to-write-a-good-readme-for-your-github-project)


## Tech Stack

**Backend:** Laravel 9, PHP 8.x

# Installation

Install my-project with npm

### Introduction
Laravel Mix provides a clean, fluent API for defining basic webpack build steps for your Laravel application. Mix supports several common CSS and JavaScript pre-processors.

### Prerequisites

Please follow below steps to install and setup all prerequisites:

- #### Composer
    Make sure to have the Composer installed & running in your computer.

- #### Nodejs
    Make sure to have the Node.js installed & running in your computer. If you already have installed Node on your computer, you can skip this step if your existing node version is greater than 16.

- #### Git
    Make sure to have the Git installed globally & running on your computer. If you already have installed git on your computer, you can skip this step.


### Installation
To setup, follow below-mentioned steps:

- #### Install Prerequisites 
    Make sure to have all above prerequisites installed & running on your computer.

After you finished with the above steps, you can run the following commands to run the project locally or build for production use:
    

| Command          | Description                                                                  |
|------------------|------------------------------------------------------------------------------|
| npm install      | This would install all the required dependencies in the node_modules folder. |
| composer install | command to install all of the framework's dependencies.                      |

#### Please run the below command to generate the new key.
```bash
php artisan key:generate
```

#### Please fill your DB credentials in the .env file.
```bash
DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=website DB_USERNAME=root DB_PASSWORD=
```

| Command | Description |
|---|---|
| npm run prod | To compile all assets files like CSS, JS and will copy all images into the public directory. Run this command to get minify output for the production server. |
| npm run watch | If you are working on the project and would like to compile all assets files then tun this command so it will auto compile all assets so you dont need to run "npm run dev" command multiple times. |

#### Please run the following commands to clear all cache from the project.
```bash
php artisan optimize
```

| Command             | Description                                                                                                                          |
|---------------------|--------------------------------------------------------------------------------------------------------------------------------------|
| php artisan migrate | This will migrate the database tables. For more details visit https://laravel.com/docs/8.x/migrations                                |
| php artisan serve   | The development server is accessible at http://localhost:8000. To run on other port just run command : php artisan serve --port=8001 |


## Create New Page

- Create New View with blade.php extenstion.
- Create Controller for different methods related to page. (Optional. You can use default controller also.)
- Set Path in routes/web.php file to serve the page on the browser.
- Add page link to resources/views/layouts/sidebar.blade.php for vertical menu
- Add page link to resources/views/layouts/header.blade.php for Horizontal menu
- Add page name to resources/lang/en{all language folder}/translation.php file to display in multi language.


Go to the project directory

```bash
  cd my-project
```

Install dependencies

```bash
  npm install
```

Start the server

```bash
  npm run start
```

