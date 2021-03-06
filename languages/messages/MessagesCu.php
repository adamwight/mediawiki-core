<?php
/** Church Slavic (словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Krinkle
 * @author Omnipaedista
 * @author Svetko
 * @author Wolliger Mensch
 * @author ОйЛ
 */

$specialPageAliases = array(
	'Allpages'                  => array( 'Вьсѩ_страницѧ' ),
	'Categories'                => array( 'Катигорїѩ' ),
	'Contributions'             => array( 'Добродѣꙗниꙗ' ),
	'Preferences'               => array( 'Строи' ),
	'Recentchanges'             => array( 'Послѣдьнѩ_мѣнꙑ' ),
	'Search'                    => array( 'Исканиѥ' ),
	'Statistics'                => array( 'Статїстїка' ),
	'Upload'                    => array( 'Положєниѥ_дѣла' ),
);

$namespaceNames = array(
	NS_MEDIA            => 'Срѣдьства',
	NS_SPECIAL          => 'Нарочьна',
	NS_TALK             => 'Бєсѣда',
	NS_USER             => 'Польꙃєватєл҄ь',
	NS_USER_TALK        => 'Польꙃєватєлꙗ_бєсѣда',
	NS_PROJECT_TALK     => '{{GRAMMAR:genitive|$1}}_бєсѣда',
	NS_FILE             => 'Дѣло',
	NS_FILE_TALK        => 'Дѣла_бєсѣда',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_бєсѣда',
	NS_TEMPLATE         => 'Обраꙁьць',
	NS_TEMPLATE_TALK    => 'Обраꙁьца_бєсѣда',
	NS_HELP             => 'Помощь',
	NS_HELP_TALK        => 'Помощи_бєсѣда',
	NS_CATEGORY         => 'Катигорїꙗ',
	NS_CATEGORY_TALK    => 'Катигорїѩ_бєсѣда',
);

$namespaceAliases = array(
	'Срѣдьства'                      => NS_MEDIA,
	'Нарочьна'                       => NS_SPECIAL,
	'Бесѣда'                         => NS_TALK,
	'Польѕевател҄ь'                  => NS_USER,
	'Польѕевател_бесѣда'             => NS_USER_TALK,
	'{{grammar:genitive|$1}}_бесѣда' => NS_PROJECT_TALK,
	'Ви́дъ'                          => NS_FILE,
	'Видъ'                           => NS_FILE,
	'Ви́да_бєсѣ́да'                   => NS_FILE_TALK,
	'Вида_бесѣда'                    => NS_FILE_TALK,
	'MediaWiki_бесѣда'               => NS_MEDIAWIKI_TALK,
	'Образьць'                       => NS_TEMPLATE,
	'Образьца_бесѣда'                => NS_TEMPLATE_TALK,
	'Помощь'                         => NS_HELP,
	'Помощи_бесѣда'                  => NS_HELP_TALK,
	'Катигорї'                      => NS_CATEGORY,
	'Катигорїѩ_бесѣда'               => NS_CATEGORY_TALK,
);

$magicWords = array(
	'redirect'                  => array( '0', '#ПРѢНАПРАВЛЄНИѤ', '#REDIRECT' ),
	'language'                  => array( '0', '#ѨꙀꙐКЪ:', '#LANGUAGE:' ),
);

$separatorTransformTable = array(
	',' => ".",
	'.' => ','
);

$linkPrefixExtension = true;

$defaultDateFormat = 'mdy';

$dateFormats = array(
	'mdy time' => 'H:i',
	'mdy date' => 'xg j числа, Y',
	'mdy both' => 'H:i, xg j числа, Y',

	'dmy time' => 'H:i',
	'dmy date' => 'j F Y',
	'dmy both' => 'H:i, j F Y',

	'ymd time' => 'H:i',
	'ymd date' => 'Y F j',
	'ymd both' => 'H:i, Y F j',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
);

$linkTrail = '/^([a-zабвгдеєжѕзїіıићклмнопсстѹфхѡѿцчшщъыьѣюѥѧѩѫѭѯѱѳѷѵґѓђёјйљњќуўџэ҄я“»]+)(.*)$/sDu';
$linkPrefixCharset = '„«';

$messages = array(
# User preference toggles
'tog-oldsig' => 'нꙑнѣшьн҄ь аѵтографъ :',

'underline-always' => 'вьсѥгда',
'underline-never' => 'никъгда',

# Dates
'sunday' => 'нєдѣлꙗ',
'monday' => 'понедѣл҄ьникъ',
'tuesday' => 'въторьникъ',
'wednesday' => 'срѣда',
'thursday' => 'чєтврьтъкъ',
'friday' => 'пѧтъкъ',
'saturday' => 'сѫбота',
'sun' => 'н҃д',
'mon' => 'п҃н',
'tue' => 'в҃т',
'wed' => 'с҃р',
'thu' => 'ч҃т',
'fri' => 'п҃т',
'sat' => 'с҃б',
'january' => 'їаноуарїи',
'february' => 'фєвроуарїи',
'march' => 'мартїи',
'april' => 'апрїлїи',
'may_long' => 'маїи',
'june' => 'їоунїи',
'july' => 'їоулїи',
'august' => 'аѷгоустъ',
'september' => 'сєптємврїи',
'october' => 'октѡврїи',
'november' => 'ноємврїи',
'december' => 'дєкємврїи',
'january-gen' => 'їаноуарїꙗ',
'february-gen' => 'фєвроуарїꙗ',
'march-gen' => 'мартїꙗ',
'april-gen' => 'апрїлїꙗ',
'may-gen' => 'маїꙗ',
'june-gen' => 'їоунїꙗ',
'july-gen' => 'їоулїꙗ',
'august-gen' => 'аѷгоуста',
'september-gen' => 'сєптємврїꙗ',
'october-gen' => 'октѡврїꙗ',
'november-gen' => 'ноємврїꙗ',
'december-gen' => 'дєкємврїꙗ',
'jan' => 'ꙗ҃н',
'feb' => 'фє҃в',
'mar' => 'ма҃р',
'apr' => 'ап҃р',
'may' => 'маїи',
'jun' => 'їо҃ун',
'jul' => 'їо҃ул',
'aug' => 'аѵ҃г',
'sep' => 'сє҃п',
'oct' => 'ок҃т',
'nov' => 'но҃є',
'dec' => 'дє҃к',
'january-date' => 'ꙗноуарїꙗ $1 числа',
'february-date' => 'фєвроуарїꙗ $1 числа',
'march-date' => 'мартїꙗ $1 числа',
'april-date' => 'апрїлїꙗ $1 числа',
'may-date' => 'маїꙗ $1 числа',
'june-date' => 'їоунїꙗ $1 числа',
'july-date' => 'їоулїꙗ $1 числа',
'august-date' => 'аѷгоуста $1 числа',
'september-date' => 'сєптємврїꙗ $1 числа',
'october-date' => 'октѡврїꙗ $1 числа',
'november-date' => 'ноємврїꙗ $1 числа',
'december-date' => 'дєкємврїꙗ $1 числа',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Катигорїꙗ|Катигорїи|Катигорїѩ|Катигорїѩ}}',
'category_header' => 'катигорїѩ ⁖ $1 ⁖ страницѧ',
'subcategories' => 'подъкатигорїѩ',
'category-media-header' => 'катигорїѩ ⁖ $1 ⁖ дѣла',
'category-empty' => "''си катигорїи нꙑнѣ страницѧ и дѣлъ нѣстъ''",
'hidden-categories' => '{{PLURAL:$1|съкрꙑта катигорїꙗ|съкрꙑти катигорїи|съкрꙑтꙑ катигорїѩ}}',
'hidden-category-category' => 'съкрꙑтꙑ катигорїѩ',
'category-subcat-count' => '{{PLURAL:$2|Сѥи катигорїи тъкъмо сꙗ подъкатигорїꙗ ѥстъ|Сѥи катигорїи {{PLURAL:$1|ѥдина подъкатигорїꙗ ѥстъ|2 подъкатигорїи ѥстє|$1 подъкатигорїѩ сѫтъ}} · а вьсѩ жє подъкатигорїѩ число $2 ѥстъ}}',
'listingcontinuesabbrev' => '· вѧщє',

