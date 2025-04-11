<?php

include('head_adm.php');

include('nav_adm.php');



?>
    <main class="main_adm">
        <section class="section_title">
            <div class="container_title">
                <i class="fa-solid fa-chevron-left"></i>
                Editar Atividade
            </div>
        </section>
        <section class="form_adm">
            <div class="container_form_adm">
                <div class="left_form">
                    <div class="item_flex_adm">
                        <label for="">Nome</label>
                        <input type="text" >
                    </div>
                    <div class="item_flex_adm">
                        <label for="">Quantidade Perguntas</label>
                        <input type="number" >
                    </div>
                    <div class="item_flex_adm">
                        <label for="">Quantidade Perguntas por etapa</label>
                        <input type="number" >
                    </div>
                    
                </div>
                <div class="right_form">
                    <div class="item_flex_adm">
                        <label for="">Descrição</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="item_flex_adm">
                        <label for="">temas</label>
                        <div class="container_btn_open_tema">
                            <a class=""></a>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <div class="conatiner_btn_adm">
            <button>Cancelar</button>
            <button>Salvar</button>
        </div>
   
    </main>
    <?php

        include('cadastrar_tema.php');


    ?>
    
</body>
</html>