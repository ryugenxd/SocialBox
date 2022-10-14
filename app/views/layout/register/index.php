<div class="bg-img">
  <div class="content">
    <header>
      <?=BRAND;?>
    </header>
    <form action="<?=BASE_URL;?>/register/reg" method="post">
      <div class="filed">
      <span class="fa fa-user"></span>
        <input type="text" name="name" placeholder="your name" autocomplete="off" required>
      </div>
      <div class="filed space">
      <span class="fa fa-envelope"></span>
        <input type="email" name="email" placeholder="email" autocomplete="off" required>
      </div>
      <div class="filed space">
      <span class="fa fa-lock"></span>
        <input type="password" name="password" placeholder="password" autocomplete="off" required>
      </div>
      <div class="filed space">
        <input type="submit" value="Register" name="register">
      </div>
      <div class="space line">
        <p class="space">if you already have an account <a href="<?=BASE_URL;?>/login">login in now </a> !</p>
      </div>
  </from>
  </div>
</div>