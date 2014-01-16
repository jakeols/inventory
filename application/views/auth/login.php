<head>
  <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
      <link href="<?php echo base_url('assets/css/bootstrap-responsive.css') ?>" rel="stylesheet">

</head>
<h1 class="title_text">polism</h1>
<div class="block">
  <div class="centered">
    <h1><?php echo lang('login_heading');?></h1>
    <p><?php echo lang('login_subheading');?></p>

    <div  id="infoMessage"><?php echo $message;?></div>

    <?php echo form_open("auth/login");?>

      <p>
        <?php echo lang('login_identity_label', 'identity');?>
        <?php echo form_input($identity);?>
      </p>

      <p>
        <?php echo lang('login_password_label', 'password');?>
        <?php echo form_input($password);?>
      </p>

      <p>
        <?php echo lang('login_remember_label', 'remember');?>
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
      </p>


      <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

    <?php echo form_close();?>
    <p><a href="<?php echo site_url('/auth/create_user') ?>">Register</a></p>
</div>
</div>
