<html>

<head>
    <title> Editar Usuario </title>
</head>

<body>



    <?php
    include_once '../Controller/ControllerFood.php';
    if (isset($_GET['idFoods'])) {
        $idFoods = $_GET['idFoods'];

        $foodController = new ControllerFood();
        $food = $foodController->getFoodById($idFoods);

        if (!$food) {
            echo 'Usuário não encontrado';
            exit;
        }


        if (isset($_POST['Submit'])) {

            $eat = $_POST['eat'];
            $priceFoods = $_POST['priceFoods'];
            $foodController->updateFood($idFoods, $eat, $priceFoods);
        }
    } else {
        echo 'ID de comida não fornecido';
        exit;
    }
    ?>



    <br /> <br />
    <center>
        <h1>Editar dados Cadastrados</h1>
    </center>
    <form action="" method="post" name="form1">

        <table width="588" border="0" align="center">



            <tr>
                <td width="118">
                    <font size="1" face="Verdana, Arial, Helvetica, sans-serif"> Comida: </font>
                </td>
                <td width="460">
                    <input name="eat" type="text" size="52" maxlength="150" class="formbutton"
                        value="<?php echo $food['eat']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Preço: </font>
                </td>
                <td>
                    <font size="2">
                        <input name="priceFoods" type="text" id="priceFoods" size="05" maxlength="150" class="formbutton"
                            value="<?php echo $food['priceFoods'] ?>">
                    </font>
                </td>
            </tr>

            <tr>
                <!-- A função hidden oculta o valor do id para verificar no banco-->
                <td>
                    <input type="hidden" name="idFoods" value=<?php echo $_GET['idFoods']; ?>>
                </td>
                <td>
                    <input type="submit" name="Submit" value="Atualizar">
                    <button type='submit' formaction='../View/view-eats.php'> Voltar </button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>