<?php
// Стиль таблицы
echo "<style>
    table {
        border-collapse: collapse;
    }
    td {
        width: 50px;
        height: 50px;
        text-align: center;
        font-size: 18px;
    }
    .prime {
        background-color: red;
        color: white;
    }
    .white {
        background-color: white;
    }
</style>";

echo "<table border='1'>";

// Функция для проверки простоты числа
function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

// Генерация таблицы с результатами умножения
for ($i = 1; $i <= 100; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;

        // Проверка, что число в диапазоне от 10 до 40 и является простым
        if ($result >= 10 && $result <= 40 && isPrime($result)) {
            echo "<td class='prime'>$result</td>";  // Если простое и в диапазоне, выделяем красным
        } else {
            echo "<td class='white'>$result</td>";  // Иначе оставляем белым
        }
    }
    echo "</tr>";
}

echo "</table>";
?>