<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<div class="row">
    <h2>Welcome User, You are successfully logged in. </h2>
    <div class="col-sm-4">
        <a class="btn btn-danger" href="<?= base_url().'login/logout'; ?>">Logout</a>
    </div>
</div>

</body>
</html>