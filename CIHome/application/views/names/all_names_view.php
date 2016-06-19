  <!-- Show all ames from DB -->

  <h2><?php echo $title; ?></h2>
  <div>
  	<?php echo anchor('names/show_add_form', 'Add name'); ?>
  </div>
  <table border="1">
  	<tr>
  		<td>Num</td>
  		<td>Name</td>
  		<td>Click</td>
  		<td>Edit</td>
  	</tr>
  	<tr>
<?php foreach ($names as $names_item): ?>

        <td><?php echo $names_item['id']; ?></td>
        <td><?php echo $names_item['name']; ?></td>
        <td><a href="<?php echo site_url('names/view/'.$names_item['id']); ?>">More Info</a></td>
        <td><a href="<?php echo site_url('names/show_update_form/'.$names_item['id']); ?>">Edit</a></td>
        
    </tr>

<?php endforeach; ?>
</table>