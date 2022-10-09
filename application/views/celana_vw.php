<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('partials/navbar.php'); ?>
    <div class="col-2">
  	    <header><b>Celana</b></header>
        
        
        <div class="grid-container">
            <div class="grid-item">
                <img src="<?= base_url('assets/img/Celana.jpg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/Celana2.jpg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/Celana3.jpg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/Celana4.jpg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/Celana5.jpg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/Celana6.jpg') ?>" alt="my picture">
            </div>
        </div>  
       
        
  	    <?php $this->load->view('partials/footer.php'); ?>
    </div>
    
</body>

</html>