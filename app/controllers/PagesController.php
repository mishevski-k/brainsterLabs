<?php
    Class PagesController extends Controller {
        
        public function __construct() {
            $this->pageModel = $this->model('PageModel');
        }

        public function index() {

            $projects = $this->pageModel->getProjects();

            $data = [
                'projects' => $projects
            ];

            $this->view('/pages/home', $data);
        }

        public function hire() {

            $data = [
                'nameError' => '',
                'companyError' => '',
                'emailError' => '',
                'phoneError' => '',
                'studentTypeError' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] === "POST") {
                $_POS = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                if(!isset($_POST['type'])) {
                    $_POST['type'] = "";
                }

                $data = [
                    'name' => $_POST['name-and-surname'],
                    'company' => $_POST['name-of-company'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'studentType' => $_POST['type'],
                    'nameError' => '',
                    'companyError' => '',
                    'emailError' => '',
                    'phoneError' => '',
                    'studentTypeError' => ''
                ];

                $nameValidation = "/^[a-zA-z ]*$/";

                if(empty($data['name'])) {
                    $data['nameError'] = "Please enter name and surname";
                } elseif(!preg_match($nameValidation, $data['name'])) {
                    $data['nameError'] = "You can use only letters from a-z";
                }

                if(empty($data['company'])) {
                    $data['companyError'] = "Please enter company name";
                } elseif(!preg_match($nameValidation, $data['company'])) {
                    $data['nameError'] = "You can use only letters from a-z";
                }

                if(empty($data['email'])) {
                    $data['emailError'] = "Please enter email";
                } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $data['emailError'] = 'Please enter valid email';
                } 

                $phoneValidation = "/^[0-9+ ]*$/";

                if(empty($data['phone'])) {
                    $data['phoneError'] = "Please enter phone";
                }elseif(strlen($data['phone']) < 9){
                    $data['phoneError'] = "Phone number entered was to short";
                }elseif(!preg_match($phoneValidation, $data['phone'])) {
                    $data['phoneError'] = "Please enter valid phone number";
                }

                if(empty($data['studentType'])) {
                    $data['studentTypeError'] = "Please select student type";
                }

                if(empty($data['nameError']) && empty($data['companyError']) && empty($data['emailError']) && empty($data['phoneError']) && empty($data['studentTypeError'])) {
                    if($this->pageModel->hireStudent($data)) {
                        header("location: ". URLROOT ."/pages/index");
                    } else {
                        die("An error has occured");
                    }
                    
                    
                }
                
                $this->view('/pages/hire', $data);
            } 

            $this->view('/pages/hire', $data);
        }
    }
?>