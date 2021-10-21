# Castlegate WP Disable Admin Password Change Notifications

A simple plugin which prevents the admin email address from receiving user password change notifications. Simply activate it and it starts working.

It works by declaring an empty function before the relevant function in `pluggable.php` is declared, therefore replacing/removing the function entirely.

Unfortunately this cannot be achieved via a theme because the function would be declared too late, hence the need for this very simple plugin.


## License

Released under the [MIT License](https://opensource.org/licenses/MIT). See [LICENSE](LICENSE) for details.
