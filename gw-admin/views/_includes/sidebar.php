<?php //RequiredSession(); ?>
<div class="sidebar col-2">
  <div class="logo">
    Grid Weaver
  </div>
  <ul>
    <li><a href="<?php echo URL; ?>dashboard">Home</a></li>
    <details>
      <summary>Posts</summary>
      <ul>
        <li><a href="<?php echo URL; ?>posts/overall">All posts</a></li>
        <li><a href="<?php echo URL; ?>posts/new-post">New post</a></li>
      </ul>
    </details>
    <details>
      <summary>Pages</summary>
      <ul>
        <li><a href="<?php echo URL; ?>pages">All pages</a></li>
        <li><a href="<?php echo URL; ?>pages">New pages</a></li>
      </ul>
    </details>
    <li><a href="<?php echo URL; ?>appareance">Appearance</a> </li>
    <details>
      <summary>Users</summary>
      <ul>
        <li><a href="<?php echo URL; ?>users">All users</a></li>
        <li><a href="<?php echo URL; ?>users/add">Add user</a></li>
        <li><a href="<?php echo URL; ?>users/edit-user">Edit user</a></li>
      </ul>
    </details>
    <li><a href="<?php echo URL; ?>settings">Settings</a></li>
    <li><a href="<?php echo URL; ?>media">Media</a></li>
  </ul>
</div>
