
# Car Rental Management System

## Overview
The **Car Rental Management System** is a web application developed using Laravel, designed to facilitate the management of car rental services. The system allows users to register, browse available cars, and manage car rentals. The administration section provides features to manage cars, users, and rentals, making it an efficient tool for car rental businesses.

## Features
- **User Registration and Authentication**: Users can register, log in, and manage their profiles.
- **Car Management**: Admins can add, edit, and delete cars available for rent.
- **Rental Management**: Users can rent cars, and admins can view, edit, and manage rental records.
- **Responsive Design**: The system is optimized for both desktop and mobile devices.
- **Security**: Authentication and validation of input data to ensure the integrity of user and rental information.
- **Database Management**: Uses SQLite to store user, car, and rental information.

## Technologies Used

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![SQLite](https://img.shields.io/badge/SQLite-003B57?style=for-the-badge&logo=sqlite&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)
![NPM](https://img.shields.io/badge/NPM-CB3837?style=for-the-badge&logo=npm&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)

## Setup Instructions

### Prerequisites
Ensure you have the following installed:
- PHP >= 8.1
- Composer
- NPM
- SQLite

### Installation Steps
1. Clone the repository:
   ```bash
   git clone https://github.com/Lucasantunesribeiro/car_rental.git
   cd car_rental
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install
   npm run build
   ```

3. Set up the environment:
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Generate the application key:
     ```bash
     php artisan key:generate
     ```

4. Set up the database:
   - Migrate the database:
     ```bash
     php artisan migrate
     ```

5. Run the application:
   ```bash
   php artisan serve
   ```

The application will be accessible at `http://localhost:8000`.

### Testing
To run the test suite:
```bash
php artisan test
```

## Project Structure
- **app/Http/Controllers**: Contains the controllers managing requests, such as `CarController` and `RentController`.
- **app/Models**: Contains the Eloquent models like `Car` and `Rent`.
- **resources/views**: Contains Blade templates for the frontend.
- **routes/web.php**: Defines the web routes for the application.
- **database/migrations**: Contains migration files for database schema setup.

## API Endpoints
Here are the key routes available in the system:

### Cars
- `GET /cars` - List all cars
- `GET /cars/create` - Show form to create a new car
- `POST /cars` - Create a new car
- `GET /cars/{id}` - View a specific car
- `GET /cars/{id}/edit` - Show form to edit a specific car
- `PUT /cars/{id}` - Update a car
- `DELETE /cars/{id}` - Delete a car

### Rentals
- `GET /rents/create/{carro}` - Show form to create a new rental for a specific car
- `POST /rents/alugar` - Create a new rental
- `GET /rents` - List all rentals

### Users
- `GET /users` - List all users

### User Profile
- `GET /profile` - Show the user profile edit form
- `PATCH /profile` - Update the user profile
- `DELETE /profile` - Delete the user profile
- `POST /logout` - Log out the user


## Future Enhancements
- **Payment Integration**: Add payment gateway for rental transactions.
- **Car Availability**: Implement a feature to check real-time availability of cars.
- **User Role Management**: Introduce roles like Admin, User, and Manager with specific permissions.
- **Notifications**: Email or SMS notifications for booking confirmations and reminders.

## Contributing
Feel free to contribute to the project by following these steps:
1. Fork the repository.
2. Create a new branch for your feature (`git checkout -b feature/new-feature`).
3. Commit your changes (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature/new-feature`).
5. Create a pull request.

## License
This project is open-source and available under the [MIT License](LICENSE).
