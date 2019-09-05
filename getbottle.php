<?php
$d = date("Y-m-d");
include "connection.inc.php";
$query = mysqli_query($conn,"SELECT * FROM recordempty WHERE bottleorder > '0' AND bottletotal > '0' AND date='$d'  ORDER BY count DESC");
if($query){
	while($row = mysqli_fetch_array($query)){
		$count = $row['count'];
		$empty = $row['empty'];
		$bottleorder = $row['bottleorder'];
		$bottletotal = $row['bottletotal'];
		$dep =$row['dept'];
		$nquery = mysqli_query($conn,"SELECT quantities FROM emptyprice WHERE id= '$empty'");
		while($rw = mysqli_fetch_array($nquery)){
			$qty = $rw['quantities'];
			$s="SELECT mills FROM quantites WHERE quantityid = '$qty' ";
			$rs = mysqli_query($conn,$s);
			while($r=mysqli_fetch_array($rs)){
				$qtyv=$r['mills'];
			}
?>			
			<tr <?php if($dep =="1"){ echo "class='bg-danger' title='debt purchase' ";} ?> >
				<td> <?php echo $qtyv;?> </td>
				<td><?php echo $bottleorder;?></td>
				<td><?php echo $bottletotal;?></td>
			</tr>
<?php			
		}
	}
}
?>