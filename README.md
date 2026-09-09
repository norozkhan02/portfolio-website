# Noroz Khan Portfolio

A responsive PHP/MySQL portfolio with a public website and session-protected project/message admin panel.

## Local setup

1. Create the database by importing `database.sql` into MySQL.
2. Set `DB_HOST`, `DB_NAME`, `DB_USER`, and `DB_PASSWORD` environment variables, or use the defaults in `includes/config.php`.
3. Run `php setup.php` once to create the admin account and sample projects.
4. Delete `setup.php` after setup, then open `admin/login.php`.

The initial admin credentials are `admin@norozkhan.dev` and `ChangeMe123!`. Change the password implementation before production use.

Run locally with `php -S localhost:8000`, then visit `http://localhost:8000`.

## Frontend-only version

Open `index.html` directly for the standalone HTML/CSS/JS version. Its CSS entry point is `css/style.css` and its JavaScript entry point is `js/script.js`. The static contact form shows a local confirmation; use `index.php` to save messages to MySQL.
