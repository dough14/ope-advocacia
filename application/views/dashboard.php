<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 18:13
 */
//load menu
$this->template->menu('dashboard');
//var_dump($events);exit;
//$this->model('calendar_model');
?>
<?php //var_dump($this->row);exit; ?>

<div id="content" class="container_16 clearfix">
<div class="grid_5">
    <div class="box">
        <h2>Ilza Ogi</h2>
        <div class="utils">
            <a href="#">Veja Mais</a>
        </div>
        <p><strong>Ultimo Login : </strong> Ter 03 Set, 7:31</p>
    </div>
    <div class="box">
        <h2>Funcionários</h2>
        <div class="utils">
            <a href="#">Veja Mais</a>
        </div>
        <table>
            <tbody>
            <tr>
                <td>Ana Maria</td>
                <td>Analista</td>
            </tr>
            <tr>
                <td>Daniel Vieira</td>
                <td>Desenvolvedor</td>
            </tr>
            <tr>
                <td>Douglas Leandro</td>
                <td>Desenvolvedor, Gerente do Projeto</td>
            </tr>
            <tr>
                <td>Henrique Koiti</td>
                <td>Analista, Desenvolvedor</td>
            </tr>
            <tr>
                <td>Erik Sato</td>
                <td>Analista</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="box">
        <h2>Mensagens</h2>
        <div class="utils">
            <a href="#">Inbox</a>
        </div>
        <p class="center">Você tem <a href="#">10</a> Mensagens não lidas.</p>
    </div>
    <div class="box">
        <h2>Eventos</h2>
        <div class="utils">
            <a href="#">Veja Mais</a>
        </div>
        <p class="center">Você não tem evento(s) hoje.</p>
    </div>
</div>
<div class="grid_6">
    <div class="box">
        <h2>Processos</h2>
        <div class="utils">
            <a href="#">Veja Mais</a>
        </div>
        <table>
            <tbody>
            <tr>
                <td>12 Processos</td>
                <td>Em andamento</td>
            </tr>
            <tr>
                <td>5 Trabalhistas</td>
                <td>Em andamento</td>
            </tr>
            <tr>
                <td>3 Previdenciários</td>
                <td>Aguardando Concessão do Benefício</td>
            </tr>
            <tr>
                <td>3 Trabalhistas</td>
                <td>Aguardando Análise</td>
            </tr>
            <tr>
                <td>1 Cívil</td>
                <td>Aguardando Análise</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="box" style="display:none;">
        <h2>Quick Post</h2>
        <div class="utils">
            <a href="#">Advanced</a>
        </div>
        <form action="#" method="post">
            <p>
                <label for="title">Title <small>Alpha-numeric characters only.</small> </label>
                <input type="text" name="title" />
            </p>
            <p>
                <label for="post">Post <small>Parsed by Markdown.</small> </label>
                <textarea name="post"></textarea>
            </p>
            <p>
                <input type="submit" value="post" />
            </p>
        </form>
    </div>
</div>
<div class="grid_5">
    <div class="box">
        <h2>Estatísticas</h2>
        <div class="utils">
            <a href="#">Veja Mais</a>
        </div>
        <table>
            <tbody>
            <tr>
                <td>Processos</td>
                <td>+ 120%</td>
            </tr>
            <tr>
                <td>Casos Encerrados</td>
                <td>+ 220%</td>
            </tr>
            <tr>
                <td>Novos Clientes</td>
                <td>+ 10%</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="grid_6">
    <div class="box">
        <h2>Agenda</h2>

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
                        month: 'MMM yyyy',
                        day: 'd MMM'
                    },
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        //right: 'month,agendaWeek,agendaDay'
                        right: 'month,agendaDay'
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
</div>
</div>
<div id="foot">
    <div class="container_16 clearfix">
        <div class="grid_16">
            <a href="#">SGC - Sistema de Gerenciamento de Clientes</a>
        </div>
    </div>
</div>