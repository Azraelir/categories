<?php
/**
 * Copyright 2010, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<?php echo $this->Form->create('Category');?>
	<fieldset>
 		<legend><?php __d('categories', 'Edit Category');?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('category_id', array('empty' => true));
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__d('categories', 'Submit', true));?>