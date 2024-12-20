# Sử dụng image PHP Apache
FROM php:8.1-apache

# Cài đặt các phần mở rộng cần thiết cho PHP nếu cần
RUN docker-php-ext-install pdo pdo_mysql

# Copy toàn bộ project vào thư mục gốc của Apache
COPY . /var/www/html/

# Cấp quyền đọc và ghi cho thư mục
RUN chown -R www-data:www-data /var/www/html/

# Mở cổng 80 cho Apache
EXPOSE 80

# Khởi động Apache
CMD ["apache2-foreground"]