'about' => 'опьсаниѥ',
'article' => 'члѣнъ',
'newwindow' => '(иномь окънѣ)',
'moredotdotdot' => 'вѧщє ···',
'mypage' => 'страница',
'mytalk' => 'бєсѣда',
'navigation' => 'плаваниѥ',
'and' => '&#32;и',

# Cologne Blue skin
'qbedit' => 'исправи',
'qbpageoptions' => 'сꙗ страница',
'qbmyoptions' => 'моꙗ страницѧ',
'qbspecialpages' => 'нарочьнꙑ страницѧ',
'faq' => 'чѧстꙑ въпроси',
'faqpage' => 'Project:Чѧстꙑ въпроси',

# Vector skin
'vector-action-addsection' => 'новꙑ бєсѣдꙑ чѧсти сътворѥниѥ',
'vector-action-delete' => 'поничьжєниѥ',
'vector-action-move' => 'прѣимєнованиѥ',
'vector-action-protect' => 'ꙁабранѥниѥ',
'vector-action-unprotect' => 'иꙁмѣни ꙁабранѥниꙗ обраꙁъ',
'vector-view-create' => 'сътворѥниѥ',
'vector-view-edit' => 'исправи',
'vector-view-history' => 'їсторїꙗ',
'vector-view-view' => 'чьтѥниѥ',
'vector-view-viewsource' => 'страницѧ источьнъ обраꙁъ',
'actions' => 'дѣиства',
'namespaces' => 'имєнъ просторꙑ',

'errorpagetitle' => 'блаꙁна',
'tagline' => '{{grammar:genitive|{{SITENAME}}}} страница',
'help' => 'помощь',
'search' => 'исканиѥ',
'searchbutton' => 'ищи',
'go' => 'прѣиди',
'searcharticle' => 'прѣиди',
'history' => 'страницѧ їсторїꙗ',
'history_short' => 'їсторїꙗ',
'printableversion' => 'пєчатьнъ обраꙁъ',
'permalink' => 'въиньна съвѧꙁь',
'print' => 'пєчатаниѥ',
'edit' => 'исправи',
'create' => 'сътворѥниѥ',
'editthispage' => 'си страницѧ исправлѥниѥ',
'create-this-page' => 'си страницѧ сътворѥниѥ',
'delete' => 'поничьжєниѥ',
'deletethispage' => 'си страницѧ поничьжєниѥ',
'protect' => 'ꙁабранѥниѥ',
'protect_change' => 'иꙁмѣнѥниѥ',
'protectthispage' => 'си страницѧ ꙁабранєниѥ',
'unprotect' => 'ꙁабранѥниꙗ обраꙁа иꙁмѣнѥниѥ',
'newpage' => 'нова страница',
'talkpage' => 'си страницѧ бєсѣда',
'talkpagelinktext' => 'бєсѣда',
'specialpage' => 'нарочьна страница',
'personaltools' => 'моꙗ орѫдиꙗ',
'postcomment' => 'нова чѧсть',
'talk' => 'бєсѣда',
'toolbox' => 'орѫдиꙗ',
'otherlanguages' => 'дроугꙑ ѩꙁꙑкꙑ',
'redirectedfrom' => '(прѣнаправлѥниѥ отъ ⁖ $1 ⁖)',
'redirectpagesub' => 'прѣнаправлѥниѥ',
'lastmodifiedat' => 'страницѧ послѣдьнꙗ мѣна сътворѥна $2 · $1 бѣ ⁙',
'jumpto' => 'прѣиди къ :',
'jumptonavigation' => 'плаваниѥ',
'jumptosearch' => 'исканиѥ',
'pool-errorunknown' => 'нєвѣдома блаꙁна',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => 'О {{grammar:instrumental|{{SITENAME}}}}',
'aboutpage' => 'Project:О сѥмь опꙑтьствовании',
'copyright' => 'подъ прощєниѥмь $1 пьсано ѥстъ',
'copyrightpage' => '{{ns:project}}:Творьцъ права',
'currentevents' => 'сѫщѧѩ вѣщи',
'currentevents-url' => 'Project:Сѫщѧѩ вѣщи',
'edithelp' => 'помощь по исправлѥниѭ',
'helppage' => 'Help:Каталогъ',
'mainpage' => 'главьна страница',
'mainpage-description' => 'главьна страница',
'policy-url' => 'Project:Полїтїка',
'portal' => 'обьщєниꙗ съвѣтъ',
'portal-url' => 'Project:Обьщєниꙗ съвѣтъ',

'pagetitle' => '$1 · {{SITENAME}}',
'retrievedfrom' => 'поѩто иꙁ ⁖ $1 ⁖',
'youhavenewmessages' => '$1 тєбѣ напьсанꙑ сѫтъ ($2)',
'newmessageslinkplural' => '{{PLURAL:$1|ново напьсаниѥ|нова напьсании|новꙑ напьсаниꙗ}}',
'newmessagesdifflinkplural' => '{{PLURAL:$1|послѣдьнꙗ мѣна|послѣдьни мѣни|послѣдьн҄ь мѣнъ}}',
'editsection' => 'исправи',
'editold' => 'исправи',
'viewsourceold' => 'страницѧ источьнъ обраꙁъ',
'editlink' => 'исправи',
'viewsourcelink' => 'страницѧ источьнъ обраꙁъ',
'editsectionhint' => 'исправлѥниѥ чѧсти : $1',
'toc' => 'каталогъ',
'showtoc' => 'виждь',
'hidetoc' => 'съкрꙑи',
'viewdeleted' => '$1 видєти хощєши ;',
'red-link-title' => '$1 (си страницѧ нѣстъ)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'члѣнъ',
'nstab-user' => 'польꙃєватєл҄ь',
'nstab-media' => 'срѣдьства',
'nstab-special' => 'нарочьна',
'nstab-project' => 'съвѣтъ',
'nstab-image' => 'дѣло',
'nstab-mediawiki' => 'напьсаниѥ',
'nstab-template' => 'обраꙁьць',
'nstab-help' => 'страница помощи',
'nstab-category' => 'катигорїꙗ',

