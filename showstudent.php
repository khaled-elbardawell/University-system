
<?php 
include "db.php";
include "header.php";
$id_std=$_SESSION['id_std'];
$sql="SELECT * FROM login WHERE id='$id_std'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if(isset($_POST['save'])){
  $name=htmlspecialchars($_POST['name']);
  $pass=htmlspecialchars(sha1($_POST['password']));
  $address=htmlspecialchars($_POST['address']);
  $phone=htmlspecialchars($_POST['phone']);
  $user=htmlspecialchars($_POST['username']);
  
  $_SESSION['pass_std']=$_POST['password'];
   $row['name']=$_POST['name'];
  $row['username']=$_POST['username'];
  $row['phone']=$_POST['phone'];
  $row['address']=$_POST['address'];

   $_SESSION['pass']=$pass;


  $sql1="UPDATE login SET name='$name' , username='$user' , password='$pass' , address='$address' , phone='$phone' WHERE id='$id_std' ";
  mysqli_query($conn,$sql1);
  $_SESSION['name_update']=$name;
  header('Location: index.php');

}else{
  $_POST['name']=$row['name'];
  $_POST['username']=$row['username'];
  $_POST['phone']=$row['phone'];
  $_POST['address']=$row['address'];
}

 ?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> My profile</h3>
      
          </div>
        </div>

         <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Responsive tables
              </header>
              <div class="table-responsive">
                <table class="table"> 
            
                 <tbody>
                    <tr>
                      <td>id</td>
                      <td><?php echo $row['id']; ?></td>
                    </tr>
                  
                    <tr>
                      <td>name</td>
                      <td> <?php echo  $_POST['name']; ?></td>
                    </tr>

                    <tr>
                      <td>user name</td>
                      <td> <?php echo $_POST['username']; ?></td>
                    </tr>

                      <tr>
                      <td>password</td>
                      <td> <?php echo $_SESSION['pass_std']; ?></td>
                    </tr>

                    <tr>
                      <td>phone</td>
                      <td> <?php echo $_POST['phone']; ?></td>
                    </tr>

                     <tr>
                      <td>address</td>
                      <td> <?php echo $_POST['address']; ?> </td>
                     </tr>         
              
                  </tbody>
                </table>
              </div>

            </section>
          </div>
        </div>

      
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Update
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update my profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Form Elements
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="post">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" value="<?php echo $row['name'];  ?>">
                    </div>
                  </div>

                 <div class="form-group">
                    <label class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="address" value="<?php echo $row['address']; ?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 control-label">phone</label>
                    <div class="col-sm-10">
                      <input class="form-control" id="focusedInput" type="text" name="phone" value="<?php echo $row['phone'] ; ?>" >
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-2 control-label">User name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="username" name="username" value="<?php echo $row['username']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="password" name="password" value="<?php echo $_SESSION['pass_std'];   ?>">
                    </div>
                  </div>
                 

       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="save">Save changes</button>
      </div>
                </form>
              </div>
            </section>        
          </div>
        </div>
      </div>

      

    </div>
  </div>
</div>

        
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


        $(".button").click(function(){

          $(".form-horizontal").hide();
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