# 💳 MyWallet

Учебный мини-сервис оплат на Laravel. Имитирует базовую логику кошелька и транзакций — **без интеграции с реальными платёжными системами**.

## ⚠️ Дисклеймер

Это демонстрационный/учебный проект. Реальные деньги, банковские карты или платёжные шлюзы (Stripe, Payme, Click и т.д.) не используются. Все операции — симуляция для отработки логики баланса, транзакций и API.

## 🧰 Стек

- PHP + Laravel
- MySQL
- REST API
- Docker

## ✨ Функциональность

- Регистрация/авторизация пользователя
- Баланс кошелька
- Пополнение баланса (симуляция)
- Перевод средств между пользователями
- История транзакций

## 🚀 Установка

```bash
git clone https://github.com/asilbekerdonov/mywallet.git
cd mywallet

composer install
cp .env.example .env
php artisan key:generate

# настроить DB_* в .env под свою MySQL
php artisan migrate

php artisan serve
```

Приложение будет доступно на `http://localhost:8000`.

## ⚙️ Переменные окружения

| Переменная | Описание |
|---|---|
| `DB_CONNECTION` | `mysql` |
| `DB_HOST` | хост базы данных |
| `DB_PORT` | `3306` |
| `DB_DATABASE` | имя базы данных |
| `DB_USERNAME` | пользователь БД |
| `DB_PASSWORD` | пароль БД |

## 📡 API

| Метод | Путь | Описание |
|---|---|---|
| `POST` | `/api/register` | регистрация пользователя |
| `POST` | `/api/login` | авторизация |
| `GET` | `/api/wallet` | получить баланс |
| `POST` | `/api/wallet/topup` | пополнить баланс (симуляция) |
| `POST` | `/api/wallet/transfer` | перевод между пользователями |
| `GET` | `/api/wallet/transactions` | история операций |

## 🧪 Тесты

```bash
php artisan test
```

## 📄 Лицензия

MIT