<head>
    <style>
        body {
            background-image:linear-gradient(rgba(180,170,150,0.5), rgba(186,176,120,0.5)), url("asset/pict/start.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top;
        }
        h1{
        border: 5px solid BLACK;
        width: 500px ;
        text-align: center;
        padding: 10px;
        margin-top: 100px;
        margin-left: 30%;
        font-size: 80px;
        }
    </style>
</head>

<h1><a href="<?=base_url()?>index.php/welcome/dashboard/Hilyyu/Laki-Laki">WELCOME</a></h1>
<?= $this->uri->segment(1) ?> <br>
<?= $this->uri->segment(2) ?> <br>
<?= $this->uri->segment(3) ?>