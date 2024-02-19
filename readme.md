## The Ultimate MySQL crash course 2024

### Basics and first steps
- Creating and dropping databases
- Creating tables
>> CREATE TABLE students (
    id INT(2) NOT NULL,
    username VARCHAR (20),
    email VARCHAR (20),
    password VARCHAR (30)
);
- Dropping tables
>> DROP TABLE students

- Inserting into tables
>> INSERT INTO users (id, username, email, password) VALUES (1, "user1", "user1@gmail.com", "user123")
>> INSERT INTO users (id, username, email, password) VALUES (2, "user2", "user2@gmail.com", "user1234"),
(3, "user3", "user3@gmail.com", "user12345")

- Updating and deleting
>> UPDATE users SET name = "jahandar" WHERE id = 20;

DELETE FROM users WHERE id = 2;
- Data types
>>what are data types? SQL Data Type is an attribute that specifies the type of data of any object
numric
>>int, decimal
I
date
>>datetime, date, time
Character and Strings
>>varchar, text
>>null
- Operators
>> An operator is a reserved word or a character used primarily in an SQL statement's WHERE clause to
perform operation(s),
Conditional and comparison operators
>>SQL Arithmetical operators +, -, /, , %
>>SQL Comparison Operators =, !=, >, <
>>SQL Logical operators [And. Or]

### Constraints and functions
- Primary keys
>> CREATE TABLE teachers(
    id INT(2) NOT NULL,
    title VARCHAR(20),
    body TEXT,
    
    PRIMARY KEY(id)
);
- Foreign keys
- Functions


### Clauses
- Select and where
>> SELECT SUM(id) FROM workers
>> SELECT COUNT(name) FROM users
>> SUM, AVG, COUNT
>> SELECT name FROM users
>> SELECT id from users WHERE id =2
- Order by
>> SELECT * FROM teachers ORDER BY id

- Group by
>> SELECT muellim, COUNT(*) as teacher_count
>> FROM teachers
>> GROUP BY muellim;

### Alters
>> ALTER TABLE ADD FOREIGN KEY(employee_id) REFERENCES users(id)

>> ALTER TABLE workers
>> ADD CONSTRAINT employees
>> FOREIGN KEY (employee_id) >> REFERENCES workers(id);

### Wild cards
>> SELECT * FROM teachers WHERE muellim LIKE "m%";
>> SELECT * FROM teachers WHERE muellim LIKE "_lxan";
### Build complete todolist with PHP and MySQL
- Setting up
- Inserting into DB
- Pulling the data
- Deleting the data
- Updating the data