      </section>
      <!-- container section start -->
      <!-- javascripts -->
      <script src="<?php echo base_url();?>/public/admin/js/jquery.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/jquery-ui-1.10.4.min.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/jquery-1.8.3.min.js"></script>
      <script type="<?php echo base_url();?>/public/admin/text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
      <!-- bootstrap -->
      <script src="<?php echo base_url();?>/public/admin/js/bootstrap.min.js"></script>
      <!-- nice scroll -->
      <script src="<?php echo base_url();?>/public/admin/js/jquery.scrollTo.min.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
      <!-- charts scripts -->
      <script src="<?php echo base_url();?>/public/admin/assets/jquery-knob/js/jquery.knob.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/jquery.sparkline.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>/public/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/owl.carousel.js"></script>
      <!-- jQuery full calendar -->
      <<script src="<?php echo base_url();?>/public/admin/js/fullcalendar.min.js"></script>
      <!-- Full Google Calendar - Calendar -->
      <script src="<?php echo base_url();?>/public/admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
      <!--script for this page only-->
      <script src="<?php echo base_url();?>/public/admin/js/calendar-custom.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/jquery.rateit.min.js"></script>
      <!-- custom select -->
      <script src="<?php echo base_url();?>/public/admin/js/jquery.customSelect.min.js"></script>
      <script src="<?php echo base_url();?>/public/admin/assets/chart-master/Chart.js"></script>
      <!--custome script for all page-->
      <script src="<?php echo base_url();?>/public/admin/js/scripts.js"></script>
      <!-- custom script for this page-->
      <script src="<?php echo base_url();?>/public/admin/js/sparkline-chart.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/easy-pie-chart.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/jquery-jvectormap-1.2.2.min.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/jquery-jvectormap-world-mill-en.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/xcharts.min.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/jquery.autosize.min.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/jquery.placeholder.min.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/gdp-data.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/morris.min.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/sparklines.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/charts.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/developer.js"></script>
      <script src="<?php echo base_url();?>/public/admin/js/jquery.slimscroll.min.js"></script>
      <script src="<?php echo base_url();?>/public/medicen/js/jquery.czMore-1.5.3.2.js"></script>
      <script>
      //One-to-many relationship plugin by Yasir O. Atabani. Copyrights Reserved.
      $("#czContainer").czMore();
         //knob
         $(function() {
           $(".knob").knob({
             'draw': function() {
               $(this.i).val(this.cv + '%')
             }
           })
         });
         
         //carousel
         $(document).ready(function() {
           $("#owl-slider").owlCarousel({
             navigation: true,
             slideSpeed: 300,
             paginationSpeed: 400,
             singleItem: true
         
           });
         });
         
         //custom select box
         
         $(function() {
           $('select.styled').customSelect();
         });
         
         /* ---------- Map ---------- */
         $(function() {
           $('#map').vectorMap({
             map: 'world_mill_en',
             series: {
               regions: [{
                 values: gdpData,
                 scale: ['#000', '#000'],
                 normalizeFunction: 'polynomial'
               }]
             },
             backgroundColor: '#eef3f7',
             onLabelShow: function(e, el, code) {
               el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
             }
           });
         });
      </script>
   </body>
</html>