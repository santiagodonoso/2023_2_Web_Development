DROP TABLE IF EXISTS users;

CREATE TABLE users(
  user_id             TEXT,
  user_name           TEXT,
  user_last_name      TEXT,
  user_email          TEXT,
  user_password       TEXT,
  user_role           TEXT,
  user_created_at     TEXT,
  user_updated_at     TEXT,
  user_deleted_at     TEXT,
  PRIMARY KEY(user_id)
) WITHOUT ROWID;

-- Seeding
INSERT INTO users VALUES ("1", "A", "B", "a@a.com", "password", "Admin", "1", "0", "0");


SELECT * FROM users
WHERE user_email = '@a' 
AND user_password = 'password';




