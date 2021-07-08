<br>

<form action="<?= base_url(); ?>login/dologin" method="post">
  <h2>Login page</h2>
  <hr/>

  <?php if($this->session->flashdata()){ ?>
    
    <div class="alert alert-warning">
      <?= $this->session->flashdata('msg'); ?>  
    </div>
  
  <?php } ?>

  <div class="form-group">
    <label for="email"><b>Email address:</b></label>
    <input type="email" name="email" required class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="password"><b>Password</b></label>
    <input type="password" name="password" required class="form-control" id="password">
  </div>
  
    <button type="submit" class="btn btn-dark" >Submit</button>
    <span class="float-right"><a href="<?= base_url().'register'; ?>" class="btn btn-primary">Register</a>
    </span>
</form>
