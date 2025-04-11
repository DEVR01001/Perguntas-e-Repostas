<?php


include('../time/head.php');

include('nav_professor.php');



?>
    <main class="main">
        <section class="section_title teste2">
            <div class="container_title">
                <i class="fa-solid fa-chevron-left"></i>
                Temas
            </div>
            <div class="conatiner_btn_title">
                <a href="cadastrar_tema.php" class="btn_editar_professor">+ Cadastrar Tema</a>

            </div>
        </section>
        <div class="conatiner_body_list">
            <section class="container_pesquisa">
                <div class="container_left_pesquisa">
                    <input type="search">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    
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

        </div>
       
       
      
    </main>
  
</body>
</html>