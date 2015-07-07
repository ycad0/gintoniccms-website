<div class="container">
    <h1>Getting Started</h1>
    <hr>
</div><!--/container-->

<div class="container">
    <div class="row">
      <div class="col-md-3" data-leftcol>
        <ul class="nav nav-stacked sidebar" data-sidebar>
          <li><a href="#overview">Overview</a></li>
          <li><a href="#installation">Installation</a></li>
          <li><a href="#toolkit">Toolkit</a></li>
          <li><a href="#theming">Theming</a></li>
          <li><a href="#assets">Assets mangement</a></li>
          <li><a href="#javasrcipt">Organizing javascript</a><li>
          <li><a href="#features">Extending Features</a></li>
          <li><a href="#contributing">Contributing to GintonicCMS</a></li>
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
        <p>
            The build system provided by GintonicCMS relies on the following
            front-end tools. It is strongly suggested to install the 3 of them
            globally to benefit from the full power of our build system.
        </p>
        <ul>
            <li><a href="http://blog.nodeknockout.com/post/65463770933/how-to-install-node-js-and-npm">npm</a></li>
            <li><a href="http://bower.io/">bower</a> (<code>npm install -g bower</code>)</li>
            <li><a href="http://gruntjs.com/getting-started">grunt-cli</a> (<code>npm install -g grunt-cli</code>)</li>
        </ul>
        <h3>Installing GintonicCMS</h3>
        <p>
            GintonicCMS relies on composer and you need to <strong>run it from a shell
            where git is installed</strong>. If you don't have them installed follow these 
            instructions:
        </p>
        <ul>
            <li><a href="https://getcomposer.org/doc/00-intro.md">composer</a></li>
            <li><a href="https://git-scm.com/book/en/v2/Getting-Started-Installing-Git">git</a></li>
        </ul>
        <p></p>
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
        <h2 id="theming" class="section">Theming</h2>
        <hr>
        <h3>Loading and Building themes</h3>
        <p>
            GintonicCMS comes pre-packaged with 2 themes. TwbsTheme
            is the default plain bootstrap front-end. AdminTheme is
            based on AdminLTE and is used as the default Admin theme. Refer to them
            as 2 working examples. Here's how you can replace the default themes 
            with other GintonicCMS themes.
        </p>
        <p>1. Install a new theme with composer</p>
<pre class="prettyprint">
composer require gintonicweb/twbs-theme
</pre>

        <p>2. Add it to your <code>config/bootstrap.php</code> file</p>
<pre class="prettyprint">
Plugin::load('TwbsTheme');
</pre>
        <p>3. Add it to the front-end dependencies with bower</p>
<pre class="prettyprint">
bower install gintonicweb/twbs-theme --save-dev
</pre>
        <p>4. Add it to your  <code>Gruntfile.js</code> file</p>
<pre class="prettyprint">
// requirejs > compile > options > paths :
twbsTheme: '../../vendor/gintonicweb/twbs-theme/assets/js/main'

// requirejs > compile > options > modules > includes :
"twbsTheme"
</pre>
        <h3>Working with themes</h3>
        <p>
            Each CakePHP plugin uses the same standard folder structure.
            GintonicCMS defines some <a href="https://github.com/gintonicweb/GintonicCMS/tree/master/src/Template">base templates</a>.
            You can override them in your own application by creating 
            the folder <code>src/Template/Plugin/GintonicCMS</code>
            and crating templates with the matching paths and names.
        </p>
        <p>
            For example, you could override GintonicCMS
            <a href="https://github.com/gintonicweb/GintonicCMS/blob/master/src/Template/Element/Menus/top_menu.ctp">default top menu</a>
            by creating the file
            <code>src/Template/Plugin/GintonicCMS/Element/Menus/top_menu.ctp</code>
            in your project folder.
        </p>
        <p>
            Themes can override the project's templates if marked 
            as such in your controllers.
        </p>
<pre class="prettyprint">
class ExamplesController extends AppController
{
public $theme = 'TwbsTheme';
}
</pre>
        <p>
            Given this scenario, cake would look for templates in 
            the following order and render the first file available.<br>
            <ol>
                <li>
                    The theme <br>
                    <code>vendor/gintonicweb/twbs-theme/src/Template/Examples/index.ctp</code> 
                </li>
                <li> 
                    The application <br>
                    <code>src/Template/Plugin/GintonicCMS/Examples/index.ctp</code>
                </li>
                <li>
                     The plugin where ExamplesController.php is defined<br>
                    <code>vendor/gintonicweb/gintonic-cms/src/Template/Examples/index.ctp</code>
                </li>
            </ol>
        </p>
        <h3>Loading the template of your choice</h3>
        <p>
            In the case above, given templates with matching paths and 
            names, the ones of <code>TwbsTheme</code> have precedence over
            the ones of your application. This comes in handy when the 
            semantics of your templates are significantly altered between 
            themes.
        </p>
        <p>
            In some situations you might want to use your own templates and 
            view elements instead of overriding GintonicCMS. You can use your
            own templates by adding this line to your controllers:
<pre class="prettyprint">
$this->render('ControllerName/custom_file', 'layout_name');
</pre>
            Or even render some other plugins templates and permutations.
