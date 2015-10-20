# Post by User 1.0.0

UA
===

Розширення дозволяє публікувати адміністратору проекти / товари / портфоліо від імені іншого користувача вказавши його ID або логін. Використовується розширення autocomplete для логіну

### Інструкція по установці:

1. Завантажити і розпакувати вміст архіву, скопіювати файли в папку plugins.
2. Встановити через панель: (Управління сайтом / Розширення / Post by user).
3. Додати теги в шаблони

В шаблоні projects.add.tpl додати:

```html
<!-- IF {PRJADD_FORM_POSTBYUSER} -->
<tr>
	<td>{PHP.L.postbyuser_from}:</td>
	<td>{PRJADD_FORM_POSTBYUSER}</td>
</tr>
<!-- ENDIF -->
```
В шаблонах market.add.tpl і folio.add.tpl додати:

```html
<!-- IF {PRDADD_FORM_POSTBYUSER} -->
<tr>
	<td>{PHP.L.postbyuser_from}:</td>
	<td>{PRDADD_FORM_POSTBYUSER}</td>
</tr>
<!-- ENDIF -->
```
Розширення налаштовано для [GitHub Check](https://github.com/CrazyFreeMan/cot-githubcheckupdate)

RU
===

Плагин позволяет публиковать администратору проекты / товары / портфолио от имени другого пользователя указав логин или id. Испоьзуется autocomplete логинов.

### Установка:

1. Загрузить и распаковать файли в папку plugins.
2. Установить через панель: (Управленние сайтом / Расширения / Post by user)).
3. Добавить теги в шаблоны

В шаблоне projects.add.tpl добавить:

```html
<!-- IF {PRJADD_FORM_POSTBYUSER} -->
<tr>
	<td>{PHP.L.postbyuser_from}:</td>
	<td>{PRJADD_FORM_POSTBYUSER}</td>
</tr>
<!-- ENDIF -->
```
В шаблонах market.add.tpl и folio.add.tpl добавить:

```html
<!-- IF {PRDADD_FORM_POSTBYUSER} -->
<tr>
	<td>{PHP.L.postbyuser_from}:</td>
	<td>{PRDADD_FORM_POSTBYUSER}</td>
</tr>
<!-- ENDIF -->
```

Плагин настроен для [GitHub Check](https://github.com/CrazyFreeMan/cot-githubcheckupdate)

Розробник: Ярослав Романенко (yaroslav.romanenko@gmail.com)

Для CMSWorks.ru
