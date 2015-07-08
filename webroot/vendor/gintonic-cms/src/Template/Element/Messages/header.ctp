<div class="col-md-12 col-xs-12 text-center profile-div">
    <?php
    foreach ($usersList as $user):
        $notification = (isset($user->unread_message) && !empty($user->unread_message)) ? '<i class="badge">' . $user->unread_message . '</i>' : '';
        if (!empty($isProhibitUser) && $user['id'] == $recipientID) {
            if (isset($user->file->filename) && !empty($user->file->filename)) {
                echo $this->Html->link($this->Html->image('/files/uploads/' . $user->file->filename, ['class' => 'img-circle img-responsive center-block']) . $notification . '<span>' . $user->first . '</span>', '#', ['escape' => false, 'class' => (isset($recipientID) && ($recipientID == $user['id'])) ? 'bg-danger' : '']);
            } else {
                echo $this->Html->link($this->Html->image('http://i.imgur.com/dCVa3ik.jpg', ['class' => 'img-circle img-responsive center-block']) . $notification . '<span>' . $user->first . '</span>', '#', ['escape' => false, 'class' => (isset($recipientID) && ($recipientID == $user['id'])) ? 'bg-danger' : '']);
            }
        } else {
            if (empty($isProhibitUser)) {
                if (isset($user->file->filename) && !empty($user->file->filename)) {
                    echo $this->Html->link($this->Html->image('/files/uploads/' . $user->file->filename, ['class' => 'img-circle img-responsive center-block']) . $notification . '<span>' . $user->first . '</span>', ['plugin' => 'GintonicCMS', 'controller' => 'messages', 'action' => 'compose', $user->id], ['escape' => false, 'class' => (isset($recipientID) && ($recipientID == $user['id'])) ? 'bg-danger' : '']);
                } else {
                    echo $this->Html->link($this->Html->image('http://i.imgur.com/dCVa3ik.jpg', ['class' => 'img-circle img-responsive center-block']) . $notification . '<span>' . $user->first . '</span>', ['plugin' => 'GintonicCMS', 'controller' => 'messages', 'action' => 'compose', $user->id], ['escape' => false, 'class' => (isset($recipientID) && ($recipientID == $user['id'])) ? 'bg-danger' : '']);
                }
            }
        }
    endforeach;
    if (empty($isProhibitUser)) {
        foreach ($userGroups as $groupId => $groupName):
            echo $this->Html->link($this->Html->image('/Messages/img/user-group.png', ['class' => 'img-circle img-responsive center-block']) . '<span>' . $groupName . '</span>', ['plugin' => 'GintonicCMS', 'controller' => 'messages', 'action' => 'groupChat', $groupId], ['escape' => false, 'class' => (isset($activeGroupID) && ($activeGroupID == $groupId)) ? 'bg-danger' : '']);
        endforeach;
        echo $this->Html->link($this->Html->image('/Messages/img/user-add.png', ['class' => 'img-circle img-responsive center-block']) . '<span> Add User</span>', ['plugin' => 'GintonicCMS', 'controller' => 'messages', 'action' => 'compose', 0, 'group'], ['escape' => false]);
    }

    ?>
</div>
