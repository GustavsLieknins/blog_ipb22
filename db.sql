USE blog_lieknins;
CREATE TABLE posts (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(255) NOT NULL,
	category_id INT,
	FOREIGN KEY (category_id) REFERENCES categories(id)
);


INSERT INTO posts
(title)
VALUES
("My First Blog Post"),
("My Second Blog Post");

UPDATE posts
SET category_id = 1
WHERE id = 1;

UPDATE posts
SET category_id = 3
WHERE id = 2;