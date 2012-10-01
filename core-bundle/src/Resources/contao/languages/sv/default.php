<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/sv/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_LANG']['ERR']['general'] = 'Ett fel uppstod!';
$GLOBALS['TL_LANG']['ERR']['unique'] = 'Posten i fält "%s" finns redan!';
$GLOBALS['TL_LANG']['ERR']['mandatory'] = 'Fältet "%s" får inte vara tomt!';
$GLOBALS['TL_LANG']['ERR']['mdtryNoLabel'] = 'Detta fält får inte vara tomt!';
$GLOBALS['TL_LANG']['ERR']['minlength'] = 'Innehållet i fältet "%s" måste vara minst %d tecken långt!';
$GLOBALS['TL_LANG']['ERR']['maxlength'] = 'Innehållet i fältet "%s" får inte vara längre än %d tecken långt!';
$GLOBALS['TL_LANG']['ERR']['digit'] = 'Ange enbart siffror!';
$GLOBALS['TL_LANG']['ERR']['prcnt'] = 'Ange en procentsats mellan 0 och 100!';
$GLOBALS['TL_LANG']['ERR']['alpha'] = 'Ange enbart alfabetiska tecken!';
$GLOBALS['TL_LANG']['ERR']['alnum'] = 'Ange enbart alfanummeriska tecken!';
$GLOBALS['TL_LANG']['ERR']['phone'] = 'Ange ett giltigt telefonnummer!';
$GLOBALS['TL_LANG']['ERR']['extnd'] = 'Av säkerhetsskäl så kan du inte använda följande tecknen här: =<>&/()#';
$GLOBALS['TL_LANG']['ERR']['email'] = 'Ange en giltig E-postadress!';
$GLOBALS['TL_LANG']['ERR']['emails'] = 'Det finns minst en felaktig epostadress!';
$GLOBALS['TL_LANG']['ERR']['url'] = 'Ange ett giltigt URL-format och koda alla specialtecken!';
$GLOBALS['TL_LANG']['ERR']['date'] = 'Ange datumet enligt "%s"!';
$GLOBALS['TL_LANG']['ERR']['time'] = 'Ange tiden enligt "%s"!';
$GLOBALS['TL_LANG']['ERR']['dateTime'] = 'Ange datum och tid enligt "%s"!';
$GLOBALS['TL_LANG']['ERR']['noSpace'] = 'Fältet "%s" får inte innehålla några mellanslag!';
$GLOBALS['TL_LANG']['ERR']['filesize'] = 'Den maximala storleken för filuppladdning är %s (Contao- eller php.ini-inställning)!';
$GLOBALS['TL_LANG']['ERR']['filetype'] = 'Filtypen "%s" är inte tillåten att ladda upp!';
$GLOBALS['TL_LANG']['ERR']['filepartial'] = 'Filen %s laddades bara upp delvis!';
$GLOBALS['TL_LANG']['ERR']['filewidth'] = 'Filen %s överskrider maximala bildbredden som är %d pixlar!';
$GLOBALS['TL_LANG']['ERR']['fileheight'] = 'Filen %s överskrider maximala bildhöjden som är %d pixlar!';
$GLOBALS['TL_LANG']['ERR']['invalidReferer'] = 'Tillträde nekas! Den aktuella host-adressen (%s) matchar inte den hänvisande host-adressen (%s)!';
$GLOBALS['TL_LANG']['ERR']['invalidPass'] = 'Ogiltigt lösenord!';
$GLOBALS['TL_LANG']['ERR']['passwordLength'] = 'Ett lösenord måsta vara minst %d tecken långt!';
$GLOBALS['TL_LANG']['ERR']['passwordName'] = 'Ditt användarnamn och lösenord får inte vara samma!';
$GLOBALS['TL_LANG']['ERR']['passwordMatch'] = 'Lösenorden matchar inte varandra!';
$GLOBALS['TL_LANG']['ERR']['accountLocked'] = 'Ditt konto har låsts! Du kan prova att logga in igen om %d minuter.';
$GLOBALS['TL_LANG']['ERR']['invalidLogin'] = 'Inloggningen misslyckades!';
$GLOBALS['TL_LANG']['ERR']['invalidColor'] = 'Felaktigt färgformat!';
$GLOBALS['TL_LANG']['ERR']['all_fields'] = 'Välj minst ett fält!';
$GLOBALS['TL_LANG']['ERR']['aliasExists'] = 'Sidalias "%s" finns redan!';
$GLOBALS['TL_LANG']['ERR']['importFolder'] = 'Mappen "%s" kan inte bli importerad!';
$GLOBALS['TL_LANG']['ERR']['notWriteable'] = 'Filen "%s" är skrivskyddad! Dina ändringar kommer därför inte att sparas!';
$GLOBALS['TL_LANG']['ERR']['invalidName'] = 'Detta fil eller mappnamn är ogiltigt!';
$GLOBALS['TL_LANG']['ERR']['invalidFile'] = 'Filen eller mappen "%s" är ogiltig!';
$GLOBALS['TL_LANG']['ERR']['fileExists'] = 'Filen "%s" finns redan!';
$GLOBALS['TL_LANG']['ERR']['circularReference'] = 'Ogiltigt omdirigeringsmål (cirkelreferens)!';
$GLOBALS['TL_LANG']['ERR']['ie6warning'] = '<strong>Observera!</strong> Din webbläsare är %sutdaterad%s och <strong>du kan därför inte använda alla funktioner på denna hemsida</strong>.';
$GLOBALS['TL_LANG']['ERR']['noFallbackEmpty'] = 'Ingen av de aktiva root-sidorna, som dessutom inte har en specificerad DNS-inställning, har alternativet för språkreträtt aktiverat. Detta innebär att dessa hemsidor enbart är tillgängliga i det språk som angivits i sidinställningarna! Besökare och sökmotorer som inte använder detta språk kommer därför inte att kunna använda hemsidan.';
$GLOBALS['TL_LANG']['ERR']['noFallbackDns'] = 'Ingen av de aktiva root-sidorna för <strong>%s</strong> har alternativet för språkreträtt aktiverat. Detta innebär att dessa hemsidor enbart är tillgängliga i det språk som angivits i sidinställningarna! Besökare och sökmotorer som inte använder detta språk kommer därför inte att kunna använda hemsidan.';
$GLOBALS['TL_LANG']['ERR']['multipleFallback'] = 'Du kan endast ha en root-sida per domän som språkreträtt.';
$GLOBALS['TL_LANG']['ERR']['topLevelRoot'] = 'Root-nivå sidor måste vara root-nivå webbplatssidor!';
$GLOBALS['TL_LANG']['ERR']['topLevelRegular'] = 'Det finns sidor i root-nivå som inte är webbplatssidor. Skapandet av webbplatser utan root-nivå sidor stödjs inte längre så var vänlig att säkerställa att alla sidor är grupperade under webbplatsens root-nivå.';
$GLOBALS['TL_LANG']['ERR']['form'] = 'Formuläret kunde inte skickas';
$GLOBALS['TL_LANG']['ERR']['captcha'] = 'Vänligen svara på säkerhetsfrågan!';
$GLOBALS['TL_LANG']['SEC']['question1'] = 'Addera %d och %d.';
$GLOBALS['TL_LANG']['SEC']['question2'] = 'Vad är summan av %d och %d?';
$GLOBALS['TL_LANG']['SEC']['question3'] = 'Räkna ut %d plus %d.';
$GLOBALS['TL_LANG']['CTE']['texts'] = 'Textelement';
$GLOBALS['TL_LANG']['CTE']['headline'][0] = 'Rubrik';
$GLOBALS['TL_LANG']['CTE']['headline'][1] = 'Skapar en rubrik (h1 - h6).';
$GLOBALS['TL_LANG']['CTE']['text'][0] = 'Text';
$GLOBALS['TL_LANG']['CTE']['text'][1] = 'Skapar ett Rich Text (RTF)-element.';
$GLOBALS['TL_LANG']['CTE']['html'][0] = 'HTML';
$GLOBALS['TL_LANG']['CTE']['html'][1] = 'Tillåter att du lägger till en egen HTML-kod.';
$GLOBALS['TL_LANG']['CTE']['list'][0] = 'Lista';
$GLOBALS['TL_LANG']['CTE']['list'][1] = 'Genererar en numrerad lista eller en punktlista.';
$GLOBALS['TL_LANG']['CTE']['table'][0] = 'Tabell';
$GLOBALS['TL_LANG']['CTE']['table'][1] = 'Skapar en valfritt sorterbar tabell.';
$GLOBALS['TL_LANG']['CTE']['accordion'][0] = 'Dragspel';
$GLOBALS['TL_LANG']['CTE']['accordion'][1] = 'Skapar en mootools dragspelspanel.';
$GLOBALS['TL_LANG']['CTE']['code'][0] = 'Syntax-markeraren';
$GLOBALS['TL_LANG']['CTE']['code'][1] = 'Färgmarkerar och formatterar programkod och visar dem på sidan.';
$GLOBALS['TL_LANG']['CTE']['links'] = 'Länkelement';
$GLOBALS['TL_LANG']['CTE']['hyperlink'][0] = 'Hyperlänk';
$GLOBALS['TL_LANG']['CTE']['hyperlink'][1] = 'Skapar en hyperlänk till en annan sida eller extern hemsida.';
$GLOBALS['TL_LANG']['CTE']['toplink'][0] = 'Upplänk';
$GLOBALS['TL_LANG']['CTE']['toplink'][1] = 'Skapar en hyperlänk för direkthopp till toppen av den aktuella sidan.';
$GLOBALS['TL_LANG']['CTE']['image'][0] = 'Bild';
$GLOBALS['TL_LANG']['CTE']['image'][1] = 'Skapar ett element innehållande en enstaka bild.';
$GLOBALS['TL_LANG']['CTE']['gallery'][0] = 'Bildgalleri';
$GLOBALS['TL_LANG']['CTE']['gallery'][1] = 'Skapar ett element som innehåller flera bilder som kan visas i full storlek genom att klicka på dem.';
$GLOBALS['TL_LANG']['CTE']['files'] = 'Filelement';
$GLOBALS['TL_LANG']['CTE']['download'][0] = 'Nedladdning';
$GLOBALS['TL_LANG']['CTE']['download'][1] = 'Skapar ett element som innehåller en hyperlänk till en fil som kan laddas ner av besökarna på din hemsida.';
$GLOBALS['TL_LANG']['CTE']['downloads'][0] = 'Nedladdningar';
$GLOBALS['TL_LANG']['CTE']['downloads'][1] = 'Skapar ett element som innehåller flera filer som kan laddas ner av besökarna på din hemsida.';
$GLOBALS['TL_LANG']['CTE']['includes'] = 'Inkluderat innehåll';
$GLOBALS['TL_LANG']['CTE']['article'][0] = 'Artikel';
$GLOBALS['TL_LANG']['CTE']['article'][1] = 'Inkluderar en annan artikel.';
$GLOBALS['TL_LANG']['CTE']['alias'][0] = 'Innehållselement';
$GLOBALS['TL_LANG']['CTE']['alias'][1] = 'Inkludera ett annat innehållselement.';
$GLOBALS['TL_LANG']['CTE']['form'][0] = 'Formulär';
$GLOBALS['TL_LANG']['CTE']['form'][1] = 'Inkludera ett formulär.';
$GLOBALS['TL_LANG']['CTE']['module'][0] = 'Modul';
$GLOBALS['TL_LANG']['CTE']['module'][1] = 'Inkluderar en frontend-modul som t.ex. en navigeringsmeny eller en Flash-film i en artikel.';
$GLOBALS['TL_LANG']['CTE']['teaser'][0] = 'Artikelingress';
$GLOBALS['TL_LANG']['CTE']['teaser'][1] = 'Visa ingressen för en utvald artikel.';
$GLOBALS['TL_LANG']['PTY']['regular'][0] = 'Vanlig sida';
$GLOBALS['TL_LANG']['PTY']['regular'][1] = 'En vanlig sida innehåller element och innehållsobjekt vilket är standardsidtypen.';
$GLOBALS['TL_LANG']['PTY']['redirect'][0] = 'Omdirigera till en extern URL';
$GLOBALS['TL_LANG']['PTY']['redirect'][1] = 'Denna sida omdirigerar automatiskt besökaren till en extern URL. Den fungerar som en hyperlänk.';
$GLOBALS['TL_LANG']['PTY']['forward'][0] = 'Omdirigera till en intern sida';
$GLOBALS['TL_LANG']['PTY']['forward'][1] = 'Denna typ av sida omdirigerar automatiskt besökaren till en annan intern sida.';
$GLOBALS['TL_LANG']['PTY']['root'][0] = 'Rot till ny hemsida';
$GLOBALS['TL_LANG']['PTY']['root'][1] = 'Om du vill skapa fler än en hemsida inom samma sidträd så kan du definiera en ny startpunkt här. En rotsida innehåller en DNS-anvisning eller ett språk eller båda.';
$GLOBALS['TL_LANG']['PTY']['error_403'][0] = 'Fel 403 (Åtkomst nekad)';
$GLOBALS['TL_LANG']['PTY']['error_403'][1] = 'Denna sida visas när en användare försöker nå en skyddad sida utan att ha rätt behörighet. Om denna sida placeras i en viss hemside-rot kommer dess användande att begränsas till den hemsidan.';
$GLOBALS['TL_LANG']['PTY']['error_404'][0] = 'Fel 404 (Sidan hittades inte)';
$GLOBALS['TL_LANG']['PTY']['error_404'][1] = 'Denna sida visas när en användare försöker nå en ej tillgänglig sida. Om denna sida placeras i en viss hemside-rot kommer dess användande att begränsas till den hemsidan.';
$GLOBALS['TL_LANG']['FOP']['fop'][0] = 'Filhanteringsbehörigheter';
$GLOBALS['TL_LANG']['FOP']['fop'][1] = 'Välj vilka filhanteringsoperationer som ska tillåtas.';
$GLOBALS['TL_LANG']['FOP']['f1'] = 'Ladda upp filer till servern';
$GLOBALS['TL_LANG']['FOP']['f2'] = 'Redigera, kopiera eller flytta filer och mappar';
$GLOBALS['TL_LANG']['FOP']['f3'] = 'Ta bort enstaka filer och tomma mappar';
$GLOBALS['TL_LANG']['FOP']['f4'] = 'Ta bort mappar med alla ingående filer och undermappar (OBS!)';
$GLOBALS['TL_LANG']['FOP']['f5'] = 'Redigera filer i källkodseditorn';
$GLOBALS['TL_LANG']['CHMOD']['editpage'] = 'Redigera sida';
$GLOBALS['TL_LANG']['CHMOD']['editnavigation'] = 'Redigera sidhierarki';
$GLOBALS['TL_LANG']['CHMOD']['deletepage'] = 'Ta bort sida';
$GLOBALS['TL_LANG']['CHMOD']['editarticles'] = 'Redigera artiklar';
$GLOBALS['TL_LANG']['CHMOD']['movearticles'] = 'Redigera artikelhierarki';
$GLOBALS['TL_LANG']['CHMOD']['deletearticles'] = 'Ta bort artiklar';
$GLOBALS['TL_LANG']['CHMOD']['cuser'] = 'Ägare';
$GLOBALS['TL_LANG']['CHMOD']['cgroup'] = 'Grupp';
$GLOBALS['TL_LANG']['CHMOD']['cworld'] = 'Alla';
$GLOBALS['TL_LANG']['DAYS'][0] = 'Söndag';
$GLOBALS['TL_LANG']['DAYS'][1] = 'Måndag';
$GLOBALS['TL_LANG']['DAYS'][2] = 'Tisdag';
$GLOBALS['TL_LANG']['DAYS'][3] = 'Onsdag';
$GLOBALS['TL_LANG']['DAYS'][4] = 'Torsdag';
$GLOBALS['TL_LANG']['DAYS'][5] = 'Fredag';
$GLOBALS['TL_LANG']['DAYS'][6] = 'Lördag';
$GLOBALS['TL_LANG']['DAYS_SHORT'][0] = 'Sön';
$GLOBALS['TL_LANG']['DAYS_SHORT'][1] = 'Mån';
$GLOBALS['TL_LANG']['DAYS_SHORT'][2] = 'Tis';
$GLOBALS['TL_LANG']['DAYS_SHORT'][3] = 'Ons';
$GLOBALS['TL_LANG']['DAYS_SHORT'][4] = 'Tor';
$GLOBALS['TL_LANG']['DAYS_SHORT'][5] = 'Fre';
$GLOBALS['TL_LANG']['DAYS_SHORT'][6] = 'Lör';
$GLOBALS['TL_LANG']['MONTHS'][0] = 'Januari';
$GLOBALS['TL_LANG']['MONTHS'][1] = 'Februari';
$GLOBALS['TL_LANG']['MONTHS'][2] = 'Mars';
$GLOBALS['TL_LANG']['MONTHS'][3] = 'April';
$GLOBALS['TL_LANG']['MONTHS'][4] = 'Maj';
$GLOBALS['TL_LANG']['MONTHS'][5] = 'Juni';
$GLOBALS['TL_LANG']['MONTHS'][6] = 'Juli';
$GLOBALS['TL_LANG']['MONTHS'][7] = 'Augusti';
$GLOBALS['TL_LANG']['MONTHS'][8] = 'September';
$GLOBALS['TL_LANG']['MONTHS'][9] = 'Oktober';
$GLOBALS['TL_LANG']['MONTHS'][10] = 'November';
$GLOBALS['TL_LANG']['MONTHS'][11] = 'December';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][0] = 'Jan';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][1] = 'Feb';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][2] = 'Mar';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][3] = 'Apr';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][4] = 'Maj';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][5] = 'Jun';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][6] = 'Jul';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][7] = 'Aug';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][8] = 'Sep';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][9] = 'Okt';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][10] = 'Nov';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][11] = 'Dec';
$GLOBALS['TL_LANG']['MSC']['dayShortLength'] = '3';
$GLOBALS['TL_LANG']['MSC']['monthShortLength'] = '3';
$GLOBALS['TL_LANG']['MSC']['weekOffset'] = '0';
$GLOBALS['TL_LANG']['MSC']['titleFormat'] = '%B %d%o, %Y';
$GLOBALS['TL_LANG']['MSC']['url'][0] = 'Mål-URL';
$GLOBALS['TL_LANG']['MSC']['url'][1] = 'Ange en komplett URL inkluderat protokoll (t.ex. <em>http://www.contao.org</em>). För att länka till en E-postadress skriver du <em>mailto:namn@domain.com</em>. Du kan också använda Insert-taggar (t.ex. <em>link_url</em>).';
$GLOBALS['TL_LANG']['MSC']['target'][0] = 'Öppna i ett nytt webbläsarfönster';
$GLOBALS['TL_LANG']['MSC']['target'][1] = 'Om du väljer detta alternativ kommer mål-URL:en att öppnas ett nytt webbläsarfönster.';
$GLOBALS['TL_LANG']['MSC']['decimalSeparator'] = '.';
$GLOBALS['TL_LANG']['MSC']['thousandsSeparator'] = ',';
$GLOBALS['TL_LANG']['MSC']['separator'][0] = 'Separator';
$GLOBALS['TL_LANG']['MSC']['separator'][1] = 'Ange ett tecken som ska användas som fältseparator (separera värden).';
$GLOBALS['TL_LANG']['MSC']['source'][0] = 'Källfiler';
$GLOBALS['TL_LANG']['MSC']['source'][1] = 'Välj de CSV-filer som du vill importera från filarkivet.';
$GLOBALS['TL_LANG']['MSC']['comma'] = 'Komma';
$GLOBALS['TL_LANG']['MSC']['semicolon'] = 'Semikolon';
$GLOBALS['TL_LANG']['MSC']['tabulator'] = 'Tabulator';
$GLOBALS['TL_LANG']['MSC']['linebreak'] = 'Radbrytning';
$GLOBALS['TL_LANG']['MSC']['lw_import'][0] = 'CSV-import';
$GLOBALS['TL_LANG']['MSC']['lw_import'][1] = 'Importera listposter från en CSV-fil';
$GLOBALS['TL_LANG']['MSC']['lw_copy'] = 'Kopiera listposten';
$GLOBALS['TL_LANG']['MSC']['lw_up'] = 'Flytta listposten ett steg uppåt';
$GLOBALS['TL_LANG']['MSC']['lw_down'] = 'Flytta listposten ett steg nedåt';
$GLOBALS['TL_LANG']['MSC']['lw_delete'] = 'Ta bort listposten';
$GLOBALS['TL_LANG']['MSC']['tw_import'][0] = 'CSV-import';
$GLOBALS['TL_LANG']['MSC']['tw_import'][1] = 'Importera tabellposter från en CSV-fil';
$GLOBALS['TL_LANG']['MSC']['tw_expand'] = 'Utöka inmatningsfältets storlek';
$GLOBALS['TL_LANG']['MSC']['tw_shrink'] = 'Minska inmatningsfältets storlek';
$GLOBALS['TL_LANG']['MSC']['tw_rcopy'] = 'Kopiera tabellraden';
$GLOBALS['TL_LANG']['MSC']['tw_rup'] = 'Flytta tabellraden ett steg uppåt';
$GLOBALS['TL_LANG']['MSC']['tw_rdown'] = 'Flytta tabellraden ett steg nedåt';
$GLOBALS['TL_LANG']['MSC']['tw_rdelete'] = 'Radera tabellraden';
$GLOBALS['TL_LANG']['MSC']['tw_ccopy'] = 'Kopiera tabellkolumnen';
$GLOBALS['TL_LANG']['MSC']['tw_cmovel'] = 'Flytta tabellkolumnen ett steg åt vänster';
$GLOBALS['TL_LANG']['MSC']['tw_cmover'] = 'Flytta tabellkolumnen ett steg åt höger';
$GLOBALS['TL_LANG']['MSC']['tw_cdelete'] = 'Ta bort tabellkolumnen';
$GLOBALS['TL_LANG']['MSC']['ow_copy'] = 'Kopiera raden';
$GLOBALS['TL_LANG']['MSC']['ow_up'] = 'Flytta raden ett steg uppåt';
$GLOBALS['TL_LANG']['MSC']['ow_down'] = 'Flytta raden ett steg nedåt';
$GLOBALS['TL_LANG']['MSC']['ow_delete'] = 'Radera raden';
$GLOBALS['TL_LANG']['MSC']['ow_value'] = 'Värde';
$GLOBALS['TL_LANG']['MSC']['ow_label'] = 'Etikett';
$GLOBALS['TL_LANG']['MSC']['ow_key'] = 'Nyckel';
$GLOBALS['TL_LANG']['MSC']['ow_default'] = 'Förvalt';
$GLOBALS['TL_LANG']['MSC']['ow_group'] = 'Grupp';
$GLOBALS['TL_LANG']['MSC']['mw_copy'] = 'Kopiera raden';
$GLOBALS['TL_LANG']['MSC']['mw_up'] = 'Flytta raden ett steg uppåt';
$GLOBALS['TL_LANG']['MSC']['mw_down'] = 'Flytta raden ett steg nedåt';
$GLOBALS['TL_LANG']['MSC']['mw_delete'] = 'Ta bort raden';
$GLOBALS['TL_LANG']['MSC']['mw_module'] = 'Modul';
$GLOBALS['TL_LANG']['MSC']['mw_column'] = 'Kolumn';
$GLOBALS['TL_LANG']['MSC']['relative'] = 'Relativa dimensioner';
$GLOBALS['TL_LANG']['MSC']['proportional'][0] = 'Proportionellt';
$GLOBALS['TL_LANG']['MSC']['proportional'][1] = 'Den längre sidan av bilden är justerad till den angivna dimensionen och bilden har omskalats propertionellt.';
$GLOBALS['TL_LANG']['MSC']['box'][0] = 'Passa in i box';
$GLOBALS['TL_LANG']['MSC']['box'][1] = 'Den kortare sidan av bilden är justerad till den angivna dimensionen och bilden har omskalats propertionellt.';
$GLOBALS['TL_LANG']['MSC']['crop'] = 'Exakta mått';
$GLOBALS['TL_LANG']['MSC']['left_top'][0] = 'Vänster övre';
$GLOBALS['TL_LANG']['MSC']['left_top'][1] = 'Bevarar den vänstra delen av en landskapsbild och den övre delen av en porträttbild.';
$GLOBALS['TL_LANG']['MSC']['center_top'][0] = 'Mitten övre';
$GLOBALS['TL_LANG']['MSC']['center_top'][1] = 'Bevarar mittendelen av en landskapsbild och den övre delen av en porträttbild.';
$GLOBALS['TL_LANG']['MSC']['right_top'][0] = 'Höger övre';
$GLOBALS['TL_LANG']['MSC']['right_top'][1] = 'Bevarar den högra delen av en landskapsbild och den övre delen av en porträttbild.';
$GLOBALS['TL_LANG']['MSC']['left_center'][0] = 'Vänster mitten';
$GLOBALS['TL_LANG']['MSC']['left_center'][1] = 'Bevarar den vänstra delen av en landskapsbild och mittendelen av en porträttbild.';
$GLOBALS['TL_LANG']['MSC']['center_center'][0] = 'Mitten mitten';
$GLOBALS['TL_LANG']['MSC']['center_center'][1] = 'Bevarar den mittendelen av en landskapsbild och mittendelen av en porträttbild.';
$GLOBALS['TL_LANG']['MSC']['right_center'][0] = 'Höger mitten';
$GLOBALS['TL_LANG']['MSC']['right_center'][1] = 'Bevarar den högra delen av en landskapsbild och mittendelen av en porträttbild.';
$GLOBALS['TL_LANG']['MSC']['left_bottom'][0] = 'Vänster nedre';
$GLOBALS['TL_LANG']['MSC']['left_bottom'][1] = 'Bevarar den vänstra delen av en landskapsbild och den nedre delen av en porträttbild.';
$GLOBALS['TL_LANG']['MSC']['center_bottom'][0] = 'Mitten nedre';
$GLOBALS['TL_LANG']['MSC']['center_bottom'][1] = 'Bevarar mittendelen av en landskapsbild och den nedre delen av en porträttbild.';
$GLOBALS['TL_LANG']['MSC']['right_bottom'][0] = 'Höger nedre';
$GLOBALS['TL_LANG']['MSC']['right_bottom'][1] = 'Bevarar den högra delen av en landskapsbild och den nedre delen av en porträttbild.';
$GLOBALS['TL_LANG']['MSC']['id'][0] = 'ID';
$GLOBALS['TL_LANG']['MSC']['id'][1] = 'Ett ID är ett unikt identifieringnummer för en post i en tabell. Ett ID tilldelas vanligtvis automatiskt. Då dessa ID används för att relatera till poster kan en ändring av dem leda till att data inte förblir konsistent!';
$GLOBALS['TL_LANG']['MSC']['pid'][0] = 'Föräldra-ID';
$GLOBALS['TL_LANG']['MSC']['pid'][1] = 'Ett föräldra-ID är identifieringsnummret på en överliggande post som den aktuella posten är relaterad till. Föräldra-ID tilldelas vanligtvis automatiskt. Då dessa föräldra-ID används för att relatera till poster kan en ändring av dem leda till att data inte förblir konsistent!';
$GLOBALS['TL_LANG']['MSC']['sorting'][0] = 'Sorteringsvärde';
$GLOBALS['TL_LANG']['MSC']['sorting'][1] = 'Ett sorteringsvärde används till att arrangera poster i en viss ordning. Sorteringsvärden tilldelas vanligtvis automatiskt.';
$GLOBALS['TL_LANG']['MSC']['all'][0] = 'Redigera flera poster';
$GLOBALS['TL_LANG']['MSC']['all'][1] = 'Redigera flera poster samtidigt - parallellt';
$GLOBALS['TL_LANG']['MSC']['all_fields'][0] = 'Tillgängliga fält';
$GLOBALS['TL_LANG']['MSC']['all_fields'][1] = 'Välj vilka fält du vill redigera';
$GLOBALS['TL_LANG']['MSC']['password'][0] = 'Lösenord';
$GLOBALS['TL_LANG']['MSC']['password'][1] = 'Ange ett lösenord';
$GLOBALS['TL_LANG']['MSC']['confirm'][0] = 'Bekräfta lösenord';
$GLOBALS['TL_LANG']['MSC']['confirm'][1] = 'Bekräfta lösenordet';
$GLOBALS['TL_LANG']['MSC']['dateAdded'][0] = 'Skapad';
$GLOBALS['TL_LANG']['MSC']['dateAdded'][1] = 'Skapad: %s';
$GLOBALS['TL_LANG']['MSC']['lastLogin'][0] = 'Senaste inloggad';
$GLOBALS['TL_LANG']['MSC']['lastLogin'][1] = 'Senaste inloggad: %s';
$GLOBALS['TL_LANG']['MSC']['move_up'][0] = 'Flytta upp';
$GLOBALS['TL_LANG']['MSC']['move_up'][1] = 'Flytta ett steg uppåt.';
$GLOBALS['TL_LANG']['MSC']['move_down'][0] = 'Flytta ner';
$GLOBALS['TL_LANG']['MSC']['move_down'][1] = 'Flytta ett steg nedåt.';
$GLOBALS['TL_LANG']['MSC']['staticFiles'][0] = 'Fil-URL';
$GLOBALS['TL_LANG']['MSC']['staticFiles'][1] = 'Fil-URL appliceras på <em>tl_files</em>-mappen och alla bilders tumnaglar (optimering av sidladdningshastighet).';
$GLOBALS['TL_LANG']['MSC']['staticPlugins'][0] = 'Plugin-URL';
$GLOBALS['TL_LANG']['MSC']['staticPlugins'][1] = 'Plugin-URL appliceras på alla resurser i <em>plugins</em>-mappen (optimering av sidladdningshastighet).';
$GLOBALS['TL_LANG']['MSC']['shortcuts'][0] = 'Backend snabbtangenter';
$GLOBALS['TL_LANG']['MSC']['shortcuts'][1] = 'Lär dig mer om att snabba upp ditt arbete i backend genom att använda <a href="http://www.contao.org/keyboard-shortcuts.html" target="_blank">snabbtangenter</a>.';
$GLOBALS['TL_LANG']['MSC']['feLink'] = 'Gå till frontend';
$GLOBALS['TL_LANG']['MSC']['fePreview'] = 'Förhandsvisa';
$GLOBALS['TL_LANG']['MSC']['feUser'] = 'Visa som inloggad medlem';
$GLOBALS['TL_LANG']['MSC']['backToTop'] = 'Tillbaka till toppen';
$GLOBALS['TL_LANG']['MSC']['home'] = 'Hem';
$GLOBALS['TL_LANG']['MSC']['user'] = 'Användare';
$GLOBALS['TL_LANG']['MSC']['loginTo'] = 'Logga in på %s';
$GLOBALS['TL_LANG']['MSC']['loginBT'] = 'Logga in';
$GLOBALS['TL_LANG']['MSC']['logoutBT'] = 'Logga ut';
$GLOBALS['TL_LANG']['MSC']['backBT'] = 'Tillbaka';
$GLOBALS['TL_LANG']['MSC']['cancelBT'] = 'Avbryt';
$GLOBALS['TL_LANG']['MSC']['deleteConfirm'] = 'Vill du verkligen ta bort posten med ID %s?';
$GLOBALS['TL_LANG']['MSC']['delAllConfirm'] = 'Vill du verkligen ta bort de markerade posterna?';
$GLOBALS['TL_LANG']['MSC']['filterRecords'] = 'Poster';
$GLOBALS['TL_LANG']['MSC']['filterAll'] = 'Alla';
$GLOBALS['TL_LANG']['MSC']['showRecord'] = 'Visa detaljer för %s';
$GLOBALS['TL_LANG']['MSC']['editRecord'] = 'Redigera %s';
$GLOBALS['TL_LANG']['MSC']['all_info'] = 'Redigera alla aktiva poster i tabellen %s';
$GLOBALS['TL_LANG']['MSC']['showOnly'] = 'Visa';
$GLOBALS['TL_LANG']['MSC']['sortBy'] = 'Sortera';
$GLOBALS['TL_LANG']['MSC']['filter'] = 'Filtrera';
$GLOBALS['TL_LANG']['MSC']['search'] = 'Sök';
$GLOBALS['TL_LANG']['MSC']['noResult'] = 'Inga poster funna.';
$GLOBALS['TL_LANG']['MSC']['save'] = 'Spara';
$GLOBALS['TL_LANG']['MSC']['saveNclose'] = 'Spara och stäng';
$GLOBALS['TL_LANG']['MSC']['saveNedit'] = 'Spara och redigera';
$GLOBALS['TL_LANG']['MSC']['saveNback'] = 'Spara och gå tillbaka';
$GLOBALS['TL_LANG']['MSC']['saveNcreate'] = 'Spara och ny';
$GLOBALS['TL_LANG']['MSC']['continue'] = 'Fortsätt';
$GLOBALS['TL_LANG']['MSC']['skipNavigation'] = 'Ta bort navigering';
$GLOBALS['TL_LANG']['MSC']['selectAll'] = 'Markera alla';
$GLOBALS['TL_LANG']['MSC']['pw_change'] = 'Ange ett nytt lösenord.';
$GLOBALS['TL_LANG']['MSC']['pw_changed'] = 'Lösenordet har uppdaterats.';
$GLOBALS['TL_LANG']['MSC']['fallback'] = 'Standardvärde';
$GLOBALS['TL_LANG']['MSC']['view'] = 'Visa i nytt fönster';
$GLOBALS['TL_LANG']['MSC']['fullsize'] = 'Öppna bilder i fullstorlek i ett nytt fönster';
$GLOBALS['TL_LANG']['MSC']['colorpicker'] = 'Färgväljare (kräver JavaScript)';
$GLOBALS['TL_LANG']['MSC']['pagepicker'] = 'Sidväljare (kräver JavaScript)';
$GLOBALS['TL_LANG']['MSC']['filepicker'] = 'Filväljare (kräver JavaScript)';
$GLOBALS['TL_LANG']['MSC']['ppHeadline'] = 'Contao-sidor';
$GLOBALS['TL_LANG']['MSC']['fpHeadline'] = 'Contao-filer';
$GLOBALS['TL_LANG']['MSC']['yes'] = 'ja';
$GLOBALS['TL_LANG']['MSC']['no'] = 'nej';
$GLOBALS['TL_LANG']['MSC']['goBack'] = 'Tillbaka';
$GLOBALS['TL_LANG']['MSC']['reload'] = 'Uppdatera';
$GLOBALS['TL_LANG']['MSC']['above'] = 'ovan';
$GLOBALS['TL_LANG']['MSC']['below'] = 'nedan';
$GLOBALS['TL_LANG']['MSC']['date'] = 'Datum';
$GLOBALS['TL_LANG']['MSC']['tstamp'] = 'Ändringsdatum';
$GLOBALS['TL_LANG']['MSC']['entry'] = '%s post';
$GLOBALS['TL_LANG']['MSC']['entries'] = '%s poster';
$GLOBALS['TL_LANG']['MSC']['left'] = 'vänster';
$GLOBALS['TL_LANG']['MSC']['center'] = 'mitten';
$GLOBALS['TL_LANG']['MSC']['right'] = 'höger';
$GLOBALS['TL_LANG']['MSC']['justify'] = 'justerad';
$GLOBALS['TL_LANG']['MSC']['filetree'] = 'Filsystem';
$GLOBALS['TL_LANG']['MSC']['male'] = 'Man';
$GLOBALS['TL_LANG']['MSC']['female'] = 'Kvinna';
$GLOBALS['TL_LANG']['MSC']['fileSize'] = 'Filstorlek';
$GLOBALS['TL_LANG']['MSC']['fileCreated'] = 'Skapad';
$GLOBALS['TL_LANG']['MSC']['fileModified'] = 'Senast ändrad';
$GLOBALS['TL_LANG']['MSC']['fileAccessed'] = 'Senaste användning';
$GLOBALS['TL_LANG']['MSC']['fileDownload'] = 'Ladda ner';
$GLOBALS['TL_LANG']['MSC']['fileImageSize'] = 'Bredd/höjd i pixlar';
$GLOBALS['TL_LANG']['MSC']['filePath'] = 'Relativ sökväg';
$GLOBALS['TL_LANG']['MSC']['version'] = 'Version';
$GLOBALS['TL_LANG']['MSC']['restore'] = 'Återställ';
$GLOBALS['TL_LANG']['MSC']['backendModules'] = 'Moduler i backend';
$GLOBALS['TL_LANG']['MSC']['welcomeTo'] = '%s backend';
$GLOBALS['TL_LANG']['MSC']['updateVersion'] = 'Contao version %s är tillgänglig';
$GLOBALS['TL_LANG']['MSC']['wordWrap'] = 'Radbrytning';
$GLOBALS['TL_LANG']['MSC']['saveAlert'] = 'VARNING! Du kommer att förlora alla ej sparade ändringar. Fortsätta?';
$GLOBALS['TL_LANG']['MSC']['toggleNodes'] = 'Öppna/stäng alla noder';
$GLOBALS['TL_LANG']['MSC']['expandNode'] = 'Öppna nod';
$GLOBALS['TL_LANG']['MSC']['collapseNode'] = 'Stäng nod';
$GLOBALS['TL_LANG']['MSC']['loadingData'] = 'Laddar data';
$GLOBALS['TL_LANG']['MSC']['deleteSelected'] = 'Radera';
$GLOBALS['TL_LANG']['MSC']['editSelected'] = 'Redigera';
$GLOBALS['TL_LANG']['MSC']['overrideSelected'] = 'Åsidosätta';
$GLOBALS['TL_LANG']['MSC']['moveSelected'] = 'Flytta';
$GLOBALS['TL_LANG']['MSC']['copySelected'] = 'Kopiera';
$GLOBALS['TL_LANG']['MSC']['changeSelected'] = 'Ändra valda';
$GLOBALS['TL_LANG']['MSC']['resetSelected'] = 'Nollställ valda';
$GLOBALS['TL_LANG']['MSC']['fileManager'] = 'Öppna filhanteraren i ett popup-fönster';
$GLOBALS['TL_LANG']['MSC']['systemMessages'] = 'Systemmeddelande';
$GLOBALS['TL_LANG']['MSC']['clearClipboard'] = 'Töm urklippet';
$GLOBALS['TL_LANG']['MSC']['hiddenElements'] = 'Ej publicerade element';
$GLOBALS['TL_LANG']['MSC']['hiddenHide'] = 'göm';
$GLOBALS['TL_LANG']['MSC']['hiddenShow'] = 'visa';
$GLOBALS['TL_LANG']['MSC']['apply'] = 'Utför';
$GLOBALS['TL_LANG']['MSC']['mandatory'] = 'Obligatoriskt fält';
$GLOBALS['TL_LANG']['MSC']['create'] = 'Skapa';
$GLOBALS['TL_LANG']['MSC']['delete'] = 'Radera';
$GLOBALS['TL_LANG']['MSC']['protected'] = 'skyddad';
$GLOBALS['TL_LANG']['MSC']['guests'] = 'enbart gäster';
$GLOBALS['TL_LANG']['MSC']['updateMode'] = 'Uppdateringsläge';
$GLOBALS['TL_LANG']['MSC']['updateAdd'] = 'Lägg till valda värden';
$GLOBALS['TL_LANG']['MSC']['updateRemove'] = 'Tag bort valda värden';
$GLOBALS['TL_LANG']['MSC']['updateReplace'] = 'Byt ut nuvarande poster';
$GLOBALS['TL_LANG']['MSC']['ascending'] = 'stigande';
$GLOBALS['TL_LANG']['MSC']['descending'] = 'sjunkande';
$GLOBALS['TL_LANG']['MSC']['default'] = 'Standard';
$GLOBALS['TL_LANG']['MSC']['helpWizard'] = 'Hjälpguiden';
$GLOBALS['TL_LANG']['MSC']['noCookies'] = 'Du måste tillåta cookies för att kunna använda Contao.';
$GLOBALS['TL_LANG']['MSC']['copyOf'] = '%s (kopia)';
$GLOBALS['TL_LANG']['MSC']['coreOnlyMode'] = 'Contao körs för nuvarande i <strong>safe mode</strong> (säkert läge) där enbart kärnans moduler laddas. Detta läge aktiveras bl.a efter en Live Update för att förhindra ev. kompatibilitetsproblem med 3:e-partsmoduler. Du kan deaktivera safe mode i backend-inställningarna efter att du kontrollerat de installerade 3:e-partsmodulerna.';
$GLOBALS['TL_LANG']['MSC']['emailAddress'] = 'E-postadress';
$GLOBALS['TL_LANG']['MSC']['register'] = 'Registrera';
$GLOBALS['TL_LANG']['MSC']['accountActivated'] = 'Ditt konto har aktiverats.';
$GLOBALS['TL_LANG']['MSC']['accountError'] = 'Det gick inte att genomföra registreringen.';
$GLOBALS['TL_LANG']['MSC']['emailSubject'] = 'Din registrering på %s';
$GLOBALS['TL_LANG']['MSC']['adminSubject'] = 'Contao :: ny registrering på %s';
$GLOBALS['TL_LANG']['MSC']['adminText'] = 'En ny användare (ID %s) har registrerat sig på din webbplats.%s Om du inte har valt att tillåta E-postaktivering måste du logga in i backend och aktivera kontot manuellt.';
$GLOBALS['TL_LANG']['MSC']['requestPassword'] = 'Begär lösenord';
$GLOBALS['TL_LANG']['MSC']['setNewPassword'] = 'Ange nytt lösenord';
$GLOBALS['TL_LANG']['MSC']['newPasswordSet'] = 'Ditt lösenord har uppdaterats.';
$GLOBALS['TL_LANG']['MSC']['passwordSubject'] = 'Din lösenordsförfrågan för %s';
$GLOBALS['TL_LANG']['MSC']['accountNotFound'] = 'Inget matchande konto hittat';
$GLOBALS['TL_LANG']['MSC']['securityQuestion'] = 'Säkerhetsfråga';
$GLOBALS['TL_LANG']['MSC']['closeAccount'] = 'Avsluta kontot';
$GLOBALS['TL_LANG']['MSC']['go'] = 'Till';
$GLOBALS['TL_LANG']['MSC']['quicknav'] = 'Snabbnavigering';
$GLOBALS['TL_LANG']['MSC']['quicklink'] = 'Snabblänk';
$GLOBALS['TL_LANG']['MSC']['username'] = 'Användarnamn';
$GLOBALS['TL_LANG']['MSC']['login'] = 'Logga in';
$GLOBALS['TL_LANG']['MSC']['logout'] = 'Logga ut';
$GLOBALS['TL_LANG']['MSC']['loggedInAs'] = 'Du är inloggad som %s.';
$GLOBALS['TL_LANG']['MSC']['emptyField'] = 'Ange användarnamn och lösenord!';
$GLOBALS['TL_LANG']['MSC']['confirmation'] = 'Bekräftelse';
$GLOBALS['TL_LANG']['MSC']['sMatches'] = '%s förekomster för %s';
$GLOBALS['TL_LANG']['MSC']['sEmpty'] = 'Inga träffar för <strong>%s</strong>';
$GLOBALS['TL_LANG']['MSC']['sResults'] = 'Resultat %s - %s av %s för <strong>%s</strong>';
$GLOBALS['TL_LANG']['MSC']['sNoResult'] = 'Din sökning efter <strong>%s</strong> gav inga träffar.';
$GLOBALS['TL_LANG']['MSC']['seconds'] = 'sekunder';
$GLOBALS['TL_LANG']['MSC']['up'] = 'Upp';
$GLOBALS['TL_LANG']['MSC']['first'] = '« Första';
$GLOBALS['TL_LANG']['MSC']['previous'] = 'Föregående';
$GLOBALS['TL_LANG']['MSC']['next'] = 'Nästa';
$GLOBALS['TL_LANG']['MSC']['last'] = 'Sista »';
$GLOBALS['TL_LANG']['MSC']['goToPage'] = 'Gå till sida %s';
$GLOBALS['TL_LANG']['MSC']['totalPages'] = 'Sidan %s av %s';
$GLOBALS['TL_LANG']['MSC']['fileUploaded'] = 'Filen %s laddades upp';
$GLOBALS['TL_LANG']['MSC']['fileExceeds'] = 'Bilden %s laddades upp utan problem. Dock är den för stor för att bli omskalad automatiskt.';
$GLOBALS['TL_LANG']['MSC']['fileResized'] = 'Bilden %s laddades upp och skalades om till max-dimensionerna.';
$GLOBALS['TL_LANG']['MSC']['searchLabel'] = 'Sök';
$GLOBALS['TL_LANG']['MSC']['keywords'] = 'Nyckelord';
$GLOBALS['TL_LANG']['MSC']['options'] = 'Alternativ';
$GLOBALS['TL_LANG']['MSC']['matchAll'] = 'matchar alla ord';
$GLOBALS['TL_LANG']['MSC']['matchAny'] = 'matchar något ord';
$GLOBALS['TL_LANG']['MSC']['saveData'] = 'Spara data';
$GLOBALS['TL_LANG']['MSC']['printPage'] = 'Skriv ut sidan';
$GLOBALS['TL_LANG']['MSC']['printAsPdf'] = 'Spara artikeln som PDF';
$GLOBALS['TL_LANG']['MSC']['facebookShare'] = 'Dela på Facebook';
$GLOBALS['TL_LANG']['MSC']['twitterShare'] = 'Dela på Twitter';
$GLOBALS['TL_LANG']['MSC']['pleaseWait'] = 'Vänligen vänta';
$GLOBALS['TL_LANG']['MSC']['loading'] = 'Laddar...';
$GLOBALS['TL_LANG']['MSC']['more'] = 'Läs mer...';
$GLOBALS['TL_LANG']['MSC']['readMore'] = 'Läs artikel: %s';
$GLOBALS['TL_LANG']['MSC']['targetPage'] = 'Målsida';
$GLOBALS['TL_LANG']['MSC']['invalidPage'] = 'Vi är ledsna, men "%s" existerar inte.';
$GLOBALS['TL_LANG']['MSC']['list_orderBy'] = 'Sortera efter %s';
$GLOBALS['TL_LANG']['MSC']['list_perPage'] = 'Resultat per sida';
$GLOBALS['TL_LANG']['MSC']['published'] = 'Publicerad';
$GLOBALS['TL_LANG']['MSC']['unpublished'] = 'Ej publicerad';
$GLOBALS['TL_LANG']['MSC']['addComment'] = 'Lägg till en kommentar';
$GLOBALS['TL_LANG']['MSC']['autologin'] = 'Kom ihåg mig';
$GLOBALS['TL_LANG']['MSC']['relevance'] = '%s relevans';
$GLOBALS['TL_LANG']['UNITS'][0] = 'Byte';
$GLOBALS['TL_LANG']['UNITS'][1] = 'kB';
$GLOBALS['TL_LANG']['UNITS'][2] = 'MB';
$GLOBALS['TL_LANG']['UNITS'][3] = 'GB';
$GLOBALS['TL_LANG']['UNITS'][4] = 'TB';
$GLOBALS['TL_LANG']['UNITS'][5] = 'PB';
$GLOBALS['TL_LANG']['UNITS'][6] = 'EB';
$GLOBALS['TL_LANG']['UNITS'][7] = 'ZB';
$GLOBALS['TL_LANG']['UNITS'][8] = 'YB';
$GLOBALS['TL_LANG']['DP']['select_a_time'] = 'Välj en tid';
$GLOBALS['TL_LANG']['DP']['use_mouse_wheel'] = 'Använd mushjulet för att snabbt ändra värde';
$GLOBALS['TL_LANG']['DP']['time_confirm_button'] = 'OK';
$GLOBALS['TL_LANG']['DP']['apply_range'] = 'Utför';
$GLOBALS['TL_LANG']['DP']['cancel'] = 'Avbryt';
$GLOBALS['TL_LANG']['DP']['week'] = 'Wk';