# Main script and global functions
'nosuchspecialpage' => 'си нарочнꙑ страницѧ нѣстъ',

# General errors
'error' => 'блаꙁна',
'internalerror' => 'вънѫтрѣнꙗ блаꙁна',
'badtitle' => 'ꙁъло имѧ',
'viewsource' => 'страницѧ источьнъ обраꙁъ',
'viewsource-title' => 'вижьдь страницѧ ⁖ $1 ⁖ источьнъ обраꙁъ',

# Login and logout pages
'welcomeuser' => 'Добрѣ прити · $1!',
'welcomecreation-msg' => 'твоѥ польꙃєватєльско мѣсто сътворєно ѥстъ ⁙
нꙑнѣ иꙁмѣнити [[Special:Preferences|{{GRAMMAR:genitive|{{SITENAME}}}} строи]] можєши',
'yourname' => 'твоѥ имѧ',
'userlogin-yourname' => 'польꙃєватєлꙗ имѧ',
'userlogin-yourname-ph' => 'твоѥ польꙃєватєлꙗ имѧ напьши',
'yourpassword' => 'таино слово напиши',
'userlogin-yourpassword' => 'таино слово',
'userlogin-yourpassword-ph' => 'твоѥ таино слово напьши',
'createacct-yourpassword-ph' => 'таино слово напьши',
'yourpasswordagain' => 'опакꙑ таиноѥ слово напиши',
'createacct-yourpasswordagain' => 'таина слова оувѣрѥниѥ',
'createacct-yourpasswordagain-ph' => 'опакꙑ жє таино слово напьши',
'login' => 'въниди',
'nav-login-createaccount' => 'въниди / съꙁижди си мѣсто',
'userlogin' => 'въниди / съꙁижди си мѣсто',
'userloginnocreate' => 'въниди',
'logout' => 'ис̾ходъ',
'userlogout' => 'ис̾ходъ',
'nologin' => 'мѣсто ти нѣстъ ли ? $1',
'nologinlink' => 'съꙁижди си мѣсто',
'createaccount' => 'съꙁижди си мѣсто',
'gotaccount' => 'мѣсто ти ѥстъ ли? $1',
'gotaccountlink' => 'въниди',
'helplogin-url' => 'Help:Въниждѥниѥ',
'createaccountreason' => 'какъ съмꙑслъ :',
'createacct-reason' => 'какъ съмꙑслъ',
'createacct-submit' => 'съꙁижди си мѣсто',
'createacct-benefit-heading' => '{{SITENAME}} съꙁьдаѥтъ сѧ чьловѣкꙑ · ижє ꙗко тꙑ сѫтъ',
'createacct-benefit-body1' => '{{PLURAL:$1|мѣна|мѣнꙑ|мѣнъ}}',
'createacct-benefit-body2' => '{{PLURAL:$1|страница|страници|страницѧ}}',
'userexists' => 'сѫщє польꙃєватєлꙗ имѧ пьса ⁙
бѫди добръ · ино сѥ иꙁобрѧщи',
'loginerror' => 'въхода блаꙁна',
'createacct-error' => 'мѣста сътворѥниꙗ блаꙁна',
'loginsuccess' => "'''нꙑнѣ тꙑ {{GENDER|въшьлъ|въшьла}} въ {{grammar:locative|{{SITENAME}}}} подь имьньмъ ⁖ $1 ⁖.'''",
'mailmypassword' => 'посъли ново таино слово',
'accountcreated' => 'мѣсто сътворєно ѥстъ',
'accountcreatedtext' => 'польꙃєватєльско мѣсто [[{{ns:User}}:$1|$1]] ([[{{ns:User talk}}:$1|бєсѣда]]) сътворєно бѣ',
'loginlanguagelabel' => 'ѩꙁꙑкъ : $1',

# Change password dialog
'resetpass' => 'таина словєсє иꙁмѣнѥниѥ',
'resetpass_header' => 'таина слова иꙁмѣнѥниѥ',
'oldpassword' => 'старо таино слово :',
'newpassword' => 'ново таино слово :',
'retypenew' => 'опакꙑ ново таиноѥ слово напиши :',
'resetpass-submit-loggedin' => 'таина словєсє иꙁмѣнѥниѥ',

# Special:PasswordReset
'passwordreset-username' => 'польꙃєватєлꙗ имѧ :',

# Special:ChangeEmail
'changeemail-none' => '(нѣстъ)',

# Edit page toolbar
'link_sample' => 'съвѧꙁи имѧ',
'link_tip' => 'вънѫтрьнꙗ съвѧꙁь',
'extlink_sample' => 'http://www.example.com съвѧꙁи имѧ',
'extlink_tip' => 'вънѣщьнꙗ съвѧꙁь (помьни о http://)',
'media_tip' => 'дѣла съвѧꙁь',
'sig_tip' => 'твои аѵтографъ и нꙑнѣшьна врѣмѧ и дьнь',

