<link rel="stylesheet"  href="<?php echo base_url();?>/assets/css/style.css">
<body style="padding-bottom: 20px">
<hr>

<section class="about " id="about" style="border:0">
      <div class="container " >
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Laporan Bencana Terdekat</h2>
            <center><hr></center>
          </div>
        </div>

        <div class="row">
            <?php foreach ($nama->result() as $key) { ?>
        <div class="col-sm-4 card" style="width: 18rem; border: 0">
        <a href="<?php echo base_url();?>index.php/rincian"><img class="card-img-top " src="<?php echo base_url();?>fotobencana/<?php echo $key->foto ?>" alt="Card image cap"></a>
        <div class="card-body">
            <a href="<?php echo base_url();?>index.php/rincian"> <?php echo $key->nama_bencana;?></a>
           

            <p><?php $deskripsi_bencana=$key->deskripsi_bencana;
            $potong=substr($deskripsi_bencana,0,200);
            echo $potong;
            ?>. . . .</p>
           
          </div>
           <div class="row" style="padding-left: 290px;">
            <p class="text-right"><a href="<?php echo base_url();?>index.php/donasi"  style="background-color: #29a3db; border-color: #caebf2; color: white; font-weight: bold;" class="btn btn-success" >Donasi</a></p></div>
        </div>
         <?php }?>

           

         <!--  <div class="row"> -->
          <div class="col-sm-12 text-center">
            <a class="btn btn-primary"  href="<?php echo site_url('Umum/semuabencana')?>" role="button"  style="background-color:#e8e8e8; color:#ff3b3f; border-color: #98c8d3; position: center ">Lihat Semua</a>
          </div>
          <!-- </div> -->
         
        
    </section>
 
</body>