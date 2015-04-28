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
                    <?php echo $this->Html->link( __('Features'), [
                        'controller' => 'Pages', 'features'
                    ]);?>
                </li>
                <li>
                    <?php echo $this->Html->link( __('Wrappers'), [
                        'controller' => 'Pages', 'wrappers'
                    ]);?>
                </li>
                <li>
                    <a href="#">Api</a>
                </li>
                <li>
                    <a href="#">Code Metrics</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if($this->request->session()->check('Auth.User')): ?>
                <li class="dropdown">
                    <?php echo $this->Html->link(
                        ($this->request->session()->read('Auth.User.first').' '.$this->request->session()->read('Auth.User.last')).'<span class="caret"></span>',
                        '#',
                        [
                            'escape'=>false,
                            'class'=>'dropdown-toggle',
                            'data-toggle'=>'dropdown',
                            'role'=>'button',
                            'aria-expanded'=>false
                        ]
                    ); ?>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <?php if($this->request->session()->read('Auth.User.role') == 'admin'): ?>
                                <?php echo $this->Html->link(
                                    __('Administration'),
                                    [
                                        'plugin'=>'GintonicCMS',
                                        'controller'=>'Users',
                                        'action' => 'index',
                                        'admin'
                                    ],
                                    ['escape' => false]
                                );?>
                            <?php endif; ?>
                        </li>
                        <li>
                            <?php echo $this->Html->link(
                                __('Profile'),
                                [
                                    'plugin'=>'GintonicCMS',
                                    'controller'=>'Users',
                                    'action'=>'edit',
                                    $this->request->session()->read('Auth.User.id')
                                ],
                                ['escape'=>false]
                            ); ?>
                        </li>
                        <?php echo $this->fetch('topMenuActions'); ?>
                        <li>
                            <?php echo $this->Html->link(
                                __('Signout'),
                                [
                                    'plugin'=>'GintonicCMS',
                                    'controller'=>'Users',
                                    'action'=>'signout'
                                ],
                                ['escape'=>false]
                            ); ?>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