# Edit pages
'summary' => 'опьсаниѥ :',
'minoredit' => 'малаꙗ мѣна',
'watchthis' => 'си страницѧ блюдєниѥ',
'savearticle' => 'съхранѥниѥ',
'showpreview' => 'мѣнꙑ поꙁьрѣниѥ (бєꙁ съхранѥниꙗ)',
'blockedtitle' => 'польꙃєватєл҄ь ꙁаграждєнъ ѥстъ',
'loginreqlink' => 'въниди',
'newarticle' => '(новъ)',
'noarticletext' => 'нꙑнѣ с̑ьдє ничєсожє нє напьсано ѥстъ ⁙
[[Special:Search/{{PAGENAME}}|си страницѧ имѧ искати]] дроугꙑ страницѧ ·
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} съвѧꙁанꙑ їсторїѩ видѣти] ·
или [{{fullurl:{{FULLPAGENAME}}|action=edit}} ѭжє исправити]</span> можєши',
'noarticletext-nopermission' => 'нꙑнѣ с̑ьдє ничєсожє нє напьсано ѥстъ ⁙
[[Special:Search/{{PAGENAME}}|си страницѧ имѧ искати]] дроугꙑ страницѧ или
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} съвѧꙁанꙑ їсторїѩ видѣти]</span> можєши ⁙ сътворити жє си страницѧ нє можєши',
'userpage-userdoesnotexist' => 'польꙃєватєльска мѣста ⁖ $1 ⁖ нꙑнѣ нѣстъ ⁙
прѣдъ сътворѥниѥмь или исправлѥниѥмь си страницѧ помꙑсли жє ащє исто тъ дѣиство ноуждьно ли',
'userpage-userdoesnotexist-view' => 'польꙃєватєльско мѣсто ⁖ $1 ⁖ сътворєно нѣстъ',
'clearyourcache' => "'''НАРОЧИТО''': По съхранѥнии можєши обити своѥго съмотрила съхранъ да видѣлъ би мѣнꙑ
* '''Mozilla ли Firefox ли Safari''' ли жьмꙑи ''Shift'' а мꙑшиѭ жьми ''Reload'' или жьми ''Ctrl-F5'' ꙗко жє ''Ctrl-R'' (⌘-R вън Apple Mac)
* '''Google Chrome:''' ли жьмꙑи ''Ctrl-Shift-R'' (⌘-Shift-R въ Mac)
* '''Internet Explorer''' ли жьмꙑи ''Ctrl'' а мꙑшиѭ жьми ''Refresh'' или жьми ''Ctrl-F5'' 
* '''Опєрꙑ''' польꙃєватєльмъ можєть бꙑти ноужда пльнѣ поничьжити ихъ съмотрила съхранъ въ ''Tools → Preferences'' ⁙",
'updated' => '(оновлѥно ѥстъ)',
'note' => "'''НАРОЧИТО:'''",
'editing' => 'исправлѥниѥ: $1',
'creating' => 'сътворѥниѥ ⁖ $1 ⁖',
'editingsection' => 'исправлѥниѥ ⁖ $1 ⁖ (чѧсть)',
'editingcomment' => 'исправлѥниѥ ⁖ $1 ⁖ (нова чѧсть)',
'yourtext' => 'твоѥ напьсаниѥ',
'templatesused' => 'сѥѩ страницѧ {{PLURAL:$1|сь обраꙁьць польꙃоуѥтъ сѧ ѥстъ|с҄и обраꙁьца польꙃоуѭтъ сѧ ѥстє|с҄и обраꙁьци польꙃоуѭтъ сѧ сѫтъ}} :',
'template-protected' => '(ꙁабранєно ѥстъ)',
'template-semiprotected' => '(чѧстьно ꙁабранѥно)',
'hiddencategories' => 'сꙗ страница въ {{PLURAL:$1|1 съкрꙑтѣи катигорїи|$1 съкрꙑтѣхъ катигорїѩ}} сѧ авлꙗѥтъ :',
'postedit-confirmation' => 'твоꙗ мѣна съхранѥна ѥстъ',

# History pages
'viewpagelogs' => 'си страницѧ їсторїѩ',
'cur' => 'нꙑ҃н',
'last' => 'пс҃лд',
'page_first' => 'прьва страница',
'page_last' => 'послѣдьнꙗ страница',
'history-fieldset-title' => 'виждь мѣнъ їсторїѭ',
'history-show-deleted' => 'тъкъмо поничьжєнꙑ мѣнꙑ',
'histfirst' => 'прьвꙑ',
'histlast' => 'послѣдьнꙗ',
'historysize' => '{{PLURAL:$1|1 баитъ|$1 баита|$1 баитъ}}',
'historyempty' => '(поусто)',

# Revision feed
'history-feed-title' => 'мѣнъ їсторїꙗ',
'history-feed-item-nocomment' => '$1 при $2',

# Revision deletion
'rev-deleted-comment' => '(мѣнꙑ опьсаниѥ съкрꙑто ѥстъ)',
'rev-deleted-user' => '(польꙃєватєлꙗ имѧ съкрꙑто ѥстъ)',
'rev-delundel' => 'каꙁаниѥ / съкрꙑтиѥ',
'rev-showdeleted' => 'виждь',
'revdelete-show-file-submit' => 'да',
'revdelete-radio-set' => 'да',
'revdelete-radio-unset' => 'нѣтъ',
'revdelete-log' => 'какъ съмꙑслъ :',
'pagehist' => 'страницѧ їсторїꙗ',
'deletedhist' => 'поничьжєна їсторїꙗ',
'revdelete-otherreason' => 'инъ или допльнитєл҄ьнъ съмꙑслъ :',
'revdelete-reasonotherlist' => 'инъ съмꙑслъ',

# History merging
'mergehistory-reason' => 'какъ съмꙑслъ :',

# Search results
'searchresults' => 'исканиꙗ слѣдьствиѥ',
'searchresults-title' => 'исканиꙗ ⁖ $1 ⁖ слѣдьствиѥ',
'viewprevnext' => 'виждь ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-exists' => "'''страница имєньмь ⁖ [[:$1]] ⁖ ѥстъ створѥна ю'''",
'searchmenu-new' => "'''страницѫ ⁖ [[:$1]] ⁖ сътворити можєши'''",
'searchprofile-articles' => 'члѣни',
'searchprofile-project' => 'опꙑтьствовании и помощи страницѧ',
'searchprofile-images' => 'дѣла',
'searchprofile-everything' => 'вьсѩ страницѧ',
'searchprofile-articles-tooltip' => 'ищи въ $1',
'searchprofile-project-tooltip' => 'исканиѥ въ $1',
'searchprofile-images-tooltip' => 'исканиѥ дѣлъ',
'searchprofile-everything-tooltip' => 'ищи вьсѩ страницѧ въкоупомь съ бѣсєдꙑ',
'search-result-size' => '$1 ({{PLURAL:$2|$2 слово|$2 слова|$2 словєсъ}})',
'search-redirect' => '(прѣнаправлєниѥ $1)',
'search-section' => '(чѧсть $1)',
'search-suggest' => '⁖ $1 ⁖ мьниши ли',
'search-interwiki-caption' => 'родьствьна опꙑтьствованиꙗ',
'search-interwiki-more' => '(вѧщє)',
'searchall' => 'вьсꙗ',
'search-nonefound' => 'исканиѥ сꙗ слова ничєсо жє нє авило ѥстъ',
'powersearch' => 'вѧщєѥ исканиѥ',
'powersearch-redir' => 'прѣнаправлѥниꙗ',

# Preferences page
'preferences' => 'строи',
'mypreferences' => 'строи',
'prefs-edits' => 'мѣнъ число :',
'changepassword' => 'таина словєсє иꙁмѣнѥниѥ',
'prefs-datetime' => 'дьнь и врѣмѧ',
'prefs-rc' => 'послѣдьнѩ мѣнꙑ',
'prefs-watchlist' => 'блюдєниꙗ',
'prefs-resetpass' => 'таина словєсє иꙁмѣнѥниѥ',
'saveprefs' => 'съхранѥниѥ',
'prefs-editing' => 'исправлѥниѥ',
'rows' => 'рѧдꙑ :',
'searchresultshead' => 'исканиѥ',
'savedprefs' => 'твои строи иꙁмѣнєнъ ѥстъ',
'localtime' => 'мѣстьно врѣмѧ :',
'guesstimezone' => 'иꙁ твоѥго жє съмотрила врѣмєни обраꙁа поѩтиѥ',
'timezoneregion-africa' => 'Афрїка',
'timezoneregion-america' => 'Амєрїка',
'timezoneregion-antarctica' => 'Антарктїка',
'timezoneregion-arctic' => 'Арктїка',
'timezoneregion-asia' => 'Асїꙗ',
'timezoneregion-atlantic' => 'Атлантїчьскъ ѡкєанъ',
'timezoneregion-australia' => 'Аѵстралїꙗ',
'timezoneregion-europe' => 'Єѵрѡпа',
'timezoneregion-indian' => 'Їндїискъ ѡкєанъ',
'timezoneregion-pacific' => 'Тихꙑи ѡкєанъ',
'prefs-searchoptions' => 'исканиѥ',
'prefs-namespaces' => 'имєнъ просторꙑ',
'prefs-files' => 'дѣла',
'username' => '{{GENDER:$1|польꙃєватєлꙗ имѧ}} :',
'uid' => '{{GENDER:$1|польꙃєватєлꙗ}} число :',
'prefs-memberingroups' => '{{GENDER:$2|польꙃєватєлꙗ}} {{PLURAL:$1|чинъ|чина|чинꙑ}} :',
'yourrealname' => 'истиньно имѧ :',
'yourlanguage' => 'ѩꙁꙑкъ :',
'yournick' => 'новъ аѵтографъ :',
'yourgender' => 'полъ :',
'gender-male' => 'мѫжъ',
'gender-female' => 'жєна',
'prefs-signature' => 'аѵтографъ',

