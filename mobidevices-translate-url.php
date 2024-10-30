<?php
/*
Plugin Name: MobiDevices Translate URL
Plugin URI: https://1000.tech/en
Description: Плагин для автоматического перевода русских ярлыков (URL) на английский язык, разработанный порталом <a href="http://mobidevices.ru">MobiDevices</a> и компанией <a href="1000.tech">1000.tech</a>.
Version: 5.3
Author: 1000.tech
Author URI: https://1000.tech/en
Author Email: info@1000.tech
*/

function md_translate ($title) {
    $ya_api = get_option('ya_api_key');
    $locale = preg_replace('/\_.*/', '', get_locale());
    $query = http_build_query(
        array(
            'key' => $ya_api,
            'text' => $title,
            'lang' => $locale.'-en'
        )
    );
    $response = file_get_contents('https://translate.yandex.net/api/v1.5/tr.json/translate?'.$query);

    // False
    $status = substr($http_response_header[0], 9, 3);
    if ($status != 200) {
        return $title;
    }

    // True
    $data = json_decode($response, true);
    $text = $data['text'][0];
    $place = array(
        ' on the '=>'-',
        'on the '=>'-',
        ' on the'=>'-',
        ' of the '=>'-',
        ' will '=>'-',
        ' the '=>'-',
        'the '=>'',
        ' be '=>'-',
        ' on '=>'-',
        ' of '=>'-',
        ' in '=>'-',
        ' is '=>'-',
        ' to '=>'-',
        ' a '=>'-',
    );
    $text = str_replace(array_keys($place), $place, $text);
    return $text;
}

function md_filename($title){
    $file = substr(strrchr($title,'.'),1);
    $title = str_replace('.'.$file,'',$title);
    $text = md_translate($title);
    $text = $text.'.'.$file;
    return $text;
}

if ('POST' == $_SERVER['REQUEST_METHOD']){
    add_action('sanitize_title','md_translate', 9);
    add_action('sanitize_file_name','md_filename');
}

function mtu_options_page() {?>
    <div class="wrap">
        <h2>Настройки MobiDevices Translate URL</h2>
        <p>
            Введите API-ключ Яндекс.Переводчика, полученный по адресу
            <a href="https://translate.yandex.ru/developers/keys" target="_blank">
                translate.yandex.ru/developers/keys</a>:
        </p>
        <?php
        if ($_POST['mtu_standard']) {
            update_option('mtu_standard', $_POST['mtu_standard']);
            update_option('ya_api_key', $_POST['ya_api_key']);
            echo '<div class="updated"><p>API-ключ сохранён!</p></div>'; } ?>
        <form method="post">
            <?php
            $mtu_standard = get_option('mtu_standard');
            $ya_api_15 = get_option('ya_api_key'); ?>
            <select name="mtu_standard" style="display: none">
                <option>Yandex Translate</option>
            </select>
            <input type="text"
                   style="width: 100%"
                   name="ya_api_key"
                   placeholder="Вставьте в это поле API-ключ"
                   required=""
                   value="<?php echo $ya_api_15;?>">
            <p>
                <input type="submit" value="Сохранить">
            </p>
        </form>
    </div>
    <?php
}

// Добавляем опции настроек
function mtu_add_menu() {
    add_options_page('MobiDevices Translate URL', 'MobiDevices Translate URL', 8, __FILE__, 'mtu_options_page');
}
add_action('admin_menu', 'mtu_add_menu');