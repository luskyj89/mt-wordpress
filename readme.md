/////////////////////
=====================
MULTITOAD'S WORDPRESS
=====================
/////////////////////

@author: John Lusky
@date: 12.19.15

//// Database Installation

/// Notes:
* I've included all the WordPress files you need in the Github repo.
* Uploads are not included, so all the blog featured images and such will show as broken – no big deal.
* There is a .sql database file in /_sql that you'll need to import into phpmyadmin.
* Styling is currently sloppy. As. Hell. Shouldn't need to worry about it too much. It's a mess because the theme is was bought from themeforest back in 2013 and then bits of CSS were progressively added via the WP dashboard to fit Multitoad's brand.
* The theme is intended to be temporary – keep everything as modular as possible so important features can easily be moved to a new theme.
* Try to keep your work pushed to our repo so we can keep our builds synced up.

/// 1. Find your local URL after you pull the repo from Github. I run a local MAMP server and in my case it ended up being 'http://localhost:8888/multitoad/mt-wordpress/''

/// 2. Access phpmyadmin on your server. If you're rolling with MAMP, you click "Open WebStart page" and click "Tools" in the nav. Make a new database- call it mt-wordpress. You can name it whatever you want but if you use mt-wordpress you don't have to bother with wp-config.
    -- If you name it something else, go into wp-config.php (root level file) and change the DB_NAME to whatever you used.

/// 3. In phpmyadmin: go to "Import" and upload the .sql file that's located in /_sql

/// 4. Go to "SQL" and have a look at the /_sql folder again. There's a file called sql-commands that includes 3 commands you'll need to run in this console. Change 'http://localhost:8888/multitoad/mt-wordpress/' to whatever YOUR URL is before you run each command. Run each line SEPARATELY. phpmyadmin will tell you how many lines were affected after each run.

/// 5. Refresh your page and make sure everything is working correctly. You should see multitoad.com with an obnoxious amount of broken images on the blog.


//// Logging In

/// Append /wp-admin to the end of your URL. This will take you to the login form.
    -- Username: multitoa
    -- Password: tasmball987
