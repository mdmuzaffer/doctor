<?php
  /*echo"<pre>";
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
            <span class="doctorStatus" style="color:#007aff; float:right; margin-right: 400px;"></span>
          </header>
          <table class="table table-striped table-advance table-hover">
            <tbody>
              <tr>
                <th><i class="icon_profile"></i> Full Name</th>
                <th><i class="icon_calendar"></i> Date</th>
                <th><i class="icon_mail_alt"></i> Email</th>
                <th><i class="icon_pin_alt"></i> City</th>
                <th><i class="icon_mobile"></i> Mobile</th>
                <th><i class="icon_mobile"></i>Status</th>
                <th><i class="icon_cogs"></i> Action</th>
              </tr>
              <?php 
              foreach($doctors as $doctor){
              echo '<tr>';
              echo '<td>'.$doctor->name.'</td>';
              echo '<td>'.$doctor->created_at.'</td>';
              echo'<td>'.$doctor->email.'</td>';
              echo'<td>'.$doctor->city.'</td>';
              echo'<td>'.$doctor->phone.'</td>';
              if($doctor->status ==0){
              echo'<td style="color:red;"> disable </td>';
              }else{
                    echo'<td style="color:#4cd964;"> Active </td>';
              }
              echo '<td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                    <a class="btn btn-success" href="javascript:void('.$doctor->register_id.')" onclick="doctorStatus('.$doctor->register_id.')">
                    <i class="icon_check_alt2"></i></a>
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