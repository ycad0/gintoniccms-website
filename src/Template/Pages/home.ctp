<div class="jumbotron">
    <div class="container text-center">
        <?= $this->Html->image('GintonicCMS.gintonic-white.png',[
            'class' => 'img-responsive center-block title-logo',
            'id' => 'title-logo'
        ]); ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead">
                    Built on top of CakePHP 3, GintonicCMS provides a robust and extensible core for your apps by wrapping the best apis and providing a flexible toolkit.
                </p>
                <?= $this->Html->link(
                    'Download GintonicCMS', 
                    ['controller' => 'Pages', 'getting_started'],
                    ['class' => 'btn btn-primary btn-lg']
                ); ?>
            </div>
        </div>
    </div>
</div>

<div class="container text-center">
    <h2>Get Rid of Constraints</h2>
    <p class="lead">
        Your organization is flexible, and so should be your code. Build flexible structures while keeping your code standardized and maintainable.
    </p>
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <i class="fa fa-4x fa-wrench text-primary"></i>
            <h3>The best tools</h3>
            <p>GintonicCMS uses <a href="http://cakephp.org/">CakePHP</a> as the back-end, <a href="http://getbootstrap.com/">Bootstrap</a> as the front-end, loads javascript using <a href="http://requirejs.org/">Require.js</a> and uses <a href="https://almsaeedstudio.com/AdminLTE">AdminLTE</a> as the admin panel.</p>
        </div>
        <div class="col-md-4">
            <i class="fa fa-4x fa-rocket text-primary"></i>
            <h3>Boilerplate</h3>
            <p>Start your apps quickly by extending our boilerplate code, letting you easily manage Users, Files/Pictures, Chat/Messaging and much more.</p>
        </div>
        <div class="col-md-4">
            <i class="fa fa-4x fa-cubes text-primary"></i>
            <h3>Feature-rich</h3>
            <p>We have packaged and interfaced our favorites libraries and plugins, allowing you to include and use them through a uniform interface.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-5">
            <hr>
        </div>
    </div>
    <p class="lead topic">
        GintonicCMS is open source. It's hosted, developped, and maintained on GitHub.
    </p>
    <?= $this->Html->link(
        'View Project on Github',
        'http://github.com/gintonicweb/GintonicCMS',
        ['class'=>'btn btn-default btn-lg']
    );?>
</div>
