<?php
// Задание 3. Создайте форму для добавления отзыва. Создайте массив для хранения фиктивных отзывов. При добавлении нового отзыва обновляйте массив и выводите все отзывы на странице. 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $review = $_POST['review'];
  $rating = $_POST['rating'];
// Проверка данных
if (empty($name) || empty($review) || empty($rating)) {
  echo "Пожалуйста, заполните все поля.";
  exit;
}
// Добавление отзыва в массив
 $reviews[] = ['name' => $name, 'review' => $review, 'rating' => $rating];
 // Вывод всех отзывов
 echo "<h2>Отзывы:</h2>";
 foreach ($reviews as $review) {
 echo "Имя: " . $review['name'];
 echo "Отзыв: " . $review['review'];
 echo "Рейтинг: " . $review['rating'];
 }
} else {
 echo "Форма не была отправлена.";
}