<?php
/**
*
* @package phpBB Extension - Youtube Videos Gallery
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Author _Vinny_ - http://www.suportephpbb.com.br
* @Translation Anvar - http://bb3.mobi
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'VIDEO_INDEX'				=> 'Видео галерея',
	'VIDEO_SELECT_CAT'			=> 'Выбрать категорию',
	'VIDEO_SUBMIT'				=> 'Новое видео',
	'VIDEO_URL'					=> 'Указать URL Видеоролика',
	'VIDEO_URL_EXPLAIN'			=> '',
	'VIDEOS_TIP'				=> 'Помощь и предложения',
	'VIDEOS_TIPS_PART_01'		=> 'Перейдите на <a href="https://www.youtube.com/">Youtube.com</a> и выберите видео которое Вам понравилось.',
	'VIDEOS_TIPS_PART_02'		=> 'Скопируйте URL видеоролика, вставьте его в поле выше и нажмите отправить.',
	'VIDEOS_TIPS_PART_03'		=> 'Ссылки принимаются с <strong>youtube.com</strong> и <strong>youtu.be</strong>, а также расширения.',
	'VIDEOS_TIPS_PART_04'		=> 'Внимание',
	'VIDEOS_TIPS_PART_05'		=> 'Эта страница не для загрузки видеороликов с Youtube!',
	'VIDEO_UNAUTHED'			=> 'Вы не авторизованы для просмотра этого видеоролика.',
	'INVALID_VIDEO'				=> 'Выбранного видеоролика не существует.',
	'VIDEO'						=> 'Видео',
	'VIDEO_EXPLAIN'				=> 'Посмотреть галерею видеороликов с Youtube',
	'VIEW_CAT'					=> 'Просмотр категории',
	'VIEW_VIDEO'				=> 'Просмотр видеороликов',
	'VIDEO_CAT'					=> 'Категория',
	'VIDEO_CATS'				=> 'Категории',
	'VIDEO_CREATED'				=> 'Видеоролик было успешно добавлен.',
	'VIDEO_DATE'				=> 'Дата',
	'VIDEO_DELETE'				=> 'Удалить видеоролик',
	'VIDEO_DELETED'				=> 'Этот видеоролик было успешно удалён.',
	'VIDEO_LAST'				=> 'Последние видео',
	'PAGE_RETURN'				=> '%sВернуться к странице видеороликов%s',
	'COMMENTS'					=> 'Комментарии',
	'POST_COMMENT'				=> 'Оставить комментарий',
	'COMMENT_CREATED'			=> 'Ваш комментарий был успешно добавлен.',
	'VIDEO_CMNT_SUBMIT'			=> 'Добавить новый коммент',
	'NO_VIDEOS_COMMENTS'		=> 'Нет комментариев к данному видео',
	'VIDEO_COMMENT'				=> 'Комментарий',
	'VIDEO_COMMENTS'			=> 'Комментарии',
	'COMMENT_DELETED_SUCCESS'	=> 'Комментарий успешно удалён.',
	'DELETE_COMMENT_CONFIRM'	=> 'Вы уверены, что хотите удалить комментарий?',
	'DELETE_VIDEO'				=> 'Вы уверены, что хотите удалить видеоролик?',
	'MY_VIDEOS'					=> 'Мои видеоролики',
	'NEED_VIDEO_URL'			=> 'Вы должны ввести <strong>url</strong> для этого видеоролика.',
	'NEWEST_VIDEOS'				=> 'Новые видеоролики',
	'NO_VIDEOS'					=> 'На этой странице нет видеороликов.',
	'NO_CAT_VIDEOS'				=> 'В данной категории нет видео роликов.',
	'NO_USER_VIDEOS'			=> 'Данный пользователь не загрузил видео, либо не существует.',
	'NO_CATEGORIES'				=> 'Страница без категории.',
	'NO_TITLE'					=> 'Страница не имеет названия.',
	'RETURN_TO_VIDEO_INDEX'		=> 'Вернуться к видео галереи',
	'SEARCH_VIDEOS'				=> 'Поиск видео',
	'TOTAL_CATEGORIES_OTHER'	=> 'Категорий <strong>%d</strong>',
	'TOTAL_CATEGORY_ZERO'		=> 'Категорий <strong>0</strong>',
	'TOTAL_VIDEOS'				=> 'Всего видеороликов',
	'TOTAL_VIDEOS_OTHER'		=> 'Видеороликов <strong>%d</strong>',
	'TOTAL_VIDEO_ZERO'			=> 'Видеороликов <strong>0</strong>',
	'TOTAL_VIEWS_OTHER'			=> 'Просмотрели <strong>%d</strong>',
	'TOTAL_VIEW_ZERO'			=> 'Просмотров <strong>0</strong>',
	'TOTAL_COMMENTS_OTHER'		=> 'Комментариев <strong>%d</strong>',
	'TOTAL_COMMENT_ZERO'		=> 'Комментариев <strong>0</strong>',
	'USER_VIDEOS'				=> 'Поиск видео пользователя',
	'USER_VIDEOS_EXPLAIN'		=> 'Показать все',
	'NO_KEY_ADMIN'				=> 'Для того, чтобы использовать видео галерею, необходимо настроить <strong>Google Public API key</strong>, перейдите в администраторский раздел и следуйте инструкциям.',
	'NO_KEY_USER'				=> 'Уважаемый пользователь, галерея будет недоступна. Пожалуйста, вернитесь позже.',
	'COMMENTS_DISABLED'			=> 'Комментарии отключены.',
	'DELETE_COMMENT'			=> 'Удалить комментарий',

	// ACP
	'ACP_VIDEO_GENERAL_SETTINGS'					=> 'Общие настройки',
	'ACP_VIDEO_ENABLE'								=> 'Включить видео',
	'ACP_VIDEO_CATEGORY'							=> 'Категории видео',
	'ACP_VIDEO_HEIGHT'								=> 'Высота видео',
	'ACP_VIDEO_HEIGHT_EXPLAIN'						=> 'Укажите высоту видео.',
	'ACP_VIDEO_WIDTH'								=> 'Ширина видео',
	'ACP_VIDEO_WIDTH_EXPLAIN'						=> 'Укажите ширину видео.',
	'ACP_VERSION_CURRENT'							=> 'Версия',
	'ACP_GOOGLE_KEY'								=> 'Google Public API key',
	'ACP_GOOGLE_KEY_EXPLAIN'						=> 'Для того, чтобы использовать видео галерею, необходимо получить <strong>Google Public API key</strong>. Посетите <strong><a href="https://console.developers.google.com/">Google Developers Console</a></strong> и получите ключ. Если у вас есть проблемы, чтобы сгенерировать ключ, прочитайте инструкцию <strong><a href="https://developers.google.com/console/help/new/#generatingdevkeys">Google Developers Console Help: API keys</a></strong>. Пока вы не добавили рабочий ключ, галерея будет недоступна.',
	'ACP_VIDEOS_PER_PAGE'							=> 'Видео на странице',
	'ACP_COMMENTS_PER_PAGE'							=> 'Комментариев на странице',
	'ACP_COMMENTS_PER_PAGE_EXPLAIN'					=> '<em>По умолчанию 10 комментариев</em>.',
	'ACP_ENABLE_COMMENTS'							=> 'Включить комментарии',
	'ACP_ENABLE_COMMENTS_EXPLAIN'					=> 'Отображение комментариев к видео и возможность добавлять новые комментарии.',
	'ACP_ENABLE_VIDEO_STATICS_ON_INDEX'				=> 'Включить статистику',
	'ACP_ENABLE_VIDEO_STATICS_ON_INDEX_EXPLAIN'		=> 'Включение статистики видео галереи на главной.',
	'ACP_ENABLE_VIDEO_ON_INDEX'						=> 'Видео на главной',
	'ACP_ENABLE_VIDEO_ON_INDEX_EXPLAIN'				=> 'Включить последние видео на главной странице форума.',
	'ACP_ENABLE_VIDEO_ON_INDEX_LOCATION'			=> 'Видео над списком форумов',
	'ACP_ENABLE_VIDEO_ON_INDEX_LOCATION_EXPLAIN'	=> 'В противном случае блок с видео будет на главной внизу.',
	'ACP_VIDEO_ON_INDEX_VALUE'						=> 'Количество последние видео',
	'ACP_VIDEO_ON_INDEX_VALUE_EXPLAIN'				=> 'Сколько видеороликов выводить на главной странице форума.<br /><em>По умолчанию 6</em>.',

	// ACP Categories
	'ACP_CATEGORY_CREATED'			=> 'Категория была успешно добавлена.',
	'ACP_CATEGORY_DELETE'			=> 'Вы уверены, что хотите удалить эту категорию?',
	'ACP_CATEGORY_DELETED'			=> 'Категория была успешно удалена',
	'ACP_CATEGORY_EDIT'				=> 'Редактировать категорию',
	'ACP_CATEGORY_UPDATED'			=> 'Категория успешно обновлена!',
	'ACP_VIDEO_CAT_ADD'				=> 'Создать категорию',
	'ACP_VIDEO_CAT_TITLE'			=> 'Название категории',
	'ACP_VIDEO_CAT_TITLE_EXPLAIN'	=> '',
	'ACP_VIDEO_CAT_TITLE_TITLE'		=> 'Вы должны ввести <strong>название</strong> категории.',
	'ACP_VIDEO_OVERVIEW'			=> 'Категории видеороликов',
	'ACP_VIDEO_OVERVIEW_EXPLAIN'	=> 'Здесь Вы можете управлять категориями видеороликов.',
	'ACP_VIDEO_TITLE_EXPLAIN'		=> '',
	'ACP_TITLE_DELETE'				=> 'Действительно удалить этот заголовок?',
	'ACP_TITLE_DELETED'				=> 'Заголовок успешно ликвидирован',

	// Install
	'INSTALL_TEST_CAT'		=> 'Без категории',

	// View Video
	'FLASH_IS_OFF'			=> '[flash] <em>Выключен</em>',
	'FLASH_IS_ON'			=> '[flash] <em>Включён</em>',
	'VIDEO_ADD_BY'			=> 'Добавил',
	'VIDEO_BBCODE'			=> 'BBcode',
	'VIDEO_EMBED'			=> 'Вставить видео',
	'VIDEO_LINK'			=> 'Ссылка на видео',
	'VIDEO_LINKS'			=> 'Ссылки',
	'VIDEO_LINK_YOUTUBE'	=> 'Ссылка на видео Youtube',
	'VIDEO_VIEWS'			=> 'Просмотры',

	// Youtube video text
	'VIDEO_AUTHOR'			=> 'Автор',
	'VIDEO_WATCH'			=> 'Смотреть на Youtube',

	//Pagination
	'LIST_VIDEO'			=> 'Один видеоролик',
	'LIST_VIDEOS'			=> 'Видеороликов %1$s',
	'LIST_COMMENT'			=> 'Один комментарий',
	'LIST_COMMENTS'			=> 'Комментариев %1$s',
));