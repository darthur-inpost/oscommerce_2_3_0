<?php
/*
  $Id: polish.php,v 1.0 2003/06/08 08:14:17 ramroz Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Publikowane na zasadach licencji GNU General Public License

  T�umaczenie: Rafa� Mr�z ramroz@optimus.pl
  http://www.portalik.com

*/

// zobacz w katalogu $PATH_LOCALE/locale dost�pne lokalizacje..
// w RedHacie powinno by� 'pl_PL'
// we FreeBSD sprawd� 'pl_PL.ISO_8859-2'
// w Windows spr�buj 'pl', lub 'Polski'
setlocale(LC_TIME, 'pl_PL');

define('IMAGE_BUTTON_CREATE_ACCOUNT', 'Utw�rz Konto');
define('DATE_FORMAT_SHORT', '%d %m %Y');  // u�ywane przy strftime()
define('DATE_FORMAT_LONG', '%A, %d %B %Y'); // u�ywane przy strftime()
define('DATE_FORMAT', 'd/m/Y'); // u�ywane przy date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Zwraca sformatowan� dat� jako raw format
// $date powinna mie� format dd/mm/yyyy
// format raw date ma posta� YYYYMMDD, lub DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}


define('HEADING_CHECKOUT', 'Kasa');
define('TEXT_CHECKOUT_INTRODUCTION', 'Przejd� do kasy bez zak�adania konta. Wybieraj�c t� opcj� nie b�dziesz m�g� �ledzi� statusu zam�wienia ani przegl�da� historii swoich zakup�w.');

define('PROCEED_TO_CHECKOUT', 'Proceed to Checkout without Registering');

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'PLN');

// Global entries for the html tag
define('HTML_PARAMS','dir="LTR" lang="pl"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-2"><META NAME="Authors" CONTENT="www.oscommerce.pl , http://maq.w-s.pl');

// page title
define('TITLE', 'emarket');

// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', 'Utw�rz Konto');
define('HEADER_TITLE_MY_ACCOUNT', 'Moje Konto');
define('HEADER_TITLE_CART_CONTENTS', 'Zawarto�� koszyka');
define('HEADER_TITLE_CHECKOUT', 'Zam�wienie');
define('HEADER_TITLE_TOP', 'Top');
define('HEADER_TITLE_CATALOG', 'Katalog');
define('HEADER_TITLE_LOGOFF', 'Wyloguj si�');
define('HEADER_TITLE_LOGIN', 'Zaloguj si�');

define('BOX_HEADING_LOGIN_BOX_MY_ACCOUNT','Info o koncie');

define('LOGIN_BOX_MY_ACCOUNT','Moje konto');
define('LOGIN_BOX_ACCOUNT_EDIT','Edycja konta');
define('LOGIN_BOX_ADDRESS_BOOK','Ksi��ka adresowa');
define('LOGIN_BOX_ACCOUNT_HISTORY','Historia zam�wie�');
define('LOGIN_BOX_PRODUCT_NOTIFICATIONS','Powiadomienia');

define('LOGIN_BOX_PASSWORD_FORGOTTEN','Zapomnia�e� has�a?');


// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'wywo�a� od');

// text for gender
define('MALE', 'M�czyzna');
define('FEMALE', 'Kobieta');
define('MALE_ADDRESS', 'Pan');
define('FEMALE_ADDRESS', 'Pani');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// categories box text in includes/boxes/categories.php
define('BOX_HEADING_CATEGORIES', 'Kategorie');

// manufacturers box text in includes/boxes/manufacturers.php
define('BOX_HEADING_MANUFACTURERS', 'Producenci');

// whats_new box text in includes/boxes/whats_new.php
define('BOX_HEADING_WHATS_NEW', 'Nowo�ci');

// quick_find box text in includes/boxes/quick_find.php
define('BOX_HEADING_SEARCH', 'Wyszukiwanie');
define('BOX_SEARCH_TEXT', 'Wpisz s�owo aby wyszuka� produkt.');
define('BOX_SEARCH_ADVANCED_SEARCH', 'Wyszukiwanie Zaawansowane');

// specials box text in includes/boxes/specials.php
define('BOX_HEADING_SPECIALS', 'Promocje');

