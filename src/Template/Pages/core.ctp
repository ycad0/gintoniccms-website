<div class="container">
    <h1>Core Features</h1>
    <hr>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3" data-leftcol>
            <ul class="nav nav-stacked sidebar" data-sidebar>
                <li><a href="#theming">Theming</a></li>
                <li><a href="#users">Users</a></li>
                <li><a href="#files">Files</a></li>
                <li><a href="#messaging">Messaging</a></li>
                <li><a href="#payments">Payments</a></li>
                <li><a href="#posts">Posts</a></li>
            </ul>
        </div>

        <div class="col-md-9">
            <h2 id="theming">Theming</h2>
            <hr>
            <h3>Loading themes</h3>
            <p>
                GintonicCMS comes pre-packaged with 2 themes. <code>TwbsTheme</code>
                is the default plain bootstrap front-end. <code>AdminTheme</code> is
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
                In the case above, given templates with matching paths and 
                names, the ones of <code>TwbsTheme</code> have precedence over
                the ones of your application. This comes in handy when the 
                semantics of your templates are significantly altered between 
                themes.
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
            <h2 id="users">Users</h2>
            <hr>
            <p>Authentitcation</p>
            <p>Password <anagement</p>
            <p>Permissions</p>
            <h2 id="files">Files</h2>
            <hr>
            <p>Storage</p>
            <p>Pictures</p>
            <p>Albums</p>
            <h2 id="messages">Messages</h2>
            <hr>
            <p>Structure</p>
            <p>Chat</p>
            <p>Helpers</p>
            <h2 id="payments">Payments</h2>
            <hr>
            <p>Stripe</p>
            <p>Paypal</p>
            <h2 id="posts">Posts</h2>
            <hr>
            <p>Tags</p>
        </div>
    </div>
</div>
