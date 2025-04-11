<?php

include('head_adm.php');

include('nav_adm.php');



?>
    <main class="main_adm">
        <section class="section_title">
            <div class="container_title">
                <i class="fa-solid fa-chevron-left"></i>
                Editar Professor
            </div>
        </section>
        <section class="form_adm">
            <div class="container_form_adm2">
                <div class="item_flex_adm2">
                    <label for="">Nome</label>
                    <input type="text" >
                </div>
                <div class="item_flex_adm2">
                    <label for="">Sobrenome</label>
                    <input type="text" >
                </div>
                <div class="item_flex_adm2">
                    <label for="">Email</label>
                    <input type="text" >
                </div>
                <div class="item_flex_adm2">
                    <label for="">Senha</label>
                    <input type="password" >
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