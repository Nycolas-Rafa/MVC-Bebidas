<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Favoritas</title>
  
</head>



<body>

  <header>
  
    
    <nav
      class="relative flex w-full flex-wrap items-center justify-between bg-neutral-900 py-2 text-neutral-200 shadow-lg lg:flex-wrap lg:justify-start lg:py-4"
      data-te-navbar-ref style="display: grid; justify-content: right;">
      <div class="flex w-full flex-wrap items-center justify-between px-3">
        
        <button
          class="block border-0 bg-transparent px-2 text-neutral-200 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
          type="button" data-te-collapse-init data-te-target="#navbarSupportedContent4"
          aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
          
          <span class="[&>svg]:w-7">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
              <path fill-rule="evenodd"
                d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </button>
        
        <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>

          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a class="p-0 text-white hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
              href="add-user.php" data-te-nav-link-ref>Novo Usuário</a>
        </ul>

        <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>

          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a class="p-0 text-white hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
              href="add-drink.php" data-te-nav-link-ref>Nova Bebida</a>
        </ul>

        

        <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>

          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a class="p-0 text-white hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
              href="add-eat.php" data-te-nav-link-ref>Nova Comida</a>
        </ul>


        

        <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>

          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a class="p-0 text-white hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
              href="add-shop.php" data-te-nav-link-ref>Registrar Pedido</a>
        </ul>

        <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>

          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a class="p-0 text-white hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
              href="view-shops.php" data-te-nav-link-ref> Pedidos Registrados</a>
        </ul>

        <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>

          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a class="p-0 text-white hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
              href="view-users.php" data-te-nav-link-ref> Usuários Ativos</a>
        </ul>

        <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>

          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a class="p-0 text-white hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
              href="view-drinks.php" data-te-nav-link-ref>Bebida Salvas</a>
        </ul>

        <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>

          <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
            <a class="p-0 text-white hover:opacity-80 focus:opacity-80 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
              href="view-eats.php" data-te-nav-link-ref>Comidas Salvas</a>
        </ul>

        




        
          
      </div>
  </header>
  <br></br>



<?php
include_once '../Controller/ControllerFood.php';
$foodController = new ControllerFood();
if (isset($_POST['Submit'])){
    $foodController->addFood();
}
?>
    <br /> <br />
    <div id="msg"></div>
    <form action="" method="post" name="form1">
        <center>
            <h1> Cadastro de Comidas</h1>
        </center>
        <table width="588" border="0" align="center">
            <tr>
                <td width="118">
                    <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Comida: </font>
                </td>
                <td width="460">
                    <input name="eat" type="text" class="formbutton" id="nome" size="52" maxlength="150">
                </td>
            </tr>

            <tr>
                <td>
                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Preço: </font>
                </td>
                <td>
                    <font size="2">
                        <input name="priceFoods" type="text" id="idade" size="05" maxlength="150" class="formbutton">
                    </font>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="Submit" value="Cadastrar">
                    <button type="submit" formaction='../View/view-eats.php'> Consultar Comidas já cadastradas </button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>