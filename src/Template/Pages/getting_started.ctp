<?php $this->Require->req('prettify'); ?>

<div class="container">
  <h1>Getting Started</h1>
  <hr>
</div><!--/container-->

<!--main-->
<div class="container">
    <div class="row">
      <div class="col-md-3" data-leftcol>
        <ul class="nav nav-stacked sidebar" data-sidebar>
          <li><a href="#overview">Overview</a></li>
          <li><a href="#installation">Installation</a></li>
          <li><a href="#toolkit">Toolkit</a></li>
          <li><a href="#views">Extending CakePHP Views</a></li>
          <li><a href="#assets">Assets mangement</a></li>
          <li><a href="#javasrcipt">Organizing javascript</a><li>
          <li><a href="#features">Extending Features</a></li>
        </ul>
      </div>
      
      <div class="col-md-9">
        <div class="alert alert-warning">
            <p class="lead">
                <strong>Warning:</strong> GintonicCMS is currently under development. Current status of the CMS
                is not stable yet. Documentation, code and settings are subject to changes.
            </p>
        </div>
        <h2 id="overview" class="section-first">Overview</h2>
        <hr>
        <p class="lead">
            GintonicCMS is meant to provide a robust and extensible core for your 
            webapps, by wrapping powerful tools and a seamless base. We have
            designed this framework while keeping in mind that web applications 
            should be standardized and maintainable over time, in a context where
            both technologies and your needs evolve fast.
        </p>
        <div class="row text-center">
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">Every device</span></p>
                <p>Responsive, mobile first and meant to work on every type of device and browser</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">Less Preprocessor</span></p>
                <p>Build powerful styles with the included Less preprocessor and build tools</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">No configuration</span></p>
                <p>Comes with an easy installer and a fully featured admin panel</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">Clean MVC conventions</span></p>
                <p>Keep your code cleanly organized and maintainable for both back and front end</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">Secure</span></p>
                <p>Built-in tools for validation, and protection against CSRF, XSS and SQL injection</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">Batteries Included</span></p>
                <p>Translations, database access, caching, validation, authentication and more</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">Clean Javascript</span></p>
                <p>Using the AMD pattern and React/JSX templates to keep clean javascript code</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">Dynamic Interface</span></p>
                <p>Snappy interface with RequireJS asynch module loader and React websockets</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">SEO friendly</span></p>
                <p>We have followed the best practices to help you score high on search engines</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">Libraries management</span></p>
                <p>Comes with Composer, NPM and bower to keep track and update dependencies</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">Build tools</span></p>
                <p>Comes with the tools and setup to compile less, optimize and minify javascript</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">Boilerplate App</span></p>
                <p>Users, files, pictures, messaging and other features to serve as a base</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">Admin panel</span></p>
                <p>A unified admin panel with a variety of built-in tools and plugins</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">Testable</span></p>
                <p>Back-end testable using PHPUnit and front-end testable using Jest</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">Constant Integration</span></p>
                <p>Ready for constant integration</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-primary">Many more tools<span></p>
                <p>Helps you maintain doc, coding standards and constant integration</p>
            </div>
        </div>

        <h2 id="installation" class="section">Installation</h2>
        <hr>
        <h3>Requirements</h3>
        <p>Basicly, GintoniCMS has the same requirements as CakePHP</p>
        <blockquote>
            <ul>
                <li>
                    HTTP Server. For example: Apache. Having mod_rewrite is 
                    preferred, but by no means required.
                </li>
                <li>PHP 5.4.16 or greater.</li>
                <li>mbstring extension</li>
                <li>intl extension</li>
            </ul>
            <p>
                While a database engine isn’t required, we imagine that most 
                applications will utilize one. CakePHP supports a variety of 
                database storage engines
            </p>
            <ul>
                <li>MySQL (5.1.10 or greater)</li>
                <li>PostgreSQL</li>
                <li>Microsoft SQL Server (2008 or higher)</li>
                <li>SQLite 3</li>
            </ul>
        </blockquote>
        <h3>Installing GintonicCMS</h3>
        <p>
            GintonicCMS relies on composer and npm for it's installation. If 
            you don't have them installed follow these instructions:
        </p>
        <ul>
            <li><a href="compose://getcomposer.org/doc/00-intro.md">composer</a></li>
            <li><a href="http://blog.nodeknockout.com/post/65463770933/how-to-install-node-js-and-npm">nodejs and npm</a></li>
        </ul>
        <p>Then run the following command if you have composer installed locally</p>