<pre class="prettyprint">
$this->render('PluginName.PluginController/custom_file', 'PluginName.layout_name');
</pre>
        </p>
        <p>
            On a default installation of GintonicCMS, the AppController defines 
            the default layout as <code>GintonicCMS.default</code>. You can 
            delete this line or edit it in order to load your own layout like 
            you would in a regular CakePHP project. 
        </p>
        <p>
            Within template files, you can load your own custom elements 
            by using <code></code> 
<pre class="prettyprint">
<?= htmlentities('<?= ') ?>$this->Element('element_name')<?= htmlentities(' ?>') ?>
</pre>
            or use the plugin notation
<pre class="prettyprint">
<?= htmlentities('<?= ') ?>$this->Element('PluginName.element_name')<?= htmlentities(' ?>') ?>
</pre>
        </p>
        <p>
            Cakephp provides <a href="http://book.cakephp.org/3.0/en/views.html">
            rich templating tools</a> including view blocks, layouts and helpers 
            that you can add to your project under <code>src/Templates</code>.
        </p>

        <h3>Baking templates from themes</h3>
        <p>
            <a href="http://book.cakephp.org/3.0/en/bake/usage.html">Baking templates</a> 
            can make your life easier, and since we're using themes, 
            the baked templates should be themed too. By using the 
            following commands, you can bake themed files with a nice
            and matching style.
        </p>
<pre class="prettyprint">
bin/cake bake template posts --theme TwbsTheme
</pre>
<pre class="prettyprint">
bin/cake bake template posts --theme AdminTheme --prefix Admin
</pre>
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
        <h3>Building the assets</h3>
        <p>
            If you used the default installer, you can simply use the admin 
            panel buttons in order to rebuild assets.
        </p>
        <p> Then you can run all steps of the build like this: </p>
<pre class="prettyprint">
# install node package dependencies
npm install

# download assets and front end dependencies
bower install

# optimizes, minifies and copy sources files in webroot
grunt
</pre>
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

<?= htmlentities('<?= ') ?>$this->Require->load()<?= htmlentities(' ?>') ?>
</pre>
        <p>
            This code will echo the following HTML:
        </p>
<pre class="prettyprint"><?= htmlentities(
'<script src="/js/main.js" data-main="/js/main"></script>
<script type="text/javascript">
    require(["js/config"], function () {
        require(["jquery","bootstrap"]);
    });
</script>'
)?>
</pre>
        <h2 id="features" class="section">Extending The CMS</h2>
        <hr>
        <p>
            The CMS has been designed to be easily extended without having to
            edit the core of the CMS. In this page we have explained how it
            is possible to extend the basic appearance of cakephp. The same can
            be done with Controllers, ORM and tools.
        </p>
        <p>
            The default AppController <br>
            <code>src/Controller/AppController.php</code>
        </p>
        <p>
            of a default install of GintonicCMS extends the CMS own code <br>
            <code>vendor/gintonicweb/gintonic-cms/src/Controller/AppController.php</code>
        </p>
        <p>
            and is a good example of how GintonicCMS code can be overrided. 
            The following sections of this website will describe how these 
            functionalities are meant to be used. For detailed information,
            The <a href="http://gintoniccms.com/api/namespaces/GintonicCMS.html">API</a>
            section of this website details specificly GintonicCMS code.
        </p>
        <p>
            If you are not familiar with CakePHP's use of plugins, it is recommended
            to have a look at their <a href="http://book.cakephp.org/3.0/en/plugins.html">documentation on plugins</a>.
        </p>

        <h2 id="contributing" class="section">Contributing to GintonicCMS</h2>
        <hr>
        <p>
            To contribute to GintonicCMS, the first thing you might want to do is
            to setup your development environment. Here's how:
        </p>
        <ul>
            <li>Setup a GintonicCMS project using the installation instructions.</li>
            <li>Clone the GintonicCMS on github</li>
            <li>Open a shell and get into the folder <code>[your_app]/vendor/gintonicweb/gintonic-cms/</code></li>
            <li>Add a remote to  your own fork <code>git remote add my_new_remote http://...</code></li>
            <li>Make your changes in the vendor folder and push them to your remote <code>git push my_new_remote master</code></li>
            <li>Check that the <a href="https://travis-ci.org/gintonicweb/GintonicCMS">build on travis</a> is fine</li>
            <li>From Github, make a pull request on the main project.</li>
            <li>Keep commits small and clear</li>
        </ul>
        <p>
            You can also contribute to our satellite projects like the documentation you're 
            reading right now. 
            <ul>
                <li>Fork and clone <a href="https://github.com/gintonicweb/gintoniccms-website.git">the docs repo</a></li>
                <li>run <code>composer install</code> to deploy the project locally</li>
                <li>open the <code>config</code> folder and setup your <code>app.php</code>, <code>datasources.php</code> and <code>email.php</code></li>
            </ul>
        </p>
        <p>
            You can have a look at the different packages on 
            <a href="https://github.com/gintonicweb">our page on giour page on githubthub</a>.
            we are also <a href="http://webchat.freenode.net/?channels=%23gintonic&uio=d4">available on irc</a>.
        </p>
      </div>
    </div>
</div>
