# Magento + Warden

## Szybki start

1. Zainstaluj Warden zgodnie z https://docs.warden.dev/
2. W katalogu projektu uruchom:

```bash
warden sign-certificate magento.test
warden env up
warden shell
composer install --ignore-platform-reqs
```

3. Jeśli to nowa instalacja, wykonaj polecenia `bin/magento setup:install` zgodnie z dokumentacją Magento lub readme z mplace_warden.

4. (Opcjonalnie) Przywróć bazę danych z dumpa w `.warden/db`.

## Pliki konfiguracyjne
- `.warden/warden-env.yml` – konfiguracja usług
- `.warden/php-fpm/Dockerfile` – PHP dla Magento
- `.warden/php-debug/Dockerfile` – PHP z Xdebug
- `.warden/db/` – dumpy bazy 