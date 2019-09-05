<?php
if(isset($_POST['value'])){
	$val = $_POST['value'];
	if($val != "NULL"){
		include "connection.inc.php";
		$sql = "SELECT * FROM dailyrecord WHERE date='$val'";
		$sql2 = "SELECT * FROM ccbadelivery WHERE date = '$val'";
		$sql3 = "SELECT * FROM emptyrecord WHERE date = '$val'";
		
		//daily records
?>
<div class="col-auto container-fluid ">
	<table class="table table-bordered  table-striped " name="recordtable" id="yu">
		<h4 class="h4 text-center text-elegant">DAYS RECORDS</h4>
		<tr class="card-header">
			<th>Mills</th>
			<th>Brand</th>
			<th>Order</th>
			<th>Total(shs)</th>
			<th>Sales Man</th>
		</tr>
		<?php
		$t = 0;
		$debt_total=0;
		$query = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_array($query)){
			$count = $row['count'];
			$bottle =$row['bottle'];
			$order = $row['clientorder'];
			$total = $row['total'];
			$deb = $row['dept'];
			$marketeer = $row['client'];
	$dbc = mysqli_query($conn,"SELECT MarkName FROM marketeer WHERE id = '$marketeer'");
	$extract = mysqli_fetch_array($dbc);
	$Markname = $extract['MarkName'];
			if($deb != "1"){
				$t = $total +$t;
			}
			if($deb=="1"){
				$debt_total=$debt_total+$total;
			}
			
			
$sq ="SELECT * FROM filledbottles WHERE id = '$bottle'";
$query2 = mysqli_query($conn,$sq);
while($rw = mysqli_fetch_array($query2)){
	$brandid = $rw['brandid'];
	$qtyId = $rw['quantites'];
$s="SELECT mills FROM quantites WHERE quantityid = '$qtyId' ";
$rs = mysqli_query($conn,$s);
while($r=mysqli_fetch_array($rs)){
	$qty=$r['mills'];
}
$qb = "SELECT brandname FROM brand WHERE brandid = '$brandid'";
$q = mysqli_query($conn,$qb);
while($w = mysqli_fetch_array($q)){
	$brandname = $w['brandname'];
}

}
?>
<tr <?php if($deb =="1"){
	echo "class='bg-danger' title='its a debt'";
	}?>>
	<td><?php echo $qty; ?></td>
	<td><?php echo $brandname; ?></td>
	<td><?php echo $order; ?></td>
	<td><?php echo $total; ?></td>
	<td><?php echo $Markname; ?></td>
	<?php if($deb ==1){?>
	<td>
		<a  id="mk" class="btn btn-black btn-sm">Clear Debt</a>
		<i id="ht" class="hidden"> <? echo $count; ?></i>
	</td>
	<? }?>
</tr>

<?	
		}
		?>
		
	</table>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#mk").click(function(){
			var count = $("#ht").html();
			$.post("delphp.php",{clear:count},function(){
				alert("done! click check again");
				
				});
			});
		});
</script>
	<tr class="mb-2"><b>Total SALES (shs)= <?php echo $t; ?></b> <b class="ml-3"> Total Debts (shs)= <? echo -$debt_total; ?> </b></tr>
	
</div>
<div class="col-auto container-fluid">
	<table class="table table-bordered  table-striped table-sm">
	<h4 class="text-center text-elegant">CCBA DELIVERIES</h4>
		<tr>
			<th>Mills</th>
			<th>Brand</th>
			<th>Delivery</th>
			<th>Total(shs)</th>
		</tr>
		<?php
		$qu = mysqli_query($conn,$sql2);
		$t =0;
		while($dt = mysqli_fetch_array($qu)){
			$bo = $dt['bottle'];
			$ccbdelivery=$dt['ccbdelivery'];
			$tot = $dt['total'];
			$s ="SELECT * FROM filledbottles WHERE id = '$bo'";
			$t = $t +$tot;
$que = mysqli_query($conn,$s);
while($r = mysqli_fetch_array($que)){
	$brandid = $r['brandid'];
	$qtyId = $r['quantites'];
$s="SELECT mills FROM quantites WHERE quantityid = '$qtyId' ";
$rs = mysqli_query($conn,$s);
while($r=mysqli_fetch_array($rs)){
	$qty=$r['mills'];
}
$qb = "SELECT brandname FROM brand WHERE brandid = '$brandid'";
$q = mysqli_query($conn,$qb);
while($w = mysqli_fetch_array($q)){
	$brandname = $w['brandname'];
}

}
?>
<tr>
	<td><?php echo $qty ; ?></td>
	<td><?php echo $brandname ; ?></td>
	<td><?php echo $ccbdelivery ; ?></td>
	<td><?php echo $tot ; ?></td>
</tr>

<?php
		}
		
		?>
	</table>
	<tr class="mb-2"><b>Total CCBA(shs)= <?php echo $t; ?> </b></tr>
	
