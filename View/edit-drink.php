<html>

<head>
    <title> Editar Bebida </title>
</head>

<body>



    <?php
    include_once '../Controller/ControllerDrink.php';
    if (isset($_GET['idDrinks'])) {
        $idDrinks = $_GET['idDrinks'];

        $drinkController = new ControllerDrink();
        $drink = $drinkController->getDrinkByidDrinks($idDrinks);

        if (!$drink) {
            echo 'Bebida não encontrada';
            exit;
        }


        if (isset($_POST['Submit'])) {

            $drink = $_POST['drink'];
            $priceDrinks = $_POST['priceDrinks'];
            $drinkController->updateDrink($idDrinks, $drink, $priceDrinks);
        }
    } else {
        echo 'ID de bebida não fornecido';
        exit;
    }
    ?>



    <br /> <br />
    <center>
        <h1>Editar dados Cadastrados</h1>
    </center>
    <form action="" method="post" name="form11">

        <table width="588" border="0" align="center">
            <tr>
                <td width="118">
                    <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Bebida: </font>
                </td>
                <td width="460">
                    <input name="drink" type="text" size="52" maxlength="150" class="formbutton"
                        value="<?php echo $drink['drink']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Preço: </font>
                </td>
                <td>
                    <font size="2">
                        <input name="priceDrinks" type="text" id="idade" size="05" maxlength="150" class="formbutton"
                            value="<?php echo $drink['priceDrinks'] ?>">
                    </font>
                </td>
            </tr>
            <tr>
                <!-- A função hidden oculta o valor do id para verificar no banco-->
                <td>
                    <input type="hidden" name="idDrinks" value=<?php echo $_GET['idDrinks']; ?>>
                </td>
                <td>
                    <input type="submit" name="Submit" value="Atualizar">
                    <button type='submit' formaction='../View/view-drinks.php'> Voltar </button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>