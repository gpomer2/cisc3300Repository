CREATE DATABASE my_notes_db;

CREATE TABLE notes (
  id INT(11) NOT NULL AUTO_INCREMENT,
  title VARCHAR(80) NOT NULL,
  description TEXT NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO notes (title, description) VALUES
('Events', 'hurdles, high jump, 400m, shot put'),
('Characters', 'Batman, Superman, Flash, Green Lantern'),
('Teams', 'Bruins, Patriots, Celtics, Red Sox');

UPDATE notes
SET title = 'Updated Teams'
WHERE id = 2;

DELETE FROM notes
WHERE id = 3;

SELECT * FROM notes
ORDER BY title DESC;

SELECT * FROM notes
ORDER BY id
LIMIT 1 OFFSET 1;

SELECT * FROM notes
WHERE description REGEXP '[aeiouAEIOU]';
