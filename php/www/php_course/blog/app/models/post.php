<?php
const ENTITY_POST = 'post';
//получение всех постов
function postGetAll()
{
    $posts = storageGetAll(ENTITY_POST);
    //a - post1, b - post2
    uasort($posts, function ($post1, $post2) {  return $post2['created'] <=> $post1['created']; });
    return $posts;
}
//получает id из бд
function postGetById($id)
{
    return storageGetItemById(ENTITY_POST, $id);
}
//post придёт из html формы
function postSave( array  $post, array &$errors = null)
{
    //очистка и валидация данных
    $post = sanitize($post, postSanitizeRules(), $errors);

    if ($errors)
    {
        return $post;
    }
    $status = storageSaveitem(ENTITY_POST, $post);
    if (!$status)
    {
        $errors['db'] = 'Не удалось сохранить данные в базу';
    }
    return $post;
}

function postSanitizeRules()
{
    return [
        'id' => [
            'filter' => FILTER_VALIDATE_INT,
            'option' => [
                'min_range' => 1,
            ]
        ],
        'title' => [
            'required' => true, //обязательное поле для заполнения
            'filter' => FILTER_SANITIZE_SPECIAL_CHARS,
        ],
        'content' => [
            'required' => true, //обязательное поле для заполнения
            'filter' => FILTER_SANITIZE_SPECIAL_CHARS,
            ],
    ];
}
?>