<?php

include('../time/head.php');

include('nav_professor.php');



?>
    <main class="main">
        <section class="section_title teste2">
            <div class="container_title">
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
                        <option value="">Etapa 1</option>
                        <option value="">Etapa 2</option>
                        <option value="">Etapa 3</option>
                        <option value="">Etapa 4</option>
                    </select>
                </div>
            </div>

        </section>
        <div class="conatiner_btn_adm">
            <button>Cancelar</button>
            <button>Cadastrar</button>
        </div>
    </main>
    
</body>
</html>