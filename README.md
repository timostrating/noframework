# NoFramework

This will start as a copy of the pdfbooks repo. The next step will be to remove all content and keep the framework in a minimal state.

## Command line tool
<pre>
$ php nofamework.php
 _   _       ______                                        _    
| \ | |     |  ____|                                      | |   
|  \| | ___ | |__   __ _ _ __ ___   _____      _____  _ __| | __
| . ` |/ _ \|  __| / _` | '_ ` _ \ / _ \ \ /\ / / _ \| '__| |/ /
| |\  | (_) | |   | (_| | | | | | |  __/\ V  V / (_) | |  |   < 
|_| \_|\___/|_|    \__,_|_| |_| |_|\___| \_/\_/ \___/|_|  |_|\_\

you can use the following functions
    generate [name]     - generates a scaffold 
    seed                - seeds the database
    routes              - shows all SuperGlobal route paths 
</pre>

[![gif](https://raw.githubusercontent.com/timostrating/noframework/master/example.gif)](https://www.youtube.com/watch?v=1FdVZSmU0es)
[Youtube](https://www.youtube.com/watch?v=1FdVZSmU0es)

## Structure
<!-- You can not trust tabs here for a correct result so we use spaces instead -->
<pre>
- app/                  -- All our MVC stuff goes in here
    - model/              -- Our MVC Model
    - view/               -- Our MVC Views 
    - contollers/         -- Our MVC Controllers 

- config/               -- All configuration files
    app.php               -- This links the public/index.php to the framework
    config.php            -- General personal configuration for your installation
    routes.php            -- This file links a url to a function in a controller
    seeds.php             -- This file contains everything to rebuild the database

- core/                 -- Our most important framework files
    - Autoload/           -- Autoload Class
    - database/           -- Database Class
    - router/             -- View / ViewLoader Class
    helpers.php         -- All helper functions are in here

- nofamework/           -- A collection of files that are used in the generators

- public/               -- The root of our application
    - assets/             -- Contains all assets for the web-application
    index.php             -- Root file

index.html              -- Welcome message
nofamework.php          -- $ php ./noframework.php  for more info about this tool
</pre>


## Nice too have 
- [x] Admin backend.
- [ ] Our own frontend framework.
- [ ] Asset pipeline - We could minify all assets and place them afterwards in the folder /public/assets/.
- [x] A better way to handle / and \ difference.
- [x] A better way to handle Links. Maybe we can use the routes to generate static variables.
- [x] More comments - Every class should at least be explained somewhere.
- [x] Docblocks could also help.
- [ ] Generators that support model variables.
- [x] Router that supports a resource function to loads the default crud urls.
- [ ] Router that supports prefixes.
- [ ] Router that supports subdomains.
- [ ] Maybe migrations ???
- [ ] A database that lets you query without writing SQL.
- [ ] A database that automaticly detects PDO:FETCHCLASS options.
- [ ] An ORM that works from the models and that lets you query them.
- [ ] A documented git flow.
- [ ] Multi language support.
- [ ] Git documentation.