# User rights
'userrights' => 'чина польꙃєватєлꙗ строи',
'userrights-reason' => 'какъ съмꙑслъ :',

# Groups
'group' => 'чинъ :',
'group-user' => 'польꙃєватєлє',
'group-bot' => 'аѵтомати',
'group-sysop' => 'съмотритєлє',
'group-bureaucrat' => 'чинодатєлє',

'group-user-member' => '{{GENDER:$1|польꙃєватєл҄ь|польꙃєватєл҄ьница}}',
'group-bot-member' => '{{GENDER:$1|аѵтоматъ}}',
'group-sysop-member' => '{{GENDER:$1|съмотритєл҄ь}}',
'group-bureaucrat-member' => '{{GENDER:$1|чинодатєл҄ь}}',

'grouppage-user' => '{{ns:project}}:Польꙃєватєлє',
'grouppage-bot' => '{{ns:project}}:Аѵтомати',
'grouppage-sysop' => '{{ns:project}}:Съмотритєлє',
'grouppage-bureaucrat' => '{{ns:project}}:Чинодатєлє',

# Rights
'right-createaccount' => 'новъ польꙃєватєльскъ мѣстъ сътворѥниѥ',
'right-move' => 'прѣимєнованиѥ страницѧ',
'right-movefile' => 'прѣимєнованиѥ дѣлъ',
'right-upload' => 'положєниѥ дѣлъ',
'right-delete' => 'страницѧ поничьжєниѥ',

# Special:Log/newusers
'newuserlogpage' => 'новъ мѣстъ сътворѥниꙗ їсторїꙗ',

# User rights log
'rightslog' => 'чинодатєльства їсторїꙗ',

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => 'си страницѧ исправлєниѥ',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|мѣна|мѣнꙑ|мѣнъ}}',
'recentchanges' => 'послѣдьнѩ мѣнꙑ',
'recentchanges-legend' => 'послѣдьн҄ь мѣнъ строи',
'recentchanges-summary' => 'с҄ьдє послѣдьнѩ мѣнꙑ сѥѩ викиопꙑтьствованиꙗ видѣти можєши',
'recentchanges-label-newpage' => 'по сѥи мѣнꙑ нова страница сътворѥна ѥстъ',
'recentchanges-label-minor' => 'малаꙗ мѣна',
'recentchanges-label-bot' => 'сѭ мѣноу аѵтоматъ сътворихъ',
'rcnote' => "нижѣ {{PLURAL:$1|'''1''' послѣдьнѭ мѣнѫ|'''$1''' послѣдьни мѣнꙑ|'''$1''' послѣдьнъ мѣнъ|'''$1''' послѣдьнъ мѣнъ}} ꙁа {{PLURAL:$2|дьнь|'''$2''' дьнꙗ|'''$2''' дьнъ|'''$2''' дьнъ}} · ꙗко нꙑнѣ $5 · $4 лѣта",
'rcshowhideminor' => '$1 малꙑ мѣнꙑ',
'rcshowhidebots' => '$1 аѵтоматъ',
'rcshowhideliu' => '$1 польꙃєватєлъ · ѩжє съꙁижьдє сѥ мѣсто · мѣнꙑ',
'rcshowhideanons' => '$1 анѡнѷмьнъ польꙃєватєлъ мѣнꙑ',
'rcshowhidemine' => '$1 моꙗ мѣнꙑ',
'rclinks' => '$1 послѣдьн҄ь  мѣнъ · ѩжє $2 послѣдьни дьни створѥнꙑ сѫтъ · каꙁаниѥ<br />$3',
'diff' => 'ра҃ꙁн',
'hist' => 'їс҃т',
'hide' => 'съкрꙑи',
'show' => 'виждь',
'minoreditletter' => 'м҃л',
'newpageletter' => 'н҃в',
'boteditletter' => 'а҃ѵ',
'rc-old-title' => 'напрьва страница створѥна ꙗко ⁖ $1 ⁖',

# Recent changes linked
'recentchangeslinked' => 'съвѧꙁанꙑ страницѧ',
'recentchangeslinked-feed' => 'съвѧꙁанꙑ страницѧ',
'recentchangeslinked-toolbox' => 'съвѧꙁанꙑ страницѧ',
'recentchangeslinked-page' => 'страницѧ имѧ :',

# Upload
'upload' => 'положєниѥ дѣла',
'uploadbtn' => 'положєниѥ дѣла',
'uploadlog' => 'дѣлъ положєниꙗ їсторїꙗ',
'uploadlogpage' => 'дѣлъ положєниꙗ їсторїꙗ',
'filename' => 'дѣла имѧ',
'filedesc' => 'опьсаниѥ',
'fileuploadsummary' => 'опьсаниѥ:',
'savefile' => 'дѣла съхранѥниѥ',
'uploadedimage' => '⁖ [[$1]] ⁖ положєнъ ѥстъ',
'overwroteimage' => 'новъ обраꙁъ ⁖ [[$1]] ⁖ положєнъ ѥстъ',
'upload-source' => 'источьно дѣло',
'sourcefilename' => 'источьна дѣла имꙗ :',
'watchthisupload' => 'си дѣла блюдєниѥ',
'upload-success-subj' => 'дѣло положєно ѥстъ',

'license' => 'прощєниѥ :',
'license-header' => 'прощєниѥ',

# Special:ListFiles
'imgfile' => 'дѣло',
'listfiles' => 'дѣлъ каталогъ',
'listfiles_name' => 'имѧ',
'listfiles_user' => 'польꙃєватєл҄ь',
'listfiles_size' => 'мѣра',

