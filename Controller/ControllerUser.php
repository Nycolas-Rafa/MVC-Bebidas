<!-- ControllerUser -->

<?php
include_once '../Models/Crud.php';
include_once '../Models/Validation.php';

class ControllerUser 
{
    private $crud;
    private $validation;

    public function __construct()
    {
        $this->crud = new Crud();
        $this->validation = new Validation();
    }

    public function addUser() 
    {
        if (isset($_POST['Submit'])) {
            $name = $this->crud->escape_string($_POST['nome']);
            $age = $this->crud->escape_string($_POST['idade']);
            $email = $this->crud->escape_string($_POST['email']);

            $msg = $this->validation->check_empty($_POST, array('nome', 'idade', 'email'));
            if ($msg == null) {
                $result = $this->crud->execute("INSERT INTO users(name, age, email) VALUES('$name','$age','$email')");
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

    public function viewUsers() 
    {
        $query = "SELECT * FROM users ORDER BY id";
        $result = $this->crud->getData($query);
        return $result;
    }

    public function deleteUser($id) 
    {
        $table = 'users';
        $query = "DELETE FROM $table WHERE id = $id";
        $result = $this->crud->delete($query);
        if ($result) {
            header("Location:../View/view-users.php");
        }
    }


    public function updateUser($id, $name, $age, $email) 
    {
        $name = $this->crud->escape_string($name);
        $age = $this->crud->escape_string($age);
        $email = $this->crud->escape_string($email);

        $msg = $this->validation->check_empty($_POST, array('nome', 'idade', 'email'));
        if ($msg == null) {
            $query = "UPDATE users SET name='$name', age='$age', email='$email' WHERE id=$id";
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
                header("Location:../View/view-users.php");
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
                    //   windows.location.href = '../View/edit-user.php';
                }, 3000);    
            </script>";
            }
        }
    }


    public function getUserById($id) 
    {
        $id = $this->crud->escape_string($id);

        $query = "SELECT * FROM users WHERE id=$id";
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