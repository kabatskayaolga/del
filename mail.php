
<?php
//if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['okpo'])&&$_POST['okpo']!="")&&(isset($_POST['email'])&&$_POST['email']!="")&&(isset($_POST['telephone'])&&$_POST['telephone']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они */
        $to = $_POST['mailtoAddr']; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = $_POST['title']; //Загаловок сообщения


        $message = '
        <html>
            <head>
                <title>'.$_POST['title'].'</title>
            </head>
            <body>
                <h4>'.$_POST['title'].'</h4>
                <hr>';

        if ( $_POST['company']!="") {
                $message .= '<p><b>Компания:</b> '.$_POST['company'].'</p>
                ';
        };
        if ( $_POST['accountingInformation']!="") {
                $message .= '<p><b>Бухгалтерские реквизиты:</b> '.$_POST['accountingInformation'].'</p>
                ';
        };      
        $message .= '
                <p><b>Имя:</b> '.$_POST['name'].'</p>
                <p><b>Телефон:</b> '.$_POST['phone'].'</p>
                <p><b>E-mail</b>: '.$_POST['email'].'</p>
                ';
        if ( $_POST['request']!="") {
                $message .= '<p><b>Запрос:</b> <br>'.$_POST['request'].'</p>
                ';
        };
        if ( $_POST['wishes']!="") {
                $message .= '<p><b>Пожелания:</b> '.$_POST['wishes'].'</p>
                ';
        };
        if ( $_POST['question']!="") {
                $message .= '<p><b>Вопрос:</b> '.$_POST['question'].'</p>
                ';
        };
        if ( $_POST['members']!="") {
                $message .= '<p><b>Участники:</b> '.$_POST['members'].'</p>
                ';
        };
        if ( $_POST['date']!="") {
                $message .= '<p><b>Дата:</b> '.$_POST['date'].'</p>
                ';
        };
        if ( $_POST['quantity_people']!="") {
                $message .= '<p><b>Количество людей:</b> '.$_POST['quantity_people'].'</p>
                ';
        };
        if ( $_POST['sale']!="") {
                $message .= '<p><b>Скидка:</b> '.$_POST['sale'].'</p>
                ';
        };
        if ( $_POST['dinner']!="") {
                $message .= '<p><b>Обед:</b> '.$_POST['dinner'].'</p>
                ';
        };
        if ( $_POST['advanced_training']!="") {
                $message .= '<p>'.$_POST['advanced_training'].'</p>
                ';
        };
        if ( $_POST['typeOfCourse']!="") {
                $message .= '<p><b>Формат обучения:</b> '.$_POST['typeOfCourse'].'</p>
                ';
        };
        if ( $_POST['status']!="" && $_POST['typeOfCourse'] == 'Открытый') {
                $message .= '<p><b>Статус:</b> '.$_POST['status'].'</p>
                ';
        };
        if ( $_POST['price']!="") {
                $message .= '<p><b>Цена:</b> '.$_POST['price'].'</p>
                ';
        };


        $message .=  '             
            </body>
        </html>'; //Текст нащего сообщения можно использовать HTML теги


        
        $name=$_POST['name'];
        $email=$_POST['email'];
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: $email \r\n"; //Наименование и почта отправителя
        $result = mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
echo 'Спасибо! Ваше письмо отправлено.'; 
//}
//
?>

