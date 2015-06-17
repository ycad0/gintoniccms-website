<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <?php echo $this->Html->link(
                $this->Html->image(
                    'GintonicCMS.logo.png',
                    [
                        "class" => "img-responsive profile-img navbar-img",
                        "alt" => 'GintonicCMS'
                    ]
                ),
                '/',
                ['escape'=>false,'class'=>['navbar-brand']]
            );?>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#user-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="user-menu">
            <ul class="nav navbar-nav">
                <li>
                    <?php echo $this->Html->link( __('Getting Started'), [
                        'controller' => 'Pages', 'getting_started'
                    ]);?>
                </li>
                <li>
                    <?php echo $this->Html->link( __('Core'), [
                        'controller' => 'Pages', 'core'
                    ]);?>
                </li>
                <li>
                    <?php echo $this->Html->link( __('Toolkit'), [
                        'controller' => 'Pages', 'toolkit'
                    ]);?>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Development <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="http://gintoniccms.com/api/namespaces/GintonicCMS.html">Api</a></li>
                        <li><a href="/pages/phpcs">Code Sniffer</a></li>
                        <li><a href="https://travis-ci.org/gintonicweb/GintonicCMS/builds">Travis-CI</a></li>
                        <li><a href="https://github.com/gintonicweb/GintonicCMS">GitHub</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
