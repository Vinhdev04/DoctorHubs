FROM php:8.2-apache

# Cài đặt các PHP extensions cần thiết (tùy thuộc vào ứng dụng của bạn)
RUN docker-php-ext-install pdo pdo_mysql

# Copy toàn bộ project vào thư mục gốc web của Apache
COPY . /var/www/html/

# Kích hoạt mod_rewrite cho .htaccess
RUN a2enmod rewrite

# Cấp quyền cần thiết cho Apache
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Cấu hình Apache để cho phép .htaccess override
RUN sed -i '/<Directory \/var\/www\/html>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/sites-available/000-default.conf

# Mặc định Apache sẽ chạy file index.php
EXPOSE 80
CMD ["apache2-foreground"]