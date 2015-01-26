<?

error_reporting(E_ALL);
$soapUrl = "http://op.mos.ru/EHDWS/soap?wsdl";
$soapLogin = "your_login";
$soapPassword = 'password';
if (file_exists("./passwords.php"))
    include "./passwords.php";

// Создаём объект для работы с ОДОПМ
try {
    $client = new \SoapClient(
        $soapUrl,
        array(
            'login' => $soapLogin,
            'password' => $soapPassword,
            'exceptions' => true,
            'trace' => 1,
            'stream_context' => stream_context_create(array(
                'http' => array(
                    'header' => "
                            Username: $soapLogin\r\n
                            Password: $soapPassword\r\n"
                )))
        )
    );
} catch (Exception $e) {
    echo "exception: ",$e->getMessage();
}

// ДЕМО: получаем список функций
echo "<h1>Список функций:</h1>";
$arResult = array();
try {
    $arResult = $client->__getFunctions();
} catch (Exception $e) {
    echo "Exception: ",$e->GetMessage();
}
echo '$arResult<pre>';
print_r($arResult);
echo "</pre>";

// ДЕМО: получаем список каталогов, доступных пользователю
echo "<h1>Список каталогов, доступных пользователю</h1>";
$arResult = array();
try {
    $arResult = $client->getCatalogList();
} catch (Exception $e) {
    echo "Exception: ",$e->GetMessage();
}
echo '$arResult<pre>';
print_r($arResult);
echo "</pre>";


// ДЕМО: получаем список каталогов, доступных пользователю
echo "<h1>Список справочников</h1>";
$arResult = array();
try {
    $arResult = $client->getAllDict();
} catch (Exception $e) {
    echo "Exception: ",$e->GetMessage();
}
echo '$arResult<pre>';
print_r($arResult);
echo "</pre>";


// ДЕМО: получаем элементы каталога
echo "<h1>Элементы каталога</h1>";
$arResult = array();
try{
    $arResult = $client->getDictItem(array(
        'dictionaryId'=>59,
        'Start'=>0,
        'End'=>23
    ));
} catch (Exception $e) {
    echo "Exception: ",$e->GetMessage();
}
echo '$arResult<pre>';
print_r($arResult);
echo "</pre>";
