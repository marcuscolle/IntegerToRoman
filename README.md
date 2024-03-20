# Roman Numeral Converter

This is a simple Laravel application for converting integers to roman numerals and roman numerals to integer. 

## Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/marcuscolle/IntegerToRoman
Navigate to the project directory:

cd IntegerToRoman
Install dependencies using Composer:
composer install

Set up your environment variables:
Copy the .env.example file to .env.
Configure your database connection and other settings in the .env file.
Generate application key:


php artisan key:generate to generate a project key

Run the migration to create the necessary database tables:
php artisan migrate

Start the Laravel development server:
php artisan serve


Usage
Access the application in your web browser by visiting http://localhost:8000.
Enter an integer from 1 to 100000 in the input field and click "Convert" to get its Roman numeral representation.
Enter an roman numeral in the input fiels and click "Convert" to get its related arabic numbers.

License
This project is licensed under the MIT License. See the LICENSE file for details.



