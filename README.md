# PHP_TECHSOLV_test

Welcome to the installation walkthrough for the Contact Form project! This guide will lead you through the process of setting up a dynamic web application that enables users to effortlessly submit their contact details and messages through a user-friendly form. The project leverages PHP for robust backend processing and MySQL for seamless data storage.

**Project Highlights**

Let's delve into the key highlights that the Contact Form project brings to the table:

- An intuitive contact form designed with fields for the user's full name, phone number, email address, subject, and message.

- Secured storage of submitted data within a MySQL database, ensuring easy retrieval and reference when needed.

- Automated email notifications triggered for every form submission, guaranteeing that designated recipients are always kept in the loop.

**Prerequisites**

Before embarking on the installation journey, make certain that you've ticked off the following prerequisites:

- A web server with PHP support (e.g., Apache, Nginx).

- A fully operational MySQL database server.

**Installation Steps**

Follow these systematic steps to breathe life into the Contact Form project:

**Step 1: Repository Cloning**

Commence by cloning the project repository into your web server's root directory. Execute the following command to initiate the process:

```bash
git clone https://github.com/noicyboy/PHP_TECHSOLV_test
```

If you're working with an Apache server, consider cloning the repository into the htdocs folder.

**Step 2: Launch Web Server and Configure MySQL**

Initiate your web server and double-check the operational status of your MySQL database server. It's crucial to create a fresh database exclusively for this project.

**Step 3: Database Table Setup**

Execute the provided SQL query to establish the requisite table structure within the database you've designated:

```sql
CREATE TABLE contact_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    ip_address VARCHAR(45) NOT NULL,
    timestamp TIMESTAMP NOT NULL
);
```

**Step 4: Application Access**

Launch your preferred web browser and navigate to http://localhost/folder_name_in_htdocs. Remember to replace "folder_name_in_htdocs" with the accurate name of the folder where you've cloned the repository.

By meticulously following these instructions, you'll successfully bring the Contact Form project to life on your chosen web server. If any queries arise, don't hesitate to seek assistance. Happy installation!