# File description page
'file-anchor-link' => 'дѣло',
'filehist' => 'дѣла їсторїꙗ',
'filehist-deleteone' => 'поничьжєниѥ',
'filehist-current' => 'нꙑнѣщьн҄ь обраꙁъ',
'filehist-datetime' => 'дьнь / врѣмѧ',
'filehist-thumb' => 'малъ обраꙁъ',
'filehist-user' => 'польꙃєватєл҄ь',
'filehist-dimensions' => 'мѣра',
'filehist-filesize' => 'дѣла мѣра',
'filehist-comment' => 'опьсаниѥ',
'imagelinks' => 'дѣла польꙃєваниѥ',
'sharedupload' => 'сѥ дѣло въ $1 съхранѥно ѥстъ дѣла · ѥгожє дроугꙑ опꙑтьствованиѩ польꙃєвати могѫтъ',

# File reversion
'filerevert-comment' => 'какъ съмꙑслъ :',

# File deletion
'filedelete' => 'поничьжєниѥ $1',
'filedelete-legend' => 'дѣла поничьжєниѥ',
'filedelete-comment' => 'какъ съмꙑслъ :',
'filedelete-submit' => 'поничьжєниѥ',

# MIME search
'mimetype' => 'MIME тѷпъ :',
'download' => 'поѩти',

# List redirects
'listredirects' => 'прѣнаправлѥниꙗ',

# Random page
'randompage' => 'страница въ нєꙁаапѫ',

# Random redirect
'randomredirect' => 'прѣнаправлѥниє въ нєꙁаапѫ',

# Statistics
'statistics' => 'статїстїка',
'statistics-header-pages' => 'страницѧ статїстїка',
'statistics-header-edits' => 'мѣнъ статїстїка',
'statistics-header-users' => 'польꙃєватєлъ статїстїка',
'statistics-articles' => 'истиньнꙑ члѣни',
'statistics-pages' => 'страницѧ',
'statistics-pages-desc' => 'вьсѩ страницѧ въкоупомь съ бѣсєдꙑ · прѣнаправлѥниꙗ и инꙑ',
'statistics-files' => 'положєнꙑ дѣла',
'statistics-users-active' => 'дѣꙗтєльнꙑ польꙃєватєлє',

'brokenredirects-edit' => 'исправи',
'brokenredirects-delete' => 'поничьжєниѥ',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|баитъ|баита|баитъ}}',
'ncategories' => '$1 {{PLURAL:$1|катигорїꙗ|катигорїи|катигорїѩ}}',
'nlinks' => '$1 {{PLURAL:$1|съвѧꙁь|съвѧꙁи|съвѧꙁии}}',
'nmembers' => '$1 {{PLURAL:$1|члѣнъ|члѣна|члѣни|члѣнъ}}',
'shortpages' => 'кратъкꙑ страницѧ',
'listusers' => 'польꙃєватєлъ каталогъ',
'usereditcount' => '$1 {{PLURAL:$1|мѣна|мѣнꙑ|мѣнъ}}',
'usercreated' => '{{GENDER:$3|сътворилъ|сътворила}} мѣсто $1 въ $2',
'newpages' => 'нови члѣни',
'newpages-username' => 'польꙃєватєлꙗ имѧ :',
'ancientpages' => 'давьни страницѧ',
'move' => 'прѣимєнованиѥ',
'movethispage' => 'си страницѧ прѣимєнованиѥ',
'pager-newer-n' => '{{PLURAL:$1|нова 1|новꙑ $1|новъ $1}}',
'pager-older-n' => '{{PLURAL:$1|давьнꙗ 1|давьни $1|давьн҄ь $1}}',

# Book sources
'booksources-go' => 'прѣиди',

# Special:Log
'specialloguserlabel' => 'испльнитєл҄ь :',
'speciallogtitlelabel' => 'страницѧ или польꙃєватєлꙗ имѧ :',
'log' => 'їсторїѩ',
'all-logs-page' => 'вьсѩ обьщѧ їсторїѩ',

# Special:AllPages
'allpages' => 'вьсѩ страницѧ',
'alphaindexline' => 'отъ $1 до $2',
'allpagesfrom' => 'страницѧ видѣти хощѫ съ начѧльнами боукъвами :',
'allarticles' => 'вьсѩ страницѧ',
'allpagessubmit' => 'прѣиди',

# Special:Categories
'categories' => 'катигорїѩ',

# Special:DeletedContributions
'deletedcontributions' => 'поничьжєнꙑ добродѣꙗниꙗ',
'deletedcontributions-title' => 'поничьжєнꙑ добродѣꙗниꙗ',
'sp-deletedcontributions-contribs' => 'добродѣꙗниꙗ',

# Special:LinkSearch
'linksearch' => 'вънѣщьн҄ь съвѧꙁь исканиѥ',
'linksearch-ns' => 'имєнъ просторъ :',
'linksearch-ok' => 'ищи',

# Special:ListUsers
'listusers-submit' => 'виждь',

# Special:ListGroupRights
'listgrouprights-members' => '(польꙃєватєлъ каталогъ)',

# Email user
'emailuser' => 'посъли єпїстолѫ',
'emailusername' => 'польꙃєватєлꙗ имѧ :',
'emailfrom' => 'отъ :',
'emailto' => 'къ :',
'emailsubject' => 'ѳєма :',
'emailmessage' => 'напьсаниє :',
'emailsend' => 'посъли',

# Watchlist
'watchlist' => 'блюдєниꙗ',
'mywatchlist' => 'блюдєниꙗ',
'watchlistfor2' => 'дѣлꙗ ⁖ $1 ⁖ $2',
'addedwatchtext' => 'страница ⁖ [[:$1]] ⁖ нꙑнѣ подъ твоимь [[Special:Watchlist|блюдєниѥмь]] ѥстъ ⁙
всꙗ ѥѩ и ѥѩжє бєсѣдꙑ страницѧ мѣнꙑ твоꙗ блюдєнии каталоꙃѣ покаꙁанꙑ бѫдѫтъ',
'removedwatchtext' => 'страница ⁖ [[:$1]] ⁖ нꙑнѣ твоѥго [[Special:Watchlist|блюдєниꙗ]] иꙁнєсєна ѥстъ',
'watch' => 'блюдєниѥ',
'watchthispage' => 'си страницѧ блюдєниѥ',
'unwatch' => 'остави блюдєниѥ',
'watchlist-options' => 'блюдєниѩ строи',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'блюдєниѥ ...',
'unwatching' => 'оставьлєниѥ блюдєниꙗ ...',

'created' => 'сътворѥнъ ѥстъ',

# Delete
'deletepage' => 'поничьжєниѥ',
'excontent' => "вънѫтри бѣ: '$1'",
'excontentauthor' => "вънѫтри бѣ : '$1' (и послѣдьн҄ии дѣтєл҄ь бѣ '[[Special:Contributions/$2|$2]]')",
'delete-legend' => 'поничьжєниѥ',
'actioncomplete' => 'дѣиство сътворєно ѥстъ',
'deletedtext' => 'страница ⁖ $1 ⁖ поничьжєна ѥстъ ⁙
виждь ⁖ $2 ⁖ послѣдьнъ поничьжєниѩ дѣлꙗ',
'dellogpage' => 'поничьжєниꙗ їсторїꙗ',
'deletionlog' => 'поничьжєниꙗ їсторїꙗ',
'deletecomment' => 'какъ съмꙑслъ :',

