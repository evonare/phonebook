<?php
/**
 * @copyright Rana Jahanzaib 2019
 * 
 * 
 * Dashboard
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <Jahanzaibv2@gmail.com>
 * 
 * @package Phonebook Web App
 */
  
  require('load.php');

?><html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href='//cdn.appzaib.com/public/v1/img/appzaib-favico.png' rel='shortcut icon'/>
	<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Poppins'>
  <link rel='stylesheet' href='src/css/font-awesome.min.css'/>
  <link rel='stylesheet' href='src/css/bootstrap.min.css'/>
  <link rel='stylesheet' href='src/css/app.css'/>
  <title>Phonebook</title>
</head>
<body>
  <div class='container-fluid'>
    <div class='row'>
      <div class='col-xl-1 col-lg-1 col-md-1 col-sm-12 col-xs-12'>
      </div>
      <div class='col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12'>
        <form action="" method='post'>
          <h1 class='mt-5 mb-5'>Add a new contact</h1>
          First Name<input type="text" name='' placeholder='' class='form-control no-border-radius mb-3'>
          Last Name<input type="text" name='' placeholder='' class='form-control no-border-radius mb-3'>
          Nickname<input type="text" name='' placeholder='' class='form-control no-border-radius mb-3'>
          Company<input type="text" name='' placeholder='' class='form-control no-border-radius mb-3'>
          Phone Number(s)<input type="text" name='' placeholder='' class='form-control no-border-radius mb-3'>
          Email(s)<input type="text" name='' placeholder='' class='form-control no-border-radius mb-3'>
          Website(s)<input type="text" name='' placeholder='' class='form-control no-border-radius mb-3'>
          Birthday<input type="text" name='' placeholder='' class='form-control no-border-radius mb-3'>
          Notes<textarea class='form-control no-border-radius mb-3'></textarea>
          <input type="submit" name="" class="form-control btn btn-warning no-border-radius">
        </form>
      </div>
      <div class='col-xl-1 col-lg-1 col-md-1 col-sm-12 col-xs-12'>
      </div>
      <div class='col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12'>
        <h1 class='mt-5 mb-5'>Find your contacts</h1>
        <table class='table table-responsive'>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Action</th>
          </tr>
          <tr>
            <td>1</td>
            <td>Rao Ahmad</td>
            <td>+923123456456</td>
            <td>email@example.com</td>
            <td><a href='#'class='btn btn-sm btn-primary no-border-radius text-white'>Details</a></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <script src='src/js/jquery.min.js'></script>
  <script src='src/js/bootstrap.min.js'></script>
  <script src='src/js/popper.min.js'></script>
</body>
</html>