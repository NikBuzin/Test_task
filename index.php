<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>IT-Buro</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<div class="Background">
    <div class="Cloud"></div>
    <div class="main_block">
        <?php
        require_once ('ArrayWorker.php');
        $obj = new ArrayWorker();
        $obj->dump();
        ?>
        <div class="head_href">
            <a href="#">Junior</a>  | <a href="#">Middle</a> | <a href="#">Senior</a>
        </div>
        <div class="title">
            Тестовое задание для Junior веб-разработчика
        </div>
        <div class="introduction">
            Перед началом выполнения тестового задания, пожалуйста, убедитесь, что данная вакансия открыта.
            Ознакомиться со списком актуальных вакансий можно по ссылке:
            <a href="https://voronezh.hh.ru/employer/1132736">https://voronezh.hh.ru/employer/1132736</a>
        </div>
        <div class="text_left">
        Компания IT-Buro специализируется на создании и развитии современных интернет-проектов, сервисов и
        решений на платформе "1С-Битрикс". Мы прекрасно осознаем преимущества и недостатки платформы, но высокое
        качество наших услуг и соответствующий высокий спрос, позволяет нам более 10 лет прекрасно себя чувствовать
        на рынке IT-услуг, работая только на 1С-Битрикс.
        </div>
        <div class="text_right">
        У нас дружная команда и прекрасный офис в стиле лофт в одном из самых красивых зданий Воронежа. Для всех
        сотрудников созданы комфортные условия труда: работаем исключительно на технике Apple, ведущие программисты
        имеют в своем распоряжении iMac Retina и AirPods, а освещением и кондиционером в офисе управляет
        Яндекс.Алиса =)
        </div>
        <div class="logo_text">
            Внимание: в данном задании нет коммерческой составляющей, оно рассчитано исключительно на проверку
            Ваших базовых знаний (HTML+CSS). На практике заниматься версткой Вам не придется, но для успешного
            развития в должности backend-разработчика, frontend надо знать на базовом уровне и понимать как он устроен.
        </div>
        <div class="BX_logo"></div>
        <div class="Line"></div>
        <div class="TextCopyright">© 2009-2019 IT-Buro</div>
    </div>
</div>
</body>
</html>