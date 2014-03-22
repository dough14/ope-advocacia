<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 05/01/14
 * Time: 00:08
 */

// Load Menu
$this->template->menu('calendar');
?>

<div id="content" class="container_16 clearfix">
    <h2>Agenda || <?php echo anchor('calendar/add/','Adicionar evento'); ?></h2>
    <script type="text/javascript">
        jQuery('document').ready(function(){
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
                ],
                titleFormat: {
                    month: 'MMMM yyyy',
                    week:  'MMMM yyyy',
                    day: 'MMMM, dd yyyy'
                },
                agenda: 'h:mm{ - h:mm}', // 5:00 - 6:30
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                    //right: 'month,agendaDay'
                },
                timeFormat: {
                    agenda: 'h(:mm)t{ - h(:mm)t}',
                    '': 'h(:mm)t{-h(:mm)t }'
                },
                monthNames: ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro" ],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Maio','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                dayNames: [ 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb'],
                buttonText: {
                    today: 'Hoje',
                    month: 'Mês',
                    week: 'Semana',
                    day: 'Dia'
                },
                allDayText: 'Dia Inteiro'
            });
        });
    </script>
    <div id="calendar"></div>
</div>
