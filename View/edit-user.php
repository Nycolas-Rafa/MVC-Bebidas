<html>

<head>
    <title> Editar Usuario </title>
</head>

<body>



<?php
include_once '../Controller/ControllerUser.php';
if (isset($_GET['id'])){
    $id = $_GET['id'];

$userController = new ControllerUser();
$user=$userController -> getUserById($id);

if (!$user){
    echo 'Usuário não encontrado';
    exit;
}


if (isset($_POST['Submit'])){
    
    $name = $_POST['nome'];
    $age = $_POST['idade'];
    $email = $_POST['email'];
    $userController->updateUser($id, $name, $age, $email);
} 
}else{
    echo 'ID de usuário não fornecido';
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
                    <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Nome Completo: </font>
                </td>
                <td width="460">
                    <input name="nome" type="text" size="52" maxlength="150" class="formbutton"
                        value="<?php echo $user['name']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <font size="1" face="Verdana, Arial, Helvetica, sans-serif">Idade: </font>
                </td>
                <td>
                    <font size="2">
                        <input name="idade" type="text" id="idade" size="05" maxlength="150" class="formbutton"
                            value="<?php echo $user['age'] ?>">
                    </font>
                </td>
            </tr>

            <tr>
                <td>
                    <font size="1" face="Verdana, Arial, Helvetica, sans-serif">E-mail: </font>
                </td>
                <td>
                    <font size="2">
                        <input name="email" type="email" id="email" class="formbutton" value="<?php echo $user['email']; ?>">
                    </font>
                </td>
            </tr>

            <tr>
                <!-- A função hidden oculta o valor do id para verificar no banco-->
                <td>
                    <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                </td>
                <td>
                    <input type="submit" name="Submit" value="Atualizar">
                    <button type='submit' formaction='../View/view-users.php'> Voltar </button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>