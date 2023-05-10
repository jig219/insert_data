<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Data Show</title>
  </head>
  <body>
    <?php 
        $success = $this->session->flashdata('success');
        $error = $this->session->flashdata('error');

        if($success){
          echo $success;
        }
         if($error){
          echo $error;
        }
      ?>

    <div class="py-5 px-5">
     <table class="table">
      <thead>
        <tr>
          <th scope="col">Sr No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Password</th>
         
          <th scope="col">Action</th>
        
        </tr>
      </thead>
      <tbody>
        <?php 
          $no = 0;
          foreach($abc as $ab){
            $no = $no + 1;
        ?>
        <tr>
          <th scope="row"><?php echo $no; ?></th>
          <td><?php echo $ab['name']; ?></td>
          <td><?php echo $ab['email']; ?></td>
          <td><?php echo $ab['mobile']; ?></td>
          <td><?php echo $ab['password']; ?></td>
          
          <td><a class="btn btn-danger" href="<?php echo base_url('home/delete/'.$ab['id']);?>">Del</a>
            <a class="btn btn-danger" href="<?php echo base_url('home/edit/'.$ab['id']);?>">Edit</a></td>
       
        </tr>
       <?php } ?>
      </tbody>
    </table>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

   
  </body>
</html>