Car Rental Management System
Overview
The Car Rental Management System is a web application developed using Laravel, designed to facilitate the management of car rental services. The system allows users to register, browse available cars, and manage car rentals. The administration section provides features to manage cars, users, and rentals, making it an efficient tool for car rental businesses.

Features
User Registration and Authentication: Users can register, log in, and manage their profiles.
Car Management: Admins can add, edit, and delete cars available for rent.
Rental Management: Users can rent cars, and admins can view, edit, and manage rental records.
Responsive Design: The system is optimized for both desktop and mobile devices.
Security: Authentication and validation of input data to ensure the integrity of user and rental information.
Database Management: Uses SQLite to store user, car, and rental information.
Technologies Used
Framework: Laravel 10.x
Database: SQLite 3.46.1
Frontend: Blade, Tailwind CSS, Bootstrap
Version Control: Git and GitHub
Package Management: Composer, NPM
Testing: PHPUnit
Setup Instructions
Prerequisites
Ensure you have the following installed:

PHP >= 8.1
Composer
NPM
SQLite
Installation Steps
Clone the repository:

bash
Copiar código
git clone https://github.com/Lucasantunesribeiro/car_rental.git
cd car_rental
Install dependencies:

bash
Copiar código
composer install
npm install
npm run build
Set up the environment:

Copy the .env.example file to .env:
bash
Copiar código
cp .env.example .env
Generate the application key:
bash
Copiar código
php artisan key:generate
Set up the database:

Migrate the database:
bash
Copiar código
php artisan migrate
Run the application:

bash
Copiar código
php artisan serve
The application will be accessible at http://localhost:8000.

Testing
To run the test suite:

bash
Copiar código
php artisan test
Project Structure
app/Http/Controllers: Contains the controllers managing requests, such as CarController and RentController.
app/Models: Contains the Eloquent models like Car and Rent.
resources/views: Contains Blade templates for the frontend.
routes/web.php: Defines the web routes for the application.
database/migrations: Contains migration files for database schema setup.
API Endpoints
Here are the key routes available in the system:

Cars
GET /cars - List all cars
POST /cars - Create a new car
GET /cars/{id} - View a specific car
PUT /cars/{id} - Update a car
DELETE /cars/{id} - Delete a car
Rentals
GET /rents - List all rentals
POST /rents - Create a new rental
GET /rents/{id} - View a specific rental
PUT /rents/{id} - Update a rental
DELETE /rents/{id} - Delete a rental
Users
GET /users - List all users
POST /users - Register a new user
GET /users/{id} - View a specific user
PUT /users/{id} - Update a user profile
DELETE /users/{id} - Delete a user
Future Enhancements
Payment Integration: Add payment gateway for rental transactions.
Car Availability: Implement a feature to check real-time availability of cars.
User Role Management: Introduce roles like Admin, User, and Manager with specific permissions.
Notifications: Email or SMS notifications for booking confirmations and reminders.
Contributing
Feel free to contribute to the project by following these steps:

Fork the repository.
Create a new branch for your feature (git checkout -b feature/new-feature).
Commit your changes (git commit -m 'Add new feature').
Push to the branch (git push origin feature/new-feature).
Create a pull request.
