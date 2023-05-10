<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Data Add</title>
  </head>
  <body>
         
 

    <div class="py-5 px-5">
       <?php
          $success= $this->session->flashdata('success');
          $error= $this->session->flashdata('error');

          if($success){
          ?>
          <div class="alert alert-success" role="alert">
            <?php echo $success; ?>
                    </div>
          <?php
          }
          if($error){
          ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
            </div> 
          <?php 
          }
          ?>
      <form action="<?php echo base_url('home/add');?>" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
        <input type="number" class="form-control" name="mobile" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
      </div>
      
      
            <button type="submit" class="btn btn-primary">Submit</button>

            <a class="btn btn-primary" href="<?php echo base_url('home/select');?>">Show Data</a>
    </form>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

   
  </body>
</html>