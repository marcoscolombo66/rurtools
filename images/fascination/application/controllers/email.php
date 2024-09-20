<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class email extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('email'); // Cargar la librería de email
        $this->load->helper(array('form', 'url')); // Cargar helpers
    }

    public function send_email() {
        // Configuración del servidor de correo
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'mail.libreviaje.com'; // Cambiar por tu servidor SMTP
        $config['smtp_user'] = 'admin@libreviaje.com'; // Cambiar por tu email
        $config['smtp_pass'] = '@Jero2022'; // Cambiar por tu contraseña
        $config['smtp_port'] = 587; // Puerto SMTP
        $config['mailtype'] = 'html';
        $config['charset'] = 'utf-8';
        $config['newline'] = "\r\n";

        $this->email->initialize($config);

        // Datos del formulario
        $fullname = $this->input->post('fullname');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $areas = $this->input->post('areas');
        
        $message = "
        Full name: ".$fullname."<br>
        Email: ".$email."<br><br>        
        Phone: ".$phone."<br><br>       
        Areas available to work in: ".$areas."<br><br>"        
        .$this->input->post('additional_info');


        // Configuración del email
        $this->email->from('admin@libreviaje.com', 'Marcos Colombo');
        $this->email->to("info@fascinationteam.com, marcoscolombo66@gmail.com, alejandro.sosa@codificardev.com.ar");
        $this->email->subject('Mail from page');
        $this->email->message('Hello,<br><br>'. $message);

        // Manejo de archivos adjuntos
        if (isset($_FILES['resume']['name']) && !empty($_FILES['resume']['name'])) {
            $filesCount = count($_FILES['resume']['name']);

            for ($i = 0; $i < $filesCount; $i++) {
                $_FILES['file']['name'] = $_FILES['resume']['name'][$i];
                $_FILES['file']['type'] = $_FILES['resume']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['resume']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['resume']['error'][$i];
                $_FILES['file']['size'] = $_FILES['resume']['size'][$i];

                $uploadPath = './uploads/'; // Directorio donde se guardarán los archivos
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf|doc|docx'; // Tipos de archivos permitidos
                $config['max_size'] = '2048'; // Tamaño máximo de archivo (en KB)

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file')) {
                    $fileData = $this->upload->data();
                    $filePath = $fileData['full_path'];
                    $this->email->attach($filePath); // Adjuntar archivo al email
                }
            }
        }

        // Enviar correo
        if ($this->email->send()) {
            echo '1';
        } else {
            echo '0';
            //echo $this->email->print_debugger();
        }
    }
}
