<section class="profil " id="profil">
    <div class="container">
      <div class="col-sm-12 card" style="width: 100%;">

      <div class="row">
      <div class="col-sm-12">
      <h2 class="text-center">Daftar Donatur</h2>
      <hr style="width: 100%" >
      </div></div>

      <div class="row" style="padding-bottom: 10px">
        <div class="col-sm-12">
            
 <?php foreach ($donasi->result() as $key) {?>
       <div id="accordion">
    <div class="card">
    <div class="card-header" id="heading1">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        <?php echo $key->nama_donatur;?> 
        </button>
      </h5>
    </div>
    <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordion">
      <div class="card-body">
        <table class="table table-striped">
  <thead>
    <tr >
      <th class="text-center " scope="col">Bencana</th>

    </tr>
  </thead>
  <tbody>

    <tr>
      <td ><?php echo $key->nama_bencana2;?> </td>
    
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>
<?php }?>

   

  
  </div>
</div>
            
    </section>