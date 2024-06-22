# Sound Equipment Rental

## Description

This project is a web application for managing the rental of sound equipment in Spain. Users can search and rent a variety of sound equipment for events.

## Features

- Search and filter sound equipment.
- Manage reservations and rentals.
- Secure payment through the platform.
- Admin panel to manage equipment and reservations.

## Technologies Used

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP (Symfony Framework)
- **Database:** MySQL

## Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/Neiland85/alquiler-equipos-sonido.git
    cd alquiler-equipos-sonido
    ```

2. Install PHP dependencies:

    ```bash
    composer install
    ```

3. Configure the database in the `.env.local` file:

    ```plaintext
    DATABASE_URL="mysql://user:password@127.0.0.1:3306/dbname"
    ```

4. Create the database and run migrations:

    ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    ```

5. Start the development server:

    ```bash
    symfony server:start
    ```

6. Access the application at `http://localhost:8000`.

## Usage

- Register as a user and explore the available sound equipment.
- Make a reservation and confirm payment to rent the equipment.
- Access the admin panel to manage equipment and reservations (admin only).

## Contributing

If you wish to contribute to this project, please follow these steps:

1. Fork the project.
2. Create a new branch (`git checkout -b feature/new-feature`).
3. Make your changes and commit them (`git commit -am 'Add new feature'`).
4. Push to your branch (`git push origin feature/new-feature`).
5. Open a Pull Request.

## License

This project is licensed under the MIT License. See the `LICENSE` file for more information.

## Contact

For any questions or suggestions, you can contact us at info@alquilerequipodesonido.com.