// reviews box text in includes/boxes/reviews.php
define('BOX_HEADING_REVIEWS', 'Recenzje');
define('BOX_REVIEWS_WRITE_REVIEW', 'Napisz recenzj� o tym produkcie!');
define('BOX_REVIEWS_NO_REVIEWS', 'Obecnie nie ma recenzji o produktach');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s z 5 Gwiazdek!');

// shopping_cart box text in includes/boxes/shopping_cart.php
define('BOX_HEADING_SHOPPING_CART', 'Koszyk');
define('BOX_SHOPPING_CART_EMPTY', '...jest pusty');

// order_history box text in includes/boxes/order_history.php
define('BOX_HEADING_CUSTOMER_ORDERS', 'Zam�wienia');

// best_sellers box text in includes/boxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS', 'Bestsellery');
define('BOX_HEADING_BESTSELLERS_IN', 'Bestsellery kategorii<br>&nbsp;&nbsp;');

// notifications box text in includes/boxes/products_notifications.php
define('BOX_HEADING_NOTIFICATIONS', 'Powiadomienia');
define('BOX_NOTIFICATIONS_NOTIFY', 'Informuj mnie o aktualizacjach produktu <b>%s</b>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Nie informuj mnie o aktualizacjach produktu <b>%s</b>');

// manufacturer box text
define('BOX_HEADING_MANUFACTURER_INFO', 'Producent');
define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'Strona Domowa %s');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Inne produkty');

// languages box text in includes/boxes/languages.php
define('BOX_HEADING_LANGUAGES', 'J�zyki');

// currencies box text in includes/boxes/currencies.php
define('BOX_HEADING_CURRENCIES', 'Waluty');

// information box text in includes/boxes/information.php
define('BOX_HEADING_INFORMATION', 'Informacje');
define('BOX_INFORMATION_PRIVACY', 'Bezpiecze�stwo');
define('BOX_INFORMATION_CONDITIONS', 'Korzystanie z&nbsp;Serwisu');
define('BOX_INFORMATION_SHIPPING', 'Wysy�ka i Zwroty');
define('BOX_INFORMATION_CONTACT', 'Kontakt');

// tell a friend box text in includes/boxes/tell_a_friend.php
define('BOX_HEADING_TELL_A_FRIEND', 'Dla Znajomego');
define('BOX_TELL_A_FRIEND_TEXT', 'Powiedz o tym produkcie komu�, kogo znasz.');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Informacje o Dostawie');
define('CHECKOUT_BAR_PAYMENT', 'Informacje o P�atno�ci');
define('CHECKOUT_BAR_CONFIRMATION', 'Potwierdzenie');
define('CHECKOUT_BAR_FINISHED', 'Koniec!');

// pull down default text
define('PULL_DOWN_DEFAULT', '-- Wybierz --');
define('TYPE_BELOW', 'Wprowad� Poni�ej');

// javascript messages
define('JS_ERROR', 'Wyst�pi�y b��dy w trakcie przetwarzania formularza!\n\n');

define('JS_REVIEW_TEXT', '* Recenzja musi mie� przynajmniej ' . REVIEW_TEXT_MIN_LENGTH . ' znak�w.\n');
define('JS_REVIEW_RATING', '* Musisz oceni� produkt kt�ry recenzujesz.\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Wybierz metod� p�atno�ci dla twojego zam�wienia.\n');

define('JS_ERROR_SUBMITTED', 'Ten formularz zosta� ju� wys�any. Kliknij OK i poczekaj na zako�czenie procesu.');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Wybierz metod� p�atno��i dla twojego zam�wienia.');

define('CATEGORY_COMPANY', 'Dane Firmy');
define('CATEGORY_PERSONAL', 'Dane Osobowe');
define('CATEGORY_ADDRESS', 'Dane Teleadresowe');
define('CATEGORY_CONTACT', 'Dane Kontaktowe');
define('CATEGORY_OPTIONS', 'Opcje');
define('CATEGORY_PASSWORD', 'Twoje Has�o');

