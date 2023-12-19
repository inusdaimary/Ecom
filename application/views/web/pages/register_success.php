

<div class="main">
    <div class="content" style="text-align: center">
        <div class="register_account" style="text-align:center;display:inline-block;float: none">
            <h3>Welcome To <?php echo $this->session->flashdata('customer_name'); ?></h3>
            
            <p>Hi <?php echo $this->session->flashdata('customer_name'); ?>, You Successfully Registration Our Site
              <a href="mailto:<?php echo $this->session->flashdata('customer_email'); ?>"><b><?php echo $this->session->flashdata('customer_email'); ?></b></a>
              . Thank You Stay With Us.
            </p>
            
            
            
        </div>  	
        <div class="clear"></div>
    </div>
</div>