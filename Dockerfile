FROM php:8.2-cli

WORKDIR /app
COPY . .

# Render uses PORT env var. We'll run PHP built-in server.
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT} -t /app"]
