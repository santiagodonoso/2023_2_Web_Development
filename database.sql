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
  PRIMARY KEY(user_id)
) WITHOUT ROWID;

INSERT INTO users VALUES ("1", "A", "B", "@a", "password", "Admin", "1", "1");





