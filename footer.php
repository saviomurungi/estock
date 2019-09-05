 <div class="container-fluid pl-0 pr-0">    
    <nav class="navbar navbar-expand-lg danger-color-dark">
        <div class="container-fluid">

            <p class="push-right black-text" align="right"></p>
            
            <p align="right" class="black-text">estock Manager &trade;</p>
            <div style="position: relative">
            <p class="black-text fa fa-phone">
             <a href="mailto:xwall256@gmail.com">Contact Support</a>
                </p>
            </div>


        </div>
    </nav>
    </div>



 
 
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
 
  <!--table js-->
<!--    <script type="text/javascript" src="js/bootstable.js"></script>-->

  <script type="text/javascript">
   $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
   
  </script>

  <script>
 $('table').SetEditable();
</script>
  
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
<script>
//$(function(){
//  $('.list-unstyled .components  li').on('click',function(){
//    var $panel= $(this).closest('.list-unstlyed');
//    $panel.find('.list-unstyled li.active').removeClass('active');
//    $(this).addClass('active');
//    var panelToShow=$(this).attr('rel');
//    $panel.find('.fa .active').slideUp(300, showNextPanel);
//    function showNextPanel(){
//        $this .removeClass('active');
//            $('#'+panelToShow).sildeDown(300,function(){
//                $(this).addClass('active');
//                
//    });
//    }
//});
//   });                           
//                              


</script>
<script type="text/javascript">
				$(document).ready(function(){
			$("#select1").change(function(){
			var mls = $("#select1").val();
			$.post("brand.php",{value:mls},function(results){
				$("#brand").html(results);
				});
			});
		});
		$(document).ready(function(){
		$("#brand").change(function(){
			var mls = $("#brand").val();
			var milz=$("#select1").val();
			$.post("price.php",{brand:mls,qty:milz},function(resu){
				$("#unitprice").html(resu);
				});
			});
		});
		$(document).ready(function(){
		$("#deliveries").keyup(function(){
			var order = $("#deliveries").val();
			var qty =$("#select1").val();
			var bra = $("#brand").val();
			$.post("total.php",{orderz:order,quantity:qty,brand:bra },function(result){
				$("#tot").html(result);
				});
			});
		});
		$(document).ready(function(){
			$("#records").click(function(){
				$("#freshrecords").load("retrieve.php",function(responseTxt,statusTxt,xhr){
					if(statusTxt == "success"){
						continue;
					}
					if(statusTxt != "success"){
						alert("ERROR:"+xhr.status() );
					}
					});
				});
			});
			</script>

     
			<script type="text/javascript">
				$(document).ready(function(){
			$("#select1").change(function(){
			var mls = $("#select1").val();
			$.post("brand.php",{value:mls},function(results){
				$("#brand").html(results);
				});
			});
		});
		$(document).ready(function(){
		$("#brand").change(function(){
			var mls = $("#brand").val();
			var milz=$("#select1").val();
			$.post("price.php",{brand:mls,qty:milz},function(resu){
				$("#unitprice").html(resu);
				});
			});
		});
		$(document).ready(function(){
		$("#deliveries").keyup(function(){
			var order = $("#deliveries").val();
			var qty =$("#select1").val();
			var bra = $("#brand").val();
			$.post("total.php",{orderz:order,quantity:qty,brand:bra },function(result){
				$("#tot").html(result);
				});
			});
		});
		$(document).ready(function(){
			$("#records").click(function(){
				$("#freshrecords").load("retrieve.php",function(responseTxt,statusTxt,xhr){
					if(statusTxt == "success"){
						continue;
					}
					if(statusTxt != "success"){
						alert("ERROR:"+xhr.status() );
					}
					});
				});
			});
			</script>

     
</body>

</html>