define('ENTRY_COMPANY', 'Nazwa Firmy:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'P�e�:');
define('ENTRY_GENDER_ERROR', 'Wybierz P�e�.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Imi�:');
define('ENTRY_FIRST_NAME_ERROR', 'Imi� musi mie� min. ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' zn.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Nazwisko:');
define('ENTRY_LAST_NAME_ERROR', 'Nazwisko musi mie� min. ' . ENTRY_LAST_NAME_MIN_LENGTH . ' zn.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Data Urodzenia:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Data Urodzenia musi by� w formacie: DD/MM/RRRR (np 21/05/1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (np. 21/05/1970)');
define('ENTRY_EMAIL_ADDRESS', 'Adres E-mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Adres E-Mail musi mie� min. ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' znak�w.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Tw�j Adres E-Mail ma niew�a�ciwy format - popraw go.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Tw�j Adres E-Mail ju� istnieje w naszej bazie - u�yj innego albo zaloguj si�.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS', 'Ulica:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Ulica musi mie� min. ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' zn.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Dzielnica:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Kod Pocztowy:');
define('ENTRY_POST_CODE_ERROR', 'Kod Pocztowy musi mie� min. ' . ENTRY_POSTCODE_MIN_LENGTH . ' zn.');
define('ENTRY_POST_CODE_TEXT', '* (np. 30-130)');
define('ENTRY_CITY', 'Miasto:');
define('ENTRY_CITY_ERROR', 'Miasto musi mie� min. ' . ENTRY_CITY_MIN_LENGTH . ' zn.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Wojew�dztwo:');
define('ENTRY_STATE_ERROR', 'Wojew�dztwo musi mie� min. ' . ENTRY_STATE_MIN_LENGTH . ' zn.');
define('ENTRY_STATE_ERROR_SELECT', 'Wybierz Wojew�dztwo z menu rozwijalnego.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', 'Kraj:');
define('ENTRY_COUNTRY_ERROR', 'Wybierz Kraj z menu rozwijalnego.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Nr Telefonu:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Nr Telefonu musi mie� min. ' . ENTRY_TELEPHONE_MIN_LENGTH . ' zn.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Nr Faksu:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Newsletter:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Zapisany');
define('ENTRY_NEWSLETTER_NO', 'Wypisany');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Has�o:');
define('ENTRY_PASSWORD_ERROR', 'Has�o musi mie� min. ' . ENTRY_PASSWORD_MIN_LENGTH . ' zn.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Potwierdzenie Has�a nie zgadza si� z Has�em.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Potwierdzenie Has�a:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Obecne Has�o:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Has�o musi mie� min. ' . ENTRY_PASSWORD_MIN_LENGTH . ' zn.');
define('ENTRY_PASSWORD_NEW', 'Nowe Has�o:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Nowe Has�o musi mie� min. ' . ENTRY_PASSWORD_MIN_LENGTH . ' zn.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Potwierdzenie Has�a musi zgadza� si� z twoim Nowym Has�em.');
define('PASSWORD_HIDDEN', '--UKRYTE--');

define('FORM_REQUIRED_INFORMATION', '* wymagane');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Stron:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Wy�wietlono rekordy od <b>%d</b> do <b>%d</b> (z <b>%d</b> znalezionych)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Wy�wietlono rekordy od <b>%d</b> do <b>%d</b> (z <b>%d</b> znalezionych)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Wy�wietlono rekordy od <b>%d</b> do <b>%d</b> (z <b>%d</b> znalezionych)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Wy�wietlono rekordy od <b>%d</b> do <b>%d</b> (z <b>%d</b> znalezionych)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Wy�wietlono rekordy od <b>%d</b> do <b>%d</b> (z <b>%d</b> znalezionych)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Pierwsza Strona');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Poprzednia Strona');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Nast�pna Strona');
define('PREVNEXT_TITLE_LAST_PAGE', 'Ostatnia Strona');
define('PREVNEXT_TITLE_PAGE_NO', 'Strona %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Poprzednie Strony (%d)');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Nast�pne Strony (%d)');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;PIERWSZA');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt; Poprzednia]');
define('PREVNEXT_BUTTON_NEXT', '[Nast�pna &gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'OSTATNIA&gt;&gt;');

define('IMAGE_BUTTON_ADD_ADDRESS', 'Dodaj Adres');
define('IMAGE_BUTTON_ADDRESS_BOOK', 'Ksi��ka Adresowa');
define('IMAGE_BUTTON_BACK', 'Powr�t');
define('IMAGE_BUTTON_BUY_NOW', 'Do Koszyka');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Zmie� Adres');
define('IMAGE_BUTTON_CHECKOUT', 'Zam�w!');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Potwierd� Zam�wienie');
define('IMAGE_BUTTON_CONTINUE', 'Kontynuuj');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Kontynuuj Zakupy');
define('IMAGE_BUTTON_DELETE', 'Usu�');
define('IMAGE_BUTTON_EDIT_ACCOUNT', 'Edytuj Konto');
define('IMAGE_BUTTON_HISTORY', 'Historia Zam�wie�');
define('IMAGE_BUTTON_LOGIN', 'Zaloguj');
define('IMAGE_BUTTON_IN_CART', 'Do Koszyka');
define('IMAGE_BUTTON_NOTIFICATIONS', 'Informowanie o Produktach');
define('IMAGE_BUTTON_QUICK_FIND', 'Szybkie Wyszukiwanie');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', 'Usu� Informowanie o Produktach');
define('IMAGE_BUTTON_REVIEWS', 'Recenzje');
define('IMAGE_BUTTON_SEARCH', 'Szukaj');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', 'Opcje Wysy�ki');
define('IMAGE_BUTTON_TELL_A_FRIEND', 'Powiedz Znajomemu');
define('IMAGE_BUTTON_UPDATE', 'Aktualizuj');
define('IMAGE_BUTTON_UPDATE_CART', 'Aktualizuj Koszyk');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Napisz Recenzj�');

define('SMALL_IMAGE_BUTTON_DELETE', 'Usu�');
define('SMALL_IMAGE_BUTTON_EDIT', 'Edytuj');
define('SMALL_IMAGE_BUTTON_VIEW', 'Poka�');

define('ICON_ARROW_RIGHT', 'wi�cej');
define('ICON_CART', 'Do Koszyka');
define('ICON_ERROR', 'B��d');
define('ICON_SUCCESS', 'Powiod�o si�');
define('ICON_WARNING', 'Uwaga');

define('TEXT_GREETING_PERSONAL', 'Witaj ponownie <span class="greetUser">%s!</span> Czy chcesz zobaczy� kt�re z <a href="%s"><u>nowych produkt�w</u></a> s� dost�pne w sprzeda�y?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Je�eli %s to nie ty, prosz� <a href="%s"><u>zaloguj si�</u></a> na swoje konto.</small>');
define('TEXT_GREETING_GUEST', 'Witaj <span class="greetUser">Nieznajomy!</span> Czy chcesz si� <a href="%s"><u>zalogowa�</u></a>? A mo�e jeszcze nie masz u nas konta i <a href="%s"><u>chcia�by� za�o�y�</u></a>?');

define('TEXT_SORT_PRODUCTS', 'Sortuj produkty ');
define('TEXT_DESCENDINGLY', 'malej�co');
define('TEXT_ASCENDINGLY', 'rosn�co');
define('TEXT_BY', ' wg ');

define('TEXT_REVIEW_BY', 'od %s');
define('TEXT_REVIEW_WORD_COUNT', '%s s��w');
define('TEXT_REVIEW_RATING', 'Ocena: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Data Dodania: %s');
define('TEXT_NO_REVIEWS', 'Dla tego produktu nie napisano jeszcze recenzji!');

define('TEXT_NO_NEW_PRODUCTS', 'Nie ma nowych produkt�w.');

define('TEXT_UNKNOWN_TAX_RATE', 'Nieznana stawka podatku');

define('TEXT_REQUIRED', 'wymagane');

define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><b><small>B��D TEP:</small> Nie mo�na wys�a� wiadomo�ci przez wskazany serwer SMTP. Sprawd� konfiguracj� pliku php.ini i je�eli jest to konieczne, popraw wpis dot. serwera SMTP.</b></font>');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Ostrze�enie: Istnieje katalog instalacyjny w lokalizacji: ' . dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/install. Usu� ten katalog ze wzgl�d�w bezpiecze�stwa.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Ostrze�enie: Istnieje mo�liwo�� zapisu pliku konfiguracyjnego w lokalizacji: ' . dirname($HTTP_SERVER_VARS['SCRIPT_FILENAME']) . '/includes/configure.php. Istnieje ryzyko zagro�enia pracy systemu - zmie� uprawnienia dla tego pliku.');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Ostrze�enie: Katalog dla sesji nie istnieje: ' . tep_session_save_path() . '. Sesje nie b�d� dzia�a� dop�ki nie zostanie utworzony katalog.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Ostrze�enie: Nie ma mo�liwo�ci zapisu do katalogu sesji: ' . tep_session_save_path() . '. Sesje nie b�d� dzia�a� dop�ki nie zostan� ustawione w�a�ciwe uprawnienia dla tego katalogu.');
define('WARNING_SESSION_AUTO_START', 'Ostrze�enie: Parametr session.auto_start jest aktywny - zablokuj go zmieniaj�c konfiguracj� pliku php.ini i zrestartuj serwer www.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Ostrze�enie: Katalog dla produkt�w mo�liwych do �ci�gni�cia (plik�w, program�w itp) nie istnieje: ' . DIR_FS_DOWNLOAD . '. Produkty kt�re mo�na �ci�ga� nie b�d� dzia�a�y dop�ki ten katalog nie zostanie utworzony.');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Data wa�no�ci karty kredytowej jest b��dna.<br>Prosz� sprawdzi� dat� na karcie i spr�bowa� ponownie.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Wprowadzony numer karty kredytowej jest b��dny.<br>Prosze sprawdzi� numer na karcie i spr�bowa� ponownie.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Pierwsze cztery cyfry z numeru karty kredytowej to: %s<br>Nawet je�eli ten numer jest poprawny to niestety nie akceptujemy tego typu kart kredytowej.<br>Je�eli numer jest b��dny prosz� go poprawi� i spr�bowac ponownie');

