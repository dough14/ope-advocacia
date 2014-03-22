jQuery('document').ready(function(){
	jQuery.fullCalendar.monthNames
	jQuery('#calendar').fullCalendar({
		events: [
			<?php foreach( $events as $event ): ?>
			<?php
				$startDate = new DateTime($event->startDate);
				$_startMonth = new DateInterval('P1M');
				$startDate->sub($_startMonth);
				$_startMonth = $startDate->format('m');
			?>
			{
				title: '<?php echo $event->title ?>',
				start: new Date(<?php echo $startDate->format('Y') ?>, <?php echo $_startMonth == 12 ? 0 : $_startMonth ?>, <?php echo $startDate->format('d') ?>),
				<?php if( !empty($event->endDate) ): ?>
				<?php
					$endDate   = new DateTime($event->endDate);
					$_endMonth = new DateInterval('P1M');
					$endDate->sub($_endMonth);
					$_endMonth = $endDate->format('m');
				?>
				end: new Date(<?php echo $endDate->format('Y') ?>, <?php echo $_endMonth == 12 ? 0 : $_endMonth ?>, <?php echo $endDate->format('d') ?>)
				<?php endif ?>
			},
			<?php endforeach ?>
		]
	});
});