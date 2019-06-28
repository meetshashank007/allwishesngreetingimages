<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		/*    Fonts and icons    */
		echo $this->Html->css('https://fonts.googleapis.com/css?family=Montserrat:400,700,200');
		echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css');
		/*		CSS Files 		*/
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('paper-dashboard');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="wrapper ">
    <?php echo $this->element('sidebar'); ?>
    <div class="main-panel">
    	<?php echo $this->element('navbar'); ?>
      <!-- <div class="panel-header panel-header-lg">
  
  <canvas id="bigDashboardChart"></canvas>
  
  
</div> -->
      <div class="content">
        <?php echo $this->Flash->render(); ?>

		<?php echo $this->fetch('content'); ?>
      </div>
      <?php echo $this->element('footer'); ?>
    </div>
  </div>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'https://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			
		</div>
		<div id="footer">
			
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<?php 
		echo $this->Html->script('core/jquery.min');
		echo $this->Html->script('core/popper.min');
		echo $this->Html->script('plugins/perfect-scrollbar.jquery.min');
		
		/*  Google Maps Plugin    */
		echo $this->Html->script('https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE');

		/* Chart JS */
		echo $this->Html->script('plugins/chartjs.min');

		/*  Notifications Plugin    */
		echo $this->Html->script('plugins/bootstrap-notify');

		/* Control Center for Paper Dashboard: parallax effects, scripts for the example pages etc */
		echo $this->Html->script('paper-dashboard');

	?>
</body>
</html>