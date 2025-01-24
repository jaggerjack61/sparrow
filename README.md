# Sparrow

Coding Interview Project for Sparrow

## Setup Instructions

1. **Install PHP version 8.2 and above**
2. **Install Composer**
3. **Clone the repository onto your machine**
4. **Navigate to the root directory of the repository on your machine**
5. **Install dependencies**:
    ```sh
    composer install
    ```
6. **Refresh the SQLite database and rerun migrations**:
    ```sh
    php artisan migrate:refresh
    ```
7. **Seed the database with default data**:
    ```sh
    php artisan db:seed
    ```
    This will create the default admin account and add mock data.
8. **Start the local server**:
    ```sh
    php artisan serve
    ```
    The application will be available at [http://localhost:8000](http://localhost:8000).

    If port 8000 is in use, specify another port with:
    ```sh
    php artisan serve --port your_port
    ```

9. **Access the application**:
    - Landing page: [http://localhost:8000](http://localhost:8000)
    - Admin site: [http://localhost:8000/login](http://localhost:8000/login)

    Default credentials:
    - **Username**: `admin@example.com`
    - **Password**: `password`

> **Note**: Due to time constraints and other work commitments, this project may not be a 1:1 copy of the inline page. However, it should be comparable enough to allow evaluation my skills.



