<?php

include('head.php');


?>
    <main class="main">
        <section class="section_title teste2">
            <div class="container_title">
                1° Questionário 
            </div>

        </section>
        <section class="questionario">
            <div class="conatiner_questionario">
                <div class="tite_pergunta">
                    1° Pergunta
                </div>
                <div class="enunciado"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quasi error, deleniti temporibus explicabo officia harum repellendus incidunt. Repellendus sed veniam molestiae eum, aliquam sapiente odit perspiciatis. Nemo, mollitia molestiae?</div>
                <div class="item_pergunta">
                    <input  name="radio2"  type="radio"> A) letra A)
                </div>
                <div class="item_pergunta">
                    <input  name="radio2"  type="radio"> B) letra B)
                </div>
                <div class="item_pergunta">
                    <input  name="radio2"  type="radio"> C) letra C)
                </div>
                <div class="item_pergunta">
                    <input  name="radio2"  type="radio"> D) letra D)
                </div>
                <div class="item_pergunta">
                    <input name="radio2"  type="radio"> E) letra E)
                </div>
              
            </div>
            <div class="conatiner_questionario">
                <div class="tite_pergunta">
                    2° Pergunta
                </div>
                <div class="enunciado"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quasi error, deleniti temporibus explicabo officia harum repellendus incidunt. Repellendus sed veniam molestiae eum, aliquam sapiente odit perspiciatis. Nemo, mollitia molestiae?</div>
                <div class="item_pergunta">
                    <input name="radio1" type="radio"> A) letra A)
                </div>
                <div class="item_pergunta">
                    <input name="radio1"  type="radio"> B) letra B)
                </div>
                <div class="item_pergunta">
                    <input name="radio1"  type="radio"> C) letra C)
                </div>
                <div class="item_pergunta">
                    <input name="radio1"  type="radio"> D) letra D)
                </div>
                <div class="item_pergunta">
                    <input name="radio1"  type="radio"> E) letra E)
                </div>
              
            </div>
            <div class="conatiner_btn_ques">
                <button class="open-modal" data-modal="modal-1">Enviar Respostas</button>
            </div>

        </section>
      
    </main>
    <dialog id="modal-1">
        <div class="modal_header">
        </div>
        <div class="modal_body">
            <div class="title_modal">
                <i class="fa-solid fa-circle-check"></i>
                Respostas Enviadas
            </div>
            <div class="shape_modal"></div>
            <a class="btn_modal_first" >Aguarde a finalização da atividade</a>
        </div>
     
        </div>
    </dialog>
  

    <script src="../../Public/js/modal.js"></script>
</body>
</html>