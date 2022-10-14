<div class="bg-img">
  <div class="content">
    <header>
      <?=BRAND;?>
    </header>
    <form action="<?=BASE_URL;?>/login/auth"method="post">
      <div class="filed">
      <span class="fa fa-envelope"></span>
      <input type="email" name="email" placeholder="email" autocomplete="off">
      </div>
      <div class="filed space">
      <span class="fa fa-lock"></span>
      <input type="password" name="password" placeholder="password" autocomplete="off">
      </div>
      <div class="filed space">
      <input type="submit" value="Login" name='login'>
      </div>
       <div class="space line">
        <p class="space">if you don't have an account <a href="<?=BASE_URL;?>/register">sign up now</a> !</p>
      </div>
    </from>
  </div>
</div>