# Running the websites
NOTE: Not all parts of the website are completely functional yet! Feel free to navigate around the folders/directories of ``play.test.toontown.com``

1) Install PHP https://windows.php.net/download (I recommend PHP 7.4.6 or higher)

2) In order for PHP to run, sometimes you may need to add it as an environment variable on your computer. While I may specialize in IT, I feel like dropping a guide will be much easier for both you and me. https://www.architectryan.com/2018/03/17/add-to-the-path-on-windows-10/ *Make sure the PHP directory is part of the Path variable list!*

3) In your preferred directory, open up a command prompt (make sure it's set to the path you're currently on right now!) and type: ``php -S 0.0.0.0:3420`` (Note: It doesn't have to be specifically ``3420``, we're just opening a local network port so we can access the web application.)

4) In your preferred browser of choice, type in ``localhost:3420`` in your search bar (make sure there's nothing else! We don't want to Google this)

5) If done correctly, there should be a webpage of some sort. You can type in different pages (so for example, if I was hosting my PHP instance in ``./play.test.toontown.com/``, I could type in ``localhost:3420/faq/`` to view the faq section[folder] of the website.)