<?php
/*  echo"<pre>";
  print_r($doctors);
  die;*/
?>    

<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Advanced Table
          </header>

          <table class="table table-striped table-advance table-hover">
            <tbody>
              <tr>
                <th><i class="icon_profile"></i>ID</th>
                <th><i class="icon_profile"></i>Name</th>
                <th><i class="icon_mail_alt"></i> Email</th>
                <th><i class="icon_calendar"></i> Date</th>
              </tr>
              <?php 
              foreach($doctors as $doctor){
              echo '<tr>';
              echo '<td>'.$doctor->id.'</td>';
              echo '<td>'.$doctor->name.'</td>';
              echo '<td>'.$doctor->email.'</td>';
              echo '<td>'.$doctor->created.'</td>';
              echo '<td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                    <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                  </div>
                </td>
              </tr>';
              } ?>
            </tbody>
          </table>
        </section>
      </div>
    </div>
    <!-- page end-->
  </section>
</section>