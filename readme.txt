﻿=== MobiDevices Translate URL ===
Contributors: 1000.tech
Donate link: https://1000.tech/ru
Tags: translation, translit, transliteration, english, language, ukrainian, cyrillic, title, URL, SEO, slugs, MobiDevices, 1000.tech
Requires at least: 3.3
Tested up to: 5.4.1
Stable tag: 5.1
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Перевод ярлыков (URL) записей, рубрик и медиафайлов на английский язык

== Description ==

SEO-плагин для автоматического перевода ярлыков (URL) и названий медиафайлов с любого языка (в том числе русского и украинского) на английский, разработанный СМИ <a href="https://mobidevices.ru">MobiDevices</a> и компанией <a href="https://1000.tech/ru">1000.tech</a>.

<strong>MobiDevices Translate URL</strong> работает на основе Яндекс.Переводчика, что обеспечивает отличное качество перевода с мгновенной скоростью.

Плагин удаляет из полученных URL английские предлоги и артикли, которые не влияют на продвижение, однако увеличивает длину ссылок.

<strong>MobiDevices Translate URL</strong> правильно форматирует переведенный URL и очень легкий в установке и работе.

<h3>Установите наши другие плагины:</h3>
<ul>
<li><a href="https://wordpress.org/plugins/mobidevices-search-url/">MobiDevices Search URL</a></li>
<li><a href="https://wordpress.org/plugins/mobidevices-pageviews/">MobiDevices PageViews</a></li>
</ul>

== Frequently Asked Questions ==

= Когда работает перевод ссылки? =
<strong>В классическом редакторе:</strong>
<ol>
<li>при любом сохранении черновика;</li>
<li>во время ручного редактирования поля «Постоянная ссылка»;</li>
<li>во время публикации.</li>
</ol>
<strong>В блочном редакторе:</strong>
<ol>
<li>во время публикации;</li>
<li>после предварительного сохранения черновика и ручного ввода ярлыка URL, после чего нужно нажать кнопку «Сохранить».</li>
</ol>

= Где получить API-ключ? =
Собственный API-ключ можно получить по ссылке <a href="https://translate.yandex.ru/developers/keys">https://translate.yandex.ru/developers/keys</a>. Для работы переводов вам нужно сохранить API-ключ в настройках плагина.

= Не работает перевод! =
MobiDevices Translate URL может конфликтовать с плагинами для транслитерации, поэтому их нужно выключить перед использованием MTU.

Также проверьте, что ввели правильный API-ключ. Если плагин работал, но потом перестал, то вероятно вы исчерпали лимит переводов – запросите новый ключ.

== Installation ==

<ol>
<li>Установите плагин <strong>MobiDevices Translate URL</strong> через магазин WordPress или поместить файл плагина в папку <em>/wp-content/plugins/</em>;</li>
<li>Получите личный API-ключ для Яндекс.Переводчика по этой ссылке <a href="https://translate.yandex.ru/developers/keys">translate.yandex.ru/developers/keys</a>;</li>
<li>В WordPress зайдите в «Настройки => MobiDevices Translate UR»;</li>
<li>В поле введите API-ключ, полученный во втором пункте;</li>
<li>Активируйте плагин;</li>
<li>Наслаждайтесь автоматическим переводом URL и названий медиафайлов!</li>
</ol>

== Screenshots ==

== Upgrade Notice ==

Общее улучшение производительности

== Changelog ==

= 5.3 =
Улучшение производительности

= 5.2 =
Добавление отдельной страницы настройки API-ключа

= 5.1 =
Исправление инструкции

= 5.0 =
Оптимизация исходного кода и исправление работы с блочным редактором

= 4.1 =
Оптимизация исходного кода

= 4.0 =
Переработка алгоритма переводов, улучшена производительность

= 3.5 =
Изменение алгоритма

= 3.2.5 =
Улучшена производительность

= 3.1.5 =
Добавлена поддержка WordPress 4.1, уменьшена нагрузка на сервер

= 3.1.3 =
Исправлены мелкие недочеты

= 3.1.1 =
Общее улучшение производительности

= 3.1 =
Добавлена поддержка перевода URL при публикации через XML-RPC

= 3.0 =
Теперь переводится любой язык ярлыков

= 2.8 =
Удаление предлогов из URL, которые не нужны для SEO

= 2.5 =
Добавлен перевод медиафайлов, ускорение работы плагина

= 2.1.1 =
Исправлены мелкие недочеты

= 2.1 =
Добавлена поддержка транслитерации медиафайлов

= 2.0 =
Оптимизация кода, ускорение работы плагина на 150%

= 1.0 =
Создание плагина