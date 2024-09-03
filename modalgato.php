<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
    #modal {
  width: 400px;
  height: 300px;
  background-color: #fff;
  border-radius: 5px;
  padding: 20px;
}
</style>
<body>
    <button onclick="modal.showModal()">Abrir Modal</button>

    <dialog id="modal">
    <div class="infos">
            <div>
                <div class="tp-dados">Nome do Tutor:</div>
                <p>Nicolly Lemos</p>
            </div>
            <div>
                <div class="tp-dados">Nome do Pet:</div>
                <p>Bagu Lemos
                </p>
            </div>
            <div>
                <div class="tp-dados">Data do Atendimento:</div>
                <p>28/06/2024</p>
            </div>
            <div>
                <div class="tp-dados">Horário:</div>
                <p>16:00</p>
            </div>
            <div>
                <div class="tp-dados">Endereço:</div>
                <p>Rua Benedito de Almeida</p>
            </div>
            <div class="obv">
                <div class="obv-title">Observações:</div>
                <div class="txt">Ele é fofo e lindooo</div>
            </div>
        </div>
        <button onclick="modal.close()">fechar Modal</button>
    </dialog>
</body>
</html>