<?php
//  зАДАНИЕ 2. Создайте форму с полями: номер заказа, причина отмены (textarea). Отправка данных методом POST. Обрабатывайте данные, выводя номер заказа и причину отмены. Используйте htmlspecialchars() для защиты данных от XSS-атак.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $order_id = htmlspecialchars($_POST['order_id']);
 $reason = htmlspecialchars($_POST['reason']);
 // Проверка данных
 if (empty($order_id) || empty($reason)) {
 echo "Пожалуйста, заполните все поля.";
 exit;
 }
 // Вывод данных
 echo "Номер заказа: " . $order_id . "\n";
 echo "Причина отмены: " . $reason;
} else {
 echo "Форма не была отправлена.";
}