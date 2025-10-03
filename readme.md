DataBase Name:
`royal-restaurant`

Tables Sql:

1. users

```
CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(100) NOT NULL,
  `last_name` VARCHAR(100) NOT NULL,
  `phone_number` VARCHAR(20) NOT NULL,
  `email` VARCHAR(255) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `birthdate` DATE,
  PRIMARY KEY (`id`)
);
```

2. reservation

```
CREATE TABLE `reservation` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `phone_number` VARCHAR(20) NOT NULL,
  `reservation_date` DATE NOT NULL,
  `reservation_time` TIME NOT NULL,
  `number_of_guests` INT(11) NOT NULL,
  `table_preference` VARCHAR(50),
  `status` VARCHAR(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
);
```

## Database Schema

### Database Name
`royal-restaurant`

### Tables

#### 1. `users`
| Field         | Type         | Null | Key | Extra          | Description                |
|---------------|--------------|------|-----|----------------|----------------------------|
| id            | INT(11)      | NO   | PRI | AUTO_INCREMENT | User ID (Primary Key)      |
| first_name    | VARCHAR(100) | NO   |     |                | First Name                 |
| last_name     | VARCHAR(100) | NO   |     |                | Last Name                  |
| phone_number  | VARCHAR(20)  | NO   |     |                | Phone Number               |
| email         | VARCHAR(255) | NO   | UNI |                | Email (unique)             |
| password      | VARCHAR(255) | NO   |     |                | Hashed Password            |
| birthdate     | DATE         | YES  |     |                | Birthdate                  |

```sql
CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(100) NOT NULL,
  `last_name` VARCHAR(100) NOT NULL,
  `phone_number` VARCHAR(20) NOT NULL,
  `email` VARCHAR(255) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `birthdate` DATE,
  PRIMARY KEY (`id`)
);
```

#### 2. `reservation`
| Field             | Type         | Null | Key | Extra          | Description                |
|-------------------|--------------|------|-----|----------------|----------------------------|
| id                | INT(11)      | NO   | PRI | AUTO_INCREMENT | Reservation ID             |
| name              | VARCHAR(100) | NO   |     |                | Customer Name              |
| email             | VARCHAR(255) | NO   |     |                | Customer Email             |
| phone_number      | VARCHAR(20)  | NO   |     |                | Customer Phone             |
| reservation_date  | DATE         | NO   |     |                | Reservation Date           |
| reservation_time  | TIME         | NO   |     |                | Reservation Time           |
| number_of_guests  | INT(11)      | NO   |     |                | Number of Guests           |
| table_preference  | VARCHAR(50)  | YES  |     |                | Table Preference           |
| status            | VARCHAR(20)  | NO   |     |                | Status (pending/confirmed/completed/rejected) |

```sql
CREATE TABLE `reservation` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `phone_number` VARCHAR(20) NOT NULL,
  `reservation_date` DATE NOT NULL,
  `reservation_time` TIME NOT NULL,
  `number_of_guests` INT(11) NOT NULL,
  `table_preference` VARCHAR(50),
  `status` VARCHAR(20) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
);
```

---

If you have more tables (like menu, orders, etc.), add them below as needed.
