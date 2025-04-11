<?php

include('head_adm.php');

include('nav_adm.php');



?>
    <main class="main_adm">
        <section class="section_title">
            <div class="container_title">
                <i class="fa-solid fa-chevron-left"></i>
                Atividade Matematica
            </div>
        </section>
        <section class="container_pesquisa">
            <div class="container_left_pesquisa">
                <input type="search">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
                
            </div>
            <div class="container_right_pesquisa">
                <a href="">+ Times</a>
                <div class="item_flex">
                    <label for=""><i class="fa-solid fa-filter"></i> Filtro Etapa</label>
                    <select name="" id="">
                        <option value="">Todos</option>
                        <option value="">Etapa 1</option>
                        <option value="">Etapa 2</option>
                        <option value="">Etapa 3</option>
                        <option value="">Etapa 4</option>
                    </select>
                </div>

            </div>
        </section>
        <section class="lista_adm">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nome Time</th>
                    <th>Status Etapa</th>
                    <th>Pontuação</th>
                    <th>Ações</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Time Alpha</td>
                    <td>
                        <div class="conatiner_etapa">
                            Etapa 1
                        </div>
                    </td>
                    <td>3000</td>
                    <td>
                        <div class="container_acoes">
                            <a href="editar_time.php"><i class="fa-solid fa-pencil"></i></a>
                            <a href=""><i class="fa-solid fa-trash"></i></a>
                        </div>
                    </td>
                </tr>
            </table>

        </section>
    </main>
    <?php

        include('cadastrar_tema.php');

    ?>

    
</body>
</html>