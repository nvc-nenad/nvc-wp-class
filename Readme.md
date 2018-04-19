# Setting up Gulp with Underscores starter theme with support for scss, bootstrap 4 and custom js
Once you have Node installed on your computer and when you have the package.json file in your theme root, don't forget to run ```npm install``` to install all the dependences.

### 1. create `custom`folder inside `/sass folder` ###

create `_custom.scss` file to hold our custom scss stylings

import your `_custom.scss` partial in the `/sass/style.scss` file as:

        @import "custom/custom";

### 2. Create a /src and /dist folders in our theme root** ###

create `/css` and `/js` folders inside `/src` folder

### 3. Download Bootstrap 4** ###

copy `bootstrap.min.css` in the `/src/css` folder

### 4. enqueue  bootstrap 4 js necessary scripts in your functions.php file ###

    // add popper for bootstrap 4 js
    wp_enqueue_script('tether_js', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), '4.0', true);
    wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery'), '4.0', true);
    wp_enqueue_script( 'popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js');

### 5. create `main.js` file inside the `/src/js/` folder to have it ready as our custom main javascript file ###

enqueue `main.js` file in your `functions.php` file

     // main js

     wp_enqueue_script('main-script', get_template_directory_uri() . '/dist/js/script.min.js', array('jquery'), time(), true);

### 6. run npm init to interactively create a package.json file ###

copy the `package.json` file provided in the github repository or type it out from the class if you watch the video

### 7. create a gulpfile.js file in the there root folder ###

copy the `gulpfile.js` contents from github or type it out as you watch the video

### 8. run gulp watch command from your theme folder to start watching for changes in our css or js ###

make some changes in the `_custom.scss` file for example to see the changes on the frontend. (you will need to clear the cache out probably).
