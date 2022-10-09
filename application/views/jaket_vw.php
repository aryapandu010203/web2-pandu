<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('partials/navbar.php'); ?>
    <div class="col-2">
  	    <header><b>Jaket</b></header>
        
        
        <div class="grid-container">
            <div class="grid-item">
                <img src="<?= base_url('assets/img/jaket.jpg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/jaket2.jpg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/jaket3.jpg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/jaket4.jpg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/jaket5.jpg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/jaket6.jpg') ?>" alt="my picture">
            </div>
        </div>  
       
        
  	    <?php $this->load->view('partials/footer.php'); ?>
    </div>
    
</body>

</html>