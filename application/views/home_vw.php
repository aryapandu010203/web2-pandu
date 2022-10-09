<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('partials/navbar.php'); ?>
    <div class="col-2">
  	    <header><b>Baju</b></header>
        
        
        <div class="grid-container">
            <div class="grid-item">
                <img src="<?= base_url('assets/img/baju.jpeg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/baju1.jpg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/baju2.jpg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/baju3.jpg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/baju4.jpg') ?>" alt="my picture">
            </div>
            <div class="grid-item">
                <img src="<?= base_url('assets/img/baju5.jpg') ?>" alt="my picture">
            </div>
        </div>  
       
        
  	    <?php $this->load->view('partials/footer.php'); ?>
    </div>
    
</body>

</html>