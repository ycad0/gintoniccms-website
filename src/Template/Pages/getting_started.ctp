<?php $this->Require->req('prettify'); ?>

<div class="container">
  <h1 >Getting Started</h1>
  <hr>
</div><!--/container-->

<!--main-->
<div class="container">
    <div class="row">
      <div class="col-md-3" id="leftCol">
        <ul class="nav nav-stacked" id="sidebar">
          <li><a href="#overview">Overview</a></li>
          <li><a href="#installation">Installation</a></li>
          <li><a href="#toolkit">Toolkit</a></li>
          <li><a href="#appearance">Changing the appearance</a></li>
          <li><a href="#assets">Building Assets</a></li>
          <li><a href="#features">Extending Features</a></li>
          <li><a href="#testing">Unit Testing</a></li>
        </ul>
      </div>
      
      <div class="col-md-9">
        <h2 id="overview">Overview</h2>
        <hr>
        <p class="lead">
            GintonicCM is meant to provide a robust and extensible core for your 
            webapps, by wrapping powerful tools and a seamless base. We have
            designed this framework while keeping in mind that web applications 
            should be standardized and maintainable over time, in a context where
            technologies and corporation needs evolve fast.
        </p>
        <div class="row text-center">
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">Every device</span></p>
                <p>Responsive, mobile first and meant to work on every type of device and browsers</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">Less Preprocessor</span></p>
                <p>Build powerful styles with the included Less preprocessor and build tools</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">No configuration</span></p>
                <p>Comes with an easy installer and a fully featured admin panel</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">Clean MVC conventions</span></p>
                <p>Keep your code cleanly organized and maintainable both for back and front end</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">Secure</span></p>
                <p>Built-in tools for validation, and protection against CSRF, XSS and SQL injection</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">Batteries Included</span></p>
                <p>Translations, database access, caching, validation, authentication and more</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">Clean Javascript</span></p>
                <p>Using the AMD pattern and React/JSX templates to keep clean javascript code</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">Dynamic Interface</span></p>
                <p>Snappy interface with RequireJS asynch module loader and React websockets</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">SEO friendly</span></p>
                <p>We have followed the best practices to help you score high on search engines</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">Libraries management</span></p>
                <p>Comes with Composer, NPM and bower to keep track and update dependencies</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">Build tools</span></p>
                <p>Comes with the tools and setup to compile less, optimize and minify javascript</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">Boilerplate App</span></p>
                <p>Users, files, pictures, messaging  management and other features to build onto</p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">Admin panel</span></p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">Unit testing</span></p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">...</span></p>
            </div>
            <div class="col-md-3">
                <p class="lead"><span class="label label-default">...</span></p>
            </div>
        </div>

        <h2 id="installation">Installation</h2>
        <hr>
        <h3>Requirements</h3>
        <p>Basicly, GintoniCMS has the same requirements as CakePHP</p>
        <blockquote>
            <ul>
                <li>HTTP Server. For example: Apache. Having mod_rewrite is preferred, but by no means required.</li>
                <li>PHP 5.4.16 or greater.</li>
                <li>mbstring extension</li>
                <li>intl extension</li>
            </ul>
            <p>While a database engine isn’t required, we imagine that most applications will utilize one. CakePHP supports a variety of database storage engines</p>
            <ul>
                <li>MySQL (5.1.10 or greater)</li>
                <li>PostgreSQL</li>
                <li>Microsoft SQL Server (2008 or higher)</li>
                <li>SQLite 3</li>
            </ul>
        </blockquote>
        <h3>Installing GintonicCMS</h3>
        <ul>
            <li>composer</li>
            <li>nodejs and npm</li>
        </ul>
        <h3>What happens</h3>
        <h2 id="sec1">Toolkit</h2>
        <div class="row">
            <div class="col-md-4">
                <h3>GintonicCMS</h3>
                <p>Built on top of CakePHP 3, GintonicCMS provides a robust and extensible core for your apps by wrapping powerful tools and a seamless base.</p>
                <a href="http://cms.gintonicweb.com">http://cms.gintonicweb.com</a>
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
                <h3>GintonicCMS</h3>
                <p>Built on top of CakePHP 3, GintonicCMS provides a robust and extensible core for your apps by wrapping powerful tools and a seamless base.</p>
                <a href="http://cms.gintonicweb.com">http://cms.gintonicweb.com</a>
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
        <h2 id="sec2">Changing the appearance</h2>
        <hr>
        <h3>Default Views</h3>
        <p>Layouts</p>
        <p>View Blocks</p>
        <p>Overriding templates</p>
        <p>Extending templates</p>
        <p>Utilities</p>
        <h3>React Views</h3>
        <h3>Stylesheets</h3>
        <h2 id="sec3">Assets mangement</h2>
        <hr>
        <h3>RequireJS Component</h3>
        <h3>Overriding the core</h3>
        <h3>Building</h3>
        <h3>React Templates</h3>
        <h2 id="sec4">Extending Features</h2>
        <hr>
        <p>Models</p>
        <p>Controllers</p>
        <h2 id="sec5">Unit Testing</h2>
        <hr>
      </div>
    </div>
</div>
