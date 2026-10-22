# Wedding Day — ანიმირებული მოსაწვევი (Laravel)

ქორწილის ანიმირებული მოსაწვევი: „მზად ხარ თავგადასავლისთვის?“ → „დაწყება“ → ოქროს კალმით იწერება და იხატება მოსაწვევი, მელოდიით (Web Audio), ბოლოს — უკუთვლა.

## გაშვება

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

გახსენი http://127.0.0.1:8000

## სად რა იცვლება

- მოსაწვევი: `resources/views/invitation.blade.php` (სახელები, თარიღი, ადგილი — HTML-ში ტექსტად)
- სათაური / გაზიარების აღწერა / უკუთვლის დრო: `.env` → `WEDDING_TITLE`, `WEDDING_DESCRIPTION`, `WEDDING_STARTS_AT`
- მარშრუტი: `routes/web.php` (`/`)

ბაზა არ სჭირდება. Vite/npm არ სჭირდება — ყველაფერი ერთ Blade ფაილშია.