define('BOX_HEADING_ARTICLECAT', 'Artyku�y');
define('IMAGE_READ_ARTICLE', 'czytaj Artyku�');
define('TEXT_DISPLAY_NUMBER_OF_ARTICLES', 'Wy�wietlono <b>%d</b> do <b>%d</b> (z  <b>%d</b> artyku��w)');



/*
  Poni�sza informacja o prawie autorskim mo�e by�
  modyfikowana lub usuni�ta jedynie gdy wygl�d serwisu
  zosta� zmieniony i r�ni si� od domy�lnego zastrze�onego
  prawem wygl�du osCommerce.

  Wi�cej informacji znajdziesz w FAQ na stronie wsparcia
  osCommerce:

        http://www.oscommerce.com/about/copyright

  Pozostaw ten komentarz nienaruszony wraz z nast�puj�cy�
  informacj� o prawach autorskich.
*/
define('FOOTER_TEXT_BODY', 'Copyright &copy; 2005 <a href="http://www.oscommerce.com" target="_blank">osCommerce</a><br>Powered by <a href="http://www.oscommerce.waw.pl" target="_blank" title="osCommerce - Profesjonalne Sklepy Internetowe">osCommerce</a>');

//produkty polecane
define('TABLE_HEADING_FEATURED_PRODUCTS', 'Produkty polecane');
define('TABLE_HEADING_FEATURED_PRODUCTS_CATEGORY', 'Produkty polecane dla kategorii');

//pole NIP dla klienta
define('ENTRY_NIP', 'Numer NIP:');
define('ENTRY_NIP_ERROR', '');
define('ENTRY_NIP_TEXT','(np. 6666666666)');

///polityka prywatnosci
define('ENTRY_PRIVACY_AGREEMENT', 'Przeczyta�em ' . '<a href="' . tep_href_link(FILENAME_PRIVACY) . '" target="_blank"><u>zasady polityki prywatno�ci</u></a> i akceptuj� je:');
define('ENTRY_PRIVACY_AGREEMENT_ERROR', "Przeczytaj informacje o polityce prywatno�ci oraz zg�d� si� z ni�. Je�eli tego nie zrobisz, nie b�dziemy mogli  przyj�� Twojej rejestracji.");

require(DIR_WS_LANGUAGES . $language . '/' . 'center_shop.php');
?>