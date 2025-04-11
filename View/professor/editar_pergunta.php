<?php

include('../time/head.php');

include('nav_professor.php');



?>
    <main class="main">
        <section class="section_title teste2">
            <div class="container_title">
                <i class="fa-solid fa-chevron-left"></i>
                Editar Pergunta
            </div>
        </section>
        <section class="form_adm">
            <div class="container_form_adm3">
                <div class="item_flex_adm Enunciado">
                    <label for="">Enunciado</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="container_form_adm">
                    <div class="left_form">
                        <div class="item_flex_adm">
                            <label for="">Resposta A)</label>
                            <input type="text" >
                        </div>
                        <div class="item_flex_adm">
                            <label for="">Resposta B)</label>
                            <input type="text" >
                        </div>
                        <div class="item_flex_adm">
                            <label for="">Resposta C)</label>
                            <input type="text" >
                        </div>
                        <div class="item_flex_adm">
                            <label for="">Quantidade de Pontos</label>
                            <input type="number" >
                        </div>


                    
                    </div>
                    <div class="right_form">
                        <div class="item_flex_adm">
                            <label for="">Resposta D)</label>
                            <input type="text" >
                        </div>
                        
                        <div class="item_flex_adm">
                            <label for="">Resposta E)</label>
                            <input type="text" >
                        </div>
                        <div class="item_flex_adm">
                            <label for="">Resposta Correta</label>
                            <div class="conatiner_escolha">
                                <div class="item_center">
                                    A)
                                    <input name='escolha' type="radio">
                                </div>
                                <div class="item_center">
                                    B)
                                    <input name='escolha' type="radio">
                                </div>
                                <div class="item_center">
                                    C)
                                    <input name='escolha' type="radio">
                                </div>
                                <div class="item_center">
                                    D)
                                    <input name='escolha' type="radio">
                                </div>
                                <div class="item_center">
                                    E)
                                    <input name='escolha' type="radio">
                                </div>
                            </div>
                            
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
</body>
</html>