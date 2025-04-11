<?php

include('head_adm.php');

include('nav_adm.php');


?>
    <main class="main_adm">
        <section class="section_title">
            <div class="container_title">
                <i class="fa-solid fa-chevron-left"></i>
                Temas
            </div>
        </section>
        <section class="container_pesquisa">
            <div class="container_left_pesquisa">
                <input type="search">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
                
            </div>
            <div class="container_right_pesquisa">
                <a href="">+ Tema</a>
            </div>
        </section>
        <section class="lista_adm">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Quat. Perguntas</th>
                    <th>Ações</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Matematica</td>
                    <td>20</td>
                    <td>
                        <div class="container_acoes">
                            <a href="editar_tema.php"><i class="fa-solid fa-pencil"></i></a>
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