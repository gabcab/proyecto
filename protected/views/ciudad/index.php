<?php

$this->breadcrumbs=array(
	'Ciudades',
);
echo "<h1>Ciudades</h1>";
?>
<table>
<tr>
<th>ID</th>
<th>CIUDAD</th>
<th>Ver</th>
<th>Editar</th>
</tr>
<?php foreach($ciudad as $city){ ?>
	<tr>
		<td><?php echo $city->id; ?> </td>
		<td> <?php echo $city->nombre; ?></td>
		<td> <?php echo CHtml::link('Ver', array('view', 'id' =>$city->id)); ?></td>
		<td> <?php echo CHtml::link('Editar', array('edit', 'id' =>$city->id)); ?></td>
	</tr>
<?php } ?>
</table>