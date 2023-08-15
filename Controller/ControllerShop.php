<?php
include_once '../Models/Crud.php';
include_once '../Models/Validation.php';

class ControllerShop
{
    private $crud;
    private $validation;

    public function __construct()
    {
        $this->crud = new Crud();
        $this->validation = new Validation();
    }

    public function addShop() 
    {
        if (isset($_POST['Submit'])) {
            $idFoods = $this->crud->escape_string($_POST['idFoods']);
            

            $idDrinks = $this->crud->escape_string($_POST['idDrinks']);
            
            
            $id = $this->crud->escape_string($_POST['id']);
            
            
            

            $msg = $this->validation->check_empty($_POST, array('idFoods', 'idDrinks', 'id' ));
            if ($msg == null) {
                $result = $this->crud->execute("INSERT INTO shopping (idFoods, idDrinks, id) VALUES('$idFoods','$idDrinks' , '$id')");
                echo "<script language='javascript' type='text/javascript'>
                var divAlerta = document.createElement('div');
                divAlerta.style.color = 'green';
                divAlerta.style.backgorund ='lightgreen';
                divAlerta.style.padding ='10px';
                divAlerta.style.margin ='10px';
                divAlerta.style.position ='fixed';
                divAlerta.style.bottom ='0';
                divAlerta.style.left ='0';
                divAlerta.style.width ='100%';
                divAlerta.style.textAlign = 'center';
                divAlerta.text.Content = 'Dados cadastrados com sucesso!';
                document.body.appendChild(divAlerta);

                setTimeout(function() {
                    document.body.removeChild(divAlerta);
                    windows.location.href = '../View/view-shops.php';
                }, 3000);    
            </script>";
            }
            else {
                echo "<script language='javascript' type='text/javascript'>
                var divAlerta = document.createElement('div');
                divAlerta.style.color = 'red';
                divAlerta.style.backgorund ='lightcoral';
                divAlerta.style.padding ='10px';
                divAlerta.style.margin ='10px';
                divAlerta.style.position ='fixed';
                divAlerta.style.bottom ='0';
                divAlerta.style.left ='0';
                divAlerta.style.width ='100%';
                divAlerta.style.textAlign = 'center';
                divAlerta.text.Content = 'Preencha os dados nos campos!';
                document.body.appendChild(divAlerta);

                setTimeout(function() {
                    document.body.removeChild(divAlerta);
                    windows.location.href = '../View/view-shops.php';
                }, 3000);    
            </script>";
            }
        }
    }


    public function viewShop() 
    {
        $query = "SELECT * FROM shopping  C INNER JOIN users B ON C.id = B.id INNER JOIN foods A ON C.idFoods = A.idFoods INNER JOIN drinks D ON C.idDrinks = D.idDrinks;";
        $result = $this->crud->getData($query);
        return $result;
    }

    

    public function deleteShop($idShopping) 
    {
        $table = 'shopping';
        $query = "DELETE FROM $table WHERE idShopping = $idShopping";
        $result = $this->crud->delete($query);
        if ($result) {
            header("Location:../View/view-shops.php");
        }
    }













}
    

?>