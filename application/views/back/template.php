<?php $this->load->view('back/template/meta'); ?>
<div class="wrapper">
    <?php $this->load->view('back/template/header'); ?>
    <?php $this->load->view('back/template/sidebar'); ?>
    <php echo $content; ?>
    <?php $this->load->view('back/template/footer'); ?>
    </div>
<?php $this->load->view('back/template/script'); ?>