# Protect
'protectlogpage' => 'ꙁабранѥниꙗ їсторїꙗ',
'protectedarticle' => '⁖ [[$1]] ⁖ ꙁабранѥна ѥстъ',
'prot_1movedto2' => '⁖ [[$1]] ⁖ нарєчєнъ ⁖ [[$2]] ⁖ ѥстъ',
'protectcomment' => 'какъ съмꙑслъ :',
'protect-level-sysop' => 'толико съмотритєлє',
'protect-othertime' => 'ино врѣмѧ :',
'protect-othertime-op' => 'ино врѣмѧ',
'protect-otherreason-op' => 'инъ съмꙑслъ',
'protect-expiry-options' => '1 часъ:1 hour,1 дьнь:1 day,1 сєдмица:1 week,2 сєдмици:2 weeks,1 мѣсѧць:1 month,3 мѣсѧць:3 months,6 мѣсѧць:6 months,1 лѣто:1 year,вѣчьно:infinite',
'pagesize' => '(баитъ)',

# Restrictions (nouns)
'restriction-edit' => 'исправи',
'restriction-move' => 'прѣимєнованиѥ',
'restriction-upload' => 'положєниѥ',

# Undelete
'undeletecomment' => 'какъ съмꙑслъ :',
'undelete-search-submit' => 'ищи',
'undelete-show-file-submit' => 'да',

# Namespace form on various pages
'namespace' => 'имєнъ просторъ:',
'invert' => 'обрати иꙁборъ',
'namespace_association' => 'съвѧꙁанꙑ имєнъ просторꙑ',
'blanknamespace' => '(главьно)',

# Contributions
'contributions' => '{{GENDER:$1|польꙃєватєлꙗ}} добродѣꙗниꙗ',
'contributions-title' => 'польꙃєватєлꙗ ⁖ $1 ⁖ добродѣꙗниꙗ',
'mycontris' => 'добродѣꙗниꙗ',
'contribsub2' => 'польꙃєватєлꙗ имѧ ⁖ $1 ⁖ ѥстъ ($2)',
'uctop' => '(нꙑнѣщьн҄ь обраꙁъ)',

'sp-contributions-blocklog' => 'ꙁаграждєниꙗ їсторїꙗ',
'sp-contributions-deleted' => 'поничьжєнꙑ добродѣꙗниꙗ',
'sp-contributions-uploads' => 'положєнꙑ дѣла',
'sp-contributions-logs' => 'їсторїѩ',
'sp-contributions-talk' => 'бєсѣда',
'sp-contributions-username' => 'IP число или польꙃєватєлꙗ имѧ :',
'sp-contributions-submit' => 'ищи',

# What links here
'whatlinkshere' => 'дос҄ьдєщьнѩ съвѧꙁи',
'whatlinkshere-title' => 'страницѧ ижє съ ⁖ $1 ⁖ съвѧꙁи имѫтъ',
'whatlinkshere-page' => 'страница :',
'isredirect' => 'прѣнаправлѥниѥ',
'istemplate' => 'внѫтри страницѧ',
'isimage' => 'дѣла съвѧꙁь',
'whatlinkshere-links' => '← съвѧꙁи',
'whatlinkshere-hideredirs' => '$1 прѣнаправлѥниꙗ',
'whatlinkshere-hidelinks' => '$1 съвѧꙁи',
'whatlinkshere-filters' => 'ситꙑ',

# Block/unblock
'block' => 'ꙁагради польꙃєватєл҄ь',
'blockip' => 'ꙁагради польꙃєватєл҄ь',
'blockip-title' => 'ꙁагради польꙃєватєл҄ь',
'blockip-legend' => 'ꙁагради польꙃєватєл҄ь',
'ipadressorusername' => 'IP число или польꙃєватєлꙗ имѧ :',
'ipbreason' => 'какъ съмꙑслъ :',
'ipbother' => 'ино врѣмѧ :',
'ipboptions' => '2 часа:2 hours,1 дьнь:1 day,3 дьни:3 days,1 сєдмица:1 week,2 сєдмици:2 weeks,1 мѣсѧць:1 month,3 мѣсѧць:3 months,6 мѣсѧць:6 months,1 лѣто:1 year,вѣчьно:infinite',
'ipblocklist' => 'ꙁаграждєнꙑ польꙃєватєлє',
'blocklist-reason' => 'какъ съмꙑслъ',
'ipblocklist-submit' => 'исканиѥ',
'infiniteblock' => 'вѣчьно',
'anononlyblock' => 'тъкъмо анѡнѷмꙑ',
'blocklink' => 'ꙁагради',
'contribslink' => 'добродѣꙗниꙗ',
'blocklogpage' => 'ꙁаграждєниꙗ їсторїꙗ',
'blocklogentry' => 'ꙁаградилъ [[$1]] на врѣмѧ $2 $3',
'block-log-flags-anononly' => 'тъкъмо анѡнѷмьнꙑ польꙃєватєлє',

# Move page
'move-page' => 'прѣимєнованиѥ ⁖ $1 ⁖',
'move-page-legend' => 'страницѧ прѣимєнованиѥ',
'movearticle' => 'страница :',
'newtitle' => 'ново имѧ :',
'move-watch' => 'си страницѧ блюдєниѥ',
'movepagebtn' => 'прѣимєнованиѥ',
'pagemovedsub' => 'прѣимєнованиѥ сътворѥно ѥстъ',
'movepage-moved' => "'''⁖ $1 ⁖ нарєчєнъ ⁖ $2⁖ ѥстъ'''",
'movepage-moved-redirect' => 'прѣнаправлѥниѥ сътворѥно бѣ',
'movedto' => 'прѣимєновано въ',
'movetalk' => 'си страницѧ бєсѣдꙑ прѣимєнованиѥ',
'movelogpage' => 'прѣимєнованиꙗ їсторїꙗ',
'movereason' => 'какъ съмꙑслъ :',
'move-leave-redirect' => 'прѣнаправлѥниꙗ сътворѥниѥ',

# Namespace 8 related
'allmessages' => 'сѷстимьнꙑ напьсаниꙗ',
'allmessagesname' => 'имѧ',
'allmessages-language' => 'ѩꙁꙑкъ :',
'allmessages-filter-submit' => 'прѣиди',

# Special:Import
'import-upload-filename' => 'дѣла имѧ :',

