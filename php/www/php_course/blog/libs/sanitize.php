<?php

function sanitizeAddError($attribute, $message, array &$errors) // Вспомогательная функция, передаем ошибки.
{
    $errors[$attribute] = strtr($message, [
        '{attribute}' => $attribute,
    ]);
}

function sanitize(array $data, array $rules, array &$errors = null)
{
    $errors = $errors ?? [];

    foreach ($rules as $key => $rule){ //foreach работает с копией массива!
        $rule['flags'] = ($rule['flags'] ?? 0) | FILTER_NULL_ON_FAILURE; //Не перезаписывать флаги.

        $rule['required'] = (bool) ($rules['required'] ?? false); //Если передали то берем значение, иначе false

        $rule['message'] = $rule['message'] ?? '';

        $rules[$key] = $rule; //присваиваем новое значение вне foreach
    }

    $data = array_map('tri
    m', $data);
    $filteredData =  filter_var_array($data, $rules);

    foreach ($filteredData as $attribute => $value) {
        $rule = $rules[$attribute];

        //проверка на некорректность введенных значений
        if (is_null($value)){
            if (
                isset($data[$attribute]) ||
                $data[$attribute] ||
                ($data[$attribute] === '' && $rule['required'])
            ) {
                sanitizeAddError (
                    $attribute,
                    $rule['message'] ?: 'не корректное значение в поле "{attribute}."',
                    $errors
                );
                //не корректное значение в поле '{attribute}.'
            }
        }

        if (is_string($value)){ //очищаем пустую строку
            $value = trim($value);
            $filteredData[$attribute] = $value;

            if (!$value && $rule['required']){
                sanitizeAddError (
                    $attribute,
                    $rule['message'] ?: 'не заполнено обязательное поле "{attribute}."',
                    $errors
                );
                // Не заполнено обязательное поле '{attribute}.'
            }
        }
    }

    return $filteredData;
}