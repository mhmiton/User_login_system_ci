<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="<?php echo base_url(); ?>assets/back_end/img/caretutors_logo.png" rel="shortcut icon" type="image/x-icon" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Welcome To Caretutors.com</title>
    <style type="text/css">
      .main_wrap{height:900px; background-image:url('assets/back_end/img/bc_medium.jpg'); background-size:100% 100%; background-repeat:no-repeat; background-attachment:fixed;}
      .opacity_cover{background-color:rgba(0,0,0,0.7); height:100%;}
      .heading_wrap{position:absolute; margin-top:180px; height:100%; width:100%;}
      .heading_text{font-size:80px; color:#fff;}
      .logout{padding:12px 40px; font-size:22px; margin-top:35px;}
    </style>
  </head>
  <body>
    <section class="main_wrap">
      <div class="opacity_cover">
          <div class="text-center heading_wrap">
            <h1 class="heading_text">Welcome To Caretutors.com</h1>
            <a href="<?php echo site_url('App/logout'); ?>" class="btn btn-success logout">Logout</a>
          </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>