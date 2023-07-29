# Laravel Excel Import Example

This is a simple example project to demonstrate how to import Excel files in Laravel using the `maatwebsite/excel` library. It allows you to upload an Excel file containing employee data, which is then imported into the database and displayed on the upload page.

## Getting Started

### Prerequisites

Before running the project, make sure you have the following installed:

- PHP Spreadsheet extension (`phpoffice/phpspreadsheet`)
- GD extension for image processing

### Installation

1. Clone the repository to your local machine:

```bash
git clone https://github.com/Akhand2021/laravel-excel-import-example.git
```

2. Change into the project directory:

```bash
cd laravel-excel-import-example
```

3. Install the required packages using Composer:

```bash
composer install
```

### Configuration

1. Create a new MySQL database for the project.

2. Rename the `.env.example` file to `.env` and update the following database configuration with your credentials:

```env
DB_CONNECTION=mysql
DB_HOST=your_database_host
DB_PORT=your_database_port
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

3. Generate a new application key:

```bash
php artisan key:generate
```

4. Run migratoin command for tables:

```bash
php artisan migrate
```

### Running the Application

To run the application, use the following command:

```bash
php artisan serve
```

This will start a development server, and you can access the application by visiting `http://localhost:8000` in your web browser.

## Usage

1. Visit the homepage `http://localhost:8000`.

2. Click on the "Choose File" button and select an Excel file containing employee data (make sure the file format is `.xlsx` or `.xls`).

3. Click the "Upload" button to import the data into the database.

4. If the upload is successful, you will see a auto hide success message and the imported data in a table below the upload form.

## License

This project is licensed under the [MIT License](LICENSE). Feel free to use it and modify it according to your needs.

## Acknowledgments

This project uses the [Laravel](https://laravel.com/) framework and the [maatwebsite/excel](https://github.com/Maatwebsite/Laravel-Excel) library for Excel file import functionality.

Thank you for using the `laravel-excel-import-example` project! If you have any questions or feedback, please feel free to open an issue or submit a pull request. Happy coding!

![image](https://github.com/Akhand2021/laravel-excel-import-example/assets/104663417/c709b755-14f5-4ea0-844b-0100231e0a70)
![image](https://github.com/Akhand2021/laravel-excel-import-example/assets/104663417/cbc969bb-7829-46c1-ab93-502a5205bb7b)
