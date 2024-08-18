## Haajt

```bash
php artisan serve
```

```bash
npm run dev
```

#### Formatowanie plików blade
https://www.npmjs.com/package/prettier-plugin-blade

ustaw sobie w vscode w ustawieniach

```javascript
{
  "[blade]": {
    "editor.defaultFormatter": "esbenp.prettier-vscode"
  },
  "prettier.documentSelectors": [
      "**/*.blade.php"
  ]
}
```



##### tłumaczenia
dodajesz w HTMLu np.
```php
{{ __('Contact') }}
```
a potem możesz puścić komende
`php artisan langscanner pl`

i on dorobi w pliku pl.json klucz z pustym tłumaczeniem
