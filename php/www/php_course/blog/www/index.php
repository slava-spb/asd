<?php
$posts = [
    [
        'id' => 1,
        'title' => 'Запись №1',
        'content' => 'Текст записи №1',
        'created' => 564654,
        'updated' => 56478321,
    ],
    [
        'id' => 2,
        'title' => 'Запись №2',
        'content' => 'Текст записи №2',
        'created' => 2342,
        'updated' => 456,
    ],
    [
        'id' => 3,
        'title' => 'Запись №3',
        'content' => 'Текст записи №3',
        'created' => 2341232,
        'updated' => 412356,
    ],
];
?>

<!DOCTYPE html >
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>блог на php</title>
</head>

<body>

    <?php  foreach ($posts as $post): ?>

        <section class="post">
            <header>
                <h2>
                    <a href="show.php?id=<?= $post['id'] ?>">
                        <?= $post['title'] ?>
                    </a>
                </h2>
                <ul>
                    <li>Создан <?php echo date ('Y-m-d H-m-s', $post['created'])?></li>
                    <li>Обновлен <?= $post['updated'] ?> </li>
                </ul>
            </header>
            <div>
                <?= $post['content'] ?>
            </div>
            <footer></footer>
        </section>
<!-- Заканчиваем foreach -->
    <?php endforeach; ?>



</body>
</html>
