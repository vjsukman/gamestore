## Installation

To set up GameStore in your local environment, follow these steps

1. **Clone the repository**: Clone this repository to your local machine using `git clone https://github.com/danielwidhiarto/GameStore.git`.

2. **Install dependencies**: Navigate to the project directory and install the Laravel dependencies by running `composer install`.

3. **Environment Configuration**: Copy the `.env.example` file to `.env` and configure your database and other settings.

4. **Generate Application Key**: Run `php artisan key:generate` to generate the application key.

5. **Database Migration**: Run `php artisan migrate` to create the necessary database tables.

6. **Database seeding (optional)**: If required, you can seed the database with sample data using `php artisan db:seed`.

7. **Deploy the application**: Start the Laravel development server with `php artisan serve`.

8. **Access the application**: Open your web browser and visit `http://localhost:8000` to access the GameStore.

## Usage

-   **Admin Role**: Log in with Admin credentials to manage games, users, and orders.

-   **Customer Role**: Register or log in as a customer to browse games, add them to your shopping basket, and complete purchases.
