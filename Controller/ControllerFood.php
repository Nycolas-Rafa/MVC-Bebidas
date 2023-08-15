<!-- ControllerUser -->

<?php
include_once '../Models/Crud.php';
include_once '../Models/Validation.php';

class ControllerFood 
{
    private $crud;
    private $validation;

    public function __construct()
    {
        $this->crud = new Crud();
        $this->validation = new Validation();
    }

    public function addFood() 
    {
        if (isset($_POST['Submit'])) {
            $eat = $this->crud->escape_string($_POST['eat']);
            $priceFoods = $this->crud->escape_string($_POST['priceFoods']);
            

            $msg = $this->validation->check_empty($_POST, array('eat', 'priceFoods'));
            if ($msg == null) {
                $result = $this->crud->execute("INSERT INTO foods(eat, priceFoods) VALUES('$eat','$priceFoods')");
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
                    windows.location.href = '../View/view-users.php';
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
                    windows.location.href = '../View/view-users.php';
                }, 3000);    
            </script>";
            }
        }
    }

    public function viewFood() 
    {
        $query = "SELECT * FROM foods ORDER BY idFoods";
        $result = $this->crud->getData($query);
        return $result;
    }

    public function deleteFood($idFoods) 
    {
        $table = 'foods';
        $query = "DELETE FROM $table WHERE idFoods = $idFoods";
        $result = $this->crud->delete($query);
        if ($result) {
            header("Location:../View/view-eats.php");
        }
    }


    public function updateFood($idFoods, $eat, $priceFoods) 
    {
        $eat = $this->crud->escape_string($eat);
        $priceFoods = $this->crud->escape_string($priceFoods);
        

        $msg = $this->validation->check_empty($_POST, array('eat', 'priceFoods'));
        if ($msg == null) {
            $query = "UPDATE foods SET eat='$eat', priceFoods='$priceFoods' WHERE idFoods=$idFoods";
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
                header("Location:../View/view-eats.php");
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
                    //   windows.location.href = '../View/edit-eats.php';
                }, 3000);    
            </script>";
            }
        }
    }


    public function getFoodByid($idFoods) 
    {
        $idFoods = $this->crud->escape_string($idFoods);

        $query = "SELECT * FROM foods WHERE idFoods=$idFoods";
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