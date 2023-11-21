CREATE TABLE events (
    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    resource_person VARCHAR(255),
    image VARCHAR(255),
    staff_coordinators VARCHAR(255),
    student_coordinators VARCHAR(255),
    joining_link VARCHAR(255),
    feedback_link VARCHAR(255),
    description TEXT,
    PRIMARY KEY (id)
);
CREATE TABLE blog (
    blog_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    image VARCHAR(255),
    date DATE NOT NULL,
    uploaded_by VARCHAR(255) NOT NULL,
    link VARCHAR(255)
);




CREATE TABLE admin (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password_sha VARCHAR(64) NOT NULL, 
    email VARCHAR(255) NOT NULL,
    full_name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `admin` (`admin_id`, `username`, `password_sha`, `email`, `full_name`, `created_at`) VALUES (NULL, 'code_wizy', 'd74ff0ee8da3b9806b18c877dbf29bbde50b5bd8e4dad7a3a725000feb82e8f1', 'info@codewizy.com', 'Code Wizy', current_timestamp());