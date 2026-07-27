# Zedy Agent Guide

## Runtime and framework

- Target PHP 8.2 or later. Keep Composer's `config.platform.php` at the minimum supported PHP version.
- This application targets Laravel 12. Preserve Laravel 12-compatible dependency constraints.
- Run Composer with `COMPOSER_ALLOW_SUPERUSER=1` only when the execution environment requires root.

## Upgrade compatibility

- Keep `laravel/ui` while routes use `Auth::routes()`.
- Use class-based controller actions in routes; Laravel 12 does not automatically apply the old controller namespace.
- Use the Laravel 12 `HandleCors` and `PreventRequestsDuringMaintenance` middleware classes.
- Use class-based factories and the `Database\Seeders` namespace for seed data.
- Use `request()->file()` and `Str` helpers; the legacy `Input` facade and global `str_*` helpers are unavailable.

## Validation

- Run `composer validate`, `php artisan test`, and `php artisan route:list` after dependency or framework changes.