<pre class="prettyprint">
php composer.phar create-project --prefer-dist gintonicweb/app="dev-master" [app_name]
</pre>
        <p>If you have composer installed globally:</p>
<pre class="prettyprint">
composer create-project --prefer-dist gintonicweb/app="dev-master" [app_name]
</pre>
        <h2 id="toolkit" class="section">Toolkit</h2>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <h3>GintonicCMS</h3>
                <p>Built on top of CakePHP 3, GintonicCMS provides a robust and extensible core for your apps by wrapping powerful tools and a seamless base.</p>
                <a href="http://gintoniccms.com">http://gintoniccms.com</a>
            </div>
            <div class="col-md-4">
                <h3>CakePHP</h3>
                <p>CakePHP is a rapid development framework for PHP which uses commonly known design patterns like Front Controller and MVC</p>
                <a href="http://cakephp.org">http://cakephp.org</a>
            </div>
            <div class="col-md-4">
                <h3>Bootstrap</h3>
                <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile first projects on the web.</p>
                <a href="http://getbootstrap.com">http://getbootstrap.com</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>React</h3>
                <p>A javascript library for building user interfaces. React abstracts away the DOM from you, giving a simpler programming model and better performance.</p>
                <a href="https://facebook.github.io/react">https://facebook.github.io/react</a>
            </div>
            <div class="col-md-4">
                <h3>RequireJS</h3>
                <p>RequireJS is a JavaScript file and module loader. RequireJS will improve the speed and quality of your code.</p>
                <a href="http://requirejs.org">http://requirejs.org</a>
            </div>
            <div class="col-md-4">
                <h3>Ratchet</h3>
                <p>A loosely coupled PHP library providing tools to create real time, bi-directional applications between clients and servers over WebSockets.</p>
                <a href="http://socketo.me">http://socketo.me</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>AdminLTE</h3>
                <p>Admin control Panel Theme That Is Based On Bootstrap 3.x</p>
                <a href="https://almsaeedstudio.com/">https://almsaeedstudio.com/</a>
            </div>
            <div class="col-md-4">
                <h3>Build tools</h3>
                <p>The following tools are wrapped together in an easily usable build system and dependency management.</p>
                <a href="https://www.npmjs.com/">npm </a>, 
                <a href="http://bower.io/">Bower </a>,
                <a href="http://gruntjs.com/">Grunt</a>,
                <a href="http://lesscss.org/">Less</a>,
                <a href="http://requirejs.org/docs/optimization.html">r.js</a>
            </div>
            <div class="col-md-4">
                <h3>Code integrity tools</h3>
                <p>Here is a collection of tools that helps with codebase management</p>
                <a href="https://phpunit.de/">PHPUnit</a>,
                <a href="http://www.phpdoc.org/">phpDocumentor</a>,
                <a href="https://facebook.github.io/jest/">Jest</a>,
                <a href="https://github.com/squizlabs/PHP_CodeSniffer">PHP_CodeSniffer</a>
            </div>
        </div>
        <h2 id="views" class="section">Changing the appearance</h2>
        <hr>
        <h3>Default Views</h3>
        <p>Layouts</p>
        <p>View Blocks</p>
        <p>Overriding templates</p>
        <p>Extending templates</p>
        <p>Utilities</p>
        <h3>React Views</h3>
        <h3>Stylesheets</h3>
        <h2 id="assets" class="section">Assets mangement</h2>
        <hr>
        <p>
            GintonicCMS uses a build system of it's own in order to manage the 
            front-end dependencies.
        </p>
        <p>
            In order to do that, we use the folder named <code>assets/</code>. The
            root of that folder contains build tools and dependencies. The source
            code of your project should be kept in the folder <code>assets/src/</code>.
            Within each type of assets, you will find a folder called <code>lib/</code>
            that holds all of the dependencies for that specific type of files.
            this structure will be replicated in the webroot folder with the build.
        </p>
        <h3>How to build</h3>
        <p>
            If you used the default installer, you can simply use the admin 
            panel buttons in order to rebuild assets.
        </p>
        <p>
            If you want finer control over builds, you can
            run it from the command line. You will need bower and grunt
            installed globally. If you don't have them, you can install them
            with:
        </p>
