  <h2><?php echo $title; ?></h2>
  <table border="1">
  	<tr>
  		<td>Num</td>
  		<td>Name</td>
  		<td>Click</td>
  		<!-- <td>Edit</td> -->
  	</tr>
  	<tr>
<?php foreach ($names as $names_item): ?>

        <td><?php echo $names_item['id']; ?></td>
        <td><?php echo $names_item['name']; ?></td>
        <td><a href="<?php echo site_url('names/view/'.$names_item['id']); ?>">More Info</a></td>
        
    </tr>

<?php endforeach; ?>
</table>