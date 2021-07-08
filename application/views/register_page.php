<br>
<form action="<?= base_url(); ?>register/doRegister" method="post">
  <h2>Registration</h2>
  <hr/>
  
  <?php if($this->session->flashdata()){ ?>
    <div class="alert alert-danger">
      <?= $this->session->flashdata('errors') ?>
    </div>
  <?php } ?>

  <div class="from-group">
    <label for="name"><b>Username:</b></label>
    <input type="text" name="name" required class="form-control" id="name">
  </div>
  
  <div class="from-group">
    <label for="email"><b>Enter Email:</b></label>
    <input type="email" name="email" required class="form-control" id="email">
  </div>

  <div class="from-group">
    <label for="psw"><b>Password</b></label>
    <input type="password" name="password" required class="form-control" id="pwd">
  </div>
  
    <button type="submit" class="btn btn-default">Submit</button>
    <span class="float-right"><a href="<?= base_url().'login'; ?>" class="btn btn-primary">Login</a></span>
    
</form>