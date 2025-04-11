<?php

include('../time/head.php');

include('nav_professor.php');



?>
    <main class="main">
        <section class="section_title teste2">
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
                        <label for="">temas <a href=""><i class="fa-solid fa-plus"></i></a></label>
                        <div class="conatiner_item_tema">
                            <div class="container_btn_open_tema">
                                <div id="open-tema" class="open_drop_tema">Listar Temas<i class="fa-solid fa-chevron-down"></i></div> 
                            </div>
                            <div id="open-conteudo-tema" class="conatiner_body_tema">
                                <p>Escolha os temas para essa atividade</p>
                                <div class="item_tema">
                                    <input type="checkbox">
                                    Matematica
                                </div>
                                <div class="item_tema">
                                    <input type="checkbox">
                                    Português
                                </div>
                                <div class="item_tema">
                                    <input type="checkbox">
                                    História
                                </div>
                             
                               
                            </div>

                        </div>
                        
                    </div>

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