# JavaScriptTest
'javascripttest' => 'искоушєниѥ ⁖ JavaScript ⁖',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'твоꙗ польꙃєватєл҄ьска страница',
'tooltip-pt-mytalk' => 'твоꙗ бєсѣдꙑ страница',
'tooltip-pt-preferences' => 'твои строи',
'tooltip-pt-mycontris' => 'твоѩ добродѣꙗнии каталогъ',
'tooltip-pt-logout' => 'ис̾ходъ',
'tooltip-ca-talk' => 'си страницѧ бєсѣда',
'tooltip-ca-viewsource' => 'си страница ꙁабранєна ѥстъ ⁙
ѥѩ источьнъ обраꙁъ видєти можєши',
'tooltip-ca-protect' => 'си страницѧ ꙁабранєниѥ',
'tooltip-ca-delete' => 'си страницѧ поничьжєниѥ',
'tooltip-ca-move' => 'си страницѧ прѣимєнованиѥ',
'tooltip-ca-watch' => 'си страницѧ блюдєниѥ',
'tooltip-search' => 'ищи {{{grammar:genitive|{{SITENAME}}}}} страницѧ',
'tooltip-p-logo' => 'главьна страница',
'tooltip-n-mainpage' => 'виждь главьноу страницѫ',
'tooltip-n-mainpage-description' => 'виждь главьноу страницѫ',
'tooltip-n-recentchanges' => 'послѣдьн҄ь мѣнъ каталогъ',
'tooltip-t-contributions' => 'виждь польꙃєватєлꙗ добродѣꙗнии каталогъ',
'tooltip-t-upload' => 'положєниѥ дѣлъ',
'tooltip-t-specialpages' => 'вьсѣѩ нарочьнъ страницѧ каталогъ',
'tooltip-t-print' => 'сѥѩ страницѧ пєчатьнъ обраꙁъ',
'tooltip-ca-nstab-special' => 'си нарочьна страница ѥстъ · ѥѩжє иꙁмѣнꙗти нє можєши',
'tooltip-ca-nstab-image' => 'виждь дѣла страницѫ',
'tooltip-ca-nstab-category' => 'виждь катигорїѩ страницѫ',
'tooltip-minoredit' => 'оꙁначи ꙗко малоу мѣноу',
'tooltip-save' => 'твоѩ мѣнъ съхранѥниѥ',
'tooltip-watch' => 'си страницѧ блюдєниѥ',

# Info page
'pageinfo-header-edits' => 'мѣнъ їсторїꙗ',
'pageinfo-header-restrictions' => 'страницѧ ꙁабранѥниѥ',
'pageinfo-firstuser' => 'страницѧ творьць',
'pageinfo-toolboxlink' => 'страницѧ плирофорїꙗ',
'pageinfo-contentpage-yes' => 'да',
'pageinfo-protect-cascading-yes' => 'да',
'pageinfo-category-pages' => 'страницѩ число',
'pageinfo-category-files' => 'дѣлъ число',

# Browsing diffs
'previousdiff' => '← давьнꙗ мѣна',
'nextdiff' => 'нова мѣна →',

# Media information
'file-info-size' => '$1 × $2 п҃ѯ · дѣла мѣра : $3 · MIME тѷпъ : $4',
'svg-long-desc' => 'дѣло SVG · обꙑчьнъ обраꙁъ : $1 × $2 п҃ѯ · дѣла мѣра : $3',
'show-big-image' => 'пльнъ вида обраꙁъ',
'show-big-image-size' => '$1 × $2 пиѯєлъ',

# Special:NewFiles
'showhidebots' => '($1 аѵтоматъ)',
'ilsubmit' => 'ищи',

# Human-readable timestamps
'monday-at' => 'понєдѣл҄ьникъ · $1',
'tuesday-at' => 'въторьникъ · $1',
'wednesday-at' => 'срѣда · $1',
'thursday-at' => 'чєтврьтъкъ · $1',
'friday-at' => 'пѧтъкъ · $1',
'saturday-at' => 'сѫбота · $1',
'sunday-at' => 'нєдѣлꙗ · $1',
'yesterday-at' => 'вьчєра · $1',

# Exif tags
'exif-artist' => 'творьць',
'exif-languagecode' => 'ѩꙁꙑкъ',
'exif-iimcategory' => 'катигорїꙗ',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'хїлїомєтрꙑ ꙁа часъ',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'хїлїомєтрꙑ',

'exif-iimcategory-edu' => 'навꙑканиѥ',
'exif-iimcategory-hth' => 'съдравиѥ',
'exif-iimcategory-pol' => 'полїтїка',
'exif-iimcategory-rel' => 'вѣра',
'exif-iimcategory-sci' => 'оучєниѥ и тєхнологїꙗ',
'exif-iimcategory-spo' => 'аѳлитїка',

# External editor support
'edit-externally' => 'дѣла иꙁмѣнѥниѥ вънѣщьниимь орѫдиѥмь',
'edit-externally-help' => '(ꙁьри [https://www.mediawiki.org/wiki/Manual:External_editors помощь] вѧщєи плирофорїѩ дѣлꙗ)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'вьсꙗ',
'namespacesall' => 'вьсꙗ',
'monthsall' => 'вьсѩ',

'unit-pixel' => 'п҃ѯ',

# Multipage image navigation
'imgmultigo' => 'прѣиди',

# Table pager
'table_pager_limit_submit' => 'прѣиди',

# Auto-summaries
'autosumm-new' => 'нова страница ⁖ $1 ⁖ сътворєна  ѥстъ',

# Size units
'size-bytes' => '$1 Б҃',
'size-kilobytes' => '$1 Х҃Б',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|бєсѣда]])',

# Special:Version
'version' => 'MediaWiki обраꙁъ',
'version-specialpages' => 'нарочьнꙑ страницѧ',
'version-version' => '(обраꙁъ $1)',
'version-license' => 'прощєниѥ',
'version-software-version' => 'обраꙁъ',

# Special:Redirect
'redirect-submit' => 'прѣиди',
'redirect-file' => 'дѣла имѧ',

# Special:FileDuplicateSearch
'fileduplicatesearch-filename' => 'дѣла имѧ :',
'fileduplicatesearch-submit' => 'ищи',

# Special:SpecialPages
'specialpages' => 'нарочьнꙑ страницѧ',

# Special:Tags
'tag-filter' => '[[Special:Tags|мѣтъць]] сито :',
'tags-edit' => 'исправи',

# Database error messages
'dberr-header' => 'Вики тєхнїчьнꙑ отѧжєниꙗ имѣтъ',

# HTML forms
'htmlform-no' => 'нѣтъ',
'htmlform-yes' => 'да',

# New logging system
'logentry-delete-delete' => '$1 {{GENDER:$2|поничьжилъ|поничьжила}} страницѫ ⁖ $3 ⁖',
'logentry-move-move' => '$1 {{GENDER:$2|нарєчє}} страницѫ ⁖ $3 ⁖ имєньмь ⁖ $4 ⁖',
'logentry-move-move-noredirect' => '$1 {{GENDER:$2|нарєчє}} страницѫ ⁖ $3 ⁖ имєньмь ⁖ $4 ⁖ бєꙁ прѣнаправлєниꙗ сътворѥниꙗ',
'logentry-newusers-create' => 'польꙃєватєльско мѣсто ⁖ $1 ⁖ {{GENDER:$2|сътворѥно}} ѥстъ',

# Search suggestions
'searchsuggest-search' => 'исканиѥ',
'searchsuggest-containing' => 'сѥ дрьжащи···',

# API errors
'api-error-unknownerror' => 'нєвѣдома блаꙁна : ⁖ $1 ⁖',

);
