<?php

include('../time/head.php');

include('nav_professor.php');



?>
   
    <main class="main">
        <section class="section_title teste2">
            <div class="container_title">
                Atividades
            </div>
            <div class="conatiner_btn_title">
                <a href="editar_atividade.php" class="btn_editar_professor">Editar Atividade<i class="fa-solid fa-gear"></i></a>

            </div>
        </section>
        <section class="pesquisa">
            <div class="container_pesquisa">
                <div class="left_pesquisa">
                    <input type="text">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="right_pesquisa">
                    <a href="cadastro_atividade.php">+ Atividade</a>
                    <div class="item_flex_user">
                        <label for=""><i class="fa-solid fa-filter"></i> Filtro Status</label>
                        <select name="" id="">
                            <option value="">Aberta</option>
                            <option value="">Terminada</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <section class="lista_card">
            <div class="container_lista_card">
                <div class="card_default">
                    <img src="../../Public/img/28766402-colagem-do-retratos-e-rostos-do-sorridente-multirracial-grupo-do-varios-diverso-pessoas-para-perfil-cenario-em-colorida-fundo-diversidade-conceito-generativo-ai-foto.jpg" alt="">
                    <p>Atividade Matematica</p>
                    <span>Qut. Times: 5</span>
                    <a href="atividade_time.php">Ver Atividade<i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>

        </section>
      
    </main>
  
</body>
</html>