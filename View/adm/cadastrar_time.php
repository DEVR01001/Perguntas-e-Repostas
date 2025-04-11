<?php

include('head_adm.php');

include('nav_adm.php');



?>
    <main class="main_adm">
        <section class="section_title ">
            <div class="container_title ">
                <i class="fa-solid fa-chevron-left"></i>
                Cadastrar Time
            </div>
        </section>
        <section class="form_adm">
            <div class="container_form_adm2">
                <div class="item_flex_adm2">
                    <label for="">Nome</label>
                    <input type="text" >
                </div>
                <div class="item_flex_adm2">
                    <label for="">Senha</label>
                    <input type="text" >
                </div>
                <div class="item_flex_adm2">
                    <label for="">Status Etapa</label>
                    <select name="" id="">
                        <option value="">Etapa1</option>
                        <option value="">Etapa2</option>
                        <option value="">Etapa3</option>
                        <option value="">Etapa4</option>
                    </select>
                </div>
            </div>

        </section>
        <div class="conatiner_btn_adm">
            <button>Cancelar</button>
            <button>Cadastrar</button>
        </div>

   
    </main>
    <?php

        include('cadastrar_tema.php');
        include('modal_tema.php');


    ?>
    
</body>
</html>