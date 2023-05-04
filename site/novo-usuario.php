<?php
include "cabecalho.php";
include "menu.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar novo usuário</h1>
        </div>
        <div class="row">
            <div class="col">
                <form method="post" action="salvar-usuario.php">
             <input class="mt-2" name="nome" required placeholder="Nome"><br>
             <input class="mt-2" name="email" type="email" required placeholder="E-mail"><br>
             <input class="mt-2" name="senha" type="password" required placeholder="Senha"><br>
             <button type="submit" class="btn btn-success mt-2">Salvar usuário</button>
                </form>
            </div>
        </div>
    </div>
