<?php
if(isset($_POST['value'])){
	$val = $_POST['value'];
	include "connection.inc.php";
?>
<div class="container-fluid">
	<h5 class="text-elegant text-center font-weight-bold h2">EMPTY BOTTLE</h5>
	<table class="table table-inverse table-sm table-elegant">
		<thead>
			<tr>
				<th>Mills</th>
				<th>Quantity</th>
				<th>Total(shs)</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
<?php
	$query = mysqli_query($conn,"SELECT * FROM recordempty WHERE bottleorder > '0' AND bottletotal > '0' AND sale_man_id='$val'   ORDER BY count DESC ");
if($query){
	
	while($row = mysqli_fetch_array($query)){
		$date = $row['date'];
		$count = $row['count'];
		$empty = $row['empty'];
		$bottleorder = $row['bottleorder'];
		$bottletotal = $row['bottletotal'];
		$deb = $row['dept'];
		
		$nquery = mysqli_query($conn,"SELECT quantities FROM emptyprice WHERE id= '$empty'");
		while($rw = mysqli_fetch_array($nquery)){
			$qty = $rw['quantities'];
			$s="SELECT mills FROM quantites WHERE quantityid = '$qty' ";
			$rs = mysqli_query($conn,$s);
			while($r=mysqli_fetch_array($rs)){
				$qtyv=$r['mills'];
			}
			if($deb =='1'){
?>			
			<tr>
				<td> <?php echo $qtyv;?> </td>
				<td><?php echo $bottleorder;?></td>
				<td><?php echo $bottletotal;?></td>
				<td><?php echo $date;?></td>
				<td>
					<a class="btn btn-sm btn-dark-green btn-outline-indigo" href="scrabemptydebs.php?clear=<?php echo $count; ?>">Clear</a>
				</td>
			</tr>
<?php			
			}
		}
		
	}
}


?>				
		</tbody>
		
	</table>
</div>
<div class="container-fluid">
		<h5 class="text-elegant text-center font-weight-bold h2">EMPTY SHELL</h5>
	<table class="table table-inverse table-sm table-elegant">
		<thead>
			<tr>
				<th>Mills</th>
				<th>Quantity</th>
				<th>Total(shs)</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
<?
	$query = mysqli_query($conn,"SELECT * FROM recordempty WHERE shellorder > '0' AND shelltotal > '0' AND sale_man_id='$val' ORDER BY count DESC ");
if($query){
	
	while($row = mysqli_fetch_array($query)){
		$date = $row['date'];
		$count = $row['count'];
		$empty = $row['empty'];
		$bottleorder = $row['shellorder'];
		$bottletotal = $row['shelltotal'];
		$deb = $row['dept'];
		$nquery = mysqli_query($conn,"SELECT quantities FROM emptyprice WHERE id= '$empty'");
		while($rw = mysqli_fetch_array($nquery)){
			$qty = $rw['quantities'];
			$s="SELECT mills FROM quantites WHERE quantityid = '$qty' ";
			$rs = mysqli_query($conn,$s);
			while($r=mysqli_fetch_array($rs)){
				$qtyv=$r['mills'];
			}
			if($deb =='1'){
?>			
			<tr>
				<td> <? echo $qtyv;?> </td>
				<td><? echo $bottleorder;?></td>
				<td><? echo $bottletotal;?></td>
				<td><? echo $date;?></td>
				<td>
					<a class="btn btn-sm btn-unique" href="scrabemptydebs.php?clear=<? echo $count; ?>">Clear</a>
				</td>
			</tr>
<?
			}
		}
	}
}

?>			
		</tbody>
	</table>
</div>
<div class="container-fluid">
	<h5 class="text-elegant text-center font-weight-bold h2">FULL CRATE</h5>
		<table class="table table-inverse table-sm table-elegant">
		<thead>
			<tr>
				<th>Mills</th>
				<th>Quantity</th>
				<th>Total(shs)</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
<?
	$query = mysqli_query($conn,"SELECT * FROM recordempty WHERE bottleplusshell > '0' AND bpstotal > '0' AND sale_man_id='$val' ORDER BY count DESC ");
if($query){
	
	while($row = mysqli_fetch_array($query)){
		$date = $row['date'];
		$count = $row['count'];
		$empty = $row['empty'];
		$bottleorder = $row['bottleplusshell'];
		$bottletotal = $row['bpstotal'];
		$deb = $row['dept'];
		
		$nquery = mysqli_query($conn,"SELECT quantities FROM emptyprice WHERE id= '$empty'");
		while($rw = mysqli_fetch_array($nquery)){
			$qty = $rw['quantities'];
			$s="SELECT mills FROM quantites WHERE quantityid = '$qty' ";
			$rs = mysqli_query($conn,$s);
			while($r=mysqli_fetch_array($rs)){
				$qtyv=$r['mills'];
			}
			if($deb == '1'){
?>			
			<tr>
				<td> <? echo $qtyv;?> </td>
				<td><? echo $bottleorder;?></td>
				<td><? echo $bottletotal;?></td>
				<td><? echo $date;?></td>
				<td>
					<a class="btn btn-sm btn-mdb-color" href="scrabemptydebs.php?clear=<? echo $count; ?>">Clear</a>
				</td>
			</tr>
<?
			}
		}
	}
}

?>				
			
			
		</tbody>
		</table>
	
</div>

<?	
	
}


?>