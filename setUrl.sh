#!/bin/bash

# Получаем имя codespace и порт
CODESPACE_NAME="${CODESPACE_NAME}"
PORT="80"  # Или "8000" — смотри, какой порт проброшен

if [ -z "$CODESPACE_NAME" ]; then
  echo "Переменная CODESPACE_NAME не установлена."
  exit 0
fi

APP_URL="https://${CODESPACE_NAME}-${PORT}.app.github.dev"

# Заменяем APP_URL в .env
if [ -f .env ]; then
  sed -i "s|^APP_URL=.*|APP_URL=${APP_URL}|" .env
  echo "APP_URL обновлён на: $APP_URL"
else
  echo ".env не найден."
fi
