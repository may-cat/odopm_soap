# Соединение с ОДОПМ
Данный репозиторий иллюстрирует то, как работать с ЕГАС ОДОПМ на языке php. Реквизиты, ясное дело, приведены не валидные. =)
Разумеется, Вам также пригодится документ под названием "Описание сервиса взаимодействия с ЕГАС ОДОПМ"
(выложить который на гитхаб невозможно по политическим причинам)

## Результаты работы приведённого скрипта:
***

### Список функций:

<pre><code>
$arResult
Array
(
    [0] => setDataResponse setData(setData $parameters)
    [1] => getCatalogListResponse getCatalogList(getCatalogList $parameters)
    [2] => getCatalogItemsResponse getCatalogItems(getCatalogItems $parameters)
    [3] => setDataInResponse setDataIn(setDataIn $parameters)
    [4] => getUserBySessionResponse getUserBySession(getUserBySession $parameters)
    [5] => getAllDictResponse getAllDict(getAllDict $parameters)
    [6] => getDictItemResponse getDictItem(getDictItem $parameters)
    [7] => getCatalogSpecResponse getCatalogSpec(getCatalogSpec $parameters)
)
</code></pre>

### Список каталогов, доступных пользователю

<pre><code>
$arResult
stdClass Object
(
    [ehdCatalogs] => stdClass Object
        (
            [ehdCatalog] => stdClass Object
                (
                    [id] => 3
                    [fullName] => Один из справочников
                    [technicalName] => Один из справочников
                    [shortName] => Один из справочников
                    [accountingObject] => Тут будет любой текст, потому что это пример
                    [keywords] => тест, пример
                    [vid] => Справочник (основные атрибуты объекта)
                    [type] => Городской межотраслевой (межведомственный)
                    [period] => Ежеквартально
                    [hasGeo] => 1
                    [categories] => Культура
                    [oiv] => Департамент информационных технологий города Москвы
                )

        )

)
</code></pre>

### Список справочников

<pre><code>
$arResult
stdClass Object
(
    [ehdDictionaries] => stdClass Object
        (
            [ehdDictionary] => Array
                (
                    [0] => stdClass Object
                        (
                            [id] => 59
                            [name] => ОДХ. Категория улицы
                            [total] => 24
                        )

                    [1] => stdClass Object
                        (
                            [id] => 60
                            [name] => Справочник округов
                            [total] => 12
                        )

                    .............
                )

        )

)
</code></pre>


### Элементы каталога

<pre><code>
$arResult
stdClass Object
(
    [ehdDictionaryItems] => stdClass Object
        (
            [ehdDictionary] => Array
                (
                    [0] => stdClass Object
                        (
                            [id] => 0
                            [parent_id] => 
                            [name] => Нет данных
                            [enName] => 
                        )

                    [1] => stdClass Object
                        (
                            [id] => 1
                            [parent_id] => 
                            [name] => Боковые проезды главных магистралей
                            [enName] => 
                        )
                        ...
                )
        )
)
</code></pre>

***