</div>
<div class="col-auto">
 <div class="container-fluid row">
				<div class="col-4">
					<h4 class="h4 text-center text-elegant">Empty Bottle</h4>
					<table class="table table-bordered  table-striped table-sm">
						<tr>
							<th>milligram</th>
							<th>Order</th>
							<th>total(shs)</th>
						</tr>
						<?php
$query = mysqli_query($conn,"SELECT * FROM recordempty WHERE bottleorder > '0' AND bottletotal > '0' AND date='$val' ORDER BY count DESC ");
if($query){
	$t1 = 0;
	while($row = mysqli_fetch_array($query)){
		$count = $row['count'];
		$empty = $row['empty'];
		$bottleorder = $row['bottleorder'];
		$bottletotal = $row['bottletotal'];
		$t1 = $t1 +$bottletotal;
		$nquery = mysqli_query($conn,"SELECT quantities FROM emptyprice WHERE id= '$empty'");
		while($rw = mysqli_fetch_array($nquery)){
			$qty = $rw['quantities'];
			$s="SELECT mills FROM quantites WHERE quantityid = '$qty' ";
			$rs = mysqli_query($conn,$s);
			while($r=mysqli_fetch_array($rs)){
				$qtyv=$r['mills'];
			}
?>			
			<tr>
				<td> <?php echo $qtyv;?> </td>
				<td><?php echo $bottleorder;?></td>
				<td><?php echo $bottletotal;?></td>
			</tr>
<?php			
		}
	}
}
?><tr><b>Total Empty(shs)= <?php echo $t1; ?> </b></tr>
					</table>
				</div>
				<div class="col-auto ">
					<h4 class="h4 text-center text-elegant">Empty Shells</h4>
					<table class="table table-bordered  table-striped table-sm">
						<tr>
							<th>milligram</th>
							<th>Order</th>
							<th>total(shs)</th>
						</tr>
						<?php
$query = mysqli_query($conn,"SELECT * FROM recordempty WHERE shellorder > '0' AND shelltotal > '0' AND date='$val' ORDER BY count DESC ");
if($query){
	$t1 =0;
	while($row = mysqli_fetch_array($query)){
		$count = $row['count'];
		$empty = $row['empty'];
		$bottleorder = $row['shellorder'];
		$bottletotal = $row['shelltotal'];
		$t1 = $bottletotal +$t1;
		$nquery = mysqli_query($conn,"SELECT quantities FROM emptyprice WHERE id= '$empty'");
		while($rw = mysqli_fetch_array($nquery)){
			$qty = $rw['quantities'];
			$s="SELECT mills FROM quantites WHERE quantityid = '$qty' ";
			$rs = mysqli_query($conn,$s);
			while($r=mysqli_fetch_array($rs)){
				$qtyv=$r['mills'];
			}
?>			
			<tr>
				<td><?php echo $qtyv;?> </td>
				<td><?php echo $bottleorder;?></td>
				<td><?php echo $bottletotal;?></td>
			</tr>
<?php			
		}
	}
}
?><tr><b>Total Shell(shs)= <?php echo $t1; ?> </b></tr>
					</table>
				</div>
				<div class="col-auto ">
					<h4 class="text-center text-elegant">Bottle + Shell</h4>
					<table class="table table-bordered  table-striped table-sm">
						<tr>
							<th>milligram</th>
							<th>Order</th>
							<th>total(shs)</th>
						</tr>
						<?php

$query = mysqli_query($conn,"SELECT * FROM recordempty WHERE bottleplusshell > '0' AND bpstotal > '0' AND date ='$val' ORDER BY count DESC");
if($query){
	$t = 0;
	while($row = mysqli_fetch_array($query)){
		$count = $row['count'];
		$empty = $row['empty'];
		$bottleorder = $row['bottleplusshell'];
		$bottletotal = $row['bpstotal'];
		$t = $t + $bottletotal;
		$nquery = mysqli_query($conn,"SELECT quantities FROM emptyprice WHERE id= '$empty'");
		while($rw = mysqli_fetch_array($nquery)){
			$qty = $rw['quantities'];
			$s="SELECT mills FROM quantites WHERE quantityid = '$qty' ";
			$rs = mysqli_query($conn,$s);
			while($r=mysqli_fetch_array($rs)){
				$qtyv=$r['mills'];
			}
?>			
			<tr>
				<td> <?php echo $qtyv;?> </td>
				<td><?php echo $bottleorder;?></td>
				<td><?php echo $bottletotal;?></td>
			</tr>
<?php			
		}
	}
}
?>
			<tr class="mb-2"><b>Total Crates(shs)= <?php echo $t; ?> </b></tr>		
					</table>
				</div>
			</div>
			

</div>

<?php		
	}
}
?>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