<pre class="prettyprint">
npm install -g bower
npm install -g grunt-cli
</pre>
        <p> Then you can run all steps of the build like this: </p>
<pre class="prettyprint">
# from your project folder, move into the assets folder
cd assets

# install node package dependencies
npm install

# download assets and front end dependencies
bower install

# optimizes, minifies and copy sources files in webroot
grunt
</pre>
        <p>
            Most of the time, you will only use grunt to build your curent work
            There are 2 different build modes, <strong>build</strong> and 
            <strong>dev</strong>. The first one is longer and minifies all 
            assets whereas the former runs quicker and doesn't minifies anything, 
            making it easier to debug. You can also run the grunt build step
            by step.
        </p>
        <div class="row">
            <div class="col-md-6">
<pre class="prettyprint">
#run all build steps at once
grunt

#run each step one by one
grunt copy:main
grunt requirejs:build
grunt less:build
grunt copy:build
</pre>
            </div>
            <div class="col-md-6">
<pre class="prettyprint">
#use dev mode for unminified files
grunt dev

#run eachstep one by one
grunt copy:main
grunt requirejs:dev
grunt less:dev
grunt copy:dev
</pre>
            </div>
        </div>
        <h3>Extending Less files</h3>
        <p>
            Less files are built using the project's assets folder as the 
            main source and GintoniCMS's asset folder as a fallback.
            If a file is not present in the project folder, the compiler will
            look in the plugin's directory. This makes it easy to overide
            single files. Pick the ones you want to override from GintonicCMS,
            put them in the matching folder of your app and voila.
        </p>
        <h3>Extending Javascript</h3>
        <p>
            In order to extend / override / include base javascript code in
            your own modules, you will have to define your own paths in
            <code>assets/src/js/config.js</code>. In this file you can choose
            which folders and paths are loaded. If you have installed the plugin
            via the regular installer, you'll have a copy of that file
        </p>
        <h2 id="javasrcipt" class="section">Organizing javascript</h2>
        <h3>Asynchroneous Module Loader</h3>
        <p>
            All of our javascript is organized using the AMD design pattern. 
            RequireJS is used to load those modules asynchroneously. Split
            your files in different modules, and use our RequireHelper to load
            the modules anywhere in your cake project.
        </p>
        <h3>React and Jsx Templates</h3>
        <p>
            React and JSX templates are also natively supported. In order to 
            load .jsx templates, you will need to give the .jsx extention to
            your files. From then, you can load them like any other module with 
            requirejs, like this:
        </p>
<pre class="prettyprint">
var myNiceModule = Require('jsx!app/myNiceModule');
</pre>
        <h3>RequireHelper</h3>
        <p>
            To ease cakephp's integration with RequireJS, GintonicCMS 
            provides a <a href="http://book.cakephp.org/3.0/en/views/helpers.html">helper</a> 
            to load RequireJS modules. Use it in your models like this:
        </p>
<pre class="prettyprint">
<?= htmlentities('<?= ') ?>$this->Require->req('jquery')<?= htmlentities(' ?>') ?>

<?= htmlentities('<?= ') ?>$this->Require->req('bootstrap')<?= htmlentities(' ?>') ?>

<?= htmlentities('<?= ') ?>$this->Require->load('config')<?= htmlentities(' ?>') ?>
</pre>
        <p>
            This code will echo the following HTML:
        </p>
<pre class="prettyprint"><?= htmlentities(
'<script src="/gintonic_c_m_s/js/config.js" data-main="/js/config"></script>
<script type="text/javascript">
    require(["js/config"], function () {
        require(["jquery","bootstrap"]);
    });
</script>'
)?>
</pre>
        <h2 id="features" class="section">Extending Features</h2>
        <hr>
        <p>Models</p>
        <p>Controllers</p>
      </div>
    </div>
</div>
