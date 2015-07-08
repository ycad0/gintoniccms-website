<?php
$this->assign('pagetitle', __('My Profile'));
$this->Html->addCrumb(__('My Profile'));
$this->start('top_links');
$this->end();
?>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-6 col-md-offset-3">
            <div class="account-wall user-profile">
                <?php echo $this->Html->image(
                    $this->request->session()->read('Auth.User.file.filename'),
                    ['class'=>'img-responsive center-block' , 'style' => 'width:300px;height:300px;']
                ); ?>
                <h1 class="text-center login-title">
                    <?php echo __('Welcome :') . ' ' . $this->request->session()->read("Auth.User.first") . " " . $this->request->session()->read("Auth.User.last") ?>
                </h1>
                <div class="text-center">
                    <?php echo $this->Html->link('Logout', ['plugin'=>'GintonicCMS','controller' => 'users', 'action' => 'signout']); ?>
                </div>
            </div>                       
        </div>
    </div>
</div>
