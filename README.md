# To-Do List Project

This is a simple to-do list application built with PHP, MySQL, HTML, and CSS. It allows users to add, complete, and delete tasks.

## Features

- Add new tasks
- Mark tasks as complete
- Delete tasks
- Simple and user-friendly interface

## Requirements

- PHP 7.x or higher
- MySQL
- Apache (or any other web server)
- XAMPP (recommended for local development)

## Installation

1. **Clone the Repository**

    ```sh
    git clone https://github.com/your-username/todo_list.git
    ```

2. **Navigate to the Project Directory**

    ```sh
    cd todo_list
    ```

3. **Setup Database**

    - Open phpMyAdmin and create a new database named `todo_db`.
    - Import the `tasks` table using the following SQL script:

    ```sql
    CREATE TABLE tasks (
        id INT AUTO_INCREMENT PRIMARY KEY,
        task VARCHAR(255) NOT NULL,
        status TINYINT DEFAULT 0
    );
    ```

4. **Configure Database Connection**

    - Open the `db.php` file and update the database connection settings if necessary:

    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "todo_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```

5. **Run the Application**

    - Start your local server (Apache and MySQL) using XAMPP.
    - Open your web browser and navigate to `http://localhost/todo_list`.

## Usage

- **Add Task:** Enter a task in the input field and click "Add Task".
- **Complete Task:** Click the "Complete" link next to a task to mark it as complete.
- **Delete Task:** Click the "Delete" link next to a task to remove it.

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request for any improvements or bug fixes.

## License

This project is licensed under the MIT License.


