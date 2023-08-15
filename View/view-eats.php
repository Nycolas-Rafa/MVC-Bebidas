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
$foods = $foodController ->viewFood();
?>
        <h2 size="1" style="font-family: Verdana, Arial, Helvetica, sans-serif;"> Quer adicionar uma nova comida? </h2>
        <button size="1" style="font-family: Verdana, Arial, Helvetica, sans-serif;" class="styled-button" onclick="window.location.href='add-eat.php'"> Clique Aqui </button>


        <center>
            <h1> Consultar Comidas Salvas </h1>
        </center>
         
        <table width="80%" border="0" align="center">
            <tr bgcolor='#CCCCCC'>
                <td>
                    <font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong> Código: </strong></font>
                </td>

                <td width="118">
                    <font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong> Comida: </strong></font>
                </td>

                <td>
                    <font size="3" face="Verdana, Arial, Helvetica, sans-serif"><strong> Preço: </strong></font>
                </td>

                <td>
                    <font size="3" face="Verdana, Arial, Helvetica, sans-serif"> <strong> Ações: </strong> </font>
                </td>
                
            </tr>

            <?php
            
                foreach ($foods as $food){
                    echo "<tr>";
                    echo "<td size = '1' style='font-famyly: Verdana, Arial, Helvetica, sans-serif;''>" . $food['idFoods'] . "</td>";
                    echo "<td size = '1' style='font-famyly: Verdana, Arial, Helvetica, sans-serif;''>" . $food['eat'] . "</td>";
                    echo "<td size = '1' style='font-famyly: Verdana, Arial, Helvetica, sans-serif;''>" . $food['priceFoods'] . "</td>";
                    echo "<td size='1' style='font-family: Verdana, Arial, Helvetica, sans-serif;''><a href=\"edit-eat.php?idFoods=$food[idFoods]\"onClick=\"return confirm('Tem certeza de que deseja editar?')\">Editar</a> | <a href=\"delete-eat.php?idFoods=$food[idFoods]\"onClick=\"return confirm('Tem certeza de que deseja excluir?')\">Deletar | <a href=\"../new-eat.php\"onClick=\"return confirm('Tem certeza de que deseja adicionar?')\">Adicionar</a></td>";
                    echo "</tr>";
                } 
            
            ?>
        </table>
        <img src="imgs/comidafavorita.gif" height="5%" width="30%" style="margin-top: 0%; margin-left: 840px;">
    </body>
</html>

