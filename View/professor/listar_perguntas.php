<?php

include('../time/head.php');

include('nav_professor.php');



?>
    <main class="main">
        <section class="section_title teste2">
            <div class="container_title">
                <i class="fa-solid fa-chevron-left"></i>
                Perguntas
            </div>
            <div class="conatiner_btn_title">
                <a href="cadastrar_perguntas.php" class="btn_editar_professor">+ Cadastrar Pergunta</a>

            </div>
        </section>
        <div class="conatiner_body_list ">
            <section class="container_pesquisa">
                <div class="container_left_pesquisa">
                    <input type="search">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    
                </div>
                <div id='teste22'class="container_right_pesquisa ">
                    <div class="item_flex">
                        <label for=""><i class="fa-solid fa-filter"></i> Filtro Tema</label>
                        <select name="" id="">
                            <option value="">Matematica</option>
                            <option value="">Português</option>
                            <option value="">História</option>
                        </select>
                    </div>
    
                </div>
            </section>
            <section class="lista_adm">
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Enunciado</th>
                        <th>A)</th>
                        <th>B)</th>
                        <th>C)</th>
                        <th>D)</th>
                        <th>E)</th>
                        <th>Pontuação</th>
                        <th>Ações</th>
                    </tr>
                    <tr>
                        <td class="td-teste">1</td>
                        <td class="td-teste2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque numquam beatae maxime repudiandae corrupti facere quod. Maiores assumenda similique fugiat cupiditate possimus ad laudantium eveniet, doloremque sapiente aliquid voluptates nihil.</td>
                        <td class="td-teste">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td class="td-teste">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td class="td-teste">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td class="td-teste">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td class="td-teste">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</td>
                        <td>2000</td>
                        <td>
                            <div class="container_acoes">
                                <a href="editar_pergunta.php"><i class="fa-solid fa-pencil"></i></a>
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