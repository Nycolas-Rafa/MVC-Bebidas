 <!-- ControllerUser -->

<?php
include_once '../Models/Crud.php';
include_once '../Models/Validation.php';

class ControllerDrink 
{
    private $crud;
    private $validation;

    public function __construct()
    {
        $this->crud = new Crud();
        $this->validation = new Validation();
    }

    public function addDrink() 
    {
        if (isset($_POST['Submit'])) {
            $drink = $this->crud->escape_string($_POST['drink']);
            $priceDrinks = $this->crud->escape_string($_POST['priceDrinks']);
            

            $msg = $this->validation->check_empty($_POST, array('drink', 'priceDrinks'));
            if ($msg == null) {
                $result = $this->crud->execute("INSERT INTO drinks (drink, priceDrinks) VALUES('$drink','$priceDrinks')");
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
                    windows.location.href = '../View/view-drinks.php';
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
                    windows.location.href = '../View/view-drinks.php';
                }, 3000);    
            </script>";
            }
        }
    }

    public function viewDrinks() 
    {
        $query = "SELECT * FROM drinks ORDER BY idDrinks";
        $result = $this->crud->getData($query);
        return $result;
    }

    public function deleteDrink($idDrinks) 
    {
        $table = 'drinks';
        $query = "DELETE FROM $table WHERE idDrinks  = $idDrinks ";
        $result = $this->crud->delete($query);
        if ($result) {
            header("Location:../View/view-drinks.php");
        }
    }


    public function updateDrink($idDrinks , $drink, $priceDrinks) 
    {
        $drink = $this->crud->escape_string($drink);
        $priceDrinks = $this->crud->escape_string($priceDrinks);
        

        $msg = $this->validation->check_empty($_POST, array('drink', 'priceDrinks'));
        if ($msg == null) {
            $query = "UPDATE drinks SET drink='$drink', priceDrinks='$priceDrinks' WHERE idDrinks =$idDrinks";
            $result = $this->crud->execute($query);

            if ($result) {
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
                divAlerta.text.Content = 'Dados atualizados com sucesso!';
                document.body.appendChild(divAlerta);    
                </script>"; 
                header("Location:../View/view-drinks.php");
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
                    //   windows.location.href = '../View/edit-drinks.php';
                }, 3000);    
            </script>";
            }
        }
    }


    public function getDrinkByidDrinks($idDrinks ) 
    {
        $idDrinks  = $this->crud->escape_string($idDrinks );

        $query = "SELECT * FROM drinks WHERE idDrinks =$idDrinks ";
        $result = $this->crud->getData($query);

        if (!empty($result)) {
            return $result[0];
        }
        else {
            return null;
        }
    }
}
?> 
