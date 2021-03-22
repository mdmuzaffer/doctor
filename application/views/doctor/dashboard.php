<?php 
	/*echo"<pre>";
	print_r($appointment);
	die;*/

?>


<div class="content">
<!-- Page length options -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Page length options</h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			It is possible to easily customise the options shown in the length menu using the <code>lengthMenu</code> initialisation option. This parameter can take one of two forms: 1) A <code>1D</code> array of options which will be used for both the displayed option and the value; 2) A <code>2D</code> array in which the first array is used to define the value options and the second array the displayed options. The example below shows a 2D array being used to include a <code>"Show all"</code> records option.
		</div>

		<table class="table datatable-show-all">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Date</th>
					<th>Mobile</th>
					<th>Medicen</th>
					<th>Status</th>
					<th class="text-center">Pdf</th>
				</tr>
			</thead>
			<tbody>
				<?php if(!empty($appointment)){
					foreach($appointment as $appoint){
					?>

				<tr>
					<td><?php echo $appoint->app_name;?></td>
					<td><?php echo $appoint->app_email;?></td>
					<td><?php echo $appoint->app_address;?></td>
					<td><?php echo $appoint->app_date;?></td>
					<td><?php echo $appoint->app_phone;?></td>
					<td><a href="<?php echo base_url('/doctor/medicen?id='.$appoint->app_id);?>">Medicen+</a>
					</td>
					<td><span class="label label-success">Active</span></td>
					<td>
						<a href="<?php echo base_url('/doctor/pdf?name='.$appoint->app_name);?>"><i class="icon-menu9"></i></a>
					</td>
				</tr>
			<?php }} ?>
			</tbody>
		</table>
	</div>
</div>
	<!-- /page length options -->
