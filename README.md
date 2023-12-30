# 👻 Very Simple News and Product Prices API

<img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain-wordmark.svg" alt="laravel" width="40" height="40"/> </a> <a href="https://www.linux.org/" target="_blank" rel="noreferrer"> 

This Laravel project provides a simple API to retrieve local/global news articles and local/global product prices.

## Project Setup Guide

### Prerequisites

- PHP installed (recommended version 8.0 or higher)
- Composer installed
- Laravel CLI installed

### Installation Steps

1. **Clone the Repository:**

    ```bash
    git clone https://github.com/your-username/laravel-news-products-api.git
    ```

2. **Navigate to Project Directory:**

    ```bash
    cd laravel-news-products-api
    ```

3. **Install Dependencies:**

    ```bash
    composer install
    ```

4. **Copy Environment File:**

    ```bash
    cp .env.example .env
    ```

5. **Generate Application Key:**

    ```bash
    php artisan key:generate
    ```

6. **Set Up Database (Optional):**

    If you intend to use a database, configure your `.env` file with database credentials and then run migrations:

    ```bash
    php artisan migrate
    ```

7. **Start the Development Server:**

    ```bash
    php artisan serve
    ```

    The API will be available at `http://127.0.0.1:8000/`.


Feel free to customize and expand upon these endpoints based on your specific requirements!
