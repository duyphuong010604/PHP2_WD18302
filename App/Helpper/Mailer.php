<?php

namespace App\Helpper;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class Mailer
{
    protected $mail;
    public function __construct($email, $name, $passwordNew, $username)
    {
        $this->mail = new PHPMailer(true);
        $this->Content($email, $name, $passwordNew, $username);
    }

    public function Content($email, $name, $passwordNew, $username)
    {
        // ... Code xử lý nội dung email
        try {
            $this->mail->SMTPDebug = 0; //0,1,2: chế độ debug
            $this->mail->isSMTP();
            $this->mail->CharSet = "utf-8";
            $this->mail->Host = 'smtp.gmail.com'; //SMTP servers
            $this->mail->SMTPAuth = true; // Enable authentication
            $this->mail->Username = 'voduyphuong13@gmail.com'; // SMTP username
            $this->mail->Password = 'dvggfcuwdrryrgao'; // SMTP password
            $this->mail->SMTPSecure = 'ssl'; // encryption TLS/SSL 
            $this->mail->Port = 465; // port to connect to                
            $this->mail->setFrom('voduyphuong13@gmail.com', 'Tiệm Cà Phê Adonas');
            $this->mail->addAddress($email, $name);
            $templateFile = __DIR__ . '/mail.php';
            $variableValue1 = $passwordNew;
            $variableValue2 = $username;
            $templateContent = file_get_contents($templateFile);
            $templateContent = str_replace('{variable1}', $variableValue1, $templateContent);
            $templateContent = str_replace('{variable2}', $variableValue2, $templateContent);
            // Đường dẫn tới thư mục chứa hình ảnh cần đính kèm
            // Đường dẫn tương đối tới thư mục chứa hình ảnh cần đính kèm
            $imageFolder = __DIR__ . '/images';
            // Lấy danh sách tất cả các tệp hình ảnh trong thư mục
            $files = scandir($imageFolder);
            foreach ($files as $file) {
                if (in_array(pathinfo($file, PATHINFO_EXTENSION), array('jpg', 'jpeg', 'png', 'gif'))) {
                    // Đính kèm hình ảnh vào email
                    $this->mail->addAttachment($imageFolder . '/' . $file);
                }
            }
            $this->mail->isHTML(true);
            $this->mail->Subject = 'Tôi xin gửi mail này cho bạn về mật khẩu mới vừa được cập nhật';
            $this->mail->Body = $templateContent;
            $this->mail->smtpConnect(
                array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                )
            );
            $this->mail->send();
        } catch (Exception $e) {
            $this->mail->ErrorInfo;
        }
        return $this;
    }
}