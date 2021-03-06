<?php
/**
 * Created by PhpStorm.
 * User: Douglas
 * Date: 04/01/14
 * Time: 18:13
 */
//load menu
$this->template->menu('dashboard');
?>


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
    <div class="box">
        <h2>Agenda</h2>
        <div class="utils">
            <a href="#">Veja Mais</a>
        </div>
        <table class="date">
            <caption><a href="#">Anterior</a> Setembro 2013 <a href="#">Próximo</a> </caption>
            <thead>
            <tr>
                <th>Seg</th>
                <th>Ter</th>
                <th>Qua</th>
                <th>Qui</th>
                <th>Sex</th>
                <th>Sab</th>
                <th>Dom</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="#">1</a></td>
            </tr>
            <tr>
                <td><a href="#">2</a></td>
                <td><a href="#" class="active">3</a></td>
                <td><a href="#">4</a></td>
                <td><a href="#">5</a></td>
                <td><a href="#">6</a></td>
                <td><a href="#">7</a></td>
                <td><a href="#">8</a></td>
            </tr>
            <tr>
                <td><a href="#">9</a></td>
                <td><a href="#">10</a></td>
                <td><a href="#">11</a></td>
                <td><a href="#">12</a></td>
                <td><a href="#">13</a></td>
                <td><a href="#">14</a></td>
                <td><a href="#">15</a></td>
            </tr>
            <tr>
                <td><a href="#">16</a></td>
                <td><a href="#">17</a></td>
                <td><a href="#">18</a></td>
                <td><a href="#">19</a></td>
                <td><a href="#">20</a></td>
                <td><a href="#">21</a></td>
                <td><a href="#">22</a></td>
            </tr>
            <tr>
                <td><a href="#">23</a></td>
                <td><a href="#">24</a></td>
                <td><a href="#">25</a></td>
                <td><a href="#">26</a></td>
                <td><a href="#">27</a></td>
                <td><a href="#">28</a></td>
                <td><a href="#">29</a></td>
            </tr>
            <tr>
                <td><a href="#">30</a></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <ol>
            <li>Nenhum evento hoje.</li>
        </ol>
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