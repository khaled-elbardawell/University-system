<?php include "header.php"; ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Show grades</h3>
      
          </div>
        </div>



         <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Advanced Table
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i> Subject</th>
                    <th><i class="icon_calendar"></i> mark</th>
                    <th><i class="icon_pin_alt"></i> Number of hours</th>
                  </tr>



                  <?php 
                  $grades=0;
                  $hours=0;
                 $id_std= $_SESSION['id_std'];
                    $sql="SELECT * FROM rel WHERE id_student=' $id_std ' ";
                    $result=mysqli_query($conn,$sql);

                       while($row=mysqli_fetch_assoc($result)){
                       $id_course= $row['id_course'];
                    $sql1="SELECT * FROM course WHERE id=' $id_course' ";
                    $result1=mysqli_query($conn,$sql1);
                    if(mysqli_num_rows($result) != 0) {
                   $row1=mysqli_fetch_assoc($result1);
                   

                $total_grades=$row['grades']*$row1['hours'];
                  $grades+=$total_grades;
                   $hours += $row1['hours'] ;
                 
                        ?>
                  <tr>
                    <td><?= $row1['name']; ?></td>
                    <td><?= $row['grades']; ?> </td>
                    <td><?= $row1['hours']; ?></td>
                  </tr>
                  <?php 
                    
                   }
                 }

                   if($hours>0){
                   $avg=$grades/($hours);
                   }


                   ?>
                    
                </tbody>
              </table>
            </section>
          </div>
        </div>


         <div class="row">
          <div class="col-lg-12">
            <!-- total -->
            <h3>Total:<?php if(isset($avg)){ echo $avg."%" ;} else{ echo "No mark";} ?></h3>
          </div>
        </div>
  <!--       <div class="row">
          

          <div class="col-md-12 portlets">
            <div class="panel panel-default">

             ///
 
            </div>

          </div>

        </div> -->
        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
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