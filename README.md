
# Project Title

A brief description of what this project does and who it's for


## Tech Stack

**Backend:** Laravel 9, PHP 8.x

# Installation

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
#### How to add a New Page:

- Create New View with blade.php extenstion.
- Create Controller for different methods related to page. (Optional. You can use default controller also.)
- Set Path in routes/web.php file to serve the page on the browser.
- Add page link to resources/views/layouts/sidebar.blade.php for vertical menu
- Add page link to resources/views/layouts/header.blade.php for Horizontal menu
- Add page name to resources/lang/en{all language folder}/translation.php file to display in multi language.

#### Steps to add a new page :
- Step 1: Create a file with the test.blade.php under the resources/views directory. Let's create a testPage for an example with filename test.blade.php and placing the below code in that file.
```bash
@extends('layouts.master')
@section('title') @lang('translation.Test') @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Vuesy @endslot
@slot('title') Test Page @endslot
@endcomponent
<div>
.........
</div>
@endsection
```
- Step 2: To add new controller, use below command :

```bash
php artisan make:controller {ControllerName} {-r}
```
To change breadcrumbs :
```bash
@component('components.breadcrumb')
@slot('li_1') Vuesy @endslot
@slot('title') Test Page @endslot
@endcomponent
```
- Step 3: After creating file and controller you need to declare its route where it can be served on the browser, suppose you want created page to be serve on the route http://localhost:8000/test . To access this page define its routes in the resources/web.php file.
```bash
Route::get('/test', function () { return view('test'); });
```
- Step 4: After defining the route, add page link to sidebar at `resources/views/layouts/sidebar.blade.php` file. or add also in `resources/views/layouts/header.blade.php`
  
  option 1: To add item in menu.

  `<a href="test" class="dropdown-item" key="t-test">@lang('translation.Test')</a>`

- Step 5: Add page name to `resources/lang/en{all language folder}/translation.php` file to display in multi language.
`"Test" => "Test"`
### Custom Css for User

 We have provided custom scss files for user to override themes styles and variable.
- We have provided app.scss for user override.
- Also, we have provided theme-dark.scss for Dak version specific style.
- You can override bootstrap variable in _variable.scss file.
- We have also provided a app.js file. You can write your custom script here and it won't be overridden in our future release.

### Multi Language Settings
Lets add french language.

- Create new file translation.php in the fr folder in the resources/lang folder and add the below code.
```bash <?php
    // translation.php
    return [
            'Test' => 'Test'
    ];

```
- You need to add the new language option in the topbar `resources/views/layouts/header.blade.php`. Make sure to add it flag image and option in the dropdown.

After completing these above steps you need to run the command npm run dev command in the project directory. After running this process you need to run the command php artisan serve . It will serve your app on the localhost.

